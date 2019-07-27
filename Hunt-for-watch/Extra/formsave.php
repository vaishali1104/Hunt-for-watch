<?php
	$firstname=$_POST['fn'];
	$lastname=$_POST['ln'];
	$dob=$_POST['dob'];
	$email=$_POST['el'];
	$address=$_POST['as'];
	$city=$_POST['cy'];
	$state=$_POST['se'];
	$pincode=$_POST['pe'];
	$phoneno=$_POST['phn'];
	$mobileno=$_POST['mob'];
	
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		$sql="INSERT INTO `form`(`firstname`,`lastname`,`dateofbirth`,`email`,`address`,`city`,`state`,`pincode`,
			`phonenumber`,`mobilenumber`)values('$firstname','$lastname','$dob','$email','$address','$city','$state',
			'$pincode','$phoneno','$mobileno')";
	
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
		
?>
