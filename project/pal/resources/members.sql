-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2011 at 02:24 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `PAL`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` VALUES(1, 'Rose', 'Nichols', 20, 'rose2.nichols@live.uwe.ac.uk');
INSERT INTO `members` VALUES(2, 'Joel', 'Austen', 21, 'j.austen@live.uwe.ac.uk');
INSERT INTO `members` VALUES(3, 'Jack', 'Chaplin', 22, 'j.chaplin@live.uwe.ac.uk');
INSERT INTO `members` VALUES(4, 'Lily', 'Kinsella', 19, 'lilly@live.uwe.ac.uk');
INSERT INTO `members` VALUES(5, 'Chris', 'Barker', 21, 'chris.barker@live.uwe.ac.uk');
INSERT INTO `members` VALUES(6, 'Edward', 'Tucker', 21, 'ed.tucker@live.uwe.ac.uk');
INSERT INTO `members` VALUES(7, 'Andy', 'McAdams', 19, 'a.mcadams@live.uwe.ac.uk');
INSERT INTO `members` VALUES(8, 'Elizabeth', 'Murray', 22, 'liz.murray@live.uwe.ac.uk');
