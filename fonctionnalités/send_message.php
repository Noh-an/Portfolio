<?php
declare(strict_types=1);
session_start();
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// On n'accepte que les requêtes POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
 http_response_code(405);
 die('Méthode non autorisée.');
}
// --- 1. Récupération brute des données ---
$nom = trim($_POST['name'] ?? '');
$prenom = trim($_POST['first_name'] ?? '');
$email = trim($_POST['email'] ?? '');
$message = trim($_POST['message'] ?? '');
$sujets = $_POST['subject'] ?? []; // tableau, car <select multiple>

// --- 2. Validation ---
$erreurs = [];
if ($nom === '' || mb_strlen($nom) > 30) {
 $erreurs[] = "Le nom est invalide.";
}
if ($prenom === '' || mb_strlen($prenom) > 30) {
 $erreurs[] = "Le prénom est invalide.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 $erreurs[] = "L'adresse email est invalide.";
}
if ($message === '' || mb_strlen($message) > 5000) {
 $erreurs[] = "Le message est vide ou trop long.";
}

// Liste blanche des sujets autorisés
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
 $erreurs[] = "Merci de choisir un sujet.";
}
if (!empty($erreurs)) {
 // On arrête tout et on renvoie les erreurs
 die(implode('<br>', array_map('htmlspecialchars', $erreurs)));
}

$mail = new PHPMailer(true);
try {
 // --- Config SMTP ---
 $mail->isSMTP();
 $mail->Host = 'smtp.exemple.fr';
 $mail->SMTPAuth = true;
 $mail->Username = 'contact@tonsite.fr';
 $mail->Password = getenv('SMTP_PASSWORD'); // jamais en clair dans le code !
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
 $mail->Port = 587;
 $mail->CharSet = 'UTF-8';
 // --- Expéditeur / destinataire ---
 $mail->setFrom('contact@tonsite.fr', 'Formulaire de contact');
 $mail->addAddress('toi@tonsite.fr');
 // Répondre directement à l'utilisateur (après validation de son email)
 $mail->addReplyTo($email, $prenom . ' ' . $nom);
 // --- Contenu ---
 $mail->isHTML(false); // texte simple : plus sûr, pas besoin d'échapper pour le XSS
 $mail->Subject = implode(', ', $sujets_valides); // objet = sujet(s) choisi(s)
 $mail->Body =
 "Nouveau message depuis le formulaire de contact\n\n" .
 "Nom : $nom\n" .
 "Prénom : $prenom\n" .
 "Email : $email\n" .
 "Sujet : " . implode(', ', $sujets_valides) . "\n\n" .
 "Message :\n$message\n";
 $mail->send();
 header('Location: merci.html');
 exit;
} catch (Exception $e) {
 error_log("Erreur mail : {$mail->ErrorInfo}");
 die("Le message n'a pas pu être envoyé, réessaie plus tard.");
}

// --- Protection injection d'en-têtes mail ---
if (!empty($email) ){
    !filter_var($email, FILTER_VALIDATE_EMAIL) or die("Adresse email invalide.");
}