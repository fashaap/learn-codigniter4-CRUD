-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2023 pada 11.24
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommers_ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Nama_barang` varchar(100) NOT NULL,
  `Harga_barang` int(11) DEFAULT NULL,
  `Gambar_barang` text NOT NULL,
  `Deskripsi_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `Nama_barang`, `Harga_barang`, `Gambar_barang`, `Deskripsi_barang`) VALUES
(1, 'Kursi Gaming Rexus', 15000000, 'https://rexus.id/wp-content/uploads/2020/06/WebLayout_ElectraBlue_02.jpg', 'Terbuat dari kulit sapi premium dan dijahit oleh p'),
(2, 'Monitor TUF Gaming VG28UQL1A', 5000000, 'https://dlcdnwebimgs.asus.com/gain/3f57bbfc-5d04-474f-a95e-b283d4418244/', 'HDMI 2.1 Gaming Monitor — 28-inch 4K UHD (3840 x 2160), Fast IPS, 144 Hz, 1 ms GTG, NVIDIA G-Sync co'),
(3, 'Meja gaming UPPSPEL', 8000000, 'https://www.ikea.co.id/dairyfarm/id/images/397/1039777_PE840447_S4.jpg', 'Meja gaming UPPSPEL membantu Anda melakukan yang terbaik. Ukurannya besar, tahan lama dan kokoh. And'),
(4, 'Headset hyperx cloud flight s', 4500000, 'https://row.hyperx.com/cdn/shop/products/hyperx_cloud_flight_s_02_extended.jpg?v=1662449692', '2.4GHZ WIRELESS WITH 30 HOUR[1] BATTERY LIFE\r\nGet wireless freedom with fast connectivity. Play more');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
