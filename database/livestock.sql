-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 05:25 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `livestock`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'Admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `byid` bigint(20) NOT NULL,
  `goods` varchar(2000) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `byid`, `goods`, `amount`, `status`, `date`) VALUES
(9, 1, '<div class="row" id="row1"> <div class="col-3"> image </div> <div class="col-3">Strawberry<input type="hidden" id="pname" value="Strawberry-1-1" name="names[]"></div> <div class="col-3">250</div> <div class="col-3"><i class=" " onclick="pluss(250,1)"></i> <b id="seenum1">2</b> <i class=" " onclick="minuss(250,1)"></i></div></div><div class="row" id="row4"> <div class="col-3"> image </div> <div class="col-3">Baked Breads<input type="hidden" id="pname" value="Baked Breads-4-1" name="names[]"></div> <div class="col-3">250</div> <div class="col-3"><i class=" " onclick="pluss(250,4)"></i> <b id="seenum4">2</b> <i class=" " onclick="minuss(250,4)"></i></div></div>', '1000', 'paid', 'Tuesday Dec 03, 2019 17:20'),
(10, 1, '<div class="row" id="row6"> <div class="col-3"><img src="http://localhost/livestock/products/c0c954a3a268bfc515e88839a41a25de5bd1b194.jpg" width="50px"> </div> <div class="col-3">hen<input type="hidden" id="pname" value="hen-6-1" name="names[]"></div> <div class="col-3">2000</div> <div class="col-3"><i class=" " onclick="pluss(2000,6)"></i> <b id="seenum6">2</b> <i class=" " onclick="minuss(2000,6)"></i></div></div><div class="row" id="row5"> <div class="col-3"><img src="http://localhost/livestock/products/0ed1686442ac630326a48ddcef43684fa02b904b.jpg" width="50px"> </div> <div class="col-3">cattlle<input type="hidden" id="pname" value="cattlle-5-1" name="names[]"></div> <div class="col-3">16000</div> <div class="col-3"><i class=" " onclick="pluss(16000,5)"></i> <b id="seenum5">2</b> <i class=" " onclick="minuss(16000,5)"></i></div></div><div class="row" id="row4"> <div class="col-3"><img src="http://localhost/livestock/products/cece785eb92cd643f5e788e5f37e3d933a76f56c.jpg" width="50px"> </div> <div class="col-3">Pig<input type="hidden" id="pname" value="Pig-4-1" name="names[]"></div> <div class="col-3">3000</div> <div class="col-3"><i class=" " onclick="pluss(3000,4)"></i> <b id="seenum4">2</b> <i class=" " onclick="minuss(3000,4)"></i></div></div>', '42000', 'paid', 'Friday Dec 06, 2019 11:31'),
(11, 1, '<div class="row" id="row5"> <div class="col-3"><img src="http://localhost/livestock/products/0ed1686442ac630326a48ddcef43684fa02b904b.jpg" width="50px"> </div> <div class="col-3">cattlle<input type="hidden" id="pname" value="cattlle-5-1" name="names[]"></div> <div class="col-3">16000</div> <div class="col-3"><i class=" " onclick="pluss(16000,5)"></i> <b id="seenum5">3</b> <i class=" " onclick="minuss(16000,5)"></i></div></div>', '48000', 'paid', 'Friday Dec 06, 2019 11:39'),
(13, 1, '<div class="row" id="row5"> <div class="col-3"><img src="http://localhost/livestock/products/0ed1686442ac630326a48ddcef43684fa02b904b.jpg" width="50px"> </div> <div class="col-3">cattlle<input type="hidden" id="pname" value="cattlle-5-1" name="names[]"></div> <div class="col-3">16000</div> <div class="col-3"><i class=" " onclick="pluss(16000,5)"></i> <b id="seenum5">3</b> <i class=" " onclick="minuss(16000,5)"></i></div></div><div class="row" id="row6"> <div class="col-3"><img src="http://localhost/livestock/products/c0c954a3a268bfc515e88839a41a25de5bd1b194.jpg" width="50px"> </div> <div class="col-3">hen<input type="hidden" id="pname" value="hen-6-1" name="names[]"></div> <div class="col-3">2000</div> <div class="col-3"><i class=" " onclick="pluss(2000,6)"></i> <b id="seenum6">3</b> <i class=" " onclick="minuss(2000,6)"></i></div></div>', '54000', 'paid', 'Friday Dec 06, 2019 17:15'),
(14, 1, '<div class="row" id="row7"> <div class="col-3"><img src="http://localhost/livestock/products/2229e417950c39bd1ac90259b6c781a232a40430.jpg" width="50px"> </div> <div class="col-3">cow<input type="hidden" id="pname" value="cow-7-1" name="names[]"></div> <div class="col-3">250000</div> <div class="col-3"><i class=" " onclick="pluss(250000,7)"></i> <b id="seenum7">3</b> <i class=" " onclick="minuss(250000,7)"></i></div></div>', '750000', 'pending', 'Friday Dec 06, 2019 17:17');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `byid` bigint(20) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `ref` int(255) NOT NULL,
  `date` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `byid`, `amount`, `ref`, `date`) VALUES
(1, 1, '1000', 725343704, 0),
(2, 1, '1000', 101253781, 0),
(3, 1, '1000', 1290695246, 0),
(4, 1, '1000', 1047694778, 0),
(5, 1, '1000', 89075787, 0),
(6, 1, '1000', 942869358, 0),
(7, 1, '1000', 1153595991, 0),
(8, 1, '1000', 391244955, 0),
(9, 1, '1000', 194245460, 0),
(10, 1, '90000', 174321745, 0),
(11, 1, '54000', 629167673, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `toa` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `origin`, `toa`, `desc`, `price`, `pic`) VALUES
(4, 'Pig', 'South Africa', 'Land', 'Very Good Very Good Very Good  Very Good  Very Good  Very Good  Very Good  Very Good ', '3000', 'cece785eb92cd643f5e788e5f37e3d933a76f56c.jpg'),
(5, 'cattlle', 'South Africa', 'Land', ' Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  V', '16000', '0ed1686442ac630326a48ddcef43684fa02b904b.jpg'),
(6, 'hen', 'Nigeria', 'Land', '  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  Very Good  ', '2000', 'c0c954a3a268bfc515e88839a41a25de5bd1b194.jpg'),
(7, 'cow', 'South Africa', 'Land', ' uggcyffygjlm uhjuh uju iuuiju iji iju8 ijiu iju ijij ijijik', '250000', '2229e417950c39bd1ac90259b6c781a232a40430.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'olad@gmail.com', '10470c3b4b1fed12c3baac014be15fac67c6e815'),
(2, 'vadegunle@gmail.com', 'c34057262722e79df98e104985216f49c781dd0a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
