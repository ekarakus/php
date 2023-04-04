<?php
$host = "localhost"; // veritabanı sunucusunun adresi
$user = "root"; // veritabanı kullanıcısı
$password = ""; // veritabanı kullanıcısının şifresi
$database = "app"; // kullanılacak veritabanının adı

// Veritabanı bağlantısı oluştur
$connect = mysqli_connect($host, $user, $password, $database);

// Veritabanı bağlantısı başarısız olursa hata mesajı göster
if (!$connect) {
    die("Veritabanı bağlantısı başarısız: " . mysqli_connect_error());
}
?>
