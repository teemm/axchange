-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2015 at 08:43 PM
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
(1, 'ანტიკვარიატი'),
(2, 'წიგნები'),
(3, 'ტანსაცმელი'),
(4, 'კომპ.აქსესუარები'),
(5, 'ძვირფასი ნივთები'),
(6, 'ვიდეო თამაშები'),
(7, 'ავეჯი/ჭურჭელი');

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
(1, 'მთავარი', 'main'),
(2, 'კონტაქტი', 'contact'),
(3, 'რეკლამა', 'ads'),
(4, 'რეგისტრაცია', 'register'),
(5, 'შესვლა', 'login'),
(6, 'ახალი განცხადება', 'news');

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
(1, 'მარკები', 1),
(2, 'იარაღები', 1),
(3, 'სკულპტურა', 1),
(4, 'ლექსიკოები', 2),
(5, 'საბავშო ლიტერატურა', 2);

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
(4, '8610769_2.jpg', 3, 1, 1),
(5, '8610769_3.jpg', 3, 1, 1),
(6, '8610769_3.jpg', 4, 1, 1),
(7, '8610769_3.jpg', 5, 1, 1),
(8, '8610769_3.jpg', 6, 1, 1),
(9, '8610769_3.jpg', 7, 1, 1),
(10, '8610769_1.jpg', 8, 1, 1);

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
  `description` text NOT NULL,
  `vip` int(11) NOT NULL DEFAULT '0',
  `cat_id` int(11) NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `swaps`
--

INSERT INTO `swaps` (`id`, `title`, `autor`, `contact`, `status`, `state`, `wantstuff`, `description`, `vip`, `cat_id`, `add_date`) VALUES
(1, 'გერმანულ ქართული ლექსიკონი', 1, 598932871, 'მეორადი', 'თბილისი', 'ინგლისურ ქართული ლექსიკონი', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 1, 0, '2015-12-19 01:43:30'),
(2, 'გერმანულ ქართული ლექსიკონი', 1, 598932871, 'მეორადი', 'თბილისი', 'ინგლისურ ქართული ლექსიკონი', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 0, 0, '2015-12-19 01:43:30'),
(3, 'ტესტი', 1, 12, 'არვიცი', 'არც ეს', 'ეს მაგრად მკდია ', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 0, 0, '2015-12-19 06:54:44'),
(4, 'ტესტი', 2, 5, 'რავიცი ', 'ესეც ', 'ჰაჰ', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 0, 0, '2015-12-19 06:54:44'),
(5, 'გერმანულ ქართული ლექსიკონი', 1, 598932871, 'მეორადი', 'თბილისი', 'ინგლისურ ქართული ლექსიკონი', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 1, 0, '2015-12-19 01:43:30'),
(6, 'გერმანულ ქართული ლექსიკონი', 1, 598932871, 'მეორადი', 'თბილისი', 'ინგლისურ ქართული ლექსიკონი', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 1, 0, '2015-12-19 01:43:30'),
(7, 'ტესტი', 2, 5, 'რავიცი ', 'ესეც ', 'ჰაჰ', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 0, 0, '2015-12-19 06:54:44'),
(8, 'ტესტი', 2, 5, 'რავიცი ', 'ესეც ', 'ჰაჰ', 'Lorem Ipsum საბეჭდი და ტიპოგრაფიული ინდუსტრიის უშინაარსო ტექსტია. იგი სტანდარტად 1500-იანი წლებიდან იქცა,', 0, 0, '2015-12-19 06:54:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_img` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobnumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `user_img`, `password`, `mobnumber`) VALUES
(1, 'dasdad', 'dsaaasd@gmail.com', 'user-alt-128.png', '12345678', 324234),
(2, 'misha', 'misha@gmail.com', 'user-alt-128.png', '7c222fb2927d828af22f592134e8932480637c0d', 598932871),
(3, 'dsaddasd', 'assddsa@gmail.com', 'user-alt-128.png', '7c4a8d09ca3762af61e59520943dc26494f8941b', 54564546),
(4, 'dasdsasa', 'sadasad@gmail.com', 'user-alt-128.png', 'a191a48d268e1911647448e129447bcae30fc942', 432423424),
(5, 'dasdsasa', 'sadasad@gmail.com', 'user-alt-128.png', 'a191a48d268e1911647448e129447bcae30fc942', 432423424),
(6, 'dasdsasa', 'sadasad@gmail.com', 'user-alt-128.png', 'a191a48d268e1911647448e129447bcae30fc942', 432423424),
(7, 'temo', 'temo@gmail.com', 'user-alt-128.png', '7c4a8d09ca3762af61e59520943dc26494f8941b', 432434554),
(8, 'toke', 'toke@gmail.com', 'user-alt-128.png', '7c4a8d09ca3762af61e59520943dc26494f8941b', 545435453);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `swaps`
--
ALTER TABLE `swaps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;