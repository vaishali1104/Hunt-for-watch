<?php
		$offer=$_POST['dn'];
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		$sql="INSERT INTO `offer` (`description`) values ('$offer')";
		$rs=mysql_query($sql);
		
		if($rs)
			echo"insert";
		else
			echo"not insert";
?>