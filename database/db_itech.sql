-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Agu 2023 pada 02.50
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_itech`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aplikasi`
--

CREATE TABLE `aplikasi` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `link_aplikasi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `aplikasi`
--

INSERT INTO `aplikasi` (`id`, `tanggal`, `nama_aplikasi`, `deskripsi`, `link_aplikasi`) VALUES
(28, '01-08-2023', 's', 's', 's'),
(29, '07-08-2023', 's', 's', 's'),
(30, '16-08-2023', 'asss', 'a', 'as');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bigdata`
--

CREATE TABLE `bigdata` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `jeniskegiatan` varchar(255) NOT NULL,
  `namakegiatan` varchar(255) NOT NULL,
  `bidangpenyelenggara` varchar(255) NOT NULL,
  `jumlahpeserta` varchar(255) NOT NULL,
  `linksertifikat` varchar(255) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `berkas2` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bigdata`
--

INSERT INTO `bigdata` (`id`, `tanggal`, `jeniskegiatan`, `namakegiatan`, `bidangpenyelenggara`, `jumlahpeserta`, `linksertifikat`, `berkas`, `berkas2`) VALUES
(29, '08-08-2023', 'Sertifikasi', 'a', 'a', 'a', 'a', 'Picture1.png', 'Doa.docx'),
(31, '01-08-2023', 'Pelatihan', 'a', 'a', 'a', 'a', 'Picture1.png', 'Doa.docx'),
(32, '02-08-2023', 'Sertifikasi', 's', 's', 's', 's', 'Doa.docx', 'Picture1.png'),
(33, '07-08-2023', 'Pelatihan', 's', 's', 's', 's', 'Picture1.png', 'wawancara fix.docx'),
(35, '02-08-2023', 'Webinar', 'upacara', 'ujang', '112', 'tyasadad', 'Picture1.png', 'Doa.docx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `multimedia`
--

CREATE TABLE `multimedia` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `namakegiatan` varchar(255) NOT NULL,
  `linkvideo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `multimedia`
--

INSERT INTO `multimedia` (`id`, `tanggal`, `namakegiatan`, `linkvideo`) VALUES
(5, '', 'b', 'b');

-- --------------------------------------------------------

--
-- Struktur dari tabel `publikasi`
--

CREATE TABLE `publikasi` (
  `id` int(11) NOT NULL,
  `nama_kegiatan` varchar(255) NOT NULL,
  `judul_flyer` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `linkinter` varchar(255) NOT NULL,
  `linkekster` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `publikasi`
--

INSERT INTO `publikasi` (`id`, `nama_kegiatan`, `judul_flyer`, `tanggal`, `linkinter`, `linkekster`) VALUES
(12, 'a', 'a', '01-08-2023', 'a', 'a');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `jumlah_peserta` varchar(30) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `tgl_kegiatan` varchar(20) NOT NULL,
  `berkas` varchar(100) NOT NULL,
  `bk` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `jumlah_peserta`, `nama_kegiatan`, `tgl_kegiatan`, `berkas`, `bk`) VALUES
(85, 's', 's', '01-08-2023', 'Doa.docx', 'Doa.docx'),
(86, 'a', 'a', '24-08-2023', 'Doa.docx', 'SURAT KOMITMEN FEE-papah april 2023-revisi1.pdf'),
(87, 'dfdfd', 'dfdf', '24-08-2023', 'uzi uts.docx', 'TUGAS GAMBAR-AMOY.docx'),
(88, 'a', 'a', '01-08-2023', 'uzi uts.docx', 'uzi uts.docx'),
(89, '155', 'zzzzz', '05-08-2023', 'Laporan fix print.docx', 'Laporan fix print.docx'),
(90, '12', 'aa', '02-08-2023', 'Doa (1).docx', 'Doa (2).docx'),
(92, 'a', 'a', '23-08-2023', 'Laporan fix print.pdf', 'SURAT KOMITMEN FEE-papah april 2023-revisi1.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jeniskegiatan`
--

CREATE TABLE `tb_jeniskegiatan` (
  `id` int(11) NOT NULL,
  `jeniskegiatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_jeniskegiatan`
--

INSERT INTO `tb_jeniskegiatan` (`id`, `jeniskegiatan`) VALUES
(3, 'Webinar'),
(4, 'Pelatihan'),
(6, 'Sertifikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_perusahaan`
--

CREATE TABLE `tb_perusahaan` (
  `id` int(2) NOT NULL,
  `kepala_perusahaan` varchar(40) NOT NULL,
  `nama_perusahaan` varchar(40) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `website` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tb_perusahaan`
--

INSERT INTO `tb_perusahaan` (`id`, `kepala_perusahaan`, `nama_perusahaan`, `no_telp`, `email`, `alamat`, `website`) VALUES
(1, 'Dr. Hery Antasari, ST., M.Dev.Plg', 'BPSDM Provinsi Jawa Barat', '0811-2001-0011', 'smkn12acehsingkil@gmail.com', 'Jl. Kolonel Masturi No.KM, RW.5, Cipageran, Kec. Cimahi Utara, Kota Cimahi, Jawa Barat 40511', 'https://bpsdm.jabarprov.go.id');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`, `level`) VALUES
(3, 'administrator', '$2y$10$Osq.1wC0noe4WzCo8e2TyuBqxxBZwuXVvbqkuwNAZXvq7YVgzsrjm\n', 'Administrator', 'Admin'),
(5, 'fitria', '$2y$10$kBbT8xCXy/sHv2auUIx.COdga/ATXs7mzYPAtZIE91eh4hK1H3yF6\n', 'Fitria Fauziah Diana', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `multimedia`
--
ALTER TABLE `multimedia`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jeniskegiatan`
--
ALTER TABLE `tb_jeniskegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT untuk tabel `tb_jeniskegiatan`
--
ALTER TABLE `tb_jeniskegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_perusahaan`
--
ALTER TABLE `tb_perusahaan`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
