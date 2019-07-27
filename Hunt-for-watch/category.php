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
			<form action="categorysave.php" method="post">
				<table border="2" align="center" height=50% width=50%>
					<tr  align="center">
						<td colspan="2">
							CATEGORY
						</td>
					</tr>
				
					<tr align="center">
						<td>
							Enter category:
						</td>
						<td>
							<input type="text" name="ct" id="a">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="SAVE" onclick="return validate();">
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
						alert("Enter category");
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