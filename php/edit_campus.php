<?php

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<!-- Bootstrap core CSS -->
  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
 </head>
 <body>
 <div class="container-fluid">
 	
 		<div class="col-lg-12">


 			<!-- <form > -->
 				<!-- <table border="1"> -->
 					<!-- <tr><th colspan="11"><center>Edit Campus Details</center></th></tr> -->
 					<!-- <tr><th>MNC</th><th>Venue</th><th>Time</th><th>address</th><th>CTC</th><th>Branch</th><th>Profile</th><th>Detail</th><th>Update</th><th>Status</th></tr> -->
 					<!-- <?php    
 						// while($row=mysqli_fetch_array($result))
							//{
								// echo "<tr>";
								// for ($i=1; $i <= 9; $i++) { 
									// echo "<td>$row[$i]</td>";
									
								//}
								// echo "<td>";
								// if ($row[10]=="pending") {
									// echo $row[10];
								//}
								// elseif ($row[10]=="inprocces") {
									// echo $row[10];
								//}
								// elseif ($row[10]=="verify") {
									// echo $row[10];
								//}
								
								// echo "<td align=center><a href='update_campus_details.php?id=$row[0]'>Edit</a></td>";
								// echo "</td></tr>";

							//}
 					 ?> -->
 				<!-- </table> -->
 			<!-- </form> -->
                   
                      <table border="1" class="table  ">

                          <h2 align="center">Update Campus Details</h2>

                            <tr class="bg-dark text-white text-center">

                              <th>Id</th>
                              <th>COMPANY</th>
                              <th>VENUE</th>
                              <th>DATE</th>
                              <th>ADDRESS</th>
                              <th>PACKAGE</th>
                              <th>STREAM</th>
                              <th>JOB PROFILE</th>
                              <th>COMPLETE DETAILS</th>
                              <th>Image</th>
                              <th>Verification_Status</th>
                              <th>Modify</th>
                          
                          </tr>

                          <?php 

                               include('connection.php');
                                  $query= "SELECT * FROM campus_db";
                                  $result=mysqli_query($conn,$query);
                                  $c="yellow";
                                  $r="red";
                                 while($res=mysqli_fetch_array($result)){
                                  
                            ?>


                            <tr bgcolor="<?php echo $c ?>" class="text-center">
                              
                              <td><?php echo $res['id']?></td>
                              <td><?php echo $res['mnc']?></td>
                              <td><?php echo $res['venue']?></td>
                              <td><?php echo $res['date']?></td>
                              <td><?php echo $res['addr']?></td>
                              <td><?php echo $res['ctc']?></td>
                              <td><?php echo $res['branch']?></td>
                              <td><?php echo $res['profile']?></td>
                              <td><?php echo $res['detail']?></td>
                              <td><?php echo $res['pool_image']?></td>
                              <td><?php echo $res['status']?></td>
                              <td><button class="btn-primary btn"><a href="update_campus_details.php ?id=<?php echo $res['id'];?>" class ="text-white">Edit</a></button></td>

                           </tr>
                       <?php  

                           if($c=="yellow")
                          
                            $c="pink";

                          else if ($c=="pink") 
                           $c="yellow";

                        }

                        ?>

                </table>

</div>
 	
 </div>
 </body>
 </html>