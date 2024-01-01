<?php
    include ("connection.php");
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
<header>
        <div class="logo">
          <a href="#">
            <span class="logo-text">QUINN</span>
          </a>
            <!-- <a href="./index.html"><img src="images/logo_preview_rev_1.png"></a> -->
        </div>
        <div class="menu">
            <li><a href="./cartegory.html" >KHÓA HỌC CĂN BẢN</a>
                <ul class="sub-menu">
                    <li><a href="./product.html">PowerPoint 2016 cơ bản</a></li>
                    <li><a href="./product2019basic.html">PowerPoint 2019 cơ bản</a></li>
                    <li><a href="./product2021basic.html">PowerPoint 2021 cơ bản</a></li>
                </ul>
            </li>
            <li><a href="./advcartegory.html">KHÓA HỌC NÂNG CAO</a>
              <ul class="sub-menu">
                <li><a href="./product2016adv.html">PowerPoint 2016 nâng cao</a></li>
                <li><a href="./product2019adv.html">PowerPoint 2019 nâng cao</a></li>
                <li><a href="./product2021adv.html">PowerPoint 2021 nâng cao</a></li>
            </ul>
            </li>
            <li><a href="./template.html">GOOGLE SLIDES VÀ POWERPOINT TEMPLATES</a>
              <ul class="sub-menu">
                <li><a href="./template.html">Chủ đề mới nhất</a></li>
                <li><a href="./populartheme.html">Chủ đề phổ biến</a></li>
            </ul>
            </li>
            <li><a href="./infor.html">THÔNG TIN</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"> <i style="cursor: pointer;" class="fas fa-search"></i></li>
            <li><a href="./coursehelp.html" class="fa fa-paw"></a></li>
            <li><a class="btnLogin-popup"><i class="fa fa-user" style="cursor: pointer;"></i> </a></li>
            <li><a href="./cart.html" class="fa fa-shopping-bag"></a></li>
        </div>
</header>
<!-------------------------Slider---------------------------->
<section id="Slider">
    <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/slide1.jpg" style="width:100%">
          <div class="text"></div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/slide2.jpg" style="width:100%">
          <div class="text"></div>
        </div>
        
        <div class="mySlides fade">
          <div class="numbertext"></div>
          <img src="images/slide3.jpg" style="width:100%">
          <div class="text"></div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="images/slide4.jpg" style="width:100%">
            <div class="text"></div>
          </div>
        
        <!-- <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a> -->
        
        </div>
        <br>
        
        <div style="text-align:center">
          <span class="dot" onclick="currentSlide(1)"></span> 
          <span class="dot" onclick="currentSlide(2)"></span> 
          <span class="dot" onclick="currentSlide(3)"></span> 
          <span class="dot" onclick="currentSlide(4)"></span> 
        </div></span>
    </div>
</section>
<!---------------------- footer ---------------------->
<section class="app-container">
    <p>Tải ứng dụng Quinn</p>
    <div class="app-google">
        <img src="images/appstore.png" >
        <img src="images/googleplay.jpg" >
    </div>
    <p>Nhận các cập nhật mới từ Quinn</p>
    <input type="email" placeholder="Nhập email của bạn...">
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
<script src="./custom.js"></script>
</body>
</html>
