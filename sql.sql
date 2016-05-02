-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2016 at 01:39 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorys`
--

CREATE TABLE `categorys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `alias`, `keyword`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Giày da nam', 'giay-da-nam', 'giày da nam, giay da nam, giầy da nam, giày da nam đẹp, giay da nam dep, giay da nam 2016, giày da, giay da', '500+ mẫu giày da nam đẹp da thật, bán giay da nam toàn quốc | 365 ngày đổi trả | Thử giay da nam miễn phí tại nhà', 0, '2016-04-02 18:28:19', '2016-04-02 18:28:19'),
(2, 'Giày nam công sở', 'giay-nam-cong-so', 'giay nam, giay nam cong so, giày nam công sở Hà nội, giầy nam công sở đẹp, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy dép cho nam, giầy lười nam', 'Hơn 500 mẫu giày nam công sở, giày da nam công sở, giày da công sở giá rẻ tại Hà nội| Free shipping | Đổi trả trong 365 ngày | Bảo hành trọn đời', 0, '2016-04-02 18:28:53', '2016-04-02 18:28:53'),
(3, 'Giày lười nam', 'giay-luoi-nam', 'giày lười, giay luoi nam, giầy lười nam đẹp, giày lười nam thời trang, giầy lười cao cấp, giay nam, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy lười nam', 'Giày lười nam | Website ban giay luoi nam dep, giầy lười nam Hà Nội | Free shipping giày Toàn quốc | Thử giầy lười nam miễn phí tại nhà', 0, '2016-04-02 18:29:29', '2016-04-02 18:29:29'),
(4, 'Giày tây nam', 'giay-tay-nam', 'giay tay, giày tây, giay tay nam, giày tây nam, giầy tây nam, giay tay dep, giay tay nam dep, giày tây nam đẹp', 'Giày tây nam đẹp giá rẻ, giay tay nam cao cap, bán giày tây nam đẹp mẫu mới liên tục | Free shipping giầy tây nam Toàn quốc | Bảo hành trọn đời', 0, '2016-04-02 18:29:49', '2016-04-02 18:29:49'),
(5, 'Giày buộc dây', 'giay-buoc-day', 'giay nam, giầy dép nam hàng hiệu, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam', 'Giày buộc dây | Website bán lẻ giầy dép nam hàng đầu Việt Nam | 365 ngày hoàn tiền | Miễn phí vận chuyển toàn quốc', 0, '2016-04-02 18:30:15', '2016-04-02 18:30:15'),
(6, 'Giày cao cổ ', 'giay-cao-co', 'giày cao cổ,giay cao co,ban giay cao co nam ha noi, giầy cao cổ nam giá rẻ, bán giay cao cổ, mua giày cao cổ giá rẻ', 'Giày cao cổ nam - BST giầy cao cổ nam hà nội - Giay cao co nam 2016 | Đổi trả giày trong 365 ngày, miễn phí giao boot nam cao cổ toàn quốc', 0, '2016-04-02 18:30:48', '2016-04-02 18:30:48'),
(7, 'Giày vải nam', 'giay-vai-nam', 'giay nam, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy dép clarks nam, giầy dép thể thao nam', 'Bộ sưu tập giày vải nam mới nhất 2015. Mua giay vai nam gia tot | 365 ngày đổi trả hàng, miễn phí vận chuyển toàn quốc, thử giầy tại nhà miễn phí', 0, '2016-04-02 18:31:19', '2016-04-02 18:31:19'),
(8, 'Giày cao cấp', 'giay-cao-cap', 'giày nam cao cấp, giày nam hàng hiệu, giay nam cao cap, giay nam hang hieu, giay da nam cao cap', 'Mua Giày Nam Cao Cấp, Giày Nam Hàng Hiệu Tại Giaytot.com đảm bảo 100% da thật, hàng Việt Nam, miễn phí giao hàng, bảo hành trọn đời', 0, '2016-04-02 18:32:02', '2016-04-02 18:32:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fb_logs`
--

CREATE TABLE `fb_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `from` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fb_logs`
--

INSERT INTO `fb_logs` (`id`, `from`, `to`, `link`, `image`, `content`, `created_at`, `updated_at`) VALUES
(1, 'midi9x', 'Tất cả facebook id', '/', ' ', 'test', '2016-04-01 19:13:55', '2016-04-01 19:13:55'),
(2, 'midi9x', 'Tất cả facebook id', '/', ' ', 'Fuck', '2016-04-28 00:52:31', '2016-04-28 00:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `gender` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `email`, `password`, `facebook_id`, `phone`, `address`, `birthday`, `gender`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyen Anh', 'dsl@gmail.com', '', '1778461952373723', 3333333, '0', '0000-00-00', 'female', 1, NULL, NULL, NULL),
(3, 'Nguyễn Minh Định', 'midi9x@gmail.com', '', '574245586067376', 1682485646, 'Soc Dang - Doan Hung - Phu Tho', '0000-00-00', 'male', 1, 'bOfkIp92wKIZZ4hcz9tUOc3Hwj64CxvxXupv9KQU3yM8DsRHSt2oE87YWXIs', NULL, NULL),
(4, 'Thế Sơn', 'zika190994@gmail.com', '', '608615212637998', 1212121212, 'Ha noi', '0000-00-00', 'male', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_28_084558_News', 1),
('2016_03_03_142824_Categorys', 1),
('2016_03_03_143918_Products', 1),
('2016_03_03_145342_create_product_images_table', 1),
('2016_03_13_020607_create_product_option_table', 1),
('2016_03_15_141043_create_option_table', 1),
('2016_03_16_122602_create_member_table', 1),
('2016_03_18_080300_create_order_table', 1),
('2016_03_18_080441_create_order_detail_table', 1),
('2016_03_22_023021_create_contact_table', 1),
('2016_03_28_100816_create_fb_log_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `category_id`, `user_id`, `title`, `alias`, `description`, `content`, `images`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Điểm mặt 5 mẫu giày nam cực chất', 'diem-mat-5-mau-giay-nam-cuc-chat', 'Thời tiết chuyển dần sang những ngày se lạnh của dịp thu đông cũng là lúc quý ông rục rịch sắm cho mình những mẫu giày nam phù hợp với thời tiết se lạnh, phù hợp', '<p>Thời tiết chuyển dần sang những ng&agrave;y se lạnh của dịp thu đ&ocirc;ng cũng l&agrave; l&uacute;c qu&yacute; &ocirc;ng rục rịch sắm cho m&igrave;nh những mẫugi&agrave;y nam&nbsp;ph&ugrave; hợp với thời tiết se lạnh, ph&ugrave; hợp với những item d&agrave;nh cho dịp thu đ&ocirc;ng. Gi&agrave;y Nam Tốt giới thiệu tới c&aacute;c ch&agrave;ng trai 5 mẫu gi&agrave;y cực chất d&agrave;nh cho dịp thu đ&ocirc;ng đang tới. Đẹp đơn giản v&agrave; cực dễ mix đồ.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/giay-nam-thu-dong-01.png" style="height:482px; width:971px" /></p>\r\n\r\n<p>1. Gi&agrave;y oxford đế cao su từ Johnston &amp; Murphy.</p>\r\n\r\n<p>Lu&ocirc;n l&agrave; mẫu gi&agrave;y nổi bật trong d&ograve;ng gi&agrave;y nam sang trọng, gi&agrave;y Oxford từ h&atilde;ng Johnston &amp; Murphy được kho&aacute;c l&ecirc;n m&igrave;nh gam m&agrave;u n&acirc;u s&aacute;ng tinh tế. Đ&acirc;y l&agrave; gam m&agrave;u vừa mang n&eacute;t cổ điển lại hiện đại, dễ d&agrave;ng mix c&ugrave;ng quần &acirc;u sơ mi hay những bộ suit lịch l&atilde;m. Ch&uacute;ng dễ khiến người ta d&agrave;nh cụm từ qu&yacute; &ocirc;ng lịch thiệp cho người mang ch&uacute;ng.</p>\r\n\r\n<p>2. Gi&agrave;y Derby da cổ điển từ Church&rsquo;s.</p>\r\n\r\n<p>M&ugrave;a thu cũng l&agrave; dịp l&ecirc;n ng&ocirc;i của c&aacute;c mẫu kaki hay chino, gi&agrave;y da Derby cực th&iacute;ch hợp khi mix c&ugrave;ng c&aacute;c item đ&oacute;, thời trang hơn khi xắn gấu v&agrave; mix c&ugrave;ng c&aacute;c mẫu sơ mi xắn tay. Bạn sẽ trẻ trung m&agrave; vẫn đảm bảo lịch sự cần c&oacute;. Ch&uacute;ng kh&aacute;c gi&agrave;y Oxford ở chỗ phần buộc d&acirc;y kh&ocirc;ng kh&iacute;t hai miếng da lại. Điều n&agrave;y gi&uacute;p gi&agrave;y Derby trẻ trung hơn.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/giay-nam-thu-dong-02.png" style="height:392px; width:571px" /></p>\r\n\r\n<p>3. Gi&agrave;y da lộn đế mềm của John Lobb.</p>\r\n\r\n<p>Thiết kế kh&aacute; trẻ trung nhưng mẫu gi&agrave;y nam lại kh&ocirc;ng ho&agrave;n to&agrave;n giống gi&agrave;y thể thao. Đế mềm v&agrave; chất da lộn tạo n&ecirc;n sự thoải m&aacute;i tối đa. Gam m&agrave;u l&ocirc;ng chuột gi&uacute;p bạn dễ mix đồ v&agrave; cũng l&agrave; gam m&agrave;u lạ mắt, tạo n&ecirc;n sự thu h&uacute;t cho người mang ch&uacute;ng. Nếu bạn t&igrave;m kiếm sự kh&aacute;c biệt mới mẻ thay cho c&aacute;c mẫu Vans hay c&aacute;c mẫu thể thao kh&aacute;c tr&ecirc;n thị trường th&igrave; đ&acirc;y l&agrave; một gợi &yacute; ho&agrave;n hảo.</p>\r\n\r\n<p>4. Gi&agrave;y thể thao Bally</p>\r\n\r\n<p>D&ugrave; l&agrave; thời điểm n&agrave;o th&igrave; gi&agrave;y thể thao nam lu&ocirc;n l&agrave; một gợi &yacute; kh&ocirc;ng tồi cho c&aacute;c ch&agrave;ng trai. Đ&ocirc;i thể thao của Bally với m&agrave;u ngọc lam l&agrave;m từ da b&ecirc; hẳn sẽ thu h&uacute;t bất kỳ qu&yacute; &ocirc;ng n&agrave;o, v&agrave; ph&ugrave; hợp với hầu hết c&aacute;c m&oacute;n đồ c&oacute; trong tủ đồ của bạn. Thương hiệu thời trang vốn chuy&ecirc;n sản xuất c&aacute;c đ&ocirc;i gi&agrave;y sang trọng trong 160 năm qua chắc chắn sẽ kh&ocirc;ng l&agrave;m bạn thất vọng.</p>\r\n\r\n<p>5. Desert Boot da lộn từ Aldo.</p>\r\n\r\n<p>Thời điểm thu đ&ocirc;ng thật kh&oacute; l&ograve;ng bỏ qua mẫu gi&agrave;y nam Deser boot da lộn. Aldo giới thiệu tới bạn mẫu Desert boot l&agrave;m từ da lộn với thiết kế cổ cao vừa vặn tới mắt c&aacute; ch&acirc;n. Ch&uacute;ng bền v&agrave; tiện lợi hơn, n&oacute; dễ d&agrave;ng cặp đ&ocirc;i với một bộ vest m&agrave;u navy khi đến c&ocirc;ng sở hoặc một buổi dạo chơi trong rừng v&agrave;o ng&agrave;y cuối tuần.</p>\r\n\r\n<p>Năm mẫu gi&agrave;y nam hi vọng đ&atilde; mang tới một sự lựa chọn th&iacute;ch hợp cho c&aacute;c ch&agrave;ng trai khi thời tiết đang dần chuyển m&igrave;nh sang thu đ&ocirc;ng.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc/giay-nam-thu-dong-01.png', 0, 1, '2016-04-02 19:42:02', '2016-04-02 19:42:02'),
(2, 0, 1, 'Bạn đã biết cách đi giày lười nam đúng cách', 'ban-da-biet-cach-di-giay-luoi-nam-dung-cach', 'Hãy khéo léo chọn cho mình một mẫu giày lười nam phù hợp với chân và sử dụng nó một cách thông mình nhé.', '<p>Gi&agrave;y lười nam&nbsp;từ l&acirc;u đ&atilde; trở th&agrave;nh m&oacute;n đồ thiết yếu của c&aacute;nh m&agrave;y r&acirc;u. Sự tiện lợi, kiểu d&aacute;ng thanh lịch thoải m&aacute;i l&agrave; những ưu điểm m&agrave; c&aacute;c qu&yacute; &ocirc;ng lu&ocirc;n đề cao khi chọn gi&agrave;y. Thế nhưng kh&ocirc;ng phải ai cũng biết c&aacute;ch đi gi&agrave;y đ&uacute;ng c&aacute;ch để tốt cho ch&acirc;n, cho gan b&agrave;n ch&acirc;n của m&igrave;nh. C&ugrave;ng Gi&agrave;y Nam Tốt đi t&igrave;m lời giải cho việc đi gi&agrave;y thế n&agrave;o l&agrave; tốt nhất nh&eacute;.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/di-giay-luoi-nam-1.png" style="height:387px; width:658px" /></p>\r\n\r\n<p>Khi đ&atilde; chọn cho m&igrave;nh được mẫu gi&agrave;y lười nam hợp với phong c&aacute;ch của bạn, đừng nghĩ đơn giản chỉ l&agrave; xỏ ch&acirc;n v&agrave;o ch&uacute;ng l&agrave; xong. Một v&agrave;i lưu &yacute; khi đi gi&agrave;y sẽ gi&uacute;p đ&ocirc;i ch&acirc;n của bạn lu&ocirc;n khỏe mạnh v&igrave; ch&uacute;ng l&agrave; bộ phận quan trọng n&acirc;ng đỡ to&agrave;n bộ cơ thể.</p>\r\n\r\n<p>D&ugrave; đ&ocirc;i gi&agrave;y lười nam của bạn l&agrave; chất liệu da thường hay da lộn mềm mại th&igrave; cũng kh&ocirc;ng n&ecirc;n để m&oacute;ng ch&acirc;n qu&aacute; d&agrave;i. Việc m&oacute;ng ch&acirc;n đ&acirc;m v&agrave;o mũi gi&agrave;y dễ g&acirc;y đau đầu ng&oacute;n ch&acirc;n, chưa kể tới việc l&agrave;m hỏng đ&ocirc;i gi&agrave;y do m&oacute;ng ch&acirc;n cọ x&aacute;t với da.</p>\r\n\r\n<p>Sau một ng&agrave;y l&agrave;m việc đi lại tr&ecirc;n đ&ocirc;i gi&agrave;y da, bạn n&ecirc;n th&aacute;o ch&uacute;ng ra, sử dụng dụng cụ tạo d&aacute;ng gi&agrave;y để đ&ocirc;i gi&agrave;y kh&ocirc;ng biến dạng, tho&aacute;ng kh&iacute; để ng&agrave;y h&ocirc;m sau bạn sử dụng kh&ocirc;ng c&oacute; cảm gi&aacute;c ẩm, h&ocirc;i của mồ h&ocirc;i ch&acirc;n.</p>\r\n\r\n<p>Để bảo vệ đ&ocirc;i ch&acirc;n kh&ocirc;ng bị đau, bốc m&ugrave;i th&igrave; bạn n&ecirc;n lưu &yacute; tới chất liệu của đ&ocirc;i&nbsp;gi&agrave;y lười nam. Chất liệu tốt,vừa size l&agrave; những ti&ecirc;u ch&iacute; th&iacute;ch hợp để lựa chọn. D&ugrave; bạn th&iacute;ch mẫu gi&agrave;y n&agrave;y nhưng ch&uacute;ng kh&ocirc;ng vừa với bạn th&igrave; đừng qu&aacute; bon chen, điều đ&oacute; sẽ l&agrave;m đ&ocirc;i ch&acirc;n của bạn đau nhức.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/di-giay-luoi-nam-02.png" style="height:375px; width:584px" /></p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image006.jpg" />Đừng mang gi&agrave;y khi ch&uacute;ng c&ograve;n ướt. Nếu bạn vừa trải qua cơn mưa bất chợt với đ&ocirc;i gi&agrave;y lười nam tr&ecirc;n ch&acirc;n, ng&agrave;y h&ocirc;m sau ch&uacute;ng c&ograve;n ẩm ướt th&igrave; đừng cố xỏ ch&acirc;n v&agrave;o ch&uacute;ng. Bởi lẽ gi&agrave;y da ẩm ướt sẽ l&agrave; điều kiện cho nấm mốc vi tr&ugrave;ng ph&aacute;t triển, sẽ khiến đ&ocirc;i ch&acirc;n bạn bốc m&ugrave;i. Nếu nắng n&oacute;ng l&ecirc;n sẽ l&agrave;m da gi&agrave;y dễ bị bong, nổ da hoặc cứng lại.</p>\r\n\r\n<p>Đi gi&agrave;y kh&eacute;o l&eacute;o sẽ gi&uacute;p cho đ&ocirc;i ch&acirc;n của bạn được bảo vệ một c&aacute;ch tối đa, đi lại thoải m&aacute;i thuận tiện cho c&ocirc;ng việc. H&atilde;y kh&eacute;o l&eacute;o chọn cho m&igrave;nh một mẫu gi&agrave;y lười nam ph&ugrave; hợp với ch&acirc;n v&agrave; sử dụng n&oacute; một c&aacute;ch th&ocirc;ng m&igrave;nh nh&eacute;.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc/di-giay-luoi-nam-02.png', 0, 1, '2016-04-02 19:47:34', '2016-04-02 19:47:34'),
(3, 0, 1, 'Giật mình với 3 mẫu giày thể thao nam cực đẹp', 'giat-minh-voi-3-mau-giay-the-thao-nam-cuc-dep', 'Thời điểm hè luôn là lúc các mẫu giày thể thao nam làm mưa làm gió, cũng là lúc chúng được quan tâm ưa chuộng nhất trong năm. Có lẽ vì thế mà các hãng giày thể thao đình', '<p>Thời điểm h&egrave; lu&ocirc;n l&agrave; l&uacute;c c&aacute;c mẫu gi&agrave;y thể thao nam l&agrave;m mưa l&agrave;m gi&oacute;, cũng l&agrave; l&uacute;c ch&uacute;ng được quan t&acirc;m ưa chuộng nhất trong năm. C&oacute; lẽ v&igrave; thế m&agrave; c&aacute;c h&atilde;ng gi&agrave;y thể thao đ&igrave;nh đ&aacute;m đều kh&ocirc;ng ngừng đưa ra những mẫu mới l&agrave;m rung động c&aacute;c t&iacute;n đồ y&ecirc;u th&iacute;ch&nbsp;gi&agrave;y thể thao.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/giay-vans-cuc-dep.png" style="height:385px; width:574px" /></p>\r\n\r\n<p>H&atilde;ng&nbsp;gi&agrave;y thể thao nam Vans&nbsp;tất nhi&ecirc;n cũng kh&ocirc;ng nằm ngo&agrave;i cơn b&atilde;o. Họ đ&atilde; đưa ra ba mẫu gi&agrave;y Vans tuyệt đẹp từ kiểu d&aacute;ng tới m&agrave;u sắc. Hẳn c&aacute;c fan của gi&agrave;y Vans kh&oacute; m&agrave; nhắm mắt bỏ qua.</p>\r\n\r\n<p>1. Vans Authentic Drained &amp; Confused Pineapple White&rdquo;.</p>\r\n\r\n<p>C&oacute; thể n&oacute;i đ&acirc;y l&agrave; th&agrave;nh vi&ecirc;n mới nhất của d&ograve;ng gi&agrave;y Authentic Drained &amp; Confused trong dịp h&egrave; n&agrave;y của Vans. Ch&uacute;ng l&agrave; mẫu gi&agrave;y thể thao cho cả nam v&agrave; nữ. &nbsp;Phi&ecirc;n bản n&agrave;y nổi bật v&agrave; g&acirc;y sự ch&uacute; &yacute; với họa tiết sọ dứa thu h&uacute;t người nh&igrave;n ngay từ &aacute;nh mắt đầu ti&ecirc;n.</p>\r\n\r\n<p>Ch&uacute;ng phủ tr&ecirc;n to&agrave;n bộ phần th&acirc;n gi&agrave;y. Để nổi bật họa tiết sọ dứa kỳ lạ, người ta chọn cho ch&uacute;ng m&agrave;u trắng kem l&agrave;m nền. Vẫn kiểu d&aacute;ng thường thấy của d&ograve;ng Authentic. Phần đế gi&agrave;y ghi dấu bằng logo của Vans theo phong c&aacute;ch thời trang tối giản. Hẳn với mẫu gi&agrave;y n&agrave;y cả nam v&agrave; nữ đều v&ocirc; c&ugrave;ng th&iacute;ch th&uacute;.</p>\r\n\r\n<p>2. Vans &ldquo;Stars and Stripes&rdquo; Pack</p>\r\n\r\n<p>Được lấy cảm hứng từ ng&agrave;y quốc kh&aacute;nh Mỹ, Vans đ&atilde; cho ra mẫu gi&agrave;y thể thao nam với họa tiết l&agrave; h&igrave;nh quốc kỳ của nước Mỹ. Dự kiến tới th&aacute;ng 7 ch&uacute;ng mới ch&iacute;nh thức c&oacute; mặt tr&ecirc;n thị trường.</p>\r\n\r\n<p>Bộ sưu tập l&agrave; sự hội tụ của bốn mẫu gi&agrave;y sao v&agrave; kẻ sọc. Thiết kế cổ thấp theo d&aacute;ng Vans Era v&agrave; cổ cao thường thấy của d&ograve;ng Sk8 &ndash; Hi. Hai gam m&agrave;u quen thuộc l&agrave; đỏ, trắng v&agrave; xanh nổi bật đầy thu h&uacute;t. Mẫu gi&agrave;y thể thao nam n&agrave;y hẳn sẽ l&agrave;m bạn nổi bật tr&ecirc;n phố đ&ocirc;ng người.</p>\r\n\r\n<p>3. Vans Pop Era Frost Gray/Dress Blue.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; th&agrave;nh vi&ecirc;n mới nhất trong d&ograve;ng gi&agrave;y thể thao nam Vans Pop Era. Đơn giản nhưng vẫn đầy thu h&uacute;t. Một dải m&agrave;u ba sắc l&agrave; x&aacute;m, xanh v&agrave; đỏ cũng đủ tạo được điểm nhấn ri&ecirc;ng trong mắt những fan h&acirc;m mộ của Vans.<img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image012.jpg" /></p>\r\n\r\n<p>Thiết kế th&acirc;n gi&agrave;y được chia khoảng theo c&aacute;c m&agrave;u sắc kh&aacute;c nhau, ph&acirc;n v&ugrave;ng nhất định. Mũi gi&agrave;y v&agrave; phần g&oacute;t m&agrave;u xanh, th&acirc;n giữa l&agrave; t&ocirc;ng x&aacute;m nhạt v&agrave; l&oacute;t gi&agrave;y l&agrave; logo đỏ rực rỡ. Đế gi&agrave;y vẫn được giữ nguy&ecirc;n m&agrave;u trắng classic. VỚi những ch&agrave;ng trai th&iacute;ch năng động, trẻ trung nhưng đơn giản th&igrave; mẫu gi&agrave;y nam n&agrave;y l&agrave; một gợi &yacute; ho&agrave;n hảo cho c&aacute;c ch&agrave;ng.</p>\r\n\r\n<p>Hiện c&aacute;c mẫu&nbsp;gi&agrave;y thể thao nam Vans&nbsp;đang được b&aacute;n với gi&aacute; từ 1,1 tới 1,4 triệu VND. Ch&uacute;ng đang c&oacute; ở tr&ecirc;n website của Vans, bạn c&oacute; thể đặt h&agrave;ng trước khi xuất xưởng để trở th&agrave;nh người đầu ti&ecirc;n sở hữu ch&uacute;ng tr&ecirc;n thị trường.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc/giay-vans-cuc-dep.png', 0, 1, '2016-04-02 19:50:12', '2016-04-02 19:50:12'),
(4, 0, 1, 'Khám phá kỹ nghệ đóng đế giày nam', 'kham-pha-ky-nghe-dong-de-giay-nam', 'Mỗi một mẫu giày nam đều có những phương pháp khác nhau để tạo ra đế giày cho phù hợp. Nếu bạn từng thắc mắc về những kỹ thuật tạo ra đế giày thì bài viết dưới đây', '<p>Mỗi một mẫu<strong>&nbsp;gi&agrave;y nam</strong>&nbsp;đều c&oacute; những phương ph&aacute;p kh&aacute;c nhau để tạo ra đế gi&agrave;y cho ph&ugrave; hợp. Nếu bạn từng thắc mắc về những kỹ thuật tạo ra đế gi&agrave;y th&igrave; b&agrave;i viết dưới đ&acirc;y sẽ gi&uacute;p bạn giải đ&aacute;p thắc mắc.</p>\r\n\r\n<p>1. Phương ph&aacute;p d&aacute;n đế.</p>\r\n\r\n<p>Với phương ph&aacute;p n&agrave;y, người thợ sẽ sử dụng keo d&aacute;n để d&aacute;n &nbsp;outsole với phần Upper. Loại keo chuy&ecirc;n dụng với độ b&aacute;n cao v&agrave; chống thấm nước thường được sử dụng.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/kha-pha-lam-giay-nam-02.png" style="height:405px; width:442px" /></p>\r\n\r\n<p>&nbsp;Với phương ph&aacute;p n&agrave;y, chi ph&iacute; kh&aacute; rẻ lại nhanh ch&oacute;ng, đ&ocirc;i gi&agrave;y nam sẽ nhanh ch&oacute;ng ho&agrave;n thiện. Với c&aacute;c mẫu gi&agrave;y gi&aacute; rẻ hoặc gi&agrave;y thể thao đế cao su thường được sử dụng phương ph&aacute;p n&agrave;y.</p>\r\n\r\n<p>Tuy nhi&ecirc;n nếu sử dụng l&acirc;u th&igrave; lớp keo d&aacute;n sẽ dễ mang tới cảm gi&aacute;c gồ ghề cho lớp đệm, chưa kể lớp keo bong ra với hiện tượng s&uacute;t đế. Với d&ograve;ng Dress Shoes th&igrave; việc bong keo ảnh hưởng rất lớn tới d&aacute;ng gi&agrave;y, v&agrave; gần như kh&oacute; c&oacute; thể sửa lại được.</p>\r\n\r\n<p>2. Phương ph&aacute;p may trong đế.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; một trong những phương ph&aacute;p may&nbsp;<strong>đế gi&agrave;y nam</strong>&nbsp;được &aacute;p dụng rộng r&atilde;i, phổ biến. C&aacute;c phần của đ&ocirc;i gi&agrave;y sẽ được gắn bằng một đường chỉ duy nhất nằm b&ecirc;n trong gi&agrave;y. Đường may được sử dụng bởi một loại m&aacute;y kh&acirc;u chuy&ecirc;n dụng v&agrave; tất nhi&ecirc;n b&igrave;nh thường kh&oacute; m&agrave; nhận ra rằng ch&uacute;ng đ&atilde; được may đế trong.</p>\r\n\r\n<p>Kh&aacute;c với loại d&aacute;n đế, phương ph&aacute;p may đế gi&agrave;y gi&uacute;p cho đ&ocirc;i gi&agrave;y nam bền hơn v&agrave; c&oacute; thể sửa chữa khi hỏng. V&agrave; tất nhi&ecirc;n c&oacute; sự can thiệp của m&aacute;y m&oacute;c n&ecirc;n thời gian cho ra sản phẩm sẽ nhanh hơn rất nhiều.</p>\r\n\r\n<p>Song bất kể phương ph&aacute;p n&agrave;o cũng đều tồn tại nhược điểm nhất định. Với kiểu đ&oacute;ng đế gi&agrave;y n&agrave;y đ&ocirc;i gi&agrave;y dễ bị thấm nước hơn do kh&ocirc;ng c&oacute; lớp chống thấm. Do vậy ph&aacute;i nam n&ecirc;n c&acirc;n nhắc lựa chọn ch&uacute;ng v&agrave;o những ng&agrave;y thwoif tiết kh&ocirc; r&aacute;o.<img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image006.jpg" /></p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/kha-pha-lam-giay-nam-01.png" style="height:447px; width:307px" /></p>\r\n\r\n<p>3. Phương ph&aacute;p may kết hợp.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; phương ph&aacute;p kết hợp hai phương ph&aacute;p tr&ecirc;n.&nbsp;<img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image008.jpg" /></p>\r\n\r\n<p>Đặc điểm của phương ph&aacute;p n&agrave;y l&agrave; c&oacute; một đường may nằm b&ecirc;n trong gi&agrave;y nhưng chỉ may đến phần midsole, một đường Rapid Stitch may ở ngo&agrave;i welt kết nối với phần midsole v&agrave; outsole lại với nhau.</p>\r\n\r\n<p>Phương ph&aacute;p n&agrave;y gi&uacute;p đ&ocirc;i gi&agrave;y nam sẽ bền hơn do đường may ch&iacute;nh chỉ may đến midsole n&ecirc; kh&ocirc;ng lo bị thấm nước. Song cũng thật kh&oacute; sửa chữa hơn nếu đế gi&agrave;y hỏng v&agrave; đế gi&agrave;y cũng thiếu linh hoạt hơn.</p>\r\n\r\n<p>4. Phương ph&aacute;p may cổ truyển &ndash; Goodyear Welted</p>\r\n\r\n<p>L&agrave; phương ph&aacute;p đ&oacute;ng đế gi&agrave;y nam ph&aacute;t triển từ phương ph&aacute;p thủ c&ocirc;ng cổ truyền nhất v&agrave; l&acirc;u đời nhất. Tuy c&oacute; sự can thiệp của m&aacute;y m&oacute;c nhưng phương ph&aacute;p n&agrave;y vẫn hết sức kỳ c&ocirc;ng, tốn k&eacute;m v&agrave; phức tạp chỉ sau hand &ndash; welt.</p>\r\n\r\n<p>Ưu điểm của phương ph&aacute;p n&agrave;y l&agrave; bền, đẹp, lại c&oacute; thể thay đế v&agrave; sửa chữa nhiều lần. V&igrave; kỳ c&ocirc;ng m&agrave; gi&aacute; th&agrave;nh cũng đắt hơn do c&aacute;ch l&agrave;m phức tạp.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc/kha-pha-lam-giay-nam-02.png', 0, 1, '2016-04-02 19:53:09', '2016-04-02 20:42:15'),
(5, 0, 1, 'Muôn vàn cách kết hợp giày nam đẹp', 'muon-van-cach-ket-hop-giay-nam-dep', 'Uống phố đi làm mà không phải băn khoăn quá nhiều trong việc chọn giày nam cho quần kaki', '<p>Quần kaki lu&ocirc;n l&agrave; m&oacute;n thời trang kh&ocirc;ng thể thiếu của nam giới h&egrave; 2015. Quần Kaki nam đơn giản, thoải m&aacute;i ch&iacute;nh l&agrave; những ưu điểm nổi bật khiến c&aacute;c qu&yacute; &ocirc;ng cực kỳ ưa chuộng. C&ugrave;ng Gi&agrave;y Nam Tốt kh&aacute;m ph&aacute; mu&ocirc;n v&agrave;n c&aacute;ch mix đồ của quần kaki với<a href="http://giaynamtot.com/giay-nam-dep-1.html">&nbsp;gi&agrave;y nam đẹp</a>&nbsp;nh&eacute;.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/giay-nam-ket-hop-quan-kaki-1.png" style="height:233px; width:408px" /></p>\r\n\r\n<p>Kh&ocirc;ng qu&aacute; d&agrave;y dặn v&agrave; cứng như chất liệu jeans hầm hố, cũng kh&ocirc;ng mềm mại l&agrave; lượt như quần &acirc;u, quần kaki ra đời giống như m&oacute;n đồ mang tới sự đa dạng trong phong c&aacute;ch cho c&aacute;c ch&agrave;ng. Nhất l&agrave; khi bạn kết hợp ch&uacute;ng với những mẫu gi&agrave;y nam đẹp kh&aacute;c nhau. Mỗi một c&aacute;ch mix đồ sẽ mang tới cho bạn sự mới lạ đầy m&agrave;u sắc cho vẻ ngo&agrave;i cuốn h&uacute;t.</p>\r\n\r\n<p>Gi&agrave;y da nam, gi&agrave;y vải nam, gi&agrave;y cao cổ hay c&aacute;c mẫu gi&agrave;y lười đều c&oacute; thể l&agrave;m bạn với anh ch&agrave;ng quần kaki dễ t&iacute;nh n&agrave;y. Quần kaki trẻ trung với nhiều m&agrave;u sắc kh&aacute;c nhau như đen, be, n&acirc;u, hay ph&aacute; c&aacute;ch với đỏ đ&ocirc;, cực lịch l&atilde;m với xanh coban, xanh dương nhạt hay t&iacute;m cổ điển.</p>\r\n\r\n<p>C&aacute;c mẫu gi&agrave;y nam l&agrave;m bằng chất liệu da th&iacute;ch hợp với c&aacute;c mẫu quần kaki thiết kế phụ vụ c&ocirc;ng sở với m&agrave;u n&acirc;u hay đen truyền thống. Mix c&ugrave;ng với sơ mi l&agrave; bạn đ&atilde; c&oacute; vẻ ngo&agrave;i lịch sự nhưng vẫn thoải m&aacute;i tới nơi l&agrave;m việc rồi.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc/giay-nam-ket-hop-quan-kaki-01.png" style="height:600px; width:415px" /></p>\r\n\r\n<p>Với c&aacute;c mẫu&nbsp;gi&agrave;y cao cổ nam, bạn c&oacute; thể chọn cho m&igrave;nh c&aacute;c mẫu quần kaki &ocirc;ng c&ocirc;n với m&agrave;u sắc bụi bặm ch&uacute;t. Ch&uacute;ng chắc chắn khiến bạn nh&igrave;n cao hơn, c&oacute; ch&uacute;t bụi bặm hoang dại đầy quyến rũ.</p>\r\n\r\n<p>Ngo&agrave;i c&aacute;c mẫu quần kaki d&agrave;i th&igrave; c&aacute;c mẫu quần ngố từ chất liệu kaki cũng c&oacute; thể mang tới cho bạn những phong c&aacute;ch mix đồ kh&aacute;c nhau với gi&agrave;y nam đẹp. Nhưng c&oacute; lẽ sự lựa chọn ho&agrave;n hảo nhất cho ch&uacute;ng l&agrave; c&aacute;c mẫu gi&agrave;y vải nam, gi&agrave;y thể thao nam từ Converse hay Vans, Adidas. Chắc hẳn ch&uacute;ng sẽ khiến bạn h&agrave;i l&ograve;ng</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc/giay-nam-ket-hop-quan-kaki-1.png', 0, 1, '2016-04-02 19:55:47', '2016-04-02 19:55:47'),
(6, 0, 1, 'Khéo léo Xử lý nấm mốc trên giày da nam', 'kheo-leo-xu-ly-nam-moc-tren-giay-da-nam', 'Nấm mốc thường xuất hiện trên giày da nam khi vào mùa ẩm ướt hoặc chúng bị ngấm nước mưa mà bạn không chú ý hong khô. Việc để nấm mốc nảy sinh trên bề mặt giày da khiến', '<p>Nấm mốc thường xuất hiện tr&ecirc;n<a href="http://giaynamtot.com/giay-da-1.html">&nbsp;gi&agrave;y da&nbsp;</a>&nbsp;khi v&agrave;o m&ugrave;a ẩm ướt hoặc ch&uacute;ng bị ngấm nước mưa m&agrave; bạn kh&ocirc;ng ch&uacute; &yacute; hong kh&ocirc;. Việc để nấm mốc nảy sinh tr&ecirc;n bề mặt gi&agrave;y da khiến ch&uacute;ng mất đi vẻ mới mẻ v&agrave; về l&acirc;u d&agrave;i cũng kh&ocirc;ng&nbsp;c&ograve;n bền bỉ nữa.</p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" />Vậy l&agrave;m sao để xử l&yacute; đ&aacute;m nấm mốc đang phủ tr&ecirc;n bề mặt đ&ocirc;i gi&agrave;y da nam của bạn. Thực ra n&oacute; kh&ocirc;ng qu&aacute; kh&oacute; khăn hay phức tạp. Gi&agrave;y nam tốt giới thiệu cho bạn một v&agrave;i mẹo để loại bỏ triệt để nấm mốc, trả lại vẻ mới mẻ cho đ&ocirc;i gi&agrave;y của bạn nehs.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/xu-ly-nam--03moc-tren-giay-da.png" style="height:407px; width:405px" /></p>\r\n\r\n<p>Phần lớn những đ&ocirc;i gi&agrave;y da nam thường bị cứng v&agrave; độ bền giảm khi bạn kh&ocirc;ng bảo quản ch&uacute;ng đ&uacute;ng c&aacute;ch nếu bị ẩm ướt. Ch&uacute;ng khiến da dễ bị kh&ocirc; nứt, v&agrave; nấm mốc, mất đi m&agrave;u sắc vốn c&oacute; ban đầu của n&oacute;.</p>\r\n\r\n<p>L&agrave;m sao để loại bỏ nấm mốc? Bạn c&oacute; thể sử dụng miếng bọt biển đ&atilde; tẩm qua khoảng 5ml chất diệt nấm đ&atilde; pha lo&atilde;ng với 500ml nước rồi lau hoặc lau bằng miếng b&ocirc;ng đ&atilde; thấm nước s&uacute;c miệng diệt khuẩn rồi đ&aacute;nh lại gi&agrave;y như c&aacute;c bước thường thấy.</p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image004.jpg" />Một v&agrave;i lưu &yacute; bạn cần ch&uacute; &yacute; khi tẩy nấm mốc tr&ecirc;n bề mặt đ&ocirc;i gi&agrave;y da nam:</p>\r\n\r\n<p>Khi tẩy n&ecirc;n bắt đầu một mảng nhỏ, để đảm bảo da kh&ocirc;ng bị đổi m&agrave;u. Nếu mọi thứ đều ổn th&igrave; bạn tiếp tục c&ocirc;ng đoạn l&agrave;m sạch. Sử dụng vải sạch ẩm hoặc b&agrave;n chải nhỏ, với lớp l&ocirc;ng mềm để l&agrave;m sạch vết mốc. Nếu trường hợp vết mốc kh&oacute; l&agrave;m sạch th&igrave; c&oacute; thể sử dụng x&agrave; ph&ograve;ng c&oacute; ch&uacute;t chất tẩy rửa, sau đ&oacute; d&ugrave;ng khăn nh&uacute;ng nước để tẩy đi phần x&agrave; ph&ograve;ng c&ograve;n d&iacute;nh v&agrave; để ch&uacute;ng tự kh&ocirc;.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/xu-ly-nam-moc-tren-giay-da-1.png" style="height:402px; width:717px" /></p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image006.jpg" />C&aacute;ch giữ đ&ocirc;i&nbsp;gi&agrave;y da nam&nbsp;tốt nhất l&agrave; lu&ocirc;n để ch&uacute;ng ở những nơi kh&ocirc; r&aacute;o, tho&aacute;ng m&aacute;t tr&aacute;nh nắng n&oacute;ng. H&atilde;y thường xuy&ecirc;n đ&aacute;nh xi b&oacute;ng cho đ&ocirc;i gi&agrave;y trước khi bạn mang ch&uacute;ng ra khỏi nh&agrave;. Điều đ&oacute; rất c&oacute; hiệu quả trong việc để đ&ocirc;i gi&agrave;y kh&ocirc;ng bị cứng.</p>\r\n\r\n<p>V&agrave;o thời tiết m&ugrave;a h&egrave; với những cơn mưa bất chợt dễ khiến bạn gặp t&igrave;nh trạng ẩm ướt cho đ&ocirc;i gi&agrave;y da nam. Việc c&oacute; nấm mốc tuy kh&ocirc;ng ảnh hưởng lớn nhưng sẽ l&agrave;m mất đi t&iacute;nh thẩm mỹ. Chỉ một v&agrave;i bước đơn giản như tr&ecirc;n l&agrave; bạn c&oacute; thể dễ d&agrave;ng biến ch&uacute;ng trở th&agrave;nh như mới. Ch&uacute;c bạn lu&ocirc;n giữ cho đ&ocirc;i gi&agrave;y của m&igrave;nh đẹp v&agrave; s&aacute;ng b&oacute;ng.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/xu-ly-nam--03moc-tren-giay-da.png', 0, 1, '2016-04-02 19:59:37', '2016-04-02 19:59:37'),
(7, 0, 1, 'Đã mắt với bộ sưu tập giày nam Adiddas ', 'da-mat-voi-bo-suu-tap-giay-nam-adiddas', 'Trong tuần lễ NBA All – Star, ông lớn Adidas đã hào hứng cho ra mắt một trong những giày nam siêu phẩm được mệnh danh là sáng tạo nhất của mình chính là XENO. Cho thời đi', '<p>Trong tuần lễ NBA All &ndash; Star, &ocirc;ng lớn Adidas đ&atilde; h&agrave;o hứng cho ra mắt một trong những gi&agrave;y nam si&ecirc;u phẩm được mệnh danh l&agrave; s&aacute;ng tạo nhất của m&igrave;nh ch&iacute;nh l&agrave; XENO. Cho thời điểm hiện tại th&igrave; c&ocirc;ng nghệ XENO n&agrave;y được Adidas n&acirc;ng cấp với nhiều hướng đi mới với c&aacute;i t&ecirc;n hiện đại: &ldquo;Chromatech&rdquo;.</p>\r\n\r\n<p>C&oacute; điều g&igrave; đặc biệt ở mẫu<a href="http://giaynamtot.com/giay-the-thao-adidas-1-1-5204681.html"><strong>&nbsp;gi&agrave;y nam Adidas</strong></a>&nbsp;SL Loop Racer &ndash; mẫu gi&agrave;y được &aacute;p dụng c&ocirc;ng nghệ Chromatech. Đ&oacute; ch&iacute;nh l&agrave; khả năng đổi m&agrave;u theo c&aacute;c nh&acirc;n tố ở c&aacute;c m&ocirc;i trường kh&aacute;c nhau m&agrave; bạn ở đ&oacute;. Phần th&acirc;n Chromatech sẽ tạo ra một đ&ocirc;i gi&agrave;y v&ocirc; c&ugrave;ng độc đ&aacute;o, kh&aacute;c biệt ho&agrave;n to&agrave;n so với tất cả c&aacute;c mẫu gi&agrave;y thể thao nam trước đ&oacute;.</p>\r\n\r\n<p>Bộ sưu tập gi&agrave;y nam Adidas n&agrave;y c&oacute; ba gam m&agrave;u chủ đạo l&agrave; v&agrave;ng, đen, t&iacute;m bắt mắt. Phần đế trắng tạo sự tương phản bắt mắt với phần th&acirc;n gi&agrave;y, khiến bạn trở n&ecirc;n nổi bật tr&ecirc;n phố.</p>\r\n\r\n<p>Bề mặt của ch&uacute;ng được nhấn nh&aacute; với họa tiết chấm bi hoặc h&igrave;nh lục gi&aacute;c lạ mắt, thực sự to&aacute;t l&ecirc;n vẻ c&aacute; t&iacute;nh v&agrave; h&uacute;t mắt người nh&igrave;n.&nbsp;<img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image002.jpg" /><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image004.jpg" /></p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/giay-the-thao-adidas-xeno.png" style="height:379px; width:582px" /></p>\r\n\r\n<p>Với những ch&agrave;ng trai đam m&ecirc; thể thao th&igrave; mẫu gi&agrave;y nam n&agrave;y hẳn kh&oacute; m&agrave; bỏ qua. M&agrave;u sắc nh&atilde; nhặn dễ d&agrave;ng gi&uacute;p bạn mix với bất kỳ m&oacute;n đồ hay gam m&agrave;u n&agrave;o. C&ocirc;ng nghệ XENO gi&uacute;p ch&acirc;n bạn di chuyển thoải m&aacute;i, nhẹ nh&agrave;ng với lực n&acirc;ng đỡ tuyệt vời cho mỗi bước chạy.&nbsp;<img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image006.jpg" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/giay-the-thao-adidas-xeno.png', 0, 1, '2016-04-02 20:01:52', '2016-04-02 20:01:52'),
(8, 0, 1, 'Hé lộ mẫu giày nam hot nhất hè 2015', 'he-lo-mau-giay-nam-hot-nhat-he-2015', 'Tại sao lại vậy. Không phải là cái tên quá xa lạ nhưng tại sao hè này qua hè khác chúng vẫn được yêu thích tới vậy. Cùng giày nam tốt khám phá lí do nhé', '<p>L&agrave; anh em trong họ h&agrave;ng&nbsp;<strong>gi&agrave;y lười nam</strong>, boat shoes ch&iacute;nh l&agrave; c&aacute;i t&ecirc;n của mẫu gi&agrave;y nam được đ&aacute;nh gi&aacute; l&agrave; được ưa chuộng nhất trong h&egrave; 2015. Tại sao lại vậy. Kh&ocirc;ng phải l&agrave; c&aacute;i t&ecirc;n qu&aacute; xa lạ nhưng tại sao h&egrave; n&agrave;y qua h&egrave; kh&aacute;c ch&uacute;ng vẫn được y&ecirc;u th&iacute;ch tới vậy. C&ugrave;ng gi&agrave;y nam tốt kh&aacute;m ph&aacute; l&iacute; do nh&eacute;</p>\r\n\r\n<p>Những đ&ocirc;i gi&agrave;y nam Boat Shoes vốn l&agrave; cảm hứng từ những đ&ocirc;i gi&agrave;y đi tr&ecirc;n t&agrave;u biển. Sự bền bỉ, tiện lợi của n&oacute; l&agrave; nguồn cảm hứng để ph&aacute;t triển ch&uacute;ng ứng dụng rộng r&atilde;i hơn trong giới thời trang.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-01.png" style="height:417px; width:629px" /></p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ch&uacute;ng l&agrave; họ h&agrave;ng trong d&ograve;ng gi&agrave;y lười n&ecirc;n những ưu điểm của gi&agrave;y lười nam đều hội tụ đủ trong một đ&ocirc;i Boat shoes. Chất liệu l&agrave;m n&ecirc;n gi&agrave;y Boat shoes kh&ocirc;ng giống với c&aacute;c loại gi&agrave;y lười phổ biến l&agrave; từ da thường v&agrave; da lộn. Ch&uacute;ng được l&agrave;m bằng chất liệu bạt l&agrave; phần lớn. Thiết kế với kh&ocirc;ng gian như chiếc thuyền tạo cảm gi&aacute;c thoải m&aacute;i cho ch&acirc;n khi đi lại.</p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image004.jpg" />Đế cao su cao cấp được sử dụng l&agrave;m đế chống trơn trượt một c&aacute;ch tốt nhất. Đ&oacute; cũng l&agrave; l&yacute; do m&agrave; c&aacute;c thủy thủ thường sử dụng ch&uacute;ng tr&ecirc;n t&agrave;u v&igrave; thường xuy&ecirc;n chịu cảnh s&oacute;ng biển lắc lư hoặc s&agrave;n ướt. V&igrave; vậy khi biến tấu ch&uacute;ng theo xu hướng thời trang, ch&uacute;ng được y&ecirc;u th&iacute;ch d&ugrave;ng trong cả những ng&agrave;y mưa v&igrave; chất liệu bạt &iacute;t thấm nước.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-3.png" style="height:422px; width:640px" /></p>\r\n\r\n<p>Một đ&ocirc;i gi&agrave;y nam Boat shoes chuẩn mực sẽ được sử dụng những kỹ thuật cắt da đặc biệt, b&ocirc;i hồ v&agrave; dầu ri&ecirc;ng để tr&aacute;nh bong tr&oacute;c v&agrave; thấm nước. Thật qu&aacute; ho&agrave;n hảo cho những ng&agrave;y h&egrave; nắng n&oacute;ng v&agrave; những cơn mưa r&agrave;o bất chợt.</p>\r\n\r\n<p>Boat shoes l&agrave; d&ograve;ng gi&agrave;y nam với nhiều m&agrave;u sắc trẻ trung kh&aacute;c nhau chứ kh&ocirc;ng g&ograve; &eacute;p v&agrave;o hai t&ocirc;ng m&agrave;u thường thấy l&agrave; đen v&agrave; n&acirc;u. Bạn c&oacute; thể dễ d&agrave;ng bắt gặp tr&ecirc;n kệ những đ&ocirc;i boat shoes đỏ burbery hay phối m&agrave;u bắt mắt. Style của những qu&yacute; &ocirc;ng bỏ phiếu cho đ&ocirc;i gi&agrave;y n&agrave;y l&uacute;c n&agrave;o cũng năng động nhưng cũng hết sức phong c&aacute;ch.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-01.png', 0, 1, '2016-04-02 20:04:06', '2016-04-09 03:47:05'),
(9, 0, 1, 'Mách bạn bí kíp làm khô giày vải nam nhanh', 'mach-ban-bi-kip-lam-kho-giay-vai-nam-nhanh', 'Đây là ba cách đơn giản để làm khô đôi giày vải nam cho bạn khi bị mưa ướt vào ngày hè', 'Gi&agrave;y vải nam&nbsp;trong m&ugrave;a h&egrave; c&oacute; thể n&oacute;i l&agrave; item giải nhiệt tuyệt vời cho đ&ocirc;i ch&acirc;n của c&aacute;c ch&agrave;ng. Nhưng m&ugrave;a h&egrave; với những cơn mưa bất chợt cũng dễ d&agrave;ng khiến đ&ocirc;i gi&agrave;y y&ecirc;u th&iacute;ch của bạn ướt nhẹp. Vậy l&agrave;m sao để ch&uacute;ng kh&ocirc; nhanh hơn v&agrave; kh&ocirc;ng sặc m&ugrave;i ẩm ướt. C&ugrave;ng gi&agrave;y nam tốt tham khảo c&aacute;c mẹo sau nh&eacute;.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/lam-sach-giay-vai-nam.png" style="height:392px; width:571px" /></p>\r\n\r\n<p>1. L&agrave;m bạn với giấy b&aacute;o cũ.</p>\r\n\r\n<p>Nếu đ&ocirc;i gi&agrave;y vải nam của bạn đang ẩm ướt sau cơn mưa, h&atilde;y tận dụng b&aacute;o cũ v&agrave; nh&eacute;t đầy v&agrave;o b&ecirc;n trong đ&ocirc;i gi&agrave;y. Nếu gi&agrave;y trắng th&igrave; n&ecirc;n sử dụng giấy trắng để m&agrave;u mực kh&ocirc;ng bị loang ra gi&agrave;y nh&eacute;. Giấy b&aacute;o c&oacute; t&aacute;c dụng h&uacute;t nước ẩm rất tốt đ&oacute;. Sau đ&oacute; lại thay bằng lớp b&aacute;o kh&aacute;c khi ch&uacute;ng đ&atilde; ẩm hết to&agrave;n bộ.</p>\r\n\r\n<p>Sau đ&oacute;, mang đ&ocirc;i gi&agrave;y vải ra phơi ở chỗ tho&aacute;ng v&agrave; nắng vừa đủ nh&eacute; ph&aacute;i nam.</p>\r\n\r\n<p>2. L&agrave;m kh&ocirc; si&ecirc;u tốc với m&aacute;y sấy t&oacute;c.</p>\r\n\r\n<p>Nếu bạn kh&ocirc;ng c&oacute; thời gian để l&agrave;m như c&aacute;ch một th&igrave; h&atilde;y sử dụng m&aacute;y sấy hoặc quạt điện để đ&ocirc;i gi&agrave;y vải nam nhanh kh&ocirc; hơn. N&ecirc;n để m&aacute;y sấy ở khoảng c&aacute;ch tầm 15cm l&agrave; vừa nếu kh&ocirc;ng muốn vải gi&agrave;y bị cứng, l&acirc;u dần dễ mục r&aacute;ch hơn. Chỉ tầm 2 tiếng sau l&agrave; đ&ocirc;i gi&agrave;y của bạn về tổng thể đ&atilde; kh&ocirc; r&aacute;o rồi đ&oacute;.</p>\r\n\r\n<p>3. Tận dụng m&aacute;y sấy quần &aacute;o.</p>\r\n\r\n<p>Nếu nh&agrave; bạn c&oacute; m&aacute;y sấy quần &aacute;o th&igrave; qu&aacute; tuyệt, bạn c&oacute; thể tận dụng để l&agrave;m kh&ocirc; đ&ocirc;i gi&agrave;y vải nam của m&igrave;nh.</p>\r\n\r\n<p>Đặt mũi gi&agrave;y hướng l&ecirc;n tr&ecirc;n v&agrave; đế gi&agrave;y hướng ra ngo&agrave;i khi treo v&agrave;o m&aacute;y sấy, n&ecirc;n treo gi&agrave;y ở cửa m&aacute;y sấy để gi&agrave;y kh&ocirc;ng bị va chạm với l&ograve;ng m&aacute;y, vừa tr&aacute;nh bị hư gi&agrave;y vừa tr&aacute;nh hỏng m&aacute;y.</p>\r\n\r\n<p>Một lưu &yacute; l&agrave; bạn n&ecirc;n c&agrave;i đặt chế độ sấy ở mức thấp hoặc trung b&igrave;nh, đặt chu tr&igrave;nh sấy khoảng một tiếng l&agrave; được để đảm bảo tuổi thọ cho đ&ocirc;i gi&agrave;y của m&igrave;nh.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; ba c&aacute;ch đơn giản để&nbsp;l&agrave;m kh&ocirc; đ&ocirc;i gi&agrave;y vải nam&nbsp;cho bạn khi bị mưa ướt v&agrave;o ng&agrave;y h&egrave;. Thật dễ d&agrave;ng phải kh&ocirc;ng. Đừng ngại diện gi&agrave;y vải v&agrave;o ng&agrave;y h&egrave; v&igrave; sợ mưa ướt v&igrave; b&acirc;y giờ bạn đ&atilde; sở hữu b&iacute; quyết để khắc phục rồi đ&oacute;.&nbsp;</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/lam-sach-giay-vai-nam.png', 0, 1, '2016-04-02 20:06:47', '2016-04-02 20:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `value`, `description`, `created_at`, `updated_at`) VALUES
(1, 'sitename', 'Shop Giày Nam', '', NULL, NULL),
(2, 'title', 'Giày Nam Giá Rẻ - Giày Nam Đẹp Nhất 2016 ', '', NULL, NULL),
(3, 'description', 'Giầy Nam Hot Ưu Đãi Hấp Dẫn, Sale Tới 50%, Miễn phí giao giày nam, Bảo hành trọn đời, 365 ngày đổi trả giầy.', '', NULL, NULL),
(4, 'keyword', 'giay nam, mua giay nam, giày nam đẹp, giầy nam, giày nam, giay dep nam, giay nam 2016, bán giày nam đẹp, giày dép nam thời trang', '', NULL, NULL),
(5, 'logo', '/upload/images/logo.png             ', '', NULL, NULL),
(6, 'favicon', '/public/favicon.ico', '', NULL, NULL),
(7, 'image', '/upload/images/shop-image.jpg', '', NULL, NULL),
(8, 'status', '1', '', NULL, NULL),
(9, 'fb_register', 'Đăng kí tài khoản thành công tại [sitename]', '', NULL, NULL),
(10, 'fb_order', 'Đơn hàng số [order_id] đã được đặt thành công', '', NULL, NULL),
(11, 'fb_checkout', 'Xác nhận thanh toán đơn hàng số [order_id]', '', NULL, NULL),
(12, 'fb_ship', 'Đơn hàng số [order_id] đang được vận chuyển', '', NULL, NULL),
(13, 'fb_done', 'Xác nhận giao dịch thành công đơn hàng số [order_id] ', '', NULL, NULL),
(14, 'fb_cancel', 'Xác nhận hủy đơn hàng số [order_id] ', '', NULL, NULL),
(16, 'ads-link2', 'https://www.facebook.com/', '', NULL, NULL),
(17, 'ads-image2', 'http://timemart.dev/upload/images/1.jpg', '', NULL, NULL),
(18, 'ads-link3', 'https://www.facebook.com/', '', NULL, NULL),
(19, 'ads-image3', 'http://timemart.dev/upload/images/2.jpg', '', NULL, NULL),
(20, 'ads-link4', 'https://www.facebook.com', '', NULL, NULL),
(21, 'ads-image4', 'http://timemart.dev/upload/images/ads728.png', '', NULL, NULL),
(22, 'ads-link11', '/', '', NULL, NULL),
(23, 'ads-image11', 'http://timemart.dev/upload/images/1.jpg', '', NULL, NULL),
(26, 'ads-link12', '/', '', NULL, NULL),
(27, 'ads-image12', 'http://timemart.dev/upload/images/2.jpg', '', NULL, NULL),
(28, 'ads-link13', '/', '', NULL, NULL),
(29, 'ads-image13', 'http://timemart.dev/upload/images/3.jpg', '', NULL, NULL),
(30, 'livechat-bg', '#1737b9', '', NULL, NULL),
(31, 'livechat-page', 'https://www.facebook.com/shopbanhang123', '', NULL, NULL),
(32, 'livechat-title', 'Chat với chúng tôi !', '', NULL, NULL),
(33, 'livechat-hello', 'Xin chào! Cảm ơn bạn đã ghé thăm chúng tôi. Hãy nhấn nút Start để chat với hỗ trợ của chúng tôi: ', '', NULL, NULL),
(35, 'livechat-lang', 'vi_VN', '', NULL, NULL),
(36, 'livechat-status', '1', '', NULL, NULL),
(37, 'gioithieu-title', 'Giới thiệu', '', NULL, NULL),
(38, 'gioithieu-content', '<p>Đ&acirc;y l&agrave; trang giới thiệu.</p>\r\n', '', NULL, NULL),
(39, 'gioithieu-description', 'Đây là thẻ mô tả', '', NULL, NULL),
(40, 'gioithieu-keyword', 'Đây là thẻ từ khóa', '', NULL, NULL),
(42, 'dieukhoan-title', 'Điều khoản dịch vụ', '', NULL, NULL),
(43, 'dieukhoan-content', '<p style="text-align:justify">Khi qu&yacute; kh&aacute;ch truy cập v&agrave;o trang web của ch&uacute;ng t&ocirc;i c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch đồng &yacute; với c&aacute;c điều khoản n&agrave;y. Trang web c&oacute; quyền thay đổi, chỉnh sửa, th&ecirc;m hoặc lược bỏ bất kỳ phần n&agrave;o trong Quy định v&agrave; Điều kiện sử dụng, v&agrave;o bất cứ l&uacute;c n&agrave;o. C&aacute;c thay đổi c&oacute; hiệu lực ngay khi được đăng tr&ecirc;n trang web m&agrave; kh&ocirc;ng cần th&ocirc;ng b&aacute;o trước. V&agrave; khi qu&yacute; kh&aacute;ch tiếp tục sử dụng trang web, sau khi c&aacute;c thay đổi về quy định v&agrave; điều kiện được đăng tải, c&oacute; nghĩa l&agrave; qu&yacute; kh&aacute;ch chấp nhận với những thay đổi đ&oacute;.</p>\r\n\r\n<p style="text-align:justify">Qu&yacute; kh&aacute;ch vui l&ograve;ng kiểm tra thường xuy&ecirc;n để cập nhật những thay đổi của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p style="text-align:justify"><strong>1. Hướng dẫn sử dụng web</strong></p>\r\n\r\n<p style="text-align:justify">- Khi v&agrave;o web của ch&uacute;ng t&ocirc;i, người d&ugrave;ng tối thiểu phải 18 tuổi hoặc truy cập dưới sự gi&aacute;m s&aacute;t của cha mẹ hay người gi&aacute;m hộ hợp ph&aacute;p.</p>\r\n\r\n<p style="text-align:justify">- Ch&uacute;ng t&ocirc;i cấp giấy ph&eacute;p sử dụng để bạn c&oacute; thể mua sắm tr&ecirc;n web trong khu&ocirc;n khổ điều khoản v&agrave; điều kiện sử dụng đ&atilde; đề ra.</p>\r\n\r\n<p style="text-align:justify">- Nghi&ecirc;m cấm sử dụng bất kỳ phần n&agrave;o của trang web n&agrave;y với mục đ&iacute;ch thương mại hoặc nh&acirc;n danh bất kỳ đối t&aacute;c thứ ba n&agrave;o nếu kh&ocirc;ng được ch&uacute;ng t&ocirc;i cho ph&eacute;p bằng văn bản. Nếu vi phạm bất cứ điều n&agrave;o trong đ&acirc;y, ch&uacute;ng t&ocirc;i sẽ hủy giấy ph&eacute;p của bạn m&agrave; kh&ocirc;ng cần b&aacute;o trước.</p>\r\n\r\n<p style="text-align:justify">- Trang web n&agrave;y chỉ d&ugrave;ng để cung cấp th&ocirc;ng tin sản phẩm chứ ch&uacute;ng t&ocirc;i kh&ocirc;ng phải nh&agrave; sản xuất n&ecirc;n những nhận x&eacute;t hiển thị tr&ecirc;n web l&agrave; &yacute; kiến c&aacute; nh&acirc;n của kh&aacute;ch h&agrave;ng, kh&ocirc;ng phải của ch&uacute;ng t&ocirc;i.</p>\r\n\r\n<p style="text-align:justify">- Qu&yacute; kh&aacute;ch phải đăng k&yacute; t&agrave;i khoản với th&ocirc;ng tin x&aacute;c thực về bản th&acirc;n v&agrave; phải cập nhật nếu c&oacute; bất kỳ thay đổi n&agrave;o. Mỗi người truy cập phải c&oacute; tr&aacute;ch nhiệm với mật khẩu, t&agrave;i khoản v&agrave; hoạt động của m&igrave;nh tr&ecirc;n web. Hơn nữa, qu&yacute; kh&aacute;ch phải th&ocirc;ng b&aacute;o cho ch&uacute;ng t&ocirc;i biết khi t&agrave;i khoản bị truy cập tr&aacute;i ph&eacute;p. Ch&uacute;ng t&ocirc;i kh&ocirc;ng chịu bất kỳ tr&aacute;ch nhiệm n&agrave;o, d&ugrave; trực tiếp hay gi&aacute;n tiếp, đối với những thiệt hại hoặc mất m&aacute;t g&acirc;y ra do qu&yacute; kh&aacute;ch kh&ocirc;ng tu&acirc;n thủ quy định.</p>\r\n\r\n<p style="text-align:justify">- Trong suốt qu&aacute; tr&igrave;nh đăng k&yacute;, qu&yacute; kh&aacute;ch đồng &yacute; nhận email quảng c&aacute;o từ website. Sau đ&oacute;, nếu kh&ocirc;ng muốn tiếp tục nhận mail, qu&yacute; kh&aacute;ch c&oacute; thể từ chối bằng c&aacute;ch nhấp v&agrave;o đường link ở dưới c&ugrave;ng trong mọi email quảng c&aacute;o.</p>\r\n\r\n<p style="text-align:justify"><strong>2. Chấp nhận đơn h&agrave;ng v&agrave; gi&aacute; cả</strong></p>\r\n\r\n<p style="text-align:justify">- Ch&uacute;ng t&ocirc;i c&oacute; quyền từ chối hoặc hủy đơn h&agrave;ng của qu&yacute; kh&aacute;ch v&igrave; bất kỳ l&yacute; do g&igrave; v&agrave;o bất kỳ l&uacute;c n&agrave;o. Ch&uacute;ng t&ocirc;i c&oacute; thể hỏi th&ecirc;m về số điện thoại v&agrave; địa chỉ trước khi nhận đơn h&agrave;ng.</p>\r\n\r\n<p style="text-align:justify">- Ch&uacute;ng t&ocirc;i cam kết sẽ cung cấp th&ocirc;ng tin gi&aacute; cả ch&iacute;nh x&aacute;c nhất cho người ti&ecirc;u d&ugrave;ng. Tuy nhi&ecirc;n, đ&ocirc;i l&uacute;c vẫn c&oacute; sai s&oacute;t xảy ra, v&iacute; dụ như trường hợp gi&aacute; sản phẩm kh&ocirc;ng hiển thị ch&iacute;nh x&aacute;c tr&ecirc;n trang web hoặc sai gi&aacute;, t&ugrave;y theo từng trường hợp ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ hướng dẫn hoặc th&ocirc;ng b&aacute;o hủy đơn h&agrave;ng đ&oacute; cho qu&yacute; kh&aacute;ch. Ch&uacute;ng t&ocirc;i cũng c&oacute; quyền từ chối hoặc hủy bỏ bất kỳ đơn h&agrave;ng n&agrave;o d&ugrave; đơn h&agrave;ng đ&oacute; đ&atilde; hay chưa được x&aacute;c nhận hoặc đ&atilde; bị thanh to&aacute;n.</p>\r\n\r\n<p style="text-align:justify"><strong>3. Thương hiệu v&agrave; bản quyền</strong></p>\r\n\r\n<p style="text-align:justify">- Mọi quyền sở hữu tr&iacute; tuệ (đ&atilde; đăng k&yacute; hoặc chưa đăng k&yacute;), nội dung th&ocirc;ng tin v&agrave; tất cả c&aacute;c thiết kế, văn bản, đồ họa, phần mềm, h&igrave;nh ảnh, video, &acirc;m nhạc, &acirc;m thanh, bi&ecirc;n dịch phần mềm, m&atilde; nguồn v&agrave; phần mềm cơ bản đều l&agrave; t&agrave;i sản của ch&uacute;ng t&ocirc;i. To&agrave;n bộ nội dung của trang web được bảo vệ bởi luật bản quyền của Việt Nam v&agrave; c&aacute;c c&ocirc;ng ước quốc tế. Bản quyền đ&atilde; được bảo lưu.</p>\r\n\r\n<p style="text-align:justify"><strong>4. Quyền ph&aacute;p l&yacute;</strong></p>\r\n\r\n<p style="text-align:justify">- C&aacute;c điều kiện, điều khoản v&agrave; nội dung của trang web n&agrave;y được điều chỉnh bởi luật ph&aacute;p Việt Nam v&agrave; T&ograve;a &aacute;n c&oacute; thẩm quyền tại Việt Nam sẽ giải quyết bất kỳ tranh chấp n&agrave;o ph&aacute;t sinh từ việc sử dụng tr&aacute;i ph&eacute;p trang web n&agrave;y.</p>\r\n\r\n<p style="text-align:justify"><strong>5. Quy định về bảo mật</strong></p>\r\n\r\n<p style="text-align:justify">- Trang web của ch&uacute;ng t&ocirc;i coi trọng việc bảo mật th&ocirc;ng tin v&agrave; sử dụng c&aacute;c biện ph&aacute;p tốt nhất bảo vệ th&ocirc;ng tin v&agrave; việc thanh to&aacute;n của qu&yacute; kh&aacute;ch. Th&ocirc;ng tin của qu&yacute; kh&aacute;ch trong qu&aacute; tr&igrave;nh thanh to&aacute;n sẽ được m&atilde; h&oacute;a để đảm bảo an to&agrave;n. Sau khi qu&yacute; kh&aacute;ch ho&agrave;n th&agrave;nh qu&aacute; tr&igrave;nh đặt h&agrave;ng, qu&yacute; kh&aacute;ch sẽ tho&aacute;t khỏi chế độ an to&agrave;n.</p>\r\n\r\n<p style="text-align:justify">- Qu&yacute; kh&aacute;ch kh&ocirc;ng được sử dụng bất kỳ chương tr&igrave;nh, c&ocirc;ng cụ hay h&igrave;nh thức n&agrave;o kh&aacute;c để can thiệp v&agrave;o hệ thống hay l&agrave;m thay đổi cấu tr&uacute;c dữ liệu. Trang web cũng nghi&ecirc;m cấm việc ph&aacute;t t&aacute;n, truyền b&aacute; hay cổ vũ cho bất kỳ hoạt động n&agrave;o nhằm can thiệp, ph&aacute; hoại hay x&acirc;m nhập v&agrave;o dữ liệu của hệ thống. C&aacute; nh&acirc;n hay tổ chức vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước ph&aacute;p luật nếu cần thiết.</p>\r\n\r\n<p style="text-align:justify">- Mọi th&ocirc;ng tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan ph&aacute;p luật y&ecirc;u cầu, ch&uacute;ng t&ocirc;i sẽ buộc phải cung cấp những th&ocirc;ng tin n&agrave;y cho c&aacute;c cơ quan ph&aacute;p luật.</p>\r\n\r\n<p style="text-align:justify"><strong>6. Thay đổi, hủy bỏ giao dịch tại website</strong></p>\r\n\r\n<p style="text-align:justify">Trong mọi trường hợp, kh&aacute;ch h&agrave;ng đều c&oacute; quyền chấm dứt giao dịch nếu đ&atilde; thực hiện c&aacute;c biện ph&aacute;p sau đ&acirc;y:</p>\r\n\r\n<p style="text-align:justify">- Th&ocirc;ng b&aacute;o cho ch&uacute;ng t&ocirc;i về việc hủy giao dịch qua đường d&acirc;y n&oacute;ng 04.6674.2332</p>\r\n\r\n<p style="text-align:justify">- Trả lại h&agrave;ng ho&aacute; đ&atilde; nhận nhưng chưa sử dụng hoặc hưởng bất kỳ lợi &iacute;ch n&agrave;o từ h&agrave;ng h&oacute;a đ&oacute; (theo quy định của ch&iacute;nh s&aacute;ch đổi trả h&agrave;ng).</p>\r\n', '', NULL, NULL),
(44, 'dieukhoan-description', 'Khi quý khách truy cập vào trang web của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược', '', NULL, NULL),
(45, 'dieukhoan-keyword', 'Đây là thẻ keyword', '', NULL, NULL),
(46, 'huongdan-title', 'Hướng dẫn mua hàng', '', NULL, NULL),
(47, 'huongdan-content', '<p style="text-align:justify"><strong>Bước 1:</strong> Truy cập website v&agrave; lựa chọn sản phẩm cần mua để mua h&agrave;ng</p>\r\n\r\n<p style="text-align:justify"><strong>Bước 2:</strong> Click v&agrave; sản phẩm muốn mua, m&agrave;n h&igrave;nh hiển thị ra pop up với c&aacute;c lựa chọn sau</p>\r\n\r\n<p style="text-align:justify">Nếu bạn muốn tiếp tục mua h&agrave;ng: Bấm v&agrave;o phần tiếp tục mua h&agrave;ng để lựa chọn th&ecirc;m sản phẩm v&agrave;o giỏ h&agrave;ng</p>\r\n\r\n<p style="text-align:justify">Nếu bạn muốn xem giỏ h&agrave;ng để cập nhật sản phẩm: Bấm v&agrave;o xem giỏ h&agrave;ng</p>\r\n\r\n<p style="text-align:justify">Nếu bạn muốn đặt h&agrave;ng v&agrave; thanh to&aacute;n cho sản phẩm n&agrave;y vui l&ograve;ng bấm v&agrave;o: Đặt h&agrave;ng v&agrave; thanh to&aacute;n</p>\r\n\r\n<p style="text-align:justify"><strong>Bước 3:</strong> Lựa chọn th&ocirc;ng tin t&agrave;i khoản thanh to&aacute;n</p>\r\n\r\n<p style="text-align:justify">Nếu bạn đ&atilde; c&oacute; t&agrave;i khoản vui l&ograve;ng nhập th&ocirc;ng tin t&ecirc;n đăng nhập l&agrave; email v&agrave; mật khẩu v&agrave;o mục đ&atilde; c&oacute; t&agrave;i khoản tr&ecirc;n hệ thống</p>\r\n\r\n<p style="text-align:justify">Nếu bạn chưa c&oacute; t&agrave;i khoản v&agrave; muốn đăng k&yacute; t&agrave;i khoản vui l&ograve;ng điền c&aacute;c th&ocirc;ng tin c&aacute; nh&acirc;n để tiếp tục đăng k&yacute; t&agrave;i khoản. Khi c&oacute; t&agrave;i khoản bạn sẽ dễ d&agrave;ng theo d&otilde;i được đơn h&agrave;ng của m&igrave;nh</p>\r\n\r\n<p style="text-align:justify">Nếu bạn muốn mua h&agrave;ng m&agrave; kh&ocirc;ng cần t&agrave;i khoản vui l&ograve;ng nhấp chuột v&agrave;o mục đặt h&agrave;ng kh&ocirc;ng cần t&agrave;i khoản</p>\r\n\r\n<p style="text-align:justify"><strong>Bước 4:</strong> Điền c&aacute;c th&ocirc;ng tin của bạn để nhận đơn h&agrave;ng, lựa chọn h&igrave;nh thức thanh to&aacute;n v&agrave; vận chuyển cho đơn h&agrave;ng của m&igrave;nh</p>\r\n\r\n<p style="text-align:justify"><strong>Bước 5:</strong> Xem lại th&ocirc;ng tin đặt h&agrave;ng, điền ch&uacute; th&iacute;ch v&agrave; gửi đơn h&agrave;ng</p>\r\n\r\n<p style="text-align:justify">Sau khi nhận được đơn h&agrave;ng bạn gửi ch&uacute;ng t&ocirc;i sẽ li&ecirc;n hệ bằng c&aacute;ch gọi điện lại để x&aacute;c nhận lại đơn h&agrave;ng v&agrave; địa chỉ của bạn.</p>\r\n\r\n<p style="text-align:justify">Tr&acirc;n trọng cảm ơn.</p>\r\n', '', NULL, NULL),
(48, 'huongdan-description', 'Bước 1: Truy cập website và lựa chọn sản phẩm cần mua để mua hàng Bước 2: Click và sản phẩm muốn mua, màn hình hiển thị ra pop up với các lựa chọn sau Nếu bạn', '', NULL, NULL),
(49, 'huongdan-keyword', 'Đây là thẻ keyword', '', NULL, NULL),
(50, 'chinhsach-title', 'Chính sách mua hàng', '', NULL, NULL),
(51, 'chinhsach-content', '<p style="text-align: justify;">Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách.</p>\r\n\r\n<p style="text-align: justify;">Chính sách bảo mật sẽ giải thích cách chúng tôi tiếp nhận, sử dụng và (trong trường hợp nào đó) tiết lộ thông tin cá nhân của Quý khách.</p>\r\n\r\n<p style="text-align: justify;">Bảo vệ dữ liệu cá nhân và gây dựng được niềm tin cho quý khách là vấn đề rất quan trọng với chúng tôi. Vì vậy, chúng tôi sẽ dùng tên và các thông tin khác liên quan đến quý khách tuân thủ theo nội dung của Chính sách bảo mật. Chúng tôi chỉ thu thập những thông tin cần thiết liên quan đến giao dịch mua bán.</p>\r\n\r\n<p style="text-align: justify;">Chúng tôi sẽ giữ thông tin của khách hàng trong thời gian luật pháp quy định hoặc cho mục đích nào đó. Quý khách có thể truy cập vào website và trình duyệt mà không cần phải cung cấp chi tiết cá nhân. Lúc đó, Quý khách đang ẩn danh và chúng tôi không thể biết bạn là ai nếu Quý khách không đăng nhập vào tài khoản của mình.</p>\r\n\r\n<p style="text-align: justify;"><strong>1. Thu thập thông tin cá nhân</strong></p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi thu thập, lưu trữ và xử lý thông tin của bạn cho quá trình mua hàng và cho những thông báo sau này liên quan đến đơn hàng, và để cung cấp dịch vụ, bao gồm một số thông tin cá nhân: danh hiệu, tên, giới tính, ngày sinh, email, địa chỉ, địa chỉ giao hàng, số điện thoại, fax, chi tiết thanh toán, chi tiết thanh toán bằng thẻ hoặc chi tiết tài khoản ngân hàng.</p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi sẽ dùng thông tin quý khách đã cung cấp để xử lý đơn đặt hàng, cung cấp các dịch vụ và thông tin yêu cầu thông qua website và theo yêu cầu của bạn.</p>\r\n\r\n<p style="text-align: justify;">- Hơn nữa, chúng tôi sẽ sử dụng các thông tin đó để quản lý tài khoản của bạn; xác minh và thực hiện giao dịch trực tuyến, nhận diện khách vào web, nghiên cứu nhân khẩu học, gửi thông tin bao gồm thông tin sản phẩm và dịch vụ. Nếu quý khách không muốn nhận bất cứ thông tin tiếp thị của chúng tôi thì có thể từ chối bất cứ lúc nào.</p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi có thể chuyển tên và địa chỉ cho bên thứ ba để họ giao hàng cho bạn (ví dụ cho bên chuyển phát nhanh hoặc nhà cung cấp).</p>\r\n\r\n<p style="text-align: justify;">- Chi tiết đơn đặt hàng của bạn được chúng tôi lưu giữ nhưng vì lí do bảo mật nên chúng tôi không công khai trực tiếp được. Tuy nhiên, quý khách có thể tiếp cận thông tin bằng cách đăng nhập tài khoản trên web. Tại đây, quý khách sẽ thấy chi tiết đơn đặt hàng của mình, những sản phẩm đã nhận và những sản phẩm đã gửi và chi tiết email, ngân hàng và bản tin mà bạn đặt theo dõi dài hạn.</p>\r\n\r\n<p style="text-align: justify;">- Quý khách cam kết bảo mật dữ liệu cá nhân và không được phép tiết lộ cho bên thứ ba. Chúng tôi không chịu bất kỳ trách nhiệm nào cho việc dùng sai mật khẩu nếu đây không phải lỗi của chúng tôi.</p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi có thể dùng thông tin cá nhân của bạn để nghiên cứu thị trường. mọi thông tin chi tiết sẽ được ẩn và chỉ được dùng để thống kê. Quý khách có thể từ chối không tham gia bất cứ lúc nào.</p>\r\n\r\n<p style="text-align: justify;"><strong>2. Bảo mật</strong></p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi có biện pháp thích hợp về kỹ thuật và an ninh để ngăn chặn truy cập trái phép hoặc trái pháp luật hoặc mất mát hoặc tiêu hủy hoặc thiệt hại cho thông tin của bạn.</p>\r\n\r\n<p style="text-align: justify;">- Chúng tôi khuyên quý khách không nên đưa thông tin chi tiết về việc thanh toán với bất kỳ ai bằng e-mail, chúng tôi không chịu trách nhiệm về những mất mát quý khách có thể gánh chịu trong việc trao đổi thông tin của quý khách qua internet hoặc email.</p>\r\n\r\n<p style="text-align: justify;">- Quý khách tuyệt đối không sử dụng bất kỳ chương trình, công cụ hay hình thức nào khác để can thiệp vào hệ thống hay làm thay đổi cấu trúc dữ liệu. Nghiêm cấm việc phát tán, truyền bá hay cổ vũ cho bất kỳ hoạt động nào nhằm can thiệp, phá hoại hay xâm nhập vào dữ liệu của hệ thống website. Mọi vi phạm sẽ bị tước bỏ mọi quyền lợi cũng như sẽ bị truy tố trước pháp luật nếu cần thiết.</p>\r\n\r\n<p style="text-align: justify;">- Mọi thông tin giao dịch sẽ được bảo mật nhưng trong trường hợp cơ quan pháp luật yêu cầu, chúng tôi sẽ buộc phải cung cấp những thông tin này cho các cơ quan pháp luật.</p>\r\n\r\n<p style="text-align: justify;">Các điều kiện, điều khoản và nội dung của trang web này được điều chỉnh bởi luật pháp Việt Nam và tòa án Việt Nam có thẩm quyền xem xét.</p>\r\n\r\n<p style="text-align: justify;"><strong>3. Quyền lợi khách hàng</strong></p>\r\n\r\n<p style="text-align: justify;">- Quý khách có quyền yêu cầu truy cập vào dữ liệu cá nhân của mình, có quyền yêu cầu chúng tôi sửa lại những sai sót trong dữ liệu của bạn mà không mất phí. Bất cứ lúc nào bạn cũng có quyền yêu cầu chúng tôi ngưng sử dụng dữ liệu cá nhân của bạn cho mục đích tiếp thị.</p>\r\n', '', NULL, NULL),
(52, 'chinhsach-description', 'Cám ơn quý khách đã quan tâm và truy cập vào website. Chúng tôi tôn trọng và cam kết sẽ bảo mật những thông tin mang tính riêng tư của Quý khách. Chính sách bảo', '', NULL, NULL),
(53, 'chinhsach-keyword', 'Thẻ từ khóa', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `member_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `note` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `member_id`, `user_id`, `name`, `address`, `phone`, `email`, `date`, `note`, `status`, `created_at`, `updated_at`) VALUES
(4, 2, NULL, 'Nguyen Anh', 'http://laravel.dev/', 3333333, 'dsl@gmail.com', '2016-04-03', '', 0, '2016-04-02 19:18:52', '2016-04-02 19:18:52'),
(5, 3, NULL, 'Nguyễn Minh Định', 'Soc Dang - Doan Hung - Phu Tho', 1682485646, 'midi9x@gmail.com', '2016-04-03', '', 1, '2016-04-02 19:21:44', '2016-04-07 06:27:15'),
(6, 3, NULL, 'Nguyễn Minh Định', 'Soc Dang - Doan Hung - Phu Tho', 1682485646, 'midi9x@gmail.com', '2016-04-28', 'xfsfs', 0, '2016-04-28 00:50:47', '2016-04-28 00:50:47'),
(7, 4, NULL, 'Thế Sơn', 'Ha noi', 1212121212, 'zika190994@gmail.com', '2016-04-28', '', 1, '2016-04-28 00:51:49', '2016-05-01 04:59:54'),
(8, 3, NULL, 'Nguyễn Minh Định', 'Soc Dang - Doan Hung - Phu Tho', 1682485646, 'midi9x@gmail.com', '2016-04-29', '', 0, '2016-04-29 02:37:24', '2016-04-29 02:37:24'),
(9, 3, NULL, 'Nguyễn Minh Định', 'Soc Dang - Doan Hung - Phu Tho', 1682485646, 'midi9x@gmail.com', '2016-05-02', '', 0, '2016-05-02 05:58:59', '2016-05-02 05:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `qty` int(10) UNSIGNED NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `qty`, `price`, `created_at`, `updated_at`) VALUES
(4, 4, 1, 1, 600000, '2016-04-02 19:18:52', '2016-04-02 19:18:52'),
(5, 5, 1, 2, 600000, '2016-04-02 19:21:44', '2016-04-02 19:21:44'),
(6, 6, 1, 1, 600000, '2016-04-28 00:50:47', '2016-04-28 00:50:47'),
(7, 6, 2, 1, 800000, '2016-04-28 00:50:47', '2016-04-28 00:50:47'),
(8, 7, 1, 1, 600000, '2016-04-28 00:51:49', '2016-04-28 00:51:49'),
(9, 8, 1, 1, 600000, '2016-04-29 02:37:24', '2016-04-29 02:37:24'),
(10, 9, 9, 1, 1200000, '2016-05-02 05:58:59', '2016-05-02 05:58:59'),
(11, 9, 10, 1, 799000, '2016-05-02 05:58:59', '2016-05-02 05:58:59'),
(12, 9, 2, 1, 800000, '2016-05-02 05:58:59', '2016-05-02 05:58:59'),
(13, 9, 8, 1, 1200000, '2016-05-02 05:58:59', '2016-05-02 05:58:59');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `user_id`, `name`, `alias`, `images`, `content`, `price`, `price_sale`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Giày cao cổ nam Sanvado', 'giay-cao-co-sanvado', 'http://laravel.dev/upload/images/giay-cao-co-sanvado-1.JPG', '<p dir="ltr">Điểm nổi bật:&nbsp;Gi&agrave;y cao cổ m&agrave;u n&acirc;u&nbsp;LX-990&nbsp;thương hiệu Savando bắt mắt với phong c&aacute;ch hầm hố, s&agrave;nh điệu c&ugrave;ng gam m&agrave;u đen thời trang tinh tế, LX-990 xứng đ&aacute;ng l&agrave; đ&ocirc;i cao cổ hot nhất d&agrave;nh cho c&aacute;c qu&yacute; &ocirc;ng y&ecirc;u th&iacute;ch sự khỏe khoắn.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://laravel.dev/upload/images/giay-cao-co-sanvado-3.png" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Với kiểu d&aacute;ng giản dị, kh&ocirc;ng họa tiết cầu kỳ. Đường viền m&agrave;u trắng d&agrave;y dặn với họa tiết đường chỉ nổi dập khu&ocirc;n chạy quanh viền l&agrave;m cho đ&ocirc;i LX-990 c&agrave;ng th&ecirc;m nổi bật. Gam m&agrave;u đen mạnh mẽ dễ d&agrave;ng phối đồ v&agrave; cũng kh&ocirc;ng lo lỗi mốt. Mũi bo tr&ograve;n thon gọn giữ form.</p>\r\n\r\n<p dir="ltr">Gi&agrave;y cao cổ nam&nbsp;LX-990 được l&agrave;m tr&ecirc;n chất liệu da b&ograve; mềm mại cả ở lớp trong v&agrave; lớp ngo&agrave;i, da b&ograve; thật nguy&ecirc;n chất 100% mang lại cảm gi&aacute;c dễ chịu v&agrave; thoải m&aacute;i khi xỏ ch&acirc;n v&agrave;o.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://laravel.dev/upload/images/giay-cao-co-sanvado-5.jpg" style="height:533px; width:800px" /></p>\r\n\r\n<p dir="ltr">Đế LX-990 &nbsp;được l&agrave;m bằng cao su d&agrave;y dặn, c&oacute; c&aacute;c đường v&acirc;n họa tiết chống trơn trượt nổi bật với h&igrave;nh tr&ograve;n đỏ ở trung t&acirc;m.</p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;Gi&agrave;y cao cổ nam LX-990 c&oacute; thể kết hợp được với c&aacute;c trang phục trẻ trung như quần jean, quần jean ngố, &aacute;o thun, &aacute;o kho&aacute;c mỏng, &aacute;o măng t&ocirc; d&agrave;i&hellip;..Th&iacute;ch hợp đi trong thời tiết se lạnh.</p>\r\n', 600000, 580000, 'Giay cao co, giay nam, giay Sanvado ', 'Giày cao cổ nam Sanvado da lộn buộc dây màu xanh đen (LX-990) thương hiệu Savando bắt mắt với phong cách hầm hố, sành điệu cùng gam màu đen thời trang tinh tế', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(2, 2, 1, 'Giày công sở buộc dây', 'giay-cong-so-buoc-day', 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-0.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Thanh lịch v&agrave; quyến rũ, sắc m&agrave;u n&acirc;u trung h&ograve;a v&agrave; ấm &aacute;p, c&aacute;c chi tiết độc đ&aacute;o.&nbsp;Gi&agrave;y buộc d&acirc;y c&ocirc;ng sở m&agrave;u n&acirc;u XQ-51&nbsp;c&oacute; thiết kế thanh mảnh v&agrave; quyến rũ với những đường n&eacute;t h&agrave;i h&ograve;a tr&ecirc;n chất liệu da b&ograve; thật cao cấp.Gi&agrave;y nam cao cấp sử dụng gam m&agrave;u n&acirc;u nhẹ ấm &aacute;p, dễ d&agrave;ng kết hợp nhiều phong c&aacute;ch v&agrave; m&agrave;u sắc trang phục kh&aacute;c nhau. &nbsp;</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-2.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Tạo n&ecirc;n đẳng cấp kh&aacute;c biệt từ kiểu d&aacute;ng, đ&ocirc;i gi&agrave;y &ocirc;m s&aacute;t ch&acirc;n ho&agrave;n hảo l&agrave;m t&ocirc;ng th&ecirc;m d&aacute;ng mạnh mẽ cho đ&ocirc;i ch&acirc;n của bạn. Mũi gi&agrave;y nhọn tạo cảm gi&aacute;c sang trọng, trẻ trung. Đường may tinh tế, đều đặn chạy dọc phần mu gi&agrave;y, d&acirc;y buộc dạng tr&ograve;n nhỏ thanh mảnh. L&oacute;t gi&agrave;y sử dụng chất liệu da bụng mềm mại, m&agrave;u đen quyến rũ.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-4.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Gi&agrave;y thời trang nam sử dụng chất liệu cao su cho phần đế, chống m&agrave;i m&ograve;n tốt, chắc chắn khi sử dụng. Kiểu d&aacute;ng phần đế h&agrave;i h&ograve;a với k&iacute;ch thước sản phẩm, độ d&agrave;y vừa phải nhằm đảm bảo t&iacute;nh trẻ trung, lịch l&atilde;m khi kết hợp c&ugrave;ng trang phục. C&aacute;c họa tiết in dạng ch&igrave;m hoa văn nhỏ ấn tượng, họa tiết dạng &ocirc; vu&ocirc;ng nổi c&aacute;ch điệu c&oacute; t&aacute;c dụng chống trơn trượt hiệu quả, tạo thẩm mỹ cao.</p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;Ấn tượng v&agrave; s&agrave;nh điệu khi kết hợp XQ-51 với c&aacute;c trang phục lịch sự như: suit, sơ mi, quần &acirc;u....</p>\r\n', 800000, NULL, 'Giày thời trang nam, giày nam', 'Giày thời trang nam sử dụng chất liệu cao su cho phần đế, chống mài mòn tốt, chắc chắn khi sử dụng. Kiểu dáng phần đế hài hòa với kích thước sản phẩm, độ dày vừa phải nhằm đảm bảo tính trẻ trung, lịch lãm khi kết hợp cùng trang phục', 1, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(3, 8, 1, 'Giày nam Sanvado da trơn', 'giay-nam-co-lung-sanvado-da-tron', 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-1.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Gi&agrave;y cổ lửng m&agrave;u đen KT-689 với thiết kế cổ cao ấm &aacute;p, kiểu d&aacute;ng khỏe khoắn, s&agrave;nh điệu. Chất liệu da b&ograve; nguy&ecirc;n chất 100% &ecirc;m &aacute;i, họa tiết kh&oacute;a ch&eacute;o b&ecirc;n cạnh độc đ&aacute;o mang đến một n&eacute;t thẩm mĩ rất ri&ecirc;ng.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-1.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Mũi gi&agrave;y hơi nhọn khỏe khoắn, trẻ trung, năng động. Bề mặt da m&agrave;u đen mịn, trơn b&oacute;ng được gia c&ocirc;ng kỹ c&agrave;ng, c&oacute; khả năng chống nhăn tốt, kh&ocirc;ng bong tr&oacute;c do thời tiết. Kiểu d&aacute;ng cao cổ thời trang,&nbsp;KT-689&nbsp;c&oacute; 3 lỗ xỏ gi&acirc;y đơn giản khiến người d&ugrave;ng sẽ cảm nhận được sự ấm &aacute;p, thoải m&aacute;i cho đ&ocirc;i ch&acirc;n khi xỏ gi&agrave;y.</p>\r\n\r\n<p dir="ltr">Chất liệu lớp l&oacute;t b&ecirc;n trong mềm mịn, da bụng bền đẹp l&acirc;u d&agrave;i, giữ ấm tốt m&agrave; kh&ocirc;ng g&acirc;y b&iacute; b&aacute;ch cho đ&ocirc;i ch&acirc;n. Lớp da b&ecirc;n trong tiếp x&uacute;c với cổ ch&acirc;n rất mịn, mềm , kh&ocirc;ng g&acirc;y đau r&aacute;t khi sử dụng.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-4.png" style="height:465px; width:700px" /></p>\r\n\r\n<p>Mix đồ:&nbsp;Với thiết kế cổ cao ấm &aacute;p, kiểu d&aacute;ng khỏe khoắn, s&agrave;nh điệu v&agrave; cuốn h&uacute;t khi kết hợp với c&aacute;c trang phục: &aacute;o kho&aacute;c d&agrave;i, &aacute;o len cao cổ, quần jean....</p>\r\n', 1199000, NULL, 'Giày nam cổ lửng, Giày nam cao cap, Sanvado ', 'Giày nam cổ lửng Sanvado da trơn màu đen (KT-689) với thiết kế cổ cao ấm áp, kiểu dáng khỏe khoắn, sành điệu. Chất liệu da bò nguyên chất 100% êm ái, họa tiết khóa chéo bên cạnh độc đáo mang đến một nét thẩm mỹ rất riêng', 1, '2016-04-29 17:58:42', '2016-04-29 17:58:42'),
(4, 8, 1, 'Giày nam cổ lửng Sanvado', 'giay-nam-co-lung-sanvado-da-bo', 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-4.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Gam m&agrave;u v&agrave;ng da b&ograve; s&aacute;ng rực r&otilde; v&agrave; kh&aacute;c biệt so với c&aacute;c gam m&agrave;u truyền thống vốn c&oacute;, Gi&agrave;y cổ lửng da b&ograve;&nbsp;KT-689&nbsp;mang đến một phong c&aacute;ch m&ugrave;a đ&ocirc;ng rất mới lạ, c&oacute; thể phối với c&aacute;c trang phục m&agrave;u sắc tươi s&aacute;ng. Chất liệu da b&ograve;, đế cao su cao cấp bằng phẳng, họa tiết chồng trơn trượt độc đ&aacute;o.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-4.png" style="height:465px; width:700px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Chất liệu da b&ograve; với m&agrave;u sắc nổi bật ở cạnh b&ecirc;n tạo điểm nhấn kh&aacute;c biệt. Lỗ xỏ gi&agrave;y kim loại c&aacute; t&iacute;nh, 3 lỗ xỏ gi&acirc;y đơn giản hỗ trợ bạn thắt d&acirc;y nhanh ch&oacute;ng khi xỏ gi&agrave;y. Đường may viền c&ugrave;ng m&agrave;u với da b&ograve;, mũi gi&agrave;y rộng r&atilde;i gi&uacute;p c&aacute;c ng&oacute;n ch&acirc;n thoải m&aacute;i nhất khi xỏ. &nbsp;</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-2.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Đế cao su mềm, bằng phẳng,&nbsp;KT-689&nbsp;đạt sự bền đẹp l&acirc;u d&agrave;i theo thời gian sử dụng. Đường viền bao quanh b&ecirc;n ngo&agrave;i dạng nổi hơn một ch&uacute;t so với c&aacute;c phần b&ecirc;n trong tạo cảm gi&aacute;c về sự mạnh mẽ, nam t&iacute;nh. Miếng l&oacute;t vừa đảm bảo độ ấm &aacute;p, giữ nhiệt tốt trong những ng&agrave;y se lạnh. Cổ gi&agrave;y lửng vừa phải, &ocirc;m nhẹ nh&agrave;ng cổ ch&acirc;n.</p>\r\n\r\n<p>Mix đồ:&nbsp;Bạn c&oacute; thể phối với: quần jean, kaki jean, &aacute;o thun, &aacute;o kho&aacute;c d&agrave;i tạo n&ecirc;n phong c&aacute;ch thời trang s&agrave;nh điệu.</p>\r\n', 1199000, NULL, 'Giày nam cổ lửng,  Giày nam màu da bò, Giày nam cao cấp', 'Giày nam cổ lửng Sanvado da trơn màu da bò (KT-689) mang đến một phong cách mùa đông rất mới lạ, có thể phối với các trang phục màu sắc tươi sáng. Chất liệu da bò, đế cao su cao cấp bằng phẳng, họa tiết chồng trơn trượt độc đáo.', 1, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(5, 2, 1, 'Giày công sở KIHITA', 'giay-cong-so-kihita-da-tron', 'http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-1.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Được s&aacute;ng tạo để d&agrave;nh ri&ecirc;ng cho c&aacute;c ch&agrave;ng trai, mẫu gi&agrave;y cao cổ của Thương hiệu Kihita sẵn s&agrave;ng l&agrave;m người bạn đồng h&agrave;nh với c&aacute;c ch&agrave;ng trong mọi chuyến đi, mọi điều kiện thời tiết.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-1.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Da gi&agrave;y l&agrave; da thật 100% &ndash; chất da trơn b&oacute;ng cao cấp bền đẹp với khả năng chống nước tho&aacute;ng kh&iacute; tuyệt vời. Loại da chất lượng kh&ocirc;ng chỉ mang tới bề mặt vững bền cho sản phẩm m&agrave; c&ograve;n khẳng định sự s&agrave;nh điệu của người mua.</p>\r\n\r\n<p dir="ltr">Phom gi&agrave;y khỏe khoắn với phần mũi bo tr&ograve;n, cổ gi&agrave;y dựng cao v&agrave; gia cố bằng nhiều đường chỉ may ngang chắc chắn. Tất cả đều g&oacute;p phần khẳng định vẻ đẹp thời trang cũng như chất lượng bền vững của HL-001.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-2.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Đặc biệt, đế gi&agrave;y l&agrave; cao su si&ecirc;u bền v&agrave; vững ch&atilde;i. Với những đường r&atilde;nh xẻ s&acirc;u tiện lợi,&nbsp;Gi&agrave;y cao cổ HL-001&nbsp;tự tin l&agrave; người bạn trung th&agrave;nh với c&aacute;c ch&agrave;ng trai trong những dịp đi chơi, đi l&agrave;m hay thậm ch&iacute; l&agrave; đi phượt.</p>\r\n', 1200000, NULL, 'Giày cao cổ, Giày công sở , Giày KIHITA', 'Giày cao cổ công sở KIHITA da trơn màu đen (HL-001) Được sáng tạo để dành riêng cho các chàng trai, mẫu giày cao cổ của Thương hiệu Kihita sẵn sàng làm người bạn đồng hành với các chàng trong mọi chuyến đi, mọi điều kiện thời tiết.', 1, '2016-04-29 18:17:27', '2016-04-29 18:17:27'),
(6, 8, 1, 'Giày da cao màu đen', 'giay-da-cao-mau-den', 'http://timemart.dev/upload/images/giay-da-cao-mau-den/giay-da-cao-mau-den-2.png', '<p style="text-align:center"><span style="color:#c61c22"><span style="color:#c61c22"><iframe frameborder="0" height="350" src="http://www.youtube.com/embed/1MH0TpOY8jM" width="425"></iframe></span></span></p>\r\n\r\n<p>Kiểu gi&agrave;y da b&oacute;ng được c&aacute;ch điệu bắt mắt, chi tiết đi k&egrave;m ở phần th&acirc;n, m&otilde;m gi&agrave;y. Bạn c&oacute; thể ho&agrave;n to&agrave;n y&ecirc;n t&acirc;m về những trang phục c&oacute; thể đi k&egrave;m. Gi&agrave;y da đem đến n&eacute;t khỏe khoắn, nam t&iacute;nh v&agrave; phong c&aacute;ch lịch l&atilde;m. Đừng lắc đầu khi nghĩ n&oacute; khiến bạn gi&agrave; v&agrave; qu&aacute; đứng đắn, kh&ocirc;ng hợp cho những dịp đi chơi, dạo phố. Nhưng khi bạn ngắm nh&igrave;n những h&igrave;nh ảnh kết hợp c&ugrave;ng trang phục bạn sẽ c&oacute; những c&aacute;i nh&igrave;n v&agrave; &yacute; tưởng kh&aacute;ch nhau cho mỗi kiểu gi&agrave;y n&agrave;y.</p>\r\n', 1699000, NULL, 'giày nam da bóng, giày nam cao cap, Giày da cao màu đen', 'Kiểu giày nam da bóng được cách điệu rất bắt mắt, chi tiết đi kèm ở phần thân, mõm giày. Bạn có thể hoàn toàn yên tâm về những trang phục có thể đi kèm. Giày da đem đến nét khỏe khoắn, nam tính và phong cách lịch lãm.', 1, '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(7, 3, 1, 'Giày lười Sanvado da trơn', 'giay-luoi-sanvado-da-tron', 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Gi&agrave;y lười c&ocirc;ng sở Sanvado da trơn m&agrave;u đen (AP-080) 2016 quyến rũ với gam m&agrave;u đen sang trọng, thiết kế văn ph&ograve;ng lịch l&atilde;m, qu&yacute; ph&aacute;i, kiểu d&aacute;ng kh&ocirc;ng d&acirc;y thoải m&aacute;i, tiện lợi khi sử dụng. Được l&agrave;m tr&ecirc;n chất liệu da b&ograve; nguy&ecirc;n chất da xịn 100%, đế cao su đ&uacute;c bền, họa tiết đ&iacute;nh đ&aacute; trắng nhẹ nh&agrave;ng c&ugrave;ng d&acirc;y đan song song ở mũ c&agrave;ng l&agrave;m cho AP-080 trở n&ecirc;n nổi bật ở bất kỳ đ&acirc;u.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron.png" style="height:397px; width:606px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Đế cao su đ&uacute;c bền c&agrave;ng l&agrave;m cho đ&ocirc;i gi&agrave;y lười c&ocirc;ng sở AP-080 trở n&ecirc;n nổi bật ở bất kỳ đ&acirc;u. Chất liệu cao su chắc chắn, đầm ch&acirc;n khi sải bước. Họa tiết đường kẻ ngang c&aacute;ch điệu, song song tăng độ b&aacute;m d&iacute;nh ở những nơi đường trơn. Biểu tượng logo thương hiệu Sanvado tr&ecirc;n miếng l&oacute;t sang trọng.</p>\r\n\r\n<p dir="ltr">L&oacute;t gi&agrave;y mềm mịn, tho&aacute;ng kh&iacute; tốt, đặc biệt với khả năng chống thấm ho&agrave;n hảo sẽ tạo n&ecirc;n sự thoải m&aacute;i nhất cho c&aacute;c qu&yacute; &ocirc;ng khi sử dụng. Đường viền gồm nhiều chi tiết &ocirc; tr&ograve;n nhỏ chạy bao quanh l&oacute;t gi&agrave;y tăng thời trang, bền đẹp cao. &nbsp;</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron-4.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">AP-080 kh&ocirc;ng cầu kỳ, kh&ocirc;ng kiểu c&aacute;ch nhưng vẫn nổi bật, vẫn sang trọng - đ&oacute; ch&iacute;nh l&agrave; đẳng cấp của một đ&ocirc;i gi&agrave;y tốt.</p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;C&oacute; thể kết hợp với sơ mi, quần t&acirc;y/&acirc;u, vest..Tất cả đều mang đến cho bạn sự sang trọng, lịch l&atilde;m v&agrave; nổi bật.</p>\r\n', 699000, NULL, 'Giày lười, Giày công sở, Giày Sanvado, Giày da trơn', 'Giày lười công sở Sanvado da trơn màu đen (AP-080) 2016 quyến rũ với gam màu đen sang trọng, thiết kế văn phòng lịch lãm, quý phái, kiểu dáng không dây thoải mái, tiện lợi khi sử dụng.', 1, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(8, 8, 1, 'Giày KIHITA da trơn', 'giay-kihita-da-tron-mau-nau', 'http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-1.png', '<p dir="ltr">Điểm nổi bật:&nbsp;HL-001c&oacute; vẻ ngo&agrave;i kh&aacute; hầm hố v&agrave; bụi bặm. N&oacute; th&iacute;ch hợp với những anh ch&agrave;ng c&aacute; t&iacute;nh mạnh mẽ, ưa thử th&aacute;ch hơn l&agrave; những ch&agrave;ng c&oacute; t&iacute;nh c&aacute;ch trầm, nhẹ nh&agrave;ng. Nhưng chẳng c&oacute; vấn đề g&igrave; nếu bạn muốn thử sức với HL-001 để th&ecirc;m ch&uacute;t th&uacute; vị cho phong c&aacute;ch của m&igrave;nh.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-1.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Bạn c&oacute; thể thấy da gi&agrave;y được l&agrave;m rất c&ocirc;ng phu xứng tầm với chất lượng của n&oacute;. Mặt da mềm v&agrave; mịn kh&ocirc;ng th&ocirc; cứng v&agrave; hay đứt g&atilde;y giống như những loại gi&agrave;y thường b&agrave;y b&aacute;n la liệt tr&ecirc;n thị trường.</p>\r\n\r\n<p dir="ltr">Gi&agrave;y c&ocirc;ng sở HL-001 gọn ghẽ, kh&ocirc;ng rườm r&agrave;, chất liệu da b&ograve; 100% mền mịn nhẹ nh&agrave;ng &ecirc;m ch&acirc;n. Tr&ecirc;n mặt gi&agrave;y được thiết kế tinh tế, đẹp mắt tạo điểm nhấn nh&aacute; khiến đ&ocirc;i gi&agrave;y trở l&ecirc;n s&agrave;nh điệu hơn. M&agrave;u n&acirc;u s&agrave;nh điệu v&agrave; kh&ocirc;ng bao giờ lỗi mốt.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-3.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;Bạn sẽ ngầu v&agrave; s&agrave;nh điệu hơn trong m&ugrave;a thu đ&ocirc;ng n&agrave;y khi kết hợp HL-001 với quần jean, kaki b&oacute; k&egrave;m theo &aacute;o da trơn, &aacute;o măng t&ocirc; hay &aacute;o b&ograve; b&ecirc;n ngo&agrave;i. Tất cả sẽ tạo n&ecirc;n cho bạn một phong c&aacute;ch c&aacute; t&iacute;nh, hiện đại v&agrave; s&agrave;nh điệu.</p>\r\n', 1200000, NULL, 'Giày cao cổ,Giày công sở,Giày KIHITA, Giày cao cấp', 'Giày cao cổ công sở KIHITA da trơn màu nâu (HL-001) thích hợp với những anh chàng cá tính mạnh mẽ, ưa thử thách hơn là những chàng có tính cách trầm, nhẹ nhàng', 1, '2016-04-29 18:39:57', '2016-04-29 18:39:57'),
(9, 8, 1, 'Giày Valentine đục lỗ', 'giay-valentine-duc-lo-vien-hoa', 'http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-2.png', '<p dir="ltr">Với sự ph&aacute;t triển của thời trang, ng&agrave;y nay, thật tiện lợi khi c&aacute;c mẫu gi&agrave;y lười ng&agrave;y c&agrave;ng được thiết kế một c&aacute;ch sang trọng hơn, lịch sự hơn, v&agrave; vẫn đảm bảo được đặc điểm gi&uacute;p người sử dụng tiết kiệm thời gian khi đi gi&agrave;y.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-1.png" style="height:538px; width:538px" /></p>\r\n\r\n<p dir="ltr">Gi&agrave;y lười được sử dụng trong m&ocirc;i trường c&ocirc;ng sở cũng như nhiều sự kiện bởi nhiều người, kể cả những doanh nh&acirc;n gi&agrave;u c&oacute; v&agrave; những người c&oacute; quan niệm khắt khe về thời trang. Người ta ch&uacute; &yacute; nhiều hơn đến c&aacute;ch thiết kế, chất liệu gi&agrave;y cũng cũng c&aacute;c chi tiết trang tr&iacute; v&agrave; c&aacute;c điểm nhấn tr&ecirc;n gi&agrave;y, tạo n&ecirc;n cảm gi&aacute;c thời thượng v&agrave; sang trọng cho người sử dụng.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-3.png" style="height:533px; width:800px" /></p>\r\n\r\n<p dir="ltr">Với mẫu gi&agrave;y lười nam Valentine đục lỗ viền hoa m&agrave;u n&acirc;u (HM-839), từng chi tiết nhỏ đều được người gia c&ocirc;ng ch&uacute; trọng kh&acirc;u may một c&aacute;ch tỉ mỉ, kĩ c&agrave;ng. Đảm bảo cho đ&ocirc;i gi&agrave;y sự bền đẹp v&agrave; lu&ocirc;n mang lại cảm gi&aacute;c thoải m&aacute;i cho người sử dụng.</p>\r\n', 1200000, NULL, 'Giày lười , giay cao cao, Giày Valentine ', 'Giày lười được sử dụng trong môi trường công sở cũng như nhiều sự kiện bởi nhiều người, kể cả những doanh nhân giàu có và những người có quan niệm khắt khe về thời trang', 1, '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(10, 6, 1, 'Giày cao cổ da lộn màu đen', 'giay-cao-co-da-lon-mau-den', 'http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-1.png', '<p>Cập nhật xu hướng gi&agrave;y mới đang được c&aacute;c ch&agrave;ng trai y&ecirc;u th&iacute;ch&nbsp;Giaytot.com&nbsp;giới thiệu&nbsp;đến ph&aacute;i mạnh kiểu gi&agrave;y cao cổ da lộn c&aacute; t&iacute;nh, phong c&aacute;ch.&nbsp;Với m&agrave;u đen cuốn h&uacute;t, nam t&iacute;nh giản dị m&agrave; kh&ocirc;ng l&agrave;m mất đi vẻ trẻ trung, hiện đại</p>\r\n\r\n<p><img alt="" src="http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-1.png" style="height:538px; width:538px" /></p>\r\n\r\n<p>Gi&agrave;y da lộn ph&ugrave; hợp với hầu hết dịp sử dụng như đi l&agrave;m, đi chơi, đi tiệc hay kết hợp với c&aacute;c kiểu trang phục kh&aacute;c như quần jean, &aacute;o thun, quần &acirc;u, sơ mi, đồ vest.</p>\r\n\r\n<p><img alt="" src="http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-3.png" style="height:533px; width:800px" /></p>\r\n', 799000, NULL, 'Giày cao cổ, Giày da lộn', 'Giày da lộn phù hợp với hầu hết dịp sử dụng như đi làm, đi chơi, đi tiệc hay kết hợp với các kiểu trang phục khác như quần jean, áo thun, quần âu, sơ mi, đồ vest.', 1, '2016-04-29 18:51:42', '2016-04-29 18:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `image`, `product_id`, `created_at`, `updated_at`) VALUES
(1, 'http://laravel.dev/upload/images/giay-cao-co-sanvado-1.JPG', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(2, 'http://laravel.dev/upload/images/giay-cao-co-sanvado-2.png', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(3, 'http://laravel.dev/upload/images/giay-cao-co-sanvado-3.png', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(4, 'http://laravel.dev/upload/images/giay-cao-co-sanvado-4.jpg', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(5, 'http://laravel.dev/upload/images/giay-cao-co-sanvado-5.jpg', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(6, 'http://laravel.dev/upload/images/giay-cao-co-sanvado.png', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(7, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-2.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(8, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-0.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(9, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-3.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(10, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-4.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(11, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-5.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(12, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(13, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-1.png', 3, '2016-04-29 17:58:42', '2016-04-29 17:58:42'),
(14, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-2.png', 3, '2016-04-29 17:58:42', '2016-04-29 17:58:42'),
(15, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-3.png', 3, '2016-04-29 17:58:42', '2016-04-29 17:58:42'),
(16, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-4.png', 3, '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(17, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-tron/giay-nam-co-lung-sanvado-da-tron-5.png', 3, '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(18, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-1.png', 4, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(19, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-2.png', 4, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(20, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-3.png', 4, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(21, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-4.png', 4, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(22, 'http://timemart.dev/upload/images/giay-nam-co-lung-sanvado-da-bo/giay-nam-co-lung-sanvado-da-bo-5.png', 4, '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(23, 'http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-1.png', 5, '2016-04-29 18:17:27', '2016-04-29 18:17:27'),
(24, 'http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-2.png', 5, '2016-04-29 18:17:27', '2016-04-29 18:17:27'),
(25, 'http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-3.png', 5, '2016-04-29 18:17:27', '2016-04-29 18:17:27'),
(26, 'http://timemart.dev/upload/images/giay-cong-so-kihita-da-tron/giay-cong-so-kihita-da-tron-4.png', 5, '2016-04-29 18:17:27', '2016-04-29 18:17:27'),
(27, 'http://timemart.dev/upload/images/giay-da-cao-mau-den/giay-da-cao-mau-den-1.png', 6, '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(28, 'http://timemart.dev/upload/images/giay-da-cao-mau-den/giay-da-cao-mau-den-2.png', 6, '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(29, 'http://timemart.dev/upload/images/giay-da-cao-mau-den/giay-da-cao-mau-den-3.png', 6, '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(30, 'http://timemart.dev/upload/images/giay-da-cao-mau-den/giay-da-cao-mau-den-4.png', 6, '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(31, 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron.png', 7, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(32, 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron-2.png', 7, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(33, 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron-3.png', 7, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(34, 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron-4.png', 7, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(35, 'http://timemart.dev/upload/images/giay-luoi-sanvado-da-tron/giay-luoi-sanvado-da-tron-1.png', 7, '2016-04-29 18:31:10', '2016-04-29 18:31:10'),
(36, 'http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-1.png', 8, '2016-04-29 18:39:57', '2016-04-29 18:39:57'),
(37, 'http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-2.png', 8, '2016-04-29 18:39:57', '2016-04-29 18:39:57'),
(38, 'http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau-3.png', 8, '2016-04-29 18:39:57', '2016-04-29 18:39:57'),
(39, 'http://timemart.dev/upload/images/giay-kihita-da-tron-mau-nau/giay-kihita-da-tron-mau-nau.png', 8, '2016-04-29 18:39:57', '2016-04-29 18:39:57'),
(40, 'http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-1.png', 9, '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(41, 'http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-2.png', 9, '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(42, 'http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-3.png', 9, '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(43, 'http://timemart.dev/upload/images/giay-valentine-duc-lo-vien-hoa/giay-valentine-duc-lo-vien-hoa-4.png', 9, '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(44, 'http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-2.png', 10, '2016-04-29 18:51:42', '2016-04-29 18:51:42'),
(45, 'http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-3.png', 10, '2016-04-29 18:51:42', '2016-04-29 18:51:42'),
(46, 'http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-4.png', 10, '2016-04-29 18:51:42', '2016-04-29 18:51:42'),
(47, 'http://timemart.dev/upload/images/giay-cao-co-da-lon-mau-den/giay-cao-co-da-lon-mau-den-1.png', 10, '2016-04-29 18:51:42', '2016-04-29 18:51:42');

-- --------------------------------------------------------

--
-- Table structure for table `product_options`
--

CREATE TABLE `product_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_options`
--

INSERT INTO `product_options` (`id`, `product_id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 1, 'Màu sắc', 'xanh đen', '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(2, 1, 'Kiểu cách', 'giày cao cổ', '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(3, 1, 'Chất liệu', 'da lộn ', '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(4, 1, 'Thương hiệu', 'Sanvado', '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(5, 2, 'Xuất xứ', 'Việt Nam', '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(6, 2, 'Kiểu cách', 'giày công sở', '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(7, 2, 'Chất liệu', ' da trơn', '2016-04-02 19:32:32', '2016-04-02 19:32:32'),
(8, 2, 'Thương hiệu', 'Made in Việt Nam', '2016-04-02 19:32:33', '2016-04-02 19:32:33'),
(9, 3, 'Xuất xứ', 'Việt Nam', '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(10, 3, 'Màu sắc', 'Đen', '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(11, 3, 'Kiểu cách', 'Giày cổ lửng', '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(12, 3, 'Thương hiệu', 'Sanvado', '2016-04-29 17:58:43', '2016-04-29 17:58:43'),
(13, 4, 'Xuất xứ', 'Việt Nam', '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(14, 4, 'Màu sắc', ' Da bò', '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(15, 4, 'Kiểu cách', 'Giày cổ lửng', '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(16, 4, 'Thương hiệu', 'Sanvado', '2016-04-29 18:04:58', '2016-04-29 18:04:58'),
(17, 5, 'Xuất xứ', 'Việt Nam', '2016-04-29 18:17:28', '2016-04-29 18:17:28'),
(18, 5, 'Kiểu dáng', 'giày cao cổ ', '2016-04-29 18:17:28', '2016-04-29 18:17:28'),
(19, 5, 'Chất liệu', ' da trơn ', '2016-04-29 18:17:28', '2016-04-29 18:17:28'),
(20, 5, 'Thương hiệu', 'Kihita', '2016-04-29 18:17:28', '2016-04-29 18:17:28'),
(21, 6, 'Kiểu dáng', 'Giày da cao', '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(22, 6, 'Màu sắc', 'Đen', '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(23, 6, 'Xuất xứ', 'Việt Nam', '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(24, 6, 'Chất liệu', 'Da 100%', '2016-04-29 18:23:01', '2016-04-29 18:23:01'),
(25, 7, 'Xuất xứ', ' Việt Nam', '2016-04-29 18:31:11', '2016-04-29 18:31:11'),
(26, 7, 'Màu sắc', 'đen', '2016-04-29 18:31:11', '2016-04-29 18:31:11'),
(27, 7, 'Kiểu cách', 'Giày lười công sở', '2016-04-29 18:31:11', '2016-04-29 18:31:11'),
(28, 7, 'Thương hiệu', 'Sanvado', '2016-04-29 18:31:11', '2016-04-29 18:31:11'),
(29, 8, 'Xuất xứ', 'Việt Nam', '2016-04-29 18:39:58', '2016-04-29 18:39:58'),
(30, 8, 'Kiểu dáng', 'Giày lười', '2016-04-29 18:39:58', '2016-04-29 18:39:58'),
(31, 8, 'Chất liệu', ' da trơn ', '2016-04-29 18:39:58', '2016-04-29 18:39:58'),
(32, 8, 'Thương hiệu', 'Kihita', '2016-04-29 18:39:58', '2016-04-29 18:39:58'),
(33, 9, 'Xuất xứ', 'Việt Nam ', '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(34, 9, 'Chất liệu', 'Da cao cấp', '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(35, 9, 'Màu sắc', 'Nâu', '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(36, 9, 'Đặc điểm', 'đục lỗ', '2016-04-29 18:44:21', '2016-04-29 18:44:21'),
(37, 10, 'Xuất xứ', 'Việt Nam', '2016-04-29 18:51:42', '2016-04-29 18:51:42'),
(38, 10, 'Màu sắc', 'Đen', '2016-04-29 18:51:43', '2016-04-29 18:51:43'),
(39, 10, 'Đế giày', 'Cao su', '2016-04-29 18:51:43', '2016-04-29 18:51:43'),
(40, 10, 'Chất liệu', 'Da lộn ', '2016-04-29 18:51:43', '2016-04-29 18:51:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `level`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'midi9x', '$2a$10$7.kG5bRwnv.k7kWX6UIZQu9/NF..pl2bRnAySnl5HeDaGiXhWulF6', 'midi9x@gmail.com', 0, 1, 'eu9rBeFyIef2BohtUexLsXvkc6bAy7ZxOPldxd7D', NULL, '2016-05-01 05:45:06'),
(2, 'admin', '$2y$10$.hc8fP16brwIgZ4dYdUFiewCgh0myKE6L91t.TVajFxNb1EKnH0u6', 'admin@gmail.com', 0, 1, 'eu9rBeFyIef2BohtUexLsXvkc6bAy7ZxOPldxd7D', '2016-05-01 05:45:21', '2016-05-01 05:45:21'),
(3, 'spadmin', '$2y$10$1m08PMdAsE3tiR3gLjQ1t.A2v/38i0Zm36QUyi/Im9X72JHUr7n6W', 'spadmin@gmail.com', 1, 1, 'eu9rBeFyIef2BohtUexLsXvkc6bAy7ZxOPldxd7D', '2016-05-01 05:45:51', '2016-05-01 05:45:51'),
(4, 'spadmin2', '$2y$10$6qp83tdyLBh4XDDqTzvQKOz3sA0pa4cdbz6bO.W4Ic13z5NYRJ.De', 'spadmin2@gmail.com', 1, 1, 'M3XfTIo9WSrmA0v5COIsvorN7PJx9VoGxoyieVJs', '2016-05-01 05:46:04', '2016-05-02 07:08:08'),
(5, 'admin2', '$2y$10$viRfuiFAsa5glEIB3dE2E.tMxbbyLBc6MLMG85hY6uxcs.eRsK.TK', 'admin2@gmail.com', 1, 1, 'M3XfTIo9WSrmA0v5COIsvorN7PJx9VoGxoyieVJs', '2016-05-01 05:46:14', '2016-05-02 07:08:15'),
(6, 'midi', '$2y$10$g86TkqHNQ9ALSFXm7acIm.5XQO1fGzz4xR81JWuXSWdJ/LYAodmWC', 'midi@gmail.com', 1, 1, 'M3XfTIo9WSrmA0v5COIsvorN7PJx9VoGxoyieVJs', '2016-05-01 05:46:29', '2016-05-02 07:08:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categorys_name_unique` (`name`),
  ADD UNIQUE KEY `categorys_alias_unique` (`alias`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fb_logs`
--
ALTER TABLE `fb_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`),
  ADD UNIQUE KEY `members_facebook_id_unique` (`facebook_id`),
  ADD UNIQUE KEY `members_phone_unique` (`phone`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_title_unique` (`title`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `options_name_unique` (`name`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_member_id_foreign` (`member_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_alias_unique` (`alias`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_options`
--
ALTER TABLE `product_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_options_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorys`
--
ALTER TABLE `categorys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `fb_logs`
--
ALTER TABLE `fb_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_member_id_foreign` FOREIGN KEY (`member_id`) REFERENCES `members` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categorys` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_options`
--
ALTER TABLE `product_options`
  ADD CONSTRAINT `product_options_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
