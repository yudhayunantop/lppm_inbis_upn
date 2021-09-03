-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2021 at 09:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` bigint(20) NOT NULL,
  `category_name` varchar(128) NOT NULL,
  `category_desc` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_desc`) VALUES
(2, 'Berita', ''),
(6, 'Pengumuman', ''),
(8, 'Galeri', ''),
(9, 'Visi Misi IBT Technopark', ''),
(10, 'IBT Technopark', ''),
(11, 'Profil Pimpinan dan Staff', ''),
(12, 'Struktur Organisasi', ''),
(13, 'Program Internal', ''),
(14, 'Program Eksternal', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` bigint(20) NOT NULL,
  `comment_parent` bigint(20) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_body` text NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` bigint(20) NOT NULL,
  `post_date` date NOT NULL,
  `post_title` varchar(256) NOT NULL,
  `post_body` longtext NOT NULL,
  `post_thumbnail` varchar(256) DEFAULT NULL,
  `post_slug` varchar(256) NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_date`, `post_title`, `post_body`, `post_thumbnail`, `post_slug`, `category_id`, `user_id`) VALUES
(1, '2021-09-03', 'IBT Technopark', '<p>Isi IBT Technopark</p>', NULL, 'ibt-technopark', 10, 1),
(2, '2021-09-03', 'Profil Pimpinan dan Staff', '<p>Isi&nbsp;Profil Pimpinan dan Staff</p>', NULL, 'profil-pimpinan-dan-staff', 11, 1),
(3, '2021-09-03', 'Struktur Organisasi', '<p>Isi&nbsp;Struktur Organisasi</p>', NULL, 'struktur-organisasi', 12, 1),
(4, '2021-09-03', 'Program Internal', '<p>Isi&nbsp;Program Internal</p>', NULL, 'program-internal', 13, 1),
(5, '2021-09-03', 'Program Eksternal', '<p>Isi Program Eksternal<br></p>', NULL, 'program-eksternal', 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `id_tenant` int(11) NOT NULL,
  `logo` varchar(300) NOT NULL,
  `linktenant` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `uploadf`
--

CREATE TABLE `uploadf` (
  `id_upload` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `file_upload` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `fullname` varchar(128) NOT NULL,
  `avatar` varchar(128) DEFAULT NULL,
  `role` enum('admin','member') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `fullname`, `avatar`, `role`) VALUES
(1, 'admin', '$2y$10$0OAcT33SnZu0nzOIDtr3JemPpkqt7oaTOnv39uZhK5yCV/JCwTS7i', 'Administrators', '6ae9419e7356ff8c4af4b6487e9d8415.png', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `video_id` int(11) NOT NULL,
  `link` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`id_tenant`);

--
-- Indexes for table `uploadf`
--
ALTER TABLE `uploadf`
  ADD PRIMARY KEY (`id_upload`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tenant`
--
ALTER TABLE `tenant`
  MODIFY `id_tenant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploadf`
--
ALTER TABLE `uploadf`
  MODIFY `id_upload` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
