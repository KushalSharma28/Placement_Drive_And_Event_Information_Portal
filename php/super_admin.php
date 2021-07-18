<?php 
session_start();
include '../php/connection.php';
 $name=$_POST['uname'];
$pass=$_POST['pwd'];
$query= "SELECT * FROM super_admin_login WHERE name='$name' and password='$pass'";
$result=mysqli_query($conn,$query);
$run=mysqli_fetch_array($result);

if($run['name']==$name and $run['password']==$pass)
{
	$_SESSION['uname']=$name;
	$_SESSION['pwd']=$pass;
	include "../html/super_admin_panel.php";
}	
else
{
	echo "Failed to login ";
}
 ?>