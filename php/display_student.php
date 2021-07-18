<?php

include('../php/connection.php');

$query="SELECT * FROM student_register";

$res=mysqli_query($conn,$query);

$sn=1;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

<!-- Bootstrap 4.2.1 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

</head>
<body>
	<div class="container">
		<div class="col-lg-12">
			
      <table class="table table-bordered table-danger">
      	<h2 align="center">All Registered Student</h2>
                    <tr class="bg-dark text-white text-center">
                      <th>S.No</th>
                      <th>Full_Name</th>
                      <th>College</th>
                      <th>Roll No.</th>
                      <th>Email</th>
                      <th>Gender</th>
                      <th>Mobile</th>
                      <th>Password</th>
                     </tr> 

                   <?php 

                     while($row=mysqli_fetch_array($res))

                     {

                     echo "<tr><td>".$sn."</td><td>".$row[1]."  ".$row[2]."</td>
                     <td>".$row[3]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td>
                     <td>".$row[9]."</td></tr>"; 

                     $sn++;

                    }

                    ?>

                  </table>
      </div>
		
	</div>

</body>
</html>
