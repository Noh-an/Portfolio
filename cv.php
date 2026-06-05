<?php include 'head.php'; ?>

<body>

    <?php include 'header.php'; ?>
    <main>
        <section id="cv">
            <div class="container">

                <!-- entête du cv -->

                <div class="download-cv">
                    <button href="assets/cv-nohan-gagnor.pdf" download="cv-nohan-gagnor.pdf">Télécharger mon CV</button>
                </div>
                <div class="cv-header">
                    <div class="cv-logo">
                        <img src="assets/cv-logo.png" alt="CV Logo">
                    </div>
                   <div class="cv-header-info">
                        <h1>Nohan Gagnor</h1>
                        <div class="cv-title">// Étudiant BTS SIO SLAM — 2ème année</div>
                   </div>
                   <div class="cv-contact">
                        <span class="cv-mail"> nohan.gagnor@gmail.com</span>
                        <span class="cv-contact-item">07 82 23 19 79</span>
                        <span class="cv-contact-item">Dijon, 21000</span>
                        <span class="cv-contact-item">https://github.com/Noh-an</span>
                   </div>
                </div>

                <!-- corps du cv -->
                <div class="cv-body">
                    <!-- colonne de gauche -->
                    <div class="cv-main">

                        <!-- formation -->
                        <div class="cv-section">
                            <div class="cv-section-title">Formation</div>
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>BTS Services Informatiques aux Organisations</h3></div>
                                    <div class="cv-item-date">2025 - 2027</div>
                                </div>
                                <div class="cv-item-subtitle">Option SLAM - Lycée polyvalent Le Castel, Dijon</div>
                                <div class="cv-item-description">Développement d'applications, bases de données, réseaux & sécurité, gestion de projet informatique.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>Dispositif en  Amont de la Qualification</h3></div>
                                    <div class="cv-item-date">2024 - 2025</div>
                                </div>
                                <div class="cv-item-subtitle">Année de césure</div>
                                <div class="cv-item-description">Recherche de formation en adéquation avec mes aspirations professionnelles.</div>
                            </div>
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>Baccalauréat STI2D</h3></div>
                                    <div class="cv-item-date">2023 - 2024</div>
                                </div>
                                <div class="cv-item-subtitle">Option SIN - Lycée polyvalent Clos Maire, Beaune</div>
                                <div class="cv-item-description">Réalisation de projets concrets mêlant l'ingénierie, l'énergie, l'informatique et l'éco-conception.</div>
                            </div>
                        </div>

                        <!-- experience professionnelle -->
                        <div class="cv-section">
                            <div class="cv-section-title">Expériences</div>

                            <!-- EASY2DRIVE -->
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>Projet EASY2DRIVE - BTS SIO</h3></div>
                                    <div class="cv-item-date">2026 - 2 sem.</div>
                                </div>
                                <div class="cv-item-subtitle">Développement d'un espace “Pro”</div>
                                <div class="cv-item-description">
                                    <p>Espace “Pro” dans lequel les auto-écoles pourront inscrire leurs élèves et leur affecter un formateur qui suivra leur formation</p>
                                    <ul>
                                        <li>Création d'une page web pour la gestion et le suivi des utilisateurs(HTML, CSS, PHP)</li>
                                        <li>Conception de bases de données pour le stockage des informations et logs (MySQL)</li>
                                        <li>Création des droits utilisateurs sur la base de données</li>
                                        <li>Sécurisation de l'application contre les attaques XSS et SQL Injection(PHP)</li>
                                        <li>Utilisation de Git pour la gestion de version du projet</li>
                                        <li>Documentation du projet(Dokuwiki)</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- COOPENOIX -->
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>Projet COOPENOIX - BTS SIO</h3></div>
                                    <div class="cv-item-date">2025 - 1 sem.</div>
                                </div>
                                <div class="cv-item-subtitle">Suivi des commandes clients</div>
                                <div class="cv-item-description">
                                    <ul>
                                        <li>Création d'une page web pour le suivi des commandes des clients.(HTML, CSS)</li>
                                        <li>Conception d'une base de données pour stocker les informations (MySQL)</li>
                                        <li>Création des droits utilisateurs avec script bash</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- hillebrand gori -->
                            <div class="cv-item">
                                <div class="cv-header">
                                    <div class="cv-item-title"><h3>Stage d'observation - Hillebrand Gori</h3></div>
                                    <div class="cv-item-date">février 2025 - 2 sem.</div>
                                </div>
                                <div class="cv-item-subtitle">Intégration du Service Informatique</div>
                                <div class="cv-item-description">
                                    <ul>
                                        <li>Découverte du fonctionnement d'un service informatique au sein d'une entreprise de logistique.</li>
                                        <li>Participation à la maintenance et à l'assistance technique des utilisateurs.</li>
                                        <li>Participation aux challenges PHP sur le site internet Tainix</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- colonne latérale -->
                <div class="cv-sidebar">

                    <!-- Compétences techniques -->
                    <div class="cv-section">
                    <div class="cv-section-title">Compétences</div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>HTML / CSS</span>
                        <!-- <span class="side-skill-pct">72%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:72%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>Python</span>
                        <!-- <span class="side-skill-pct">60%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:60%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>JAVA</span>
                        <!-- <span class="side-skill-pct">38%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:38%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>PHP</span>
                        <!-- <span class="side-skill-pct">38%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:38%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>SQL / MySQL</span>
                        <!-- <span class="side-skill-pct">58%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:58%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>JavaScript</span>
                        <!-- <span class="side-skill-pct">52%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:52%"></div></div> -->
                    </div>
                    <div class="side-skill-item">
                        <div class="side-skill-header">
                        <span>Git</span>
                        <!-- <span class="side-skill-pct">50%</span> -->
                        </div>
                        <!-- <div class="skill-bar-bg"><div class="skill-bar-fill" style="width:50%"></div></div> -->
                    </div>
                    </div>

                    <!-- Langues -->
                    <div class="cv-section">
                    <div class="cv-section-title">Langues</div>
                    <div class="cv-lang-item">
                        <span>🇫🇷 Français</span>
                        <span class="lang-level">Natif</span>
                    </div>
                    <div class="cv-lang-item">
                        <span>🇬🇧 Anglais</span>
                        <span class="lang-level">B1 — Tech</span>
                    </div>
                    <div class="cv-lang-item">
                        <span>🇪🇸 Espagnol</span>
                        <span class="lang-level">A2</span>
                    </div>
                    </div>

                    <!-- Centres d'intérêt -->
                    <div class="cv-section">
                    <div class="cv-section-title">Intérêts</div>
                    <div class="cv-interests">
                        <span class="interest-tag">Musique</span>
                        <span class="interest-tag">Sport</span>
                        <span class="interest-tag">Films/Séries</span>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'footer.php'; ?>
</body>