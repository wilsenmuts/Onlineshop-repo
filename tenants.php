
   
<html">
   
   <head>
      <title>Welcome </title>
      <link rel="stylesheet" type="text/css" href="form1.css">
   </head>
   
   <body>
      <h1 style="font-size: 25px;font-family: comic sans ms">Welcome
       <?php 
       session_start();
      $name = $_SESSION['User'];

      echo $name; 

      ?></h1> 
      <p><a href = "logout.php">Sign Out</a></p><br>
      <p>You can select any item of your choice</p><hr>

     <div class="row">
  <div class="column" style="background-color: grey; border-radius: 10px">
       <p style="font-size: 25px;font-family: comic sans ms">Explore</p>
       <table>
          <tr>
            <th id="th2"><a href="welcome2.php">Property Management</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="tenants.php">Tenants</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="proppayments.php">Property payments</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="bill.php">Billing Management</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="Agreement.php">Rental Agreements</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="">Maintainance</a></th>
          </tr>
       </table>
  </div>


  <div class="column">
  <p style="font-size: 25px;font-family: comic sans ms">List of Potential tenants</p>
  <button><a href="track_applicants.php"> View Applicants</a></button>
 <?php 
$username = "root"; 
$password = ""; 
$database = "landlorddb"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM tenants";
 
 
echo '<table cellspacing="10" cellpadding="2" style="padding-left:20%;border: 1px solid black" > 
      <tr style="background-color:green;color:white"> 
          <td> <font face="Arial">User name</font> </td> 
          <td> <font face="Arial">Email</font> </td> 
          <td> <font face="Arial">Password</font> </td> 
          <td> <font face="Arial">First Name</font> </td> 
          <td> <font face="Arial">Surname</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["email"];
        $field3name = $row["password"];
        $field4name = $row["fname"];
        $field5name = $row["surname"]; 
 
        echo '<tr> 
                  <td style="border-bottom: 1px solid green;">'.$field1name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field2name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field3name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field4name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field5name.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
            </tbody>
        </table>

 
</div>
</div>
   </body> 
</html>