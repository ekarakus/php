
<?php
// MySQL veritabanı bağlantısı için gerekli bilgileri tanımlayın
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servis";

// MySQL veritabanı sunucusuna bağlanın
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı hatası var mı diye kontrol edin
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "bağlandı";
}
?>