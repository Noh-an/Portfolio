<?php include 'head.php'; ?>
<body>
    <main>
        <div class="container">
            <h1>Contact</h1>
            <p>Vous pouvez me contacter via les moyens suivants :</p>
            <div class="contact-info">
                <ul>
                    <li>Email : <a href="mailto:">contact@exemple.com</a></li>
                    <li>LinkedIn : <a href="https://www.linkedin.com/in/votre-profil" target="_blank">Votre Profil LinkedIn</a></li>
                </ul>
            </div>
            <div class="contact_form">
                <p>Envoyez-moi un message</p>
                <form action="send_message.php" method="post">
                    <fieldset>

                        <legend>Formulaire de contact</legend>
                        <label for="name">Nom :</label>
                        <input type="text" id="name" name="name" required>

                        <label for="first_name">Prénom :</label>
                        <input type="text" id="first_name" name="first_name" required>

                        <label for="email">Email :</label>
                        <input type="email" id="email" name="email" required>

                        <label for="message">Message :</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                        <button type="submit">Envoyer</button>
                        
                    </fieldset>
                </form>

            </div>
        </div>
    </main>
</body>