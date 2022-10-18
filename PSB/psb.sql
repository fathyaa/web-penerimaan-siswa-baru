-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Okt 2022 pada 11.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `akun_admin`
--

CREATE TABLE `akun_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `akun_admin`
--

INSERT INTO `akun_admin` (`id_admin`, `nama`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendaftaran_siswa`
--

CREATE TABLE `pendaftaran_siswa` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` text NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `umur` int(25) NOT NULL,
  `jenis_kelamin` text NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `sekolah_asal` text NOT NULL,
  `nisn` int(100) NOT NULL,
  `nilai_bindo` int(25) NOT NULL,
  `nilai_binggris` int(25) NOT NULL,
  `nilai_ipa` int(25) NOT NULL,
  `nilai_mtk` int(25) NOT NULL,
  `nilai_rata` int(25) NOT NULL,
  `status_pendaftaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pendaftaran_siswa`
--

INSERT INTO `pendaftaran_siswa` (`id`, `email`, `password`, `foto`, `nama`, `tempat_lahir`, `tgl_lahir`, `umur`, `jenis_kelamin`, `alamat`, `sekolah_asal`, `nisn`, `nilai_bindo`, `nilai_binggris`, `nilai_ipa`, `nilai_mtk`, `nilai_rata`, `status_pendaftaran`) VALUES
(4, 'andy@gmail.com', '$2y$10$Qr2d10XTicI/e0KMAvPYOOMgOTqTIEfWROgkK8XoLLTBcI.TgD81W', 'users/contoh.jpg', 'Andy Wijaya', 'Sumedang', '2005-06-22', 16, 'Laki-laki', 'Jl. Soekarno Hatta no 18 Bandung ', 'SMPN 1 Sumedang', 2147483647, 89, 92, 73, 78, 83, 'Tidak diterima'),
(5, 'lalisa@blackpink.com', '123', 'users/lalisa.jpg', 'Lalisa Manoban', 'Thailand', '2005-07-20', 16, 'Perempuan', 'Korea', 'SMPN 1 Sawadeekhap', 2147483647, 50, 100, 100, 100, 88, 'Tidak diterima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `pendaftaran_siswa`
--
ALTER TABLE `pendaftaran_siswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `akun_admin`
--
ALTER TABLE `akun_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pendaftaran_siswa`
--
ALTER TABLE `pendaftaran_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
