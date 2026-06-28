-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jun 26, 2026 at 11:55 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `la_fashion_house_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Processing',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_id`, `phone`, `address`, `payment_method`, `amount`, `status`, `created_at`) VALUES
(2, '45347', '0752567966', 'hh towers', 'Cash on Delivery', 4500.00, 'Processing', '2026-06-17 17:59:24'),
(4, '59606', '0752567966', 'thika', 'Cash on Delivery', 2500.00, 'Processing', '2026-06-17 18:31:10'),
(12, '72115', '0762635479', 'j', 'M-Pesa', 4200.00, 'Processing', '2026-06-17 19:13:55'),
(13, '49806', '0762635479', 'GILGIL', 'M-Pesa', 5800.00, 'Delivered', '2026-06-17 19:15:24'),
(14, '47290', '0728914269', 'Fedha', 'M-Pesa', 4500.00, 'Delivered', '2026-06-18 09:12:14'),
(15, '52801', '0762635479', 'THIKA', 'M-Pesa', 5000.00, 'Processing', '2026-06-26 20:17:12'),
(16, '40201', '0752567966', 'Nyeri', 'M-Pesa', 2500.00, 'Processing', '2026-06-26 20:53:56'),
(17, '91265', '0758558460', 'Thika', 'M-Pesa', 10000.00, 'Processing', '2026-06-26 21:12:02');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` varchar(20) DEFAULT NULL,
  `product_name` varchar(100) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `stock_quantity` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `category`, `description`, `price`, `image`, `stock_quantity`, `created_at`) VALUES
(1, 'Puma Suede', 'men', 'For any casual look clean original fit', 3000.00, 'sneakers1.jpg', 10, '2026-06-23 16:05:21'),
(3, 'ML Heels', 'Women', 'Soft glam with a chic feel', 5000.00, 'heels.jpg', 0, '2026-06-23 19:16:11'),
(4, 'Premium Trousers', 'Men', 'Comfortable and stylish trousers.', 3000.00, 'trousers.jpg', 25, '2026-06-02 19:29:20'),
(5, 'Urban Sneakers', 'Men', 'Modern sneakers for casual and sporty looks.', 4500.00, 'sneakers.jpg', 20, '2026-06-02 19:29:20'),
(6, 'Luxury Evening Dress', 'Women', 'Perfect outfit for that date or any special event', 4500.00, 'dress1.jpg', 5, '2026-06-23 16:55:34'),
(7, 'Coach tote bag', 'Women', 'All in one bag that fits your all day essential and laptop', 3000.00, 'bag1.jpg', 27, '2026-06-23 17:00:53'),
(8, 'JC Heels', 'Women', 'Shine and glam in the statement heel ', 5000.00, 'shoes1.jpg', 19, '2026-06-23 17:03:18'),
(9, 'Men\'s jacket', 'men', 'casual but chic jacket for the stylish men', 5500.00, 'mens-jacket.jpg', 2, '2026-06-23 17:29:41'),
(10, 'Men\'s shirt', 'men', 'Mid casual shirt that provides comfort and style', 2500.00, 'mens-shirt.jpg', 32, '2026-06-23 17:30:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('customer','admin') DEFAULT 'customer',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `position` varchar(20) DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `role`, `created_at`, `position`) VALUES
(7, 'shinto', 'shinto@gmail.com', '$2y$10$66QZIRe1MNJ2Itiir7eyqO6VpBYNUNFaqYbJZ8M0w0a8lkq3sWw7G', 'customer', '2026-06-10 19:49:16', 'customer'),
(10, 'Ann Tony', 'anntony@gmail.com', '$2y$10$MaFdroO8oMDFoYWCdqo/S.YiVPSAO/wyVCFhxM8po89NoRg8iHTpO', 'customer', '2026-06-11 00:45:43', 'customer'),
(11, 'annie kay', 'ann@gmail.com', '$2y$10$N9qo8uLOickgx2ZMRZoMyeIjZAgcfl7p92ldGxad68LJZdL17lhWy', 'customer', '2026-06-11 05:45:38', 'customer'),
(12, 'msoo', 'msoo@gmail.com', '$2y$10$96rGZLSKX/rapE698ao2eeIkkQD8uv1K3nhNy1kcWao3.qZb9vV1W', 'customer', '2026-06-11 08:23:43', 'customer'),
(13, 'simon', 'simon@gmail.com', '$2y$10$dKekf31dNi5MrXobol5QDe0Y5Ad0EeEV7mOsdm5nqnS9WqVtv3bEy', 'customer', '2026-06-17 10:51:10', 'customer'),
(15, 'Murege Lucy', 'murege@gmail.com', '$2y$10$AC0I/uwcu8Ipz18/WbS4X.L5eS.8HZ8cjukGSsk0ynluLvPmivwZK', 'admin', '2026-06-16 21:00:00', 'administrator'),
(16, 'Bryson Szn', 'bry@gmail.com', '$2y$10$MyafMy2HN8.ouUsunV06peXzHk6.l7D2YCrghwytUDjy5sHZGI61q', 'customer', '2026-06-18 09:23:35', 'customer'),
(17, 'JC', 'jc@gmail.com', '$2y$10$FqDL7OVS7iXRi7iPrjusye3KirMK1/bGU4mL/jyNcCAhneBIeo62K', 'customer', '2026-06-26 20:54:42', 'customer'),
(18, 'Karanja', 'karanjamuthoni98@gmail.com', '$2y$10$4l7Ag3duq/d6X/OJbvPAl.TkglerzIfa1kSL5kTOPIKC4y2Nk0aSK', 'customer', '2026-06-26 20:55:12', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
