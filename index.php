<?php
// Tiffin Marketplace - Home Page
// Placeholder for main landing page
require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DabbaExpress - Your trusted tiffin marketplace connecting customers with local vendors">
    <title>DabbaExpress - Home Cooked Meals Delivered Fresh Daily</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Righteous&display=swap" rel="stylesheet">
    <link href="./assets/css/home.css" rel="stylesheet">
    
</head>
<body id="landing-page-body">
    
    <!-- Hero Section -->
    <section id="hero-section">
        <div class="hero-bg-animation" id="hero-background-container">
            <div class="hero-floating-icon-1">🍱</div>
            <div class="hero-floating-icon-2">🥘</div>
            <div class="hero-floating-icon-3">🍛</div>
            <div class="hero-floating-icon-4">🍲</div>
            <div class="hero-floating-icon-5">🥗</div>
            <div class="hero-floating-icon-6">🍚</div>
        </div>
        
        <div class="container" id="hero-container-main">
            <div class="row align-items-center" id="hero-content-row">
                <div class="col-lg-6" id="hero-text-column">
                    <div class="hero-content" id="hero-main-content">
                        <h1 id="hero-main-heading">
                            Fresh Home-Cooked<br>Meals Delivered<br>to Your Doorstep 🍱
                        </h1>
                        <p id="hero-subtitle">
                            Experience authentic homemade food from trusted local vendors. Healthy, delicious, and affordable tiffin service that feels like home.
                        </p>
                        <div class="hero-cta-group" id="hero-button-container">
                            <button class="btn btn-primary-custom" id="hero-cta-primary">
                                Order Now 🚀
                            </button>
                            <button class="btn btn-secondary-custom" id="hero-cta-secondary">
                                Browse Vendors 🏪
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" id="hero-image-column">
                    <div class="hero-image-container" id="hero-image-wrapper">
                        <svg class="hero-image-main" id="hero-tiffin-illustration" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
                            <!-- Tiffin Box Illustration -->
                            <defs>
                                <linearGradient id="tiffinGradient" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" style="stop-color:#667eea;stop-opacity:1" />
                                    <stop offset="100%" style="stop-color:#764ba2;stop-opacity:1" />
                                </linearGradient>
                            </defs>
                            
                            <!-- Main Tiffin Container -->
                            <ellipse cx="250" cy="450" rx="150" ry="20" fill="rgba(0,0,0,0.1)"/>
                            
                            <!-- Bottom Layer -->
                            <rect x="150" y="350" width="200" height="80" rx="15" fill="url(#tiffinGradient)"/>
                            <ellipse cx="250" cy="350" rx="100" ry="15" fill="#764ba2"/>
                            
                            <!-- Middle Layer -->
                            <rect x="150" y="270" width="200" height="80" rx="15" fill="url(#tiffinGradient)"/>
                            <ellipse cx="250" cy="270" rx="100" ry="15" fill="#764ba2"/>
                            
                            <!-- Top Layer -->
                            <rect x="150" y="190" width="200" height="80" rx="15" fill="url(#tiffinGradient)"/>
                            <ellipse cx="250" cy="190" rx="100" ry="15" fill="#764ba2"/>
                            
                            <!-- Lid -->
                            <ellipse cx="250" cy="170" rx="110" ry="20" fill="#667eea"/>
                            <ellipse cx="250" cy="160" rx="115" ry="25" fill="url(#tiffinGradient)"/>
                            
                            <!-- Handle -->
                            <path d="M 220 140 Q 220 100 250 100 Q 280 100 280 140" stroke="#667eea" stroke-width="12" fill="none" stroke-linecap="round"/>
                            
                            <!-- Food Icons -->
                            <text x="235" y="235" font-size="30">🍛</text>
                            <text x="235" y="315" font-size="30">🥘</text>
                            <text x="235" y="395" font-size="30">🍲</text>
                            
                            <!-- Steam -->
                            <circle cx="200" cy="120" r="8" fill="rgba(255,255,255,0.6)">
                                <animate attributeName="cy" values="120;80;120" dur="3s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="3s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="250" cy="110" r="10" fill="rgba(255,255,255,0.6)">
                                <animate attributeName="cy" values="110;70;110" dur="3.5s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="3.5s" repeatCount="indefinite"/>
                            </circle>
                            <circle cx="300" cy="120" r="8" fill="rgba(255,255,255,0.6)">
                                <animate attributeName="cy" values="120;80;120" dur="4s" repeatCount="indefinite"/>
                                <animate attributeName="opacity" values="0.6;0;0.6" dur="4s" repeatCount="indefinite"/>
                            </circle>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Features Section -->
    <section id="features-section">
        <div class="container" id="features-container-main">
            <h2 id="features-heading">Why Choose DabbaExpress?</h2>
            <p id="features-subheading">Join thousands of satisfied customers who trust us for their daily meals</p>
            
            <div class="row g-4" id="features-cards-row">
                <div class="col-lg-3 col-md-6" id="feature-column-1">
                    <div class="feature-card" id="feature-card-1">
                        <div class="feature-icon" id="feature-icon-1">🏠</div>
                        <h3 class="feature-title" id="feature-title-1">Home-Cooked Quality</h3>
                        <p class="feature-description" id="feature-desc-1">
                            Authentic homemade meals prepared with love and care by experienced home chefs.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="feature-column-2">
                    <div class="feature-card" id="feature-card-2">
                        <div class="feature-icon" id="feature-icon-2">⚡</div>
                        <h3 class="feature-title" id="feature-title-2">Fast Delivery</h3>
                        <p class="feature-description" id="feature-desc-2">
                            Lightning-fast delivery ensures your food arrives hot and fresh at your doorstep.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="feature-column-3">
                    <div class="feature-card" id="feature-card-3">
                        <div class="feature-icon" id="feature-icon-3">💰</div>
                        <h3 class="feature-title" id="feature-title-3">Affordable Prices</h3>
                        <p class="feature-description" id="feature-desc-3">
                            Quality meals at prices that won't break the bank. Best value for money guaranteed.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="feature-column-4">
                    <div class="feature-card" id="feature-card-4">
                        <div class="feature-icon" id="feature-icon-4">🌟</div>
                        <h3 class="feature-title" id="feature-title-4">Quality Assured</h3>
                        <p class="feature-description" id="feature-desc-4">
                            All our vendors are verified and follow strict quality and hygiene standards.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
<?php
require_once 'includes/footer.php';
?>
