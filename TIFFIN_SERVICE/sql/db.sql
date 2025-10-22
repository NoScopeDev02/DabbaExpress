-- FILE: sql/db.sql
-- TiffinHub Database Schema
-- MySQL 8.0+ with utf8mb4 charset

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- Create database if not exists
CREATE DATABASE IF NOT EXISTS `tiffinhub_db` 
DEFAULT CHARACTER SET utf8mb4 
COLLATE utf8mb4_unicode_ci;

USE `tiffinhub_db`;

-- =============================================
-- USERS TABLE
-- =============================================
CREATE TABLE `users` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password_hash` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `unique_email` (`email`),
    KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- VENDORS TABLE
-- =============================================
CREATE TABLE `vendors` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password_hash` VARCHAR(255) NOT NULL,
    `phone` VARCHAR(20) DEFAULT NULL,
    `address` TEXT DEFAULT NULL,
    `approved` BOOLEAN DEFAULT FALSE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `unique_email` (`email`),
    KEY `idx_approved` (`approved`),
    KEY `idx_created_at` (`created_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- VENDOR MENU TABLE
-- =============================================
CREATE TABLE `vendor_menu` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `vendor_id` INT UNSIGNED NOT NULL,
    `title` VARCHAR(200) NOT NULL,
    `description` TEXT DEFAULT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `currency` VARCHAR(10) DEFAULT 'INR',
    `image` VARCHAR(255) DEFAULT NULL,
    `is_active` BOOLEAN DEFAULT TRUE,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_vendor_menu_vendor` (`vendor_id`),
    KEY `idx_is_active` (`is_active`),
    KEY `idx_price` (`price`),
    KEY `idx_created_at` (`created_at`),
    CONSTRAINT `fk_vendor_menu_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- PLANS TABLE
-- =============================================
CREATE TABLE `plans` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `vendor_id` INT UNSIGNED NOT NULL,
    `title` VARCHAR(200) NOT NULL,
    `price` DECIMAL(10,2) NOT NULL,
    `billing_cycle` ENUM('daily', 'weekly', 'monthly') NOT NULL,
    `provider_plan_id` VARCHAR(255) DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_plans_vendor` (`vendor_id`),
    KEY `idx_billing_cycle` (`billing_cycle`),
    KEY `idx_price` (`price`),
    CONSTRAINT `fk_plans_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- ORDERS TABLE
-- =============================================
CREATE TABLE `orders` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT UNSIGNED NOT NULL,
    `vendor_id` INT UNSIGNED NOT NULL,
    `total_amount` DECIMAL(10,2) NOT NULL,
    `currency` VARCHAR(10) DEFAULT 'INR',
    `status` ENUM('created', 'paid', 'preparing', 'dispatched', 'delivered', 'cancelled') DEFAULT 'created',
    `provider_order_id` VARCHAR(255) DEFAULT NULL,
    `provider_payment_id` VARCHAR(255) DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_orders_user` (`user_id`),
    KEY `fk_orders_vendor` (`vendor_id`),
    KEY `idx_status` (`status`),
    KEY `idx_created_at` (`created_at`),
    KEY `idx_total_amount` (`total_amount`),
    CONSTRAINT `fk_orders_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
    CONSTRAINT `fk_orders_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- ORDER ITEMS TABLE
-- =============================================
CREATE TABLE `order_items` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `order_id` INT UNSIGNED NOT NULL,
    `menu_id` INT UNSIGNED NOT NULL,
    `quantity` INT UNSIGNED NOT NULL DEFAULT 1,
    `unit_price` DECIMAL(10,2) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_order_items_order` (`order_id`),
    KEY `fk_order_items_menu` (`menu_id`),
    KEY `idx_quantity` (`quantity`),
    CONSTRAINT `fk_order_items_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
    CONSTRAINT `fk_order_items_menu` FOREIGN KEY (`menu_id`) REFERENCES `vendor_menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- SUBSCRIPTIONS TABLE
-- =============================================
CREATE TABLE `subscriptions` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT UNSIGNED NOT NULL,
    `vendor_id` INT UNSIGNED NOT NULL,
    `plan_id` INT UNSIGNED NOT NULL,
    `status` ENUM('active', 'paused', 'cancelled') DEFAULT 'active',
    `provider_subscription_id` VARCHAR(255) DEFAULT NULL,
    `next_billing_date` DATE DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_subscriptions_user` (`user_id`),
    KEY `fk_subscriptions_vendor` (`vendor_id`),
    KEY `fk_subscriptions_plan` (`plan_id`),
    KEY `idx_status` (`status`),
    KEY `idx_next_billing_date` (`next_billing_date`),
    CONSTRAINT `fk_subscriptions_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
    CONSTRAINT `fk_subscriptions_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE,
    CONSTRAINT `fk_subscriptions_plan` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- PAYMENTS TABLE
-- =============================================
CREATE TABLE `payments` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `order_id` INT UNSIGNED DEFAULT NULL,
    `subscription_id` INT UNSIGNED DEFAULT NULL,
    `user_id` INT UNSIGNED NOT NULL,
    `amount` DECIMAL(10,2) NOT NULL,
    `provider` VARCHAR(50) NOT NULL,
    `provider_txn_id` VARCHAR(255) DEFAULT NULL,
    `status` ENUM('pending', 'completed', 'failed', 'refunded') DEFAULT 'pending',
    `payload_json` JSON DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_payments_order` (`order_id`),
    KEY `fk_payments_subscription` (`subscription_id`),
    KEY `fk_payments_user` (`user_id`),
    KEY `idx_provider` (`provider`),
    KEY `idx_status` (`status`),
    KEY `idx_created_at` (`created_at`),
    CONSTRAINT `fk_payments_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
    CONSTRAINT `fk_payments_subscription` FOREIGN KEY (`subscription_id`) REFERENCES `subscriptions` (`id`) ON DELETE SET NULL,
    CONSTRAINT `fk_payments_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- REVIEWS TABLE
-- =============================================
CREATE TABLE `reviews` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `user_id` INT UNSIGNED NOT NULL,
    `vendor_id` INT UNSIGNED NOT NULL,
    `rating` INT UNSIGNED NOT NULL CHECK (`rating` >= 1 AND `rating` <= 5),
    `comment` TEXT DEFAULT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    KEY `fk_reviews_user` (`user_id`),
    KEY `fk_reviews_vendor` (`vendor_id`),
    KEY `idx_rating` (`rating`),
    KEY `idx_created_at` (`created_at`),
    CONSTRAINT `fk_reviews_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
    CONSTRAINT `fk_reviews_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendors` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- ADMIN TABLE
-- =============================================
CREATE TABLE `admin` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `email` VARCHAR(255) NOT NULL,
    `password_hash` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- =============================================
-- INSERT PLACEHOLDER DATA
-- =============================================

-- Insert placeholder admin user
-- IMPORTANT: Change this password immediately after first login!
-- Default password is 'admin123' (hash: $2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi)
INSERT INTO `admin` (`email`, `password_hash`) VALUES 
('admin@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- =============================================
-- ADDITIONAL INDEXES FOR PERFORMANCE
-- =============================================

-- Composite indexes for common queries
CREATE INDEX `idx_vendor_menu_active_price` ON `vendor_menu` (`vendor_id`, `is_active`, `price`);
CREATE INDEX `idx_orders_user_status` ON `orders` (`user_id`, `status`);
CREATE INDEX `idx_orders_vendor_status` ON `orders` (`vendor_id`, `status`);
CREATE INDEX `idx_subscriptions_user_status` ON `subscriptions` (`user_id`, `status`);
CREATE INDEX `idx_payments_user_provider` ON `payments` (`user_id`, `provider`);

-- =============================================
-- VIEWS FOR COMMON QUERIES
-- =============================================

-- View for vendor statistics
CREATE VIEW `vendor_stats` AS
SELECT 
    v.id,
    v.name,
    v.email,
    v.approved,
    COUNT(DISTINCT vm.id) as menu_items_count,
    COUNT(DISTINCT o.id) as total_orders,
    COUNT(DISTINCT s.id) as active_subscriptions,
    AVG(r.rating) as avg_rating,
    COUNT(r.id) as total_reviews
FROM vendors v
LEFT JOIN vendor_menu vm ON v.id = vm.vendor_id AND vm.is_active = TRUE
LEFT JOIN orders o ON v.id = o.vendor_id
LEFT JOIN subscriptions s ON v.id = s.vendor_id AND s.status = 'active'
LEFT JOIN reviews r ON v.id = r.vendor_id
GROUP BY v.id, v.name, v.email, v.approved;

-- View for order details with vendor and user info
CREATE VIEW `order_details` AS
SELECT 
    o.id,
    o.total_amount,
    o.currency,
    o.status,
    o.created_at,
    u.name as user_name,
    u.email as user_email,
    v.name as vendor_name,
    v.email as vendor_email
FROM orders o
JOIN users u ON o.user_id = u.id
JOIN vendors v ON o.vendor_id = v.id;

SET FOREIGN_KEY_CHECKS = 1;

-- =============================================
-- NOTES FOR DEVELOPERS
-- =============================================

/*
IMPORTANT SECURITY NOTES:
1. Change the default admin password immediately after first login
2. Use password_hash() function in PHP for all password storage
3. Implement proper input validation and sanitization
4. Use prepared statements for all database queries
5. Implement rate limiting for authentication endpoints
6. Use HTTPS in production
7. Regular database backups are essential

DEFAULT ADMIN CREDENTIALS:
Email: admin@example.com
Password: admin123
CHANGE THIS IMMEDIATELY!

USAGE EXAMPLES:
- To change admin password, use PHP password_hash() function
- For subscription billing, check next_billing_date daily
- Use JSON payload in payments table for provider-specific data
- Implement soft deletes if needed for audit trails
*/