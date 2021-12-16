-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 15, 2021 at 03:02 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `characters`
--

-- --------------------------------------------------------

--
-- Table structure for table `heroes`
--

CREATE TABLE `heroes` (
  `Hero` varchar(60) NOT NULL,
  `Universe` varchar(60) NOT NULL,
  `First Apperance` varchar(60) NOT NULL,
  `Has Powers?` varchar(60) NOT NULL,
  `Main Power` varchar(60) NOT NULL,
  `Alter Ego` varchar(60) NOT NULL,
  `Is Secret?` varchar(60) NOT NULL,
  `Occupation` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heroes`
--

INSERT INTO `heroes` (`Hero`, `Universe`, `First Apperance`, `Has Powers?`, `Main Power`, `Alter Ego`, `Is Secret?`, `Occupation`) VALUES
('Superman', 'DC', '18-Apr-38', 'yes', 'flight', 'Clark Kent', 'yes', 'Reporter'),
('Batman', 'DC', '30-Mar-39', 'no', 'inexhaustable wealth', 'Bruce Wayne', 'yes', 'CEO'),
('Spider-Man', 'Marvel', 'Aug-62', 'yes', 'wall-crawling', 'Peter Parker', 'yes', 'Photogragpher '),
('Green Lantern', 'DC', 'Dec-71', 'yes', 'power ring', 'John Stewart', 'yes', 'U.S. Marine'),
('Daredevil', 'Marvel', 'Apr-64', 'no', 'echo-location', 'Matt Murdock', 'yes', 'Lawyer'),
('Wonder Woman ', 'DC', 'Oct-41', 'yes', 'super strength', 'Diana Prince', 'yes', 'Intelligence Officer'),
('Black Widow', 'Marvel', 'Apr-64', 'no', 'training', 'Natasha Romanova', 'no', 'Spy/Assassin'),
('Captain America', 'Marvel', 'Mar-41', 'yes', 'peak physical fitness', 'Steve Rogers', 'no', 'Solider'),
('Hulk', 'Marvel ', 'May-62', 'yes', 'super strength', 'Bruce Banner', 'no', 'Scientist'),
('Thor ', 'Marvel', 'Aug-62', 'yes', 'magic hammer', 'Donald Blake', 'yes', 'Doctor'),
('Catwoman', 'DC', 'Mar-40', 'no', 'master thief', 'Selena Kyle', 'yes', 'Burglar'),
('Martian Manhhunter', 'DC', 'Nov-55', 'yes', 'telepathy', 'J\'onn J\'onzz', 'yes', 'Detective'),
('Deadpool', 'Marvel', 'Feb-91', 'yes', 'super healing', 'Wade Wilson', 'no', 'Mercenary'),
('Shazam', 'DC', 'Dec-39', 'yes', 'super strength', 'Billy Batson', 'yes', 'Student'),
('Aquaman', 'DC', 'Nov-41', 'yes', 'control over sea life', 'Arthur Curry', 'yes', 'King'),
('Hakweye ', 'Marvel', 'Sep-64', 'no', 'expert aim', 'Clint Barton', 'no', 'Mercenary'),
('The Question', 'DC', 'Jun-67', 'no', 'exceptional detective', 'Vic Sage', 'yes', 'Detective'),
('Green Arrow', 'DC', 'Nov-41', 'no', 'unrivaled aim', 'Oliver Queen', 'yes', 'Billionaire'),
('Knightwing', 'DC', 'Jul-84', 'no', 'expert fighter', 'Dick Grayson', 'yes', 'Former Gymnist'),
('Power-Man', 'Marvel', 'Jun-72', 'yes', 'invulnerability', 'Luke Cage', 'no', 'Hero for Hire'),
('Ms Marvel', 'Marvel', 'Aug-13', 'yes ', 'shapeshifting', 'Kamala Khan', 'yes', 'High School Student'),
('Icon', 'DC', 'May-93', 'yes', 'invulnerability', 'Augustus Freeman', 'yes', 'Corporate Lawyer'),
('The Flash', 'DC', 'Oct-56', 'yes', 'super speed', 'Barry Allen', 'yes', 'Foresnsic Scientist'),
('Black Canary', 'DC', 'Aug-47', 'yes', 'super sonic scream', 'Dinah Lance', 'yes', 'N/A'),
('Iron Heart', 'Marvel ', 'May-16', 'no', 'genius intellect', 'Riri Williams', 'no', 'College Student'),
('Black Lightining', 'DC', 'Apr-77', 'yes', 'creates and controls lightning', 'Jefferson Pierce', 'yes', 'Academic');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
