<?php
//$klasor="c:\wa"
$dosya="ugur.txt";
if(file_exists($dosya)==false){
    touch($dosya);
}
$baglanti=fopen($dosya,"r");

while(!feof($baglanti))
{
    echo fgets($baglanti)."<br>";
}
fclose($baglanti);
echo "yazma işlemi başarıyla gerçekleşti";

?>