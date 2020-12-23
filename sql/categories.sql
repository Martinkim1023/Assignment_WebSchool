-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 04, 2017 lúc 01:42 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `truongthi`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id_cate` int(11) NOT NULL,
  `label` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id_cate`, `label`, `url`, `type`, `sort`, `parent_id`, `date_created`) VALUES
(1, 'Trang chủ', 'trang-chu', 1, 1, 0, '2017-11-19 09:10:07'),
(2, 'Giới thiệu', 'gioi-thieu', 1, 2, 0, '2017-11-19 09:12:09'),
(3, 'Tin tức', 'tin-tuc', 1, 1, 0, '2017-11-19 09:21:17'),
(4, 'Thư viện', 'thu-vien', 1, 1, 0, '2017-11-19 09:16:12'),
(5, 'Thời khóa biểu', 'thoi-khoa-bieu', 1, 1, 0, '2017-11-19 09:14:10'),
(6, 'Hình ảnh', 'hinh-anh', 1, 1, 0, '2017-11-19 09:14:09'),
(7, 'Liên hệ', 'lien-he', 1, 1, 0, '2017-11-19 09:13:10'),
(8, 'Giớii thiệu trường', 'gioi-thieu-truong', 2, 2, 2, '2017-11-19 09:15:08'),
(9, 'Lịch sử phát triển', 'lich-su-phat-trien', 2, 3, 2, '2017-11-19 09:28:14'),
(10, 'Chức năng nhiệm vụ', 'chuc-nang-nhiem-vu', 2, 4, 2, '2017-11-19 09:18:06'),
(11, 'Danh hiệu thành tich', 'danh-hieu-thanh-tich', 2, 5, 2, '2017-11-19 09:18:11'),
(12, 'Tin nhà trường', 'tin-nha-truong', 2, 2, 3, '2017-11-19 09:10:10'),
(13, 'Tin giao duc khoa hoc', 'tin-giao-duc-khoa-hoc', 2, 3, 3, '2017-11-19 09:35:09'),
(14, 'Hướng nghiệp', 'huong-nghiep', 2, 4, 3, '2017-11-19 09:31:36'),
(15, 'Tiếp sức mùa thi', 'tiep-suc-mua-thi', 2, 5, 3, '2017-11-19 09:49:21'),
(17, 'Văn bản', 'van-ban', 2, 2, 4, '2017-11-19 10:03:08'),
(18, 'Biểu mẫu', 'bieu-mau', 2, 3, 4, '2017-11-19 10:08:11'),
(19, 'TKB giáo viên', 'tkb-giao-vien', 2, 4, 5, '2017-11-19 10:26:16'),
(20, 'TKB học sinh', 'tkb-hoc-sinh', 2, 5, 5, '2017-11-19 10:35:33');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_cate`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id_cate` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
