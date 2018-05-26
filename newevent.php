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
					<h3 class="page-header"><i class="fa fa-table"></i> My Event</h3>
				</div>
			</div>
				<div data-example-id="thumbnails-with-custom-content"> 
          <div class="row">
            <div class="well" style="
             margin-left:20px; 
             width:60%; 
             margin:0px auto;
             padding:10px;">
              <form action="generatedata.php" class="form" method="post">
                Event Name:<input type="text" class="form-control" name="event_name">
                <br>
                Event Type: 
                <select name="category" id="" class="form-control" >
                  <option>Birthday</option>
                  <option>Conference</option>
                  <option>Wedding</option>
                  <option>Seminar</option>
                  <option>Workshop</option>
                  <option>Meeting</option>
                  <option>Outing</option>
                </select>
                <br>
                Address:<input type="text" class="form-control" name="address">
                <br>
                Estimated Budget (Max):<input type="text" class="form-control" name="budget">
                <br>
                <input type="submit" class="btn btn-success btn-block">
              </form>
            </div>
          </div>
					<div class="row"> 	

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
