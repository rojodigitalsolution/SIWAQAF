-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2021 pada 16.01
-- Versi server: 10.1.30-MariaDB
-- Versi PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sigwakaf`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id_kelurahan` int(11) NOT NULL,
  `kelurahan` varchar(150) NOT NULL,
  `kode` varchar(20) NOT NULL,
  `warna` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id_kelurahan`, `kelurahan`, `kode`, `warna`) VALUES
(1, 'Karangasem', '#C2E8E9', '#c2e8e9'),
(2, 'Jajar', '#D8F0F2', '#d8f0f2'),
(3, 'Kerten', '#ABDFDD', '#abdfdd'),
(4, 'Purwosari', '#31A565', '#31a565'),
(5, 'Penumping', '#46B17E', '#46b17e'),
(6, 'Sriwedari', '#10803E', '#10803e'),
(9, 'Laweyan', '#90D4C6', '#90d4c6'),
(10, 'Bumi', '#EDF8FB', '#edf8fb'),
(11, 'Pajang', '#74C8AF', '#74c8af'),
(12, 'Panularan', '#5BBC98', '#5bbc98'),
(13, 'Sondakan', '#209451', '#209451');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `username`, `password`, `nama_user`, `email`, `jenis_kelamin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ismi Ana', 'ismiana@gmail.com', 'Female');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nadzhir`
--

CREATE TABLE `nadzhir` (
  `id_nadzhir` int(11) NOT NULL,
  `nadzhir` varchar(50) NOT NULL,
  `nik` int(17) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_lahir` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nadzhir`
--

INSERT INTO `nadzhir` (`id_nadzhir`, `nadzhir`, `nik`, `jenis_kelamin`, `tgl_lahir`, `tpt_lahir`, `agama`, `pekerjaan`, `alamat`) VALUES
(2, 'Nana', 12344567, 'P', '1985-10-12', 'Boyolali', 'Islam', 'Pegawai Swasta', 'Laweyan'),
(3, 'Okta', 12344637, 'P', '1981-11-06', 'Surabaya', 'Islam', 'Pegawai Sipil', 'Sriwedari'),
(4, 'Dinda', 12349789, 'P', '1983-12-12', 'Surabaya', 'Islam', 'Wiraswasta', 'Penumping'),
(5, 'Adit', 12345869, 'L', '1977-04-15', 'Riau', 'Islam', 'Pegawai Sipil', 'Jajar'),
(6, 'Dita', 12340988, 'P', '1984-03-10', 'Jakarta', 'Islam', 'Pegawai Swasta', 'Purwosari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wakaf`
--

CREATE TABLE `wakaf` (
  `id_wakaf` int(11) NOT NULL,
  `kelurahan` varchar(150) NOT NULL,
  `luas` int(11) NOT NULL,
  `penggunaan` varchar(50) NOT NULL,
  `wakif` varchar(50) NOT NULL,
  `nadzhir` varchar(50) NOT NULL,
  `no_sertifikat` varchar(50) NOT NULL,
  `tgl_sertifikat` date NOT NULL,
  `no_aiw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wakaf`
--

INSERT INTO `wakaf` (`id_wakaf`, `kelurahan`, `luas`, `penggunaan`, `wakif`, `nadzhir`, `no_sertifikat`, `tgl_sertifikat`, `no_aiw`) VALUES
(1, 'Karangasem', 1000, 'Masjid', 'Ilma', 'Nana', '1001001', '2009-07-11', '101'),
(2, 'Jajar', 90, 'Mushola', 'Rahman', 'Okta', '1001002', '2008-08-23', '102'),
(3, 'Kerten', 2000, 'Sekolah', 'Jojo', 'Dinda', '1001003', '2011-09-17', '103'),
(4, 'Purwosari', 10000, 'Pesantren', 'Lina', 'Adit', '1001004', '2010-10-09', '104'),
(5, 'Penumping', 2800, 'Panti Asuhan', 'Mega', 'Dita', '1001005', '2017-11-10', '105');

-- --------------------------------------------------------

--
-- Struktur dari tabel `wakif`
--

CREATE TABLE `wakif` (
  `id_wakif` int(11) NOT NULL,
  `wakif` varchar(50) NOT NULL,
  `nik` int(17) NOT NULL,
  `jenis_kelamin` varchar(2) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tpt_lahir` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wakif`
--

INSERT INTO `wakif` (`id_wakif`, `wakif`, `nik`, `jenis_kelamin`, `tgl_lahir`, `tpt_lahir`, `agama`, `pekerjaan`, `alamat`) VALUES
(2, 'Ilma', 12349999, 'P', '1970-09-15', 'Semarang', 'Islam', 'Wiraswasta', 'Kerten'),
(3, 'Rahman', 12356678, 'L', '1977-07-08', 'Bandung', 'Islam', 'Pedagang', 'Jajar'),
(4, 'Jojo', 12355436, 'L', '1960-01-14', 'Yogyakarta', 'Islam', 'Pegawai Swasta', 'Purwosari'),
(5, 'Lina', 12352352, 'P', '1980-05-20', 'Riau', 'Islam', 'Pegawai Swasta', 'Kerten'),
(6, 'Mega', 12354636, 'P', '1988-11-05', 'Bandung', 'Islam', 'Wiraswasta', 'Jajar');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id_kelurahan`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `nadzhir`
--
ALTER TABLE `nadzhir`
  ADD PRIMARY KEY (`id_nadzhir`);

--
-- Indeks untuk tabel `wakaf`
--
ALTER TABLE `wakaf`
  ADD PRIMARY KEY (`id_wakaf`);

--
-- Indeks untuk tabel `wakif`
--
ALTER TABLE `wakif`
  ADD PRIMARY KEY (`id_wakif`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id_kelurahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `nadzhir`
--
ALTER TABLE `nadzhir`
  MODIFY `id_nadzhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `wakaf`
--
ALTER TABLE `wakaf`
  MODIFY `id_wakaf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `wakif`
--
ALTER TABLE `wakif`
  MODIFY `id_wakif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
