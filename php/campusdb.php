<?php

include('connection.php');
$query = "select max(id) from campus_db";
$result1 = mysqli_query($conn,$query);
$row1= mysqli_fetch_array($result1);
echo $row1[0];
echo $name = $row1[0]+1;
echo $name=$name.".jpg";
if(isset($_POST['submit']))
{

$mnc =  $_POST['mnc'];
$venue =  $_POST['venue'];

$new =  $_POST['date'];


$addr =  $_POST['addr'];
$ctc =  $_POST['ctc'];
$branch =  $_POST['branch'];
$profile =  $_POST['profile'];
$detail =  $_POST['detail'];
$image=$_FILES['campus_img']['name'];
$temp_image=$_FILES['campus_img']['tmp_name'];
move_uploaded_file($temp_image, "../uploads/$name");

$sql= "INSERT INTO campus_db (mnc, venue,  date, addr, ctc, branch, profile, detail, pool_image) VALUES ('$mnc', '$venue', '$new', '$addr','$ctc', '$branch', '$profile', '$detail', '$name')";


 if(mysqli_query($conn, $sql)){
    echo "Campus Detils Uploaded Successfully.";
} else{
    echo "Data not Inserted". mysqli_error($conn);
}
 
}

mysqli_close($conn);




?>