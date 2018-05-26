<?php
if(isset($_SESSION["success"]) && $_SESSION["success"] == 1){
 echo '
  <div class="alert alert-success fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
  <i class="icon-remove"></i>
  </button>
  <strong>Well done!</strong> Data has been submitted!.
  </div>';
 $_SESSION["success"] = null;
}

if(isset($_SESSION["success"]) && $_SESSION["success"] == 2){
 echo '
  <div class="alert alert-danger fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
  <i class="icon-remove"></i>
  </button>
  <strong>Well done!</strong> Data has been deleted!.
  </div>';
 $_SESSION["success"] = null;
}

if(isset($_SESSION["success"]) && $_SESSION["success"] == 5){
 echo '
  <div class="alert alert-success fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
  <i class="icon-remove"></i>
  </button>
  <strong>Well done!</strong> Data has been Updated!.
  </div>';
 $_SESSION["success"] = null;
}

if(isset($_SESSION["success"]) && $_SESSION["success"] == 3){
 echo '
  <div class="alert alert-danger fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
  <i class="icon-remove"></i>
  </button>
  <strong>ERROR</strong> Data already exists!.
  </div>';
 $_SESSION["success"] = null;
}

if(isset($_SESSION["success"]) && $_SESSION["success"] == 4){
 echo '
  <div class="alert alert-danger fade in">
  <button data-dismiss="alert" class="close close-sm" type="button">
  <i class="icon-remove"></i>
  </button>
  <strong>ERROR</strong> Something went wrong. Please try again!.
  </div>';
 $_SESSION["success"] = null;
}
?>
