<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$id=$_GET['id'];
	
	$sql="delete from gallery where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo "Record Deleted";
	else
		echo "Record not Deleted";
?>
