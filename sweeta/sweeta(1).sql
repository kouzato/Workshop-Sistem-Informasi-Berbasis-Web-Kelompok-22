-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 04:18 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweeta`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', '123', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kd_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `foto` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `foto_besar` varchar(20) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `harga_barang` int(11) NOT NULL,
  `deskripsi_barang` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `jumlah_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kd_barang`, `foto`, `foto_besar`, `nama_barang`, `harga_barang`, `deskripsi_barang`, `jumlah_barang`) VALUES
('D001', 'gendawa.JPG', 'gendawa_L.JPG', 'Kostum Tari Gendewo', 70000, 'Kostum Tari Gendewo', 10),
('D002', 'angsa.JPG', 'angsa_L.JPG', 'Kostum Tari Angsa', 60000, 'Tari Angsa merupakan tari yang berasal dari Jawa Tengah, dimana tarian ini sendiri merupakan tarian yang menggambarkan keagungan dari seorang dewi yang diiringi oleh sekelompok burung angsa sendiri. Tarian ini juga adalah tarian antara perpaduan kebudayaan orang timur maupun barat yang ada di Indonesia sendiri.', 30),
('D003', 'Saman.JPG', 'Saman_L.JPG', 'Kostum Tari Saman', 50000, 'Kostum Tari Saman', 25),
('D004', 'SukarSumekar.JPG', 'SukarSumekar_L.JPG', 'Kostum Tari Sekar Sumekar', 50000, 'Kostum Tari Sekar Sumekar', 30),
('D005', 'Bandung.JPG', 'Bandung_L.JPG', 'Kostum Tari Terbang Bandung', 60000, 'Kostum Tari Terbang Bandung', 10),
('D006', 'NyambiPelteng.JPG', 'NyambiPelteng_L.JPG', 'Kostum Tari Nyambi Pelteng', 50000, 'Kostum Tari Nyambi Pelteng', 10),
('D007', 'Kasomber.JPG', 'Kasomber_L.JPG', 'Kostum Tari Kasomber', 50000, 'Kostum Tari Kasomber', 10),
('D008', 'bajul.JPG', 'bajul_L.JPG', 'Kostum Tari Bajul Ijo', 50000, 'Kostum Tari Bajul Ijo', 40),
('D009', 'kelinci.JPG', 'kelinci_L.jpg', 'Kostum Tari Kelinci ', 50000, 'Kostum Tari Kelinci ', 10),
('D010', 'Merak.JPG', 'Merak_L.JPG', 'Kostum Tari Merak', 50000, 'Kostum Tari Merak', 10),
('D011', 'bali.JPG', 'bali_L.JPG', 'Kostum Tari Bali', 60000, 'Kostum Tari Bali', 12),
('D012', 'Gambyong.JPG', 'Gambyong_L.JPG', 'Kostum Tari Gambyong', 70000, 'Kostum Tari Gambyong', 6),
('D013', 'Labako.JPG', 'Labako_L.JPG', 'Kostum Tari Labako', 50000, 'Kostum Tari Labako', 15),
('D014', 'SamperSarong.JPG', 'SamperSarong_L.JPG', 'Kostum Tari Samper Sarong', 60000, 'Kostum Tari Samper Sarong', 20),
('D015', 'PoernamaManis.JPG', 'PoernamaManis_L.JPG', 'Kostum Tari Pornama Manis', 50000, 'Kostum Tari Pornama Manis', 10);

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `kd_checkout` varchar(15) NOT NULL,
  `id_customer` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `jumlah_pesanan` int(10) NOT NULL,
  `total_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`kd_checkout`, `id_customer`, `tanggal`, `jumlah_pesanan`, `total_harga`) VALUES
('CO001', 'CUS001', '2020-12-29', 2, 100000),
('CO002', 'CUS002', '2020-12-30', 2, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` varchar(15) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `provinsi` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `kota/kabupaten` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `kecamatan/kelurahan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `kode_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `no_ktp`, `nama`, `email`, `no_telp`, `alamat`, `provinsi`, `kota/kabupaten`, `kecamatan/kelurahan`, `kode_pos`) VALUES
('CUS001', '321321', 'dwadwaw', 'dawdw@gmail.com', '312312312', 'dwadwa', 'dwadaw', 'swadqw', 'dwada', 12312),
('CUS002', '0312312', 'dwada', 'dawd@gmail.com', '32131', 'dwadsa', 'dwadsa', 'dwadsa', 'dwadsa', 12312);

-- --------------------------------------------------------

--
-- Table structure for table `detail_checkout`
--

CREATE TABLE `detail_checkout` (
  `kd_detail` int(20) NOT NULL,
  `kd_checkout` varchar(15) CHARACTER SET latin1 NOT NULL,
  `kd_barang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_checkout`
--

INSERT INTO `detail_checkout` (`kd_detail`, `kd_checkout`, `kd_barang`, `jumlah`) VALUES
(124, 'CO001', 'D008', 1),
(125, 'CO001', 'D008', 1),
(126, 'CO001', 'D007', 1),
(127, 'CO001', 'D007', 1),
(128, 'CO002', 'D008', 1),
(129, 'CO002', 'D008', 1),
(130, 'CO002', 'D001', 1),
(131, 'CO002', 'D001', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`kd_checkout`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `detail_checkout`
--
ALTER TABLE `detail_checkout`
  ADD PRIMARY KEY (`kd_detail`),
  ADD KEY `kd_checkout` (`kd_checkout`),
  ADD KEY `kd_barang` (`kd_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_checkout`
--
ALTER TABLE `detail_checkout`
  MODIFY `kd_detail` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_checkout`
--
ALTER TABLE `detail_checkout`
  ADD CONSTRAINT `detail_checkout_ibfk_2` FOREIGN KEY (`kd_barang`) REFERENCES `barang` (`kd_barang`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `detail_checkout_ibfk_3` FOREIGN KEY (`kd_checkout`) REFERENCES `checkout` (`kd_checkout`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
