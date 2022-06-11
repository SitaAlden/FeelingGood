-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2021 pada 22.46
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.3.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_feelinggood`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `chat`
--

CREATE TABLE `chat` (
  `nama` varchar(12) NOT NULL,
  `email` varchar(35) NOT NULL,
  `komen` varchar(120) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `cek` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_pertemuan`
--

CREATE TABLE `jadwal_pertemuan` (
  `id_jadwal` int(20) NOT NULL,
  `no_pengguna` varchar(20) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `id_psikolog` varchar(20) NOT NULL,
  `nama_psikolog` varchar(30) NOT NULL,
  `no_telp_psikolog` varchar(15) NOT NULL,
  `jadwal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal_pertemuan`
--

INSERT INTO `jadwal_pertemuan` (`id_jadwal`, `no_pengguna`, `nama_pengguna`, `no_wa`, `id_psikolog`, `nama_psikolog`, `no_telp_psikolog`, `jadwal`) VALUES
(1, '001', 'Sita Alden', '08988266306', '001', 'Dr. Lee Min Ho, S.Psi', '07688877666', '2021-05-31'),
(2, '002', 'Sisca Yuliantina', '098754678912', '007', 'Dr. Wilsen Wimpi, S.Psi', '01238877666', '2021-06-02'),
(3, '003', 'Salwa Nur Atifah', '088995467891', '004', 'Dr. Deva, S.Psi', '08988877666', '2021-06-23'),
(4, '004', 'Hilal Shafwanto', '088995467891', '008', 'Dr. Sakura, S.Psi', '07688877666', '2021-06-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(20) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `id_psikolog` varchar(20) NOT NULL,
  `nama_psikolog` varchar(30) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `username`, `no_wa`, `id_psikolog`, `nama_psikolog`, `catatan`) VALUES
(1, 'Alden', 'sitaalden@gmail.com', '08988266306', '005', 'Dr. Lee Min Ho, S.Psi', 'Overthingking, kecemasan dan kadang tidak percaya diri'),
(2, 'Elon Musk', 'Elon@gmail.com', '098754678912', '010', 'Dr. Wilsen Wimpi, S.Psi', 'Sedikit Cemas dan Banyak stress nya wkwk'),
(3, 'Joko', 'joko@gmail.com', '098754678912', '001', 'Dr. Zaki, S.Psi', 'Sedikit Cemas dan Banyak stress nya wkwk'),
(4, 'janji jiwa', 'janjijiwa@gmail.com', '09867543677', '007', 'Dr. Wilsen Wimpi, S.Psi', 'Gatau Sakit Apa, katanya di sia-sia in mulu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `no_pengguna` int(20) NOT NULL,
  `nama_lengkap` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_wa` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`no_pengguna`, `nama_lengkap`, `jenis_kelamin`, `tanggal_lahir`, `no_wa`, `email`, `password`) VALUES
(1, 'Sita Alden', 'Perempuan', '2001-05-24', '098754678912', 'Sitaalden@gmail.com', 'sitaal'),
(2, 'Yulianti', 'Perempuan', '2000-02-09', '09867543677', 'yulianti@gmail.com', 'yuli12345');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_level` int(20) NOT NULL,
  `level` enum('Admin','psikolog','pengguna') NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_level`, `level`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Admin', 'Sitaalden', 'sitaalden24', '123');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jadwal_pertemuan`
--
ALTER TABLE `jadwal_pertemuan`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`no_pengguna`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jadwal_pertemuan`
--
ALTER TABLE `jadwal_pertemuan`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `no_pengguna` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_level` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
