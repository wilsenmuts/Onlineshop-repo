<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landlorddb";

$fname = $_GET['fname'];
$sname = $_GET['sname'];
$uname = $_GET['uname'];
$email = $_GET['email'];
$pswd = $_GET['pswd'];
$fax = $_GET['fax'];
$web = $_GET['web'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO tenants (username, email, password, fname, surname, fax, web, day)
VALUES ('$uname', '$email', '$pswd','$fname', '$sname', 'fax', '$web','$day' )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<p>Click on this button to proceed</p>
<br>
<button><a href="index.html" style="text-decoration:none;font-size: 25px">Proceed</a></button>
</body>
</html>