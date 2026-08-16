<?php 
session_start();

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];

// Récupération des retours de session
$errors = $_SESSION['errors'] ?? [];
$error = $_SESSION['error'] ?? null;
$success = $_SESSION['success'] ?? null;
$old = $_SESSION['old'] ?? [];

// Nettoyage de la session après lecture
unset($_SESSION['errors'], $_SESSION['error'], $_SESSION['success'], $_SESSION['old']);

include 'head.php'; 
?>
<body>
<?php include 'header.php'; ?>

    <main>
        <div class="container">
            <div class="contact-intro">
                <h1>Me contacter</h1>
                <p>Si mon profil vous intéresse ou que vous avez des questions sur mon parcours, n'hésitez pas à remplir le formulaire !</p>
            </div>

            <div class="contact-container">
                <div class="contact-form">
                    
                    <!-- Affichage des alertes -->
                    <?php if ($success): ?>
                        <div class="alert alert-success"><?= htmlspecialchars($success) ?></div>
                    <?php endif; ?>

                    <?php if ($error): ?>
                        <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
                    <?php endif; ?>

                    <?php if (!empty($errors)): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach ($errors as $e): ?>
                                    <li><?= htmlspecialchars($e) ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="send_message.php" method="post">
                        <fieldset>
                            <!-- Honeypot -->
                            <div style="position: absolute; left: -9999px;" aria-hidden="true">
                                <input type="text" name="site_web" tabindex="-1" autocomplete="off">
                            </div>

                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">

                            <div id="name-fields">
                                <div class="form-group">
                                    <label for="name">Nom :</label>
                                    <input type="text" id="name" name="name" maxlength="30" value="<?= htmlspecialchars($old['name'] ?? '') ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">Prénom :</label>
                                    <input type="text" id="first_name" name="first_name" maxlength="30" value="<?= htmlspecialchars($old['first_name'] ?? '') ?>" required>
                                </div>
                            </div>

                            <label for="email">Email :</label><br>
                            <input type="email" id="email" name="email" value="<?= htmlspecialchars($old['email'] ?? '') ?>" required><br><br>

                            <label>Sujet :</label><br>
                            <?php 
                            $selected_subjects = $old['subject'] ?? [];
                            $options = [
                                'stage' => "Proposition de stage",
                                'alternance' => "Proposition d'alternance",
                                'question' => "Question générale",
                                'autre' => "Autre"
                            ];
                            foreach ($options as $key => $label): 
                                $checked = in_array($key, (array)$selected_subjects, true) ? 'checked' : '';
                            ?>
                                <label>
                                    <input type="checkbox" name="subject[]" value="<?= $key ?>" <?= $checked ?>>
                                    <?= $label ?>
                                </label><br>
                            <?php endforeach; ?><br>

                            <label for="message">Message :</label><br>
                            <textarea id="message" name="message" rows="5" maxlength="5000" required><?= htmlspecialchars($old['message'] ?? '') ?></textarea><br><br>
                            
                            <button type="submit">Envoyer</button>
                        </fieldset>
                    </form>
                </div>

                <div class="contact-info">
                    <div id="links">
                        <ul>
                            <li><a href="mailto:nohan.portfolio@gmail.com" class="social-link">Email</a></li>
                            <li><a href="https://github.com/Noh-an" target="_blank" class="social-link">GitHub</a></li>
                            <li><a href="https://www.linkedin.com/in/nohan-gagnor-228a36354" target="_blank" class="social-link">LinkedIn</a></li>
                            <li><a href="https://www.google.com/maps/search/?api=1&query=21000+Dijon" target="_blank" class="adresse">21000, Dijon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>
</body>