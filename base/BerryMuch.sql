-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: bioevlsoxoji8ey3abaq-mysql.services.clever-cloud.com:3306
-- Generation Time: Mar 22, 2023 at 10:19 PM
-- Server version: 8.0.22-13
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioevlsoxoji8ey3abaq`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int NOT NULL,
  `brand_name` varchar(255) NOT NULL,
  `brand_active` int NOT NULL DEFAULT '0',
  `brand_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`, `brand_active`, `brand_status`) VALUES
(1, 'prueba', 2, 1),
(2, 'Pifo', 1, 1),
(3, 'Cuenca', 1, 1),
(4, 'Guayllabamba', 1, 1),
(5, 'Berry Much', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categories_id` int NOT NULL,
  `categories_name` varchar(255) NOT NULL,
  `categories_active` int NOT NULL DEFAULT '0',
  `categories_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categories_id`, `categories_name`, `categories_active`, `categories_status`) VALUES
(1, 'Frutos Rojos', 1, 1),
(2, 'Miel', 1, 1),
(3, 'Arreglos', 1, 1),
(4, 'Berry Much', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int NOT NULL,
  `nom_cli` varchar(30) NOT NULL,
  `ape_cli` varchar(30) NOT NULL,
  `corre_cli` varchar(50) NOT NULL,
  `tele_cli` char(10) NOT NULL,
  `direc_cli` varchar(60) NOT NULL,
  `ced_cli` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nom_cli`, `ape_cli`, `corre_cli`, `tele_cli`, `direc_cli`, `ced_cli`) VALUES
(1, 'Rodrigo ', 'Terán', 'ttbr101081@gmail.com', '0991986210', 'Conocoto', '1719597807'),
(2, 'David', 'Caicedo', 'davidacaice18@gmail.com', '0985028207', 'Pedro sabio', '1722786959'),
(3, 'Richard', 'Casa', 'richardcasa2000@gmail.com', '0958931527', 'Llano Grande', '1727756122'),
(4, 'Gonzalo ', 'Cuichan', 'wlc175021@gmail.com', '0995115607', 'El Condado', '1750215988'),
(5, 'Gonzalo ', 'Cuichan', 'gonzalo_c2@gmail.com', '0987456542', 'Quito', '1721607922'),
(6, 'Paola', 'Terán', 'ttbr101081@gmail.com', '0991986210', 'Conocoto', '1719597815');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int NOT NULL,
  `order_date` date NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_contact` varchar(255) NOT NULL,
  `sub_total` varchar(255) NOT NULL,
  `vat` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `grand_total` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL,
  `due` varchar(255) NOT NULL,
  `payment_type` int NOT NULL,
  `payment_status` int NOT NULL,
  `order_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_date`, `client_name`, `client_contact`, `sub_total`, `vat`, `total_amount`, `discount`, `grand_total`, `paid`, `due`, `payment_type`, `payment_status`, `order_status`) VALUES
(1, '2021-08-11', 'Rodrigo Teran', '0991986210', '43.50', '5.66', '49.16', '0', '49.16', '49.16', '0.00', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `order_item_id` int NOT NULL,
  `order_id` int NOT NULL DEFAULT '0',
  `product_id` int NOT NULL DEFAULT '0',
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `order_item_status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`order_item_id`, `order_id`, `product_id`, `quantity`, `rate`, `total`, `order_item_status`) VALUES
(1, 1, 5, '1', '40', '40.00', 1),
(2, 1, 3, '1', '3.50', '3.50', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pedido`
--

CREATE TABLE `pedido` (
  `id_ped` int NOT NULL,
  `cliente` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `fecha` date NOT NULL,
  `productos` varchar(500) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `estado_pedi` int NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pedido`
--

INSERT INTO `pedido` (`id_ped`, `cliente`, `telefono`, `fecha`, `productos`, `estado`, `estado_pedi`, `total`) VALUES
(10, 'David Caicedo', '0985028207', '2021-08-10', '                            nombre = arandano                             cantidad = 1                        ', 'Por entregar', 1, 10),
(11, 'Rodrigo  Terán', '0991986210', '2021-08-10', '                            nombre = arandano                             cantidad = 2                        ', 'Por entregar', 1, 20),
(12, 'David Caicedo', '0985028207', '2021-08-10', '                            nombre = arandano                             cantidad = 3                        ', 'Por entregar', 1, 30),
(13, 'Richard Casa', '0958931527', '2021-08-10', '', 'Por entregar', 1, 0),
(14, 'Rodrigo  Terán', '0991986210', '2021-08-10', '', 'Por entregar', 1, 0),
(15, 'Rodrigo  Terán', '0991986210', '2021-08-10', '                            nombre = arandano                             cantidad = 2                        ', 'Por entregar', 1, 20),
(16, 'Gonzalo  Cuichan', '0995115607', '2021-08-10', '', 'Por entregar', 1, 0),
(17, 'Gonzalo  Cuichan', '0995115607', '2021-08-10', '                            nombre = arandano                             cantidad = 3                        ', 'Por entregar', 1, 30),
(18, 'Rodrigo  Terán', '0991986210', '2021-08-11', '', 'Por entregar', 1, 0),
(19, 'Rodrigo  Terán', '0991986210', '2021-08-11', '                            nombre = arandano                             cantidad = 1                        ', 'Por entregar', 1, 10),
(20, 'Gonzalo  Cuichan', '0987456542', '2021-08-11', '                            nombre = arandano                             cantidad = 7                        ', 'Por entregar', 1, 70),
(21, 'Rodrigo  Terán', '0991986210', '2021-08-11', '                            nombre = arreglo 1                             cantidad = 1                        ', 'Por entregar', 1, 40),
(22, 'Paola Terán', '0991986210', '2021-08-11', '                            nombre = arandano                             cantidad = 1                                                    nombre = Frambuesa                             cantidad = 1                        ', 'Por entregar', 1, 13.5),
(23, 'David Caicedo', '0985028207', '2022-06-12', '                            nombre = Arandano                             cantidad = 2', 'Por entregar', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` text NOT NULL,
  `brand_id` int NOT NULL,
  `categories_id` int NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `rate` varchar(255) NOT NULL,
  `active` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `brand_id`, `categories_id`, `quantity`, `rate`, `active`, `status`) VALUES
(1, 'Arandano', '../assests/images/stock/114359320162a653f8e98d0.png', 3, 1, '20', '10', 1, 1),
(2, 'Miel', '../assests/images/stock/156155151662a654b26a34a.png', 4, 2, '20', '20', 1, 1),
(3, 'Arreglo1', '../assests/images/stock/48694554062a6569ad7c96.JPG', 2, 3, '5', '10', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Admin', '0d40d9aea2b3b5a149dc34495fff0a0a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categories_id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`order_item_id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_ped`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categories_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `order_item_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_ped` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
