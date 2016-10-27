<?php 

session_start();
	$_SESSION['fromdestination'];
	$_SESSION['todestination'];
	if ($_POST) {
		# code...
		$passportname=$_POST['passportname'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$passportno=$_POST['passportno'];
		$address=$_POST['address'];
		$flag=0;
			if ($passportname=="") {
				# code...
				$flag=1;
			}if ($fname=="") {
				# code...
				$flag=1;
			}if ($lname=="") {
				# code...
				$flag=1;
			}if ($email=="") {
				# code...
				$flag=1;
			}if ($contactno=="") {
				# code...
				$flag=1;
			}if ($passportno=="") {
				# code...
				$flag=1;
			}if ($address=="") {
				# code...
				$flag=1;
			}
			
			if ($flag!=1) {
				# code...
				$_SESSION["passportname"]=$_POST['passportname'];
				$_SESSION["fname"]=$_POST['fname'];
				$_SESSION["lname"]=$_POST['lname'];
				$_SESSION["email"]=$_POST['email'];
				$_SESSION["contactno"]=$_POST['contactno'];
				$_SESSION["passportno"]=$_POST['passportno'];
				$_SESSION["address"]=$_POST['address'];
				header('Location: test.php');
			}
	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Page</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
<form action="" method="post">
	<!-- Hidden Form Start for data passing-->
	<!-- From destination -->
	<!-- <input type="hidden" name="fromdestination" value=<?php echo $from=$_POST['fromdestination']; ?> > -->
	<!-- To destination -->
	<!-- <input type="hidden" name="todestination" value=<?php echo $to=$_POST['todestination']; ?> > -->
	<!-- Hidden Form Finish-->

	<!-- Main form Start -->
	<label class="fname">Name As Passport</label>
	<input type="text" name="passportname" id="input0" placeholder="Enter name as passport" class="form-control"/><br>
	<label class="fname">First Name</label>
	<input type="text" name="fname" id="input1" placeholder="Enter First name" class="form-control"/><br>
	<label class="lname">Last Name</label>
	<input type="text" name="lname" id="input2" placeholder="last name" class="form-control"/><br>
	<label class="email">Email Address</label>
	<input type="text" name="email" id="input3" placeholder="Enter Email Address" class="form-control"/><br>
	<label class="contactno">Contact No</label>
	<input type="text" name="contactno" id="input4" placeholder="Enter Contact No." class="form-control"/><br>
	<label class="passportno">Passport No</label>
	<input type="text" name="passportno" id="input5" placeholder="Enter Passport Number" class="form-control"/><br>
	<label class="address">Address</label>
	<input type="text" name="address" id="input6" placeholder="Enter Address" class="form-control"/><br>
	<!-- Main form Finish -->


	<!-- <input type="text" name="lname" id="input2" placeholder="Enter last name" class="form-control"/> -->
	<input type="submit"  name="submit" value="submit" id="submit" class="btn btn-primary">
</form>
</body>
</html>