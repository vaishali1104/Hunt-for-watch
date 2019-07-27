<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$desp=$_POST['dn'];
	
	if(move_uploaded_file($_FILES['f']['tmp_name'],$_FILES['f']['name']))
		$photo=$_FILES['f']['name'];
	
	$sql="insert into gallery(`description`,`photo`) values('$desp','$photo')";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"Inserted";
	else
		echo"Not inserted";
	
?>