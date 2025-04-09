-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2025 at 11:22 PM
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
-- Database: `scolasticaschools`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_events`
--

CREATE TABLE `news_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `type` enum('news','event') NOT NULL DEFAULT 'news',
  `status` enum('featured','upcoming','past') NOT NULL DEFAULT 'upcoming',
  `location` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_events`
--

INSERT INTO `news_events` (`id`, `category_id`, `title`, `content`, `type`, `status`, `location`, `image`, `date`, `created_at`, `updated_at`) VALUES
(1, 1, 'Scolastica Annual general meeting1', 'Scolastica Annual general meeting1', 'event', 'past', 'HIMO', 'Day-of-the-African-Child-scaled-f3fb21.jpg', '2025-03-14', '2025-03-14 09:23:46', '2025-03-17 04:25:16'),
(2, NULL, 'Scolastica Annual general meeting3', 'Scolastica Annual general meeting3', 'news', 'upcoming', 'Marangu, Kilimanajaro-Tanzania', '9f5f09ae-876a-470f-8c9e-03c352462457-641120.png', '2025-03-14', '2025-03-14 06:55:18', '2025-03-14 07:58:49'),
(3, NULL, 'Scolastica Annual general meeting2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae tempore id, dolore corporis architecto rerum\r\n        porro accusantium esse numquam explicabo. Suscipit asperiores iusto distinctio animi et quis cupiditate temporibus,\r\n        placeat laborum quidem veniam ipsum soluta beatae deleniti natus reprehenderit autem libero sit, officia commodi\r\n        mollitia deserunt excepturi rerum. Corrupti, nemo!', 'event', 'featured', 'Marangu, Kilimanajaro-Tanzania', '9f5f09ae-876a-470f-8c9e-03c352462457-45e65c.png', '2025-03-14', '2025-03-14 06:55:48', '2025-03-14 09:20:59'),
(4, NULL, 'Scolastica Annual general meeting4', 'Scolastica Annual general meeting4', 'event', 'upcoming', 'HIMO', 'Day-of-the-African-Child-scaled-3126e3.jpg', '2025-03-15', '2025-03-14 08:00:03', '2025-03-14 09:26:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_events`
--
ALTER TABLE `news_events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_events`
--
ALTER TABLE `news_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
