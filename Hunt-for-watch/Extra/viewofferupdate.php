<table border=1 width=80% align=center>
	<tr>
		<td>Id</td>
		<td>Offer</td>
		<td>Click to</td>
	</tr>
	
	<?php
		mysql_connect("localhost","root","");
		mysql_select_db("watches");
		
		$sql="select * from offer";
		$rs=mysql_query($sql);
		
		while($row=mysql_fetch_array($rs))
		{
			$id=$row[0];
			$offer=$row[1];
			
			echo"<tr>";
				echo"<td>$id</td>";
				echo"<td>$offer</td>";
				echo"<td><a href='updateoffer.php?id=$id'>Update</a></td>";
			echo"</tr>";
		}
	?>
</table>