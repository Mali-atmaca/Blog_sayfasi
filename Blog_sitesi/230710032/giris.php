<?php
require 'veritabani.php'; 
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Giriş Yap</title>
  <link rel="stylesheet" href="style_genel.css">
  <link rel="stylesheet" href="style_giris.css">
</head>
<body>
<div class="container">
<form method="post">
  Kullanıcı Adı: <input type="text" name="kullanici_ad" value="<?= isset($_COOKIE['hatirla']) ? $_COOKIE['hatirla'] : '' ?>" required><br>
  Sifre: <input type="password" name="sifre" required><br>
  <input type="submit" name="islem" value="giris">
</form>

<?php
if (isset($_POST['islem']) && $_POST['islem'] == 'giris') {
    $veriler = $db->prepare("SELECT * FROM kullanicilar WHERE (kullanici_ad = :kullanici_ad OR email =:kullanici_ad) AND sifre = :sifre");
    $veriler->execute([
        ":kullanici_ad" =>$_POST['kullanici_ad'],
        ":sifre" =>md5($_POST['sifre'])
    ]);
    $sonuc =$veriler->fetch(PDO::FETCH_OBJ);

    if ($sonuc) {
        $_SESSION['kullanici_ad'] = $sonuc->kullanici_ad;
        setcookie("hatirla", $sonuc->kullanici_ad, time() + (86400 * 7), "/");
        header("Location: index.php");
        exit();
    } else {
        echo "Hatalı giriş!";
    }
}
?>
</div>
</body>
</html>
