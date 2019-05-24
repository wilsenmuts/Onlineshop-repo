
   
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
            <th id="th2"><a href="">Billing Management</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="">Rental Agreements</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="">Maintainance</a></th>
          </tr>
       </table>
  </div>


  <div class="column">
  <p style="font-size: 25px;">List of Applicants</p>
  <form method="post" action="accept.php">
    <table>
      <tr>
        <td>
          Insert username
        </td>
        <td>
<input type="text" name="username" placeholder="Username">
</td>
</tr><tr>
  <td>Insert property</td>
  <td>
<input type="text" name="property" placeholder="property">
</td>
</tr> <tr>
  <td colspan="2">
<input type="submit" name="reject" value="Reject">
<input type="submit" name="accept" value="Accept">
</td>
</tr>
  </table>
</form>

 <?php 
$username = "root"; 
$password = ""; 
$database = "landlorddb"; 
$mysqli = new mysqli("localhost", $username, $password, $database); 
$query = "SELECT * FROM apply";
 
 
echo '<table cellspacing="10" cellpadding="2" width="600px" style="padding-left:20%;border: 1px solid black; margin-left:200px" > 
      <tr style="background-color:green;color:white"> 
          <td> <font face="Arial">User name</font> </td> 
          <td> <font face="Arial">Property name</font> </td> 
          <td> <font face="Arial">Date</font> </td>
           <td> <font face="Arial">status</font> </td> 
      </tr>';
 
if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["property"];
        $field3name = $row["day"];
        $field4name = $row["status"];
         
 
        echo '<tr> 
                  <td style="border-bottom: 1px solid green;">'.$field1name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field2name.'</td> 
                  <td style="border-bottom: 1px solid green;">'.$field3name.'</td>
                  <td style="border-bottom: 1px solid green;">'.$field4name.'</td> 
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