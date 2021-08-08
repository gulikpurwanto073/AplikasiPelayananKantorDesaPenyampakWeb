-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2021 at 06:43 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ktp`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `jenis` text NOT NULL,
  `tipe` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `jenis`, `tipe`) VALUES
(1, 'Surat Pengantar RT/RW', 'file'),
(2, 'Fotokopi KK', 'file'),
(3, 'Fotokopi Akta Kelahiran', 'file'),
(4, 'Surat Keterangan Pindah (yang diterbitkan oleh pemerintah Kabupaten/Kota dari daerah asal)', 'file'),
(5, 'Surat Keterangan Datang (dari Luar Negeri yang diterbitkan oleh Instansi Pelaksana bagi WNI yang datang dari Luar Negeri karena pindah)', 'file'),
(6, 'Pas Foto 3x4', 'gambar');

-- --------------------------------------------------------

--
-- Table structure for table `kritiksaran`
--

CREATE TABLE `kritiksaran` (
  `id_kritiksaran` int(11) NOT NULL,
  `kritiksaran` text NOT NULL,
  `username` varchar(45) NOT NULL,
  `waktu` varchar(45) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kritiksaran`
--

INSERT INTO `kritiksaran` (`id_kritiksaran`, `kritiksaran`, `username`, `waktu`) VALUES
(1, 'Tess', 'john@gmail.com', '2021-06-21 22:59:15'),
(2, 'Tersdfsdf', 'john@gmail.com', '2021-06-21 23:05:14'),
(3, 'asdasccccccccccccccccccccccccccccccccccc asdkashdia aisudhaklsjd oasidaosid oasiduaosidu oasiduao s oaisdu aosid aosi uoasi udaosiduaos daois uoa siudoais duaoisdu oaisd oasidu oais oasi daosid aosid aosid aosidu aosidaosi daos ao sdoaisudoais daoisduaoisud oasidu aosi doasidu oasidu ', 'john@gmail.com', '2021-06-21 23:05:37'),
(5, 'oke', 'purwanto99@gmail.com', '2021-07-29 15:57:03'),
(6, 'mantap, selesai ', 'gulikpp@gmail.com', '2021-08-02 20:45:17');

-- --------------------------------------------------------

--
-- Table structure for table `lampiran`
--

