<?php

include('connection.php');

if(isset($_POST['submit'])){

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $college_name = $_POST['college_name'];
 $college_code = $_POST['college_code'];
 $enroll = $_POST['roll'];
 $email = $_POST['email'];
 $gender = $_POST['gender'];
 $mobile = $_POST['mobile'];
 $pwd = $_POST['pwd'];
 $cpwd = $_POST['cpwd'];

 if ($fname == '' || $lname == '' || $college_name == '' || $college_code == '' || $enroll == '' || $email == ''
 || $gender == '' || $mobile == '' || $pwd == '' || $cpwd == '') 

 {

     echo ("Please fill all fields...!!!!!!");

 }

else{

 $sql = "INSERT INTO student_register (fname, lname, college_name, college_code,
          roll, email, gender, mobile, pwd, cpwd) 
  VALUES ('$fname', '$lname', '$college_name', '$college_code', '$enroll',
           '$email', '$gender', '$mobile', '$pwd', '$cpwd')";

 if(mysqli_query($conn, $sql)){
    echo "Registered successfully.";
} 

else{
    echo "data not inserted". mysqli_error($conn);
}
 
}

} 

mysqli_close($conn);


?>