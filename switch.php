<?php
$ehliyet="B";
switch($ehliyet)
{
    case 'A1':{echo "125cc ye kadar";break;}
    case 'A2':{echo "125cc üstü ";break;}
    
    default:{
        echo 'Geçersiz ehliyet sınıfı.';
        break;}
}
?>