<?php
session_start();
?>
<?php 
include 'connection.php';
$tablename = isset($_COOKIE['emailid']);
$createTable = "CREATE TABLE IF NOT EXISTS $tablename (
    id INT(255) AUTO_INCREMENT PRIMARY KEY,
    PeName varchar(255),
    PeAge INT(255),
    peEmail varchar(255),
    peAadhar varchar(255),
    peDate varchar(255),
    peIssue varchar(255),
);
);
                       
?>


