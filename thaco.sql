-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 11:12 AM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `thaco`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `achievements`
--

CREATE TABLE `achievements` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `whose` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `achievements`
--

INSERT INTO `achievements` (`id`, `year`, `description`, `image`, `whose`, `created_at`, `updated_at`) VALUES
(1, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//0vOwqZDnWBgpNzBEbCKBnDuOanPajdsGrLueEB4e.png', 1, '2023-11-29 02:58:03', '2023-11-29 02:58:03'),
(2, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//t8Pj3epZQEQc41BlZowg9k8hprffW7wNDcvYuXpl.png', 1, '2023-11-29 02:58:04', '2023-11-29 02:58:04'),
(3, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//cWNezLJfSoi6eYvYih6RWCEsot1qdQ67tQEIDxUk.png', 1, '2023-11-29 02:58:05', '2023-11-29 02:58:05'),
(4, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//eGCuYPnJ4pxqpTHx5AZw0mfLJ9cT14ZvehzF5huT.png', 1, '2023-11-29 02:58:06', '2023-11-29 02:58:06'),
(5, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//EJbMOwlu9xs4FaK78rvu9jl0jm7TNQVzdGA5Qg42.png', 2, '2023-11-29 02:58:08', '2023-11-29 02:58:08'),
(6, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//j8Xo9ce813XxbrXeKD8stwuypLaML2hzSLDzfF5G.png', 2, '2023-11-29 02:58:08', '2023-11-29 02:58:08'),
(7, '2022', 'Được Chủ tịch Nước Cộng Hòa Xã Hội Chủ Nghĩa Việt Nam tặng thưởng Huân chương Lao động hạng Nhất (lần 2)', 'public/achievements//SXMzzRnERl3y6V8Nq9juculy2BDNSk5ZsfkM9Kpm.png', 2, '2023-11-29 02:58:09', '2023-11-29 02:58:09'),
(8, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//gVNLrGXpXvUF5t6PYOiwp5YIUxamKlFaXTNzPxdW.png', 1, '2023-11-29 03:02:48', '2023-11-29 03:02:48'),
(9, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//KEftzo7Fn57X0GtUL4XkvUyyj2M9ryFFVFEBi1X3.png', 1, '2023-11-29 03:02:49', '2023-11-29 03:02:49'),
(10, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//dk4AcIluKA56G0Wl4Dvts1sUkMjC0kQMtFP3mAyf.png', 1, '2023-11-29 03:02:50', '2023-11-29 03:02:50'),
(11, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//NKysdWg7LGlymZFl6aw3qg7qDBEs3s5QUVLSi3CY.png', 1, '2023-11-29 03:02:51', '2023-11-29 03:02:51'),
(12, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//8MIF6hb2ChTwjXg05bkQsUd8hT44dqLN86gxGukx.png', 1, '2023-11-29 03:02:52', '2023-11-29 03:02:52'),
(13, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//ql8zs4bnyusFd9McAiM7EfzE2OTBSnwsi8zGQs78.png', 1, '2023-11-29 03:02:53', '2023-11-29 03:02:53'),
(14, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//4MibHPPL6xECEXujC8QxHat9AG6kKaSCOauZPkNl.png', 2, '2023-11-29 03:02:55', '2023-11-29 03:02:55'),
(15, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//oyFoHdWmXmQ2OjerhrlkLXxTPLbzMlJpWN11Spge.png', 2, '2023-11-29 03:02:56', '2023-11-29 03:02:56'),
(16, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//608OiFA3pSIslc455fwnoqbazkZxTHzzkz2dIyxA.png', 2, '2023-11-29 03:02:56', '2023-11-29 03:02:56'),
(17, '2022', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/achievements//k09foZEABFM03V5ElZgxQpa3i66UtQyu3N0UCVmZ.png', 2, '2023-11-29 03:02:57', '2023-11-29 03:02:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activation_fields`
--

CREATE TABLE `activation_fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `active_in` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activation_fields`
--

INSERT INTO `activation_fields` (`id`, `field_id`, `title`, `description`, `image`, `link`, `active_in`, `created_at`, `updated_at`) VALUES
(1, 1, 'SẢN XUẤT', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.\n\n', NULL, NULL, 'SẢN XUẤT', '2023-11-29 01:44:57', '2023-11-29 01:52:06'),
(2, 1, 'NGHIÊN CỨU VÀ PHÁT TRIỂN', 'Trung tâm R&D được đầu tư các phần mềm thiết kế hiện đại để nâng cao năng lực nghiên cứu và phát triển sản phẩm như bộ phần mềm thiết kế tổng thể Catia V6, phần mềm mô phỏng khí động học HyperWorks, phần mềm Teamcenter…; đồng thời đầu tư hệ thống máy móc, trang thiết bị tiên tiến như máy scan 3D, thiết bị đo độ rung, độ ồn, cầu nâng cân bằng (Nhà máy Bus THACO); máy đo gia tốc phanh, camera hồng ngoại...', 'public/activation_fields//YMvoEpR4NBpe3htPrfQZKqfhAiJeJA0ofzPm1I1d.jpg', 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'SẢN XUẤT', '2023-11-29 01:47:02', '2023-11-29 01:47:02'),
(3, 1, 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'Trung tâm R&D được đầu tư các phần mềm thiết kế hiện đại để nâng cao năng lực nghiên cứu và phát triển sản phẩm như bộ phần mềm thiết kế tổng thể Catia V6, phần mềm mô phỏng khí động học HyperWorks, ', 'public/activation_fields//PJFSpskvCilfyvEQFLilf6SnuXorBj5MlCwwhbpO.jpg', 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'SẢN XUẤT', '2023-11-29 01:47:17', '2023-11-29 01:48:49'),
(4, 1, 'KINH DOANH', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', NULL, NULL, 'KINH DOANH', '2023-11-29 01:54:16', '2023-11-29 01:54:16'),
(5, 1, 'xe du lich', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/activation_fields//GzXuFumzsryEbndWdOIrHcQdtzUMRjF7bwdFNmJF.jpg', 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'KINH DOANH', '2023-11-29 01:54:57', '2023-11-29 01:55:45'),
(6, 1, 'mo to', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/activation_fields//JqJCHPgOY7FXKt8CbTjLsuuF8vwFe00nxu1NpoY7.jpg', 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'KINH DOANH', '2023-11-29 01:55:22', '2023-11-29 01:57:31'),
(7, 1, 'xe may', 'Bắt đầu lắp ráp xe tải nhẹ mang thương hiệu KIA – Hàn Quốc.', 'public/activation_fields//nqkMirzLRkMnwAeOPUQaeqYFd4zCDQBVWybV6Rxw.jpg', 'https://thacoauto.vn/nghien-cuu-va-phat-trien', 'KINH DOANH', '2023-11-29 01:55:28', '2023-11-29 01:57:48'),
(8, 2, 'TRỒNG TRỌT', NULL, NULL, NULL, 'TRỒNG TRỌT', '2023-11-29 02:07:32', '2023-11-29 02:07:32'),
(9, 2, 'chuoi', NULL, 'public/activation_fields//OZB2C33WvxxbWs7Esfafrw8K3ZTVa37Ayjk80hXB.jpg', NULL, 'TRỒNG TRỌT', '2023-11-29 02:09:49', '2023-11-29 02:09:49'),
(11, 2, 'CHĂN NUÔI BÒ', NULL, 'public/activation_fields//hZkOWE1UzTNzF8sUsQ4PTqrD6marFGCRux3jvg36.jpg', NULL, 'CHĂN NUÔI BÒ', '2023-11-29 02:11:36', '2023-11-29 02:11:36'),
(12, 2, '', NULL, 'public/activation_fields//v7en2fJWunqm9WohUdmr08FMjCAF8QgRw2S6LvFB.jpg', NULL, 'CHĂN NUÔI BÒ', '2023-11-29 02:13:04', '2023-11-29 02:13:04'),
(13, 2, 'CHĂN NUÔI HEO', NULL, 'public/activation_fields//9Zn3zXp6xlcuvvO8UwKMC3u44lZz3HKvGrOgLVcZ.jpg', NULL, 'CHĂN NUÔI HEO', '2023-11-29 02:13:33', '2023-11-29 02:13:33'),
(14, 2, '', NULL, 'public/activation_fields//NyUOlqo1MZyqsjRWJfXYLewnNxG21m3fpyKuXf6H.jpg', NULL, 'CHĂN NUÔI HEO', '2023-11-29 02:14:14', '2023-11-29 02:14:14'),
(15, 3, 'SƠ MI RƠ MOÓC', 'Sản xuất sơ mi rơ moóc và thiết bị chuyên dụng theo yêu cầu của khách hàng. Đầu tư dây chuyền công nghệ hiện đại và vận hành theo quy trình sản xuất nghiêm ngặt. Đã xuất khẩu sang các thị trường như: Mỹ, Hàn Quốc, Nhật Bản, Thái Lan, Campuchia, Myanma', 'public/activation_fields//dutBvkc31ZfbN4uaZdrm8Ov2txlKlYLRcqElfcrG.jpg', NULL, 'SƠ MI RƠ MOÓC', '2023-11-29 02:17:31', '2023-11-29 02:17:52'),
(16, 3, 'SƠ MI RƠ MOÓC XƯƠNG', NULL, 'public/activation_fields//YcMLg9f5nsIxSdfhQVFXgULQvOnP954MGoFLNxmv.jpg', NULL, 'SƠ MI RƠ MOÓC', '2023-11-29 02:18:42', '2023-11-29 02:18:42'),
(17, 3, 'SƠ MI RƠ MOÓC XƯƠNG', NULL, 'public/activation_fields//zjtmiaXmwwp6ijv5ISZCQyIco67S92wG4FT81qhY.jpg', NULL, 'SƠ MI RƠ MOÓC', '2023-11-29 02:18:44', '2023-11-29 02:18:44'),
(18, 3, 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//8XzQ8S0dXRoYHHeQJ0aomlR9TIbZrsMZQH0ub8fF.jpg', NULL, 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ', '2023-11-29 02:19:33', '2023-11-29 02:19:33'),
(19, 3, 'SẢN PHẨM CÔNG NGHIỆP HỖ TRỢ', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//8G9aMjfTjbC4WjbMQvYdaiVgDgEHxX2Ijz3V2MpR.jpg', NULL, 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ', '2023-11-29 02:19:50', '2023-11-29 02:19:50'),
(20, 3, 'SẢN PHẨM CÔNG NGHIỆP HỖ TRỢ', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//rBSOS7NjrcDgs1SigLpTtpiYaUwbZVjqQdqNS6Tn.jpg', NULL, 'GIA CÔNG CƠ KHÍ & SẢN PHẨM PHỤ TRỢ', '2023-11-29 02:19:55', '2023-11-29 02:19:55'),
(21, 3, 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//0eOUGKsFuj3mukrTphx4O8T9unpS1RrSIxf743tP.jpg', NULL, 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU', '2023-11-29 02:20:15', '2023-11-29 02:20:15'),
(22, 3, 'THÉP CUỘN', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//zlVL0aszxL3e4HOGSrfqKpcCZLnTs9qv4SW40jw9.jpg', NULL, 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU', '2023-11-29 02:20:30', '2023-11-29 02:20:30'),
(23, 3, 'THÉP CUỘN', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//4PNDqbeG5MyfxPy1wJtSjUfIEiEB0MNLr8omDJea.jpg', NULL, 'CUNG CẤP PHÔI THÉP VÀ VẬT TƯ NGUYÊN VẬT LIỆU', '2023-11-29 02:20:59', '2023-11-29 02:20:59'),
(24, 3, 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//bxuUm1LqB4cg9jtKWuFwCBJNbluwl3EP387bqFrb.jpg', NULL, 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG', '2023-11-29 02:21:30', '2023-11-29 02:21:30'),
(25, 3, 'NHỰA CÔNG NGHIỆP', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//0bEH69E3Uyno4NmWsWgQUFRyM6qL6v8jXK5ZeXlO.jpg', NULL, 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG', '2023-11-29 02:21:46', '2023-11-29 02:21:46'),
(26, 3, 'NHỰA CÔNG NGHIỆP', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//1QgS28ARmK6FqOTGamK73cnq9VFLphBn1ZzxRF7M.jpg', NULL, 'LINH KIỆN CÔNG NGHIỆP VÀ DÂN DỤNG', '2023-11-29 02:21:49', '2023-11-29 02:21:49'),
(27, 3, 'THIẾT BỊ NÔNG NGHIỆP, CÔNG NGHIỆP, XÂY DỰNG', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//MNeiZ6lQMqfkbTJ7whcU8HwMXCOMddsLsbHeanq3.jpg', NULL, 'THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG', '2023-11-29 02:22:56', '2023-11-29 02:22:56'),
(28, 3, 'HỆ THỐNG EMS', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//XDuZgKFwOpEkXIWyAF6miQcY1YJ9edhj4xKTF5IV.jpg', NULL, 'THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG', '2023-11-29 02:23:05', '2023-11-29 02:23:05'),
(29, 3, 'HỆ THỐNG EMS', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//mjJz7WMUovN0wXAJMsmjrDxAskhwMmkK8RGkrl3o.jpg', NULL, 'THIẾT BỊ NÔNG NGHIỆP,CÔNG NGHIỆP, XÂY DỰNG', '2023-11-29 02:23:06', '2023-11-29 02:23:06'),
(30, 3, 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//j9X3coifwokppchU3jQsh528U9MOv4KnG8isO14N.jpg', NULL, 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY', '2023-11-29 02:23:21', '2023-11-29 02:23:21'),
(31, 3, 'LINH KIỆN XE MÁY', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//8S8X4q8BWOnnDwmV24aKoiQgxWY0AXHCF924Pn2e.jpg', NULL, 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY', '2023-11-29 02:23:28', '2023-11-29 02:23:28'),
(32, 3, 'LINH KIỆN XE MÁY', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//FBAmt3z89XTKPg246jNBD2a95zoTUbFUUiZ5d27A.jpg', NULL, 'LINH KIỆN PHỤ TÙNG Ô TÔ, XE MÁY', '2023-11-29 02:23:29', '2023-11-29 02:23:29'),
(33, 3, 'DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//9pBiYYRBQTO6eHX3iWQKmUri009hOXyoAVYcQRib.jpg', NULL, 'DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM', '2023-11-29 02:23:41', '2023-11-29 02:23:41'),
(34, 3, 'THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//2Lus1p60K15Qd1BJpnkQmJiIeI7IqUEAAZ0d2rbW.jpg', NULL, 'DỊCH VỤ THIẾT KẾ VÀ PHÁT TRIỂN SẢN PHẨM', '2023-11-29 02:23:55', '2023-11-29 02:23:55'),
(35, 4, 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT', 'Chuyên gia công các loại linh kiện cơ khí & công nghiệp hỗ trợ theo yêu cầu của khách hàng. Sản phẩm đảm bảo yêu cầu kỹ thuật và tiêu chuẩn thiết kế với độ chính xác cao.', 'public/activation_fields//A3HCCEoLYlGnRRBv2ouEtJ0DceO1LF5Z2J6zhtQe.jpg', NULL, 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT', '2023-11-29 02:26:23', '2023-11-29 02:37:28'),
(36, 4, 'NÚT GIAO VÒNG XUYẾN 2 TẦNG CHU LAI', NULL, 'public/activation_fields//xrV7S0CE3VLWSon6y3Fc1s7270sYd25bLSXkSgNQ.jpg', NULL, 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT', '2023-11-29 02:46:03', '2023-11-29 02:46:03'),
(37, 4, 'NÚT GIAO VÒNG XUYẾN 2 TẦNG CHU LAI', NULL, 'public/activation_fields//gdh7cPB4ZkIcxKA3ny1mf4O4JOkho3WaJWPz8SvG.jpg', NULL, 'GIAO THÔNG - HẠ TẦNG KỸ THUẬT', '2023-11-29 02:46:12', '2023-11-29 02:46:12'),
(38, 4, 'KHU CÔNG NGHIỆP', NULL, 'public/activation_fields//X2L3PppfmG1KE62gJ9lYwJIwUr4fJjPzueVMsfVz.jpg', NULL, 'KHU CÔNG NGHIỆP', '2023-11-29 02:46:25', '2023-11-29 02:46:25'),
(39, 4, 'KCN CHUYÊN NÔNG NGHIỆP THACO THÁI BÌNH', NULL, 'public/activation_fields//oIZIFcvI0EpzQ3pPzB50wDRQjarsfVRhUqOcyeaH.jpg', NULL, 'KHU CÔNG NGHIỆP', '2023-11-29 02:46:42', '2023-11-29 02:46:42'),
(40, 4, 'KCN CHUYÊN NÔNG NGHIỆP THACO THÁI BÌNH', NULL, 'public/activation_fields//UZudHXKQvHw1B12yfP1QabrpOiEM3l1IhtO4U5S2.jpg', NULL, 'KHU CÔNG NGHIỆP', '2023-11-29 02:46:43', '2023-11-29 02:46:43'),
(41, 4, 'KHU ĐÔ THỊ', NULL, 'public/activation_fields//fBbqBQVW1idUN3k0QXSrlVxoNXcycVuTN2izmrdE.jpg', NULL, 'KHU ĐÔ THỊ', '2023-11-29 02:46:54', '2023-11-29 02:46:54'),
(42, 4, '', NULL, 'public/activation_fields//MREfLTgBJEyjkHAcZ72qJB8BrdOip8ubAoyFHZJt.jpg', NULL, 'KHU ĐÔ THỊ', '2023-11-29 02:47:02', '2023-11-29 02:47:02'),
(43, 4, '', NULL, 'public/activation_fields//va8gijrXRMzqGpUUpxaf8fKfB2H6e9c0ddeouOri.jpg', NULL, 'KHU ĐÔ THỊ', '2023-11-29 02:47:03', '2023-11-29 02:47:03'),
(44, 4, 'BẤT ĐỘNG SẢN', 'Đầu tư xây dựng các dự án bất động sản ở với đa dạng các dòng sản phẩm như biệt thự, nhà phố, căn hộ cao cấp,…được quy hoạch hài hòa trong khu đô thị, chú trọng về công năng sử dụng, cùng với đầy đủ các tiện ích nội khu, giúp gia tăng giá trị cuộc sống cho gia đình. Ngoài ra, Thadico đầu tư xây dựng các bất động sản phức hợp (trung tâm thương mại) và bất động sản thương mại (siêu thị trung tâm) kết hợp Trung tâm Hội nghị - Tiệc cưới, Tháp văn', 'public/activation_fields//zGGfAJFW8TSN0v7nJeYlmbNrUomtMVOeQIrWJNHb.jpg', NULL, 'BẤT ĐỘNG SẢN', '2023-11-29 02:47:28', '2023-11-29 02:47:28'),
(45, 4, 'BẤT ĐỘNG SẢN Ở', 'Đầu tư xây dựng các dự án bất động sản ở với đa dạng các dòng sản phẩm như biệt thự, nhà phố, căn hộ cao cấp,…được quy hoạch hài hòa trong khu đô thị, chú trọng về công năng sử dụng, cùng với đầy đủ các tiện ích nội khu, giúp gia tăng giá trị cuộc sống cho gia đình. Ngoài ra, Thadico đầu tư xây dựng các bất động sản phức hợp (trung tâm thương mại) và bất động sản thương mại (siêu thị trung tâm) kết hợp Trung tâm Hội nghị - Tiệc cưới, Tháp văn', 'public/activation_fields//uY82ykL01VEdH6PKA4Fal24kzUjJMgfWslTTbiNH.jpg', NULL, 'BẤT ĐỘNG SẢN', '2023-11-29 02:47:41', '2023-11-29 02:47:41'),
(46, 4, 'BẤT ĐỘNG SẢN Ở', 'Đầu tư xây dựng các dự án bất động sản ở với đa dạng các dòng sản phẩm như biệt thự, nhà phố, căn hộ cao cấp,…được quy hoạch hài hòa trong khu đô thị, chú trọng về công năng sử dụng, cùng với đầy đủ các tiện ích nội khu, giúp gia tăng giá trị cuộc sống cho gia đình. Ngoài ra, Thadico đầu tư xây dựng các bất động sản phức hợp (trung tâm thương mại) và bất động sản thương mại (siêu thị trung tâm) kết hợp Trung tâm Hội nghị - Tiệc cưới, Tháp văn', 'public/activation_fields//qzVqAwxRi38Dtkr2kxhz0wHQUmqzXAQoVDkk2pay.jpg', NULL, 'BẤT ĐỘNG SẢN', '2023-11-29 02:47:44', '2023-11-29 02:47:44'),
(47, 5, 'VẬN TẢI ĐƯỜNG BỘ', 'Đầu tư xây dựng các dự án bất động sản ở với đa dạng các dòng sản phẩm như biệt thự, nhà phố, căn hộ cao cấp,…được quy hoạch hài hòa trong khu đô thị, chú trọng về công năng sử dụng, cùng với đầy đủ các tiện ích nội khu, giúp gia tăng giá trị cuộc sống cho gia đình. Ngoài ra, Thadico đầu tư xây dựng các bất động sản phức hợp (trung tâm thương mại) và bất động sản thương mại (siêu thị trung tâm) kết hợp Trung tâm Hội nghị - Tiệc cưới, Tháp văn', 'public/activation_fields//w8RQVWrsTvdsm8ywDkgLeiYiqsCV2n92LgsVzhgE.jpg', NULL, 'VẬN TẢI ĐƯỜNG BỘ', '2023-11-29 02:48:08', '2023-11-29 02:48:08'),
(48, 5, '', '', 'public/activation_fields//CnZBMLScXwwiO7yTs2p1GRIR2eKVnpMGzobogpXX.jpg', NULL, 'VẬN TẢI ĐƯỜNG BỘ', '2023-11-29 02:48:16', '2023-11-29 02:48:16'),
(49, 5, '', '', 'public/activation_fields//T9pgf8lMfl5SskzcAthyg9UrJhrMT8NMOO1LY1hX.jpg', NULL, 'VẬN TẢI ĐƯỜNG BỘ', '2023-11-29 02:48:17', '2023-11-29 02:48:17'),
(50, 5, 'DỊCH VỤ CẢNG CHU LAI', '', 'public/activation_fields//BOI69QTYjSxEZf0aXtkF5j1Yul7KsBRf8Xf8CAAL.jpg', NULL, 'DỊCH VỤ CẢNG CHU LAI', '2023-11-29 02:48:48', '2023-11-29 02:48:48'),
(51, 5, NULL, NULL, 'public/activation_fields//JMSXZSsv5Xp7s3hPx64RtGeDZJc6IXlm4oLyw0zx.jpg', NULL, 'DỊCH VỤ CẢNG CHU LAI', '2023-11-29 02:50:09', '2023-11-29 02:50:09'),
(52, 5, NULL, NULL, 'public/activation_fields//gcUYliF7lDZlDwmWaRO7jWmE7EO8oqqQg6QpNrkp.jpg', NULL, 'DỊCH VỤ CẢNG CHU LAI', '2023-11-29 02:50:16', '2023-11-29 02:50:16'),
(53, 5, 'VẬN TẢI BIỂN', NULL, 'public/activation_fields//wTvZHuvdV1M5W5Bbu1nGUNz6nk5W5lWME27fV7Ek.jpg', NULL, 'VẬN TẢI BIỂN', '2023-11-29 02:50:32', '2023-11-29 02:50:32'),
(54, 5, '', NULL, 'public/activation_fields//nmXO48mCfz4jOarFO476aF6AR6E9de87n5Dwx7zq.jpg', NULL, 'VẬN TẢI BIỂN', '2023-11-29 02:50:36', '2023-11-29 02:50:36'),
(55, 5, '', NULL, 'public/activation_fields//QpxLrkgR2gTGxFoPN0T1RogLw9WHyDoXB1fhF8LK.jpg', NULL, 'VẬN TẢI BIỂN', '2023-11-29 02:50:37', '2023-11-29 02:50:37'),
(56, 5, 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG', NULL, 'public/activation_fields//ab4PEpaCillLTS4PuvPXDdTEVQ5AvNSU5k3EovyZ.jpg', NULL, 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG', '2023-11-29 02:50:50', '2023-11-29 02:50:50'),
(57, 5, '', NULL, 'public/activation_fields//LnkR9x6Vk17cqW1f0idzB82gHMhInAqeGf4avHaX.jpg', NULL, 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG', '2023-11-29 02:50:54', '2023-11-29 02:50:54'),
(58, 5, '', NULL, 'public/activation_fields//09r2UH8AgT29AkGb8whKMIyNLJ2liYVzrZg9Lrhw.jpg', NULL, 'DỊCH VỤ ĐÓNG GÓI VÀ THÁO KIỆN, KIỂM HÀNG', '2023-11-29 02:50:55', '2023-11-29 02:50:55'),
(59, 6, 'TRUNG TÂM THƯƠNG MẠI', NULL, 'public/activation_fields//AJqgIStZK5SAcG2Yqh4rZJd4ynFEB0P5SVBK3bPa.jpg', NULL, 'TRUNG TÂM THƯƠNG MẠI', '2023-11-29 02:51:16', '2023-11-29 02:51:53'),
(60, 6, '', NULL, 'public/activation_fields//NcbxwhhEnwQvaBKQfAynucsUdICU3qcRGqPkJtWx.jpg', NULL, 'TRUNG TÂM THƯƠNG MẠI', '2023-11-29 02:51:20', '2023-11-29 02:52:02'),
(61, 6, '', NULL, 'public/activation_fields//9cUQR2NiZ8XyP8xV92FR4bgJbEkAnl5e0lPbnibU.jpg', NULL, 'TRUNG TÂM THƯƠNG MẠI', '2023-11-29 02:51:21', '2023-11-29 02:52:11'),
(62, 6, 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG', NULL, 'public/activation_fields//Yv647L7vxmCo4nCwfILzoywRWvbtHlvl4kYiNrqk.jpg', NULL, 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG', '2023-11-29 02:51:37', '2023-11-29 02:51:37'),
(63, 6, '', NULL, 'public/activation_fields//8d6qbc9k8yf1C65XeuICF7ZSdmmauuG0OSrQGTCZ.jpg', NULL, 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG', '2023-11-29 02:51:40', '2023-11-29 02:51:40'),
(64, 6, '', NULL, 'public/activation_fields//t5OjjN7W8sJunCOkXdQ6F9rpDP6ST717K6YvmroH.jpg', NULL, 'DỊCH VỤ NHÀ HÀNG ĂN UỐNG', '2023-11-29 02:51:41', '2023-11-29 02:51:41'),
(65, 6, 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI', NULL, 'public/activation_fields//n56Z5O0a5CPppKSheqn6KAyJzR21pUpz31VE2Aqx.jpg', NULL, 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI', '2023-11-29 02:52:46', '2023-11-29 02:52:46'),
(66, 6, '', NULL, 'public/activation_fields//tRqBSU2w31KQHN5TGJw4Rjt1oH8vRkFNWeljbCVp.jpg', NULL, 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI', '2023-11-29 02:52:49', '2023-11-29 02:52:49'),
(67, 6, '', NULL, 'public/activation_fields//FdyjmglNq00OsyKCfmmPWM3lXkvG4ZGCrwBRcXst.jpg', NULL, 'TRUNG TÂM HỘI NGHỊ TIỆC CƯỚI', '2023-11-29 02:52:53', '2023-11-29 02:52:53'),
(68, 6, 'KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ', NULL, 'public/activation_fields//WclxLnYSmjRw9Pk4kGo6aWl4Bmt7o7692IboNF7m.jpg', NULL, 'KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ', '2023-11-29 02:53:05', '2023-11-29 02:53:05'),
(69, 6, '', NULL, 'public/activation_fields//YfzTofL9OgLMk0FeSunjsPX61ynBDmStTJJK74rT.jpg', NULL, 'KHU VUI CHƠI GIẢI TRÍ TRONG NHÀ', '2023-11-29 02:53:09', '2023-11-29 02:53:09'),
(70, 6, 'KHU MUA SẮM CAO CẤP', NULL, 'public/activation_fields//aha4wQCzNXeDEy2NmJOmaGQ24hqAObBDj7a9xOWj.jpg', NULL, 'KHU MUA SẮM CAO CẤP', '2023-11-29 02:53:19', '2023-11-29 02:53:19'),
(71, 6, '', NULL, 'public/activation_fields//2ZZkGQ4bgh4tWymnEW1KiA79j4naifdIZOJ2A7bd.jpg', NULL, 'KHU MUA SẮM CAO CẤP', '2023-11-29 02:53:23', '2023-11-29 02:53:23'),
(72, 6, '', NULL, 'public/activation_fields//53x1YirC0R3VCGrc0GkYaflJhLPMjGvVKOI8yH5p.jpg', NULL, 'KHU MUA SẮM CAO CẤP', '2023-11-29 02:53:24', '2023-11-29 02:53:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `descriptions`
--

CREATE TABLE `descriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `development_processes`
--

CREATE TABLE `development_processes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `year` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `development_processes`
--

INSERT INTO `development_processes` (`id`, `year`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//pAa0pfIyCzpUuQb5Ro4iIQmgdmFksQ3CDGEya495.jpg', '2023-11-29 03:03:57', '2023-11-29 03:03:57'),
(8, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//qXgwcSbxjeijm9HVKwHRDXfEFt7ih3eubbnQttO5.jpg', '2023-11-29 03:03:58', '2023-11-29 03:03:58'),
(9, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//sZiwfrUWU7Vy4SgXbNhaFWpBu0RUuDADGwF47g1r.jpg', '2023-11-29 03:05:17', '2023-11-29 03:05:17'),
(10, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//hUHgsjGDlZuZLhzTaAbKuIPfdEGbUlVdrGMCZcs7.jpg', '2023-11-29 03:05:18', '2023-11-29 03:05:18'),
(11, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//q0S4MghJzswzjjUw9xyXCt2b7L5Swtc4Gjvi9A4v.jpg', '2023-11-29 03:05:19', '2023-11-29 03:05:19'),
(12, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//6OEnmiEfuY0ZeET46CzbuIc79xEbCIg7Uma3NBoj.jpg', '2023-11-29 03:05:20', '2023-11-29 03:05:20'),
(13, '2001', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, Hàn Quốc, Pháp… với hệ thống máy móc tự động, ứng dụng số hóa trong quản trị sản xuất.', 'public/development-processes//eCElTzZtg8avGZS4Ycvn1fx2zeq7CHkEGkZEClqB.jpg', '2023-11-29 03:05:20', '2023-11-29 03:05:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `fields`
--

CREATE TABLE `fields` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `belong_to` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `fields`
--

INSERT INTO `fields` (`id`, `name`, `belong_to`, `detail`, `image`, `created_at`, `updated_at`) VALUES
(1, 'LĨNH VỰC Ô TÔ', 2, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//Z6iR4iiDDS4mw3il4vTaKxZj0Iwr4cDuwm0RWviL.jpg', '2023-11-28 01:50:05', '2023-11-28 01:50:05'),
(2, 'LĨNH VỰC NÔNG NGHIỆP', 3, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//I78A0k76DM0TCcmbxZHDXcGQDnAYNSIc07y9WlGI.jpg', '2023-11-28 01:52:22', '2023-11-28 01:52:22'),
(3, 'LĨNH VỰC CƠ KHÍ & CÔNG NGHIỆP HỖ TRỢ', 4, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//X8kusxYBpr9PJkdcuLxsNu7KEvGubfIiTHYcutaK.jpg', '2023-11-28 01:53:21', '2023-11-28 01:55:36'),
(4, 'LĨNH VỰC ĐẦU TƯ - XÂY DỰNG', 5, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//I4VL0er5x1zMgwFbizQAEh0iubEfyTgwVM0QInug.jpg', '2023-11-28 01:53:50', '2023-11-28 01:55:33'),
(5, 'LĨNH VỰC LOGISTICS', 6, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//jdMDEoPnlGbVZHhEzAf9AXrfZSEoVxJ4xTf4BSjI.jpg', '2023-11-28 01:54:39', '2023-11-28 01:54:39'),
(6, 'LĨNH VỰC THƯƠNG MẠI - DỊCH VỤ', 7, '[\"xe tai, du lich\",\" xe tai bus\"]', 'public/members//IAlyyWAFR5HVyQ9xbbPDBgccPo9wYhScrbforOVM.jpg', '2023-11-28 01:55:14', '2023-11-28 01:55:14');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `share_hoder_id` int(11) NOT NULL DEFAULT 0,
  `type` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `files`
--

INSERT INTO `files` (`id`, `date`, `name`, `link`, `share_hoder_id`, `type`, `created_at`, `updated_at`) VALUES
(1, '2023-11-16', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//G5ctkxdZNkE4anOMGqrgbCrtjdSZhXcXFFzXpEaG.pdf', 1, 0, '2023-11-27 19:12:02', '2023-11-27 19:14:42'),
(2, '2023-11-16', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//kSVbRtbyI2ZCoAVHdXOpMtWC2wOIVzs7WMSDM2cm.pdf', 1, 0, '2023-11-27 19:12:10', '2023-11-27 19:14:46'),
(3, '2022-06-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//HXxjJWtha4rshdZAfhU28RBfut5UXQgK80Vgeo6w.pdf', 1, 0, '2023-11-27 19:15:02', '2023-11-27 19:15:02'),
(4, '2022-06-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//RIh6qUnj7QxuC0eMq7nND04zZmwYLPqrMvwqDWwA.pdf', 1, 0, '2023-11-27 19:15:03', '2023-11-27 19:15:03'),
(5, '2022-06-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//LwB5KGmruoA1io1sRtrIjLX4Ne1wuTUu9grJFenu.pdf', 1, 0, '2023-11-27 19:15:06', '2023-11-27 19:15:06'),
(6, '2022-06-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//WW1x6pHUaR92PSHjPOV9JCYawCH8BixpgHcgwx5p.pdf', 1, 0, '2023-11-27 19:15:08', '2023-11-27 19:15:08'),
(7, '2022-06-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//j1eCmx1JnKZk8qrIbGUoVsGM7KQRUkx9crg79toO.pdf', 1, 0, '2023-11-27 19:15:09', '2023-11-27 19:15:09'),
(8, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//YMLISAm5YtcPZJza8292xglfLcm5ug3EAODrIt8L.pdf', 2, 0, '2023-11-27 20:45:03', '2023-11-27 20:45:03'),
(9, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//M1388VyOzzs0A1zEbN497vMztjSQz53duAEovMMH.pdf', 2, 0, '2023-11-27 20:45:04', '2023-11-27 20:45:04'),
(10, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//ZHWWGBxXqIIPoCnA4EGj9XFUIKeKkmKcIuCfT5Es.pdf', 2, 0, '2023-11-27 20:45:04', '2023-11-27 20:45:04'),
(11, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//nYWgMk8MTPMeODcwFYtCNdH2XnDkkmxXVnY4Ybqw.pdf', 2, 0, '2023-11-27 20:45:16', '2023-11-27 20:45:16'),
(12, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//sTpoNsFukIK03MJYeGePHrUmqmca1mm7kexzvufy.pdf', 2, 0, '2023-11-27 20:45:16', '2023-11-27 20:45:16'),
(13, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//FUMNxCQJtzbgZaX18hNfpsJJOWQFCI2etDwQATlR.pdf', 2, 2, '2023-11-27 20:45:17', '2023-11-28 07:42:49'),
(14, '2023-11-14', 'BÁO CÁO THƯỜNG NIÊN 2017', 'public/files//Iwd6z7IDQWlI4a4CotpYyvo5YKCtbsSI1HvHPUdR.pdf', 2, 1, '2023-11-27 20:45:22', '2023-11-28 07:33:03');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `imprints`
--

CREATE TABLE `imprints` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `imprint` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `imprints`
--

INSERT INTO `imprints` (`id`, `imprint`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 25, 'NĂM', 'Hình thành và phát triển', '2023-11-28 20:43:36', '2023-11-28 20:43:36'),
(2, 25, 'NĂM', 'Hình thành và phát triển', '2023-11-28 20:43:37', '2023-11-28 20:43:37'),
(3, 25, 'NĂM', 'Hình thành và phát triển', '2023-11-28 20:43:46', '2023-11-28 20:43:46'),
(4, 25, 'NĂM', 'Hình thành và phát triển', '2023-11-28 20:43:47', '2023-11-28 20:43:47'),
(5, 25, 'NĂM', 'Hình thành và phát triển', '2023-11-28 20:43:47', '2023-11-28 20:43:47');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `leaders`
--

CREATE TABLE `leaders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `level` int(11) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `leaders`
--

INSERT INTO `leaders` (`id`, `name`, `position`, `image`, `level`, `sex`, `created_at`, `updated_at`) VALUES
(1, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//B30gMuonm2njUpsZakeC1sq9CzmXP2Vz6vokuvrb.jpg', 1, 'Nam', '2023-11-29 02:57:07', '2023-11-29 02:57:07'),
(2, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//zkiuEO824pBuAkum7u2gfE5Y7ychEqms6wxaDAGF.jpg', 1, 'Nam', '2023-11-29 02:57:08', '2023-11-29 02:57:08'),
(3, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//Ce7Pnv70XJtkE0e3QvKUtN34xpJWIn3Z5U6vqDBO.jpg', 1, 'Nam', '2023-11-29 02:57:09', '2023-11-29 02:57:09'),
(4, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//4l7ELTZr2cON3IXKFHsT7PjvYB7FULoHTawhcymd.jpg', 2, 'Nam', '2023-11-29 02:57:15', '2023-11-29 02:57:15'),
(5, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//5ojSEsJuA5XqAfdapaf6Hax89CJPz0hb1Vr0Xpyz.jpg', 2, 'Nữ', '2023-11-29 02:57:16', '2023-11-29 02:57:16'),
(6, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//Hbecezem455K2ZOspcDKwSxrBnRnSBf2XROvkQ0g.jpg', 1, 'Nam', '2023-11-29 03:01:18', '2023-11-29 03:01:18'),
(7, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//ywCe0Q3Jm6BlWMLkciVKQhLSDIIFuYKKnyidN1iZ.jpg', 1, 'Nam', '2023-11-29 03:01:19', '2023-11-29 03:01:19'),
(8, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//DE9U8gfzFpIq9gjYI115HELu6jTwXAvpv2jrJdhb.jpg', 1, 'Nam', '2023-11-29 03:01:43', '2023-11-29 03:01:43'),
(9, 'Trần Bá Dương', 'Chủ tịch HĐQT', 'public/leaders//feUR0ejrshDvGdkTJD0Lz4mRI7Cm5JjDA2592gJr.jpg', 2, 'Nam', '2023-11-29 03:02:05', '2023-11-29 03:02:05');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `letters`
--

CREATE TABLE `letters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `letters`
--

INSERT INTO `letters` (`id`, `name`, `email`, `address`, `phone`, `content`, `created_at`, `updated_at`) VALUES
(5, 'dsad', 'd1231@ada', 'vanhoatruyenthong@thaco.com.vn', '1231312', '213', '2023-11-29 00:50:08', '2023-11-29 00:50:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magazines`
--

CREATE TABLE `magazines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `main_values`
--

CREATE TABLE `main_values` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `main_values`
--

INSERT INTO `main_values` (`id`, `title`, `logo`, `image`, `des`, `created_at`, `updated_at`) VALUES
(1, 'tan tam', 'public/mainvalues//logo/nlHw8hJpjwuiAlHsnXCvJBYjtnEy5HOR6MRubyW9.png', 'public/mainvalues/image//6YM5Gw561XjA5azu1HKweQELBOzT5jwDWut5yZw6.jpg', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, ', '2023-11-29 03:06:59', '2023-11-29 03:06:59'),
(2, 'tan tam', 'public/mainvalues//logo/TAhw3t94OLtnDlysxg6CvGhkiga6vGwIpYyIA8ou.png', 'public/mainvalues/image//zgt2eDqq8LOFrVzJUsxWVSR4okPkCek5uddKRBZs.jpg', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, ', '2023-11-29 03:07:02', '2023-11-29 03:07:02'),
(3, 'tan tam', 'public/mainvalues//logo/VjD4zpj2xTitZPqRYO5H2Ov1GhznaSnCbWNUKMwU.png', 'public/mainvalues/image//nUYb45yR496QRdqGhVCWNjzN9bMt5pV12tFB4EsG.jpg', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, ', '2023-11-29 03:07:03', '2023-11-29 03:07:03'),
(4, 'tan tam', 'public/mainvalues//logo/SAXZ2nCshmnEdkGolxfECASuRbgVfkNgnBtkQDpe.png', 'public/mainvalues/image//nkEfYLU0vbidcXDtHTWlFI9gncDHAGEJeSzZQJzh.jpg', 'THACO AUTO là tập đoàn hàng đầu về lĩnh vực sản xuất lắp ráp ô tô, đáp ứng nhu cầu thị trường trong nước và xuất khẩu. Tổ hợp Sản xuất lắp ráp Ô tô được đặt tại KCN THACO CHU LAI, bao gồm 7 nhà máy được chuyển giao công nghệ từ Nhật Bản, ', '2023-11-29 03:07:04', '2023-11-29 03:07:04');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `members`
--

INSERT INTO `members` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'THACO - CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI', 'CÔNG TY CỔ PHẦN TẬP ĐOÀN TRƯỜNG HẢI (TRUONG HAI GROUP) tiền thân là Công ty CP Ô tô Trường Hải (THACO) được thành lập vào ngày 29/04/1997, tại Đồng Nai. Người sáng lập là ông Trần Bá Dương, hiện là Chủ tịch Hội đồng Quản trị.  Trải qua 25 năm hình thành và phát triển, từ một công ty chuyên nhập khẩu xe cũ, cung cấp vật tư phụ tùng sửa chữa ô tô, THACO đã phát triển vượt bậc, đưa doanh nghiệp trở thành tập đoàn công nghiệp đa ngành gồm: THACO AUTO (Ô tô), THACO AGRI (Nông Lâm nghiệp); THACO INDUSTRIES (Cơ khí và Công nghiệp hỗ trợ), THADICO (Đầu tư xây dựng), THILOGI (Logistics) và THISO (Thương mại dịch vụ), trong đó các ngành bổ trợ cho nhau và có tính tích hợp cao.', 'public/members//itOjo66nxiYKKhtunPw8VTL2P3s1UrDafdYXbpvF.png', '2023-11-28 01:44:36', '2023-11-28 01:44:36'),
(2, 'THACO AUTO', 'THACO AUTO là ngành nghề chính yếu và chủ lực của THACO trong suốt hơn hai thập kỷ phát triển. Sau tái cấu trúc vào năm 2021, THACO AUTO hoạt động theo mô hình tập đoàn (Sub-Holding) phụ trách lĩnh vực nhập khẩu, sản xuất lắp ráp, phân phối, bán lẻ và dịch vụ sửa chữa ô tô, xe máy. Mô hình kinh doanh được thiết lập theo chuỗi giá trị từ Sản xuất (tại Chu Lai) đến Kinh doanh (Phân phối và Bán lẻ) bao gồm các chủng loại xe từ xe du lịch đến xe bus, xe tải, xe chuyên dụng thuộc thương hiệu ô tô quốc tế (KIA, Mazda, Peugeot, BMW; Foton, Mitsubishi Fuso), thương hiệu THACO (Thaco Bus) và hệ thống bán lẻ ô tô hơn 392 showroom/ xưởng dịch vụ ủy quyền chính hãng, các thương hiệu trải dài trên khắp cả nước.', 'public/members//abZirFS46tOwiM79UNe5OMRKsFXJ6tMi4VToOsHs.png', '2023-11-28 01:45:25', '2023-11-28 01:45:25'),
(3, 'THACO AGRI', 'Năm 2017, THACO bắt đầu nghiên cứu, phát triển lĩnh vực nông nghiệp với các dự án đầu tư vào ngành lúa, gạo và hợp tác sản xuất máy móc thiết bị cơ giới nông nghiệp. Năm 2018, thông qua hợp tác chiến lược với HAGL về đầu tư sản xuất nông nghiệp và thông qua việc thành lập tập đoàn THACO AGRI nhằm thực hiện chiến lược đầu tư phát triển nông – lâm nghiệp với các lĩnh vực hoạt động: trồng trọt, chăn nuôi và kinh doanh vật tư nông nghiệp.   THACO AGRI kế thừa nền tảng quản trị công nghiệp, mô hình sản xuất kinh doanh được tích hợp, hỗ trợ mạnh mẽ từ các Tập đoàn thành viên cũng như tiềm lực mạnh mẽ từ THACO. Đến nay, THACO AGRI đã sở hữu hơn 48,000ha đất tại Việt Nam, Campuchia, đồng thời, điều hành toàn bộ hoạt động sản xuất trên diện tích hơn 36,000ha của công ty HAGL Agrico [HNG] tại Lào và Campuchia.', 'public/members//ETXWxaa1Kuyfmwu9VGIzm0QYOoffsg6kz8s0KZ9E.png', '2023-11-28 01:45:59', '2023-11-28 01:45:59'),
(4, 'THACO INDUSTRIES', 'Dựa trên nguồn lực và kinh nghiệm đã tích lũy của Khối Cơ khí và CNHT, cùng với xu hướng dịch chuyển đầu tư chuỗi cung ứng toàn cầu trong bối cảnh hội nhập, THACO đã tái cấu trúc và thành lập Tổng công ty Cơ khí và Công nghiệp hỗ trợ - THACO Industries gồm tổ hợp 19 nhà máy sản xuất cơ khí và linh kiện phụ tùng, Trung tâm R&D và Trung tâm Thử nghiệm tại Chu Lai cung cấp các sản phẩm và dịch vụ, đáp ứng nhu cầu riêng biệt của khách hàng trong và ngoài nước.', 'public/members//GkSmE3Jr51pOsWepQgUNQXSzOnSNrvWHG4BjDkMp.png', '2023-11-28 01:46:29', '2023-11-28 01:46:29'),
(5, 'THADICO', 'THADICO hoạt động trong lĩnh vực đầu tư xây dựng các dự án Khu công nghiệp, Khu đô thị, Bất động sản và Giao thông - Hạ tầng kỹ thuật có tính đồng bộ, tích hợp và bổ trợ cho nhau, hình thành hệ sinh thái bền vững theo chiến lược đa ngành của THACO.', 'public/members//Iq5IOh9joXw2mQ5gj2JBD3VfO74oCU7MiKQSZ3KZ.png', '2023-11-28 01:47:04', '2023-11-28 01:47:04'),
(6, 'THILOGI', 'THILOGI là tổng công ty tổ chức và cung ứng các dịch vụ giao nhận – vận chuyển trọn gói cung ứng các giải pháp logistics tối ưu phục vụ khác hàng và đối tác. Mô hình kinh doanh của THILOGI là sự tích hợp tổng thể các dịch vụ riêng lẻ như vận tải đường bộ, vận tải biển, vận tải nông sản, dịch vụ cảng, hệ thống kho ngoại quan, kho hàng, kho lạnh…thành chuỗi dịch vụ logistics trọn gói.', 'public/members//fySygD29vGq7j4kaqmFZr0iETlAEvm52wtBBjKzp.png', '2023-11-28 01:47:32', '2023-11-28 01:47:32'),
(7, 'THISO', 'Năm 2020, THACO thành lập Công ty cổ phần thương mại và dịch vụ Quốc tế THISO để đầu tư phát triển đa dạng các loại hình kinh doanh thương mại dịch vụ thông qua hợp tác nhượng quyền, liên doanh liên kết với các đối tác có thương hiệu và tự đầu tư phát triển.', 'public/members//jrsumjuQvbitaMpJrea7zp3DNAVbIhu7OmvY2PpT.png', '2023-11-28 01:47:57', '2023-11-28 01:47:57');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_09_030419_create_members_table', 1),
(6, '2023_11_09_030420_create_fields_table', 1),
(7, '2023_11_09_030547_create_recruits_table', 1),
(8, '2023_11_09_030624_create_leaders_table', 1),
(9, '2023_11_09_030712_create_achievements_table', 1),
(10, '2023_11_09_030917_create_development_processes_table', 1),
(11, '2023_11_09_031122_create_descriptions_table', 1),
(12, '2023_11_09_031319_create_activation_fields_table', 1),
(13, '2023_11_09_031634_create_music_tranditions_table', 1),
(14, '2023_11_09_032108_create_tidings_table', 1),
(15, '2023_11_09_032118_create_magazines_table', 1),
(16, '2023_11_09_033335_create_imprints_table', 1),
(17, '2023_11_09_041329_create_events_table', 1),
(18, '2023_11_14_030352_create_share_holders_table', 1),
(19, '2023_11_14_030353_create_files_table', 1),
(20, '2023_11_23_131938_create_main_values_table', 1),
(21, '2023_11_29_040624_create_letters_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `music_tranditions`
--

CREATE TABLE `music_tranditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `lyrics` varchar(255) DEFAULT NULL,
  `mp3` varchar(255) DEFAULT NULL,
  `mp4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `music_tranditions`
--

INSERT INTO `music_tranditions` (`id`, `title`, `lyrics`, `mp3`, `mp4`, `created_at`, `updated_at`) VALUES
(1, 'https://www.youtube.com/watch?v=X4y3gJ5a-E0', 'https://www.youtube.com/watch?v=X4y3gJ5a-E0', NULL, 'https://www.youtube.com/watch?v=X4y3gJ5a-E0', '2023-11-28 19:21:49', '2023-11-28 19:21:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recruits`
--

CREATE TABLE `recruits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `link_job` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `share_holders`
--

CREATE TABLE `share_holders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `share_holders`
--

INSERT INTO `share_holders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Điều lệ quy chế', '2023-11-27 19:10:10', '2023-11-27 19:10:10'),
(2, 'Báo cáo thường niên', '2023-11-27 20:44:51', '2023-11-27 20:44:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tidings`
--

CREATE TABLE `tidings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `content` longtext NOT NULL,
  `tag` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `belong_to` varchar(255) NOT NULL,
  `field_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tidings`
--

INSERT INTO `tidings` (`id`, `title`, `date`, `content`, `tag`, `image`, `belong_to`, `field_id`, `created_at`, `updated_at`) VALUES
(1, 'THACO AUTO tổ chức chương trình “Đẳng cấp và Tiên phong” chính thức ra mắt hai mẫu xe BMW X5 mới và BMW XM', '2021-01-19', '<p><i><strong>Ngày 11/11, tại Hội trường Thiskyhall – Khu đô thị SaLa, TP.HCM, THACO AUTO và Tập đoàn BMW tổ chức chương trình “Đẳng cấp và Tiên phong” - chính thức ra mắt BMW X5 mới và BMW XM, đánh dấu 5 năm hợp tác của THACO AUTO và BMW. Đây cũng là dịp THACO AUTO tri ân khách hàng đã đồng hành cùng thương hiệu BMW trong thời gian qua.</strong></i></p><p>Chương trình “Đẳng cấp &amp; Tiên phong” có sự tham dự của đại diện Hiệp hội Doanh nghiệp Châu Âu tại Việt Nam, Hiệp hội Doanh nghiệp Đức; Lãnh đạo BMW Group Asia, BMW Car Club, Tập đoàn Jardine Matheson (Vietnam), Jardine Cycle &amp; Carriage Limited (JC&amp;C), lãnh đạo THACO, THACO AUTO và đặc biệt là các khách hàng luôn đồng hành cùng thương hiệu BMW trong suốt thời gian qua.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/1920x1280.jpg\" alt=\"1920x1280\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Quý khách hàng chụp hình kỷ niệm với lãnh đạo THACO và BMW</strong></i></figcaption></figure><p>&nbsp;Tại sự kiện, THACO AUTO và BMW tiếp tục tiên phong mang đến cho khách hàng các sản phẩm xe cao cấp, tiêu biểu là mẫu xe BMW X5 mới với 2 phiên bản Msport và xLine; đặc biệt là sự xuất hiện của BMW XM - mẫu xe hiệu suất cao và đẳng cấp nhất lần đầu tiên được ra mắt tại Việt Nam, đánh dấu bước tiến mới vượt bậc của BMW về hiệu suất vượt trội và công nghệ dẫn đầu.</p><p><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/thaco-1.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/thaco-1.jpg\" alt=\"THACO 1\" width=\"1920\" height=\"1280\"></a></p><p>BMW X5 mới với khoang nội thất rộng rãi kết hợp cùng chất liệu cao cấp mang đến trải nghiệm thượng lưu và thoải mái nhất. Điểm nổi bật nhất trên BMW X5 mới chính là hệ truyền động Mild Hybrid, kết hợp với khối động cơ B58 giúp gia tăng hiệu suất vận hành, đồng thời giảm đáng kể lượng khí thải ra môi trường.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"><figcaption><i><strong>BMW X5 mới vận hành vượt trội với công nghệ Mild Hybrid</strong></i></figcaption></figure><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>BMW XM hiệu suất cao với công nghệ Plug-in Hybrid</strong></i></figcaption></figure><p>Trong khi đó, BMW XM - mẫu xe hiệu suất cao gây ấn tượng với ngoại hình phá cách, đầy uy lực; nội thất trau chuốt, tinh xảo, thiết kế tập trung đến người lái. Đặc biệt, BMW XM là mẫu xe Plug-in Hybrid tiên phong được trang bị động cơ V8 4.4L kết hợp với động cơ điện và hệ truyền động lai M Hybrid giúp xe tăng tốc từ 0-100 km/h chỉ trong 4.3 giây.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thacoauto/2023/thang-11/su-kien-bmw-xm-va-bmw-x5/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Ông Nguyễn Quang Bảo – Tổng Giám đốc THACO AUTO phát biểu tại sự kiện</strong></i></figcaption></figure><p>Phát biểu tại sự kiện, ông Nguyễn Quang Bảo - Tổng Giám đốc THACO AUTO cho biết: “Nhân dịp này, THACO AUTO và BMW mong muốn thể hiện sự tri ân đến Quý khách hàng đã đồng hành cùng thương hiệu BMW thông qua: các hoạt động gắn kết cộng đồng Bimmer; kết nối giải BMW Golf Cup Việt Nam 2023 với giải Golf quốc tế của BMW,... Đặc biệt là chính sách bảo hành 5 năm không giới hạn số km dành cho khách hàng mua xe mới và tăng thời gian bảo hành lên 5 năm không giới hạn số km đối với hơn 3.700 xe BMW còn trong thời hạn bảo hành.”</p><p>Đồng thời, ông nhấn mạnh, trải qua 5 năm hợp tác và phát triển, với vai trò là nhà sản xuất, lắp ráp và phân phối, bán lẻ các dòng xe BMW-MINI-BMW Motorrad tại Việt Nam, THACO AUTO đã đưa ra thị trường hơn 6.000 xe, giới thiệu 17 mẫu xe mới thuộc tất cả các dòng xe chủ chốt của BMW. Đồng thời liên tục mở rộng hệ thống phân phối từ 2 showroom đầu tiên lên 15 tổ hợp showroom trên toàn quốc. Năm 2023, Tổ hợp showroom trưng bày đạt chuẩn Retail.Next đầu tiên cho các thương hiệu BMW, MINI và BMW Motorrad của THACO AUTO tại Bình Dương đã mang đến các sản phẩm và dịch vụ xứng tầm đẳng cấp cho khách hàng.</p><p>Trong khuôn khổ chương trình, THACO AUTO công bố giá xe BMW XM là 10.999 tỉ đồng; mẫu xe BMW X5 xDrive 40i xLine giá 4,159 tỉ đồng và BMW X5 xDrive 40i MSport giá 3,909 tỉ đồng.</p><p>Sự kiện lần này cũng góp phần thúc đẩy quan hệ hợp tác toàn diện giữa THACO AUTO và Tập đoàn BMW hướng đến mục tiêu phát triển bền vững, tăng trưởng doanh số tại thị trường Việt Nam. Trong thời gian tới, THACO AUTO sẽ không ngừng giới thiệu những sản phẩm cao cấp thế hệ mới, tiếp tục đầu tư thêm nhiều tổ hợp showroom cùng dịch vụ sửa chữa đẳng cấp theo tiêu chuẩn Retail.Next toàn cầu, mang đến cho khách hàng những sản phẩm, dịch vụ tốt nhất đúng với tinh thần “tận tâm phục vụ”.</p>', '[\"THACO AUTO BMW\",\" X5 M\\u1edaI\",\" BMW XM\"]', 'public/news//RKgPHLuZRofNcp3HaUNJSt0bVVxPmcD1ZldPglhf.jpg', 'tintuc', 1, '2023-11-28 01:59:31', '2023-11-28 07:04:13'),
(2, 'THACO INDUSTRIES tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ và Chế biến chế tạo Việt Nam – VIMEXPO 2023”', '2023-11-13', '<p><i><strong>Vừa qua, THACO INDUSTRIES đã tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ &amp; Chế biến chế tạo Việt Nam - VIMEXPO 2023” do Trung tâm Hỗ trợ Phát triển Công nghiệp - Cục Công nghiệp chủ trì theo chỉ đạo của Bộ Công Thương.</strong></i></p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\" alt=\"THACO 7\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Gian hàng THACO INDUSTRIES tại Triển lãm</strong></i></td></tr></tbody></table></figure><p>Triển lãm có quy mô 7.000m2, với gần 300 gian hàng của 250 doanh nghiệp trong nước và quốc tế, thu hút 15.000 khách đến tham quan và tham dự các hoạt động. Tại đây, các doanh nghiệp đã giới thiệu sản phẩm thuộc 4 lĩnh vực chính gồm: sản xuất lắp ráp ô tô, điện tử, công nghiệp công nghệ cao, cơ khí chế tạo và các nhóm ngành liên quan.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Lãnh đạo Bộ Công Thương tham quan gian hàng THACO INDUSTRIES</strong></i></figcaption></figure><p>Tham gia VIMEXPO 2023 với chủ đề “Nhà sản xuất linh kiện OEM số 1 Việt Nam - Tiên phong phát triển cơ khí chế tạo và công nghiệp hỗ trợ”, THACO INDUSTRIES giới thiệu các nhóm sản phẩm: Giải pháp tự động hóa Robot hàn kết hợp jig xoay khung xương táp lô và robot vận chuyển trong nhà xưởng AMR (Autonomous Mobile Robot); Nhóm sản phẩm gia công cơ khí (khuôn ốp bên trong ghế trước trái - phải ô tô, chi tiết nhựa, chi tiết gia công cơ khí chính xác, vỏ máy thổi tuyết, sàn cắt cỏ); Nhóm sản phẩm linh kiện phụ tùng (ghế tàu cao tốc, ống thông gió xe bán tải, tấm chắn phía trước xe máy, nhíp dùng cho xe thương mại và các linh kiện, phụ tùng nội địa hóa được lắp ráp trên mô hình ô tô du lịch).</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>&nbsp;Sản phẩm của THACO INDUSTRIES trưng bày tại Triển lãm</strong></i></figcaption></figure><p>Thông qua Triển lãm, THACO INDUSTRIES có cơ hội quảng bá thương hiệu, năng lực sản xuất, tìm kiếm cơ hội kết nối, hợp tác với các doanh nghiệp trong và ngoài nước để tiếp tục phát triển chuỗi sản xuất; khẳng định vị thế số 1 tại Việt Nam trong sản xuất và cung ứng linh kiện OEM, tham gia sâu vào chuỗi cung ứng toàn cầu; đồng thời hỗ trợ các doanh nghiệp vừa và nhỏ tham gia vào chuỗi sản xuất, đóng góp phát triển ngành cơ khí chế tạo và công nghiệp hỗ trợ Việt Nam.</p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\" alt=\"THACO 5\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\" alt=\"THACO 6\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Khách tham quan gian hàng THACO INDUSTRIES</strong></i></td></tr></tbody></table></figure><p>Trong khuôn khổ triển lãm còn có chuỗi các hoạt động như: Hội thảo “Hướng dẫn tiếp cận thị trường Mỹ cho doanh nghiệp công nghiệp vừa và nhỏ Việt Nam” và “Kết nối giao thương 1-1”; Toạ đàm “Chuỗi cung ứng bền vững: Cách tiếp cận mới cho doanh nghiệp”; trình diễn công nghệ…</p>', '[\"THACO INDUSTRIES\",\" VIMEXPO 2023\"]', 'public/news//7o7PHlOoNL287i3LTG1RRTZlfdGbsvE0jPbBIi9I.jpg', 'tintuc', 3, '2023-11-28 02:02:14', '2023-11-28 02:02:14'),
(3, 'THACO AGRI và Trường Cao đẳng Bách khoa Tây Nguyên ký kết biên bản hợp tác', '2023-11-13', '<p><i><strong>Vừa qua, THACO INDUSTRIES đã tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ &amp; Chế biến chế tạo Việt Nam - VIMEXPO 2023” do Trung tâm Hỗ trợ Phát triển Công nghiệp - Cục Công nghiệp chủ trì theo chỉ đạo của Bộ Công Thương.</strong></i></p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\" alt=\"THACO 7\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Gian hàng THACO INDUSTRIES tại Triển lãm</strong></i></td></tr></tbody></table></figure><p>Triển lãm có quy mô 7.000m2, với gần 300 gian hàng của 250 doanh nghiệp trong nước và quốc tế, thu hút 15.000 khách đến tham quan và tham dự các hoạt động. Tại đây, các doanh nghiệp đã giới thiệu sản phẩm thuộc 4 lĩnh vực chính gồm: sản xuất lắp ráp ô tô, điện tử, công nghiệp công nghệ cao, cơ khí chế tạo và các nhóm ngành liên quan.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Lãnh đạo Bộ Công Thương tham quan gian hàng THACO INDUSTRIES</strong></i></figcaption></figure><p>Tham gia VIMEXPO 2023 với chủ đề “Nhà sản xuất linh kiện OEM số 1 Việt Nam - Tiên phong phát triển cơ khí chế tạo và công nghiệp hỗ trợ”, THACO INDUSTRIES giới thiệu các nhóm sản phẩm: Giải pháp tự động hóa Robot hàn kết hợp jig xoay khung xương táp lô và robot vận chuyển trong nhà xưởng AMR (Autonomous Mobile Robot); Nhóm sản phẩm gia công cơ khí (khuôn ốp bên trong ghế trước trái - phải ô tô, chi tiết nhựa, chi tiết gia công cơ khí chính xác, vỏ máy thổi tuyết, sàn cắt cỏ); Nhóm sản phẩm linh kiện phụ tùng (ghế tàu cao tốc, ống thông gió xe bán tải, tấm chắn phía trước xe máy, nhíp dùng cho xe thương mại và các linh kiện, phụ tùng nội địa hóa được lắp ráp trên mô hình ô tô du lịch).</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>&nbsp;Sản phẩm của THACO INDUSTRIES trưng bày tại Triển lãm</strong></i></figcaption></figure><p>Thông qua Triển lãm, THACO INDUSTRIES có cơ hội quảng bá thương hiệu, năng lực sản xuất, tìm kiếm cơ hội kết nối, hợp tác với các doanh nghiệp trong và ngoài nước để tiếp tục phát triển chuỗi sản xuất; khẳng định vị thế số 1 tại Việt Nam trong sản xuất và cung ứng linh kiện OEM, tham gia sâu vào chuỗi cung ứng toàn cầu; đồng thời hỗ trợ các doanh nghiệp vừa và nhỏ tham gia vào chuỗi sản xuất, đóng góp phát triển ngành cơ khí chế tạo và công nghiệp hỗ trợ Việt Nam.</p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\" alt=\"THACO 5\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\" alt=\"THACO 6\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Khách tham quan gian hàng THACO INDUSTRIES</strong></i></td></tr></tbody></table></figure><p>Trong khuôn khổ triển lãm còn có chuỗi các hoạt động như: Hội thảo “Hướng dẫn tiếp cận thị trường Mỹ cho doanh nghiệp công nghiệp vừa và nhỏ Việt Nam” và “Kết nối giao thương 1-1”; Toạ đàm “Chuỗi cung ứng bền vững: Cách tiếp cận mới cho doanh nghiệp”; trình diễn công nghệ…</p>', '[\"THACO AGRI\"]', 'public/news//HlC3ie1pSs944lnfwPt6g0c786XENYkWbJJGJPdW.jpg', 'tintuc', 2, '2023-11-28 02:07:12', '2023-11-28 02:07:12'),
(4, 'THADICO tổ chức khóa đào tạo xây dựng chiến lược & đánh giá hiệu quả công việc KPIs', '2023-11-13', '<p><i><strong>Vừa qua, THACO INDUSTRIES đã tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ &amp; Chế biến chế tạo Việt Nam - VIMEXPO 2023” do Trung tâm Hỗ trợ Phát triển Công nghiệp - Cục Công nghiệp chủ trì theo chỉ đạo của Bộ Công Thương.</strong></i></p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\" alt=\"THACO 7\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Gian hàng THACO INDUSTRIES tại Triển lãm</strong></i></td></tr></tbody></table></figure><p>Triển lãm có quy mô 7.000m2, với gần 300 gian hàng của 250 doanh nghiệp trong nước và quốc tế, thu hút 15.000 khách đến tham quan và tham dự các hoạt động. Tại đây, các doanh nghiệp đã giới thiệu sản phẩm thuộc 4 lĩnh vực chính gồm: sản xuất lắp ráp ô tô, điện tử, công nghiệp công nghệ cao, cơ khí chế tạo và các nhóm ngành liên quan.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Lãnh đạo Bộ Công Thương tham quan gian hàng THACO INDUSTRIES</strong></i></figcaption></figure><p>Tham gia VIMEXPO 2023 với chủ đề “Nhà sản xuất linh kiện OEM số 1 Việt Nam - Tiên phong phát triển cơ khí chế tạo và công nghiệp hỗ trợ”, THACO INDUSTRIES giới thiệu các nhóm sản phẩm: Giải pháp tự động hóa Robot hàn kết hợp jig xoay khung xương táp lô và robot vận chuyển trong nhà xưởng AMR (Autonomous Mobile Robot); Nhóm sản phẩm gia công cơ khí (khuôn ốp bên trong ghế trước trái - phải ô tô, chi tiết nhựa, chi tiết gia công cơ khí chính xác, vỏ máy thổi tuyết, sàn cắt cỏ); Nhóm sản phẩm linh kiện phụ tùng (ghế tàu cao tốc, ống thông gió xe bán tải, tấm chắn phía trước xe máy, nhíp dùng cho xe thương mại và các linh kiện, phụ tùng nội địa hóa được lắp ráp trên mô hình ô tô du lịch).</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>&nbsp;Sản phẩm của THACO INDUSTRIES trưng bày tại Triển lãm</strong></i></figcaption></figure><p>Thông qua Triển lãm, THACO INDUSTRIES có cơ hội quảng bá thương hiệu, năng lực sản xuất, tìm kiếm cơ hội kết nối, hợp tác với các doanh nghiệp trong và ngoài nước để tiếp tục phát triển chuỗi sản xuất; khẳng định vị thế số 1 tại Việt Nam trong sản xuất và cung ứng linh kiện OEM, tham gia sâu vào chuỗi cung ứng toàn cầu; đồng thời hỗ trợ các doanh nghiệp vừa và nhỏ tham gia vào chuỗi sản xuất, đóng góp phát triển ngành cơ khí chế tạo và công nghiệp hỗ trợ Việt Nam.</p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\" alt=\"THACO 5\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\" alt=\"THACO 6\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Khách tham quan gian hàng THACO INDUSTRIES</strong></i></td></tr></tbody></table></figure><p>Trong khuôn khổ triển lãm còn có chuỗi các hoạt động như: Hội thảo “Hướng dẫn tiếp cận thị trường Mỹ cho doanh nghiệp công nghiệp vừa và nhỏ Việt Nam” và “Kết nối giao thương 1-1”; Toạ đàm “Chuỗi cung ứng bền vững: Cách tiếp cận mới cho doanh nghiệp”; trình diễn công nghệ…</p>', '[\"THACO DISO\"]', 'public/news//oJZb2kVSIPtHdAdIIPvOmgWg7ikdWMC2PmqtNZCa.jpg', 'sukien', 4, '2023-11-28 02:08:37', '2023-11-28 08:12:27'),
(5, 'Cảng Chu Lai tăng cường thu hút nguồn hàng xuất khẩu', '2023-11-13', '<p><i><strong>Vừa qua, THACO INDUSTRIES đã tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ &amp; Chế biến chế tạo Việt Nam - VIMEXPO 2023” do Trung tâm Hỗ trợ Phát triển Công nghiệp - Cục Công nghiệp chủ trì theo chỉ đạo của Bộ Công Thương.</strong></i></p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\" alt=\"THACO 7\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Gian hàng THACO INDUSTRIES tại Triển lãm</strong></i></td></tr></tbody></table></figure><p>Triển lãm có quy mô 7.000m2, với gần 300 gian hàng của 250 doanh nghiệp trong nước và quốc tế, thu hút 15.000 khách đến tham quan và tham dự các hoạt động. Tại đây, các doanh nghiệp đã giới thiệu sản phẩm thuộc 4 lĩnh vực chính gồm: sản xuất lắp ráp ô tô, điện tử, công nghiệp công nghệ cao, cơ khí chế tạo và các nhóm ngành liên quan.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Lãnh đạo Bộ Công Thương tham quan gian hàng THACO INDUSTRIES</strong></i></figcaption></figure><p>Tham gia VIMEXPO 2023 với chủ đề “Nhà sản xuất linh kiện OEM số 1 Việt Nam - Tiên phong phát triển cơ khí chế tạo và công nghiệp hỗ trợ”, THACO INDUSTRIES giới thiệu các nhóm sản phẩm: Giải pháp tự động hóa Robot hàn kết hợp jig xoay khung xương táp lô và robot vận chuyển trong nhà xưởng AMR (Autonomous Mobile Robot); Nhóm sản phẩm gia công cơ khí (khuôn ốp bên trong ghế trước trái - phải ô tô, chi tiết nhựa, chi tiết gia công cơ khí chính xác, vỏ máy thổi tuyết, sàn cắt cỏ); Nhóm sản phẩm linh kiện phụ tùng (ghế tàu cao tốc, ống thông gió xe bán tải, tấm chắn phía trước xe máy, nhíp dùng cho xe thương mại và các linh kiện, phụ tùng nội địa hóa được lắp ráp trên mô hình ô tô du lịch).</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>&nbsp;Sản phẩm của THACO INDUSTRIES trưng bày tại Triển lãm</strong></i></figcaption></figure><p>Thông qua Triển lãm, THACO INDUSTRIES có cơ hội quảng bá thương hiệu, năng lực sản xuất, tìm kiếm cơ hội kết nối, hợp tác với các doanh nghiệp trong và ngoài nước để tiếp tục phát triển chuỗi sản xuất; khẳng định vị thế số 1 tại Việt Nam trong sản xuất và cung ứng linh kiện OEM, tham gia sâu vào chuỗi cung ứng toàn cầu; đồng thời hỗ trợ các doanh nghiệp vừa và nhỏ tham gia vào chuỗi sản xuất, đóng góp phát triển ngành cơ khí chế tạo và công nghiệp hỗ trợ Việt Nam.</p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\" alt=\"THACO 5\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\" alt=\"THACO 6\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Khách tham quan gian hàng THACO INDUSTRIES</strong></i></td></tr></tbody></table></figure><p>Trong khuôn khổ triển lãm còn có chuỗi các hoạt động như: Hội thảo “Hướng dẫn tiếp cận thị trường Mỹ cho doanh nghiệp công nghiệp vừa và nhỏ Việt Nam” và “Kết nối giao thương 1-1”; Toạ đàm “Chuỗi cung ứng bền vững: Cách tiếp cận mới cho doanh nghiệp”; trình diễn công nghệ…</p>', '[\"THALOGIS\"]', 'public/news//BlXCTuKKTR62iGl6pSM9q8IbuPlT3zjsdUXHE9p2.jpg', 'hoatdongnoibo', 5, '2023-11-28 02:09:17', '2023-11-28 18:25:12'),
(6, 'Thiso Retail trao 6.500 mũ bảo hiểm cho học sinh quận Gò Vấp và Tân Bình', '2023-11-13', '<p><i><strong>Vừa qua, THACO INDUSTRIES đã tham gia “Triển lãm Quốc tế lần thứ 4 về Công nghiệp hỗ trợ &amp; Chế biến chế tạo Việt Nam - VIMEXPO 2023” do Trung tâm Hỗ trợ Phát triển Công nghiệp - Cục Công nghiệp chủ trì theo chỉ đạo của Bộ Công Thương.</strong></i></p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-7.jpg\" alt=\"THACO 7\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-2.jpg\" alt=\"THACO 2\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Gian hàng THACO INDUSTRIES tại Triển lãm</strong></i></td></tr></tbody></table></figure><p>Triển lãm có quy mô 7.000m2, với gần 300 gian hàng của 250 doanh nghiệp trong nước và quốc tế, thu hút 15.000 khách đến tham quan và tham dự các hoạt động. Tại đây, các doanh nghiệp đã giới thiệu sản phẩm thuộc 4 lĩnh vực chính gồm: sản xuất lắp ráp ô tô, điện tử, công nghiệp công nghệ cao, cơ khí chế tạo và các nhóm ngành liên quan.</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-3.jpg\" alt=\"THACO 3\" width=\"1920\" height=\"1280\"><figcaption><i><strong>Lãnh đạo Bộ Công Thương tham quan gian hàng THACO INDUSTRIES</strong></i></figcaption></figure><p>Tham gia VIMEXPO 2023 với chủ đề “Nhà sản xuất linh kiện OEM số 1 Việt Nam - Tiên phong phát triển cơ khí chế tạo và công nghiệp hỗ trợ”, THACO INDUSTRIES giới thiệu các nhóm sản phẩm: Giải pháp tự động hóa Robot hàn kết hợp jig xoay khung xương táp lô và robot vận chuyển trong nhà xưởng AMR (Autonomous Mobile Robot); Nhóm sản phẩm gia công cơ khí (khuôn ốp bên trong ghế trước trái - phải ô tô, chi tiết nhựa, chi tiết gia công cơ khí chính xác, vỏ máy thổi tuyết, sàn cắt cỏ); Nhóm sản phẩm linh kiện phụ tùng (ghế tàu cao tốc, ống thông gió xe bán tải, tấm chắn phía trước xe máy, nhíp dùng cho xe thương mại và các linh kiện, phụ tùng nội địa hóa được lắp ráp trên mô hình ô tô du lịch).</p><figure class=\"image\"><img style=\"aspect-ratio:1920/1280;\" src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-4.jpg\" alt=\"THACO 4\" width=\"1920\" height=\"1280\"><figcaption><i><strong>&nbsp;Sản phẩm của THACO INDUSTRIES trưng bày tại Triển lãm</strong></i></figcaption></figure><p>Thông qua Triển lãm, THACO INDUSTRIES có cơ hội quảng bá thương hiệu, năng lực sản xuất, tìm kiếm cơ hội kết nối, hợp tác với các doanh nghiệp trong và ngoài nước để tiếp tục phát triển chuỗi sản xuất; khẳng định vị thế số 1 tại Việt Nam trong sản xuất và cung ứng linh kiện OEM, tham gia sâu vào chuỗi cung ứng toàn cầu; đồng thời hỗ trợ các doanh nghiệp vừa và nhỏ tham gia vào chuỗi sản xuất, đóng góp phát triển ngành cơ khí chế tạo và công nghiệp hỗ trợ Việt Nam.</p><figure class=\"table\"><table><tbody><tr><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-5.jpg\" alt=\"THACO 5\" width=\"1920\" height=\"1280\"></a></td><td><a href=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\"><img src=\"https://thacogroup.vn/storage/truyen-thong/tin-tuc/thaco-industries/2023/thang-11/thaco-id-tham-gia-vimexpo/thaco-6.jpg\" alt=\"THACO 6\" width=\"1920\" height=\"1280\"></a></td></tr><tr><td colspan=\"2\"><i><strong>Khách tham quan gian hàng THACO INDUSTRIES</strong></i></td></tr></tbody></table></figure><p>Trong khuôn khổ triển lãm còn có chuỗi các hoạt động như: Hội thảo “Hướng dẫn tiếp cận thị trường Mỹ cho doanh nghiệp công nghiệp vừa và nhỏ Việt Nam” và “Kết nối giao thương 1-1”; Toạ đàm “Chuỗi cung ứng bền vững: Cách tiếp cận mới cho doanh nghiệp”; trình diễn công nghệ…</p>', '[\"THISO\"]', 'public/news//YmQcqN9V6WW2s8GZCkQV4CKIKsSbZEywhMPreUfD.jpg', 'tintuc', 6, '2023-11-28 02:10:29', '2023-11-28 02:16:22');
INSERT INTO `tidings` (`id`, `title`, `date`, `content`, `tag`, `image`, `belong_to`, `field_id`, `created_at`, `updated_at`) VALUES
(7, 'Thông điệp số 16 - năm 2021 của Chủ tịch HĐQT THACO Trần Bá Dương', '2023-11-24', '<p><i><strong>Kính gửi: Toàn thể Cán bộ và nhân viên THACO,</strong></i></p><p>Năm 2021, Chính phủ đang quyết tâm điều hành kinh tế với mức tăng trưởng GDP của Việt Nam dự kiến khoảng 5,6 - 5,8%, tuy nhiên vẫn còn nhiều thách thức trong bối cảnh mối đe dọa của đại dịch COVID-19 vẫn còn tiếp diễn. Với kinh nghiệm chống dịch và phát triển kinh tế của Đảng và Nhà nước trong năm 2020 vừa qua và tinh thần vượt khó của chúng ta trong quá trình hình thành và phát triển, THACO chúng ta vẫn tự tin bước vào năm thứ hai mà cũng là năm khởi đầu chính yếu của hoạt động kinh doanh theo mô hình Tập đoàn công nghiệp đa ngành với tầm nhìn là “Trở thành Tập đoàn công nghiệp đa ngành hàng đầu khu vực ASEAN, phát triển bền vững trong bối cảnh hội nhập Khu vực và Thế giới” nhằm thực hiện sứ mệnh: Mang lại giá trị cho khách hàng, xã hội và đóng góp phát triển kinh tế Đất nước với 5 Tổng công ty thành viên thực hiện nhiệm vụ sản xuất kinh doanh theo định hướng chiến lược như sau:&nbsp;&nbsp;</p><p><strong>1) THACO AUTO:</strong>&nbsp;Thực hiện chiến lược tham gia chuỗi giá trị toàn cầu theo phương thức hợp tác với các thương hiệu ô tô quốc tế, đồng thời sản xuất linh kiện phụ tùng nhằm gia tăng tỷ lệ nội địa hóa và hàm lượng sản xuất tại Việt Nam. Trong đó, Sản xuất kinh doanh đầy đủ các chủng loại sản phẩm: xe du lịch, xe bus, xe tải, xe chuyên dụng với các thương hiệu Ô tô quốc tế và thương hiệu THACO. Đứng đầu thị trường trong nước và xuất khẩu.&nbsp;</p><p><strong>2) THACO AGRI:</strong>&nbsp;Đầu tư sản xuất Nông nghiệp quy mô lớn theo phương pháp quản trị công nghiệp trên nền tảng hữu cơ; Tập trung sản xuất các loại trái cây chủ lực là Chuối, Xoài và các loại trái cây khác; cây công nghiệp và lâm nghiệp; chăn nuôi bò sinh sản, bò thịt; sản xuất heo giống, heo thịt; đầu tư phát triển sản xuất thực phẩm từ lúa.&nbsp;</p><p><strong>3) THADICO:</strong>&nbsp;Phát triển các dự án Khu công nghiệp, Đô thị, Bất động sản với hệ thống Hạ tầng giao thông đồng bộ, sử dụng năng lượng tái tạo, hình thành hệ sinh thái xanh, bền vững. Đồng thời hỗ trợ cho các tổng công ty khác trong THACO về đầu tư và xây dựng.&nbsp;</p><p><strong>4) THILOGI:</strong>&nbsp;Là đầu mối tổ chức và cung ứng dịch vụ logistics trọn gói phục vụ cho THACO và đối tác, khách hàng bên ngoài.&nbsp;&nbsp;</p><p><strong>5) THISO:&nbsp;</strong>thực hiện kinh doanh thương mại, dịch vụ trên cơ sở mặt bằng của các bất động sản do THADICO sở hữu và phát triển, là đầu ra sản phẩm nông nghiệp của Thagrico và tích hợp kinh doanh thương mại, dịch vụ với tổ hợp showroom xe trên quan điểm “Một điểm dừng - nhiều dịch vụ”.</p><p>Định hướng kế hoạch năm 2021 của THACO và các Tổng công ty thành viên như sau:</p><p><strong>1. TỔNG CÔNG TY THACO AUTO</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Đây là lĩnh vực sản xuất kinh doanh khởi đầu và chính yếu của THACO, có thể nói là dựa trên sự hiệu quả, năng lực và kinh nghiệm của sản xuất kinh doanh ô tô và cơ khí để THACO chúng ta tự tin phát triển thêm các ngành nghề khác.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bước vào năm 2021, THACO AUTO đã hoàn toàn hoạt động như một tổng công ty độc lập với mô hình sản xuất kinh doanh và quản trị chuẩn mực có năng lực cạnh tranh cao cùng với kế hoạch hoạt động được hoạch định một cách kỹ lưỡng có tính khả thi cao là:</p><p><strong>1.1. Kế hoạch năm 2021:</strong></p><p><strong>a) Kinh doanh xe:</strong>&nbsp;Điều hành hoạt động Sản xuất - Kinh doanh Ô tô tăng trưởng ổn định, bền vững và phục vụ khách hàng một cách tốt nhất. Giữ vững vị trí đứng đầu thị trường xe ô tô du lịch tại Việt Nam với Thương hiệu Kia đóng vai trò chủ lực về doanh số, cùng với sự ổn định của doanh số Mazda và gia tăng gấp đôi doanh số Peugeot. Nâng cao thương hiệu và doanh số của BMW - MINI.</p><p>Chỉ tiêu doanh số tối thiểu tại thị trường nội địa là 111.000 ô tô gồm: 84.000 xe du lịch (bao gồm: hơn 45.000 xe Kia, 29.000 xe Mazda, 8.000 xe Peugeot, 2.000 xe BMW, 220 xe MINI) và 27.000 xe tải, xe bus (bao gồm 25.400 xe tải, 750 xe bus và 850 xe Minibus). Đồng thời, đẩy mạnh hoạt động xuất khẩu sang các thị trường hiện hữu như Thái Lan, Myanmar, Philippine, Mỹ, Nhật và mở rộng sang các nước trong khu vực ASEAN, Doanh số xuất khẩu 2.500 xe (bao gồm: gần 1.800 xe du lịch, hơn 70 xe Tải &amp; Bus, hơn 630 Sơmi rơmoóc). Như vậy, tổng doanh số xe trong năm 2021 là 113.500 xe các loại.</p><p>&nbsp;Phát triển sản phẩm mới và nâng cấp các sản phẩm xe du lịch với đầy đủ các phân khúc sản phẩm; phát triển các sản phẩm xe tải, bus, xe chuyên dụng theo yêu cầu riêng lẻ của khách hàng.</p><p>Tiếp tục đầu tư phát triển các mô hình điểm bán hàng mang tính tích hợp như: Tổ hợp showroom ô tô nhiều thương hiệu; Đại siêu thị kết hợp tổ hợp showroom ô tô, Trung tâm thương mại kết hợp tổ hợp showroom ô tô; các showroom ô tô vệ tinh. Trong năm 2021 phát triển mới 51 điểm bán hàng, nâng tổng số đạt 363 showroom trên toàn quốc.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Phát triển sản xuất kinh doanh các sản phẩm linh kiện phụ tùng ô tô và ngoài ngành ô tô và các sản phẩm cơ khí bao gồm: Cơ khí ô tô, Cơ khí Nông lâm nghiệp, Cơ khí Xây dựng, Thiết bị công nghiệp và gia công cơ khí. Đồng thời, đẩy mạnh kinh doanh cho khách hàng bên ngoài và tham gia chuỗi giá trị toàn cầu cung cấp sản phẩm Linh kiện phụ tùng ô tô và cơ khí cho thị trường nội địa và xuất khẩu (Hàn Quốc, Nhật Bản, Úc và các nước ASEAN). Chỉ tiêu doanh thu nội địa của linh kiện phụ tùng và Cơ khí đạt hơn 6.500 tỷ đồng, trong đó: doanh thu linh kiện phụ tùng là 4.100 tỷ đồng và cơ khí là 2.400 tỷ đồng. Doanh thu xuất khẩu Linh kiện phụ tùng và Cơ khí: 30 triệu USD (trong đó linh kiện phụ tùng 18 triệu USD và cơ khí là 12 triệu USD).&nbsp;&nbsp;</p><p>b) Kinh doanh dịch vụ phụ tùng&nbsp;với chỉ tiêu doanh thu Dịch vụ sửa chữa năm 2021 tối thiểu là 5.000 tỷ đồng (bao gồm 3.900 tỷ đồng doanh thu xe du lịch; 1.100 tỷ đồng doanh thu xe tải, bus). Đảm bảo hoạt động hiệu quả và đồng bộ với kinh doanh xe, phục vụ tối đa nhu cầu khách hàng. Phát triển đa dạng các loại hình dịch vụ sửa chữa, bảo dưỡng nhanh với chất lượng phục vụ chuyên nghiệp. Phát triển mạng lưới xưởng dịch vụ rộng khắp trong đó có 2 mô hình mới xưởng dịch vụ trung tâm và xưởng dịch vụ vệ tinh.</p><p><strong>1.2. Công tác quản trị:&nbsp;</strong>Kiện toàn bộ máy tổ chức THACO AUTO theo cấu trúc, sơ đồ tổ chức trên cơ sở mô hình quản trị mới từ sản xuất đến phân phối và bán lẻ. Đặc biệt, hoàn tất việc thành lập các Công ty TNHH MTV trực thuộc THACO AUTO ở các tỉnh, thành phố (thay thế cho các chi nhánh hiện hữu) để quản trị tốt hoạt động kinh doanh một cách toàn diện qua đó triển khai phát triển các chi nhánh tại từng địa bàn thuộc tỉnh, thành phố. Triển khai chiến lược và kế hoạch chuyển đổi số theo lộ trình phù hợp, trên toàn chuỗi giá trị (từ R&amp;D - Sản xuất - Kinh doanh) dựa trên nền tảng quản trị mang tính tích hợp cao và thực hiện mục tiêu là đáp ứng nhu cầu riêng lẻ của khách hàng, gia tăng năng lực cạnh tranh, năng lực quản trị nhằm mang lại lợi ích cho khách hàng hơn nữa.</p><p><strong>2. TỔNG CÔNG TY THACO AGRI</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Đây là lĩnh vực sản xuất kinh doanh rất mới của THACO và chúng ta đã chọn cách làm lớn ngay từ đầu với mức đầu tư rất lớn với tổng mức đầu tư hơn 43.000 tỷ đồng. Do vậy, năm 2021 sẽ là năm toàn THACO tiếp tục tập trung mọi nguồn lực cho Thagrico và Hoàng Anh Agrico (HNG) đảm bảo hoạt động hiệu quả, có lãi trong năm nay và những năm tiếp theo với định hướng cụ thể là:</p><p><strong>2.1. Kế hoạch năm 2021:</strong></p><p><strong>a) Đối với cây ăn trái:</strong>&nbsp;Tập trung chăm sóc, kiểm soát dịch bệnh vườn cây hiện hữu của HNG và của Thagrico vừa mua lại của HNG&nbsp; để ổn định và tiến đến nâng cao chất lượng và năng suất trên cơ sở kinh nghiệm của Thagrico tại các vườn cây đã mua của HNG trước đây như: Tăng cường sử dụng phân bón hữu cơ để tái tạo đất, đồng thời quy hoạch và đầu tư hệ thống hạ tầng kỹ thuật (điện, nước, giao thông) và các công trình trên đất (kho, nhà ở công nhân, văn phòng &amp; nhà ở cán bộ nhân viên).</p><p>Kế hoạch đầu tư trồng mới gần 6.400 ha, nâng tổng diện tích trồng trọt cây ăn trái lên 30.850 ha (bao gồm: 15.900 ha chuối, 7.900 ha xoài, gần 600 ha dứa và 6.500 ha cây ăn trái khác).</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Triển khai đầu tư xây dựng nhà máy chế biến trái cây để cung cấp nguyên liệu sản xuất thực phẩm và các sản phẩm trái cây chế biến cho thị trường trong nước và xuất khẩu.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kế hoạch thu hoạch năm 2021 đạt 564.000 tấn trái cây các loại với doanh thu xuất khẩu là 7.038 tỷ đồng.</p><p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>&nbsp;&nbsp;b) Đối với hoạt động chăn nuôi bò:&nbsp;</strong>Đầu tư trang trại, chăn nuôi bò sinh sản theo mô hình bán chăn thả tại Gia Lai, Đăk Lăk và Lào; Tổ chức quản trị chăn nuôi theo chuyên môn hóa với quy mô lớn; Hoàn thiện quy trình, kỹ thuật chăn nuôi. Đầu tư nông trường cỏ với lịch trình thu hoạch đồng bộ với kế hoạch phát triển đàn; Hoàn thiện kỹ thuật chế biến thức ăn đảm bảo sản lượng, chất lượng, đáp ứng nhu cầu dinh dưỡng cho đàn bò. Chăn nuôi bò thịt vỗ béo tập trung để cung cấp bò thịt chất lượng cao cho thị trường nội địa.&nbsp;</p><p>Kế hoạch năm 2021 sẽ phát triển đàn lên hơn 73.000 con, bao gồm: 20.800 con bò vỗ béo và 52.300 con bò sinh sản. Doanh thu bán hàng là hơn 800 tỷ đồng.</p><p><strong>c) Đối với hoạt động chăn nuôi heo:</strong>&nbsp;Tập trung chăm sóc đàn heo giống hiện hữu và tiếp tục nhập khẩu heo giống cụ kỵ từ Đan Mạch để phát triển quy mô đàn, đáp ứng nhu cầu của các trại chăn nuôi trong hệ thống và cung cấp heo giống ra thị trường. Đầu tư trại chăn nuôi heo giống (cụ kỵ, ông bà), trại heo nái - heo thịt tại các vùng Tây Nam Bộ, Đông Nam Bộ và miền Trung, Tây Nguyên. Trong năm 2021, phát triển đàn heo lên hơn 250.000 con trong đó: heo cụ kỵ hơn 10.000 con, heo bố mẹ và heo nuôi thịt hơn 240.000 con. Doanh thu hơn 700 tỷ đồng.</p><p><strong>2.2. Công tác quản trị:&nbsp;</strong></p><p>Hoàn thiện cấu trúc và sơ đồ tổ chức THACO AGRI, kiện toàn bộ máy nhân sự đáp ứng triển khai kế hoạch năm 2021 và tổ chức quản trị theo ba cấp.&nbsp;</p><p>1. Ban điều hành Tổng công ty THACO AGRI, lãnh đạo các Khối, Tổng công ty thành viên và lãnh đạo các Ban nghiệp vụ quản trị, nghiệp vụ chuyên ngành tại văn phòng HCM và văn phòng Gia Lai;</p><p>2. Ban lãnh đạo các Khu liên hợp nông nghiệp tại Campuchia, Lào, Cụm nông nghiệp Tây Nguyên, lãnh đạo các Công ty trực thuộc các phòng, Ban quản trị nghiệp vụ theo khu vực sản xuất;&nbsp;</p><p>3. Lãnh đạo Cụm xí nghiệp, xí nghiệp, nông trường, trang trại, trại chăn nuôi và các nhà máy sản xuất, chế biến cùng các phòng/bộ phận quản trị nghiệp vụ trực tiếp điều hành sản xuất.&nbsp;</p><p>Các Khối và Ban nghiệp vụ chuyên ngành tập trung hoàn thiện các quy định, quy trình, tiêu chuẩn và định mức trong sản xuất trồng trọt, chăn nuôi và quản trị hoạt động theo chuyên môn hóa, đồng thời có kế hoạch đào tạo chuyên môn, trình độ kỹ thuật cho đội ngũ quản lý, giám sát sản xuất.</p><p>Các Ban nghiệp vụ quản trị tập trung xây dựng, ban hành các quy định, quy trình “khung” trên toàn hệ thống để các Khối triển khai chi tiết theo thực tế sản xuất như là các chính sách về quản trị hiệu quả công việc theo KPI; quản trị chi phí và hiệu quả sản xuất theo từng đơn vị.</p><p><strong>3. TỔNG CÔNG TY THADICO</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Là tổng công ty chịu trách nhiệm tư vấn và quản lý về xây dựng cho các tổng công ty khác trong THACO, đồng thời tự đầu tư trong lĩnh vực hạ tầng, đô thị và bất động sản với định hướng là:</p><p><strong>3.1. Kế hoạch năm 2021:&nbsp;</strong></p><p><strong>a) Các dự án của THACO AUTO:</strong>&nbsp;Tập trung thực hiện công tác tư vấn và quản lý các dự án phục vụ cho lĩnh vực Ô tô &amp; Cơ khí của THACO AUTO: 51 showroom, cụm showroom, tổ hợp showroom ô tô.</p><p><strong>b) Các dự án của THACO AGRI:</strong>&nbsp;Đầu tư xây dựng hệ thống hạ tầng kỹ thuật (điện, nước, giao thông) và các công trình trên đất (kho, nhà ở công nhân, văn phòng &amp; nhà ở cán bộ nhân viên) cho các khu liên hợp Snoul, khu liên hợp Kounmon của Thagrico tại Campuchia và của HAGL Agrico tại Lào. Hoàn thiện đưa vào khai thác, vận hành Trại chăn nuôi heo giống công nghệ cao ở An Giang, Bình Định. Triển khai thi công xây dựng Trang trại chăn nuôi heo tại Gia Lai; Hoàn thiện trang trại Bò IA Puch tại Gia Lai. Triển khai quy hoạch, thiết kế, thi công Trang trại bò tại ĐăkLăk.&nbsp;&nbsp;</p><p><strong>c) Các dự án Khu công nghiệp:&nbsp;</strong>Tiếp tục hoàn thiện các thủ tục pháp lý và triển khai thi công hệ thống hạ tầng KCN Nông Lâm Nghiệp (451ha) và Khu công nghiệp Cơ khí Ô tô mở rộng tại Chu Lai - Quảng Nam, đảm bảo đủ điều kiện khởi công các Nhà máy của THACO AUTO và THACO AGRI. Đồng thời triển khai thi công kết cấu hạ tầng KCN chuyên nông nghiệp THACO - Thái Bình (194 ha), được định hướng là trung tâm sản xuất lương thực thực phẩm của tỉnh Thái Bình và đồng bằng sông Hồng.</p><p><strong>d) Dự án Khu phức hợp Myanmar:</strong>&nbsp;Đẩy nhanh công tác thi công hoàn thiện căn hộ Block B1 để bàn giao cho khách hàng. Tiếp tục triển khai công tác thiết kế, hoàn thiện các thủ tục pháp lý để triển khai thi công Giai đoạn 2 của dự án.</p><p><strong>e) Tại khu đô thị Sala (Tp. HCM):</strong>&nbsp;Tập trung thi công hoàn thiện Trung tâm Thương mại SOCAR để khai trương và đưa vào hoạt động vào cuối năm 2021.</p><p><strong>3.2. Công tác quản trị:&nbsp;</strong>Tiếp tục rà soát, chuẩn hoá hệ thống quy định, quy trình nội bộ; xây dựng và ban hành các quy định, quy trình tác nghiệp giữa THADICO và các Tổng Công ty trực thuộc THACO Group trong thực hiện các dự án Xây dựng cơ bản; Tuyển dụng các vị trí chủ chốt để hoàn thiện hệ thống Cấu trúc - Sơ đồ tổ chức, đồng thời tập trung công tác đào tạo, huấn luyện, từng bước hình thành bộ máy nhân sự khung cho năm 2021 và các giai đoạn tiếp theo. Tiếp tục triển khai lộ trình chuyển đổi số theo định hướng của Tập đoàn, trong đó tập trung ứng dụng các giải pháp Công nghệ thông tin mang tính tích hợp, cấp thiết phục vụ hoạt động sản xuất kinh doanh và công tác quản trị.</p><p><strong>4. TỔNG CÔNG TY THILOGI</strong></p><p><strong>4.1. Kế hoạch năm 2021:&nbsp;</strong></p><p>Đẩy mạnh phát triển các tuyến vận tải qua cảng Chu Lai để tập trung chân hàng. Tập trung vào các giải pháp thực hiện giảm chi phí logistics cho Nông nghiệp của THACO AGRI và Ô tô của THACO, đồng thời phát triển kinh doanh ra bên ngoài với tỷ trọng cao hơn là:</p><p><strong>a) Về logistics cho ô tô:</strong>&nbsp;Liên kết, hợp tác trực tiếp với các hãng tàu, đối tác để tổ chức vận chuyển 50.200 container vật tư, linh kiện phụ tùng, linh kiện CKD về Chu Lai và giao gần 115.000 xe thành phẩm đến các đại lý.</p><p><strong>b) Về logistics cho nông nghiệp:</strong>&nbsp;Hoàn thiện từng dịch vụ của chuỗi Logistics trọn gói cho trái cây và vật tư nông nghiệp nhằm tối ưu hóa các nguồn lực trên toàn chuỗi, đảm bảo tiêu chuẩn chất lượng dịch vụ và giảm chi phí logistics cho nông nghiệp. Kế hoạch năm 2021 vận chuyển 28.600 container trái cây tươi xuất khẩu và và 12.300 container vật tư nông nghiệp đối lưu hai chiều. Đầu tư và đưa vào khai thác phương tiện chuyên dụng để vận chuyển bò, heo và thức ăn chăn nuôi với kế hoạch trong năm 2021 là 160.000 con.</p><p>&nbsp;Đồng thời, tiếp tục đẩy mạnh khai thác, phát triển khách hàng mới bên ngoài, gia tăng sản lượng hàng hóa qua cảng Chu Lai lên 4 triệu tấn/năm trong năm 2021.&nbsp;&nbsp;</p><p><strong>4.2. Công tác quản trị:&nbsp;</strong></p><p>Các nghiệp vụ phổ quát và nghiệp vụ quản trị của THILOGI sẽ được tổ chức sử dụng chung các nghiệp vụ với văn phòng THACO Chu Lai, riêng các Văn phòng THILOGI tại TP Hồ Chí Minh và Hà Nội sẽ có các nghiệp vụ quản trị chuyên ngành Logistics để quản trị các hoạt động theo địa bàn. Các phòng Nghiệp vụ này được tổ chức một cách tinh gọn và linh hoạt theo quy mô từng đơn vị và khối lượng công việc để bố trí phù hợp, thông qua tác nghiệp với Phòng Quản lý Giao nhận Vận chuyển thuộc THACO AGRI và THACO AUTO.</p><p>Ứng dụng số hóa vào quản lý, khai thác các dịch vụ logistics và quản trị hoạt động nhằm tối ưu hóa các nguồn lực (bên trong và bên ngoài), nâng cao khả năng kết nối đáp ứng nhu cầu đa dạng của các khách hàng.&nbsp;</p><p><strong>5. TỔNG CÔNG TY THISO:</strong></p><p>&nbsp;Mô hình kinh doanh của THISO gồm: Trung tâm hội nghị - tiệc cưới, Siêu thị, Vui chơi giải trí trong nhà và ẩm thực, được đầu tư và quản trị thông qua các hình thức nhượng quyền, liên doanh, liên kết hoặc tự đầu tư phát triển.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; THISO định hướng triển khai thực hiện trên các bất động sản do THADICO sở hữu và phát triển trên quan điểm “Một điểm dừng - nhiều dịch vụ”, bao gồm các mô hình:&nbsp;</p><p>1) Trung tâm thương mại cao cấp nằm trong các dự án phức hợp tại các thành phố lớn, kết hợp tháp văn phòng, căn hộ, khách sạn cao cấp, và trung tâm hội nghị cao cấp.&nbsp;</p><p>2) Mô hình Đại siêu thị kết hợp showroom ô tô, cửa hàng phụ kiện &amp; lifestyle, trung tâm hội nghị - tiệc cưới trung cấp.</p><p>Năm 2021 tập trung triển khai dự án và đưa vào hoạt động thí điểm Trung tâm thương mại (TTTM) SOCAR SALA tại Khu đô thị Sala, TP Hồ Chí Minh, và tiếp đến sẽ triển khai tại TTTM SOCAR tại Chu Lai (Quảng Nam), Đà Nẵng và các dự án TTTM ở các địa phương khác trên cả nước.&nbsp;</p><p><strong>6. THACO CHU LAI</strong></p><p><strong>6.1. Định hướng kế hoạch năm 2021:</strong></p><p>Đầu tư phát triển THACO CHU LAI trở thành Hệ sinh thái đa ngành (bao gồm: Sản xuất ô tô, cơ khí và công nghiệp hỗ trợ, logistics, Nông Lâm nghiệp, Đô thị, thương mại và du lịch công nghiệp) có hạ tầng đồng bộ, sinh thái và thông minh tại Quảng Nam và miền Trung Việt Nam với các định hướng như sau:</p><p><strong>Sản xuất Ô tô &amp; Cơ khí:</strong>&nbsp;Đẩy mạnh xuất khẩu ô tô và linh kiện phụ tùng và phát triển các sản phẩm cơ khí (Cơ khí ô tô &amp; xe máy, Cơ khí Nông lâm nghiệp, Cơ khí Xây dựng, Thiết bị công nghiệp và gia công cơ khí cho khách hàng bên ngoài).</p><p><strong>Logistics tại Chu Lai:</strong>&nbsp;Phát triển cảng Chu Lai trở thành Trung tâm Logistics miền Trung, cung cấp dịch vụ logistics trọn gói cho khách hàng, từng bước đưa cảng Chu Lai trở thành cửa ngõ trung chuyển hàng hóa xuất nhập khẩu quốc tế. Năm 2021, triển khai thủ tục đầu tư xây dựng khu phi thuế quan và bến cảng mở rộng có khả năng tiếp nhận tàu có tải trọng lên đến 5 vạn tấn. Đồng thời tiếp tục đầu tư nâng cấp phương tiện, thiết bị và mở rộng bãi Cảng để nâng cao năng lực lưu trữ, xếp dỡ hàng hóa.&nbsp;</p><p><strong>Nông lâm nghiệp tại Chu Lai:</strong>&nbsp;Phát triển Khu công nghiệp Nông Lâm nghiệp trở thành Trung tâm sản xuất chế biến nông lâm nghiệp của tỉnh Quảng Nam và khu vực miền Trung. Trong năm 2021 sẽ hoàn thành giải phóng mặt bằng, tiếp tục thực hiện các thủ tục pháp lý và tổ chức triển khai thi công san nền và đầu tư một phần hệ thống giao thông hạ tầng kỹ thuật theo chiến lược kinh doanh và nhu cầu của THACO AGRI.</p><p><strong>Đầu tư xây dựng tại Chu Lai:</strong>&nbsp;Tiếp tục nghiên cứu đầu tư các dự án động lực có ý nghĩa chiến lược tại Khu kinh tế mở Chu Lai, tỉnh Quảng Nam; góp phần hoàn thiện hạ tầng giao thông, phát triển kinh tế - xã hội tại địa phương và thu hút nguồn nhân lực đến với Quảng Nam.&nbsp;</p><p><strong>Thương mại tại Chu Lai:&nbsp;</strong>Thi công hoàn thiện Tòa nhà điều hành THACO tại Chu Lai, đồng thời, nghiên cứu xây dựng phương án kinh doanh - thương mại - dịch vụ từng phần, trước mắt là phục vụ nhu cầu giao lưu kết nối cộng đồng, vui chơi giải trí, ẩm thực cho CB.CNV THACO Chu Lai và nhân dân huyện Núi Thành.</p><p><strong>6.2. Công tác quản trị:&nbsp;</strong></p><p>Tiếp tục nâng cấp hoạt động quản trị chuỗi cung ứng và tăng cường quản trị mối quan hệ với đối tác, theo dõi chặt chẽ năng lực của nhà cung cấp, hạn chế các rủi ro trong việc cung ứng vật tư linh kiện đáp ứng kịp thời sản xuất kinh doanh; kiểm soát và nâng cao chất lượng sản phẩm. Đẩy nhanh tiến độ áp dụng số hóa trong sản xuất kinh doanh và quản trị theo hướng kết nối xuyên suốt từ khách hàng đến nhà máy, nhằm gia tăng năng lực sản xuất và đáp ứng theo yêu cầu riêng biệt của khách hàng. Kiện toàn hệ thống quản trị tại THACO Chu Lai theo hướng toàn diện và hiệu quả, phù hợp với chiến lược và xu hướng đổi mới công nghệ.</p><p><strong>7. CÔNG TÁC QUẢN TRỊ CỦA THACO GROUP:</strong></p><p>Thực hiện chiến lược đa ngành từ năm 2020, THACO đã hoạt động kinh doanh theo mô hình Tập đoàn công nghiệp đa ngành với cấu trúc gồm 5 Tổng công ty thành viên hoạt động trên các lĩnh vực sản xuất kinh doanh bổ trợ cho nhau phát triển bền vững. THACO quản trị và điều hành các Tổng công ty thông qua các nghiệp vụ quản trị, dựa trên quan điểm: “Chuyên biệt để hiệu quả, tích hợp để tạo lợi thế”. Bao gồm các nghiệp vụ quản trị chỉ tổ chức tại THACO và phân công nhân sự phụ trách các Tổng công ty; các nghiệp vụ quản trị vừa được tổ chức tại THACO, đồng thời tổ chức tại các Tổng công ty; riêng nghiệp vụ chuyên ngành chỉ được tổ chức tại các Tổng công ty và được hỗ trợ, tư vấn bởi các chuyên gia tại THACO.&nbsp;</p><p>Yêu cầu Lãnh đạo các Tổng công ty điều hành hoạt động sản xuất kinh doanh thông qua các nghiệp vụ và nhân sự các Nghiệp vụ phải hiểu rõ hoạt động sản xuất kinh doanh của các Tổng công ty để tham mưu cho Lãnh đạo và tham gia quản trị; Lãnh đạo nghiệp vụ cần có tư duy quản trị hệ thống và phương pháp quản trị công nghiệp, có thái độ tích cực để ứng xử và quản trị sự thay đổi, luôn được đào tạo và rèn luyện để phát triển năng lực mới phù hợp xu thế thời đại.</p><p>Năm 2021, là năm THACO tập trung vào công tác quản trị để thực hiện thành công các mục tiêu đã đề ra, đặc biệt là quản trị hệ thống, bao gồm: Cấu trúc, sơ đồ tổ chức, hệ thống các quy chế, quy định, quy trình,… đảm bảo tính khoa học và thực tiễn, đáp ứng yêu cầu sản xuất kinh doanh trong tình hình mới.</p><p>&nbsp;<i><strong>Anh chị em cán bộ nhân viên thân mến!</strong></i></p><p>Năm 2021, được dự báo là một năm đầy thách thức, đòi hỏi lãnh đạo và toàn thể CB-NV có quyết tâm cao và nỗ lực nhiều hơn nữa để thực hiện các mục tiêu theo định hướng kế hoạch, nhằm hiện thực hóa tầm nhìn “Trở thành tập đoàn công nghiệp đa ngành hàng đầu khu vực ASEAN trong bối cảnh hội nhập khu vực và thế giới” trên nền tảng công nghiệp có được từ sản xuất kinh doanh ô tô và cơ khí. Đây là đặc tính ưu việt mà chúng ta có thể nhận thấy từ những tập đoàn đa quốc gia và các nước công nghiệp trên thế giới mà THACO chúng ta đã may mắn có xuất phát điểm và kinh nghiệm là Công ty công nghiệp đã phát triển bền vững trong thời gian qua. Do vậy, chúng ta hãy tự tin và kiên định đi theo con đường quản trị theo phương pháp công nghiệp một cách phù hợp ở mọi phân khúc trong chuỗi giá trị và ở các lĩnh vực ngành nghề mà chúng ta đang thực hiện trên cơ sở là:&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mỗi CB-NV cần có thái độ làm việc tích cực, ứng xử chuẩn mực vì tập thể; có tác phong công nghiệp và tính kỷ luật cao, góp phần xây dựng Môi trường làm việc “Văn hóa - Thuận tiện”.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mỗi CB-NV và từng đơn vị, phòng, ban, bộ phận cần hiểu rõ trách nhiệm và chức năng nhiệm vụ của mình, để tác nghiệp và vận hành bộ máy quản trị một cách nhịp nhàng, khoa học nhằm tạo ra năng suất làm việc và hiệu quả cao nhất.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Và hơn tất cả là Lãnh đạo các cấp phải gương mẫu, đồng thời chịu trách nhiệm với CB-NV do mình quản lý trong việc biên soạn và thực hiện các nội quy, quy định của THACO và các Tổng công ty, Văn phòng, Nhà máy, Chi nhánh Công trường, Nông trường, Trang trại.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tôi cam kết là sẽ nỗ lực để lãnh đạo điều hành thực hiện chiến lược của THACO trong giai đoạn phát triển đa ngành như đã đề ra, bao gồm mục tiêu và nền tảng quản trị (bao gồm: truyền thống và số hóa) phù hợp với xu thế, hướng đến phát triển bền vững trong bối cảnh hội nhập khu vực và thế giới mà năm 2021 là năm khởi đầu. Rất mong toàn thể CB-NV hãy đồng hành cùng tôi trong hành trình mới đầy thách thức này.&nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chào thân ái và đoàn kết!</p><p>CHỦ TỊCH HĐQT</p><p><a href=\"https://www.thacogroup.vn/storage/truyen-thong/thong-diep/2021/chu-ky-chu-duong-3-1-1.png\"><img src=\"https://www.thacogroup.vn/storage/truyen-thong/thong-diep/2021/chu-ky-chu-duong-3-1-1.png\" alt=\"chu ky chu duong_3_1 (1)\" width=\"170\" height=\"97\"></a></p><p>TRẦN BÁ DƯƠNG</p><p>&nbsp;</p>', '[\"\"]', 'public/news//jXD3hztFZTIz4Wk5lm2dQX6GPWqirHBaF4ebq962.jpg', 'thongdiepchutich', 1, '2023-11-28 18:29:40', '2023-11-28 18:29:40'),
(8, 'Thông điệp số 16 - năm 2021 của Chủ tịch HĐQT THACO Trần Bá Dương', '2023-11-24', '<p><i><strong>Kính gửi: Toàn thể Cán bộ và nhân viên THACO,</strong></i></p><p>Năm 2021, Chính phủ đang quyết tâm điều hành kinh tế với mức tăng trưởng GDP của Việt Nam dự kiến khoảng 5,6 - 5,8%, tuy nhiên vẫn còn nhiều thách thức trong bối cảnh mối đe dọa của đại dịch COVID-19 vẫn còn tiếp diễn. Với kinh nghiệm chống dịch và phát triển kinh tế của Đảng và Nhà nước trong năm 2020 vừa qua và tinh thần vượt khó của chúng ta trong quá trình hình thành và phát triển, THACO chúng ta vẫn tự tin bước vào năm thứ hai mà cũng là năm khởi đầu chính yếu của hoạt động kinh doanh theo mô hình Tập đoàn công nghiệp đa ngành với tầm nhìn là “Trở thành Tập đoàn công nghiệp đa ngành hàng đầu khu vực ASEAN, phát triển bền vững trong bối cảnh hội nhập Khu vực và Thế giới” nhằm thực hiện sứ mệnh: Mang lại giá trị cho khách hàng, xã hội và đóng góp phát triển kinh tế Đất nước với 5 Tổng công ty thành viên thực hiện nhiệm vụ sản xuất kinh doanh theo định hướng chiến lược như sau:&nbsp;&nbsp;</p><p><strong>1) THACO AUTO:</strong>&nbsp;Thực hiện chiến lược tham gia chuỗi giá trị toàn cầu theo phương thức hợp tác với các thương hiệu ô tô quốc tế, đồng thời sản xuất linh kiện phụ tùng nhằm gia tăng tỷ lệ nội địa hóa và hàm lượng sản xuất tại Việt Nam. Trong đó, Sản xuất kinh doanh đầy đủ các chủng loại sản phẩm: xe du lịch, xe bus, xe tải, xe chuyên dụng với các thương hiệu Ô tô quốc tế và thương hiệu THACO. Đứng đầu thị trường trong nước và xuất khẩu.&nbsp;</p><p><strong>2) THACO AGRI:</strong>&nbsp;Đầu tư sản xuất Nông nghiệp quy mô lớn theo phương pháp quản trị công nghiệp trên nền tảng hữu cơ; Tập trung sản xuất các loại trái cây chủ lực là Chuối, Xoài và các loại trái cây khác; cây công nghiệp và lâm nghiệp; chăn nuôi bò sinh sản, bò thịt; sản xuất heo giống, heo thịt; đầu tư phát triển sản xuất thực phẩm từ lúa.&nbsp;</p><p><strong>3) THADICO:</strong>&nbsp;Phát triển các dự án Khu công nghiệp, Đô thị, Bất động sản với hệ thống Hạ tầng giao thông đồng bộ, sử dụng năng lượng tái tạo, hình thành hệ sinh thái xanh, bền vững. Đồng thời hỗ trợ cho các tổng công ty khác trong THACO về đầu tư và xây dựng.&nbsp;</p><p><strong>4) THILOGI:</strong>&nbsp;Là đầu mối tổ chức và cung ứng dịch vụ logistics trọn gói phục vụ cho THACO và đối tác, khách hàng bên ngoài.&nbsp;&nbsp;</p><p><strong>5) THISO:&nbsp;</strong>thực hiện kinh doanh thương mại, dịch vụ trên cơ sở mặt bằng của các bất động sản do THADICO sở hữu và phát triển, là đầu ra sản phẩm nông nghiệp của Thagrico và tích hợp kinh doanh thương mại, dịch vụ với tổ hợp showroom xe trên quan điểm “Một điểm dừng - nhiều dịch vụ”.</p><p>Định hướng kế hoạch năm 2021 của THACO và các Tổng công ty thành viên như sau:</p><p><strong>1. TỔNG CÔNG TY THACO AUTO</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Đây là lĩnh vực sản xuất kinh doanh khởi đầu và chính yếu của THACO, có thể nói là dựa trên sự hiệu quả, năng lực và kinh nghiệm của sản xuất kinh doanh ô tô và cơ khí để THACO chúng ta tự tin phát triển thêm các ngành nghề khác.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Bước vào năm 2021, THACO AUTO đã hoàn toàn hoạt động như một tổng công ty độc lập với mô hình sản xuất kinh doanh và quản trị chuẩn mực có năng lực cạnh tranh cao cùng với kế hoạch hoạt động được hoạch định một cách kỹ lưỡng có tính khả thi cao là:</p><p><strong>1.1. Kế hoạch năm 2021:</strong></p><p><strong>a) Kinh doanh xe:</strong>&nbsp;Điều hành hoạt động Sản xuất - Kinh doanh Ô tô tăng trưởng ổn định, bền vững và phục vụ khách hàng một cách tốt nhất. Giữ vững vị trí đứng đầu thị trường xe ô tô du lịch tại Việt Nam với Thương hiệu Kia đóng vai trò chủ lực về doanh số, cùng với sự ổn định của doanh số Mazda và gia tăng gấp đôi doanh số Peugeot. Nâng cao thương hiệu và doanh số của BMW - MINI.</p><p>Chỉ tiêu doanh số tối thiểu tại thị trường nội địa là 111.000 ô tô gồm: 84.000 xe du lịch (bao gồm: hơn 45.000 xe Kia, 29.000 xe Mazda, 8.000 xe Peugeot, 2.000 xe BMW, 220 xe MINI) và 27.000 xe tải, xe bus (bao gồm 25.400 xe tải, 750 xe bus và 850 xe Minibus). Đồng thời, đẩy mạnh hoạt động xuất khẩu sang các thị trường hiện hữu như Thái Lan, Myanmar, Philippine, Mỹ, Nhật và mở rộng sang các nước trong khu vực ASEAN, Doanh số xuất khẩu 2.500 xe (bao gồm: gần 1.800 xe du lịch, hơn 70 xe Tải &amp; Bus, hơn 630 Sơmi rơmoóc). Như vậy, tổng doanh số xe trong năm 2021 là 113.500 xe các loại.</p><p>&nbsp;Phát triển sản phẩm mới và nâng cấp các sản phẩm xe du lịch với đầy đủ các phân khúc sản phẩm; phát triển các sản phẩm xe tải, bus, xe chuyên dụng theo yêu cầu riêng lẻ của khách hàng.</p><p>Tiếp tục đầu tư phát triển các mô hình điểm bán hàng mang tính tích hợp như: Tổ hợp showroom ô tô nhiều thương hiệu; Đại siêu thị kết hợp tổ hợp showroom ô tô, Trung tâm thương mại kết hợp tổ hợp showroom ô tô; các showroom ô tô vệ tinh. Trong năm 2021 phát triển mới 51 điểm bán hàng, nâng tổng số đạt 363 showroom trên toàn quốc.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Phát triển sản xuất kinh doanh các sản phẩm linh kiện phụ tùng ô tô và ngoài ngành ô tô và các sản phẩm cơ khí bao gồm: Cơ khí ô tô, Cơ khí Nông lâm nghiệp, Cơ khí Xây dựng, Thiết bị công nghiệp và gia công cơ khí. Đồng thời, đẩy mạnh kinh doanh cho khách hàng bên ngoài và tham gia chuỗi giá trị toàn cầu cung cấp sản phẩm Linh kiện phụ tùng ô tô và cơ khí cho thị trường nội địa và xuất khẩu (Hàn Quốc, Nhật Bản, Úc và các nước ASEAN). Chỉ tiêu doanh thu nội địa của linh kiện phụ tùng và Cơ khí đạt hơn 6.500 tỷ đồng, trong đó: doanh thu linh kiện phụ tùng là 4.100 tỷ đồng và cơ khí là 2.400 tỷ đồng. Doanh thu xuất khẩu Linh kiện phụ tùng và Cơ khí: 30 triệu USD (trong đó linh kiện phụ tùng 18 triệu USD và cơ khí là 12 triệu USD).&nbsp;&nbsp;</p><p>b) Kinh doanh dịch vụ phụ tùng&nbsp;với chỉ tiêu doanh thu Dịch vụ sửa chữa năm 2021 tối thiểu là 5.000 tỷ đồng (bao gồm 3.900 tỷ đồng doanh thu xe du lịch; 1.100 tỷ đồng doanh thu xe tải, bus). Đảm bảo hoạt động hiệu quả và đồng bộ với kinh doanh xe, phục vụ tối đa nhu cầu khách hàng. Phát triển đa dạng các loại hình dịch vụ sửa chữa, bảo dưỡng nhanh với chất lượng phục vụ chuyên nghiệp. Phát triển mạng lưới xưởng dịch vụ rộng khắp trong đó có 2 mô hình mới xưởng dịch vụ trung tâm và xưởng dịch vụ vệ tinh.</p><p><strong>1.2. Công tác quản trị:&nbsp;</strong>Kiện toàn bộ máy tổ chức THACO AUTO theo cấu trúc, sơ đồ tổ chức trên cơ sở mô hình quản trị mới từ sản xuất đến phân phối và bán lẻ. Đặc biệt, hoàn tất việc thành lập các Công ty TNHH MTV trực thuộc THACO AUTO ở các tỉnh, thành phố (thay thế cho các chi nhánh hiện hữu) để quản trị tốt hoạt động kinh doanh một cách toàn diện qua đó triển khai phát triển các chi nhánh tại từng địa bàn thuộc tỉnh, thành phố. Triển khai chiến lược và kế hoạch chuyển đổi số theo lộ trình phù hợp, trên toàn chuỗi giá trị (từ R&amp;D - Sản xuất - Kinh doanh) dựa trên nền tảng quản trị mang tính tích hợp cao và thực hiện mục tiêu là đáp ứng nhu cầu riêng lẻ của khách hàng, gia tăng năng lực cạnh tranh, năng lực quản trị nhằm mang lại lợi ích cho khách hàng hơn nữa.</p><p><strong>2. TỔNG CÔNG TY THACO AGRI</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Đây là lĩnh vực sản xuất kinh doanh rất mới của THACO và chúng ta đã chọn cách làm lớn ngay từ đầu với mức đầu tư rất lớn với tổng mức đầu tư hơn 43.000 tỷ đồng. Do vậy, năm 2021 sẽ là năm toàn THACO tiếp tục tập trung mọi nguồn lực cho Thagrico và Hoàng Anh Agrico (HNG) đảm bảo hoạt động hiệu quả, có lãi trong năm nay và những năm tiếp theo với định hướng cụ thể là:</p><p><strong>2.1. Kế hoạch năm 2021:</strong></p><p><strong>a) Đối với cây ăn trái:</strong>&nbsp;Tập trung chăm sóc, kiểm soát dịch bệnh vườn cây hiện hữu của HNG và của Thagrico vừa mua lại của HNG&nbsp; để ổn định và tiến đến nâng cao chất lượng và năng suất trên cơ sở kinh nghiệm của Thagrico tại các vườn cây đã mua của HNG trước đây như: Tăng cường sử dụng phân bón hữu cơ để tái tạo đất, đồng thời quy hoạch và đầu tư hệ thống hạ tầng kỹ thuật (điện, nước, giao thông) và các công trình trên đất (kho, nhà ở công nhân, văn phòng &amp; nhà ở cán bộ nhân viên).</p><p>Kế hoạch đầu tư trồng mới gần 6.400 ha, nâng tổng diện tích trồng trọt cây ăn trái lên 30.850 ha (bao gồm: 15.900 ha chuối, 7.900 ha xoài, gần 600 ha dứa và 6.500 ha cây ăn trái khác).</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Triển khai đầu tư xây dựng nhà máy chế biến trái cây để cung cấp nguyên liệu sản xuất thực phẩm và các sản phẩm trái cây chế biến cho thị trường trong nước và xuất khẩu.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Kế hoạch thu hoạch năm 2021 đạt 564.000 tấn trái cây các loại với doanh thu xuất khẩu là 7.038 tỷ đồng.</p><p>&nbsp; &nbsp; &nbsp; &nbsp;<strong>&nbsp;&nbsp;b) Đối với hoạt động chăn nuôi bò:&nbsp;</strong>Đầu tư trang trại, chăn nuôi bò sinh sản theo mô hình bán chăn thả tại Gia Lai, Đăk Lăk và Lào; Tổ chức quản trị chăn nuôi theo chuyên môn hóa với quy mô lớn; Hoàn thiện quy trình, kỹ thuật chăn nuôi. Đầu tư nông trường cỏ với lịch trình thu hoạch đồng bộ với kế hoạch phát triển đàn; Hoàn thiện kỹ thuật chế biến thức ăn đảm bảo sản lượng, chất lượng, đáp ứng nhu cầu dinh dưỡng cho đàn bò. Chăn nuôi bò thịt vỗ béo tập trung để cung cấp bò thịt chất lượng cao cho thị trường nội địa.&nbsp;</p><p>Kế hoạch năm 2021 sẽ phát triển đàn lên hơn 73.000 con, bao gồm: 20.800 con bò vỗ béo và 52.300 con bò sinh sản. Doanh thu bán hàng là hơn 800 tỷ đồng.</p><p><strong>c) Đối với hoạt động chăn nuôi heo:</strong>&nbsp;Tập trung chăm sóc đàn heo giống hiện hữu và tiếp tục nhập khẩu heo giống cụ kỵ từ Đan Mạch để phát triển quy mô đàn, đáp ứng nhu cầu của các trại chăn nuôi trong hệ thống và cung cấp heo giống ra thị trường. Đầu tư trại chăn nuôi heo giống (cụ kỵ, ông bà), trại heo nái - heo thịt tại các vùng Tây Nam Bộ, Đông Nam Bộ và miền Trung, Tây Nguyên. Trong năm 2021, phát triển đàn heo lên hơn 250.000 con trong đó: heo cụ kỵ hơn 10.000 con, heo bố mẹ và heo nuôi thịt hơn 240.000 con. Doanh thu hơn 700 tỷ đồng.</p><p><strong>2.2. Công tác quản trị:&nbsp;</strong></p><p>Hoàn thiện cấu trúc và sơ đồ tổ chức THACO AGRI, kiện toàn bộ máy nhân sự đáp ứng triển khai kế hoạch năm 2021 và tổ chức quản trị theo ba cấp.&nbsp;</p><p>1. Ban điều hành Tổng công ty THACO AGRI, lãnh đạo các Khối, Tổng công ty thành viên và lãnh đạo các Ban nghiệp vụ quản trị, nghiệp vụ chuyên ngành tại văn phòng HCM và văn phòng Gia Lai;</p><p>2. Ban lãnh đạo các Khu liên hợp nông nghiệp tại Campuchia, Lào, Cụm nông nghiệp Tây Nguyên, lãnh đạo các Công ty trực thuộc các phòng, Ban quản trị nghiệp vụ theo khu vực sản xuất;&nbsp;</p><p>3. Lãnh đạo Cụm xí nghiệp, xí nghiệp, nông trường, trang trại, trại chăn nuôi và các nhà máy sản xuất, chế biến cùng các phòng/bộ phận quản trị nghiệp vụ trực tiếp điều hành sản xuất.&nbsp;</p><p>Các Khối và Ban nghiệp vụ chuyên ngành tập trung hoàn thiện các quy định, quy trình, tiêu chuẩn và định mức trong sản xuất trồng trọt, chăn nuôi và quản trị hoạt động theo chuyên môn hóa, đồng thời có kế hoạch đào tạo chuyên môn, trình độ kỹ thuật cho đội ngũ quản lý, giám sát sản xuất.</p><p>Các Ban nghiệp vụ quản trị tập trung xây dựng, ban hành các quy định, quy trình “khung” trên toàn hệ thống để các Khối triển khai chi tiết theo thực tế sản xuất như là các chính sách về quản trị hiệu quả công việc theo KPI; quản trị chi phí và hiệu quả sản xuất theo từng đơn vị.</p><p><strong>3. TỔNG CÔNG TY THADICO</strong></p><p>&nbsp; &nbsp; &nbsp; &nbsp; Là tổng công ty chịu trách nhiệm tư vấn và quản lý về xây dựng cho các tổng công ty khác trong THACO, đồng thời tự đầu tư trong lĩnh vực hạ tầng, đô thị và bất động sản với định hướng là:</p><p><strong>3.1. Kế hoạch năm 2021:&nbsp;</strong></p><p><strong>a) Các dự án của THACO AUTO:</strong>&nbsp;Tập trung thực hiện công tác tư vấn và quản lý các dự án phục vụ cho lĩnh vực Ô tô &amp; Cơ khí của THACO AUTO: 51 showroom, cụm showroom, tổ hợp showroom ô tô.</p><p><strong>b) Các dự án của THACO AGRI:</strong>&nbsp;Đầu tư xây dựng hệ thống hạ tầng kỹ thuật (điện, nước, giao thông) và các công trình trên đất (kho, nhà ở công nhân, văn phòng &amp; nhà ở cán bộ nhân viên) cho các khu liên hợp Snoul, khu liên hợp Kounmon của Thagrico tại Campuchia và của HAGL Agrico tại Lào. Hoàn thiện đưa vào khai thác, vận hành Trại chăn nuôi heo giống công nghệ cao ở An Giang, Bình Định. Triển khai thi công xây dựng Trang trại chăn nuôi heo tại Gia Lai; Hoàn thiện trang trại Bò IA Puch tại Gia Lai. Triển khai quy hoạch, thiết kế, thi công Trang trại bò tại ĐăkLăk.&nbsp;&nbsp;</p><p><strong>c) Các dự án Khu công nghiệp:&nbsp;</strong>Tiếp tục hoàn thiện các thủ tục pháp lý và triển khai thi công hệ thống hạ tầng KCN Nông Lâm Nghiệp (451ha) và Khu công nghiệp Cơ khí Ô tô mở rộng tại Chu Lai - Quảng Nam, đảm bảo đủ điều kiện khởi công các Nhà máy của THACO AUTO và THACO AGRI. Đồng thời triển khai thi công kết cấu hạ tầng KCN chuyên nông nghiệp THACO - Thái Bình (194 ha), được định hướng là trung tâm sản xuất lương thực thực phẩm của tỉnh Thái Bình và đồng bằng sông Hồng.</p><p><strong>d) Dự án Khu phức hợp Myanmar:</strong>&nbsp;Đẩy nhanh công tác thi công hoàn thiện căn hộ Block B1 để bàn giao cho khách hàng. Tiếp tục triển khai công tác thiết kế, hoàn thiện các thủ tục pháp lý để triển khai thi công Giai đoạn 2 của dự án.</p><p><strong>e) Tại khu đô thị Sala (Tp. HCM):</strong>&nbsp;Tập trung thi công hoàn thiện Trung tâm Thương mại SOCAR để khai trương và đưa vào hoạt động vào cuối năm 2021.</p><p><strong>3.2. Công tác quản trị:&nbsp;</strong>Tiếp tục rà soát, chuẩn hoá hệ thống quy định, quy trình nội bộ; xây dựng và ban hành các quy định, quy trình tác nghiệp giữa THADICO và các Tổng Công ty trực thuộc THACO Group trong thực hiện các dự án Xây dựng cơ bản; Tuyển dụng các vị trí chủ chốt để hoàn thiện hệ thống Cấu trúc - Sơ đồ tổ chức, đồng thời tập trung công tác đào tạo, huấn luyện, từng bước hình thành bộ máy nhân sự khung cho năm 2021 và các giai đoạn tiếp theo. Tiếp tục triển khai lộ trình chuyển đổi số theo định hướng của Tập đoàn, trong đó tập trung ứng dụng các giải pháp Công nghệ thông tin mang tính tích hợp, cấp thiết phục vụ hoạt động sản xuất kinh doanh và công tác quản trị.</p><p><strong>4. TỔNG CÔNG TY THILOGI</strong></p><p><strong>4.1. Kế hoạch năm 2021:&nbsp;</strong></p><p>Đẩy mạnh phát triển các tuyến vận tải qua cảng Chu Lai để tập trung chân hàng. Tập trung vào các giải pháp thực hiện giảm chi phí logistics cho Nông nghiệp của THACO AGRI và Ô tô của THACO, đồng thời phát triển kinh doanh ra bên ngoài với tỷ trọng cao hơn là:</p><p><strong>a) Về logistics cho ô tô:</strong>&nbsp;Liên kết, hợp tác trực tiếp với các hãng tàu, đối tác để tổ chức vận chuyển 50.200 container vật tư, linh kiện phụ tùng, linh kiện CKD về Chu Lai và giao gần 115.000 xe thành phẩm đến các đại lý.</p><p><strong>b) Về logistics cho nông nghiệp:</strong>&nbsp;Hoàn thiện từng dịch vụ của chuỗi Logistics trọn gói cho trái cây và vật tư nông nghiệp nhằm tối ưu hóa các nguồn lực trên toàn chuỗi, đảm bảo tiêu chuẩn chất lượng dịch vụ và giảm chi phí logistics cho nông nghiệp. Kế hoạch năm 2021 vận chuyển 28.600 container trái cây tươi xuất khẩu và và 12.300 container vật tư nông nghiệp đối lưu hai chiều. Đầu tư và đưa vào khai thác phương tiện chuyên dụng để vận chuyển bò, heo và thức ăn chăn nuôi với kế hoạch trong năm 2021 là 160.000 con.</p><p>&nbsp;Đồng thời, tiếp tục đẩy mạnh khai thác, phát triển khách hàng mới bên ngoài, gia tăng sản lượng hàng hóa qua cảng Chu Lai lên 4 triệu tấn/năm trong năm 2021.&nbsp;&nbsp;</p><p><strong>4.2. Công tác quản trị:&nbsp;</strong></p><p>Các nghiệp vụ phổ quát và nghiệp vụ quản trị của THILOGI sẽ được tổ chức sử dụng chung các nghiệp vụ với văn phòng THACO Chu Lai, riêng các Văn phòng THILOGI tại TP Hồ Chí Minh và Hà Nội sẽ có các nghiệp vụ quản trị chuyên ngành Logistics để quản trị các hoạt động theo địa bàn. Các phòng Nghiệp vụ này được tổ chức một cách tinh gọn và linh hoạt theo quy mô từng đơn vị và khối lượng công việc để bố trí phù hợp, thông qua tác nghiệp với Phòng Quản lý Giao nhận Vận chuyển thuộc THACO AGRI và THACO AUTO.</p><p>Ứng dụng số hóa vào quản lý, khai thác các dịch vụ logistics và quản trị hoạt động nhằm tối ưu hóa các nguồn lực (bên trong và bên ngoài), nâng cao khả năng kết nối đáp ứng nhu cầu đa dạng của các khách hàng.&nbsp;</p><p><strong>5. TỔNG CÔNG TY THISO:</strong></p><p>&nbsp;Mô hình kinh doanh của THISO gồm: Trung tâm hội nghị - tiệc cưới, Siêu thị, Vui chơi giải trí trong nhà và ẩm thực, được đầu tư và quản trị thông qua các hình thức nhượng quyền, liên doanh, liên kết hoặc tự đầu tư phát triển.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; THISO định hướng triển khai thực hiện trên các bất động sản do THADICO sở hữu và phát triển trên quan điểm “Một điểm dừng - nhiều dịch vụ”, bao gồm các mô hình:&nbsp;</p><p>1) Trung tâm thương mại cao cấp nằm trong các dự án phức hợp tại các thành phố lớn, kết hợp tháp văn phòng, căn hộ, khách sạn cao cấp, và trung tâm hội nghị cao cấp.&nbsp;</p><p>2) Mô hình Đại siêu thị kết hợp showroom ô tô, cửa hàng phụ kiện &amp; lifestyle, trung tâm hội nghị - tiệc cưới trung cấp.</p><p>Năm 2021 tập trung triển khai dự án và đưa vào hoạt động thí điểm Trung tâm thương mại (TTTM) SOCAR SALA tại Khu đô thị Sala, TP Hồ Chí Minh, và tiếp đến sẽ triển khai tại TTTM SOCAR tại Chu Lai (Quảng Nam), Đà Nẵng và các dự án TTTM ở các địa phương khác trên cả nước.&nbsp;</p><p><strong>6. THACO CHU LAI</strong></p><p><strong>6.1. Định hướng kế hoạch năm 2021:</strong></p><p>Đầu tư phát triển THACO CHU LAI trở thành Hệ sinh thái đa ngành (bao gồm: Sản xuất ô tô, cơ khí và công nghiệp hỗ trợ, logistics, Nông Lâm nghiệp, Đô thị, thương mại và du lịch công nghiệp) có hạ tầng đồng bộ, sinh thái và thông minh tại Quảng Nam và miền Trung Việt Nam với các định hướng như sau:</p><p><strong>Sản xuất Ô tô &amp; Cơ khí:</strong>&nbsp;Đẩy mạnh xuất khẩu ô tô và linh kiện phụ tùng và phát triển các sản phẩm cơ khí (Cơ khí ô tô &amp; xe máy, Cơ khí Nông lâm nghiệp, Cơ khí Xây dựng, Thiết bị công nghiệp và gia công cơ khí cho khách hàng bên ngoài).</p><p><strong>Logistics tại Chu Lai:</strong>&nbsp;Phát triển cảng Chu Lai trở thành Trung tâm Logistics miền Trung, cung cấp dịch vụ logistics trọn gói cho khách hàng, từng bước đưa cảng Chu Lai trở thành cửa ngõ trung chuyển hàng hóa xuất nhập khẩu quốc tế. Năm 2021, triển khai thủ tục đầu tư xây dựng khu phi thuế quan và bến cảng mở rộng có khả năng tiếp nhận tàu có tải trọng lên đến 5 vạn tấn. Đồng thời tiếp tục đầu tư nâng cấp phương tiện, thiết bị và mở rộng bãi Cảng để nâng cao năng lực lưu trữ, xếp dỡ hàng hóa.&nbsp;</p><p><strong>Nông lâm nghiệp tại Chu Lai:</strong>&nbsp;Phát triển Khu công nghiệp Nông Lâm nghiệp trở thành Trung tâm sản xuất chế biến nông lâm nghiệp của tỉnh Quảng Nam và khu vực miền Trung. Trong năm 2021 sẽ hoàn thành giải phóng mặt bằng, tiếp tục thực hiện các thủ tục pháp lý và tổ chức triển khai thi công san nền và đầu tư một phần hệ thống giao thông hạ tầng kỹ thuật theo chiến lược kinh doanh và nhu cầu của THACO AGRI.</p><p><strong>Đầu tư xây dựng tại Chu Lai:</strong>&nbsp;Tiếp tục nghiên cứu đầu tư các dự án động lực có ý nghĩa chiến lược tại Khu kinh tế mở Chu Lai, tỉnh Quảng Nam; góp phần hoàn thiện hạ tầng giao thông, phát triển kinh tế - xã hội tại địa phương và thu hút nguồn nhân lực đến với Quảng Nam.&nbsp;</p><p><strong>Thương mại tại Chu Lai:&nbsp;</strong>Thi công hoàn thiện Tòa nhà điều hành THACO tại Chu Lai, đồng thời, nghiên cứu xây dựng phương án kinh doanh - thương mại - dịch vụ từng phần, trước mắt là phục vụ nhu cầu giao lưu kết nối cộng đồng, vui chơi giải trí, ẩm thực cho CB.CNV THACO Chu Lai và nhân dân huyện Núi Thành.</p><p><strong>6.2. Công tác quản trị:&nbsp;</strong></p><p>Tiếp tục nâng cấp hoạt động quản trị chuỗi cung ứng và tăng cường quản trị mối quan hệ với đối tác, theo dõi chặt chẽ năng lực của nhà cung cấp, hạn chế các rủi ro trong việc cung ứng vật tư linh kiện đáp ứng kịp thời sản xuất kinh doanh; kiểm soát và nâng cao chất lượng sản phẩm. Đẩy nhanh tiến độ áp dụng số hóa trong sản xuất kinh doanh và quản trị theo hướng kết nối xuyên suốt từ khách hàng đến nhà máy, nhằm gia tăng năng lực sản xuất và đáp ứng theo yêu cầu riêng biệt của khách hàng. Kiện toàn hệ thống quản trị tại THACO Chu Lai theo hướng toàn diện và hiệu quả, phù hợp với chiến lược và xu hướng đổi mới công nghệ.</p><p><strong>7. CÔNG TÁC QUẢN TRỊ CỦA THACO GROUP:</strong></p><p>Thực hiện chiến lược đa ngành từ năm 2020, THACO đã hoạt động kinh doanh theo mô hình Tập đoàn công nghiệp đa ngành với cấu trúc gồm 5 Tổng công ty thành viên hoạt động trên các lĩnh vực sản xuất kinh doanh bổ trợ cho nhau phát triển bền vững. THACO quản trị và điều hành các Tổng công ty thông qua các nghiệp vụ quản trị, dựa trên quan điểm: “Chuyên biệt để hiệu quả, tích hợp để tạo lợi thế”. Bao gồm các nghiệp vụ quản trị chỉ tổ chức tại THACO và phân công nhân sự phụ trách các Tổng công ty; các nghiệp vụ quản trị vừa được tổ chức tại THACO, đồng thời tổ chức tại các Tổng công ty; riêng nghiệp vụ chuyên ngành chỉ được tổ chức tại các Tổng công ty và được hỗ trợ, tư vấn bởi các chuyên gia tại THACO.&nbsp;</p><p>Yêu cầu Lãnh đạo các Tổng công ty điều hành hoạt động sản xuất kinh doanh thông qua các nghiệp vụ và nhân sự các Nghiệp vụ phải hiểu rõ hoạt động sản xuất kinh doanh của các Tổng công ty để tham mưu cho Lãnh đạo và tham gia quản trị; Lãnh đạo nghiệp vụ cần có tư duy quản trị hệ thống và phương pháp quản trị công nghiệp, có thái độ tích cực để ứng xử và quản trị sự thay đổi, luôn được đào tạo và rèn luyện để phát triển năng lực mới phù hợp xu thế thời đại.</p><p>Năm 2021, là năm THACO tập trung vào công tác quản trị để thực hiện thành công các mục tiêu đã đề ra, đặc biệt là quản trị hệ thống, bao gồm: Cấu trúc, sơ đồ tổ chức, hệ thống các quy chế, quy định, quy trình,… đảm bảo tính khoa học và thực tiễn, đáp ứng yêu cầu sản xuất kinh doanh trong tình hình mới.</p><p>&nbsp;<i><strong>Anh chị em cán bộ nhân viên thân mến!</strong></i></p><p>Năm 2021, được dự báo là một năm đầy thách thức, đòi hỏi lãnh đạo và toàn thể CB-NV có quyết tâm cao và nỗ lực nhiều hơn nữa để thực hiện các mục tiêu theo định hướng kế hoạch, nhằm hiện thực hóa tầm nhìn “Trở thành tập đoàn công nghiệp đa ngành hàng đầu khu vực ASEAN trong bối cảnh hội nhập khu vực và thế giới” trên nền tảng công nghiệp có được từ sản xuất kinh doanh ô tô và cơ khí. Đây là đặc tính ưu việt mà chúng ta có thể nhận thấy từ những tập đoàn đa quốc gia và các nước công nghiệp trên thế giới mà THACO chúng ta đã may mắn có xuất phát điểm và kinh nghiệm là Công ty công nghiệp đã phát triển bền vững trong thời gian qua. Do vậy, chúng ta hãy tự tin và kiên định đi theo con đường quản trị theo phương pháp công nghiệp một cách phù hợp ở mọi phân khúc trong chuỗi giá trị và ở các lĩnh vực ngành nghề mà chúng ta đang thực hiện trên cơ sở là:&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mỗi CB-NV cần có thái độ làm việc tích cực, ứng xử chuẩn mực vì tập thể; có tác phong công nghiệp và tính kỷ luật cao, góp phần xây dựng Môi trường làm việc “Văn hóa - Thuận tiện”.&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mỗi CB-NV và từng đơn vị, phòng, ban, bộ phận cần hiểu rõ trách nhiệm và chức năng nhiệm vụ của mình, để tác nghiệp và vận hành bộ máy quản trị một cách nhịp nhàng, khoa học nhằm tạo ra năng suất làm việc và hiệu quả cao nhất.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Và hơn tất cả là Lãnh đạo các cấp phải gương mẫu, đồng thời chịu trách nhiệm với CB-NV do mình quản lý trong việc biên soạn và thực hiện các nội quy, quy định của THACO và các Tổng công ty, Văn phòng, Nhà máy, Chi nhánh Công trường, Nông trường, Trang trại.</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Tôi cam kết là sẽ nỗ lực để lãnh đạo điều hành thực hiện chiến lược của THACO trong giai đoạn phát triển đa ngành như đã đề ra, bao gồm mục tiêu và nền tảng quản trị (bao gồm: truyền thống và số hóa) phù hợp với xu thế, hướng đến phát triển bền vững trong bối cảnh hội nhập khu vực và thế giới mà năm 2021 là năm khởi đầu. Rất mong toàn thể CB-NV hãy đồng hành cùng tôi trong hành trình mới đầy thách thức này.&nbsp;&nbsp;</p><p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Chào thân ái và đoàn kết!</p><p>CHỦ TỊCH HĐQT</p><p><a href=\"https://www.thacogroup.vn/storage/truyen-thong/thong-diep/2021/chu-ky-chu-duong-3-1-1.png\"><img src=\"https://www.thacogroup.vn/storage/truyen-thong/thong-diep/2021/chu-ky-chu-duong-3-1-1.png\" alt=\"chu ky chu duong_3_1 (1)\" width=\"170\" height=\"97\"></a></p><p>TRẦN BÁ DƯƠNG</p><p>&nbsp;</p>', '[\"\"]', 'public/news//Hm4sTT3LS1nicyKAUNuUZ4jVFyYWtXHz8d7gpw5n.jpg', 'thuchuctetcuachutich', 1, '2023-11-28 18:43:55', '2023-11-28 18:43:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aimee Hill', 'franecki.maya@example.org', '2023-11-27 19:09:36', '$2y$12$Yr95XVPm/g/H0omz2JfP8.hYZl3FaFYI5h9eXzBUJtzjQZkjjho72', '1', 'BPNnuUshQV', '2023-11-27 19:09:36', '2023-11-27 19:09:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `achievements`
--
ALTER TABLE `achievements`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `activation_fields`
--
ALTER TABLE `activation_fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activation_fields_field_id_foreign` (`field_id`);

--
-- Chỉ mục cho bảng `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `development_processes`
--
ALTER TABLE `development_processes`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `fields`
--
ALTER TABLE `fields`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fields_belong_to_foreign` (`belong_to`);

--
-- Chỉ mục cho bảng `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `imprints`
--
ALTER TABLE `imprints`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `leaders`
--
ALTER TABLE `leaders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `letters`
--
ALTER TABLE `letters`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `magazines`
--
ALTER TABLE `magazines`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `main_values`
--
ALTER TABLE `main_values`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `music_tranditions`
--
ALTER TABLE `music_tranditions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `recruits`
--
ALTER TABLE `recruits`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `share_holders`
--
ALTER TABLE `share_holders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tidings`
--
ALTER TABLE `tidings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tidings_field_id_foreign` (`field_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `achievements`
--
ALTER TABLE `achievements`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `activation_fields`
--
ALTER TABLE `activation_fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT cho bảng `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `development_processes`
--
ALTER TABLE `development_processes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `fields`
--
ALTER TABLE `fields`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `imprints`
--
ALTER TABLE `imprints`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `leaders`
--
ALTER TABLE `leaders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `letters`
--
ALTER TABLE `letters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `magazines`
--
ALTER TABLE `magazines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `main_values`
--
ALTER TABLE `main_values`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `music_tranditions`
--
ALTER TABLE `music_tranditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `recruits`
--
ALTER TABLE `recruits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `share_holders`
--
ALTER TABLE `share_holders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tidings`
--
ALTER TABLE `tidings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `activation_fields`
--
ALTER TABLE `activation_fields`
  ADD CONSTRAINT `activation_fields_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `fields`
--
ALTER TABLE `fields`
  ADD CONSTRAINT `fields_belong_to_foreign` FOREIGN KEY (`belong_to`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tidings`
--
ALTER TABLE `tidings`
  ADD CONSTRAINT `tidings_field_id_foreign` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
