-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Feb 2021 pada 22.17
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerawanan`
--

CREATE TABLE `kerawanan` (
  `id_kerawanan` int(13) NOT NULL,
  `tingkat_kerawanan` varchar(255) NOT NULL,
  `status_kerawanan` enum('low','medium','high') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kerawanan`
--

INSERT INTO `kerawanan` (`id_kerawanan`, `tingkat_kerawanan`, `status_kerawanan`) VALUES
(2, 'Sedang', 'medium');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kerawanan`
--
ALTER TABLE `kerawanan`
  ADD PRIMARY KEY (`id_kerawanan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kerawanan`
--
ALTER TABLE `kerawanan`
  MODIFY `id_kerawanan` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
