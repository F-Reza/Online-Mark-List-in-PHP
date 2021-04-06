-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2020 at 05:56 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `tablemark`
--

DROP TABLE IF EXISTS `tablemark`;
CREATE TABLE IF NOT EXISTS `tablemark` (
  `Reg_No` int(15) NOT NULL,
  `S_Name` varchar(35) NOT NULL,
  `English` int(5) NOT NULL,
  `Physics` int(5) NOT NULL,
  `Chemistry` int(5) NOT NULL,
  `Math` int(5) NOT NULL,
  `Total` int(5) DEFAULT NULL,
  PRIMARY KEY (`Reg_No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablemark`
--

INSERT INTO `tablemark` (`Reg_No`, `S_Name`, `English`, `Physics`, `Chemistry`, `Math`, `Total`) VALUES
(182002069, 'Forhad Reza', 65, 77, 69, 75, 286),
(182002070, 'Abid Azmain', 65, 45, 75, 45, 230),
(182002071, 'Farhan Morshed', 87, 67, 86, 86, 326),
(182002072, 'Abdullah Maruf', 87, 67, 76, 69, 299),
(182002073, 'Arko', 86, 87, 77, 67, 317),
(182002055, 'Mehedi Hasan', 76, 69, 75, 87, 307),
(182002023, 'Mahbub Sazid', 74, 73, 69, 75, 291),
(182002075, 'Arafat Hosain', 75, 65, 67, 55, 262),
(182002079, 'Durjoy Kabir', 76, 56, 76, 65, 273),
(182002020, 'Saim Ahmed', 56, 75, 55, 65, 251);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
