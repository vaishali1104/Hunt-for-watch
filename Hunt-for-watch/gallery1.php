<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>
	<tr>
		<td align=left width=15% valign=top >
			<?php
				include("adminleft.php");
			?>			
		</td>	
		<td width=80%>
<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$sql="select * from specification";
	$rs=mysql_query($sql);
		
echo"<table border=1 align='center'>";
		
		echo"<tr align=center>";		
		
		$count=0;
	while($row=mysql_fetch_array($rs))
	{
		$image=$row[10];
		
				
		echo "<td align=center>
		
		<img src='$image' height=120 width=160>";
		
		
		$count++;
		if($count%5==0)
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