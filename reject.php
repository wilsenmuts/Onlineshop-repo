<?php
		session_start();
      $name = $_SESSION['User'];
      $status = $_GET['username'];
      $property = $_GET['property'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "landlorddb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE apply SET username='Status' WHERE property='kimura'";

if ($conn->query($sql) === TRUE) {
    echo "New application has been logged successfully";
    ?>
    <button><a href="application.php"> Proceed</a></button>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>