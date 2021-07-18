<!DOCTYPE html>
<html>
<head>
	<title>Student Login Form</title>
     <link rel="stylesheet" type="text/css" href="../css/login_forms.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
</head>

<script type="text/javascript">
	$(document).ready(function(){
     
     $("#roll").keyup(function(){

     	if(validateEmail()){
     		$("#roll").css("border","2px solid green");
     		$("#rollMsg").html("<p class='text-success'>Valid</p>");
     	}

     	else{
     			$("#roll").css("border","2px solid red");
     			$("#rollMsg").html("<p class='text-danger'>invalid</p>");
     	}


     });

     $("#pwd").keyup(function(){
     	if(validatePassword()){
     		$("#pwd").css("border","2px solid green");
     		$("#passMsg").html("<p class='text-success'>Password Valided</p>");
     	}
     	else{
     		$("#pwd").css("border","2px solid red");
     		$("#passMsg").html("<p class='text-danger'>InValided password</p>");
     	}

     });

	});

	function validateEmail(){
	var roll=$("#roll").val();

	
	if(roll.length > 10){
		return true;
	}
	else{
		return false;
	}
}
 function validatePassword(){

 	var pwd=$("#pwd").val();

 	if(pwd.length > 7){

 		return true;
        }

        else{
        	return false;
        }
 	}
 


</script>

<body class="bg-primary">

	<div class="container">

	<form action="../php/student_login.php" method="POST">

			<div class="col-md-4 border bg-light" style="margin-top:12%; margin-left: 35%; padding: 14px;">

			            <div class="row">
							<div class="col">
								<span class="profile-img">
									<i class='fas fa-user-circle' style='font-size:120px'></i>
								</span>
							</div>
						</div>

				<div class="form-group">
					<label>Enter Enrollment:</label>
					<input type="text" name="roll" class="form-control" id="roll" autocomplete="off" placeholder="Enrollment ">
					<span id="rollMsg"></span>
				</div>

				<div class="form-group">
					<label>Enter Password:</label>
					<input type="password" name="pwd" class="form-control" id="pwd" autocomplete="off" placeholder="Enter password">
					<span id="passMsg"></span>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Login" id="login_btn" class="btn-lg">
				</div>

				<div class="form-group" id="forgot">
					<div>
						Don't have an account ? <a href="../html/student_register_form.php" class="ml-2">Sign Up</a>
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