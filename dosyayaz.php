<?php
//$klasor="c:\wa"
$dosya="ugur.txt";
if(file_exists($dosya)==false){
    touch($dosya);
}
$baglanti=fopen($dosya,"a");
fwrite($baglanti,"selamlar\r\n");
fclose($baglanti);
echo "yazma işlemi başarıyla gerçekleşti";

?>