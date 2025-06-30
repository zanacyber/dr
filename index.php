<?php

$editions = [
    ['year' => 2024, 'winner' => 'Big Midrah', 'location' => 'Abidjan', 'image' => 'images/bigmidrah.png', 'photos' => ['images/edit20241.jpg', 'images/edit20242.jpg', 'images/edit20244.jpg']],
    ['year' => 2023, 'winner' => 'Afanooh', 'location' => 'Dakar', 'image' => 'images/qfronooh.jpg', 'photos' => ['images/edit20231.jpg', 'images/edit20232.jpg', 'images/edit20234.jpg']],
    ['year' => 2022, 'winner' => 'Afanooh', 'location' => 'Dakar', 'image' => 'images/ar1.png', 'photos' => ['images/ar1.png', 'images/ar1.png']],
];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afro Trap | Compétition de Rap Africain</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-crown text-warning me-2"></i>
                <span class="text-gradient">AFRO TRAP</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="#">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#artists">Artistes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#editions">Éditions</a></li>
                    <li class="nav-item"><a class="nav-link" href="#partners">Partenaires</a></li>
                    <li class="nav-item ms-lg-3"><a class="btn btn-gradient" href="#">Voter</a></li>
                </ul>
            </div>
        </div>
    </nav>

<!-- Hero Section - Version Premium -->
<section class="hero d-flex align-items-center">
    <!-- Fond animé premium -->
    <div class="particles-js" id="particles-js"></div>
    <div class="hero-video-overlay"></div>

    <div class="container text-center text-white position-relative">
        <!-- Titre avec effet de texte dégradé animé -->
        <h1 class="hero-title animate__animated animate__fadeInDown">
            <span class="text-gradient-animated">La Bataille des MCs</span>
            <span class="d-block display-1 fw-bold mt-2">AFRO TRAP 2024</span>
        </h1>
        
        <!-- Sous-titre avec mots clés animés -->
        <div class="hero-subtitle animate__animated animate__fadeIn animate__delay-1s">
            <p class="lead mb-4">L'événement le plus <span class="typing-text" data-words='["épique", "attendu", "vibrant", "légendaire"]'></span> du rap africain</p>
        </div>
        
        <!-- Statistiques en temps réel -->
        <div class="hero-stats row justify-content-center animate__animated animate__fadeIn animate__delay-1s">
            <div class="col-auto">
                <div class="stat-item">
                    <div class="stat-number" data-count="50">0</div>
                    <div class="stat-label">Artistes</div>
                </div>
            </div>
            <div class="col-auto">
                <div class="stat-item">
                    <div class="stat-number" data-count="120000">0</div>
                    <div class="stat-label">Votes</div>
                </div>
            </div>
            <div class="col-auto">
                <div class="stat-item">
                    <div class="stat-number" data-count="15">0</div>
                    <div class="stat-label">Pays</div>
                </div>
            </div>
        </div>
        
        <!-- Boutons avec effets spéciaux -->
        <div class="hero-buttons animate__animated animate__fadeIn animate__delay-2s">
            <a href="#artists" class="btn btn-pulse btn-lg px-4 me-3">
                <i class="fas fa-microphone-alt me-2"></i> Découvrez les talents
            </a>
            <a href="#vote" class="btn btn-holographic btn-lg px-4">
                <i class="fas fa-vote-yea me-2"></i> Votez maintenant
            </a>
        </div>
        
        <!-- Compte à rebours amélioré -->
        <div class="countdown-wrapper mt-5 animate__animated animate__fadeIn animate__delay-3s">
            <h3 class="countdown-title mb-3">Prochaine édition dans:</h3>
            <div class="countdown" id="countdown"></div>
        </div>
        
        <!-- Bandeau d'annonce défilante -->
        <div class="news-ticker animate__animated animate__fadeIn animate__delay-4s">
            <div class="ticker-content">
                <span class="ticker-news">Dernier gagnant: Big Midrah (42K votes) • </span>
                <span class="ticker-news">Early Bird tickets disponibles • </span>
                <span class="ticker-news">Prochain live: 15 Juin 2024 • </span>
                <span class="ticker-news">Nouveaux artistes ajoutés</span>
            </div>
        </div>
    </div>
    
