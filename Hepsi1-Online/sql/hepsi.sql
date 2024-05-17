-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 May 2023, 17:15:45
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `hepsi`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `register`
--

CREATE TABLE `register` (
  `ID` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `register`
--

INSERT INTO `register` (`ID`, `user_name`, `password`, `name`, `email`) VALUES
(0, 'sedat123', 'sedat123', 'sedat', 0),
(0, 'sedat67', 'sedat', 'deneme', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `user_name`, `password`, `name`, `email`) VALUES
(0, 'sedat67', 'sedat67', 'sedat corte', 'sedatcorte34@gmail.com'),
(0, 'rabia123', 'rabia123', 'deneme', 'corte.rabia@std.izu.edu.tr'),
(0, 'sedat123', 'sedat', 'deneme', 'corte.rabia@std.izu.edu.tr');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`email`) VALUES
('admin'),
('corte.rabia@std.izu.edu.tr'),
('sedatcorte34@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yrm`
--

CREATE TABLE `yrm` (
  `id` int(11) NOT NULL,
  `msg` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `tar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yrm`
--

INSERT INTO `yrm` (`id`, `msg`, `user_name`, `tar`) VALUES
(10, 'çok güzel site &lt;3', 'sedat67', '2023-05-20');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `yrm`
--
ALTER TABLE `yrm`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `yrm`
--
ALTER TABLE `yrm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
