<!DOCTYPE html>
<html lang="en">
<head>
  <title>Crud operation</title>
<?php include 'links.php'?>  
<style>
    .abc{
        margin-top: 100px;
        
       height:400px;
        width:200px;
        background-color: yellow;

    }
    </style>
</head>
<body>
<center>
    <div>
        <div><button><a href="display.php" style="padding-top:20px;">Alredy register candidates</a></button></div>
<div class="container">

    <form method="POST" class="abc">
    <?php

include 'connection.php';
$ids = $_GET['id'];
$showqu = "select * from registation where id={$ids}";
$showdat = mysqli_query($con,$showqu);
$arr = mysqli_fetch_array($showdat);

?>
        <lable>Name</lable>
        <input type="text" name="name" placeholder="Enter your name*" value="<?php echo $arr['name']?>">
        <lable> Degree</lable>
        <input type = "text" name="degree" placeholder="Enter your Degree" value="<?php echo $arr['degree']?>">
        <lable>mobile </lable>
        <input type = "number" name="mobile" placeholder="Enter Your mobile Num." value="<?php echo $arr['mobile']?>">
        <lable> email</lable>
        <input type = "email" name="email" placeholder=" Enter Your Email" value="<?php echo $arr['email']?>">
        <lable>refer </lable>
        <input type = "text" name="refer" placeholder="Reference name" value="<?php echo $arr['refer']?>">
        <lable>jobpost </lable>
        <input type = "text" name="jobpost" placeholder="your field" value="<?php echo $arr['jobpost']?>">
        <br>
        <br>
        <input type = submit value="Update" name="submit">
        <input type = reset value=reset>       

</div>
</div>
</form>
</center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $idupdate = $_GET['id'];
$name = $_POST['name'];
$degree = $_POST['degree'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$refer = $_POST['refer'];
$jobpost = $_POST['jobpost'];

$updateque = " update registation set id=$ids,name='$name',degree='$degree',
mobile='$mobile',email='$email' ,refer='$refer' ,jobpost='$jobpost' where id = $idupdate ";

$res = mysqli_query($con,$updateque);

if($res){
    ?>
    <script>
            alert("Data updated properly");
    </script>
    <?php 
}
else{
    ?>
    <script>
    alert('Error');
     </script>
    <?php
}

}

?>

