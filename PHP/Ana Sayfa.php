<?php
require_once("tema.php");

head_kısmı("Ana Sayfa");


ana_sayfa_karşılama_ekranı();

ana_sayfa_Sunduğumuz_Hizmetler1();

// Veritabanı bağlantısı yapılmalıdır
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uyelik";

$conn = new mysqli($servername, $username, $password, $dbname);

// Bağlantı kontrolü yapılır
if ($conn->connect_error) {
    die("Bağlantı hatası: " . $conn->connect_error);
}

// Bilgileri veritabanından çek
$sql = "SELECT baslik, icerik FROM bilgi";
$result = $conn->query($sql);

// Eğer veri varsa işlemleri yap
if ($result->num_rows > 0) {
    // Sütunları saklamak için boş diziler oluştur
    $content_sh = array();
    $baslik_sh = array();

    // Veritabanından gelen her satırı döngü ile oku
    while($row = $result->fetch_assoc()) {
        // Her satırdaki bilgileri ilgili dizilere ekle
        $content_sh[] = $row["icerik"];
        $baslik_sh[] = $row["baslik"];
    }

    // Fonksiyonu çağır
    ana_sayfa_Sunduğumuz_Hizmetler2($content_sh, $baslik_sh);
} else {
    echo "Veri bulunamadı";
}
ana_sayfa_Sunduğumuz_Hizmetler2($content_sh, $baslik_sh);


ana_sayfa_Ekibimiz();


ana_sayfa_Hasta_Görüşleri();


Footer_Alt_Kısım();
?>