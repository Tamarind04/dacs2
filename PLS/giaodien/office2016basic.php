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
</head>
<body>
<?php 
include "header.php"; ?>
<!-------------------------Cartegory---------------->
<section class="cartegory">
    <div class="container">
        <div class="cartegory-top row">
            <a href="./index.php"><p>Trang chủ</p></a> <span>&#10230;</span> <a href="./cartegory.php"><p>Khoá học căn bản</p></a> <span>&#10230;</span>  <a href="./cartegory.php"><p>Khoá học phổ biến</p></a> <span>&#10230;</span><p style="cursor: pointer">Office 2016</p>
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
                            <li><a href="#">Office 2016</a></li>
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
                            <li><a href="./product2021adv.php">Office 2021</a></li>
                        </ul>
                    </li>
                    <li class="cartegory-left-li">
                        <a href="#" class="cartegory-left-link">GOOGLE SLIDES VÀ POWERPOINT TEMPLATES</a>
                        <ul>
                            <li><a href="./template.php">Chủ đề mới nhất</a></li>
                        </ul>
                    </li>   
                </ul>
            </div>
            <div class="cartegory-right row">
                <div class="cartegory-right-top-item">
                    <p>KHÓA HỌC OFFICE 2016 CƠ BẢN</p>
                </div>
                <form method="GET" action="">
                        <!-- Các thành phần form khác ở đây -->
                        <div class="sapxep select-wrapper">
                            <select name="status" required class="form-select">
                                <option value="">Bộ lọc</option>
                                <option value="PowerPoint" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'PowerPoint' ? 'selected':'') :'' ?> >PowerPoint</option>
                                <option value="Word" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'Word' ? 'selected':'') :'' ?>>Word</option>
                                <option value="Excel" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'Excel' ? 'selected':'') :'' ?>>Excel</option>
                            </select>
                        </div>
                        <div class="filter">
                            <!-- Đây là nút gửi -->
                            <button style=" width: 80px; height: 30px;background: blue;" type="submit" class="btn btn-primary">Lọc</button>
                            <button style=" width: 80px; background: red; border: none;border-radius: 5px; height: 30px;font-size: 15px;">
                            <a style="background: none;" href="office2016basic.php" class="btn btn-danger">Reset</a></button>
                        </div>
                    </form>
                <div class="cartegory-right-content row">
                <?php
                        require_once './admin/ketnoi.php';
                        if(isset($_GET['status']) && $_GET['status'] != ''){
                            $status = mysqli_real_escape_string($conn,$_GET['status']);
                            $lietke_sql = "SELECT * FROM khoahoc WHERE loaikhoahoc='$status' AND phanloai = 'Cơ bản' AND nam ='2016' ";
                          } else {
                            $lietke_sql = "SELECT * FROM khoahoc WHERE phanloai = 'Cơ bản' AND nam ='2016' ";
                          }
                        

            $result = mysqli_query($conn, $lietke_sql);

        while ($r = mysqli_fetch_assoc($result)) {
            ?>
            <div class="cartegory-right-content-item">
                        <a href="./product.php?id= <?php echo $r['id'] ?>" >
                        <img src="images/<?php echo $r['anh'] ?>" alt=""></a>
                        <a href="./product.php?id= <?php echo $r['id'] ?>"><h1><?php echo $r['tenkhoahoc'];  ?></h1></a>
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
<section class="app-container">
    <p>Tải ứng dụng Quinn</p>
    <div class="app-google">
        <img src="images/appstore.png" >
        <img src="images/googleplay.jpg" >
    </div>
    <p>Nhận các cập nhật mới từ Quinn</p>
    <input type="email" placeholder="Nhập email của bạn...">
</section>
<!---------------------- footer ---------------------->
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