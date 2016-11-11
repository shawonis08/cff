<?php 
session_start();
		 $from=$_SESSION['fromdestination'];
		 $tod=$_SESSION['todestination'];
		 $dleave=$_SESSION['leave'];
		 $dreturn=$_SESSION['return'];
		 //$pname=$_SESSION['passportname'];
		 $f=$_SESSION['fname'];
		 $l=$_SESSION['lname'];
		 $e=$_SESSION['email'];
		 $c=$_SESSION['contactno'];
		 $pno=$_SESSION['passportno'];
		 $a=$_SESSION['address'];


	$to="shawonis08@gmail.com";
	//"support@clickforfly.com";
	$subject="clickforFly";
	$body="From: $from\nTo: $tod\nLeave: $dleave\nReturn: $dreturn\nFirst Name: $f\nLast Name: $l\nEmail: $e\nContact No.: $c\nPassPort No. :$pno\nAddress: $a\n";


	mail($to, $subject, $body);
	session_destroy();

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
			<?php echo  "$f $l you are very valuable for us.<p>ClickForFLY team will contact you soon.<p>Thank you!"; ?>
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-text">All copyright resevered by ClickForFLY</div>
</div>
</body>
</html>