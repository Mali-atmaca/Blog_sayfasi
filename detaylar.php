<?php
require 'veritabani.php';

if (!isset($_GET['id'])) {
    echo "Geçersiz istek.";
    exit();
}

$gonderi_id = intval($_GET['id']);

$detay = $db->prepare("SELECT * FROM gonderiler WHERE id = ?");
$detay->execute([$gonderi_id]);
$gonderi = $detay->fetch();

if (!$gonderi) {
    echo "Gönderi bulunamadı.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Gönderi Detayı</title>
    <link rel="stylesheet" href="style_genel.css">
</head>
<body>
    <h2><?php echo htmlspecialchars($gonderi['baslik']); ?></h2>
    <p><?php echo nl2br(htmlspecialchars($gonderi['icerik'])); ?></p>
    <small>Oluşturulma tarihi: <?php echo $gonderi['created_at']; ?></small>
    <br><br>
    <a href="index.php">Ana sayfaya dön</a>
</body>
</html>
