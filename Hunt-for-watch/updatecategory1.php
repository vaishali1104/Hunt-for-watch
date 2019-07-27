<?php
	$id=$_POST['id'];
	$cate=$_POST['ct'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update category set category='$cate' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>