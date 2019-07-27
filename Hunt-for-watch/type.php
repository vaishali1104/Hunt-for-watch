<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("adminhead.php");
			?>
		</td>
	</tr>
	<tr >
		<td align=left width=15% >
			<?php
				include("adminleft.php");
			?>			
		</td>
		<td width=80%>
			<form action="typesave.php" method="post">
				<table border="2" align="center">
					<tr  align="center">
						<td colspan="2">
							TYPE
						</td>
					</tr>
				
					<tr align="center">
						<td>
							Enter brand:
						</td>
						<td>
							<?php
								mysql_connect("localhost","root","");
								mysql_select_db("watches");
						
								$sql="select * from brand";
								$rs=mysql_query($sql);
								echo"<select name='bd'>";
						
								while($row=mysql_fetch_array($rs))
								{
									echo"<option>$row[1]</option>";
								}
								echo"</select>";
							?>
						</td>
					</tr>
					<tr align="center">
						<td>
							Enter type:
						</td>
						<td>
							<input type="text" name="te" id="a">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="SAVE" onclick="return validate()";>
							<input type="reset" value="CANCEL" >
						</td>	
					</tr>	
				</table>
			</form>
			<script>
				function validate()
				{
					var x=document.getElementById("a").value;
				
					if(x=="")
					{
						alert("Enter type");
						return false;
					}
					return true;
				}
			</script>	
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