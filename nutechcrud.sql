-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Apr 2022 pada 16.30
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutechcrud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `barang` varchar(50) DEFAULT NULL,
  `foto` text DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga_jual` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `insert_user` varchar(50) DEFAULT NULL,
  `update_user` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `barang`, `foto`, `harga_beli`, `harga_jual`, `stok`, `insert_user`, `update_user`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'laptop asus', '1650472375_fastsis.com_public_petaniadd.png', 5000000, 4000000, 123, 'elga', 'elga', '2022-04-20 16:32:55', '2022-04-20 16:32:55', NULL),
(2, 'Sepatu Nike', '1650472426_bams-kepri.com_transaksi_pengambilan-atk (2).png', 700000, 750000, 3, 'elga', 'elga', '2022-04-20 16:33:46', '2022-04-21 12:40:03', '2022-04-21 05:40:03'),
(3, 'Kipas Angin Miyako v1', '1650546080_bams-kepri.com_transaksi_pengambilan-atk (2).png', 550000, 660000, 4000, 'elga', 'elga', '2022-04-21 12:41:27', '2022-04-21 13:01:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
