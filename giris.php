<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<meta charset="utf8"/>
<div class="container my-4">
<?php
if(!isset($_REQUEST["email"]) || !isset($_REQUEST["password"]))
{
    echo "<div class='alert alert-danger'>email ve şifre girilmelidir</div>";
    exit(0);
}
else{
    if(empty($_REQUEST["email"]) || empty($_REQUEST["password"])){
        echo "<div class='alert alert-danger'>email ve şifre boş bıraklılamaz</div>";
        exit(0);
    }
}
$email=$_REQUEST["email"];
$password=$_REQUEST["password"];
if($email=="ayberkpancar7@gmail.com" && $password=="12345"){
    echo "<div class='alert alert-success'>giris başarılı</div>";
}
else{
    echo "<div class='alert alert-danger'>kullanıcı adı veya şifre geçersiz</div>";
}
?>
</div>