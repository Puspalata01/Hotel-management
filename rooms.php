<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Luxurious Rooms – Taj Hotel</title>
    <meta name="description" content="Explore our collection of luxurious rooms and suites at Taj Hotel. From deluxe rooms to royal penthouses.">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:wght@400;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: #fdfaf5;
        }

        
        .navbar {
            background-color: rgba(15, 23, 43, 0.97);
            padding: 16px 0;
        }
        .logo {
            font-family: 'Bodoni Moda SC', serif;
            font-size: 32px;
            font-weight: 700;
            color: white !important;
        }
        .nav-link {
            color: rgba(255,255,255,0.85) !important;
            text-transform: uppercase;
            margin-left: 16px;
            font-size: 13px;
            transition: 0.3s;
        }
        .nav-link:hover { color: #d4af37 !important; }

        
        .rooms-hero {
            background: linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
                        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&q=80&w=1920') center/cover no-repeat;
            height: 380px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .rooms-hero h1 {
            font-family: 'Bodoni Moda SC', serif;
            font-size: 58px;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .rooms-hero p {
            font-size: 18px;
            margin-top: 12px;
            color: rgba(255,255,255,0.8);
        }

        .selected-room-alert {
            background: linear-gradient(135deg, #0f172b, #1e3a5f);
            color: white;
            padding: 18px 30px;
            text-align: center;
            font-size: 16px;
        }
        .selected-room-alert span {
            color: #d4af37;
            font-weight: 600;
        }

       
        .rooms-section { padding: 70px 0 90px; }

        .room-card {
            border: none;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0,0,0,0.10);
            transition: transform 0.35s, box-shadow 0.35s;
            text-decoration: none;
            color: inherit;
            display: block;
            background: white;
        }
        .room-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 50px rgba(0,0,0,0.18);
            color: inherit;
        }

        .room-card-img-wrap {
            position: relative;
            height: 230px;
            overflow: hidden;
        }
        .room-card-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        .room-card:hover .room-card-img-wrap img { transform: scale(1.08); }

        .room-badge {
            position: absolute;
            top: 14px;
            right: 14px;
            background: rgba(0,0,0,0.65);
            color: #ffc107;
            font-size: 12px;
            font-weight: 600;
            padding: 5px 10px;
            border-radius: 20px;
            backdrop-filter: blur(4px);
        }

        .room-card-body { padding: 20px; }
        .room-card-title {
            font-family: 'Bodoni Moda SC', serif;
            font-size: 20px;
            margin-bottom: 6px;
            color: #0f172b;
        }
        .stars { color: #ffc107; font-size: 13px; }
        .star-count { color: #888; font-size: 13px; margin-left: 4px; }
        .room-price {
            color: #d4af37;
            font-weight: 700;
            font-size: 17px;
            margin-top: 10px;
        }
        .room-price small { font-size: 12px; font-weight: 400; color: #999; }

        .btn-book {
            background: #0f172b;
            color: white;
            border: none;
            padding: 9px 22px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            margin-top: 14px;
            display: inline-block;
            transition: 0.3s;
            text-decoration: none;
        }
        .btn-book:hover { background: #d4af37; color: #0f172b; }

        
        .room-card.is-selected {
            border: 2px solid #d4af37;
            box-shadow: 0 0 0 4px rgba(212,175,55,0.2), 0 20px 50px rgba(0,0,0,0.18);
        }

       
        footer {
            background: #0f172b;
            color: rgba(255,255,255,0.6);
            text-align: center;
            padding: 22px;
            font-size: 13px;
        }
        footer a { color: #d4af37; text-decoration: none; }
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
                <li class="nav-item"><a class="nav-link active" href="rooms.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
            </ul>
        </div>
    </div>
</nav>


<div class="rooms-hero">
    <div>
        <h1>Our Luxurious Rooms</h1>
        <p>Handcrafted comfort. Unmatched elegance. Every stay, a story.</p>
    </div>
</div>

<?php
$selected = isset($_GET['room']) ? urldecode($_GET['room']) : '';
if ($selected): ?>
<div class="selected-room-alert">
    You selected: <span><?php echo htmlspecialchars($selected); ?></span> — scroll down to view details or book now.
</div>
<?php endif; ?>


<section class="rooms-section">
    <div class="container">
        <div class="row g-4">
<?php
$rooms = [
    ["name"=>"Deluxe Room",      "price"=>"5,000",  "rank"=>"4.5", "img"=>"https://images.unsplash.com/photo-1611892440504-42a792e24d32", "desc"=>"A beautifully furnished room with modern amenities, king-size bed, and city views."],
    ["name"=>"Premium Suite",    "price"=>"12,000", "rank"=>"5.0", "img"=>"https://images.unsplash.com/photo-1582719478250-c89cae4dc85b", "desc"=>"Spacious suite with separate living area, spa bath, and curated butler service."],
    ["name"=>"Royal Penthouse",  "price"=>"25,000", "rank"=>"5.0", "img"=>"https://images.unsplash.com/photo-1566665797739-1674de7a421a", "desc"=>"The crown jewel of Taj Hotel — panoramic views, private terrace, and bespoke luxury."],
    ["name"=>"Ocean Breeze",     "price"=>"8,500",  "rank"=>"4.8", "img"=>"https://images.unsplash.com/photo-1590490360182-c33d57733427", "desc"=>"Wake up to the sound of waves with floor-to-ceiling ocean-view windows."],
    ["name"=>"Garden Villa",     "price"=>"15,000", "rank"=>"4.7", "img"=>"https://images.unsplash.com/photo-1595576508898-0ad5c879a061", "desc"=>"A private villa nestled in lush gardens with a plunge pool and outdoor dining."],
    ["name"=>"Executive Club",   "price"=>"9,000",  "rank"=>"4.6", "img"=>"https://images.unsplash.com/photo-1631049307264-da0ec9d70304", "desc"=>"Tailored for the discerning traveller — club lounge access and express check-in."],
    ["name"=>"Family Haven",     "price"=>"10,500", "rank"=>"4.9", "img"=>"https://images.unsplash.com/photo-1591088398332-8a77d3996150", "desc"=>"Generously spacious, with two bedrooms, a playroom corner, and family-friendly amenities."],
    ["name"=>"Honeymoon Suite",  "price"=>"18,000", "rank"=>"5.0", "img"=>"https://images.unsplash.com/photo-1618773928121-c32242e63f39", "desc"=>"Rose petal welcome, champagne, and a private jacuzzi for two — romance perfected."],
    ["name"=>"Studio Loft",      "price"=>"6,500",  "rank"=>"4.4", "img"=>"https://images.unsplash.com/photo-1502672260266-1c1ef2d93688", "desc"=>"A chic open-plan loft with high ceilings, contemporary art, and a fully equipped kitchenette."],
    ["name"=>"Skyline Room",     "price"=>"11,000", "rank"=>"4.7", "img"=>"https://images.unsplash.com/photo-1618773928121-c32242e63f39", "desc"=>"Sweeping city skyline views from the higher floors — modern style meets ultimate comfort."],
    ["name"=>"Classic King",     "price"=>"7,200",  "rank"=>"4.5", "img"=>"https://images.unsplash.com/photo-1540518614846-7eded433c457", "desc"=>"Timeless elegance with a king bed, premium linens, and warm wood-panelled interiors."],
    ["name"=>"Majestic Suite",   "price"=>"30,000", "rank"=>"5.0", "img"=>"https://images.unsplash.com/photo-1578683010236-d716f9a3f461", "desc"=>"The pinnacle of grandeur — gilded interiors, personal concierge, and private dining room."],
];

foreach($rooms as $room):
    $isSelected = (strtolower($room['name']) === strtolower($selected));
    $full_stars = floor($room['rank']);
    $half = ($room['rank'] > $full_stars);
?>
        <div class="col-sm-6 col-lg-4">
            <a href="rooms.php?room=<?php echo urlencode($room['name']); ?>" class="room-card <?php echo $isSelected ? 'is-selected' : ''; ?>" id="<?php echo urlencode($room['name']); ?>">
                <div class="room-card-img-wrap">
                    <img src="<?php echo $room['img']; ?>?auto=format&fit=crop&q=80&w=800" alt="<?php echo $room['name']; ?>">
                    <span class="room-badge">
                        <?php for($i=0;$i<$full_stars;$i++) echo '★'; if($half) echo '½'; ?>
                        &nbsp;<?php echo $room['rank']; ?>
                    </span>
                </div>
                <div class="room-card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <h3 class="room-card-title"><?php echo $room['name']; ?></h3>
                    </div>
                    <div class="stars">
                        <?php for($i=0;$i<$full_stars;$i++) echo '<i class="bi bi-star-fill"></i>'; if($half) echo '<i class="bi bi-star-half"></i>'; ?>
                        <span class="star-count">(<?php echo $room['rank']; ?>/5)</span>
                    </div>
                    <p class="mt-2 text-muted" style="font-size:13px; line-height:1.6;"><?php echo $room['desc']; ?></p>
                    <p class="room-price">₹<?php echo $room['price']; ?> <small>/ night</small></p>
                    <span class="btn-book">Book Now</span>
                </div>
            </a>
        </div>
<?php endforeach; ?>
        </div>
    </div>
</section>

<footer>
    &copy; <?php echo date('Y'); ?> <a href="index.php">Taj Hotel</a>. All rights reserved.
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
   
    const params = new URLSearchParams(window.location.search);
    const room = params.get('room');
    if (room) {
        const el = document.getElementById(encodeURIComponent(room));
        if (el) setTimeout(() => el.scrollIntoView({ behavior: 'smooth', block: 'center' }), 400);
    }
</script>

</body>
</html>
