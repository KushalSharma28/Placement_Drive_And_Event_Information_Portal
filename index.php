<?php

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body id="main">
   
  <div class="container"><!--main container starts  here -->
    <nav class="navbar navbar-expand-md"> <!-- navbar starts here -->
      <a class="navbar-brand">
        <img src="images/succ.jpg" alt="LOGO" height="40" width="60">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">  
        <span class="navbar-toggler-icon bg-light"></span>          
      </button>
 
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#Home"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#vision"><strong>Vision</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#team"><strong>Team</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#accordion"><strong>Guide</strong></a>
          </li>

       <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#Colleges" id="navbardrop" data-toggle="dropdown">
              <strong>Colleges</strong>
            </a>
            <div class="dropdown-menu" id=dropdown>
              <a class="dropdown-item" href="#">PATEL COLLEGE</a>
              <a class="dropdown-item" href="#">RADHA-RAMAN</a>
              <a class="dropdown-item" href="#">ORIENTAL COLLEGE</a>
              <a class="dropdown-item" href="#">MILLLENIUM COLLEGE</a>
            </div>
          </li><!--/ Dropdown -->

          <li>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModal">
              <strong>Login/Signup</strong>
            </button>
          
          <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
      
        <!-- Modal Header -->
                  <div class="modal-header bg-info">
                    <h4 class="modal-title"><strong>Login as ..</strong></h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
        
        <!-- Modal body -->
                  <div class="modal-body bg-light" align="center">
                    <div><a href="html/login_student.php" class="btn btn-warning"><strong>Student..</strong></a></div>
                    <br><br>
                    <div><a href="html/login_admin.php" class="btn btn-dark"><strong>As Admin</strong></a></div><br><br>
                    <div><a href="html/super_admin_login.php" class="btn btn-success"><strong>Super User</strong></a></div>
                  </div>
        
        <!-- Modal footer -->
                  <div class="modal-footer bg-dark">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
            </div>  <!-- / The Modal -->

          </li>
        </ul>
      </div>
    </nav> <!-- navbar ends here -->

    <div class="container"><!-- Updates container starts here -->
      <div class="row"><!--row for latest updates -->
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center bg-light">
              <h3 class="card-title text-warning" id="event">Events</h3>
                 
              	  <a href="#"><p>Smart india Hackathon !</p></a>
                  <a href="#"><p>manthan !</p></a>
                  <a href="#"><p>Srijan !</p></a>
                  <a href="#"><p>XYZ  !</p></a>
                  <a href="#"><p>CODING...........</p></a>
              
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card">
            <div class="card-body text-center bg-light">
              <h3 class="card-title text-warning" id="campus">Campus</h3>
                   
                <a href="#"><p>cognizant pool campus</p></a>
                <a href="#"><p>wIPRO </p></a>
                <a href="#"><p>mINDTREE </p></a>
                <a href="#"><p>cognizant </p></a>
                <a href="#"><p>Accenture </p></a>
                
            </div>
          </div>
        </div>
      </div> <!--row for latest updates -->
    </div><!-- Updates container ends here -->

    <div class="container">

      <div class="carousel slide" data-ride="carousel" id="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-slide-to="0" data-target="#carousel"></li>
          <li data-slide-to="1" data-target="#carousel"></li>
          <li data-slide-to="2" data-target="#carousel"></li>
          <li data-slide-to="3" data-target="#carousel"></li>
        </ol>

        <div class="carousel-inner" id="c_img">
        <div class="carousel-item active"><img alt="First slide" class="d-block w-100"  src="images/ycan.jpg"></div>
        <div class="carousel-item"><img alt="First slide" class="d-block w-100"  src="images/sabre.jpg"></div>
        <div class="carousel-item"><img alt="Second slide" class="d-block w-100"   src="images/cs.jpg"></div>
        <div class="carousel-item"><img alt="Third slide"class="d-block w-100"   src="images/haven.jpg"></div>
      </div>

      <a class="carousel-control-prev" data-slide="prev" href="#carousel" role="button">
        <span aria-hidden="true" class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span>
      </a> 
      <a class="carousel-control-next" data-slide="next" href="#carousel" role="button">
        <span aria-hidden="true" class="carousel-control-next-icon"></span><span class="sr-only">Next</span>
      </a>
    </div>
  
  </div>

  <div class="container" id="vision"><!-- vision container starts here -->
    <h2 class="text-center">Our Vision</h2>  <!-- Course Heading -->
    <div class="row mt-4">        <!-- Start Course 1st Row -->
      <div class="col-lg-6 mb-4">     <!-- Start Course 1st Row's 1st Column -->
        <img src="images/besto.jpg" alt="" class="img-fluid" width="480"  height="400">
      </div>  <!-- End Course 1st Row's 1st Column -->

      <div class="col-lg-6">    <!-- Start Course 1st Row's 2nd Column -->
        <h2 class="text-center">Know in Advance</h2> <br>
        <p>As we know in this competitive era student have to keep themselves fully updated and get various achievements  under belt. Specially for engineering student , participation in extra curriculum activities, achievement, hackhathon  etc are very important.As there are many competitive events occur in each and every colleges, but student are not aware of them.Any kind of achievement gives student a huge confident and student can also mention these in their resume as well </p>
        <p>The Objective of  Portal  System is to develop a web based application using which all Engineering  students can easily find  Placement Drive and various Event  Information at one Point </p>
      </div>  <!-- End Course 1st Row's 2nd Column -->
    </div>  <!-- End Course 1st Row -->

    <div class="row mt-4">    <!-- Start Course 2nd Row -->
      <div class="col-lg-6">  <!-- Start Course 2nd Row's 1st Column -->
        <h2 class="text-center">Participation</h2> <br>
        <p>As we know in this competitive era student have to keep themselves fully updated and get various achievements under belt. Specially for engineering student , participation in extra curriculum activities, achievement, hackhathon  etc are very important.As there are many competitive events occur in each and every colleges, but student are not aware of them.Any kind of achievement gives student a huge confident and student can also mention these in their resume as well </p>
        <p>The Objective of  Portal  System is to develop a web based application using which all Engineering  students can easily find  Placement Drive and various Event  Information at one Point </p>
      </div>  <!-- End Course 2nd Row's 1st Column -->

      <div class="col-lg-6 mb-4">   <!-- Start Course 2nd Row's 2nd Column -->
        <img src="images/course2.jpeg" alt="" class="img-fluid">
      </div>    <!-- End Course 2nd Row's 2nd Column -->
    </div>    <!-- End Course 2nd Row -->
  </div> <!-- vision container ends here -->

  <hr>
  
  <div class="container" id="team"><!-- team container starts here -->
    <h2 class="text-center"><strong>Team</strong></h2>    <!-- Team Heading-->
    <div class="row mt-5">    <!-- Start Team Row-->
      <div class="col-lg-3 col-sm-6">  <!-- Start Team 1st Column-->
        <div class="card-body text-center">
          <img src="images/mdh.jpg" class="img-fluid" style="border-radius: 100px;">
            <h4 class="card-title">Madhav</h4>
        </div>
      </div>    <!-- End Team 1st Column-->

      <div class="col-lg-3 col-sm-6">     <!-- Start Team 2nd Column-->
        <div class="card-body text-center">
          <img src="images/vijay.jpeg" class="img-fluid" style="border-radius: 100px;">
          <h4 class="card-title">vijay</h4>
        </div>
      </div>      <!-- End Team 2nd Column-->

      <div class="col-lg-3 col-sm-6">       <!-- Start Team 3rd Column-->
        <div class="card-body text-center">
          <img src="images/kushal.jpg" class="img-fluid" style="border-radius: 100px;">
          <h4 class="card-title">kushal</h4>
        </div>
      </div>       <!-- End Team 3rd Column-->

      <div class="col-lg-3 col-sm-6">        <!-- Start Team 4th Column-->
        <div class="card-body text-center">
          <img src="images/tarun.jpeg" class="img-fluid" style="border-radius: 100px;">
          <h4 class="card-title">tarun</h4>
        </div>
      </div>     <!-- End Team 4th Column-->
    </div>    <!-- End Team Row-->
  </div><!-- team container ends here -->

  <hr>

  <div class="container" id="accordion"> <!-- guide container starts here -->
    <h2 align="center">Website Working Guide!</h2>
    <p align="center"><strong>Note:</strong>Please click on question.</p>
    <div class="card">
      <div class="card-header">
        <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the benefits for registered user?</a>
      </div>
      <div id="collapseOne" class="collapse show" data-parent="#accordion">
        <div class="card-body">More over registered users have notified as the new post where uploaded.</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">How to get associated as college admin?
        </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">Promotion of their college.</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">What are the Privileges to admin?</a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">Uploads modify or delete the data .</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">Role of super Admin. </a>
      </div>
      <div id="collapseFour" class="collapse" data-parent="#accordion">
        <div class="card-body">VERIFICATION AND........................</div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">Do you have a App of this website ?</a>
      </div>
      <div id="collapseFive" class="collapse" data-parent="#accordion">
        <div class="card-body">Not yet but we are working on it.</div>
      </div>
    </div>
  </div> <!-- guide container ends here -->

      <!-- Start Footer-->
  <footer class="container text-warning mt-5" id="footer">
    <div class="row py-3">    <!-- Start Footer Row -->
      <div class="col-md-10 text-center">   
        <strong> Minor project Development 2019 </strong>
      </div>   
    </div>    <!-- End Footer Row -->
  </footer> <!-- End Footer -->

 </div> <!-- Main container ends here -->
</body>
</html>