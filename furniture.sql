-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2022 pada 21.45
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `furniture`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `image`
--

CREATE TABLE `image` (
  `id` int(100) NOT NULL,
  `page` varchar(200) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  `posisi` int(100) DEFAULT NULL,
  `gambar` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `image`
--

INSERT INTO `image` (`id`, `page`, `status`, `posisi`, `gambar`) VALUES
(2, 'Home Slider', 'Aktif', 1, '20220816214449.jpeg'),
(3, 'Home Image Bottom', 'Aktif', 1, '20220816214543.jpeg'),
(4, 'Product Image Top', 'Aktif', 1, '20220816214655.webp'),
(5, 'Home Slider', 'Aktif', 2, '20220816214503.jpeg'),
(6, 'About Us Image Top', 'Aktif', 1, '20220816214655.webp'),
(7, 'About Us Image Bottom', 'Aktif', 1, '20220816214655.webp'),
(8, 'Contact Us Image Top', 'Aktif', 1, '20220816214655.webp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(100) NOT NULL,
  `kategori` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `deskripsi`, `gambar`) VALUES
(2, 'Kanopi', 'Kanopi', '20220817151803.jpeg'),
(4, 'Aluminium', 'Gshhsndnd', '20220818233539.jpg'),
(5, 'ACP', 'Gwgbsbshs', '20220818233555.jpg'),
(6, 'Plafon', 'Vsvbsbs', '20220818233646.jpg'),
(7, 'Pagar', 'Fagsjjsjss', '20220818233710.jpg'),
(8, 'Pintu Besi', 'Gshjsnsbsh', '20220818233811.jpg'),
(9, 'Sipil', 'Gshbsbs', '20220818233848.jpg'),
(10, 'Atap Rumah', 'Gsbnsjsjs', '20220818234005.jpg'),
(11, 'Kitchen Set', 'Bbsnsnsns', '20220818234034.jpg'),
(12, 'Wallpaper', 'Vbsbsbsjshsgsh', '20220818234051.jpg'),
(13, 'Taman', 'Gshhshsjs', '20220818234308.jpg'),
(14, 'Letter Sign', 'Jfjdsyxkfu', '20220818234858.jpg'),
(15, 'Mezzanine', 'Fgjj', '20220818235153.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(100) NOT NULL,
  `id_kategori` int(100) DEFAULT NULL,
  `produk` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `id_kategori`, `produk`) VALUES
(3, 2, 'Kanopi Bajaringan'),
(4, 2, 'Kanopi Besi'),
(5, 2, 'Kanopi Stainless Steel'),
(6, 2, 'Kanopi Plafon Gypsum'),
(7, 2, 'Kanopi Plafon PVC'),
(8, 2, 'Kanopi Balcon'),
(9, 4, 'Pintu Aluminium'),
(10, 4, 'Jendela Aluminium'),
(11, 4, 'Aluminium Partisi Kaca'),
(12, 5, 'Dinding ACP'),
(13, 5, 'Pintu ACP'),
(14, 5, 'Kitchen Set ACP'),
(15, 5, 'Plafon ACP'),
(16, 7, 'Pagar Besi Holo'),
(17, 7, 'Pagar Stainlest'),
(18, 7, 'Pagar Besi Tralis'),
(19, 6, 'Plafon Gypsum'),
(20, 6, 'Plafon PVC'),
(21, 6, 'Plafon GRC'),
(22, 9, 'Pemasangan Tembok'),
(23, 9, 'Pasang Kramik Dan Granit'),
(24, 9, 'Pembangunan Bangunan'),
(25, 9, 'Pembangunan Bangunan'),
(26, 13, 'Taman Indoor'),
(27, 11, 'Kitchen set Aluminium'),
(28, 11, 'Kitchen set kayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk_item`
--

CREATE TABLE `produk_item` (
  `id` int(100) NOT NULL,
  `id_produk` int(100) DEFAULT NULL,
  `produk` varchar(250) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `harga` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `produk_item`
--

INSERT INTO `produk_item` (`id`, `id_produk`, `produk`, `deskripsi`, `gambar`, `harga`) VALUES
(5, 3, 'Aluminium', 'Test', '20220817152453.webp', 100000),
(6, 5, 'Kitchenset', 'Kitchen set', '20220817152541.jpeg', 20000),
(7, 4, 'Pagar dan tralis', 'Pagar dan tralis', '20220817152805.jpeg', 290000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `service`
--

CREATE TABLE `service` (
  `id` int(100) NOT NULL,
  `judul` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `service`
--

INSERT INTO `service` (`id`, `judul`, `deskripsi`) VALUES
(1, 'Test service', 'test');

-- --------------------------------------------------------

--
-- Struktur dari tabel `text`
--

CREATE TABLE `text` (
  `id` int(100) NOT NULL,
  `tentang` text DEFAULT NULL,
  `tempat` text DEFAULT NULL,
  `fb` text DEFAULT NULL,
  `wa` text DEFAULT NULL,
  `ig` text DEFAULT NULL,
  `toko` text DEFAULT NULL,
  `pesan` text DEFAULT NULL,
  `pesan_kontak` text DEFAULT NULL,
  `home` text DEFAULT NULL,
  `product` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `contact` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `text`
--

INSERT INTO `text` (`id`, `tentang`, `tempat`, `fb`, `wa`, `ig`, `toko`, `pesan`, `pesan_kontak`, `home`, `product`, `about`, `contact`) VALUES
(1, 'Kami adalah konsultan dan perancang bangunan', 'Jl. Si Jalak Harupat', 'adibaskarapersada', '6282222222222', 'adibaskarapersada', 'Adi Baskara Persada', 'Adi Baskara Persada', 'Test Kontak', '{\r\n  \"author\" : \"test\",\r\n  \"keyword\": \"test\",\r\n  \"description\" : \"test\"\r\n}', '{\n  \"author\" : \"test\",\n  \"keyword\": \"test\",\n  \"description\" : \"test\"\n}', '{\n  \"author\" : \"test\",\n  \"keyword\": \"test\",\n  \"description\" : \"test\"\n}', '{\r\n  \"author\" : \"test\",\r\n  \"keyword\": \"test\",\r\n  \"description\" : \"test\"\r\n}');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tim`
--

CREATE TABLE `tim` (
  `id` int(100) NOT NULL,
  `nama` varchar(250) DEFAULT NULL,
  `posisi` int(100) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `gambar` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `whatsapp` text DEFAULT NULL,
  `instagram` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tim`
--

INSERT INTO `tim` (`id`, `nama`, `posisi`, `deskripsi`, `gambar`, `facebook`, `whatsapp`, `instagram`) VALUES
(1, 'Akhmad Faozan Ramdoni', 1, 'test test', '20220816215115.png', 'doni ozan akhmad', '6285727772994', 'doni ozan akhmad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` text DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `email` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `remember_token` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `remember_token`) VALUES
(1, 'admin', 'admin', 'admin', 'password', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk_item`
--
ALTER TABLE `produk_item`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tim`
--
ALTER TABLE `tim`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `image`
--
ALTER TABLE `image`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `produk_item`
--
ALTER TABLE `produk_item`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `service`
--
ALTER TABLE `service`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `text`
--
ALTER TABLE `text`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tim`
--
ALTER TABLE `tim`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
