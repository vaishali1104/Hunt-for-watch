<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$id=$_GET['id'];
	
	$sql="select * from offer where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$offer=$row[1];
	}
?>

<form action="updateoffer1.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>Offer</td>
			<td align=center>
				<input type="text" value="<?php echo $offer;?>" name='dn'>
			</td>
		</tr>
		
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>