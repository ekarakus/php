<?php
$ogrenci = [
	'ad' => 'Uğur',
	'soyad' => 'Hamamcı',
	'kankalar' => ["serkan","erkan","hakan"]
];
echo "Merhaba ben ".$ogrenci["ad"];
echo " <br> En sevdiğim kankam da ".$ogrenci["kankalar"][0];

?>