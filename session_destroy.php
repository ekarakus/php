<?php
session_start();
session_destroy();
echo session_id();
?>