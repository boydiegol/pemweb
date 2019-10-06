-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Sep 2019 pada 14.32
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pribadi`
--

CREATE TABLE `data_pribadi` (
  `id_data_pribadi` tinyint(4) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `intro` text NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `umur` tinyint(4) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kota` varchar(15) NOT NULL,
  `telepon` int(12) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pribadi`
--

INSERT INTO `data_pribadi` (`id_data_pribadi`, `nama`, `jurusan`, `intro`, `ttl`, `umur`, `alamat`, `kota`, `telepon`, `jenis_kelamin`, `agama`) VALUES
(3, 'Boy', 'FIK', 'lorem ipsum', 'Surabaya, 16 Mei 199', 20, 'Surabaya', 'Surabaya', 2147483647, 'Laki-laki', 'Islam');

-- --------------------------------------------------------

--
-- Struktur dari tabel `matkul1`
--

CREATE TABLE `matkul1` (
  `id_matkul1` tinyint(4) NOT NULL,
  `id_data_pribadi` tinyint(4) NOT NULL,
  `nama1_matkul1` varchar(20) NOT NULL,
  `nama2_matkul1` varchar(20) NOT NULL,
  `nama3_matkul1` varchar(20) NOT NULL,
  `nama4_matkul1` varchar(20) NOT NULL,
  `nama5_matkul1` varchar(20) NOT NULL,
  `nama6_matkul1` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `matkul1`
--

INSERT INTO `matkul1` (`id_matkul1`, `id_data_pribadi`, `nama1_matkul1`, `nama2_matkul1`, `nama3_matkul1`, `nama4_matkul1`, `nama5_matkul1`, `nama6_matkul1`) VALUES
(1, 3, 'Pemdas', 'Algodas', 'B. Inggris', 'Sisdig', 'PSI', 'Matdis');

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat_pendidikan`
--

CREATE TABLE `riwayat_pendidikan` (
  `id_riwayat` tinyint(4) NOT NULL,
  `id_data_pribadi` tinyint(4) NOT NULL,
  `lulus_sd` smallint(4) NOT NULL,
  `nama_sd` varchar(25) NOT NULL,
  `kota_sd` varchar(15) NOT NULL,
  `lulus_smp` smallint(4) NOT NULL,
  `nama_smp` varchar(25) NOT NULL,
  `kota_smp` varchar(15) NOT NULL,
  `lulus_sma` smallint(4) NOT NULL,
  `nama_sma` varchar(25) NOT NULL,
  `kota_sma` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `riwayat_pendidikan`
--

INSERT INTO `riwayat_pendidikan` (`id_riwayat`, `id_data_pribadi`, `lulus_sd`, `nama_sd`, `kota_sd`, `lulus_smp`, `nama_smp`, `kota_smp`, `lulus_sma`, `nama_sma`, `kota_sma`) VALUES
(3, 3, 2013, 'SDN 1', 'Surabaya', 2015, 'SMPN 21', 'Surabaya', 2017, 'SMA Kartika Wijaya', 'Surabaya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`id_data_pribadi`);

--
-- Indexes for table `matkul1`
--
ALTER TABLE `matkul1`
  ADD PRIMARY KEY (`id_matkul1`);

--
-- Indexes for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  ADD PRIMARY KEY (`id_riwayat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pribadi`
--
ALTER TABLE `data_pribadi`
  MODIFY `id_data_pribadi` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `matkul1`
--
ALTER TABLE `matkul1`
  MODIFY `id_matkul1` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `riwayat_pendidikan`
--
ALTER TABLE `riwayat_pendidikan`
  MODIFY `id_riwayat` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
