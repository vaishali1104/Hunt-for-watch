<?php
	$id=$_POST['id'];
	$brnd=$_POST['bd'];
	$typ=$_POST['te'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update type set brand='$brnd',type='$typ' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>