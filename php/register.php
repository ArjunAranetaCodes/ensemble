<?php
include 'db.inc.php';
session_start();

$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$password = $lastname.$middlename[0].$firstname[0];

$sql = "SELECT COUNT(*) FROM tbl_accounts where username = '".$_POST["username"]."'";
$result = $conn->query($sql);
$row = $result->fetch_array();

if($row[0]>0){
	$_SESSION["success"] = 3;
	//user already exists
	header("Location:../showusers.php");
}else{
	$sql = "INSERT INTO tbl_accounts (studid, username, password, firstname, middlename, lastname, birthday, gender, contactno, image_location, privilege) VALUES ('".
		$_POST["studid"]."','".
		$_POST["username"]."','".
		$password."','".
		$_POST["firstname"]."','".
		$_POST["middlename"]."','".
		$_POST["lastname"]."','".
		$_POST["birthday"]."','".
		$_POST["gender"]."','".
		$_POST["contactno"]."','".
		"default.png"."','".
		$_POST["privilege"]."')";
	$result = $conn->query($sql);

	$_SESSION["success"] = 1;
	header("Location:../showusers.php");
	$conn->close();
}

?>
