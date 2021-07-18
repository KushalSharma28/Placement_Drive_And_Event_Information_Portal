<?php
include('connection.php');

if(isset($_POST['submit']))
{

$fees =  $_POST['fees'];
$event =  $_POST['event'];
$date =  $_POST['date'];
$addr =  $_POST['addr'];
$organize =  $_POST['organizer'];
$contact =  $_POST['contact'];
$details =  $_POST['details'];
$image= $_FILES['event_img']['name'];
$temp_image= $_FILES['event_img']['tmp_name'];
move_uploaded_file($temp_image, "../uploads/$image");

$sql= "INSERT INTO event_db (fees, event, date, addr, organizer, contact, details, event_image) VALUES ('$fees', '$event', '$date', '$addr','$organize', '$contact', '$details','$image')";


 if(mysqli_query($conn, $sql)){
    echo "Event Details Uploaded successfully.";
} else{
    echo "Details Not inserted". mysqli_error($conn);
}
 
}

mysqli_close($conn);




?>