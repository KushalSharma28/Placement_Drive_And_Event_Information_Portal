<?php

?>
<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap 4.2.1 -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<title> Creating Admin </title>
</head>
<body>

	<div class="container py-5">
     <div class="row">
     <div class="col-md-6 offset-md-3">

        <div class="card">  <!-- form card register -->
           <div class="card-header card bg-success">
             <h3 class="mb-4" align="center">Create Admin</h3>
           </div>

         <div class="card-body card bg-secondary"><!-- form card body -->

             <form action="../php/admin_register.php" method="POST" enctype="multipart/form-data">
             <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" name="username" placeholder="Full Name">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" name="institute" placeholder="College Name">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" name="designation" placeholder="Designation">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" class="form-control" name="pwd" placeholder="Password">
            </div>
            <div class="col">
              <input type="password" class="form-control" name="cpwd" placeholder="Confirm Password">
            </div>
          </div>

          <div class="row align-items-center mt-4">  
          	<div class="col">
               <input type="file" name="admin_img" class="form-control" name="">
              </div>
           </div> 
          <div class="row align-items-center">
            <div class="col mt-4 ">
              <center><input type="submit" name="register" class="btn btn-danger btn-lg"></center>
            </div>
          </div>
        </form>

         </div><!-- form card body -->
      </div><!-- /form card register -->
    </div>
  </div>
</div>
     

</body>
</html>