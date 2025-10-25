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
    <link href="./assets/css/header.css" rel="stylesheet">
    
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
                        <a class="nav-link" href="index.php" id="nav-link-home">Home</a>
                    </li>
                    <li class="nav-item" id="nav-item-vendors">
                        <a class="nav-link" href="/pages/vendors.php" id="nav-link-vendors">Vendors</a>
                    </li>
                    <li class="nav-item" id="nav-item-about">
                        <a class="nav-link" href="pages/about.php" id="nav-link-about">About</a>
                    </li>
                    <li class="nav-item" id="nav-item-contact">
                        <a class="nav-link" href="/pages/contact.php" id="nav-link-contact">Contact</a>
                    </li>
                    <li class="nav-item" id="nav-item-cart">
                        <a class="nav-link position-relative" href="/cart.php" id="nav-link-cart">
                            🛒 
                           
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

   

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>