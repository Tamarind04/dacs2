<?php
session_start();

    include("functions.php");
    require_once './admin/ketnoi.php';

    $user_data = check_login($conn);

    $name = "";
    $user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id = $user_id";
    $result = mysqli_query($conn, $query);
    if($result -> num_rows > 0) {
       $user_data = mysqli_fetch_assoc($result);
       $name = $user_data['user_name'];
    }

    echo $name;

    $prd_id = $_GET['id'];

    echo $prd_id; 

    $noidung = $_POST['noidung'];
    
    echo $noidung;


    $sql = "INSERT INTO binhluan(id_comm, noidung, id, user_name)
    VALUES(NULL, '$noidung', '$prd_id', '$name')";

    mysqli_query($conn, $sql);

   
    header("Location: hoctap.php?id=$prd_id");

?>