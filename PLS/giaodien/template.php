<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1147679ae7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>Quinn-Project</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!-- font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Diphylleia&display=swap" rel="stylesheet">
    <!-- font end -->
</head>
<body>
<?php 
include "header.php"; ?>
<!-------------------------Template-------------------------->
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top row">
            <a href="./index.php"><p>Trang chủ</p></a> <span>&#10230;</span> <p style="cursor: pointer">Chủ đề mới nhất</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="cartegory-left">
                <ul>
                    <li class="cartegory-left-li">
                        <a href="#" class="cartegory-left-link">KHÓA HỌC CĂN BẢN</a>
                        <ul>
                            <li><a  style="font-size: 14px;"href="./cartegory.php">KHÓA HỌC PHỔ BIẾN</a></li>
                            <li><a href="./office2016basic.php">Office 2016</a></li>
                            <li><a href="./office2019basic.php">Office 2019</a></li>
                            <li><a href="./office2021basic.php">Office 2021</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li">
                        <a href="#" class="cartegory-left-link">KHÓA HỌC NÂNG CAO</a>
                        <ul>
                            <li><a style="font-size: 14px;"href="./advcartegory.php">KHÓA HỌC PHỔ BIẾN</a></li>
                            <li><a href="./office2016adv.php">Office 2016</a></li>
                            <li><a href="./office2019adv.php">Office 2019</a></li>
                            <li><a href="./office2021adv.php">Office 2021</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li">
                        <a href="#" class="cartegory-left-link">GOOGLE SLIDES VÀ POWERPOINT TEMPLATES</a>
                        <ul>
                            <li><a href="#">Chủ đề mới nhất</a></li>
                        </ul>
                    </li>   
                </ul>
            </div>
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>CHỦ ĐỀ MỚI NHẤT</p>
                </div>
                
                <div class="cartegory-right-content row">
                    <?php
                        require_once './admin/ketnoi.php';
                    
                        
                        $db = "SELECT * FROM template";

                        $result = mysqli_query($conn, $db);

                        while ($r = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="cartegory-right-content-item">
                            <a href="./newtemp1.php?id= <?php echo $r['id'] ?>" >
                            <img src="images/<?php echo $r['anh'] ?>" alt=""></a>
                            <a href="./newtemp1.php?id= <?php echo $r['id'] ?>"><h1><?php echo $r['tentemp'];  ?></h1></a>
                            <p>0<sup>đ</sup></p>
                        </div>
                    <?php
                        }
                    ?> 
                </div>
                
                
                <div class="cartegory-right-bottom row">
                    <div class="cartegory-right-bottom-item">
                        <p>Hiển thị <?php echo $result -> num_rows; ?> <span>|</span> <?php echo $result -> num_rows; ?> sản phẩm</p>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>



<!---------------------- footer ---------------------->
<?php 
include "footer.php"; ?>
</body>
</html>

<script>
    var links = document.getElementsByClassName('cartegory-left-link');
    var listItems = document.getElementsByClassName('cartegory-left-li');

    for (var i = 0; i < links.length; i++) {
      links[i].addEventListener('click', function(event) {
        event.preventDefault();
        var listItem = this.parentNode;

        // Kiểm tra xem danh sách con đang hiển thị hay không
        var isChildListVisible = listItem.classList.contains('active');
        // Đặt trạng thái hiển thị danh sách con tương ứng
        listItem.classList.toggle('active', !isChildListVisible);

        // Ẩn tất cả các danh sách con khác
        for (var j = 0; j < listItems.length; j++) {
          if (listItems[j] !== listItem) {
            listItems[j].classList.remove('active');
          }
        }
      });
    }

    const header = document.querySelector("header")
    window.addEventListener("scroll",function() {
        x = window.pageYOffset
        if (x>0){
            header.classList.add("sticky")
        }
        else {
            header.classList.remove("sticky")
        }
    })
  </script>