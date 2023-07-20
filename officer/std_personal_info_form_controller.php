<?php
include('../includes/mysql_connect.php');
include('../includes/functions.php');\
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$personal_id = test_input($_POST["personal_id"]);
	$first_name = test_input($_POST["first_name"]);
	$middle_name= test_input($_POST["middle_name"]);
	$last_name= test_input($_POST["last_name"]);
	$gender= test_input($_POST['gender']);
	$dob_ad= test_input($_POST['dob_ad']);
	$dob_bs= test_input($_POST['dob_bs']);
	$citizenship_number= test_input($_POST['citizenship_number']);
	$permanent_address_town= test_input($_POST['permanent_address_town']);
	$permanent_address_district= test_input($_POST['permanent_address_district']);
	$permanent_address_country= test_input($_POST['permanent_address_country']);
	$permanent_address_contact= test_input($_POST['permanent_address_contact']);
	$temporary_address_town= test_input($_POST['temporary_address_town']);
	$temporary_address_district= test_input($_POST['temporary_address_district']);
	$temporary_address_country= test_input($_POST['temporary_address_country']);
	$temporary_address_contact= test_input($_POST['temporary_address_contact']);
	$email = test_input($_POST["personal_contact_email"]);
	$phone = test_input($_POST["personal_contact_phone"]);
	$mobile = test_input($_POST["personal_contact_mobile"]);
	$bptown = test_input($_POST["birth_town"]);
	$bpdistrict = test_input($_POST["birth_district"]);
	$bpcountry = test_input($_POST["birth_country"]);
	$program = test_input($_POST["program"]);
	$enroll_year = test_input($_POST["enroll_year"]);
	$sql = "INSERT INTO `personal_info` (`personal_id`, `first_name`, `middle_name`, `last_name`, `gender`, `dob_ad`, `dob_bs`, `citizenship_number`, `permanent_address_town`, `permanent_address_district`, `permanent_address_country`, `permanent_address_contact`, `temporary_address_town`, `temporary_address_district`, `temporary_address_country`, `temporary_address_contact`, `personal_contact_email`, `personal_contact_phone`, `personal_contact_mobile`, `birth_town`, `birth_district`, `birth_country`) VALUES ('$personal_id', '$first_name', '$middle_name', '$last_name', '$gender', '$dob_ad', '$dob_bs', '$citizenship_number', '$permanent_address_town', '$permanent_address_district', '$permanent_address_country', '$permanent_address_contact', '$temporary_address_town', '$temporary_address_district', '$temporary_address_country', '$temporary_address_contact', '$email', '$phone', '$mobile', '$bptown', '$bpdistrict', '$bpcountry')";
	$sql2="INSERT INTO `student_info` (`registration_id`, `program`, `enroll_year`)VALUES('$personal_id', '$program', '$enroll_year')";
	$query=mysqli_query($db,$sql) OR die(mysqli_error($db));
	$query2=mysqli_query($db,$sql2) OR die(mysqli_error($db));
	if($query && $query2){
		$_SESSION['p_id']=$personal_id;
		header('location:educational_info_form.php');
	}
	else
	{
	echo "string";
	}
}
else{
	header('location:../index.php');
}

?>