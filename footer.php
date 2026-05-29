<!-- ===== FOOTER SECTION START ===== -->
<style>
    :root {
        --footer-bg: #0b1220;
        --footer-text: #bdc4d7;
        --footer-title: #ffffff;
        --gold-color: #d4af37;
        --gold-hover: #b8932c;
    }

    .luxury-footer {
        background-color: var(--footer-bg);
        color: var(--footer-text);
        padding: 80px 0 30px;
        font-family: 'Poppins', sans-serif;
        border-top: 3px solid var(--gold-color);
        position: relative;
    }

    .footer-brand-title {
        font-family: 'Bodoni Moda SC', 'Cormorant Garamond', serif;
        font-size: 32px;
        font-weight: 700;
        letter-spacing: 2px;
        color: var(--footer-title) !important;
        margin-bottom: 20px;
        display: inline-block;
    }

    .footer-brand-title span {
        color: var(--gold-color);
    }

    .footer-desc {
        line-height: 1.8;
        font-size: 14px;
        margin-bottom: 25px;
    }

    .footer-social-links {
        display: flex;
        gap: 12px;
    }

    .footer-social-icon {
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.05);
        color: var(--footer-text);
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    .footer-social-icon:hover {
        background-color: var(--gold-color);
        color: var(--footer-bg);
        transform: translateY(-5px);
        border-color: var(--gold-color);
        box-shadow: 0 5px 15px rgba(212, 175, 55, 0.3);
    }

    .footer-title {
        font-family: 'Bodoni Moda SC', 'Cormorant Garamond', serif;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 1px;
        color: var(--footer-title);
        margin-bottom: 25px;
        position: relative;
        padding-bottom: 10px;
    }

    .footer-title::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 35px;
        height: 2px;
        background-color: var(--gold-color);
    }

    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 12px;
    }

    .footer-links a {
        color: var(--footer-text);
        text-decoration: none;
        font-size: 14px;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .footer-links a:hover {
        color: var(--gold-color);
        transform: translateX(5px);
    }

    .footer-contact-item {
        display: flex;
        gap: 15px;
        margin-bottom: 20px;
        font-size: 14px;
        line-height: 1.6;
    }

    .footer-contact-item i {
        color: var(--gold-color);
        font-size: 18px;
        margin-top: 3px;
    }

    .footer-contact-item a {
        color: var(--footer-text);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-contact-item a:hover {
        color: var(--gold-color);
    }

    .footer-newsletter-form {
        position: relative;
        margin-top: 15px;
    }

    .footer-newsletter-input {
        width: 100%;
        background-color: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 14px 20px;
        padding-right: 60px;
        border-radius: 30px;
        color: #ffffff;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .footer-newsletter-input:focus {
        background-color: rgba(255, 255, 255, 0.05);
        border-color: var(--gold-color);
        outline: none;
        box-shadow: 0 0 10px rgba(212, 175, 55, 0.15);
    }

    .footer-newsletter-btn {
        position: absolute;
        right: 5px;
        top: 5px;
        bottom: 5px;
        width: 46px;
        height: 46px;
        border-radius: 50%;
        background-color: var(--gold-color);
        border: none;
        color: var(--footer-bg);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .footer-newsletter-btn:hover {
        background-color: var(--gold-hover);
        color: #ffffff;
        transform: scale(1.05);
    }

    .footer-bottom {
        margin-top: 60px;
        padding-top: 30px;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
        font-size: 13px;
        color: rgba(189, 196, 215, 0.6);
    }

    .footer-bottom-links {
        display: flex;
        justify-content: flex-end;
        gap: 25px;
    }

    .footer-bottom-links a {
        color: rgba(189, 196, 215, 0.6);
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-bottom-links a:hover {
        color: var(--gold-color);
    }

    @media (max-width: 991px) {
        .luxury-footer {
            padding: 60px 0 30px;
        }
        .footer-bottom {
            margin-top: 40px;
            text-align: center;
        }
        .footer-bottom-links {
            justify-content: center;
            margin-top: 15px;
        }
    }
</style>

<footer class="luxury-footer">
    <div class="container">
        <div class="row g-5">
            <!-- Brand & Story -->
            <div class="col-md-6 col-lg-3">
                <a href="index.php" class="footer-brand-title">
                    TAJ <span>HOTEL</span>
                </a>
                <p class="footer-desc">
                    Experience unmatched luxury and timeless elegance. Our heritage, personalized services, and five-star accommodations redefine the art of fine hospitality.
                </p>
                <div class="footer-social-links">
                    <a href="#" class="footer-social-icon" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="Twitter"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" class="footer-social-icon" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-6 col-lg-3">
                <h3 class="footer-title">Quick Links</h3>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="bi bi-chevron-right me-1"></i> Home</a></li>
                    <li><a href="rooms.php"><i class="bi bi-chevron-right me-1"></i> Rooms & Suites</a></li>
                    <li><a href="services.php"><i class="bi bi-chevron-right me-1"></i> Our Services</a></li>
                    <li><a href="gallery.php"><i class="bi bi-chevron-right me-1"></i> Visual Gallery</a></li>
                    <li><a href="contact.php"><i class="bi bi-chevron-right me-1"></i> Contact Us</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-6 col-lg-3">
                <h3 class="footer-title">Contact Info</h3>
                <div class="footer-contact-item">
                    <i class="bi bi-geo-alt-fill"></i>
                    <span>Apollo Bunder, Colaba,<br>Mumbai, Maharashtra 400001, India</span>
                </div>
                <div class="footer-contact-item">
                    <i class="bi bi-telephone-fill"></i>
                    <span><a href="tel:+912266653366">+91 22 6665 3366</a></span>
                </div>
                <div class="footer-contact-item">
                    <i class="bi bi-envelope-fill"></i>
                    <span><a href="mailto:reservations@tajhotels.com">reservations@tajhotels.com</a></span>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="col-md-6 col-lg-3">
                <h3 class="footer-title">Newsletter</h3>
                <p class="footer-desc" style="margin-bottom: 15px;">
                    Subscribe to receive premium offers, custom itineraries, and exclusive seasonal updates.
                </p>
                <form class="footer-newsletter-form" onsubmit="event.preventDefault(); alert('Thank you for subscribing to the Taj Hotel newsletter!'); this.reset();">
                    <input type="email" class="footer-newsletter-input" placeholder="Your Email Address" required>
                    <button type="submit" class="footer-newsletter-btn" aria-label="Subscribe">
                        <i class="bi bi-send-fill"></i>
                    </button>
                </form>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    &copy; <?php echo date('Y'); ?> <a href="index.php" style="color: var(--gold-color); text-decoration: none;">Taj Hotel</a>. All rights reserved. Developed for Puspalata01/Hotel-management.
                </div>
                <div class="col-md-6">
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms & Conditions</a>
                        <a href="#">Sitemap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ===== FOOTER SECTION END ===== -->
