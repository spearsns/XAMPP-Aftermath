-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Mar 15, 2020 at 07:25 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aftermath`
--

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

CREATE TABLE `characters` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CharacterName` varchar(30) NOT NULL,
  `Picture` varchar(60) DEFAULT NULL,
  `Deceased` tinyint(1) NOT NULL,
  `ActiveGame` int(11) NOT NULL,
  `Background` varchar(30) NOT NULL,
  `Habitat` varchar(30) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Sex` varchar(6) NOT NULL,
  `Ethnicity` varchar(20) NOT NULL,
  `HairColor` varchar(30) NOT NULL,
  `HairStyle` varchar(30) NOT NULL,
  `FacialHair` varchar(30) DEFAULT NULL,
  `EyeColor` varchar(20) NOT NULL,
  `SecondLanguage` varchar(20) DEFAULT NULL,
  `ThirdLanguage` varchar(20) DEFAULT NULL,
  `FourthLanguage` varchar(20) DEFAULT NULL,
  `FifthLanguage` varchar(20) DEFAULT NULL,
  `TotalExp` int(11) NOT NULL,
  `RemainingExp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `characters`
--

INSERT INTO `characters` (`ID`, `UserID`, `CharacterName`, `Picture`, `Deceased`, `ActiveGame`, `Background`, `Habitat`, `Age`, `Sex`, `Ethnicity`, `HairColor`, `HairStyle`, `FacialHair`, `EyeColor`, `SecondLanguage`, `ThirdLanguage`, `FourthLanguage`, `FifthLanguage`, `TotalExp`, `RemainingExp`) VALUES
(1, 1, 'Julian', 'C:xampphtdocsAftermathcharacters1583912680-the_overseer-juli', 0, 0, 'Outdoorsman', 'Suburban Canada', 31, 'Male', 'Caucasian', 'Black', 'Shaggy', 'Full Beard', 'Dark Brown', '', '', '', '', 0, 0),
(2, 2, 'Brown', 'C:xampphtdocsAftermathcharacters1583912083-guest-brown.jpg', 0, 0, 'Farmer', 'Midwest', 31, 'Male', 'Caucasian', 'Black', 'Short', '5 o\'clock', 'Blue', '', '', '', '', 1000, 50);

-- --------------------------------------------------------

--
-- Table structure for table `char_abilities`
--

