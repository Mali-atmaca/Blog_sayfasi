<?php
require 'veritabani.php';

if (!isset($_SESSION['kullanici_ad'])) {
    header("Location: giris.php");
    exit;
}

if (!isset($_POST['id']) || empty($_POST['id'])) {
    die("Geçersiz gönderi ID.");
}

$id = (int)$_POST['id'];
$kullanici = $_SESSION['kullanici_ad'];

$sil = $db->prepare("DELETE FROM gonderiler WHERE id = :id AND kullanici_ad = :kullanici_ad");
$sil->execute([
    ":id" => $id,
    ":kullanici_ad" => $kullanici
]);

header("Location: index.php?silme=basarili");
exit;
?>

