<?php
session_start();
session_destroy();
header("Location:login.php?mesaj=çıkış  yaptınız");
?>