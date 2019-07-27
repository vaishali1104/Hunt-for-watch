<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("adminhead.php");
			?>
		</td>
		</tr>
		<tr>
			<td align=left width=15% valign=top>
				<?php
					include("adminleft.php");
				?>			
			</td>
			<td width=80%>
				<form action="specificationsave.php" method="post" enctype="multipart/form-data">
					<table border=1 height=1000 align=center width=500 >
						<tr>
							<td align=center colspan=2>
								SPECIFICATION
							</td>
						</tr>
						<tr>
							<td align=center>
								Brand:
							</td>
							<td align=center>
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
						<tr>
							<td align=center>
								Category:
							</td>
							<td align=center>
								<?php
									mysql_connect("localhost","root","");
									mysql_select_db("watches");
						
									$sql="select * from category";
									$rs=mysql_query($sql);
									echo"<select name='ct'>";
						
									while($row=mysql_fetch_array($rs))
									{
										echo"<option>$row[1]</option>";
									}
									echo"</select>";
								?>
							</td>
						</tr>
						<tr>
							<td align=center>
								Type:
							</td>
							<td align=center>
								<?php
									mysql_connect("localhost","root","");
									mysql_select_db("watches");
						
									$sql="select * from type";
									$rs=mysql_query($sql);
									echo"<select name='te'>";
						
									while($row=mysql_fetch_array($rs))
									{
										echo"<option>$row[2]</option>";
									}
									echo"</select>";
								?>
							</td>
						</tr>
						<tr>
							<td align=center>
								Dial Colour:
							</td>
							<td align=center>
								<input type="text" placeholder="Dial Colour" name="dc" id="a">
							</td>
						</tr>
						<tr>
							<td align=center>
								Band Colour:
							</td>
							<td align=center>
								<input type="text" placeholder="Band Colour" name="bc" id="b">
							</td>
						</tr>
						<tr>
							<td align=center>
								Band Material:
							</td>
							<td align=center>
								<input type="text" placeholder="Band Material" name="bm" id="c">
							</td>
						</tr>
						<tr>
							<td align=center>
								Case Shape:
							</td>
							<td align=center>
								<input type="text" placeholder="Case Shape" name="cs" id="d">
							</td>
						</tr>
						<tr>
							<td align=center>
								Water Resistant:
							</td>
							<td align=center>
								<input type="text" placeholder="Water Resistant" name="wr" id="e">
							</td>
						</tr>
						<tr>
							<td align=center>
								Warranty:
							</td>
							<td align=center>
								<input type="text" placeholder="Warranty" name="wy" id="f">
							</td>
						</tr>
						<tr align="center">
							<td>
								Image:
							</td>
							<td>
								<input type="file" name="image" id="g" placeholder="Image">
							</td>
						</tr>
						<tr align="center">
							<td>
								Price:
							</td>
							<td>
								<input type="text" name="price" id="h" placeholder="Price">
							</td>
						</tr>
						<tr>
							<td colspan="2" align="center">
								<input type="submit" value="SUBMIT" onclick="return validate()"; >
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
				
					if(a=="")
					{
						alert("Enter Dial colour");
						return false;
					}
					if(b=="")
					{
						alert("Enter band colour");
						return false;
					}
					if(c=="")
					{
						alert("Enter band material");
						return false;
					}
					if(d=="")
					{
						alert("Enter case shape");
						return false;
					}
					if(e=="")
					{
						alert("Enter water resistancy");
						return false;
					}
					if(f=="")
					{
						alert("Enter warranty");
						return false;
					}
					if(g=="")
					{
						alert("Enter image");
						return false;
					}
					if(h=="")
					{
						alert("Enter price");
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