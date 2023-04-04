<?php
session_start();
if(isset($_SESSION["uye"])){
    echo "<h1> kayıtlı kullanıcı var</h1>";
    echo $_SESSION["uye"];
} else{
    header("Location:hata.html");
}
?>