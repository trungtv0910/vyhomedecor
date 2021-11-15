-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 15, 2021 lúc 03:37 AM
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
(1, 'Sofa', 1),
(2, 'Sofa góc', 1),
(3, 'Ghế thư giãn', 1),
(4, 'Ghế dài & Đôn', 1),
(5, 'Bàn nước', 1),
(6, 'Bàn bên', 1),
(7, 'Bàn Console', 1),
(8, 'Tủ Tivi', 1),
(9, 'Bàn ăn', 2),
(10, 'Ghế ăn', 2),
(11, 'Ghế bar', 2),
(12, 'Tủ ly', 2),
(13, 'Xe đẩy', 2),
(14, 'Giường ngủ', 3),
(15, 'Bàn đầu giường', 3),
(16, 'tủ áo', 3),
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
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL COMMENT '0:block ; 1:hoạt động',
  `role` int(10) NOT NULL COMMENT '0:khách hàng ;1:Admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`custId`, `username`, `password`, `custName`, `image`, `phone`, `email`, `address`, `status`, `role`) VALUES
(1, 'khanh123', '123456', 'Nguyễn Tứ Khánh', '', '09712444221', 'khanh123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, Đà Nẵng', 1, 0),
(2, 'khanhvy123', '123456', 'Nguyễn Tứ vy', '', '0971245611', 'khanhvy123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, Quảng Nam', 1, 0),
(3, 'maode123', '123456', 'Nguyễn Tứ vy', '', '0971245611', 'maode123@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, AM', 1, 1),
(4, 'tranquynh', '123456', 'Trần Quỳnh', '', '0971245611', 'quynhtran@gmail.com', 'Thôn 1,Lai Đông, Hoà Khánh, Đà Nẵng', 1, 0),
(5, 'tuhuy', '123456', 'Trần Vinh', '', '0971245611', 'tuhuy123@gmail.com', 'Thôn 1,Nghệ Tinh,Dài Loan', 1, 0);

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
  `cateId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  MODIFY `cateId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `custId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `prodId` int(10) NOT NULL AUTO_INCREMENT;

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
