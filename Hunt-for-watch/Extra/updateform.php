<?php
	mysql_connect("localhost","root","");
	mysql_select_db("watches");
	
	$id=$_GET['id'];
	
	$sql="select * from form where id='$id'";
	
	$rs=mysql_query($sql);
	
	if($row=mysql_fetch_array($rs))
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
	}
?>

<form action="updateform1.php" method="post">
	<table width=70% border=1 align=center>
		<tr>
			<td align=center>Id</td>
			<td align=center>
				<input type="text" value="<?php echo $id;?>" name='id'>
			</td>
		</tr>
		
		<tr>
			<td align=center>First Name</td>
			<td align=center>
				<input type="text" value="<?php echo $firstname;?>" name='fn'>
			</td>
		</tr>
		<tr>
			<td align=center>Last Name</td>
			<td align=center>
				<input type="text" value="<?php echo $lastname;?>" name='ln'>
			</td>
		</tr>
		<tr>
			<td align=center>Date of Birth</td>
			<td align=center>
				<input type="text" value="<?php echo $dob;?>" name='dob'>
			</td>
		</tr>
		<tr>
			<td align=center>Email</td>
			<td align=center>
				<input type="text" value="<?php echo $email;?>" name='el'>
			</td>
		</tr>
		<tr>
			<td align=center>Address</td>
			<td align=center>
				<input type="text" value="<?php echo $address;?>" name='as'>
			</td>
		</tr>
		<tr>
			<td align=center>City</td>
			<td align=center>
				<input type="text" value="<?php echo $city;?>" name='cy'>
			</td>
		</tr>
		<tr>
			<td align=center>State</td>
			<td align=center>
				<input type="text" value="<?php echo $state;?>" name='se'>
			</td>
		</tr>
		<tr>
			<td align=center>Pin Code</td>
			<td align=center>
				<input type="text" value="<?php echo $pincode;?>" name='pe'>
			</td>
		</tr>
		<tr>
			<td align=center>Phone Number</td>
			<td align=center>
				<input type="text" value="<?php echo $phoneno;?>" name='phn'>
			</td>
		</tr>
		<tr>
			<td align=center>Mobile Number</td>
			<td align=center>
				<input type="text" value="<?php echo $mobileno;?>" name='mob'>
			</td>
		</tr>
		<tr>
			<td align=center colspan=2>
				<input type="submit" value="update">
			</td>
		</tr>
	</table>
</form>