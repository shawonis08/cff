<?php 
session_start();
	$_SESSION['fromdestination'];
	$_SESSION['todestination'];
	$_SESSION['leave'];
	$_SESSION['return'];
	if ($_POST) {
		# code...
		//$passportname=$_POST['passportname'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$passportno=$_POST['passportno'];
		$address=$_POST['address'];
		$flag=0;
			/*if ($passportname=="") {
				# code...
				$flag=1;
			}*/
			if ($fname=="") {
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
			}

			/*if ($passportno=="") {
				# code...
				$flag=1;
			}if ($address=="") {
				# code...
				$flag=1;
			}*/
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

		<!--main css -->
		<link rel="stylesheet" type="text/css" href="css/mainform.css">
</head>
<body>
<form action="" method="post">
	<!-- Main form Start -->
	<div class="main">
		<div class="main-container">
			<div class="passport">
				<label class="passport-text">Name As Per Passport</label>
				<!-- <input class="passport-input" type="text" name="passportname" id="input0" placeholder="Enter name as passport" size="56"/> -->
			</div>
			<br>
			<div class="name">
				<div class="fname">
					<label class="fname-text">First Name</label>
					<input class="fname-input" type="text" name="fname" id="input1" placeholder="Enter First Name" size="30"/>
				</div>
				<div class="lname">
					<label class="lname-text">Last Name</label>
					<input class="lname-input" type="text" name="lname" id="input2" placeholder="Enter First Name" size="30"/>
				</div>
			</div>
			<div  class="email-contact">
				<div class="email">
					<label class="email-text">Email Address</label>
					<input class="email-input" type="text" name="email" id="input3" placeholder="Enter Email Address" size="30"/>
				</div>
				<div class="contact">
					<label class="contact-text">Contact Number</label>
					<input class="contact-input" type="text" name="contactno" id="input4" placeholder="Enter Contact No." size="30"/>
				</div>
			</div>
			<div class="passport-no">
				<label class="passport-no-text">Passport Number</label><br>
				<input class="passport-no-input" type="text" name="passportno" id="input5" placeholder="Enter Passport Number" size="30">
			</div>
			<!-- occupation -->
			<div class="occupation">
				<label class="occupation-text">Occupation</label><br>
				<input class="occupation-input" type="text" name="occupation" id="input6" placeholder="Enter your Profession" size="30">
			</div>
			

			
			<div class="address">
				<label class="address-text">Address</label>
				<input class="address-input" type="text" name="address" id="input6" placeholder="Enter Address" size="65"/>
			</div>
	<!-- Main form Finish -->


	<!-- <input type="text" name="lname" id="input2" placeholder="Enter last name" class="form-control"/> -->
			<div class="button">
				<input type="submit"  name="submit" value="SUBMIT" id="submit" class="btn">
			</div>
		</div>
	</div>
</form>
<div class="footer">
	<div class="footer-text">All copyright resevered by ClickForFly</div>
</div>
</body>
</html>