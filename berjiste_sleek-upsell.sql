-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 10, 2020 at 05:35 PM
-- Server version: 10.3.25-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `berjiste_sleek-upsell`
--

-- --------------------------------------------------------

--
-- Table structure for table `cbs`
--

CREATE TABLE `cbs` (
  `bid` text NOT NULL,
  `rule` text NOT NULL,
  `oid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cbs`
--

INSERT INTO `cbs` (`bid`, `rule`, `oid`) VALUES
('1603662108_0', 'ALL', '3'),
('1603662108_1', 'ANY', '3'),
('1603971021_0', 'ALL', '7'),
('1604051352_0', 'ALL', '8');

-- --------------------------------------------------------

--
-- Table structure for table `cfs`
--

CREATE TABLE `cfs` (
  `fid` text NOT NULL,
  `oid` text NOT NULL,
  `pid` text NOT NULL,
  `type` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `placeholder` varchar(255) NOT NULL,
  `price` text NOT NULL,
  `required` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cfs`
--

INSERT INTO `cfs` (`fid`, `oid`, `pid`, `type`, `name`, `placeholder`, `price`, `required`) VALUES
('1603661670_0', '2', '4582708969547', 'select', 'color', 'Choose color of choice', '', ''),
('1604595656_0', '9', '4582708314187', 'select', 'color', 'Choose a color', '', 'true'),
('1604595656_1', '9', '4582708314187', 'number', 'size', 'Specify your size', '', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `fid` text NOT NULL,
  `oid` text NOT NULL,
  `pid` text NOT NULL,
  `price` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`fid`, `oid`, `pid`, `price`, `value`) VALUES
('1603661670_0', '2', '4582708969547', '0', 'black'),
('1603661670_0', '2', '4582708969547', '0', 'grey'),
('1603661670_0', '2', '4582708969547', '0', 'transparent'),
('1604595656_0', '9', '4582708314187', '45', 'red'),
('1604595656_0', '9', '4582708314187', '23', 'blue'),
('1604595656_0', '9', '4582708314187', '19', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `ocs`
--

CREATE TABLE `ocs` (
  `cid` text NOT NULL,
  `oid` text NOT NULL,
  `bid` text NOT NULL,
  `type` text NOT NULL,
  `quantity` text NOT NULL,
  `level` text NOT NULL,
  `content` varchar(255) NOT NULL,
  `pid` text NOT NULL,
  `vid` text NOT NULL,
  `amount` text NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocs`
--

INSERT INTO `ocs` (`cid`, `oid`, `bid`, `type`, `quantity`, `level`, `content`, `pid`, `vid`, `amount`, `country`) VALUES
('1603662108_0', '3', '1603662108_0', 'oc1', '1', 'product', 'Chequered Red Shirt', '4582708445259', '4582708445259', '', 'AF'),
('1603662108_1', '3', '1603662108_0', 'oc1', '1', 'collection', 'Home page', '163926802507', '163926802507', '', 'AF'),
('1603662108_2', '3', '1603662108_1', 'oc6', '1', 'collection', 'Home page', '163926802507', '163926802507', '1000', 'AF'),
('1603971021_0', '7', '1603971021_0', 'oc1', '1', 'product', 'Blue Silk Tuxedo', '4582708314187', '4582708314187', '', 'AF'),
('1604051352_0', '8', '1604051352_0', 'oc1', '1', 'collection', 'Home page', '163926802507', '163926802507', '', 'AF');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `offer_id` int(30) NOT NULL,
  `shop` varchar(255) NOT NULL,
  `date` text NOT NULL,
  `title` text NOT NULL,
  `scheme` text NOT NULL,
  `stop_show` text NOT NULL,
  `layout` text NOT NULL,
  `required_checkout` text NOT NULL,
  `discount` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `rule` text NOT NULL,
  `to_checkout` text NOT NULL,
  `status` text NOT NULL,
  `text` varchar(10000) NOT NULL,
  `atc` text NOT NULL,
  `close` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`offer_id`, `shop`, `date`, `title`, `scheme`, `stop_show`, `layout`, `required_checkout`, `discount`, `code`, `rule`, `to_checkout`, `status`, `text`, `atc`, `close`) VALUES
(2, 'berjis-tech-ltd', '1603661670', '', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(3, 'berjis-tech-ltd', '1603662108', '', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(6, 'berjis-tech-ltd', '1603662665', 'Homepage Collection', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(7, 'berjis-tech-ltd', '1603971021', 'Q1', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(8, 'berjis-tech-ltd', '1604051352', 'Testing collections', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(9, 'berjis-tech-ltd', '1604595656', '', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(30) NOT NULL,
  `product` text NOT NULL,
  `offer` text NOT NULL,
  `text` varchar(10000) NOT NULL,
  `atc` varchar(255) NOT NULL,
  `show_title` text NOT NULL,
  `show_price` text NOT NULL,
  `show_image` text NOT NULL,
  `v_price` text NOT NULL,
  `c_price` text NOT NULL,
  `linked` text NOT NULL,
  `q_select` text NOT NULL,
  `ab_test` text NOT NULL,
  `ab_text` varchar(10000) NOT NULL,
  `ab_atc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product`, `offer`, `text`, `atc`, `show_title`, `show_price`, `show_image`, `v_price`, `c_price`, `linked`, `q_select`, `ab_test`, `ab_text`, `ab_atc`) VALUES
(2, '4582708314187', '2', 'Need something cool?', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(3, '4582708969547', '2', 'How about free shipping?', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(4, '4582709395531', '3', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(7, '4582708445259', '6', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(8, '4582708445259', '7', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(9, '4582708904011', '8', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(10, '4582708314187', '9', 'How about a free shipping?', '', 'n', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', ''),
(11, '4582708445259', '9', 'Would you like a classy shirt', '', 'n', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(30) NOT NULL,
  `shop` varchar(10000) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `date` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop`, `token`, `date`) VALUES
(1, 'berjis-tech-ltd', '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', 1605018387);

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `stat_id` int(11) NOT NULL,
  `date` text NOT NULL,
  `shop` text NOT NULL,
  `offer` text NOT NULL,
  `product` text NOT NULL,
  `variant` text NOT NULL,
  `quantity` text NOT NULL,
  `ip` text NOT NULL,
  `country` text NOT NULL,
  `type` text NOT NULL,
  `action` text NOT NULL,
  `page` text NOT NULL,
  `device` text NOT NULL,
  `browser` text NOT NULL,
  `citems` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`) VALUES
(1, '1604216925', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(2, '1604218207', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(3, '1604218260', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(4, '1604218485', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(5, '1604218550', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(6, '1604218627', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(7, '1604218694', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', 'undefined', 'undefined', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(8, '1604218887', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '[object Object]', '[object Object]', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(9, '1604218939', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '[object Object]', '[object Object]', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(10, '1604219821', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(11, '1604221624', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(12, '1604221712', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(13, '1604221822', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(14, '1604221822', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(15, '1604221853', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(16, '1604221853', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(17, '1604221853', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(18, '1604221856', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(19, '1604221856', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(20, '1604221856', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(21, '1604222083', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(22, '1604222088', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(23, '1604222122', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(24, '1604222124', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(25, '1604222125', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(26, '1604222125', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(27, '1604222125', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(28, '1604222125', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(29, '1604222125', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(30, '1604222130', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(31, '1604222130', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(32, '1604222130', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(33, '1604222130', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(34, '1604222130', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(35, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(36, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(37, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(38, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(39, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(40, '1604222131', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(41, '1604222316', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(42, '1604222318', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(43, '1604222320', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(44, '1604222320', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(45, '1604222320', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(46, '1604222320', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(47, '1604222320', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(48, '1604222321', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(49, '1604222347', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(50, '1604222347', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(51, '1604222347', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(52, '1604222349', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(53, '1604222349', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(54, '1604222350', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(55, '1604222350', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(56, '1604222350', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(57, '1604222393', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(58, '1604222725', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(59, '1604222725', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(60, '1604222726', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(61, '1604222726', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(62, '1604222732', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(63, '1604222732', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(64, '1604222733', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(65, '1604222733', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(66, '1604222733', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(67, '1604222733', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(68, '1604222733', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(69, '1604222922', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(70, '1604222922', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(71, '1604222922', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(72, '1604222923', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(73, '1604222923', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(74, '1604222923', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(75, '1604222925', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(76, '1604222925', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(77, '1604222925', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(78, '1604222925', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(79, '1604222925', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(80, '1604222928', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(81, '1604223208', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(82, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(83, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(84, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(85, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(86, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(87, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(88, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(89, '1604223209', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(90, '1604223211', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(91, '1604223211', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(92, '1604223297', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(93, '1604223297', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(94, '1604223303', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(95, '1604223455', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(96, '1604223459', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(97, '1604223639', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(98, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(99, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(100, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(101, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(102, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(103, '1604223640', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(104, '1604223643', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(105, '1604223643', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(106, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(107, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(108, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(109, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(110, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(111, '1604223644', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(112, '1604223645', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(113, '1604223647', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(114, '1604223647', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(115, '1604223770', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(116, '1604223773', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(117, '1604223773', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(118, '1604223783', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(119, '1604223810', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(120, '1604223810', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(121, '1604223810', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(122, '1604223810', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(123, '1604223810', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(124, '1604223812', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(125, '1604223814', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(126, '1604223814', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(127, '1604223821', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011],[4582708314187,32337482678347]]'),
(128, '1604223856', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(129, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(130, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(131, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(132, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(133, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(134, '1604223857', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(135, '1604223858', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(136, '1604223866', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(137, '1604223868', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(138, '1604223868', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(139, '1604223868', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(140, '1604223869', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(141, '1604223871', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(142, '1604223871', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083]]'),
(143, '1604223878', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(144, '1604223879', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(145, '1604223879', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(146, '1604223880', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(147, '1604223880', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(148, '1604223879', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(149, '1604223879', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(150, '1604223879', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(151, '1604223880', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(152, '1604223880', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(153, '1604223881', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(154, '1604223882', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(155, '1604223882', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(156, '1604223885', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(157, '1604223885', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(158, '1604223885', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(159, '1604223885', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(160, '1604223889', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(161, '1604223893', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(162, '1604223893', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(163, '1604223894', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(164, '1604223902', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(165, '1604223902', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(166, '1604223903', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(167, '1604223903', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(168, '1604223903', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(169, '1604223903', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(170, '1604223903', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(171, '1604223906', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(172, '1604223907', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708969547,32337487659083]]'),
(173, '1604252675', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', 'undefined', 'undefined', '', '', 'show', 'show', '/products/classic-varsity-top', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(174, '1604252680', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(175, '1604252779', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(176, '1604252784', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(177, '1604252792', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(178, '1604252792', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(179, '1604252799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(180, '1604252799', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(181, '1604252808', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582709264459,32337489363019]]'),
(182, '1604252817', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(183, '1604252821', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(184, '1604252822', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(185, '1604252822', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(186, '1604252822', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(187, '1604252823', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(188, '1604252823', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(189, '1604252824', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(190, '1604252832', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(191, '1604252835', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(192, '1604252835', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(193, '1604252835', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(194, '1604252835', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(195, '1604252836', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(196, '1604252844', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(197, '1604252863', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(198, '1604252863', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(199, '1604252863', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(200, '1604252863', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(201, '1604252875', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(202, '1604252880', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(203, '1604252883', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(204, '1604252883', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(205, '1604252895', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(206, '1604252895', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(207, '1604252981', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(208, '1604252988', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(209, '1604252990', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(210, '1604252990', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(211, '1604252992', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(212, '1604252999', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(213, '1604253008', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]');
INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`) VALUES
(214, '1604253008', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(215, '1604253014', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(216, '1604253022', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(217, '1604253022', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(218, '1604253029', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(219, '1604253170', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(220, '1604253174', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482776651', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(221, '1604253212', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482776651', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(222, '1604253212', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(223, '1604253215', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '5', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(224, '1604253227', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '8', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(225, '1604253230', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '8', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(226, '1604253230', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482776651', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(227, '1604253236', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482809419', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(228, '1604253321', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482809419', '7', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(229, '1604253329', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '8', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(230, '1604253329', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482809419', '7', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(231, '1604253329', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '8', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(232, '1604253335', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(233, '1604253354', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(234, '1604253354', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(235, '1604253354', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(236, '1604253354', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(237, '1604253355', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(238, '1604253355', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(239, '1604253355', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(240, '1604253355', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(241, '1604253489', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(242, '1604253489', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(243, '1604253489', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(244, '1604253489', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(245, '1604254578', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(246, '1604254771', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(247, '1604254777', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(248, '1604254777', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(249, '1604254777', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(250, '1604254785', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(251, '1604254786', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(252, '1604254791', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(253, '1604254793', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(254, '1604254799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(255, '1604254799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(256, '1604254799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(257, '1604254799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(258, '1604254799', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(259, '1604255140', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(260, '1604255141', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(261, '1604255141', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(262, '1604255141', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(263, '1604255141', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(264, '1604255142', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(265, '1604255145', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(266, '1604255146', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(267, '1604255150', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(268, '1604255152', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(269, '1604255155', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(270, '1604255156', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(271, '1604255157', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(272, '1604255157', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(273, '1604255158', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(274, '1604255159', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(275, '1604255159', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(276, '1604255175', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(277, '1604255175', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(278, '1604255175', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(279, '1604255175', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(280, '1604255195', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(281, '1604255196', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(282, '1604255197', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(283, '1604255197', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(284, '1604255197', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(285, '1604255201', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(286, '1604255206', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(287, '1604255210', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(288, '1604256477', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(289, '1604256479', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(290, '1604256481', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(291, '1604256481', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(292, '1604256482', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582709264459,32337489363019]]'),
(293, '1604256487', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(294, '1604256487', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(295, '1604256488', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582709264459,32337489363019]]'),
(296, '1604256568', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(297, '1604256625', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(298, '1604256625', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(299, '1604256625', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(300, '1604256627', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(301, '1604256628', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481334859]]'),
(302, '1604256634', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(303, '1604256637', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(304, '1604256637', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(305, '1604256658', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(306, '1604256658', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(307, '1604256684', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(308, '1604256684', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(309, '1604256686', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(310, '1604256686', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(311, '1604256686', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(312, '1604256686', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481334859]]'),
(313, '1604256930', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', 'undefined', 'undefined', '', '', 'show', 'show', '/products/led-high-tops', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(314, '1604256938', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(315, '1604256942', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(316, '1604256943', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(317, '1604256947', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(318, '1604256947', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(319, '1604257034', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(320, '1604257034', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(321, '1604257035', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(322, '1604257035', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(323, '1604257040', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(324, '1604257041', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(325, '1604257047', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(326, '1604257047', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(327, '1604257096', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(328, '1604257096', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(329, '1604257096', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(330, '1604257445', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708969547,32337487659083],[4582708445259,32337483432011]]'),
(331, '1604489515', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', 'undefined', 'undefined', '', '', 'show', 'show', '/products/blue-silk-tuxedo', 'mobile', 'Chrome', '[[4582708314187,32337482678347]]'),
(332, '1604489523', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347]]'),
(333, '1604489540', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347]]'),
(334, '1604489542', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483530315', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347]]'),
(335, '1604489541', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483530315', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347]]'),
(336, '1604489549', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(337, '1604489552', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(338, '1604489552', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(339, '1604489559', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(340, '1604489564', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(341, '1604489565', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487429707', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(342, '1604489566', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487429707', '1', '', '', 'impression', 'hover', '/cart', 'mobile', 'Chrome', '[[4582708445259,32337483432011],[4582708445259,32337483530315],[4582708314187,32337482678347]]'),
(343, '1604596051', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', 'undefined', 'undefined', '', '', 'show', 'show', '/products/chequered-red-shirt', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(344, '1604596059', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(345, '1604596059', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(346, '1604596061', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(347, '1604596063', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(348, '1604596067', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(349, '1604596067', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(350, '1604596070', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011]]'),
(351, '1604596077', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(352, '1604596078', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(353, '1604596082', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(354, '1604596083', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(355, '1604596083', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(356, '1604596082', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(357, '1604596084', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(358, '1604596084', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(359, '1604596088', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(360, '1604596088', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(361, '1604596093', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(362, '1604596093', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(363, '1604596093', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(364, '1604596093', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(365, '1604596094', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(366, '1604596094', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(367, '1604596096', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(368, '1604596097', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(369, '1604596105', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(370, '1604596105', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(371, '1604596110', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(372, '1604596110', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(373, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(374, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(375, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(376, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(377, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(378, '1604596111', 'berjis-tech-ltd.myshopify.com', '9', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(379, '1604596130', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(380, '1604596130', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(381, '1604596136', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(382, '1604596145', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(383, '1604596187', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(384, '1604596188', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(385, '1604597759', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(386, '1604597759', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(387, '1604597760', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(388, '1604597764', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011]]'),
(389, '1604658354', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(390, '1604658354', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(391, '1604658354', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(392, '1604658354', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(393, '1604658356', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(394, '1604658356', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(395, '1604658357', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(396, '1604658357', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(397, '1604658358', 'berjis-tech-ltd.myshopify.com', '2', '4582708969547', '32337487659083', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708084811,32337481269323]]'),
(398, '1604658363', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(399, '1604658364', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(400, '1604658365', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(401, '1604658370', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(402, '1604658371', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(403, '1604658372', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(404, '1604658372', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(405, '1604658377', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(406, '1604658378', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(407, '1604658387', 'berjis-tech-ltd.myshopify.com', '9', '4582708314187', '32337482678347', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(408, '1604658394', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(409, '1604658399', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(410, '1604658399', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'purchase', 'purchase', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(411, '1604658400', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '', '', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(412, '1604778383', 'berjis-tech-ltd.myshopify.com', '2', '4582708314187', 'undefined', 'undefined', '', '', 'show', 'show', '/', 'desktop', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(413, '1604779403', 'berjis-tech-ltd.myshopify.com', '6', '4582708445259', '32337483432011', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(414, '1604779425', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '', '', 'show', 'show', '/products/blue-silk-tuxedo', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]'),
(415, '1604779429', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '', '', 'show', 'show', '/cart', 'mobile', 'Chrome', '[[4582708314187,32337482678347],[4582708904011,32337487265867],[4582708445259,32337483432011],[4582708969547,32337487659083],[4582708084811,32337481269323]]');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id` int(30) NOT NULL,
  `oid` text NOT NULL,
  `pid` text NOT NULL,
  `vid` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id`, `oid`, `pid`, `vid`) VALUES
(7, '2', '4582708314187', '32337482678347'),
(8, '2', '4582708314187', '32337482711115'),
(9, '2', '4582708314187', '32337482743883'),
(10, '2', '4582708314187', '32337482776651'),
(11, '2', '4582708314187', '32337482809419'),
(12, '2', '4582708314187', '32337482842187'),
(13, '2', '4582708969547', '32337487659083'),
(14, '2', '4582708969547', '32337487724619'),
(15, '2', '4582708969547', '32337487790155'),
(16, '2', '4582708969547', '32337487822923'),
(17, '2', '4582708969547', '32337487888459'),
(18, '2', '4582708969547', '32337487921227'),
(19, '3', '4582709395531', '32337489821771'),
(20, '3', '4582709395531', '32337489854539'),
(21, '3', '4582709395531', '32337489887307'),
(22, '3', '4582709395531', '32337489920075'),
(23, '3', '4582709395531', '32337489952843'),
(24, '3', '4582709395531', '32337489985611'),
(37, '6', '4582708445259', '32337483432011'),
(38, '6', '4582708445259', '32337483464779'),
(39, '6', '4582708445259', '32337483497547'),
(40, '6', '4582708445259', '32337483530315'),
(41, '6', '4582708445259', '32337483563083'),
(42, '6', '4582708445259', '32337483595851'),
(43, '7', '4582708445259', '32337483432011'),
(44, '7', '4582708445259', '32337483464779'),
(45, '7', '4582708445259', '32337483497547'),
(46, '7', '4582708445259', '32337483530315'),
(47, '7', '4582708445259', '32337483563083'),
(48, '7', '4582708445259', '32337483595851'),
(49, '8', '4582708904011', '32337487265867'),
(50, '8', '4582708904011', '32337487298635'),
(51, '8', '4582708904011', '32337487331403'),
(52, '8', '4582708904011', '32337487364171'),
(53, '8', '4582708904011', '32337487396939'),
(54, '8', '4582708904011', '32337487429707'),
(55, '9', '4582708314187', '32337482678347'),
(56, '9', '4582708314187', '32337482711115'),
(57, '9', '4582708314187', '32337482743883'),
(58, '9', '4582708314187', '32337482776651'),
(59, '9', '4582708314187', '32337482809419'),
(60, '9', '4582708314187', '32337482842187'),
(61, '9', '4582708445259', '32337483432011'),
(62, '9', '4582708445259', '32337483464779'),
(63, '9', '4582708445259', '32337483497547'),
(64, '9', '4582708445259', '32337483530315'),
(65, '9', '4582708445259', '32337483563083'),
(66, '9', '4582708445259', '32337483595851');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`offer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`stat_id`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `offer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=416;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
