-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 11:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(128) NOT NULL,
  `admin_username` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`) VALUES
(1, 'Trianta Almira Ramadhani', 'admin', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cache`
--

CREATE TABLE `tb_cache` (
  `id` int(11) NOT NULL,
  `query` varchar(265) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cache`
--

INSERT INTO `tb_cache` (`id`, `query`, `doc_id`, `nilai`) VALUES
(1, 'selamat pagi', 1, 1),
(2, 'selamat pagi', 2, 0.112726),
(3, 'selamat pagi', 3, 0.112726),
(4, 'selamat pagi', 4, 0.112726),
(5, 'selamat pagi', 5, 0.326389),
(6, 'selamat malam', 1, 0.112726),
(7, 'selamat malam', 2, 0.0763879),
(8, 'selamat malam', 3, 0.0763879),
(9, 'selamat malam', 4, 1),
(10, 'saya mau sewa main frame 1,7', 0, 0),
(11, 'selamat siang', 1, 0.141422),
(12, 'selamat siang', 2, 1),
(13, 'selamat siang', 3, 0.1),
(14, 'selamat siang', 4, 0.1),
(15, 'mau meminjam main frame', 0, 0),
(16, 'pinjam main frame', 9, 0.192847),
(17, 'menyewa main frame', 9, 0.192847),
(18, 'mau meminjam scaffolding', 0, 0),
(19, 'mau sewa scaffolding', 0, 0),
(20, 'buka jam berapa?', 5, 0.365148),
(21, 'buka jam berapa?', 6, 0.264906),
(22, 'buka hari apa?', 5, 0.258198),
(23, 'buka hari apa?', 6, 0.374634),
(24, 'buka hari apa?', 7, 0.277349),
(25, 'libur hari apa?', 6, 0.146943),
(26, 'libur hari apa?', 7, 0.707106),
(27, 'mau beli scaffolding', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_comment`
--

CREATE TABLE `tb_comment` (
  `comment_id` int(11) NOT NULL,
  `comment_name` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_subject` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_comment`
--

INSERT INTO `tb_comment` (`comment_id`, `comment_name`, `comment_email`, `comment_subject`, `comment`) VALUES
(3, 'Okky Indra', 'okkyindra@gmail.com', 'Subjek', 'komentar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_customer`
--

CREATE TABLE `tb_customer` (
  `customer_id` int(5) NOT NULL,
  `customer_nik` varchar(20) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_phone` varchar(20) NOT NULL,
  `customer_company` varchar(150) NOT NULL,
  `customer_project` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_customer`
--

INSERT INTO `tb_customer` (`customer_id`, `customer_nik`, `customer_name`, `customer_address`, `customer_phone`, `customer_company`, `customer_project`) VALUES
(2, '3574034301980001', 'Regza Wibowo', 'Malang', '081330285905', 'PT. BUDI BAKTI PRIMA', 'PEMBANGUNAN PLTU KALTIM2 -  DI BONTANG LESTARI - SEKAMBIN'),
(3, '2147483647', 'Trianta Almira Ramadhani', 'Probolinggo', '2147483647', 'PT. BUDI BAKTI PRIMA', 'PEMBANGUNAN PLTU KALTIM2 -  DI BONTANG LESTARI - SEKAMBING'),
(5, '3574034301920001', 'Wella Yusmia', 'Jl. Gatot Subroto Gang 9', '085749972727', 'PT. BCA Tbk.', 'Perluasan Lahan');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail`
--

CREATE TABLE `tb_detail` (
  `detail_id` int(10) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `product_id` varchar(5) NOT NULL,
  `quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_detail`
--

INSERT INTO `tb_detail` (`detail_id`, `transaction_id`, `product_id`, `quantity`) VALUES
(1, 7, '1', 2),
(2, 8, '1', 3),
(3, 8, '3', 1),
(4, 0, '1', 5),
(5, 0, '2', 5),
(6, 0, '1', 1),
(7, 9, '1', 3),
(8, 9, '2', 3),
(9, 10, '1', 3),
(10, 10, '5', 3),
(11, 10, '13', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id` int(5) NOT NULL,
  `dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_dokumen`
--

INSERT INTO `tb_dokumen` (`id`, `dokumen`) VALUES
(1, 'Selamat Pagi'),
(2, 'Selamat Siang'),
(3, 'Selamat Sore'),
(4, 'Selamat Malam'),
(5, 'Penyewaan buka pukul 8 pagi'),
(6, 'Penyewaan buka pada hari Senin, Selasa, Rabu, Kamis, dan Sabtu'),
(7, 'hari jumat dan minggu libur'),
(9, 'harga sewa1 set main frame 1,7 selama 1 minggu 30.000 rupiah, selama 2 minggu 40.000 rupiah, selama 1 bulan 50.000 rupiah'),
(11, 'scaffolding yang tersedia diantaranya 1 set main frame 1,7 meter, 1 set main frame 1,9 meter, cat walk, tangga, jack base 60 cm, pipa support, u head jack 60 cm, roda, leader 0,9 dengan join pin, leader 0,9 tanpa join pin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_index`
--

CREATE TABLE `tb_index` (
  `id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `id_doc` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_index`
--

INSERT INTO `tb_index` (`id`, `term`, `id_doc`, `jumlah`, `bobot`) VALUES
(1, 'selamat', 1, 1, 0),
(2, 'pagi', 1, 1, 0),
(3, 'selamat', 2, 1, 0),
(4, 'siang', 2, 1, 0),
(5, 'selamat', 3, 1, 0),
(6, 'sore', 3, 1, 0),
(7, 'selamat', 4, 1, 0),
(8, 'malam', 4, 1, 0),
(9, 'penyewaan', 5, 1, 0),
(10, 'buka', 5, 1, 0),
(11, 'pukul', 5, 1, 0),
(12, '8', 5, 1, 0),
(13, 'pagi', 5, 1, 0),
(14, 'penyewaan', 6, 1, 0),
(15, 'buka', 6, 1, 0),
(16, 'hari', 6, 1, 0),
(17, 'senin', 6, 1, 0),
(18, 'selasa', 6, 1, 0),
(19, 'rabu', 6, 1, 0),
(20, 's', 6, 1, 0),
(21, 'sabtu', 6, 1, 0),
(22, 'hari', 7, 1, 0),
(23, 'jumat', 7, 1, 0),
(24, 'minggu', 7, 1, 0),
(25, 'libur', 7, 1, 0),
(26, 'harga', 9, 1, 0),
(27, 'sewa1', 9, 1, 0),
(28, 'set', 9, 1, 0),
(29, 'main', 9, 1, 0),
(30, 'frame', 9, 1, 0),
(31, '1', 9, 2, 0),
(32, '7', 9, 1, 0),
(33, 'selama', 9, 2, 0),
(34, 'minggu', 9, 1, 0),
(35, '30', 9, 1, 0),
(36, '000', 9, 1, 0),
(37, 'rupiah', 9, 1, 0),
(38, '2', 9, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(3) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_owp` int(5) NOT NULL,
  `product_twp` int(5) NOT NULL,
  `product_omp` int(5) NOT NULL,
  `product_ep` int(5) NOT NULL,
  `product_stock` int(3) NOT NULL,
  `product_weight` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `product_name`, `product_owp`, `product_twp`, `product_omp`, `product_ep`, `product_stock`, `product_weight`) VALUES
(1, 'Jack Base 60 cm', 3000, 5000, 7000, 1750, 100, 100),
(2, 'U Head Jack 60 cm', 3000, 5000, 7000, 1750, 100, 100),
(3, 'Cat Walk', 30000, 30000, 40000, 10000, 100, 0),
(4, 'Roda', 40000, 50000, 80000, 20000, 100, 0),
(5, 'Tangga', 30000, 40000, 50000, 12500, 100, 0),
(6, 'Pipa Support', 28000, 38000, 40000, 12500, 100, 0),
(7, 'Join Pin', 500, 750, 1500, 375, 300, 0),
(8, 'Cross Brace 200', 3000, 5000, 7000, 1750, 100, 0),
(9, 'Cross Brace 220', 3000, 5000, 7000, 1750, 100, 200),
(10, 'Leader 0,9 Meter', 7000, 11500, 11000, 2750, 100, 100),
(11, 'Main Frame 1,7 Meter', 11000, 13500, 15000, 3750, 100, 100),
(13, 'Main Frame 1,9 Meter', 13500, 16000, 17500, 4375, 100, 100);

-- --------------------------------------------------------

--
-- Table structure for table `tb_stem`
--

CREATE TABLE `tb_stem` (
  `id` int(11) NOT NULL,
  `term` varchar(255) NOT NULL,
  `stem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stem`
--

INSERT INTO `tb_stem` (`id`, `term`, `stem`) VALUES
(1, 'meminjam', 'pinjam'),
(2, 'menyewa', 'sewa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaction`
--

CREATE TABLE `tb_transaction` (
  `id` int(11) NOT NULL,
  `id_cust` int(5) NOT NULL,
  `fdate` date NOT NULL,
  `ldate` date NOT NULL,
  `loanstatus` varchar(20) NOT NULL,
  `paidstatus` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaction`
--

INSERT INTO `tb_transaction` (`id`, `id_cust`, `fdate`, `ldate`, `loanstatus`, `paidstatus`) VALUES
(7, 3, '2020-06-01', '2020-06-07', '0', '1'),
(8, 3, '2020-06-04', '2020-06-10', '0', '0'),
(9, 2, '2020-06-01', '2020-06-14', '0', '0'),
(10, 5, '2020-06-01', '2020-06-30', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_vektor`
--

CREATE TABLE `tb_vektor` (
  `doc_id` int(11) NOT NULL,
  `panjang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_vektor`
--

INSERT INTO `tb_vektor` (`doc_id`, `panjang`) VALUES
(1, 1.70876),
(2, 2.34209),
(3, 2.34209),
(4, 2.34209),
(5, 4.05491),
(6, 5.56108),
(7, 3.76564),
(9, 14.2339),
(11, 18.0639);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tb_cache`
--
ALTER TABLE `tb_cache`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_comment`
--
ALTER TABLE `tb_comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `tb_customer`
--
ALTER TABLE `tb_customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tb_detail`
--
ALTER TABLE `tb_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_index`
--
ALTER TABLE `tb_index`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tb_stem`
--
ALTER TABLE `tb_stem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  ADD PRIMARY KEY (`doc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_cache`
--
ALTER TABLE `tb_cache`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tb_comment`
--
ALTER TABLE `tb_comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_customer`
--
ALTER TABLE `tb_customer`
  MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_detail`
--
ALTER TABLE `tb_detail`
  MODIFY `detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_dokumen`
--
ALTER TABLE `tb_dokumen`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_index`
--
ALTER TABLE `tb_index`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_stem`
--
ALTER TABLE `tb_stem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_transaction`
--
ALTER TABLE `tb_transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_vektor`
--
ALTER TABLE `tb_vektor`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
