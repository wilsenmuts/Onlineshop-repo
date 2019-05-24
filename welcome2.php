
   
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
  <p style="font-size: 25px;font-family: comic sans ms">My View Panel</p>

  <form method="post" action="upload.php" enctype="multipart/form-data">

   <table id="tabl">
      <tr>
         <th>Name of property:</th><th><input name="property" type="text"></th>
      </tr>
      <tr>
         <th>Group name:</th><th><input name="group" type="text"></th>
      </tr>
      <tr>
         <th>Notes:</th><th><textarea name="comment">Enter text here...</textarea></th>
      </tr>
      <tr>
         <th>Phote:</th><th><input name="image" type="file"></th>
      </tr>
       <tr>
         <th>Worth:</th><th><input name="worth" type="number"></th>
      </tr>
   </table>
   <br>
   <button name="submit">SUBMIT</button>
</form>
<P>To click to display list of all uploaded properties</p>
<form name="form1" action="" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><input type="submit" name="submit2" value="display"></td>
</tr>
</table>
</form>
<?php
$con = mysqli_connect('localhost','root','','landlorddb') or die('Unable To connect');


if(isset($_POST["submit2"]))
{
   $res=mysqli_query($con,"select * from images");
   echo "<table width='600px'>";
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
</div>
</div>
      	
      </table>
   </body> 
</html>