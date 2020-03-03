-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 03, 2020 at 02:53 PM
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
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `route` varchar(256) NOT NULL,
  `title` varchar(60) DEFAULT NULL,
  `description` varchar(160) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `route`, `title`, `description`) VALUES
(1, 'home', NULL, 'A website of a passionate web developer and a project coordinator. I\'ve worked on various projects involving both web development and project coordination.'),
(2, 'about', 'About', 'I\'m a software developer. I can work in a team of programmers or be a project coordinator.'),
(3, 'contact', 'Contact', 'Say hello, I would be happy to hear from you'),
(4, 'projects', 'Projects', 'The most meaningful digital projects'),
(5, 'blog', 'Blog', 'My blog where I document and share my observations'),
(6, 'inspiration', 'Inspiration', 'Things that inspire me, may also inspire you'),
(7, 'ican', 'What I can offer', 'I can offer you my experience and knowledge');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `pub_date` date DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(610) DEFAULT NULL,
  `text_html` longtext,
  `country` varchar(3) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `img_thumb` varchar(255) DEFAULT NULL,
  `img_cover` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `pub_date`, `title`, `description`, `text_html`, `country`, `slug`, `img_thumb`, `img_cover`) VALUES
(1, '2013-02-04', 'Banki.ua Portal', 'The website appeared as an attempt of Banki.ru Group to expand their business to the Ukrainian market. The project was an aggregator of banking services. Users could follow the news, get full information about any Ukrainian bank, as well as apply for a loan.', '', 'ua', 'bankiua-portal', 'project-bankiua.jpg', 'project-bankiua-cover.jpg'),
(2, '2014-11-07', 'Finbase.com.ua Portal', 'The project was created simultaneously with the growing popularity of digital technologies in the banking sector. The website was designed to raise awareness of people in the field of digital banking services.', NULL, 'ua', 'finbasecomua-portal', 'project-finbasecomua.jpg', 'project-finbasecomua-cover.jpg'),
(3, '2016-12-29', 'Side Projects', 'These are projects that I create for self-education after or in the process of learning new technologies. You can find all the projects on Github. An example of such a project is BikeCMS - a content management system for bloggers (LAMP stack).', NULL, 'ua', 'side-projects-github', 'project-side-github.jpg', 'project-side-github-cover.jpg'),
(4, '2017-07-10', 'Bank.gov.ua Landing Pages', 'The bank needed to strengthen communication of important events. For this purpose, landing pages were created. An example of such a project was the nationalization of Privatbank.', NULL, 'ua', 'bankgovua-landing-pages', 'project-bankgovua-landing.jpg', 'project-bankgovua-landing-cover.jpg'),
(5, '2017-11-10', 'Bank.gov.ua Portal', 'As a part of the transformation strategy, the National Bank of Ukraine requested the  new website. The new website needed to be adaptive, based on the principle of open data and include a number of new functions.', NULL, 'ua', 'bankgovua-portal', 'project-bankgovua.jpg', 'project-bankgovua-cover.jpg'),
(6, '2019-02-18', 'Zaneen Sample Tour', 'The application for logistic operations. Allows Zaneen to manage the shipping and receiving of sample cases, to report and fix problems, as well as to communicate with the participating agencies, and many more.', NULL, 'ca', 'zaneen-sample-tour', 'project-zst.jpg', 'project-zst-cover.jpg'),
(7, '2019-10-09', 'Spec Sheet Generator', 'This is a one-page application that collects product data and allows the user to save the product specification as a pdf or print it out. It was created as a backup source of information in addition to the existing corporate website.', '\n<div class=\"container\">\n\n	<div class=\"row\">\n\n		<div class=\"col-md-12 pt-5 pb-5\">\n\n<p class=\"font-weight-bold\">About the company</p>\n\n<ul>\n\n<li>Zaneen is an exclusive distributor of lighting systems for interior, exterior and architectural usage in commercial and residential installations. Some of their clients visit the existing website to download product specifications.</li>\n\n</ul>\n\n<p class=\"font-weight-bold\">The project goals</p>\n\n<ul>\n\n<li>It was very important to ensure that the product data sheet is available at any time. Even if the official website isn\'t available.</li>\n\n</ul>\n\n<p>I have created a small web application which allows a user to search for a product model number, review and download a specification sheet. The app was written in PHP, I have also used mpdf, a PHP library which generates PDF files from UTF-8 encoded HTML.</p>\n\n\n		</div>\n\n	</div>\n\n</div>\n\n', 'ca', 'zaneen-spec-generator', 'project-spec.jpg', 'project-spec-cover.jpg'),
(8, '2020-02-21', 'Zaneen Web Portal', 'The previous platform has reached the end of its useful life cycle and no longer met the needs of the business. Requirements for the new development included integration with the business system Netsuite, advanced product filter, product configurator, and a personal account for a sales representative.', '<div class=\"container\">\n\n	<div class=\"row\">\n\n		<div class=\"col-md-12 pt-5 pb-5\">\n\n<p class=\"font-weight-bold\">About the company</p>\n\n<ul>\n\n<li>Zaneen is an exclusive distributor of lighting systems for interior, exterior and architectural usage in commercial and residential installations. Their clients visit the existing website for product information and to see examples of product installations.</li>\n\n<li>With variations of sizes, styles, colors and materials as well as technical variations such as lumens, lamp types and electrical voltages, there are a large number of base and configurable products available. Up to 50,000 base products are estimated with potential variations extending this into millions of potential product outcomes.</li>\n\n</ul>\n\n<p class=\"font-weight-bold\">The project goals</p>\n\n<ul>\n\n<li>Simplify how to specify Zaneen. Which means easy specifying without meeting Zaneen employee or representative and being hand held through the process.</li>\n\n<li>Integrate the website to Netsuite in as many ways as possible.</li>\n\n<li>Refresh the design and improve the usability.</li>\n\n</ul>\n\n<p>The new website is expected to be a time-saving specification platform that connects engineers, architects, designers and their lighting spec requirements with the leading European manufacturers’ products in the lighting industry.</p>\n\n<p><b>From March to September 2019, my role was to coordinate this project</b>. Everything was in line with the best practices of project management: the project was initiated, the project requirements were collected, stakeholders were identified, and I started looking for a vendor. In the process of market research, the project team received 7 proposals from agencies in Toronto. Of these, we chose the vendor that was most suitable in terms of value for money. During the discovery session with the vendor, corrections were made to the project plan and the work has begun. I supported the project team with planning, coordination, and reporting, as well as facilitated project meetings, prepared agendas, presentations, and meeting minutes. I effectively escalated early warning signs and deviations from the plan to the senior management (CEO + VP of Operations).</p>\n\n<p>Unfortunately, in the course of the project the vendor failed to deliver against the SOW. The design phase was completed by the vendor with a significant delay. And after the prototypes were evaluated by their development team, the vendor refused to further cooperate with the project team and terminated the contract.</p>\n\n<p>The team has also learned, that with tens of thousands of potential product records, a high volume of product complexity and dozens of product attributes as well as the complexity of the search and product display requirements, utilizing WordPress, Magento or WooCommerce as an integrated solution will NOT provide the required functionality or be future proof for additional growth of the Zaneen digital roadmap.</p>\n\n<p>Under these circumstances, I took the initiative to complete the project on my own. And <b>from late October 2019 I was solely responsible for the programming of the web portal</b>. I have converted UI prototypes from Invision to HTML, CSS, JavaScript, Bootstrap and jQuery. The custom platform and the back-end functionality was built from scratch in PHP OOP. A number of publicly available libraries (classes) and Composer were also used. I also did the work of designing and maintainig the database (MySQL). Prepared the production server (Linux Ubuntu) and then administered it.</p>\n\n<p>Zaneen currently utilizes Oracle NetSuite for its accounting, product data and business management functions. This is a cloud system maintained by Oracle. One of the most important requirements was integration of the Zaneen product data with the new web portal. A schedule and automated procedure to refresh web server product data was created to allow this option.</p>\n\n<p>The beta version of the public part of the portal was <b>completed by the end of February 2020</b>. After that, in March there were several reviews with the key project stakeholders, including customer representatives to test the usability of the portal and make the final list of small outstanding tasks. </p>\n\n\n		</div>\n\n	</div>\n\n</div>\n\n', 'ca', 'zaneen-web-portal', 'project-zaneen-new-website.jpg', 'project-zaneen-new-website-cover.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
