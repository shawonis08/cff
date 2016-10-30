<?php 
session_start();
		 $from=$_SESSION['fromdestination'];
		 $tod=$_SESSION['todestination'];
		 //$pname=$_SESSION['passportname'];
		 $f=$_SESSION['fname'];
		 $l=$_SESSION['lname'];
		 $e=$_SESSION['email'];
		 $c=$_SESSION['contactno'];
		 $pno=$_SESSION['passportno'];
		 $a=$_SESSION['address'];
		 //echo $from,$tod,$pname,$f,$l,$e,$c,$pno,$a;


	$to="support@clickforfly.com";
	$subject="clickforFly";
	$body="From: $from\nTo: $tod\nFirst Name: $f\nLast Name: $l\nEmail: $e\nContact No.: $c\nPassPort No. :$pno\nAddress: $a:\n";


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
			<?php echo "ClickForFly team will Contact with You soon"; ?>
		</div>
	</div>
</div>
<div class="footer">
	<div class="footer-text">All copyright resevered by ClickForFLY</div>
</div>
</body>
</html>