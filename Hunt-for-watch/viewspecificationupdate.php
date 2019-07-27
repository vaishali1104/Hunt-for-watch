<html>
	<head>
	</head>
	
	<body>
		<table border=1 width=70% align=center>
			<tr>
				<td align=center>ID</td>
				<td align=center>Brand</td>
				<td align=center>Category</td>
				<td align=center>Type</td>
				<td align=center>Dial Colour</td>
				<td align=center>Band Colour</td>
				<td align=center>Band Material</td>
				<td align=center>Case Shape</td>
				<td align=center>Water Resistant</td>
				<td align=center>Warranty</td>
				<td align=center>Image</td>
				<td align=center>Price</td>
				<td align=center>Click to</td>
			</tr>
			
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("watches");
				
				$sql="select * from specification";
				$rs=mysql_query($sql);
				
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
					$image="images/".$row[10];
					$price=$row[11];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$brand</td>";
						echo"<td align=center>$category</td>";
						echo"<td align=center>$type</td>";
						echo"<td align=center>$dialcolour</td>";
						echo"<td align=center>$bandcolour</td>";
						echo"<td align=center>$bandmaterial</td>";
						echo"<td align=center>$caseshape</td>";
						echo"<td align=center>$waterresist</td>";
						echo"<td align=center>$warranty</td>";
						echo"<td align=center><img src='$image' height=30% width=20%></td>";
						echo"<td align=center>$price</td>";
						echo"<td align=center><a href='updatespecification.php?id=$id'>Update</a></td>";
					echo"</tr>";
				}
			?>
		</table>
	</body>
</html>	