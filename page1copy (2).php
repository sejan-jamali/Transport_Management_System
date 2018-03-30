<html>


<head><title>TMS Home</title>
<link rel="stylesheet" type="text/css" href="bootstrap.css">

<link rel="stylesheet" href="userfiles/css/w32.css">
<link rel="stylesheet" href="userfiles/css/w3.css">
<link rel="stylesheet" href="userfiles/css/theme.css">
<link rel="stylesheet" href="userfiles/css/fontawsome.css">


<link href="userfiles/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome CSS -->
    <link href="userfiles/css/font-awesome.min.css" rel="stylesheet">
    
    
    <!-- Animate CSS -->
    <link href="userfiles/css/animate.css" rel="stylesheet" >
    
    <!-- Owl-Carousel -->
    <link rel="stylesheet" href="userfiles/css/owl.carousel.css" >
    <link rel="stylesheet" href="userfiles/css/owl.theme.css" >
    <link rel="stylesheet" href="userfiles/css/owl.transitions.css" >

    <!-- Custom CSS -->
    <link href="userfiles/css/style.css" rel="stylesheet">
    <link href="userfiles/css/responsive.css" rel="stylesheet">
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="userfiles/css/green.css">
    
    
    
    <!-- Colors CSS -->
    <link rel="stylesheet" type="text/css" href="userfiles/css/green.css" title="green">
    <link rel="stylesheet" type="text/css" href="userfiles/css/light-red.css" title="light-red">
    <link rel="stylesheet" type="text/css" href="userfiles/css/blue.css" title="blue">
    <link rel="stylesheet" type="text/css" href="userfiles/css/light-blue.css" title="light-blue">
    <link rel="stylesheet" type="text/css" href="userfiles/css/yellow.css" title="yellow">
    <link rel="stylesheet" type="text/css" href="userfiles/css/light-green.css" title="light-green">

    <!-- Custom Fonts -->
    
    <link rel="stylesheet" type="text/css" href="userfiles/css/my1.css">
    <style style="text/css">
.example5 {
 height: 50px;  
 overflow: hidden;
 position: relative;
}
.example5 h1 {
 position: absolute;
 width: 100%;
 height: 100%;
 margin: 0;
 line-height: 50px;
 text-align: left;
 /* Apply animation to this element */  
 -moz-animation: example5 5s linear infinite alternate;
 -webkit-animation: example5 5s linear infinite alternate;
 animation: example5 5s linear infinite alternate;
}
/* Move it (define the animation) */
@-moz-keyframes example5 {
 0%   { -moz-transform: translateX(70%); }
 100% { -moz-transform: translateX(0%); }
}
@-webkit-keyframes example5 {
 0%   { -webkit-transform: translateX(70%); }
 100% { -webkit-transform: translateX(0%); }
}
@keyframes example5 {
 0%   { 
 -moz-transform: translateX(70%); /* Firefox bug fix */
 -webkit-transform: translateX(70%); /* Firefox bug fix */
 transform: translateX(70%);        
 }
 100% { 
 -moz-transform: translateX(0%); /* Firefox bug fix */
 -webkit-transform: translateX(0%); /* Firefox bug fix */
 transform: translateX(0%); 
 }
}
</style>
    <!-- Modernizer js -->
    <script src="userfiuserfiles/css/modernizr.custom.js"></script>
</head>
<style>

</style>
<body>



	<nav class="navbar navbar-dark bg-primary">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    	
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="page1copy.php" style="color: #ffffff;">Home</a></li>
      </ul>
