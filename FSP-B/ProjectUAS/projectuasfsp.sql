-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 19 Nov 2021 pada 12.05
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `projectuasfsp`
--
CREATE DATABASE IF NOT EXISTS `projectuasfsp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `projectuasfsp`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `permainan`
--

CREATE TABLE IF NOT EXISTS `permainan` (
  `idpermainan` int(11) NOT NULL AUTO_INCREMENT,
  `player` varchar(45) DEFAULT NULL,
  `box` int(11) DEFAULT NULL,
  PRIMARY KEY (`idpermainan`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `permainan`
--

INSERT INTO `permainan` (`idpermainan`, `player`, `box`) VALUES
(22, 'circle', 1),
(23, 'cross', 7),
(24, 'circle', 2),
(25, 'circle', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `riwayat`
--

CREATE TABLE IF NOT EXISTS `riwayat` (
  `idriwayat` int(11) NOT NULL AUTO_INCREMENT,
  `winner` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idriwayat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
