<?php
include('../php/connection.php');
$query = "SELECT * FROM campus_db";
$res = mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Bootstrap core CSS -->
	  <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
	  <!-- Bootstrap core JavaScript -->
	  <script src="../js/jquery/jquery.min.js"></script>
	  <script src="../bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<form method="POST" action="">
				<table border="1" class="table">
					<tr><th colspan="11"><H2><center>POOL CAMPUS DETAILS</center></H2></th></tr>
					<tr  bgcolor="black">
						<th style="color:white; text-align: center;">ID</th>
						<th style="color:white; text-align: center;">MNC</th>
						<th style="color:white; text-align: center;">VENUE</th>
						<th style="color:white; text-align: center;">DATE</th>
						<th style="color:white; text-align: center;">ADDERESS</th>
						<th style="color:white; text-align: center;">CTC</th>
						<th style="color:white; text-align: center;">BRANCH</th>
						<th style="color:white; text-align: center;">PROFILE</th>
						<th style="color:white; text-align: center;">DETAILS</th>
						<th style="color:white; text-align: center;">IMAGES</th>
						<th style="color:white; text-align: center;">STATUS</th>
					</tr>
					<?php
					$c="yellow";
					$r="red";
					$n="1";
					while($row=mysqli_fetch_array($res)){
						echo "<tr bgcolor='$c'>";
						for ($i=0; $i < 9; $i++) {
							echo "<td>$row[$i]</td>";
						}
						
						echo "<td><a  href='../uploads/".$row[9]."'><img src='../uploads/".$row[9]."' height='100px' width='100px'></a></td>";
						echo "<td><input type='radio' name='n' value='verify'>verify<input type='radio' name='n' value='reject'>Reject<input type='submit' name='update'></td></tr>";
						
						if($c=="yellow")
						
							$c="pink";

						else if ($c=="pink") 
						 $c="yellow";
					}
					?>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<?php
if(isset($_POST['update'])){
	$n = $_POST['n'];
echo $n;
	// echo "hello";
}
?>