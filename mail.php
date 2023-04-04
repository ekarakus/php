<?php
// İleti
$ileti = "Line 1\r\nLine 2\r\nLine 3";

// Satırlarımızın 70 karakterden uzun olanlarını katlamamız lazım
$ileti = wordwrap($ileti, 70, "\r\n");

// Epostayı gönderelim
if(mail('ekarakus@btofis.com', 'İleti konusu', $ileti))
echo "işlem başarılı";
else
echo "Olmadı!..";

?>