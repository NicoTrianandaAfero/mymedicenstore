-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 11:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fsp_uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `jawaban`
--

CREATE TABLE `jawaban` (
  `idjawaban` int(11) NOT NULL,
  `idsoal` int(11) NOT NULL,
  `isi_jawaban` text,
  `benarkah` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jawaban`
--

INSERT INTO `jawaban` (`idjawaban`, `idsoal`, `isi_jawaban`, `benarkah`) VALUES
(1, 1, 'Tok Dalang', 0),
(2, 1, 'Tok Muthu', 0),
(3, 1, 'Tok Abas', 0),
(4, 1, 'Tok Aba', 1),
(5, 2, 'Sumenep', 0),
(6, 2, 'Bangkalan', 0),
(7, 2, 'Kota Hilir', 1),
(8, 2, 'Johor', 0),
(9, 3, '3', 0),
(10, 3, '8', 0),
(11, 3, '7', 1),
(12, 3, '9', 0),
(13, 4, 'Pakcik Singh', 0),
(14, 4, 'Pakcik Muthu', 0),
(15, 4, 'Pakcik Eko', 0),
(16, 4, 'Pakcik Kumar', 1),
(17, 5, 'Papa Zola', 1),
(18, 5, 'Papa Zila', 0),
(19, 5, 'Papa Zigi', 0),
(20, 5, 'Papa Zaga', 0),
(21, 6, 'BoBoiBoy', 0),
(22, 6, 'GoGoiGoy', 0),
(23, 6, 'ToToiToy', 1),
(24, 6, 'DoDoiDoy', 0),
(25, 7, 'S.A.M.B.A.L', 0),
(26, 7, 'P.E.T.A.I', 1),
(27, 7, 'A.R.A', 0),
(28, 7, 'T.E.R.A.S.I', 0),
(29, 8, 'BUDIBAKOKO', 0),
(30, 8, 'BADIBUKOKO', 0),
(31, 8, 'BUDABIDAKO', 0),
(32, 8, 'BUBADIBAKO', 1),
(33, 9, 'Adinda', 0),
(34, 9, 'Adidi', 0),
(35, 9, 'Adudu', 1),
(36, 9, 'Aduda', 0),
(37, 10, 'Gopay', 0),
(38, 10, 'Gopal', 1),
(39, 10, 'Gopap', 0),
(40, 10, 'Gopak', 0);

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `idsoal` int(11) NOT NULL,
  `nomor` int(11) DEFAULT NULL,
  `pertanyaan` text,
  `halaman_ke` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`idsoal`, `nomor`, `pertanyaan`, `halaman_ke`) VALUES
(1, 1, 'Siapakah nama atok BoBoiBoy yang benar?', 1),
(2, 2, 'Dari kota manakah BoBoiBoy berasal?', 2),
(3, 3, 'Berapakah kuasa elemental yang dimiliki BoBoiBoy?', 3),
(4, 4, 'Siapakah nama Ayah Gopal?', 4),
(5, 5, 'Siapa nama guru matematik BoBoiBoy?', 5),
(6, 6, 'Siapakah nama adik Yaya?', 6),
(7, 7, 'Siapakah nama robot Ejojo?', 7),
(8, 8, 'Apa nama kelompok yang dibuat untuk merubah Adudu menjadi baik oleh BoBoiBoy dan Gopal?', 8),
(9, 9, 'Siapakah nama karakter si \"Kepala Kotak\" lawan abadi BoBoiBoy dan kawan-kawan?', 9),
(10, 10, 'Siapa nama teman BoBoiBoy yang memiliki kuasa mengubah makanan?', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD PRIMARY KEY (`idjawaban`),
  ADD KEY `idsoal` (`idsoal`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`idsoal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jawaban`
--
ALTER TABLE `jawaban`
  MODIFY `idjawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `idsoal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jawaban`
--
ALTER TABLE `jawaban`
  ADD CONSTRAINT `jawaban_ibfk_1` FOREIGN KEY (`idsoal`) REFERENCES `soal` (`idsoal`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
