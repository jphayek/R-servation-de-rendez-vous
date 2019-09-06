-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 06, 2019 at 01:07 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE
= "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT
= 0;
START TRANSACTION;
SET time_zone
= "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor-jp`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE
IF NOT EXISTS `reservation`
(
  `Patient1` int
(11) NOT NULL COMMENT 'Patient1',
  `Patient2` int
(20) NOT NULL COMMENT 'Patient2',
  `Patient3` int
(11) NOT NULL COMMENT 'Patient3',
  `Patient4` int
(30) NOT NULL COMMENT 'Patient4',
  UNIQUE KEY `Patient1`
(`Patient1`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Database: `doctor-jp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE
IF NOT EXISTS `admin`
(
  `Client1-cal` date NOT NULL COMMENT 'Calendar for the Client 1',
  `Client2-cal` date NOT NULL COMMENT 'Calendar for the Client 2',
  `Client3-cal` date NOT NULL COMMENT 'Calendar for the Client 3',
  `Client4-cal` date NOT NULL COMMENT 'Calendar for the Client 4'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Calendar for the Clients';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
