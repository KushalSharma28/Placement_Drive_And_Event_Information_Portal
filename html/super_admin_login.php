<!DOCTYPE html>
<html>
<head>
	<title>Super Admin Login</title>
     <link rel="stylesheet" type="text/css" href="../css/login_forms.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  
  <link rel="stylesheet" type="text/css" href="../fontawesome/css/all.css">
</head>

<script type="text/javascript">
	$(document).ready(function(){
     
     $("#uname").keyup(function(){

     	if(validateUname()){
     		$("#uname").css("border","2px solid green");
     		$("#unameMsg").html("<p class='text-success'>Valided Username</p>");
     	}

     	else{
     			$("#uname").css("border","2px solid red");
     			$("#unameMsg").html("<p class='text-danger'>invalid username </p>");
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

	function validateUname(){
	var uname=$("#uname").val();


	if(uname.length > 4){
		return true;
	}
	else{
		return false;
	}
}
 function validatePassword(){

 	var pwd=$("#pwd").val();

 	if(pwd.length > 4){

 		return true;
        }

        else{
        	return false;
        }
 	}
 


</script>

<body class="bg-primary">

	<div class="container">

	<form action="../php/super_admin.php" method="POST">

			<div class="col-md-4 border bg-light" style="margin-top:12%; margin-left: 35%; padding: 14px;">

			            <div class="row">
							<div class="col">
								<span class="profile-img">
									<i class='fas fa-user-circle' style='font-size:120px'></i>
								</span>
							</div>
						</div>

				<div class="form-group">
					<label>Enter Username:</label>
					<input type="text" name="uname" class="form-control" id="uname" autocomplete="off" placeholder="Enter username">
					<span id="unameMsg"></span>
				</div>

				<div class="form-group">
					<label>Enter Password:</label>
					<input type="password" name="pwd" class="form-control" id="pwd" autocomplete="off" placeholder="Enter password">
					<span id="passMsg"></span>
				</div>

				<div class="form-group">
					<input type="submit" name="submit" value="Login" id="login_btn" class="btn-lg">
				</div>

				<div class="form-group" id="forgot"> <!--start of forgot password div -->
					<a href="#">Forgot your password?</a>
				</div> 
				
				
			</div>

	</form>
		
	</div>

</body>
</html>