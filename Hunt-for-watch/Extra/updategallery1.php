<?php
	$id=$_POST['id'];
	$desp=$_POST['dn'];

	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update gallery set description='$desp' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>