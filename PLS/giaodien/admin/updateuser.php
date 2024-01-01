<?php
$ten = $_POST['user_name'];
$mk = $_POST['password'];
$email = $_POST['email'];
$tinhtrang = $_POST['tinhtrang'];
$id = $_POST['sid'];


require_once 'adminloginconn.php';

$updatesql = "UPDATE users SET user_name='$ten', password='$mk', email='$email', tinhtrang='$tinhtrang' WHERE id=$id";

// echo $updatesql; exit;

if(mysqli_query($conn, $updatesql)
){
    header("Location: quanlyuser.php");
};

 
?>