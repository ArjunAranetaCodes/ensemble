<?php
	session_start();
	if(!isset($_SESSION["user"]) && empty($_SESSION["user"])){
		header("Location:login.php");
	}	
	
	include 'php/db.inc.php';
	$sql = "SELECT * FROM tbl_accounts where username = '".$_SESSION["user"]."'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
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
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <div class="row">
                <!-- profile-widget -->
                <div class="col-lg-12">
                    <div class="profile-widget profile-widget-info">
                          <div class="panel-body">
                            <div class="col-lg-6 col-sm-6">
                              <h4>
								<?
									echo $row["firstname"]." ".$row["lastname"];
								?>
							  </h4>               
                              <div class="follow-ava">
                                  <!--<img src="img/profile-widget-avatar.jpg" alt="">-->
                                  <img src="studentinout/images/<?php echo $row["image_location"];?>" alt="">
                              </div>
                              <h6><?php echo $row["privilege"];?></h6>
                            </div>
							<a href="inbox.php">
                            <div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-comments fa-2x"> </i><br>
											  
											  Check Inbox
                                          </li>
										   
                                      </ul>
                            </div>
							</a>
							<a href="about.php">
							<div class="col-lg-2 col-sm-6 follow-info weather-category">
                                      <ul>
                                          <li class="active">
                                              
                                              <i class="fa fa-building fa-2x"> </i><br>
											  
											  School Profile
                                          </li>
										   
                                      </ul>
                            </div>
							</a>
                          </div>
                    </div>
                </div>
              </div>
              <!-- page start-->
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <header class="panel-heading tab-bg-info">
                              <ul class="nav nav-tabs">
                                  <li class="active">
                                      <a data-toggle="tab" href="#recent-activity">
                                          <i class="icon-home"></i>
                                          Daily Activity
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#profile">
                                          <i class="icon-user"></i>
                                          Profile
                                      </a>
                                  </li>
                                  <li>
                                      <a data-toggle="tab" href="#preference">
                                          <i class="icon-user"></i>
                                          Preferences
                                      </a>
                                  </li>
								  <!--
                                  <li class="">
                                      <a data-toggle="tab" href="#edit-profile">
                                          <i class="icon-envelope"></i>
                                          Edit Profile
                                      </a>
                                  </li>
								  -->
                              </ul>
                          </header>
                          <div class="panel-body">
                              <div class="tab-content">
                                  <div id="recent-activity" class="tab-pane active">
                                      <div class="profile-activity">                                          
                                          <div class="row">
									  <div class="col-sm-12">
										  <section class="panel">
											  <table class="table">
												  <thead>
													<th>Username</th>
													<th>Date</th>
													<th>Time</th>
												  </thead>
												  <tbody>
							<?php
							$sql = "SELECT * FROM tbl_inout where username = '".$_SESSION["bioid"]."' or username = '".$_SESSION["user"]."' ORDER BY id DESC";
							$result = $conn->query($sql);
							
							if ($result->num_rows > 0) {								
								while($row = $result->fetch_assoc()){
									echo'
									  <tr>
										  <td>'.$row["username"].'</td>
										  <td>'.$row["dateinout"].'</td>
										  <td>'.$row["timeinout"].'</td>
									  </tr>';
								}
							}
							?>
												  </tbody>
											  </table>
										  </section>
									  </div>							  
								</div>	

                                      </div>
                                  </div>
                                  <!-- profile -->
                                  <div id="profile" class="tab-pane">
                                    <section class="panel">
                                      <div class="panel-body bio-graph-info">
                                          <h1>Bio Graph</h1>
                                          <div class="row">
                                              <div class="bio-row">
												<?php												
													$sql = "SELECT * FROM tbl_accounts where username = '".$_SESSION["user"]."'";
													$result = $conn->query($sql);
													$row = $result->fetch_assoc();
												?>
												
                                                  <p><span>First Name </span>: <?php echo $row["firstname"];?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Last Name </span>: <?php echo $row["lastname"];?> </p>
                                              </div>                                              
                                              <div class="bio-row">
                                                  <p><span>Username</span>:<?php echo $row["username"];?> </p>
                                              </div>
                                              <div class="bio-row">
                                                  <p><span>Gender </span>: <?php echo $row["gender"];?> </p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="bio-graph-heading">
                                               <i>Contact the administrator if there is an error in your profile.</i>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- preference -->
                                  <div id="preference" class="tab-pane">
                                    <section class="panel">
                                      <div class="panel-body bio-graph-info">
                                          <h1>User Preference: Select a Color</h1>
										<form action="php/updatecolor.php" method="post">
                                          <div class="row">
                                              <div class="bio-row" 
												style="background-color:#2e3b46;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value=""/>
                                              </div>
                                              <div class="bio-row" 
												style="background-color:#d51f1f;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value="#d51f1f"/>
                                              </div>
                                              <div class="bio-row" 
												style="background-color:#2c1fd5;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value="#2c1fd5"/>
                                              </div>
                                              <div class="bio-row" 
												style="background-color:#34d51f;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value="#34d51f"/>
                                              </div>
                                              <div class="bio-row" 
												style="background-color:#b4ae04;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value="#b4ae04"/>
                                              </div>
                                              <div class="bio-row" 
												style="background-color:#c11cc3;
												width:60px;height:60px;
												margin:20px;padding:10px;
												text-align:center; float:left;">
                                                  <input class="form-control" type="radio" name="color" value="#c11cc3"/>
                                              </div>
											  
                                          </div>
										  <input type="submit" value="Change Color" class="btn btn-lg btn-success"/>
										</form>
                                      </div>
                                      <div class="bio-graph-heading">
                                               <i>Contact the administrator if there is an error in your profile.</i>
                                      </div>
                                    </section>
                                      <section>
                                          <div class="row">                                              
                                          </div>
                                      </section>
                                  </div>
                                  <!-- edit-profile -->
									<!--
                                  <div id="edit-profile" class="tab-pane">
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1>
                                              <form class="form-horizontal" role="form">                                                  
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">First Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="f-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Last Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="l-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">About Me</label>
                                                      <div class="col-lg-10">
                                                          <textarea name="" id="" class="form-control" cols="30" rows="5"></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Country</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="c-name" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Birthday</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="b-day" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Occupation</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="occupation" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Email</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Mobile</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder=" ">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Website URL</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="url" placeholder="http://www.demowebsite.com ">
                                                      </div>
                                                  </div>

                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary">Save</button>
                                                          <button type="button" class="btn btn-danger">Cancel</button>
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section>
                                  </div>
								  -->
                              </div>
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
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
