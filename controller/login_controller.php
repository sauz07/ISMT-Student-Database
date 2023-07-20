<?php
require('../includes/mysql_connect.php');
include('../includes/functions.php');
session_start();
if (isset($_POST['username'])){
    $username = test_input($_REQUEST['username']);       
	$username = mysqli_real_escape_string($db,$username);
	$password = test_input($_REQUEST['password']);
	$password = mysqli_real_escape_string($db,$password);
	$query = "SELECT * FROM users WHERE username='$username' and password=md5('$password')";
	$result = mysqli_query($db,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
    if($rows==1){
    	$data=mysqli_fetch_assoc($result);
	    $_SESSION['username'] = $username;
	    $type=$data['user_type'];
	    $_SESSION['type']= $type;
	    	if($type=="admin")
            header("Location: ../officer/main.php");
         }else{

         	header("location: ../index.php");
         }
	}
   
?>

