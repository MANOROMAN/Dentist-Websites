<?php
function head_kısmı($title){
    echo'    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Antic&family=Pavanam&display=swap" rel="stylesheet">
            
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>'.$title.'</title>
            <link href="\224410055_Yusuf_GÜNEL\CSS\styles.css" rel="stylesheet">
        </head>
    ';
}

function ana_sayfa_karşılama_ekranı(){
    echo'
    <body>
    <img src="\224410055_Yusuf_GÜNEL\Resimler\Karşılama Fotoğrafı.png" style="width: 195.82vh; height: 100vh; position: relative;">
  
    <a href="Ana Sayfa.php">
            <img src="\224410055_Yusuf_GÜNEL\Resimler\Diş Logosu.png" class="dişf">
            <span class="isim">Günel Diş Kliniği</span>
    </a>

    <p style="top: 0; left: 0; position: absolute; padding-left: 380px; padding-top: 55px; text-decoration: none; color:#2596be ;"> Tel: +90 555 555 55 55</p>
    
    <a href="login.php" style="font-size:35px; top: 0; left: 0; position: absolute; padding-left: 1300px; padding-top: 55px; text-decoration: none; color:#2596be ;">Giriş Yap</p>    

    <h1 style="position: absolute; top: 0; left: 0; margin-top: 300px; margin-left: 145px; font-size: 70px; color: #2596be;">Günel Diş Sağlığı Kliniği</h1>
    <h2 style="position: absolute; top: 0; left: 0; margin-top: 450px; margin-left: 145px; font-size: 40px; color: #2596be;">Gülümsemek İçin Bir Neden Daha</h2>

    <a href="Online Randevu.html" class="btn">Randevu Al</a>

    <br><br><br><br><br><br><br><br>
    ';
}

function ana_sayfa_Sunduğumuz_Hizmetler1(){
    echo'<h1 style="margin-left: 250px; margin-top: -50px; font-size: 45px;">Sunduğumuz <br>Hizmetler</h1>
    <br>
        <div class="tap">
            <img src="\224410055_Yusuf_GÜNEL\Resimler\Diş Icon.png" style="width: 600px; height: 600px; margin-left: 30px; margin-top: 100px;">
        </div>
        <a href="Online Randevu.html" class="btn2">Randevu Al</a>';
        
}

function ana_sayfa_Sunduğumuz_Hizmetler2($content_sh, $baslik_sh){
    echo'
            <div class="arkaplan1"> ';
                
                for($i=0 ; $i<count($content_sh) ; $i++){

                    if($i==0 || $i%3==0 ){
                        echo'<div class="fl">';                        
                    }
                        
                    echo'<h1>'.$baslik_sh[$i].'</h1>';
                    echo'<p>'.$content_sh[$i].'</p>';

                    
                    if(($i+1)%3==0 ){
                        echo'</div>';
                    }

                }
            
        echo '</div>';
    
}

function ana_sayfa_Ekibimiz(){
    echo'
        <h2 style="margin-top: 65vh; margin-left: 85vh; font-size: 45px;">EKİBİMİZ</h2>

        <br><br><br><br><br><br><br><br><br><br><br><br><br>
            
        <div class="arkaplan2">
            <figure>
                <img src="\224410055_Yusuf_GÜNEL\Resimler\1. Diş Hekimi.jpeg">
                <figcaption>
                    <p style="font-size: 23px; margin-left: 120px;"><b>Uzm. Dr. Dt. Göktuğ</b></p>                     
                        <p>Gülüşünüzü bir sanat eserine dönüştüren Dr. Göktuğ, estetik diş hekimliği konusunda uzmanlaşmış bir gülüş tasarımcısıdır. Modern teknoloji ve kişisel ilgiyle her hastasına özel tedavi sunarak, sağlıklı ve çarpıcı gülüşlere imza atıyor. Siz de gülüşünüzü güzelleştirmek için Dr. Göktuğ un uzmanlığından faydalanın.</p>         
                </figcaption>
            </figure>
            
            <figure>
                <img src="\224410055_Yusuf_GÜNEL\Resimler\2. Diş Hekimi.webp">
                <figcaption>
                    <p style="font-size: 23px; margin-left: 120px;"><b>Uzm. Dr. Dt. Yağmur</b></p>
                    <p>Minik hastalarınıza özel bir yaklaşımla çocuk diş sağlığını destekleyen Dr. Yağmur, eğlenceli ve güvenli bir ortamda çocukların diş sağlığına önem veriyor. Oyunlarla dolu bir diş hekimi deneyimi ile çocuklarınıza sağlıklı diş alışkanlıkları kazandırmak için Dr. Yağmur un alanında uzman bakımından faydalanın.</p>          
                </figcaption>        
            </figure>
                
            <figure>
                <img src="\224410055_Yusuf_GÜNEL\Resimler\3. Diş Hekimi.jpeg">
            <figcaption>  
                <p style="font-size: 23px; margin-left: 120px;"><b>Uzm. Dr. Dt. Aleyna</b></p>
                <p>Dr. Aleyna, genel diş sağlığı ve ağız hijyeninde uzmanlaşmış bir hekimdir. Profesyonel ekibiyle birlikte, hastalarına en son teknolojiyle donatılmış bir klinikte kapsamlı diş bakımı sunar. Siz de güvenilir ve etkili diş sağlığı hizmeti almak için Dr. Aleyna ın kliniğini tercih edin.</p>    
            </figcaption>        
            </figure>
        </div>
        ';
    }
       
