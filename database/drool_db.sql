-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2024 at 09:15 AM
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
-- Database: `drool_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_user`
--

CREATE TABLE `contact_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(40) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_user`
--

INSERT INTO `contact_user` (`id`, `full_name`, `phone`, `email`, `message`) VALUES
(2, '', 0, '', ''),
(3, '', 0, '', ''),
(4, '', 0, '', ''),
(5, 'Roshan Patel', 9798398040, 'roshankumar1patel@gmail.com', 'Hi, Good morning..!!!!!!'),
(6, 'Roshan Patel', 9798398040, 'roshankumar1patel@gmail.com', 'Hi, Good morning..!!!!!!'),
(7, 'Roshan Patel', 9798398040, 'chakribontha9@gmail.com', 'Hi, Good evening..!!!!!!'),
(8, 'Roshan Patel', 9798398040, 'sushilkumarsuman1716@gmail.com', 'Hi, Good evening..!!!!!!'),
(9, 'Roshan Patel', 9798398040, 'chakribontha9@gmail.com', 'Hi, Good morning..!!!!!!'),
(10, 'Roshan Kumar', 919798398040, 'roshankumar1patel@gmail.com', 'Hi, Good morning..!!!!!!');

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'Roshan Patel', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'Roshan Kumar', 'roshan', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tabl_order`
--

CREATE TABLE `tabl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `pet` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `customer_contact` varchar(20) NOT NULL,
  `customer_email` varchar(150) NOT NULL,
  `customer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabl_order`
--

INSERT INTO `tabl_order` (`id`, `pet`, `price`, `qty`, `total`, `order_date`, `status`, `customer_name`, `customer_contact`, `customer_email`, `customer_address`) VALUES
(1, 'Dog', 345.00, 1, 345.00, '2024-04-09 08:11:02', 'Ordered', 'Roshan', '9709883515', 'roshankumar1patel@gmail.com', '\r\nNear- chaurakhu Mandir'),
(2, 'Dog', 345.00, 1, 345.00, '2024-04-09 08:12:58', 'Delivered', 'Roshan Kumar', '9709883515', 'roshankumar1patel@gmail.com', 'Saharsa, Bihar'),
(3, 'Dog', 345.00, 1, 345.00, '2024-04-09 09:09:49', 'Ordered', 'Roshan Patel', '9877026933', 'pp7357068@gmail.com', 'Phagwara Punjab'),
(4, 'cat 1', 2000.00, 1, 2000.00, '2024-04-09 09:46:22', 'Ordered', 'Roshan Kumar', '9709883515', 'roshankumar1patel@gmail.com', 'Saharsa, Bihar'),
(5, 'Beagle', 6000.00, 1, 6000.00, '2024-04-10 10:38:43', 'Ordered', 'Roshan Kumar', '9709883515', 'roshankumar1patel@gmail.com', 'Saharsa, Bihar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL,
  `image_name` varchar(30) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Cat', 'pet_Category_234.jpeg', 'Yes', 'Yes'),
(2, 'Dog', 'Food_Category_975.jpg', 'Yes', 'Yes'),
(3, 'Rabit', 'Food_Category_130.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet`
--

CREATE TABLE `tbl_pet` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pet`
--

INSERT INTO `tbl_pet` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(5, 'Beagle', 'The beagle is a breed of small scent hound, similar in appearance to the much larger foxhound. The beagle was developed primarily for hunting hare, known as beagling.', 6000.00, 'Pet-Name-7676.jpg', 2, 'Yes', 'Yes'),
(6, 'persian cat', 'The Persian cat, also known as the Persian Longhair, is a long-haired breed of cat characterized by a round face and short muzzle. ', 5000.00, 'Pet-Name-6529.jpg', 1, 'Yes', 'Yes'),
(7, 'german shepherd', 'The German Shepherd, also known in Britain as an Alsatian, is a German breed of working dog of medium to large size.', 10000.00, 'Pet-Name-3337.jpg', 2, 'Yes', 'Yes'),
(8, 'Sphynx Cat', 'The sphynx cat, sometimes called the hairless cat, is a unique cat breed known for their wrinkly skin and peach fuzz coat. Sphynxes stand out among other cats due to their lack of fur or hair—an uncommon occurrence among most mammals', 7000.00, 'Pet-Name-764.jpeg', 1, 'Yes', 'Yes'),
(9, 'BENGAL CAT', 'Bengal cats are notorious for opening doors, activating light switches, flushing toilets, emptying cupboards, and more. They are eager to learn tricks, and thanks to their high level of intelligence, they’re very easy to train. Try teaching your Bengal cat \"sit\" and \"shake paw,\" and games like fetch', 8000.00, 'Pet-Name-1821.jpg', 1, 'Yes', 'Yes'),
(10, 'BOMBAY CAT', 'Stunning looks and an intriguing personality make the Bombay cat a charming addition to any household. These medium-sized shorthair cats are absolutely gorgeous thanks to their pure black coats and their brilliant copper-colored eyes.', 4000.00, 'Pet-Name-2463.jpg', 1, 'Yes', 'Yes'),
(11, 'JAPANESE BOBTAIL CAT', 'Playful and intelligent, and with an attitude that’s just a touch demanding, the Japanese Bobtail cat is a rare breed with stunning looks, silky fur, and a melodious singsong voice.', 5000.00, 'Pet-Name-763.jpg', 1, 'Yes', 'Yes'),
(12, 'Golden Retriever', 'There is no breed as devoted and affectionate as the Golden the most popular dog breeds.\r\nThese sweet pups get along with everyone, even small children. ', 10000.00, 'Pet-Name-2253.jpg', 2, 'Yes', 'Yes'),
(13, 'Rabit', 'Rabbits, also known as bunnies or bunny rabbits, are small mammals in the family Leporidae, which is in the order Lagomorpha', 5000.00, 'Pet-Name-5202.jpeg', 3, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `contact_number` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `contact_number`, `email`, `password`, `address`) VALUES
(1, 'Roshan', 'Kumar', 919798398040, 'roshankumar1patel@gmail.com', '12345678', 'Saharsa, Bihar'),
(2, 'Prashant', 'Kumar', 1234567890, 'pp7357068@gmail.com', '1234567890', 'Phagwara'),
(3, 'Md Khalid', 'Ansari', 8809189516, 'mdkhalidansri7860@gmail.com', 'Khalid@123', 'Phagwara Punjab'),
(4, 'Roshan', 'Kumar', 919798398040, 'roshankumar1patel@gmail.com', '12345', 'Saharsa, Bihar'),
(5, 'nikhil', 'nitin ranajn', 9199440746, 'nikhilnitinranjan@gmail.com', '12aAA12#', 'green valley'),
(6, 'nikhil', 'nitin ranajn', 9199440746, 'nikhilnitinranjan@gmail.com', '12345', 'BASNAHI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_user`
--
ALTER TABLE `contact_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tabl_order`
--
ALTER TABLE `tabl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_user`
--
ALTER TABLE `contact_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `table_admin`
--
ALTER TABLE `table_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabl_order`
--
ALTER TABLE `tabl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
