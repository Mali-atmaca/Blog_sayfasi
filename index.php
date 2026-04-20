<?php
require 'veritabani.php';
if (!isset($_SESSION['kullanici_ad'])) {
    echo '
    <!DOCTYPE html>
    <html lang="tr">
    <head>
        <meta charset="UTF-8">
        <title>Anasayfa</title>
        <link rel="stylesheet" href="style_Anasayfa.css">
    </head>
    <body>
        <div class="message-box">
            <h2>Blog Sayfanıza Hoşgeldiniz</h2>
            <p>Bu sayfayı görüntülemek için giriş yapmanız gerekiyor.</p>
            <a href="giris.php">Giriş Yap</a>
        </div>
    </body>
    </html>';
    exit();
}
?>


<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Anasayfa</title>
  <link rel="stylesheet" href="style_genel.css">
  <link rel="stylesheet" href="style_Anasayfa.css">
</head>
<body>
<div class="container">
<h2>Hoşgeldin, <?= $_SESSION['kullanici_ad'] ?> | <a href="cikis.php">Çıkış</a></h2>
<a href="yeni_gonderi.php">Yeni Gönderi Oluştur</a><hr>


<?php
$veriler = $db->prepare("SELECT * FROM gonderiler WHERE kullanici_ad = :kullanici_ad");
$veriler->execute([':kullanici_ad' => $_SESSION['kullanici_ad']]);
foreach ($veriler->fetchAll(PDO::FETCH_OBJ) as $gonderi) {
    echo "<div class='post'>";
    echo "<h3>" . htmlspecialchars($gonderi->baslik) . "</h3>";
    echo "<p>" . htmlspecialchars(substr($gonderi->icerik, 0, 100)) . "...</p>";
    echo "<div class='button-group'>";
    echo "<a href='yeni_gonderi.php?id=" . urlencode($gonderi->id) . "'>Düzenle</a>";
    echo '<a href="detaylar.php?id=' . $gonderi->id . '">Detay</a>';


    echo "<form method='POST' action='gonderi_sil.php' onsubmit=\"return confirm('Silmek istediğinize emin misiniz?');\" style='display:inline'>";
    echo "<input type='hidden' name='id' value='" . htmlspecialchars($gonderi->id) . "'>";
    echo "<button type='submit'>Sil</button>";
    echo "</form>";

    echo "</div></div>";
}
?>
</div>
</body>
</html>