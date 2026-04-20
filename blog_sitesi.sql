-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 20 Haz 2025, 11:29:50
-- Sunucu sürümü: 9.1.0
-- PHP Sürümü: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `blog_sitesi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `gonderiler`
--

DROP TABLE IF EXISTS `gonderiler`;
CREATE TABLE IF NOT EXISTS `gonderiler` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_ad` varchar(50) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `kullanici_ad` (`kullanici_ad`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `gonderiler`
--

INSERT INTO `gonderiler` (`id`, `kullanici_ad`, `baslik`, `icerik`, `created_at`) VALUES
(5, 'eser', 'edes', 'dcxzczdxv ', '2025-06-19 20:16:07'),
(10, 'atmaca', 'ARG', 'GSDBGG', '2025-06-20 10:50:29'),
(11, 'atmaca', 'rwbgf', 'wgbfsbgfs', '2025-06-20 11:06:58'),
(8, 'eser', 'dsvadvds', 'adcvad', '2025-06-19 20:49:26'),
(9, 'eser', 'SVDCV', 'vzxvxv ', '2025-06-19 20:59:20'),
(13, 'atmaca', 'bfgxbgbdfcb', 'dgfbf', '2025-06-20 11:22:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `kullanici_ad` varchar(255) NOT NULL,
  `sifre` varchar(255) NOT NULL,
  `zaman` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_ad`, `sifre`, `zaman`, `email`) VALUES
(1, 'ali', '81dc9bdb52d04dc20036dbd8313ed055', '2025-06-19 12:01:56', ''),
(2, 'atmaca', '81dc9bdb52d04dc20036dbd8313ed055', '2025-06-19 12:51:19', ''),
(4, 'asdf', '81dc9bdb52d04dc20036dbd8313ed055', '2025-06-19 20:00:13', 'asd@gmil.com'),
(5, 'eser', '5bf73bc6c6e6775d472621264309a88b', '2025-06-19 20:11:33', 'eser61@gmail.com'),
(6, 'ahmet', '827ccb0eea8a706c4c34a16891f84e7b', '2025-06-20 11:25:44', 'ahmet@gmail');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
