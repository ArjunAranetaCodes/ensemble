<?php
include "Database.php";

function loginUser($username, $password){
 $newDB = new Database();
 $sql = "SELECT * FROM tbl_accounts where username = '".$_POST["username"].
 "' and password = '".$_POST["password"]."'";
 $result = $newDB->conn->query($sql);

 if ($result->num_rows > 0) {
  $studid = "";
  while($row = $result->fetch_assoc()){
   $_SESSION["privilege"] = $row["privilege"];
   $_SESSION["studid"] = $row["studid"];
   $studid = $row["studid"];
   $_SESSION["image_location"] = $row["image_location"];
   $_SESSION["color_pref"] = $row["color_pref"];
  }

  $_SESSION["user"] = $_POST["username"];
  $_SESSION["isParent"] = "";

  if($_SESSION["privilege"] == "Parent"){
   $sql2 = "SELECT * FROM tbl_accounts where studid = '".$studid."'";
   $result2 = $conn->query($sql2);
   $row2 = $result2->fetch_assoc();
   $_SESSION["isParent"] = "Yes";
   $_SESSION["privilege"] = "Student";
   $_SESSION["user"] = $row2["username"];
  }

  $sql = "INSERT INTO tbl_accesslogs (username, timestamp) VALUES ('".
  $username."','".
  getTimestamp()."')";

  $result = $newDB->conn->query($sql);
  header("Location:../inbox.php");
 } else {
  $_SESSION["invalid"] = 1;
  header("Location:../login.php");
 }
 $newDB->conn->close();
}

function contactUs($name, $email, $message){
 $newDB = new Database();
 $sql = "INSERT INTO tbl_contactus (con_name, con_email, con_message, con_timestamp)
 VALUES ('".$name."', '".$email."','".$message."','".getTimestamp()."')";
 $result = $newDB->conn->query($sql);
 if($result){
  $_SESSION["contactus"] = 1;
  header("Location:../../index.php");
 }else{
  //echo "Something went wrong! <br />";
  //echo "<a href='index.html'>Back</a>";
 }
 $newDB->conn->close();
}

  function registerUser($values){
   $newDB = new Database();

   $sql = "SELECT COUNT(*) FROM tbl_accounts where username = '".$values["username"]."'";
   $result = $newDB->conn->query($sql);
   $row = $result->fetch_array();

   if($row[0]>0){
    $_SESSION["success"] = 3;
    //user already exists
    header("Location:../showusers.php");
   }else{
    $sql='INSERT INTO `tbl_accounts` (`'.implode('`, `',array_keys($values)).'`) VALUES ("' . implode('", "', $values) . '")';
    $result = $newDB->conn->query($sql);

    if($result){
     $_SESSION["success"] = 1;
     header("Location:../showusers.php");
    }else{
     $_SESSION["success"] = 4;
     header("Location:../showusers.php");
    }
   }
   $newDB->conn->close();
  }

  function updateUser($id, $username, $password){
   $newDB = new Database();
   $sql = "UPDATE tbl_accounts SET username = '".$username.
   "', password = '".$password."' where id = ".$id;
   $result = $newDB->conn->query($sql);
   header("Location:showaccounts.php");
   $newDB->conn->close();
  }

  function getUser(){
   $id = $_GET["id"];
   $newDB = new Database();
   $sql = "SELECT * FROM tbl_accounts where id = ".$id;
   $result = $newDB->conn->query($sql);
   $row = $result->fetch_assoc();
   return $row;
  }

  function getTimestamp(){
   date_default_timezone_set("Asia/Manila");
   $info = getdate();
   $date = $info['mday'];
   $month = $info['mon'];
   $year = $info['year'];
   $hour = $info['hours'];
   $min = $info['minutes'];
   $sec = $info['seconds'];
   $current_date = "$month-$date-$year-$hour-$min";
   return $current_date;
  }
  ?>
