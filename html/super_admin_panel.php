<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <link href="../css/admin_panel.css" rel="stylesheet">

  <title>Super Admin Panel</title>
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
      <div class="sidebar-heading text-white">Super Admin</div>
      <div class="list-group">
        <a href="#" class="list-group-item active">Dashboard</a>
        <a href="../html/create_admin.php" class="list-group-item">Create New Admin</a>
        <a href="#menu1" class="list-group-item collapsed " data-toggle="collapse" data-parent="#sidebar-wrapper" aria-expanded="false"><span class="hidden-sm-down">User Type</span> </a>
          <div class="collapse" id="menu1">
             <a href="../php/display_admin.php" class="list-group-item" data-parent="#menu1">Admin</a>
             <a href="../php/display_student.php" class="list-group-item" data-parent="#menu1">Student</a>
          </div>
         <a href="#" class="list-group-item">Logout</a>
        
      </div>
    </div>
    <!--sidebar-wrapper -->

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
              <button class="dropdown-toggle bg-warning text-white" data-toggle="dropdown">New Verify
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">Campus</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Events</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <!-- <div class="container-fluid"> -->
        <!-- <h1 class="mt-4" align="center"> Welcome Administrator </h1> -->
        
      <!-- </div> -->

      <?php
     
      include 'super_admin_verify_pannel.php';
      ?>

        <div class="container">
        <div class="col-lg-12">

             <?php

               include('../php/connection.php');

                $query="SELECT * FROM event_db";

              $res=mysqli_query($conn,$query);

                 $sn=1;

                  ?>
      
                     <table class="table table-bordered table-danger">
                        <h2 align="center">All Event </h2>
                                         <tr class="bg-dark text-white text-center">
                                            <th>S.No</th>
                                            <th>Event Name</th>
                                            <th>Date</th>
                                            <th>Address</th>
                                            <th>Organizer</th>
                                            <th>Contact no</th>
                                            <th>Complete Detail</th>
                                          </tr> 

                         <?php 

                             while($row=mysqli_fetch_array($res))

                          {

                                   echo "<tr><td>".$sn."</td><td>".$row[2]."</td><td>".$row[3]."</td>
                                     <td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td></tr>"; 

                                      $sn++;

                           }

                           ?>

                      </table>
               </div>
    
             </div>








    </div>
    <!-- page-content-wrapper -->

  </div>
  <!-- wrapper -->

   <!-- Start Footer-->
  <footer class=" container-fluid text-warning mt-5" id="footer">
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
