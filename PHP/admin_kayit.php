<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kayıt Ol</title>

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
        width: 50%; /* Adjust the width as needed */
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    input, textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
    }

    input[type="submit"] {
        background-color: #2596be; /* Değişiklik burada */
        color: white;
        cursor: pointer;
    }

    input[type="submit"]:hover {
        background-color: #1c7aa3; /* Değişiklik burada */
    }
</style>

</head>
<body>
    <?php
        session_start();

        // Oturum açmış admin kontrolü
        if (!isset($_SESSION['admin_logged_in'])) {
            header("Location: Ana Sayfa.php");
            exit();
        }
    ?>
    
    <?php
    // Form gönderildi mi kontrol et
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Veritabanı bağlantısı için bilgiler
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "uyelik";

        // Veritabanı bağlantısını oluştur
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Bağlantıyı kontrol et
        if ($conn->connect_error) {
            die("Veritabanı bağlantısı başarısız: " . $conn->connect_error);
        }

        // POST verilerini al
        $kullanici_adi = $_POST['kullanici_adi'];
        $parola = password_hash($_POST['parola'], PASSWORD_DEFAULT); // Parolayı hashle

        // SQL sorgusunu oluştur
        $sql = "INSERT INTO yönetici (yisim, yparola) VALUES ('$kullanici_adi', '$parola')";

        // Sorguyu çalıştır ve sonucu kontrol et
        if ($conn->query($sql) === TRUE) {
            echo "Kayıt işlemi başarıyla gerçekleşti.";
        } else {
            echo "Hata: " . $sql . "<br>" . $conn->error;
        }

        // Veritabanı bağlantısını kapat
        $conn->close();
    }
    ?>

    <h2 style="margin-right: 40px;">Kayıt Ol</h2>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="kullanici_adi">Kullanıcı Adı:</label>
        <input type="text" id="kullanici_adi" name="kullanici_adi" required><br>

        <label for="parola">Parola:</label>
        <input type="password" id="parola" name="parola" required><br>

        <input type="submit" value="Kayıt Ol">
    </form>

</body>
</html>
