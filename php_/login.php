<?php
/*  ******   SABİT DOĞRU BİLGİLER   ******  */
$dogruMail = "b1812100001@sakarya.edu.tr";
$dogruSifre = "b1812100001";

/*  ******  FORM’DAN GELEN VERİ  ******  */
$email = isset($_POST['email'])    ? trim($_POST['email'])    : '';
$pass  = isset($_POST['password']) ? trim($_POST['password']) : '';

/*  ******  KONTROL  ******  */
if ($email === $dogruMail && $pass === $dogruSifre) {
    // Başarılı giriş
    // Hoş geldiniz mesajında domain içermeyen hali isteniyor
    $ogrNo = explode('@', $email)[0];   // b1812100001
    echo "<!DOCTYPE html>
          <html lang='tr'><head><meta charset='UTF-8'><title>Hoşgeldiniz</title>
          <link rel='stylesheet' href='css_/style.css'></head><body>
          <div class='container mt-5 text-center'>
            <h1>Hoş geldiniz $ogrNo</h1>
            <a href='index.html' class='btn btn-primary mt-3'>Siteye Git</a>
          </div>
          </body></html>";
} else {
    // Başarısız → login sayfasına geri yönlendir
    header("Location: login.html?error");
    exit;
}
?>