<?php
  
  session_start();
  if(isset($_SESSION['aid'])){
    echo "
    
    <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' style='color: #ffffff;'>User Guide <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#' style='color: #4286f4;'>Ticket Guide</a></li>
            <li><a href='#' style='color: #4286f4;'>Hired Guide</a></li>
          </ul>
        </li>
        <li><a data-toggle='modal' data-target='#myModal3' style='color: #4286f4;'>Bkash no </a>  </li>
        
        <li><a href='u_logout.php'>Logout</a></li>
      </ul>


    ";
  }
  else{
    echo "




     
          <ul class='nav navbar-nav navbar-right'>
          <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' href='#' style='color: #ffffff;'>User Guide <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#' style='color: #4286f4;'>Ticket Guide</a></li>
            <li><a href='#' style='color: #4286f4;'>Hired Guide</a></li>
          </ul>
        </li>
        <li><a data-toggle='modal' data-target='#myModal3' style='color: #4286f4;'>Bkash no </a>  </li>
        <li><a href='log.php' style='color: #ffffff;'>Log In</a></li>
        <li><a href='registration.php' style='color: #ffffff;'>Registration</a></li>
        
      </ul>
      


          ";
  }

?>
    

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>



 <section id="page-top">
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <!--/ Indicators end-->

            <!-- Carousel inner -->
            <div class="carousel-inner">
                <div class="item active">
                    <img class="img-responsive" src="userfiles/images/bhd.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated3">
                                <span><strong>e-Ticket</strong></span>
                            </h1>
                            <p class="animated2">In the easy way.</p> 
                            
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="userfiles/images/1.jpg" alt="slider">
                    
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated1">
                          <span>Welcome to <strong>e-Transport Service</strong></span>
                          </h1>
                            <p class="animated2">With the fesility of e-ticketing<br>And <br>Bus hiring</p>
                            <!-- <a href="#feature" class="page-scroll btn btn-primary animated3">Read More</a> -->
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
                
                <div class="item">
                    <img class="img-responsive" src="userfiles/images/2.jpg" alt="slider">
                    <div class="slider-content">
                        <div class="col-md-12 text-center">
                            <h1 class="animated2">
                                <span>Hired <strong>A Bus</strong></span>
                            </h1>
                            <p class="animated1">Choose <br>Yourself </p> 
                             
                                
                        </div>
                    </div>
                </div>
                <!--/ Carousel item end -->
            </div>
            <!-- Carousel inner end-->

            <!-- Controls -->
            <a class="left carousel-control" href="#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <!-- /carousel -->
    </section>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="example5">
    <h1 class="display-4">Live Preview</h1>    
    </div>
    
    <h4>Current situation of Bus ticket and sit </h4>
  </div>
</div>


    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Starting Point</th>
      <th scope="col">Ending Point</th>
      <th scope="col">Availabe Seat</th>
      <th scope="col">Not Confirmed</th>
      <th scope="col">Bus No.</th>
      <th scope="col">Deperture time</th>
      <th scope="col">Status</th>      
    </tr>
  </thead>

  <?php
                include('dbconection.php');

                date_default_timezone_set('Asia/Dhaka');
                $da=date("Y-m-d");
                $t3=date('H:i');

                $q="SELECT * FROM `schedule` WHERE `s_date`='$da'";
                        //$q="SELECT * FROM `schedule`";
                $q2="SELECT * FROM `ticket`";

                $run=mysqli_query($con,$q);
                $run2=mysqli_query($con,$q2);

                $no=1;

                while($row=mysqli_fetch_array($run)){
                  $r=$row['s_id'];
                  $r2=0;
                  $c=0;
                  $pc=0;
                  $run2=mysqli_query($con,$q2);
                  while($row2=mysqli_fetch_array($run2)){
                    $r2=$row2['s_id'];
                    $p=$row2['payment_status'];
                    if($r==$r2){
                      //echo "1 SId: ".$r2."  Total: ".$c."  ".$row2['t_id']."  ".$row2['s_id']."  ".$row2['u_id']."  ".$row2['starting_point']."  ".$row2['ending_point']."<br>";
                      $c=$c+1;
                      if($p=='Pending'){
                        $pc=$pc+1;
                      }
                    }
                  }
                  $tt=$row['seat_no'];
                  $ans=$tt-$c;
                  //echo "SId: ".$r."  Total: ".$c."  Available: ".$ans."  Pending: ".$pc."<br>";

    ?>


  <tbody>
    <tr>
        <td><?php echo $row['starting_point'] ?></td>
        <td><?php echo $row['ending_point'] ?></td>
        <td><?php echo $ans ?></td>
        <td><?php echo $pc ?></td>
        <td><?php echo $row['bus_no'] ?></td>        
        <td><?php echo $row['starting_time'] ?></td>

        <td><?php 
                        $dd=$row['starting_time'];
                        if($t3>=$dd){
                          echo "Bus Left";
                        }
                        else
                          echo "Bus in Position";

         ?></td>

    </tr>
    <?php
        }

    ?>
  </tbody>
