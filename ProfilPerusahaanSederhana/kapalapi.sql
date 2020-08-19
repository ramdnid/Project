-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Agu 2020 pada 07.13
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kapalapi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `nama_admin` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama_admin`, `username`, `email`, `password`) VALUES
(9, 'administrator', 'admin', 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bukutamu`
--

CREATE TABLE `bukutamu` (
  `id_tamu` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komentar` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bukutamu`
--

INSERT INTO `bukutamu` (`id_tamu`, `nama`, `email`, `komentar`) VALUES
(1, 'Ramadhan Boedi', '', 'hay tayo!!!!!!!!!!!'),
(2, 'Ramadhan Boedi A', '', 'Ini website yang bagus'),
(4, 'Rosidin', 'rosidin@gmail.com', 'Website nya simpel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran`
--

CREATE TABLE `pendaftaran` (
  `no_pendaftaran` int(11) NOT NULL,
  `NIK` varchar(100) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` int(13) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `JK` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `bulan_lahir` varchar(50) NOT NULL,
  `tahun_lahir` varchar(50) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(20) NOT NULL,
  `pengalaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pendaftaran`
--

INSERT INTO `pendaftaran` (`no_pendaftaran`, `NIK`, `nama_lengkap`, `foto`, `alamat`, `telepon`, `email`, `JK`, `tempat_lahir`, `tanggal_lahir`, `bulan_lahir`, `tahun_lahir`, `pendidikan`, `kewarganegaraan`, `pengalaman`) VALUES
(1, '332665445112', 'rama', 'Rama2.jpg', 'Jawa Timur', 2147483647, 'email@mail.com', 'L', 'SIDOARJO', '1', 'Maret', '1998', 'Pendidikan', 'WNI', 'Tidak ada'),
(4, '009009009009', 'rosi', 'rama.jpg', 'Pasuruan', 85654152, 'emailmu@mail.com', 'L', 'Kediri', '12', 'Januari', '1997', 'S1', 'WNA', 'Tidak ada'),
(5, '123123123123', 'Kudin', 'gula-aren.jpg', 'Gurah', 232321535, 'email@mail.com', 'L', 'SIDOARJO', '4', 'Mei', '1998', 'Pendidikan', 'WNA', 'Warkop Gaul');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit_unit`
--

CREATE TABLE `unit_unit` (
  `id_unit` int(30) NOT NULL,
  `nama_unit` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit_unit`
--

INSERT INTO `unit_unit` (`id_unit`, `nama_unit`) VALUES
(1, 'Direktur'),
(2, 'Manajemen Administrasi/Akuntan'),
(3, 'Manajemen Keuangan'),
(4, 'Manajer HRD'),
(5, 'Manajer pemasaran'),
(6, 'Manajer produksi'),
(7, 'Manajer perkebunan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indeks untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  ADD PRIMARY KEY (`no_pendaftaran`);

--
-- Indeks untuk tabel `unit_unit`
--
ALTER TABLE `unit_unit`
  ADD PRIMARY KEY (`id_unit`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `bukutamu`
--
ALTER TABLE `bukutamu`
  MODIFY `id_tamu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `no_pendaftaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `unit_unit`
--
ALTER TABLE `unit_unit`
  MODIFY `id_unit` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
