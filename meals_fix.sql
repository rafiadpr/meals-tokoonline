-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2022 at 08:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meals`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_produk`, `qty`, `subtotal`) VALUES
(22, 19, 1, 1, 0),
(23, 20, 1, 1, 0),
(24, 21, 4, 1, 0),
(25, 22, 1, 4, 0),
(26, 23, 4, 4, 0),
(27, 24, 1, 7, 0),
(28, 25, 1, 5, 0),
(35, 26, 1, 1, 0),
(36, 26, 4, 1, 0),
(37, 27, 1, 1, 0),
(38, 27, 4, 1, 0),
(39, 28, 1, 1, 0),
(40, 29, 1, 1, 0),
(41, 30, 1, 1, 0),
(42, 31, 1, 1, 0),
(44, 32, 4, 1, 0),
(48, 33, 4, 1, 0),
(49, 34, 1, 1, 0),
(50, 35, 4, 1, 0),
(51, 36, 1, 1, 0),
(52, 37, 1, 1, 0),
(53, 37, 4, 1, 0),
(54, 38, 4, 1, 0),
(55, 39, 1, 1, 0),
(56, 40, 1, 1, 0),
(57, 41, 1, 1, 0),
(58, 42, 5, 1, 0),
(59, 42, 1, 4, 0),
(60, 42, 6, 2, 0),
(61, 43, 4, 1, 0),
(62, 44, 4, 1, 0),
(63, 45, 4, 1, 0),
(64, 46, 4, 1, 0),
(65, 47, 4, 1, 0),
(66, 47, 5, 2, 0),
(67, 48, 4, 1, 0),
(68, 49, 1, 1, 0),
(69, 50, 5, 1, 0),
(70, 51, 6, 1, 0),
(71, 52, 1, 1, 0),
(72, 52, 6, 3, 0),
(73, 53, 4, 1, 0),
(74, 53, 1, 2, 0),
(75, 54, 1, 2, 0),
(76, 55, 5, 2, 34000),
(77, 56, 4, 5, 65000),
(78, 57, 5, 1, 17000),
(79, 58, 6, 2, 20000),
(80, 59, 4, 1, 13000),
(81, 60, 1, 1, 15000),
(82, 60, 5, 3, 51000),
(83, 61, 4, 2, 26000),
(84, 62, 4, 1, 13000),
(85, 62, 5, 3, 51000),
(86, 63, 1, 1, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_produk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto_produk`) VALUES
(1, 'Sandwich', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae.', 15000, 'makanan 1.png'),
(4, 'Kebab', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae.', 13000, 'makanan 2.png'),
(5, 'Lasagna', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae.', 17000, 'makanan 3.png'),
(6, 'Dumpling', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum recusandae.', 10000, 'makanan 4.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id`, `tgl_transaksi`, `status`) VALUES
(19, 1, '2022-10-04', 'Diterima'),
(20, 1, '2022-10-04', 'Diterima'),
(21, 1, '2022-10-04', 'Diterima'),
(22, 1, '2022-10-05', 'Diterima'),
(23, 1, '2022-10-05', 'Diterima'),
(24, 1, '2022-10-05', 'Diterima'),
(25, 1, '2022-10-05', 'Diterima'),
(26, 1, '2022-10-06', 'Diterima'),
(27, 1, '2022-10-06', 'Diterima'),
(28, 1, '2022-10-10', 'Diterima'),
(29, 1, '2022-10-10', 'Diterima'),
(30, 1, '2022-10-10', 'Diterima'),
(31, 1, '2022-10-10', 'Diterima'),
(32, 1, '2022-10-11', 'Diterima'),
(33, 1, '2022-10-11', 'Diterima'),
(34, 1, '2022-10-11', 'Diterima'),
(35, 1, '2022-10-11', 'Diterima'),
(36, 1, '2022-10-11', 'Diterima'),
(37, 1, '2022-10-11', 'Barang Sudah di Terima'),
(38, 1, '2022-10-11', 'Barang Sudah di Confirm'),
(39, 1, '2022-10-14', 'Barang Sudah di Confirm'),
(40, 7, '2022-10-15', 'Confirm Barang Sudah diterima Pelanggan'),
(41, 1, '2022-10-16', 'Diterima'),
(42, 1, '2022-10-17', 'Diterima'),
(43, 7, '2022-10-18', 'Barang Sudah diterima Pelanggan'),
(44, 1, '2022-10-18', 'Barang Diconfirm oleh Petugas'),
(45, 10, '2022-10-19', 'Menunggu Barang di Confirm'),
(46, 10, '2022-10-19', 'Menunggu Barang di Confirm'),
(47, 4, '2022-10-19', 'Diterima'),
(48, 4, '2022-10-19', 'Diterima'),
(49, 10, '2022-10-19', 'Diterima'),
(50, 4, '2022-10-19', 'Diterima'),
(51, 4, '2022-10-19', 'Menunggu Barang di Confirm'),
(52, 4, '2022-10-20', 'Menunggu Barang di Confirm'),
(53, 4, '2022-10-20', 'Menunggu Barang di Confirm'),
(54, 6, '2022-10-20', 'Menunggu Barang di Confirm'),
(55, 6, '2022-10-20', 'Barang Sudah diterima Pelanggan'),
(56, 6, '2022-10-20', 'Diterima'),
(57, 6, '2022-10-20', 'Diterima'),
(58, 6, '2022-10-20', 'Diterima'),
(59, 6, '2022-10-20', 'Diterima'),
(60, 6, '2022-10-20', 'Menunggu Barang di Confirm'),
(61, 7, '2022-10-20', 'Menunggu Barang di Confirm'),
(62, 11, '2022-10-20', 'Diterima'),
(63, 11, '2022-10-20', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','petugas','pelanggan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `telp`, `username`, `password`, `role`) VALUES
(1, 'admin', 'Sawojajar', '081328878542', 'admin', '202cb962ac59075b964b07152d234b70', 'admin'),
(2, 'petugas', 'Sulfat', '081328878542', 'petugas', '202cb962ac59075b964b07152d234b70', 'petugas'),
(3, 'pelanggan', 'pakis', '081328878542', 'pelanggan', 'ab07c5477bd1f1a194a3677de8b5b638', 'pelanggan'),
(4, 'Prayoga', 'Kediri', '081333717212', 'adi', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(5, 'Orin', 'Blitar', '081234567890', 'orin', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(6, 'Jelita Amelia', 'Pasuruan', '081234567890', 'jelita', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(7, 'Bunga Cinta', 'Panjen', '081234567890', 'bunga', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(10, 'andre', 'Sawojajar', '081328878542', 'andre', '202cb962ac59075b964b07152d234b70', 'pelanggan'),
(11, 'Nabil Sahsada', 'Bunul', '081234567890', 'nabil', '202cb962ac59075b964b07152d234b70', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `qty` (`qty`),
  ADD KEY `subtotal` (`subtotal`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`),
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
