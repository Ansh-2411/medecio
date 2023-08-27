<?php
$server = 'localhost';
$username= 'root';
$password= '';
$db = 'medecio';

$con = mysqli_connect($server,$username,$password,$db);
 if($con){
    // echo"Connection successful";
     ?>
 <!-- <script>
    alert("Connection successful")
 </script> -->
 <?php
 }
 else {
  // echo"Connection failed";
  ?>
  <script>
    alert("Connection failed");
    </script>
    <?php
    }
    ?>
 