-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 28, 2023 at 04:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tntn_test2_final`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Password` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Role` varchar(15) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Name`, `Email`, `Password`, `Role`) VALUES
(1, 'Nguyễn Thanh Tùng', 'abc123@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Admin'),
(4, 'Duong Van Nam', 'abc1234@gmail.com', '202cb962ac59075b964b07152d234b70', 'Member'),
(6, 'Chu Văn Long', 'longbep2003@gmail.com', '202cb962ac59075b964b07152d234b70', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `actitvity`
--

CREATE TABLE `actitvity` (
  `ID` int NOT NULL,
  `Title` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `CoverImage` varchar(150) COLLATE utf8mb4_general_ci NOT NULL,
  `Content` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actitvity`
--

INSERT INTO `actitvity` (`ID`, `Title`, `CoverImage`, `Content`) VALUES
(3, 'Chương trình: Tri ân ngày nhà giáo Việt Nam 20-11', '1677557485_ativity5.png', '<p>&ldquo;Muốn sang th&igrave; bắc cầu kiều &rdquo;<br />\r\nMuốn con hay chữ th&igrave; y&ecirc;u lấy thầy.&quot;&nbsp;<br />\r\nNghề n&agrave;o cao qu&yacute; bằng nghề gi&aacute;o với bao vất vả hy sinh thầm lặng cho đ&agrave;n con thơ được học chữ, học c&aacute;ch l&agrave;m người. Thầy c&ocirc; - những người l&aacute;i đ&ograve; thầm lặng, những người đ&atilde; ch&egrave;o l&aacute;i con thuyền đưa biết bao thế hệ đến với những ch&acirc;n trời kiến thức, những ch&acirc;n trời của hạnh ph&uacute;c v&agrave; th&agrave;nh c&ocirc;ng. Vai tr&ograve; của người thầy v&agrave; ơn s&acirc;u nghĩa nặng đối với thầy c&ocirc; đ&atilde; được d&agrave;nh ri&ecirc;ng một vị tr&iacute; xứng đ&aacute;ng trong tr&aacute;i tim của người học tr&ograve; đang học cũng như đ&atilde; tốt nghiệp ra trường. Mối quan hệ thầy tr&ograve; đ&atilde; c&oacute; từ h&agrave;ng ngh&igrave;n năm dựng nước v&agrave; giữ nước. Từ thế hệ n&agrave;y đến thế hệ kh&aacute;c, thầy c&ocirc; gi&aacute;o đ&atilde; hết l&ograve;ng dạy bảo học tr&ograve;, g&oacute;p phần đ&agrave;o tạo nh&acirc;n t&agrave;i cho đất nước.<br />\r\nĐể b&agrave;y tỏ l&ograve;ng biết ơn v&ocirc; bờ bến đối với thầy c&ocirc; n&oacute;i chung, v&agrave; giảng vi&ecirc;n khoa CNTT n&oacute;i ri&ecirc;ng, nh&acirc;n Ng&agrave;y nh&agrave; gi&aacute;o Việt Nam 20/11, &nbsp;đội TNTN khoa CNTT h&acirc;n hoan tổ chức chương tr&igrave;nh &quot;Tri &acirc;n thầy c&ocirc;&quot; với những m&oacute;n qu&agrave; nho nhỏ l&agrave; những b&ocirc;ng hoa, tấm thiệp do ch&iacute;nh tay c&aacute;c bạn th&agrave;nh vi&ecirc;n, cộng t&aacute;c vi&ecirc;n đội TNTN khoa CNTT t&igrave;m t&ograve;i v&agrave; miệt m&agrave;i thiết kế. Đ&oacute; cũng l&agrave; tấm ch&acirc;n th&agrave;nh, l&agrave; lời cảm ơn s&acirc;u sắc m&agrave; ch&uacute;ng em muốn gửi tới thầy c&ocirc;.<br />\r\nSự cống hiến của thầy c&ocirc; l&agrave; nguồn cảm hứng của ch&uacute;ng em. Cảm ơn thầy c&ocirc; đ&atilde; lu&ocirc;n t&acirc;m huyết với nghề dạy học. Ch&uacute;c mừng ng&agrave;y Nh&agrave; gi&aacute;o Việt Nam 20 - 11!&nbsp;</p>\r\n'),
(4, 'Chương trình sinh nhật: 14 năm thắp lửa tình nguyện', '1677557437_activity.png', '<p>Tối ng&agrave;y 3/12/2022 Đội TNTN khoa CNTT đ&atilde; long trọng tổ chức chương tr&igrave;nh &ldquo;14 NĂM TIẾP LỬA T&Igrave;NH NGUYỆN&rdquo; để kỷ niệm sinh nhật lần thứ 14 của Đội&nbsp;<br />\r\n14 năm kh&ocirc;ng phải một con số - 14 năm l&agrave; cả một chặng đường. Trong suốt chặng đường ấy ch&uacute;ng ta đ&atilde; lu&ocirc;n b&ecirc;n nhau, trải qua biết bao nhi&ecirc;u kỷ niệm đ&aacute;ng nhớ, c&ugrave;ng nhau cống hiến v&agrave; gặt h&aacute;i được nhiều th&agrave;nh tựu.&nbsp;<br />\r\n&nbsp;Hy vọng rằng khi bước sang tuổi 15, c&aacute;c th&agrave;nh vi&ecirc;n, cộng t&aacute;c vi&ecirc;n sẽ ng&agrave;y một đo&agrave;n kết, gắn b&oacute; v&agrave; tiếp tục đồng h&agrave;nh c&ugrave;ng Đội tr&ecirc;n con đường sắp tới. H&atilde;y lu&ocirc;n giữ trong m&igrave;nh tinh thần nhiệt huyết, c&ugrave;ng nhau nối tiếp truyền thống Đội v&agrave; ph&aacute;t triển Đội mạnh mẽ hơn nữa trong tương lai nh&eacute;&nbsp;<br />\r\n&nbsp;Cảm ơn sự c&oacute; mặt v&ocirc; c&ugrave;ng qu&yacute; gi&aacute; của c&aacute;c vị kh&aacute;ch mời, thầy c&ocirc;, c&ugrave;ng anh chị thế hệ đi trước, c&aacute;c đội bạn đ&atilde; đến dự lễ sinh nhật 14 tuổi c&ugrave;ng với Đội TNTN khoa CNTT. Tiếp đ&oacute; lời cảm ơn xin gửi đến c&aacute;c th&agrave;nh vi&ecirc;n, cộng t&aacute;c vi&ecirc;n của Đội đ&atilde; miệt m&agrave;i chuẩn bị c&aacute;c tiết mục văn nghệ&nbsp; &nbsp;v&ocirc; c&ugrave;ng chỉn chu, đặc sắc để ch&uacute;ng ta c&oacute; thể thưởng thức, chung vui trong chương tr&igrave;nh kỷ niệm sinh nhật 14 tuổi của Đội TNTN khoa CNTT. Sự hiện diện của mọi người ch&iacute;nh l&agrave; th&agrave;nh c&ocirc;ng lớn của đại gia đ&igrave;nh &aacute;o xanh IT&nbsp;<br />\r\n&ldquo;Muốn đi nhanh th&igrave; đi một m&igrave;nh<br />\r\nMuốn đi xa h&atilde;y đi c&ugrave;ng đội TNTN khoa CNTT&ldquo;<br />\r\nLink ảnh chương tr&igrave;nh: https://j2team.dev/go/TNTN-IT-kien-toan-sinh-nhat-14-tui<br />\r\nTH&Acirc;N &Aacute;I v&agrave; QUYẾT THẮNG!&nbsp;</p>\r\n'),
(5, 'Chương trình: Kế hoạch nhỏ', '1677557413_320696953_851403156138234_7028981700663710657_n.jpg', '<p>Th&aacute;ng 12 l&agrave; những ng&agrave;y m&ugrave;a đ&ocirc;ng vừa ch&iacute;n, tiết trời lạnh gi&aacute; len lỏi v&agrave;o khắp lối, l&agrave; th&aacute;ng cuối c&ugrave;ng khiến tất cả những người xa qu&ecirc; bồi hồi, d&acirc;ng tr&agrave;o nỗi nhớ khi nhớ về gia đ&igrave;nh, cha mẹ, nỗi kh&aacute;t khao tết tới gần để c&oacute; thể trở về b&ecirc;n gia đ&igrave;nh th&acirc;n thương. L&agrave; nghe đ&acirc;u đ&acirc;y hương vị của tết, của bồi hồi, của nhớ nhung. L&agrave; b&agrave;i h&aacute;t vui sum họp khiến ta nặng l&ograve;ng, xuyến sang.&nbsp;<br />\r\n&nbsp;Thế nhưng, ở đ&acirc;u đ&oacute; ngo&agrave;i kia, h&igrave;nh ảnh về những c&ocirc; cậu b&eacute; với đ&ocirc;i ch&acirc;n trần, những mảnh đời lang thang cơ nhỡ, hay những c&ocirc; b&aacute;c lao c&ocirc;ng vẫn miệt m&agrave;i lao động,.... vẫn hiện hữu khiến ta kh&ocirc;ng khỏi động l&ograve;ng.<br />\r\n&nbsp;Nhằm mục đ&iacute;ch bảo vệ m&ocirc;i trường cũng g&acirc;y quỹ hỗ trợ chương tr&igrave;nh &quot;Tết Ấm y&ecirc;u thương 2023&quot; của đội TNTN khoa CNTT, th&aacute;ng 12 n&agrave;y, Đội TNTN khoa CNTT đ&atilde; ch&iacute;nh thức ra qu&acirc;n chiến dịch &quot;Kế hoạch nhỏ 2022&quot; với bằng hai h&igrave;nh thức ch&iacute;nh l&agrave;:<br />\r\nThu gom phế liệu (chai lọ, b&igrave;a giấy, sắt vụn...).<br />\r\nNhận quy&ecirc;n g&oacute;p quần &aacute;o cũ c&ograve;n sử dụng được.<br />\r\nHoạt động tr&ecirc;n khắp c&aacute;c khu vực l&acirc;n cận trường Đại Học C&ocirc;ng Nghiệp H&agrave; Nội ở cả cơ sở 1 v&agrave; cơ sở 3, c&aacute;c th&agrave;nh vi&ecirc;n v&agrave; CTV của Đội kh&ocirc;ng ngại kh&oacute; khăn, đến từng ng&otilde; ng&aacute;ch, g&otilde; cửa từng nh&agrave; nhằm tuy&ecirc;n truyền cho chiến dịch cũng như lan toả th&ocirc;ng điệp của chương tr&igrave;nh tới từng bạn sinh vi&ecirc;n v&agrave; người d&acirc;n địa phương.<br />\r\n&nbsp;Qua đ&acirc;y, đội TNTN khoa CNTT xin được gửi lời cảm ơn s&acirc;u sắc nhất tới to&agrave;n thể c&aacute;c nh&agrave; hảo t&acirc;m đ&atilde; lu&ocirc;n đồng h&agrave;nh c&ugrave;ng chiến dịch kế hoạch nhỏ cũng như c&aacute;c chương tr&igrave;nh của Đội.<br />\r\n-------------------------<br />\r\nChiến dịch vẫn đang được duy tr&igrave; v&agrave; ph&aacute;t triển từng ng&agrave;y. Nếu bạn muốn đồng h&agrave;nh c&ugrave;ng đội xin h&atilde;y li&ecirc;n hệ tới page đội TNTN khoa CNTT hoặc comment trực tiếp dưới b&agrave;i viết n&agrave;y.<br />\r\nĐội sẽ đến tận nơi để nhận phế liệu v&agrave; quần &aacute;o.&nbsp;<br />\r\n&nbsp;</p>\r\n'),
(7, 'Hội nghị tổng kết công tác đoàn', '1677356304_321585390_519039620192291_4934125720173020593_n.jpg', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/321492854_6140522862664691_7367956075253833036_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=730e14&amp;_nc_ohc=o55dBi1Jjt8AX-p_Sac&amp;_nc_ht=scontent.fhan14-1.fna&amp;oh=00_AfAW2w1lwZqWS8UumqDvSk_xBjQVcWiI4p7nMR4wRkW1TQ&amp;oe=63FE8B45\" style=\"height:500px; width:1200px\" /></p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fhan14-1.fna.fbcdn.net/v/t39.30808-6/321660917_6503747956306037_5891828962043655786_n.jpg?_nc_cat=101&amp;ccb=1-7&amp;_nc_sid=730e14&amp;_nc_ohc=5_JNbRpovJYAX936xYS&amp;_nc_ht=scontent.fhan14-1.fna&amp;oh=00_AfCILkpMuuhG6LSNUJQvEnVl-2J0nEdT-iDJ-0LuNgEkZQ&amp;oe=63FF227B\" style=\"height:500px; width:1200px\" /></p>\r\n'),
(8, 'Chương trình “Tết ấm yêu thương 2022” ', '1677355409_325737686_864863954633045_8935881187504860798_n.jpg', '<p>Chương tr&igrave;nh: Tết ấm y&ecirc;u thương 2022<br />\r\n&ldquo; Đ&acirc;y cả m&ugrave;a xu&acirc;n đ&atilde; đến rồi<br />\r\nTừng nh&agrave; mở cửa đ&oacute;n vui tươi.<br />\r\nTừng c&ocirc; em b&eacute; so m&agrave;u &aacute;o<br />\r\nĐ&ocirc;i m&aacute; hồng l&ecirc;n, nh&iacute; nhảnh cười&rdquo; .<br />\r\n&nbsp;Vậy l&agrave; một năm nữa sắp tr&ocirc;i qua, m&ugrave;a xu&acirc;n ngỡ như m&ugrave;a thay &aacute;o, vạn vật được kho&aacute;c l&ecirc;n m&agrave;u &aacute;o mới rực rỡ v&agrave; tr&agrave;n đầy sức sống, sương lạnh m&ugrave;a đ&ocirc;ng cũng được kho&aacute;c tr&ecirc;n m&igrave;nh những tia nắng ấm &aacute;p . M&ugrave;a xu&acirc;n c&ograve;n l&agrave; m&ugrave;a sum vầy, gia đ&igrave;nh đo&agrave;n tụ b&ecirc;n bếp lửa, chia sẻ những c&acirc;u chuyện buồn vui của năm cũ, c&ugrave;ng nhau đ&oacute;n một năm mới an khang - thịnh vượng.<br />\r\nThế nhưng kh&ocirc;ng phải ai cũng may mắn được đ&oacute;n một c&aacute;i tết trọn vẹn, m&ugrave;a xu&acirc;n th&igrave; vẫn đẹp như thế nhưng trong mắt họ đ&acirc;u đ&oacute; vẫn chất chứa bao nỗi lo về cơm &aacute;o. Họ cũng muốn được cảm nhận hương vị Tết cổ truyền để thấy m&ugrave;a xu&acirc;n thật ấm &aacute;p&nbsp;<br />\r\n&nbsp;Thấu hiểu được những kh&oacute; khăn đ&oacute;, CLB TNTN khoa CNTT quyết định tổ chức chương tr&igrave;nh &ldquo;Tết ấm y&ecirc;u thương 2023&rdquo; với mong ước g&oacute;p một ch&uacute;t c&ocirc;ng sức v&agrave;o chiến dịch lan toả y&ecirc;u thương đến mọi nh&agrave;, mọi mảnh đời bất hạnh v&agrave;o những ng&agrave;y Tết đến xu&acirc;n về .</p>\r\n\r\n<p><img alt=\"\" src=\"https://scontent.fhan5-8.fna.fbcdn.net/v/t39.30808-6/323697534_1805995089771143_5477888758022683014_n.jpg?_nc_cat=110&amp;ccb=1-7&amp;_nc_sid=730e14&amp;_nc_ohc=VEFUtVLm8bIAX-7PL8z&amp;_nc_ht=scontent.fhan5-8.fna&amp;oh=00_AfAjKAANAv7tmVvN7BsAeTERLkKQnfqCLeosj2D5H_o_GA&amp;oe=64025459\" style=\"height:500px; width:1200px\" /><br />\r\nChuyến xe mang t&ecirc;n &ldquo;Tết ấm y&ecirc;u thương&rdquo; lần n&agrave;y sẽ gh&eacute; thăm Trung t&acirc;m điều dưỡng thương binh Duy T&ecirc;n tại H&agrave; Nam - nơi những anh h&ugrave;ng thời chiến k&eacute;m may mắn rất cần sự quan t&acirc;m sẻ chia từ cộng đồng. C&ugrave;ng với đ&oacute; tại H&agrave; Nội, ch&uacute;ng ta cũng sẽ gh&eacute; thăm những mảnh đời bất hạnh - những người v&ocirc; gia cư đang phải chống chọi với c&aacute;i lạnh c&aacute;i đ&oacute;i giữa trời đ&ocirc;ng H&agrave; Nội. Mong rằng họ sẽ cảm nhận được những ấm &aacute;p ng&agrave;y cuối đ&ocirc;ng v&agrave; ch&uacute;t hương vị gia đ&igrave;nh ng&agrave;y xu&acirc;n đến&nbsp;<br />\r\nTr&ecirc;n h&agrave;nh tr&igrave;nh trao y&ecirc;u thương ấy, c&aacute;c th&agrave;nh vi&ecirc;n c&ugrave;ng cộng t&aacute;c vi&ecirc;n của CLB sẽ được trải nghiệm những hoạt động v&ocirc; c&ugrave;ng &yacute; nghĩa như:<br />\r\n* Trực tiếp g&oacute;i những chiếc b&aacute;nh trưng xanh với thật nhiều y&ecirc;u thương&nbsp;<br />\r\n* Được trải nghiệm chuyến phượt đ&ecirc;m H&agrave; Nội v&ocirc; c&ugrave;ng đặc biệt.<br />\r\n* Giao lưu văn nghệ với những tiết mục đặc sắc&nbsp;<br />\r\n* C&ugrave;ng tới thăm hỏi v&agrave; trao tặng những m&oacute;n qu&agrave; &yacute; nghĩa cho c&aacute;c b&aacute;c thương bệnh binh tại H&agrave; Nam&nbsp;<br />\r\n* &nbsp;Biết th&ecirc;m những c&acirc;u chuyện về cuộc sống từ đ&oacute; r&uacute;t ra được nhiều b&agrave;i học s&acirc;u sắc.</p>\r\n\r\n<p><img alt=\"\" src=\"https://drive.google.com/file/d/1ch077zRHLCCSChwMEFSpGa8HAQvQFy_d/view?usp=share_link\" /><img alt=\"\" src=\"https://scontent.fhan5-11.fna.fbcdn.net/v/t39.30808-6/322200760_468119652200010_6277777475732846881_n.jpg?_nc_cat=100&amp;ccb=1-7&amp;_nc_sid=730e14&amp;_nc_ohc=-AmQrxGBorAAX9uTuvx&amp;_nc_ht=scontent.fhan5-11.fna&amp;oh=00_AfB_vLQhafFXLV0bDoFhF7CY_Axj4qTW9kIslFrqE33JRw&amp;oe=64025F77\" style=\"height:500px; width:1200px\" />&nbsp;Sau qu&aacute; tr&igrave;nh g&acirc;y quỹ từ chiến dịch &ldquo;kế hoạch nhỏ&rdquo; th&igrave; nay ch&uacute;ng ta sẽ c&ugrave;ng nhau tạo n&ecirc;n &ldquo;kế hoạch lớn&rdquo; mang nhiều &yacute; nghĩa hơn. To&agrave;n bộ &ldquo;số vốn&rdquo;&nbsp; thu được từ chiến dịch sẽ được d&ugrave;ng v&agrave;o việc mua nguy&ecirc;n liệu g&oacute;i b&aacute;nh v&agrave; quy đổi ra c&aacute;c phần qu&agrave; &yacute; nghĩa, được ch&iacute;nh tay c&aacute;c bạn th&agrave;nh vi&ecirc;n, cộng t&aacute;c vi&ecirc;n của CLB trao tới cho người v&ocirc; gia cư v&agrave; những b&aacute;c thương bệnh binh tại H&agrave; Nam, H&agrave; Nội.<br />\r\nCơ sở 3 - H&agrave; Nam: Trung t&acirc;m điều dưỡng thương binh Duy Ti&ecirc;n.<br />\r\n&nbsp;Thời gian: 8/1/2023 (17/12 &acirc;m lịch).<br />\r\nCơ sở 1 - H&agrave; Nội: Quanh khu vực th&agrave;nh phố H&agrave; Nội.<br />\r\nThời gian: 12/1/2023 (21/12 &acirc;m lịch).<br />\r\n&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(9, 'Chương trình: Mùa hè xanh 2022', '1677557519_IMG_9996.jpg', '<p>&nbsp;M&ugrave;a hạ năm nay vẫn thơm m&ugrave;i nắng cũ, b&ocirc;ng hoa hướng dương đại diện cho sự tỏa s&aacute;ng v&agrave; t&ocirc;i cũng sẽ y&ecirc;u m&agrave;u &aacute;o t&igrave;nh nguyện như thế chung thủy v&agrave; nồng nhiệt.<br />\r\nKho&aacute;c tr&ecirc;n m&igrave;nh m&agrave;u &aacute;o xanh t&igrave;nh nguyện ch&uacute;ng ta mang trong m&igrave;nh nghĩa vụ lớn lao, l&agrave; người truyền cảm hứng những điều t&iacute;ch cực đến với x&atilde; hội từ những h&agrave;nh động nhỏ b&eacute;. H&atilde;y c&ugrave;ng nhau tham gia &ldquo;CHƯƠNG TR&Igrave;NH M&Ugrave;A H&Egrave; XANH 2022&rdquo; để g&oacute;p sức v&agrave;o c&ocirc;ng cuộc x&acirc;y dựng m&ocirc;i trường xanh - sạch - đẹp nh&eacute;&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/webphp/app/assets/upload/news/1677557519_IMG_9996.jpg\" style=\"height:800px; width:1200px\" /></p>\r\n\r\n<p>Điểm đến của chương tr&igrave;nh lần n&agrave;y sẽ tại x&atilde; Cao Phong, huyện S&ocirc;ng L&ocirc;, tỉnh Vĩnh Ph&uacute;c. Lần n&agrave;y ch&uacute;ng ta sẽ được đến với mảnh đất c&oacute; truyền thống c&aacute;ch mạng v&agrave; lịch sử văn ho&aacute; v&ocirc; c&ugrave;ng phong ph&uacute;. Được biết trong thời kỳ kh&aacute;ng chiến x&atilde; Cao Phong l&agrave; nơi c&oacute; hoạt động c&aacute;ch mạng s&ocirc;i nổi, được Nh&agrave; nước trao tặng danh hiệu x&atilde; Anh h&ugrave;ng trong thời kỳ kh&aacute;ng chiến chống thực d&acirc;n Ph&aacute;p. Đ&acirc;y l&agrave; địa điểm hứa hẹn đem đến nhiều trải nghiệm cho mọi người qua c&aacute;c hoạt động th&uacute; vị:<br />\r\n* Hỗ trợ tin học h&oacute;a: Dạy học cho trẻ em từ 8 đến 10 tuổi về nội dung lập tr&igrave;nh game, ng&ocirc;n ngữ lập tr&igrave;nh Scratch.<br />\r\n* &nbsp;Hỗ trợ khắc phục sự cố m&aacute;y t&iacute;nh.<br />\r\n* Trồng v&agrave; cắt tỉa &quot;Đường hoa thanh ni&ecirc;n&quot;.<br />\r\n* Hỗ trợ n&ocirc;ng th&ocirc;n mới: Qu&eacute;t dọn, sửa sang lại đường l&agrave;ng ng&otilde; x&oacute;m.<br />\r\n* Qu&eacute;t dọn nghĩa trang liệt sĩ, thắp hương tưởng nhớ c&aacute;c anh h&ugrave;ng liệt sĩ.</p>\r\n\r\n<p><br />\r\nThời gian diễn ra chương tr&igrave;nh: ng&agrave;y 24 - 27/07/2022.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `ID` int NOT NULL,
  `Content` varchar(5000) COLLATE utf8mb4_general_ci NOT NULL,
  `Total` int NOT NULL,
  `Collecter` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `CollectionDate` date NOT NULL,
  `Status` int NOT NULL,
  `Action` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`ID`, `Content`, `Total`, `Collecter`, `CollectionDate`, `Status`, `Action`) VALUES
(5, 'Liên hoan đội', 1000000, 'Nguyễn Thanh Tùng', '2023-02-25', 1, 'Chi'),
(6, '<p>Thu Qũy L&ecirc; Tuấn Anh</p>\r\n', 100000, 'Nguyễn Thanh Tùng', '2023-02-25', 1, 'Thu'),
(7, '<p>Thu quỹ Dương Hải Nam</p>\r\n', 100000, 'Nguyễn Thanh Tùng', '2023-02-25', 1, 'Thu');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `ID` int NOT NULL,
  `Stu_Code` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Stu_Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `Class` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Department` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Addresss` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Image` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `TimeJoin` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`ID`, `Stu_Code`, `Stu_Name`, `BirthDate`, `Class`, `Department`, `Addresss`, `Phone`, `Email`, `Image`, `TimeJoin`) VALUES
(1, '2013660660', 'Lưu Hoàng Anh', '2004-02-04', 'KHMT1', 'CNTT', 'Nam Định', '0255255255', 'lha@gmail.com', '1677356633_noimage.png', '2023-02-14'),
(3, '2019602734', 'Dương Nam Lớn', '2023-03-11', 'K14', 'CNTT', 'Hà Nội', '03561585221', 'abcde@gmail.com', '1677357009_noimage.png', '2021-02-09'),
(4, '2019602734', 'Nguyễn Văn F', '2023-02-02', 'KHMT01', 'CNTT', 'Minh Khai, Bắc Từ Liêm, Hà Nội', '0969904841', 'b@mail.com', '1677357059_noimage.png', '2023-02-08'),
(5, '2019602734', 'Nguyễn Văn F', '2023-02-10', 'KHMT01_K13', 'CNTT', 'Minh Khai, Bắc Từ Liêm, Hà Nội', '0969904841', 'b@mail.com', '1677356949_noimage.png', '2022-03-25'),
(6, '2019602734', 'Nguyễn Văn G', '2023-02-10', 'KHMT1', 'CNTT', 'Minh Khai, Bắc Từ Liêm, Hà Nội', '0338799081', 'c@gmail.com', '1677356842_noimage.png', '2023-02-14'),
(7, '123214214', 'Dương Nam', '2023-03-11', 'K14', 'CNTT', 'Hà Nội', '03561585221', 'abcde@gmail.com', '1677356790_noimage.png', '2023-02-10'),
(8, '13231231', 'Dương Nam', '2023-03-11', 'K14', 'CNTT', 'Hà Nội', '03561585221', 'abcde@gmail.com', '1677356773_noimage.png', '2023-02-04'),
(9, '123544', 'Nguyễn Thanh Tùng', '2023-02-02', 'KHMT1', 'CNTT', 'Ha Noi', '2655226', 'abc123@gmail.com', '1677357162_1.png', '2022-06-25'),
(10, '12254454', 'Nguyễn Thùy Linh', '2022-07-16', 'KHMT1', 'CNTT', 'Hà Nội', '0221442332336', 'abcdf@gmail.com', '1677356757_noimage.png', '2023-02-22'),
(11, '2019601801', 'Duong Van Be', '2001-03-22', 'KHMT', 'CNTT', 'Ha Noi', '02255443311', 'abfg@gmail.com', '1677356716_noimage.png', '2023-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `memberfeedback`
--

CREATE TABLE `memberfeedback` (
  `ID` int NOT NULL,
  `Email` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Content` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `memberfeedback`
--

INSERT INTO `memberfeedback` (`ID`, `Email`, `Name`, `Content`, `Status`) VALUES
(1, 'abc123@gmail.com', 'Duong Nam', 'happy', 1),
(3, 'abc123@gmail.com', 'Nam', 'Tham gia Đội giúp mình từ một người “Hướng nội” thành một người hướng lung tung. Thật sự alf một tập thể đoàn kết và đang để các bạn tham gia nha!', 1),
(4, 'abc123@gmail.com', 'Nam', 'Tôi nói thật là các bạn nên tham gia Đội ngay điii nếu không là phí cả thanh xuân 4 năm đại học đó.', 1),
(5, 'abc123@gmail.com', 'Nam', 'Tham gia Đội giúp mình từ một người “Hướng nội” thành một người hướng lung tung. Thật sự alf một tập thể đoàn kết và đang để các bạn tham gia nha!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notify`
--

CREATE TABLE `notify` (
  `ID` int NOT NULL,
  `Title` text COLLATE utf8mb4_general_ci NOT NULL,
  `Content` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notify`
--

INSERT INTO `notify` (`ID`, `Title`, `Content`, `Status`) VALUES
(1, 'Thông báo thu quỹ tháng 3', '', 0),
(2, 'Thông báo họp đội', '', 0),
(3, 'thông báo 4', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `topmember`
--

CREATE TABLE `topmember` (
  `ID` int NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Position` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `Class` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Image` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `Description` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topmember`
--

INSERT INTO `topmember` (`ID`, `Name`, `Position`, `BirthDate`, `Class`, `Address`, `Image`, `Description`) VALUES
(1, ' Hoàng Thu Hằng', 'Đội trưởng Khóa 12', '2000-02-09', 'HTTT01 - K13', 'Bắc Giang', '1677340170_2.png', '<p>L&agrave; một trong những nữ đội trưởng v&ocirc; c&ugrave;ng t&agrave;i năng v&agrave; năng động. Chị Ho&agrave;ng Thu Hằng lu&ocirc;n mang đến những nguồn năng lượng v&ocirc; c&ugrave;ng t&iacute;ch cực đến với tất cả anh chị em trong đội.</p>\r\n'),
(2, 'Nguyễn Thanh Tùng', 'Đội phó', '2001-09-13', 'KHMT01_K14', 'Vĩnh Phúc', '1677340348_1.png', '<p>Một trong những đội ph&oacute; với l&ograve;ng nhiệt huyết, hết m&igrave;nh v&igrave; đội. Anh Nguyễn Thanh T&ugrave;ng &nbsp;lu&ocirc;n mang đến những nụ cười v&agrave; nguồn năng lượng v&ocirc; c&ugrave;ng t&iacute;ch cực mỗi khia tham gia c&aacute;c hoạt động với anh chị em trong đội.&nbsp;</p>\r\n'),
(3, 'Nguyễn Thùy Linh', 'Đội trưởng khóa 13', '2000-06-06', 'KHMT01_K13', 'Vĩnh Phúc', '1677354586_IMG_4719 1.png', '<p>Một trong những nữ đội trưởng v&ocirc; c&ugrave;ng tr&aacute;ch nghiệm, t&agrave;i năng v&agrave; năng động. Chị Nguyễn Th&ugrave;y Linh lu&ocirc;n mang đến những nguồn năng lượng v&ocirc; c&ugrave;ng t&iacute;ch cực.</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `BirthDate` date NOT NULL,
  `Class` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Department` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Address` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Desire` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` int NOT NULL,
  `Stu_Code` varchar(500) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Name`, `BirthDate`, `Class`, `Department`, `Address`, `Phone`, `Email`, `Desire`, `Status`, `Stu_Code`) VALUES
(1, 'Dương Nam', '2023-03-11', 'K14', 'CNTT', 'Hà Nội', '03561585221', 'abcde@gmail.com', 'abcbbcbc', 1, ''),
(5, 'Dương Văn A', '2001-03-16', 'KHMT_K14', 'CNTT', 'Hà Nội', '0255443321', 'abc12345@gmail.com', 'tham gia đội', 1, ''),
(6, 'Duong Van B', '2001-03-22', 'KHMT', 'CNTT', 'Ha Noi', '02255443311', 'abfg@gmail.com', 'tham gia doi', 1, '2019601801');

-- --------------------------------------------------------

--
-- Table structure for table `userfeedback`
--

CREATE TABLE `userfeedback` (
  `ID` int NOT NULL,
  `Name` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `Email` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `Content` text COLLATE utf8mb4_general_ci NOT NULL,
  `Status` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userfeedback`
--

INSERT INTO `userfeedback` (`ID`, `Name`, `Email`, `Content`, `Status`) VALUES
(1, 'Nam', 'abc12@gmai', 'đuổi tùng', 0),
(2, 'Nam 2', 'abc123@gma', 'đuổi tùng 2', 0),
(3, 'Nam 2', 'abc123@gma', 'đuổi tùng 2', 0),
(4, 'Nam 2', 'abc123@gma', 'đuổi tùng 2', 0),
(5, 'Nam 2', 'abc123@gma', 'đuổi tùng 2', 0),
(6, 'Nam 3', 'abc123@gma', 'đuổi tùng 3', 0),
(7, 'Nam 4', 'abc123@gma', 'đuổi tùng 4', 0),
(8, 'Nam 5', 'abc123@gma', 'đuổi tùng 5', 0),
(9, 'Nam6', 'abc123@gma', 'đuổi tùng 6', 0),
(10, 'Nam7', 'abc123@gma', 'đuổi tùng 7', 1),
(11, 'Nam8', 'abc123@gma', 'đuổi tùng 8', 1),
(12, 'Nam9', 'abc123@gma', 'đuổi tùng 9', 1),
(13, 'Duong Nam', 'abcf@gmail', 'duoi tungf luon', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `actitvity`
--
ALTER TABLE `actitvity`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `memberfeedback`
--
ALTER TABLE `memberfeedback`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `notify`
--
ALTER TABLE `notify`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `topmember`
--
ALTER TABLE `topmember`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userfeedback`
--
ALTER TABLE `userfeedback`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `actitvity`
--
ALTER TABLE `actitvity`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `memberfeedback`
--
ALTER TABLE `memberfeedback`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notify`
--
ALTER TABLE `notify`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `topmember`
--
ALTER TABLE `topmember`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userfeedback`
--
ALTER TABLE `userfeedback`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
