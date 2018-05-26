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

									<div class="col-md-12 portlets">

										<!-- Widget -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="pull-left" id="headtext">Reply for me is OFF</div>
												<div class="widget-icons pull-right">
													<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
													<a href="#" class="wclose"><i class="fa fa-times"></i></a>
												</div>  
												<div class="clearfix"></div>
											</div>

											<div class="panel-body">

											<div class="row">
														<div class="col-lg-2">
												
													<div class="btn-row">
														<form action="DBActions.php" method="post">
															<input type="hidden" name="action" value="updatereply">
																	<div class="btn-group" data-toggle="buttons">
																					<label class="btn btn-success">
																									<input type="radio" onchange="updatewords('on')"> On
																					</label>
																					<label class="btn btn-danger active">
																									<input type="radio" onchange="updatewords('off')"> Off
																					</label>
																	</div>
														</form>
													</div>
															<p style="font-size:20px;">
																A service that handles client questions, inquiries, trolls, and spam
																while you focus on your quality service.
															</p>
														</div>
														<div class="col-lg-10">
																		<section class="panel">
																				<header class="panel-heading">
																								Usage Graph
																				</header>
																				<div class="panel-body text-center">
																								<canvas id="bar" height="300" width="700"></canvas>
																				</div>
																		</section>
														</div>        
											</div>

											</div>
										</div> 
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
    <script src="js/jquery-1.8.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- chartjs -->
    <script src="assets/chart-master/Chart.js"></script>
    <!-- custom chart script for this page only-->
    <script src="js/chartjs-custom.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
				<script>
					function updatewords(data){
						if(data == "on"){
							$('#headtext').text("Reply for me is ON");
						}else{
							$('#headtext').text("Reply for me is OFF");
						}
					}
				</script>

  </body>
</html>
