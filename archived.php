<?php
	session_start();
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
					<!-- page start-->
					<div class="row">
						<section class="panel">
								<div class="table-responsive">

									<div class="col-lg-12">
													<!--Project Activity start-->
													<section class="panel">
																	<div class="panel-body progress-panel">
																			<div class="row">
																					<div class="col-lg-8 task-progress pull-left">
																									<h1>Archived Messages</h1>                                  
																					</div>
																			</div>
																	</div>
																	<table class="table table-hover personal-task">
																					<tbody>
																					<tr>
																									<td>Today</td>
																									<td>
																													Where are you located?
																									</td>
																									<td>
																													<span class="badge bg-success">Read</span>
																									</td>
																					</tr>
																					<tr>
																									<td>Yesterday</td>
																									<td>
																													Planning Stage
																									</td>
																									<td>
																													<span class="badge bg-success">Read</span>
																									</td>
																					</tr>
																					<tr>
																									<td>21-05-18</td>
																									<td>
																													What's your base price?
																									</td>
																									<td>
																													<span class="badge bg-success">Read</span>
																									</td>
																					</tr>                              
																					<tr>
																									<td>22-05-18</td>
																									<td>
																													Any discounts?
																									</td>
																									<td>
																													<span class="badge bg-primary">Not Read</span>
																									</td>
																					</tr>																					
																					</tbody>
																	</table>
													</section>
													<!--Project Activity end-->
									</div>
								</div>

						</section>
					</div>
					<!-- page end-->
          </section>
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
