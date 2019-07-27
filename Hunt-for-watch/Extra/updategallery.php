<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$id=$_GET['id'];
	
	$sql="select * from gallery where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$desp=$row[1];
		$photo=$row[2];
	}
?>

<form action="updategallery1.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>Description</td>
			<td align=center>
				<input type="text" value="<?php echo $desp;?>" name='dn'>
			</td>
		</tr>
		
		<tr>
			<td align=center>image</td>
			<td align=center>
				<input type="text" value="<?php echo $photo;?>" name='f'>
			</td>
		</tr>
		
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>