-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Jun 2020 pada 19.47
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_website`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `multi_user`
--

CREATE TABLE `multi_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar_user`
--

CREATE TABLE `tb_daftar_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `nik_user` int(20) NOT NULL,
  `no_bpjs` int(16) NOT NULL,
  `ttl` date NOT NULL,
  `nama_dok` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_daftar_user`
--

INSERT INTO `tb_daftar_user` (`id_user`, `nama_user`, `nik_user`, `no_bpjs`, `ttl`, `nama_dok`, `alamat`) VALUES
(1, 'wqwq', 2323, 23232, '2020-06-19', 'sdsadas', 'jalan Suka Suka'),
(2, 'Ismed', 131855622, 45556211, '2020-06-19', 'jalan Suka Suka', 'jalan suka suka');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_daftar_user`
--
ALTER TABLE `tb_daftar_user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
