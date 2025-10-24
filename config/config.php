
<?php
/**
 * TiffinHub Configuration File
 * 
 * IMPORTANT SECURITY NOTES:
 * - Replace all placeholder values with your actual credentials
 * - NEVER commit this file with real credentials to version control
 * - Use environment variables or separate config files for production
 * - Keep this file outside web root in production if possible
 */

// Environment Configuration
define('ENVIRONMENT', 'development'); // Change to 'production' when deploying

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Database Configuration
// TODO: Replace with your actual database credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'tiffinhub_db');
define('DB_USER', 'root');
define('DB_PASS', ''); // XAMPP default - CHANGE IN PRODUCTION!

// Razorpay Payment Gateway Configuration
// TODO: Replace with your actual Razorpay keys from dashboard
define('RAZORPAY_KEY_ID', 'rzp_test_xxxxxxxxxxxxxxxx'); // Your Razorpay Key ID
define('RAZORPAY_KEY_SECRET', 'xxxxxxxxxxxxxxxxxxxxxxxx'); // Your Razorpay Key Secret

// Stripe Payment Gateway Configuration
// TODO: Replace with your actual Stripe keys from dashboard
define('STRIPE_SECRET_KEY', 'sk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); // Your Stripe Secret Key
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); // Your Stripe Publishable Key

// Application Configuration
define('BASE_URL', 'http://localhost/TIFFIN_SERVICE'); // Change to your domain in production
define('SITE_NAME', 'TiffinHub');
define('SITE_EMAIL', 'contact@tiffinhub.com');

// Security Configuration
define('CSRF_TOKEN_NAME', 'csrf_token');
define('SESSION_TIMEOUT', 3600); // 1 hour in seconds

/**
 * Get PDO Database Connection
 * 
 * @return PDO Database connection object
 * @throws PDOException If connection fails
 */
function getPDO(): PDO {
    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
        
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci"
        ];
        
        $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        return $pdo;
        
    } catch (PDOException $e) {
        // Log error in production, show generic message to user
        error_log("Database connection failed: " . $e->getMessage());
        throw new PDOException("Database connection failed. Please try again later.");
    }
}

/**
 * Generate CSRF Token
 * 
 * @return string CSRF token
 */
function generate_csrf_token(): string {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        $_SESSION[CSRF_TOKEN_NAME] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_NAME];
}

/**
 * Verify CSRF Token
 * 
 * @param string $token Token to verify
 * @return bool True if token is valid, false otherwise
 */
function verify_csrf_token(string $token): bool {
    if (!isset($_SESSION[CSRF_TOKEN_NAME])) {
        return false;
    }
    return hash_equals($_SESSION[CSRF_TOKEN_NAME], $token);
}

/**
 * Sanitize input data
 * 
 * @param mixed $data Data to sanitize
 * @return mixed Sanitized data
 */
function sanitize_input($data) {
    if (is_array($data)) {
        return array_map('sanitize_input', $data);
    }
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

/**
 * Redirect with message
 * 
 * @param string $url URL to redirect to
 * @param string $message Optional message to display
 * @param string $type Message type (success, error, warning, info)
 */
function redirect_with_message(string $url, string $message = '', string $type = 'info') {
    if (!empty($message)) {
        $_SESSION['flash_message'] = $message;
        $_SESSION['flash_type'] = $type;
    }
    header("Location: " . $url);
    exit();
}

/**
 * Get and clear flash message
 * 
 * @return array|null Array with message and type, or null if no message
 */
function get_flash_message(): ?array {
    if (isset($_SESSION['flash_message'])) {
        $message = $_SESSION['flash_message'];
        $type = $_SESSION['flash_type'] ?? 'info';
        unset($_SESSION['flash_message'], $_SESSION['flash_type']);
        return ['message' => $message, 'type' => $type];
    }
    return null;
}

/**
 * Check if user is logged in
 * 
 * @return bool True if user is logged in
 */
function is_user_logged_in(): bool {
    return isset($_SESSION['user_id']) && !empty($_SESSION['user_id']);
}

/**
 * Check if vendor is logged in
 * 
 * @return bool True if vendor is logged in
 */
function is_vendor_logged_in(): bool {
    return isset($_SESSION['vendor_id']) && !empty($_SESSION['vendor_id']);
}

/**
 * Check if admin is logged in
 * 
 * @return bool True if admin is logged in
 */
function is_admin_logged_in(): bool {
    return isset($_SESSION['admin_id']) && !empty($_SESSION['admin_id']);
}

/**
 * Format currency
 * 
 * @param float $amount Amount to format
 * @param string $currency Currency code (default: INR)
 * @return string Formatted currency string
 */
function format_currency(float $amount, string $currency = 'INR'): string {
    return '₹' . number_format($amount, 2);
}

/**
 * Generate random string
 * 
 * @param int $length Length of random string
 * @return string Random string
 */
function generate_random_string(int $length = 10): string {
    return bin2hex(random_bytes($length / 2));
}

// Error reporting configuration
if (defined('ENVIRONMENT') && ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}

// Timezone setting
date_default_timezone_set('Asia/Kolkata');

// Set default charset
ini_set('default_charset', 'UTF-8');
?>