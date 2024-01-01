<?php
$ten = $_POST['tentemp'];
$loai = $_POST['loaitemp'];
$id = $_POST['sid'];

require_once 'ketnoi.php';

$updatesql = "UPDATE template SET tentemp='$ten', loaitemp='$loai', WHERE id=$id";
if($_FILES['anh']['name']) {
    $anh = $_FILES['anh']['name'];
    $updatesql = "UPDATE template SET tentemp='$ten', loaitemp='$loai', anh='$anh' WHERE id=$id";
}


// echo $updatesql; exit;

if(mysqli_query($conn, $updatesql)
){
    header("Location: quanlytemp.php");
}

 
?>