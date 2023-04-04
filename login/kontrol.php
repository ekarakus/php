<?php
session_start();
require_once("baglan.php");
// Kullanıcı adı ve şifre doğruysa, ana sayfaya yönlendirilir.
$username=$_POST["username"] ;
$password=$_POST["password"] ;

$sql = "select * FROM users WHERE username = '$username' and password = '$password' ";
$result = mysqli_query($connect,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if($row){
$_SESSION["user"]=$username;
header("Location:index.php");
} else{
  header("Location:login.php?mesaj=giriş başarısız");
}
//mysqli_close($connect);
?>