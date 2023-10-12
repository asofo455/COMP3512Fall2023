-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2023 at 10:33 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `music`
--

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

CREATE TABLE `artists` (
  `artist_id` int(11) NOT NULL,
  `artist_name` text NOT NULL,
  `artist_ type_ id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`artist_id`, `artist_name`, `artist_ type_ id`) VALUES
(1, '2 Chainz', 3),
(2, '21 Savage', 3),
(3, '5 Seconds of Summer', 1),
(4, '6ix9ine', 3),
(5, 'A Boogie Wit da Hoodie', 3),
(6, 'AJ Tracey', 3),
(7, 'AJR', 4),
(8, 'Aminé', 3),
(9, 'Anne-Marie', 3),
(10, 'Anuel AA', 3),
(11, 'Ariana Grande', 3),
(12, 'Ashley O', 3),
(13, 'Axwell / Ingrosso', 2),
(14, 'B Young', 3),
(15, 'Bad Bunny', 3),
(16, 'Bazzi', 3),
(17, 'Beyoncé', 3),
(18, 'Billie Eilish', 3),
(19, 'blackbear', 3),
(20, 'BLACKPINK', 1),
(21, 'BlocBoy JB', 3),
(22, 'Blueface', 3),
(23, 'Bruno Mars', 3),
(24, 'BTS', 1),
(25, 'Calvin Harris', 3),
(26, 'Camila Cabello', 3),
(27, 'Cardi B', 3),
(28, 'Cashmere Cat', 3),
(29, 'Charlie Puth', 3),
(30, 'Cheat Codes', 4),
(31, 'Childish Gambino', 3),
(32, 'Chris Brown', 3),
(33, 'Clean Bandit', 1),
(34, 'Dan + Shay', 2),
(35, 'Daya', 3),
(36, 'Demi Lovato', 3),
(37, 'Deorro', 3),
(38, 'DJ Khaled', 3),
(39, 'DJ Snake', 3),
(40, 'DNCE', 1),
(41, 'Doja Cat', 3),
(42, 'Drake', 3),
(43, 'Dua Lipa', 3),
(44, 'Ed Sheeran', 3),
(45, 'Ella Mai', 3),
(46, 'Enrique Iglesias', 3),
(47, 'EO', 3),
(48, 'Fifth Harmony', 1),
(49, 'FINNEAS', 3),
(50, 'Flipp Dinero', 3),
(51, 'Florida Georgia Line', 2),
(52, 'Future', 3),
(53, 'Galantis', 2),
(54, 'Garrett Nash', 3),
(55, 'G-Eazy', 3),
(56, 'George Ezra', 3),
(57, 'Hailee Steinfeld', 3),
(58, 'Halsey', 3),
(59, 'iann dior', 3),
(60, 'Imagine Dragons', 1),
(61, 'James Arthur', 3),
(62, 'Jason Aldean', 3),
(63, 'Jax Jones', 3),
(64, 'Joel Corry', 3),
(65, 'Jonas Blue', 3),
(66, 'Jonas Brothers', 1),
(67, 'Juice WRLD', 3),
(68, 'Justin Timberlake', 3),
(69, 'Kehlani', 3),
(70, 'Kendrick Lamar', 3),
(71, 'Khalid', 3),
(72, 'King Princess', 3),
(73, 'KYLE', 3),
(74, 'Lady Gaga', 3),
(75, 'Lana Del Rey', 3),
(76, 'Låpsley', 3),
(77, 'Lauv', 3),
(78, 'Lewis Capaldi', 3),
(79, 'Liam Payne', 3),
(80, 'Lil Baby', 3),
(81, 'Lil Nas X', 3),
(82, 'Lil Peep', 3),
(83, 'Lil Pump', 3),
(84, 'Lil Tecca', 3),
(85, 'Lil Uzi Vert', 3),
(86, 'Lil Wayne', 3),
(87, 'Little Mix', 1),
(88, 'Lizzo', 3),
(89, 'Logic', 3),
(90, 'Lorde', 3),
(91, 'Loud Luxury', 2),
(92, 'Luis Fonsi', 3),
(93, 'Lunay', 3),
(94, 'M.O', 1),
(95, 'Macklemore', 3),
(96, 'Maggie Rogers', 3),
(97, 'Major Lazer', 4),
(98, 'Maluma', 3),
(99, 'Marc E. Bassy', 3),
(100, 'Mark Ronson', 3),
(101, 'Maroon 5', 1),
(102, 'Marshmello', 3),
(103, 'Martin Garrix', 3),
(104, 'Meek Mill', 3),
(105, 'Megan Thee Stallion', 3),
(106, 'Meghan Trainor', 3),
(107, 'Migos', 4),
(108, 'Mike Perry', 3),
(109, 'Mike Posner', 3),
(110, 'Miley Cyrus', 3),
(111, 'MK', 3),
(112, 'MØ', 3),
(113, 'Mustard', 3),
(114, 'NF', 3),
(115, 'Niall Horan', 3),
(116, 'Nick Jonas', 3),
(117, 'Nio Garcia', 3),
(118, 'NLE Choppa', 3),
(119, 'Normani', 3),
(120, 'Offset', 3),
(121, 'Olivia Holt', 3),
(122, 'OneRepublic', 1),
(123, 'Ozuna', 3),
(124, 'P!nk', 3),
(125, 'PARTYNEXTDOOR', 3),
(126, 'Playboi Carti', 3),
(127, 'Polo G', 3),
(128, 'Portugal. The Man', 1),
(129, 'Post Malone', 3),
(130, 'Rae Sremmurd', 2),
(131, 'Regard', 3),
(132, 'Rich The Kid', 3),
(133, 'Rihanna', 3),
(134, 'Sam Feldt', 3),
(135, 'Sam Smith', 3),
(136, 'Saweetie', 3),
(137, 'SAYGRACE', 3),
(138, 'Scouting For Girls', 1),
(139, 'Sean Paul', 3),
(140, 'Sech', 3),
(141, 'Selena Gomez', 3),
(142, 'Shawn Mendes', 3),
(143, 'Sheck Wes', 3),
(144, 'Sigala', 3),
(145, 'Sigrid', 3),
(146, 'Steve Aoki', 3),
(147, 'Stormzy', 3),
(148, 'SZA', 3),
(149, 'Taylor Swift', 3),
(150, 'The 1975', 1),
(151, 'The Chainsmokers', 2),
(152, 'The Lumineers', 1),
(153, 'The Vamps', 2),
(154, 'The Weeknd', 3),
(155, 'Timeflies', 2),
(156, 'Tinie Tempah', 3),
(157, 'Tove Lo', 3),
(158, 'Travis Scott', 3),
(159, 'Tyga', 3),
(160, 'Tyler, The Creator', 3),
(161, 'Vance Joy', 3),
(162, 'Wiley', 3),
(163, 'XXXTENTACION', 3),
(164, 'Years & Years', 1),
(165, 'YG', 3),
(166, 'Young T & Bugsey', 2),
(167, 'Young Thug', 3),
(168, 'Zara Larsson', 3),
(169, 'Zay Hilfigerrr', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
