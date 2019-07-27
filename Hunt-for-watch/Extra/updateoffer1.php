<?php
	$id=$_POST['id'];
	$offer=$_POST['dn'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update offer set description='$offer' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>