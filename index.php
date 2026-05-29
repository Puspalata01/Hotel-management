<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Taj Hotel</title>

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

   
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />

    
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />
    
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:wght@400;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>

        body{
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .navbar{
            background-color: rgba(15, 23, 43, 0.5);
            padding: 18px 0;

            position: absolute;
            width: 100%;
            z-index: 1000;
        }

        
        .logo{
            font-family: 'Bodoni Moda SC', serif;
            font-size: 38px;
            font-weight: 700;
            color: white !important;
        }

       
        .nav-link{
            color: white !important;
            text-transform: uppercase;
            margin-left: 18px;
            font-size: 14px;
            transition: 0.3s;
        }

        .nav-link:hover{
            color: #d4af37 !important;
        }

       
        .hero-slider{
            width: 100%;
            height: 100vh;
        }

        .swiper-slide{
            position: relative;
        }

        .swiper-slide img{
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }

        
        .swiper-slide::before{
            content: "";

            position: absolute;

            width: 100%;
            height: 100%;

            

            top: 0;
            left: 0;

            z-index: 1;
        }

        
        .hero-content{

            position: absolute;

            top: 50%;
            left: 50%;

            transform: translate(-50%, -50%);

            text-align: center;

            color: white;

            z-index: 10;

            width: 90%;
        }

        .hero-content h1{
            font-size: 70px;
            font-family: 'Bodoni Moda SC', serif;
            font-weight: 700;
        }

        .hero-content p{
            font-size: 20px;
            margin: 20px 0;
        }

        
        @media(max-width:768px){

            .hero-content h1{
                font-size: 40px;
            }

            .hero-content p{
                font-size: 16px;
            }

            .nav-link{
                margin-left: 0;
            }

        }
      .booking-form{

    position: absolute;

    top: -90px;

    left: 50%;

    transform: translateX(-50%);

    width: 90%;

    background: white;

    padding: 30px;

    border-radius: 20px;

    box-shadow: 0 5px 25px rgba(0,0,0,0.2);

    z-index: 100;
}


.booking-container {
    position: relative;
    z-index: 10;
}

@media (max-width: 768px) {
    .booking-form {
        position: relative !important;
        top: 0 !important;
        transform: none !important;
        left: 0 !important;
        width: 100% !important;
        margin-top: -20px !important;
    }
}


.rooms-section {
    padding: 150px 0 100px 0;
    background: #000000; /* Elegant cream/off-white for 'normal fancy' */
    background-image: radial-gradient(#d4af37 0.5px, transparent 0.5px);
    background-size: 30px 30px;
}

.section-title {
    color: #ffc107;
    font-family: 'Bodoni Moda SC', serif;
    font-size: 40px;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.gallery-slider {
    width: 100%;
    padding-bottom: 50px;
}

.gallery-slider .swiper-slide {
    background-position: center;
    background-size: cover;
    width: 300px; 
    height: 400px;
    background-color: #fff;
    border-radius: 12px;
    overflow: hidden;
  
    position: relative;
    border: 1px solid rgba(212, 175, 55, 0.2);
}

.room-card-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.5s;
}


.room-card-link {
    text-decoration: none;
    color: inherit;
    display: block;
    cursor: pointer;
}

.gallery-slider .swiper-slide:hover .room-card-img {
    transform: scale(1.1);
}

.room-details {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 25px;
    background: linear-gradient(transparent, rgba(0,0,0,0.9));
    color: white;
    z-index: 2;
}

.room-details h3 {
    font-family: 'Bodoni Moda SC', serif;
    font-size: 24px;
    margin-bottom: 5px;
}

.room-details .price {
    color: #d4af37;
    font-weight: 600;
    font-size: 18px;
}

.room-details .rank {
    color: #ffc107;
    font-size: 14px;
    margin-bottom: 10px;
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

/* --- Home Page Gallery Section --- */
.home-gallery-section {
    padding: 100px 0;
    background: #ffefcf00;
    border-top: 1px solid rgba(212, 175, 55, 0.15);
}

.home-gallery-title span {
    color: #d4af37;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-size: 13px;
    font-weight: 700;
}

.home-gallery-title h2 {
    font-family: 'Bodoni Moda SC', serif;
    font-size: 40px;
    color: #181717;
    margin-top: 10px;
    font-weight: 700;
}

.gallery-filter-btn-group .btn {
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 10px 24px;
    font-size: 14px;
    border-radius: 30px;
    background: rgba(0, 0, 0, 0.04);
    color: #191919;
    transition: all 0.3s ease;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
}

.gallery-filter-btn-group .btn.active, .gallery-filter-btn-group .btn:hover {
    background-color: #d4af37 !important;
    color: #0b1220 !important;
    border-color: #d4af37 !important;
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
}

.home-gallery-card {
    position: relative;
    border-radius: 16px;
    overflow: hidden;
    background: #fff;
    height: 100%;
    box-shadow: 0 10px 30px rgba(0,0,0,0.03);
    transition: transform 0.3s ease;
    border: 1px solid rgba(0, 0, 0, 0.03);
}

.home-gallery-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.home-gallery-img-wrap {
    position: relative;
    overflow: hidden;
    aspect-ratio: 4/3;
}

.home-gallery-img-wrap img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.home-gallery-card:hover .home-gallery-img-wrap img {
    transform: scale(1.06);
}

.home-gallery-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(to top, rgba(15, 44, 37, 0.95) 0%, rgba(15, 44, 37, 0.3) 100%);
    opacity: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-end;
    padding: 24px;
    transition: opacity 0.3s ease;
    z-index: 2;
}

.home-gallery-card:hover .home-gallery-overlay {
    opacity: 1;
}

.home-gallery-zoom {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255, 255, 255, 0.95);
    color: #0f2c25;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    z-index: 3;
    opacity: 0;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.home-gallery-zoom:hover {
    background-color: #d4af37;
    color: #0f172b;
    transform: scale(1.1);
}

.home-gallery-card:hover .home-gallery-zoom {
    opacity: 1;
}

.home-gallery-overlay h4 {
    color: #fff;
    font-family: 'Playfair Display', serif;
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
    transform: translateY(20px);
    transition: transform 0.35s ease;
}

.home-gallery-overlay p {
    color: rgba(255,255,255,0.75);
    font-size: 13px;
    line-height: 1.6;
    margin-bottom: 15px;
    transform: translateY(20px);
    transition: transform 0.35s ease 0.05s;
}

.home-gallery-overlay .btn-explore {
    color: #0f172b;
    background-color: #fff;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    border-radius: 30px;
    padding: 8px 18px;
    text-transform: uppercase;
    text-decoration: none;
    display: inline-block;
    align-self: flex-start;
    transition: all 0.3s ease;
    transform: translateY(20px);
    opacity: 0;
    transition: transform 0.35s ease 0.1s, opacity 0.35s ease 0.1s;
}

.home-gallery-overlay .btn-explore:hover {
    background-color: #d4af37;
    color: #0f172b;
    transform: translateY(20px) scale(1.05);
}

.home-gallery-card:hover .home-gallery-overlay h4,
.home-gallery-card:hover .home-gallery-overlay p,
.home-gallery-card:hover .home-gallery-overlay .btn-explore {
    transform: translateY(0);
    opacity: 1;
}

.home-gallery-item {
    transition: opacity 0.4s ease, transform 0.4s ease, visibility 0.4s;
}

.home-gallery-item.hidden-card {
    opacity: 0 !important;
    transform: scale(0.8) !important;
    position: absolute !important;
    visibility: hidden !important;
    pointer-events: none;
}

@media(max-width:991px){
    .home-gallery-section {
        padding: 70px 0;
    }
}

.home-gallery-section .btn-outline-light:hover {
    background-color: #d4af37 !important;
    color: #fbfcff !important;
    border-color: #d4af37 !important;
    box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
}
    </style>

</head>

<body>

   
    <nav class="navbar navbar-expand-lg">

        <div class="container">

           
            <a class="navbar-brand logo" href="#">
                TAJ HOTEL
            </a>


            <button class="navbar-toggler bg-light"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav">

                <span class="navbar-toggler-icon"></span>

            </button>

            
            <div class="collapse navbar-collapse" id="navbarNav">

                <ul class="navbar-nav ms-auto align-items-lg-center align-items-start">

                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">
                            Rooms
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="services.php">
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">
                            Contact
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="about.php">
                            About Us
                        </a>
                    </li>

                  
                    <li class="nav-item">
                        <a href="#" class="nav-link">

                            <i class="bi bi-search fs-5"></i>

                        </a>
                    </li>

                    
                    <li class="nav-item">

                        <a href="#"
                           class="nav-link"
                           data-bs-toggle="modal"
                           data-bs-target="#loginModal">

                            <i class="bi bi-person-circle fs-4"></i>

                        </a>

                    </li>

                </ul>

            </div>

        </div>

    </nav>
  



    
    <div class="modal fade" id="loginModal">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title">
                        Login
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

                
                <div class="modal-body">

                    <form>

                       
                        <div class="mb-3">

                            <label class="form-label">
                                Email Address
                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Enter Email">

                        </div>

                       
                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password"
                                   class="form-control"
                                   placeholder="Enter Password">

                        </div>

                        
                        <button type="submit"
                                class="btn btn-dark w-100">

                            Login

                        </button>

                    </form>

        
                    <p class="text-center mt-3">

                        User not found?

                        <a href="#"
                           data-bs-toggle="modal"
                           data-bs-target="#signupModal">

                            Sign Up

                        </a>

                    </p>


                    <button class="btn btn-outline-dark w-100">

                        <i class="bi bi-google"></i>

                        Sign in with Google

                    </button>

                </div>

            </div>

        </div>

    </div>
   



   
    <div class="modal fade" id="signupModal">

        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">

                
                <div class="modal-header">

                    <h5 class="modal-title">
                        Create Account
                    </h5>

                    <button type="button"
                            class="btn-close"
                            data-bs-dismiss="modal">
                    </button>

                </div>

  
                <div class="modal-body">

                    <form>

                        <div class="mb-3">

                            <label class="form-label">
                                Full Name
                            </label>

                            <input type="text"
                                   class="form-control"
                                   placeholder="Enter Your Name">

                        </div>

                        
                        <div class="mb-3">

                            <label class="form-label">
                                Email Address
                            </label>

                            <input type="email"
                                   class="form-control"
                                   placeholder="Enter Your Email">

                        </div>

                        
                        <div class="mb-3">

                            <label class="form-label">
                                Password
                            </label>

                            <input type="password"
                                   class="form-control"
                                   placeholder="Enter Password">

                        </div>

      
                        <div class="mb-3">

                            <label class="form-label">
                                Confirm Password
                            </label>

                            <input type="password"
                                   class="form-control"
                                   placeholder="Confirm Password">

                        </div>

                        
                        <button type="submit"
                                class="btn btn-dark w-100">

                            Sign Up

                        </button>

                    </form>


                    <button class="btn btn-outline-dark w-100 mt-3">

                        <i class="bi bi-google"></i>

                        Sign Up with Google

                    </button>

                </div>

            </div>

        </div>

    </div>
   
    <div class="swiper hero-slider">

        <div class="swiper-wrapper">

            
            <div class="swiper-slide">

                <img src="https://images.unsplash.com/photo-1566073771259-6a8506099945"
                     alt="Hotel Image">

                <div class="hero-content">

                    <h1>Welcome To Taj Hotel</h1>

                    <p>
                        Experience luxury and comfort like never before.
                    </p>

                    <button class="btn btn-light px-4 py-2">
                        Book Now
                    </button>

                </div>

            </div>

            <div class="swiper-slide">

                <img src="https://images.unsplash.com/photo-1551882547-ff40c63fe5fa"
                     alt="Luxury Room">

                <div class="hero-content">

                    <h1>Luxury Rooms</h1>

                    <p>
                        Enjoy premium stay with world class service.
                    </p>

                    <button class="btn btn-light px-4 py-2">
                        Explore Rooms
                    </button>

                </div>

            </div>

           
            <div class="swiper-slide">

                <img src="https://images.unsplash.com/photo-1522798514-97ceb8c4f1c8"
                     alt="Resort">

                <div class="hero-content">

                    <h1>Relax & Enjoy</h1>

                    <p>
                        Make your vacation unforgettable with us.
                    </p>

                    <button class="btn btn-light px-4 py-2">
                        Discover More
                    </button>

                </div>

            </div>

        </div>

    </div>

<div class="container booking-container">

    <div class="booking-form">

        <div class="row g-3 align-items-end">

           
            <div class="col-md-2">

                <label class="form-label">
                    Check In
                </label>

                <input type="date"
                       class="form-control">

            </div>


            
            <div class="col-md-2">

                <label class="form-label">
                    Check Out
                </label>

                <input type="date"
                       class="form-control">

            </div>


            
            <div class="col-md-2">

                <label class="form-label">
                    Guests
                </label>

                <select class="form-select">

                    <option>1 Guest</option>
                    <option>2 Guests</option>
                    <option>3 Guests</option>
                    <option>4 Guests</option>

                </select>

            </div>


            
            <div class="col-md-2">

                <label class="form-label">
                    Rooms
                </label>

                <select class="form-select">

                    <option>1 Room</option>
                    <option>2 Rooms</option>
                    <option>3 Rooms</option>

                </select>

            </div>


            <div class="col-md-2">

                <label class="form-label">
                    Room Type
                </label>

                <select class="form-select">

                    <option>Deluxe</option>
                    <option>Premium</option>
                    <option>Suite</option>

                </select>

            </div>


           
            <div class="col-md-2">

                <label class="form-label">
                    Price Range
                </label>

                <input type="range"
                       class="form-range"
                       min="1000"
                       max="20000">

            </div>


            
            <div class="col-md-12">

                <button class="btn btn-dark w-100 py-2">

                    Check Availability

                </button>

            </div>

        </div>

    </div>

</div>

<section class="rooms-section">
    <div class="container text-center">
        <h2 class="section-title">Our Luxurious Rooms</h2>
    </div>

    <div class="swiper gallery-slider">
        <div class="swiper-wrapper">
            <?php
            $rooms = [
                ["name" => "Deluxe Room", "price" => "5,000", "rank" => "4.5", "img" => "https://images.unsplash.com/photo-1611892440504-42a792e24d32"],
                ["name" => "Premium Suite", "price" => "12,000", "rank" => "5.0", "img" => "https://images.unsplash.com/photo-1582719478250-c89cae4dc85b"],
                ["name" => "Royal Penthouse", "price" => "25,000", "rank" => "5.0", "img" => "https://images.unsplash.com/photo-1566665797739-1674de7a421a"],
                ["name" => "Ocean Breeze", "price" => "8,500", "rank" => "4.8", "img" => "https://images.unsplash.com/photo-1590490360182-c33d57733427"],
                ["name" => "Garden Villa", "price" => "15,000", "rank" => "4.7", "img" => "https://images.unsplash.com/photo-1595576508898-0ad5c879a061"],
                ["name" => "Executive Club", "price" => "9,000", "rank" => "4.6", "img" => "https://images.unsplash.com/photo-1631049307264-da0ec9d70304"],
                ["name" => "Family Haven", "price" => "10,500", "rank" => "4.9", "img" => "https://images.unsplash.com/photo-1591088398332-8a77d3996150"],
                ["name" => "Honeymoon Suite", "price" => "18,000", "rank" => "5.0", "img" => "https://images.unsplash.com/photo-1618773928121-c32242e63f39"],
                ["name" => "Studio Loft", "price" => "6,500", "rank" => "4.4", "img" => "https://images.unsplash.com/photo-1502672260266-1c1ef2d93688"],
                ["name" => "Skyline Room", "price" => "11,000", "rank" => "4.7", "img" => "https://images.unsplash.com/photo-1618773928121-c32242e63f39"],
                ["name" => "Classic King", "price" => "7,200", "rank" => "4.5", "img" => "https://images.unsplash.com/photo-1540518614846-7eded433c457"],
                ["name" => "Majestic Suite", "price" => "30,000", "rank" => "5.0", "img" => "https://images.unsplash.com/photo-1578683010236-d716f9a3f461"]
            ];

            foreach($rooms as $room): ?>
            <div class="swiper-slide">
                <img src="<?php echo $room['img']; ?>?auto=format&fit=crop&q=80&w=800" class="room-card-img" alt="<?php echo $room['name']; ?>">
                <div class="room-details">
                    <div class="rank">
                        <?php 
                        $full_stars = floor($room['rank']);
                        for($i=0; $i<$full_stars; $i++) echo '<i class="bi bi-star-fill"></i> ';
                        if($room['rank'] > $full_stars) echo '<i class="bi bi-star-half"></i> ';
                        ?>
                        (<?php echo $room['rank']; ?>/5)
                    </div>
                    <h3><?php echo $room['name']; ?></h3>
                    <p class="price">₹<?php echo $room['price']; ?> / night</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>
<!-- ===== SERVICES SECTION START ===== -->

<style>
.services-section {
  padding: 100px 0;
  background: #111111; /* cream colour */
}

/* LEFT */
.services-intro span {
  color: #facc15;
  font-weight: 600;
}

.services-intro h2 {
  font-size: 40px;
  font-weight: bold;
  color:  #ffffff;
}

.services-intro p {
  color: #abaaaa;
}

/* SWIPER */
.serviceSwiper {
  width: 290px;
  height: 350px;
  
}

/* CARD */
.service-slide-card {
  height: 100%;
  border-radius: 18px;
  padding: 30px;
  text-align: center;
  background: #025607;
  
  display: flex;
  flex-direction: column;
  justify-content: center;
}

/* ICON */
.service-icon {
  font-size: 35px;
  color: #facc15;
  margin-bottom: 15px;
}

/* TEXT */
.service-slide-card h3 {
  color: #fff;
  font-size: 20px;
}

.service-slide-card p {
  color: #ffffff;
  font-size: 14px;
}

.service-action {
  margin-top: 15px;
  color: #facc15;
  font-weight: 500;
}
</style>

<section class="services-section">
  <div class="container">
    <div class="row align-items-center">

      <!-- LEFT -->
      <div class="col-lg-6">
        <div class="services-intro">
          <span>Our Services</span>
          <h2>Experience Unmatched Luxury</h2>
          <p>From world-class dining to spa treatments, we elevate your stay with premium comfort and unforgettable experiences.</p>
          <a href="services.php" class="btn btn-y mt-3" style="background-color: #facc15; color: black;">Explore Services</a>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-6 d-flex justify-content-center">
        <div class="swiper serviceSwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="service-slide-card">
                <div class="service-icon"><i class="bi bi-bell-fill"></i></div>
                <h3>Concierge</h3>
                <p>Personalized guest support.</p>
               
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-slide-card">
                <div class="service-icon"><i class="bi bi-house-door-fill"></i></div>
                <h3>Housekeeping</h3>
                <p>Clean and elegant rooms.</p>
               
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-slide-card">
                <div class="service-icon"><i class="bi bi-cup-hot-fill"></i></div>
                <h3>Dining</h3>
                <p>Luxury food experience.</p>
               
              </div>
            </div>

            <div class="swiper-slide">
              <div class="service-slide-card">
                <div class="service-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                <h3>Spa</h3>
                <p>Relax & rejuvenate.</p>
              
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Swiper JS (only if not already added) -->
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>

<script>
var swiper = new Swiper(".serviceSwiper", {
  effect: "cards",
  grabCursor: true,
  loop: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  }
});
</script>

<!-- ===== SERVICES SECTION END ===== -->

<?php include 'gallery-data.php'; ?>
<!-- ===== VISUAL GALLERY SECTION START ===== -->
<section class="home-gallery-section">
    <div class="container text-center mb-5">
        <div class="home-gallery-title">
            <span>Visual Splendor</span>
            <h2>A Glimpse of Absolute Luxury</h2>
            <div class="mx-auto mt-3" style="width: 60px; height: 2px; background-color: #d4af37;"></div>
        </div>
    </div>

    <div class="container">
        <!-- Category Filter Tabs -->
        <div class="d-flex justify-content-center gap-2 mb-5 flex-wrap gallery-filter-btn-group">
            <button class="btn gallery-filter-btn active" data-filter="all">All Highlights</button>
            <button class="btn gallery-filter-btn" data-filter="rooms">Suites & Villas</button>
            <button class="btn gallery-filter-btn" data-filter="dining">Fine Dining</button>
            <button class="btn gallery-filter-btn" data-filter="wellness">Wellness & Spa</button>
        </div>

        <!-- Gallery Grid -->
        <div class="row g-4 justify-content-center">
            <?php foreach($gallery_items as $item): ?>
            <div class="col-md-6 col-lg-4 home-gallery-item" data-category="<?php echo $item['category']; ?>">
                <div class="home-gallery-card">
                    <!-- Lightbox Zoom Icon -->
                    <a href="<?php echo $item['img']; ?>?auto=format&fit=crop&q=80&w=1200" class="home-glightbox home-gallery-zoom" data-gallery="home-gallery" data-title="<?php echo htmlspecialchars($item['title']); ?>" data-description="<?php echo htmlspecialchars($item['desc']); ?>">
                        <i class="bi bi-arrows-fullscreen"></i>
                    </a>
                    
                    <div class="home-gallery-img-wrap">
                        <img src="<?php echo $item['img']; ?>?auto=format&fit=crop&q=80&w=600" alt="<?php echo htmlspecialchars($item['title']); ?>" loading="lazy">
                    </div>
                    
                    <div class="home-gallery-overlay">
                        <h4><?php echo $item['title']; ?></h4>
                        <p><?php echo $item['desc']; ?></p>
                        <a href="<?php echo $item['link']; ?>" class="btn-explore"><?php echo $item['action_label']; ?></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <div class="text-center mt-5">
            <a href="gallery.php" class="btn btn-outline-light rounded-pill px-4 py-2 text-uppercase fw-semibold" style="letter-spacing: 1px; font-size: 13px; transition: all 0.3s ease; background: rgba(0, 0, 0, 0.3);color: #383737;">View Full Gallery <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
    </div>
</section>
<!-- ===== VISUAL GALLERY SECTION END ===== -->

<?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script>
    
    var heroSwiper = new Swiper(".hero-slider", {
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    var gallerySwiper = new Swiper(".gallery-slider", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        loop: true,
        initialSlide: 5,
        slidesPerView: "auto",
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    // Initialize Home GLightbox
    const homeLightbox = GLightbox({ selector: '.home-glightbox' });

    // Home Gallery Filtering Logic
    document.querySelectorAll('.gallery-filter-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            document.querySelector('.gallery-filter-btn.active').classList.remove('active');
            this.classList.add('active');

            const filterValue = this.getAttribute('data-filter');
            const items = document.querySelectorAll('.home-gallery-item');

            items.forEach(item => {
                const category = item.getAttribute('data-category');
                if (filterValue === 'all' || category === filterValue) {
                    item.classList.remove('hidden-card');
                } else {
                    item.classList.add('hidden-card');
                }
            });
        });
    });
</script>
</body>

</html>