-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2015 at 05:58 AM
-- Server version: 5.7.10
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `geolab_hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, '????????????'),
(2, '???????'),
(3, '??????????'),
(4, '????.???????????'),
(5, '???????? ???????'),
(6, '????? ????????'),
(7, '?????/???????');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `add_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(10) UNSIGNED NOT NULL,
  `autor` int(11) NOT NULL,
  `text` text NOT NULL,
  `add_data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offerimage`
--

CREATE TABLE `offerimage` (
  `id` int(10) UNSIGNED NOT NULL,
  `swap_id` int(11) NOT NULL,
  `img_url` int(11) NOT NULL,
  `autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `eng_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `eng_name`) VALUES
(1, '???????', 'main'),
(2, '????????', 'contact'),
(3, '???????', 'ads'),
(4, '???????????', 'register'),
(5, '??????', 'login'),
(6, '????? ??????????', 'news');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `parent`) VALUES
(1, '???????', 1),
(2, '????????', 1),
(3, '?????????', 1),
(4, '??????????', 2),
(5, '??????? ??????????', 2);

-- --------------------------------------------------------

--
-- Table structure for table `swapimages`
--

CREATE TABLE `swapimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `img_url` varchar(255) NOT NULL,
  `swap_id` int(11) NOT NULL,
  `first_image` int(11) NOT NULL DEFAULT '0',
  `autor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `swapimages`
--

INSERT INTO `swapimages` (`id`, `img_url`, `swap_id`, `first_image`, `autor`) VALUES
(1, '8610769_1.jpg', 1, 1, 1),
(2, '8610769_1.jpg', 2, 1, 1),
(3, '8610769_1.jpg', 1, 0, 1),
(4, '8610769_1.jpg', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `swaps`
--

CREATE TABLE `swaps` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `autor` int(11) NOT NULL,
  `contact` int(11) NOT NULL,
  `status` text NOT NULL,
  `state` text NOT NULL,
  `wantstuff` text NOT NULL,
  `vip` int(11) NOT NULL DEFAULT '0',
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `swaps`
--

INSERT INTO `swaps` (`id`, `title`, `autor`, `contact`, `status`, `state`, `wantstuff`, `vip`, `add_date`) VALUES
(1, '???????? ??????? ?????????', 1, 598932871, '???????', '???????', '???????? ??????? ?????????', 0, '2015-12-19 01:43:30'),
(2, '???????? ??????? ?????????', 1, 598932871, '???????', '???????', '???????? ??????? ?????????', 0, '2015-12-19 01:43:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offerimage`
--
ALTER TABLE `offerimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swapimages`
--
ALTER TABLE `swapimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `swaps`
--
ALTER TABLE `swaps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `offerimage`
--
ALTER TABLE `offerimage`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `swapimages`
--
ALTER TABLE `swapimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `swaps`
--
ALTER TABLE `swaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;