</table>



<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>Our Work</h2>
<p>From this site you can easily booked your ticket and hired any bus for diferen kind of function in a less time and also ina a cost effective way.</p>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="userfiles/images/img1.jpg" alt="Vernazza" style="width:100%">
  <div class="w3-container">
  <h3>Ticket Booking</h3>
  <h4>Available</h4>
  <p>To Dhaka</p>
  <p>To Chittagong</p>
  <p>To Rajshahi</p>
  <p>To Sylet</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="userfiles/images/img2.jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>Hiring Bus</h3>
  <h4>Luxary</h4>
  <p>AC</p>
  <p>Non AC</p>
  <p>Big Bus</p>
  <p>Small Bus</p>
  </div>
  </div>
</div>




</div>




<section id="team" class="team-member-section " style="background-color:powderblue;"">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="section-title text-center">
                            <h3>Our Team</h3>
                            <p>Duis aute irure dolor in reprehenderit in voluptate</p>
                        </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div id="team-section">
                    
                        
                
                

                                <div class="our-team">

                                    <div class="team-member">
                                        <img src="userfiles/images/m3.jpg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Mr.Goru</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="userfiles/images/m4.jpg" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Mr. Sagol</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="team-member">
                                        <img src="userfiles/images/m6.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Mr. Bekub</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>    

                                    <div class="team-member">
                                        <img src="userfiles/images/donkey.png" class="img-responsive" alt="">
                                        <div class="team-details">
                                            <h4>Mr. Gadha</h4>
                                            <p>Founder & Director</p>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    


                                </div>

                    
                    </div>
                </div>
            </div>
                
        </div>
    </section>



<div class="modal fade" id="myModal3" tabpage1copy="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>            
            </div>
              <section>
                <div class="modal-body modal-spa">
                  <div class="writ">
                    <h4>01800000000</h4>
                      
                  </div>
                </div>
              </section>
          </div>
        </div>
      </div>















<section id="contact" class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        <h3>Contact With Us</h3>
                        <p class="white-text">Thanks for using our service</p>
                    </div>
                </div>
            </div>
            
        <footer class="style-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <span class="copyright">Copyright &copy; <a href="">Lite Coder</a>Future</span>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-social text-center">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="footer-link">
                            <ul class="pull-right">
                                <li><a href="#">Privacy Policy</a>
                                </li>
                                <li><a href="#">Terms of Use</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>


    <div id="loader">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>

    

    <!-- jQuery Version 2.1.1 -->
    <script src="slide/js/jquery-2.1.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="slide/asset/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="userfiles/js/jquery.easing.1.3.js"></script>
    <script src="userfiles/js/classie.js"></script>
    <script src="userfiles/js/count-to.js"></script>
    <script src="userfiles/js/jquery.appear.js"></script>
    <script src="userfiles/js/cbpAnimatedHeader.js"></script>
    <script src="userfiles/js/owl.carousel.min.js"></script>
  <script src="userfiles/js/jquery.fitvids.js"></script>
  <script src="userfiles/js/styleswitcher.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="userfiles/js/jqBootstrapValidation.js"></script>
    <script src="userfiles/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="userfiles/js/script.js"></script>

</body>