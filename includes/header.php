<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="DabbaExpress - Your trusted tiffin marketplace connecting customers with local vendors">
    <title>DabbaExpress - Home Cooked Meals Delivered</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Righteous&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-gradient: linear-gradient(135deg, #FF6B6B 0%, #FF8E53 50%, #FFA500 100%);
            --secondary-gradient: linear-gradient(135deg, #4ECDC4 0%, #44A08D 100%);
            --accent-gradient: linear-gradient(135deg, #F093FB 0%, #F5576C 100%);
            --dark-primary: #1a1a2e;
            --dark-secondary: #16213e;
            --light-cream: #fff8f0;
            --success-color: #06d6a0;
            --warning-color: #FFD93D;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body#dabbaexpress-body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #fff5f0 0%, #ffe8d6 50%, #ffd8b8 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }
        
        /* Animated Background Elements */
        .floating-bg-container#floating-bg-main {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 0;
            overflow: hidden;
        }
        
        .floating-element-1, .floating-element-2, .floating-element-3, 
        .floating-element-4, .floating-element-5, .floating-element-6 {
            position: absolute;
            font-size: 3rem;
            opacity: 0.08;
            animation: float-drift 15s ease-in-out infinite;
        }
        
        .floating-element-1 { top: 10%; left: 5%; animation-delay: 0s; animation-duration: 20s; }
        .floating-element-2 { top: 50%; left: 85%; animation-delay: 3s; animation-duration: 18s; }
        .floating-element-3 { top: 70%; left: 15%; animation-delay: 6s; animation-duration: 22s; }
        .floating-element-4 { top: 30%; left: 75%; animation-delay: 2s; animation-duration: 19s; }
        .floating-element-5 { top: 85%; left: 60%; animation-delay: 4s; animation-duration: 21s; }
        .floating-element-6 { top: 40%; left: 40%; animation-delay: 5s; animation-duration: 17s; }
        
        @keyframes float-drift {
            0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1); }
            25% { transform: translate(30px, -30px) rotate(90deg) scale(1.1); }
            50% { transform: translate(-20px, -50px) rotate(180deg) scale(0.9); }
            75% { transform: translate(-40px, -20px) rotate(270deg) scale(1.05); }
        }
        
        /* Navigation Bar */
        nav.navbar#main-navigation-bar {
            background: var(--primary-gradient) !important;
            box-shadow: 0 8px 32px rgba(255, 107, 107, 0.4);
            border-bottom: 4px solid var(--warning-color);
            padding: 1rem 0;
            position: relative;
            z-index: 1000;
            backdrop-filter: blur(10px);
        }
        
        nav.navbar#main-navigation-bar::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.1), transparent);
            animation: navbar-shimmer 3s infinite;
        }
        
        @keyframes navbar-shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
        
        .container#nav-container-main {
            position: relative;
            z-index: 1;
        }
        
        /* Brand Logo */
        a.navbar-brand#brand-logo-link {
            font-family: 'Righteous', cursive;
            font-weight: 900;
            font-size: 2.2rem;
            color: white !important;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.4), 0 0 20px rgba(255,255,255,0.3);
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            display: flex;
            align-items: center;
            gap: 1rem;
            position: relative;
        }
        
        a.navbar-brand#brand-logo-link:hover {
            transform: scale(1.08) rotate(-2deg);
            text-shadow: 4px 4px 8px rgba(0,0,0,0.5), 0 0 30px rgba(255,255,255,0.5);
        }
        
        .brand-icon-wrapper#brand-icon-container {
            position: relative;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .brand-icon#dabba-icon-animated {
            font-size: 3rem;
            filter: drop-shadow(3px 3px 6px rgba(0,0,0,0.4));
            animation: dabba-bounce 2.5s ease-in-out infinite;
            position: relative;
            z-index: 2;
        }
        
        @keyframes dabba-bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0) rotate(0deg); }
            10% { transform: translateY(-5px) rotate(-5deg); }
            30% { transform: translateY(-8px) rotate(5deg); }
            40% { transform: translateY(-12px) rotate(-3deg); }
            60% { transform: translateY(-6px) rotate(3deg); }
        }
        
        .brand-icon-glow#icon-glow-effect {
            position: absolute;
            width: 70px;
            height: 70px;
            background: radial-gradient(circle, rgba(255,255,255,0.4) 0%, transparent 70%);
            border-radius: 50%;
            animation: glow-pulse 2s ease-in-out infinite;
            z-index: 1;
        }
        
        @keyframes glow-pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.3); opacity: 0.8; }
        }
        
        .brand-text-wrapper#brand-text-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        
        .brand-title#main-brand-title {
            line-height: 1;
            letter-spacing: 2px;
        }
        
        .brand-badge#express-badge {
            background: linear-gradient(135deg, #FFD93D 0%, #FF6B6B 100%);
            color: #1a1a2e;
            padding: 0.35rem 1rem;
            border-radius: 25px;
            font-size: 0.7rem;
            font-weight: 700;
            margin-top: 0.25rem;
            animation: badge-glow 2.5s ease-in-out infinite;
            box-shadow: 0 4px 15px rgba(255, 217, 61, 0.5);
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        
        @keyframes badge-glow {
            0%, 100% { 
                box-shadow: 0 4px 15px rgba(255, 217, 61, 0.5);
                transform: scale(1);
            }
            50% { 
                box-shadow: 0 6px 25px rgba(255, 217, 61, 0.8), 0 0 35px rgba(255, 217, 61, 0.4);
                transform: scale(1.05);
            }
        }
        
        /* Mobile Toggle Button */
        button.navbar-toggler#mobile-menu-toggle {
            border: 3px solid white;
            border-radius: 12px;
            padding: 0.5rem 0.75rem;
            transition: all 0.3s ease;
            background: rgba(255,255,255,0.1);
        }
        
        button.navbar-toggler#mobile-menu-toggle:hover {
            background: rgba(255,255,255,0.3);
            transform: rotate(90deg);
            box-shadow: 0 0 20px rgba(255,255,255,0.5);
        }
        
        button.navbar-toggler#mobile-menu-toggle:focus {
            box-shadow: 0 0 0 0.35rem rgba(255, 255, 255, 0.35);
        }
        
        span.navbar-toggler-icon#toggle-icon {
            filter: brightness(0) invert(1);
        }
        
        /* Navigation Collapse */
        .navbar-collapse#navbarNav {
            position: relative;
        }
        
        /* Navigation Menu */
        ul.navbar-nav#primary-nav-menu {
            gap: 0.5rem;
        }
        
        li.nav-item#nav-item-home,
        li.nav-item#nav-item-vendors,
        li.nav-item#nav-item-about,
        li.nav-item#nav-item-contact,
        li.nav-item#nav-item-cart {
            position: relative;
        }
        
        a.nav-link#nav-link-home,
        a.nav-link#nav-link-vendors,
        a.nav-link#nav-link-about,
        a.nav-link#nav-link-contact {
            color: white !important;
            font-weight: 600;
            padding: 0.85rem 1.5rem !important;
            border-radius: 30px;
            transition: all 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            position: relative;
            overflow: hidden;
            font-size: 1.05rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        a.nav-link#nav-link-home::before,
        a.nav-link#nav-link-vendors::before,
        a.nav-link#nav-link-about::before,
        a.nav-link#nav-link-contact::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            transition: left 0.6s;
        }
        
        a.nav-link#nav-link-home:hover,
        a.nav-link#nav-link-vendors:hover,
        a.nav-link#nav-link-about:hover,
        a.nav-link#nav-link-contact:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        a.nav-link#nav-link-home:hover::before,
        a.nav-link#nav-link-vendors:hover::before,
        a.nav-link#nav-link-about:hover::before,
        a.nav-link#nav-link-contact:hover::before {
            left: 100%;
        }
        
        /* Cart Link */
        a.nav-link#nav-link-cart {
            color: white !important;
            font-weight: 600;
            padding: 0.85rem 1.5rem !important;
            border-radius: 30px;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            background: rgba(255, 255, 255, 0.15);
            font-size: 1.05rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        a.nav-link#nav-link-cart:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        span.cart-count#shopping-cart-badge {
            background: linear-gradient(135deg, #FFD93D 0%, #FF6B6B 100%);
            color: #1a1a2e;
            border-radius: 50%;
            padding: 0.35rem 0.7rem;
            font-size: 0.75rem;
            font-weight: 800;
            margin-left: 0.5rem;
            animation: cart-pulse 1.8s infinite;
            box-shadow: 0 3px 10px rgba(255, 217, 61, 0.6);
            display: inline-block;
            min-width: 28px;
            text-align: center;
        }
        
        @keyframes cart-pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }
        
        /* User Navigation */
        ul.navbar-nav#secondary-nav-menu {
            gap: 0.5rem;
        }
        
        li.nav-item.dropdown#user-dropdown-item,
        li.nav-item.dropdown#vendor-dropdown-item {
            position: relative;
        }
        
        a.nav-link.dropdown-toggle#user-dropdown-toggle,
        a.nav-link.dropdown-toggle#vendor-dropdown-toggle {
            color: white !important;
            font-weight: 600;
            padding: 0.85rem 1.5rem !important;
            border-radius: 30px;
            transition: all 0.4s ease;
            background: rgba(255, 255, 255, 0.15);
            font-size: 1.05rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        a.nav-link.dropdown-toggle#user-dropdown-toggle:hover,
        a.nav-link.dropdown-toggle#vendor-dropdown-toggle:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
        }
        
        /* Dropdown Menus */
        ul.dropdown-menu#user-dropdown-menu,
        ul.dropdown-menu#vendor-dropdown-menu {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            border: none;
            border-radius: 20px;
            box-shadow: 0 15px 50px rgba(0,0,0,0.25);
            padding: 1.25rem 0;
            margin-top: 1rem;
            overflow: hidden;
            min-width: 220px;
        }
        
        ul.dropdown-menu#user-dropdown-menu::before,
        ul.dropdown-menu#vendor-dropdown-menu::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--primary-gradient);
        }
        
        li#user-menu-profile,
        li#user-menu-orders,
        li#user-menu-login,
        li#user-menu-register,
        li#vendor-menu-dashboard,
        li#vendor-menu-menu-manage,
        li#vendor-menu-orders,
        li#vendor-menu-login,
        li#vendor-menu-register {
            list-style: none;
        }
        
        a.dropdown-item#user-link-profile,
        a.dropdown-item#user-link-orders,
        a.dropdown-item#user-link-logout,
        a.dropdown-item#user-link-login,
        a.dropdown-item#user-link-register,
        a.dropdown-item#vendor-link-dashboard,
        a.dropdown-item#vendor-link-menu-manage,
        a.dropdown-item#vendor-link-orders,
        a.dropdown-item#vendor-link-logout,
        a.dropdown-item#vendor-link-login,
        a.dropdown-item#vendor-link-register {
            padding: 0.85rem 1.75rem;
            transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
            border-radius: 0;
            font-weight: 500;
            color: #1a1a2e;
            position: relative;
            overflow: hidden;
        }
        
        a.dropdown-item#user-link-profile::before,
        a.dropdown-item#user-link-orders::before,
        a.dropdown-item#user-link-logout::before,
        a.dropdown-item#user-link-login::before,
        a.dropdown-item#user-link-register::before,
        a.dropdown-item#vendor-link-dashboard::before,
        a.dropdown-item#vendor-link-menu-manage::before,
        a.dropdown-item#vendor-link-orders::before,
        a.dropdown-item#vendor-link-logout::before,
        a.dropdown-item#vendor-link-login::before,
        a.dropdown-item#vendor-link-register::before {
            content: '→';
            position: absolute;
            left: 1rem;
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        a.dropdown-item#user-link-profile:hover,
        a.dropdown-item#user-link-orders:hover,
        a.dropdown-item#user-link-logout:hover,
        a.dropdown-item#user-link-login:hover,
        a.dropdown-item#user-link-register:hover,
        a.dropdown-item#vendor-link-dashboard:hover,
        a.dropdown-item#vendor-link-menu-manage:hover,
        a.dropdown-item#vendor-link-orders:hover,
        a.dropdown-item#vendor-link-logout:hover,
        a.dropdown-item#vendor-link-login:hover,
        a.dropdown-item#vendor-link-register:hover {
            background: var(--primary-gradient);
            color: white;
            transform: translateX(10px);
            padding-left: 2.5rem;
        }
        
        a.dropdown-item#user-link-profile:hover::before,
        a.dropdown-item#user-link-orders:hover::before,
        a.dropdown-item#user-link-logout:hover::before,
        a.dropdown-item#user-link-login:hover::before,
        a.dropdown-item#user-link-register:hover::before,
        a.dropdown-item#vendor-link-dashboard:hover::before,
        a.dropdown-item#vendor-link-menu-manage:hover::before,
        a.dropdown-item#vendor-link-orders:hover::before,
        a.dropdown-item#vendor-link-logout:hover::before,
        a.dropdown-item#vendor-link-login:hover::before,
        a.dropdown-item#vendor-link-register:hover::before {
            opacity: 1;
            left: 1.5rem;
        }
        
        hr.dropdown-divider#user-menu-divider,
        hr.dropdown-divider#vendor-menu-divider {
            margin: 0.75rem 0;
            border-top: 2px solid #e9ecef;
        }
        
        /* Skip Link */
        a.visually-hidden-focusable#skip-to-content {
            z-index: 9999;
        }
        
        /* Main Content */
        main#main-content {
            padding-top: 3rem;
            position: relative;
            z-index: 1;
        }
        
        .demo-content#demo-section {
            background: white;
            border-radius: 30px;
            padding: 4rem 3rem;
            box-shadow: 0 20px 60px rgba(0,0,0,0.1);
            margin: 2rem auto;
            max-width: 1200px;
        }
        
        .demo-title#demo-heading {
            background: var(--primary-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-size: 3rem;
            font-weight: 800;
            text-align: center;
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(255, 107, 107, 0.1);
        }
        
        .demo-text#demo-paragraph {
            text-align: center;
            font-size: 1.2rem;
            color: #666;
            line-height: 1.8;
        }
        
        /* Responsive Design */
        @media (max-width: 991px) {
            a.navbar-brand#brand-logo-link {
                font-size: 1.8rem;
            }
            
            .brand-icon#dabba-icon-animated {
                font-size: 2.5rem;
            }
            
            ul.navbar-nav#primary-nav-menu,
            ul.navbar-nav#secondary-nav-menu {
                margin-top: 1rem;
            }
            
            a.nav-link#nav-link-home,
            a.nav-link#nav-link-vendors,
            a.nav-link#nav-link-about,
            a.nav-link#nav-link-contact,
            a.nav-link#nav-link-cart,
            a.nav-link.dropdown-toggle#user-dropdown-toggle,
            a.nav-link.dropdown-toggle#vendor-dropdown-toggle {
                margin: 0.25rem 0;
            }
        }
        
        @media (max-width: 576px) {
            a.navbar-brand#brand-logo-link {
                font-size: 1.5rem;
            }
            
            .brand-badge#express-badge {
                font-size: 0.6rem;
                padding: 0.25rem 0.75rem;
            }
            
            .demo-title#demo-heading {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body id="dabbaexpress-body">
    <!-- Floating Background Elements -->
    <div class="floating-bg-container" id="floating-bg-main">
        <div class="floating-element-1">🍱</div>
        <div class="floating-element-2">🥘</div>
        <div class="floating-element-3">🍛</div>
        <div class="floating-element-4">🍲</div>
        <div class="floating-element-5">🥗</div>
        <div class="floating-element-6">🍚</div>
    </div>

    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="visually-hidden-focusable btn btn-primary position-absolute" id="skip-to-content" style="top: 10px; left: 10px;">
        Skip to main content
    </a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" id="main-navigation-bar">
        <div class="container" id="nav-container-main">
            <!-- Brand with Animated Icon -->
            <a class="navbar-brand" href="/" id="brand-logo-link">
                <div class="brand-icon-wrapper" id="brand-icon-container">
                    <div class="brand-icon-glow" id="icon-glow-effect"></div>
                    <div class="brand-icon" id="dabba-icon-animated">🍱</div>
                </div>
                <div class="brand-text-wrapper" id="brand-text-container">
                    <span class="brand-title" id="main-brand-title">DabbaExpress</span>
                    <span class="brand-badge" id="express-badge">⚡ Fast Delivery</span>
                </div>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" id="mobile-menu-toggle">
                <span class="navbar-toggler-icon" id="toggle-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto" id="primary-nav-menu">
                    <li class="nav-item" id="nav-item-home">
                        <a class="nav-link" href="/" id="nav-link-home">Home</a>
                    </li>
                    <li class="nav-item" id="nav-item-vendors">
                        <a class="nav-link" href="/pages/vendors.php" id="nav-link-vendors">Vendors</a>
                    </li>
                    <li class="nav-item" id="nav-item-about">
                        <a class="nav-link" href="/pages/about.php" id="nav-link-about">About</a>
                    </li>
                    <li class="nav-item" id="nav-item-contact">
                        <a class="nav-link" href="/pages/contact.php" id="nav-link-contact">Contact</a>
                    </li>
                    <li class="nav-item" id="nav-item-cart">
                        <a class="nav-link position-relative" href="/cart.php" id="nav-link-cart">
                            🛒 Cart
                            <span class="cart-count" id="shopping-cart-badge">3</span>
                        </a>
                    </li>
                </ul>

                <!-- User Navigation -->
                <ul class="navbar-nav" id="secondary-nav-menu">
                    <li class="nav-item dropdown" id="user-dropdown-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                           aria-expanded="false" id="user-dropdown-toggle">
                            👤 Account
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle" id="user-dropdown-menu">
                            <li id="user-menu-profile"><a class="dropdown-item" href="/user/profile.php" id="user-link-profile">Profile</a></li>
                            <li id="user-menu-orders"><a class="dropdown-item" href="/user/orders.php" id="user-link-orders">My Orders</a></li>
                            <li><hr class="dropdown-divider" id="user-menu-divider"></li>
                            <li><a class="dropdown-item" href="/user/logout.php" id="user-link-logout">Logout</a></li>
                        </ul>
                    </li>

                    <!-- Vendor Dropdown -->
                    <li class="nav-item dropdown" id="vendor-dropdown-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" 
                           aria-expanded="false" id="vendor-dropdown-toggle">
                            🏪 Vendor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="vendor-dropdown-toggle" id="vendor-dropdown-menu">
                            <li id="vendor-menu-dashboard"><a class="dropdown-item" href="/vendor/dashboard.php" id="vendor-link-dashboard">Dashboard</a></li>
                            <li id="vendor-menu-menu-manage"><a class="dropdown-item" href="/vendor/menu_add.php" id="vendor-link-menu-manage">Manage Menu</a></li>
                            <li id="vendor-menu-orders"><a class="dropdown-item" href="/vendor/orders.php" id="vendor-link-orders">Orders</a></li>
                            <li><hr class="dropdown-divider" id="vendor-menu-divider"></li>
                            <li><a class="dropdown-item" href="/vendor/logout.php" id="vendor-link-logout">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main id="main-content" class="container-fluid">
        <div class="demo-content" id="demo-section">
            <h1 class="demo-title" id="demo-heading">Welcome to DabbaExpress! 🍱</h1>
            <p class="demo-text" id="demo-paragraph">
                Your trusted tiffin marketplace connecting customers with authentic home-cooked meals from local vendors. 
                Experience the taste of home, delivered fresh to your doorstep every day. Join thousands of satisfied customers 
                who trust DabbaExpress for delicious, healthy, and affordable meals
            </p>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>