function ana_sayfa_Hasta_Görüşleri(){
    echo'
        <h2 style="margin-top: 15vh; margin-left: 20vh; font-size: 45px;">Hasta <br> Görüşleri</h2>

        <div class="map">
            <img src="\224410055_Yusuf_GÜNEL\Resimler\4.png" style="width: 500px; height: 388px; margin-left: 50px;">  
        </div>

        <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
            <div id="overflow">
                <div class="inner">
                    <div class="slide slide_1">
                        <div class="slide-content">
                        <h2>Mehmet Gürsoy</h2>
                        <p>"Diş kliniğinizdeki deneyimim harikaydı.Tedavim sırasında</p> 
                        <p>doktorunuzun uzmanlığı ve personelin samimiyeti beni etkiledi.</p> 
                        <p>Ayrıca kliniğinizin temizliği ve modern ekipmanlarınız da güven</p>
                        <p>verici. Teşekkür ederim!"</p>
                        </div>
                    </div>

                    <div class="slide slide_2">
                        <div class="slide-content">
                        <h2>Sema Yılmaz</h2>
                        <p>Diş problemlerim için geldiğim klinikte alınan hizmetten çok</p> 
                        <p>memnun kaldım. Detaylı açıklamaları ve tedavi önerileri beni </p> 
                            <p>rahatlattı. Klinik atmosferi sakin ve rahatlatıcı. Herkese gönül</p>
                            <p> rahatlığıyla tavsiye ederim."</p>
                        </div>
                    </div>

                    <div class="slide slide_3">
                        <div class="slide-content">
                        <h2>Caner Şen</h2>
                        <p>"Diş kliniğinizdeki hizmetlerden çok memnun kaldım. Randevu</p>
                        <p>sistemini kullanmak kolaydı ve bekleme süreleri oldukça kısaydı.</p>
                        <p>Doktorunuzun bilgi ve deneyimi sayesinde tedavim sorunsuz bir </p>
                        <p>şekilde tamamlandı. Teşekkür ederim!"</p>
                        </div>
                    </div>

                    <div class="slide slide_4">
                        <div class="slide-content">
                        <h2>Fatma Demir</h2>
                        <p>"Diş kliniğinizdeki personelin güler yüzü ve ilgisi beni çok</p>
                        <p>etkiledi. Randevu almak kolay, klinik temiz ve düzenli.</p>
                        <p>Tedavim boyunca yaşadığım her türlü sorunla ilgili samimi bir</p>
                        <p>iletişimle karşılandım. Teşekkürler!"</p>
                        </div>
                    </div>
                </div>
            </div>   
            </div>
            <div id="controls">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            </div>
            <div id="bullets">
            <label for="slide1"></label>
            <label for="slide2"></label>
            <label for="slide3"></label>
            <label for="slide4"></label>
            </div>
        </div>
    </body>
    ';
}

function Footer_Alt_Kısım(){
    echo'
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
    ';
}


function Online_Randevu(){
    echo'
        <h1 style="font-size: 55px; margin-top: 200px; margin-left: 250px;">Hemen Online<br>Randevu Alın</h1>

        <table style="margin-left: 250px; width: 1113px;">
            <tr>
                <td style="width: 550px;"></td>
                <td style="width: 350px;"></td>
                <td></td>
            </tr>

            <tr>
                <td><a href="">Muayene</a></td>
                <td class="or">45 dakika<br>500₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Diş Beyazlatma</a></td>
                <td class="or">45 dakika<br>2500₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Diş Temizleme</a></td>
                <td class="or">45 dakika<br>1500₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Özel Ağız Koruyucuları</a></td>
                <td class="or">45 dakika<br>750₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Diş Cilası ve Leke Çıkarma</a></td>
                <td class="or">45 dakika<br>1000₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Florür Uygulaması</a></td>
                <td class="or">45 dakika<br>750₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>

            <tr>
                <td><a href="">Çocuk Diş Sağlığı</a></td>
                <td class="or">45 dakika<br>500₺</td>
                <td><a href="" class="btn4">Randevu Al</a></td>
            </tr>
        </table>
    ';
}

?>