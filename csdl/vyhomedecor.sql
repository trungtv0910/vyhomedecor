-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 05:19 AM
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
(2, 'Phòng Ngủ'),
(3, 'Phòng Ăn'),
(4, 'Phòng Làm Việc'),
(5, 'Hàng Trang Trí'),
(6, 'Ngoại Thất'),
(8, 'ádasdasdwa');

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
(2, 'Sofa góc 123', 1),
(3, 'Ghế thư giãn', 1),
(4, 'Ghế dài & Đôn', 1),
(5, 'Bàn nước', 1),
(6, 'Bàn bên', 1),
(7, 'Bàn Console', 1),
(8, 'Tủ Tivi', 1),
(9, 'Bàn ăn113', 2),
(10, 'Ghế ăn', 2),
(11, 'Ghế bar', 2),
(12, 'Tủ ly VIP', 2),
(13, 'Xe đẩy', 2),
(14, 'Giường ngủ', 3),
(15, 'Bàn đầu giường', 3),
(16, 'tủ áo nhiều màu', 3),
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
(27, 'Hoa và Cây', 5);

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
(1, 'Bàn ăn nhỏ, bàn cafe', 'Màu sắc: Đen/trắng\r\n\r\nKích thước: D70xR70xC75 (cm)\r\n\r\nKhối lượng thực tế: 13kg\r\n\r\nChất liệu:\r\n\r\n- Mặt gỗ Plywood phủ Laminate\r\n\r\n- Chân sắt sơn tĩnh điện\r\n\r\nÝ tưởng thiết kế:\r\n\r\nMột sản phẩm nội thất Nhà ở, căn hộ được ưa chuộng. Bàn chân Honey với giá thành cạnh tranh, chất lượng vật liệu vượt trội, thiết kế tối giản mà thanh lịch sẽ mang lại sự hài lòng cho bạn. \r\n\r\nCác điểm nổi bật:\r\n\r\nPhần mặt bàn làm từ Mặt gỗ Plywood phủ Laminate có khả năng chống ẩm tốt, các đường vân hiên đại.\r\n\r\nPhần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.\r\n\r\nĐược thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. ', 123, 2250000, '', '', '2021-11-18', 1000, 1, 11, 4, NULL),
(2, 'Bàn cafe ', 'Chất liệu:  Beton, thép\r\n\r\nKích thước: Đường kính 60cm, cao 75cm', 300, 3750000, '', '', '2021-11-17', 1000, 0, 9, 6, NULL),
(3, 'Bàn làm việc', 'Màu sắc:\r\n\r\nChân: Trắng, đen.\r\n\r\nMặt: Trắng, đen, gỗ.\r\n\r\nKích thước: H75 x D120 x W50.\r\n\r\nKhối lượng thực tế: 13kg.\r\n\r\nChất liệu:\r\n\r\nMặt bàn: Gỗ MFC\r\n\r\nChân bàn: Sắt sơn tĩnh điện.\r\n\r\nÝ tưởng thiết kế:\r\n\r\nMột sản phẩm nội thất văn phòng được ưa chuộng. Bàn chân X với giá thành cạnh tranh, chất lượng vật liệu vượt trội, thiết kế tối giản mà thanh lịch sẽ mang lại sự hài lòng cho bạn. \r\n\r\nCác điểm nổi bật:\r\n\r\nPhần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.\r\n\r\nĐược thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. \r\n\r\n', 300, 1450000, '', '', '2021-11-17', 1000, 3, 21, 4, NULL),
(4, 'Bàn làm việc', 'Màu sắc:\r\n\r\nChân: Trắng, đen.\r\n\r\nMặt: Trắng, đen, gỗ.\r\n\r\nKích thước: H75 x D120 x W50.\r\n\r\nKhối lượng thực tế: 13kg.\r\n\r\nChất liệu:\r\n\r\nMặt bàn: Gỗ MFC\r\n\r\nChân bàn: Sắt sơn tĩnh điện.\r\n\r\nÝ tưởng thiết kế:\r\n\r\nMột sản phẩm nội thất văn phòng được ưa chuộng. Bàn chân X với giá thành cạnh tranh, chất lượng vật liệu vượt trội, thiết kế tối giản mà thanh lịch sẽ mang lại sự hài lòng cho bạn. \r\n\r\nCác điểm nổi bật:\r\n\r\nPhần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.\r\n\r\nĐược thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. \r\n\r\n', 300, 1450000, '', '', '2021-11-17', 1000, 2, 21, 4, NULL),
(5, 'Sản Phẩm chức năng 00009123', '   sản phẩm mới', 6, 40000000, 'banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg', '', '2021-11-19', 0, 0, 6, 1, 0.1),
(6, 'Bạt nhún', 'OKdasd', 8, 40000000, 'mmh08446_d433170a37474bf39bb9d88ce47d5c92_7fb98648971e48fc836793c3e0b396c5_master.jpg', '', '2021-11-19', 0, 0, 2, 1, 0),
(7, 'Sản Phẩm Bàn banan honey', 'Bàn Làm việc', 16, 4000000, 'banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg', '[{\"id\":1,\"image\":\"banan-honey-den-1_a2253f979dd647948629d355dfe8192d_master.jpg\"},{\"id\":2,\"image\":\"banan-honey-den-2_42a7bc0a76c94a309a7a892b1414d5bf_c5db7537aa3742ec8615056f16087c3d_master.jpg\"},{\"id\":3,\"image\":\"banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg\"},{\"id\":4,\"image\":\"banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg\"}]', '2021-11-19', 0, 0, 21, 4, 0.1),
(8, 'Vỏ Chăn', '            Màu sắc: Be nhạt phối xanh rêu\r\n\r\nKích thước sản phẩm: D200x R180cm\r\n\r\nMô tả sản phẩm: Dễ dàng cố định vỏ chăn với 5 - 7 dây buộc với ruột chăn. Dây kéo cao cấp thuận tiện thay đổi vỏ chăn.\r\n\r\nChất liệu: Linen\r\n\r\nHướng dẫn sử dụng:\r\n- Không nên ngâm sản phẩm.\r\n- Không giặt sản phẩm với các loại hoá chất có chất tẩy mạnh.\r\n- Nên giặt bằng tay/giặt máy chế độ nhẹ và nhiệt độ bình thường.\r\n- Nên lật mặt trái sản phẩm, giặt riêng theo màu và bên trong túi giặt.\r\n- Nên phơi sản phẩm ở nơi thoáng mát, tránh ánh nắng trực tiếp.\r\n- Nên sấy khô hoặc ủi với nhiệt độ nhỏ hơn 110 độ C.\r\n- Lưu ý: Không được ủi các sản phẩm chần gòn', 9, 855000, '11__1024x768__b798322985f54db2a844f711d7242d27_master.png', '[{\"id\":1,\"image\":\"12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png\"},{\"id\":2,\"image\":\"11__1024x768__b798322985f54db2a844f711d7242d27_master.png\"},{\"id\":3,\"image\":\"xanhreu__1024x768__b0f6fbb537d944f684ac7ea4bf3c1a6d_master.png\"},{\"id\":4,\"image\":\"p1__1024x768__115293c283eb4566831210a00637bfab_master.png\"}]', '2021-11-19', 0, 0, 21, 4, 0.05),
(9, 'Sản Phẩm chức năng 00009123', 'ok', 2, 40000000, 'banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg', '[]', '2021-11-19', 0, 0, 23, 4, 0.1),
(10, 'Bàn Cafe Honny', 'Bàn Cafe đen', 2, 40000000, 'banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg', '[]', '2021-11-19', 0, 2, 23, 4, 0.1),
(11, 'Sản Phẩm chức năng 00009123', 'Sản phẩm quá oke', 2, 40000000, '12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png', '[]', '2021-11-19', 0, 1, 26, 5, 0.1),
(12, 'Gối Xám ', '  Gối Xám', 3, 4000000, '11__1024x768__b798322985f54db2a844f711d7242d27_master.png', '[]', '2021-11-19', 0, 2, 13, 2, 0.05),
(13, 'Áo khoác chống thấm leo núi dã ngoại Rain-Cut cho nam - Đen', 'san phảm mới', 200, 300000, 'banan-honey-den-1_a2253f979dd647948629d355dfe8192d_master.jpg', '[{\"id\":1,\"image\":\"banan-honey-den-1_4547d64c84af45b3802744814923fa3b_master.jpg\"},{\"id\":2,\"image\":\"banan-honey-den-3_5c632ea1fc81430e9508d92f85c25c88_149b24fcab3e4790a6387d921ae0af46_master.jpg\"},{\"id\":3,\"image\":\"12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png\"}]', '2021-11-20', 0, 0, 10, 2, 0.1),
(14, 'voi rừng', '  23123123', 2222, 4995000, '12__1024x768__d57227a64d8043768289f7bfbbdc3fde_master.png', '[]', '2021-11-20', 0, 1, 22, 4, 0.05);

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
  MODIFY `cateChildId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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
  MODIFY `prodId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
