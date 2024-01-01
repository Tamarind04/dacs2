<?php
$ten = $_POST['tentemp'];
$loai = $_POST['loaitemp'];
$anh = $_POST['anhtemp'];
if ($anh) {
    echo "hoan thanh";
}
if ($_FILES['anhtemp']["tmp_name"] ) {
    echo 'anhtemp';
} else {
    echo 'ko';
}

require_once 'ketnoi.php';
$themsql = "";

if($_FILES['anhtemp']["error"] === 4){
    // echo "<script> alert('File does not exist'); </script>";
    // echo "Ảnh chưa tải lên!";
}else{
    $fileName = $_FILES["anhtemp"]["name"];  
    $fileSize = $_FILES["anhtemp"]["size"];
    $tmpName = $_FILES["anhtemp"]["tmp_name"];

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
        $themsql = "INSERT INTO template (tentemp, loaitemp, anhtemp) VALUES 
        ('$ten', '$loai', '$fileName')";

        // echo "success";
        
    }
}

// $themsql = "INSERT INTO khoahoc (tenkhoahoc, makhoahoc, loaikhoahoc) VALUES 
// ('$ten', '$ma', '$loai')";
// echo $themsql; exit;

if(mysqli_query($conn, $themsql)
){
    header("Location: quanlytemp.php");
};

 
?>