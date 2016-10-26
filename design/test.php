
	<?php 

		# code...
		$fromdestination=$_POST['fromdestination'];
		$todestination=$_POST['todestination'];
		$pname=$_POST['passportname'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$passportno=$_POST['passportno'];
		$address=$_POST['address'];


	$to="shawonis08@gmail.com";
	$subject="clickforFly";
	$body="From: $fromdestination\nTo: $todestination\nName As Passport:$pname\nFirst Name: $fname\nLast Name: $lname\nEmail: $email\nContact No.: $contactno\nPassPort No. :$passportno\nAddress: $address:\n";

	mail($to, $subject, $body);

	// echo "Our Administrative team will contact you Soon";
	?>

<html>
<head>
	<title>Confirmation</title>
	<link rel="stylesheet" type="text/css" href="css/commingsoon.css">
</head>
<body>
<div class="body">
	<div class="body-container">
		<div class="body-text1">
			<?php echo "Our Administrative team will contact you Soon"; ?>
			<!-- Our Administrative team will contact you Soon -->
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-text">All copyright resevered by HexaParity</div>
</div>
</body>
</html>