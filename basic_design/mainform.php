<?php 

	if ($_POST) {
		# code...
		$from=$_POST['fromdestination'];
		$to=$_POST['todestination'];
		//echo $from,$to;
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
<form action="test.php" method="post">
	<!-- Hidden Form Start for data passing-->
	<!-- From destination -->
	<input type="hidden" name="fromdestination" value=<?php echo $from=$_POST['fromdestination']; ?> >
	<!-- To destination -->
	<input type="hidden" name="todestination" value=<?php echo $to=$_POST['todestination']; ?> >
	<!-- Hidden Form Finish-->

	<!-- Main form Start -->

	<div class="main">
		<div class="main-container">
			<div class="passport">
				<label class="passport-text">Name As Passport</label>
				<input class="passport-input" type="text" name="passportname" id="input0" placeholder="Enter name as passport" size="56"/>
			</div>
			<br>
			<div class="name">
				<div class="fname">
					<label class="fname-text">First Name</label>
					<input class="fname-input" type="text" name="fname" id="input1" placeholder="Enter First name" size="30"/>
				</div>
				<div class="lname">
					<label class="lname-text">Last Name</label>
					<input class="lname-input" type="text" name="lname" id="input2" placeholder="last name" size="30"/>
				</div>
			</div>
			<div  class="email-contact">
				<div class="email">
					<label class="email-text">Email Address</label>
					<input class="email-input" type="text" name="email" id="input3" placeholder="Enter Email Address" size="30"/>
				</div>
				<div class="contact">
					<label class="contact-text">Contact No</label>
					<input class="contact-input" type="text" name="contactno" id="input4" placeholder="Enter Contact No." size="30"/>
				</div>
			</div>
			<div class="passport-no">
				<label class="passport-no-text">Passport No</label>
				<input class="passport-no-input" type="text" name="passportno" id="input5" placeholder="Enter Passport Number" size="61">
			</div>
			<div class="address">
				<label class="address-text">Address</label>
				<input class="address-input" type="text" name="address" id="input6" placeholder="Enter Address" size="65"/>
			</div>
	<!-- Main form Finish -->


	<!-- <input type="text" name="lname" id="input2" placeholder="Enter last name" class="form-control"/> -->
			<div class="button">
				<input type="submit"  name="submit" value="submit" id="submit" class="btn">
			</div>
		</div>
	</div>
</form>
<div class="footer"></div>
</body>
</html>