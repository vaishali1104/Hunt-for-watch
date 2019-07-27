<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>
	<tr>
		<td align=left width=15% >
			<?php
				include("adminleft.php");
			?>			
		</td>	
		<td width=80%>		
			<table border=1 width=30% align=center>
				<tr>
					<td align=center>ID</td>
					<td align=center>Category</td>
					<td align=center>Click to</td>
					<td align=center>Click to</td>
				</tr>
		
				<?php
					mysql_connect("localhost","root","");
					mysql_select_db("watches");
			
					$sql="select * from category";
					$rs=mysql_query($sql);
					$count=0;
				
					while($row=mysql_fetch_array($rs))
					{
						$id=$row[0];
						$cate=$row[1];
						$count++;
						echo"<tr>";
						echo"<td align=center>$count</td>";
						echo"<td align=center>$cate</td>";
						echo"<td align=center><a href='deletecategory.php?id=$id'>Delete</a></td>";
						echo"<td align=center><a href='updatecategory.php?id=$id'>Update</a></td>";
						echo"</tr>";
					}
				?>
			</table>
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
