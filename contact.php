<?php 
session_start();
// --- Sur la page qui affiche le formulaire ---
if (empty($_SESSION['csrf_token'])) {
 $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrf_token = $_SESSION['csrf_token'];
include 'head.php'; 
?>
<body>
<?php include 'header.php';?>

    <main>
        <div class="container">
            <div class="contact-intro">
                <h1>Me contacter</h1>
                <p>Si mon profil vous interesse ou que vous avez de questions sur mon parcours, n'hésitez pas à remplir le formulaire !</p>
            </div>

            <div class="contact-container">
                <div class="contact-form">
                    <form action="send_message.php" method="post">
                        <fieldset>
                            <!-- Champ invisible pour les robots (honeypot) -->
                            <input type="text" name="site_web" style="display:none" tabindex="-1" autocomplete="off">
                            <!-- Jeton anti-CSRF généré en PHP -->
                            <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($csrf_token) ?>">
                            <div id="name-fields">
                                <div class="form-group">
                                    <label for="name">Nom :</label>
                                    <input type="text" id="name" name="name" required>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">Prénom :</label>
                                    <input type="text" id="first_name" name="first_name" required>
                                </div>
                            </div>

                            <label for="email">Email :</label><br>
                            <input type="email" id="email" name="email" required><br><br>

                            <label for="subject">Sujet :</label><br>
                            <select id="subject" name="subject[]" multiple size="4">
                                <option value="stage">Proposition de stage</option>
                                <option value="alternance">Proposition d'alternance</option>
                                <option value="question">Question générale</option>
                                <option value="autre">Autre</option>
                            </select><br><br>

                            <label for="message">Message :</label><br>
                            <textarea id="message" name="message" rows="5" required></textarea><br><br>
                            
                            <button type="submit">Envoyer</button>
                        </fieldset>
                    </form>
                </div>

                <div class="contact-info">
                    <div id="links">
                        <ul>
                            <li><a href="mailto:gagnor.nohan@gmail.com" class="social-link">Email</a></li>
                            <li><a href="https://github.com/Noh-an" target="_blank" class="social-link">GitHub.com/Noh-an</a></li>
                            <li><a href="https://www.linkedin.com/in/nohan-gagnor/" target="_blank" class="social-link">LinkedIn</a></li>
                            <li><a href="address:21000, Dijon" class="adresse">21000, Dijon</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>
</body>