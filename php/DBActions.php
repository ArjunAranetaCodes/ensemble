<?php
include "DBFunctions.php";

if($_POST){
 if($_POST["action"] == "login"){
  $username = $_POST["username"];
  $password = $_POST["password"];
  loginUser($username, $password);
 }

 //add account
 if($_POST["action"] == "register"){
  $values = array();
  foreach ($_POST as $key => $value){
   //action is the keyword for the form submit
   if(htmlspecialchars($key) != "action"){
    $values[htmlspecialchars($key)] = htmlspecialchars($value);
   }
  }
  $values["image_location"] = "default.png";
  registerUser($values);
 }

 //add level
 if($_POST["action"] == "updatereply"){
  $values = array();
  foreach ($_POST as $key => $value){
   //action is the keyword for the form submit
   if(htmlspecialchars($key) != "action"){
    $values[htmlspecialchars($key)] = htmlspecialchars($value);
   }
  }
  updateReply($values);
 }
}

if($_GET){
 if($_GET["action"] == "contactinfo"){
  header("Location:editaccount.php?id=".$_GET["id"]);
 }

 if($_GET["action"] == "deleteuser"){
  $id = $_GET["id"];
  $action = $_GET["action"];
  deleteById("tbl_accounts", $id, $action);
 }

 if($_GET["action"] == "logout"){
  $_SESSION["user"] = null;
  $_SESSION["privilege"] = null;
  header("Location:../login.php");
 }
}
?>
