-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2023 pada 09.27
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
(1, '01-08-2023', 'zoom', 'rapat', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=db_itech&table=aplikasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `arsip`
--

CREATE TABLE `arsip` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `arsip`
--

INSERT INTO `arsip` (`id`, `tanggal`, `filename`, `description`) VALUES
(14, '31-08-2023', 'Wawancara_untuk_laporan.docx', 'a'),
(15, '14-09-2023', 'Doa18.docx', 'a');

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
  `berkas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `bigdata`
--

INSERT INTO `bigdata` (`id`, `tanggal`, `jeniskegiatan`, `namakegiatan`, `bidangpenyelenggara`, `jumlahpeserta`, `linksertifikat`, `berkas`) VALUES
(4, '01-08-2023', 'Sertifikasi', 's', 's', 'a', 'a', 'blog-1.jpg'),
(5, '15-08-2023', 'Sertifikasi', 'a', 'a', 'a', 'a', 'Picture1.png'),
(6, '31-08-2023', 'Pelatihan', 'lama', 'uajng', '12121', 'asdsadasdas', 'fet3.png'),
(7, '05-08-2023', 'Pelatihan', 'as', 'as', 'as', 'as', 'about-img.jpeg'),
(9, '06-09-2023', 'Sertifikasi', 'ada', 'ada', '23', 'file:///C:/Users/ACER/Downloads/Jadwal_Perkuliahan_Ganjil_TIF_2023-2024_(1).pdf', 'Jadwal Perkuliahan Ganjil TIF 2023-2024 (1).pdf'),
(10, '13-09-2023', 'Pelatihan', 'a', 'afa', '45', 'file:///C:/Users/ACER/Downloads/Jadwal_Perkuliahan_Ganjil_TIF_2023-2024_(1).pdf', 'Picture1.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `files`
--

INSERT INTO `files` (`id`, `filename`, `description`) VALUES
(1, 'TUGAS_GAMBAR-AMOY.docx', 'a'),
(2, 'Doa.docx', 's'),
(3, 'Pengujian_Alpha.pdf', 'S'),
(4, 'Jadwal_Perkuliahan_Ganjil_TIF_2023-2024_(1).pdf', 'ada');

-- --------------------------------------------------------

--
-- Struktur dari tabel `filess`
--

CREATE TABLE `filess` (
  `id` int(11) NOT NULL,
  `filename` varchar(150) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `filess`
--

INSERT INTO `filess` (`id`, `filename`, `description`) VALUES
(1, 'Doa.docx', 'S'),
(2, 'uzi_uts.docx', 'a'),
(3, 'Doa1.docx', 'S'),
(4, 'bpsdm.docx', 'sukukuku'),
(5, 'bpsdm1.docx', 'asasasas'),
(6, 'uzi_uts1.docx', 'dddffff'),
(7, 'LOI_LM.pdf', 'asa');

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
(1, '02-08-2023', 'a', 'a');

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
(1, 'a', 'a', '01-08-2023', 'a', 'a'),
(2, 'af', 'a', '08-08-2023', 'a', 'a'),
(3, 'a', 'a', '12-09-2023', 'a', 'a'),
(4, 'ad', 'ad', '04-09-2023', 'file:///C:/Users/ACER/Downloads/Jadwal_Perkuliahan_Ganjil_TIF_2023-2024_(1).pdf', 'file:///C:/Users/ACER/Downloads/Jadwal_Perkuliahan_Ganjil_TIF_2023-2024_(1).pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `jumlah_peserta` varchar(30) NOT NULL,
  `nama_kegiatan` varchar(30) NOT NULL,
  `tgl_kegiatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `jumlah_peserta`, `nama_kegiatan`, `tgl_kegiatan`) VALUES
(102, 'a', 'a', '01-08-2023'),
(103, 's', 's', '08-08-2023'),
(104, 'a', 'a', '16-08-2023'),
(106, 'dede', 'ddrssdflls', '09-08-2023');

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
(1, 'Webinar'),
(2, 'Pelatihan'),
(3, 'Sertifikasi');

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
(1, 'administrator', '$2y$10$Osq.1wC0noe4WzCo8e2TyuBqxxBZwuXVvbqkuwNAZXvq7YVgzsrjm\n', 'Administrator', 'Admin'),
(2, 'fitria', '$2y$10$kBbT8xCXy/sHv2auUIx.COdga/ATXs7mzYPAtZIE91eh4hK1H3yF6\n', 'Fitria Fauziah Diana', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aplikasi`
--
ALTER TABLE `aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `arsip`
--
ALTER TABLE `arsip`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `filess`
--
ALTER TABLE `filess`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `arsip`
--
ALTER TABLE `arsip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `bigdata`
--
ALTER TABLE `bigdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `filess`
--
ALTER TABLE `filess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `multimedia`
--
ALTER TABLE `multimedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `publikasi`
--
ALTER TABLE `publikasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT untuk tabel `tb_jeniskegiatan`
--
ALTER TABLE `tb_jeniskegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
