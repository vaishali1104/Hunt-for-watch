<html>
	<head>
	</head>
	
	<body>
		<table border=1 width=70% align=center>
			<tr align=center>
				<td align=center>Id</td>
				<td align=center>Description</td>
				<td align=center>File</td>
				<td align=center>Click to</td>
				<td align=center>Click to</td>
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
					$photo="upload/".$row[2];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$desp</td>";
						echo"<td align=center><img src='$photo'></td>";
						echo"<td align=center><a href='deletegallery.php?id=$id'>Delete</a></td>";
						echo"<td align=center><a href='updategallery.php?id=$id'>Update</a></td>";
					echo"</tr>";
				}
			?>
			