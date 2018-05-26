<?php
 include "php/ShowFunctions.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Ensemble</title>

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <?php
		include 'header.php';
	  ?>
      <!--header end-->

      <!--sidebar start-->
      <?php
		include 'sidebar.php';
	  ?>

      <!--main content start-->
      <form action="php/DBActions.php" method="post">
      <input type="hidden" name="action" value="addevent">
      <section id="main-content">
          <section class="wrapper">
          <input type="hidden" name="event_name" value="<?php echo $_POST["event_name"];?>">
          <input type="hidden" name="category" value="<?php echo $_POST["category"];?>">
          <input type="hidden" name="address" value="<?php echo $_POST["address"];?>">
          <input type="hidden" name="budget" value="<?php echo $_POST["budget"];?>">
        <div class="row">
				  <div class="col-lg-12">
          <h3 class="page-header"><i class="fa fa-table"></i> Your ensemble </h3>
          <div class="progress">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
				</div>
			</div>
              <!-- page start-->
				<div data-example-id="thumbnails-with-custom-content"> 
					<div class="row"> 	
					 <?php
					 showInfoThumbnails("");
					 ?>
          </div> 
          <input type="hidden" name="business_id" value="1,2,3">
          <br>
          <input type="submit" value="I want this lineup" class="btn btn-block" 
            style="background-color:#006400; color:white;">
				</div>
              <!-- page end-->
				 
          </section>
          </form>
		  <!--
			<section class="wrapper">
			 <div class="row">
			  <div class="col-lg-12">
			   <section class="panel">
				<header class="panel-heading">
				 Information
				</header>
				<div class="table-responsive">
				 <?php
				 //showInfoTable("");
				 ?>
				</div>
			   </section>
			  </div>
			 </div>
			</section>
			-->
      </section>
      <!--main content end-->
      <div class="text-right">
            <div class="credits">
                <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
