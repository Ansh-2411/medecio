
<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Signup page</title>
<?php include 'links.php'?>  
<style>
    .abc{
        margin-top: 50px;
        
       height:350px;
        width:300px;
        background-color: yellow;
        border-radius:20px;

    }
    </style>
</head>
<body>
<center>
    <div>
        <div style="margin-top:70px;"><h1>Registration<br>For Calculator</h1></div>
<div>

    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="abc">
        <lable>Name</lable><br>
        <input type="text" name="name" placeholder="Enter your name*" required><br>
        <lable>mobile </lable><br>
        <input type = "text" name="number" placeholder="Enter Your mobile Num."><br>
        <lable> email</lable><br>
        <input type = "email" name="email" placeholder=" Enter Your Email" required><br>
        <lable>Password</lable><br>
        <input type = "password" name="pass" placeholder="Enter your password" required><br>
        <lable>Confirm Password</lable><br>
        <input type = "Password" name="conpass" placeholder="Confirm Password">
        <br>
        <br>
        <input type = submit value="Creat an account" style=" border-radius : 8px; background-color:aqua;" name="submit">
    <h5>Alredy have an account??<a href="login.php"> Log in here</a></h5>

</div>
</div>
</center>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
$name = mysqli_real_escape_string($con,$_POST['name']);
$cname = mysqli_real_escape_string($con,$_POST['cname']);
$number = mysqli_real_escape_string($con,$_POST['number']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$cpass = password_hash($pass,PASSWORD_BCRYPT);  

$selemail = "select * from registration where email ='$email'";
$emailres = mysqli_query($con,$selemail);
$emailcount= mysqli_num_rows($emailres);
if($emailcount>0){
    ?>
    <script>
        alert("This email is alredy exist");
        </script>
        <?php
}

else {
        $insertQue = "insert into registration(name,cname,number,email,pass) values('$name',$cname,'$number','$email','$cpass')";
        $res = mysqli_query($con,$insertQue);
        if($res){
            ?>
            <script>
                    alert('Succesfully inserted');
                    location.replace('login.php');
            </script>
            <?php 
             }

}
}



?>
</body>
</html>