<?php
$puan=80;
$durum="";
/*if($puan>=50) {
    $durum="geçti";
} else{
    $durum="kaldı";
}*/
$durum=($puan>=50)?"geçti":"kaldı";
echo "<h1>$durum</h1>";
?>