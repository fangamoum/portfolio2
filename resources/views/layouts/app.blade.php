<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mamady Fangamou - Développeur Full Stack</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/styles.css">

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Mamady Fangamou</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#accueil">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#apropos">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#competences">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projets">Projets</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#formation">Formation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="hero-section">
        <div class="hero-bg"></div>
        <div class="floating-elements">
            <div class="floating-element element-1"></div>
            <div class="floating-element element-2"></div>
            <div class="floating-element element-3"></div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content" data-aos="fade-right">
                    <h1 class="hero-title">Mamady Fangamou</h1>
                    <h2 class="hero-subtitle">Développeur web & gestionnaire de base de données</h2>
                    <p class="mb-4">Passionné par le développement web et la gestion de bases de données. Curieux et autonome, j'ai un esprit analytique et une bonne capacité à résoudre des problèmes.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#projets" class="btn btn-light btn-lg">Voir mes projets</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg">Me contacter</a>
                        <a href="CV/CV de Mamady Fangamou.pdf" class="btn btn-download">
                            <i class="fas fa-download"></i> Télécharger CV
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center mt-5 mt-lg-0" data-aos="fade-left">
                    <div class="profile-container">
                        <div class="profile-img">
                            <!-- Remplacez par votre photo -->
                            <img src="assets/images/profil.jpeg" alt="Mamady Fangamou">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- À propos -->
    <section id="apropos" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">À propos de moi</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="about-content">
                        <p class="mb-4">Motivé et rigoureux, je suis passionné par le développement web et la gestion de bases de données. Curieux et autonome, j'ai un esprit analytique et une bonne capacité à résoudre des problèmes, tout en appréciant le travail en équipe.</p>
                        <p>Je maîtrise les technologies modernes du développement web, avec une spécialisation en PHP et le framework Laravel. J'ai également de l'expérience en conception de base de donnees locale avec avec Microsoft Access</p>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="info-grid">
                        <div class="info-item">
                            <i class="fas fa-envelope info-icon"></i>
                            <div>
                                <strong>Email</strong>
                                <div>fangamoumamadi@gmail.com</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone info-icon"></i>
                            <div>
                                <strong>Téléphone</strong>
                                <div>+33751339711</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt info-icon"></i>
                            <div>
                                <strong>Localisation</strong>
                                <div>Arles, France</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-flag info-icon"></i>
                            <div>
                                <strong>Nationalité</strong>
                                <div>Guinéenne</div>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-language info-icon"></i>
                            <div>
                                <strong>Langues</strong>
                                <div>Français</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compétences -->
    <section id="competences" class="section skills-section">
        <div class="container">
            <h2 class="section-title center text-center" data-aos="fade-up">Mes Compétences</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="skill-category">
                        <h4>Développement Backend</h4>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">PHP / Laravel </span>
                                <span class="skill-percentage"> 30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="30"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Java </span>
                                <span class="skill-percentage"> 15%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="15"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">MySQL </span>
                                <span class="skill-percentage"> 30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="30"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-category">
                        <h4>Outils & Frameworks</h4>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Laravel </span>
                                <span class="skill-percentage"> 30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width= "30"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Bootstrap </span>
                                <span class="skill-percentage"> 25%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width=" 25"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">JavaFX</span>
                                <span class="skill-percentage">10%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width= "10"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6" data-aos="fade-left">
                    <div class="skill-category">
                        <h4>Développement Frontend</h4>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">JavaScript </span>
                                <span class="skill-percentage"> 10%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="10"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">HTML / CSS </span>
                                <span class="skill-percentage"> 70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-category">
                        <h4>Bases de données</h4>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">MySQL </span>
                                <span class="skill-percentage"> 30%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="30"></div>
                            </div>
                        </div>

                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Microsoft Access </span>
                                <span class="skill-percentage"> 70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70"></div>
                            </div>
                        </div>
                    </div>

                    <div class="skill-category">
                        <h4>Bureautique</h4>
                        <div class="skill-item">
                            <div class="skill-header">
                                <span class="skill-name">Word / Excel / Access </span>
                                <span class="skill-percentage">70%</span>
                            </div>
                            <div class="skill-bar">
                                <div class="skill-progress" data-width="70"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projets -->
    <section id="projets" class="section">
        <div class="container">
            <h2 class="section-title center text-center" data-aos="fade-up">Mes Projets</h2>

            <div class="project-carousel">
                <div class="project-track" id="projectTrack">
                    <!-- Projet 1 -->
                    <div class="project-card" data-aos="flip-left">
                        <div class="project-img">
                            <i class="fas fa-network-wired"></i>
                        </div>
                        <div class="project-content">
                            <h4>Application web pour certifications CCNA</h4>
                            <p>Plateforme d'étude et de préparation aux certifications Cisco CCNA avec des quiz interactifs, des simulations de réseau et un suivi de progression.</p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">Bootstrap</span>
                                <span class="tag">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Projet 2 -->
                    <div class="project-card" data-aos="flip-left" data-aos-delay="100">
                        <div class="project-img">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <div class="project-content">
                            <h4>Application de gestion des salaires</h4>
                            <p>Système complet de gestion et calcul des salaires pour entreprises avec génération de bulletins de paie, gestion des congés et tableaux de bord analytiques.</p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">JavaScript</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">Chart.js</span>
                            </div>
                        </div>
                    </div>

                    <!-- Projet 3 -->
                    <div class="project-card" data-aos="flip-left" data-aos-delay="200">
                        <div class="project-img">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                        <div class="project-content">
                            <h4>Plateforme e-commerce</h4>
                            <p>Site de vente en ligne complet avec gestion des produits, panier d'achat, système de paiement, comptes utilisateurs et tableau de bord administrateur.</p>
                            <div class="project-tags">
                                <span class="tag">Laravel</span>
                                <span class="tag">PHP</span>
                                <span class="tag">MySQL</span>
                                <span class="tag">Bootstrap</span>
                                <span class="tag">Stripe</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-nav">
                    <div class="carousel-dot active" data-index="0"></div>
                    <div class="carousel-dot" data-index="1"></div>
                    <div class="carousel-dot" data-index="2"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Formation -->
    <section id="formation" class="section">
        <div class="container">
            <h2 class="section-title center text-center" data-aos="fade-up">Formation & Expérience</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3 class="h4 mb-4">Formation</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h5>BUT 2 INFO - Parcours Réalisations d'applications</h5>
                            <p class="text-muted">Aix Marseille Université, Arles</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Ingénierie Intelligente des Systèmes informatiques</h5>
                            <p class="text-muted">SUMPTI, Maroc - Meknès</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Informatique de Base</h5>
                            <p class="text-muted">Institut supérieure de technologie de Mamou, Guinée</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Baccalauréat Unique</h5>
                            <p class="text-muted">Lycée moderne Moriba yansané, Guinée</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h3 class="h4 mb-4">Expérience Professionnelle</h3>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h5>Opérateur de Saisie</h5>
                            <p class="text-muted">Groupe Scolaire Saint Israël, Guinée - Conakry</p>
                            <p>Saisie et mise à jour des données scolaires dans une application de gestion d'établissement.</p>
                        </div>
                        <div class="timeline-item">
                            <h5>Projets de Développement</h5>
                            <p class="text-muted">Projets scolaires et personnels</p>
                            <p>Réalisation de plusieurs applications web complètes avec Laravel et autres technologies.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="section contact-section">
        <div class="container">
            <h2 class="section-title center text-center" data-aos="fade-up">Contactez-moi</h2>
            <div class="row">
                <div class="col-lg-4 mb-4" data-aos="fade-right">
                    <div class="contact-info">
                        <h4 class="mb-4">Informations de contact</h4>
                        <p class="mb-3">
                            <i class="fas fa-envelope contact-icon"></i>
                            fangamoumamadi@gmail.com
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-phone contact-icon"></i>
                            +33751339711
                        </p>
                        <p class="mb-3">
                            <i class="fas fa-map-marker-alt contact-icon"></i>
                            26 BIS RUE MIREILLE 13200 ARLES, France
                        </p>
                    </div>
                </div>
                <div class="col-lg-8" data-aos="fade-left">
                    @if(Session('success'))
                       <div class="alert alert-primary role=alert">{{Session('success')}}</div>
                    @endif
                    <form method="POST" action="{{route('contact.store')}}">
                        @csrf
                        @method("POST")
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="nom" class="form-control" placeholder="Votre nom" required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Votre email" required>
                            </div>
                            <div class="col-12">
                                <input type="text" name="sujet" class="form-control" placeholder="Sujet" required>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="5" placeholder="Votre message" required></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Envoyer le message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="container">
            <p>&copy; 2023 Mamady Fangamou. Tous droits réservés.</p>
            <div class="social-links mt-3">
                <a href="#" class="text-white me-3"><i class="fab fa-linkedin fa-lg"></i></a>
                <a href="#" class="text-white"><i class="fab fa-twitter fa-lg"></i></a>
            </div>
        </div>
    </footer>

    <!-- Bouton retour en haut -->
    <div class="back-to-top" id="backToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Initialiser AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });

        // Animation pour la navbar au scroll
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            const backToTop = document.getElementById('backToTop');

            if (window.scrollY > 50) {
                navbar.classList.add('shadow');
                navbar.style.padding = '10px 0';
            } else {
                navbar.classList.remove('shadow');
                navbar.style.padding = '15px 0';
            }

            // Afficher/masquer le bouton retour en haut
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        // Animation douce pour les ancres
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Défilement automatique des projets
        const projectTrack = document.getElementById('projectTrack');
        const dots = document.querySelectorAll('.carousel-dot');
        let currentIndex = 0;
        const projectCount = document.querySelectorAll('.project-card').length;
        const projectsPerView = window.innerWidth < 768 ? 1 : window.innerWidth < 992 ? 2 : 3;

        // Ajuster la largeur de la piste en fonction du nombre de projets
        projectTrack.style.width = `${(projectCount * (100 / projectsPerView))}%`;

        // Fonction pour mettre à jour le carousel
        function updateCarousel() {
            const translateX = -currentIndex * (100 / projectsPerView);
            projectTrack.style.transform = `translateX(${translateX}%)`;

            // Mettre à jour les points indicateurs
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Défilement automatique
        let autoScroll = setInterval(() => {
            currentIndex = (currentIndex + 1) % Math.ceil(projectCount / projectsPerView);
            updateCarousel();
        }, 4000);

        // Gestion des clics sur les points
        dots.forEach(dot => {
            dot.addEventListener('click', function() {
                currentIndex = parseInt(this.getAttribute('data-index'));
                updateCarousel();

                // Réinitialiser le défilement automatique
                clearInterval(autoScroll);
                autoScroll = setInterval(() => {
                    currentIndex = (currentIndex + 1) % Math.ceil(projectCount / projectsPerView);
                    updateCarousel();
                }, 4000);
            });
        });

        // Redimensionnement de la fenêtre
        window.addEventListener('resize', function() {
            const newProjectsPerView = window.innerWidth < 768 ? 1 : window.innerWidth < 992 ? 2 : 3;
            if (newProjectsPerView !== projectsPerView) {
                projectTrack.style.width = `${(projectCount * (100 / newProjectsPerView))}%`;
                updateCarousel();
            }
        });

        // Bouton retour en haut
        document.getElementById('backToTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animation des barres de compétences
        function animateSkills() {
            const skillBars = document.querySelectorAll('.skill-progress');
            skillBars.forEach(bar => {
                const width = bar.getAttribute('data-width');
                bar.style.width = width + '%';
            });
        }

        // Observer pour animer les compétences lorsqu'elles entrent dans la vue
        const skillsSection = document.getElementById('competences');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateSkills();
                }
            });
        }, { threshold: 0.3 });

        observer.observe(skillsSection);
    </script>
</body>
</html>
