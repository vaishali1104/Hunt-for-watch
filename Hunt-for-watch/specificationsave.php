<?php
	$brand=$_POST['bd'];
	$category=$_POST['ct'];
	$type=$_POST['te'];
	$dialcolour=$_POST['dc'];
	$bandcolour=$_POST['bc'];
	$bandmaterial=$_POST['bm'];
	$caseshape=$_POST['cs'];
	$waterresist=$_POST['wr'];
	$warranty=$_POST['wy'];
	
	if(move_uploaded_file($_FILES['image']['tmp_name'],$_FILES['image']['name']))
		$image=$_FILES['image']['name'];
	
	$price=$_POST['price'];
	
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		$sql="INSERT INTO `specification`(`brand`,`category`,`type`,`dialcolour`,`bandcolour`,
				`bandmaterial`,`caseshape`,`waterresistant`,`warranty`,`image`,`price`)values
				('$brand','$category','$type','$dialcolour','$bandcolour','$bandmaterial',
				'$caseshape','$waterresist','$warranty','$image','$price')";
	
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
		
?>
