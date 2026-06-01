<?php include 'head.php'; ?>

<body>
    <?php include 'header.php'; ?>
    <main>
        <!-- Section Introduction -->
        <section id="introduction" class="">
            <div class="container"> 
                <div class="">
            
                    <div class="intro">
                        <p class="">Bonjour, je suis</p>
                        <h1 class="">Nohan Gagnor</h1>
                        
                        <div class="">
                            <p class="">
                                Étudiant en BTS SIO <strong>SLAM</strong> — passionné par le développement web et les nouvelles technologies. 
                                Je construis des projets concrets pour apprendre et évoluer.
                            </p>
                        </div>

                        <div class="boutons">
                            <a id="btn-contact" href="contact.php" class="">Me contacter</a>
                            <a id="btn-projets" href="#projets" class="">Mes projets</a>
                        </div>
                    </div>
            
                    <div class="">
                        <img src="./img/photo.png" alt="Photo de Nohan Gagnor" class="img-fluid rounded-circle shadow" style="max-width: 20%;">
                    </div>
                    
                    <div class="social-links">
                        <a href="https://www.linkedin.com/in/nohan-gagnor/" target="_blank" class="social-link">LinkedIn</a>
                        <a href="https://github.com/nohangagnor" target="_blank" class="social-link">GitHub</a>
                    </div>

                </div>
            </div>
        </section>

        <!-- section Présentation -->
        <section id="presentation">
            <div class="container">
                <div class="">
                    
                    <!-- moi -->
                    <p class="">A propos</p>
                    <h2 class="">Créatif, organisé, empathique</h2>
                    
                    <div class="">
                        <p>Je suis Nohan GAGNOR, 20 ans, basé à Dijon. Actuellement étudiant en BTS SIO option SLAM au lycée polyvalent Le Castel, je suis passionné par le développement de solutions logicielles performantes et méthodiques.</p>
                        <p>Mon parcours m'a permis de développer une approche rigoureuse du développement, combinant perfectionnisme et esprit d'équipe. Je suis constamment en quête d'apprentissage et de montée en compétences sur les technologies web et applicatives.</p>
                    </div>

                    <!-- mes informations -->
                    <div class="">
                        <h3>Informations</h3>

                        <ul>
                            <li><strong>Âge :</strong> 20 ans</li>
                            <li><strong>Localisation :</strong> Dijon, France</li>
                            <li><strong>Formation :</strong> BTS SIO option SLAM</li>
                        </ul>
                    </div>

                    <!-- objectif et compétences -->
                    <div class="">
                        <h3>Mon objectif</h3>

                        <p>Mon objectif est de devenir un développeur web et applicatif complet, capable de concevoir et de réaliser des projets  innovants et performants. Je souhaite contribuer à des équipes dynamiques et engagées dans l'excellence technique.</p>
                    </div>

                    <div class="">
                        <h3>Compétences</h3>
                        
                        <div class="">
                            <img accesskey="" src="./img/languages.png" alt="Languages" class="img-fluid" style="max-width: 50px;">
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

                        <div class="">
                            <img accesskey="" src="./img/languages.png" alt="Languages" class="img-fluid" style="max-width: 50px;">
                            <h4>Base de données</h4>

                            <ul>
                                <li>SQL</li>
                                <li>MySQL</li>
                                <li>dbGate</li>
                            </ul>
                        </div>

                        <div class="">
                            <img accesskey="" src="./img/languages.png" alt="Languages" class="img-fluid" style="max-width: 50px;">
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

                        <div class="">
                            <img accesskey="" src="./img/languages.png" alt="Languages" class="img-fluid" style="max-width: 50px;">
                            <h4>Langues</h4>

                            <ul>
                                <li>Français (natif)</li>
                                <li>Anglais (B1)</li>
                            </ul>
                        </div>
                    </div>
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