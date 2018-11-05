-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 04:28 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul8`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nama_depan` text NOT NULL,
  `nama_belakang` text NOT NULL,
  `nim` int(10) NOT NULL,
  `kelas` text NOT NULL,
  `hobi` text NOT NULL,
  `genre_film` text NOT NULL,
  `tempat_wisata` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` text NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nama_depan`, `nama_belakang`, `nim`, `kelas`, `hobi`, `genre_film`, `tempat_wisata`, `tgl_lahir`, `email`, `username`) VALUES
('bobo', 'ea', 0, 'D3SI 4101', 'ngopi', 'Anime', 'Tanjung Selor', '2018-10-02', 'bobo@gmail.com', ''),
('poi', 'iop', 98789, 'on', 'Membaca,ngegame', 'Horror', 'Bali,Tanjung Selor,Jakarta', '1999-01-05', 'poi@gmail.com', ''),
('popo', 'suhada', 9842982, 'on', 'Membaca', 'Drama', 'Jakarta', '2018-10-11', 'ea@gmail.com', ''),
('oki', 'agustina', 12431251, 'on', 'Membaca,ngegame', 'Drama,Tanjung Selor,Jakarta', '', '2018-08-22', 'oki@gmail.com', ''),
('babang', 'mamat', 12683812, 'on', 'Membaca,ngegame', 'Horror,action', 'Bali,Tanjung Selor,Jakarta', '2018-06-22', 'mamat@gmail.com', ''),
('ferdy', 'pittardi', 18723688, 'on', 'on,on,on', 'on,on', '', '2013-12-19', 'ferdy@gmail.com', ''),
('fadil', '', 67011740, 'on', 'on,on', 'on,on,on', '', '2015-04-19', 'fadil@gmail.com', ''),
('fadil', 'lucky', 670112233, 'on', 'ngegame,ngopi', 'Horror,action', 'Bali', '2018-02-02', 'oyoy@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `username` varchar(20) NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`username`, `pass`) VALUES
('fadil', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
