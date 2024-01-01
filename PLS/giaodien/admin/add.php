<?php
$ten = $_POST['tenkhoahoc'];
$ma = $_POST['makhoahoc'];
$loai = $_POST['loaikhoahoc'];
$anh = $_POST['anh'];
$phanloai = $_POST['phanloai'];
$nam = $_POST['nam'];
$video = $_POST['video'];
if ($anh) {
    echo "hoan thanh";
}
if ($_FILES['anh']["tmp_name"] ) {
    echo 'anh';
} else {
    echo 'ko';
}

require_once 'ketnoi.php';
$themsql = "";

if($_FILES['anh']["error"] === 4){
    // echo "<script> alert('File does not exist'); </script>";
    // echo "Ảnh chưa tải lên!";
}else{
    $fileName = $_FILES["anh"]["name"];
    $fileSize = $_FILES["anh"]["size"];
    $tmpName = $_FILES["anh"]["tmp_name"];

    $validImageExtension = ['jpg','jpeg','png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if(!in_array($imageExtension, $validImageExtension)){
        
        // echo "Ảnh không hợp lệ";
    }elseif($fileSize > 10000000){
        
        // echo "Kích thước ảnh quá lớn!";
    }else{
        // $newImageName = uniqid();
        // $newImageName .='.'.$imageExtension;
        // $newDestination = "images/".$newImageName;
        
        // move_uploaded_file($tmpName, $newDestination);
        $themsql = "INSERT INTO khoahoc (tenkhoahoc, makhoahoc, loaikhoahoc, anh, phanloai, nam, video) VALUES 
        ('$ten', '$ma', '$loai', '$fileName', '$phanloai', '$nam', '$video')";

        // echo "success";
        
    }
}

// $themsql = "INSERT INTO khoahoc (tenkhoahoc, makhoahoc, loaikhoahoc) VALUES 
// ('$ten', '$ma', '$loai')";
// echo $themsql; exit;

if(mysqli_query($conn, $themsql)
){
    header("Location: lietke.php");
};

 
?>