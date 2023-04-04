<?php
session_start();
$_SESSION["uye"]="Ergün";
echo "oturuma kayıt yapıldı :"  . $_SESSION["uye"];
?>