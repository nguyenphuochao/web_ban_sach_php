-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 08, 2023 lúc 11:43 PM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `imgshare` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`id`, `group_id`, `name`, `image`, `sumary`, `content`, `alias`, `keyword`, `desc`, `imgshare`, `title`, `status`, `created_at`, `updated_at`) VALUES
(4, 52, 'Đời Không Plastic', 'doikhongstatus.png', 'Đây không phải là một cuốn sách chống lại vật liệu plastic, mà là hành trình đi qua một ngày điển hình trong đời sống của chúng ta với góc nhìn cởi mở hơn.', 'Nội dung chi tiết', '', '', 'Nội dung chi tiết', '', '', 0, '2023-04-08 21:26:49', NULL),
(5, 52, 'Sống Xanh Rồi Mới Sống Nhanh', 'add.png', '“Lối sống nào cũng là lựa chọn của mỗi người, nếu bạn cảm thấy cần có trách nhiệm hơn với chính mình, muôn loài và Trái Đất, hãy nghĩ về việc chọn Sống Xanh rồi mới Sống Nhanh!” - Mình là Hũ.', 'Nội dung chi tiết', '', '', 'Nội dung chi tiết', '', '', 0, '2023-04-08 21:27:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `article_groups`
--

CREATE TABLE `article_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `imgshare` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `article_groups`
--

INSERT INTO `article_groups` (`id`, `name`, `sumary`, `content`, `image`, `parent_id`, `alias`, `keyword`, `desc`, `imgshare`, `title`, `status`, `created_at`, `updated_at`) VALUES
(52, 'NHỮNG CUỐN SÁCH HAY VỀ MÔI TRƯỜNG XANH NHÂN NGÀY NƯỚC THẾ GIỚI', 'Sách hay nói về môi trường xanh', '', 'danhmuc_sach_1.jpg', 0, '', '', '', '', '', 1, '2023-04-07 13:11:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `authors`
--

INSERT INTO `authors` (`id`, `name`, `phone`, `avatar`, `address`, `email`, `sumary`, `status`, `created_at`, `updated_at`) VALUES
(7, 'Nguyễn Văn A', '0999999', '147142.png', '', 'b@gmail.com', 'Chuyên viết sách lập trình', 1, '2023-04-01 08:27:33', NULL),
(8, 'Nguyễn Văn B', '', '147142.png', '', '', 'Chuyên viết sách tuyện tranh', 1, '2023-04-01 08:28:21', NULL),
(9, 'Nguyễn Văn C', '', '147142.png', '', '', 'Chuyên viết sách kinh tế', 1, '2023-04-01 08:28:07', NULL),
(11, 'Bùi Văn D', '0584228904', '147142.png', 'Số 39 đường 204 cao lỗ,phường 4,quận 8', '', 'Viết về sách log lập trình', 1, '2023-04-08 05:10:48', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `imgshare` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `sumary`, `content`, `image`, `alias`, `keyword`, `desc`, `imgshare`, `title`, `parent_id`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Sách nấu ăn', 'Sách dạy nấu ăn ngon mỗi ngày', '', '', '', '', '', '', '', 0, 1, '2023-04-01 10:44:51', '2023-04-01 10:44:51'),
(12, 'Sách tiếng anh', 'Sách dạy tiếng anh mới nhất 2023', '', '', '', '', '', '', '', 0, 1, '2023-04-01 10:45:11', '2023-04-01 10:45:11'),
(14, 'Sách lập trình', 'Sách dạy về ngôn ngữ lập trình', '', '', '', '', '', '', '', 0, 1, '2023-04-01 10:45:23', '2023-04-01 10:45:23'),
(15, 'Sách kinh tế', 'Sách hướng dẫn kinh doanh', '', '', '', '', '', '', '', 0, 1, '2023-04-01 10:46:22', '2023-04-01 10:46:22'),
(16, 'Truyện tranh', 'Sách về truyện tranh mới 2023', '', '', '', '', '', '', '', 0, 1, '2023-04-01 10:46:43', '2023-04-01 10:46:43'),
(17, 'Sách vẽ', 'Sách chuyên về mỹ thuật', '', '', '', '', '', '', '', 0, 1, '2023-04-01 16:16:21', '2023-04-01 16:16:21'),
(18, 'Sách thiếu nhi', '', '', '', '', '', '', '', '', 0, 1, '2023-04-07 16:26:43', NULL),
(19, 'Sách địa lí', 'Sách nói về địa lí và quốc gia', '', '', '', '', '', '', '', 0, 1, '2023-04-08 21:14:50', NULL),
(20, 'Sách tiếng pháp', 'Sách nói về tiếng pháp', '', '', '', '', '', '', '', 0, 1, '2023-04-08 21:15:24', NULL),
(21, 'Sách công nghệ thông tin', 'Sách dành cho dân CNTT', '', '', '', '', '', '', '', 0, 1, '2023-04-08 21:16:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(2, 55, 58, 'Sách này có ship về cà mau không shop?', 1, '2023-04-08 04:38:35', NULL),
(4, 53, 53, 'Sách này hay quá shop ơi', 1, '2023-04-08 04:38:35', NULL),
(5, 52, 55, 'Sách này có phần MVC OOP không ạ?', 0, '2023-04-08 04:50:00', NULL),
(6, 61, 62, 'Sách này có phần ASP.NET MVC không ạ', 1, '2023-04-08 21:23:55', NULL),
(7, 59, 63, 'SÁch này dạy laravel phiên bản mấy vậy shop', 1, '2023-04-08 21:24:44', NULL),
(8, 60, 53, 'Sách này chi nhánh bên quận 8 còn hàng không ạ?', 1, '2023-04-08 21:25:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `gender`) VALUES
(1, 'Nguyễn Phước Hảo', 'hao@gmail.com', '0999999', 1),
(2, 'Trần Kim Thảo', 'thao@gmail.com', '0999999', 0),
(3, 'Nguyễn Lê Quang Hoàng', 'hoang@gmail.com', '0999999', 1),
(4, 'Phan Thanh Tuyến', 'tuyen@gmail.com', '0999999', 1),
(5, 'Nguyễn Ngọc Quang', 'quang@gmail.com', '0999999', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `functions`
--

CREATE TABLE `functions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `show_menu` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `allow` int(11) NOT NULL,
  `pos` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `functions`
--

INSERT INTO `functions` (`id`, `name`, `link`, `icon`, `status`, `show_menu`, `parent_id`, `allow`, `pos`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Tổng quan', '?controller=system&action=index', '#cil-speedometer', 1, 1, 0, 0, 0, 1, '2023-04-07 16:14:37', NULL),
(2, 'Quản lí user', '#', '#cil-user-follow', 1, 1, 0, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(3, 'Thêm', '?controller=user&action=create', '', 1, 1, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(4, 'Danh sách', '?controller=user&action=index', '', 1, 1, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(5, 'Xem chi tiết', '?controller=user&action=detail', '', 1, 0, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(6, 'Cập nhật', '?controller=user&action=update', '', 1, 0, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(7, 'Xóa', '?controller=user&action=delete', '', 1, 0, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(8, 'Đăng xuất', '?controller=user&action=logout', '', 1, 0, 2, 1, 1, 0, '2023-04-07 16:14:47', NULL),
(9, 'Phân quyền', '?controller=role&action=index', '', 1, 1, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(10, 'Xem danh sách các quyền', '?controller=role&action=edit', '', 1, 0, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(12, 'Cập nhật quyền', '?controller=role&action=update', '', 1, 0, 2, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(13, 'Quản lí sản xuất', '#', '#cil-puzzle', 1, 1, 0, 0, 2, 1, '2023-04-07 16:14:37', NULL),
(14, 'Quản lí sản phẩm', '#', '#cil-control', 1, 1, 13, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(15, 'Thêm', '?controller=product&action=create', '', 1, 1, 14, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(16, 'Danh sách', '?controller=product&action=index', '', 1, 1, 14, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(17, 'Xem chi tiết ', '?controller=product&action=detail', '', 1, 0, 14, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(18, 'Sửa', '?controller=product&action=update', '', 1, 0, 14, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(19, 'Xóa', '?controller=product&action=delete', '', 1, 0, 14, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(20, 'Quản lí nhà xuất bản', '#', '#cil-border-vertical', 1, 1, 13, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(21, 'Thêm', '?controller=supplier&action=create', '', 1, 1, 20, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(22, 'Danh sách', '?controller=supplier&action=index', '', 1, 1, 20, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(23, 'Xem chi tiết ', '?controller=supplier&action=detail', '', 1, 0, 20, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(24, 'Sửa', '?controller=supplier&action=update', '', 1, 0, 20, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(25, 'Xóa', '?controller=supplier&action=delete', '', 1, 0, 20, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(26, 'Quản lí nhà danh mục', '#', '#cil-3d', 1, 1, 13, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(27, 'Thêm', '?controller=category&action=create', '', 1, 1, 26, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(28, 'Danh sách', '?controller=category&action=index', '', 1, 1, 26, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(29, 'Xem chi tiết ', '?controller=category&action=detail', '', 1, 0, 26, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(30, 'Sửa', '?controller=category&action=update', '', 1, 0, 26, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(31, 'Xóa', '?controller=category&action=delete', '', 1, 0, 26, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(32, 'Quản lí nhà tác giả', '#', '#cil-user-x', 1, 1, 13, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(33, 'Thêm', '?controller=author&action=create', '', 1, 1, 32, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(34, 'Danh sách', '?controller=author&action=index', '', 1, 1, 32, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(35, 'Xem chi tiết ', '?controller=author&action=detail', '', 1, 0, 32, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(36, 'Sửa', '?controller=author&action=update', '', 1, 0, 32, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(37, 'Xóa', '?controller=author&action=delete', '', 1, 0, 32, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(38, 'Quản lí bán hàng', '#', '#cil-puzzle', 1, 1, 0, 0, 2, 1, '2023-04-07 16:14:37', NULL),
(39, 'Đơn hàng', '#', '#cil-cart', 1, 1, 38, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(40, 'Danh sách', '?controller=order&action=index', '', 1, 1, 39, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(41, 'Xem chi tiết ', '?controller=order&action=detail', '', 1, 0, 39, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(42, 'Sửa', '?controller=order&action=update', '', 1, 0, 39, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(43, 'Khách hàng', '#', '#cil-user-female', 1, 1, 38, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(44, 'Danh sách', '?controller=customer&action=index', '', 1, 1, 43, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(45, 'Xem chi tiết ', '?controller=customer&action=detail', '', 1, 0, 43, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(46, 'Sửa', '?controller=customer&action=update', '', 1, 0, 43, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(47, 'Quản lí tin tức', '#', '#cil-newspaper', 1, 1, 0, 0, 3, 1, '2023-04-07 16:14:37', NULL),
(48, 'Bài viết', '#', '#cil-newspaper', 1, 1, 47, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(49, 'Thêm', '?controller=article&action=create', '', 1, 1, 48, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(50, 'Danh sách', '?controller=article&action=index', '', 1, 1, 48, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(51, 'Xem chi tiết', '?controller=article&action=detail', '', 1, 0, 48, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(52, 'Cập nhật', '?controller=article&action=update', '', 1, 0, 48, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(53, 'Xóa', '?controller=article&action=delete', '', 1, 0, 48, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(54, 'Danh mục', '#', '#cil-newspaper', 1, 1, 47, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(55, 'Thêm', '?controller=article_group&action=create', '', 1, 1, 54, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(56, 'Danh sách', '?controller=article_group&action=index', '', 1, 1, 54, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(57, 'Xem chi tiết', '?controller=article_group&action=detail', '', 1, 0, 54, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(58, 'Cập nhật', '?controller=article_group&action=update', '', 1, 0, 54, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(59, 'Xóa', '?controller=article_group&action=delete', '', 1, 0, 54, 0, 1, 1, '2023-04-07 16:14:37', NULL),
(60, 'Quản lí bình luận', '#', '#cil-comment-bubble', 1, 1, 0, 0, 4, 1, '2023-04-08 04:30:26', NULL),
(61, 'Danh sách', '?controller=comment&action=index', '', 1, 1, 60, 0, 1, 1, '2023-04-08 04:27:14', NULL),
(62, 'Xóa', '?controller=comment&action=delete', '', 1, 0, 60, 0, 1, 1, '2023-04-08 04:30:50', NULL),
(63, 'Hệ thống', '#', '#cil-apps-settings', 1, 1, 0, 0, 5, 1, '2023-04-08 04:29:31', NULL),
(64, 'Log', '?controller=system&action=log', '', 1, 1, 63, 0, 1, 1, '2023-04-08 04:27:51', NULL),
(65, 'Cấu hình', '?controller=system&action=setting', '', 1, 1, 63, 0, 1, 1, '2023-04-08 04:28:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `total` double NOT NULL,
  `subtotal` double NOT NULL,
  `order_status` int(11) NOT NULL DEFAULT 0 COMMENT '0.Chưa giao hàng\r\n1.Đang giao\r\n2.Đã giao hàng\r\n3.Đã hủy đơn\r\n',
  `payment` varchar(255) NOT NULL,
  `shipping` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `code`, `order_date`, `total`, `subtotal`, `order_status`, `payment`, `shipping`) VALUES
(1, 1, '#9585', '2023-03-10 17:11:22', 360000, 0, 2, 'Thanh toán khi nhận hàng', '0'),
(4, 5, '#8218', '2023-04-07 10:23:43', 270000, 0, 3, 'Thanh toán khi nhận hàng', '0'),
(5, 3, '#9291', '2023-04-07 12:37:36', 560000, 0, 0, 'Thanh toán khi nhận hàng', '0'),
(6, 2, '#9123', '2023-04-03 23:20:06', 180000, 0, 0, 'Thanh toán khi nhận hàng', ''),
(7, 4, '#9230', '2023-04-08 23:20:20', 120000, 0, 1, 'Thanh toán online', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `price`) VALUES
(1, 1, 52, 2, 180000),
(19, 4, 53, 1, 180000),
(23, 4, 54, 1, 90000),
(24, 5, 55, 2, 160000),
(25, 5, 56, 2, 120000),
(26, 6, 54, 2, 90000),
(27, 7, 61, 1, 120000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `number_of_pages` int(11) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `sku` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` double NOT NULL,
  `images` varchar(255) DEFAULT NULL,
  `size` varchar(255) NOT NULL,
  `weight` double NOT NULL,
  `alias` text NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `imgshare` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `category_id`, `supplier_id`, `author_id`, `name`, `image`, `number_of_pages`, `sumary`, `content`, `sku`, `qty`, `price`, `images`, `size`, `weight`, `alias`, `keyword`, `desc`, `imgshare`, `title`, `status`, `created_at`, `updated_at`) VALUES
(52, 14, 4, 9, 'Lập trình PHP và Mysql', 'php.jpg', 260, '', '', '#9234', 100, 190000, '', '14,5x20,5 cm', 300, '', 'sach-lap-trinh', '', '', '', 0, NULL, '2023-04-01 10:37:47'),
(53, 15, 2, 8, 'Chiến lược marketing', 'sach-kinh-te.jpg', 190, '', '', '#9324', 100, 180000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-01 10:39:25'),
(54, 12, 4, 8, 'Sách tiếng anh lớp 12', 'tienganh12.jpg', 100, '', '', '#4678', 80, 90000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-01 10:41:57'),
(55, 16, 1, 7, 'Doremon tập 11', 'doremon.jpg', 100, '', '', '#7835', 100, 160000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-01 10:47:57'),
(56, 14, 3, 11, 'Lập trình SQL Server 2012', 'sql_sach.jpg', 100, '', '', '#1905', 80, 120000, '', '14,5x20,5 cm', 500, '', '', '', '', '', 0, NULL, '2023-04-01 10:49:20'),
(57, 14, 3, 8, 'Lập trình C', 'laptrinhc.jpg', 160, '', '', '#0193', 90, 190000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-01 16:18:16'),
(58, 14, 4, 7, 'Lập trình python', 'python_2.jpg', 100, '', '', '#8754', 90, 89000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-07 16:26:01'),
(59, 14, 25, 11, 'Lập trình Laravel', 'sach-laravel.jpg', 190, '', '', '#0239', 80, 200000, '', '14,5x20,5 cm', 300, '', '', '', '', '', 0, NULL, '2023-04-08 05:12:31'),
(60, 4, 21, 7, 'Món ăn ngon mỗi ngày', 'sachnauan.jpg', 190, '', '', '#9434', 100, 170000, '', '14,5x20,5 cm', 500, '', '', '', '', '', 0, NULL, '2023-04-08 21:13:25'),
(61, 21, 25, 11, 'Lập trình c sharp', 'laptrinhcsharp.jpg', 190, '', '', '#9319', 100, 120000, '', '14,5x20,5 cm', 300, 'sach-lap-trinh', 'lap-trinh', '', '', 'Sách lập trình', 0, NULL, '2023-04-08 21:19:40');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `func_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `user_id`, `func_id`) VALUES
(2506, 51, 1),
(2507, 51, 2),
(2508, 51, 3),
(2509, 51, 4),
(2510, 51, 5),
(2511, 51, 6),
(2512, 51, 7),
(2513, 51, 9),
(2514, 51, 10),
(2515, 51, 12),
(2516, 51, 13),
(2517, 51, 14),
(2518, 51, 15),
(2519, 51, 16),
(2520, 51, 17),
(2521, 51, 18),
(2522, 51, 19),
(2523, 51, 20),
(2524, 51, 21),
(2525, 51, 22),
(2526, 51, 23),
(2527, 51, 24),
(2528, 51, 25),
(2529, 51, 26),
(2530, 51, 27),
(2531, 51, 28),
(2532, 51, 29),
(2533, 51, 30),
(2534, 51, 31),
(2535, 51, 32),
(2536, 51, 33),
(2537, 51, 34),
(2538, 51, 35),
(2539, 51, 36),
(2540, 51, 37),
(2541, 51, 38),
(2542, 51, 39),
(2543, 51, 40),
(2544, 51, 41),
(2545, 51, 42),
(2546, 51, 43),
(2547, 51, 44),
(2548, 51, 45),
(2549, 51, 46),
(2550, 51, 47),
(2551, 51, 48),
(2552, 51, 49),
(2553, 51, 50),
(2554, 51, 51),
(2555, 51, 52),
(2556, 51, 53),
(2557, 51, 54),
(2558, 51, 55),
(2559, 51, 56),
(2560, 51, 57),
(2561, 51, 58),
(2562, 51, 59),
(2563, 51, 60),
(2564, 51, 61),
(2565, 51, 62),
(2566, 51, 63),
(2567, 51, 64),
(2568, 51, 65),
(2572, 58, 5),
(2573, 58, 6),
(2574, 59, 5),
(2575, 59, 6),
(2576, 60, 5),
(2577, 60, 6),
(2578, 61, 5),
(2579, 61, 6),
(2580, 62, 5),
(2581, 62, 6),
(2582, 53, 1),
(2583, 53, 5),
(2584, 53, 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `suppliers`
--

CREATE TABLE `suppliers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `alias` varchar(255) NOT NULL,
  `keyword` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `imgshare` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `email`, `image`, `logo`, `alias`, `keyword`, `desc`, `imgshare`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhà xuất bản kim đồng', '09999999', 'kimdong@gmail.com', 'kimdong.png', 'kimdong.png', '', '', 'Mô tả chi tiết', '', '', 1, '2023-04-01 05:44:40', '2023-04-01 05:44:40'),
(2, 'Nhà xuất bản Đại học kinh tế quốc dân', '09999999', 'kinhte@gmail.com', 'nxbhcm.png', '', '', '', 'Mô tả chi tiết', '', '', 1, '2023-04-01 05:49:39', '2023-04-01 05:49:39'),
(3, 'Nhà xuất bản Đại học Bách khoa Hà Nội', '09999999', 'bachkhoa@gmail.com', 'bachkoa.png', '', '', '', 'Mô tả chi tiết', '', '', 1, '2023-04-01 05:47:56', '2023-04-01 05:47:56'),
(4, 'Nhà xuất bản Đại học Quốc gia Hà Nội', '09999999', 'daihocquocgia@gmail.com', 'nxbhn.png', '', '', '', 'Mô tả chi tiết', '', '', 1, '2023-04-01 05:50:03', '2023-04-01 05:50:03'),
(21, 'Nhà xuất bản trẻ', '0584228904', 'nxbtre@gmail.com', 'nxbtre.png', 'nxbtre.png', '', '', '', '', '', 1, '2023-04-01 09:52:22', '2023-04-01 09:52:22'),
(23, 'Nhà xuất bản Giáo dục', '0812381283', 'nxbgiaoduc@gmail.com', 'nxbgiaoduc.png', 'nxbgiaoduc.png', '', '', '', '', '', 1, '2023-04-01 16:15:32', NULL),
(24, 'Nhà xuất bản thanh niên', '0213838', 'thanhnien@gmail.com', 'nxbthanhnien.jpg', 'nxbthanhnien.jpg', '', '', '', '', '', 1, '2023-04-08 04:54:26', NULL),
(25, 'Nhà xuất bản Tổng hợp thành phố Hồ Chí Minh', '0453534544', 'nxbtonghop@gmail.com', 'nxbtonghop.png', 'nxbtonghop.png', '', '', '', '', '', 1, '2023-04-08 05:05:49', '2023-04-08 05:05:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `group_id`, `name`, `username`, `password`, `status`, `email`, `image`, `phone`, `created_at`, `updated_at`) VALUES
(51, 4, 'Nguyễn Phước Hảo', 'admin', '123', 1, 'nguyenphuochao123@gmail.com', 'ảnh_cv.jpg', '0584228904', '2023-04-07 07:49:27', NULL),
(52, 1, 'Nguyễn Văn A', 'nguyenvana', '123', 0, 'vana@gmail.com', '147142.png', '', '2023-04-08 04:51:21', NULL),
(53, 2, 'Trần Kim Thảo', 'thaothao', '123', 1, 'thaothao@gmail.com', 'kimthao.jpg', '0912391293', '2023-04-01 18:02:34', NULL),
(55, 1, 'Nguyễn Văn B', 'nguyenvanb', '123', 0, 'b@gmail.com', '147142.png', '03939393', '2023-04-05 10:58:50', NULL),
(58, 1, 'Nguyễn Thanh Toàn', 'thanhtoan', '123', 1, 'thanhtoan123@gmail.com', '147142.png', '233215635', '2023-04-08 04:51:15', NULL),
(59, 1, 'Lê Văn Đạt', 'levandat', '123', 1, 'levandat@gmail.com', 'user_2.jpg', '03812838', '2023-04-08 21:07:17', NULL),
(60, 1, 'Nguyễn Thị Đào', 'nguyenthidao', '123', 1, 'nguyenthidao139@gmail.com', 'user_1.png', '092394932', '2023-04-08 21:08:17', NULL),
(61, 1, 'Nguyễn Lê Quang Hoàng', 'quanhoang', '123', 1, 'quanghoang@gmail.com', 'user_2.jpg', '019293329', '2023-04-08 21:09:16', NULL),
(62, 1, 'Trịnh Phước Tín', 'phuoctin', '123', 1, 'trinhtin@gmail.com', 'user_3.png', '0283488234', '2023-04-08 21:10:12', NULL),
(63, 1, 'Trần Hữu Nghĩa', 'huunghia', '123', 1, 'huunghia@gmail.com', 'user_4.png', '017237733', '2023-04-08 21:11:06', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_groups`
--

CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sumary` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `sumary`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nhóm user', 'Quản lí người dùng', 1, '2023-03-16 15:06:05', NULL),
(2, 'Nhóm admin', 'Quản lí admin', 1, '2023-03-16 15:06:05', NULL),
(4, 'Nhóm super admin', 'Là quản trị cao cấp nhất trong hệ thống', 1, '2023-03-16 15:06:05', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `article_groups`
--
ALTER TABLE `article_groups`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `comments_ibfk_2` (`user_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `functions`
--
ALTER TABLE `functions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `order_id` (`order_id`,`product_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `author_id` (`author_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `group_id` (`group_id`);

--
-- Chỉ mục cho bảng `user_groups`
--
ALTER TABLE `user_groups`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `article_groups`
--
ALTER TABLE `article_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `functions`
--
ALTER TABLE `functions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4950;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2585;

--
-- AUTO_INCREMENT cho bảng `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT cho bảng `user_groups`
--
ALTER TABLE `user_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `article_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `user_groups` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
