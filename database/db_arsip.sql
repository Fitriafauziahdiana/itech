-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 06:04 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `jumlah_peserta` varchar(30) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `tgl_kegiatan` varchar(20) NOT NULL,
  `no_un` varchar(30) NOT NULL,
  `no_services` varchar(30) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `skhun` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `jumlah_peserta`, `nama_kegiatan`, `tgl_kegiatan`, `no_un`, `no_services`, `tahun_lulus`, `berkas`, `skhun`) VALUES
(1, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(2, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(3, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(4, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(5, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(6, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(7, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(8, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(9, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(10, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(11, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(12, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(13, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(14, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(15, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(16, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(17, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(18, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(19, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(20, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(21, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(22, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(23, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(24, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(25, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(26, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(27, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(28, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(29, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(30, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(31, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(32, 'Puguh Sulistyo Pambudi', 'Batang Astrak', '22-07-2018', '015-001-2010', 'DN-3421600', '2013', 'File_demo.docx', 'File_demo.pdf'),
(33, 'ADHITA PUTRI AYUNANTHA', 'SITUBONDO', '07-02-2000', '2-144-565-4646-4545', 'SMK-154-1545', '2022', 'File_demo.pdf', 'File_demo.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `guru` varchar(40) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `jurusan`, `kelas`, `kode`, `semester`, `tahun_ajaran`, `guru`, `berkas`) VALUES
(2, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(3, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(4, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(5, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(6, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(7, 'TKJ', 'Kelas 1', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(8, 'TKJ', 'Kelas 2', 'A', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(9, 'TKJ', 'Kelas 1', 'B', '2 (Dua)', '2018/2019', 'Puguh Sulistyo Pambudi', 'File_demo.pdf'),
(12, 'ATPH', 'Kelas 10', '-', '1 (Satu)', '2022-2023', 'SULE', 'File_demo.docx');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `kode_mapel` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `semester` varchar(20) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  `kurikulum` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`id`, `mapel`, `kode_mapel`, `kelas`, `kode`, `jurusan`, `semester`, `guru`, `tahun_ajaran`, `kurikulum`, `jenis`, `berkas`) VALUES
(1, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(2, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(3, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(4, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(5, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(6, 'Bahasa Inggris', 'B.ING', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(7, 'Bahasa Indonesia', 'B.IND', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(8, 'Matematika', 'MTK', 'Kelas 2', 'A', 'RPL', '2 (Dua)', 'Puguh Sulistyo Pambudi', '2018/2019', 'K13', 'UTS', 'File_demo.docx'),
(9, 'Matematika', 'MTK', 'Kelas 10', '-', 'ATPH', '1 (Satu)', 'AZIZ', '2022-2023', '2013 Rev', 'Try Out', 'File_demo.docx');

-- --------------------------------------------------------

--
-- Table structure for table `bigdata`
--

CREATE TABLE `bigdata` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `namakegiatan` varchar(255) NOT NULL,
  `bidangpenyelenggara` varchar(255) NOT NULL,
  `jumlahpeserta` varchar(255) NOT NULL,
  `linksertifikat` text NOT NULL,
  `berkas1` varchar(100) NOT NULL,
  `berkas2` varchar(100) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bigdata`
--

INSERT INTO `bigdata` (`id`, `tanggal`, `namakegiatan`, `bidangpenyelenggara`, `jumlahpeserta`, `linksertifikat`,  `berkas1`, `berkas`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Table structure for table `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_aplikasi` varchar(255) NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `tanggal`, `nama_aplikasi`, `deskripsi`, `	link_aplikasi`) VALUES
(2, '22-07-2018', '421.5/A/201/2018', 'DDS', 'Undangan', 'Diterima TU', 'Surat Sudah Diterima TU', 'File_demo.pdf');

-- --------------------------------------------------------
-- --------------------------------------------------------

--
-- Table structure for table `tb_jurusan`
--

CREATE TABLE `tb_jurusan` (
  `id` int(5) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `jurusan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jurusan`
--

INSERT INTO `tb_jurusan` (`id`, `kode`, `jurusan`) VALUES
(2, 'RPL', 'Rekayasa Perangkat Lunak'),
(3, 'BDP', 'Budidaya Perikanan'),
(4, 'TKJ', 'Teknik Komputer Jaringan'),
(5, 'ATPH', 'Agribisnis Tanaman Pangan dan Hortikultura');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelajaran`
--

CREATE TABLE `tb_pelajaran` (
  `id` int(11) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelajaran`
--

INSERT INTO `tb_pelajaran` (`id`, `kode`, `mapel`) VALUES
(2, 'MTK', 'Matematika'),
(3, 'B.ING', 'Bahasa Inggris'),
(4, 'SBD', 'Seni Budaya'),
(5, 'PABD', 'Pendidikan Agama dan Budi Pekerti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id` int(2) NOT NULL,
  `kepala_sekolah` varchar(40) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_sekolah` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id`, `kepala_sekolah`, `nip`, `nama_sekolah`, `no_telp`, `email`, `alamat`, `website`) VALUES
(1, 'HARYANTO,S.Pd', '-', 'SMK NU 03 BONDOWOSO', '082XXXXXXXXX', 'smkn12acehsingkil@gmail.com', 'Jl. Niaga Rt.09/02 Desa Nogosari Kec.Sukosari Kab.Bondowoso', 'https://smknu3bws.sch.id');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `level`) VALUES
(3, 'administrator', '$2y$10$Osq.1wC0noe4WzCo8e2TyuBqxxBZwuXVvbqkuwNAZXvq7YVgzsrjm\n', 'Administrator', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bigdata`
--
ALTER TABLE `bigdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jeniskegiatan`
--
ALTER TABLE `tb_jeniskegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bigdata`
--
ALTER TABLE `bigdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_jeniskegiatan`
--
ALTER TABLE `tb_jeniskegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_jurusan`
--
ALTER TABLE `tb_jurusan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_pelajaran`
--
ALTER TABLE `tb_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

