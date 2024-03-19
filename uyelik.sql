-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 12 Oca 2024, 15:16:14
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `uyelik`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bilgi`
--

CREATE TABLE `bilgi` (
  `id` int(11) NOT NULL,
  `baslik` varchar(200) NOT NULL,
  `icerik` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `bilgi`
--

INSERT INTO `bilgi` (`id`, `baslik`, `icerik`) VALUES
(2, 'Diş Beyazlatma', 'Gülümsemenizi parlatın! Diş beyazlatma hizmetimizle, lekeleri ortadan kaldırın ve doğal beyazlığınızı geri kazanın. Profesyonel yaklaşımımızla, sağlıklı ve etkileyici bir gülüşe hızlı adım atın.'),
(3, 'Diş Cilası ve Leke Çıkarma', 'Gülüşünüzü daha parlak ve çekici hale getirin! Diş cilası ve leke çıkarma hizmetimizle, diş yüzeyindeki lekeleri etkili bir şekilde temizleyerek doğal beyazlığınızı ortaya çıkarın. Uzman ekibimiz, özel formülasyonlar ve modern tekniklerle dişlerinizi yeniden canlandırır. Hızlı ve konforlu bu işlemle, gülüşünüzdeki farkı hemen hissedin. Daha beyaz, daha parlak dişler için bizimle iletişime geçin!'),
(4, 'Diş Temizleme', 'Gülüşünüzdeki sağlık her detayda gizlidir. Diş temizleme hizmetimizle, dişlerinizdeki plak ve tartarı etkili bir şekilde temizleyerek ağız sağlığınızı koruyun. Uzman diş hijyenistlerimiz, modern ekipmanlar ve özel tekniklerle dişlerinizi nazikçe temizler, diş eti sağlığınızı destekler ve ferah bir nefese kavuşturur. Sağlıklı ve parıldayan bir gülüş için bizimle iletişime geçin.'),
(5, 'Florür Uygulaması', 'Sağlıklı dişler, güzel gülüşün anahtarıdır. Florür uygulamamız ile diş minesini güçlendirin ve çürüklerle savaşın. Flor, dişleri çürük oluşumuna karşı koruyarak, diş yüzeyini güçlendirir ve dayanıklılığını artırır. Uygulamamız hızlı, etkili ve konforlu bir şekilde gerçekleştirilir. Dişlerinizi güçlendirin, gülüşünüzü koruyun!'),
(6, 'Özel Ağız Koruyucuları', 'Diş sağlığınız bizim önceliğimizdir. Özel ağız koruyucularımız, dişlerinizi çeşitli risklere karşı korurken, konforlu bir deneyim sunar. Özel tasarlanmış ve kişiselleştirilmiş koruyucular, gece boyunca diş gıcırdatma, çene problemleri ve spor sırasında olası darbelere karşı kapsamlı bir koruma sağlar. Gülüşünüzü güvende tutmak için profesyonel ağız koruyucularımız ile tanışın. Diş sağlığınız için en iyi koruma için bize ulaşın!'),
(11, 'Çocuk Diş Sağlığı', 'Çocuklarınızın gülüşleri, özenle korunmayı bekliyor! Çocuk diş sağlığı hizmetimizle, minik dişleri sağlıklı ve güçlü tutun. Uzman pedodontist ekibimiz, çocukların diş bakımını eğlenceli ve rahatlatıcı bir deneyim haline getirir. Erken yaşlarda başlayan düzenli kontrol ve eğitim, çocukların sağlıklı diş alışkanlıkları geliştirmesine yardımcı olur. Minik gülücükleri korumak için bizimle iletişime geçin.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(100) NOT NULL,
  `kullanici_soyadi` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telno` varchar(10) NOT NULL,
  `parola` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `kullanici_soyadi`, `email`, `telno`, `parola`) VALUES
(3, 'Yusuf', 'Günel', 'yusufgunel71@hotmail.com', '1111111111', '$2y$10$CUhkmwW2/9BeBpYe2Ke58e.Cu7zBXHSxW68TEHgROOVCaPexT72Fa'),
(5, 'Tarık', 'Sarıcı', 'tarıksarıcı@hotmail.com', '2222222222', '$2y$10$pKRKFA7K.6dXxDgTduEdoerdJx7xdljEcMh35D5BiWtgiXLlkSIWy'),
(6, 'Berk', 'Işıkan', 'berkışıkan@hotmail.com', '3333333333', '$2y$10$drTBqppPVNDR3a88FIcDl.fJXN9pHbH46xCgdv1BooqkaNB2s1yxS');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yönetici`
--

CREATE TABLE `yönetici` (
  `id` int(11) NOT NULL,
  `yisim` varchar(100) NOT NULL,
  `yparola` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `yönetici`
--

INSERT INTO `yönetici` (`id`, `yisim`, `yparola`) VALUES
(1, 'deneme', '$2y$10$ycRgnEv9V9jkfXyTdGiewuXB72w//OfSxmd.t4hd8aBtRV022ZlZG');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `bilgi`
--
ALTER TABLE `bilgi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Tablo için indeksler `yönetici`
--
ALTER TABLE `yönetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `bilgi`
--
ALTER TABLE `bilgi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `yönetici`
--
ALTER TABLE `yönetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
