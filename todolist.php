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
      <section id="main-content">
          <section class="wrapper">
		    <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> TODO List</h3>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
				</div>
			</div>
				<div data-example-id="thumbnails-with-custom-content"> 
          <div class="row">
            <div class="col-lg-4 well" style="margin-left:20px;">
              <form action="">
                Task Name:
                <input type="text" class="form-control" name="taskname">
                <br>
                <input type="submit" class="btn btn-success">
              </form>
            </div>
          </div>
					<div class="row"> 	

            <div class="col-sm-6"> 
              <div class="thumbnail"> 
              <div class="caption"> 
              <h3 class="text-center">Things to keep in mind</h3> 
              <p>
              <a href="finished.php" class="btn btn-info btn-block" role="button">Task 1</a>
              <a href="" class="btn btn-info btn-block" role="button">Task 2</a>
              <a href="" class="btn btn-info btn-block" role="button">Task 3</a>
              </p> 
              </div> 
              </div> 
            </div> 		

            <div class="col-sm-6"> 
              <div class="thumbnail"> 
              <div class="caption"> 
              <h3 class="text-center">Finished</h3> 
              <p>
              <a href="" class="btn btn-success btn-block" role="button">Task 1</a>
              <a href="" class="btn btn-success btn-block" role="button">Task 2</a>
              <a href="" class="btn btn-success btn-block" role="button">Task 3</a>
              </p> 
              </div> 
              </div> 
            </div> 	

					</div> 
				</div>				 
      </section>
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
