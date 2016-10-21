<?php 

	if ($_POST) {
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
	}
 ?>