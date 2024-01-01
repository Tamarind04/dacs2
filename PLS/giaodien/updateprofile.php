<?php
$tendangnhap = $_POST['user_name'];
$hovaten = $_POST['hovaten'];
$email = $_POST['email'];
$id = $_POST['sid'];


require_once './admin/adminloginconn.php';

$updatesql = "UPDATE users SET user_name='$tendangnhap', hovaten='$hovaten', email='$email' WHERE id=$id";

// echo $updatesql; exit;

if(mysqli_query($conn, $updatesql)
){
    header("Location: profile.php");
};

 
?>