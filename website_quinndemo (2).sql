-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2024 lúc 08:30 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `website_quinndemo`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) NOT NULL,
  `admin_id` bigint(20) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `admin_users`
--

INSERT INTO `admin_users` (`id`, `admin_id`, `admin_name`, `admin_password`) VALUES
(1, 123, 'thach@admin', '12345');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binhluan`
--

CREATE TABLE `binhluan` (
  `id_comm` int(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binhluan`
--

INSERT INTO `binhluan` (`id_comm`, `noidung`, `id`, `user_name`, `date`) VALUES
(7, '123', 1, 'tai', '2023-12-30 09:02:37'),
(12, '123', 2, 'tai', '2023-12-30 09:19:30'),
(13, '123', 2, 'tai', '2023-12-30 09:19:30'),
(14, 'tôi không học được', 1, 'tai', '2023-12-30 09:21:06'),
(15, 'thật dễ dàng', 3, 'tai', '2023-12-30 09:21:31'),
(16, 'tôi thích nó\r\n', 16, 'thach', '2023-12-31 09:41:00'),
(17, 'tuyệt vời', 29, 'thach', '2023-12-31 09:41:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `id` bigint(20) NOT NULL,
  `tenkhoahoc` varchar(50) NOT NULL,
  `makhoahoc` varchar(30) NOT NULL,
  `loaikhoahoc` varchar(30) NOT NULL,
  `anh` varchar(50) NOT NULL,
  `phanloai` varchar(30) NOT NULL DEFAULT 'cơ bản',
  `nam` varchar(255) NOT NULL,
  `video` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`id`, `tenkhoahoc`, `makhoahoc`, `loaikhoahoc`, `anh`, `phanloai`, `nam`, `video`) VALUES
(1, 'PowerPoint 2016 cơ bản', '291983', 'PowerPoint', '2016 beginner.jpg', 'Cơ bản', '2016', 'QqPSZdFrUCI'),
(2, 'PowerPoint 2019 cơ bản', '560955', 'PowerPoint', '2019 beginner.jpg', 'Cơ bản', '2019', 'rvh_c_K3UU0?si=qaDYGXw8d-wTDak1'),
(3, 'PowerPoint 2021 cơ bản', '937455', 'PowerPoint', '2021 beginner.jpg', 'Cơ bản', '2021', 'VODDnOHko7o'),
(16, 'Excel 2016 cơ bản', '222123', 'Excel', 'ex begin 2016.webp', 'Cơ bản', '2016', 'tuk99Sgc6Fw'),
(25, 'Excel 2019 cơ bản', '189456', 'Excel', 'ex begin 2019.jpg', 'Cơ bản', '2019', '6JnEYGxxd8w'),
(26, 'Excel 2021 cơ bản', '249635', 'Excel', 'ex begin 2021.jpg', 'Cơ bản', '2021', 'bF31VEFvMmY'),
(27, 'Word 2016 cơ bản', '165983', 'Word', 'word2016begin.jpg', 'Cơ bản', '2016', 'yV4i29Xo0iM'),
(28, 'Word 2019 cơ bản', '144157', 'Word', 'word2019begin.jpg', 'Cơ bản', '2019', 'um6BEnVklms'),
(29, 'Word 2021 cơ bản', '133665', 'Word', 'word2021begin.jpg', 'Cơ bản', '2021', '7hPcdNAS0v4'),
(31, 'PowerPoint 2016 nâng cao', '178785', 'PowerPoint', 'advanced 2016.jpg', 'Nâng cao', '2016', '0lH0xc6MTMs'),
(32, 'PowerPoint 2019 nâng cao', '181923', 'PowerPoint', '2019 advanced.jpg', 'Nâng cao', '2019', 'pJjJXKgbCQw?si=j-5SDScZ3NskOsmN'),
(33, 'PowerPoint 2021 nâng cao', '845146', 'PowerPoint', '2021 advanced.jpg', 'Nâng cao', '2021', '87C6guw4Zps'),
(34, 'Outlook 2016 cơ bản', '451786', 'Outlook', '2015 outlook begin.jpg', 'Cơ bản', '2016', 'zWpAt0GtwCU?si=DCuH8lz-qsL88EgH');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `template`
--

CREATE TABLE `template` (
  `id` bigint(20) NOT NULL,
  `tentemp` varchar(255) NOT NULL,
  `loaitemp` varchar(255) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `template`
--

INSERT INTO `template` (`id`, `tentemp`, `loaitemp`, `anh`) VALUES
(1, 'Các bước để viết một câu chuyện', 'Google Slides và bản mẫu PowerPoint', 'temp1.png'),
(2, 'Nàng tiên cá nhỏ', 'Google Slides và bản mẫu PowerPoint', 'temp2.png'),
(4, 'Công cụ lập kế hoạch hàng tuần cho học sinh trung học cơ sở', 'Google Slides và bản mẫu PowerPoint', 'temp3.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `hovaten` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` varchar(50) NOT NULL DEFAULT 'hoatdong'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `hovaten`, `password`, `email`, `date`, `tinhtrang`) VALUES
(1, 122683275634482, 'thach', 'Trần Ngọc Thạch', '12345', 'thach123@gmail.com', '2023-12-31 09:38:05', 'hoatdong'),
(3, 2758504132389, 'tai', 'Võ Nguyễn Tấn Tài', '12345679', 'tai123@gmail.com', '2023-12-29 22:16:59', 'hoatdong'),
(4, 75767, 'thachtran', '', '112233', 'thachtran@gmail.com', '2023-12-11 09:55:12', 'hoatdong'),
(5, 5260096, 'ngocthach', '', '12345', 'tranngocthach@gmail.com', '2023-12-29 06:17:10', 'hoatdong');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id_comm`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id_comm` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
