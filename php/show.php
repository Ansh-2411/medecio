<?php
session_start();
?>


<?php
 $email=  $_POST['email'];
       
include 'connection.php';
include 'links.php';
$selectque = "select * from registation where email={$email}";
$query = mysqli_query($con,$selectque);
$arr = mysqli_fetch_array($query);

while($res = mysqli_fetch_array($query)){
echo $res['id'];
<td><a href="update.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="Bottom" title="Update">
</a>
</td>

}


?>
