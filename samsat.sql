-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Apr 2022 pada 10.22
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `samsat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_survei`
--

CREATE TABLE `data_survei` (
  `no_hp` varchar(14) NOT NULL,
  `waktu` date NOT NULL,
  `sipp` int(1) NOT NULL,
  `pemutahiran` int(1) NOT NULL,
  `transparan` int(1) NOT NULL,
  `konsultasi` int(1) NOT NULL,
  `pengaduan` int(1) NOT NULL,
  `persyaratan` int(1) NOT NULL,
  `prosedur` int(1) NOT NULL,
  `tarif` int(1) NOT NULL,
  `waktua` int(1) NOT NULL,
  `antrian` int(1) NOT NULL,
  `perlibatan` int(1) NOT NULL,
  `publikasi` int(1) NOT NULL,
  `skm` int(1) NOT NULL,
  `tarifb` int(1) NOT NULL,
  `waktub` int(1) NOT NULL,
  `kesigapan` int(1) NOT NULL,
  `sikap` int(1) NOT NULL,
  `parkir` int(1) NOT NULL,
  `tunggu` int(1) NOT NULL,
  `toilet` int(1) NOT NULL,
  `khusus` int(1) NOT NULL,
  `penunjang` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `data_survei`
--

INSERT INTO `data_survei` (`no_hp`, `waktu`, `sipp`, `pemutahiran`, `transparan`, `konsultasi`, `pengaduan`, `persyaratan`, `prosedur`, `tarif`, `waktua`, `antrian`, `perlibatan`, `publikasi`, `skm`, `tarifb`, `waktub`, `kesigapan`, `sikap`, `parkir`, `tunggu`, `toilet`, `khusus`, `penunjang`) VALUES
('082280084552', '2022-04-20', 5, 4, 3, 2, 1, 0, 1, 2, 3, 4, 5, 4, 3, 3, 1, 0, 1, 2, 3, 4, 5, 4),
('082282440', '2022-04-21', 2, 3, 3, 3, 4, 4, 3, 3, 4, 4, 4, 4, 4, 4, 4, 5, 4, 4, 4, 4, 4, 4),
('082282440044', '0000-00-00', 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
('1213142', '2022-04-20', 5, 2, 2, 2, 2, 2, 2, 2, 2, 2, 1, 1, 3, 4, 2, 2, 2, 2, 2, 2, 2, 2),
('12131421', '2021-04-15', 2, 2, 2, 2, 2, 2, 1, 2, 1, 1, 1, 1, 0, 3, 0, 4, 5, 5, 5, 4, 4, 4),
('123', '2022-04-09', 4, 3, 2, 1, 2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 4, 1, 4, 4, 4, 4, 5, 3),
('12321', '2022-04-15', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 3),
('4392', '2022-04-10', 5, 5, 5, 5, 5, 4, 4, 3, 4, 5, 3, 2, 2, 4, 3, 2, 2, 2, 2, 2, 2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-04-09-072108', 'App\\Database\\Migrations\\Users', 'default', 'App', 1649527322, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('zul123', 'zul123', 'ZUlfikar', '2022-04-09 20:03:59', '2022-04-09 20:03:59'),
('zul1234', '$2y$10$aM8fqsx5/bvPVjxyjbS3kemWzU3nj2Wmd4m15msSZlxzt9l2daHay', 'Kris', '2022-04-14 22:08:21', '2022-04-14 22:08:21');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_survei`
--
ALTER TABLE `data_survei`
  ADD PRIMARY KEY (`no_hp`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
