<h2>
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

		//echo $fromdestination,$todestination,$fname,$lname,$email,$contactno,$passportno,$address;

	$to="shawonis08@gmail.com";
	$subject="clickforFly";
	$body="From: $fromdestination,\n To: $todestination,\n First Name: $fname,\n Last Name: $lname,\n Email: $email,\n Contact No.: $contactno,\n PassPort No. :$passportno,\n Address: $address;\n";

	mail($to, $subject, $body);

	 echo "Our Administrative team will contact you Soon";
	?>
</h2>