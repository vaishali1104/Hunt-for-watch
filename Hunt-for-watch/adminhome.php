<html>
		
<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}


input[type=password], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}


input[type=submit]:hover {
    background-color:cyan;
}






input[type=reset]:hover {
    background-color:cyan;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

table {
    border-collapse: collapse;
    width: 50%;
}

th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
}

tr:hover {background-color:#f5f5f5;}


</style>
		
		
		
	</head>
	<body>
		<table border=1 align=right>
			<tr>
				<td colspan=2 align=center>
					<?php
						include("adminhead.php");
					?>
				</td>
			</tr>
			<tr >
				<td align=left width=15%>
					<?php
						include("adminleft.php");
					?>			
				</td>				
				<td width=80% align=center>
				<h1>Admin Panel</h1>
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
	</body>
</html>