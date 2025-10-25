
<?php
// Tiffin Marketplace - About Page
// Placeholder for about page content
require_once '../includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Learn about DabbaExpress - Your trusted tiffin delivery partner">
    <title>About Us - DabbaExpress</title>
    
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
        
        body#about-page-body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 50%, #b8e5f5 100%);
            overflow-x: hidden;
        }
        
        /* Hero Section */
        section#about-hero-section {
            min-height: 60vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            padding: 10rem 0 6rem;
            overflow: hidden;
        }
        
        .about-hero-bg#about-hero-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .about-floating-element-1, .about-floating-element-2, 
        .about-floating-element-3, .about-floating-element-4,
        .about-floating-element-5, .about-floating-element-6 {
            position: absolute;
            font-size: 5rem;
            opacity: 0.1;
            animation: about-hero-float 25s ease-in-out infinite;
        }
        
        .about-floating-element-1 { top: 10%; left: 5%; animation-delay: 0s; }
        .about-floating-element-2 { top: 20%; right: 10%; animation-delay: 3s; }
        .about-floating-element-3 { bottom: 15%; left: 15%; animation-delay: 6s; }
        .about-floating-element-4 { bottom: 25%; right: 8%; animation-delay: 9s; }
        .about-floating-element-5 { top: 50%; left: 8%; animation-delay: 4s; }
        .about-floating-element-6 { top: 60%; right: 12%; animation-delay: 7s; }
        
        @keyframes about-hero-float {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            25% { transform: translate(20px, -20px) rotate(90deg) scale(1.1); }
            50% { transform: translate(-15px, -40px) rotate(180deg) scale(0.9); }
            75% { transform: translate(-30px, -10px) rotate(270deg) scale(1.05); }
        }
        
        .about-hero-content#about-hero-main-content {
            text-align: center;
            position: relative;
            z-index: 1;
        }
        
        h1#about-hero-main-title {
            font-family: 'Righteous', cursive;
            font-size: 5rem;
            font-weight: 900;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            animation: about-title-entrance 1s ease-out;
        }
        
        @keyframes about-title-entrance {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        p#about-hero-subtitle {
            font-size: 1.5rem;
            color: var(--dark-primary);
            max-width: 800px;
            margin: 0 auto;
            line-height: 1.8;
            animation: about-subtitle-entrance 1s ease-out 0.3s both;
        }
        
        @keyframes about-subtitle-entrance {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Story Section */
        section#our-story-section {
            padding: 6rem 0;
            background: white;
            position: relative;
        }
        
        .story-container#story-main-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        h2#story-section-heading {
            font-size: 3rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .story-content#story-text-content {
            background: linear-gradient(135deg, #f8f9ff 0%, #ffffff 100%);
            border-radius: 30px;
            padding: 4rem 3rem;
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.15);
            position: relative;
            overflow: hidden;
        }
        
        .story-content#story-text-content::before {
            content: '🍱';
            position: absolute;
            font-size: 15rem;
            opacity: 0.05;
            top: -50px;
            right: -50px;
            z-index: 0;
        }
        
        p.story-paragraph#story-para-1,
        p.story-paragraph#story-para-2,
        p.story-paragraph#story-para-3 {
            font-size: 1.15rem;
            line-height: 2;
            color: #555;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        /* Mission & Vision Section */
        section#mission-vision-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        }
        
        .mission-vision-container#mission-vision-main {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .mission-card#mission-content-card,
        .vision-card#vision-content-card {
            background: white;
            border-radius: 30px;
            padding: 4rem 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.15);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .mission-card#mission-content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--primary-gradient);
        }
        
        .vision-card#vision-content-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 6px;
            background: var(--secondary-gradient);
        }
        
        .mission-card#mission-content-card:hover,
        .vision-card#vision-content-card:hover {
            transform: translateY(-15px) scale(1.02);
            box-shadow: 0 30px 80px rgba(0,0,0,0.25);
        }
        
        .mission-icon#mission-icon-element,
        .vision-icon#vision-icon-element {
            font-size: 5rem;
            margin-bottom: 2rem;
            display: inline-block;
            animation: mission-vision-float 3s ease-in-out infinite;
        }
        
        @keyframes mission-vision-float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
        
        .vision-icon#vision-icon-element {
            animation-delay: 1.5s;
        }
        
        h3#mission-title,
        h3#vision-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: var(--dark-primary);
            margin-bottom: 1.5rem;
        }
        
        p#mission-description,
        p#vision-description {
            font-size: 1.15rem;
            line-height: 2;
            color: #555;
        }
        
        /* Values Section */
        section#values-section {
            padding: 6rem 0;
            background: white;
        }
        
        h2#values-main-heading {
            font-size: 3rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1rem;
            text-align: center;
        }
        
        p#values-subheading {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 4rem;
        }
        
        .value-card#value-card-1,
        .value-card#value-card-2,
        .value-card#value-card-3,
        .value-card#value-card-4 {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
            border-radius: 25px;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border: 2px solid transparent;
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .value-card#value-card-1::before,
        .value-card#value-card-2::before,
        .value-card#value-card-3::before,
        .value-card#value-card-4::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            transition: height 0.4s ease;
        }
        
        .value-card#value-card-1::before {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .value-card#value-card-2::before {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }
        
        .value-card#value-card-3::before {
            background: linear-gradient(135deg, #fa709a 0%, #fee140 100%);
        }
        
        .value-card#value-card-4::before {
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
        }
        
        .value-card#value-card-1:hover,
        .value-card#value-card-2:hover,
        .value-card#value-card-3:hover,
        .value-card#value-card-4:hover {
            transform: translateY(-15px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
            border-color: #667eea;
        }
        
        .value-card#value-card-1:hover::before,
        .value-card#value-card-2:hover::before,
        .value-card#value-card-3:hover::before,
        .value-card#value-card-4:hover::before {
            height: 100%;
            opacity: 0.05;
        }
        
        .value-icon#value-icon-1,
        .value-icon#value-icon-2,
        .value-icon#value-icon-3,
        .value-icon#value-icon-4 {
            font-size: 4rem;
            margin-bottom: 1.5rem;
            display: inline-block;
            animation: value-icon-bounce 2s ease-in-out infinite;
        }
        
        @keyframes value-icon-bounce {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .value-icon#value-icon-2 { animation-delay: 0.5s; }
        .value-icon#value-icon-3 { animation-delay: 1s; }
        .value-icon#value-icon-4 { animation-delay: 1.5s; }
        
        h4.value-title#value-title-1,
        h4.value-title#value-title-2,
        h4.value-title#value-title-3,
        h4.value-title#value-title-4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-primary);
            margin-bottom: 1rem;
        }
        
        p.value-description#value-desc-1,
        p.value-description#value-desc-2,
        p.value-description#value-desc-3,
        p.value-description#value-desc-4 {
            color: #666;
            line-height: 1.8;
            font-size: 1rem;
        }
        
        /* Team Section */
        section#team-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        }
        
        h2#team-main-heading {
            font-size: 3rem;
            font-weight: 800;
            color: white;
            margin-bottom: 1rem;
            text-align: center;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.2);
        }
        
        p#team-subheading {
            text-align: center;
            font-size: 1.2rem;
            color: white;
            margin-bottom: 4rem;
            opacity: 0.95;
        }
        
        .team-member-card#team-member-1,
        .team-member-card#team-member-2,
        .team-member-card#team-member-3,
        .team-member-card#team-member-4 {
            background: white;
            border-radius: 25px;
            padding: 3rem 2rem;
            text-align: center;
            transition: all 0.4s ease;
            box-shadow: 0 10px 40px rgba(0,0,0,0.15);
            position: relative;
            overflow: hidden;
            height: 100%;
        }
        
        .team-member-card#team-member-1:hover,
        .team-member-card#team-member-2:hover,
        .team-member-card#team-member-3:hover,
        .team-member-card#team-member-4:hover {
            transform: translateY(-15px) scale(1.03);
            box-shadow: 0 25px 60px rgba(0,0,0,0.25);
        }
        
        .team-avatar#team-avatar-1,
        .team-avatar#team-avatar-2,
        .team-avatar#team-avatar-3,
        .team-avatar#team-avatar-4 {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: var(--primary-gradient);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            margin: 0 auto 1.5rem;
            box-shadow: 0 10px 30px rgba(102, 126, 234, 0.4);
            animation: team-avatar-pulse 2s ease-in-out infinite;
        }
        
        @keyframes team-avatar-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        
        .team-avatar#team-avatar-2 { animation-delay: 0.5s; }
        .team-avatar#team-avatar-3 { animation-delay: 1s; }
        .team-avatar#team-avatar-4 { animation-delay: 1.5s; }
        
        h4.team-name#team-name-1,
        h4.team-name#team-name-2,
        h4.team-name#team-name-3,
        h4.team-name#team-name-4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--dark-primary);
            margin-bottom: 0.5rem;
        }
        
        p.team-role#team-role-1,
        p.team-role#team-role-2,
        p.team-role#team-role-3,
        p.team-role#team-role-4 {
            color: #667eea;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
        }
        
        p.team-bio#team-bio-1,
        p.team-bio#team-bio-2,
        p.team-bio#team-bio-3,
        p.team-bio#team-bio-4 {
            color: #666;
            line-height: 1.8;
            font-size: 0.95rem;
        }
        
        /* Statistics Section */
        section#statistics-section {
            padding: 6rem 0;
            background: white;
        }
        
        .stat-card#stat-card-1,
        .stat-card#stat-card-2,
        .stat-card#stat-card-3,
        .stat-card#stat-card-4 {
            text-align: center;
            padding: 3rem 2rem;
            background: linear-gradient(135deg, #ffffff 0%, #f8f9ff 100%);
            border-radius: 25px;
            transition: all 0.4s ease;
            box-shadow: 0 10px 40px rgba(102, 126, 234, 0.1);
            position: relative;
            overflow: hidden;
        }
        
        .stat-card#stat-card-1::before,
        .stat-card#stat-card-2::before,
        .stat-card#stat-card-3::before,
        .stat-card#stat-card-4::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: var(--primary-gradient);
            transition: height 0.4s ease;
        }
        
        .stat-card#stat-card-1:hover,
        .stat-card#stat-card-2:hover,
        .stat-card#stat-card-3:hover,
        .stat-card#stat-card-4:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 60px rgba(102, 126, 234, 0.3);
        }
        
        .stat-card#stat-card-1:hover::before,
        .stat-card#stat-card-2:hover::before,
        .stat-card#stat-card-3:hover::before,
        .stat-card#stat-card-4:hover::before {
            height: 100%;
            opacity: 0.05;
        }
        
        .stat-number#stat-number-1,
        .stat-number#stat-number-2,
        .stat-number#stat-number-3,
        .stat-number#stat-number-4 {
            font-size: 4rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
            display: block;
        }
        
        p.stat-label#stat-label-1,
        p.stat-label#stat-label-2,
        p.stat-label#stat-label-3,
        p.stat-label#stat-label-4 {
            font-size: 1.2rem;
            color: var(--dark-primary);
            font-weight: 600;
        }
        
        /* CTA Section */
        section#about-cta-section {
            padding: 6rem 0;
            background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        }
        
        .about-cta-content#about-cta-wrapper {
            background: white;
            border-radius: 40px;
            padding: 5rem 3rem;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0,0,0,0.2);
            position: relative;
            overflow: hidden;
        }
        
        .about-cta-decoration#about-cta-bg-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.05;
            background-image: radial-gradient(circle, #667eea 2px, transparent 2px);
            background-size: 40px 40px;
        }
        
        h2#about-cta-heading {
            font-size: 3rem;
            font-weight: 800;
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }
        
        p#about-cta-text {
            font-size: 1.3rem;
            color: #666;
            margin-bottom: 2.5rem;
            position: relative;
            z-index: 1;
        }
        
        .btn-about-cta#about-cta-button {
            background: var(--primary-gradient);
            color: white;
            border: none;
            padding: 1.5rem 4rem;
            border-radius: 50px;
            font-weight: 800;
            font-size: 1.2rem;
            transition: all 0.4s ease;
            box-shadow: 0 15px 40px rgba(102, 126, 234, 0.4);
            position: relative;
            z-index: 1;
        }
        
        .btn-about-cta#about-cta-button:hover {
            transform: translateY(-8px) scale(1.08);
            box-shadow: 0 20px 50px rgba(102, 126, 234, 0.6);
        }
        
        /* Responsive Design */
        @media (max-width: 991px) {
            h1#about-hero-main-title {
                font-size: 3.5rem;
            }
            
            p#about-hero-subtitle {
                font-size: 1.2rem;
            }
            
            h2#story-section-heading,
            h2#values-main-heading,
            h2#team-main-heading,
            h2#about-cta-heading {
                font-size: 2.5rem;
            }
            
            h3#mission-title,
            h3#vision-title {
                font-size: 2rem;
            }
        }
        
        @media (max-width: 576px) {
            h1#about-hero-main-title {
                font-size: 2.5rem;
            }
            
            p#about-hero-subtitle {
                font-size: 1rem;
            }
            
            h2#story-section-heading,
            h2#values-main-heading,
            h2#team-main-heading,
            h2#about-cta-heading {
                font-size: 2rem;
            }
            
            .story-content#story-text-content,
            .mission-card#mission-content-card,
            .vision-card#vision-content-card {
                padding: 2.5rem 1.5rem;
            }
        }
    </style>
