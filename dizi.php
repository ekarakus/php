<?php
$gunler=["Pazartesi","Salı","Çarşamba","Perşembe"];
$aylar = array("Ocak","Şubat","Mart","Nisan");

for ($i=0; $i <count($gunler); $i++) { 
    echo $gunler[$i];
}
echo "<hr>Aşağıdakiler foreach ile geliyor
<hr>";
foreach($aylar as $ay){
 echo "aylardan $ay<br>";
}

$a=0;
while ($a < count($aylar)) {    
    echo $aylar[$a];
    $a++;
}
?>