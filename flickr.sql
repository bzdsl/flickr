-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 09:45 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flickr`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `title` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`, `title`) VALUES
(17, 'abc.61d411b3270586.41852661.png', 'abc'),
(18, 'kaka.61d4123c37e516.53490950.png', 'kaka'),
(19, 'hehehe.61d41243c0ad93.43371312.png', 'hehehe'),
(20, '85WPM.61d7fbddc9ccc8.40718373.png', '85WPM'),
(21, 'jisoo.61d7fbfb53bc49.71544494.jpg', 'jisoo'),
(22, 'av.61d7fc23a56808.86608576.jpg', 'av');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(3) NOT NULL,
  `fname` varchar(120) NOT NULL,
  `lname` varchar(120) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(120) NOT NULL,
  `pwd` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `age`, `email`, `pwd`) VALUES
(20, 'thang', 'nguyen', 22, 'thang@gmail.com', 'anhday088'),
(21, 'Thang', 'nhu', 23, 'emai@gmail.com', 'adnhy'),
(22, 'thang', 'nguyen', 22, 'thang@outlook', '123'),
(23, 'thang', 'anh', 22, 'email@outlook', '$2y$10$/HmmQ3RLn/bq1SECGQREqO5CdDR2bvP1acoybC054IFJMXYiQQ1Iq'),
(24, 'thang', 'nguyen', 12, 'thanghai012@yahoo', '$2y$10$XzwDswyDMjYfWlHUCmJ4SuZOPWyzWjqc6dCQVqWl0VY/q4Jb4x07a'),
(25, 'ádf', 'ádf', 22, '123@yahoo', '$2y$10$sw/2V5Tdbwy3xOCsOXqlT.xTb97ZY3Xnkqv0WKwjuuNR6s38edISi'),
(26, 'thang', 'nguyen', 29, 'abc@abc.com', '$2y$10$Cbqkh1jBDqY.cVs5LyZ6IeoVYA047VS2vUHbbY5a/R1P18muwrl0m'),
(27, 'Duc Thang', 'Nguyen', 20, 'vietnam@thang', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
