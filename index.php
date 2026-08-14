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
                            <div class="polaroid-frame">
                                <img src="./img/pdpNohan.jpg" alt="Photo de Nohan Gagnor">
                            </div>
                            <div class="social-links">
                                <a href="https://www.linkedin.com/in/nohan-gagnor-228a36354" target="_blank" class="social-link">LinkedIn</a>
                                <a href="https://github.com/Noh-an" target="_blank" class="social-git">GitHub</a>
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
                <div>
                    <h2 class="font-handwriting-bold mb-4">Mes réalisations</h2>

                    <div class="row g-5">
                        <p class="font-handwriting text-muted col-12 mb-4">Voici quelques-uns de mes projets les plus récents et pertinents, démontrant mes compétences en développement web et applicatif :</p>
                        
                        <!-- Coopenoix -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <!-- Carte du projet coopenoix dans l'index -->
                            <div class="card card-postit-yellow border-0 shadow-sm p-4 h-100 position-relative transform-rotate-left">
                                <div class="tape-effect"></div> <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div>
                                        <h5 class="card-title font-handwriting-bold">COOPENOIX</h5>
                                        <p class="card-text font-handwriting">Permettre au client de SUIVRE ET Vérifier en temps réel l'état de sa commande</p>
                                    </div>
                                    <a class="btn btn-outline-dark rounded-pill font-handwriting mt-4 align-self-start shadow-sm" data-bs-toggle="offcanvas" data-bs-target="#infoProjet1" aria-controls="infoProjet1">En savoir plus</a>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-end border-0 w-100 w-md-75" tabindex="-1" id="infoProjet1" aria-labelledby="infoProjet1">
                                <div class="offcanvas-header border-bottom-0 p-4">
                                    <h5 class="offcanvas-title font-handwriting-bold fs-3" id="titleProjet1">COOPENOIX</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                
                                <div class="offcanvas-body p-4 d-flex flex-column gap-4 align-items-center">
                                    
                                    <div class="polaroid-container">
                                        <div id="carouselProject1" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="10000">
                                                    <img src="img/connexion.png" class="d-block w-100" alt="Page de connexion">
                                                    <div class="polaroid-caption mt-3">
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Les clients de coopenoix doivent se connecter pour accéder à leurs commandes via un mot de passe et un identifiant.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/site_extranet.png" class="d-block w-100" alt="Site extranet">
                                                    <div class="polaroid-caption mt-3">
                                                        
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            l'extranet est composé d'une page d'accueil utilisateur qui affiche en temps réel le suivi des commandes, d'une page produit, catalogue et d'une page panier.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/affichageCommande.png" class="d-block w-100" alt="Affichage des commandes">
                                                    <div class="polaroid-caption mt-3">
                                                        
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le catalogue permet aux clients de selectionner les produits qu'ils souhaitent commander.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject1" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProject1" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <!-- Easy2Drive -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="card card-postit-blue border-0 shadow-sm p-4 h-100 position-relative transform-rotate-right">
                                <div class="tape-effect"></div>
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div>
                                        <h5 class="card-title font-handwriting-bold">EASY2DRIVE</h5>
                                        <p class="card-text font-handwriting">Application lourde et web de gestion complète pour auto-école (Directeurs, Formateurs et Élèves).</p>
                                    </div>
                                    <a class="btn btn-outline-dark rounded-pill font-handwriting mt-4 align-self-start shadow-sm" data-bs-toggle="offcanvas" data-bs-target="#infoProjet2" aria-controls="infoProjet2">En savoir plus</a>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-end border-0 shadow-lg w-100 w-md-75" tabindex="-1" id="infoProjet2" aria-labelledby="infoProjet2">
                                <div class="offcanvas-header border-bottom-0 p-4">
                                    <h5 class="offcanvas-title font-handwriting-bold fs-3" id="titleProjet2">EASY2DRIVE</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                
                                <div class="offcanvas-body p-4 d-flex flex-column gap-4 align-items-center">
                                    
                                    <div class="polaroid-container shadow">
                                        <div id="carouselProject2" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="10000">
                                                    <img src="img/easy2drive/directeur/directeur.png" class="d-block w-100" alt="Dashboard Easy2Drive">
                                                    <div class="polaroid-caption mt-3">

                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le dashboard du directeur lui donne un accès à toutes les informations nécessaires pour gérer son auto-école, les formateurs et les élèves.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/listeEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            La gestion des élèves permet d'ajouter un élève avec ses informations et/ou de les modifier.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/listeFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            La gestion des formateurs permet d'ajouter un formateur avec ses informations et/ou de les modifier.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/attributionEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            L'attribution des élèves aux formateurs est facilitée par le système, un formateur peut avoir plusieurs élèves et un élève ne peut avoir qu'un seul formateur.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/informationDirecteur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le directeur peut modifier ses informations personnelles et son mot de passe.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/infoAutoEcoleDirecteur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le directeur peut modifier les informations de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/formateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur n'a qu'un droit de lecture, il peut consulter ses informations, les informations de ses élèves et de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/listeEleveFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Cette page affiche la liste de ses élèves et leurs informations.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/informationFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur peut changer son mot de passe à tout moment.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/autoEcoleFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur peut consulter les informations de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/eleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le dashboard de l'élève lui permet de consulter ses informations, son formateur et son auto-école. Droit de lecture uniquement.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/infoEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Informations personnelles de l'élève et modification du mot de passe.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/infoFormateurEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            L'élève peut consulter les informations de son formateur.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProject2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                        <!-- stage 2026 -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="card card-postit-green border-0 shadow-sm p-4 h-100 position-relative transform-rotate-right">
                                <div class="tape-effect"></div>
                                <div class="card-body d-flex flex-column justify-content-between p-2">
                                    <div>
                                        <h5 class="card-title font-handwriting-bold">Stage CNAM 2026</h5>
                                        <p class="card-text font-handwriting">Stage au sein de l'équipe informatique de la Caisse Nationale d'Assurance Maladie de Dijon.</p>
                                    </div>
                                    <a class="btn btn-outline-dark rounded-pill font-handwriting mt-4 align-self-start shadow-sm" data-bs-toggle="offcanvas" data-bs-target="#infoProjet3" aria-controls="infoProjet3">En savoir plus</a>
                                </div>
                            </div>

                            <div class="offcanvas offcanvas-end border-0 shadow-lg w-100 w-md-75" tabindex="-1" id="infoProjet3" aria-labelledby="infoProjet3">
                                <div class="offcanvas-header border-bottom-0 p-4">
                                    <h5 class="offcanvas-title font-handwriting-bold fs-3" id="titleProjet2">Stage CNAM 2026</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                
                                <div class="offcanvas-body p-4 d-flex flex-column gap-4 align-items-center">
                                    
                                    <div class="polaroid-container shadow">
                                        <div id="carouselProject2" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active" data-bs-interval="10000">
                                                    <img src="img/stage/tutoDjangoSondage.png" class="d-block w-100" alt="Dashboard Easy2Drive">
                                                    <div class="polaroid-caption mt-3">

                                                        <h6 class="font-handwriting-bold">Tutoriel Django</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Ce tutoriel a pour but de présenter les fonctionnalités de Django et de montrer comment créer une application web simple.
                                                            Création d'un formulaire auto-généré pour un sondage avec un modèle de base de données, une vue et un template.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/stage/creationQuestion.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Tutoriel Django</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Formulaire permettant la création d'une question enregistré en base et affiché dans la liste des questions.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/stage/Question.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Tutoriel Django</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Possibilité de répondre à la question créée.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/stage/Vote.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Tutoriel Django</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Affichage du résultat du sondage avec le nombre de votes pour chaque réponse.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/informationDirecteur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le directeur peut modifier ses informations personnelles et son mot de passe.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/directeur/infoAutoEcoleDirecteur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Directeur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le directeur peut modifier les informations de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/formateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur n'a qu'un droit de lecture, il peut consulter ses informations, les informations de ses élèves et de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/listeEleveFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Cette page affiche la liste de ses élèves et leurs informations.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/informationFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur peut changer son mot de passe à tout moment.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/formateur/autoEcoleFormateur.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Formateur:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le formateur peut consulter les informations de son auto-école.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/eleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Le dashboard de l'élève lui permet de consulter ses informations, son formateur et son auto-école. Droit de lecture uniquement.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/infoEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            Informations personnelles de l'élève et modification du mot de passe.
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="img/easy2drive/eleve/infoFormateurEleve.png" class="d-block w-100" alt="Planning Auto-école">
                                                    <div class="polaroid-caption mt-3">
                                                        <h6 class="font-handwriting-bold">Élève:</h6>
                                                        <p class="font-handwriting text-muted small mb-0">
                                                            L'élève peut consulter les informations de son formateur.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProject2" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true" style="filter: invert(1);"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselProject2" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true" style="filter: invert(1);"></span>
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