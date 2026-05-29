<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Taj Hotel</title>
    
    <!-- Dependencies -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda+SC:wght@400;700&family=Playfair+Display:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --gold: #d4af37;
            --dark-green: #0f2c25;
            --charcoal: #1e1e1e;
            --cream: #faf8f5;
            --light-cream: #fdfbf7;
            --gold-hover: #b8932c;
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
            font-family: 'Bodoni Moda SC', serif;
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
        .nav-link:hover, .nav-link.active { color: var(--gold) !important; }

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

        /* --- Contact Hero --- */
        .contact-hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('https://images.unsplash.com/photo-1542314831-068cd1dbfeeb?auto=format&fit=crop&q=80&w=1920') center/cover no-repeat;
            height: 350px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
        }
        .contact-hero h1 {
            font-family: 'Bodoni Moda SC', serif;
            font-size: 56px;
            font-weight: 700;
            letter-spacing: 3px;
        }
        .contact-hero p {
            font-size: 18px;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 10px;
        }

        /* --- Contact Section --- */
        .contact-section {
            padding: 80px 0;
        }
        
        .contact-info-title {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: #0f172b;
            margin-bottom: 25px;
        }

        .contact-card {
            background: var(--light-cream);
            border: 1px solid rgba(212, 175, 55, 0.15);
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            box-shadow: 0 10px 30px rgba(0,0,0,0.02);
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(212, 175, 55, 0.08);
            border-color: var(--gold);
        }

        .contact-icon-box {
            width: 60px;
            height: 60px;
            background-color: rgba(212, 175, 55, 0.1);
            color: var(--gold);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .contact-card:hover .contact-icon-box {
            background-color: var(--gold);
            color: white;
            box-shadow: 0 5px 15px rgba(212, 175, 55, 0.25);
        }

        .contact-item-title {
            font-family: 'Playfair Display', serif;
            font-size: 20px;
            font-weight: 600;
            color: #0f172b;
            margin-bottom: 12px;
        }

        .contact-item-text {
            font-size: 14px;
            color: #555555;
            line-height: 1.7;
            margin: 0;
        }

        .contact-item-text a {
            color: inherit;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .contact-item-text a:hover {
            color: var(--gold);
        }

        /* --- Google Map --- */
        .map-container {
            border-radius: 20px;
            overflow: hidden;
            border: 1px solid rgba(212, 175, 55, 0.2);
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            margin-top: 40px;
            height: 380px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        /* --- Contact Form --- */
        .form-container {
            background-color: #ffffff;
            border-radius: 24px;
            padding: 45px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.03);
            border: 1px solid rgba(0,0,0,0.03);
        }

        .form-title {
            font-family: 'Playfair Display', serif;
            font-size: 32px;
            font-weight: 700;
            color: #0f172b;
            margin-bottom: 10px;
        }

        .form-subtitle {
            font-size: 14px;
            color: #777777;
            margin-bottom: 35px;
        }

        .floating-group {
            position: relative;
            margin-bottom: 25px;
        }

        .floating-input, .floating-textarea {
            width: 100%;
            background-color: #fafafa;
            border: 1px solid #e1e1e1;
            border-radius: 12px;
            padding: 18px 20px;
            font-size: 14px;
            color: #1e1e1e;
            transition: all 0.3s ease;
        }

        .floating-textarea {
            height: 150px;
            resize: none;
        }

        .floating-label {
            position: absolute;
            left: 20px;
            top: 18px;
            font-size: 14px;
            color: #888888;
            transition: all 0.3s ease;
            pointer-events: none;
        }

        .floating-textarea ~ .floating-label {
            top: 18px;
        }

        /* Float behavior */
        .floating-input:focus ~ .floating-label,
        .floating-input:not(:placeholder-shown) ~ .floating-label,
        .floating-textarea:focus ~ .floating-label,
        .floating-textarea:not(:placeholder-shown) ~ .floating-label {
            top: -10px;
            left: 15px;
            font-size: 12px;
            font-weight: 600;
            color: var(--gold);
            background-color: #ffffff;
            padding: 0 8px;
            border-radius: 4px;
        }

        .floating-input:focus, .floating-textarea:focus {
            background-color: #ffffff;
            border-color: var(--gold);
            outline: none;
            box-shadow: 0 0 12px rgba(212, 175, 55, 0.15);
        }

        .btn-submit-premium {
            background-color: var(--dark-green);
            color: #ffffff;
            border: none;
            border-radius: 30px;
            padding: 16px 36px;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(15, 44, 37, 0.2);
        }

        .btn-submit-premium:hover {
            background-color: var(--gold);
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(212, 175, 55, 0.35);
        }

        /* --- Success Modal --- */
        .success-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(11, 18, 32, 0.8);
            backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s ease;
        }

        .success-overlay.show {
            opacity: 1;
            pointer-events: auto;
        }

        .success-box {
            background-color: #ffffff;
            border-radius: 24px;
            padding: 50px 40px;
            text-align: center;
            max-width: 450px;
            width: 90%;
            border: 1px solid rgba(212, 175, 55, 0.3);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            transform: scale(0.8);
            transition: transform 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        .success-overlay.show .success-box {
            transform: scale(1);
        }

        .success-check-icon {
            width: 80px;
            height: 80px;
            background-color: rgba(212, 175, 55, 0.1);
            color: var(--gold);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            margin: 0 auto 25px;
            border: 2px solid var(--gold);
        }

        .success-box h3 {
            font-family: 'Playfair Display', serif;
            font-size: 26px;
            font-weight: 700;
            color: #0f172b;
            margin-bottom: 12px;
        }

        .success-box p {
            font-size: 14px;
            color: #666666;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .btn-success-close {
            background-color: var(--dark-green);
            color: #ffffff;
            border: none;
            border-radius: 25px;
            padding: 10px 30px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-success-close:hover {
            background-color: var(--gold);
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .contact-hero h1 { font-size: 40px; }
            .contact-hero p { font-size: 15px; }
            .form-container { padding: 30px; }
            .contact-section { padding: 50px 0; }
        }
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
            <ul class="navbar-nav ms-auto align-items-lg-center align-items-start">
                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="rooms.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="contact-hero">
    <div class="container">
        <h1>Get In Touch</h1>
        <p class="lead">We'd love to hear from you. Experience the Royal Grandeur.</p>
    </div>
</header>

<section class="contact-section">
    <div class="container">
        <div class="row g-5">
            <!-- Left Column: Contact Info & Maps -->
            <div class="col-lg-5">
                <h2 class="contact-info-title">Contact Information</h2>
                
                <div class="row g-4">
                    <!-- Address -->
                    <div class="col-md-6 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-icon-box">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <h3 class="contact-item-title">Location</h3>
                            <p class="contact-item-text">
                                Apollo Bunder, Colaba,<br>
                                Mumbai, Maharashtra 400001, India
                            </p>
                        </div>
                    </div>
                    
                    <!-- Call & Mail -->
                    <div class="col-md-6 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-icon-box">
                                <i class="bi bi-telephone-inbound"></i>
                            </div>
                            <h3 class="contact-item-title">Reservations</h3>
                            <p class="contact-item-text" style="margin-bottom: 5px;">
                                <strong>Phone:</strong> <a href="tel:+912266653366">+91 22 6665 3366</a>
                            </p>
                            <p class="contact-item-text">
                                <strong>Email:</strong> <a href="mailto:reservations@tajhotels.com">reservations@tajhotels.com</a>
                            </p>
                        </div>
                    </div>
                    
                    <!-- Working Hours -->
                    <div class="col-md-6 col-lg-12">
                        <div class="contact-card">
                            <div class="contact-icon-box">
                                <i class="bi bi-clock"></i>
                            </div>
                            <h3 class="contact-item-title">Opening Hours</h3>
                            <p class="contact-item-text" style="margin-bottom: 5px;">
                                <strong>Front Desk:</strong> 24/7 Available
                            </p>
                            <p class="contact-item-text">
                                <strong>Concierge Service:</strong> 06:00 AM - 11:00 PM Daily
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Google Map Iframe -->
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3774.21832168925!2d72.83042037597148!3d18.921989096144883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7d1c16a24c91d%3A0x15bf85e50529d38c!2sThe%20Taj%20Mahal%20Palace%2C%20Mumbai!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="col-lg-7">
                <div class="form-container">
                    <h2 class="form-title">Send Us A Message</h2>
                    <p class="form-subtitle">Have questions or specific requests? Write to us, and our team will get back to you shortly.</p>
                    
                    <form id="contactForm" onsubmit="handleContactSubmit(event)">
                        <!-- Name -->
                        <div class="floating-group">
                            <input type="text" id="name" class="floating-input" placeholder=" " required>
                            <label for="name" class="floating-label">Full Name</label>
                        </div>
                        
                        <!-- Email -->
                        <div class="floating-group">
                            <input type="email" id="email" class="floating-input" placeholder=" " required>
                            <label for="email" class="floating-label">Email Address</label>
                        </div>
                        
                        <!-- Subject -->
                        <div class="floating-group">
                            <input type="text" id="subject" class="floating-input" placeholder=" " required>
                            <label for="subject" class="floating-label">Subject</label>
                        </div>
                        
                        <!-- Message -->
                        <div class="floating-group">
                            <textarea id="message" class="floating-textarea" placeholder=" " required></textarea>
                            <label for="message" class="floating-label">Your Message</label>
                        </div>
                        
                        <!-- Submit -->
                        <button type="submit" class="btn-submit-premium">
                            Send Message <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Success Modal popup -->
<div class="success-overlay" id="successOverlay">
    <div class="success-box">
        <div class="success-check-icon">
            <i class="bi bi-check2"></i>
        </div>
        <h3 id="successTitle">Message Sent!</h3>
        <p id="successMessage">Thank you, <span id="senderName">Guest</span>. Your message has been received by our guest relationship team. We will reply to you within 24 hours.</p>
        <button class="btn-success-close" onclick="closeSuccessModal()">Close</button>
    </div>
</div>

<?php include 'footer.php'; ?>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function handleContactSubmit(e) {
        e.preventDefault();
        
        const nameVal = document.getElementById('name').value;
        const emailVal = document.getElementById('email').value;
        const subjectVal = document.getElementById('subject').value;
        const messageVal = document.getElementById('message').value;

        if (nameVal && emailVal && subjectVal && messageVal) {
            // Update modal message details dynamically
            document.getElementById('senderName').innerText = nameVal;
            
            // Show custom success modal
            const overlay = document.getElementById('successOverlay');
            overlay.classList.add('show');
            
            // Reset contact form
            document.getElementById('contactForm').reset();
        }
    }

    function closeSuccessModal() {
        const overlay = document.getElementById('successOverlay');
        overlay.classList.remove('show');
    }
</script>

</body>
</html>
