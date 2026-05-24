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

   
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap"
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

            background: rgba(0,0,0,0.5);

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
    background: #fdfaf5; /* Elegant cream/off-white for 'normal fancy' */
    background-image: radial-gradient(#d4af37 0.5px, transparent 0.5px);
    background-size: 30px 30px;
}

.section-title {
    color: #0f172b;
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
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
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

                <ul class="navbar-nav ms-auto align-items-center">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
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
</script>
</body>

</html>