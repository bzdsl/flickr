-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 09, 2022 lúc 04:58 AM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `flickr`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `idkhach` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `images`
--

INSERT INTO `images` (`id`, `image_url`, `title`, `idkhach`) VALUES
(17, 'abc.61d411b3270586.41852661.png', 'abc', 28),
(18, 'kaka.61d4123c37e516.53490950.png', 'kaka', 28),
(19, 'hehehe.61d41243c0ad93.43371312.png', 'hehehe', 28),
(20, '85WPM.61d7fbddc9ccc8.40718373.png', '85WPM', 22),
(21, 'jisoo.61d7fbfb53bc49.71544494.jpg', 'jisoo', 23,
(22, 'av.61d7fc23a56808.86608576.jpg', 'av', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_user`
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
-- Đang đổ dữ liệu cho bảng `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fname`, `lname`, `age`, `email`, `pwd`) VALUES
(20, 'thang', 'nguyen', 22, 'thang@gmail.com', 'anhday088'),
(21, 'Thang', 'nhu', 23, 'emai@gmail.com', 'adnhy'),
(22, 'thang', 'nguyen', 22, 'thang@outlook', '123'),
(23, 'thang', 'anh', 22, 'email@outlook', '$2y$10$/HmmQ3RLn/bq1SECGQREqO5CdDR2bvP1acoybC054IFJMXYiQQ1Iq'),
(24, 'thang', 'nguyen', 12, 'thanghai012@yahoo', '$2y$10$XzwDswyDMjYfWlHUCmJ4SuZOPWyzWjqc6dCQVqWl0VY/q4Jb4x07a'),
(25, 'ádf', 'ádf', 22, '123@yahoo', '$2y$10$sw/2V5Tdbwy3xOCsOXqlT.xTb97ZY3Xnkqv0WKwjuuNR6s38edISi'),
(26, 'thang', 'nguyen', 29, 'abc@abc.com', '$2y$10$Cbqkh1jBDqY.cVs5LyZ6IeoVYA047VS2vUHbbY5a/R1P18muwrl0m'),
(27, 'Duc Thang', 'Nguyen', 20, 'vietnam@thang', 'abc'),
(28, 'TRAN', 'DUAT', 21, 'tduat183@gmail.com', '$2y$10$H6tXyz5ESRU9nu0hBmAW.e0FRC0iF5iFjSzb9LNMGg4hZM.M51RJu');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
