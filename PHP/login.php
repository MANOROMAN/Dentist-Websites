<?php

include("baglanti.php");

if(isset($_POST["giriş"])){

    $email = $_POST["email"];
    $parola = $_POST["sifre"];

    if(isset($email) && isset($parola)){
        $secim = "SELECT * FROM  kullanicilar WHERE email = '$email'";
        $calistir = mysqli_query($baglanti, $secim);
        $kayitsayisi = mysqli_num_rows($calistir); 

        if($kayitsayisi>0){
            $ilgilikayit = mysqli_fetch_assoc($calistir);
            $hashlisifre = $ilgilikayit["parola"];

            if(password_verify($parola, $hashlisifre)){
                session_start();
                $_SESSION['kullanici_logged_in'] = true;
                $_SESSION['kullanici_adi'] = $ilgilikayit['kullanici_adi']; // Kullanıcı adınızın sütun adını kullanmalısınız
                $_SESSION['kullanici_soyadi'] = $ilgilikayit['kullanici_soyadi']; // Kullanıcı soyadının sütun adını kullanmalısınız        
                header("location:profile.php");
            }
            else{
                echo'<div class="alert-danger" role="alert">
                Girilen şifre yanlış!
                </div>';
            }
        }

        else{
            echo'<div class="alert-danger" role="alert">
            Girilen email yanlış!
            </div>';
        }

        mysqli_close($baglanti);
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../CSS/styles.css" rel="stylesheet">
</head>
<body>
    
    <a href="Ana Sayfa.php">
        <img src="../Resimler/Diş Logosu.png" class="dişf">
        <span class="isim">Günel Diş Kliniği</span>
    </a>

    <p style="top: 0; left: 0; position: absolute; padding-left: 380px; padding-top: 55px; text-decoration: none; color:#2596be;"> Tel: +90 555 555 55 55</p>


    <form class="f1" method="POST">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>

        <label for="sifre">Şifre:</label>
        <input type="password" id="sifre" name="sifre" minlength="6" required>

        <button type="submit" class="buton5" name="giriş">Giriş Yap</button>
        <br><br>
        <a href="kayit.php  ">Üye değil misiniz? Kayıt olmak için tıklayınız.</a>
    </form>



</body>

<footer>
    <div class="arkaplan4">
        <div class="fl">
            <h2 style="margin-left: 100px; margin-top: 90px;">Günel <br> Diş Sağlığı Kliniği</h2>
            <br>
            <h3 style="margin-left: 100px; margin-top: -7px;">Adresimiz</h3><br>
            <p style="margin-left: 100px; margin-top: -20px;">E-posta: <a  href="mailto:yusufgunel71@hotmail.com">yusufgunel71@hotmail.com</a></p><br>
            <p style="margin-left: 100px; margin-top: -20px;">Tel: +90 212 123 45 67</p><br>
            <p style="margin-left: 100px; margin-top: -20px;">Osmangazi Caddesi No. 71</p><br>
            <p style="margin-left: 100px; margin-top: -20px;">Merkez, Kastamonu, Türkiye 35647</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5982.098681775513!2d33.75550157529032!3d41.43815102468032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4084fb3ca356dc11%3A0x8276cd69885e00e9!2sKastamonu%20%C3%9Cniversitesi%20M%C3%BChendislik%20ve%20Mimarl%C4%B1k%20Fak%C3%BCltesi!5e0!3m2!1str!2str!4v1704357535771!5m2!1str!2str" width="400" height="300" style="border:0; margin-left: 40px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="fl">
            <h3 style="margin-top: 120px; margin-left: 200px;">Çalışma Saatleri</h3>
            <p style="margin-left: 200px; margin-top: 38px;">Pts, Çar, Per: 09:00 - 17:00</p><br>
            <p style="margin-left: 200px; margin-top: -20px;">Sal: 11:00 - 19:00</p><br>
            <p style="margin-left: 200px; margin-top: -20px;">Cum: 09:00 - 13:00</p><br>  
            <p style="margin-left: 200px;  margin-top: -20px;">Sadece randevu ile</p>
            <a href="Online Randevu.html" class="btn3">Randevu Al</a>
        </div>
        
        <div class="fl">
            <h3 style="margin-top: 120px; margin-left: 300px;">Bize Ulaşın</h3>
            <div class="form-container">
                <div class="form-group">
                    <label style="margin-top: 36px;" for="ad">Adı</label>
                    <input type="text" id="ad" name="ad">
                </div>
        
                <div class="form-group">
                    <label for="soyad">Soyadı</label>
                    <input type="text" id="soyad" name="soyad">
                </div>
        
                <div class="form-group">
                    <label for="telefon">Telefon</label>
                    <input type="text" id="telefon" name="telefon">
                </div>
        
                <div class="form-group">
                    <label for="mesaj">Mesajınız</label>
                    <textarea id="mesaj" name="mesaj"></textarea>
                </div>
        
                <button type="submit">Gönder</button>
            </div>
        </div>
    </div>

    <div class="arkaplan5">
        <a href="Gizlilik Politikası.html">Gizlilik Politikası</a>
        <a href="Çerez Politikası.html">Çerez Politikası</a>
        <a href="Şart ve Koşullar.html">Şart ve Koşullar</a>
    <br>
        <p style="color: white;">©2035, Günel Diş Kliniği MANOROMAN altyapısı ve güvencesiyle</p>
    </div>
</footer>

</html>