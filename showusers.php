<?php
 include "php/ShowFunctions.php";
 if(!isset($_SESSION["user"]) && empty($_SESSION["user"])){
  header("Location:login.php");
 }
?>

<!DOCTYPE html>
<html lang="en">
 <head>
  <?php include "header-res.php";?>
 </head>

 <body>
  <!-- container section start -->
  <section id="container" class="">
   <!--header start-->
   <?php include 'header.php'; ?>
   <!--header end-->

   <!--sidebar start-->
   <?php
    include 'sidebar.php';
    checkPrivilege($rootdirectory, "Admin",
    "Security", "Security");
   ?>

   <!--main content start-->
   <section id="main-content">
    <section class="wrapper">
     <!-- page start-->
     <div class="row">
      <div class="col-lg-12">
       <section class="panel">
        <header class="panel-heading">
         <?php echo showHeaders("users"); ?>
        </header>
        <div class="table-responsive">
         <?php
         include "alertboxDB.php";
         showAccounts("");
         ?>
        </div>
       </section>
      </div>
     </div>
     <!-- page end-->
    </section>
   </section>
  <!--main content end-->
  </section>
  <?php include "footer-res.php"; ?>
 </body>
</html>