</section>

    <!-- Editions Section -->
    <section id="editions" class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Nos Éditions</h2>
            
            <div class="row g-4">
                <?php foreach ($editions as $edition): ?>
                <div class="col-md-6" data-aos="fade-up">
                    <div class="edition-card card h-100">
                        <div class="card-header p-0 position-relative">
                            <img src="<?= $edition['image'] ?>" class="img-fluid w-100 edition-img">
                            <span class="edition-year"><?= $edition['year'] ?></span>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Édition <?= $edition['year'] ?></h5>
                            <p class="card-text">Vainqueur: <strong><?= $edition['winner'] ?></strong></p>
                            <p class="card-text">Lieu: <?= $edition['location'] ?></p>
                            
                            <div class="gallery mt-4">
                                <h6><i class="fas fa-camera me-2"></i>Galerie</h6>
                                <div class="row g-2 mt-2">
                                    <?php foreach ($edition['photos'] as $photo): ?>
                                    <div class="col-4">
                                        <a href="<?= $photo ?>" data-lightbox="gallery-<?= $edition['year'] ?>">
                                            <img src="<?= $photo ?>" class="img-thumbnail">
                                        </a>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section id="partners" class="py-5">
        <div class="container">
            <h2 class="text-center mb-5" data-aos="fade-up">Nos Partenaires</h2>
            
            <div class="partners-slider" data-aos="fade-up">
                <div class="partner-logo"><img src="images/ar1.png" alt="LEADER PICTURE"></div>
                <div class="partner-logo"><img src="images/DOPE.png" alt="DOPE MUSIC"></div>
                <div class="partner-logo"><img src="images/davepartener.jpg" alt="DAES MEMORIES"></div>
                <div class="partner-logo"><img src="images/ar1.png" alt="AKISHAM STUDIO"></div>
            </div>
        </div>
        <div class="container">
            <br>
            <h2 class="text-center mb-5" data-aos="fade-up">Nos Sponsors</h2>
            
            <div class="partners-slider" data-aos="fade-up">
                <div class="partner-logo"><img src="images/ar1.png" alt="SODIBO"></div>
                <div class="partner-logo"><img src="images/ar1.png" alt="AMS"></div>
                <div class="partner-logo"><img src="images/goschap.png" alt="GOCHAP"></div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="py-5 bg-gradient-reverse text-white">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center" data-aos="fade-up">
                    <h2 class="mb-4">Restez informé</h2>
                    <p class="mb-5">Abonnez-vous à notre newsletter pour ne rien manquer de l'événement</p>
                    
                    <form class="newsletter-form">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Votre email" required>
                            <button class="btn btn-dark" type="submit">S'abonner</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="d-flex align-items-center mb-3 text-decoration-none" href="#">
                        <i class="fas fa-crown text-warning me-2 fs-3"></i>
                        <span class="text-gradient fs-4">AFRO TRAP</span>
                    </a>
                    <p class="text-white-50">La plus grande compétition de rap africain, découvrez les talents émergents.</p>
                    <div class="social-icons d-flex gap-3">
                        <a href="#" class="text-white fs-5"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-white fs-5"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-warning mb-4">Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="#artists" class="text-white-50 text-decoration-none">Artistes</a></li>
                        <li class="mb-2"><a href="#editions" class="text-white-50 text-decoration-none">Éditions</a></li>
                        <li class="mb-2"><a href="#partners" class="text-white-50 text-decoration-none">Partenaires</a></li>
                        <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-warning mb-4">Contact</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Dakar, Sénégal</li>
                        <li class="mb-2"><i class="fas fa-phone me-2"></i> +221 77 123 45 67</li>
                        <li class="mb-2"><i class="fas fa-envelope me-2"></i> contact@afrotrap.com</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4 bg-secondary">
            
            <div class="text-center text-white-50 small">
                &copy; 2024 Afro Trap Competition. Tous droits réservés.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Par ceci -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox-plus-jquery.min.js"></script>
    <script src="script.js"></script>
    
    <script>
        // Initialiser AOS (Animate On Scroll)
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
    </script>
</body>
</html>