<?php
session_start();
$host='localhost';
$dbname='blog_sitesi';
$username='root';
$password='';


try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // PDO nesnesi oluşturma
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Hata ayıklama modu
    $db->exec("SET NAMES 'utf8'"); // Karakter setini UTF-8 olarak ayarlama
    
} catch (PDOException $e) {
    echo "Bağlantı Hatası: " . $e->getMessage();
    exit();
}

?>


