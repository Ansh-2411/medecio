<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <!-- clinic name
    doctor name
    email
    password
    number -->
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                        <div class="card-body p-md-5">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                    <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4"> <a href="doctor_signup.php" class="active">Sign Up </a> / <a href="doctor_login.php">Login</a></p>

                                    <form class="mx-1 mx-md-4" method="POST" action ="">

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example1c" name="name" class="form-control" required/>
                                                <label class="form-label" for="form3Example1c">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" name="cname" id="form3Example1c" class="form-control" required/>
                                                <label class="form-label" for="form3Example1c">Clinic Name</label>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="text" id="form3Example4c" name="number" class="form-control" required/>
                                                <label class="form-label" for="form3Example4c">Phone Number</label>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="email" name="email" id="form3Example3c" class="form-control" required/>
                                                <label class="form-label" for="form3Example3c">Your Email</label>
                                            </div>
                                        </div>

                                        

                                        <div class="d-flex flex-row align-items-center mb-4">
                                            <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                            <div class="form-outline flex-fill mb-0">
                                                <input type="password" name="pass" id
                                                ="form3Example4cd" class="form-control" required/>
                                                <label class="form-label" for="form3Example4cd">
                                                    password</label>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                            <input type = "submit" value = "Register" class="btn btn-primary btn-lg" name = "submit1">
                                        </div>
                                        

                                    </form>
                                    </div>
                                                                  
                                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                    <img src="photo.jpeg"
                                        class="img-fluid" alt="Sample image">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
include 'connection.php';
if(isset($_POST['submit1'])){
$name =$_POST['name'];
$cname = $_POST['cname'];
$number = $_POST['number'];
$email = $_POST['email'];
$pass = mysqli_real_escape_string($con,$_POST['pass']);
$cpass =password_hash($pass,PASSWORD_BCRYPT);  

$selemail = "select * from registration where email ='$email'";
$emailres = mysqli_query($con,$selemail);
$emailcount= mysqli_num_rows($emailres);
if($emailcount>0){
    ?>
    <script>
        alert("This email is alredy exist");
        location.replace('doctor_login.php');

        </script>
        <?php
}
else {
        $insertQue = "insert into registration(name,cname,number,email,pass) values ('$name','$cname','$number','$email','$cpass')";
        $res = mysqli_query($con,$insertQue);
        if($res){
            ?>
            <script>
                    alert('Succesfully inserted');
                    location.replace('doctor_login.php');
            </script>
            <?php 
             }

}
}
?>
</body>
<script src="script.js"></script>

</html>