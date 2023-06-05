-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Jun 2023 pada 10.50
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restorancafe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_cafe`
--

CREATE TABLE `kriteria_cafe` (
  `ID_Kriteria_Cafe` varchar(5) NOT NULL,
  `Nama_Kriteria_Cafe` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_cafe`
--

INSERT INTO `kriteria_cafe` (`ID_Kriteria_Cafe`, `Nama_Kriteria_Cafe`, `created_at`, `updated_at`) VALUES
('KC001', 'Sangat Enak', '2023-06-03 07:15:17', '2023-06-03 07:15:17'),
('KC002', 'Sangat Mantap', '2023-06-04 20:00:12', '2023-06-04 20:00:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kriteria_restoran`
--

CREATE TABLE `kriteria_restoran` (
  `ID_Kriteria_Restoran` varchar(5) NOT NULL,
  `Nama_Kriteria_Restoran` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kriteria_restoran`
--

INSERT INTO `kriteria_restoran` (`ID_Kriteria_Restoran`, `Nama_Kriteria_Restoran`, `created_at`, `updated_at`) VALUES
('KR001', 'Bagus Sekali', '2023-06-03 07:24:20', '2023-06-03 07:24:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cafe`
--

CREATE TABLE `tb_cafe` (
  `ID_Cafe` varchar(5) NOT NULL,
  `ID_Pegawai` varchar(5) DEFAULT NULL,
  `Nama_Cafe` varchar(20) NOT NULL,
  `Alamat_Cafe` varchar(50) NOT NULL,
  `Rating_Cafe` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_cafe`
--

INSERT INTO `tb_cafe` (`ID_Cafe`, `ID_Pegawai`, `Nama_Cafe`, `Alamat_Cafe`, `Rating_Cafe`, `created_at`, `updated_at`) VALUES
('C001', 'PG001', 'KopiEnak', 'JL.A No.02', '4.0', '2023-06-04 00:37:02', '2023-06-04 00:37:02'),
('C002', 'PG001', 'KopiEnak', 'JL.A No.07', '4.0', '2023-06-04 08:43:09', '2023-06-04 08:43:09'),
('C004', 'PG001', 'Kopi', 'JL.C No.07', '4.0', '2023-06-04 19:37:37', '2023-06-04 19:37:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_makanan`
--

CREATE TABLE `tb_makanan` (
  `ID_Makanan` varchar(5) NOT NULL,
  `ID_Restoran` varchar(5) DEFAULT NULL,
  `ID_Cafe` varchar(5) DEFAULT NULL,
  `Nama_Makanan` varchar(20) NOT NULL,
  `Harga_Makanan` int(10) NOT NULL,
  `Deskripsi_Makanan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_makanan`
--

INSERT INTO `tb_makanan` (`ID_Makanan`, `ID_Restoran`, `ID_Cafe`, `Nama_Makanan`, `Harga_Makanan`, `Deskripsi_Makanan`, `created_at`, `updated_at`) VALUES
('MC001', 'R001', 'C001', 'Mie', 16000, 'ini mie', '2023-06-04 19:40:23', '2023-06-04 19:43:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_minuman`
--

CREATE TABLE `tb_minuman` (
  `ID_Minuman` varchar(5) NOT NULL,
  `ID_Restoran` varchar(5) DEFAULT NULL,
  `ID_Cafe` varchar(5) DEFAULT NULL,
  `Nama_Minuman` varchar(20) NOT NULL,
  `Gambar` varchar(255) DEFAULT NULL,
  `Harga_Minuman` int(10) NOT NULL,
  `Deskripsi_Minuman` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_minuman`
--

INSERT INTO `tb_minuman` (`ID_Minuman`, `ID_Restoran`, `ID_Cafe`, `Nama_Minuman`, `Gambar`, `Harga_Minuman`, `Deskripsi_Minuman`, `created_at`, `updated_at`) VALUES
('MC001', 'R001', 'C001', 'Kopi', NULL, 7000, 'ini kopi', '2023-06-04 19:43:03', '2023-06-04 19:43:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `ID_Pegawai` varchar(5) NOT NULL,
  `ID_User` varchar(5) DEFAULT NULL,
  `Nama_Pegawai` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Alamat_Pegawai` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`ID_Pegawai`, `ID_User`, `Nama_Pegawai`, `Jenis_Kelamin`, `Alamat_Pegawai`, `created_at`, `updated_at`) VALUES
('PG001', 'U0001', 'Ridho', 'Laki-laki', 'Jl.B', '2023-05-24 06:27:57', '2023-06-04 01:39:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `ID_Pelanggan` varchar(5) NOT NULL,
  `ID_User` varchar(5) DEFAULT NULL,
  `Nama_Pelanggan` varchar(20) NOT NULL,
  `Jenis_Kelamin` varchar(10) NOT NULL,
  `Alamat_Pelanggan` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`ID_Pelanggan`, `ID_User`, `Nama_Pelanggan`, `Jenis_Kelamin`, `Alamat_Pelanggan`, `created_at`, `updated_at`) VALUES
('PB001', 'U0015', 'Alif', 'Laki-laki', 'Jl.A', '2023-06-03 07:37:24', '2023-06-03 23:44:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian_cafe`
--

CREATE TABLE `tb_penilaian_cafe` (
  `ID_Penilaian_Cafe` varchar(5) NOT NULL,
  `ID_Pelanggan` varchar(5) DEFAULT NULL,
  `ID_Cafe` varchar(5) DEFAULT NULL,
  `ID_Kriteria_Cafe` varchar(5) DEFAULT NULL,
  `Nilai_Penilaian_Cafe` decimal(2,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penilaian_cafe`
--

INSERT INTO `tb_penilaian_cafe` (`ID_Penilaian_Cafe`, `ID_Pelanggan`, `ID_Cafe`, `ID_Kriteria_Cafe`, `Nilai_Penilaian_Cafe`, `created_at`, `updated_at`) VALUES
('PC001', 'PB001', 'C001', 'KC001', '5', '2023-06-04 04:24:51', '2023-06-04 04:27:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penilaian_restoran`
--

CREATE TABLE `tb_penilaian_restoran` (
  `ID_Penilaian_Restoran` varchar(5) NOT NULL,
  `ID_Pelanggan` varchar(5) DEFAULT NULL,
  `ID_Restoran` varchar(5) DEFAULT NULL,
  `ID_Kriteria_Restoran` varchar(5) DEFAULT NULL,
  `Nilai_Penilaian_Restoran` decimal(2,0) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penilaian_restoran`
--

INSERT INTO `tb_penilaian_restoran` (`ID_Penilaian_Restoran`, `ID_Pelanggan`, `ID_Restoran`, `ID_Kriteria_Restoran`, `Nilai_Penilaian_Restoran`, `created_at`, `updated_at`) VALUES
('PR001', 'PB001', 'R001', 'KR001', '3', '2023-06-03 05:16:25', '2023-06-04 04:38:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan_cafe`
--

CREATE TABLE `tb_pesanan_cafe` (
  `ID_Pesanan_Cafe` varchar(5) NOT NULL,
  `ID_Pelanggan` varchar(5) DEFAULT NULL,
  `ID_Cafe` varchar(5) DEFAULT NULL,
  `ID_Makanan` varchar(5) DEFAULT NULL,
  `ID_Minuman` varchar(5) DEFAULT NULL,
  `Jumlah_Makanan` int(2) NOT NULL,
  `Jumlah_Minuman` int(2) NOT NULL,
  `Tanggal_Pesan` varchar(20) NOT NULL,
  `Total_Harga` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan_restoran`
--

CREATE TABLE `tb_pesanan_restoran` (
  `ID_Pesanan_Restoran` varchar(5) NOT NULL,
  `ID_Pelanggan` varchar(5) DEFAULT NULL,
  `ID_Restoran` varchar(5) DEFAULT NULL,
  `ID_Makanan` varchar(5) DEFAULT NULL,
  `ID_Minuman` varchar(5) DEFAULT NULL,
  `Jumlah_Makanan` int(2) NOT NULL,
  `Jumlah_Minuman` int(2) NOT NULL,
  `Tanggal_Pesanan` varchar(20) NOT NULL,
  `Total_Harga` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pesanan_restoran`
--

INSERT INTO `tb_pesanan_restoran` (`ID_Pesanan_Restoran`, `ID_Pelanggan`, `ID_Restoran`, `ID_Makanan`, `ID_Minuman`, `Jumlah_Makanan`, `Jumlah_Minuman`, `Tanggal_Pesanan`, `Total_Harga`, `created_at`, `updated_at`) VALUES
('PR001', 'PB001', 'R001', 'MC001', 'MC001', 4, 6, '5 juni 2023', 100000, '2023-06-04 19:55:58', '2023-06-04 19:55:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_restoran`
--

CREATE TABLE `tb_restoran` (
  `ID_Restoran` varchar(5) NOT NULL,
  `ID_Pegawai` varchar(5) DEFAULT NULL,
  `Nama_Restoran` varchar(20) NOT NULL,
  `Alamat_Restoran` varchar(50) NOT NULL,
  `Rating_Restoran` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_restoran`
--

INSERT INTO `tb_restoran` (`ID_Restoran`, `ID_Pegawai`, `Nama_Restoran`, `Alamat_Restoran`, `Rating_Restoran`, `created_at`, `updated_at`) VALUES
('R001', 'PG001', 'MAKAN', 'JL.B', '4.0', '2023-05-24 02:17:56', '2023-06-04 02:06:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `ID_User` varchar(5) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Pilihan` varchar(10) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`ID_User`, `Username`, `Password`, `Pilihan`, `updated_at`, `created_at`) VALUES
('U0001', 'Zen', 'zen', 'Pegawai', '2023-06-04 01:34:46', '2023-06-04 01:32:29'),
('U0002', 'Ali', 'ali', 'Pegawai', '2023-06-04 01:34:38', '2023-06-04 01:30:56'),
('U0003', 'Rido', 'gwer', 'Pegawai', '2023-06-04 01:34:52', '2023-06-04 01:33:13'),
('U0004', 'Angga', 'angg', 'Pembeli', '2023-06-04 01:35:02', '2023-06-04 01:33:32'),
('U0005', 'Ria', 'afe', 'Pembeli', '2023-06-04 01:36:48', '2023-06-04 01:36:48'),
('U0006', 'Yoga', 'kdej', 'Pembeli', '2023-06-04 01:37:09', '2023-06-04 01:37:09'),
('U0010', 'Ari', 'akbar', 'Pegawai', '2023-05-24 00:16:27', '2023-05-24 00:16:16'),
('U0012', 'Ari', 'aria', 'Pegawai', '2023-05-23 22:44:29', '2023-05-23 22:44:29'),
('U0014', 'akbar2', 'akbar', 'Pegawai', '2023-05-24 00:09:39', '2023-05-23 22:51:16'),
('U0015', 'akbar', 'aria', 'Pegawai', '2023-05-24 00:08:03', '2023-05-23 22:55:19'),
('U0020', 'akbar1', 'sgree', 'Pegawai', '2023-05-24 00:13:36', '2023-05-24 00:13:36');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kriteria_cafe`
--
ALTER TABLE `kriteria_cafe`
  ADD PRIMARY KEY (`ID_Kriteria_Cafe`);

--
-- Indeks untuk tabel `kriteria_restoran`
--
ALTER TABLE `kriteria_restoran`
  ADD PRIMARY KEY (`ID_Kriteria_Restoran`);

--
-- Indeks untuk tabel `tb_cafe`
--
ALTER TABLE `tb_cafe`
  ADD PRIMARY KEY (`ID_Cafe`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Indeks untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD PRIMARY KEY (`ID_Makanan`),
  ADD KEY `ID_Restoran` (`ID_Restoran`),
  ADD KEY `ID_Cafe` (`ID_Cafe`);

--
-- Indeks untuk tabel `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD PRIMARY KEY (`ID_Minuman`),
  ADD KEY `ID_Restoran` (`ID_Restoran`),
  ADD KEY `ID_Cafe` (`ID_Cafe`);

--
-- Indeks untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`ID_Pegawai`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`ID_Pelanggan`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Indeks untuk tabel `tb_penilaian_cafe`
--
ALTER TABLE `tb_penilaian_cafe`
  ADD PRIMARY KEY (`ID_Penilaian_Cafe`),
  ADD KEY `ID_Cafe` (`ID_Cafe`),
  ADD KEY `ID_Kriteria_Cafe` (`ID_Kriteria_Cafe`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indeks untuk tabel `tb_penilaian_restoran`
--
ALTER TABLE `tb_penilaian_restoran`
  ADD PRIMARY KEY (`ID_Penilaian_Restoran`),
  ADD KEY `ID_Restoran` (`ID_Restoran`),
  ADD KEY `ID_Kriteria_Restoran` (`ID_Kriteria_Restoran`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`);

--
-- Indeks untuk tabel `tb_pesanan_cafe`
--
ALTER TABLE `tb_pesanan_cafe`
  ADD PRIMARY KEY (`ID_Pesanan_Cafe`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`),
  ADD KEY `ID_Cafe` (`ID_Cafe`),
  ADD KEY `ID_Makanan` (`ID_Makanan`),
  ADD KEY `ID_Minuman` (`ID_Minuman`);

--
-- Indeks untuk tabel `tb_pesanan_restoran`
--
ALTER TABLE `tb_pesanan_restoran`
  ADD PRIMARY KEY (`ID_Pesanan_Restoran`),
  ADD KEY `ID_Pelanggan` (`ID_Pelanggan`),
  ADD KEY `ID_Restoran` (`ID_Makanan`),
  ADD KEY `ID_Cafe` (`ID_Minuman`),
  ADD KEY `ID_Makanan` (`ID_Makanan`),
  ADD KEY `ID_Minuman` (`ID_Minuman`),
  ADD KEY `ID_Restoran_2` (`ID_Restoran`);

--
-- Indeks untuk tabel `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD PRIMARY KEY (`ID_Restoran`),
  ADD KEY `ID_Pegawai` (`ID_Pegawai`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`ID_User`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_cafe`
--
ALTER TABLE `tb_cafe`
  ADD CONSTRAINT `tb_cafe_ibfk_1` FOREIGN KEY (`ID_Pegawai`) REFERENCES `tb_pegawai` (`ID_Pegawai`);

--
-- Ketidakleluasaan untuk tabel `tb_makanan`
--
ALTER TABLE `tb_makanan`
  ADD CONSTRAINT `tb_makanan_ibfk_1` FOREIGN KEY (`ID_Cafe`) REFERENCES `tb_cafe` (`ID_Cafe`),
  ADD CONSTRAINT `tb_makanan_ibfk_2` FOREIGN KEY (`ID_Restoran`) REFERENCES `tb_restoran` (`ID_Restoran`);

--
-- Ketidakleluasaan untuk tabel `tb_minuman`
--
ALTER TABLE `tb_minuman`
  ADD CONSTRAINT `tb_minuman_ibfk_1` FOREIGN KEY (`ID_Cafe`) REFERENCES `tb_cafe` (`ID_Cafe`),
  ADD CONSTRAINT `tb_minuman_ibfk_2` FOREIGN KEY (`ID_Restoran`) REFERENCES `tb_restoran` (`ID_Restoran`);

--
-- Ketidakleluasaan untuk tabel `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD CONSTRAINT `tb_pegawai_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `tb_user` (`ID_User`);

--
-- Ketidakleluasaan untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD CONSTRAINT `tb_pelanggan_ibfk_1` FOREIGN KEY (`ID_User`) REFERENCES `tb_user` (`ID_User`);

--
-- Ketidakleluasaan untuk tabel `tb_penilaian_cafe`
--
ALTER TABLE `tb_penilaian_cafe`
  ADD CONSTRAINT `tb_penilaian_cafe_ibfk_1` FOREIGN KEY (`ID_Kriteria_Cafe`) REFERENCES `kriteria_cafe` (`ID_Kriteria_Cafe`),
  ADD CONSTRAINT `tb_penilaian_cafe_ibfk_2` FOREIGN KEY (`ID_Cafe`) REFERENCES `tb_cafe` (`ID_Cafe`),
  ADD CONSTRAINT `tb_penilaian_cafe_ibfk_3` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `tb_pelanggan` (`ID_Pelanggan`);

--
-- Ketidakleluasaan untuk tabel `tb_penilaian_restoran`
--
ALTER TABLE `tb_penilaian_restoran`
  ADD CONSTRAINT `tb_penilaian_restoran_ibfk_1` FOREIGN KEY (`ID_Kriteria_Restoran`) REFERENCES `kriteria_restoran` (`ID_Kriteria_Restoran`),
  ADD CONSTRAINT `tb_penilaian_restoran_ibfk_2` FOREIGN KEY (`ID_Restoran`) REFERENCES `tb_restoran` (`ID_Restoran`),
  ADD CONSTRAINT `tb_penilaian_restoran_ibfk_3` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `tb_pelanggan` (`ID_Pelanggan`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan_cafe`
--
ALTER TABLE `tb_pesanan_cafe`
  ADD CONSTRAINT `tb_pesanan_cafe_ibfk_1` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `tb_pelanggan` (`ID_Pelanggan`),
  ADD CONSTRAINT `tb_pesanan_cafe_ibfk_2` FOREIGN KEY (`ID_Cafe`) REFERENCES `tb_cafe` (`ID_Cafe`),
  ADD CONSTRAINT `tb_pesanan_cafe_ibfk_3` FOREIGN KEY (`ID_Makanan`) REFERENCES `tb_makanan` (`ID_Makanan`),
  ADD CONSTRAINT `tb_pesanan_cafe_ibfk_4` FOREIGN KEY (`ID_Minuman`) REFERENCES `tb_minuman` (`ID_Minuman`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan_restoran`
--
ALTER TABLE `tb_pesanan_restoran`
  ADD CONSTRAINT `tb_pesanan_restoran_ibfk_1` FOREIGN KEY (`ID_Makanan`) REFERENCES `tb_makanan` (`ID_Makanan`),
  ADD CONSTRAINT `tb_pesanan_restoran_ibfk_2` FOREIGN KEY (`ID_Minuman`) REFERENCES `tb_minuman` (`ID_Minuman`),
  ADD CONSTRAINT `tb_pesanan_restoran_ibfk_3` FOREIGN KEY (`ID_Pelanggan`) REFERENCES `tb_pelanggan` (`ID_Pelanggan`),
  ADD CONSTRAINT `tb_pesanan_restoran_ibfk_4` FOREIGN KEY (`ID_Restoran`) REFERENCES `tb_restoran` (`ID_Restoran`);

--
-- Ketidakleluasaan untuk tabel `tb_restoran`
--
ALTER TABLE `tb_restoran`
  ADD CONSTRAINT `tb_restoran_ibfk_1` FOREIGN KEY (`ID_Pegawai`) REFERENCES `tb_pegawai` (`ID_Pegawai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
