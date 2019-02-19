-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 19, 2019 at 06:40 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anything`
--
CREATE DATABASE IF NOT EXISTS `anything` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `anything`;
--
-- Database: `bookings`
--
CREATE DATABASE IF NOT EXISTS `bookings` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookings`;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE IF NOT EXISTS `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `checkindate` date NOT NULL,
  `checkoutdate` date NOT NULL,
  `venue` varchar(127) NOT NULL,
  `business` tinyint(1) NOT NULL,
  `parking` tinyint(1) NOT NULL,
  `wifi` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

DROP TABLE IF EXISTS `rooms`;
CREATE TABLE IF NOT EXISTS `rooms` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Username` varchar(32) NOT NULL,
  `Password` varchar(32) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`ID`, `Username`, `Password`) VALUES
(40, 'Nero', 'Animedude'),
(39, 'dman@dman.com', '123'),
(38, 'XXXGhost', 'xhanti023'),
(37, 'Litha2019', 'Litha2019'),
(35, 'John54', 'John54'),
(41, 'John54', 'John54'),
(42, 'me', 'you');
--
-- Database: `popular_films`
--
CREATE DATABASE IF NOT EXISTS `popular_films` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `popular_films`;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
CREATE TABLE IF NOT EXISTS `film` (
  `title` varchar(64) NOT NULL,
  `director` varchar(64) NOT NULL,
  `year` int(4) DEFAULT NULL,
  `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`title`, `director`, `year`, `id`) VALUES
('Running Man', 'Steven King', 1999, 1),
('Transformers', 'Micheal Bay', 2006, 2),
('Assassins Creed', 'Ubisoft', 2007, 3),
('The Last Of Us', 'Naughty Dog', 2013, 4);
--
-- Database: `publications`
--
CREATE DATABASE IF NOT EXISTS `publications` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `publications`;

-- --------------------------------------------------------

--
-- Table structure for table `classics`
--

DROP TABLE IF EXISTS `classics`;
CREATE TABLE IF NOT EXISTS `classics` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Author` varchar(128) DEFAULT NULL,
  `Title` varchar(128) DEFAULT NULL,
  `Genre` varchar(16) DEFAULT NULL,
  `Year` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `classics`
--

INSERT INTO `classics` (`ID`, `Author`, `Title`, `Genre`, `Year`) VALUES
(1, 'Evan Christians', 'German Shephards', 'Sci-Fi', '1958'),
(2, 'Adolf Hitler', 'Mein Kampf', 'Autobiography', '1925'),
(3, 'JK Rowling', 'Harry Potter and the sorceres stone', 'Fiction', '1997'),
(4, 'Wlliam Shakespear', 'Romeo and Juliet', 'Play', '1597');
--
-- Database: `todolist`
--
CREATE DATABASE IF NOT EXISTS `todolist` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `todolist`;

-- --------------------------------------------------------

--
-- Table structure for table `mylist`
--

DROP TABLE IF EXISTS `mylist`;
CREATE TABLE IF NOT EXISTS `mylist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `task` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
