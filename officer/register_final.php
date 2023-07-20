<?php
session_start();
$_SESSION['p_id'] = "";
unset($_SESSION['p_id']);
header('location:../officer/main.php');
?>