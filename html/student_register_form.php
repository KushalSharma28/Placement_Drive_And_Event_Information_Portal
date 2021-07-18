<!DOCTYPE html>
<html>
<head>
	<title>Student Registration Form</title>
     <link rel="stylesheet" type="text/css" href="../css/student_registration.css">
 <!--   <script type="text/javascript" src="../js/student_reg.js"></script> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
</head>
<script>
	
    $(document).ready(function(){
     
     $("#mobile").keyup(function(){

        if(validateMobile()){
            $("#mobile").css("border","2px solid green");
            $("#numMsg").html("<p class='text-success'> Valided</p>");
        }

        else{
                $("#mobile").css("border","2px solid red");
                $("#numMsg").html("<p class='text-danger'>invalid </p>");
        }
      
      });


       $("#fname").keyup(function(){

        if(validateFname()){
            $("#fname").css("border","2px solid green");
            $("#fnameMsg").html("<p class='text-success'> Valided</p>");
        }

        else{
                $("#fname").css("border","2px solid red");
                $("#fnameMsg").html("<p class='text-danger'>invalid </p>");
        }
      
      });


       $("#lname").keyup(function(){

        if(validateLname()){
            $("#lname").css("border","2px solid green");
            $("#lnameMsg").html("<p class='text-success'> Valided</p>");
        }

        else{
                $("#lname").css("border","2px solid red");
                $("#lnameMsg").html("<p class='text-danger'>invalid </p>");
        }
      
      });




    });

    function validateMobile(){
    var mobile=$("#mobile").val();

    var reg = /^[0-9]{10}$/ ;
    if(reg.test(mobile)){
        return true;
    }
    else{
        return false;
    }
}
 

 function validateFname(){
    var fname=$("#fname").val();

    var reg = /^[a-zA-Z_\-]+$/ ;
    if(reg.test(fname)){
        return true;
    }
    else{
        return false;
    }
}
 

  function validateLname(){
    var lname=$("#lname").val();

    var reg = /^[a-zA-Z_\-]+$/ ;
    if(reg.test(lname)){
        return true;
    }
    else{
        return false;
    }
}
 

</script>

<body class="bg-primary">

	<div class="container">

	<form action="../php/register_student.php" method="POST">

			<div class="col-md-4 border bg-light" style="margin-top:12%; margin-left: 35%; padding: 14px;">
				<div><h2 align="center">Student Registration</h2></div>

			     <div class="form-group">
					<label>First Name:</label>
					<input type="text" name="fname" class="form-control" id="fname" autocomplete="off" placeholder="Your First Name">
					<span id="fnameMsg" style="font-weight: bold;"></span>
				</div>
				
				<div class="form-group">
					<label>Last Name:</label>
					<input type="text" name="lname" class="form-control" id="lname" autocomplete="off" placeholder="Your Last Name ">
					<span id="lnameMsg" style="font-weight: bold;"></span>
				</div>

				<div class="form-group">
					<label>Enter College:</label>
					<input type="text" name="college_name" class="form-control" id="college_name" autocomplete="off" placeholder="Your College">
					<span id="college_nameMsg" style="font-weight: bold;"></span>
				</div>

				<div class="form-group">
					<label>Enter College Code:</label>
					<input type="text" name="college_code" class="form-control" id="college_code" autocomplete="off" placeholder="College Code">
					<span id="college_codeMsg" style="font-weight: bold;"></span>
				</div>

				<div class="form-group">
					<label>Enter Enrollment:</label>
					<input type="text" name="roll" class="form-control" id="roll" autocomplete="off" placeholder="Enrollment">
					<span id="rollMsg" style="font-weight: bold;"></span>
				</div>		

				<div class="form-group">
					<label>Enter Email:</label>
					<input type="email" name="email" class="form-control" id="email" autocomplete="off" placeholder="Email id">
					<span id="emailMsg" style="font-weight: bold;"></span>
				</div>

				<div class="form-group">
					<label>Select Your Gender:</label>
					 <select  name="gender" class="form-control" id="gender" >
                          <option>Select Gender</option>
                          <option>Female</option>
                          <option>Male</option>
                      </select>
					<span id="gender"></span>
				</div>

				<div class="form-group">
					<label>Enter Mobile No:</label>
					<input type="text" name="mobile" class="form-control" id="mobile" autocomplete="off" placeholder="Mobile">
					<span id="numMsg" style="font-weight: bold;"></span>
				</div>

				<div class="form-group">
					<label>Enter Password:</label>
					<input type="password" name="pwd" class="form-control" id="pwd" autocomplete="off" placeholder="Enter password">
					<span id="passMsg"></span>
				</div>

				<div class="form-group">
					<label>Confirm Password:</label>
					<input type="password" name="cpwd" class="form-control" id="cpwd" autocomplete="off" placeholder="C password">
					<span id="passMsg"></span>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Register" id="login_btn" class="btn-lg">
				</div>

				<div class="form-group" id="forgot">
					<div>
						<p>Existing User ? <a href="../html/login_student.php">Login</a></p>
					</div>
					<div>
						<a href="#">Forgot your password ?</a>
					</div>
				</div> 
				
				
			</div>

	</form>
		
	</div>

</body>
</html>