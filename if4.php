<?php
if (!isset($_GET["ad"])) {
    echo "lütfen ad değerini gönderin";
} else {
    if (empty($_GET["ad"])) {
        echo "ad değerinini doldurun!...";
    } else {
        echo $_GET["ad"];
    }
}
