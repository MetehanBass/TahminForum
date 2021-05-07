-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 07 May 2021, 22:58:13
-- Sunucu sürümü: 10.4.17-MariaDB
-- PHP Sürümü: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tahmin_forum`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `category`
--

INSERT INTO `category` (`categoryId`, `category_name`) VALUES
(7, 'Bundesliga'),
(10, 'Championship'),
(2, 'Diger Sporlar'),
(12, 'EFL League 1'),
(1, 'Genel Sohbet'),
(6, 'La Liga'),
(8, 'Ligue 1'),
(3, 'NBA'),
(4, 'Premier Lig'),
(5, 'Serie A'),
(11, 'Spor Toto 1. Lig'),
(9, 'Süper Lig');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pictures`
--

CREATE TABLE `pictures` (
  `pictureId` int(11) NOT NULL,
  `pic_name` varchar(40) NOT NULL,
  `pic_dir` varchar(200) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `replies`
--

CREATE TABLE `replies` (
  `RepliesID` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `topicId` int(11) NOT NULL,
  `message` varchar(400) NOT NULL,
  `replyDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `replies`
--

INSERT INTO `replies` (`RepliesID`, `userId`, `topicId`, `message`, `replyDate`) VALUES
(1, 36, 8, 'SenaQQWW ile yazıyorum.yorum kısmını test ediyorum.', '2021-03-03'),
(2, 36, 8, 'sayfa yenilenmesini test ediyorum.\r\n', '2021-03-03'),
(3, 36, 8, 'awdwadwad', '2021-03-03'),
(4, 36, 8, 'asdasdsadasd', '2021-03-03'),
(5, 36, 8, 'pagination deneme', '2021-03-03'),
(6, 36, 8, 'pagination deneme', '2021-03-03'),
(7, 36, 8, 'pagination deneme', '2021-03-03'),
(8, 36, 11, 'yorum sayısı denemesi', '2021-03-03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `topic`
--

CREATE TABLE `topic` (
  `topicId` int(11) NOT NULL,
  `topic` varchar(40) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `release_date` date NOT NULL,
  `categoryId` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `topic`
--

INSERT INTO `topic` (`topicId`, `topic`, `content`, `release_date`, `categoryId`, `userId`) VALUES
(8, 'Orlando vs Golden', 'curry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry sikercurry siker', '2021-03-03', 3, 36),
(9, 'dasasasasd', 'dasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasddasasasasd', '2021-03-03', 3, 36),
(10, 'Denememememememem', 'DenemememememememDenemememememememDenemememememememDenemememememememDenemememememememDenemememememememDenemememememememDenemememememememDenemememememememDenememememememem', '2021-03-03', 3, 36),
(11, 'Trabzonluları götten', 'sikeyim.Hamsi kafalı uşaklar', '2021-03-03', 9, 49),
(12, 'Genel Sohbet İlk Başlık Denemesi', 'Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.Buradan sporlar hakkında görüş alış verişi yapabiliriz.', '2021-03-03', 1, 36);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `isAdmin` int(1) NOT NULL DEFAULT 0,
  `signUp_date` date NOT NULL,
  `city` varchar(15) DEFAULT NULL,
  `favTeam` varchar(30) DEFAULT NULL,
  `likes` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`userId`, `username`, `email`, `password`, `isAdmin`, `signUp_date`, `city`, `favTeam`, `likes`) VALUES
(1, 'metehanb', 'metehanb26@gmail.com', 'Metehan999', 1, '2021-02-27', 'Antalya', 'Antalya Spor', 0),
(2, 'SenaQQ', 'metehanb27@gmail.com', '123qwe', 0, '2021-03-02', NULL, NULL, 0),
(9, 'Kullanıcı1', 'kullanici@kullanici.com', 'f5bb0c8de146c67b44babbf4e6584cc0', 0, '2021-03-02', '', '', 0),
(10, 'Ahmet', 'ahmet@gmail.com', 'b538c6fd231ef0fbf7f09fe393663cf8', 0, '2021-03-02', 'İzmir', 'Karşıyaka', 0),
(13, 'metehanb26', 'metehanb28@gmail.com', 'b538c6fd231ef0fbf7f09fe393663cf8', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(15, 'avoevoda', 'sosyalcgr@gmammil.com', '4297f44b13955235245b2497399d7a93', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(19, 'metehandeneme', 'metehandeneme@gmail.com', 'be01e402316cab9f154acd65b9cfbdc1', 0, '2021-03-02', 'Isparta', 'Alanya Spor', 0),
(23, 'sadasd', 'dssda', '4297f44b13955235245b2497399d7a93', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(26, 'SenaQQQQ', 'sasd', 'f5bb0c8de146c67b44babbf4e6584cc0', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(30, 'tiltdenemesi', 'tiltdenemesi@outlook.com', '4f2454db9915cc1653f9b048fc13e817', 0, '2021-03-02', 'e-posta', 'zaten kayıtlı', 0),
(32, 'avoevoda11', 'wetehanb26@gmail.c', '96e79218965eb72c92a549dd5a330112', 0, '2021-03-02', 'Antalya', 'Serik SPOR', 0),
(36, 'SenaQQWW', 'metehann111@gmail.com', '96e79218965eb72c92a549dd5a330112', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(43, 'SenaQQ1111', 'sedameda@gmail.com', '96e79218965eb72c92a549dd5a330112', 0, '2021-03-02', 'İstanbul', 'Beşiktaş', 0),
(46, 'avoevoda33', 'metehanb33@gmail.com', '96e79218965eb72c92a549dd5a330112', 0, '2021-03-02', 'Antalya', 'Antalya Spor', 0),
(47, 'metehandenene', '111111@sqsq.com', '7fa8282ad93047a4d6fe6111c93b308a', 0, '2021-03-02', 'Antalya', 'Karşıyaka', 0),
(48, 'SenaQQYY', 'senakctpepke@hotmail.com', '96e79218965eb72c92a549dd5a330112', 0, '2021-03-02', 'İstanbul', 'Fenerbahçe', 0),
(49, 'okicangfb', 'okicangfb@gmail.com', '111111', 0, '2021-03-03', 'Ankara', 'Fenerbahçe', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Tablo için indeksler `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`pictureId`),
  ADD UNIQUE KEY `pic_name` (`pic_name`),
  ADD KEY `fkIdx_156` (`userId`);

--
-- Tablo için indeksler `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`RepliesID`),
  ADD KEY `fkIdx_143` (`userId`),
  ADD KEY `fkIdx_146` (`topicId`);

--
-- Tablo için indeksler `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`topicId`),
  ADD UNIQUE KEY `topic` (`topic`),
  ADD KEY `fkIdx_128` (`categoryId`),
  ADD KEY `fkIdx_134` (`userId`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `pictures`
--
ALTER TABLE `pictures`
  MODIFY `pictureId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `replies`
--
ALTER TABLE `replies`
  MODIFY `RepliesID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Tablo için AUTO_INCREMENT değeri `topic`
--
ALTER TABLE `topic`
  MODIFY `topicId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `FK_155` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Tablo kısıtlamaları `replies`
--
ALTER TABLE `replies`
  ADD CONSTRAINT `FK_142` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`),
  ADD CONSTRAINT `FK_145` FOREIGN KEY (`topicId`) REFERENCES `topic` (`topicId`);

--
-- Tablo kısıtlamaları `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `FK_127` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`),
  ADD CONSTRAINT `FK_133` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
