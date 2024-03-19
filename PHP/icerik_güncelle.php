<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haber Güncelleme</title>

    <style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
        background-color: #f4f4f4;
    }

    form {
        width: 50%;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    label {
        display: block;
        margin-bottom: 8px;
        font-size: 18px; /* Increased font size */
    }

    input, textarea, select {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #2596be;
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #1c7aa3;
    }
</style>



</head>
<body> 

    <?php
    session_start();

    // Oturum açmış admin kontrolü
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: admin_giris.php");
        exit();
    }
    ?>

    <?php
    // Veritabanı bağlantısı için bilgiler
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "uyelik";

    // Form gönderildi mi kontrol et
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Veritabanı bağlantısını oluştur
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol et
        if ($conn->connect_error) {
            die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
        }

        // POST verilerini al ve güvenli hale getir
        $guncelle_eski_baslik = mysqli_real_escape_string($conn, $_POST['guncelle_eski_baslik']);
        $guncelle_yeni_baslik = mysqli_real_escape_string($conn, $_POST['guncelle_yeni_baslik']);
        $guncelle_icerik = mysqli_real_escape_string($conn, $_POST['guncelle_icerik']);

        // Belirli bir başlıkla haberin id'sini çek (hazır ifade kullanımı)
        $id_sorgusu = $conn->prepare("SELECT id FROM bilgi WHERE baslik = ?");
        $id_sorgusu->bind_param("s", $guncelle_eski_baslik);
        $id_sorgusu->execute();
        $id_sonuc = $id_sorgusu->get_result();

        if ($id_sonuc->num_rows > 0) {
            $id_satir = $id_sonuc->fetch_assoc();
            $haber_id = $id_satir['id'];

            // Haberin başlığını ve içeriğini güncelle (hazır ifade kullanımı)
            $guncelle_sorgusu = $conn->prepare("UPDATE bilgi SET baslik=?, icerik=? WHERE id=?");
            $guncelle_sorgusu->bind_param("ssi", $guncelle_yeni_baslik, $guncelle_icerik, $haber_id);
            $guncelle_sorgusu->execute();

            echo "Haber güncelleme işlemi başarıyla gerçekleşti.";
        } else {
            echo "Belirtilen başlıkla eşleşen bir haber bulunamadı.";
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
    }
    ?>

    <h2 style="margin-right: 40px;">İçerik Güncelleme</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="guncelle_eski_baslik">Güncellenecek İçerik Başlığı:</label>
    <select id="guncelle_eski_baslik" name="guncelle_eski_baslik" required>
    <?php
    // Veritabanından başlıkları çek
    $conn = new mysqli($servername, $username, $password, $dbname);
    $result = $conn->query("SELECT baslik FROM bilgi");

    // Başlıkları dropdown listesine ekle
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row['baslik'] . "'>" . $row['baslik'] . "</option>";
    }

    // Veritabanı bağlantısını kapat
    $conn->close();
    ?>
</select><br>



        <label for="guncelle_yeni_baslik">Yeni Başlık:</label>
        <input type="text" id="guncelle_yeni_baslik" name="guncelle_yeni_baslik" required><br>

        <label for="guncelle_icerik">Yeni İçerik:</label>
        <textarea id="guncelle_icerik" name="guncelle_icerik" rows="4" required></textarea><br>

        <input type="submit" value="Haberi Güncelle">

        <button type="button" onclick="window.location.href='admin_panel.php'">Geri</button> <br>
    </form>

</body>
</html>