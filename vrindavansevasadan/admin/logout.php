<?php
session_start();
unset($_SESSION['admin_id']);
unset($_SESSION['admin_uname']);
unset($_SESSION['urole']);
header("location:index.php");
?>