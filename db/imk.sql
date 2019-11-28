-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 26, 2019 at 10:59 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Table structure for table `buah`
--

CREATE TABLE IF NOT EXISTS `buah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` int(11) NOT NULL,
  `nama_buah` varchar(100) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `produk_unggulan` varchar(10) NOT NULL,
  `harga` int(100) DEFAULT NULL,
  `status` varchar(10) NOT NULL,
  `stok` int(3) NOT NULL,
  `paling_dicari` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `buah`
--

INSERT INTO `buah` (`id`, `kategori`, `nama_buah`, `deskripsi`, `gambar`, `produk_unggulan`, `harga`, `status`, `stok`, `paling_dicari`) VALUES
(1, 1, 'Apel Fuji', 'Apel Fuji', 'buah/produk-terbaru/apel-fuji.jpg', 'tidak', 25000, 'baru', 100, 'tidak'),
(2, 1, 'Apel Washington', 'Apel Washington', 'buah/produk-terbaru/apel-washington.jpg', 'tidak', 60000, 'baru', 100, 'tidak'),
(3, 1, 'Kiwi', 'Buah Kiwi', 'buah/produk-terbaru/kiwi.jpg', 'tidak', 20000, 'baru', 90, 'tidak'),
(4, 1, 'Nenas', 'Buah Nenas Bangkinang', 'buah/produk-terbaru/nenas.jpg', 'tidak', 25000, 'baru', 75, 'tidak'),
(5, 1, 'Alpukat', 'Buah Alpukat', 'buah/produk-terbaru/pokat.jpg', 'tidak', 35000, 'baru', 99, 'tidak'),
(6, 1, 'Rambutan', 'Buah Rambutan Manis', 'buah/produk-terbaru/rambutan.jpg', 'tidak', 30000, 'baru', 89, 'tidak'),
(7, 2, 'Buah Naga', 'Buah Naga', 'buah/paling-banyak-dicari/buah-naga.jpeg', 'tidak', 21000, 'ada', 100, 'ya'),
(8, 2, 'Strawberry', 'Buah Stroberi', 'buah/paling-banyak-dicari/stroberi.jpg', 'tidak', 35000, 'ada', 99, 'ya'),
(9, 2, 'Melon', 'Buah Melon Segar', 'buah/paling-banyak-dicari/melon.jpg', 'tidak', 15000, 'ada', 75, 'ya'),
(10, 2, 'Markisa', 'Buah Markisa', 'buah/paling-banyak-dicari/markisa.jpg', 'tidak', 25000, 'ada', 50, 'ya'),
(11, 2, 'Pisang', 'Buah Pisang', 'buah/paling-banyak-dicari/pisang.jpg', 'tidak', 20000, 'ada', 150, 'ya'),
(12, 2, 'Pepaya', 'Buah Pepaya', 'buah/paling-banyak-dicari/pepaya.jpg', 'tidak', 17000, 'ada', 55, 'ya'),
(13, 3, 'Apel Royal Gala', 'Buah Apel Royal Gala Impor', 'buah/produk-unggulan/apel royal-gala-impor.jpg', 'ya', 55000, 'ada', 35, 'tidak'),
(14, 3, 'Blueberry', 'Buah Blueberry Impor', 'buah/produk-unggulan/blueberry.jpg', 'ya', 40000, 'ada', 60, 'tidak'),
(15, 3, 'Jeruk Valencia', 'Jeruk Valencia Impor enak', 'buah/produk-unggulan/jeruk-valencia.jpg', 'ya', 45000, 'ada', 55, 'tidak'),
(16, 3, 'Longan', 'Buah Longan', 'buah/produk-unggulan/longan.jpg', 'ya', 65000, 'ada', 200, 'tidak'),
(17, 4, 'Belimbing', 'Buah Belimbing', 'buah/lokal/belimbing.jpg', 'tidak', 15000, 'ada', 90, 'tidak'),
(18, 4, 'Duku', 'Buah Duku Manis', 'buah/lokal/duku.jpg', 'tidak', 8000, 'ada', 250, 'tidak'),
(19, 4, 'Kedondong', 'Buah kedondong', 'buah/lokal/kedondong.jpg', 'tidak', 10000, 'ada', 121, 'tidak'),
(20, 4, 'Salak', 'Buah Salak ', 'buah/lokal/salak.jpg', 'tidak', 15000, 'ada', 0, 'tidak'),
(21, 4, 'Jambu Air', 'Buah Jambu Air', 'buah/lokal/jambu-air.jpg', 'tidak', 20000, 'ada', 31, 'tidak'),
(22, 4, 'Durian', 'Kampung Durian Runtuh', 'buah/lokal/durian.jpg', 'tidak', 35000, 'ada', 30, 'tidak'),
(23, 5, 'Ceri Putih Amerika', 'Buah Ceri Putih dari Amerika', 'buah/impor/ceri-putih-amerika.jpeg', 'tidak', 150000, 'ada', 10, 'tidak'),
(24, 5, 'Kelapa Thailand', 'Kelapa Dari Thailand', 'buah/impor/kelapa-thailand.jpeg', 'tidak', 50000, 'ada', 15, 'tidak'),
(25, 5, 'Kiwi Emas New Zealand', 'Buah Kiwi Dari New Zealand', 'buah/impor/kiwi-emas-newzealand.jpg', 'tidak', 175000, 'ada', 10, 'tidak'),
(26, 5, 'Mangga India Royal Saffron', 'Buah Mangga Dari India', 'buah/impor/mangga-india-royal-saffron.jpg', 'tidak', 250000, 'ada', 25, 'tidak'),
(27, 5, 'Pisang Australia', 'Pisang Dari Australia', 'buah/impor/pisang-australia.jpg', 'buah/lokal', 110000, 'ada', 25, 'tidak'),
(28, 5, 'Pokat Meksiko', 'Pokat Dari Meksiko', 'buah/impor/pokat-meksiko.jpg', 'tidak', 150000, 'ada', 25, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `cobaanfaiz`
--

CREATE TABLE IF NOT EXISTS `cobaanfaiz` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama` varchar(32) DEFAULT NULL,
  `kelas` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `cobaanfaiz`
--


-- --------------------------------------------------------

--
-- Table structure for table `daging`
--

CREATE TABLE IF NOT EXISTS `daging` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(32) NOT NULL,
  `nama_daging` varchar(32) NOT NULL,
  `deskripsi` varchar(32) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `produk-unggulan` varchar(32) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(32) NOT NULL,
  `stok` int(100) NOT NULL,
  `paling_dicari` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `daging`
--

INSERT INTO `daging` (`id`, `kategori`, `nama_daging`, `deskripsi`, `gambar`, `produk-unggulan`, `harga`, `status`, `stok`, `paling_dicari`) VALUES
(1, '1', 'Daging Ayam Cincang', 'Daging Ayam Cincang', 'daging/produk-terbaru/ayam-cincang.jpg', 'tidak', 35000, 'baru', 33, 'tidak'),
(2, '1', 'Daging Ayam Dada', 'Daging Ayam Dada', 'daging/produk-terbaru/ayam-dada.jpg', 'tidak', 45000, 'ada', 14, 'tidak'),
(3, '1', 'Daging Ayam Kaki', 'Daging Ayam Kaki', 'daging/produk-terbaru/ayam-kaki.jpg', 'tidak', 25000, 'ada', 15, 'tidak'),
(4, '1', 'Daging Ayam Sayap', 'Daging Ayam Sayap', 'daging/produk-terbaru/ayam-sayap.jpg', 'tidak', 20000, 'ada', 27, 'tidak'),
(5, '1', 'Daging Sapi Steak', 'Daging Sapi Steak', 'daging/produk-terbaru/sapi-steak.jpg', 'tidak', 75000, 'ada', 7, 'tidak'),
(6, '1', 'Daging Sapi Steak Striploin', 'Daging Sapi Steak Striploin', 'daging/produk-terbaru/sapi-striploin.jpg', 'tidak', 55000, 'ada', 9, 'tidak');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `no_hp` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `nama`, `email`, `alamat`, `no_hp`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin@hotmail.com', 'jalan jalan dulu yuks', '081266480614'),
(2, 'admin', 'admin21232f297a57a5a743894a0e4a8', 'admin', 'admin@darkreef.com', 'jl. umban sari atas', '0812345678');

-- --------------------------------------------------------

--
-- Table structure for table `sayur`
--

CREATE TABLE IF NOT EXISTS `sayur` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `kategori` varchar(32) NOT NULL,
  `nama_sayur` varchar(32) NOT NULL,
  `deskripsi` varchar(32) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `produk_unggulan` varchar(32) NOT NULL,
  `harga` int(32) NOT NULL,
  `status` varchar(32) NOT NULL,
  `stok` int(32) NOT NULL,
  `paling_dicari` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `sayur`
--

INSERT INTO `sayur` (`id`, `kategori`, `nama_sayur`, `deskripsi`, `gambar`, `produk_unggulan`, `harga`, `status`, `stok`, `paling_dicari`) VALUES
(1, '1', 'Cabe', 'Cabe Merah', 'sayur/produk-terbaru/cabe.jpg', 'tidak', 65000, 'baru', 75, 'tidak'),
(2, '1', 'Jagung', 'Jagung', 'sayur/produk-terbaru/jagung.jpg', 'tidak', 25000, 'baru', 20, 'tidak'),
(3, '1', 'Kol', 'Kol', 'sayur/produk-terbaru/kol.jpg', 'tidak', 15000, 'baru', 22, 'tidak'),
(4, '1', 'Sawi', 'Sawi', 'sayur/produk-terbaru/sawi.jpg', 'tidak', 10000, 'baru', 100, 'tidak'),
(5, '1', 'Terong', 'Terong', 'sayur/produk-terbaru/terong.jpg', 'tidak', 17000, 'baru', 25, 'tidak'),
(6, '1', 'Tomat', 'Tomat', 'sayur/produk-terbaru/tomat.jpg', 'tidak', 13000, 'baru', 99, 'tidak'),
(7, '2', 'Bawang Merah', 'Bawang Merah', 'sayur/paling-banyak-dicari/bawang-merah.jpg', 'tidak', 50000, 'ada', 75, 'tidak'),
(8, '2', 'Bawang Putih', 'Bawang Putih', 'sayur/paling-banyak-dicari/bawang-putih.jpg', 'tidak', 45000, 'ada', 70, 'tidak'),
(9, '2', 'Jahe', 'Jahe', 'sayur/paling-banyak-dicari/jahe.jpg', 'tidak', 20000, 'ada', 75, 'tidak'),
(10, '2', 'Kentang', 'Kentang', 'sayur/paling-banyak-dicari/kentang.jpg', 'tidak', 21000, 'ada', 77, 'tidak'),
(11, '2', 'Timun', 'Timun', 'sayur/paling-banyak-dicari/timun.jpg', 'tidak', 17000, 'ada', 55, 'ya'),
(12, '2', 'Wortel', 'Wortel', 'sayur/paling-banyak-dicari/wortel.jpg', 'tidak', 20000, 'ada', 80, 'ya'),
(13, '3', 'Asparagus', 'Asparagus', 'sayur/produk-unggulan/asparagus.jpg', 'ya', 30000, 'ada', 20, 'tidak'),
(14, '3', 'Jamur', 'Jamur', 'sayur/produk-unggulan/jamur.jpg', 'ya', 25000, 'ada', 30, 'tidak'),
(15, '3', 'Paprika Kuning', 'Paprika Kuning', 'sayur/produk-unggulan/paprika-kuning.jpg', 'ya', 35000, 'ada', 25, 'tidak'),
(16, '3', 'Paprika Merah', 'Paprika Merah', 'sayur/produk-unggulan/paprika-merah.jpg', 'ya', 35000, 'ada', 27, 'tidak'),
(17, '4', 'Bawang Perai', 'Bawang Perai', 'sayur/lokal/bawang-perai.jpg', 'tidak', 5000, 'ada', 170, 'tidak'),
(18, '4', 'Mint', 'Mint', 'sayur/lokal/mint.jpg', 'tidak', 10000, 'ada', 27, 'tidak'),
(19, '4', 'Selada', 'Selada', 'sayur/lokal/selada.jpg', 'tidak', 3000, 'ada', 270, 'tidak'),
(20, '4', 'Seledri', 'Seledri', 'sayur/lokal/seledri.jpg', 'tidak', 7000, 'ada', 200, 'tidak'),
(21, '4', 'Timun Tanpa Biji', 'Timun Tanpa Biji', 'sayur/lokal/timun-tanpa-biji.jpg', 'tidak', 20000, 'ada', 30, 'tidak'),
(22, '4', 'Ubi', 'Ubi', 'sayur/lokal/ubi.jpg', 'tidak', 3500, 'ada', 300, 'tidak'),
(23, '5', 'Brokoli Australia', 'Brokoli Australia', 'sayur/impor/brokoli-australia.jpg', 'tidak', 100000, 'ada', 15, 'tidak'),
(24, '5', 'Kentang Australia', 'Kentang Australia', 'sayur/impor/kentang-australia.jpg', 'tidak', 130000, 'ada', 21, 'tidak'),
(25, '5', 'Labu Jepang', 'Labu Jepang', 'sayur/impor/labu-jepang.jpg', 'tidak', 135000, 'ada', 75, 'tidak'),
(26, '5', 'Lada Jalapeno', 'Lada Jalapeno', 'sayur/impor/lada-jalapeno.jpg', 'tidak', 150000, 'ada', 27, 'tidak'),
(27, '5', 'Ubi Jepang', 'Ubi Jepang', 'sayur/impor/ubi-jepang.jpg', 'tidak', 110000, 'ada', 23, 'tidak'),
(28, '5', 'Wortel Kecil Amerika', 'Wortel Kecil Amerika', 'sayur/impor/wortel-kecil-amerika.jpg', 'tidak', 70000, 'ada', 11, 'tidak');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
