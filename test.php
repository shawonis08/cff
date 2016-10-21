<?php 

		# code...
		$fromdestination=$_POST['fromdestination'];
		$todestination=$_POST['todestination'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$passportno=$_POST['passportno'];
		$address=$_POST['address'];

		echo $fromdestination,$todestination,$fname,$lname,$email,$contactno,$passportno,$address;

	$to="shawonis08@gmail.com";
	$subject="clickforFly";
	$body="From :$fromdestination,\n To :$todestination,$fname,$lname,$email,$contactno,$passportno,$address;";

	mail($to, $subject, $body);
	echo "message sent"; 
 ?>