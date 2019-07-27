<?php
		$brnd=$_POST['bd'];
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		$sql="INSERT INTO `brand` (`brand`)values('$brnd')";
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
?>