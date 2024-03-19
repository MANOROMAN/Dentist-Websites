<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelik Veri Silme</title>

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
        font-size: 18px; /* Adjust the font size as needed */
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

        // POST verilerini al
        $silme_baslik = $_POST['silme_baslik'];

        // SQL sorgusunu oluştur
        $sql = "DELETE FROM bilgi WHERE baslik='$silme_baslik'";

        // Sorguyu çalıştır ve sonucu kontrol et
        if ($conn->query($sql) === TRUE) {
            echo "Veri silme işlemi başarıyla gerçekleşti.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
    }
    ?>

    <h2 style="margin-right: 40px;">Üyelik Veri Silme</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <select id="silme_baslik" name="silme_baslik" required>
        
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


        <input type="submit" value="Veri Sil">

        <button type="button" onclick="window.location.href='admin_panel.php'">Geri</button> <br>
    </form>

</body>
</html>
