<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<?php
$sayi=$_REQUEST["sayi"];
echo "<h1> girilen sayı $sayi </h1>";
$toplam=0;
for ($i=0; $i <= $sayi; $i++){ 
    $toplam+=$i;
}
echo "<h1 class='alert alert-info'>$sayi a kadar olan sayıların toplamı  $toplam </h1>";
?>