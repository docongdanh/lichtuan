-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2019 at 01:39 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lichtuan`
--

-- --------------------------------------------------------

--
-- Table structure for table `lct`
--

CREATE TABLE `lct` (
  `ngay` date NOT NULL,
  `gio` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duhop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chutri` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cqcp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phucvuxe` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lct`
--

INSERT INTO `lct` (`ngay`, `gio`, `noidung`, `duhop`, `chutri`, `diadiem`, `cqcp`, `ghichu`, `phucvuxe`) VALUES
('2019-12-31', '06:01', 'Họp', 'Sở', 'abc', 'abc', 'abc', 'abc', 'abc'),
('2019-08-08', '13:02', '22', '2343', 'dfdsf', 'fgf', 'ggfdgf', 'sfdgfdg', 'fdsgdf'),
('2019-08-08', '13:02', '22', '2343', 'dfdsf', 'fgf', 'ggfdgf', 'sfdgfdg', 'fdsgdf'),
('2019-08-08', '14:02', 'Họp', 'Sở', 'abc', 'fgf', 'e2', 'e2', 'e2'),
('2019-02-05', '02:02', 'ưew', 'ewew', 'ewew', 'ưew', 'rw', 'wewewe', 'ewewe'),
('2019-02-05', '02:02', 'ưew', 'ewew', 'ewew', 'ưew', 'rw', 'wewewe', 'ewewe'),
('2019-02-05', '02:02', 'ưew', 'ewew', 'ewew', 'ưew', 'rw', 'wewewe', 'ewewe'),
('2019-02-05', '02:02', 'ưew', 'ewew', 'ewew', 'ưew', 'rw', 'wewewe', 'ewewe');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
