-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 07.37
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
-- Database: `klinik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `krt_pasien`
--

CREATE TABLE `krt_pasien` (
  `id` int(11) NOT NULL,
  `kode` varchar(6) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `usia` varchar(3) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `tglgabung` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `krt_pasien`
--

INSERT INTO `krt_pasien` (`id`, `kode`, `nama`, `usia`, `alamat`, `tglgabung`) VALUES
(1, 'WM001', 'Rafasya Zayyan Nararya', '20', 'Kisaran', '2024-06-22'),
(2, 'WM002', 'Arabella Queenza Adistha', '18', 'Kisaran', '2024-06-22'),
(4, 'WM003', 'Nathan Noel Abhinarya', '22', 'Kisaran', '2024-06-23'),
(5, 'WM004', 'Medina Anala Raymond', '27', 'Kisaran', '2024-06-20'),
(6, 'WM005', 'Kinanti Zaviya Anarya', '8', 'Kisaran', '2024-06-24'),
(7, 'WM006', 'Zayyan Tahta Valerian', '17', 'Kisaran', '2024-06-24'),
(8, 'WM007', 'Ananta Zavier', '5', 'Kisaran', '2024-06-24'),
(9, 'WM008', 'Zaquena Anatastasya', '24', 'Kisaran', '2024-06-24'),
(10, 'WM009', 'Winanta Candra Wijaya', '26', 'Kisaran', '2024-06-24'),
(11, 'WM010', 'Rinjani Divya Zelene', '20', 'Kisaran', '2024-06-24'),
(12, 'WM011', 'Irma Yanti', '19', 'Tanjung Balai', '2024-06-24'),
(13, 'WM012', 'Putri Senja Nirwana', '20', 'Kisaran', '2024-07-01'),
(14, 'WM013', 'Maratama Azka Wirya', '35', 'Kisaran', '2024-07-01'),
(15, 'WM015', 'Muhammad Hamzah', '3', 'Sentang', '2024-07-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `fullname`, `username`, `password`) VALUES
(1, 'Administrator Klinik Widyatama Medika', 'admin', 'adminwm01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_bersalin`
--

CREATE TABLE `tb_bersalin` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(125) NOT NULL,
  `dokter` varchar(125) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_bersalin`
--

INSERT INTO `tb_bersalin` (`id`, `nama_pasien`, `dokter`, `kamar`, `tgl_masuk`, `tgl_keluar`, `biaya`) VALUES
(5, 'Medina Anala Raymond', 'Ayana Syahira, S.Keb', 'D01', '2024-06-24', '2024-06-24', 'Rp. 1.000.000'),
(6, 'Irma Yanti', 'Ayana Syahira, S.Keb', 'D01', '2024-06-24', '2024-06-25', 'Rp. 1.300.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_dokter`
--

CREATE TABLE `tb_dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(125) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `sip` varchar(30) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_dokter`
--

INSERT INTO `tb_dokter` (`id`, `nama`, `keterangan`, `sip`, `alamat`, `nohp`) VALUES
(2, 'dr. kyura Elshanum Asmaraja, S.Ked', 'Dokter Umum', 'Setiap Hari', 'Kisaran', '081234241454'),
(3, 'dr. Jevian Muhammad Abimaza, S.Ked', 'Dokter Umum', 'Setiap Hari', 'Kisaran', '081324425400'),
(6, 'dr. Arcila Jenaira Halmahera, Sp.OG', 'Dokter Kandungan', 'Senin - Rabu', 'Kisaran', '082312212501'),
(7, 'dr. Benedicto Rio Kalvari, Sp.KGA', 'Dokter Gigi', 'Senin - Rabu', 'Kisaran', '081323517266'),
(9, 'Ayana Syahira, S.Keb', 'Bidan', 'Setiap Hari', 'Kisaran', '081234211515');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id` int(11) NOT NULL,
  `kd_kamar` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `letak` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_kamar`
--

