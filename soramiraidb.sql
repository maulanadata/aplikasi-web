-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2021 pada 13.13
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soramiraidb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbadmin`
--

CREATE TABLE `tbadmin` (
  `id_admin` int(1) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbadmin`
--

INSERT INTO `tbadmin` (`id_admin`, `nama`, `email`, `username`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbdaftar`
--

CREATE TABLE `tbdaftar` (
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `ttl` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `sekolah` varchar(30) NOT NULL,
  `hobi` varchar(30) NOT NULL,
  `belajar` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbdaftar`
--

INSERT INTO `tbdaftar` (`id_daftar`, `nama`, `ttl`, `jenis_kelamin`, `alamat`, `sekolah`, `hobi`, `belajar`, `email`, `status`) VALUES
(1, 'user', 'Bandung, 04-04-1995', 'Pria', 'Bandung Kulon', 'SMKN 2 BANDUNG', 'Bernyanyi', 'JLPT N2', 'user@gmai.com', 'Diterima'),
(2, 'conan', 'Depok, 04-05-1976', 'Pria', 'Depok Tengah', 'SMKN 1 DEPOK', 'Menulis', 'JLPT N2', 'conan@gmail.com', 'Tidak Diterima'),
(3, 'Asep', 'Bandung, 04-04-1995', 'pria', 'Bandung Kimpling', 'SMKN 1 BANDUNG', 'Memancing', 'JLPT N5', 'asepuye@gmail.com', 'Tidak Diterima'),
(4, 'Mirnawati', 'Lampung, 17-08-2000', 'Wanita', 'Lampung Kulon', 'SMAN 1 LAMPUNG', 'Bernyanyi', 'JLPT N4', 'mirnawatiku@gmail.com', 'Cadangan'),
(5, 'Wardoyo', 'Jakarta, 14-06-1975', 'Pria', 'Jakarta', 'Universitas Indonesia (S2)', 'Diving', 'JLPT N3', 'wardoyo@gmail.com', 'Diterima'),
(7, 'Holmes', 'Cek, 10-10-2010', 'Pria', 'Cekidot', 'SMKN 2 CEKIDOT', 'Menulis', 'JLPT N4', 'holmes@gmail.com', 'Sedang Proses'),
(8, 'bambang Priyatno', 'Kuvukiland, 10-10-1010', 'Pria', 'Kuvukiland', 'SMKN 2 KUVUKILAND', 'Menulis', 'JLPT N4', 'bambang@gmail.com', 'Sedang Proses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbuser`
--

CREATE TABLE `tbuser` (
  `id_user` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbuser`
--

INSERT INTO `tbuser` (`id_user`, `email`, `username`, `password`) VALUES
(1, 'user@gmail.com', 'user', 'user'),
(2, 'conan@gmail.com', 'conan', 'conan'),
(3, 'asepuye@gmail.com', 'asep', 'asep'),
(4, 'mirnawatiku@gmail.com', 'mirnawati', 'mirnawati'),
(5, 'wardoyo@gmail.com', 'wardoyo', 'wardoyo'),
(7, 'holmes@gmail.com', 'holmes', 'holmes'),
(8, 'bambang@gmail.com', 'bambang', '12345');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tbdaftar`
--
ALTER TABLE `tbdaftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- Indeks untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbadmin`
--
ALTER TABLE `tbadmin`
  MODIFY `id_admin` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbdaftar`
--
ALTER TABLE `tbdaftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
