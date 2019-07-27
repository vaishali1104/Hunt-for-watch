<html>
	<head>
		<title>
			REGISTRATION FORM
		</title>
	</head>
	<body>
	<form action="formsave.php" method="post">
		<table border="2" align="center" height="700" width="500" cellspacing=5 cellpadding=2>
			<tr>
				<td colspan="2" align=center>
					REGISTRATION FORM
				</td>
			</tr>
			
			<tr>
				<td align=center>
					FIRST NAME:
				</td>
				<td align=center>
					<input type="text" placeholder="FIRST NAME" name="fn" id="a">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					LAST NAME:
				</td>
				<td align=center>
					<input type="text" placeholder="LAST NAME" name="ln" id="b">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					DATE OF BIRTH:
				</td>
				<td align=center>
					<input type="date" placeholder="DATE OF BIRTH" name="dob" id="c">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					EMAIL:
				</td>
				<td align=center >
					<input type="email" placeholder="EMAIL" name="el" id="d">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					ADDRESS:
				</td>
				<td align=center>
					<input type="text" placeholder="ADDRESS" name="as" id="e">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					CITY:
				</td>
				<td align=center>
					<input type="text" placeholder="CITY" name="cy" id="f">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					STATE:
				</td>
				<td align=center>
					<input type="text" placeholder="STATE" name="se" id="g">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					 PINCODE:
				</td>
				<td align=center>
					<input type="text" placeholder="PINCODE" name="pe" id="h">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					PHONE NUMBER:
				</td>
				<td align=center>
					<input type="text" placeholder="PHONE NUMBER" name="phn" id="i">
				</td>
			</tr>
			
			<tr>
				<td align=center>
					MOBILE NUMBER:
				</td>
				<td align=center>
					<input type="text" placeholder="MOBILE NUMBER" name="mob" id="j">
				</td>
			</tr>
			
			<tr>
				<td colspan="2" align="center">
					<input type="submit" value="SUBMIT" onclick="return validate()";>
					<input type="reset" value="CANCEL" >
				</td>
			</tr>
		</table>
		</form>
			<script>
				function validate()
			{
				var a=document.getElementById("a").value;
				var b=document.getElementById("b").value;
				var c=document.getElementById("c").value;
				var d=document.getElementById("d").value;
				var e=document.getElementById("e").value;
				var f=document.getElementById("f").value;
				var g=document.getElementById("g").value;
				var h=document.getElementById("h").value;
				var i=document.getElementById("i").value;
				var j=document.getElementById("j").value;
				
				if(a=="")
				{
					alert("Enter first name");
					return false;
				}
				if(b=="")
				{
					alert("Enter last name");
					return false;
				}
				if(c=="")
				{
					alert("Enter date of birth");
					return false;
				}
				if(d=="")
				{
					alert("Enter email");
					return false;
				}
				if(e=="")
				{
					alert("Enter address");
					return false;
				}
				if(f=="")
				{
					alert("Enter city");
					return false;
				}
				if(g=="")
				{
					alert("Enter state");
					return false;
				}
				if(h=="")
				{
					alert("Enter pin code");
					return false;
				}
				if(i=="")
				{
					alert("Enter phone number");
					return false;
				}
				if(j=="")
				{
					alert("Enter mobile number");
					return false;
				}
				return true;
			}
			</script>
	</body>
</html>