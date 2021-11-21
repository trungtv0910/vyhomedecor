-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 11:43 AM
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
  `prodId` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `date` date NOT NULL,
  `payMethod` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `billTotal` float NOT NULL,
  `billStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_bill_detail`
--

CREATE TABLE `tbl_bill_detail` (
  `billId` int(10) NOT NULL,
  `prodId` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `price` float NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `prodName` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `prodId` int(10) NOT NULL,
  `custId` int(10) NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(7, 'Sản Phẩm Bàn banan honey', 'Bàn Làm việc', 16, 4000000, 'banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg', '[{\"id\":1,\"image\":\"banan-honey-den-1_a2253f979dd647948629d355dfe8192d_master.jpg\"},{\"id\":2,\"image\":\"banan-honey-den-2_42a7bc0a76c94a309a7a892b1414d5bf_c5db7537aa3742ec8615056f16087c3d_master.jpg\"},{\"id\":3,\"image\":\"banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg\"},{\"id\":4,\"image\":\"banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg\"}]', '2021-11-19', 0, 0, 21, 4, 0.1),
(11, 'Ra Nệm', ' Kích thước: D50 x R40 x C65 (cm).\r\n\r\nKhối lượng thực tế: 8,5kg.', 2, 900000, 'p1__1024x768__115293c283eb4566831210a00637bfab_master.png', '[{\"id\":1,\"image\":\"11__1024x768__b798322985f54db2a844f711d7242d27_master.png\"},{\"id\":2,\"image\":\"12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png\"},{\"id\":3,\"image\":\"p1__1024x768__115293c283eb4566831210a00637bfab_master.png\"},{\"id\":4,\"image\":\"xanhreu__1024x768__b0f6fbb537d944f684ac7ea4bf3c1a6d_master.png\"}]', '2021-11-19', 0, 2, 20, 3, 0.1),
(18, 'Sofa băng 2 seaters', 'Kích thước:\r\n\r\nSofa 1m8: D180 x R88 x C87/92 cm\r\n\r\nSofa 2m: D200 x R88 x C87/92 cm\r\n\r\n \r\n\r\nĐiểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn.', 200, 10800000, 'a023_01_9c30702c846747ac89ed9fe6c4984cf8_master.jpg', '[{\"id\":1,\"image\":\"a023_32_78039ce86ced4ba194869982bdb3382b_master.jpg\"},{\"id\":2,\"image\":\"a023_34_231a5a13b7184570bb6e9a320ab38df3_master.jpg\"},{\"id\":3,\"image\":\"a023_37_9c0ea8193aa847cab87a398796b7baaf_master.jpg\"},{\"id\":4,\"image\":\"a023_01_9c30702c846747ac89ed9fe6c4984cf8_master.jpg\"}]', '2021-11-21', 0, 0, 4, 1, 0),
(19, 'Sofa băng 2 seaters', 'Điểm đặc biệt của dòng sản phẩm sofa của Make My Home chính là việc bạn có thể tuỳ chọn vải trong bộ sưu tập chất liệu dành cho sofa. Với hơn 45 mẫu vải cùng sự đa dạng về giá và phong cách, khám phá ngay để sở hữu chiếc sofa hoàn hảo dành riêng cho bạn.', 200, 15000000, 'a013_01_b1d607fb63d64ad080076030048ddc6a_master.jpg', '[{\"id\":1,\"image\":\"a013_32_95ee4d41d2a34705a5e704faf2ea3c9b_master.jpg\"},{\"id\":2,\"image\":\"a013_34_095f955546ed4b99a35d25a112a78e2b_master.jpg\"},{\"id\":3,\"image\":\"a013_37_565498802d5140e7abed3bf7ae22922f_master.jpg\"},{\"id\":4,\"image\":\"a013_01_b1d607fb63d64ad080076030048ddc6a_master.jpg\"}]', '2021-11-21', 0, 0, 4, 1, 0),
(20, 'Kệ giày, treo quần áo, kệ lưu trữ', 'Màu sắc:\r\n\r\nKhung: Trắng, đen.\r\n\r\nMặt: Trắng, đen, gỗ.\r\n\r\nKích thước: D60 x R30 x H160\r\n\r\nKhối lượng thực tế: 10kg.\r\n\r\nChất liệu:\r\n\r\nKhung: Sắt sơn tĩnh điện.\r\n\r\nMặt: Gỗ MDF chống ẩm.', 2170, 1536000, 'dengo_2_13e40ae76f2e4a249606c8c9f0777890_master.jpg', '[{\"id\":1,\"image\":\"dengo_1_5a37360928274cc6ae3d713a1e1aafde_master.jpg\"},{\"id\":2,\"image\":\"dengo_1_07ebe1801bdc497ba3c788da110a1c66_master.jpg\"},{\"id\":3,\"image\":\"dengo_2_13e40ae76f2e4a249606c8c9f0777890_master.jpg\"},{\"id\":4,\"image\":\"dentrang_2_60cba9ab3c64432ba936069e59b1bd38_master.jpg\"}]', '2021-11-21', 0, 2, 2, 1, 0),
(21, 'Kệ trưng bày', 'Kích thước: D80 x R40 x C163 cm\r\n\r\nChất liệu: Thép sơn tĩnh điện, gỗ MFC phủ Mellamine\r\n\r\nMàu sắc: Đen/Trắng', 200, 2507000, '2_770e04306f87478487e2d330fe004be6_master.png', '[{\"id\":1,\"image\":\"1_51827adcca00489ababc1263f160e608_master.png\"},{\"id\":2,\"image\":\"2_770e04306f87478487e2d330fe004be6_master.png\"},{\"id\":3,\"image\":\"den_02_c501bfe05a534ca08f97c4a6935eb945_master.png\"},{\"id\":4,\"image\":\"den_07_3441f16e43ee42d9a9b41630e19a702e_master.png\"}]', '2021-11-21', 0, 0, 2, 1, 0.05),
(22, 'Giường 1m6', 'Màu sắc: Xám\r\n\r\nChất liệu: Gỗ thông đỏ, vải polyester\r\n\r\nKích thước : Size 1m6*2m: D214 x R172 x C115 cm', 200, 6230000, 'bed_lullaby_49e1b2eb34eb4e9da55654386ea17556_master.png', '[{\"id\":1,\"image\":\"bed_lullaby_49e1b2eb34eb4e9da55654386ea17556_master.png\"},{\"id\":2,\"image\":\"lullaby_876c0899045e4b78a614498af2cc5021_master.jpg\"}]', '2021-11-21', 0, 0, 14, 3, 0),
(23, 'Ghế ăn', ' Chất liệu: Khung gỗ tần bì, lưng đan mây thật, nệm bọc vải bố\r\n\r\nKích thước: D45x R55x C83cm\r\n\r\nHướng dẫn sử dụng:\r\n\r\n- Để nơi không ráo, không để sản phẩm rớt nước gây hư hỏng bộ phận điện Vệ sinh bằng khăn ẩm, không dùng hoá chất để lau chùi sản phẩm.\r\n- Không bảo hành cho các sản phẩm hư hỏng trong quá trình quý khách sử dụng do sử dụng không cẩn thận, bảo quản và vệ sinh không đúng cách. Cũng như sản phẩm bị các hao mòn thông thường (như phai mờ, rỉ sét do trầy xước, lỏng ốc vít sau một khoảng thời gian...).', 22, 2760000, 'naunhat-1_b09957e970ea480d95d8c6186f7d34c4_7c20822ae5a941bea0dbf8b578a6aa5d_master.jpg', '[{\"id\":1,\"image\":\"46_426fd81239914e468a209e29967a74bd_master.png\"},{\"id\":2,\"image\":\"naunhat-1_b09957e970ea480d95d8c6186f7d34c4_7c20822ae5a941bea0dbf8b578a6aa5d_master.jpg\"},{\"id\":3,\"image\":\"nice-dark_3_5871cfb7b58d4334928fd149d77e13de_64f0e62150bc4cf182a948221978c181_master.jpg\"},{\"id\":4,\"image\":\"nice-dark_2_b59fdff4a7354f09aaf530f8933a3e2e_master.jpg\"}]', '2021-11-21', 0, 2, 30, 2, 0.05),
(24, 'Ghế ăn, ghế làm việc', 'Màu sắc: Trắng, đen, chân gỗ\r\n\r\nKích thước: H77/44 x D57 x R49.\r\n\r\nKhối lượng thực tế: 6kg.\r\n\r\nChất liệu: Chân gỗ, mặt ghế bằng nhựa PP cao cấp.', 200, 1152000, 'tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg', '[{\"id\":1,\"image\":\"dengo-2_77ed848ae8be45bca47bc61693a47515_568c3feee43e4fc3971111d5327acf9c_master.jpg\"},{\"id\":2,\"image\":\"tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg\"},{\"id\":3,\"image\":\"tranggo-2_9782fb69e4d44bc9829df4962e7dadba_c3c205c153ed414b9741e6efe80c05ea_master.jpg\"},{\"id\":4,\"image\":\"tranggo-2_9314ec16b8d64e05a082a84fb8dcfe6c_master.jpg\"}]', '2021-11-21', 0, 0, 29, 2, 0.05),
(25, 'Ghế làm việc', 'Màu sắc: Chân đen, mặt xám\r\n\r\nKích thước: D47 x R52 x C86 (cm)\r\n\r\nKhối lượng thực tế: 7.5kg\r\n\r\nChất liệu:\r\n\r\nVải bố bọc nệm\r\n\r\nChân thép sơn tĩnh điện', 100, 1660000, 'xam_xam_1_de7b60eecc594bf4a3539dbe375d064e_master.png', '[{\"id\":1,\"image\":\"xam_6_8334f40d22cf448e9cccfdedc7a5dd81_84fd3039f3c34a5980f1cbb471245a50_master.jpg\"},{\"id\":2,\"image\":\"vahi_fc1717779a6d439fb213f58a1de515ce_master.jpg\"},{\"id\":3,\"image\":\"xam_xam_1_de7b60eecc594bf4a3539dbe375d064e_master.png\"},{\"id\":4,\"image\":\"11_e6d31c1b73604e9283bee86d25e3e3f4_master.png\"}]', '2021-11-21', 0, 2, 22, 4, 0.05),
(26, 'Bàn làm việc', 'Kích thước: H75 x D120 x R60.\r\n\r\nKhối lượng thực tế: 11,5kg.\r\n\r\nChất liệu:\r\n\r\nMặt bàn: Gỗ MFC.\r\n\r\nChân bàn: Sắt sơn tĩnh điện.', 22, 1547000, 'denden_1_6d38be30b9a54e6db3267de51c4cd62a_master.jpg', '[{\"id\":1,\"image\":\"denden_2_24bb65d6d4d04054b12dc6665b839bdb_master.jpg\"},{\"id\":2,\"image\":\"denden_1_6d38be30b9a54e6db3267de51c4cd62a_master.jpg\"},{\"id\":3,\"image\":\"xamtrang_2_32d0acecafc2416780a0f04233f1af48_6528de879f2145ed846c0385e827dd0c_master.png\"}]', '2021-11-21', 0, 0, 21, 4, 0.1),
(27, 'Kệ đẩy, bàn góc', 'Màu sắc: Trắng, Đen, Xám nhạt\r\n\r\nKích thước: D50 x R40 x C65 (cm).\r\n\r\nKhối lượng thực tế: 8,5kg.\r\n\r\nChất liệu: Sắt sơn tĩnh điện.', 100, 1431000, 'den_1_c05811e91ae448df995372854aba6291_master.png', '[{\"id\":1,\"image\":\"den_1_c05811e91ae448df995372854aba6291_master.png\"},{\"id\":2,\"image\":\"den_5_2cf2e128226f4535a4d37eee21be0e3f_master.png\"},{\"id\":3,\"image\":\"den_2_018cade37a68419a9bb9009f895a561f_master.png\"},{\"id\":4,\"image\":\"xam_1_3ee73adc805041678bf9c5994b924dda_e4a5540f80b044e0969413f0482dfa2b_master.png\"}]', '2021-11-21', 0, 2, 2, 1, 0);

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
  MODIFY `billId` int(10) NOT NULL AUTO_INCREMENT;

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
  MODIFY `commId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `custId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prodId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
