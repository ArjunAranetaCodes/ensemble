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

    <title>School Management</title>

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
					<h3 class="page-header"><i class="fa fa-table"></i> Inbox</h3>
				</div>
				
				<div class="container body">
				  <div class="main_container">

					<!-- page content -->
					<div class="right_col" role="main">
					  <div class="">
						<div class="page-title">
						  <div class="title_left">
							<h3>Message</h3>
						  </div>

						</div>
						<div class="clearfix"></div>

						<div class="row">
						  <div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
							  <div class="x_title">
								<h2>Send New Message</h2>
								<div class="clearfix"></div>
							  </div>
							  <div class="x_content">

								<form class="form-horizontal form-label-left" novalidate action="messages/sendmessage.php" method="post">

								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">To (username)<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12">
									  <input id="username" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="1" name="username" placeholder="" required="required" type="text">
									</div>
								</div>		
								
								<div class="item form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="message">Message (20 chars min, 100 max) :</label>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
										<textarea rows="10" id="message" required="required" class="form-control" name="message" 
										data-parsley-trigger="keyup" data-parsley-minlength="1" data-parsley-maxlength="1000" 
										data-parsley-minlength-message="Come on! You need to enter at least a 1 caracter long message.." 
										data-parsley-validation-threshold="10"></textarea>
									</div>
								</div>
								
								  <div class="ln_solid"></div>
								  <div class="form-group">
									<div class="col-md-6 col-md-offset-3">
									  <button type="submit" class="btn btn-primary">Cancel</button>
									  <button id="send" type="submit" class="btn btn-success">Submit</button>
									</div>
								  </div>
								</form>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</div>
				
				
			</div>
		</section>
	</section>
   </section>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

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