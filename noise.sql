-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Feb 2021 pada 07.50
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noise`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_otoparts`
--

CREATE TABLE `tabel_otoparts` (
  `id_otopart` int(11) NOT NULL,
  `nama_otopart` varchar(32) NOT NULL,
  `harga_otopart` int(11) NOT NULL,
  `merek_otopart` varchar(32) NOT NULL,
  `ukuran_otopart` varchar(16) NOT NULL,
  `deskripsi_otopart` varchar(300) NOT NULL,
  `image_otopart` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_otoparts`
--

INSERT INTO `tabel_otoparts` (`id_otopart`, `nama_otopart`, `harga_otopart`, `merek_otopart`, `ukuran_otopart`, `deskripsi_otopart`, `image_otopart`) VALUES
(1, 'Jok Kulit', 350000, 'mitsubitsi', 'Besar', 'Untuk Jok Mobil', 'jokkulit.jpg'),
(5, 'Kaca Film', 200000, 'Lokal', 'Gelap 20%', 'Kaca mobil film untuk meng antisipasi sinar matahari', 'kacafilm.jpg'),
(6, 'Knalpot Racing', 3500000, 'Lokal', '4 Turbo', 'Knalpot Mobil untuk ngebut ngebutan', 'web2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_pengguna`
--

CREATE TABLE `tabel_pengguna` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `level` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(60) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `telepon` int(11) NOT NULL,
  `password` varchar(34) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_pengguna`
--

INSERT INTO `tabel_pengguna` (`id`, `username`, `level`, `email`, `alamat`, `telepon`, `password`, `photo`) VALUES
(1, 'admin', '0', 'admin@gmail.com', 'admin', 132141212, 'admin', 'default.svg'),
(2, 'popo', '1', 'popo@gmail.com', 'jl kenangan', 8321321, '$2y$10$ZF.Ia4LUK4M6mb9xrzC4veezmbs', 'default.svg'),
(3, 'kakanda', '1', 'cinta@gmail.com', 'neraka', 8321312, '$2y$10$NSuBm2xe/Enc7Xk9pRbhG.3ZYV0', 'default.svg'),
(4, 'aaa', '1', 'aa@gmail.com', 'aa', 2131421, '$2y$10$CsF1WNTk.0qZX1Au5QG2c.8fg35', 'acep.svg'),
(11, 'solihin', '1', 'solihin@gmail.com', 'jl kenangan', 83123127, '$2y$10$yburDumoq23JlidcKmWkeu.tJm2', 'default.svg'),
(12, 'cecep', '1', 'cecep@gmail.com', 'cecep kenangan', 83127312, '$2y$10$KmxkPNFGGSVFLROG76knA.XKZml', 'default.svg'),
(13, 'ucup', '1', 'ucup@gmail.com', 'ucup kenangan', 831231, '$2y$10$BhNaY.PO6QeQWgBGCDbsAuJhSFo', 'default.svg'),
(14, 'acep', '1', 'acep@gmail.com', 'acep', 283124, '$2y$10$ZAeFSCrz.0.AIfodJ6nDz.xbpeU', 'default.svg'),
(15, 'try', '1', 'try@gmail.com', 'catch', 832112, 'trycatch', 'default.svg'),
(17, 'asw', '1', 'asw@gmail.com', 'asww lu', 8321471, 'aswlu', 'default.svg'),
(18, 'sha1', '1', 'sha1@gmail.com', 'sha1', 12131, '415ab40ae9b7cc4e66d6769cb2c08106e8', 'default.svg'),
(19, 'asep', '1', 'asep@gmail.com', 'asep', 8321312, 'asep', 'default.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_service`
--

CREATE TABLE `tabel_service` (
  `id_service` int(11) NOT NULL,
  `nama_service` varchar(32) NOT NULL,
  `harga_service` int(11) NOT NULL,
  `merek_service` varchar(32) DEFAULT NULL,
  `ukuran_service` varchar(16) DEFAULT NULL,
  `deskripsi_service` varchar(300) NOT NULL,
  `image_service` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_service`
--

INSERT INTO `tabel_service` (`id_service`, `nama_service`, `harga_service`, `merek_service`, `ukuran_service`, `deskripsi_service`, `image_service`) VALUES
(2, 'Full Servis', 200000, 'Toyota', '', 'Servis full sampai akar akarnya\r\n', 'banmobil.jpg'),
(22, 'Ganti Oli', 35000, 'Yamaha', '1 Liter', 'Oli dengan merek yamaha untuk matic', 'gantioli.jpg'),
(23, 'Pelek Mobil', 505000, 'Toyota', 'Mobil Pribadi', 'Pelek dengan kualitas Lokal terbaik', 'gantivelg.jpg'),
(24, 'Kaki Mobil', 700000, '', '', 'Service Full Kaki mobil', 'kakikaki.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_service` int(11) DEFAULT NULL,
  `totalpembelian` int(11) NOT NULL,
  `id_otopart` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Diskonfirmasi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tabel_transaksi`
--

INSERT INTO `tabel_transaksi` (`id_transaksi`, `id`, `id_service`, `totalpembelian`, `id_otopart`, `status`) VALUES
(11, 14, 22, 360000, NULL, 'Konfirmasi'),
(12, 19, 2, 200000, NULL, 'Konfirmasi'),
(13, 19, 2, 200000, NULL, 'Diskonfirmasi'),
(14, 19, NULL, 360000, 5, 'Diskonfirmasi'),
(15, 19, NULL, 350000, 1, 'Diskonfirmasi'),
(16, 19, NULL, 1200000, 5, 'Diskonfirmasi'),
(17, 19, 22, 350000, NULL, 'Konfirmasi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_otoparts`
--
ALTER TABLE `tabel_otoparts`
  ADD PRIMARY KEY (`id_otopart`);

--
-- Indeks untuk tabel `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tabel_service`
--
ALTER TABLE `tabel_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indeks untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id` (`id`),
  ADD KEY `id_noise` (`id_service`),
  ADD KEY `totalpembelian` (`totalpembelian`),
  ADD KEY `id_otopart` (`id_otopart`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_otoparts`
--
ALTER TABLE `tabel_otoparts`
  MODIFY `id_otopart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `tabel_service`
--
ALTER TABLE `tabel_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD CONSTRAINT `tabel_transaksi_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tabel_pengguna` (`id`),
  ADD CONSTRAINT `tabel_transaksi_ibfk_2` FOREIGN KEY (`id_service`) REFERENCES `tabel_service` (`id_service`),
  ADD CONSTRAINT `tabel_transaksi_ibfk_3` FOREIGN KEY (`id_otopart`) REFERENCES `tabel_otoparts` (`id_otopart`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
