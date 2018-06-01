-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2018 at 05:08 PM
-- Server version: 10.1.30-MariaDB-0ubuntu0.17.10.1
-- PHP Version: 7.1.15-0ubuntu0.17.10.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siasy_iqbal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapinhar`
--

CREATE TABLE `tb_lapinhar` (
  `id_lapinhar` int(11) NOT NULL,
  `no_tar_tanggal` varchar(150) NOT NULL,
  `no_rlik` varchar(150) NOT NULL,
  `perihal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lapinhar`
--

INSERT INTO `tb_lapinhar` (`id_lapinhar`, `no_tar_tanggal`, `no_rlik`, `perihal`) VALUES
(1, '20180601', '00000001', 'Baca koran');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lapinsus`
--

CREATE TABLE `tb_lapinsus` (
  `id_lapinsus` int(11) NOT NULL,
  `no_tar_tanggal` varchar(150) NOT NULL,
  `no_rlik` varchar(150) NOT NULL,
  `perihal` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lapinsus`
--

INSERT INTO `tb_lapinsus` (`id_lapinsus`, `no_tar_tanggal`, `no_rlik`, `perihal`) VALUES
(1, '20180901', '00000001', 'Baca majalah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_cekal`
--

CREATE TABLE `tb_surat_cekal` (
  `id_surat_cekal` varchar(150) NOT NULL,
  `asal` enum('Kejari','Kejagung','Instansi Lainnya') NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `foto` varchar(150) NOT NULL,
  `status` enum('Cekal','Diperpanjang') NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_ktp` int(16) NOT NULL,
  `no_passport` int(11) NOT NULL,
  `surat_permohonan_cekal_no_tgl` int(11) NOT NULL,
  `keputusan_kerja_kepja` varchar(200) NOT NULL,
  `tanggal_mulai_cekal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_cekal`
--

INSERT INTO `tb_surat_cekal` (`id_surat_cekal`, `asal`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `foto`, `status`, `pekerjaan`, `alamat`, `no_ktp`, `no_passport`, `surat_permohonan_cekal_no_tgl`, `keputusan_kerja_kepja`, `tanggal_mulai_cekal`) VALUES
('00005', 'Kejari', 'asd', 'Perempuan', 'asd', '2018-06-08', '.png', 'Diperpanjang', 'asdasd', 'asdasd', 12123, 1441234, 123, 'asd', '2018-06-15'),
('00006', 'Kejari', 'asdkandj', 'Laki-Laki', 'asdad', '2018-12-31', '00006.png', 'Cekal', 'asdasd', 'asdad', 123123, 124141, 20180601, 'Pidana', '2018-11-30'),
('00007', 'Kejagung', 'Firman', 'Laki-Laki', 'Rengat', '2018-06-01', '00007.jpg', 'Cekal', 'Mahasiswa', 'Jl. Merpati Sakti', 2147483647, 2147483647, 20180601, 'Pidana', '2018-06-02'),
('00008', 'Kejagung', 'Firman', 'Laki-Laki', 'Rengat', '2018-06-01', '00008.png', 'Cekal', 'Mahasiswa', 'Jl. Merpati Sakti', 2147483647, 2147483647, 20180601, 'Pidana', '2018-06-02'),
('001', 'Instansi Lainnya', 'Iqbal Mardhotillah', 'Laki-Laki', 'Rengat', '1990-08-17', 'iqbal.jpg', 'Cekal', 'Mahasiswa', 'Jl. Merpati Sakti', 2147483647, 2147483647, 20180601, 'Pidana', '2018-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_keluar`
--

CREATE TABLE `tb_surat_keluar` (
  `id_surat_keluar` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `kepada` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_keluar`
--

INSERT INTO `tb_surat_keluar` (`id_surat_keluar`, `tanggal`, `perihal`, `kepada`) VALUES
('001', '2018-06-01', 'Makan Besar', 'Bang Iqbal');

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_masuk`
--

CREATE TABLE `tb_surat_masuk` (
  `id_surat_masuk` varchar(150) NOT NULL,
  `perihal` varchar(150) NOT NULL,
  `tanggal` date NOT NULL,
  `dari` enum('Kejagung','Kejari','Instansi Lain') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_surat_masuk`
--

INSERT INTO `tb_surat_masuk` (`id_surat_masuk`, `perihal`, `tanggal`, `dari`) VALUES
('001', 'Undangan Workshop Framework Yii', '2018-06-01', 'Kejagung'),
('002', 'Undangan Workshop Framework Phalcon', '2018-06-01', 'Kejari'),
('003', 'Undangan Workshop Framework Laravel', '2018-06-01', 'Instansi Lain'),
('004', 'Undangan Workshop Framework Yii', '2018-12-31', 'Kejagung');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `nip` bigint(20) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kategori` enum('Admin','Sekretaris','Kepala Seksi') NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `authKey` varchar(50) NOT NULL,
  `accessToken` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`nip`, `password`, `kategori`, `nama`, `jenis_kelamin`, `alamat`, `email`, `hp`, `authKey`, `accessToken`, `role`) VALUES
(1145, '1145', 'Sekretaris', 'nomor dua', '', 'Jalan jalan', 'nomordua@mail.com', '0762', '', '', ''),
(12345678, '12345678', 'Admin', 'Administrator', 'Laki-Laki', 'Jl. Garuda Sakti', 'admin@mail.com', '08130000000', '', '', ''),
(11451101637, '12345678', 'Admin', 'Radinal Dwiki N', '', 'Jl. Mustamindo', 'radinal@sifbumdes.com', '08130000000', 'yosef-123456', 'y05ef12mu12y4', 'Admin'),
(11451105151, '12345678', '', 'administrator', '', 'Jl. Hr Subrantas', 'admin@mail.com', '081300000000', '', '', ''),
(199404032008012022, '12345678', 'Admin', 'pegawai sistem', '', 'Jl. Ahmad yani np 170', 'pegawaisistem@mail.com', '081208129876', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_lapinhar`
--
ALTER TABLE `tb_lapinhar`
  ADD PRIMARY KEY (`id_lapinhar`);

--
-- Indexes for table `tb_lapinsus`
--
ALTER TABLE `tb_lapinsus`
  ADD PRIMARY KEY (`id_lapinsus`);

--
-- Indexes for table `tb_surat_cekal`
--
ALTER TABLE `tb_surat_cekal`
  ADD PRIMARY KEY (`id_surat_cekal`);

--
-- Indexes for table `tb_surat_keluar`
--
ALTER TABLE `tb_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `tb_surat_masuk`
--
ALTER TABLE `tb_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `FK_UserKategori` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_lapinhar`
--
ALTER TABLE `tb_lapinhar`
  MODIFY `id_lapinhar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_lapinsus`
--
ALTER TABLE `tb_lapinsus`
  MODIFY `id_lapinsus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
