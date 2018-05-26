<?php
	session_start();
	if(!isset($_SESSION["user"]) && empty($_SESSION["user"])){
		header("Location:login.php");
	}
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
	<style type="text/css">
		.contract{
			font-size:18px;
			text-align:justify;
			line-height:2em;
		}
	</style>
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
      <!--sidebar end-->

		<?php
			include 'php/db.inc.php';
					
			$sql = "SELECT * FROM tbl_school";
			$result = $conn->query($sql);
			$row = $result->fetch_assoc();
			$conn->close();
		?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
					  <h2>School Information</h2>
					  <form class="form-validate form-horizontal" id="feedback_form" method="post" action="php/updateschool.php">
						<section class="panel">
							  <header class="panel-heading">
								  School Information
							  </header>
							  <div class="panel-body">
								  <div class="form">
                                      <div class="form-group ">
                                          <label for="school_name" class="control-label col-lg-2">School Name</label>
                                          <div class="col-lg-10">
											  <h2><?php echo $row["school_name"];?></h2>
                                          </div>
                                      </div>
                                      
									  <div class="form-group ">
                                          <label for="school_address" class="control-label col-lg-2">School Address</label>
                                          <div class="col-lg-10">
											  <h2><?php echo $row["school_address"];?></h2>
                                          </div>
                                      </div>
                                      
									  <div class="form-group ">
                                          <label for="school_contact" class="control-label col-lg-2">School Contact</label>
                                          <div class="col-lg-10">
											  <h2><?php echo $row["school_contact"];?></h2>
                                          </div>
                                      </div>
                                      
									  <div class="form-group ">
                                          <label for="school_mission" class="control-label col-lg-2">School Mission</label>
                                          <div class="col-lg-10">
											  <h2><?php echo $row["school_mission"];?></h2>
                                          </div>
                                      </div>
                                      
									  <div class="form-group ">
                                          <label for="school_vision" class="control-label col-lg-2">School Vision</label>
                                          <div class="col-lg-10">
											  <h2><?php echo $row["school_vision"];?></h2>
                                          </div>
                                      </div>
								  </div>
							  </div>
						</section>
					  </form>
                  </div>
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
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <!--<script type="text/javascript" src="js/jquery.validate.min.js"></script>-->

    <!-- custom form validation script for this page-->
    <!--<script src="js/form-validation-script.js"></script>-->
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
