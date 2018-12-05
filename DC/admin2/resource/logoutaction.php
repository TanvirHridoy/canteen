<?php


session_start();
session_destroy();
unset($_session['uemail']);
header('location:index.php');
?>