CREATE TABLE `char_abilities` (
  `ID` int(11) NOT NULL,
  `CharacterID` int(11) NOT NULL,
  `AbilityNumber` tinyint(4) NOT NULL,
  `Name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `char_abilities`
--

INSERT INTO `char_abilities` (`ID`, `CharacterID`, `AbilityNumber`, `Name`) VALUES
(1, 1, 1, NULL),
(2, 1, 2, NULL),
(3, 1, 3, NULL),
(4, 1, 4, NULL),
(5, 1, 5, NULL),
(6, 1, 6, NULL),
(7, 1, 7, NULL),
(8, 1, 8, NULL),
(9, 1, 9, NULL),
(10, 1, 10, NULL),
(11, 1, 11, NULL),
(12, 1, 12, NULL),
(13, 1, 13, NULL),
(14, 1, 14, NULL),
(15, 1, 15, NULL),
(16, 1, 16, NULL),
(17, 2, 1, ''),
(18, 2, 2, ''),
(19, 2, 3, ''),
(20, 2, 4, ''),
(21, 2, 5, ''),
(22, 2, 6, ''),
(23, 2, 7, ''),
(24, 2, 8, ''),
(25, 2, 9, ''),
(26, 2, 10, ''),
(27, 2, 11, ''),
(28, 2, 12, ''),
(29, 2, 13, ''),
(30, 2, 14, ''),
(31, 2, 15, ''),
(32, 2, 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `char_id_marks`
--

CREATE TABLE `char_id_marks` (
  `ID` int(11) NOT NULL,
  `CharacterID` int(11) NOT NULL,
  `Face` varchar(50) DEFAULT NULL,
  `Head` varchar(50) DEFAULT NULL,
  `Neck` varchar(50) DEFAULT NULL,
  `Groin` varchar(50) DEFAULT NULL,
  `Rear` varchar(50) DEFAULT NULL,
  `Stomach` varchar(50) DEFAULT NULL,
  `LowerBack` varchar(50) DEFAULT NULL,
  `LRibs` varchar(50) DEFAULT NULL,
  `RRibs` varchar(50) DEFAULT NULL,
  `LShoulder` varchar(50) DEFAULT NULL,
  `RShoulder` varchar(50) DEFAULT NULL,
  `LBicep` varchar(50) DEFAULT NULL,
  `RBicep` varchar(50) DEFAULT NULL,
  `LThigh` varchar(50) DEFAULT NULL,
  `RThigh` varchar(50) DEFAULT NULL,
  `LForearm` varchar(50) DEFAULT NULL,
  `RForearm` varchar(50) DEFAULT NULL,
  `LCalf` varchar(50) DEFAULT NULL,
  `RCalf` varchar(50) DEFAULT NULL,
  `LHand` varchar(50) DEFAULT NULL,
  `RHand` varchar(50) DEFAULT NULL,
  `LFoot` varchar(50) DEFAULT NULL,
  `RFoot` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `char_id_marks`
--

INSERT INTO `char_id_marks` (`ID`, `CharacterID`, `Face`, `Head`, `Neck`, `Groin`, `Rear`, `Stomach`, `LowerBack`, `LRibs`, `RRibs`, `LShoulder`, `RShoulder`, `LBicep`, `RBicep`, `LThigh`, `RThigh`, `LForearm`, `RForearm`, `LCalf`, `RCalf`, `LHand`, `RHand`, `LFoot`, `RFoot`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `char_skills`
--

CREATE TABLE `char_skills` (
  `ID` int(11) NOT NULL,
  `CharacterID` int(11) NOT NULL,
  `MasterID` int(11) NOT NULL,
  `Value` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `char_skills`
--

INSERT INTO `char_skills` (`ID`, `CharacterID`, `MasterID`, `Value`) VALUES
(1, 1, 1, -45),
(2, 1, 2, 26),
(3, 1, 3, 97),
(4, 1, 4, 76),
(5, 1, 5, 81),
(6, 1, 6, 74),
(7, 1, 7, 72),
(8, 1, 8, 65),
(9, 1, 9, 88),
(10, 1, 10, 68),
(11, 1, 11, 100),
(12, 1, 12, 59),
(13, 1, 13, 77),
(14, 1, 14, 67),
(15, 1, 15, 63),
(16, 1, 16, 70),
(17, 1, 17, 14),
(18, 1, 18, 7),
(19, 1, 19, 92),
(20, 1, 20, 90),
(21, 1, 21, 58),
(22, 1, 22, 0),
(23, 1, 23, 0),
(24, 1, 24, 0),
(25, 1, 25, 0),
(26, 1, 26, 0),
(27, 1, 27, 72),
(28, 1, 28, 72),
(29, 1, 29, 51),
(30, 1, 30, 49),
(31, 1, 31, 52),
(32, 1, 32, 55),
(33, 1, 33, 0),
(34, 1, 34, 45),
(35, 1, 35, 0),
(36, 1, 36, 57),
(37, 1, 37, 0),
(38, 1, 38, 66),
(39, 1, 39, 0),
(40, 1, 40, 0),
(41, 1, 41, 0),
(42, 1, 42, 0),
(43, 1, 43, 0),
(44, 1, 44, 0),
(45, 1, 45, 0),
(46, 1, 46, 0),
(47, 1, 47, 64),
(48, 1, 48, 0),
(49, 1, 49, 0),
(50, 1, 50, 0),
(51, 1, 51, 0),
(52, 1, 52, 0),
(53, 1, 53, 0),
(54, 1, 54, 0),
(55, 1, 55, 0),
(56, 1, 56, 0),
(57, 1, 57, 0),
(58, 1, 58, 72),
(59, 1, 59, 72),
(60, 1, 60, 72),
(61, 1, 61, 75),
(62, 1, 62, 72),
(63, 1, 63, 0),
(64, 1, 64, 0),
(65, 1, 65, 0),
(66, 1, 66, 46),
(67, 1, 67, 0),
(68, 1, 68, 46),
(69, 1, 69, 38),
(70, 1, 70, 0),
(71, 1, 71, 0),
(72, 1, 72, 0),
(73, 1, 73, 0),
(74, 1, 74, 0),
(75, 1, 75, 0),
(76, 1, 76, 0),
(77, 1, 77, 0),
(78, 2, 1, -50),
(79, 2, 2, 21),
(80, 2, 3, 100),
(81, 2, 4, 95),
(82, 2, 5, 64),
(83, 2, 6, 62),
(84, 2, 7, 102),
(85, 2, 8, 51),
(86, 2, 9, 86),
(87, 2, 10, 65),
(88, 2, 11, 50),
(89, 2, 12, 51),
(90, 2, 13, 95),
(91, 2, 14, 58),
(92, 2, 15, 52),
(93, 2, 16, 54),
(94, 2, 17, 11),
(95, 2, 18, 5),
(96, 2, 19, 54),
(97, 2, 20, 55),
(98, 2, 21, 49),
(99, 2, 22, 0),
(100, 2, 23, 0),
(101, 2, 24, 0),
(102, 2, 25, 0),
(103, 2, 26, 0),
(104, 2, 27, 57),
(105, 2, 28, 59),
(106, 2, 29, 51),
(107, 2, 30, 50),
(108, 2, 31, 0),
(109, 2, 32, 0),
(110, 2, 33, 0),
(111, 2, 34, 44),
(112, 2, 35, 0),
(113, 2, 36, 47),
(114, 2, 37, 44),
(115, 2, 38, 46),
(116, 2, 39, 0),
(117, 2, 40, 0),
(118, 2, 41, 0),
(119, 2, 42, 0),
(120, 2, 43, 0),
(121, 2, 44, 0),
(122, 2, 45, 0),
(123, 2, 46, 0),
(124, 2, 47, 73),
(125, 2, 48, 0),
(126, 2, 49, 0),
(127, 2, 50, 0),
(128, 2, 51, 0),
(129, 2, 52, 44),
(130, 2, 53, 0),
(131, 2, 54, 0),
(132, 2, 55, 0),
(133, 2, 56, 0),
(134, 2, 57, 0),
(135, 2, 58, 57),
(136, 2, 59, 57),
(137, 2, 60, 57),
(138, 2, 61, 59),
(139, 2, 62, 57),
(140, 2, 63, 0),
(141, 2, 64, 0),
(142, 2, 65, 0),
(143, 2, 66, 44),
(144, 2, 67, 0),
(145, 2, 68, 48),
(146, 2, 69, 0),
(147, 2, 70, 0),
(148, 2, 71, 0),
(149, 2, 72, 0),
(150, 2, 73, 0),
(151, 2, 74, 0),
(152, 2, 75, 0),
(153, 2, 76, 0),
(154, 2, 77, 0);

-- --------------------------------------------------------

--
-- Table structure for table `char_traits`
--

CREATE TABLE `char_traits` (
  `ID` int(11) NOT NULL,
  `CharacterID` int(11) NOT NULL,
  `Memory` tinyint(4) NOT NULL,
  `Logic` tinyint(4) NOT NULL,
  `Perception` tinyint(4) NOT NULL,
  `Willpower` tinyint(4) NOT NULL,
  `Charisma` tinyint(4) NOT NULL,
  `Strength` tinyint(4) NOT NULL,
  `Endurance` tinyint(4) NOT NULL,
  `Agility` tinyint(4) NOT NULL,
  `Speed` tinyint(4) NOT NULL,
  `Beauty` tinyint(4) NOT NULL,
  `Sequence` tinyint(4) NOT NULL,
  `Actions` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `char_traits`
--

INSERT INTO `char_traits` (`ID`, `CharacterID`, `Memory`, `Logic`, `Perception`, `Willpower`, `Charisma`, `Strength`, `Endurance`, `Agility`, `Speed`, `Beauty`, `Sequence`, `Actions`) VALUES
(1, 1, 7, 14, 12, 12, 16, 16, 15, 11, 18, 10, 15, 9),
(2, 2, 12, 9, 12, 17, 14, 18, 10, 10, 12, 12, 12, 6);

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `ID` int(11) NOT NULL,
  `Finished` bit(1) NOT NULL DEFAULT b'0',
  `GameName` varchar(30) NOT NULL,
  `Description` text NOT NULL,
  `TxtFile` varchar(30) NOT NULL,
  `Picture` varchar(120) DEFAULT NULL,
  `StorytellerPassword` varchar(30) NOT NULL,
  `PlayerPassword` varchar(30) NOT NULL,
  `Locked` bit(1) NOT NULL,
  `StorytellerActive` bit(1) NOT NULL,
  `StorytellerID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`ID`, `Finished`, `GameName`, `Description`, `TxtFile`, `Picture`, `StorytellerPassword`, `PlayerPassword`, `Locked`, `StorytellerActive`, `StorytellerID`) VALUES
