<!DOCTYPE html>
<html>
<head>
<title>Image retrieve</title>
</head>

<body>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$con = mysqli_connect('127.0.0.1:3306','root','','landlorddb') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from images");

   echo "<table>";
   
   while($row=mysqli_fetch_array($res))
   {
      echo "<tr>";
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
   echo "<br>";
   ?><a href="delete.php?id=<?php echo $row["fname"]; ?>">Delete</a> <?php
   echo "</td>";
   echo "<td>";
   echo "NAME: ".$row["fname"];
   echo "<br>DETAILs: ".$row["comment"];
   echo "<br>Available on: ".$row["created"];
   echo "<br>Group: ".$row["groups"];
   echo "</td>";
   echo "</tr>";
   
   } 
   
   echo "</table>";
  }
?>
</body>
</html>