<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Taj Hotel</title>
    
    <!-- Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:wght@400;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --gold: #c5a880;
            --dark-green: #0f2c25;
            --charcoal: #1e1e1e;
            --cream: #faf8f5;
            --serif-font: 'Playfair Display', serif;
            --brand-font: 'Bodoni Moda SC', serif;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--cream);
            color: var(--charcoal);
            overflow-x: hidden;
        }

        /* --- Navbar --- */
        .navbar {
            background-color: rgba(15, 23, 43, 0.97);
            padding: 16px 0;
        }
        .logo {
            font-family: var(--brand-font);
            font-size: 32px;
            font-weight: 700;
            color: white !important;
            text-decoration: none;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.85) !important;
            text-transform: uppercase;
            margin-left: 16px;
            font-size: 13px;
            transition: 0.3s;
        }
        .nav-link:hover { color: var(--gold) !important; }

        /* --- Gallery Hero --- */
        .gallery-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&q=80&w=1920') center/cover no-repeat;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .gallery-hero h1 {
            font-family: var(--brand-font);
            font-size: 56px;
            font-weight: 700;
            letter-spacing: 3px;
        }

        /* --- Gallery Section --- */
        .bg-cream-theme { background-color: var(--cream); }
        .brand-serif { font-family: var(--serif-font); font-weight: 600; }
        .tracking-gold { color: var(--gold); letter-spacing: 4px; font-size: 12px; font-weight: 700; }
        .fw-bold-custom { font-size: 11px; font-weight: 700; letter-spacing: 1px; }

        .filter-btn-group .btn {
            border: 1px solid rgba(0,0,0,0.1);
            padding: 10px 24px;
            font-size: 14px;
            border-radius: 30px;
            background: #fff;
            color: var(--charcoal);
            transition: all 0.3s ease;
        }
        .filter-btn-group .btn.active, .filter-btn-group .btn:hover {
            background-color: var(--dark-green) !important;
            color: #fff !important;
            border-color: var(--dark-green) !important;
        }

        .luxury-gallery-card {
            position: relative;
            border-radius: 16px;
            overflow: hidden;
            background: #fff;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }
        .luxury-gallery-card:hover { transform: translateY(-5px); }

        .img-wrapper { position: relative; overflow: hidden; aspect-ratio: 4/3; }
        .img-wrapper img { width: 100%; height: 100%; object-fit: cover; transition: transform 0.5s ease; }
        .luxury-gallery-card:hover .img-wrapper img { transform: scale(1.06); }

        .card-overlay-cta {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(to top, rgba(15, 44, 37, 0.9) 0%, rgba(15, 44, 37, 0.2) 100%);
            opacity: 0; display: flex; flex-direction: column; justify-content: flex-end; padding: 24px;
            transition: opacity 0.3s ease; z-index: 2;
        }
        .luxury-gallery-card:hover .card-overlay-cta { opacity: 1; }

        .lightbox-trigger-btn {
            position: absolute; top: 15px; right: 15px; background: rgba(255, 255, 255, 0.9);
            color: var(--dark-green); width: 36px; height: 36px; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; text-decoration: none;
            z-index: 3; opacity: 0; transition: opacity 0.3s ease;
        }
        .luxury-gallery-card:hover .lightbox-trigger-btn { opacity: 1; }

        @media (min-width: 992px) {
            .main-gallery-swiper { overflow: visible !important; }
            .hybrid-gallery-wrapper {
                display: grid !important;
                grid-template-columns: repeat(3, 1fr) !important;
                gap: 24px !important;
                transform: none !important;
                width: 100% !important;
            }
            .gallery-item {
                display: block !important;
                width: 100% !important;
                opacity: 1;
                transform: scale(1);
                transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
            }
            .gallery-item.hidden-card {
                opacity: 0 !important;
                transform: scale(0.8) !important;
                position: absolute !important;
                visibility: hidden !important;
                pointer-events: none;
            }
        }

        @media (max-width: 991.98px) {
            .main-gallery-swiper { padding-bottom: 45px !important; }
            .gallery-item { width: 85% !important; }
            .gallery-item.hidden-card { display: none !important; }
        }

        footer {
            background: #0f172b;
            color: rgba(255,255,255,0.6);
            text-align: center;
            padding: 30px;
            font-size: 13px;
        }
        footer a { color: var(--gold); text-decoration: none; }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
        <a class="navbar-brand logo" href="index.php">TAJ HOTEL</a>
        <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link active" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="gallery-hero">
    <div class="container">
        <h1>Visual Journey</h1>
        <p class="lead">Step into a world of timeless elegance and contemporary luxury.</p>
    </div>
</header>

<section class="py-5 bg-cream-theme">
    <div class="container text-center mb-5">
        <span class="text-uppercase tracking-gold">Visual Experiences</span>
        <h2 class="display-5 brand-serif my-2">A Glimpse of Absolute Luxury</h2>
        <div class="mx-auto" style="width: 60px; height: 2px; background-color: var(--gold);"></div>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap filter-btn-group">
            <button class="btn filter-btn active" data-filter="all">All Collections</button>
            <button class="btn filter-btn" data-filter="rooms">Suites & Villas</button>
            <button class="btn filter-btn" data-filter="dining">Fine Dining</button>
            <button class="btn filter-btn" data-filter="wellness">Wellness & Spa</button>
        </div>

        <div class="swiper main-gallery-swiper">
            <div class="swiper-wrapper hybrid-gallery-wrapper">
                <!-- Gallery Item 1 -->
                <div class="swiper-slide gallery-item" data-category="rooms">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1590490360182-c33d57733427?w=600" alt="Presidential Suite" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Presidential Suite</h4>
                            <p class="text-white-50 small mb-3">Expansive panoramic views featuring custom artisan furniture.</p>
                            <a href="rooms.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">Book This Suite</a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div class="swiper-slide gallery-item" data-category="dining">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1544148103-0773bf10d330?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1544148103-0773bf10d330?w=600" alt="Lumiere Restaurant" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Lumière Restaurant</h4>
                            <p class="text-white-50 small mb-3">Michelin-starred sensory dining journeys curated by world masters.</p>
                            <a href="services.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">Reserve Table</a>
                        </div>
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div class="swiper-slide gallery-item" data-category="wellness">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?w=600" alt="Soma Wellness Spa" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Soma Wellness Spa</h4>
                            <p class="text-white-50 small mb-3">Therapeutic luxury rituals using ancestral organic methodologies.</p>
                            <a href="services.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">Book Treatment</a>
                        </div>
                    </div>
                </div>

                <!-- More items for a full gallery look -->
                <div class="swiper-slide gallery-item" data-category="rooms">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1566665797739-1674de7a421a?w=600" alt="Royal Penthouse" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Royal Penthouse</h4>
                            <p class="text-white-50 small mb-3">The ultimate height of sophistication and privacy.</p>
                            <a href="rooms.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">View Penthouse</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide gallery-item" data-category="dining">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1514362545857-3bc16c4c7d1b?w=600" alt="Bar & Lounge" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Azure Lounge</h4>
                            <p class="text-white-50 small mb-3">Handcrafted cocktails with views that touch the horizon.</p>
                            <a href="services.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide gallery-item" data-category="wellness">
                    <div class="luxury-gallery-card">
                        <a href="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=1200" class="glightbox lightbox-trigger-btn">
                            <i class="bi bi-arrows-fullscreen"></i>
                        </a>
                        <div class="img-wrapper">
                            <img src="https://images.unsplash.com/photo-1576013551627-0cc20b96c2a7?w=600" alt="Infinity Pool" loading="lazy">
                        </div>
                        <div class="card-overlay-cta">
                            <h4 class="text-white brand-serif mb-2 fs-5">Infinity Pool</h4>
                            <p class="text-white-50 small mb-3">Where the water meets the sky in perfect harmony.</p>
                            <a href="services.php" class="btn btn-light btn-sm rounded-pill py-2 text-uppercase fw-bold-custom">View Pool</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="swiper-pagination d-lg-none"></div>
        </div>
    </div>
</section>

<footer>
    &copy; <?php echo date('Y'); ?> <a href="index.php">Taj Hotel</a>. All rights reserved.
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>

<script>
    let gallerySwiper = undefined;

    function initResponsiveGallery() {
        const isMobile = window.innerWidth < 992;

        if (isMobile) {
            if (gallerySwiper === undefined) {
                gallerySwiper = new Swiper('.main-gallery-swiper', {
                    slidesPerView: 'auto',
                    spaceBetween: 20,
                    centeredSlides: true,
                    grabCursor: true,
                    pagination: { el: '.swiper-pagination', clickable: true }
                });
            }
        } else {
            if (gallerySwiper !== undefined) {
                gallerySwiper.destroy(true, true);
                gallerySwiper = undefined;
                const wrapper = document.querySelector('.hybrid-gallery-wrapper');
                if(wrapper) wrapper.removeAttribute('style');
            }
        }
    }

    // Filtering logic
    document.querySelector('.filter-btn-group').addEventListener('click', function(e) {
        if (!e.target.classList.contains('filter-btn')) return;

        document.querySelector('.filter-btn.active').classList.remove('active');
        e.target.classList.add('active');

        const selectedFilter = e.target.getAttribute('data-filter');
        const cards = document.querySelectorAll('.gallery-item');

        cards.forEach(card => {
            const cardCategory = card.getAttribute('data-category');
            if (selectedFilter === 'all' || cardCategory === selectedFilter) {
                card.classList.remove('hidden-card');
            } else {
                card.classList.add('hidden-card');
            }
        });

        if (gallerySwiper !== undefined) {
            gallerySwiper.update();
            gallerySwiper.slideTo(0);
        }
    });

    window.addEventListener('DOMContentLoaded', () => {
        initResponsiveGallery();
        const lightbox = GLightbox({ selector: '.glightbox' });
    });

    let resizeDebouncer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeDebouncer);
        resizeDebouncer = setTimeout(initResponsiveGallery, 150);
    });
</script>

</body>
</html>
