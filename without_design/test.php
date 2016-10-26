<h2>
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

	 echo "Our Administrative team will contact you Soon";
	?>
</h2>