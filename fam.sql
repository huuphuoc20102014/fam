-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 06:58 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fam`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog-id` int(11) NOT NULL,
  `blog-videos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog-images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog-tieude` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog-bangtin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category-id` int(11) NOT NULL,
  `category-name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category-id`, `category-name`) VALUES
(1, 'rau'),
(2, 'củ'),
(3, 'quả'),
(4, 'hạt');

-- --------------------------------------------------------

--
-- Table structure for table `fam`
--

CREATE TABLE `fam` (
  `product-id` int(11) NOT NULL,
  `product-category-id` int(11) NOT NULL,
  `product-name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product-price` int(11) NOT NULL,
  `product-images` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fam`
--

INSERT INTO `fam` (`product-id`, `product-category-id`, `product-name`, `product-price`, `product-images`) VALUES
(1, 1, 'Bấp  cải', 999, 'bapcai.jpg'),
(2, 1, 'Bấp  cải bẹ', 999, 'bap-cai-be.jpg'),
(3, 1, 'Cải xoan kale', 999, 'cai-xoan-kale.jpg'),
(4, 1, 'Rau cần', 999, 'cantao.jpg'),
(5, 1, 'Măn tay', 999, 'mang-tay-xanh.jpg'),
(6, 1, 'Hoa bí', 999, 'hoabi.jpg'),
(7, 1, 'Rau mòng tơi', 999, 'mong-toi.jpg'),
(8, 1, 'Cải thìa', 999, 'rau-cai-thia.jpg'),
(9, 1, 'Rau cải xanh', 999, 'rau-cai-xanh1.png'),
(10, 1, 'Rau dền', 999, 'rau-den.jpg'),
(11, 1, 'Rau dền tím', 999, 'rau-den.jpg'),
(12, 1, 'Rau lang', 999, 'rau-lang.jpg'),
(13, 1, 'Rau muốn', 999, 'rau-muon.jpg'),
(14, 1, 'Rau ngót', 999, 'rau-ngot.jpg'),
(15, 1, 'Rau tần ô', 999, 'rau-tan-o.jpg'),
(16, 1, 'Rau xa lát', 999, 'rau-xa-lat.jpg'),
(17, 1, 'Rau xà lách xoong', 999, 'sa-lach-son.jpg'),
(18, 1, 'Súp lơ trắng', 999, 'sup-lo-trang.jpg'),
(19, 1, 'Súp lơ xanh', 999, 'sup-lo-xanh.jpg'),
(20, 2, 'Cà rót', 999, 'ca-rot.jpg'),
(21, 2, 'Tổi', 999, 'hinh-anh-cu-toi-1520_6.jpg'),
(22, 2, 'Khoai lang', 999, 'khoai-lang.jpg'),
(23, 2, 'Khoai lang sáy', 999, 'khoai-lang-say.jpg'),
(24, 2, 'Rau xa lát', 999, 'rau-xa-lat.jpg'),
(25, 1, 'Bấp cải tím', 999, 'bap-cai-tim2.jpg'),
(26, 3, 'Bơ ', 999, 'bo.jpg'),
(27, 3, 'Bưởi da xanh', 999, 'buoi.jpg'),
(28, 3, 'Cà chua', 999, 'ca-chua.png'),
(29, 3, 'Cà chua chocolale', 999, 'Ca-chocolate.jpg'),
(30, 3, 'Cà chua bi vàng', 999, 'ca-chua-bi-vang.jpg'),
(31, 3, 'Cà chua bi đỏ', 999, 'cachuapi.jpg'),
(32, 3, 'Chuối dạ hương', 999, 'chuoi-dạ-hương.jpg'),
(33, 3, 'Đậu ván', 999, 'dau van.jpg'),
(35, 3, 'Dâu tây', 999, 'dautay.jpg'),
(36, 3, 'Dưa chuột', 999, 'dua-leo.jpg'),
(37, 3, 'Ớt chuông', 999, 'ot-chuong-2.jpg'),
(38, 3, 'Chuối sứ', 999, 'chuoi-xu.jpg'),
(39, 3, 'Bí ngồi', 999, 'mua-bi-ngoi.jpg'),
(40, 3, 'Dâu tầm', 999, 'Qua-dau-tam.jpg'),
(41, 3, 'Sầu riên', 999, 'sau-rien.jpg'),
(42, 3, 'Dưa chuột', 999, 'dua-leo.jpg'),
(43, 3, 'Ớt chuông', 999, 'ot-chuong-2.jpg'),
(44, 1, 'Đậu', 999, 'dau.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog-id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category-id`);

--
-- Indexes for table `fam`
--
ALTER TABLE `fam`
  ADD PRIMARY KEY (`product-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog-id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fam`
--
ALTER TABLE `fam`
  MODIFY `product-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
