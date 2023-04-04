<?php
if (isset($_POST["hatirla"])) {
    setcookie("email", $_POST["email"], time() + (60 * 60));
} else {
    setcookie("email", null, time() - 1);
}
?>

<h1>giriş yapıldı </h1>
<a href="giris-cerez.php"> giriş e geri git</a>