(8, b'0', 'Example', 'Step inside just to get familiar with the system.  Password is &quot;example&quot;', 'Example.txt', NULL, 'example', 'example', b'0', b'0', 0),
(10, b'1', 'drop2', 'drop2', 'drop2.txt', NULL, 'drop', 'drop', b'1', b'1', 0),
(11, b'1', 'kk', 'kk', 'kk.txt', NULL, 'kk', 'kk', b'1', b'1', 0),
(12, b'1', 'confirm', 'confirm', 'confirm.txt', NULL, 'confirm', 'confirm', b'1', b'1', 0),
(13, b'0', 'Debugging', 'debugging character portrait issues', 'Debugging.txt', '../games/images/1583906457debugging.png', 'debug', 'debug', b'0', b'0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `game_participants`
--

CREATE TABLE `game_participants` (
  `ID` int(11) NOT NULL,
  `GameID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `CharacterID` int(11) NOT NULL,
  `PlayerActive` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_participants`
--

INSERT INTO `game_participants` (`ID`, `GameID`, `UserID`, `CharacterID`, `PlayerActive`) VALUES
(1, 8, 2, 2, b'0'),
(2, 13, 1, 1, b'0');

-- --------------------------------------------------------

--
-- Table structure for table `master_skills`
--

CREATE TABLE `master_skills` (
  `ID` int(11) NOT NULL,
  `TypeID` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_skills`
--

INSERT INTO `master_skills` (`ID`, `TypeID`, `Name`) VALUES
(1, 1, 'OffHand'),
(2, 6, 'Gambling'),
(3, 1, 'Unarmed'),
(4, 1, 'Grapple'),
(5, 1, 'ShortWeapons'),
(6, 1, 'LongWeapons'),
(7, 1, 'TwoHandWeapons'),
(8, 1, 'ChainWeapons'),
(9, 1, 'Shield'),
(10, 1, 'Thrown'),
(11, 1, 'Archery'),
(12, 1, 'Pistols'),
(13, 1, 'Rifles'),
(14, 1, 'Burst'),
(15, 1, 'SpecialWeapons'),
(16, 1, 'WeaponSystems'),
(17, 1, 'Block'),
(18, 1, 'Dodge'),
(19, 2, 'Stealth'),
(20, 2, 'Concealment'),
(21, 2, 'Sleight'),
(22, 2, 'Lockpick'),
(23, 2, 'Forgery'),
(24, 2, 'Cryptography'),
(25, 2, 'Disguise'),
(26, 2, 'Restraints'),
(27, 3, 'EnvAware'),
(28, 3, 'Surveillance'),
(29, 3, 'Navigation'),
(30, 3, 'Preservation'),
(31, 3, 'Tracking'),
(32, 3, 'Trapping'),
(33, 3, 'Fishing'),
(34, 3, 'FirstAid'),
(35, 4, 'Skateboard'),
(36, 4, 'Bicycle'),
(37, 4, 'Horsemanship'),
(38, 4, 'Automobile'),
(39, 4, 'Motorcycle'),
(40, 4, 'Jet Ski'),
(41, 4, 'Sailing'),
(42, 4, 'Boating'),
(43, 4, 'Multi Gear'),
(44, 4, 'Heavy Equip'),
(45, 4, 'Helicopters'),
(46, 4, 'Airplanes'),
(47, 5, 'Crafting'),
(48, 5, 'Computers'),
(49, 5, 'Programming'),
(50, 5, 'Radios'),
(51, 5, 'Networks'),
(52, 5, 'Mechanics'),
(53, 5, 'Electrical'),
(54, 5, 'Circuitry'),
(55, 5, 'Explosives'),
(56, 5, 'Construction'),
(57, 5, 'Architecture'),
(58, 6, 'Negotiation'),
(59, 6, 'Guile'),
(60, 6, 'Etiquette'),
(61, 6, 'Animal Handling'),
(62, 6, 'Appraisal'),
(63, 6, 'Legal'),
(64, 7, 'History'),
(65, 7, 'Forensics'),
(66, 7, 'Biology'),
(67, 7, 'Chemistry'),
(68, 7, 'Botany'),
(69, 7, 'Mycology'),
(70, 7, 'Toxicology'),
(71, 7, 'Pharmacology'),
(72, 7, 'Surgery'),
(73, 7, 'Medicine'),
(74, 6, 'SecondLang'),
(75, 6, 'ThirdLang'),
(76, 6, 'FourthLang'),
(77, 6, 'FifthLang');

-- --------------------------------------------------------

--
-- Table structure for table `skill_types`
--

CREATE TABLE `skill_types` (
  `ID` int(11) NOT NULL,
  `Type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skill_types`
--

INSERT INTO `skill_types` (`ID`, `Type`) VALUES
(1, 'Combat'),
(2, 'Covert'),
(7, 'Science'),
(6, 'Soft'),
(3, 'Survival'),
(5, 'Technology'),
(4, 'Transportation');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `Active` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Username`, `Password`, `Email`, `Active`) VALUES
(1, 'The_Overseer', 'Rem3mberthi$', 'spears.ns@gmail.com', b'0'),
(2, 'Guest', 'guest', 'guest@guest.com', b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `char_abilities`
--
ALTER TABLE `char_abilities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `char_id_marks`
--
ALTER TABLE `char_id_marks`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `char_skills`
--
ALTER TABLE `char_skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `char_traits`
--
ALTER TABLE `char_traits`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `game_participants`
--
ALTER TABLE `game_participants`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `master_skills`
--
ALTER TABLE `master_skills`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `skill_types`
--
ALTER TABLE `skill_types`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Type` (`Type`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `characters`
--
ALTER TABLE `characters`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `char_abilities`
--
ALTER TABLE `char_abilities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `char_id_marks`
--
ALTER TABLE `char_id_marks`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `char_skills`
--
ALTER TABLE `char_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `char_traits`
--
ALTER TABLE `char_traits`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `game_participants`
--
ALTER TABLE `game_participants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_skills`
--
ALTER TABLE `master_skills`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `skill_types`
--
ALTER TABLE `skill_types`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
