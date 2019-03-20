-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 04:00 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btl_africa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'Stephen Quarcoo', 'squarcoo@btlafrica.com', '$2y$12$Q/YENBqmNVssQb9T7MovruJtecb27pwnlHJDgahyMnKVfYmJFvAWK'),
(2, 'Chinedu Ekene Okpala', 'nedu63ima@gmail.com', '$2y$12$xn7xEHj17JcVR2S0BA3DcOGy0/C0Ea8fNYcUKE2FTqvYOjLaTLxHq');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `category` varchar(50) NOT NULL,
  `files` text NOT NULL,
  `description` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `file_name` varchar(500) NOT NULL,
  `email` varchar(200) NOT NULL,
  `facebook` varchar(200) NOT NULL,
  `twitter` varchar(200) NOT NULL,
  `instagram` varchar(200) NOT NULL,
  `whatsapp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `position`, `description`, `file_name`, `email`, `facebook`, `twitter`, `instagram`, `whatsapp`) VALUES
(1, 'Gabrial Kojo Appiahh', 'Chief Executive Officer, C.E.O', 'KOJO APPIAH Ceo, BTL Africa Group Gabriel, who sits atop West Africaâ€™s biggest and most influential experiential marketing agency, knows as much about seeing and bringing to life the essence of client organizational brands as anyone. His Sub Saharan-based company (BTL AFRICA) provides some of the Continentâ€™s largest and most respected brands with an unmatched and an impeccable cadence of continually evolving innovative sales and marketing strategies. With a seed fund of GHÂ¢1,200, Gabriel has led his team to organically grow the business units to a current estimated value of GHÂ¢50 million in 4 years. In the process, his company employed 50 permanent staff and over 3,000 casuals yearly across borders. Gabriel has thus become the only Ghanaian in recent times to export creative marketing with brick-and-mortar presence in 6 countries. Though Gabriel sees some challenges in the current make up for Africa, heâ€™s very optimistic about the change and impact institutions like his can bring. He is in this for the long haul and is determined to win. Under his leadership In 2016, the BTL group successfully executed over one thousand ground breaking experiential services for major brands such as Diageo, Vodafone, Nestle, PnG, PZ Cussons, SC Johnson, Shell, BetWay and Samsung, an unprecedented feat in the experiential sales and marketing space. Such growth and drive helped propel the company into being recognized as the Most Innovative Corporate Event Organizer, by the Ghana Events Awards last year. Gabrielâ€™s genuine passion for the youth in ensuring they reach their maximum potential drove him to begin the BTL Foundation. The foundation essentially supports Ghanaian Youth by bridging the gap between the haves and the have-nots.', '1552444739img-1.jpg', '', '', '', '', ''),
(3, 'Samuel Ngoroge', 'Chief Operating Officer, C.O.O', 'Sam has 14 years of experience in the Experiential Industry in West and East Africa Markets. He specializes in New Africa Start-ups and has worked with Pan African Brands such as Diageo (EABL & GGBL), Heineken (SLBL),Vodafone â€“ Launch to a strong No 2, Safaricom (Mpesa Launch), Airtel, Coca Cola, Ecobank, Henkel, NESTLEÂ®. Sam brings the following skills on board:\r\n\r\nStrategic Planning\r\n\r\nBusiness Development\r\n\r\nProject Management\r\n\r\nSolid execution with focus on details\r\n\r\nHuman Resource\r\n\r\nRelationship Management', '1552494581img-2.jpg', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
