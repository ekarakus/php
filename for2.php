<?php
for ($i=1; $i <=$_GET["sayi"]; $i++) { 
    if($i % 2 != 0)
        echo "$i . Sayı tek<br>";
    else
        echo "$i .Sayı çift<br>";
}
?>