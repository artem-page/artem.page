-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2020 at 06:40 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`) VALUES
(1, 'Homepage', 'Homepage Description');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `pub_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(610) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `img_thumb` varchar(255) DEFAULT NULL,
  `img_cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `pub_date`, `title`, `description`, `slug`, `img_thumb`, `img_cover`) VALUES
(1, '2013-02-04', 'Banki.ua Portal', 'The website appeared as an attempt of Banki.ru Group to expand their business to the Ukrainian market. The project was an aggregator of banking services. Users could follow the news, get full information about any of the banks, as well as apply for a loan.', 'bankiua-portal', 'project-bankiua.jpg', ''),
(2, '2014-11-07', 'Finbase.com.ua Portal', 'The project was created simultaneously with the growing popularity of digital technologies in the banking sector. The website was designed to raise awareness of people in the field of digital banking services.', 'finbasecomua-portal', 'project-finbasecomua.jpg', ''),
(3, '2016-12-29', 'Bank.gov.ua Portal', 'As part of its reform strategy, National Bank of Ukraine requested a new website. The new website needed to be adaptive, based on the principle of open data and include a number of new functions.', 'bankgovua-portal', 'project-bankgovua.jpg', ''),
(4, '2017-07-10', 'Bank.gov.ua Landing Pages', 'The bank needed to strengthen communication of important events. For this purpose, landing pages were created. An example of such a project was the nationalization of Privatbank.', 'bankgovua-landing-pages', 'project-bankgovua-landing.jpg', ''),
(5, '2017-11-10', 'Side Projects', 'These are projects that I create for self-education after or in the process of learning new technologies. You can find all the projects on Github. An example of such a project is BikeCMS - a content management system for bloggers (LAMP stack).', 'side-projects-github', 'project-side-github.jpg', ''),
(6, '2019-02-18', 'Zaneen Sample Tour', 'The application for logistic operations. Allows Zaneen to manage the shipping and receiving of sample cases, report and fix problems, as well as to communicate with the participating agencies, and many more.', 'zaneen-sample-tour', 'project-zst.jpg', 'project-zst-cover.jpg'),
(7, '2019-10-09', 'Spec Sheet Generator', 'This is a one-page application that collects product data and allows the user to save the product specification as a pdf or print it out. It was created as a backup source of information in addition to the existing corporate website.', 'zaneen-spec-generator', 'project-spec.jpg', 'project-spec-cover.jpg'),
(8, '2020-02-21', 'Zaneen Web Portal', 'The previous website was morally outdated and no longer met the needs of the business. Requirements for the new development included integration with the business system Netsuite, advanced product filter, product configurator, and a personal account for a sales representative.', 'zaneen-web-portal', 'project-zaneen-new-website.jpg', 'project-zaneen-new-website-cover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
