<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/../config.php';
require __DIR__ . '/../PHPMailer/src/PHPMailer.php';
require __DIR__ . '/../PHPMailer/src/SMTP.php';
require __DIR__ . '/../PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit('Méthode non autorisée.');
}

// 1. Vérification CSRF
if (empty($_POST['csrf_token']) || empty($_SESSION['csrf_token']) || !hash_equals($_SESSION['csrf_token'], $_POST['csrf_token'])) {
    http_response_code(403);
    exit("Requête invalide.");
}

// 2. Honeypot anti-bot
if (!empty($_POST['site_web'])) {
    header('Location: ../contact.php');
    exit;
}

// 3. Rate Limiting (1 envoi toutes les 60 secondes)
if (isset($_SESSION['last_email_time']) && (time() - $_SESSION['last_email_time']) < 60) {
    $_SESSION['error'] = "Veuillez attendre une minute avant d'envoyer un nouveau message.";
    $_SESSION['old'] = $_POST;
    header('Location: ../contact.php');
    exit;
}

// 4. Récupération et nettoyage
$nom = trim($_POST['name'] ?? '');
$prenom = trim($_POST['first_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$sujets = $_POST['subject'] ?? [];

// 5. Validation
$erreurs = [];
if ($nom === '' || mb_strlen($nom) > 30) $erreurs[] = "Le nom est invalide (30 caractères max).";
if ($prenom === '' || mb_strlen($prenom) > 30) $erreurs[] = "Le prénom est invalide (30 caractères max).";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erreurs[] = "L'adresse email est invalide.";
if ($message === '' || mb_strlen($message) > 5000) $erreurs[] = "Le message est vide ou dépasse 5000 caractères.";

$sujets_autorises = [
    'stage' => "Proposition de stage",
    'alternance' => "Proposition d'alternance",
    'question' => "Question générale",
    'autre' => "Autre",
];

$sujets_valides = [];
foreach ((array) $sujets as $s) {
    if (isset($sujets_autorises[$s])) {
        $sujets_valides[] = $sujets_autorises[$s];
    }
}
if (empty($sujets_valides)) {
    $erreurs[] = "Merci de choisir au moins un sujet.";
}

// En cas d'erreur : stockage en session et redirection
if (!empty($erreurs)) {
    $_SESSION['errors'] = $erreurs;
    $_SESSION['old'] = $_POST;
    header('Location: ../contact.php');
    exit;
}

// 6. Envoi du mail
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host = SMTP_HOST;
    $mail->SMTPAuth = true;
    $mail->Username = SMTP_USER;
    $mail->Password = SMTP_PASS;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    $mail->CharSet = 'UTF-8';

    $mail->setFrom('nohan.portfolio@gmail.com', 'Formulaire de contact');
    $mail->addAddress('nohan.portfolio@gmail.com');
    $mail->addReplyTo($email, $prenom . ' ' . $nom);

    $mail->isHTML(false);
    $mail->Subject = "Contact : " . implode(', ', $sujets_valides);
    $mail->Body = 
        "Nouveau message depuis le formulaire de contact\n\n" .
        "Nom : $nom\n" .
        "Prénom : $prenom\n" .
        "Email : $email\n" .
        "Sujet(s) : " . implode(', ', $sujets_valides) . "\n\n" .
        "Message :\n$message\n";

    $mail->send();

    // Mettre à jour le timestamp et réinitialiser le token CSRF
    $_SESSION['last_email_time'] = time();
    unset($_SESSION['csrf_token']);
    $_SESSION['success'] = "Votre message a bien été envoyé !";

    header('Location: ../contact.php');
    exit;
} catch (Exception $e) {
    error_log("Erreur mail : {$mail->ErrorInfo}");
    $_SESSION['error'] = "Le message n'a pas pu être envoyé, réessayez plus tard.";
    $_SESSION['old'] = $_POST;
    header('Location: ../contact.php');
    exit;
}