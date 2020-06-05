-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 15, 2020 lúc 04:23 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `abc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `news_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`comment_id`, `content`, `lesson_id`, `user_id`, `news_id`, `created_at`, `updated_at`) VALUES
(1, '11noiDung', 1, 1, 1, NULL, NULL),
(2, '12noiDung', 2, 1, 2, NULL, NULL),
(3, '13noiDung', 3, 1, 3, NULL, NULL),
(4, '14noiDung', 4, 1, 4, NULL, NULL),
(5, '15noiDung', 5, 1, 5, NULL, NULL),
(6, '21noiDung', 1, 2, 2, NULL, NULL),
(7, '22noiDung', 2, 2, 4, NULL, NULL),
(8, '23noiDung', 3, 2, 6, NULL, NULL),
(9, '24noiDung', 4, 2, 8, NULL, NULL),
(10, '25noiDung', 5, 2, 10, NULL, NULL),
(11, '31noiDung', 1, 3, 3, NULL, NULL),
(12, '32noiDung', 2, 3, 6, NULL, NULL),
(13, '33noiDung', 3, 3, 9, NULL, NULL),
(14, '34noiDung', 4, 3, 12, NULL, NULL),
(15, '35noiDung', 5, 3, 15, NULL, NULL),
(16, '41noiDung', 1, 4, 4, NULL, NULL),
(17, '42noiDung', 2, 4, 8, NULL, NULL),
(18, '43noiDung', 3, 4, 12, NULL, NULL),
(19, '44noiDung', 4, 4, 16, NULL, NULL),
(20, '45noiDung', 5, 4, 20, NULL, NULL),
(21, '51noiDung', 1, 5, 5, NULL, NULL),
(22, '52noiDung', 2, 5, 10, NULL, NULL),
(23, '53noiDung', 3, 5, 15, NULL, NULL),
(24, '54noiDung', 4, 5, 20, NULL, NULL),
(25, '55noiDung', 5, 5, 25, NULL, NULL),
(26, '61noiDung', 1, 6, 6, NULL, NULL),
(27, '62noiDung', 2, 6, 12, NULL, NULL),
(28, '63noiDung', 3, 6, 18, NULL, NULL),
(29, '64noiDung', 4, 6, 24, NULL, NULL),
(30, '65noiDung', 5, 6, 30, NULL, NULL),
(31, '71noiDung', 1, 7, 7, NULL, NULL),
(32, '72noiDung', 2, 7, 14, NULL, NULL),
(33, '73noiDung', 3, 7, 21, NULL, NULL),
(34, '74noiDung', 4, 7, 28, NULL, NULL),
(35, '75noiDung', 5, 7, 35, NULL, NULL),
(36, '81noiDung', 1, 8, 8, NULL, NULL),
(37, '82noiDung', 2, 8, 16, NULL, NULL),
(38, '83noiDung', 3, 8, 24, NULL, NULL),
(39, '84noiDung', 4, 8, 32, NULL, NULL),
(40, '85noiDung', 5, 8, 40, NULL, NULL),
(41, '91noiDung', 1, 9, 9, NULL, NULL),
(42, '92noiDung', 2, 9, 18, NULL, NULL),
(43, '93noiDung', 3, 9, 27, NULL, NULL),
(44, '94noiDung', 4, 9, 36, NULL, NULL),
(45, '95noiDung', 5, 9, 45, NULL, NULL),
(46, '101noiDung', 1, 10, 10, NULL, NULL),
(47, '102noiDung', 2, 10, 20, NULL, NULL),
(48, '103noiDung', 3, 10, 30, NULL, NULL),
(49, '104noiDung', 4, 10, 40, NULL, NULL),
(50, '105noiDung', 5, 10, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `course_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`course_id`, `name`, `describe`, `topic_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '1tenKhoaHoc', '1moTa', 1, 1, NULL, NULL),
(2, '2tenKhoaHoc', '2moTa', 2, 2, NULL, NULL),
(3, '3tenKhoaHoc', '3moTa', 3, 3, NULL, NULL),
(4, '4tenKhoaHoc', '4moTa', 4, 4, NULL, NULL),
(5, '5tenKhoaHoc', '5moTa', 5, 5, NULL, NULL),
(6, '6tenKhoaHoc', '6moTa', 1, 6, NULL, NULL),
(7, '7tenKhoaHoc', '7moTa', 2, 7, NULL, NULL),
(8, '8tenKhoaHoc', '8moTa', 3, 8, NULL, NULL),
(9, '9tenKhoaHoc', '9moTa', 4, 9, NULL, NULL),
(10, '10tenKhoaHoc', '10moTa', 5, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_lesson`
--

CREATE TABLE `course_lesson` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_course_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `course_lesson`
--

INSERT INTO `course_lesson` (`id`, `user_course_id`, `lesson_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 4, 4, NULL, NULL),
(5, 5, 5, NULL, NULL),
(6, 6, 6, NULL, NULL),
(7, 7, 7, NULL, NULL),
(8, 8, 8, NULL, NULL),
(9, 9, 9, NULL, NULL),
(10, 10, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `content`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, '1noiDung', 2, 1, NULL, NULL),
(2, '2noiDung', 3, 2, NULL, NULL),
(3, '3noiDung', 4, 3, NULL, NULL),
(4, '4noiDung', 5, 4, NULL, NULL),
(5, '5noiDung', 6, 5, NULL, NULL),
(6, '6noiDung', 7, 6, NULL, NULL),
(7, '7noiDung', 8, 7, NULL, NULL),
(8, '8noiDung', 9, 8, NULL, NULL),
(9, '9noiDung', 10, 9, NULL, NULL),
(10, '10noiDung', 1, 10, NULL, NULL),
(11, '11noiDung', 2, 11, NULL, NULL),
(12, '12noiDung', 3, 12, NULL, NULL),
(13, '13noiDung', 4, 13, NULL, NULL),
(14, '14noiDung', 5, 14, NULL, NULL),
(15, '15noiDung', 6, 15, NULL, NULL),
(16, '16noiDung', 7, 16, NULL, NULL),
(17, '17noiDung', 8, 17, NULL, NULL),
(18, '18noiDung', 9, 18, NULL, NULL),
(19, '19noiDung', 10, 19, NULL, NULL),
(20, '20noiDung', 1, 20, NULL, NULL),
(21, '21noiDung', 2, 21, NULL, NULL),
(22, '22noiDung', 3, 22, NULL, NULL),
(23, '23noiDung', 4, 23, NULL, NULL),
(24, '24noiDung', 5, 24, NULL, NULL),
(25, '25noiDung', 6, 25, NULL, NULL),
(26, '26noiDung', 7, 26, NULL, NULL),
(27, '27noiDung', 8, 27, NULL, NULL),
(28, '28noiDung', 9, 28, NULL, NULL),
(29, '29noiDung', 10, 29, NULL, NULL),
(30, '30noiDung', 1, 30, NULL, NULL),
(31, '31noiDung', 2, 31, NULL, NULL),
(32, '32noiDung', 3, 32, NULL, NULL),
(33, '33noiDung', 4, 33, NULL, NULL),
(34, '34noiDung', 5, 34, NULL, NULL),
(35, '35noiDung', 6, 35, NULL, NULL),
(36, '36noiDung', 7, 36, NULL, NULL),
(37, '37noiDung', 8, 37, NULL, NULL),
(38, '38noiDung', 9, 38, NULL, NULL),
(39, '39noiDung', 10, 39, NULL, NULL),
(40, '40noiDung', 1, 40, NULL, NULL),
(41, '41noiDung', 2, 41, NULL, NULL),
(42, '42noiDung', 3, 42, NULL, NULL),
(43, '43noiDung', 4, 43, NULL, NULL),
(44, '44noiDung', 5, 44, NULL, NULL),
(45, '45noiDung', 6, 45, NULL, NULL),
(46, '46noiDung', 7, 46, NULL, NULL),
(47, '47noiDung', 8, 47, NULL, NULL),
(48, '48noiDung', 9, 48, NULL, NULL),
(49, '49noiDung', 10, 49, NULL, NULL),
(50, '50noiDung', 1, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lessons`
--

CREATE TABLE `lessons` (
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lessons`
--

INSERT INTO `lessons` (`lesson_id`, `name`, `describe`, `content`, `link`, `course_id`, `created_at`, `updated_at`) VALUES
(1, '11tenBaiGiang', '11moTa', '11noiDung', '11linkVideo', 1, NULL, NULL),
(2, '12tenBaiGiang', '12moTa', '12noiDung', '12linkVideo', 1, NULL, NULL),
(3, '13tenBaiGiang', '13moTa', '13noiDung', '13linkVideo', 1, NULL, NULL),
(4, '21tenBaiGiang', '21moTa', '21noiDung', '21linkVideo', 2, NULL, NULL),
(5, '22tenBaiGiang', '22moTa', '22noiDung', '22linkVideo', 2, NULL, NULL),
(6, '23tenBaiGiang', '23moTa', '23noiDung', '23linkVideo', 2, NULL, NULL),
(7, '31tenBaiGiang', '31moTa', '31noiDung', '31linkVideo', 3, NULL, NULL),
(8, '32tenBaiGiang', '32moTa', '32noiDung', '32linkVideo', 3, NULL, NULL),
(9, '33tenBaiGiang', '33moTa', '33noiDung', '33linkVideo', 3, NULL, NULL),
(10, '41tenBaiGiang', '41moTa', '41noiDung', '41linkVideo', 4, NULL, NULL),
(11, '42tenBaiGiang', '42moTa', '42noiDung', '42linkVideo', 4, NULL, NULL),
(12, '43tenBaiGiang', '43moTa', '43noiDung', '43linkVideo', 4, NULL, NULL),
(13, '51tenBaiGiang', '51moTa', '51noiDung', '51linkVideo', 5, NULL, NULL),
(14, '52tenBaiGiang', '52moTa', '52noiDung', '52linkVideo', 5, NULL, NULL),
(15, '53tenBaiGiang', '53moTa', '53noiDung', '53linkVideo', 5, NULL, NULL),
(16, '61tenBaiGiang', '61moTa', '61noiDung', '61linkVideo', 6, NULL, NULL),
(17, '62tenBaiGiang', '62moTa', '62noiDung', '62linkVideo', 6, NULL, NULL),
(18, '63tenBaiGiang', '63moTa', '63noiDung', '63linkVideo', 6, NULL, NULL),
(19, '71tenBaiGiang', '71moTa', '71noiDung', '71linkVideo', 7, NULL, NULL),
(20, '72tenBaiGiang', '72moTa', '72noiDung', '72linkVideo', 7, NULL, NULL),
(21, '73tenBaiGiang', '73moTa', '73noiDung', '73linkVideo', 7, NULL, NULL),
(22, '81tenBaiGiang', '81moTa', '81noiDung', '81linkVideo', 8, NULL, NULL),
(23, '82tenBaiGiang', '82moTa', '82noiDung', '82linkVideo', 8, NULL, NULL),
(24, '83tenBaiGiang', '83moTa', '83noiDung', '83linkVideo', 8, NULL, NULL),
(25, '91tenBaiGiang', '91moTa', '91noiDung', '91linkVideo', 9, NULL, NULL),
(26, '92tenBaiGiang', '92moTa', '92noiDung', '92linkVideo', 9, NULL, NULL),
(27, '93tenBaiGiang', '93moTa', '93noiDung', '93linkVideo', 9, NULL, NULL),
(28, '101tenBaiGiang', '101moTa', '101noiDung', '101linkVideo', 10, NULL, NULL),
(29, '102tenBaiGiang', '102moTa', '102noiDung', '102linkVideo', 10, NULL, NULL),
(30, '103tenBaiGiang', '103moTa', '103noiDung', '103linkVideo', 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_04_16_000726_createdatabase', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`news_id`, `name`, `describe`, `content`, `topic_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '11tenTinTuc', '11moTa', '11noiDung', 1, 1, NULL, NULL),
(2, '12tenTinTuc', '12moTa', '12noiDung', 2, 1, NULL, NULL),
(3, '13tenTinTuc', '13moTa', '13noiDung', 3, 1, NULL, NULL),
(4, '14tenTinTuc', '14moTa', '14noiDung', 4, 1, NULL, NULL),
(5, '15tenTinTuc', '15moTa', '15noiDung', 5, 1, NULL, NULL),
(6, '21tenTinTuc', '21moTa', '21noiDung', 1, 2, NULL, NULL),
(7, '22tenTinTuc', '22moTa', '22noiDung', 2, 2, NULL, NULL),
(8, '23tenTinTuc', '23moTa', '23noiDung', 3, 2, NULL, NULL),
(9, '24tenTinTuc', '24moTa', '24noiDung', 4, 2, NULL, NULL),
(10, '25tenTinTuc', '25moTa', '25noiDung', 5, 2, NULL, NULL),
(11, '31tenTinTuc', '31moTa', '31noiDung', 1, 3, NULL, NULL),
(12, '32tenTinTuc', '32moTa', '32noiDung', 2, 3, NULL, NULL),
(13, '33tenTinTuc', '33moTa', '33noiDung', 3, 3, NULL, NULL),
(14, '34tenTinTuc', '34moTa', '34noiDung', 4, 3, NULL, NULL),
(15, '35tenTinTuc', '35moTa', '35noiDung', 5, 3, NULL, NULL),
(16, '41tenTinTuc', '41moTa', '41noiDung', 1, 4, NULL, NULL),
(17, '42tenTinTuc', '42moTa', '42noiDung', 2, 4, NULL, NULL),
(18, '43tenTinTuc', '43moTa', '43noiDung', 3, 4, NULL, NULL),
(19, '44tenTinTuc', '44moTa', '44noiDung', 4, 4, NULL, NULL),
(20, '45tenTinTuc', '45moTa', '45noiDung', 5, 4, NULL, NULL),
(21, '51tenTinTuc', '51moTa', '51noiDung', 1, 5, NULL, NULL),
(22, '52tenTinTuc', '52moTa', '52noiDung', 2, 5, NULL, NULL),
(23, '53tenTinTuc', '53moTa', '53noiDung', 3, 5, NULL, NULL),
(24, '54tenTinTuc', '54moTa', '54noiDung', 4, 5, NULL, NULL),
(25, '55tenTinTuc', '55moTa', '55noiDung', 5, 5, NULL, NULL),
(26, '61tenTinTuc', '61moTa', '61noiDung', 1, 6, NULL, NULL),
(27, '62tenTinTuc', '62moTa', '62noiDung', 2, 6, NULL, NULL),
(28, '63tenTinTuc', '63moTa', '63noiDung', 3, 6, NULL, NULL),
(29, '64tenTinTuc', '64moTa', '64noiDung', 4, 6, NULL, NULL),
(30, '65tenTinTuc', '65moTa', '65noiDung', 5, 6, NULL, NULL),
(31, '71tenTinTuc', '71moTa', '71noiDung', 1, 7, NULL, NULL),
(32, '72tenTinTuc', '72moTa', '72noiDung', 2, 7, NULL, NULL),
(33, '73tenTinTuc', '73moTa', '73noiDung', 3, 7, NULL, NULL),
(34, '74tenTinTuc', '74moTa', '74noiDung', 4, 7, NULL, NULL),
(35, '75tenTinTuc', '75moTa', '75noiDung', 5, 7, NULL, NULL),
(36, '81tenTinTuc', '81moTa', '81noiDung', 1, 8, NULL, NULL),
(37, '82tenTinTuc', '82moTa', '82noiDung', 2, 8, NULL, NULL),
(38, '83tenTinTuc', '83moTa', '83noiDung', 3, 8, NULL, NULL),
(39, '84tenTinTuc', '84moTa', '84noiDung', 4, 8, NULL, NULL),
(40, '85tenTinTuc', '85moTa', '85noiDung', 5, 8, NULL, NULL),
(41, '91tenTinTuc', '91moTa', '91noiDung', 1, 9, NULL, NULL),
(42, '92tenTinTuc', '92moTa', '92noiDung', 2, 9, NULL, NULL),
(43, '93tenTinTuc', '93moTa', '93noiDung', 3, 9, NULL, NULL),
(44, '94tenTinTuc', '94moTa', '94noiDung', 4, 9, NULL, NULL),
(45, '95tenTinTuc', '95moTa', '95noiDung', 5, 9, NULL, NULL),
(46, '101tenTinTuc', '101moTa', '101noiDung', 1, 10, NULL, NULL),
(47, '102tenTinTuc', '102moTa', '102noiDung', 2, 10, NULL, NULL),
(48, '103tenTinTuc', '103moTa', '103noiDung', 3, 10, NULL, NULL),
(49, '104tenTinTuc', '104moTa', '104noiDung', 4, 10, NULL, NULL),
(50, '105tenTinTuc', '105moTa', '105noiDung', 5, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `topics`
--

INSERT INTO `topics` (`topic_id`, `name`, `created_at`, `updated_at`) VALUES
(1, '1tenChuDe', NULL, NULL),
(2, '2tenChuDe', NULL, NULL),
(3, '3tenChuDe', NULL, NULL),
(4, '4tenChuDe', NULL, NULL),
(5, '5tenChuDe', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `level` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `birthdate`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0name', '0email', NULL, '0password', '2020-05-15', 2, NULL, NULL, NULL),
(2, '1name', '1email', NULL, '1password', '2020-05-15', 1, NULL, NULL, NULL),
(3, '2name', '2email', NULL, '2password', '2020-05-15', 0, NULL, NULL, NULL),
(4, '3name', '3email', NULL, '3password', '2020-05-15', 1, NULL, NULL, NULL),
(5, '4name', '4email', NULL, '4password', '2020-05-15', 0, NULL, NULL, NULL),
(6, '5name', '5email', NULL, '5password', '2020-05-15', 1, NULL, NULL, NULL),
(7, '6name', '6email', NULL, '6password', '2020-05-15', 0, NULL, NULL, NULL),
(8, '7name', '7email', NULL, '7password', '2020-05-15', 1, NULL, NULL, NULL),
(9, '8name', '8email', NULL, '8password', '2020-05-15', 0, NULL, NULL, NULL),
(10, '9name', '9email', NULL, '9password', '2020-05-15', 1, NULL, NULL, NULL),
(11, '10name', '10email', NULL, '10password', '2020-05-15', 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_course`
--

CREATE TABLE `user_course` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user_course`
--

INSERT INTO `user_course` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 10, NULL, NULL),
(2, 2, 9, NULL, NULL),
(3, 3, 8, NULL, NULL),
(4, 4, 7, NULL, NULL),
(5, 5, 6, NULL, NULL),
(6, 6, 5, NULL, NULL),
(7, 7, 4, NULL, NULL),
(8, 8, 3, NULL, NULL),
(9, 9, 2, NULL, NULL),
(10, 10, 1, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `comments_lesson_id_foreign` (`lesson_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_news_id_foreign` (`news_id`);

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `courses_topic_id_foreign` (`topic_id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_lesson_user_course_id_foreign` (`user_course_id`),
  ADD KEY `course_lesson_lesson_id_foreign` (`lesson_id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `feedbacks_user_id_foreign` (`user_id`),
  ADD KEY `feedbacks_comment_id_foreign` (`comment_id`);

--
-- Chỉ mục cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`lesson_id`),
  ADD KEY `lessons_course_id_foreign` (`course_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_topic_id_foreign` (`topic_id`),
  ADD KEY `news_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Chỉ mục cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_course_course_id_foreign` (`course_id`),
  ADD KEY `user_course_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `lessons`
--
ALTER TABLE `lessons`
  MODIFY `lesson_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT cho bảng `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `user_course`
--
ALTER TABLE `user_course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`),
  ADD CONSTRAINT `comments_news_id_foreign` FOREIGN KEY (`news_id`) REFERENCES `news` (`news_id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`),
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `course_lesson`
--
ALTER TABLE `course_lesson`
  ADD CONSTRAINT `course_lesson_lesson_id_foreign` FOREIGN KEY (`lesson_id`) REFERENCES `lessons` (`lesson_id`),
  ADD CONSTRAINT `course_lesson_user_course_id_foreign` FOREIGN KEY (`user_course_id`) REFERENCES `user_course` (`id`);

--
-- Các ràng buộc cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`comment_id`),
  ADD CONSTRAINT `feedbacks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_topic_id_foreign` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`),
  ADD CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `user_course_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
