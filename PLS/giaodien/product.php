<?php
    require_once './admin/ketnoi.php';
        $id = '';
        $ten = '';
        if(isset($_GET['id'])) {
            echo $id;
            $id = $_GET['id'];
        } else {
            echo "aaa";
        }
    $sqlii = "SELECT * FROM khoahoc WHERE id='$id'";
    $result = mysqli_query($conn, $sqlii);
    $r = $result -> fetch_assoc();
    $tenkhoahoc = $r['tenkhoahoc'];
    $makhoahoc = $r['makhoahoc'];
    $loaikhoahoc = $r['loaikhoahoc'];
    $anh = $r['anh']; 
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
</head>
<body>
<?php 
include ('header.php');
?>
<!---------------------- Product ---------------------->
<section class="product">
    <div class="container">
        <div class="product-top row">
            <a href="./index.php"><p>Trang chủ</p></a> <span>&#10230;</span> <a href="./cartegory.php"><p>Khoá học căn bản</p></a> <span>&#10230;</span> <p style="cursor: pointer"><?php echo $tenkhoahoc ?></p>
        </div>
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="images/<?php echo $anh; ?>" alt="">
                </div>
            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $tenkhoahoc ?></h1>
                    <p>Mã khóa học: <?php echo $makhoahoc ?></p>
                </div>
                <div class="product-content-right-product-price">
                    <p><span>Free</span></p>
                </div>
                <div class="product-content-right-product-type">
                    <span style="font-weight: bold;">Loại:</span> <?php echo $loaikhoahoc ?> <span style="color: red;">*</span>
                </div>
                <div class="product-content-right-product-quantity">
                        <div class="product-content-right-product-button">
                        
                            <a href="hoctap.php?id=<?php echo $id ?>"><button><i class="fas fa-shopping-cart"></i> <p>Tham gia khóa học</p></button></a>
                        </div>
                        <div class="product-content-right-product-icon">
                            <div class="product-content-right-product-icon-item">
                                <a href="tel:0334553852"><i class="fas fa-phone-alt"></i> <p style="display: inline-block;">Hotline</p></a>
                            </div>
                            <div class="product-content-right-product-icon-item">
                                <i class="fas fa-comments"></i> <p>Chat</p>
                            </div>
                            <div class="product-content-right-product-icon-item">
                                <i class="fas fa-envelope"></i> <p>Mail</p>
                            </div>
                        </div>
                        
                        <div class="product-content-right-bottom">
                            <button class="product-content-right-bottom-top">
                                &#8744;
                            </button>
                            <div class="product-content-right-bottom-content-big">
                                <div class="product-content-right-bottom-content-title row">
                                    <div class="product-content-right-bottom-content-title-item-chitiet">
                                        <p>Chi tiết</p>
                                    </div>
                                </div>
                                <div class="product-content-right-bottom-content">
                                    <div class="product-content-right-bottom-content-chitiet">
                                        Nó dành cho ai: Microsoft Office là một bộ ứng dụng văn phòng phổ biến được thiết kế để hỗ trợ nhiều người khác nhau, từ người dùng cá nhân đến doanh nghiệp và tổ chức lớn. <br>
                                        <br>
                                        Nó là gì: Microsoft Office là một bộ ứng dụng văn phòng do Microsoft Corporation phát triển. Nó bao gồm một loạt các ứng dụng chủ yếu được sử dụng để xử lý công việc văn phòng, soạn thảo văn bản, tạo bảng tính, thiết kế bài thuyết trình, quản lý cơ sở dữ liệu, và thực hiện các nhiệm vụ liên quan đến công việc văn phòng khác nhau. <br>
                                        <br>
                                        Bạn sẽ học gì: Khi người dùng học về Microsoft Office, họ thường tập trung vào việc hiểu cách sử dụng và tận dụng các ứng dụng chính của nó, bao gồm: Microsoft Word, Microsoft Excel, Microsoft PowerPoint,...
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!------------------product-rating---------------------------->
<!-- <section class="product-related">
    <div class="product-related-title">
        <p>Đánh giá khóa học<p>
        <?php include("rating_product.php") ?>
    </div>
</section> -->
<!---------------------- footer ---------------------->
<?php include "footer.php" ?>
<script>
   const button = document.querySelector('.product-content-right-bottom-top');
button.addEventListener('click', function() {
    const parent = this.parentNode;
    const elementsToToggle = parent.querySelectorAll(':scope > *:not(button)');
    elementsToToggle.forEach(function(element) {
        if (element.style.display === 'none') {
            element.style.display = '';
            button.innerHTML = '&#8744;'; // Ký tự mũi tên đi lên (∨)
        } else {
            element.style.display = 'none';
            button.innerHTML = '&#8743;'; // Ký tự mũi tên đi lên (↑)
        }
    });
});
</script>
</body>
</html>