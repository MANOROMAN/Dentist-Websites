<?php
session_start();

// Oturum açmış admin kontrolü
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_giris.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Paneli</title>

    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
        }

        button {
            margin: 10px;
            padding: 10px;
            width: 200px; 
            color: white;
            background-color: #2596be;
        }
    </style>

</head>
<body>
    <h2>Admin Paneli</h2>

    <button type="button" onclick="window.location.href='admin_sil.php'">Admin Sil</button>
    <button type="button" onclick="window.location.href='admin_kayit.php'">Yeni Admin Ekle</button> <br>
    <button type="button" onclick="window.location.href='icerik_ekle.php'">İçerik Ekle</button> <br>
    <button type="button" onclick="window.location.href='icerik_sil.php'">İçerik Sil</button> <br>
    <button type="button" onclick="window.location.href='icerik_güncelle.php'">İçerik Güncelle</button>
    <button type="button" onclick="window.location.href='admin_cikis.php'">Çıkış</button> <br>
    
</body>
</html>
