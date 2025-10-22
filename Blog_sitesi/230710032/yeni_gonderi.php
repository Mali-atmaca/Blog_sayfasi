<?php
require 'veritabani.php';
if (!isset($_SESSION['kullanici_ad'])) { header("Location: login.php"); exit(); }
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Yeni Gönderi</title>
  <link rel="stylesheet" href="style_genel.css">
  <link rel="stylesheet" href="style_yeni.css">
</head>
<body>
<div class="container">
<form method="post">
  Başlık: <input type="text" name="baslik" required><br>
  İçerik:<br><textarea name="icerik" rows="5" cols="40" required></textarea><br>
  <input type="submit" name="islem" value="ekle">
</form>
<?php
if (isset($_POST['islem']) && $_POST['islem'] == 'ekle') {
    $veriler = $db->prepare("INSERT INTO gonderiler (kullanici_ad, baslik, icerik) VALUES (:kullanici_ad, :baslik, :icerik)");
    $veriler->execute([
        ":kullanici_ad" => $_SESSION['kullanici_ad'],
        ":baslik" => $_POST['baslik'],
        ":icerik" => $_POST['icerik']
    ]);
    header("Location: index.php");
}
?>
</div>
</body>
</html>