<?php
function yasbul($gun, $ay, $yil)
{
    $yas = mktime(0, 0, 0,  $ay,$gun, $yil);
    $simdi = time();
    $fark = $simdi - $yas;
    return ($fark / 60 / 60 / 24 / 30 / 12);
}
echo "Serkan " . yasbul(15,12,2005) ;
echo "<hr>";
echo "Uğur " . yasbul(2,9,2005);
echo "<hr>";
echo "Neslihan " . yasbul(28,6,2005);
?>
