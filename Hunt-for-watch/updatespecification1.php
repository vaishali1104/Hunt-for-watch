<?php
	$id=$_POST['id'];
	$brand=$_POST['bd'];
	$category=$_POST['ct'];
	$type=$_POST['te'];
	$dialcolour=$_POST['dc'];
	$bandcolour=$_POST['bc'];
	$bandmaterial=$_POST['bm'];
	$caseshape=$_POST['cs'];
	$waterresist=$_POST['wr'];
	$warranty=$_POST['wy'];
	$price=$_POST['price'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="update specification set brand='$brand',category='$category',type='$type',
			dialcolour='$dialcolour',bandcolour='$bandcolour',bandmaterial='$bandmaterial',
			caseshape='$caseshape',waterresistant='$waterresist',warranty='$warranty',
			price='$price' where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($rs)
		echo"record updated";
	else
		echo"record not updated";
?>