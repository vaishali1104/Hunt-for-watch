<html>
	<head>
	</head>
	
	<body>
		<table border=1 width=90% align=center>
			<tr>
				<td align=center>ID</td>
				<td align=center>First Name</td>
				<td align=center>Last Name</td>
				<td align=center>Date of Birth</td>
				<td align=center>Email</td>
				<td align=center>Address</td>
				<td align=center>City</td>
				<td align=center>State</td>
				<td align=center>Pin Code</td>
				<td align=center>Phone Number</td>
				<td align=center>Mobile Number</td>
				<td align=center>Click to</td>
			</tr>
			
			<?php
				mysql_connect("localhost","root","");
				mysql_select_db("watches");
				
				$sql="select * from form";
				$rs=mysql_query($sql);
				
				while($row=mysql_fetch_array($rs))
				{
					$id=$row[0];
					$firstname=$row[1];
					$lastname=$row[2];
					$dob=$row[3];
					$email=$row[4];
					$address=$row[5];
					$city=$row[6];
					$state=$row[7];
					$pincode=$row[8];
					$phoneno=$row[9];
					$mobileno=$row[10];
					echo"<tr>";
						echo"<td align=center>$id</td>";
						echo"<td align=center>$firstname</td>";
						echo"<td align=center>$lastname</td>";
						echo"<td align=center>$dob</td>";
						echo"<td align=center>$email</td>";
						echo"<td align=center>$address</td>";
						echo"<td align=center>$city</td>";
						echo"<td align=center>$state</td>";
						echo"<td align=center>$pincode</td>";
						echo"<td align=center>$phoneno</td>";
						echo"<td align=center>$mobileno</td>";
						echo"<td align=center><a href='updateform.php?id=$id'>Update</a></td>";
					echo"</tr>";
				}
			?>
		</table>
	</body>
</html>	