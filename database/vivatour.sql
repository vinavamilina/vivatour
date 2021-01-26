-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2021 pada 22.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vivatour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_wisata`
--

CREATE TABLE `paket_wisata` (
  `Id_paket_wisata` varchar(100) NOT NULL,
  `Nama_paket` varchar(50) NOT NULL,
  `Nama_tempat_wisata` varchar(50) NOT NULL,
  `Kegiatan_wisata` varchar(50) NOT NULL,
  `Lama_tour/harga/org` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paket_wisata`
--

INSERT INTO `paket_wisata` (`Id_paket_wisata`, `Nama_paket`, `Nama_tempat_wisata`, `Kegiatan_wisata`, `Lama_tour/harga/org`) VALUES
('C1112', 'A(Sharing)', 'Pulau Menjangan Besar/kecil', 'Berenang bersama ikan hiu', '1 Hari-Ferry-180 k'),
('C1113', 'B(Sharing)', 'Pulau Gosong Cemara', 'Turtle point', '1 Hari-Ferry-130 k'),
('C1114', 'C(Sharing)', 'Pulau Geleang', 'Snorkelling', '1 Hari-Ferry-175 k'),
('C1115', 'D(Private)', 'Pulau Kemujan', 'Bukit-bukit di kemujan', '1 Hari-Ferry-200 k'),
('C1116', 'E(Private)', 'Pulau Kemujan', 'Pantai Tanjung Gelam', '1 Hari-Mobil-150 k'),
('C1117', 'D(Sharing)', 'Pulau Kemujan', 'Mangrove tracking', '1 Hari-Mobil-130 k');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `Id_pelanggan` int(50) NOT NULL,
  `Nama_pelanggan` varchar(50) NOT NULL,
  `Alamat_pelanggan` varchar(50) NOT NULL,
  `Asal_kota` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`Id_pelanggan`, `Nama_pelanggan`, `Alamat_pelanggan`, `Asal_kota`) VALUES
(1, 'Vicky Salsadilla', 'Jl Kenangan', 'Bandung'),
(2, 'Bagas Virgiyanto', 'Jl Kenanga', 'Bandung'),
(3, 'Munira', 'Jl Walisongo', 'Jepara'),
(4, 'Saskia', 'Jl Gajah Mada', 'Bandung'),
(5, 'Nafeeza', 'Jl Kartini', 'Jepara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(20) NOT NULL COMMENT 'Username pengguna',
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Pria','Wanita') NOT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `alamat` varchar(100) NOT NULL,
  `kata_sandi` varchar(100) NOT NULL,
  `level_pengguna` enum('Admin','Pelanggan','Manajer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `kata_sandi`, `level_pengguna`) VALUES
(1, 'Vina', 'Vina Vamilina', 'Wanita', NULL, NULL, 'Bengkalis', '501c3f4a7cb30e162201140285e465f2', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi_pembayaran`
--

CREATE TABLE `transaksi_pembayaran` (
  `Id_transaksi` int(50) NOT NULL,
  `Tgl_transaksi` varchar(50) NOT NULL,
  `Nama_paket` varchar(50) NOT NULL,
  `Jumlah_paket` double NOT NULL,
  `Nama_pelanggan` varchar(50) NOT NULL,
  `Harga_total` double NOT NULL,
  `Status_transaksi` enum('Lunas','Belum Lunas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transaksi_pembayaran`
--

INSERT INTO `transaksi_pembayaran` (`Id_transaksi`, `Tgl_transaksi`, `Nama_paket`, `Jumlah_paket`, `Nama_pelanggan`, `Harga_total`, `Status_transaksi`) VALUES
(312, '10 Februari 2020', 'A (Sharing)', 2, 'Vicky Salsadilla', 360, 'Lunas'),
(313, '12 Februari 2020', 'B (Sharing)', 1, 'Bagas Virgiyanto', 130, 'Lunas'),
(314, '14 Februari 2020', 'C (Sharing)', 3, 'Saskia', 525, 'Lunas'),
(315, '15 Februari 2020', 'D(Sharing)', 2, 'Munira', 400, 'Lunas'),
(316, '10 Februari 2020', 'E (Private)', 2, 'Nafeeza', 300, 'Belum Lunas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `paket_wisata`
--
ALTER TABLE `paket_wisata`
  ADD PRIMARY KEY (`Id_paket_wisata`),
  ADD KEY `Nama_paket` (`Nama_paket`),
  ADD KEY `Lama_tour/harga/org` (`Lama_tour/harga/org`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`),
  ADD KEY `Nama_pelanggan` (`Nama_pelanggan`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`),
  ADD UNIQUE KEY `nama_pengguna` (`nama_pengguna`);

--
-- Indeks untuk tabel `transaksi_pembayaran`
--
ALTER TABLE `transaksi_pembayaran`
  ADD PRIMARY KEY (`Id_transaksi`),
  ADD KEY `Nama_paket` (`Nama_paket`),
  ADD KEY `Nama_pelanggan` (`Nama_pelanggan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
