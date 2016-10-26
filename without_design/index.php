<!DOCTYPE html>
<html>
<head>
	<title>Click For Fly</title>
	<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- jquery added for search -->
		<script src="jquery/jquery-1.11.2.min.js"></script>
		<script src="jquery/jquery.easy-autocomplete.min.js" type="text/javascript" ></script>
</head>
<body>
<!-- Form for from and to destination in post method redirect to mainform page -->
<form action="mainform.php"  method="post">
	<!-- Ticket Type -->
	<label class=tickettype>Ticket Type: </label>
	<!-- radio button -->
	<input type="radio" name="select" value="roundtrip">Round Trip
	<input type="radio" name="select" value="oneway">One Way
	<input type="radio" name="select" value="multicity">Multi City<br>
	
	<!-- From destination -->
	<label class="from">From</label>
	<input type="text" name="fromdestination" id="input1" placeholder="Enter City or airport" class="form-control"/>

	<!-- To destination -->
	<label class="to">To</label>
	<input type="text" name="todestination" id="input2" placeholder="Enter City or airport" class="form-control"/>
	<!-- jquery main script -->
	<script src="countries.js"></script>
	
	<!-- leaving info -->
	<label class="leaving">Leaving On</label>
	<input type="text" name="to" id="input3" placeholder="Enter City or airport" class="form-control"/>
	<!-- Return Info -->
	<label class="return">Return On</label>
	<input type="text" name="to" id="input4" placeholder="Enter City or airport" class="form-control"/>
	<!-- Members Info -->
	<label class="adults">Adult:</label>
	<select class="numberOfAdults">
	                    <option value="1"  selected=selected>1</option>
	                    <option value="2" >2 </option>
	                    <option value="3" >3</option>
	                    <option value="4" >4</option>
	                    <option value="5" >5</option>
	</select>
	<!-- Child Info -->
	<label class="child">Child:</label>
	<select class="numberOfAdults">
	                    <option value="1"  selected=selected>1</option>
	                    <option value="2" >2 </option>
	                    <option value="3" >3</option>
	                    <option value="4" >4</option>
	                    <option value="5" >5</option>
	</select>
	<!-- Infant -->
	<label class="infant">Infant:</label>
	<select class="numberOfAdults">
	                    <option value="1"  selected=selected>1</option>
	                    <option value="2" >2 </option>
	                    <option value="3" >3</option>
	                    <option value="4" >4</option>
	                    <option value="5" >5</option>
	</select>
	<!-- Class -->
	<label class="class">Class:</label>
	<select class="numberOfAdults">
	                    <option value="Economy"  selected=selected>Economy</option>
	                    <option value="business" >Business</option>
	                    <option value="first" >First</option>

	</select><br>

	<!-- Submit button redirect to mainform.php page -->
	<input type="submit"  name="submit" value="submit" id="submit" class="btn btn-primary">
</form>
</body>
</html>