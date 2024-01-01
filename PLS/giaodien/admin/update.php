<?php
$ten = $_POST['tenkhoahoc'];
$ma = $_POST['makhoahoc'];
$loai = $_POST['loaikhoahoc'];
$phanloai = $_POST['phanloai'];
$nam = $_POST['nam'];
$video = $_POST['video'];
$id = $_POST['sid'];


require_once 'ketnoi.php';

$updatesql = "UPDATE khoahoc SET tenkhoahoc='$ten', makhoahoc='$ma', 
loaikhoahoc='$loai', phanloai='$phanloai', nam='$nam', video='$video'  WHERE id=$id";
if($_FILES['anh']['name']) {
    $anh = $_FILES['anh']['name'];
    $updatesql = "UPDATE khoahoc SET tenkhoahoc='$ten', makhoahoc='$ma', 
loaikhoahoc='$loai', anh='$anh', phanloai='$phanloai', nam='$nam' WHERE id=$id";
}


// echo $updatesql; exit;

if(mysqli_query($conn, $updatesql)
){
    header("Location: lietke.php");
} 

 
?>