</head>
<body id="about-page-body">
    
    <!-- Hero Section -->
    <section id="about-hero-section">
        <div class="about-hero-bg" id="about-hero-background">
            <div class="about-floating-element-1">🍱</div>
            <div class="about-floating-element-2">👨‍🍳</div>
            <div class="about-floating-element-3">🥘</div>
            <div class="about-floating-element-4">🚚</div>
            <div class="about-floating-element-5">🏠</div>
            <div class="about-floating-element-6">💚</div>
        </div>
        
        <div class="container" id="about-hero-container">
            <div class="about-hero-content" id="about-hero-main-content">
                <h1 id="about-hero-main-title">About DabbaExpress</h1>
                <p id="about-hero-subtitle">
                    Connecting hearts through homemade food. We're on a mission to bring authentic home-cooked meals to every doorstep, one dabba at a time.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Our Story Section -->
    <section id="our-story-section">
        <div class="container story-container" id="story-main-container">
            <h2 id="story-section-heading">Our Story</h2>
            <div class="story-content" id="story-text-content">
                <p class="story-paragraph" id="story-para-1">
                    DabbaExpress was born from a simple yet powerful idea: everyone deserves access to delicious, home-cooked meals, even when they're far from home. Our founders, missing their mothers' cooking while living away, realized that thousands of people face the same challenge every day.
                </p>
                <p class="story-paragraph" id="story-para-2">
                    In 2020, we started with just 5 local home chefs and 20 customers in our neighborhood. Today, we're proud to connect thousands of food lovers with talented home cooks across the city. Each meal delivered carries with it the warmth, care, and authenticity of a home kitchen.
                </p>
                <p class="story-paragraph" id="story-para-3">
                    What sets us apart is our commitment to quality and community. We personally verify each vendor, ensure food safety standards, and maintain the perfect balance between traditional taste and modern convenience. DabbaExpress isn't just a food delivery service—it's a bridge between the comfort of home cooking and the fast pace of modern life.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Mission & Vision Section -->
    <section id="mission-vision-section">
        <div class="container mission-vision-container" id="mission-vision-main">
            <div class="row g-4" id="mission-vision-row">
                <div class="col-lg-6" id="mission-column">
                    <div class="mission-card" id="mission-content-card">
                        <div class="mission-icon" id="mission-icon-element">🎯</div>
                        <h3 id="mission-title">Our Mission</h3>
                        <p id="mission-description">
                            To revolutionize the tiffin service industry by creating a trusted platform that empowers home chefs, supports local communities, and delivers authentic homemade meals to people who crave the taste of home. We strive to make healthy, affordable, and delicious food accessible to everyone while preserving the cultural heritage of traditional cooking.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" id="vision-column">
                    <div class="vision-card" id="vision-content-card">
                        <div class="vision-icon" id="vision-icon-element">🌟</div>
                        <h3 id="vision-title">Our Vision</h3>
                        <p id="vision-description">
                            To become India's most loved and trusted tiffin marketplace, where every meal tells a story and every delivery brings happiness. We envision a future where homemade food is the first choice for millions, where home chefs are celebrated entrepreneurs, and where technology seamlessly connects tradition with convenience.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Values Section -->
    <section id="values-section">
        <div class="container" id="values-main-container">
            <h2 id="values-main-heading">Our Core Values</h2>
            <p id="values-subheading">The principles that guide everything we do</p>
            
            <div class="row g-4" id="values-cards-row">
                <div class="col-lg-3 col-md-6" id="value-column-1">
                    <div class="value-card" id="value-card-1">
                        <div class="value-icon" id="value-icon-1">🤝</div>
                        <h4 class="value-title" id="value-title-1">Trust & Transparency</h4>
                        <p class="value-description" id="value-desc-1">
                            We build trust through transparent operations, verified vendors, and honest communication with our customers.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="value-column-2">
                    <div class="value-card" id="value-card-2">
                        <div class="value-icon" id="value-icon-2">⭐</div>
                        <h4 class="value-title" id="value-title-2">Quality Excellence</h4>
                        <p class="value-description" id="value-desc-2">
                            Every meal meets our high standards of hygiene, taste, and nutritional value. No compromises on quality.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="value-column-3">
                    <div class="value-card" id="value-card-3">
                        <div class="value-icon" id="value-icon-3">💖</div>
                        <h4 class="value-title" id="value-title-3">Community First</h4>
                        <p class="value-description" id="value-desc-3">
                            We empower local home chefs, support small businesses, and strengthen community bonds through food.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="value-column-4">
                    <div class="value-card" id="value-card-4">
                        <div class="value-icon" id="value-icon-4">🚀</div>
                        <h4 class="value-title" id="value-title-4">Innovation & Growth</h4>
                        <p class="value-description" id="value-desc-4">
                            We continuously innovate our platform and services to provide the best experience for all stakeholders.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Team Section -->
    <section id="team-section">
        <div class="container" id="team-main-container">
            <h2 id="team-main-heading">Meet Our Team</h2>
            <p id="team-subheading">The passionate people behind DabbaExpress</p>
            
            <div class="row g-4" id="team-members-row">
                <div class="col-lg-3 col-md-6" id="team-column-1">
                    <div class="team-member-card" id="team-member-1">
                        <div class="team-avatar" id="team-avatar-1">👨‍💼</div>
                        <h4 class="team-name" id="team-name-1">Rajesh Kumar</h4>
                        <p class="team-role" id="team-role-1">Founder & CEO</p>
                        <p class="team-bio" id="team-bio-1">
                            Passionate about connecting people through food. 10+ years in food-tech industry.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="team-column-2">
                    <div class="team-member-card" id="team-member-2">
                        <div class="team-avatar" id="team-avatar-2">👩‍💻</div>
                        <h4 class="team-name" id="team-name-2">Priya Sharma</h4>
                        <p class="team-role" id="team-role-2">Chief Technology Officer</p>
                        <p class="team-bio" id="team-bio-2">
                            Tech enthusiast building scalable solutions. Expert in platform development.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="team-column-3">
                    <div class="team-member-card" id="team-member-3">
                        <div class="team-avatar" id="team-avatar-3">👨‍🍳</div>
                        <h4 class="team-name" id="team-name-3">Amit Patel</h4>
                        <p class="team-role" id="team-role-3">Head of Operations</p>
                        <p class="team-bio" id="team-bio-3">
                            Ensuring smooth operations and timely deliveries. 15+ years in logistics.
                        </p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="team-column-4">
                    <div class="team-member-card" id="team-member-4">
                        <div class="team-avatar" id="team-avatar-4">👩‍🎨</div>
                        <h4 class="team-name" id="team-name-4">Sneha Reddy</h4>
                        <p class="team-role" id="team-role-4">Marketing Director</p>
                        <p class="team-bio" id="team-bio-4">
                            Creating meaningful connections with customers. Brand storytelling expert.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Statistics Section -->
    <section id="statistics-section">
        <div class="container" id="statistics-main-container">
            <div class="row g-4" id="statistics-row">
                <div class="col-lg-3 col-md-6" id="stat-column-1">
                    <div class="stat-card" id="stat-card-1">
                        <span class="stat-number" id="stat-number-1">50K+</span>
                        <p class="stat-label" id="stat-label-1">Happy Customers</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="stat-column-2">
                    <div class="stat-card" id="stat-card-2">
                        <span class="stat-number" id="stat-number-2">500+</span>
                        <p class="stat-label" id="stat-label-2">Verified Vendors</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="stat-column-3">
                    <div class="stat-card" id="stat-card-3">
                        <span class="stat-number" id="stat-number-3">2M+</span>
                        <p class="stat-label" id="stat-label-3">Meals Delivered</p>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-6" id="stat-column-4">
                    <div class="stat-card" id="stat-card-4">
                        <span class="stat-number" id="stat-number-4">15+</span>
                        <p class="stat-label" id="stat-label-4">Cities Covered</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- CTA Section -->
    <section id="about-cta-section">
        <div class="container" id="about-cta-container">
            <div class="about-cta-content" id="about-cta-wrapper">
                <div class="about-cta-decoration" id="about-cta-bg-pattern"></div>
                <h2 id="about-cta-heading">Ready to Experience Home-Cooked Goodness?</h2>
                <p id="about-cta-text">
                    Join thousands of satisfied customers who trust DabbaExpress for their daily meals. Order now and taste the difference!
                </p>
                <button class="btn btn-about-cta" id="about-cta-button">
                    Start Ordering Today 🍱
                </button>
            </div>
        </div>
    </section>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
// Tiffin Marketplace - About Page
// Placeholder for about page content
require_once '../includes/footer.php';
?>
