


<html>
<head>
	<title>Tenant Login</title>
	<link type= "text/css" rel="stylesheet" href="form.css">
</head>
<body style="font-size:18px; background-color: darkgreen">
	<h1>Tenant Login</h1>
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
	<form method="post" action="process.php">
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
			<th colspan="2"><p>Pleasea Login in with your details of a tenant so as to be able to access the previledges of an official tenant on the site. <br> Thank you.</p></th>
		</tr>
		<tr>
			<th colspan="2"></th>
		</tr>
	</table>
</form>
<p style="text-align: center; color: white; font-size:20px">if you are not a registered Tenant please register so as to join and get the previledges og being part of this community<br>
<button><a style="text-decoration: none;" href="register.html">REGISTER</a></button><button><a style="text-decoration: none;" href="landlordindex.php">LandLord Login</a></button></p>
</body>
</html>
