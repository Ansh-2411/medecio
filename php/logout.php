<?php
session_start();
session_destroy();
header('location:login.php');
setcookie('emailid' ,Null, time()-86400);
setcookie('pass' ,Null, time()-86400);
?>