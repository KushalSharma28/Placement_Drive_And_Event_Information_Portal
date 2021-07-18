<?php 
session_start();

include '../php/connection.php';

if(isset($_POST['submit'])){

$enroll=$_POST['roll'];
$password=$_POST['pwd'];

$query= "SELECT * FROM student_register  where roll='$enroll' and pwd='$password'";

$result=mysqli_query($conn,$query);
$run=mysqli_fetch_array($result);

if($run['roll']==$enroll and $run['pwd']==$password)
{
	$_SESSION['roll']=$enroll;
	$_SESSION['pwd']=$password;
	header('location:../html/student_panell.php');
}	
else
{
	echo "Failed to login ";
}


}

 ?>