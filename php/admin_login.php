<?php 
session_start();

include '../php/connection.php';

if(isset($_POST['submit']))
{
	echo $email=$_POST['uname'];
	echo $password=$_POST['pwd'];

	$query= "SELECT * FROM admin_register where email='$email' and password='$password'";

	$result=mysqli_query($conn,$query);
	$run=mysqli_fetch_array($result);

	if($run['email']==$email and $run['password']==$password)
	{
		$_SESSION['uname']=$email;
		$_SESSION['pwd']=$password;
		header('location:../html/admin_panel.php');
	}	
	else
	{
		echo "Failed to login ";
	}
}

?>