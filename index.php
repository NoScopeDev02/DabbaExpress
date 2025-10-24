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
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 50%, #f093fb 100%);
            --secondary-gradient: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
            --accent-gradient: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
            --success-gradient: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
            --dark-primary: #2c3e50;
            --light-bg: #f0f4ff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body#landing-page-body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 50%, #b8e5f5 100%);
            overflow-x: hidden;
        }
        
        /* Hero Section */
        section#hero-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            position: relative;
            padding: 8rem 0 4rem;
            overflow: hidden;
        }
        
        .hero-bg-animation#hero-background-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .hero-floating-icon-1, .hero-floating-icon-2, .hero-floating-icon-3,
        .hero-floating-icon-4, .hero-floating-icon-5, .hero-floating-icon-6 {
            position: absolute;
            font-size: 4rem;
            opacity: 0.1;
            animation: hero-float 20s ease-in-out infinite;
        }
        
        .hero-floating-icon-1 { top: 10%; left: 10%; animation-delay: 0s; }
        .hero-floating-icon-2 { top: 20%; right: 15%; animation-delay: 2s; }
        .hero-floating-icon-3 { bottom: 20%; left: 20%; animation-delay: 4s; }
        .hero-floating-icon-4 { bottom: 30%; right: 10%; animation-delay: 6s; }
        .hero-floating-icon-5 { top: 50%; left: 5%; animation-delay: 3s; }
        .hero-floating-icon-6 { top: 60%; right: 5%; animation-delay: 5s; }
        
        @keyframes hero-float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(180deg); }
        }
        
        .hero-content#hero-main-content {
            position: relative;
            z-index: 1;
        }
        
        h1#hero-main-heading {
            font-family: 'Righteous', cursive;
            font-size: 4.5rem;
            font-weight: 900;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            line-height: 1.2;
            animation: hero-title-entrance 1s ease-out;
        }
        
        @keyframes hero-title-entrance {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        p#hero-subtitle {
            font-size: 1.4rem;
            color: var(--dark-primary);
            margin-bottom: 2rem;
            line-height: 1.8;
            animation: hero-subtitle-entrance 1s ease-out 0.3s both;
        }
        
        @keyframes hero-subtitle-entrance {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        .hero-cta-group#hero-button-container {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            animation: hero-cta-entrance 1s ease-out 0.6s both;
        }
        
        @keyframes hero-cta-entrance {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .btn-primary-custom#hero-cta-primary {
            background: var(--primary-gradient);
            border: none;
            color: white;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            position: relative;
            overflow: hidden;
        }
        
        .btn-primary-custom#hero-cta-primary::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.6s;
        }
        
        .btn-primary-custom#hero-cta-primary:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.6);
        }
        
        .btn-primary-custom#hero-cta-primary:hover::before {
            left: 100%;
        }
        
        .btn-secondary-custom#hero-cta-secondary {
            background: white;
            border: 3px solid transparent;
            background-clip: padding-box;
            color: #667eea;
            padding: 1.2rem 3rem;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            transition: all 0.4s ease;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            position: relative;
        }
        
        .btn-secondary-custom#hero-cta-secondary::before {
            content: '';
            position: absolute;
            top: -3px;
            left: -3px;
            right: -3px;
            bottom: -3px;
            background: var(--primary-gradient);
            border-radius: 50px;
            z-index: -1;
        }
        
        .btn-secondary-custom#hero-cta-secondary:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.3);
            color: white;
            background: var(--primary-gradient);
        }
        
        .hero-image-container#hero-image-wrapper {
            position: relative;
            animation: hero-image-entrance 1s ease-out 0.9s both;
        }
        
        @keyframes hero-image-entrance {
            from {
                opacity: 0;
                transform: scale(0.8) rotate(-10deg);
            }
            to {
                opacity: 1;
                transform: scale(1) rotate(0deg);
            }
        }
        
        .hero-image-main#hero-tiffin-illustration {
            width: 100%;
            max-width: 600px;
            height: auto;
            filter: drop-shadow(0 20px 50px rgba(0,0,0,0.2));
            animation: hero-image-float 6s ease-in-out infinite;
        }
        
        @keyframes hero-image-float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }
        
        /* Features Section */
        section#features-section {
            padding: 6rem 0;
            background: white;
            position: relative;
        }
        
        h2#features-heading {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
        }
        
        p#features-subheading {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 4rem;
        }
        
        .feature-card#feature-card-1,
        .feature-card#feature-card-2,
        .feature-card#feature-card-3,
        .feature-card#feature-card-4 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
            border-radius: 30px;
            padding: 3rem 2rem;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .feature-card#feature-card-1::before,
        .feature-card#feature-card-2::before,
        .feature-card#feature-card-3::before,
        .feature-card#feature-card-4::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-gradient);
            transition: height 0.4s ease;
        }
        
        .feature-card#feature-card-1:hover,
        .feature-card#feature-card-2:hover,
        .feature-card#feature-card-3:hover,
        .feature-card#feature-card-4:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
            border-color: #667eea;
        }
        
        .feature-card#feature-card-1:hover::before,
        .feature-card#feature-card-2:hover::before,
        .feature-card#feature-card-3:hover::before,
        .feature-card#feature-card-4:hover::before {
            height: 100%;
            opacity: 0.05;
        }
        
        .feature-icon#feature-icon-1,
        .feature-icon#feature-icon-2,
        .feature-icon#feature-icon-3,
        .feature-icon#feature-icon-4 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            animation: feature-icon-bounce 2s ease-in-out infinite;
        }
        
        @keyframes feature-icon-bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        
        .feature-icon#feature-icon-2 { animation-delay: 0.5s; }
        .feature-icon#feature-icon-3 { animation-delay: 1s; }
        .feature-icon#feature-icon-4 { animation-delay: 1.5s; }
        
        h3.feature-title#feature-title-1,
        h3.feature-title#feature-title-2,
        h3.feature-title#feature-title-3,
        h3.feature-title#feature-title-4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-primary);
            margin-bottom: 1rem;
        }
        
        p.feature-description#feature-desc-1,
        p.feature-description#feature-desc-2,
        p.feature-description#feature-desc-3,
        p.feature-description#feature-desc-4 {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }
        
        /* How It Works Section */
        section#how-it-works-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
            position: relative;
            overflow: hidden;
        }
        
        h2#how-it-works-heading {
            text-align: center;
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }
        
        p#how-it-works-subheading {
            text-align: center;
            font-size: 1.2rem;
            color: white;
            margin-bottom: 4rem;
            opacity: 0.9;
        }
        
        .step-container#step-wrapper {
            position: relative;
        }
        
        .step-card#step-card-1,
        .step-card#step-card-2,
        .step-card#step-card-3 {
            background: white;
            border-radius: 25px;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            height: 100%;
        }
        
        .step-card#step-card-1:hover,
        .step-card#step-card-2:hover,
        .step-card#step-card-3:hover {
            transform: scale(1.05);
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
        }
        
        .step-number#step-number-1,
        .step-number#step-number-2,
        .step-number#step-number-3 {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: var(--primary-gradient);
            color: white;
            font-size: 2rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            animation: step-number-pulse 2s ease-in-out infinite;
        }
        
        @keyframes step-number-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .step-number#step-number-2 { animation-delay: 0.7s; }
        .step-number#step-number-3 { animation-delay: 1.4s; }
        
        h3.step-title#step-title-1,
        h3.step-title#step-title-2,
        h3.step-title#step-title-3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-primary);
            margin-bottom: 1rem;
        }
        
        p.step-description#step-desc-1,
        p.step-description#step-desc-2,
        p.step-description#step-desc-3 {
            color: #666;
            line-height: 1.8;
        }
        
        /* CTA Section */
        section#cta-section {
            padding: 6rem 0;
            background: white;
            position: relative;
            overflow: hidden;
        }
        
        .cta-content#cta-content-wrapper {
            background: var(--primary-gradient);
            border-radius: 40px;
            padding: 5rem 3rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.4);
        }
        
        .cta-bg-pattern#cta-background-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
            background-image: radial-gradient(circle, white 2px, transparent 2px);
            background-size: 40px 40px;
        }
        
        h2#cta-main-heading {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        p#cta-description {
            font-size: 1.3rem;
            color: white;
            margin-bottom: 2.5rem;
            opacity: 0.95;
            position: relative;
            z-index: 1;
        }
        
        .btn-cta-large#cta-action-button {
            background: white;
            color: #667eea;
            border: none;
            padding: 1.5rem 4rem;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.2rem;
            transition: all 0.4s ease;
            box-shadow: 0 15px 40px rgba(0,0,0,0.2);
            position: relative;
            z-index: 1;
        }
        
        .btn-cta-large#cta-action-button:hover {
            transform: translateY(-8px) scale(1.08);
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            background: #fee140;
            color: var(--dark-primary);
        }
        
        /* Footer */
        footer#main-footer {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            color: white;
            padding: 3rem 0 1rem;
        }
        
        .footer-content#footer-main-content {
            text-align: center;
        }
        
        p#footer-brand-name {
            font-size: 2rem;
            font-weight: 800;
            font-family: 'Righteous', cursive;
            margin-bottom: 1rem;
        }
        
        p#footer-tagline {
            font-size: 1rem;
            opacity: 0.8;
            margin-bottom: 2rem;
        }
        
        .footer-links#footer-navigation-links {
            display: flex;
            gap: 2rem;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 2rem;
        }
        
        a.footer-link#footer-link-about,
        a.footer-link#footer-link-vendors,
        a.footer-link#footer-link-contact,
        a.footer-link#footer-link-terms,
        a.footer-link#footer-link-privacy {
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        a.footer-link#footer-link-about:hover,
        a.footer-link#footer-link-vendors:hover,
        a.footer-link#footer-link-contact:hover,
        a.footer-link#footer-link-terms:hover,
        a.footer-link#footer-link-privacy:hover {
            color: #4facfe;
            transform: translateY(-2px);
        }
        
        p#footer-copyright {
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.2);
            opacity: 0.7;
            font-size: 0.9rem;
        }
        
        /* Responsive Design */
        @media (max-width: 991px) {
            h1#hero-main-heading {
                font-size: 3rem;
            }
            
            p#hero-subtitle {
                font-size: 1.2rem;
            }
            
            h2#features-heading,
            h2#how-it-works-heading,
            h2#cta-main-heading {
                font-size: 2.5rem;
            }
            
            .hero-image-main#hero-tiffin-illustration {
                max-width: 400px;
                margin-top: 3rem;
            }
        }
        
        @media (max-width: 576px) {
            h1#hero-main-heading {
                font-size: 2.2rem;
            }
            
            p#hero-subtitle {
                font-size: 1rem;
            }
            
            .hero-cta-group#hero-button-container {
                flex-direction: column;
            }
            
            .btn-primary-custom#hero-cta-primary,
            .btn-secondary-custom#hero-cta-secondary {
                width: 100%;
            }
            
            h2#features-heading,
            h2#how-it-works-heading,
            h2#cta-main-heading {
                font-size: 2rem;
            }
        }
    </style>
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
