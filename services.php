<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Luxury Services | Taj Hotel</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }

    :root{
      --gold:#d4af37;
      --dark:#0f172a;
      --green:#17352f;
      --cream:#f8f3ea;
      --light:#fffdf8;
      --text:#475569;
    }

    body{
      font-family:'Poppins',sans-serif;
      background:var(--cream);
      color:#111827;
      overflow-x:hidden;
    }

    /* NAVBAR */

    .navbar{
      background:rgba(10,15,28,0.96);
      backdrop-filter:blur(8px);
      padding:18px 0;
    }

    .navbar-brand{
      font-family:'Cormorant Garamond',serif;
      font-size:38px;
      font-weight:700;
      letter-spacing:2px;
      color:white !important;
    }

    .nav-link{
      color:rgba(255,255,255,0.8) !important;
      margin-left:18px;
      font-size:14px;
      text-transform:uppercase;
      letter-spacing:1px;
      transition:0.3s;
    }

    .nav-link:hover,
    .nav-link.active{
      color:var(--gold) !important;
    }

    .navbar-toggler{
      border:none;
    }

    /* HERO */

    .hero{
      min-height:95vh;
      background:
      linear-gradient(rgba(8,12,20,0.65),rgba(8,12,20,0.65)),
      url('https://images.unsplash.com/photo-1566073771259-6a8506099945?q=80&w=1600&auto=format&fit=crop')
      center/cover no-repeat;

      display:flex;
      align-items:center;
      justify-content:center;
      text-align:center;
      padding:100px 20px;
      position:relative;
    }

    .hero-content{
      max-width:900px;
    }

    .hero-subtitle{
      color:var(--gold);
      text-transform:uppercase;
      letter-spacing:4px;
      font-size:14px;
      margin-bottom:18px;
    }

    .hero h1{
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(3rem,8vw,6rem);
      color:white;
      line-height:1.1;
      margin-bottom:24px;
      font-weight:700;
    }

    .hero p{
      color:rgba(255,255,255,0.88);
      font-size:18px;
      line-height:1.9;
      max-width:760px;
      margin:auto;
    }

    .hero-btn{
      margin-top:35px;
      display:inline-block;
      padding:14px 36px;
      border:1px solid var(--gold);
      color:white;
      text-decoration:none;
      transition:0.4s;
      letter-spacing:1px;
    }

    .hero-btn:hover{
      background:var(--gold);
      color:black;
    }

    /* STRIP */

    .service-strip{
      background:var(--green);
      padding:22px 0;
    }

    .strip-box{
      display:flex;
      justify-content:center;
      flex-wrap:wrap;
      gap:25px;
    }

    .strip-item{
      color:#fff;
      font-size:14px;
      letter-spacing:1px;
      text-transform:uppercase;
      display:flex;
      align-items:center;
      gap:10px;
    }

    .strip-item i{
      color:var(--gold);
      font-size:16px;
    }

    /* SECTION */

    section{
      padding:100px 0;
    }

    .section-title{
      text-align:center;
      margin-bottom:70px;
    }

    .section-title span{
      color:var(--gold);
      text-transform:uppercase;
      letter-spacing:3px;
      font-size:13px;
    }

    .section-title h2{
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(2.5rem,5vw,4rem);
      margin-top:15px;
      color:var(--dark);
      font-weight:700;
    }

    .section-title p{
      max-width:700px;
      margin:20px auto 0;
      color:var(--text);
      line-height:1.8;
    }

    /* CARDS */

    .service-card{
      background:var(--light);
      border-radius:24px;
      padding:40px 30px;
      height:100%;
      transition:0.4s;
      position:relative;
      overflow:hidden;
      border:1px solid #eadfcd;
      box-shadow:0 10px 30px rgba(0,0,0,0.06);
    }

    .service-card::before{
      content:'';
      position:absolute;
      top:0;
      left:0;
      width:100%;
      height:5px;
      background:var(--gold);
      transform:scaleX(0);
      transition:0.4s;
    }

    .service-card:hover::before{
      transform:scaleX(1);
    }

    .service-card:hover{
      transform:translateY(-10px);
      background:var(--green);
    }

    .service-card:hover h3,
    .service-card:hover p{
      color:white;
    }

    .service-icon{
      width:72px;
      height:72px;
      border-radius:20px;
      background:#f4e2aa;
      color:#8b6a12;
      display:flex;
      align-items:center;
      justify-content:center;
      font-size:30px;
      margin-bottom:28px;
      transition:0.4s;
    }

    .service-card:hover .service-icon{
      background:white;
      color:var(--green);
    }

    .service-card h3{
      font-family:'Cormorant Garamond',serif;
      font-size:30px;
      margin-bottom:14px;
      transition:0.3s;
    }

    .service-card p{
      color:var(--text);
      line-height:1.9;
      font-size:15px;
      transition:0.3s;
    }

    /* LUXURY BLOCK */

    .luxury-block{
      background:linear-gradient(135deg,#0f172a,#1d3a34);
      border-radius:30px;
      padding:70px 50px;
      color:white;
      position:relative;
      overflow:hidden;
    }

    .luxury-block::after{
      content:'';
      position:absolute;
      width:300px;
      height:300px;
      border-radius:50%;
      background:rgba(255,255,255,0.04);
      top:-120px;
      right:-100px;
    }

    .luxury-block h2{
      font-family:'Cormorant Garamond',serif;
      font-size:clamp(2rem,5vw,4rem);
      margin-bottom:25px;
      color:#fff;
    }

    .luxury-block p{
      color:rgba(255,255,255,0.82);
      line-height:1.9;
      max-width:850px;
      font-size:17px;
    }

    /* STATS */

    .stats{
      margin-top:50px;
    }

    .stat-box{
      text-align:center;
      padding:25px;
      background:white;
      border-radius:20px;
      box-shadow:0 8px 25px rgba(0,0,0,0.05);
    }

    .stat-box h3{
      font-size:42px;
      color:var(--gold);
      font-weight:700;
    }

    .stat-box p{
      margin:0;
      color:var(--text);
    }

    /* FOOTER */

    footer{
      background:#0b1220;
      padding:35px 20px;
      text-align:center;
      color:rgba(255,255,255,0.7);
      margin-top:80px;
    }

    footer span{
      color:var(--gold);
    }

    /* RESPONSIVE */

    @media(max-width:768px){

      .navbar-brand{
        font-size:28px;
      }

      .hero{
        min-height:80vh;
      }

      .service-card{
        padding:30px 25px;
      }

      .luxury-block{
        padding:45px 30px;
      }

    }

    /* --- Responsive Luxury Navbar --- */
    @media(max-width:991px){
        .navbar {
            background-color: rgba(15, 23, 43, 0.98) !important;
            padding: 12px 0;
        }
        .navbar-collapse {
            background: rgba(15, 23, 43, 0.98);
            padding: 20px;
            border-radius: 12px;
            margin-top: 10px;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }
        .nav-link {
            margin-left: 0 !important;
            padding: 10px 0 !important;
            width: 100%;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            text-align: left;
        }
        .nav-link:last-child {
            border-bottom: none;
        }
        .navbar-nav {
            width: 100%;
            align-items: flex-start !important;
        }
    }

  </style>
</head>

<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg sticky-top navbar-dark">
  <div class="container">

    <a class="navbar-brand" href="#">TAJ HOTEL</a>

    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navMenu">

      <ul class="navbar-nav ms-auto align-items-lg-center align-items-start">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="rooms.php">Rooms</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="services.php">Services</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="gallery.php">Gallery</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>

      </ul>

    </div>
  </div>
</nav>

<!-- HERO -->

<section class="hero">

  <div class="hero-content">

    <div class="hero-subtitle">
      Luxury Hospitality Experience
    </div>

    <h1>
      Exceptional Services Crafted For Royal Comfort
    </h1>

    <p>
      Discover world-class hospitality with elegant accommodations,
      premium wellness experiences, luxury dining, concierge assistance,
      and seamless hotel management services designed to elevate every stay.
    </p>

    <a href="services.php" class="hero-btn">
      Explore Services
    </a>

  </div>

</section>

<!-- STRIP -->

<div class="service-strip">

  <div class="container">

    <div class="strip-box">

      <div class="strip-item">
        <i class="bi bi-wifi"></i>
        High Speed WiFi
      </div>

      <div class="strip-item">
        <i class="bi bi-cup-hot-fill"></i>
        Complimentary Breakfast
      </div>

      <div class="strip-item">
        <i class="bi bi-water"></i>
        Infinity Pool
      </div>

      <div class="strip-item">
        <i class="bi bi-heart-pulse-fill"></i>
        Luxury Spa
      </div>

      <div class="strip-item">
        <i class="bi bi-car-front-fill"></i>
        Airport Pickup
      </div>

    </div>

  </div>

</div>

<!-- SERVICES -->

<section>

  <div class="container">

    <div class="section-title">

      <span>Premium Services</span>

      <h2>
        Crafted For Luxury Living
      </h2>

      <p>
        Every service is thoughtfully designed to provide guests with elegance,
        comfort, and a seamless hospitality experience from arrival to departure.
      </p>

    </div>

    <div class="row g-4">

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-bell-fill"></i>
          </div>

          <h3>Guest Concierge</h3>

          <p>
            Personalized assistance for reservations, travel planning,
            premium requests, and guest experiences with 24/7 luxury support.
          </p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-house-door-fill"></i>
          </div>

          <h3>Housekeeping</h3>

          <p>
            Impeccable room preparation, linen management, and cleanliness
            standards ensuring every stay feels elegant and refreshing.
          </p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-cup-hot-fill"></i>
          </div>

          <h3>Luxury Dining</h3>

          <p>
            Experience gourmet cuisine, curated breakfast menus,
            premium beverages, and world-class chef-crafted meals.
          </p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-heart-pulse-fill"></i>
          </div>

          <h3>Spa & Wellness</h3>

          <p>
            Relax with rejuvenating therapies, wellness treatments,
            aromatherapy sessions, and calming luxury spa experiences.
          </p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-building-fill-check"></i>
          </div>

          <h3>Event Planning</h3>

          <p>
            Elegant wedding ceremonies, business conferences,
            and premium banquet experiences managed flawlessly.
          </p>

        </div>

      </div>

      <div class="col-md-6 col-lg-4">

        <div class="service-card">

          <div class="service-icon">
            <i class="bi bi-graph-up-arrow"></i>
          </div>

          <h3>Smart Analytics</h3>

          <p>
            Advanced hotel management insights, occupancy tracking,
            guest engagement, and operational performance monitoring.
          </p>

        </div>

      </div>

    </div>

  </div>

</section>

<!-- LUXURY BLOCK -->

<section class="pt-0">

  <div class="container">

    <div class="luxury-block">

      <h2>
        Redefining Modern Luxury Hospitality
      </h2>

      <p>
        From premium suites to personalized guest experiences,
        Taj Hotel combines luxury aesthetics with operational excellence.
        Every interaction is thoughtfully designed to deliver comfort,
        sophistication, and unforgettable hospitality experiences.
      </p>

      <div class="row stats g-4">

        <div class="col-md-4">

          <div class="stat-box">

            <h3>25+</h3>
            <p>Luxury Services</p>

          </div>

        </div>

        <div class="col-md-4">

          <div class="stat-box">

            <h3>10K+</h3>
            <p>Happy Guests</p>

          </div>

        </div>

        <div class="col-md-4">

          <div class="stat-box">

            <h3>5★</h3>
            <p>Premium Experience</p>

          </div>

        </div>

      </div>

    </div>

  </div>

</section>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>