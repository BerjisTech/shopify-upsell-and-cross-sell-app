-- phpMyAdmin SQL Dump
-- version 4.7.1
-- https://www.phpmyadmin.net/
--
-- Host: us-cdbr-east-02.cleardb.com
-- Generation Time: Dec 14, 2020 at 08:11 PM
-- Server version: 5.5.62-log
-- PHP Version: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `heroku_6e5b04e8808c069`
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
('1607839274_0', '10', '4582708445259', 'checkbox', 'wrap', 'Need it wrapped?', '', '');

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
('1604051352_0', '8', '1604051352_0', 'oc1', '1', 'collection', 'Home page', '163926802507', '163926802507', '', 'AF'),
('1603971021_0', '7', '1603971021_0', 'oc1', '1', 'product', 'Blue Silk Tuxedo', '4582708314187', '4582708314187', '', 'AF');

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
(7, 'berjis-tech-ltd', '1603971021', 'Updated Offer Text', '', 'y', 'card', 'n', 'y', 'DISC', 'ALL', 'n', '1', '', '', 'n'),
(8, 'berjis-tech-ltd', '1604051352', 'Testing collections', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n'),
(10, 'berjis-tech-ltd', '1605357794', 'Offer text', '', 'y', 'card', 'n', 'n', '', 'ALL', 'n', '1', '', '', 'n');

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
  `ab_atc` varchar(255) NOT NULL,
  `rp` text NOT NULL,
  `rv` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product`, `offer`, `text`, `atc`, `show_title`, `show_price`, `show_image`, `v_price`, `c_price`, `linked`, `q_select`, `ab_test`, `ab_text`, `ab_atc`, `rp`, `rv`) VALUES
(1, '4582708904011', '8', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', '', '', ''),
(2, '4582708445259', '7', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', '', '', ''),
(3, '4582708445259', '10', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', '', '4582708314187', ''),
(4, '4582708314187', '10', '', '', 'y', 'y', 'y', 'y', 'y', 'n', 'y', 'n', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `shop` text NOT NULL,
  `cart_location` text NOT NULL,
  `cart_position` text NOT NULL,
  `drawer_location` text NOT NULL,
  `drawer_position` text NOT NULL,
  `refresh_state` text NOT NULL,
  `drawer_refresh` text NOT NULL,
  `layout_bg` text NOT NULL,
  `layout_color` text NOT NULL,
  `layout_font` text NOT NULL,
  `layout_size` text NOT NULL,
  `layout_mt` text NOT NULL,
  `layout_mb` text NOT NULL,
  `offer_radius` text NOT NULL,
  `offer_bs` text NOT NULL,
  `offer_bc` text NOT NULL,
  `offer_border` text NOT NULL,
  `button_bg` text NOT NULL,
  `button_color` text NOT NULL,
  `button_font` text NOT NULL,
  `button_size` text NOT NULL,
  `button_mt` text NOT NULL,
  `button_mb` text NOT NULL,
  `button_radius` text NOT NULL,
  `button_bs` text NOT NULL,
  `button_bc` text NOT NULL,
  `button_border` text NOT NULL,
  `image_radius` text NOT NULL,
  `image_bs` text NOT NULL,
  `image_bc` text NOT NULL,
  `image_border` text NOT NULL,
  `text_color` text NOT NULL,
  `text_font` text NOT NULL,
  `text_size` text NOT NULL,
  `title_color` text NOT NULL,
  `title_font` text NOT NULL,
  `title_size` text NOT NULL,
  `price_color` text NOT NULL,
  `price_font` text NOT NULL,
  `price_size` text NOT NULL,
  `override` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`shop`, `cart_location`, `cart_position`, `drawer_location`, `drawer_position`, `refresh_state`, `drawer_refresh`, `layout_bg`, `layout_color`, `layout_font`, `layout_size`, `layout_mt`, `layout_mb`, `offer_radius`, `offer_bs`, `offer_bc`, `offer_border`, `button_bg`, `button_color`, `button_font`, `button_size`, `button_mt`, `button_mb`, `button_radius`, `button_bs`, `button_bc`, `button_border`, `image_radius`, `image_bs`, `image_bc`, `image_border`, `text_color`, `text_font`, `text_size`, `title_color`, `title_font`, `title_size`, `price_color`, `price_font`, `price_size`, `override`) VALUES
('berjis-tech-ltd', 'form[action=\'/cart\']', 'before', '.cart-drawer__content-container', 'prepend', 'y', '$(\"form.cart-drawer .cart-drawer__item-quantity\").first().trigger(\"input\");', '#ffffff', '#030202', 'Helvetica,\"Helvetica Neue\",Arial,\"Lucida Grande\",sans-serif', '11px', '5px', '17px', '0px', '1px', '#a39f9f', 'solid', '#eb4f47', '#ffffff', 'Helvetica,\"Helvetica Neue\",Arial,\"Lucida Grande\",sans-serif', '13px', '0px', '0px', '0px', '0px', '#000000', 'inherit', '0px', '0px', '#ffffff', 'none', '#000000', 'Helvetica,\"Helvetica Neue\",Arial,\"Lucida Grande\",sans-serif', '19px', '#000000', 'Helvetica,\"Helvetica Neue\",Arial,\"Lucida Grande\",sans-serif', '13px', '#000000', 'Helvetica,\"Helvetica Neue\",Arial,\"Lucida Grande\",sans-serif', '18px', '.cart-drawer__item{\ndisplay: table !important;\n}\n.sleek-upsell{\nmargin: 0px 0px 10px 0px !important;\nbackground: transparent !important ;\n}\n.sleek-image img, .sleek-image{\nwidth: 100px !important;\nmargin: 0px !important;\npadding: 0px !important;\n}\n.sleek-card-atc{\nmin-width: 100px !important;\n}\n.v-select{\nwidth: 100px !important;\n}\n.q-select{\nwidth: 50px !important;\n}\n.sleek-upsell select{\nmargin: 0px 0px 0px 0px !important;\nbackground-image: none;\n-webkit-appearance: menulist;\n-moz-appearance: menulist;\nappearance: menulist;\n}\n.cart-drawer__content-container{\npadding-top: 0px !important;\n}'),
('sleek-apps', 'form[action=\"/cart/add\"]', 'before', 'form[action=\"/cart/add\"]', 'before', 'n', '', 'inherit', 'inherit', 'inherit', 'inherit', '5px', '5px', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', 'inherit', '');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `shop_id` int(30) NOT NULL,
  `shop` varchar(10000) NOT NULL,
  `token` varchar(10000) NOT NULL,
  `date` int(30) NOT NULL,
  `type` text NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `bill_interval` text NOT NULL,
  `capped_amount` text NOT NULL,
  `terms` text NOT NULL,
  `trial_days` text NOT NULL,
  `test` text NOT NULL,
  `on_install` text NOT NULL,
  `created_at` text NOT NULL,
  `updated_at` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shop_id`, `shop`, `token`, `date`, `type`, `name`, `price`, `bill_interval`, `capped_amount`, `terms`, `trial_days`, `test`, `on_install`, `created_at`, `updated_at`) VALUES
