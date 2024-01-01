<?php
    require_once './admin/ketnoi.php';
        $id = '';
        $ten = '';
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if(isset($_GET['ten'])) {
            $ten = $_GET['ten'];
        }
    $sqli = "SELECT * FROM khoahoc WHERE id='$id' OR tenkhoahoc='$ten'";
    $result = mysqli_query($conn, $sqli);
    $r = $result -> fetch_assoc();
    $tenkhoahoc = $r['tenkhoahoc'];
    $makhoahoc = $r['makhoahoc'];
    $loaikhoahoc = $r['loaikhoahoc'];
    $anh = $r['anh'];
    $video = $r['video'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Quinn-Project</title>
    <!-- font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap" rel="stylesheet">
    <!-- font end -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
<?php 
include "header.php"; ?>
<section class="product">
<div class="container">
    <div class="product-top row">
        <a href="./index.php"><p>Trang chủ</p></a> <span>&#10230;</span> <a href="./cartegory.php"><p>Khoá học căn bản</p></a> <span>&#10230;</span> <a href="product.php?id=<?php echo $r['id'] ?>"><p style="cursor: pointer"><?php echo $tenkhoahoc ?></p></a> <span>&#10230;</span>
        <p  style="cursor: pointer"> Học <?php echo $tenkhoahoc ?></p>
    </div>
    
    <!-- Video -->
    <iframe id="<?php echo $r['id'] ?>" frameborder="1" width="1300" height="600" 
    src="//www.youtube-nocookie.com/embed/<?php echo $video ?>" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    <!-- End Video -->
    <br>
    <br>
    <!-- Comment -->
    <?php 
    include "binhluan.php"
    ?>
    <!-- End Comment  -->
</div>
</section>

<div class="footer-top">
    <li><a href=""></a>Liên hệ</li>
    <li><a href=""></a>Tuyển dụng</li>
    <li><a href=""></a>Giới thiệu</li>
    <li>
        <a href="" class="fab fa-facebook-f"></a>
        <a href="" class="fab fa-twitter"></a>
        <a href="" class="fab fa-youtube"></a>
    </li>
</div>
<div class="footer-center">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Doloremque suscipit ex perferendis eaque repudiandae deserunt exercitationem! <br>
        <b>Iusto aliquid nemo labore dolore eius quia nesciunt dolorum commodi, illum impedit fugit?
        </b>
    <p> 
</div>
<div class="footer-bottom">
    <p><b>@Quinn All rights reserved</b></p>
</div>
</body>
</html>
