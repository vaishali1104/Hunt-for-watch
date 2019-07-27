<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$id=$_GET['id'];
	
	$sql="select * from specification where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
	{
		$id=$row[0];
		$brand=$row[1];
		$category=$row[2];
		$type=$row[3];
		$dialcolour=$row[4];
		$bandcolour=$row[5];
		$bandmaterial=$row[6];
		$caseshape=$row[7];
		$waterresist=$row[8];
		$warranty=$row[9];
		$image="images/".$row[10];
		$price=$row[11];
					
	}
?>

<form action="updatespecification1.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>Brand</td>
			<td align=center>
				<input type="text" value="<?php echo $brand;?>" name='bd'>
			</td>
		</tr>
		<tr>
			<td align=center>Category</td>
			<td align=center>
				<input type="text" value="<?php echo $category;?>" name='ct'>
			</td>
		</tr>
		<tr>
			<td align=center>Type</td>
			<td align=center>
				<input type="text" value="<?php echo $type;?>" name='te'>
			</td>
		</tr>
		<tr>
			<td align=center>Dial Colour</td>
			<td align=center>
				<input type="text" value="<?php echo $dialcolour;?>" name='dc'>
			</td>
		</tr>
		<tr>
			<td align=center>Band Colour</td>
			<td align=center>
				<input type="text" value="<?php echo $bandcolour;?>" name='bc'>
			</td>
		</tr>
		<tr>
			<td align=center>Band Material</td>
			<td align=center>
				<input type="text" value="<?php echo $bandmaterial;?>" name='bm'>
			</td>
		</tr>
		<tr>
			<td align=center>Case Shape</td>
			<td align=center>
				<input type="text" value="<?php echo $caseshape;?>" name='cs'>
			</td>
		</tr>
		<tr>
			<td align=center>Water Resistant</td>
			<td align=center>
				<input type="text" value="<?php echo $waterresist;?>" name='wr'>
			</td>
		</tr>
		<tr>
			<td align=center>Warranty</td>
			<td align=center>
				<input type="text" value="<?php echo $warranty;?>" name='wy'>
			</td>
		</tr>
			
		<tr>
			<td align=center>Image</td>
			<td align=center>
				<input type="text" value="<?php echo $image;?>" name='image'>
			</td>
		</tr>
		<tr>
			<td align=center>Price</td>
			<td align=center>
				<input type="text" value="<?php echo $price;?>" name='price'>
			</td>
		</tr>
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>