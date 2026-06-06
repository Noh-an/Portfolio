<?php include 'head.php'; ?>
<body>
    <?php include 'header.php'; ?>

    <main>
        <div class="container">
            <div class="contact-intro">
                <h1>Me contacter</h1>
                <p>Si mon profil vous interesse ou que vous avez de questions sur mon parcours, n'hésitez pas à remplir le formulaire !</p>
            </div>
            
            <div class="contact_form">
                <form action="send_message.php" method="post">
                    <!-- Le fieldset dessine le contour noir/gris natif autour de tout le formulaire -->
                    <fieldset>
                        <legend>Formulaire de contact</legend>
                        
                        <label for="name">Nom :</label><br>
                        <input type="text" id="name" name="name" required><br><br>

                        <label for="first_name">Prénom :</label><br>
                        <input type="text" id="first_name" name="first_name" required><br><br>

                        <label for="email">Email :</label><br>
                        <input type="email" id="email" name="email" required><br><br>

                        <label for="subject">Sujet :</label><br>
                        <!-- Ajout de name="subject[]" pour que le PHP reçoive les choix multiples -->
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
                <ul>
                    <li><a href="mailto:gagnor.nohan@gmail.com" class="social-link">Email</a></li>
                    <li><a href="https://github.com/nohangagnor" target="_blank" class="social-link">GitHub.com/nohangagnor</a></li>
                    <li><a href="https://www.linkedin.com/in/nohan-gagnor/" target="_blank" class="social-link">LinkedIn</a></li>
                    <li><a href="address:21000, Dijon" class="adresse">21000, Dijon</a></li>
                </ul>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </main>
</body>