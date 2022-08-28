<?php
session_start();
unset($_SESSION['empid']);
unset($_SESSION['empusername']);
unset($_SESSION['empemail']);
unset($_SESSION['emprole']);
header("location:index.php");
?>