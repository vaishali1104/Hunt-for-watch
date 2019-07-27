<style>


</style>



<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("userhead.php");
			?>
		</td>
	</tr>
	<tr>
		<td align=left width=15% valign=top >
			<?php
				include("frontleft.php");
			?>			
		</td>	
		<td width=80%>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$bb=$_GET['g'];
	$sql="select * from specification where category='$bb'";
	$rs=mysql_query($sql);
		
echo"<table border=1 align='center' style='border:3px solid black'>";
		
		echo"<tr align=center>";		
		
		$count=0;
	while($row=mysql_fetch_array($rs))
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
		$image=$row[10];
		$price=$row[11];
				
		echo "<td>
		
		<img src='$image' height=120 width=160  style='border:3px solid darkgray;border-radius:80%;'>";
		
		echo "<table border=0 width=100%>";
		echo"<tr align=left>
		<td> Brand</td>
		<td>$brand</td>
		</tr>
		
		<tr>
		<td> Category</td>
		<td>$category</td>
		</tr>
		
	
		<tr>
		<td>Type</td>
		<td>$type</td>
		</tr>
		
		<tr>
		<td>Dial Colour</td>
		<td>$dialcolour</td>
		</tr>
		
		<tr>
		<td>Band Colour</td>
		<td>$bandcolour</td>
		</tr>
		
		<tr>
		<td>Band Material</td>
		<td>$bandmaterial</td>
		</tr>
		
		<tr>
		<td>Case Shape</td>
		<td>$caseshape</td>
		</tr>
		
		<tr>
		<td>Water Resistancy</td>
		<td>$waterresist</td>
		</tr>
		
		<tr>
		<td>Warranty</td>
		<td>$warranty</td>
		</tr>
		
		<tr>
		<td>Price</td>
		<td>$price</td>
		</tr>
			
		<tr>
		<td colspan=2><input type='submit' value='Add to Cart' ></td>
		</tr>";
		echo"</table></td>";
		
		/*echo"<b>
		<br>Brand:$brand<br>Category:$category<br>Type:$type<br>Dial Colour:$dialcolour<br>Band Colour:$bandcolour
		<br>Band Material:$bandmaterial<br>Case Shape:$caseshape<br>Water Resistancy:$waterresist
		<br>Warranty:$warranty<br>Price:$price</td>";*/
		$count++;
		if($count%3==0)
			echo "</tr><tr>";	
		
		
		
	}
	
	echo"</table>";
?>
</td>
	</tr>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("adminfoot.php");
			?>
		</td>
	</tr>
</table>