<?php
$deger="Doğukan";
if(setcookie("test_cerezi",$deger, time() + (60*60*24))){
    echo "çerez kaydedildi";
}

?>