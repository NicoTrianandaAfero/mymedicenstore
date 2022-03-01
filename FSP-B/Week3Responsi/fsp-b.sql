-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2021 at 09:51 AM
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
-- Database: `fsp-b`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pemain`
--

CREATE TABLE `detail_pemain` (
  `idmovie` int(11) NOT NULL,
  `idpemain` int(11) NOT NULL,
  `peran` enum('Utama','Pembantu','Cameo') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `idgambar` int(11) NOT NULL,
  `extention` varchar(4) DEFAULT NULL,
  `idmovie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`idgambar`, `extention`, `idmovie`) VALUES
(1, 'jpg', 1),
(3, 'jpg', 2),
(8, 'jpg', 3),
(9, 'jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `idgenre` int(11) NOT NULL,
  `nama` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`idgenre`, `nama`) VALUES
(1, 'Horror'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Romance'),
(5, 'Thriller'),
(6, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `genre_movie`
--

CREATE TABLE `genre_movie` (
  `idmovie` int(11) NOT NULL,
  `idgenre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre_movie`
--

INSERT INTO `genre_movie` (`idmovie`, `idgenre`) VALUES
(1, 1),
(1, 2),
(1, 4),
(1, 5),
(2, 1),
(3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `idmovie` int(11) NOT NULL,
  `judul` varchar(75) DEFAULT NULL,
  `rilis` date DEFAULT NULL,
  `skor` double DEFAULT NULL,
  `sinopsis` varchar(500) DEFAULT NULL,
  `serial` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`idmovie`, `judul`, `rilis`, `skor`, `sinopsis`, `serial`) VALUES
(1, 'Conjuring', '2016-03-10', 7.3, 'Peggy, a single mother of four children, seeks the help of occult investigators Ed and Lorraine Warren when she and her children witness strange, paranormal events in their house.', 0),
(2, 'Anabelle', '2014-10-01', 6, 'John and Mia Form are attacked by members of a satanic cult, who use their vintage doll as a conduit to make their life miserable. This unleashes a string of paranormal events in the Forms\' residence.', 1),
(3, '1917', '2020-01-18', 8, 'Two soldiers, assigned the task of delivering a critical message to another battalion, risk their lives for the job in order to prevent them from stepping right into a deadly ambush.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `idpemain` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `gender` enum('Pria','Wanita') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`idpemain`, `nama`, `gender`) VALUES
(1, 'Pemain A', 'Pria'),
(2, 'Pemain B', 'Wanita'),
(3, 'Pemain C', 'Pria'),
(4, 'Pemain D', 'Wanita');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  ADD PRIMARY KEY (`idmovie`,`idpemain`),
  ADD KEY `fk_movie_has_pemain_pemain1_idx` (`idpemain`),
  ADD KEY `fk_movie_has_pemain_movie1_idx` (`idmovie`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`idgambar`),
  ADD KEY `fk_gambar_movie1_idx` (`idmovie`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`idgenre`);

--
-- Indexes for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD PRIMARY KEY (`idmovie`,`idgenre`),
  ADD KEY `fk_movie_has_genre_genre1_idx` (`idgenre`),
  ADD KEY `fk_movie_has_genre_movie_idx` (`idmovie`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`idmovie`);

--
-- Indexes for table `pemain`
--
ALTER TABLE `pemain`
  ADD PRIMARY KEY (`idpemain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `idgambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `idgenre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `idmovie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemain`
--
ALTER TABLE `pemain`
  MODIFY `idpemain` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pemain`
--
ALTER TABLE `detail_pemain`
  ADD CONSTRAINT `fk_movie_has_pemain_movie1` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movie_has_pemain_pemain1` FOREIGN KEY (`idpemain`) REFERENCES `pemain` (`idpemain`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gambar`
--
ALTER TABLE `gambar`
  ADD CONSTRAINT `fk_gambar_movie1` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `genre_movie`
--
ALTER TABLE `genre_movie`
  ADD CONSTRAINT `fk_movie_has_genre_genre1` FOREIGN KEY (`idgenre`) REFERENCES `genre` (`idgenre`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_movie_has_genre_movie` FOREIGN KEY (`idmovie`) REFERENCES `movie` (`idmovie`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
