<?php 

		# code...
		$from=$_POST['fromdestination'];
		$to=$_POST['todestination'];
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$contactno=$_POST['contactno'];
		$passportno=$_POST['passportno'];
		$address=$_POST['address'];

		echo $from,$to,$fname,$lname,$email,$contactno,$passportno,$address;

	$to="shawonis08@gmail.com";
	$subject="clickforFly";
	$body="$from,$to,$fname,$lname,$email,$contactno,$passportno,$address;";

	mail($to, $subject, $body);
	echo "message sent"; 
 ?>