<?php
require 'veritabani.php';
session_destroy();
setcookie("hatirla", "", time() - 3600, "/");
header("Location: giris.php");
exit();
?>