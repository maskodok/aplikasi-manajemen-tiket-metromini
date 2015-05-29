-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost:13123
-- Generation Time: May 29, 2015 at 06:47 PM
-- Server version: 5.6.22-log
-- PHP Version: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket_angkot`
--

CREATE TABLE `tiket_angkot` (
`id_angkot` int(11) NOT NULL,
  `kode_angkot` varchar(50) NOT NULL,
  `tujuan` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket_angkot`
--

INSERT INTO `tiket_angkot` (`id_angkot`, `kode_angkot`, `tujuan`) VALUES
(1, '001', 'Senen - RS Islam Cempaka Putih - Taman Solo'),
(2, '003', 'Senen - Cempaka Putih - Rawamangun'),
(3, '005', 'Senen - Johar Baru - Mardani'),
(4, '007', 'Senen - Cempaka Mas - Semper'),
(5, '010', 'Senen - Kemayoran - Sunter'),
(6, '011', 'Senen - Kemayoran - Bendungan Jago'),
(7, '015', 'Senen - Sabang - Setiabudi'),
(8, '017', 'Senen - Cikini - Manggarai'),
(9, '047', 'Senen - Cempaka Putih - Pondok Kopi'),
(10, '023', 'Tanjung Priok - Cilincing'),
(11, '024', 'Tanjung Priok - Sunter - Senen'),
(12, '029', 'Kota - Pademangan - Sunter'),
(13, '030', 'Kota - Pluit - Muara Angke'),
(14, '041', 'Pulo Gadung - Tugu - Tanjung Priok'),
(15, '042', 'Pulo Gadung - Penggilingan - Perumnas Klender'),
(16, '043', 'Pulo Gadung - Pondok Ungu - Seroja'),
(17, '044', 'Pulo Gadung - Penggilingan - Pulo Gebang'),
(18, '045', 'Pulo Gadung - Jatiwaringin - Pondok Gede'),
(19, '046', 'Pulo Gadung - Utan Kayu - Kampung Melayu'),
(20, '049', 'Pulo Gadung - Rawamangun Muka - Utan Kayu - Pramuka - Tambak - Manggarai'),
(21, '050', 'Kampung Melayu - Duren Sawit - Perumnas Klender'),
(22, '052', 'Kampung Melayu - Buaran - Stasiun Cakung'),
(23, '053', 'Kampung Melayu - Otista - Dewi Sartika - Condet - Kampung Rambutan'),
(24, '054', 'Kampung Melayu - Kalimalang - Pondok Kelapa'),
(25, '506', 'Kampung Melayu - Klender - Pondok Kopi'),
(26, '783', 'Kampung Melayu - Kalimalang - Cibubur - Cileungsi'),
(27, '060', 'Manggarai - Tebet - Kampung Melayu'),
(28, '061', 'Manggarai - Bukit Duri - Kampung Melayu'),
(29, '062', 'Manggarai - Pancoran - Pasar Minggu'),
(30, '069', 'Blok M - Kyai Maja - Kreo - Ciledug'),
(31, '070', 'Blok M - Pos Pengumben - Joglo'),
(32, '071', 'Blok M - Tanah Kusir - Kodam Bintaro'),
(33, '072', 'Blok M - Pasar Mayestik - Radio Dalam - Pondok Indah – Lebak Bulus'),
(34, '074', 'Blok M - Tanah Kusir - Rempoa'),
(35, '075', 'Blok M - Tendean - Warung Buncit - Mampang - Pejaten Barat - Pasar Minggu'),
(36, '076', 'Blok M - Cilandak - Tol TB. Simatupang - Kampung Rambutan'),
(37, '077', 'Blok M - Bangka - Mampang - Ragunan Depan'),
(38, '078', 'Blok M - Mayestik - Kebayoran Lama - Cidodol'),
(39, '079', 'Blok M - Fatmawati - Lebak Bulus'),
(40, '610', 'Blok M - Cipete - RS Fatmawati - Pondok Labu'),
(41, '611', 'Blok M - Pondok Pinang - Pasar Jumat - Lebak Bulus'),
(42, '619', 'Blok M - Pangeran Antasari - TB Simatupang - RS Fatmawati - Pondok Labu - Cinere'),
(43, '733', 'Blok M- Bintara - Kranji'),
(44, '811', 'Blok M - Lebak Bulus - Rempoa - Bintaro'),
(45, '082', 'Kalideres - Kamal - Kapuk - Grogol'),
(46, '084', 'Kalideres - Pluit - Kota'),
(47, '085', 'Kalideres - Permata Hijau - Lebak Bulus'),
(48, '058', 'Cililitan - Pondok Bambu - Perumnas Klender'),
(49, '064', 'Pasar Minggu - Kalibata - Cililitan'),
(50, '091', 'Batusari - Tanjung Duren - Citraland - Grogol - Roxy Mas - Tanah Abang'),
(51, '092', 'Joglo - Kedoya - Jalan Panjang - Daan Mogot - Grogol'),
(52, '640', 'Pasar Minggu - Pancoran - Gatot Subroto - Thamrin - Tosari - Tanah Abang'),
(53, '719', 'Lebak Bulus - Pondok Gede - Jatiasih'),
(54, '789', 'Perumnas Klender - Pulo Gadung - Harapan Indah'),
(57, '792', 'Perumnas Klender - Pondok Kelapa - Bekasi');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_order`
--

CREATE TABLE `tiket_order` (
`id_order` int(11) NOT NULL,
  `id_angkot` int(11) NOT NULL,
  `tarif` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `jumlah_beli` int(50) NOT NULL,
  `total` int(50) NOT NULL,
  `tanggal` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket_order`
--

INSERT INTO `tiket_order` (`id_order`, `id_angkot`, `tarif`, `nama`, `alamat`, `jenis_kelamin`, `jumlah_beli`, `total`, `tanggal`) VALUES
(14, 11, '3500', 'Riani Pradani', 'Depok, Pekapuran', 'Wanita', 2, 7000, '29 May 2015 - 07:24:45 AM'),
(15, 10, '3500', 'Riani Pradani', 'Majalengka', 'Pria', 3, 10500, '29 May 2015 - 07:24:58 AM'),
(16, 42, '3500', 'Faisal Karim', 'Depok, Cinere', 'Pria', 1, 3500, '29 May 2015 - 07:26:02 AM'),
(17, 35, '3500', 'Toto Sudrajat', 'Samali', 'Pria', 2, 7000, '29 May 2015 - 07:25:29 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_setting`
--

CREATE TABLE `tiket_setting` (
  `id_setting` int(11) NOT NULL,
  `setting_tarif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket_setting`
--

INSERT INTO `tiket_setting` (`id_setting`, `setting_tarif`) VALUES
(1, '3500');

-- --------------------------------------------------------

--
-- Table structure for table `tiket_user`
--

CREATE TABLE `tiket_user` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket_user`
--

INSERT INTO `tiket_user` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator'),
(4, 'virgi', 'ed9202b9c05cb6f36173a82774e28533', 'Virgiawan Listanto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_angkot`
--
ALTER TABLE `tiket_angkot`
 ADD PRIMARY KEY (`id_angkot`);

--
-- Indexes for table `tiket_order`
--
ALTER TABLE `tiket_order`
 ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tiket_setting`
--
ALTER TABLE `tiket_setting`
 ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `tiket_user`
--
ALTER TABLE `tiket_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket_angkot`
--
ALTER TABLE `tiket_angkot`
MODIFY `id_angkot` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tiket_order`
--
ALTER TABLE `tiket_order`
MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tiket_user`
--
ALTER TABLE `tiket_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;