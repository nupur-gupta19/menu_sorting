-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2020 at 05:39 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `Id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Calories` varchar(255) NOT NULL,
  `Meal` varchar(255) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`Id`, `Name`, `Image`, `Calories`, `Meal`, `Category`, `Price`) VALUES
(0, 'Idli and Sambhar\r\n', 'image/idli.jpg', '250-270kcal', 'Breakfast', 'Veg', ''),
(1, 'Besan Chilla and Coriander chutney', 'image/chilla.jpg', '250kcal', 'Breakfast', 'Veg', ''),
(2, 'Puri and sabzi', 'image/puri.jpg', '250kcal', 'Breakfast', 'Veg', ''),
(3, 'Parantha (plain or stuffed) with curd with Tea /Coffee/ Milk', 'image/parantha.jpg', '300-400kcal', 'Breakfast', 'Veg', ''),
(4, 'Veggie wrap', 'image/veggie wrap.jfif', '150kcal', 'Snacks', 'Veg', ''),
(5, 'Poha', 'image/poha.jpg', '150kcal', 'Snacks', 'Veg', ''),
(6, 'Upma', 'image/upma.jpg', '150kcal', 'Snacks', 'Veg', ''),
(7, 'Sweet corn salad', 'image/sweetcorn salad.jfif', '150kcal', 'Snacks', 'Veg', ''),
(8, 'Bhel puri', 'image/bhelpuri.jpg', '150kcal', 'Snacks', 'Veg', ''),
(9, 'Roti + salad + Veg sabzi + Rice + Dal + Buttermilk', 'image/veg lunch.jpg', '400-500 kcal', 'Lunch', 'Veg', ''),
(10, 'Salad+ Curd rice + Roti + sabzi', 'image/veg dinner.jfif', '500-600kcal', 'Dinner', 'Veg', ''),
(11, 'Curd rice + roti + Sabzi', 'image/veg dinner.jfif', '450-500kcal', 'Dinner', 'Veg', ''),
(12, 'Roti + salad + chicken /fish sabzi + Rice + Dal + Buttermilk', 'image/veg lunch.jpg', '400-500 kcal', 'Lunch', 'Non-Veg', ''),
(13, 'Chickpea chaat', 'image/soya wrap.jpg', '150kcal', 'Snacks', 'Non-Veg', ''),
(14, 'Egg Wrap', 'image/egg wrap.jpg', '150kcal', 'Snacks', 'Non-Veg', ''),
(15, 'Salad+ Curd rice + Roti + Chicken/fish sabzi', 'image/veg dinner.jfif', '500-600kcal', 'Dinner', 'Non-Veg', ''),
(16, 'Curd rice + roti + chicken/fish Sabzi', 'image/veg dinner.jfif', '450-500kcal', 'Dinner', 'Non-Veg', ''),
(17, 'Parantha (plain or stuffed) with soy/almond Milk', 'image/parantha.jpg', '300-400kcal', 'Breakfast', 'Vegan', ''),
(18, 'Roti + salad + Tofu/soya sabzi + Rice + Dal + Buttermilk', 'image/veg lunch.jpg', '400-500kcal', 'Lunch', 'Vegan', ''),
(19, 'Sprouts salad', 'image/sprouts.jfif', '150kcal', 'Snacks', 'Vegan', ''),
(20, 'seasonal fruits salad', 'image/sesonal fruit salad.jpg', '150kcal', 'Snacks', 'Vegan', ''),
(21, 'Tofu wrap', 'image/tofu wrap.jfif', '150kcal', 'Snacks', 'Vegan', ''),
(22, 'Soya Wrap', 'image/soya wrap.jpg', '150kcal', 'Snacks', 'Vegan', ''),
(23, 'Salad + Soya Curd rice + roti + Tofu/soya Sabzi', 'image/veg dinner.jfif', '500-600kcal', 'Dinner', 'Vegan', ''),
(24, 'Curd rice + roti + tofu/soya Sabzi', 'image/veg dinner.jfif', '450-500kcal', 'Dinner', 'Vegan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
