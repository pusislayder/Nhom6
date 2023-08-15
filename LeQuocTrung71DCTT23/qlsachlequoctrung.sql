-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 22, 2023 lúc 11:29 AM
-- Phiên bản máy phục vụ: 10.4.25-MariaDB
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlsachgiangvandat`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sach`
--

CREATE TABLE `sach` (
  `id` int(11) NOT NULL,
  `TenSach` varchar(500) NOT NULL,
  `TheLoai` varchar(100) NOT NULL,
  `NamXuatBan` date NOT NULL,
  `NgayNhap` date NOT NULL,
  `GiaTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `sach`
--

INSERT INTO `sach` (`id`, `TenSach`, `TheLoai`, `NamXuatBan`, `NgayNhap`, `GiaTien`) VALUES
(1, 'Trật tự thế giới', 'Sách chính trị', '2015-09-20', '2023-02-15', 200000),
(2, 'Chiến binh cầu vòng1', 'Tiểu thuyết', '2015-02-20', '2023-02-12', 100000),
(3, 'Việt Nam phong tục', 'Khảo cứu', '2012-05-02', '2023-02-15', 200000),
(4, 'Môn lịch sử không chán như ta tưởng', 'Lịch sử', '2018-09-22', '2023-02-01', 120000),
(5, 'Sử Việt - 12 khúc tráng ca', 'Lịch sử', '2017-02-20', '2023-02-12', 250000),
(6, 'Thế giới như tôi thấy', 'Khoa học', '2016-08-22', '2023-02-10', 150000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `IDUser` int(11) NOT NULL,
  `nameUser` varchar(250) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`IDUser`, `nameUser`, `password`, `email`, `address`, `phone`) VALUES
(2, 'datgiang', '220920', 'dat1@gmail.com', 'Thái Bình', '0867717322'),
(3, 'datgiang22', '220920', 'dat2@gmail.com', 'Thái Bình', '0123456789'),
(4, 'datgiang33', '220920', 'dat3@gmail.com', 'Thái Bình', '0235536363'),
(5, 'datgiang23', '220920', 'dat4@gmail.com', 'Thái Bình', '0426336775'),
(6, 'datgiang32', '220920', 'dat5@gmail.com', 'Thái Bình', '0313535677');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sach`
--
ALTER TABLE `sach`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`IDUser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sach`
--
ALTER TABLE `sach`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `IDUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
