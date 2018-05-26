<?php
include "Database.php";

function showHeaders($category){
 if($category == "users"){
  return "User Accounts Information";
 }
}

function getLevelsOnly(){
 $newDB = new Database();
 $sql = "SELECT * FROM tbl_level";
 $result = $newDB->conn->query($sql);
 return $result;
}

function showAccounts($filter){
 $newDB = new Database();
 $where = "";
 if($filter != ""){
  $where = " where privilege = '".$filter."'";
 }
 $sql = "SELECT * FROM tbl_accounts ".$where;

 $result = $newDB->conn->query($sql);

 echo '
 <table class="table" id="datatable-buttons">
 <thead>
 <tr>
 <th>id</th>
 <th>Student ID</th>
 <th>Username</th>
 <th>Password</th>
 <th>First Name</th>
 <th>Middle Name</th>
 <th>Last Name</th>
 <th>Gender</th>
 <th>Privilege</th>
 <th>Contact No</th>
 <th>Image Name</th>
 <th>Image</th>
 <th>Action</th>
 </tr>
 </thead>
 <tbody>';

 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
   echo '
   <tr>
   <th scope="row">'.$row["id"].'</th>
   <td>'.$row["studid"].'</td>
   <td>'.$row["username"].'</td>
   <td>'.str_repeat("*", strlen($row["password"])).'</td>
   <td>'.$row["firstname"].'</td>
   <td>'.$row["middlename"].'</td>
   <td>'.$row["lastname"].'</td>
   <td>'.$row["gender"].'</td>
   <td>'.$row["privilege"].'</td>
   <td>'.$row["contactno"].'</td>
   <td>'.$row["image_location"].'</td>
   <td>
   <a href="studentinout/images/'.$row["image_location"].'" target="_blank" class="btn btn-info">View</a>
   <a href="studentinout/profile?userimage='.$row["username"].'" class="btn btn-warning">Upload Image</a>
   </td>
   <td>
   <a href="editstudent.php?id='.$row["id"].'" class="btn btn-info">Edit</a> |';

   if($filter == "Student"){
    echo '
    <a href="php/DBActions.php?action=deletestudent&id='.$row["id"].'" class="btn btn-danger">Delete</a>
    </td>
    </tr>';
   }else{
    echo '
    <a href="php/DBActions.php?action=deleteuser&id='.$row["id"].'" class="btn btn-danger">Delete</a>
    </td>
    </tr>';

   }
  }
 }
 echo '
 </tbody>
 </table>';

 $newDB->conn->close();
}

function showInfoTable($filter){
 $newDB = new Database();
 $where = "";
 if($filter != ""){
  $where = " where privilege = '".$filter."'";
 }
 $sql = "SELECT * FROM tbl_information ".$where;

 $result = $newDB->conn->query($sql);

 echo '
 <table class="table">
 <thead>
 <tr>
 <th>Business Name</th>
 <th>Category</th>
 <th>Description</th>
 <th>Price Range</th>
 </tr>
 </thead>
 <tbody>';

 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
   echo '
   <tr>
   <td>'.$row["business_name"].'</td>
   <td>'.$row["category"].'</td>
   <td>'.$row["description"].'</td>
   <td>'.$row["price_range"].'</td>
   </tr>
   ';
  }
 }
 echo '
 </tbody>
 </table>';

 $newDB->conn->close();
}

function showInfoThumbnails($filter){
 $newDB = new Database();
 $where = "";
 if($filter != ""){
  $where = " where privilege = '".$filter."'";
 }
 $sql = "SELECT * FROM tbl_information ".$where." LIMIT 3";

 $result = $newDB->conn->query($sql);

 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){

	 echo ' 					
		<div class="col-sm-6 col-md-3"> 
		<div class="thumbnail"> 
		<img alt="100%x200" data-src="holder.js/100%x200" src="'.$row["image_location"].'" 
		data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> 
		<div class="caption"> 
		<h3 class="text-center">'.$row["business_name"].'</h3> 
		<p>'.substr($row["description"],0, 300).'...</p> 
		<p>
		<a href="todolist.php" class="btn btn-info btn-block" role="button">My Todo List</a>
		<a href="#" class="btn btn-primary btn-block" role="button">View Profile</a> 
		<a href="#" class="btn btn-danger btn-block" role="button">Send Message</a>
		</p> 
		</div> 
		</div> 
		</div> ';
		
  }
 }

 $newDB->conn->close();
}

function showallInfoThumbnails($filter){
 $newDB = new Database();
 $where = "";
 if($filter != ""){
  $where = " where privilege = '".$filter."'";
 }
 $sql = "SELECT * FROM tbl_information ".$where;

 $result = $newDB->conn->query($sql);

 $count = 0;
 if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
   $count++;
   $break = "";
   if($count % 4 == 0){
    $break = "<div style='clear:both;'></div><br/>";
   }else{
    $break = "";
   }
	 echo ' 					
		<div class="col-sm-6 col-md-3"> 
		<div class="thumbnail"> 
		<img alt="100%x200" data-src="holder.js/100%x200" src="'.$row["image_location"].'" 
		data-holder-rendered="true" style="height: 200px; width: 100%; display: block;"> 
		<div class="caption"> 
		<h3 class="text-center">'.$row["business_name"].'</h3> 
		<p>'.substr($row["description"],0, 100).'...</p> 
		<p>
		<a href="singlepage.php" class="btn btn-success btn-block" role="button">View Profile and Pricing</a> 
		<a href="#" class="btn btn-danger btn-block" role="button">Send Message</a>
		</p> 
		</div> 
		</div> 
    </div> ';
    echo $break;
    
  }
 }

 $newDB->conn->close();
}

?>
