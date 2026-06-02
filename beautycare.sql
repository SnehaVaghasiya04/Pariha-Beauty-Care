-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2024 at 04:02 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beautycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `service` varchar(100) DEFAULT NULL,
  `beautician` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `first_name`, `email`, `service`, `beautician`, `date`, `message`) VALUES
(1, 'sneha', 'sneha@gmail.com', 'haircut', 'beautician1', '2024-09-27', 'jnm,'),
(2, 'sneha', 'hetvi@gmail.com', 'haircut', 'beautician1', '2024-09-30', 'asdfghj');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `first_name`, `last_name`, `phone`, `email`, `message`, `submitted_at`) VALUES
(1, 'sneha', 'vaghasiya', '9313261642', 'jeel@gmail.com', 'very nice', '2024-09-26 08:49:34');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `price`, `image`) VALUES
(4, 'Bridal Package', 'Hair Style(3-Time),Mehndi, MakeUp(3-TIME),Gloden Facial , Nail-Arat', '6000.00', 'IMG-20240523-WA0004.jpg'),
(5, 'VIP Package', 'Hair Style(3-Time),Mehndi, MakeUp(3-TIME),Gloden Facial , Nail-Arat , mani-padi', '9000.00', 'IMG-20240523-WA0004.jpg'),
(6, 'Golden  Package', 'Hair Style(3-Time),Mehndi, MakeUp(3-TIME),Gloden Facial , Nail-Arat , mani-padi , Waxing', '7000.00', 'IMG-20240523-WA0004.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('sneha@gmail.com', '52d9ebb900357bd8a492917d21fb4c89f96790cb86ec8da4f9c0f60af0db468087dba15ccf504bc7a39fc6c3c839748351fe', '2024-09-29 04:08:15'),
('sneha@gmail.com', '325ed5bfe8974e21ea8b6e44c9f93f4d6144a0d21aafe5ef27049cbcae4efdc2757559ad0c8d889d8d9693f1f2ff66aaa5a1', '2024-09-29 04:08:17'),
('sneha@gmail.com', '08008bf09a5bc25aa42615bb6cb843f4592f027add7a7df28d556e14cce418803f5041088566dd7820ef770f41e0176422f6', '2024-09-29 04:08:18'),
('sneha@gmail.com', '422b8e64dfae288fe8f0c692999eae32e12b04d8a81f0fbadef1b212fef9ff10e653011ecddcbc689c4feb8b0ca3b5d631cf', '2024-09-29 04:08:19'),
('sneha@gmail.com', 'a8dcfddf04bdda1d2d98f4077ca8c2b831f71202ce33a9c1d8729960e86e79ce1fed0f0a5245db136972fe5569f1441fd09c', '2024-09-29 04:10:36'),
('sneha@gmail.com', '2e53e95a016c3c8f34f7dbd6bb1f1e98ca02cff55a95c4482a4ea70ed461051c511db0fd63a69728e974a1db30d7e70dac94', '2024-09-29 04:10:41'),
('sneha@gmail.com', 'bbc87102069ef147fa3ad26dc19124f7d2cc5f6015817efc23c1594c1ebe00ae0dfbca1121ed5dd5172a87cc239508ebe228', '2024-09-29 04:22:36'),
('sneha@gmail.com', '470fbe6dfd0311773f73544483d6c1853f1587f51ee47e0a5979c7772453f27f8c6ebf1afec23857ac77e18d42799a3ad8a4', '2024-09-29 04:24:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services1`
--

CREATE TABLE `services1` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services1`
--

INSERT INTO `services1` (`id`, `image`, `name`, `description`, `price`) VALUES
(28, 'faceial&cleanup.jpg', 'FACIAL & CLEANUP', 'Activated charcoal is created from bone char, coconut shells, peat, petroleum coke, coal, olive pits, bamboo, or sawdust. It is in the form of a fine black dust that is produced when regular charcoal is activated by exposing it ', '1200.00'),
(29, 'd tan.jpg', 'BEEACH &D-TAN', 'De-Tan Bleach provides a solution for removing tan, improving skin glow and promoting a healthier, more radiant appearance.', '1800.00'),
(30, 'padi.jpeg', 'MANI - PADI', 'A luxurious treatment including a soak and moisturizing exfoliation, cuticle work, nails clipped and filed, hard skin is removed (pedicure) and a renewing mask is applied.', '1000.00'),
(31, 'waxing.jpeg', 'WAXING', 'a hair removal method that involves covering the body with a sticky substance, like wax, and then removing the wax to pull out the hair from the root', '20000.00'),
(32, 'makup.png', 'MAKEUP', 'Makeup consists of things such as lipstick, eye shadow, and powder which some women put on their faces to make themselves look more attractive or which actors use to change or improve their appearance.', '3000.00'),
(33, 'bridal makup.jpg', 'PRE-BRIDAL', 'Pre-bridal sessions are all about body cleaning, getting extra hair waxed, exfoliating skin, and even making sure your nails are glossed to perfection.', '5000.00'),
(34, 'd tan.jpg', 'BODY DEALS', 'A luxurious treatment including a soak and moisturizing exfoliation, cuticle work, nails clipped and filed, hard skin is removed (pedicure) and a renewing mask is applied. ', '2000.00'),
(35, 'threading.jpg', 'THREADING', 'The cotton thread is twisted and rolled along the surface of the skin entwining the hairs in the thread, which are then lifted quickly from the follicle. ', '20.00'),
(36, 'nailart.jpg', 'NAIL-ARAT', 'Nail art is a creative way to decorate and embellish nails with paint, glitter, stones, or stickers. It can be done on fingernails or toenails, and is often applied after a manicure or pedicure.', '2000.00'),
(37, 'spa.jpg', 'SPA', 'It is typically a massage spa therapy that helps reduce pain. The technique involves using fingertips, palm, elbow, or even feet to apply firm pressure on certain body parts.', '4000.00'),
(38, 'mehandi.jpg', 'MEHNDI', ' the traditional art of painting the hands, feet or body with a paste made from the powdered, dried leaves of the henna plant.', '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `role` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `description`, `role`, `image`) VALUES
(4, 'Priti Bagsariya', 'Priti Bagsariya is a creative and highly skilled hairstylist with over 10 years of experience in the beauty industry. Specializing in precision cuts, modern color techniques.', 'Hair-Style Artist', 'priti.jpg'),
(5, 'Priyanshi vekariya', 'priyanshi is a talented and innovative nail artist with over 7 years of experience in creating stunning and unique nail designs. From intricate hand-painted patterns to dazzling 3D nail art, ', 'Nail - Arat Artist', 'IMG-20240424-WA0053.jpg'),
(6, 'Shruti Dudhat', 'shruti is a highly skilled mehndi artist with over 8 years of experience in the intricate art of henna design. Known for her delicate and beautifully detailed work, Ayesha specializes in traditional and contemporary mehndi styles, perfect for weddings, festivals, and special occasions.', 'Mehndi Artist', 'SHRUTI.jpg'),
(7, 'Tanvi Yadav', 'Tanvi is a highly sought-after makeup artist with over 9 years of experience in the beauty industry. Known for her flawless techniques and artistic vision, Olivia specializes in creating radiant, long-lasting makeup looks for weddings, events, and photoshoots. ', 'Make Up Artist', 'WhatsApp Image 2024-05-31 at 10.28.26 AM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobilenumber` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reset_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user1`
--

INSERT INTO `user1` (`id`, `name`, `mobilenumber`, `email`, `password`, `reset_token`, `created_at`) VALUES
(1, 'hetvi', '6785432145', 'hetvi@gmail.com', '$2y$10$9ofg/5x0U.F5x.YVTg0lPeXZrdFhxv4H.INW4XJyiq9CDCc09P0pO', NULL, '2024-09-29 05:03:15'),
(2, 'sneha vaghasiya', '9313261642', 'sneha@gmail.com', '$2y$10$LHMShN93fPIVjUgsPgu.7OrbdrWtJ6rPXc4ZQZ4sXLM5OLXjJxp7i', NULL, '2024-09-29 05:37:50'),
(4, 'jeel', '9313261642', 'jeel@gmail.com', '$2y$10$iJP4keAteDeFyfXMHYqtNuhMk6b/DxzAx3FRQB2UYZSmVqWkIcQt2', NULL, '2024-09-29 13:35:56'),
(5, 'hetvi', '67895432145', 'hetvi01@gmail.com', '$2y$10$u0MwiltZoi6N3.vURCbyk.WlO0i8OJXGaRah4iz/eMOJmgAQrJBGi', NULL, '2024-09-30 03:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `mobile`, `email`, `password`) VALUES
(1, 'sneha vaghasiya', '9313261642', 'sneha@gmail.com', '$2y$10$PhLtM1pOQhITvmfFLQeQjuXe98WEl.OcB1L5g5pik/jLAeeuifRKu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services1`
--
ALTER TABLE `services1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services1`
--
ALTER TABLE `services1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
