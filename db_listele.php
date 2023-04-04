<?php
// MySQL veritabanı bağlantısı
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "servis";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Bağlantı hatası kontrolü
if (!$conn) {
  die("Bağlantı hatası: " . mysqli_connect_error());
}

// Veritabanındaki ogrenciler tablosundan kayıtları sorgula
$sql = "SELECT no, ad, soyad, dogum_tarihi FROM ogrenci";
$result = mysqli_query($conn, $sql);

// Sorgu sonucunda kayıt varsa, verileri ekrana yazdır
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "No: " . $row["no"]. " - Ad: " . $row["ad"]. " - Soyad: " . $row["soyad"]. " - Doğum Tarihi: " . $row["dogum_tarihi"]. "<br>";
  }
} else {
  echo "Kayıt bulunamadı";
}

// MySQL bağlantısını kapat
mysqli_close($conn);
?>
