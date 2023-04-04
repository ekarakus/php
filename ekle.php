<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servis";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$no = $_POST['no'];
$ad = $_POST['ad'];
$soyad = $_POST['soyad'];
$dogum_tarihi = $_POST['dogum_tarihi'];

$sql = "INSERT INTO ogrenci (no, ad, soyad, dogum_tarihi)
VALUES ('$no', '$ad', '$soyad', '$dogum_tarihi')";

if (mysqli_query($conn, $sql)) {
    echo "Öğrenci başarıyla eklendi";
} else {
    echo "Hata: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
