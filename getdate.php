<?php
date_default_timezone_set('Europe/Istanbul');
echo date_default_timezone_get();
echo "<hr>";
$tarih=getdate();
// echo print_r($tarih);
echo "Bugün " . $tarih["mday"]  ."-".  $tarih["mon"]  ."-". $tarih["year"]. " ".($tarih["hours"]) . ":".$tarih["minutes"].":".$tarih["seconds"];
?>