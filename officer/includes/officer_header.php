<?php
include('../includes/authentication.php');
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Department of Information Technology :: ISMT Database</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-social.css">
	<!-- <link rel="stylesheet" type="text/css" href="../bootstrap/css/font-awesome.css"> -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script src="../bootstrap/js/jquery-3.2.1.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<script src="../bootstrap/js/npm.js"></script>


	<link rel="stylesheet" type="text/css" href="../font/fontawesome/css/all.css">
</head>
<body style="font-family: Raleway;">
<div class="container">
	<header class="header text-center">
		<h1>Department of Informational Technology</h1>
		<h3><a href="../officer/main.php">ISMT Database</a></h3>
		<center>
		<a href="https://www.facebook.com/pg/ISMTCollege/posts/"><img src="../images/logo.jpg" height="100px" width="150px" style="vertical-align: middle;"></a>
		</center>
	</header><br /><br />
</div>
<nav class="navbar navbar-custom" role="navigation">
	<div class="container">
	  <div class="navbar-header">
	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar" role="navigation">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	    </button>
	    <a class="navbar-brand" href="/testmis/officer/main.php">ISMT Database</a>
	  </div>
	  <div class="collapse navbar-collapse" id="mynavbar">
	      <ul class="nav navbar-nav">   
	   		<li class="dropdown">
	   			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Students <span class="caret"></span></a>
	   			<ul class="dropdown-menu">
	   				<li class="<?= ($activePage == 'cengineering') ? 'active':''; ?>"><a href="../officer/std_personal_info_form.php">Register</a></li>
	   				<li class="<?= ($activePage == 'cscience') ? 'active':''; ?>"><a href="/testmis/dashboard/students/cscience.php">Search</a></li>
	   			</ul>
				</li>
				<li class="dropdown">
	   			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Staffs <span class="caret"></span></a>
	   			<ul class="dropdown-menu">
	   				<li class="<?= ($activePage == 'teaching') ? 'active':''; ?>"><a href="https://ismt.edu.au/">Teaching Staffs</a></li>
	   				<li class="<?= ($activePage == 'nonteaching') ? 'active':''; ?>"><a href="https://ismt.edu.au/">Non Teaching Staffs</a></li>
	   			</ul>
				</li>

				<li class="dropdown">
	   			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Course <span class="caret"></span></a>
	   			<ul class="dropdown-menu">
	   				<li class="<?= ($activePage == 'cengineering') ? 'active':''; ?>"><a href="https://ismt.edu.au/">Register</a></li>
	   				<li class="<?= ($activePage == 'cscience') ? 'active':''; ?>"><a href="https://ismt.edu.au/">Assign</a></li>
	   			</ul>
				</li>
	      	</ul>
	      	 <ul class="nav navbar-nav navbar-right" style="margin-right: 2px;">
				<li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
				</ul>
	  </div>
	</div>
</nav>
<div class="container">