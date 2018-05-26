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
					<h3 class="page-header"><i class="fa fa-table"></i> Sent Messages</h3>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Sent Messages
                          </header>
                          <div class="table-responsive">
                            <table class="table">
							  <thead>
								<tr>
								  <th>id</th>
								  <th>From</th>
								  <th>To</th>
								  <th>Message</th>
								  <th>Time Sent</th>
								  <th>Action</th>
								</tr>
							  </thead>
							  <tbody>
								<?php
									include 'php/db.inc.php';
									$sql = "SELECT * FROM tbl_message where fromuser = '".$_SESSION["user"]."'";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc()){
											echo '
												<tr>
												  <th scope="row">'.$row["id"].'</th>
												  <td>'.$row["fromuser"].'</td>
												  <td>'.$row["username"].'</td>
												  <td>'.$row["message"].'</td>
												  <td>'.$row["time"].'</td>
												  <td>
													<a href="messages/deletemessage.php?Id='.$row["id"].'">Delete</a>
												  </td>
												</tr>									
											';
										}
									}
								?>
							  </tbody>
							</table>
                          </div>

                      </section>
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
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
