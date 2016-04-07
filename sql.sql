-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2016 at 03:06 PM
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
  `order` int(11) NOT NULL,
  `keyword` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categorys`
--

INSERT INTO `categorys` (`id`, `name`, `alias`, `order`, `keyword`, `description`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 'Giày da nam', 'giay-da-nam', 0, 'giày da nam, giay da nam, giầy da nam, giày da nam đẹp, giay da nam dep, giay da nam 2016, giày da, giay da', '500+ mẫu giày da nam đẹp da thật, bán giay da nam toàn quốc | 365 ngày đổi trả | Thử giay da nam miễn phí tại nhà', 0, '2016-04-02 18:28:19', '2016-04-02 18:28:19'),
(2, 'Giày nam công sở', 'giay-nam-cong-so', 0, 'giay nam, giay nam cong so, giày nam công sở Hà nội, giầy nam công sở đẹp, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy dép cho nam, giầy lười nam', 'Hơn 500 mẫu giày nam công sở, giày da nam công sở, giày da công sở giá rẻ tại Hà nội| Free shipping | Đổi trả trong 365 ngày | Bảo hành trọn đời', 0, '2016-04-02 18:28:53', '2016-04-02 18:28:53'),
(3, 'Giày lười nam', 'giay-luoi-nam', 0, 'giày lười, giay luoi nam, giầy lười nam đẹp, giày lười nam thời trang, giầy lười cao cấp, giay nam, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy lười nam', 'Giày lười nam | Website ban giay luoi nam dep, giầy lười nam Hà Nội | Free shipping giày Toàn quốc | Thử giầy lười nam miễn phí tại nhà', 0, '2016-04-02 18:29:29', '2016-04-02 18:29:29'),
(4, 'Giày tây nam', 'giay-tay-nam', 0, 'giay tay, giày tây, giay tay nam, giày tây nam, giầy tây nam, giay tay dep, giay tay nam dep, giày tây nam đẹp', 'Giày tây nam đẹp giá rẻ, giay tay nam cao cap, bán giày tây nam đẹp mẫu mới liên tục | Free shipping giầy tây nam Toàn quốc | Bảo hành trọn đời', 0, '2016-04-02 18:29:49', '2016-04-02 18:29:49'),
(5, 'Giày buộc dây', 'giay-buoc-day', 0, 'giay nam, giầy dép nam hàng hiệu, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam', 'Giày buộc dây | Website bán lẻ giầy dép nam hàng đầu Việt Nam | 365 ngày hoàn tiền | Miễn phí vận chuyển toàn quốc', 0, '2016-04-02 18:30:15', '2016-04-02 18:30:15'),
(6, 'Giày cao cổ ', 'giay-cao-co', 0, 'giày cao cổ,giay cao co,ban giay cao co nam ha noi, giầy cao cổ nam giá rẻ, bán giay cao cổ, mua giày cao cổ giá rẻ', 'Giày cao cổ nam - BST giầy cao cổ nam hà nội - Giay cao co nam 2016 | Đổi trả giày trong 365 ngày, miễn phí giao boot nam cao cổ toàn quốc', 0, '2016-04-02 18:30:48', '2016-04-02 18:30:48'),
(7, 'Giày vải nam', 'giay-vai-nam', 0, 'giay nam, giầy dép nam, quần áo giầy dép nam, giầy dép nam giới, giầy dép thời trang nam, giầy dép clarks nam, giầy dép thể thao nam', 'Bộ sưu tập giày vải nam mới nhất 2015. Mua giay vai nam gia tot | 365 ngày đổi trả hàng, miễn phí vận chuyển toàn quốc, thử giầy tại nhà miễn phí', 0, '2016-04-02 18:31:19', '2016-04-02 18:31:19'),
(8, 'Giày cao cấp', 'giay-cao-cap', 0, 'giày nam cao cấp, giày nam hàng hiệu, giay nam cao cap, giay nam hang hieu, giay da nam cao cap', 'Mua Giày Nam Cao Cấp, Giày Nam Hàng Hiệu Tại Giaytot.com đảm bảo 100% da thật, hàng Việt Nam, miễn phí giao hàng, bảo hành trọn đời', 0, '2016-04-02 18:32:02', '2016-04-02 18:32:12');

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
(1, 'midi9x', 'Tất cả facebook id', '/', ' ', 'test', '2016-04-01 19:13:55', '2016-04-01 19:13:55');

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
(3, 'Nguyễn Minh Định', 'midi9x@gmail.com', '', '574245586067376', 1682485646, 'Soc Dang - Doan Hung - Phu Tho', '0000-00-00', 'male', 1, NULL, NULL, NULL);

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
(8, 0, 1, 'Hé lộ mẫu giày nam hot nhất hè 2015', 'he-lo-mau-giay-nam-hot-nhat-he-2015', 'Tại sao lại vậy. Không phải là cái tên quá xa lạ nhưng tại sao hè này qua hè khác chúng vẫn được yêu thích tới vậy. Cùng giày nam tốt khám phá lí do nhé', '<p>L&agrave; anh em trong họ h&agrave;ng&nbsp;<a href="http://giaynamtot.com/giay-luoi-1.html"><strong>gi&agrave;y lười nam</strong></a>, boat shoes ch&iacute;nh l&agrave; c&aacute;i t&ecirc;n của mẫu gi&agrave;y nam được đ&aacute;nh gi&aacute; l&agrave; được ưa chuộng nhất trong h&egrave; 2015. Tại sao lại vậy. Kh&ocirc;ng phải l&agrave; c&aacute;i t&ecirc;n qu&aacute; xa lạ nhưng tại sao h&egrave; n&agrave;y qua h&egrave; kh&aacute;c ch&uacute;ng vẫn được y&ecirc;u th&iacute;ch tới vậy. C&ugrave;ng gi&agrave;y nam tốt kh&aacute;m ph&aacute; l&iacute; do nh&eacute;</p>\r\n\r\n<p>Những đ&ocirc;i gi&agrave;y nam Boat Shoes vốn l&agrave; cảm hứng từ những đ&ocirc;i gi&agrave;y đi tr&ecirc;n t&agrave;u biển. Sự bền bỉ, tiện lợi của n&oacute; l&agrave; nguồn cảm hứng để ph&aacute;t triển ch&uacute;ng ứng dụng rộng r&atilde;i hơn trong giới thời trang.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-01.png" style="height:417px; width:629px" /></p>\r\n\r\n<p>Như đ&atilde; n&oacute;i ch&uacute;ng l&agrave; họ h&agrave;ng trong d&ograve;ng gi&agrave;y lười n&ecirc;n những ưu điểm của gi&agrave;y lười nam đều hội tụ đủ trong một đ&ocirc;i Boat shoes. Chất liệu l&agrave;m n&ecirc;n gi&agrave;y Boat shoes kh&ocirc;ng giống với c&aacute;c loại gi&agrave;y lười phổ biến l&agrave; từ da thường v&agrave; da lộn. Ch&uacute;ng được l&agrave;m bằng chất liệu bạt l&agrave; phần lớn. Thiết kế với kh&ocirc;ng gian như chiếc thuyền tạo cảm gi&aacute;c thoải m&aacute;i cho ch&acirc;n khi đi lại.</p>\r\n\r\n<p><img src="file:///C:/Users/Admin/AppData/Local/Temp/msohtmlclip1/01/clip_image004.jpg" />Đế cao su cao cấp được sử dụng l&agrave;m đế chống trơn trượt một c&aacute;ch tốt nhất. Đ&oacute; cũng l&agrave; l&yacute; do m&agrave; c&aacute;c thủy thủ thường sử dụng ch&uacute;ng tr&ecirc;n t&agrave;u v&igrave; thường xuy&ecirc;n chịu cảnh s&oacute;ng biển lắc lư hoặc s&agrave;n ướt. V&igrave; vậy khi biến tấu ch&uacute;ng theo xu hướng thời trang, ch&uacute;ng được y&ecirc;u th&iacute;ch d&ugrave;ng trong cả những ng&agrave;y mưa v&igrave; chất liệu bạt &iacute;t thấm nước.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-3.png" style="height:422px; width:640px" /></p>\r\n\r\n<p>Một đ&ocirc;i gi&agrave;y nam Boat shoes chuẩn mực sẽ được sử dụng những kỹ thuật cắt da đặc biệt, b&ocirc;i hồ v&agrave; dầu ri&ecirc;ng để tr&aacute;nh bong tr&oacute;c v&agrave; thấm nước. Thật qu&aacute; ho&agrave;n hảo cho những ng&agrave;y h&egrave; nắng n&oacute;ng v&agrave; những cơn mưa r&agrave;o bất chợt.</p>\r\n\r\n<p>Boat shoes l&agrave; d&ograve;ng gi&agrave;y nam với nhiều m&agrave;u sắc trẻ trung kh&aacute;c nhau chứ kh&ocirc;ng g&ograve; &eacute;p v&agrave;o hai t&ocirc;ng m&agrave;u thường thấy l&agrave; đen v&agrave; n&acirc;u. Bạn c&oacute; thể dễ d&agrave;ng bắt gặp tr&ecirc;n kệ những đ&ocirc;i boat shoes đỏ burbery hay phối m&agrave;u bắt mắt. Style của những qu&yacute; &ocirc;ng bỏ phiếu cho đ&ocirc;i gi&agrave;y n&agrave;y l&uacute;c n&agrave;o cũng năng động nhưng cũng hết sức phong c&aacute;ch.</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/giay-nam-hot-2015-01.png', 0, 1, '2016-04-02 20:04:06', '2016-04-02 20:04:06'),
(9, 0, 1, 'Mách bạn bí kíp làm khô giày vải nam nhanh', 'mach-ban-bi-kip-lam-kho-giay-vai-nam-nhanh', 'Đây là ba cách đơn giản để làm khô đôi giày vải nam cho bạn khi bị mưa ướt vào ngày hè', '<p>&nbsp;</p>\r\n\r\n<p><a href="http://giaynamtot.com/giay-vai-1.html">Gi&agrave;y vải nam</a>&nbsp;trong m&ugrave;a h&egrave; c&oacute; thể n&oacute;i l&agrave; item giải nhiệt tuyệt vời cho đ&ocirc;i ch&acirc;n của c&aacute;c ch&agrave;ng. Nhưng m&ugrave;a h&egrave; với những cơn mưa bất chợt cũng dễ d&agrave;ng khiến đ&ocirc;i gi&agrave;y y&ecirc;u th&iacute;ch của bạn ướt nhẹp. Vậy l&agrave;m sao để ch&uacute;ng kh&ocirc; nhanh hơn v&agrave; kh&ocirc;ng sặc m&ugrave;i ẩm ướt. C&ugrave;ng gi&agrave;y nam tốt tham khảo c&aacute;c mẹo sau nh&eacute;.</p>\r\n\r\n<p><img alt="" src="http://laravel.dev/upload/images/tin-tuc-2/lam-sach-giay-vai-nam.png" style="height:392px; width:571px" /></p>\r\n\r\n<p>1. L&agrave;m bạn với giấy b&aacute;o cũ.</p>\r\n\r\n<p>Nếu đ&ocirc;i gi&agrave;y vải nam của bạn đang ẩm ướt sau cơn mưa, h&atilde;y tận dụng b&aacute;o cũ v&agrave; nh&eacute;t đầy v&agrave;o b&ecirc;n trong đ&ocirc;i gi&agrave;y. Nếu gi&agrave;y trắng th&igrave; n&ecirc;n sử dụng giấy trắng để m&agrave;u mực kh&ocirc;ng bị loang ra gi&agrave;y nh&eacute;. Giấy b&aacute;o c&oacute; t&aacute;c dụng h&uacute;t nước ẩm rất tốt đ&oacute;. Sau đ&oacute; lại thay bằng lớp b&aacute;o kh&aacute;c khi ch&uacute;ng đ&atilde; ẩm hết to&agrave;n bộ.</p>\r\n\r\n<p>Sau đ&oacute;, mang đ&ocirc;i gi&agrave;y vải ra phơi ở chỗ tho&aacute;ng v&agrave; nắng vừa đủ nh&eacute; ph&aacute;i nam.</p>\r\n\r\n<p>2. L&agrave;m kh&ocirc; si&ecirc;u tốc với m&aacute;y sấy t&oacute;c.</p>\r\n\r\n<p>Nếu bạn kh&ocirc;ng c&oacute; thời gian để l&agrave;m như c&aacute;ch một th&igrave; h&atilde;y sử dụng m&aacute;y sấy hoặc quạt điện để đ&ocirc;i gi&agrave;y vải nam nhanh kh&ocirc; hơn. N&ecirc;n để m&aacute;y sấy ở khoảng c&aacute;ch tầm 15cm l&agrave; vừa nếu kh&ocirc;ng muốn vải gi&agrave;y bị cứng, l&acirc;u dần dễ mục r&aacute;ch hơn. Chỉ tầm 2 tiếng sau l&agrave; đ&ocirc;i gi&agrave;y của bạn về tổng thể đ&atilde; kh&ocirc; r&aacute;o rồi đ&oacute;.</p>\r\n\r\n<p>3. Tận dụng m&aacute;y sấy quần &aacute;o.</p>\r\n\r\n<p>Nếu nh&agrave; bạn c&oacute; m&aacute;y sấy quần &aacute;o th&igrave; qu&aacute; tuyệt, bạn c&oacute; thể tận dụng để l&agrave;m kh&ocirc; đ&ocirc;i gi&agrave;y vải nam của m&igrave;nh.</p>\r\n\r\n<p>Đặt mũi gi&agrave;y hướng l&ecirc;n tr&ecirc;n v&agrave; đế gi&agrave;y hướng ra ngo&agrave;i khi treo v&agrave;o m&aacute;y sấy, n&ecirc;n treo gi&agrave;y ở cửa m&aacute;y sấy để gi&agrave;y kh&ocirc;ng bị va chạm với l&ograve;ng m&aacute;y, vừa tr&aacute;nh bị hư gi&agrave;y vừa tr&aacute;nh hỏng m&aacute;y.</p>\r\n\r\n<p>Một lưu &yacute; l&agrave; bạn n&ecirc;n c&agrave;i đặt chế độ sấy ở mức thấp hoặc trung b&igrave;nh, đặt chu tr&igrave;nh sấy khoảng một tiếng l&agrave; được để đảm bảo tuổi thọ cho đ&ocirc;i gi&agrave;y của m&igrave;nh.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; ba c&aacute;ch đơn giản để&nbsp;l&agrave;m kh&ocirc; đ&ocirc;i gi&agrave;y vải nam&nbsp;cho bạn khi bị mưa ướt v&agrave;o ng&agrave;y h&egrave;. Thật dễ d&agrave;ng phải kh&ocirc;ng. Đừng ngại diện gi&agrave;y vải v&agrave;o ng&agrave;y h&egrave; v&igrave; sợ mưa ướt v&igrave; b&acirc;y giờ bạn đ&atilde; sở hữu b&iacute; quyết để khắc phục rồi đ&oacute;.&nbsp;</p>\r\n', 'http://laravel.dev/upload/images/tin-tuc-2/lam-sach-giay-vai-nam.png', 0, 1, '2016-04-02 20:06:47', '2016-04-02 20:06:47');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
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
(5, 'logo', '/upload/images/logo.png', '', NULL, NULL),
(6, 'favicon', '/public/favicon.ico', '', NULL, NULL),
(7, 'image', '/upload/images/shop-image.jpg', '', NULL, NULL),
(8, 'status', '1', '', NULL, NULL),
(9, 'fb_register', 'Đăng kí tài khoản thành công tại [sitename]', '', NULL, NULL),
(10, 'fb_order', 'Đơn hàng số [order_id] đã được đặt thành công', '', NULL, NULL),
(11, 'fb_checkout', 'Xác nhận thanh toán đơn hàng số [order_id]', '', NULL, NULL),
(12, 'fb_ship', 'Đơn hàng số [order_id] đang được vận chuyển', '', NULL, NULL),
(13, 'fb_done', 'Xác nhận giao dịch thành công đơn hàng số [order_id] ', '', NULL, NULL),
(14, 'fb_cancel', 'Xác nhận hủy đơn hàng số [order_id] ', '', NULL, NULL);

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
(5, 3, NULL, 'Nguyễn Minh Định', 'Soc Dang - Doan Hung - Phu Tho', 1682485646, 'midi9x@gmail.com', '2016-04-03', '', 0, '2016-04-02 19:21:44', '2016-04-02 19:21:44');

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
(5, 5, 1, 2, 600000, '2016-04-02 19:21:44', '2016-04-02 19:21:44');

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
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `cat_id`, `user_id`, `name`, `alias`, `images`, `content`, `price`, `keywords`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Giày cao cổ nam Sanvado', 'giay-cao-co-sanvado', 'http://laravel.dev/upload/images/giay-cao-co-sanvado-1.JPG', '<p dir="ltr">Điểm nổi bật:&nbsp;Gi&agrave;y cao cổ m&agrave;u n&acirc;u&nbsp;LX-990&nbsp;thương hiệu Savando bắt mắt với phong c&aacute;ch hầm hố, s&agrave;nh điệu c&ugrave;ng gam m&agrave;u đen thời trang tinh tế, LX-990 xứng đ&aacute;ng l&agrave; đ&ocirc;i cao cổ hot nhất d&agrave;nh cho c&aacute;c qu&yacute; &ocirc;ng y&ecirc;u th&iacute;ch sự khỏe khoắn.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://laravel.dev/upload/images/giay-cao-co-sanvado-3.png" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Với kiểu d&aacute;ng giản dị, kh&ocirc;ng họa tiết cầu kỳ. Đường viền m&agrave;u trắng d&agrave;y dặn với họa tiết đường chỉ nổi dập khu&ocirc;n chạy quanh viền l&agrave;m cho đ&ocirc;i LX-990 c&agrave;ng th&ecirc;m nổi bật. Gam m&agrave;u đen mạnh mẽ dễ d&agrave;ng phối đồ v&agrave; cũng kh&ocirc;ng lo lỗi mốt. Mũi bo tr&ograve;n thon gọn giữ form.</p>\r\n\r\n<p dir="ltr">Gi&agrave;y cao cổ nam&nbsp;LX-990 được l&agrave;m tr&ecirc;n chất liệu da b&ograve; mềm mại cả ở lớp trong v&agrave; lớp ngo&agrave;i, da b&ograve; thật nguy&ecirc;n chất 100% mang lại cảm gi&aacute;c dễ chịu v&agrave; thoải m&aacute;i khi xỏ ch&acirc;n v&agrave;o.</p>\r\n\r\n<p style="text-align:center"><img alt="" src="http://laravel.dev/upload/images/giay-cao-co-sanvado-5.jpg" style="height:533px; width:800px" /></p>\r\n\r\n<p dir="ltr">Đế LX-990 &nbsp;được l&agrave;m bằng cao su d&agrave;y dặn, c&oacute; c&aacute;c đường v&acirc;n họa tiết chống trơn trượt nổi bật với h&igrave;nh tr&ograve;n đỏ ở trung t&acirc;m.</p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;Gi&agrave;y cao cổ nam LX-990 c&oacute; thể kết hợp được với c&aacute;c trang phục trẻ trung như quần jean, quần jean ngố, &aacute;o thun, &aacute;o kho&aacute;c mỏng, &aacute;o măng t&ocirc; d&agrave;i&hellip;..Th&iacute;ch hợp đi trong thời tiết se lạnh.</p>\r\n', 600000, 'Giay cao co, giay nam, giay Sanvado ', 'Giày cao cổ nam Sanvado da lộn buộc dây màu xanh đen (LX-990) thương hiệu Savando bắt mắt với phong cách hầm hố, sành điệu cùng gam màu đen thời trang tinh tế', 1, '2016-04-02 18:47:41', '2016-04-02 18:47:41'),
(2, 2, 1, 'Giày công sở buộc dây', 'giay-cong-so-buoc-day', 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-0.png', '<p dir="ltr">Điểm nổi bật:&nbsp;Thanh lịch v&agrave; quyến rũ, sắc m&agrave;u n&acirc;u trung h&ograve;a v&agrave; ấm &aacute;p, c&aacute;c chi tiết độc đ&aacute;o.&nbsp;Gi&agrave;y buộc d&acirc;y c&ocirc;ng sở m&agrave;u n&acirc;u XQ-51&nbsp;c&oacute; thiết kế thanh mảnh v&agrave; quyến rũ với những đường n&eacute;t h&agrave;i h&ograve;a tr&ecirc;n chất liệu da b&ograve; thật cao cấp.Gi&agrave;y nam cao cấp sử dụng gam m&agrave;u n&acirc;u nhẹ ấm &aacute;p, dễ d&agrave;ng kết hợp nhiều phong c&aacute;ch v&agrave; m&agrave;u sắc trang phục kh&aacute;c nhau. &nbsp;</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-2.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Điểm kh&aacute;c biệt:&nbsp;Tạo n&ecirc;n đẳng cấp kh&aacute;c biệt từ kiểu d&aacute;ng, đ&ocirc;i gi&agrave;y &ocirc;m s&aacute;t ch&acirc;n ho&agrave;n hảo l&agrave;m t&ocirc;ng th&ecirc;m d&aacute;ng mạnh mẽ cho đ&ocirc;i ch&acirc;n của bạn. Mũi gi&agrave;y nhọn tạo cảm gi&aacute;c sang trọng, trẻ trung. Đường may tinh tế, đều đặn chạy dọc phần mu gi&agrave;y, d&acirc;y buộc dạng tr&ograve;n nhỏ thanh mảnh. L&oacute;t gi&agrave;y sử dụng chất liệu da bụng mềm mại, m&agrave;u đen quyến rũ.</p>\r\n\r\n<p dir="ltr"><img alt="" src="http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day-4.png" style="height:358px; width:538px" /></p>\r\n\r\n<p dir="ltr">Gi&agrave;y thời trang nam sử dụng chất liệu cao su cho phần đế, chống m&agrave;i m&ograve;n tốt, chắc chắn khi sử dụng. Kiểu d&aacute;ng phần đế h&agrave;i h&ograve;a với k&iacute;ch thước sản phẩm, độ d&agrave;y vừa phải nhằm đảm bảo t&iacute;nh trẻ trung, lịch l&atilde;m khi kết hợp c&ugrave;ng trang phục. C&aacute;c họa tiết in dạng ch&igrave;m hoa văn nhỏ ấn tượng, họa tiết dạng &ocirc; vu&ocirc;ng nổi c&aacute;ch điệu c&oacute; t&aacute;c dụng chống trơn trượt hiệu quả, tạo thẩm mỹ cao.</p>\r\n\r\n<p dir="ltr">Mix đồ:&nbsp;Ấn tượng v&agrave; s&agrave;nh điệu khi kết hợp XQ-51 với c&aacute;c trang phục lịch sự như: suit, sơ mi, quần &acirc;u....</p>\r\n', 800000, 'Giày thời trang nam, giày nam', 'Giày thời trang nam sử dụng chất liệu cao su cho phần đế, chống mài mòn tốt, chắc chắn khi sử dụng. Kiểu dáng phần đế hài hòa với kích thước sản phẩm, độ dày vừa phải nhằm đảm bảo tính trẻ trung, lịch lãm khi kết hợp cùng trang phục', 1, '2016-04-02 19:32:32', '2016-04-02 19:32:32');

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
(12, 'http://laravel.dev/upload/images/giay-cong-so-buoc-day/giay-cong-so-buoc-day.png', 2, '2016-04-02 19:32:32', '2016-04-02 19:32:32');

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
(8, 2, 'Thương hiệu', 'Made in Việt Nam', '2016-04-02 19:32:33', '2016-04-02 19:32:33');

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
(1, 'midi9x', '$2a$10$7.kG5bRwnv.k7kWX6UIZQu9/NF..pl2bRnAySnl5HeDaGiXhWulF6', 'midi9x@gmail.com', 1, 1, NULL, NULL, NULL);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product_options`
--
ALTER TABLE `product_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
