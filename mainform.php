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
</head>
<body>
<form action="test.php" method="post">
	<!-- Hidden Form Start-->
	<!-- From destination -->
	<input type="hidden" name="fromdestination" value=<?php echo $from=$_POST['fromdestination']; ?> >
	<!-- To destination -->
	<input type="hidden" name="todestination" value=<?php echo $to=$_POST['todestination']; ?> >
	<!-- Hidden Form Finish-->

	<!-- Main form Start -->
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