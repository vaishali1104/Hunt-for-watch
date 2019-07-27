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
			<form action="brandsave.php" method="post">
				<table border="2" align="center">
					<tr  align="center">
						<td colspan="2">
							BRAND
						</td>
					</tr>	
					<tr align="center">
						<td>
							Enter brand:
						</td>
						<td>
							<input type="text" name="bd" id="b">
						</td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<input type="submit" value="SAVE" onclick="return validate();" >
							<input type="reset" value="CANCEL" >
						</td>
					</tr>		
				</table>
			</form>
		
			<script>
				function validate()
				{
					var x=document.getElementById("b").value;
					
					if(x=="")
					{
						alert("Enter Brand");
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