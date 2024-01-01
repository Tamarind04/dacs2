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
<?php 
include "footer.php"; ?>
<script src="./custom.js"></script>
</body>
</html>
