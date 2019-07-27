<table border=1	 align=right>
	<tr>
		<td colspan=2 align=center>
			<?php
				include("userhead.php");
			?>
		</td>
	</tr>
	<tr>
		<td align=left width=15% valign=top>
			<?php
				include("frontleft.php");
			?>			
		</td>	
		<td width=80%>	
		
		<style>
		
		.jumbotron {
background: #358CCE;
color: red;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
		</style>
		
		<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 class="h1">
                    Contact us <small>Feel free to contact us</small></h1>
            </div>
        </div>
    </div>
</div>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

input[type=submit] {
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

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<body>


<div class="container">
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">City</label>
    <select id="city" name="city">
      <option value="udaipur">Udaipur</option>
      <option value="jaipur">Jaipur</option>
      <option value="jodhpur">Jodhpur</option>
	  <option value="kota">Kota</option>
	  <option value="bhilwara">Bhilwara</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>

		
		
		
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