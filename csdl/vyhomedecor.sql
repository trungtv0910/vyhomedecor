-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2021 lúc 05:35 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `vyhomedecor`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill`
--

CREATE TABLE `tbl_bill` (
  `billId` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `date` date NOT NULL,
  `payMethod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billTotal` float NOT NULL,
  `billStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill`
--

INSERT INTO `tbl_bill` (`billId`, `custId`, `date`, `payMethod`, `billTotal`, `billStatus`) VALUES
(1, 3, '2021-11-02', '0', 20000, '0'),
(2, 4, '0000-00-00', '0', 20000, '1'),
(3, 3, '2021-11-18', '1', 500000, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill_detail`
--

CREATE TABLE `tbl_bill_detail` (
  `billId` int(10) NOT NULL,
  `prodId` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_bill_detail`
--

INSERT INTO `tbl_bill_detail` (`billId`, `prodId`, `quantity`, `price`, `image`) VALUES
(3, 22, 20, 2250000, ''),
(1, 27, 10, 2250000, ''),
(3, 54, 1, 2250000, ''),
(3, 53, 12, 3750000, ''),
(3, 52, 10, 2250000, ''),
(2, 54, 10, 2250000, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cateId` int(10) NOT NULL,
  `cateName` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category`
--

INSERT INTO `tbl_category` (`cateId`, `cateName`) VALUES
(1, 'Phòng Khách'),
(2, 'Phòng Ăn'),
(3, 'Phòng Ngủ'),
(4, 'Phòng Làm Việc'),
(5, 'Hàng Trang Trí'),
(6, 'Ngoại Thất');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_child`
--

CREATE TABLE `tbl_category_child` (
  `cateChildId` int(10) NOT NULL,
  `cateChildName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cateId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_child`
--

INSERT INTO `tbl_category_child` (`cateChildId`, `cateChildName`, `cateId`) VALUES
(1, 'Sofa Tròn', 1),
(2, 'Kệ/ Tủ Giày', 1),
(4, 'Ghế & Đôn', 1),
(5, 'Bàn nước', 1),
(7, 'Bàn Console', 1),
(8, 'Tủ Tivi', 1),
(14, 'Giường ngủ', 3),
(15, 'Bàn đầu giường', 3),
(17, 'Tủ âm tường', 3),
(18, 'Tủ hộc kéo', 3),
(19, 'Bàn trang điểm', 3),
(20, 'Nệm', 3),
(21, 'Bàn làm việc', 4),
(22, 'Ghế làm việc', 4),
(23, 'Kệ sách', 4),
(24, 'Đèn trang trí', 5),
(25, 'Thảm trang trí', 5),
(26, 'Gương', 5),
(27, 'Hoa và Cây', 5),
(28, 'Kệ Bếp', 2),
(29, 'Bàn ăn', 2),
(30, 'Bàn Ghế', 2),
(32, 'Thảm Bếp', 2),
(34, 'Gối Trang Trí', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `commId` int(10) NOT NULL,
  `replyId` int(10) DEFAULT 0,
  `prodId` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_comment`
--

INSERT INTO `tbl_comment` (`commId`, `replyId`, `prodId`, `custId`, `content`, `date`) VALUES
(4, 0, 25, 3, 'sản phẩm oke không a ?', '03:37:18 pm 24/11/2021'),
(5, 0, 25, 3, 'alo sản phẩm hay quá AE', '03:38:28 pm 24/11/2021'),
(6, 0, 25, 3, 'sản phẩm oke không a ?', '03:40:11 pm 24/11/2021'),
(20, 0, 20, 3, 'hay quá', '04:28:07 pm 24/11/2021'),
(23, 0, 20, 3, 'còn', '04:28:30 pm 24/11/2021'),
(29, 0, 18, 3, 'còn không người ả', '04:33:39 pm 24/11/2021'),
(32, 0, 18, 3, 'oke bạn', '04:37:31 pm 24/11/2021'),
(33, 0, 18, 3, 'sản phẩm oke không a ?', '04:37:35 pm 24/11/2021'),
(36, 0, 18, 3, 'oke bạn', '04:49:10 pm 24/11/2021'),
(37, 0, 18, 3, 'hay quá', '04:49:17 pm 24/11/2021'),
(46, 0, 21, 3, 'sản phẩm oke không a ?', '06:14:58 pm 24/11/2021'),
(47, 0, 21, 3, 'alo sản phẩm hay quá AE', '06:15:01 pm 24/11/2021'),
(48, 0, 21, 3, 'hay quá', '06:15:03 pm 24/11/2021'),
(49, 0, 21, 3, 'còn', '06:15:06 pm 24/11/2021'),
(57, 0, 24, 3, 'không có thời gian', '07:55:42 pm 24/11/2021'),
(60, 57, 24, 3, 'sản phẩm này hết hàng rồi ạ', '11:26:02 pm 24/11/2021'),
(61, 57, 24, 3, 'Muốn Mua cũng không được đâu ạ\r\n', '11:26:37 pm 24/11/2021'),
(67, 0, 21, 3, 'con hang k aj', '10:55:57 am 25/11/2021'),
(68, 61, 24, 3, 'xin chao quy khach', '11:00:28 am 25/11/2021'),
(69, 60, 24, 3, 'tooi  xin cam on\r\n', '11:01:07 am 25/11/2021'),
(72, 57, 24, 3, 'hello', '11:42:43 am 25/11/2021'),
(73, 57, 24, 3, 'hello', '11:43:16 am 25/11/2021'),
(74, 57, 24, 3, 'hello', '11:43:32 am 25/11/2021'),
(77, 5, 25, 3, 'Hay quá quý khách', '12:00:31 pm 25/11/2021'),
(78, 22, 20, 3, 'oke nhế ', '12:23:22 pm 25/11/2021'),
(80, 0, 25, 3, 'Xin chào ạ', '12:43:11 pm 25/11/2021'),
(81, 80, 25, 3, 'hết hàng rồi bạn trẻ', '12:43:34 pm 25/11/2021'),
(84, 0, 20, 1, 'Quá Đẹp', '12:55:27 pm 25/11/2021'),
(85, 84, 20, 3, 'Xin cảm ơn quý khách chúng tôi sẽ liên lạc với quý khách', '12:56:59 pm 25/11/2021'),
(86, 0, 20, 1, 'Vâng cảm ơn', '12:58:37 pm 25/11/2021'),
(88, 23, 20, 3, 'vâng hết hàng rồi ạ', '04:05:08 pm 25/11/2021'),
(91, 0, 53, 1, 'Sản phẩm này bên mình còn không ?', '09:23:22 pm 25/11/2021'),
(92, 0, 54, 1, 'cái này màu nâu có không vậy shop ?', '09:23:39 pm 25/11/2021'),
(93, 0, 22, 1, 'Giường này oke không vậy?', '09:26:05 pm 25/11/2021'),
(94, 0, 54, 4, 'bàn quá đẹp', '09:26:27 pm 25/11/2021'),
(95, 0, 53, 4, 'tôi muốn mua cái về sài', '09:26:52 pm 25/11/2021'),
(96, 0, 18, 4, 'còn sản phẩm không vậy shop ?', '09:27:22 pm 25/11/2021'),
(97, 92, 54, 3, 'vâng bên em vẫn còn hàng loại này ạ. Quý khách muốn tụi em giao khi nào ạ ?', '09:28:36 pm 25/11/2021'),
(98, 94, 54, 3, 'sản phẩm chất lượng cực kỳ cao ạ', '09:28:57 pm 25/11/2021'),
(99, 95, 53, 3, 'vâng bên em còn nhiều hàng lắm ạ', '09:29:28 pm 25/11/2021'),
(101, 0, 23, 3, 'còn ghế loại này không ạ', '09:42:29 pm 25/11/2021'),
(102, 49, 21, 3, 'xin chào ạ', '11:19:00 pm 25/11/2021'),
(103, 49, 21, 3, 'xin chào ạ', '11:19:26 pm 25/11/2021');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `custId` int(10) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `custName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(10) NOT NULL COMMENT '0:block ; 1:hoạt động',
  `role` int(10) NOT NULL COMMENT '0:khách hàng ;1:Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`custId`, `username`, `password`, `custName`, `image`, `phone`, `email`, `address`, `status`, `role`) VALUES
(1, 'khanh123', '123456', 'Nguyễn Tứ Khánh', '', '09712444221', 'khanh123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, Đà Nẵng', 0, 0),
(2, 'khanhvy123', '123456', 'Nguyễn Tứ vy', '', '0971245611', 'khanhvy123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, Quảng Nam', 1, 0),
(3, 'maode123', '123456', 'Nguyễn Tứ vy', '', '0971245611', 'maode123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, AM', 1, 1),
(4, 'tranquynh', '123456', 'tấn tài', '', '0977123311', 'quynhtran@gmail.com', 'Thừa Thiên Huế, Việt Nam', 1, 0),
(5, 'tuhuy', '123456', 'Trần Vinh Hồng0', '', '0971245611', 'tuhuy123@gmail.com', 'Thôn 1,Nghệ Tinh,Dài Loan s', 1, 0),
(11, 'trungtv0910', 'Vantrung1', 'Trần Văn Trung', NULL, NULL, 'trungtv0910@gmail.com', NULL, 1, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_product`
--

CREATE TABLE `tbl_product` (
  `prodId` int(10) NOT NULL,
  `prodName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prodDesc` text COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `imageSmall` text COLLATE utf8_unicode_ci NOT NULL,
  `dateInput` date NOT NULL,
  `view` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `cateChildId` int(10) NOT NULL,
  `cateId` int(10) NOT NULL,
  `discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_product`
--

INSERT INTO `tbl_product` (`prodId`, `prodName`, `prodDesc`, `quantity`, `price`, `image`, `imageSmall`, `dateInput`, `view`, `type`, `cateChildId`, `cateId`, `discount`) VALUES
(7, 'Sản Phẩm Bàn banan honey', '{\"color\":\"Đen\",\"mass\":\"30kg\",\"size\":\"D58xR38xC58.6 cm\",\"material\":\"Gỗ cao su sơn phủ\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 16, 4000000, 'banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg', '[{\"id\":1,\"image\":\"banan-honey-den-1_a2253f979dd647948629d355dfe8192d_master.jpg\"},{\"id\":2,\"image\":\"banan-honey-den-2_42a7bc0a76c94a309a7a892b1414d5bf_c5db7537aa3742ec8615056f16087c3d_master.jpg\"},{\"id\":3,\"image\":\"banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg\"},{\"id\":4,\"image\":\"banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg\"}]', '2021-11-19', 0, 0, 21, 4, 0.1),
(11, 'Ra Nệm xanh chiều dài 2m2', '{\"color\":\"Đen\",\"mass\":\"30kg\",\"size\":\"D58xR38xC58.6 cm\",\"material\":\"Gỗ cao su sơn phủ\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 2, 900000, 'p1__1024x768__115293c283eb4566831210a00637bfab_master.png', '[{\"id\":1,\"image\":\"11__1024x768__b798322985f54db2a844f711d7242d27_master.png\"},{\"id\":2,\"image\":\"12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png\"},{\"id\":3,\"image\":\"p1__1024x768__115293c283eb4566831210a00637bfab_master.png\"},{\"id\":4,\"image\":\"xanhreu__1024x768__b0f6fbb537d944f684ac7ea4bf3c1a6d_master.png\"}]', '2021-11-19', 0, 2, 20, 3, 0.1),
(18, 'Sofa băng 2 seaters ,sofa phòng khách', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn\"}', 200, 10800000, 'a023_01_9c30702c846747ac89ed9fe6c4984cf8_master.jpg', '[{\"id\":1,\"image\":\"a023_32_78039ce86ced4ba194869982bdb3382b_master.jpg\"},{\"id\":2,\"image\":\"a023_34_231a5a13b7184570bb6e9a320ab38df3_master.jpg\"},{\"id\":3,\"image\":\"a023_37_9c0ea8193aa847cab87a398796b7baaf_master.jpg\"},{\"id\":4,\"image\":\"a023_01_9c30702c846747ac89ed9fe6c4984cf8_master.jpg\"}]', '2021-11-21', 0, 0, 4, 1, 0),
(19, 'Sofa băng 2 seaters', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn\"}', 200, 15000000, 'a013_01_b1d607fb63d64ad080076030048ddc6a_master.jpg', '[{\"id\":1,\"image\":\"a013_32_95ee4d41d2a34705a5e704faf2ea3c9b_master.jpg\"},{\"id\":2,\"image\":\"a013_34_095f955546ed4b99a35d25a112a78e2b_master.jpg\"},{\"id\":3,\"image\":\"a013_37_565498802d5140e7abed3bf7ae22922f_master.jpg\"},{\"id\":4,\"image\":\"a013_01_b1d607fb63d64ad080076030048ddc6a_master.jpg\"}]', '2021-11-21', 0, 0, 4, 1, 0),
(20, 'Kệ giày, treo quần áo, kệ lưu trữ ANCO', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn\"}', 2170, 1536000, 'dengo_2_13e40ae76f2e4a249606c8c9f0777890_master.jpg', '[{\"id\":1,\"image\":\"dengo_1_5a37360928274cc6ae3d713a1e1aafde_master.jpg\"},{\"id\":2,\"image\":\"dengo_1_07ebe1801bdc497ba3c788da110a1c66_master.jpg\"},{\"id\":3,\"image\":\"dengo_2_13e40ae76f2e4a249606c8c9f0777890_master.jpg\"},{\"id\":4,\"image\":\"dentrang_2_60cba9ab3c64432ba936069e59b1bd38_master.jpg\"}]', '2021-11-21', 0, 2, 2, 1, 0),
(21, 'Kệ trưng bày Phòng khách', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn\"}', 200, 2507000, '1637853176den_02_c501bfe05a534ca08f97c4a6935eb945_master.png', '[{\"id\":1,\"image\":\"1_51827adcca00489ababc1263f160e608_master.png\"},{\"id\":2,\"image\":\"2_770e04306f87478487e2d330fe004be6_master.png\"},{\"id\":3,\"image\":\"den_02_c501bfe05a534ca08f97c4a6935eb945_master.png\"},{\"id\":4,\"image\":\"den_07_3441f16e43ee42d9a9b41630e19a702e_master.png\"}]', '2021-11-21', 0, 0, 2, 1, 0.05),
(22, 'Giường 1m6 LULLABY Outlet', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn\"}', 200, 6230000, 'bed_lullaby_49e1b2eb34eb4e9da55654386ea17556_master.png', '[{\"id\":1,\"image\":\"bed_lullaby_49e1b2eb34eb4e9da55654386ea17556_master.png\"},{\"id\":2,\"image\":\"lullaby_876c0899045e4b78a614498af2cc5021_master.jpg\"}]', '2021-11-21', 0, 0, 14, 3, 0),
(23, 'Ghế ăn TIMI', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 22, 2760000, 'naunhat-1_b09957e970ea480d95d8c6186f7d34c4_7c20822ae5a941bea0dbf8b578a6aa5d_master.jpg', '[{\"id\":1,\"image\":\"46_426fd81239914e468a209e29967a74bd_master.png\"},{\"id\":2,\"image\":\"naunhat-1_b09957e970ea480d95d8c6186f7d34c4_7c20822ae5a941bea0dbf8b578a6aa5d_master.jpg\"},{\"id\":3,\"image\":\"nice-dark_3_5871cfb7b58d4334928fd149d77e13de_64f0e62150bc4cf182a948221978c181_master.jpg\"},{\"id\":4,\"image\":\"nice-dark_2_b59fdff4a7354f09aaf530f8933a3e2e_master.jpg\"}]', '2021-11-21', 0, 2, 30, 2, 0.05),
(24, 'Ghế ăn, ghế làm việc DAISY', '{\"color\":\"Trắng, đen, chân gỗ\",\"mass\":\"6kg\",\"size\":\"H77/44 x D57 x R49\",\"material\":\" Chân gỗ, mặt ghế bằng nhựa PP cao cấp.\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 200, 1152000, 'tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg', '[{\"id\":1,\"image\":\"dengo-2_77ed848ae8be45bca47bc61693a47515_568c3feee43e4fc3971111d5327acf9c_master.jpg\"},{\"id\":2,\"image\":\"tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg\"},{\"id\":3,\"image\":\"tranggo-2_9782fb69e4d44bc9829df4962e7dadba_c3c205c153ed414b9741e6efe80c05ea_master.jpg\"},{\"id\":4,\"image\":\"tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg\"}]', '2021-11-21', 0, 0, 29, 2, 0.05),
(25, 'Ghế làm việc TIMI', '{\"color\":\"Đen\",\"mass\":\"30kg\",\"size\":\"D58xR38xC58.6 cm\",\"material\":\"Gỗ cao su sơn phủ\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 100, 1660000, 'xam_xam_1_de7b60eecc594bf4a3539dbe375d064e_master.png', '[{\"id\":1,\"image\":\"xam_6_8334f40d22cf448e9cccfdedc7a5dd81_84fd3039f3c34a5980f1cbb471245a50_master.jpg\"},{\"id\":2,\"image\":\"vahi_fc1717779a6d439fb213f58a1de515ce_master.jpg\"},{\"id\":3,\"image\":\"xam_xam_1_de7b60eecc594bf4a3539dbe375d064e_master.png\"},{\"id\":4,\"image\":\"11_e6d31c1b73604e9283bee86d25e3e3f4_master.png\"}]', '2021-11-21', 0, 2, 22, 4, 0.05),
(26, 'Bàn làm việc ANTU', '{\"color\":\"Đen\",\"mass\":\"30kg\",\"size\":\"D58xR38xC58.6 cm\",\"material\":\"Gỗ cao su sơn phủ\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 22, 1547000, 'denden_1_6d38be30b9a54e6db3267de51c4cd62a_master.jpg', '[{\"id\":1,\"image\":\"denden_2_24bb65d6d4d04054b12dc6665b839bdb_master.jpg\"},{\"id\":2,\"image\":\"denden_1_6d38be30b9a54e6db3267de51c4cd62a_master.jpg\"},{\"id\":3,\"image\":\"xamtrang_2_32d0acecafc2416780a0f04233f1af48_6528de879f2145ed846c0385e827dd0c_master.png\"}]', '2021-11-21', 0, 0, 21, 4, 0.1),
(51, 'Kệ trưng bày SAGO đen xám', '{\"color\":\"Đen\",\"mass\":\"30kg\",\"size\":\"D58xR38xC58.6 cm\",\"material\":\"Gỗ cao su sơn phủ\",\"des\":\"Sản phẩm an Toàn và tốt cho người sử dụng\"}', 200, 2507000, '2_770e04306f87478487e2d330fe004be6_master.png', '[{\"id\":1,\"image\":\"1_51827adcca00489ababc1263f160e608_master.png\"},{\"id\":2,\"image\":\"2_770e04306f87478487e2d330fe004be6_master.png\"},{\"id\":3,\"image\":\"den_02_c501bfe05a534ca08f97c4a6935eb945_master.png\"},{\"id\":4,\"image\":\"den_07_3441f16e43ee42d9a9b41630e19a702e_master.png\"}]', '2021-11-21', 0, 0, 2, 1, 0.05),
(52, 'Sofa đơn ALICE', '{\"color\":\"Xám\",\"mass\":\"\",\"size\":\"D65*R63*C82 cm\",\"material\":\"Vải Polyester, khung gỗ tần bì\",\"des\":\"GHẾ BÀNH, GHẾ THƯ GIÃN - Armchairs & chaises\"}', 200, 2125000, '1637847684xamnhat_3_c4e2eb411d0b4faea89abf900c277937_master (1).png', '[{\"id\":1,\"image\":\"1637847758xamnhat_3_c4e2eb411d0b4faea89abf900c277937_master (1).png\"},{\"id\":2,\"image\":\"1637847758xamnhat_4_90d783aa73574c3bb7afa723eafbdd17_dc680da3955c42c28ae8df65a16dfd1c_master.png\"},{\"id\":3,\"image\":\"1637847758xamnhat_4_8611f2d762a74f0b9f6666394895fe37_2814998ce22a493781b308848d9e78a8_master.png\"},{\"id\":4,\"image\":\"1637847758xamnhat_6_5cbd5e18da34478fbf00d8f580f4b5b0_1c60ea1454364f4b9c071145f99a4eea_master.png\"}]', '2021-11-25', 0, 2, 4, 1, 0),
(53, 'Giường đen 1m2 SAGO', '{\"color\":\"Đen/Trắng\",\"mass\":\"\",\"size\":\"Size 1m2: D208  x R126.5 x C100 cm\",\"material\":\"Thép sơn tĩnh điện\",\"des\":\"Dùng khăn ẩm với nước sạch hoặc dung dịch tẩy rửa nhẹ để làm sạch sản phẩm. Sau đó, lau khô sản phẩm bằng khăn mềm.\"}', 2222, 2252000, '1637848146den-sago__3__da06158435ce4da1b2da57462814721c_master.png', '[{\"id\":1,\"image\":\"1637848204den-sago__2__b6459e9749d3499799b4e9d27d3953d0_master.png\"},{\"id\":2,\"image\":\"1637848204den-sago__3__da06158435ce4da1b2da57462814721c_master.png\"},{\"id\":3,\"image\":\"16378482044_47b5193aeb1b42828007ff7ef30e3b0d_master.png\"},{\"id\":4,\"image\":\"1637848204den-sago__4__ac006f7516674911859816f5d8f92f3c_master.png\"}]', '2021-11-25', 0, 0, 14, 3, 0.05),
(54, 'Bàn sofa, bàn góc CHIN', '{\"color\":\"Trắng/ đen\",\"mass\":\"\",\"size\":\"Đường kính 45cm, cao 50cm\",\"material\":\"Mặt gỗ cao su sơn PU, chân gỗ tự nhiên\",\"des\":\"Đơn giản nhưng không hề kém phần tinh tế, mang lại sự trang nhã, hiện đại cho căn nhà của bạn.\"}', 200, 891000, '1637848355chin_trang_fffc394c178f4f48ba0f346d5f51bbee_master.png', '[{\"id\":1,\"image\":\"1637848388chin_trang_fffc394c178f4f48ba0f346d5f51bbee_master.png\"},{\"id\":2,\"image\":\"1637848388chin_s_trang__4__b096863bdbf34de99ed53d230c6f928b_master.png\"},{\"id\":3,\"image\":\"1637848388chin_trang_fffc394c178f4f48ba0f346d5f51bbee_master.png\"},{\"id\":4,\"image\":\"1637848388chin_s_den__1__813954d384f440dbb5db666b56b04c03_master.png\"}]', '2021-11-25', 0, 2, 15, 3, 0.05);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  ADD PRIMARY KEY (`billId`);

--
-- Chỉ mục cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD KEY `fk_billDetail_bill` (`billId`);

--
-- Chỉ mục cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cateId`);

--
-- Chỉ mục cho bảng `tbl_category_child`
--
ALTER TABLE `tbl_category_child`
  ADD PRIMARY KEY (`cateChildId`),
  ADD KEY `fk_cateChild_cate` (`cateId`);

--
-- Chỉ mục cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`commId`),
  ADD KEY `fk_comment_customer` (`custId`),
  ADD KEY `fk_comment_product` (`prodId`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`custId`);

--
-- Chỉ mục cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`prodId`),
  ADD KEY `fk_product_cate` (`cateId`),
  ADD KEY `fk_product_cateChild` (`cateChildId`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_bill`
--
ALTER TABLE `tbl_bill`
  MODIFY `billId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cateId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tbl_category_child`
--
ALTER TABLE `tbl_category_child`
  MODIFY `cateChildId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `commId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `custId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prodId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_bill_detail`
--
ALTER TABLE `tbl_bill_detail`
  ADD CONSTRAINT `fk_billDetail_bill` FOREIGN KEY (`billId`) REFERENCES `tbl_bill` (`billId`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_category_child`
--
ALTER TABLE `tbl_category_child`
  ADD CONSTRAINT `fk_cateChild_cate` FOREIGN KEY (`cateId`) REFERENCES `tbl_category` (`cateId`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD CONSTRAINT `fk_comment_customer` FOREIGN KEY (`custId`) REFERENCES `tbl_customer` (`custId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_comment_product` FOREIGN KEY (`prodId`) REFERENCES `tbl_product` (`prodId`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_product_cate` FOREIGN KEY (`cateId`) REFERENCES `tbl_category` (`cateId`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_product_cateChild` FOREIGN KEY (`cateChildId`) REFERENCES `tbl_category_child` (`cateChildId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