CREATE TABLE `lampiran` (
  `id_lampiran` int(11) NOT NULL,
  `id_pembuatan` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `file` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lampiran`
--

INSERT INTO `lampiran` (`id_lampiran`, `id_pembuatan`, `id_jenis`, `file`) VALUES
(4, 1, 2, '60cf981041eeb.png'),
(7, 1, 1, '60d0488459f43.jpg'),
(8, 2, 1, '60d056aa3d86d.jpg'),
(9, 1, 3, '60d070382b074.jpg'),
(10, 1, 4, '60d0707e3e1d7.jpg'),
(12, 1, 5, '60d0709aa1fe5.jpg'),
(13, 1, 6, '60d070a47c244.jpg'),
(14, 2, 2, '60d07a5920cf0.jpg'),
(15, 2, 3, '60d082d55b43d.jpg'),
(20, 2, 4, '60ec6074eb587.jpg'),
(21, 2, 5, '60ec608718083.jpg'),
(22, 2, 6, '60ec6094b3a6d.jpg'),
(23, 3, 1, '60eda26106ef5.jpg'),
(24, 8, 6, '60edb5d3e5ecb.jpg'),
(25, 8, 5, '60edb650cbcc4.jpg'),
(26, 9, 1, '60edba0240b5c.jpg'),
(27, 10, 2, '60edcc78a5323.jpg'),
(28, 11, 2, '60edcff3f27f8.jpg'),
(29, 12, 6, '60edee625ae17.jpg'),
(33, 13, 1, '60ee448525751.jpg'),
(34, 15, 6, '60fbcf0ba9eba.jpg'),
(35, 8, 1, '61026be056ff2.jpg'),
(36, 22, 1, '6107f3c646041.jpg'),
(37, 23, 1, '6107f6a996e86.jpg'),
(38, 23, 2, '6107f6ba1e4a0.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL,
  `foto` varchar(191) NOT NULL DEFAULT 'default.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `role`, `foto`) VALUES
('admin', 'adminbaru', 'Administrator', 'admin', '60cf92babd31b.png'),
('wijayantiwahyu27@gmail.com', '123456', 'Ayu Wijayanti', 'user', '60cf932a5450b.jpg'),
('arifsona3@gmail.com', '12345678', 'Muh Arifsona', 'user', '60ec62d0daa19.jpg'),
('john@gmail.com', '123', 'John', 'user', 'default.jpg'),
('gulikpurwanto00@gmail.com', 'gulik999', 'gulik', 'user', 'default.jpg'),
('gulikpurwanto99@gmail.com', 'gulik99', 'gulik', 'user', '60ec757736b16.jpg'),
('purwanto99@gmail.com', 'gulikxxx', 'purwanto', 'user', 'default.jpg'),
('serik99@gmail.com', 'serik99', 'serik', 'user', '60edba739345b.jpg'),
('jimi@gmail.com', 'jimixxx', 'jimi', 'user', '60edcd702d55d.jpg'),
('ebri', '12345', 'ebri', 'user', 'default.jpg'),
('febri@gmail.com', 'febrixxx', 'febri', 'user', '60edcffe2baf9.jpg'),
('afdal@gmail.com', 'afdal123', 'afdal', 'user', '60edee72bda1f.jpg'),
('gulpur@gmail.com', 'gulpur', 'gulpur', 'user', 'default.jpg'),
('gulik@gmail.com', 'gulik', 'gulik', 'user', 'default.jpg'),
('keluk@gmail.com', 'keluk', 'keluk', 'user', 'default.jpg'),
('fernandi@gmail.com', 'fernandi', 'fernandi', 'user', '60fbcf22a802b.jpg'),
('ayeb@gmail.com', 'ayeb', 'ayeb', 'user', 'default.jpg'),
('alex@gmail.com', 'alex', 'alex', 'user', 'default.jpg'),
('gh', '123', 'gh', 'user', '61044cbd7b462.jpg'),
('boy@gmail.com', 'boy', 'boy', 'user', 'default.jpg'),
('rere@gmail.com', 'rere', 'rere', 'user', 'default.jpg'),
('gulikp@gmail.com', 'gulikp', 'gulikp', 'user', 'default.jpg'),
('gulikpurwanto@gmail.com', 'gulik', 'gulikpurwanto', 'user', 'default.jpg'),
('gulikpp@gmail.com', 'gulik', 'gulikpp', 'user', '6107f5fdae345.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pembuatan`
--

CREATE TABLE `pembuatan` (
  `id_pembuatan` int(11) NOT NULL,
  `nama` varchar(191) NOT NULL,
  `tempat_lahir` varchar(191) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(191) NOT NULL,
  `alamat` text NOT NULL,
  `rtrw` varchar(191) NOT NULL,
  `keldesa` varchar(191) NOT NULL,
  `kecamatan` varchar(191) NOT NULL,
  `agama` varchar(191) NOT NULL,
  `status_pekerjaan` varchar(191) NOT NULL,
  `status_pernikahan` varchar(191) NOT NULL,
  `kewarganegaraan` varchar(191) NOT NULL,
  `berlaku_hingga` varchar(191) NOT NULL,
  `nik` varchar(191) NOT NULL,
  `username` varchar(191) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp(),
  `status_pembuatan` varchar(45) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembuatan`
--

INSERT INTO `pembuatan` (`id_pembuatan`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `rtrw`, `keldesa`, `kecamatan`, `agama`, `status_pekerjaan`, `status_pernikahan`, `kewarganegaraan`, `berlaku_hingga`, `nik`, `username`, `waktu`, `status_pembuatan`, `catatan`) VALUES
(2, 'Wahyu Wijayanti Kusuma', 'Makassar', '1996-09-27', 'perempuan', 'Jl. Rajawali Lr. 300', '003/007', 'Panambungan', 'Mariso', 'islam', 'Belum/Tidak Bekerja', 'belum menikah', 'WNI', '', '7371062709960003', 'arifsona3@gmail.com', '2021-06-20 17:26:46', 'Tahap Verifikasi', 'Menunggu Tahap Verifikasi'),
(3, 'Wuri Ahdaniyah', 'Jogjakarta', '1996-06-12', 'Perempuan', 'Jl. Yuk', '009/008', 'Piurang', 'Palau', 'Islam', 'Belum / Tidak Bekerja', 'Belum Menikah', 'WNI', '', '7452525', 'arifsona3@gmail.com', '2021-06-21 12:47:33', '', ''),
(4, 'john', 'Medan bah', '1999-06-08', 'Laki-laki', 'Jl. Medan Barat', '008/006', 'Bah', 'Wotu', 'Islam', 'Belum/Tidak Bekerja', 'Menikah', 'WNI', '', '7234234', 'john@gmail.com', '2021-06-21 13:29:54', '', ''),
(5, 'gulik', 'pangkalpinang', '1999-04-19', 'Laki-laki', 'pkp', 'rt 01', 'mentok', 'pkp', 'Islam', 'ngaret', 'Belum Menikah', 'WNI', '', '1234567', 'gulikpurwanto99@gmail.com', '2021-07-12 16:01:22', '', ''),
(6, 'gulik', 'sungailiat', '2021-07-11', 'Laki-laki', 'pkp', '1/2', 'iya', 'iiyaaaa', 'Islam', 'ga kerja', 'Menikah', 'WNI', '', '1223', 'john@gmail.com', '2021-07-13 14:45:46', '', ''),
(8, 'purwanto', 'pkp', '2012-07-13', 'Laki-laki', 'pangkal', '01', 'keramat', 'keramat', 'Islam', 'ngaret', 'Belum Menikah', 'WNA', '', '123', 'purwanto99@gmail.com', '2021-07-13 15:47:56', '', ''),
(9, 'serik', 'pangkl', '2021-07-13', 'Perempuan', 'pangkl', '02', 'pangkl', 'gerunggang', 'Islam', 'wibu', 'Belum Menikah', 'WNI', '', '123456', 'serik99@gmail.com', '2021-07-13 16:06:03', '', ''),
(10, 'jimi', 'pkp', '2021-07-14', 'Laki-laki', 'pkp', '09', 'epkp', 'pkp', 'Islam', 'aret', 'Menikah', 'WNI', '', '123', 'jimi@gmail.com', '2021-07-13 17:24:55', '', ''),
(14, 'keluk', 'pkp', '2021-07-14', 'Laki-laki', 'pkp', '05', 'pkp', 'pkp', 'Islam', 'pkp', 'Menikah', 'WNI', '', '345', 'keluk@gmail.com', '2021-07-14 02:04:11', 'Tahap Verifikasi', 'proses'),
(15, 'fernandi', 'mentok', '2021-07-24', 'Laki-laki', 'mentok', '09', 'mentok', 'mentok', 'Protestan', 'jobdesk', 'Belum Menikah', 'WNI', '', '123', 'fernandi@gmail.com', '2021-07-24 08:27:37', '', ''),
(16, 'ayeb', 'pkp', '2021-07-28', 'Laki-laki', 'pkp', '08', 'pkp', 'pkp', 'Islam', 'dsaign', 'Menikah', 'WNI', '', '12', 'ayeb@gmail.com', '2021-07-27 17:59:17', '', ''),
(17, 'alex', 'pkp', '2021-07-29', 'Laki-laki', 'pkp', '07', 'pkp', 'pkp', 'Islam', '', 'Menikah', 'WNI', '', '123', 'alex@gmail.com', '2021-07-29 08:06:20', 'Dikirim', ''),
(18, 'gh', 'pp', '1999-01-01', 'laki-laki', 'pkp', '09', 'pp', 'pp', 'protestan', 'p', 'menikah', 'wni', '', '7899', 'gh@gmail.com', '2021-07-30 19:05:31', '', ''),
(20, '', '', '0000-00-00', 'Laki-laki', '', '', '', '', 'Islam', '', 'Menikah', 'WNI', '', '', 'rere@gmail.com', '2021-08-01 15:50:05', 'Dikirim', ''),
(21, '', '', '0000-00-00', 'Laki-laki', '', '', '', '', 'Islam', '', 'Menikah', 'WNI', '', '', 'rere@gmail.com', '2021-08-01 15:51:06', '', ''),
(22, 'gulikp', 'pkp', '2021-08-02', 'Laki-laki', 'pkp', '06', 'pkp', 'pkp', 'Islam', 'pkp', 'Menikah', 'WNI', '', '2737', 'gulikp@gmail.com', '2021-08-02 13:31:29', '', ''),
(23, 'gulikpp', 'pangkal', '1999-04-19', 'Laki-laki', 'pangkal', '09', 'rangkui', 'kp.keramat', 'Islam', 'pengangguran', 'Belum Menikah', 'WNI', '', '1234', 'gulikpp@gmail.com', '2021-08-02 13:43:22', 'Dikirim', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `vlampiran`
-- (See below for the actual view)
--
CREATE TABLE `vlampiran` (
`id_lampiran` int(11)
,`id_pembuatan` int(11)
,`id_jenis` int(11)
,`jenis` text
,`file` varchar(45)
);

-- --------------------------------------------------------

--
-- Structure for view `vlampiran`
--
DROP TABLE IF EXISTS `vlampiran`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vlampiran`  AS  select `lampiran`.`id_lampiran` AS `id_lampiran`,`lampiran`.`id_pembuatan` AS `id_pembuatan`,`lampiran`.`id_jenis` AS `id_jenis`,`jenis`.`jenis` AS `jenis`,`lampiran`.`file` AS `file` from (`lampiran` join `jenis`) where `lampiran`.`id_jenis` = `jenis`.`id_jenis` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  ADD PRIMARY KEY (`id_kritiksaran`);

--
-- Indexes for table `lampiran`
--
ALTER TABLE `lampiran`
  ADD PRIMARY KEY (`id_lampiran`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pembuatan`
--
ALTER TABLE `pembuatan`
  ADD PRIMARY KEY (`id_pembuatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kritiksaran`
--
ALTER TABLE `kritiksaran`
  MODIFY `id_kritiksaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lampiran`
--
ALTER TABLE `lampiran`
  MODIFY `id_lampiran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `pembuatan`
--
ALTER TABLE `pembuatan`
  MODIFY `id_pembuatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
