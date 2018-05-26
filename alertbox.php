<?php
//red - c61d29
//green - 1dc668
//blue - 1d80c6
//yellow - dcec2a

session_start();
if(!isset($_SESSION["error"])){
  $_SESSION["error"] = "";
}

if(!isset($_SESSION["success"])){
  $_SESSION["success"] = "";
}

if(!isset($_SESSION["contactus"])){
  $_SESSION["contactus"] = "";
}

if(!isset($_SESSION["onlinedocreq"])){
  $_SESSION["onlinedocreq"] = "";
}

if($_SESSION["error"] == 1){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Wrong Combination of username and password.
    </div>
  </div>';
}
if($_SESSION["error"] == 2){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Please fill in username.
    </div>
  </div>';
}
if($_SESSION["error"] == 3){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-error" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Error!</strong> Please fill in password.
    </div>
  </div>';
}

if($_SESSION["success"] == 1){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Success!</strong> Login Successful.
    </div>
  </div>';
}

if($_SESSION["success"] == 2){
  echo '
  <div class="alertbox" style="position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;">
      <button type="button" class="close" data-dismiss="alert">×</button>
      <strong>Success!</strong> Logout Successful.
    </div>
  </div>';
}

if($_SESSION["contactus"] == 1){
  echo '
  <div class="alertbox" style="
    position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;
     ">
      <div style="background-color:#1dc668;padding:20px;width:50%;margin:0px auto;">
      <strong>Success! Message Sent!.</strong>
      </div>
    </div>
  </div>';
}

if($_SESSION["contactus"] == 2){
  echo '
  <div class="alertbox" style="
    position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;
     ">
      <div style="background-color:#1dc668;padding:20px;width:50%;margin:0px auto;">
      <strong>Success! Message Verified!.</strong>
      </div>
    </div>
  </div>';
}

if($_SESSION["onlinedocreq"] == 1){
  echo '
  <div class="alertbox" style="
    position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;
     ">
      <div style="background-color:#1dc668;padding:20px;width:50%;margin:0px auto;">
      <strong>Success! Document Request Sent!.</strong>
      </div>
    </div>
  </div>';
}

if($_SESSION["onlinedocreq"] == 2){
  echo '
  <div class="alertbox" style="
    position:absolute;top:0px;left:0px;width:100%;text-align:center;">
    <div class="alert alert-success" stlyle="text-align:center;
     ">
      <div style="background-color:#1dc668;padding:20px;width:50%;margin:0px auto;">
      <strong>Success! Document Request Verified!.</strong>
      </div>
    </div>
  </div>';
}

$_SESSION["error"] = "";
$_SESSION["success"] = "";
$_SESSION["contactus"] = "";
$_SESSION["onlinedocreq"] = "";
?>
