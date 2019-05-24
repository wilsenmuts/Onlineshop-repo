<?php
   require_once('account.php');
    //Get image data from database
    $result = $conn->query("SELECT * FROM images");
    
    if($result->num_rows > 0){
        $imgData = $result->fetch_assoc();
        
        //Render image
        header("Content-type: image/jpg"); 
        echo $imgData['image']; 
    }else{
        echo 'Image not found...';
    }
?>