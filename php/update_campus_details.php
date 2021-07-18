
<?php

include ('connection.php');

 $ID = $_GET['id'];

$qry="SELECT * FROM campus_db where id='$ID'";
$res=mysqli_query($conn,$qry);
$row=mysqli_fetch_array($res);

?>


<!DOCTYPE html>
<html>
<head>
    <title>Upload Campus Details</title>

<!-- Bootstrap 4.2.1 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">

</head>
<body>

    <div class="container py-5">
     <div class="row">
     <div class="col-md-6 offset-md-3">

        <div class="card">  <!-- form card register -->
           <div class="card-header card bg-success">
             <h3 class="mb-4" align="center">Pool Campus Details</h3>
           </div>

         <div class="card-body card bg-secondary"><!-- form card body -->
          <form class="form" method="POST" action=""  enctype="multipart/form-data">
            
              <div class="form-group">
                 <label>Company Name</label>
                     <input type="text" class="form-control"  name="mnc" value="<?php echo $row['mnc']; ?>">
            </div>

             <div class="form-group">
              <label>Venue</label>
              <input type="text" class="form-control" name="venue" value="<?php echo $row['venue']; ?>">
           </div>

            <div class="form-group">
                   <label>Date</label>
                   <input type="date" name="date" class="form-control" value="<?php echo $row['date']; ?>">
            </div>

                      
            <div class="form-group">
             <label>Address</label>
              <textarea class="form-control" rows="2" name="addr" ><?php echo $row['addr']; ?></textarea>  
            </div>

            <div class="form-group">
              <label>CTC</label>
              <input type="text" class="form-control" name="ctc" value="<?php echo $row['ctc']; ?>">
            </div>
            <div class="form-group">
              <label>Stream</label>
              <input type="text" class="form-control" name="branch" value="<?php echo $row['branch']; ?>">
            </div>

          
            <div class="form-group">
               <label>Job Profile</label>
                 <input type="text" class="form-control" name="profile" value="<?php echo $row['profile']; ?>">
           </div>

            <div class="form-group">  
               <label>Details</label>  
              <textarea class="form-control" rows="4" name="detail" ><?php echo $row['detail']; ?></textarea>  
            </div> 

            <div>
              <img src="../uploads/<?php echo $row['pool_image'];?>" height="100px" width="100px"> <?php echo $row['pool_image'];?>
            </div>

            <div class="form-group">  
               <label>Upload Image</label>
             <div class="input-group">
              <input type="file" name="campus_img" class="form-control" value="<?php echo $row['pool_image']; ?>">
              
            </div>
           </div> 

          <div class="form-group">
               <center><input type="submit"  class="btn btn-danger btn-lg"  name="submit" value="UPDATE"></center>
          </div>

    </form>

  
       </div><!-- form card body -->
      </div><!-- /form card register -->
    </div>
  </div>
</div>




</body>
</html>
<?php

if(isset($_POST['submit'])){
 $mnc = $_POST['mnc'];
 $venue = $_POST['venue'];
 $date = $_POST['date'];
 $addr = $_POST['addr'];
 $ctc = $_POST['ctc'];
 $branch = $_POST['branch'];
 $profile = $_POST['profile'];
 $detail = $_POST['detail'];
 $name =$row['pool_image'];
$image=$_FILES['campus_img']['name'];
$temp_image=$_FILES['campus_img']['tmp_name'];
move_uploaded_file($temp_image, "../uploads/$name");
$query ="UPDATE `campus_db` SET `mnc`='$mnc',`venue`='$venue',`date`='$date',`addr`='$addr',`ctc`='$ctc',`branch`='$branch',`profile`='$profile',`detail`='$detail' ,`pool_image`='$name' WHERE id='$ID'";
       $data= mysqli_query($conn,$query);
     
     if($data)
     {
        echo '<script language="javascript">';
        echo 'alert("data updated successfully")';
        
       header("location:edit_campus.php"); 
       echo '</script>';
     }
     else
     {
       echo '<script language="javascript">';
        echo 'alert("data not updated ")'; 
       echo '</script>';
     }

   }
?>