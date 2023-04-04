<?php
echo time();
$dakika = time()/60;
$saat= $dakika/60;
$gun= $saat/24;
$ay=$gun/30;
$yil=$ay/12;
echo "Sistemin kuruluşundan itibaren geçen yıl ". $yil;
?>