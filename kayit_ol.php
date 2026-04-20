<?php
require 'veritabani.php';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Kayıt Ol</title>
  <link rel="stylesheet" href="style_genel.css">
  <link rel="stylesheet" href="style_kayit.css">
</head>
<body>
<div class="container">
<h2>Kayıt Ol</h2>

<form method="post">
  Kullanıcı Adı: <input type="text" name="kullanici_ad" required><br>
  E-posta: <input type="email" name="email" required><br>
  Şifre: <input type="password" name="sifre" required><br>
  <input type="submit" name="kayit" value="Kayıt Ol">
</form>

<?php
if (isset($_POST['kayit'])) {
    $kullanici_ad = $_POST['kullanici_ad'];
    $email = $_POST['email'];
    $sifre = md5($_POST['sifre']); 

    // Aynı kullanıcı adı veya email varsa engelle
    $kontrol = $db->prepare("SELECT * FROM kullanicilar WHERE kullanici_ad = :ad OR email = :email");
    $kontrol->execute([
        ':ad' => $kullanici_ad,
        ':email' => $email
    ]);

    if ($kontrol->rowCount() > 0) {
        echo "<p style='color:red;'>Bu kullanıcı adı veya e-posta zaten kayıtlı.</p>";
    } else {
        $ekle = $db->prepare("INSERT INTO kullanicilar (kullanici_ad, email, sifre) VALUES (:ad, :email, :sifre)");
        $ekle->execute([
            ':ad' => $kullanici_ad,
            ':email' => $email,
            ':sifre' => $sifre
        ]);
        echo "<p style='color:green;'>Kayıt başarılı! <a href='login.php'>Giriş yap</a></p>";
        header("Location: giris.php?durum=kayit-ok");
    exit;
    }
}

?>
</div>
</body>
</html>
