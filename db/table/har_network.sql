-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jan 2021 pada 17.18
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Struktur dari tabel `har_network`
--

CREATE TABLE `har_network` (
  `id` int(13) NOT NULL,
  `nama_unit` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `waktu_pelaksanaan` date NOT NULL,
  `nama_perangkat` varchar(255) NOT NULL,
  `serial_number` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `id_address` varchar(255) NOT NULL,
  `mac_address` varchar(255) NOT NULL,
  `tampak_fisik` varchar(128) NOT NULL,
  `indikator_lampu` varchar(128) NOT NULL,
  `power_supply` varchar(128) NOT NULL,
  `lan` varchar(128) NOT NULL,
  `port` varchar(128) NOT NULL,
  `konfigurasi` varchar(128) NOT NULL,
  `backup_setting` varchar(128) NOT NULL,
  `catatan` varchar(255) NOT NULL,
  `pengawas_pekerjaan` varchar(128) NOT NULL,
  `pelaksana_pekerjaan` varchar(128) NOT NULL,
  `foto_sebelum_pengerjaan` varchar(200) NOT NULL,
  `foto_sesudah_pengerjaan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `har_network`
--

INSERT INTO `har_network` (`id`, `nama_unit`, `lokasi`, `waktu_pelaksanaan`, `nama_perangkat`, `serial_number`, `type`, `id_address`, `mac_address`, `tampak_fisik`, `indikator_lampu`, `power_supply`, `lan`, `port`, `konfigurasi`, `backup_setting`, `catatan`, `pengawas_pekerjaan`, `pelaksana_pekerjaan`, `foto_sebelum_pengerjaan`, `foto_sesudah_pengerjaan`) VALUES
(39, 'UPT PANGKALAN RAYA', 'Jalan Pamungkas 30', '2021-01-15', 'ROUTER', '1234123', 'HP VM 200', '1.133.2.131', 'XC12333215', 'Normal', 'Normal', 'Normal', 'Rusak', 'Rusak', 'Normal', 'Rusak', 'Perangkat sudah tua dan tidak memadai', 'August Jujung Hutauruk', 'Ahmad Suardi Nasutions', 'bukti12.jpg', 'foto_depan_sesudah24.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `har_network`
--
ALTER TABLE `har_network`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `har_network`
--
ALTER TABLE `har_network`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
