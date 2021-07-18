<?php
session_start();
include("../php/connection.php");
 $userpro=$_SESSION['uname'];
 $user=$_SESSION['pwd'];
// if($userpro==true)
// {

// }

// else{
//   header('location:../html/login_admin.php');
// }

$qry = "SELECT * FROM admin_register WHERE email = '$userpro' and password = '$user' ";
$run = mysqli_query($conn,$qry);
$row = mysqli_fetch_array($run);


?>


<!DOCTYPE html>
<html lang="en">

<head>
  
  <link href="../css/admin_panel.css" rel="stylesheet">

  <title> Admin Panel</title>
<!-- Bootstrap core CSS -->
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>

</head>
<body>

  <div class="d-flex container-fluid" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading text-white">Admin Panel</div>
      <div class="list-group">
        <a href="#userpro" class="list-group-item active ">Dashboard</a>
        <a href="#menu1" class="list-group-item collapsed" data-toggle="collapse" data-parent="#sidebar-wrapper" aria-expanded="false"><span class="hidden-sm-down">Edit My Post</span> </a>
          <div class="collapse" id="menu1">
             <a href="../php/edit_campus.php" class="list-group-item" data-parent="#menu1">Campus</a>
             <a href="../php/edit_event.php" class="list-group-item" data-parent="#menu1">Event</a>
          </div>
        <a href="#" class="list-group-item">Change Password</a>
        <a href="../php/logout.php" class="list-group-item">Logout</a>
        
      </div>
    </div>
    <!-- /sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg ">
        <button class="btn btn-success" id="menu-toggle"><img src="../images/logo.png" height="25"></button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#content" aria-controls="content" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="content">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
             <li class="nav-item dropdown">
              <button class="dropdown-toggle bg-warning text-white" data-toggle="dropdown">New Upload
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="../html/campus_form.php">Campus</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="../html/event.php">Events</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid" id="userpro">
        
        <h2 align="center">User Details</h2> 
                 <table class="table table-borderless ">
                 <tr>
                  <th>User Name:</th>
                  <td><?php echo $row['admin_name'];?></td>
                  <td rowspan="5" align="center"><img src="../uploads/<?php echo $row['admin_photo'];?>" height=220px width="200px" class="rounded-circle"></td>
                 </tr>  

                 <tr>
                  <th>Institute:</th>
                  <td><?php echo $row['college_name'];?></td>
                 </tr>  

                 <tr>
                  <th>Designation:</th>
                  <td><?php echo $row['designation'];?></td>
                 </tr>  

                 <tr>
                  <th>Email Id:</th>
                  <td><?php echo $row['email'];?></td>
                 </tr>  


                 <tr>
                  <th>Mobile:</th>
                  <td><?php echo $row['mobile'];?></td>
                 </tr>  

                </table>
        
      </div>

   </div>
    <!--page-content-wrapper -->

  </div>
  <!-- wrapper -->

   <!-- Start Footer-->
  <footer class=" containe-fluid text-warning mt-5" id="footer">
      <div class="row py-3">    <!-- Start Footer Row -->
        <div class="col-md-12 text-center">   
          <strong> Minor project Development 2019 </strong>
        </div>   
      </div>    <!-- End Footer Row -->
  </footer> <!-- End Footer -->

  

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
