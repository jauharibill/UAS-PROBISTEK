-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2018 pada 11.50
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas-probistek`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'probistek'),
(2, 'probistek', '$2y$10$dTJhX4ThH0Y/wSgayUuffOzn/UhLZ8etM5kz4l0SQzyGc59Btcmeq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(55) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `NIM` int(9) NOT NULL,
  `email` varchar(55) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `NIM`, `email`, `jurusan`, `gambar`) VALUES
(2, 'Farica Devi Fatna', 171070001, 'faricadevi@gmail.com', 'English For Tourism', '5c1924d07eeef.png'),
(5, 'Ainul Ulumuddin', 171030003, 'aiynul178@gmail.com', 'Web Mobile Development', '5c192524398bb.png'),
(6, 'Diky Sevian Syah Fathomy', 171030011, 'akudiky25@gmail.com', 'Web Mobile Development', '5c192512a2096.png'),
(15, 'Muhammad Akbar Baharuddin Yusuf', 171030007, 'bhrdysf@gmail.com', 'Web Mobile Development', '5c1777e677115.png'),
(16, 'Afif Fakhruddin', 171030008, 'afiffakhruddin15@gmail.com', 'Web Mobile Development', '5c1922c517305.png'),
(17, 'Tahta Alfina Rahmatuka', 171070002, 'tahtakerajaan@gmail.com', 'English For Tourism', '5c1922f7dc6e7.png'),
(18, 'Ike Susanti Effendi', 171070003, 'kei.effendi@gmail.com', 'English For Tourism', '5c19231d5efa7.png'),
(19, 'Robi Fadlah', 171070005, 'robijones@gmail.com', 'English For Tourism', '5c1923458f25a.png'),
(20, 'Aulia Firdaus', 171070006, 'yayacalondokter@gmail.com', 'English For Tourism', '5c19238d4205e.png'),
(21, 'Mahbub Hasan Mubarok', 171070007, 'mahbubhasan@gmail.com', 'English For Tourism', '5c19243e4c4ec.png'),
(22, 'Rizky Ulayya Indra Allam', 171070004, 'kiki97@gmail.com', 'English For Tourism', '5c1924bd83cb9.png'),
(23, 'Dhani Yoga Prasetyo', 171030006, 'mbesterkutuk@gmail.com', 'Web Mobile Development', '5c1928ed6af7e.png'),
(24, 'Ahmad Mustafirudin', 171030012, 'mustafbaik@gmail.com', 'Web Mobile Development', '5c19293270152.png'),
(25, 'Wike Nafisah Febrina', 171030013, 'wikelope@gmail.com', 'Web Mobile Development', '5c19298dc651b.png'),
(26, 'Akhmad Iklil Maâ€™sum ', 171030014, 'iklilmlpubg@gmail.com', 'Web Mobile Development', '5c1929cc1ff40.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `staf`
--

CREATE TABLE `staf` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nip` int(11) NOT NULL,
  `jabatan` varchar(55) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `staf`
--

INSERT INTO `staf` (`id`, `nama`, `nip`, `jabatan`, `gambar`) VALUES
(1, 'Suhartono', 1001, 'Anak Magang', '5c2423b66c0e3.png'),
(3, 'Vion Age ', 1002, 'Tangan kanan Chief', '5c242494ba1c7.png'),
(5, 'Pak Rio de Janeiro', 1004, 'Serba Bisa', '5c247485b2222.png'),
(6, 'Kurniawati', 1003, 'Tangan kiri Chief', '5c24862c2b79a.png'),
(7, 'Mas Gusti', 1005, 'Pengajar', '5c249c300a011.png'),
(8, 'Mas Ayom', 1006, 'Pengajar', '5c249c41dfa20.png'),
(9, 'Pak Bill', 1007, 'Pengajar', '5c249c58dad3a.png'),
(10, 'Mbak Eni', 1008, 'Pengajar', '5c249c6b04f7f.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
