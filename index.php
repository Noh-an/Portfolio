<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <main>
        <!-- Section Introduction -->
        <section id="introduction">
            <div class="container">

                <!-- row : 2 colonnes côte à côte sur md+, empilées sur mobile -->
                <!-- align-items-center : centrage vertical des deux colonnes  -->
                <!-- gy-4 : espace vertical entre les colonnes quand elles s'empilent sur mobile -->
                <div class="row align-items-center gy-4">

                    <!-- Colonne TEXTE — gauche (7/12 sur md+, pleine largeur sur mobile) -->
                    <div class="col-12 col-md-7">
                        <div class="intro">
                            <p class="lean">Bonjour, je suis</p>
                            <h1 class="title-intro">Nohan Gagnor</h1>

                            <div class="descr-intro">
                                <p>
                                    Étudiant en BTS SIO <strong>SLAM</strong> — passionné par le développement web et les nouvelles technologies.
                                    Je construis des projets concrets pour apprendre et évoluer.
                                </p>
                            </div>

                            <div class="boutons">
                                <a id="btn-contact" href="contact.php" class="">Me contacter</a>
                                <a id="btn-projets" href="#projets" class="">Mes projets</a>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne IMAGE — droite (5/12 sur md+, pleine largeur sur mobile) -->
                    <!-- text-center : centre l'image horizontalement dans sa colonne -->
                    <div class="col-12 col-md-5 text-center">
                        <div class="polaroid">
                            <img src="./img/photo.png"
                                 alt="Photo de Nohan Gagnor">
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/nohan-gagnor/" target="_blank" class="social-link">LinkedIn</a>
                                <a href="https://github.com/nohangagnor" target="_blank" class="social-git">GitHub</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- section Présentation -->
        <section id="presentation">
            <div class="layout-container">
                <!-- moi -->
                <div class="layout-column text">
                    <h2 class="card about-me">A propos</h2>
                    <article class="card text-card">
                        <p>Je m'appelle Nohan GAGNOR, 20 ans, basé à Dijon. Actuellement étudiant en BTS SIO option SLAM au lycée polyvalent Le Castel, je suis passionné par le développement de solutions logicielles performantes et méthodiques.</p>
                        <p>Mon parcours m'a permis de développer une approche rigoureuse du développement, combinant perfectionnisme et esprit d'équipe. Je suis constamment en quête d'apprentissage et de montée en compétences sur les technologies web et applicatives.</p>
                    </article>
                    <h4 class="card soft-skills">Créatif organisé empathique</h4>
                </div>

                <!-- mes informations -->
                <div class="layout-column info">
                    <div class="card info-card">
                        <h3>Informations</h3>
                        <ul>
                            <li><strong>Âge :</strong> 20 ans</li>
                            <li><strong>Localisation :</strong> Dijon, France</li>
                            <li><strong>Formation :</strong> BTS SIO option SLAM</li>
                        </ul>
                    </div>
                    <!-- objectif et compétences -->
                    <div class="card objectif-card">
                        <h3>Mon objectif</h3>
                        <p>Mon objectif est de devenir un développeur web et applicatif complet, capable de concevoir et de réaliser des projets  innovants et performants. Je souhaite contribuer à des équipes dynamiques et engagées dans l'excellence technique.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="competences">
            
                <h2>Compétences</h2>
            <div class="skills-container">  
                <div class="card languages">
                    <img accesskey="" src="">
                    <h4>Languages</h4>

                    <ul>
                        <li>HTML</li>
                        <li>CSS</li>
                        <li>JavaScript</li>
                        <li>PHP</li>
                        <li>JAVA</li>
                        <li>Python</li>
                    </ul>
                </div>

                <div class="card bdd">
                    <img accesskey="" src="">
                    <h4>Base de données</h4>

                    <ul>
                        <li>SQL</li>
                        <li>MySQL</li>
                        <li>dbGate</li>
                    </ul>
                </div>

                <div class="card frameworks">
                    <img accesskey="" src="">
                    <h4>Frameworks et outils</h4>

                    <ul>
                        <li>Bootstrap</li>
                        <li>Django</li>
                        <li>Git</li>
                        <li>Visual Studio Code</li>
                        <li>intellij IDEA</li>
                        <li>Oracle Virtual Box</li>
                    </ul>
                </div>

                <div class="card langue">
                    <img accesskey="" src="">
                    <h4>Langues</h4>

                    <ul>
                        <li>Français (natif)</li>
                        <li>Anglais (B1)</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="projets">
            <div class="container">
                <div class="">
                    <p class="">Projets</p>
                    <h2 class="">Mes réalisations</h2>

                    <div class="">
                        <p>Voici quelques-uns de mes projets les plus récents et pertinents, démontrant mes compétences en développement web et applicatif :</p>
                        
                        <!-- /********** PROJET 1 **********/ -->
                        <div class="row gy-4 gy-md-4 gy-lg-4">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <img src="img/site_extranet.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">COOPENOIX</h5>
                                        <p class="card-text">Permettre au client de SUIVRE ET Vérifier en temps réel l'état de sa commande</p>
                                        <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoProjet1"
                                  aria-controls="infoProjet1">En savoir plus</a>
                                    </div>
                                    <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet1"
                                  aria-labelledby="titelProjet1">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="titelProjet1">COOPENOIX</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                      aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <!-- Carousel -->
                                            <div id="carouselProject1" class="carousel slide shadow h-100" data-bs-ride="carousel" data-bs-touch="true">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item h-100 active" data-bs-interval="10000">
                                                        <!-- le lien permet d'afficher 1 images aléatoirement(il contient sa taille et le chemin) -->
                                                        <img src="img/site_extranet.png" class="d-block w-100" alt="Image slide 1">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Site extranet</h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item h-100" >
                                                        <img src="img/connexion.png" class="d-block w-100" alt="Image slide 2">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Page de connexion</h5>
                                                            <p>Les clients de coopenoix doivent se connecter pour acceder à leurs commandes via un mot de passe et un identifiant</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item h-100">
                                                        <img src="img/affichageCommande.png" class="d-block w-100" alt="Image slide 3">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Affichage des commandes</h5>
                                                            <p>Les clients peuvent visualiser l'état de leurs commandes en temps réel.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProject1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- /********** PROJET 2  **********/ -->
                        <div class="row gy-4 gy-md-4 gy-lg-4">
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="card">
                                    <img src="img/site_extranet.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">COOPENOIX</h5>
                                        <p class="card-text">Permettre au client de SUIVRE ET Vérifier en temps réel l'état de sa commande</p>
                                        <a class="btn btn-primary" data-bs-toggle="offcanvas" data-bs-target="#infoProjet1"
                                  aria-controls="infoProjet1">En savoir plus</a>
                                    </div>
                                    <div class="offcanvas offcanvas-bottom h-100" tabindex="-1" id="infoProjet1"
                                  aria-labelledby="titelProjet1">
                                        <div class="offcanvas-header">
                                            <h5 class="offcanvas-title" id="titelProjet1">COOPENOIX</h5>
                                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                      aria-label="Close"></button>
                                        </div>
                                        <div class="offcanvas-body">
                                            <!-- Carousel -->
                                            <div id="carouselProject1" class="carousel slide shadow h-100" data-bs-ride="carousel" data-bs-touch="true">
                                                <div class="carousel-inner h-100">
                                                    <div class="carousel-item h-100 active" data-bs-interval="10000">
                                                        <!-- le lien permet d'afficher 1 images aléatoirement(il contient sa taille et le chemin) -->
                                                        <img src="img/site_extranet.png" class="d-block w-100" alt="Image slide 1">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Site extranet</h5>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item h-100" >
                                                        <img src="img/connexion.png" class="d-block w-100" alt="Image slide 2">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Page de connexion</h5>
                                                            <p>Les clients de coopenoix doivent se connecter pour acceder à leurs commandes via un mot de passe et un identifiant</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item h-100">
                                                        <img src="img/affichageCommande.png" class="d-block w-100" alt="Image slide 3">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h5>Affichage des commandes</h5>
                                                        <p></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProject1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>