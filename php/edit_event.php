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
 <div class=" container">
 	
 		<div class="col-lg-12">

                <table class="table table-bordered table-danger">

                          <h2 align="center">Update Event Details</h2>

                            <tr class="bg-dark text-white text-center">

                              <th>Id</th>
                              <th>Registration Fees</th>
                              <th>Event Name</th>
                              <th>Date</th>
                              <th>Address</th>
                              <th>Oraganizer</th>
                              <th>Contact</th>
                              <th>COMPLETE DETAILS</th>
                              <th>Image</th>
                              <th>Verification_Status</th>
                              <th>Modify</th>
                          
                          </tr>

                          <?php 

                               include('connection.php');
                                  $query= "SELECT * FROM event_db";
                                  $result=mysqli_query($conn,$query);
                                 while($res=mysqli_fetch_array($result)){

                            ?>


                            <tr class="text-center">
                              
                              <td><?php echo $res['id']?></td>
                              <td><?php echo $res['fees']?></td>
                              <td><?php echo $res['event']?></td>
                              <td><?php echo $res['date']?></td>
                              <td><?php echo $res['addr']?></td>
                              <td><?php echo $res['organizer']?></td>
                              <td><?php echo $res['contact']?></td>
                              <td><?php echo $res['details']?></td>
                              <td><?php echo $res['event_image']?></td>
                              <td><?php echo $res['status']?></td>
                              <td><button class="btn-primary btn"><a href="update_event_details.php ?id=<?php echo $res['id'];?> & fees=<?php echo $res['fees'];?>  & event=<?php echo $res['event'];?> & date=<?php echo $res['date'];?> & addr=<?php $res['addr'];?> & organizer=<?php echo $res['organizer'];?> & contact=<?php echo $res['contact'];?> & detail=<?php echo $res['details'];?> & event_image=<?php echo $res['event_image'];?> " class ="text-white">Edit</a></button></td>

                           </tr>

                       <?php  

                        }

                        ?>

                </table>

</div>
 	
 </div>
 </body>
 </html>