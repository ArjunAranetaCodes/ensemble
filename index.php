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

									<div class="col-md-6 portlets">
										<!-- Widget -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="pull-left">Message from John</div>
												<div class="widget-icons pull-right">
													<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
													<a href="#" class="wclose"><i class="fa fa-times"></i></a>
												</div>  
												<div class="clearfix"></div>
											</div>

											<div class="panel-body">
												<!-- Widget content -->
												<div class="padd sscroll">
													
													<ul class="chats">

														<!-- Chat by us. Use the class "by-me". -->
														<li class="by-me">
															<!-- Use the class "pull-left" in avatar -->
															<div class="avatar pull-left">
																<img src="img/user.jpg" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In meta area, first include "name" and then "time" -->
																<div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
																Vivamus diam elit diam, consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li> 

														<!-- Chat by other. Use the class "by-other". -->
														<li class="by-other">
															<!-- Use the class "pull-right" in avatar -->
															<div class="avatar pull-right">
																<img src="img/user22.png" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In the chat meta, first include "time" then "name" -->
																<div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
																Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>   

														<li class="by-me">
															<div class="avatar pull-left">
																<img src="img/user.jpg" alt=""/>
															</div>

															<div class="chat-content">
																<div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
																Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>  

														<li class="by-other">
															<!-- Use the class "pull-right" in avatar -->
															<div class="avatar pull-right">
																<img src="img/user22.png" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In the chat meta, first include "time" then "name" -->
																<div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
																Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>                                                                                  

													</ul>

												</div>
												<!-- Widget footer -->
												<div class="widget-foot">																			
													<form class="form-inline">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Type your message here...">
														</div>
														<button type="submit" class="btn btn-info">Send</button>
													</form>
												</div>
											</div>
										</div> 
									</div>

									<div class="col-md-6 portlets">
										<!-- Widget -->
										<div class="panel panel-default">
											<div class="panel-heading">
												<div class="pull-left">Message from Mark</div>
												<div class="widget-icons pull-right">
													<a href="#" class="wminimize"><i class="fa fa-chevron-up"></i></a> 
													<a href="#" class="wclose"><i class="fa fa-times"></i></a>
												</div>  
												<div class="clearfix"></div>
											</div>

											<div class="panel-body">
												<!-- Widget content -->
												<div class="padd sscroll">
													
													<ul class="chats">

														<!-- Chat by us. Use the class "by-me". -->
														<li class="by-me">
															<!-- Use the class "pull-left" in avatar -->
															<div class="avatar pull-left">
																<img src="img/user.jpg" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In meta area, first include "name" and then "time" -->
																<div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
																Vivamus diam elit diam, consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li> 

														<!-- Chat by other. Use the class "by-other". -->
														<li class="by-other">
															<!-- Use the class "pull-right" in avatar -->
															<div class="avatar pull-right">
																<img src="img/user22.png" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In the chat meta, first include "time" then "name" -->
																<div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
																Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>   

														<li class="by-me">
															<div class="avatar pull-left">
																<img src="img/user.jpg" alt=""/>
															</div>

															<div class="chat-content">
																<div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
																Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>  

														<li class="by-other">
															<!-- Use the class "pull-right" in avatar -->
															<div class="avatar pull-right">
																<img src="img/user22.png" alt=""/>
															</div>

															<div class="chat-content">
																<!-- In the chat meta, first include "time" then "name" -->
																<div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
																Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
																<div class="clearfix"></div>
															</div>
														</li>                                                                                  

													</ul>

												</div>
												<!-- Widget footer -->
												<div class="widget-foot">																			
													<form class="form-inline">
														<div class="form-group">
															<input type="text" class="form-control" placeholder="Type your message here...">
														</div>
														<button type="submit" class="btn btn-info">Send</button>
													</form>
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
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
