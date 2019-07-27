<table border=1 width=80% align=center>
	<tr>
		<td>Id</td>
		<td>Description</td>
		<td>Image</td>
		<td>Click to</td>
	</tr>
	
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		
		$sql="select * from gallery";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$desp=$row[1];
			$photo=$row[2];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo"<td>$desp</td>";
				echo"<td>$photo</td>";
				echo"<td><a href='updategallery.php?id=$id'>Update</a></td>";
			echo"</tr>";
		}
	?>
</table>