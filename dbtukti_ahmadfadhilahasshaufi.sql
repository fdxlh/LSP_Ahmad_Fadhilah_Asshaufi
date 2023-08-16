-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Waktu pembuatan: 16 Agu 2023 pada 08.30
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtukti_ahmadfadhilahasshaufi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa_ahmadfadhilahasshaufi`
--

CREATE TABLE `mahasiswa_ahmadfadhilahasshaufi` (
  `NIM` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal_lahir` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa_ahmadfadhilahasshaufi`
--

INSERT INTO `mahasiswa_ahmadfadhilahasshaufi` (`NIM`, `nama`, `tanggal_lahir`, `Alamat`) VALUES
('C040420056', 'Rahmat Jailani', '2001-12-03', 'Jl Awang'),
('C30320114', 'Ahmad Fadhilah Asshaufi', '16-01-2002', 'Jl. Pangeran');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'namaadmin', 'admin@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 1),
(2, 'Ahmad Fadhilah Asshaufi', 'fadhilahshaufi@gmail.com', 'fadhilah', '25d55ad283aa400af464c76d713c07ad', 'penulis', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna_ahmadfadhilahasshaufi`
--

CREATE TABLE `pengguna_ahmadfadhilahasshaufi` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) NOT NULL,
  `pengguna_email` varchar(255) NOT NULL,
  `pengguna_username` varchar(50) NOT NULL,
  `pengguna_password` varchar(255) NOT NULL,
  `pengguna_level` enum('admin','penulis') NOT NULL,
  `pengguna_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengguna_ahmadfadhilahasshaufi`
--

INSERT INTO `pengguna_ahmadfadhilahasshaufi` (`pengguna_id`, `pengguna_nama`, `pengguna_email`, `pengguna_username`, `pengguna_password`, `pengguna_level`, `pengguna_status`) VALUES
(1, 'namaadmin', 'admin@gmail.com', 'admin', '0192023a7bbd73250516f069df18b500', 'admin', 1),
(2, 'Ahmad Fadhilah Asshaufi', 'fadhilahshaufi@gmail.com', 'fadhilah', '25d55ad283aa400af464c76d713c07ad', 'penulis', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukm_ahmadfadhilahasshaufi`
--

CREATE TABLE `ukm_ahmadfadhilahasshaufi` (
  `ID` varchar(11) NOT NULL,
  `nama_ukm` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ukm_ahmadfadhilahasshaufi`
--

INSERT INTO `ukm_ahmadfadhilahasshaufi` (`ID`, `nama_ukm`, `deskripsi`) VALUES
('2', 'Dapoer Soimah', 'hebat'),
('3', 'UKS', 'jaga kesehatan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mahasiswa_ahmadfadhilahasshaufi`
--
ALTER TABLE `mahasiswa_ahmadfadhilahasshaufi`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `pengguna_ahmadfadhilahasshaufi`
--
ALTER TABLE `pengguna_ahmadfadhilahasshaufi`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `ukm_ahmadfadhilahasshaufi`
--
ALTER TABLE `ukm_ahmadfadhilahasshaufi`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pengguna_ahmadfadhilahasshaufi`
--
ALTER TABLE `pengguna_ahmadfadhilahasshaufi`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
