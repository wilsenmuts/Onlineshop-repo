


<html>
<head>
	<title>Land LordLord Login</title>
	<link type= "text/css" rel="stylesheet" href="form.css">
</head>
<body style="font-size:18px; background-color: darkgreen">
	<h1>Land Login</h1>
	<?php 

	if (@$_GET['Empty']==true)
	{
	echo("Enter Your details in full");
	}
	if (@$_GET['Invalid']==true)
	{
	echo("Invalid Login");
	}
	?>
	<form method="post" action="process2.php">
	<table>
		<tr>
			<th>Name</th><th><input id="cls" type="text" name="username" placeholder="your name"></th>
		</tr>
		<tr>
			<th>Password</th><th><input id="cls" type="password" name="password" placeholder="password"></th>
		</tr>
		<tr>
			<th>Click to login</th><th><button name="Login">Login</button></th>
		</tr>
		<tr>
			<th colspan="2"><p>Pleasea Login in with your details of a Landlord so as to be able to access the previledges of an official tenant on the site. <br> Thank you.</p></th>
		</tr>
		<tr>
			<th colspan="2"></th>
		</tr>
	</table>
</form>

</body>
</html>