INSERT INTO `tb_kamar` (`id`, `kd_kamar`, `nama`, `letak`) VALUES
(1, 'C01', 'Cassia 001', 'Lantai 2'),
(2, 'C02', 'Cassia 002', 'Lantai 2'),
(4, 'S01', 'Salvia 001', 'Lantai 2'),
(7, 'D01', 'Diantha 001', 'Lantai 1'),
(9, 'D02', 'Diantha 002', 'Lantai 1'),
(10, 'S02', 'Salvia 002', 'Lantai 2'),
(11, 'D03', 'Diantha 03', 'Lantai 1'),
(12, 'S03', 'Salvia 003', 'Lantai 2'),
(13, 'D04', 'Diantha 004', 'Lantai 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_periksa`
--

CREATE TABLE `tb_periksa` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(125) NOT NULL,
  `tgl` date NOT NULL,
  `ket` varchar(255) NOT NULL,
  `dokter` varchar(125) NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_periksa`
--

INSERT INTO `tb_periksa` (`id`, `nama_pasien`, `tgl`, `ket`, `dokter`, `biaya`) VALUES
(6, 'Arabella Queenza Adistha', '2024-06-23', 'Demam, Flu, Alergi.', 'dr. kyura Elshanum Asmaraja, S.Ked', 'Rp.120.000'),
(7, 'Rafasya Zayyan Nararya', '2024-06-23', 'Alergi, flu.', 'dr. Jevian Muhammad Abimaza, S.Ked', 'Rp. 80.000'),
(9, 'Kinanti Zaviya Anarya', '2024-06-24', 'Cabut Gigi', 'dr. Benedicto Rio Kalvari, Sp.KGA', 'Rp. 250.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rawat`
--

CREATE TABLE `tb_rawat` (
  `id` int(11) NOT NULL,
  `nama_pasien` varchar(125) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `dokter` varchar(125) NOT NULL,
  `kamar` varchar(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `biaya` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_rawat`
--

INSERT INTO `tb_rawat` (`id`, `nama_pasien`, `keterangan`, `dokter`, `kamar`, `tgl_masuk`, `tgl_keluar`, `biaya`) VALUES
(1, 'Nathan Noel Abhinarya', 'Demam berdarah', 'dr. kyura Elshanum Asmaraja, S.Ked', 'C01', '2024-06-23', '2024-06-25', 'Rp. 800.000'),
(3, 'Putri Senja Nirwana', 'Keracunan Makanan', 'dr. Jevian Muhammad Abimaza, S.Ked', 'S01', '2024-07-01', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `krt_pasien`
--
ALTER TABLE `krt_pasien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_bersalin`
--
ALTER TABLE `tb_bersalin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `kamar` (`kamar`);

--
-- Indeks untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kd_kamar` (`kd_kamar`);

--
-- Indeks untuk tabel `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_pasien` (`nama_pasien`);

--
-- Indeks untuk tabel `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_pasien` (`nama_pasien`),
  ADD KEY `kamar` (`kamar`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `krt_pasien`
--
ALTER TABLE `krt_pasien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_bersalin`
--
ALTER TABLE `tb_bersalin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_periksa`
--
ALTER TABLE `tb_periksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_rawat`
--
ALTER TABLE `tb_rawat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_bersalin`
--
ALTER TABLE `tb_bersalin`
  ADD CONSTRAINT `tb_bersalin_ibfk_1` FOREIGN KEY (`nama_pasien`) REFERENCES `krt_pasien` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_bersalin_ibfk_2` FOREIGN KEY (`kamar`) REFERENCES `tb_kamar` (`kd_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_periksa`
--
ALTER TABLE `tb_periksa`
  ADD CONSTRAINT `tb_periksa_ibfk_1` FOREIGN KEY (`nama_pasien`) REFERENCES `krt_pasien` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_rawat`
--
ALTER TABLE `tb_rawat`
  ADD CONSTRAINT `tb_rawat_ibfk_1` FOREIGN KEY (`nama_pasien`) REFERENCES `krt_pasien` (`nama`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rawat_ibfk_2` FOREIGN KEY (`kamar`) REFERENCES `tb_kamar` (`kd_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
