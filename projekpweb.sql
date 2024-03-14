-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2023 at 09:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` int(20) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `stok` int(5) NOT NULL,
  `created` date NOT NULL,
  `nama_image` varchar(50) NOT NULL,
  `type_image` varchar(50) NOT NULL,
  `size_image` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `judul`, `harga`, `pengarang`, `penerbit`, `stok`, `created`, `nama_image`, `type_image`, `size_image`) VALUES
(18, '7 in 1 Pemrograman Web untuk Pemula', 79000, 'Rohi Abdulloh', 'Elex Media Komputind', 100, '2023-06-09', '1.jpg', 'image/jpeg', 59765),
(19, 'Pemrograman Web dengan Menggunakan PHP dan Framework Codeigniter', 116000, 'Supono dan Vidiandry Putratama', 'Politeknik Pos Indon', 99, '2023-06-09', '2.jpg', 'image/jpeg', 57714),
(20, 'Pemrograman Python Dalam Contoh dan Penerapan', 85000, 'Prof. Dr. Moechammad Sarosa, D', 'MNC Publishing', 200, '2023-06-09', '3.jpg', 'image/jpeg', 63430),
(21, 'HTML 5 (Dasar- dasar pengembangan aplikasi berbasis web)', 72000, 'Betha Sidiq', 'Penerbit Informatika', 140, '2023-06-09', '4.jpg', 'image/jpeg', 68601),
(22, 'Si Juki - Lika-Liku Anak Kos (Full Color)', 65000, 'Faza Meonk', 'Elex Media Komputind', 50, '2023-06-09', '5.jpg', 'image/jpeg', 146370),
(23, 'Detektif Conan: Kaito Kid MIraculous Midair Walk', 88200, 'Aoyama Gosho', 'Elex Media Komputind', 50, '2023-06-09', '6.jpg', 'image/jpeg', 91178),
(24, 'Doraemon : Nobita Dalam Dunia Misteri', 50000, 'Fujiko F. Fujio', 'Elex Media Komputind', 50, '2023-06-09', '7.jpg', 'image/jpeg', 122639),
(25, 'Doraemon : Nobita Dalam Dunia Misteri Part II', 51000, 'Fujiko F. Fujio', 'Elex Media Komputind', 20, '2023-06-09', '8.jpg', 'image/jpeg', 124487),
(26, 'Cara Ampuh Menjadi Pribadi yang Diterima & Disukai', 58000, 'Restia Ningrum', 'Anak Hebat Indonesia', 10000, '2023-06-09', '9.jpg', 'image/jpeg', 78574),
(27, 'Cakap Berbicara: Ubah Gaya Bicaramu Layaknya Seorang Intelek', 59000, 'Wendy Adelia', 'Komunika', 100, '2023-06-09', '10.jpg', 'image/jpeg', 113666),
(28, 'Menu Terfavorit dan Hit dari instagram Cooking With Sheila - Full Colour', 191000, 'Sheila Gondowijoyo', 'Andi Publisher', 100, '2023-06-09', '11.jpg', 'image/jpeg', 154411),
(29, 'Memahami Konsep Dasar Matematika untuk PGSD', 91200, 'Dr. Isrok’atun, M.Pd.', 'Bumi Aksara', 50, '2023-06-09', '12.jpg', 'image/jpeg', 53053),
(30, 'Pendidikan Karakter Anak Sesuai Pembelajaran Abad ke-21', 45000, 'Dr. Otib Satibi Hidayat, M.Pd', 'Edura-UNJ', 30, '2023-06-09', '13.jpg', 'image/jpeg', 66068),
(31, 'Konsep Dasar Bimbingan Kelompok', 42400, 'Dra. Hj. Sitti Hartinah DS., M', 'Refika Aditama', 100, '2023-06-09', '14.jpg', 'image/jpeg', 89287),
(32, 'Kata', 99000, 'Rintik Sedu', 'Gagas Media', 150, '2023-06-09', '15.jpg', 'image/jpeg', 97716),
(33, 'Laut Bercerita', 86250, 'Leila S. Chudori', 'Kepustakaan Populer ', 200, '2023-06-09', '16.jpg', 'image/jpeg', 99488),
(34, 'Hujan', 89000, 'Tere Liye', 'Sabak Grip', 30, '2023-06-09', '17.jpg', 'image/jpeg', 75319),
(35, 'Gerbang Dialog Danur', 68000, 'Risa Saraswati', 'Bukune', 60, '2023-06-09', '18.jpg', 'image/jpeg', 122202),
(36, 'One Piece Vol. 99', 33750, 'Eiichiro Oda', 'Elex Media Komputind', 20, '2023-06-09', '19.jpeg', 'image/jpeg', 492035),
(37, 'Kami (Bukan) Sarjana Kertas', 99000, 'J.S Khairen', 'Bukune', 50, '2023-06-09', '20.jpeg', 'image/jpeg', 53730);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_buku` int(100) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `qty` int(50) NOT NULL,
  `kurir` varchar(15) NOT NULL,
  `date_in` date NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pesanan`
--

CREATE TABLE `tbl_pesanan` (
  `id_pesanan` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_buku` int(100) NOT NULL,
  `pengarang` varchar(30) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `qty` int(50) NOT NULL,
  `kurir` varchar(15) NOT NULL,
  `date_in` date NOT NULL,
  `total` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_user` int(100) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(6) NOT NULL,
  `password` varchar(6) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_hp` text NOT NULL,
  `title` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_user`, `nama_lengkap`, `email`, `username`, `password`, `alamat`, `no_hp`, `title`) VALUES
(1, 'Gian Akhiru Ramadhan', 'gian@gmail.com', 'gian', 'gian', 'Jl Padang', '081364023088', 'admin'),
(2, 'Fakhri', 'fakhri@gmail.com', 'fakhri', 'fakhri', 'Jl Padang', '08130427432', 'admin'),
(3, 'Thufail Erlangga', 'erlangga@gmail.com', 'angga', 'angga', 'Jl. tempua 1', '088008800880', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_pesanan`
--
ALTER TABLE `tbl_pesanan`
  MODIFY `id_pesanan` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
