-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Apr 2022 pada 08.57
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utswf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `drivers`
--

CREATE TABLE `drivers` (
  `id_driver` varchar(11) NOT NULL,
  `id_product` varchar(11) NOT NULL,
  `nama_driver` varchar(255) NOT NULL,
  `size_driver` int(11) NOT NULL,
  `years_driver` int(11) NOT NULL DEFAULT 2012
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `drivers`
--

INSERT INTO `drivers` (`id_driver`, `id_product`, `nama_driver`, `size_driver`, `years_driver`) VALUES
('DR6700XT', 'RX-6700-XT', 'Driver Radeon Graphics For RX 6700 XT', 450, 2012);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id_product` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `base_clock` int(11) NOT NULL,
  `boost_clock` int(11) NOT NULL,
  `years` int(11) NOT NULL DEFAULT 2012,
  `image` varchar(255) NOT NULL DEFAULT 'image.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id_product`, `nama`, `size`, `type`, `base_clock`, `boost_clock`, `years`, `image`) VALUES
('RX-6700-XT', 'RX 6700 XT', 12, 'GDDR6', 2424, 0, 2012, 'image.jpg'),
('RX-6800-BS', 'RX 6800', 16, 'GDDR6', 1815, 0, 2012, 'image.jpg'),
('RX-6800-XT', 'RX 6800 XT', 16, 'GDDR6', 2015, 0, 2012, 'image.jpg'),
('RX-6900-XT', 'RX 6900 XT', 16, 'GDDR6', 2015, 0, 2012, 'image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id_driver`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
