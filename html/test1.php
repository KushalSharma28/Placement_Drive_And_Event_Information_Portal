<?php

?>

<html>
<head>
	<title></title>
	<!-- Bootstrap 4.2.1 -->
<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>
<body>
	<script>
		$(document).ready(function()
		{
			$('.submit').click(function()
			{
    			validateForm();   
			});

			function validateForm()
			{

   				var rfeesReg = /^[0-3]+$/;
   				var enameReg = /^[A-Za-z]+$/;
    			var contactReg =  /^[0-9]+$/;
    			var organizedReg = /^[A-Za-z]$/;
    			var addrvenueReg = /^[A-Za-z]$/;

    			var rfees = $('#rfeesInput').val();
    			var ename = $('#nameInput').val();
    			var contact = $('#contactInput').val();
    			var organized = $('#organizedInput').val();
    			var addrvenue = $('#addrvenueInput').val();

    			var inputVal = new Array(rfees, ename, organized, addrvenue, contact);

			    var inputMessage = new Array("rfees", "ename", "organized", "addrvenue", "contact");

     			$('.error').hide();

        		if(inputVal[0] == "")
        		{
            		$('#rfeesLabel').after('<span class="error"> Please enter fees ' + inputMessage[0] + '</span>');
        		} 
        		else if(!rfeesReg.test(rfees))
        		{
            		$('#rfeesLabel').after('<span class="error"> Numbers only </span>');
        		}
        		if(inputVal[1] == "")
        		{
            		$('#companyLabel').after('<span class="error"> Please enter your ' + inputMessage[1] + '</span>');
        		}
        		if(inputVal[2] == "")
        		{
            		$('#emailLabel').after('<span class="error"> Please enter your ' + inputMessage[2] + '</span>');
        		} 
       			else if(!emailReg.test(email))
       			{
            		$('#emailLabel').after('<span class="error"> Please enter a valid email address</span>');
        		}
        		if(inputVal[3] == "")
        		{
		            $('#telephoneLabel').after('<span class="error"> Please enter your ' + inputMessage[3] + '</span>');
        		} 
        		else if(!numberReg.test(telephone))
        		{
            		$('#telephoneLabel').after('<span class="error"> Numbers only</span>');
        		}
		        if(inputVal[4] == "")
		        {
            		$('#messageLabel').after('<span class="error"> Please enter your ' + inputMessage[4] + '</span>');
        		}       
			}   

		});
	</script>

	<body class="bg-primary">

	<div class="container">

	<form action="../php/register_student.php" method="POST">

			<div class="col-md-4 border bg-light" style="margin-top:12%; margin-left: 35%; padding: 14px;">
				<div><h2 align="center"> Event </h2></div>

			     <div class="form-group">
					<label>Reg. Fees:</label>
					<input type="text" name="regfees" class="form-control" id="rfees" autocomplete="off">
					<span id="numMsg"></span>
				</div>
				
				<div class="form-group">
					<label>Name of the Event:</label>
					<input type="text" name="eventname" class="form-control" id="ename" autocomplete="off">
					<span id="enameMsg"></span>
				</div>

				<div class="form-group">
					<label>Date:</label>
					<input type="text" name="date" class="form-control" id="date" autocomplete="off">
					<span id="dateMsg"></span>
				</div>

				<div class="form-group">
					<label>Address venue:</label>
					<input type="text" name="addrvenue" class="form-control" id="addrvenue" autocomplete="off">
					<span id="addrvenueMsg"></span>
				</div>

				<div class="form-group">
					<label>Organized by:</label>
					<input type="text" name="org" class="form-control" id="org" autocomplete="off">
					<span id="orgMsg"></span>
				</div>		

				<div class="form-group">
					<label>Contact to:</label>
					<input type="text" name="contact" class="form-control" id="contact" autocomplete="off">
					<span id="contactMsg"></span>
				</div>

				<div class="form-group">
					<label>Price Money and other details:</label>
					<textarea class="form-control" rows="4" name="details" id="mdetails" autocomplete="off"></textarea>
					<span id="mdetailsMsg"></span>
				</div>

				<div class="form-group">
					<label>Upload Image:</label>
					<div class="input-group">
                       	<input type="file" name="event_img" class="form-control" id="upload" autocomplete="off">
					<span id="uploadMsg"></span>
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