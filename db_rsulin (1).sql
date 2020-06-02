-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 02, 2020 at 06:41 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_rsulin`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_dokter` (
  `nip` varchar(25) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `awal_masuk` date NOT NULL,
  `pensiunan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kd_jadwal` char(5) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `normk` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_jadwal`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwalkaryawan`
--

CREATE TABLE IF NOT EXISTS `tb_jadwalkaryawan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kd_jadwalkaryawan` char(5) NOT NULL,
  `nipnik` varchar(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_jadwalkaryawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_karyawan`
--

CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kd_karyawan` char(5) NOT NULL,
  `nipnik` varchar(20) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `status` varchar(10) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `awal_masuk` date NOT NULL,
  `pensiunan` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_karyawan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(2) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`no`, `username`, `password`, `email`, `foto`, `level`) VALUES
(4, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 'liapratiwi98@gmail.com', '12.JPG', 1),
(6, 'ari', 'ac43724f16e9241d990427ab7c8f4228', 'aripembangunan@gmail.com', '12.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `normk` varchar(20) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` enum('P','L') NOT NULL,
  `klinis` varchar(100) NOT NULL,
  `ruangan` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tb_pasien`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_pemakaianfilm`
--

CREATE TABLE IF NOT EXISTS `tb_pemakaianfilm` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `merk_film` varchar(15) NOT NULL,
  `ukuran` varchar(10) NOT NULL,
  `normk` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `tb_pemakaianfilm`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `tb_pemeriksaan` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `no_pemeriksaan` char(5) NOT NULL,
  `jenis_pemeriksaan` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `tb_pemeriksaan`
--


-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE IF NOT EXISTS `tb_transaksi` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `kd_transaksi` char(5) NOT NULL,
  `normk` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_pemeriksaan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `status` varchar(10) NOT NULL,
  `rirj` varchar(15) NOT NULL,
  `biaya` double NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18446744073709551615 ;

--
-- Dumping data for table `tb_transaksi`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
