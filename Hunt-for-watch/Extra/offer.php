<html>
	<head>
	</head>
	<body>
		<form action="offersave.php" method="post">
		<table border="2" align="center">
			<tr  align="center">
				<td colspan="2">
					OFFER
				</td>
			</tr>
				
			<tr align="center">
				<td>
					Description:
				</td>
				
				<td>
					<input type="text" name="dn" id="d">
				</td>
			</tr>
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SAVE" onclick="return validate();">
					<input type="reset" value="CANCEL" >
				</td>
			</tr>	
		</table>
			<script>
			function validate()
			{
				var x=document.getElementById("d").value;
				
				if(x=="")
				{
					alert("Enter description");
					return false;
				}
				return true;
			}
		</script>
	</body>
</html>