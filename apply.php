<?php
		session_start();
      $name = $_SESSION['User'];
      $property = $_GET['commodity'];
      $dataTime =date("Y-m-d H:i:s");
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

$sql = "INSERT INTO apply (username, property, day, status )
VALUES ('$name', '$property','$dataTime', 'pending')";

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