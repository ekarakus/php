<?php
function alt(){
    return "<div><h1 style='color:green'>Burası alt</h1></div>";
}
function selamla($mesaj){
    echo "<div><h1 style='color:green'>$mesaj</h1></div>";
}
function topla($a,$b)
{
    return $a+$b;
}

function kare($sayi)
{
    //return pow($sayi,2);
    return $sayi**2;
}

?>