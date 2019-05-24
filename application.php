
   
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
            <th id="th2"><a href="welcome.php">My Profile</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="payments.php">Online Payments</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="application.php">Online Application</a></th>
          </tr>
          <tr>
            <th id="th2"><a href="track.php">Track Applications</a></th>
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
  <p style="font-size: 25px;font-family: comic sans ms">You can apply now</p>


   <?php
   $con = mysqli_connect('localhost','root','','landlorddb') or die('Unable To connect');

    $res=mysqli_query($con,"select * from images");

   echo "<table width='600px'>";
   
   while($row=mysqli_fetch_array($res))
   {
      echo "<tr>";
   echo "<td>"; 
   echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200"/>';
   echo "<br>";
   ?><a href="apply.php? commodity=<?php echo $row["fname"]; ?>? price=<?php echo $row["fname"]; ?>" style="text-decoration: none;">Apply For Property</a><br><br> <?php
   echo "</td>";
   echo "<td>";
   ?>
   <?php
   echo "<p>NAME: ".$row["fname"];
   echo "<br>DETAILs: ".$row["comment"];
   echo "<br>Available on: ".$row["created"];
   echo "<br>Group: ".$row["groups"];
    echo "<br>worth: ".$row["worth"];
   echo "</td>";
   echo "</tr>";
   
   } 
   
   echo "</table>";
   ?>

</div>
</div>
        
      </table>
   </body> 
</html>