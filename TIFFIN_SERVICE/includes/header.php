
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="TiffinHub - Your trusted tiffin marketplace connecting customers with local vendors">
    <meta name="keywords" content="tiffin, food delivery, home cooked meals, local vendors, dabbawala, mess, hostel food">
    <meta name="author" content="TiffinHub">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Global CSS -->
    <link rel="stylesheet" href="/assets/css/global.css">
    
    <?php if (isset($page_css)): ?>
    <!-- Page-specific CSS -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($page_css); ?>">
    <?php endif; ?>
    
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) . ' - ' : ''; ?>TiffinHub</title>
    
    <style>
        :root {
            --primary-color: #ff6b35;
            --secondary-color: #f7931e;
            --accent-color: #ffd23f;
            --success-color: #06d6a0;
            --dark-color: #2d3436;
            --light-color: #f8f9fa;
            --gradient-primary: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
            --gradient-secondary: linear-gradient(135deg, #ffd23f 0%, #ff6b35 100%);
        }
        
        body {
            font-family: 'Poppins', 'Inter', sans-serif;
            background: linear-gradient(135deg, #fff5f0 0%, #fef7e0 100%);
            min-height: 100vh;
        }
        
        .navbar {
            background: var(--gradient-primary) !important;
            box-shadow: 0 4px 20px rgba(255, 107, 53, 0.3);
            border-bottom: 3px solid var(--accent-color);
        }
        
        .navbar-brand {
            font-weight: 800;
            font-size: 1.8rem;
            color: white !important;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
        }
        
        .navbar-brand:hover {
            transform: scale(1.05);
            text-shadow: 3px 3px 6px rgba(0,0,0,0.4);
        }
        
        .nav-link {
            color: white !important;
            font-weight: 500;
            padding: 0.75rem 1rem !important;
            border-radius: 25px;
            margin: 0 0.25rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        .tiffin-icon {
            width: 50px;
            height: 50px;
            filter: drop-shadow(2px 2px 4px rgba(0,0,0,0.3));
            animation: bounce 2s infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        .cart-count {
            background: var(--accent-color);
            color: var(--dark-color);
            border-radius: 50%;
            padding: 4px 8px;
            font-size: 0.75rem;
            font-weight: 700;
            margin-left: 8px;
            animation: pulse 1.5s infinite;
            box-shadow: 0 2px 8px rgba(255, 210, 63, 0.4);
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }
        
        .dropdown-menu {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 1rem 0;
            margin-top: 0.5rem;
        }
        
        .dropdown-item {
            padding: 0.75rem 1.5rem;
            transition: all 0.3s ease;
            border-radius: 0;
        }
        
        .dropdown-item:hover {
            background: var(--gradient-primary);
            color: white;
            transform: translateX(5px);
        }
        
        .navbar-toggler {
            border: 2px solid white;
            border-radius: 10px;
        }
        
        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }
        
        .floating-elements {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: -1;
        }
        
        .floating-tiffin {
            position: absolute;
            width: 30px;
            height: 30px;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }
        
        .floating-tiffin:nth-child(1) { top: 20%; left: 10%; animation-delay: 0s; }
        .floating-tiffin:nth-child(2) { top: 60%; left: 80%; animation-delay: 2s; }
        .floating-tiffin:nth-child(3) { top: 40%; left: 70%; animation-delay: 4s; }
        .floating-tiffin:nth-child(4) { top: 80%; left: 20%; animation-delay: 1s; }
        .floating-tiffin:nth-child(5) { top: 30%; left: 50%; animation-delay: 3s; }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(180deg); }
        }
        
        .dabbawala-badge {
            background: var(--gradient-secondary);
            color: var(--dark-color);
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            margin-left: 0.5rem;
            animation: glow 2s ease-in-out infinite alternate;
        }
        
        @keyframes glow {
            from { box-shadow: 0 0 5px var(--accent-color); }
            to { box-shadow: 0 0 20px var(--accent-color), 0 0 30px var(--accent-color); }
        }
    </style>
</head>
<body>
    <!-- Floating Background Elements -->
    <div class="floating-elements">
        <div class="floating-tiffin">🍱</div>
        <div class="floating-tiffin">🥘</div>
        <div class="floating-tiffin">🍛</div>
        <div class="floating-tiffin">🍲</div>
        <div class="floating-tiffin">🥗</div>
    </div>

    <!-- Skip Link for Accessibility -->
    <a href="#main-content" class="visually-hidden-focusable btn btn-primary position-absolute" style="top: 10px; left: 10px; z-index: 9999;">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <!-- Brand with Animated Tiffin Icon -->
            <a class="navbar-brand d-flex align-items-center" href="/">
                <div class="tiffin-icon me-2">
                    <!-- Animated Tiffin/Dabba Icon -->
                    <lottie-player 
                        src="https://assets5.lottiefiles.com/packages/lf20_8wqhpynb.json" 
                        background="transparent" 
                        speed="1" 
                        style="width: 50px; height: 50px;" 
                        loop 
                        autoplay>
                    </lottie-player>
                </div>
                TiffinHub
                <span class="dabbawala-badge">Dabbawala</span>
            </a>

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/vendors.php">Vendors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/pages/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link position-relative" href="/cart.php">
                            🛒 Cart
                            <?php if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                                <span class="cart-count"><?php echo count($_SESSION['cart']); ?></span>
                            <?php endif; ?>
                        </a>
                    </li>
                </ul>

                <!-- User Dropdown -->
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                👤 Account
                            <?php else: ?>
                                👤 User
                            <?php endif; ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="userDropdown">
                            <?php if (isset($_SESSION['user_id'])): ?>
                                <li><a class="dropdown-item" href="/user/profile.php">Profile</a></li>
                                <li><a class="dropdown-item" href="/user/orders.php">My Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/user/logout.php">Logout</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="/user/login.php">Login</a></li>
                                <li><a class="dropdown-item" href="/user/register.php">Register</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>

                    <!-- Vendor Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="vendorDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            🏪 Vendor
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="vendorDropdown">
                            <?php if (isset($_SESSION['vendor_id'])): ?>
                                <li><a class="dropdown-item" href="/vendor/dashboard.php">Dashboard</a></li>
                                <li><a class="dropdown-item" href="/vendor/menu_add.php">Manage Menu</a></li>
                                <li><a class="dropdown-item" href="/vendor/orders.php">Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="/vendor/logout.php">Logout</a></li>
                            <?php else: ?>
                                <li><a class="dropdown-item" href="/vendor/login.php">Vendor Login</a></li>
                                <li><a class="dropdown-item" href="/vendor/register.php">Become a Vendor</a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content Container -->
    <main id="main-content" class="container-fluid">