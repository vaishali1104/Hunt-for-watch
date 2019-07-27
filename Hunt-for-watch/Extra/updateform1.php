<?php
	$id=$_POST['id'];
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
	
	$sql="update form set firstname='$firstname',lastname='$lastname',dateofbirth='$dob',email='$email',address='$address',city='$city',state='$state',pincode='$pincode',phonenumber='$phoneno',mobilenumber='$mobileno' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>