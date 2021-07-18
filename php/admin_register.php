<?php

include('connection.php');

if(isset($_POST['register']))
{

 $username = $_POST['username'];
 $institute= $_POST['institute'];
 $designation = $_POST['designation'];
 $email = $_POST['email'];
 $mobile = $_POST['mobile'];
 $password= $_POST['pwd'];
 $conpassword = $_POST['cpwd'];
 $image= $_FILES['admin_img']['name'];
 $temp_image= $_FILES['admin_img']['tmp_name'];
 move_uploaded_file($temp_image, "../uploads/$image");
 

  $sql = "INSERT INTO admin_register (admin_name, college_name, designation, email, mobile,  password, conpassword, admin_photo) VALUES('$username', '$institute', '$designation', '$email',  '$mobile', '$password', '$conpassword','$image')";

if(mysqli_query($conn, $sql)){
    echo "<br> User Registration Done";
} else{
    echo "<br> Details Not inserted". mysqli_error($conn);
}
 
$query= "SELECT * FROM admin_register WHERE email='$email' and password='$password'";
$result=mysqli_query($conn,$query);
$run=mysqli_fetch_array($result);

$mailMsg=$email." ".$password;

   require '../phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer();
    $mail ->IsSmtp();
    $mail ->SMTPDebug = 0;
    $mail ->SMTPAuth = true;
    $mail ->SMTPSecure = 'ssl';
    $mail ->Host = "smtp.gmail.com";
    $mail ->Port = 465; // or 587
    $mail ->IsHTML(true);
    $mail ->Username = "madhavrajput.1996@gmail.com";
    $mail ->Password = "8982290151";
    $mail ->SetFrom("madhavrajput.1996@gmail.com");
    $mail ->Subject ='Alert Your account has been created';
    $mail ->Body = $mailMsg;
    $mail ->AddAddress($email);

    if(!$mail->Send())
    {
        echo "<br> Mail Not Sent";
    }
    else
   {
        echo "<br> Login Details sent to mail id .";
    }

}

mysqli_close($conn);

?>