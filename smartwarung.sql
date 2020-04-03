-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2020 at 07:13 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartwarung`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `stock` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `username`, `name`, `stock`, `price`, `description`, `photo`) VALUES
(2, 'warung100', 'Sabun', 15, 10000, 'bagus', '5a914d6cb15d5c051b3690c5.png'),
(3, 'warung100', 'Vixal', 10, 1000, 'Enak gurih', '50783ce18615c247f5ad3e8993379ef43ab1ff02-large.png'),
(4, 'warung100', 'Sosis', 10, 1000, 'Empuk, renyah', 'kisspng-frankfurter-wrstchen-mettwurst-bockwurst-cervela-sausege-5b0bf3b7db7652.4001210415275099438989.png'),
(5, 'warung100', 'asd', 123, 123, 'ads', '261abaf760242bb1cf00633f9ef99902.jpg,971c9c35a7e2673f49ab28768ac726b3.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) DEFAULT NULL,
  `photo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `address`, `city`, `postcode`, `phone`, `email`, `role`, `photo`) VALUES
('a', 'abcd', 'e2fc714c4727ee9395f324cd2e7f331f', 'a', 'a', 'a', 'a', 'a@b.c', 0, NULL),
('asdf', 'adika', '05c12a287334386c94131ab8aa00d08a', '', '', '', '123', 'a@b.c', 0, NULL),
('adikamuh', 'adikamuh', '0b892785ed75d134b5894705d44c0dff', '', '', '', '081', 'a@b.c', 0, NULL),
('aasd', 'asdf asdf', '979d472a84804b9f647bc185a877a8b5', '', '', '', '234', 'a@b.c', 0, NULL),
('zoke', 'oke', 'e2fc714c4727ee9395f324cd2e7f331f', 'oke', 'oke', 'oke', 'okr', 'a@b.c', 0, NULL),
('warungoke', 'warung1', 'e2fc714c4727ee9395f324cd2e7f331f', 'a', 'a', 'a', 'a', 'a@b.c', 1, NULL),
('warung', 'warung100', 'e2fc714c4727ee9395f324cd2e7f331f', 'a', 'a', 'a', '123', 'a@b.c', 1, 'b2d176e25f68c31749431788c793ee12.jpg'),
('warteg', 'warung3', 'e2fc714c4727ee9395f324cd2e7f331f', 'a', 'a', 'a', 'a', 'a@b.c', 1, NULL),
('warteg', 'warung4', 'd41d8cd98f00b204e9800998ecf8427e', 'a', 'a', 'a', 'a', 'a@b.c', 1, '0a27c1041cb9e57f55b9a882718ee1ab.png'),
('warteg', 'warung5', 'd41d8cd98f00b204e9800998ecf8427e', 'a', 'a', 'a', 'a', 'a@b.c', 1, '39f6f2d1de33f1ba1be587b0cb55deae.png,fe2d4511b7f3e6e75be746e0721de05f.png,4cf90945447c177f4896acb5f46515d3.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_foods_fk1` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `items`
--
ALTER TABLE `items`
  ADD CONSTRAINT `users_foods_fk1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
