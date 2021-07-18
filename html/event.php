<?php

?>
<html>
<head>

<title>Upload Events Details</title>
<!-- Bootstrap 4.2.1 -->
<!-- <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>      
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

</head>
<script>

  	$(document).ready(function() 
  	{
		$("#rfeesMsg").hide();
    	$("#enameMsg").hide();
    	$("#dateMsg").hide();
    	$("#addrMsg").hide();
    	$("#orgMsg").hide();
    	$("#contactMsg").hide();
    	$("#detailMsg").hide();
    	$("#imgMsg").hide();

    	var rfees_err = true;
    	var ename_err = true;
    	var date_err = true;
    	var addr_err = true;
    	var org_err = true;
    	var contact_err = true;
    	var detail_err = true;
    	var img_err = true;
    	

    	$("#rfees").focusout(function () 
    	{
      		rfees_check();
    	});

    	function rfees_check()
    	{
      		var rfees_val = $('#rfees').val();

      		if (rfees_val=='') 
      		{
        		$('#rfeesMsg').show();
        		$('#rfeesMsg').html("** This field is required **");
        		$('#rfeesMsg').focusout();
        		$('#rfeesMsg').css("color","blue");
        		$('#rfees').css("border","2px solid red");
        		rfees_err = false;
        		return false;
      		}

      		var pattern = /^[0-9]{4}$/;
      		if (!pattern.test(rfees_val) && rfees_val !== '') 
      		{
        		$('#rfeesMsg').show();
        		$('#rfeesMsg').html("** four numbers required Only**");
        		$('#rfeesMsg').focusout();
        		$('#rfeesMsg').css("color","black");
        		$('#rfees').css("border", "2px solid red" );
        		rfees_err= false;
        		return false;
      		}

      		else if(rfees_val)
      		{
        		$('#rfeesMsg').html("");
        		$('#rfees').css("border", "2px solid green");
        		$('#rfeesMsg').hide();
      		}
    	}

    	$("#ename").focusout(function () 
    	{
      		ename_check();
    	});

    	function ename_check()
    	{
      		var ename_val = $('#ename').val();

      		if (ename_val=='') 
      		{
        		$('#enameMsg').show();
        		$('#enameMsg').html("** This field is required **");
        		$('#enameMsg').focusout();
        		$('#enameMsg').css("color","blue");
       			$('#ename').css("border","2px solid red");
        		ename_err = false;
        		return false;
      		}

      		var pattern = /^[A-Za-z]*$/;
      		if (!pattern.test(ename_val) && ename_val !== '') 
      		{
        		$('#enameMsg').show();
        		$('#enameMsg').html("** Only character required **");
       	 		$('#enameMsg').focusout();
        		$('#enameMsg').css("color","black");
        		$('#ename').css("border", "2px solid red" );
        		ename_err= false;
        		return false;
      		}

      		else if(ename_val)
      		{
        		$('#enameMsg').html("");
        		$('#ename').css("border", "2px solid green");
        		$('#enameMsg').hide();
      		}
    	}

    	$("#date").focusout(function () 
    	{
      		date_check();
    	});

    	function date_check()
    	{
      		var date_val = $('#date').val();

      		if (date_val=='') 
      		{
        		$('#dateMsg').show();
        		$('#dateMsg').html("** This field is required **");
        		$('#dateMsg').focusout();
        		$('#dateMsg').css("color","blue");
        		$('#date').css("border","2px solid red");
        		date_err = false;
        		return false;
      		}

      		var pattern = /^ $/;
      		if (!pattern.test(date_val) && date_val !== '') 
      		{
        		$('#dateMsg').hide();
        		$('#dateMsg').html("** **");
        		$('#dateMsg').focusout();
        		$('#dateMsg').css("color","black");
        		$('#date').css("border", "2px solid red" );
        		date_err= false;
        		return false;
      		}

      		else if(date_val)
      		{
        		$('#dateMsg').html("");
        		$('#date').css("border", "2px solid green");
        		$('#dateMsg').hide();
      		}
    	}

    	$("#addr").focusout(function () 
    	{
      		addr_check();
    	});

    	function addr_check()
    	{
      		var addr_val = $('#addr').val();

      		if (addr_val=='') 
      		{
        		$('#addrMsg').show();
        		$('#addrMsg').html("** This field is required **");
        		$('#addrMsg').focusout();
        		$('#addrMsg').css("color","blue");
        		$('#addr').css("border","2px solid red");
        		addr_err = false;
        		return false;
      		}

      		var pattern = /^[#.0-9a-zA-Z\s,-]$/;
      		if (!pattern.test(addr_val) && addr_val !== '') 
      		{
        		$('#addrMsg').hide();
        		$('#addrMsg').html("**  **");
        		$('#addrMsg').focusout();
        		$('#addrMsg').css("color","black");
        		$('#addr').css("border", "2px solid red" );
        		addr_err= false;
        		return false;
      		}

      		else if(addr_val)
      		{
        		$('#addrMsg').html("");
        		$('#addr').css("border", "2px solid green");
        		$('#addrMsg').hide();
      		}
    	}

    	$("#org").focusout(function () 
    	{
      		org_check();
    	});

    	function org_check()
    	{
      		var org_val = $('#org').val();

      		if (org_val=='') 
      		{
        		$('#orgMsg').show();
        		$('#orgMsg').html("** This field is required **");
        		$('#orgMsg').focusout();
        		$('#orgMsg').css("color","blue");
        		$('#org').css("border","2px solid red");
        		org_err = false;
        		return false;
      		}

      		var pattern = /^[#.0-9a-zA-Z\s,-]$/;
      		if (!pattern.test(org_val) && org_val !== '') 
      		{
        		$('#orgMsg').hide();
        		$('#orgMsg').html("**  **");
        		$('#orgMsg').focusout();
        		$('#orgMsg').css("color","black");
        		$('#org').css("border", "2px solid red" );
        		org_err= false;
        		return false;
      		}

      		else if(org_val)
      		{
        		$('#orgMsg').html("");
        		$('#org').css("border", "2px solid green");
        		$('#orgMsg').hide();
      		}
    	}

    	$("#contact").focusout(function () 
    	{
      		contact_check();
    	});

    	function contact_check()
    	{
      		var contact_val = $('#contact').val();

      		if (contact_val=='') 
      		{
        		$('#contactMsg').show();
        		$('#contactMsg').html("** This field is required **");
        		$('#contactMsg').focusout();
        		$('#contactMsg').css("color","blue");
        		$('#contact').css("border","2px solid red");
        		contact_err = false;
        		return false;
      		}

      		var pattern = /^[0-9]{10}$/;
      		if (!pattern.test(contact_val) && contact_val !== '') 
      		{
        		$('#contactMsg').show();
        		$('#contactMsg').html("** Only numbers are required **");
        		$('#contactMsg').focusout();
        		$('#contactMsg').css("color","black");
        		$('#contact').css("border", "2px solid red" );
        		contact_err= false;
        		return false;
      		}

      		else if(contact_val)
      		{
        		$('#contactMsg').html("");
        		$('#contact').css("border", "2px solid green");
        		$('#contactMsg').hide();
      		}
    	}

    	$("#detail").focusout(function () 
    	{
      		detail_check();
    	});

    	function detail_check()
    	{
      		var detail_val = $('#detail').val();

      		if (detail_val=='') 
      		{
        		$('#detailMsg').show();
        		$('#detailMsg').html("** This field is required **");
        		$('#detailMsg').focusout();
        		$('#detailMsg').css("color","blue");
        		$('#detail').css("border","2px solid red");
        		detail_err = false;
        		return false;
      		}

      		var pattern = /^ $/;
      		if (!pattern.test(detail_val) && detail_val !== '') 
      		{
        		$('#detailMsg').hide();
        		$('#detailMsg').html("** **");
        		$('#detailMsg').focusout();
        		$('#detailMsg').css("color","black");
        		$('#detail').css("border", "2px solid red" );
        		detail_err= false;
        		return false;
      		}

      		else if(detail_val)
      		{
        		$('#detailMsg').html("");
        		$('#detail').css("border", "2px solid green");
        		$('#detailMsg').hide();
      		}
    	}

    	$("#img").focusout(function () 
    	{
      		img_check();
    	});

    	function img_check()
    	{
      		var img_val = $('#img').val();

      		if (img_val=='') 
      		{
        		$('#imgMsg').show();
        		$('#imgMsg').html("** This field is required **");
        		$('#imgMsg').focusout();
        		$('#imgMsg').css("color","blue");
        		$('#img').css("border","2px solid red");
        		img_err = false;
        		return false;
      		}

      		var pattern = /^ $/;
      		if (!pattern.test(img_val) && img_val !== '') 
      		{
        		$('#imgMsg').hide();
        		$('#imgMsg').html("** **");
        		$('#imgMsg').focusout();
        		$('#imgMsg').css("color","black");
        		$('#img').css("border", "2px solid red" );
        		img_err= false;
        		return false;
      		}

      		else if(img_val)
      		{
        		$('#imgMsg').html("");
        		$('#img').css("border", "2px solid green");
        		$('#imgMsg').hide();
      		}
    	}
    });

</script>
<body>

<div class="container py-5">
    <div class="row">
      	<div class="col-md-6 offset-md-3">
          	<div class="card"><!-- form card register -->

              	<div class="card-header card bg-success">
                  	<h3 class="mb-4" align="center">Event Details</h3>
              	</div>

              	<div class="card-body card bg-warning">
                  	<form class="form" action="../php/eventdb.php" method="POST" enctype="multipart/form-data">

                      	<div class="form-group">
                          	<label>Reg.fees</label>
                            <input type="text" class="form-control" name="fees" id="rfees">
                            <span id="rfeesMsg" style="font-weight: bold;"></span>
                        </div>

                        <div class="form-group">
                            <label>Name of the Event</label>
                            <input type="text" class="form-control" name="event" id="ename">
                            <span id="enameMsg" style="font-weight: bold;"></span>
                        </div>

                        <div class="form-group">
                            <label>Date </label>
                            <input type="date" name="date" class="form-control" id="date">
                            <span id="dateMsg" style="font-weight: bold;"></span>
                        </div>

                        <div class="form-group">
                            <label>Address venue</label>
                            <textarea class="form-control" rows="2" name="address" id="addr"></textarea>
                            <span id="addrMsg" style="font-weight: bold;"></span>  
                        </div>

                        <div class="form-group">
                        	<label>Organized by</label>
                            <input type="text" class="form-control" name="organizer" id="org">
                            <span id="orgMsg" style="font-weight: bold;"></span>
                        </div>

                        <div class="form-group">
                            <label>Contact to</label>
                            <input type="text" class="form-control" name="contact" id="contact">
                            <span id="contactMsg" style="font-weight: bold;"></span>
                        </div>

                        <div class="form-group">  
                        	<label>Price Money and other details</label>  
                            <textarea class="form-control" rows="4" name="details" id="detail"></textarea>
                            <span id="detailMsg" style="font-weight: bold;"></span>  
                        </div>  

                        <div class="form-group">  
                            <label>Upload Image</label>
                            <div class="input-group">
                            	<input type="file" name="event_img" class="form-control" id="img">
                            	<span id="imgMsg" style="font-weight: bold;"></span>
                            </div>
                        </div>
                              
                        <div class="form-group">
                            <center><input type="submit" class="btn btn-danger btn-lg" name="submit"></center>
                        </div>

                    </form>
                </div><!-- /form card body -->
            </div><!-- /form card register -->
        </div>
    </div><!--/row-->
</div><!--/container-->

</body>
</html