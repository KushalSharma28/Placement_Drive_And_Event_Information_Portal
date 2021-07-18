<?php

?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Campus Detils</title>

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
      $("#mncMsg").hide();
      $("#venueMsg").hide();
      $("#dateMsg").hide();
      $("#addrMsg").hide();
      $("#ctcMsg").hide();
      $("#streamMsg").hide();
      $("#jpMsg").hide();
      $("#detailMsg").hide();
      $("#imgMsg").hide();

      var mnc_err = true;
      var venue_err = true;
      var date_err = true;
      var addr_err = true;
      var ctc_err = true;
      var stream_err = true;
      var jp_err = true;
      var detail_err = true;
      var img_err = true;

      $("#mnc").focusout(function () 
      {
          mnc_check();
      });

      function mnc_check()
      {
          var mnc_val = $('#mnc').val();

          if (mnc_val=='') 
          {
            $('#mncMsg').show();
            $('#mncMsg').html("* This field is required *");
            $('#mncMsg').focusout();
            $('#mncMsg').css("color","blue");
            $('#mnc').css("border","2px solid red");
            mnc_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]$/;
          if (!pattern.test(mnc_val) && mnc_val !== '') 
          {
            $('#mncMsg').hide();
            $('#mncMsg').html("** **");
            $('#mncMsg').focusout();
            $('#mncMsg').css("color","black");
            $('#mnc').css("border", "2px solid red" );
            mnc_err= false;
            return false;
          }

          else if(mnc_val)
          {
            $('#mncMsg').html("");
            $('#mnc').css("border", "2px solid green");
            $('#mncMsg').hide();
          }
      }

      $("#venue").focusout(function () 
      {
          venue_check();
      });

      function venue_check()
      {
          var venue_val = $('#venue').val();

          if (venue_val=='') 
          {
            $('#venueMsg').show();
            $('#venueMsg').html("** This field is required **");
            $('#venueMsg').focusout();
            $('#venueMsg').css("color","blue");
            $('#venue').css("border","2px solid red");
            venue_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]*$/;
          if (!pattern.test(venue_val) && venue_val !== '') 
          {
            $('#venueMsg').hide();
            $('#venueMsg').html("** **");
            $('#venueMsg').focusout();
            $('#venueMsg').css("color","black");
            $('#venue').css("border", "2px solid red" );
            venue_err= false;
            return false;
          }

          else if(venue_val)
          {
            $('#venueMsg').html("");
            $('#venue').css("border", "2px solid green");
            $('#venueMsg').hide();
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
            $('#dateMsg').html("* This field is required *");
            $('#dateMsg').focusout();
            $('#dateMsg').css("color","blue");
            $('#date').css("border","2px solid red");
            date_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]$/;
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

      $("#ctc").focusout(function () 
      {
          ctc_check();
      });

      function ctc_check()
      {
          var ctc_val = $('#ctc').val();

          if (ctc_val=='') 
          {
            $('#ctcMsg').show();
            $('#ctcMsg').html("** This field is required **");
            $('#ctcMsg').focusout();
            $('#ctcMsg').css("color","blue");
            $('#ctc').css("border","2px solid red");
            ctc_err = false;
            return false;
          }

          var pattern = /^[#.0-9a-zA-Z\s,-]$/;
          if (!pattern.test(ctc_val) && ctc_val !== '') 
          {
            $('#ctcMsg').hide();
            $('#ctcMsg').html("**  **");
            $('#ctcMsg').focusout();
            $('#ctcMsg').css("color","black");
            $('#ctc').css("border", "2px solid red" );
            ctc_err= false;
            return false;
          }

          else if(ctc_val)
          {
            $('#ctcMsg').html("");
            $('#ctc').css("border", "2px solid green");
            $('#ctcMsg').hide();
          }
      }

      $("#stream").focusout(function () 
      {
          stream_check();
      });

      function stream_check()
      {
          var stream_val = $('#stream').val();

          if (stream_val=='') 
          {
            $('#streamMsg').show();
            $('#streamMsg').html("** This field is required **");
            $('#streamMsg').focusout();
            $('#streamMsg').css("color","blue");
            $('#stream').css("border","2px solid red");
            stream_err = false;
            return false;
          }

          var pattern = /^ $/;
          if (!pattern.test(stream_val) && stream_val !== '') 
          {
            $('#streamMsg').hide();
            $('#streamMsg').html("**  **");
            $('#streamMsg').focusout();
            $('#streamMsg').css("color","black");
            $('#stream').css("border", "2px solid red" );
            stream_err= false;
            return false;
          }

          else if(stream_val)
          {
            $('#streamMsg').html("");
            $('#stream').css("border", "2px solid green");
            $('#streamMsg').hide();
          }
      }

      $("#jp").focusout(function () 
      {
          jp_check();
      });

      function jp_check()
      {
          var jp_val = $('#jp').val();

          if (jp_val=='') 
          {
            $('#jpMsg').show();
            $('#jpMsg').html("* This field is required *");
            $('#jpMsg').focusout();
            $('#jpMsg').css("color","blue");
            $('#jp').css("border","2px solid red");
            jp_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]$/;
          if (!pattern.test(jp_val) && jp_val !== '') 
          {
            $('#jpMsg').hide();
            $('#jpMsg').html("** **");
            $('#jpMsg').focusout();
            $('#jpMsg').css("color","black");
            $('#jp').css("border", "2px solid red" );
            jp_err= false;
            return false;
          }

          else if(jp_val)
          {
            $('#jpMsg').html("");
            $('#jp').css("border", "2px solid green");
            $('#jpMsg').hide();
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
            $('#detailMsg').html("* This field is required *");
            $('#detailMsg').focusout();
            $('#detailMsg').css("color","blue");
            $('#detail').css("border","2px solid red");
            detail_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]$/;
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
            $('#imgMsg').html("* This field is required *");
            $('#imgMsg').focusout();
            $('#imgMsg').css("color","blue");
            $('#img').css("border","2px solid red");
            img_err = false;
            return false;
          }

          var pattern = /^[A-Za-z]$/;
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

          <div class="card">  <!-- form card register -->
            <div class="card-header card bg-success">
              <h3 class="mb-4" align="center">Pool Campus Details</h3>
            </div>

            <div class="card-body card bg-warning"><!-- form card body -->
              <form class="form" method="POST" action="../php/campusdb.php" enctype="multipart/form-data">
            
                <div class="form-group">
                  <label>Company Name</label>
                  <input type="text" class="form-control"  placeholder="MNC" name="mnc" id="mnc">
                  <span id="mncMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">
                  <label>Venue</label>
                  <input type="text" class="form-control" name="venue" placeholder="Venue" id="venue">
                  <span id="venueMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">
                  <label>Date</label>
                  <input type="date" name="date" class="form-control" id="date">
                  <span id="dateMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="2" name="address" placeholder="Address" id="addr"></textarea>
                  <span id="addrMsg" style="font-weight: bold;"></span>  
                </div>

                <div class="form-group">
                  <label>CTC</label>
                  <input type="text" class="form-control" name="ctc" placeholder="CTC" id="ctc">
                  <span id="ctcMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">
                  <label>Stream</label>
                    <!-- <input type="text" class="form-control" name="branch"> -->
                        <select class="form-control" name="branch" id="stream">
                          <option> Select </option>
                          <option> ALL </option>
                          <option> CSE </option>
                          <option> ME </option>
                          <option> EC </option>
                          <option> EX </option>
                          <option> CIVIL </option>
                        </select>
                        <span id="streamMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">
                  <label>Job Profile</label>
                  <input type="text" class="form-control" name="profile" placeholder="Job Profile" id="jp">
                  <span id="jpMsg" style="font-weight: bold;"></span>
                </div>

                <div class="form-group">  
                  <label>Details</label>  
                  <textarea class="form-control" rows="4" name="detail" placeholder="Details" id="detail"></textarea>
                  <span id="detailMsg" style="font-weight: bold;"></span>  
                </div>  

                <div class="form-group">  
                  <label>Upload Image</label>
                  <div class="input-group">
                    <input type="file" name="campus_img" class="form-control" id="img">
                    <span id="imgMsg" style="font-weight: bold;"></span>
                  </div>
                </div> 

                <div class="form-group">
                  <center><input type="submit"  class="btn btn-danger btn-lg"  name="submit"></center>
                </div>

              </form>
            </div><!-- form card body -->
          </div><!-- /form card register -->
        </div>
      </div>
    </div>

</body>
</html>