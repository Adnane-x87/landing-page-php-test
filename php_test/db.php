<?php
$host = "localhost";
$dbname = "produits";
$user = "root";
$pass = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    error_log("Connection failed: " . $e->getMessage());
    die("حدث خطأ أثناء الاتصال بقاعدة البيانات. من فضلك حاول لاحقاً.");
}
?>