(1, 'berjis-tech-ltd', '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', 1607671633, 'RECURRING', 'Sleek', '19.99', 'EVERY_30_DAYS', '19.99', 'NO_TERMS', '14', 'true', '1', '', ''),
(2, 'sleek-apps', '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', 1607949827, 'RECURRING', 'Sleek', '19.99', 'EVERY_30_DAYS', '19.99', 'NO_TERMS', '14', 'true', '1', '', ''),
(3, 'appstoretest5', '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', 1607947785, '', '', '', '', '', '', '', '', '', '', ''),
(4, 'cambridgetestshop', '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', 1607950639, '', '', '', '', '', '', '', '', '', '', '');

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
  `citems` longtext NOT NULL,
  `price` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`, `price`) VALUES
(1, '1605888904', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(2, '1605888910', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(3, '1605888911', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(4, '1605888912', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(5, '1605888913', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(6, '1605888913', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(7, '1605888913', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(8, '1605888914', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(9, '1605888915', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(10, '1605888915', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(11, '1605889099', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(12, '1605889101', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(13, '1605889102', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(14, '1605889103', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(15, '1605889103', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(16, '1605889104', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(17, '1605889106', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(18, '1605889107', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(19, '1605889108', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '3', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(20, '1605889110', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(21, '1605889111', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(22, '1605889111', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(23, '1605889115', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(24, '1605889115', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(25, '1605889116', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(26, '1605889116', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(27, '1605889118', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(28, '1605889118', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(29, '1605889118', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(30, '1605889118', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(31, '1605889119', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(32, '1605889119', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(33, '1605889119', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(34, '1605889120', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(35, '1605889120', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(36, '1605889120', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(37, '1605889122', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(38, '1605889122', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(39, '1605889122', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(40, '1605889122', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(41, '1605889124', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(42, '1605889124', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(43, '1605889124', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(44, '1605889125', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(45, '1605889126', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(46, '1605889126', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(47, '1605889126', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(48, '1605889126', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(49, '1605889127', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(50, '1605889127', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(51, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(52, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(53, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487724619', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(54, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(55, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(56, '1605889128', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487331403', '3', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(57, '1605949993', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708969547,4582708084811]', '68.00'),
(58, '1606834383', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(59, '1606834390', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(60, '1606834392', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(61, '1606834394', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(62, '1606834394', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(63, '1606834394', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(64, '1606834395', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'quantity change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(65, '1606834395', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(66, '1606834396', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(67, '1606834396', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(68, '1606834396', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(69, '1606834403', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(70, '1606834405', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(71, '1606834413', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(72, '1606834414', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(73, '1606834415', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(74, '1606834423', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(75, '1606834423', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(76, '1606834424', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(77, '1606834426', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(78, '1606834429', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487331403', '4', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(79, '1606834807', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(80, '1606834807', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(81, '1606834808', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(82, '1606834809', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(83, '1606834809', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(84, '1606834809', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(85, '1606834809', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(86, '1606834811', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(87, '1606834811', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(88, '1606834973', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(89, '1606834974', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(90, '1606834975', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(91, '1606834975', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(92, '1606834978', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(93, '1606834981', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(94, '1606834981', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(95, '1606834981', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(96, '1606834985', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(97, '1606834985', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(98, '1606834988', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(99, '1606834988', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(100, '1606834988', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(101, '1607507997', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(102, '1607508004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(103, '1607508013', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(104, '1607508054', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(105, '1607508060', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(106, '1607508068', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(107, '1607508100', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(108, '1607508139', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(109, '1607508135', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(110, '1607508140', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(111, '1607508217', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(112, '1607508638', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(113, '1607508639', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(114, '1607508638', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(115, '1607508645', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(116, '1607508646', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(117, '1607508647', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(118, '1607508682', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(119, '1607508710', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(120, '1607508718', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(121, '1607508841', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(122, '1607508842', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(123, '1607508842', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(124, '1607509131', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(125, '1607509201', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'mobile', 'Chrome', '[4582708314187]', '68.00'),
(126, '1607544410', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(127, '1607544477', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(128, '1607544478', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(129, '1607544513', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(130, '1607544516', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(131, '1607544516', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(132, '1607544523', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(133, '1607544524', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(134, '1607544524', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(135, '1607544524', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(136, '1607544608', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(137, '1607544610', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(138, '1607544610', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(139, '1607544611', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(140, '1607544611', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(141, '1607544615', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(142, '1607544626', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(143, '1607544654', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(144, '1607544891', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(145, '1607544891', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(146, '1607544901', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(147, '1607544905', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/collections/all', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(148, '1607544910', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(149, '1607544912', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(150, '1607544913', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(151, '1607544929', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(152, '1607544929', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(153, '1607544929', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(154, '1607544929', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(155, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(156, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(157, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(158, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(159, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(160, '1607544930', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(161, '1607544931', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(162, '1607544931', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(163, '1607544937', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(164, '1607544939', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(165, '1607544940', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(166, '1607544943', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(167, '1607544943', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(168, '1607544943', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(169, '1607545021', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(170, '1607545021', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(171, '1607545047', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(172, '1607545047', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(173, '1607545047', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(174, '1607545074', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(175, '1607545075', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(176, '1607545082', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(177, '1607545082', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(178, '1607545082', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(179, '1607545082', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(180, '1607545084', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(181, '1607545114', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(182, '1607545115', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(183, '1607545118', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(184, '1607545119', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(185, '1607545119', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(186, '1607545121', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(187, '1607545121', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(188, '1607545121', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(189, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(190, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(191, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(192, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(193, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(194, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(195, '1607545123', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(196, '1607545125', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(197, '1607545125', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(198, '1607545126', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(199, '1607545126', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(200, '1607545126', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(201, '1607545129', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(202, '1607545129', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(203, '1607545129', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(204, '1607545129', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(205, '1607545149', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(206, '1607545149', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(207, '1607545173', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(208, '1607545183', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(209, '1607545185', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(210, '1607545185', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(211, '1607545185', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(212, '1607545185', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(213, '1607545266', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(214, '1607545284', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(215, '1607545289', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(216, '1607545291', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(217, '1607545294', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(218, '1607545295', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '4', '\"\"', '\"\"', 'impression', 'quantity change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(219, '1607545295', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '4', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(220, '1607545295', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '4', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(221, '1607545296', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '4', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(222, '1607545301', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(223, '1607545309', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(224, '1607545310', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'variant change', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(225, '1607545310', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(226, '1607545310', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(227, '1607545311', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(228, '1607545312', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(229, '1607545317', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(230, '1607545320', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(231, '1607545321', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(232, '1607545322', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(233, '1607545327', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(234, '1607545328', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(235, '1607545328', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(236, '1607545330', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(237, '1607545330', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(238, '1607545330', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(239, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(240, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(241, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(242, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(243, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(244, '1607545331', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(245, '1607546054', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00');
INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`, `price`) VALUES
(246, '1607546054', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(247, '1607546054', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(248, '1607546054', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(249, '1607590327', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(250, '1607590378', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(251, '1607590380', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(252, '1607590380', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(253, '1607590380', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(254, '1607590383', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(255, '1607590383', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(256, '1607590383', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(257, '1607590556', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(258, '1607590557', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(259, '1607590558', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(260, '1607590558', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(261, '1607590559', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(262, '1607590559', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(263, '1607590564', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(264, '1607590568', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(265, '1607590583', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(266, '1607590952', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(267, '1607590953', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(268, '1607590954', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(269, '1607590953', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(270, '1607590957', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(271, '1607590958', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(272, '1607590958', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(273, '1607590964', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(274, '1607590972', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(275, '1607591020', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(276, '1607591020', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(277, '1607591319', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(278, '1607591321', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(279, '1607591326', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(280, '1607591390', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(281, '1607591390', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(282, '1607591389', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(283, '1607591392', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(284, '1607591392', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(285, '1607591399', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(286, '1607591415', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(287, '1607592154', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(288, '1607592156', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(289, '1607592157', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(290, '1607592158', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(291, '1607592223', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(292, '1607592349', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(293, '1607592349', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(294, '1607592350', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(295, '1607592350', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(296, '1607592351', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(297, '1607592352', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(298, '1607592352', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(299, '1607592352', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(300, '1607592355', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo/discount/DISC', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(301, '1607592368', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(302, '1607592371', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(303, '1607592445', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(304, '1607592450', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(305, '1607592452', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(306, '1607592452', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(307, '1607592452', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(308, '1607592452', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(309, '1607592453', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(310, '1607592456', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/cart/discount/DISC', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(311, '1607592468', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(312, '1607592469', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(313, '1607592469', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(314, '1607593146', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(315, '1607593148', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(316, '1607593149', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(317, '1607593150', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(318, '1607593162', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/checkout/discount/DISC', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(319, '1607593506', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(320, '1607593508', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(321, '1607593510', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(322, '1607593511', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(323, '1607593524', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/berjis-tech-ltd.myshopify.com/discount/DISC', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(324, '1607594069', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(325, '1607594071', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(326, '1607594071', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(327, '1607594071', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(328, '1607594071', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(329, '1607594072', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(330, '1607594083', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(331, '1607594453', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(332, '1607594454', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(333, '1607594465', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(334, '1607594467', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(335, '1607594467', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(336, '1607594469', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(337, '1607594468', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(338, '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(339, '1607594508', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(340, '1607594566', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(341, '1607594566', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(342, '1607594566', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(343, '1607594567', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(344, '1607594571', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(345, '1607594572', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(346, '1607594573', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(347, '1607594573', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(348, '1607594580', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(349, '1607594915', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(350, '1607596172', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(351, '1607596173', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(352, '1607596173', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(353, '1607596175', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(354, '1607596176', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(355, '1607596185', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(356, '1607615089', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(357, '1607615090', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(358, '1607615091', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(359, '1607615092', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(360, '1607615093', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(361, '1607615094', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(362, '1607615095', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(363, '1607615099', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(364, '1607618011', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(365, '1607618011', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(366, '1607618013', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(367, '1607618077', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(368, '1607618079', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(369, '1607618080', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(370, '1607618081', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(371, '1607618081', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(372, '1607618085', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(373, '1607618154', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(374, '1607618159', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(375, '1607618159', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(376, '1607618166', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(377, '1607618166', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(378, '1607618167', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(379, '1607618167', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(380, '1607618170', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(381, '1607618171', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(382, '1607618171', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(383, '1607618172', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(384, '1607618175', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(385, '1607618176', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(386, '1607618255', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(387, '1607618255', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(388, '1607618260', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(389, '1607618260', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(390, '1607618261', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(391, '1607618261', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(392, '1607618336', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(393, '1607618336', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(394, '1607618337', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(395, '1607618387', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(396, '1607618396', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(397, '1607618396', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(398, '1607623261', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(399, '1607623262', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(400, '1607623262', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(401, '1607623294', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(402, '1607623474', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(403, '1607623493', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(404, '1607623616', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(405, '1607623616', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(406, '1607623618', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(407, '1607623622', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(408, '1607623622', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(409, '1607623624', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(410, '1607623729', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(411, '1607623869', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(412, '1607623902', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(413, '1607624076', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(414, '1607624080', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(415, '1607624081', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(416, '1607624086', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(417, '1607624090', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(418, '1607624090', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(419, '1607624092', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(420, '1607624092', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(421, '1607624093', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(422, '1607624161', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(423, '1607624164', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(424, '1607624164', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(425, '1607624164', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(426, '1607624181', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(427, '1607624286', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(428, '1607624289', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(429, '1607624289', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(430, '1607624299', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', 'undefined', 'undefined', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(431, '1607624432', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(432, '1607624465', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(433, '1607624466', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(434, '1607624466', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(435, '1607624471', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(436, '1607624471', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(437, '1607624472', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(438, '1607624472', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(439, '1607624489', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(440, '1607624489', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(441, '1607624490', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(442, '1607624490', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(443, '1607624627', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(444, '1607624627', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(445, '1607624628', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(446, '1607624629', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(447, '1607624630', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(448, '1607624631', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(449, '1607624631', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(450, '1607624632', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(451, '1607624632', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(452, '1607624636', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(453, '1607624636', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(454, '1607624636', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(455, '1607624637', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(456, '1607624638', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(457, '1607624639', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(458, '1607624648', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(459, '1607624649', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(460, '1607624650', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(461, '1607624650', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(462, '1607624665', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(463, '1607624665', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(464, '1607624766', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(465, '1607624769', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(466, '1607624775', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(467, '1607624776', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(468, '1607624776', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(469, '1607624820', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(470, '1607625260', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(471, '1607625263', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(472, '1607625272', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(473, '1607625273', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00');
INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`, `price`) VALUES
(474, '1607625273', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(475, '1607625273', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(476, '1607625275', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(477, '1607625287', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(478, '1607625291', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(479, '1607625291', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(480, '1607625292', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(481, '1607625297', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(482, '1607625297', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(483, '1607625391', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(484, '1607625391', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(485, '1607693546', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(486, '1607693547', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(487, '1607693548', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(488, '1607693590', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(489, '1607703009', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(490, '1607703146', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(491, '1607703228', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(492, '1607703228', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(493, '1607703228', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(494, '1607703229', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(495, '1607703229', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(496, '1607703229', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(497, '1607703229', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(498, '1607703229', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(499, '1607703230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(500, '1607703230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(501, '1607703230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(502, '1607703230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(503, '1607703230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(504, '1607703231', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(505, '1607703231', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(506, '1607703231', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(507, '1607703231', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(508, '1607703408', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(509, '1607703768', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(510, '1607703839', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(511, '1607703839', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(512, '1607703839', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(513, '1607703839', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(514, '1607703988', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(515, '1607704697', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(516, '1607705120', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(517, '1607706246', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(518, '1607706251', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(519, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(520, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(521, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(522, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(523, '1607706260', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(524, '1607706260', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(525, '1607706261', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(526, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(527, '1607706261', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(528, '1607706261', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(529, '1607706259', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(530, '1607706261', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(531, '1607706371', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(532, '1607706462', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(533, '1607706462', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(534, '1607706470', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(535, '1607706481', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(536, '1607706485', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(537, '1607706486', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(538, '1607706495', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(539, '1607706495', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(540, '1607706495', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(541, '1607706495', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(542, '1607706526', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(543, '1607706527', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(544, '1607706528', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(545, '1607707015', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(546, '1607708733', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(547, '1607708734', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(548, '1607708734', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(549, '1607708738', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(550, '1607708808', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(551, '1607708935', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(552, '1607709002', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(553, '1607709002', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(554, '1607709003', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(555, '1607709003', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(556, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(557, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(558, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(559, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(560, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(561, '1607709004', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(562, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(563, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(564, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(565, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(566, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(567, '1607709008', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(568, '1607709012', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(569, '1607709012', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(570, '1607709012', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(571, '1607709012', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(572, '1607709012', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(573, '1607709013', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(574, '1607709015', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(575, '1607709019', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(576, '1607709019', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(577, '1607709038', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(578, '1607709039', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(579, '1607709040', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(580, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(581, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(582, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(583, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(584, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(585, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(586, '1607709087', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483497547', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(587, '1607709099', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(588, '1607709103', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(589, '1607709103', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(590, '1607709103', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(591, '1607709103', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(592, '1607709104', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(593, '1607709104', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(594, '1607709236', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(595, '1607709239', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(596, '1607709253', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(597, '1607709253', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(598, '1607709255', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(599, '1607709256', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(600, '1607709269', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(601, '1607709615', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(602, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(603, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(604, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(605, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(606, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(607, '1607709621', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(608, '1607709622', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(609, '1607709622', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(610, '1607709622', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(611, '1607709623', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(612, '1607709623', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(613, '1607709623', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(614, '1607709623', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(615, '1607709623', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(616, '1607709625', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(617, '1607709625', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(618, '1607709626', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(619, '1607709626', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'impression', 'hover', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(620, '1607709748', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(621, '1607709766', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483530315', '5', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(622, '1607754491', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(623, '1607754497', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(624, '1607754499', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '5', '\"\"', '\"\"', 'impression', 'quantity change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(625, '1607754502', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '5', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(626, '1607754720', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(627, '1607754807', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(628, '1607754811', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '1', '\"\"', '\"\"', 'impression', 'variant change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(629, '1607754812', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '3', '\"\"', '\"\"', 'impression', 'quantity change', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(630, '1607754813', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483464779', '3', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(631, '1607754815', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(632, '1607754914', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(633, '1607755446', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(634, '1607755449', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(635, '1607755451', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(636, '1607755573', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(637, '1607755578', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(638, '1607755588', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(639, '1607755950', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(640, '1607756398', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(641, '1607756413', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(642, '1607756414', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(643, '1607842806', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(644, '1607842847', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(645, '1607842854', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(646, '1607842854', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(647, '1607842854', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(648, '1607842867', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(649, '1607842974', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(650, '1607842984', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(651, '1607842986', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(652, '1607842992', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(653, '1607843548', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(654, '1607843557', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(655, '1607843561', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(656, '1607843566', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(657, '1607843568', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(658, '1607843571', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(659, '1607843571', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(660, '1607844705', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(661, '1607844771', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(662, '1607844779', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(663, '1607844783', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(664, '1607844785', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(665, '1607844788', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(666, '1607844788', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(667, '1607844790', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(668, '1607845717', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(669, '1607845723', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(670, '1607845724', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(671, '1607845725', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(672, '1607845725', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(673, '1607845725', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(674, '1607845725', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(675, '1607845729', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(676, '1607845765', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(677, '1607845791', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(678, '1607845794', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '68.00'),
(679, '1607845799', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(680, '1607845806', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(681, '1607845809', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(682, '1607845809', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(683, '1607845813', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(684, '1607846253', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(685, '1607846263', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(686, '1607846264', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(687, '1607846269', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(688, '1607846270', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(689, '1607846273', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(690, '1607846273', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(691, '1607846278', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(692, '1607847367', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(693, '1607847378', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(694, '1607847380', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(695, '1607847385', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(696, '1607847387', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708314187]', '66.00'),
(697, '1607847390', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '40.00'),
(698, '1607847390', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '66.00'),
(699, '1607847390', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(700, '1607847394', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00'),
(701, '1607847476', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(702, '1607847480', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(703, '1607847481', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(704, '1607847483', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(705, '1607847483', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(706, '1607847483', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(707, '1607847483', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(708, '1607847485', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00');
INSERT INTO `stats` (`stat_id`, `date`, `shop`, `offer`, `product`, `variant`, `quantity`, `ip`, `country`, `type`, `action`, `page`, `device`, `browser`, `citems`, `price`) VALUES
(709, '1607849158', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(710, '1607849169', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(711, '1607849171', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(712, '1607849172', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(713, '1607849172', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(714, '1607849172', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(715, '1607849172', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(716, '1607849176', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(717, '1607850006', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(718, '1607850014', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(719, '1607850015', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(720, '1607850018', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(721, '1607850017', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(722, '1607850018', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(723, '1607850025', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(724, '1607850230', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(725, '1607850233', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(726, '1607850235', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(727, '1607850237', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(728, '1607850237', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(729, '1607850237', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(730, '1607850245', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(731, '1607851144', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(732, '1607851233', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(733, '1607851234', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(734, '1607851236', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(735, '1607851236', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(736, '1607851236', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(737, '1607851238', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(738, '1607851764', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(739, '1607851769', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(740, '1607851771', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(741, '1607851773', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(742, '1607851773', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(743, '1607851773', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(744, '1607851777', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(745, '1607852128', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(746, '1607852131', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(747, '1607852133', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(748, '1607852134', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '40.00'),
(749, '1607852134', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(750, '1607852134', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(751, '1607852144', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(752, '1607852306', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '68.00'),
(753, '1607852313', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '68.00'),
(754, '1607852319', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '66.00'),
(755, '1607852322', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '66.00'),
(756, '1607852327', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '40.00'),
(757, '1607852327', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '66.00'),
(758, '1607852327', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011,4582708445259]', '68.00'),
(759, '1607852369', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '68.00'),
(760, '1607852369', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '66.00'),
(761, '1607852369', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '40.00'),
(762, '1607852373', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/collections/all', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '66.00'),
(763, '1607852373', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/collections/all', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '68.00'),
(764, '1607852377', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '40.00'),
(765, '1607852377', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '68.00'),
(766, '1607852378', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187,4582708445259,4582708904011]', '66.00'),
(767, '1607852378', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187,4582708445259,4582708904011]', '68.00'),
(768, '1607852390', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708314187,4582708445259,4582708904011]', '66.00'),
(769, '1607852406', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/cart', 'desktop', 'Chrome', '[4582708314187,4582708445259,4582708904011]', '68.00'),
(770, '1607927118', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(771, '1607931806', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(772, '1607931856', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(773, '1607931972', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(774, '1607932063', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(775, '1607932294', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(776, '1607932415', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(777, '1607932438', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(778, '1607932483', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(779, '1607932553', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(780, '1607932636', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708445259,4582708904011]', '68.00'),
(781, '1607932865', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(782, '1607932913', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(783, '1607932959', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/collections/all', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(784, '1607932968', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(785, '1607933089', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(786, '1607933119', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(787, '1607933152', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/cart', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(788, '1607933167', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(789, '1607933730', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011]', '68.00'),
(790, '1607933733', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708904011]', '66.00'),
(791, '1607934497', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '66.00'),
(792, '1607934501', 'berjis-tech-ltd.myshopify.com', '10', '4582708969547', '32337487659083', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '40.00'),
(793, '1607934501', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/dark-denim-top', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '68.00'),
(794, '1607934720', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(795, '1607934724', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(796, '1607934896', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(797, '1607934900', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(798, '1607934901', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(799, '1607934906', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(800, '1607934906', 'berjis-tech-ltd.myshopify.com', '10', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(801, '1607935048', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(802, '1607935049', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(803, '1607935052', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(804, '1607935054', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(805, '1607935059', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(806, '1607935059', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(807, '1607935272', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(808, '1607935276', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(809, '1607935277', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(810, '1607935281', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(811, '1607935281', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(812, '1607935281', 'berjis-tech-ltd.myshopify.com', '10', '4582708314187', '32337482678347', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '78.00'),
(813, '1607935293', 'berjis-tech-ltd.myshopify.com', '10', '4582708314187', '32337482678347', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '78.00'),
(814, '1607935901', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(815, '1607935906', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(816, '1607935907', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(817, '1607935909', 'berjis-tech-ltd.myshopify.com', '8', '4582708904011', '32337487265867', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '66.00'),
(818, '1607935909', 'berjis-tech-ltd.myshopify.com', '10', '4582708314187', '32337482678347', '1', '\"\"', '\"\"', 'show', 'show', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '78.00'),
(819, '1607935924', 'berjis-tech-ltd.myshopify.com', '10', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'purchase', 'add to cart', '/products/blue-silk-tuxedo', 'desktop', 'Chrome', '[4582708314187]', '68.00'),
(820, '1607976242', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708445259,4582708904011]', '68.00'),
(821, '1607976268', 'berjis-tech-ltd.myshopify.com', '7', '4582708445259', '32337483432011', '1', '\"\"', '\"\"', 'show', 'show', '/', 'desktop', 'Chrome', '[4582708904011,4582708445259,4582708314187]', '68.00');

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
(1, '8', '4582708904011', '32337487265867'),
(2, '8', '4582708904011', '32337487298635'),
(3, '8', '4582708904011', '32337487331403'),
(4, '8', '4582708904011', '32337487364171'),
(5, '8', '4582708904011', '32337487396939'),
(6, '8', '4582708904011', '32337487429707'),
(7, '7', '4582708445259', '32337483432011'),
(8, '7', '4582708445259', '32337483464779'),
(9, '7', '4582708445259', '32337483497547'),
(10, '7', '4582708445259', '32337483530315'),
(11, '7', '4582708445259', '32337483563083'),
(12, '7', '4582708445259', '32337483595851'),
(13, '10', '4582708445259', '32337483432011'),
(14, '10', '4582708445259', '32337483464779'),
(15, '10', '4582708445259', '32337483497547'),
(16, '10', '4582708445259', '32337483530315'),
(17, '10', '4582708445259', '32337483563083'),
(18, '10', '4582708445259', '32337483595851'),
(19, '10', '4582708314187', '32337482678347'),
(20, '10', '4582708314187', '32337482711115'),
(21, '10', '4582708314187', '32337482743883'),
(22, '10', '4582708314187', '32337482776651'),
(23, '10', '4582708314187', '32337482809419'),
(24, '10', '4582708314187', '32337482842187');

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
  MODIFY `offer_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `shop_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `stat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=822;
--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
