<meta charset="utf8"/>
<?php
session_start();
if(!isset($_SESSION["user"])){
    header("Location:login.php");
}
?>
<h1>Hoş geldin 
<?php
echo $_SESSION["user"];
?>

</h1> 
<a href="logout.php">Çıkış</a>