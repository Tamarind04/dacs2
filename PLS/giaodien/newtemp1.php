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
    $sqli = "SELECT * FROM template WHERE id='$id' OR tentemp='$ten'";
    $result = mysqli_query($conn, $sqli);
    $r = $result -> fetch_assoc();
    $tentemp = $r['tentemp'];
    $loaitemp = $r['loaitemp'];
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
include ('header.php');
?>
<!---------------------- Product ---------------------->
<section class="product">
    <div class="container">
        <div class="product-top row">
            <a href="./index.php"><p>Trang chủ</p></a> <span>&#10230;</span> <a href="./template.php"><p>Chủ đề mới nhất</p></a> <span>&#10230;</span> <p style="cursor: pointer"><?php echo $tentemp ?></p>
        </div>
        <div class="product-content row">
            <div class="product-content-left row">
                <div class="product-content-left-big-img">
                    <img src="images/<?php echo $anh; ?>" alt="">
                </div>
            </div>
            <div class="product-content-right">
                <div class="product-content-right-product-name">
                    <h1><?php echo $tentemp ?></h1>
                </div>
                <div class="product-content-right-product-price">
                    <p><span>Free</span></p>
                </div>
                <div class="product-content-right-product-type">
                    <p><span style="font-weight: bold;">Loại:</span> <?php echo $loaitemp ?>  <span style="color: red;">*</span></p>
                </div>
                <div class="product-content-right-product-quantity">
                        <div class="product-content-right-product-button">
                            <a href="#"><button><ion-icon style="font-size: 20px;" name="download-outline"></ion-icon> <p style="font-size: 14px;">TẢI VỀ</p></button></a>
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
                        <div class="product-content-right-product-QR">
                            <img src="images/qr.png" alt="">
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
                                        Viết một câu chuyện hấp dẫn và lôi cuốn có thể là một nhiệm vụ đầy thách thức, nhưng với các công cụ và kỹ thuật phù hợp, bất kỳ ai cũng có thể làm được. Mẫu Google Trang trình bày và PowerPoint của chúng tôi được thiết kế để giúp các nhà văn tham vọng tạo ra một kế hoạch có cấu trúc và hiệu quả để viết câu chuyện của riêng họ, vì nó chứa nội dung thực tế do các nhà giáo dục cung cấp. Chọn ngôn ngữ bạn chọn và tìm hiểu cách bắt đầu viết một câu chuyện thu hút độc giả của bạn!
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

            </div>
        </div>
    </div>
</section>

<!---------------------- footer ---------------------->
<?php include ("footer.php") ?>
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