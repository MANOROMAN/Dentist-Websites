<?php
    session_start();

    // Oturum açmış admin kontrolü
    if (!isset($_SESSION['kullanici_logged_in'])) { 
        header("Location: login.php");
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Merhaba</title>
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .logout-link {
            color: white;
            background-color: #2596be;
            border: 1px solid;
            padding: 5px 10px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <?php
        echo "<div class='message-container'>";
        echo "<h3>Merhaba ".$_SESSION["kullanici_adi"]."  ".$_SESSION["kullanici_soyadi"]."<br> Randevunuz oluşturulmuştur.</h3>";
        echo "<a href='cikis.php' class='logout-link'>Çıkış Yap</a>";
        echo "</div>";

    ?>
</body>
</html>
