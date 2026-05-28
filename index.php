<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>

    <main>
        <!-- section Introduction -->
        <div class="container">
            <section id="presentation">
            <!-- enferme le contenu dans un carré -->
                <!-- Introduction avec nom, photo et description -->
                <div class="faire row boostrap pour centrer le contenu">
                    <div class="mettre dans colonne gauche">
                        <p>Bonjour, je suis</p>
                        <h1>Nohan Gagnor</h1>
                    </div>
                    
                    <div class="mettre dans colonne droite">
                        <img src="./img/photo.png" alt="Photo de profil" class="ms-auto align-self-start" width="50%" >
                    </div>

                    <div class="mettre en bas de nom et prenom dans une colonne a gauche">
                        <div class="intro">
                            <p>Étudiant en BTS SIO <strong>SLAM</strong> — passionné par le développement web et les nouvelles technologies. Je construis des projets concrets pour apprendre et évoluer.</p>
                        </div>

                        <!-- boutons de contact et projets -->
                        <div>
                            <a id="btn-contact" href="contact.php">
                                <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Me contacter</span>
                            </a>

                            <a id="btn-projets" href="#projets">
                                <span class="bg-primary bg-gradient p-1 rounded-3 text-light">Mes projets</span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <!-- section Présentation -->
        <section id="presentation">
            <div class="container">
                <h2>Présentation</h2>
                <p>Contenu de la section présentation...</p>
            </div>
        </section>

    </main>