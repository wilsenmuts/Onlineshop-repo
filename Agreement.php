
   
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
  <p style="font-size: 25px;font-family: comic sans ms">My View Panel</p>
   <table id="tabl">
      <tr>
         <th><img src="profile.jpg" alt="my profile picture" width="200px"></th><th id="cls"> </th>
      </tr>
      <tr>
         <th>Address</th><th>Fax</th>
      </tr>
      <tr>
         <th>Company website</th><th>Currency</th>
      </tr>
      <tr>
         <th>Date</th><th>Time</th>
      </tr>

   </table>

</div>
</div>
        
      </table>
   </body> 
</html>