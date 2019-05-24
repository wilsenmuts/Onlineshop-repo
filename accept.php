<?php
		session_start();
      $name = $_SESSION['User'];
      $property= $_POST['property'];
      $username= $_POST['username'];

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


if(isset($_POST['reject']))
{
$sql = "DELETE FROM apply WHERE property = '$property' and username = '$username' ";

if ($conn->query($sql) === TRUE) {
    echo "New application has been logged successfully";
    ?>
    <button><a href="application.php"> Proceed</a></button>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}else
{
$sql = "UPDATE apply SET status='accepted' WHERE property='$property' and username ='$username' ";

if ($conn->query($sql) === TRUE) {
    echo "New application has been logged successfully";
    ?>
    <button><a href="application.php"> Proceed</a></button>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>
