-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2021 pada 08.16
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_walet`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `alternatif` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `alternatif`) VALUES
(1, 'Tikke Raya'),
(2, 'Sarudu'),
(3, 'Sarja'),
(4, 'Bambaira'),
(5, 'Baras'),
(6, 'Pasang Kayu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_hasil_analisis`
--

CREATE TABLE `tb_hasil_analisis` (
  `id_analisis` int(11) NOT NULL,
  `nilai_total` decimal(4,2) DEFAULT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_hasil_analisis`
--

INSERT INTO `tb_hasil_analisis` (`id_analisis`, `nilai_total`, `id_alternatif`, `id_user`) VALUES
(147, '22.00', 1, 1),
(148, '18.75', 2, 1),
(149, '18.25', 3, 1),
(150, '16.50', 4, 1),
(151, '20.75', 5, 1),
(152, '18.75', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban_user`
--

CREATE TABLE `tb_jawaban_user` (
  `id_jawaban` int(11) NOT NULL,
  `c_1` int(11) DEFAULT NULL,
  `c_2` int(11) DEFAULT NULL,
  `c_3` int(11) DEFAULT NULL,
  `c_4` int(11) DEFAULT NULL,
  `c_5` int(11) DEFAULT NULL,
  `c_6` int(11) DEFAULT NULL,
  `c_7` int(11) DEFAULT NULL,
  `c_8` int(11) DEFAULT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jawaban_user`
--

INSERT INTO `tb_jawaban_user` (`id_jawaban`, `c_1`, `c_2`, `c_3`, `c_4`, `c_5`, `c_6`, `c_7`, `c_8`, `id_alternatif`, `id_user`) VALUES
(1, 4, 1, 4, 2, 1, 3, 3, 2, 1, 1),
(2, 2, 4, 1, 1, 3, 4, 2, 1, 2, 1),
(3, 3, 4, 2, 2, 1, 3, 2, 1, 3, 1),
(4, 2, 3, 1, 1, 2, 2, 4, 1, 4, 1),
(5, 1, 1, 2, 4, 3, 4, 2, 2, 5, 1),
(6, 3, 4, 3, 2, 4, 1, 1, 1, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kriteria`
--

CREATE TABLE `tb_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `kriteria` text DEFAULT NULL,
  `status` enum('benefit','cost') NOT NULL,
  `kode` varchar(225) NOT NULL,
  `rating_kepentingan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kriteria`
--

INSERT INTO `tb_kriteria` (`id_kriteria`, `kriteria`, `status`, `kode`, `rating_kepentingan`) VALUES
(1, 'Ketinggian', 'benefit', 'c_1', 4),
(2, 'Pusat Keramaian', 'benefit', 'c_2', 3),
(3, 'Kawasan Sentra', 'benefit', 'c_3', 4),
(4, 'Curah Hujan', 'benefit', 'c_4', 3),
(5, 'Persaingan', 'benefit', 'c_5', 4),
(6, 'Sumber Makanan', 'benefit', 'c_6', 5),
(7, 'Sumber Air', 'benefit', 'c_7', 4),
(8, 'Harga', 'cost', 'c_8', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_matrix_terminalisasi_user`
--

CREATE TABLE `tb_matrix_terminalisasi_user` (
  `id_matrix_term` int(11) NOT NULL,
  `c_1` decimal(4,2) DEFAULT NULL,
  `c_2` decimal(4,2) DEFAULT NULL,
  `c_3` decimal(4,2) DEFAULT NULL,
  `c_4` decimal(4,2) DEFAULT NULL,
  `c_5` decimal(4,2) DEFAULT NULL,
  `c_6` decimal(4,2) DEFAULT NULL,
  `c_7` decimal(4,2) DEFAULT NULL,
  `c_8` decimal(4,2) DEFAULT NULL,
  `id_alternatif` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_matrix_terminalisasi_user`
--

INSERT INTO `tb_matrix_terminalisasi_user` (`id_matrix_term`, `c_1`, `c_2`, `c_3`, `c_4`, `c_5`, `c_6`, `c_7`, `c_8`, `id_alternatif`, `id_user`) VALUES
(15, '1.00', '0.25', '1.00', '0.50', '0.25', '0.75', '0.75', '2.00', 1, 1),
(16, '0.50', '1.00', '0.25', '0.25', '0.75', '1.00', '0.50', '1.00', 2, 1),
(17, '0.75', '1.00', '0.50', '0.50', '0.25', '0.75', '0.50', '1.00', 3, 1),
(18, '0.50', '0.75', '0.25', '0.25', '0.50', '0.50', '1.00', '1.00', 4, 1),
(19, '0.25', '0.25', '0.50', '1.00', '0.75', '1.00', '0.50', '2.00', 5, 1),
(20, '0.75', '1.00', '0.75', '0.50', '1.00', '0.25', '0.25', '1.00', 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pilihan`
--

CREATE TABLE `tb_pilihan` (
  `id_pilihan` int(11) NOT NULL,
  `pilihan` text DEFAULT NULL,
  `bobot` int(11) DEFAULT NULL,
  `id_kriteria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pilihan`
--

INSERT INTO `tb_pilihan` (`id_pilihan`, `pilihan`, `bobot`, `id_kriteria`) VALUES
(1, 'Sangat Baik (750 mdpl - 1000 mdpl)', 4, 1),
(2, 'Baik (500 mdpl - 750 mdpl)', 3, 1),
(3, 'Cukup (250 mdpl - 500 mdpl)', 2, 1),
(4, 'Kurang (0 mdpl - 250 mdpl)', 1, 1),
(5, 'Sangat Baik (>300 km)', 4, 2),
(6, 'Baik (200 km - 300 km)', 3, 2),
(7, 'Cukup (100 km - 200 km)', 2, 2),
(8, 'Kurang (20 km - 100 km)', 1, 2),
(9, 'Sangat Baik (1 km -25 km)', 4, 3),
(10, 'Baik (25 km - 50 km)', 3, 3),
(11, 'Cukup (50 km - 75 km)', 2, 3),
(12, 'Kurang (75 km - 100 km)', 1, 3),
(13, 'Sangat Baik (>247 km)', 4, 4),
(14, 'Baik (247 km - 177 km)', 3, 4),
(15, 'Cukup (177 km - 107 km)', 2, 4),
(16, 'Kurang (107 km - 37 km)', 1, 4),
(17, 'Sangat Baik (5 - 10)', 4, 5),
(18, 'Baik (10 - 15)', 3, 5),
(19, 'Cukup (15 - 20)', 2, 5),
(20, 'Kurang (>20)', 1, 5),
(21, 'Sangat Baik (1 km - 7.5 km)', 4, 6),
(22, 'Baik (7.5 km - 15 km)', 3, 6),
(23, 'Cukup (15 km - 22.5 km)', 2, 6),
(24, 'Kurang (22.5 km - 30 km)', 1, 6),
(25, 'Sangat Baik (1 km - 7.5 km)', 4, 7),
(26, 'Baik (7.5 km - 15 km)', 3, 7),
(27, 'Cukup (15 km - 22.5 km)', 2, 7),
(28, 'Kurang (22.5 km - 30 km)', 1, 7),
(29, 'Sangat Baik (110 jt - 150 jt)', 4, 8),
(30, 'Baik (90 jt - 110 jt)', 3, 8),
(31, 'Cukup (70 juta - 90 jt)', 2, 8),
(32, 'Kurang (50 juta - 70 juta)', 1, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `level` enum('admin','user') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'fhikar', '12345678', 'user'),
(2, 'via', '12345678', 'user'),
(3, 'admin', 'admin', 'admin'),
(4, 'meow', 'meow', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indeks untuk tabel `tb_hasil_analisis`
--
ALTER TABLE `tb_hasil_analisis`
  ADD PRIMARY KEY (`id_analisis`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_jawaban_user`
--
ALTER TABLE `tb_jawaban_user`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indeks untuk tabel `tb_matrix_terminalisasi_user`
--
ALTER TABLE `tb_matrix_terminalisasi_user`
  ADD PRIMARY KEY (`id_matrix_term`),
  ADD KEY `id_alternatif` (`id_alternatif`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  ADD PRIMARY KEY (`id_pilihan`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_hasil_analisis`
--
ALTER TABLE `tb_hasil_analisis`
  MODIFY `id_analisis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT untuk tabel `tb_jawaban_user`
--
ALTER TABLE `tb_jawaban_user`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_kriteria`
--
ALTER TABLE `tb_kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `tb_matrix_terminalisasi_user`
--
ALTER TABLE `tb_matrix_terminalisasi_user`
  MODIFY `id_matrix_term` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  MODIFY `id_pilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_hasil_analisis`
--
ALTER TABLE `tb_hasil_analisis`
  ADD CONSTRAINT `tb_hasil_analisis_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `tb_hasil_analisis_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_jawaban_user`
--
ALTER TABLE `tb_jawaban_user`
  ADD CONSTRAINT `tb_jawaban_user_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `tb_jawaban_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_matrix_terminalisasi_user`
--
ALTER TABLE `tb_matrix_terminalisasi_user`
  ADD CONSTRAINT `tb_matrix_terminalisasi_user_ibfk_1` FOREIGN KEY (`id_alternatif`) REFERENCES `tb_alternatif` (`id_alternatif`),
  ADD CONSTRAINT `tb_matrix_terminalisasi_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);

--
-- Ketidakleluasaan untuk tabel `tb_pilihan`
--
ALTER TABLE `tb_pilihan`
  ADD CONSTRAINT `tb_pilihan_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `tb_kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
