<?php
	$id=$_POST['id'];
	$brnd=$_POST['bd'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update brand set brand='$brnd' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>