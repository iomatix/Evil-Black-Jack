<?php
   header('Access-Control-Allow-Origin: *'); 
   ?>
   <?php   
  require_once("config.php");
  function SaveWish()
  {   
      $name = $_POST['PlayerName'];
	  $wish = $_POST['WishSpace'];
      $sql = "INSERT INTO Wish VALUES ('$PlayerName,$WishSpace')";
      $result = mysqli_query($db,$sql) or die(mysql_error());
	  echo $name.", your wish has been sent. Evil One will check it out."
	  
  }


      
?>