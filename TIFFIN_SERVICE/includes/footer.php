
    </main>

    <!-- Footer -->
    <footer class="footer-tiffin py-5 mt-5">
        <div class="container">
            <div class="row">
                <!-- Company Info -->
                <div class="col-lg-4 mb-4">
                    <div class="d-flex align-items-center mb-3">
                        <div class="footer-logo me-2">
                            <lottie-player 
                                src="https://assets5.lottiefiles.com/packages/lf20_8wqhpynb.json" 
                                background="transparent" 
                                speed="0.8" 
                                style="width: 40px; height: 40px;" 
                                loop 
                                autoplay>
                            </lottie-player>
                        </div>
                        <h5 class="text-warning mb-0 fw-bold">TiffinHub</h5>
                        <span class="badge bg-warning text-dark ms-2">Dabbawala</span>
                    </div>
                    <p class="text-light">🍱 Connecting customers with trusted local tiffin vendors for fresh, home-cooked meals delivered to your doorstep. Experience the authentic taste of home!</p>
                    <div class="d-flex align-items-center">
                        <span class="me-2">📧</span>
                        <a href="mailto:contact@tiffinhub.com" class="text-warning text-decoration-none fw-semibold">contact@tiffinhub.com</a>
                    </div>
                    <div class="mt-2">
                        <span class="me-2">📞</span>
                        <span class="text-light">+91 98765 43210</span>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-warning mb-3 fw-bold">🏠 Quick Links</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/" class="footer-link">🏡 Home</a></li>
                        <li class="mb-2"><a href="/pages/vendors.php" class="footer-link">🏪 Vendors</a></li>
                        <li class="mb-2"><a href="/pages/about.php" class="footer-link">ℹ️ About Us</a></li>
                        <li class="mb-2"><a href="/pages/contact.php" class="footer-link">📞 Contact</a></li>
                        <li class="mb-2"><a href="/pages/mess.php" class="footer-link">🍽️ Mess Services</a></li>
                        <li class="mb-2"><a href="/pages/hostel.php" class="footer-link">🏠 Hostel Food</a></li>
                    </ul>
                </div>

                <!-- Customer Support -->
                <div class="col-lg-2 col-md-6 mb-4">
                    <h6 class="text-warning mb-3 fw-bold">🛠️ Support</h6>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="/help/faq.php" class="footer-link">❓ FAQ</a></li>
                        <li class="mb-2"><a href="/help/delivery.php" class="footer-link">🚚 Delivery Info</a></li>
                        <li class="mb-2"><a href="/help/returns.php" class="footer-link">↩️ Returns</a></li>
                        <li class="mb-2"><a href="/help/privacy.php" class="footer-link">🔒 Privacy Policy</a></li>
                        <li class="mb-2"><a href="/help/terms.php" class="footer-link">📋 Terms of Service</a></li>
                    </ul>
                </div>

                <!-- Social Media & Newsletter -->
                <div class="col-lg-4 mb-4">
                    <h6 class="text-warning mb-3 fw-bold">📱 Follow Us</h6>
                    <div class="d-flex gap-3 mb-4">
                        <a href="https://facebook.com/tiffinhub" class="social-icon" target="_blank" rel="noopener" aria-label="Facebook">
                            <i class="bi bi-facebook"></i>
                        </a>
                        <a href="https://twitter.com/tiffinhub" class="social-icon" target="_blank" rel="noopener" aria-label="Twitter">
                            <i class="bi bi-twitter"></i>
                        </a>
                        <a href="https://instagram.com/tiffinhub" class="social-icon" target="_blank" rel="noopener" aria-label="Instagram">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://linkedin.com/company/tiffinhub" class="social-icon" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <i class="bi bi-linkedin"></i>
                        </a>
                        <a href="https://youtube.com/tiffinhub" class="social-icon" target="_blank" rel="noopener" aria-label="YouTube">
                            <i class="bi bi-youtube"></i>
                        </a>
                        <a href="https://wa.me/919876543210" class="social-icon" target="_blank" rel="noopener" aria-label="WhatsApp">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                    
                    <!-- Newsletter Signup -->
                    <div class="newsletter-section">
                        <h6 class="text-warning mb-2 fw-bold">📧 Newsletter</h6>
                        <p class="text-light small mb-3">Get daily tiffin updates and special offers!</p>
                        <div class="input-group">
                            <input type="email" class="form-control newsletter-input" placeholder="Enter your email" aria-label="Email for newsletter">
                            <button class="btn btn-warning newsletter-btn" type="button">
                                <span class="me-1">📬</span> Subscribe
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Footer -->
            <hr class="footer-divider my-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="text-light mb-0 fw-semibold">
                        &copy; <?php echo date('Y'); ?> TiffinHub. All rights reserved. 🍱
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="text-light mb-0">
                        Made with <span class="heart-beat">❤️</span> for food lovers & dabbawalas
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Lottie Player for Robot Chef Animation -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    
    <!-- Footer Styles -->
    <style>
        .footer-tiffin {
            background: linear-gradient(135deg, #2d3436 0%, #636e72 50%, #2d3436 100%);
            position: relative;
            overflow: hidden;
        }
        
        .footer-tiffin::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, #ff6b35, #f7931e, #ffd23f, #f7931e, #ff6b35);
            animation: gradient-shift 3s ease-in-out infinite;
        }
        
        @keyframes gradient-shift {
            0%, 100% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
        }
        
        .footer-link {
            color: #b2bec3 !important;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
            padding: 0.25rem 0;
        }
        
        .footer-link:hover {
            color: #ffd23f !important;
            transform: translateX(5px);
            text-shadow: 0 0 8px rgba(255, 210, 63, 0.5);
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            color: white !important;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(255, 107, 53, 0.3);
        }
        
        .social-icon:hover {
            transform: translateY(-3px) scale(1.1);
            box-shadow: 0 8px 25px rgba(255, 107, 53, 0.5);
            color: white !important;
        }
        
        .newsletter-input {
            border: 2px solid #ffd23f;
            border-radius: 25px 0 0 25px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            backdrop-filter: blur(10px);
        }
        
        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .newsletter-input:focus {
            border-color: #ff6b35;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 53, 0.25);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .newsletter-btn {
            border-radius: 0 25px 25px 0;
            background: linear-gradient(135deg, #ffd23f, #ff6b35);
            border: 2px solid #ffd23f;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .newsletter-btn:hover {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(255, 107, 53, 0.4);
        }
        
        .footer-divider {
            border-color: rgba(255, 210, 63, 0.3);
            height: 2px;
        }
        
        .heart-beat {
            animation: heartbeat 1.5s ease-in-out infinite;
            display: inline-block;
        }
        
        @keyframes heartbeat {
            0% { transform: scale(1); }
            14% { transform: scale(1.3); }
            28% { transform: scale(1); }
            42% { transform: scale(1.3); }
            70% { transform: scale(1); }
        }
        
        .footer-logo {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-5px); }
        }
        
        .badge {
            animation: glow 2s ease-in-out infinite alternate;
        }
    </style>
    
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <!-- Global JavaScript -->
    <script src="/assets/js/global.js"></script>
    
    <?php if (isset($page_js)): ?>
    <!-- Page-specific JavaScript -->
    <script src="<?php echo htmlspecialchars($page_js); ?>"></script>
    <?php endif; ?>

</body>
</html>