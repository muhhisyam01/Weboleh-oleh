-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 28 Feb 2023 pada 15.42
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_weboleh_oleh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(30) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `stock` int(50) NOT NULL,
  `harga` int(50) NOT NULL,
  `keterangan` varchar(300) NOT NULL,
  `gambar_1` varchar(50) NOT NULL,
  `gambar_2` varchar(50) NOT NULL,
  `gambar_3` varchar(50) NOT NULL,
  `gambar_4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `jenis_produk`, `stock`, `harga`, `keterangan`, `gambar_1`, `gambar_2`, `gambar_3`, `gambar_4`) VALUES
(28, 'Tes', 'Kopi', 40, 400000, 'Tersedia banyak rasa ', 'KM2_1.jpg', 'KM3_1.jpg', 'logo rb_2.png', 'noimage-rkb_2.jpg'),
(29, 'tissu', 'Tissu', 30, 12000, 'tersedai varian tissu', 'Ad-Medika.png', 'logo rs.jpeg', 'mandiri.jpg', 'zyro-image.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id_kegiatan` int(50) NOT NULL,
  `nama_kegiatan` varchar(70) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `foto_1` varchar(50) NOT NULL,
  `foto_2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id_kegiatan`, `nama_kegiatan`, `deskripsi`, `tanggal`, `foto_1`, `foto_2`) VALUES
(10, 'Kerja sama dengan UMKM Lokal di kabupaten Mamuju', 'mengenal UMKM Lokal lebih jau dan mengenal masalah dari masing-masing UMKM untuk di pecahkan bersama', '2023-02-01', 'mandiri.jpg', 'Image.png'),
(11, 'Pembuatan PT untuk UMKM Lokal', 'Membuat PT yang diselengarakan oleh KEMENTERIAN HKUM DAN HAM', '2023-02-03', 'Ad-Medika.png', 'Image_1.png'),
(12, 'tes', 'ulalal', '0000-00-00', 'tes', 'tes'),
(13, 'Kedua tes', 'Kedua tes', '0000-00-00', 'kedua', 'kedua'),
(14, 'ketiga', 'Ketiga', '0000-00-00', 'Ketiga', 'Ketiga'),
(15, 'Keempat', 'Keempat', '0000-00-00', 'Keempat', 'Keempat'),
(16, 'kelima', 'kelima', '0000-00-00', 'kelima', 'kelima'),
(17, 'Keenam', 'Keenam', '0000-00-00', 'Keenam', 'Keenam'),
(18, 'ketuju', 'ketuju', '0000-00-00', 'ketuju', 'ketuju'),
(19, 'Kedelapan', 'Kedelapan', '0000-00-00', 'Kedelapan', 'Kedelapan'),
(20, 'Kesembilan', 'Kesembilan', '0000-00-00', 'Kesembilan', 'Kesembilan'),
(21, 'Kesepuluh', 'Kesepuluh', '0000-00-00', 'Kesepuluh', 'Kesepuluh'),
(22, 'Tes saja ', 'Tes tanggal', '2023-02-26', 'mandiri.jpg', 'logo rs.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(15) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `slide_1` varchar(50) NOT NULL,
  `slide_2` varchar(50) NOT NULL,
  `slide_3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_umkm`, `logo`, `slide_1`, `slide_2`, `slide_3`) VALUES
(11, 'UMKM MALA`BI', 'Ad-Medika.png', 'mandiri.jpg', 'Screenshot from 2023-01-28 08-41-45.png', 'BPJS Kesehatan Logo Vector.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_Services`
--

CREATE TABLE `tb_Services` (
  `id_services` int(15) NOT NULL,
  `nama_services` varchar(50) NOT NULL,
  `deskripsi_services` text NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_Services`
--

INSERT INTO `tb_Services` (`id_services`, `nama_services`, `deskripsi_services`, `foto`) VALUES
(3, 'Bismillah Services', 'Tes deskripsi services yang bagus dan tentang services', 'logo rb.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indeks untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id_kegiatan`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_Services`
--
ALTER TABLE `tb_Services`
  ADD PRIMARY KEY (`id_services`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id_kegiatan` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_Services`
--
ALTER TABLE `tb_Services`
  MODIFY `id_services` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
