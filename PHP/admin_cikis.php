<?php
    session_start();

    // Oturum açmış admin kontrolü
    if (!isset($_SESSION['admin_logged_in'])) {
        header("Location: Ana Sayfa.php");
        exit();
    }
?>

<?php
session_start();

// Oturumu kapat
session_destroy();

$_SESSION['admin_logged_in'] = false;

// Giriş sayfasına yönlendir
header("Location: admin_giris.php");
exit();
?>
