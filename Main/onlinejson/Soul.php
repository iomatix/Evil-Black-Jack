<?php
   header('Access-Control-Allow-Origin: *');  
   ?>
   <?php
  require_once("config.php");
function AddSoul(){ 
$sql = "UPDATE SOULS set SOULS = SOULS + 1";
$result = mysqli_query($db, $sql) or die(mysql_error());
}	



      
?>