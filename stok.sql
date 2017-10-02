-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 Tem 2017, 06:17:57
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `stok`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `barkodlar`
--

CREATE TABLE `barkodlar` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `barkod` int(11) NOT NULL,
  `kg` int(11) NOT NULL,
  `cinsi` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `barkodlar`
--

INSERT INTO `barkodlar` (`urun_id`, `urun_adi`, `barkod`, `kg`, `cinsi`) VALUES
(1, '1', 10001, 10, 'gümüş'),
(2, '2', 10002, 15, 'altın'),
(5, '3', 10003, 25, 'plastik'),
(6, '4', 10004, 35, 'demir'),
(7, '5', 10005, 30, 'sodyum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_adi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `barkod` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `kg` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `cinsi` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `giris_saati` time DEFAULT NULL,
  `giris_tarihi` date DEFAULT NULL,
  `cikis_saati` time DEFAULT NULL,
  `cikis_tarihi` date DEFAULT NULL,
  `takip` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_adi`, `barkod`, `kg`, `cinsi`, `giris_saati`, `giris_tarihi`, `cikis_saati`, `cikis_tarihi`, `takip`) VALUES
(1, '11', '123456', '1', '1', NULL, NULL, '15:53:19', '2028-01-20', 0),
(2, '11', '123456', '1', '1', NULL, NULL, '15:53:19', '2028-01-20', 0),
(3, 'a', '1', '1', 'fsdfsfd', NULL, NULL, '15:53:32', '2028-01-20', 0),
(4, 's', '2323', '343', 'dfgdfg', NULL, NULL, '15:53:45', '2028-01-20', 0),
(5, '2423', '4243', '43', '4', '11:53:56', '2019-01-20', '12:01:36', '2019-01-20', 1),
(6, 'adsad', '32', '34', 'sdfsd', '12:12:30', '2019-01-20', NULL, NULL, 0),
(7, '2', '10002', '15', 'altın', '19:45:28', '2019-01-20', '19:47:16', '2019-01-20', 0),
(8, '1', '10001', '10', 'gümüş', '15:19:33', '2028-01-20', '15:34:59', '2028-01-20', 0),
(9, '5', '10005', '30', 'sodyum', '15:19:57', '2028-01-20', '15:45:49', '2028-01-20', 0),
(10, 'deneme', '153', '5', 'debe', '15:22:57', '2028-01-20', '15:46:02', '2028-01-20', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `barkodlar`
--
ALTER TABLE `barkodlar`
  ADD PRIMARY KEY (`urun_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `barkodlar`
--
ALTER TABLE `barkodlar`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
