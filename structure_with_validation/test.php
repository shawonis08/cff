<h2>
	<?php 

		# code...
	session_start();
		 $from=$_SESSION['fromdestination'];
		 $tod=$_SESSION['todestination'];
		 $pname=$_SESSION['passportname'];
		 $f=$_SESSION['fname'];
		 $l=$_SESSION['lname'];
		 $e=$_SESSION['email'];
		 $c=$_SESSION['contactno'];
		 $pno=$_SESSION['passportno'];
		 $a=$_SESSION['address'];
		 //echo $from,$tod,$pname,$f,$l,$e,$c,$pno,$a;


	$to="shawonis08@gmail.com";
	$subject="clickforFly";
	$body="From: $from\nTo: $tod\nName As Passport:$pname\nFirst Name: $f\nLast Name: $l\nEmail: $e\nContact No.: $c\nPassPort No. :$pno\nAddress: $a:\n";

	mail($to, $subject, $body);

	 echo "Our Administrative team will contact you Soon";
session_destroy();

	?>
</h2>