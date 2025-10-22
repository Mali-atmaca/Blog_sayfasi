<?php
require 'veritabani.php';
if (!isset($_SESSION['kullanici_ad'])) header("Location: giris.php");

$id = $_GET['id'];
$veriler = $db->prepare("SELECT * FROM gonderiler WHERE id = :id AND kullanici_ad = :kullanici_ad");
$veriler->execute([
    ":id" => $id,
    ":kullanici_ad" => $_SESSION['kullanici_ad']
]);
$post = $veriler->fetch(PDO::FETCH_OBJ);

if (!$post) exit("Bu gönderiye erişemezsiniz.");

if (isset($_POST['islem']) && $_POST['islem'] == 'guncelle') {
    $guncelle = $db->prepare("UPDATE gonderiler SET baslik = :baslik, icerik = :icerik WHERE id = :id AND kullanici_ad = :kullanici_ad");
    $guncelle->execute([
        ":baslik" => $_POST['baslik'],
        ":icerik" => $_POST['icerik'],
        ":id" => $id,
        ":kullanici_ad" => $_SESSION['kullanici_ad']
    ]);
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Düzenle</title>
  <link rel="stylesheet" href="style_genel.css">
  <link rel="stylesheet" href="style_duzenle.css">
</head>
<body>
<div class="container">

<form method="post">
    <link rel="stylesheet" href="style.css">
  Başlık: <input type="text" name="baslik" value="<?= $post->baslik ?>"><br>
  İçerik:<br><textarea name="icerik"><?= $post->icerik ?></textarea><br>
  <input type="submit" name="islem" value="guncelle">
</form>
</div>
</body>
</html>
