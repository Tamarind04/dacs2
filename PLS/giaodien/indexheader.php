<?php
 session_start();

 include("connection.php");
 include("functions.php");

 $name = "";
 $hovaten ="";
 $user_email ="";
 $anhdaidien ="";
 $user_id = $_SESSION['user_id']; 

 $query = "SELECT * FROM users WHERE user_id = $user_id";
 $result = mysqli_query($con, $query);
 if($result -> num_rows > 0) {
    $user_data = mysqli_fetch_assoc($result);
    $name = $user_data['user_name'];
    $hovaten = $user_data['hovaten'];
    $user_email = $user_data['email'];
 }

 $id = '';
 $ten = '';
 if(isset($_GET['id'])) {
     $id = $_GET['id'];
 }
 if(isset($_GET['ten'])) {
     $ten = $_GET['ten'];
 }
$sqli = "SELECT * FROM users WHERE id='$id' OR user_name='$ten'";
$result = mysqli_query($con, $sqli);
$r = $result -> fetch_assoc();
 
$c_login = check_login($con);
?>
<header>
        <div class="logo">
          <a href="index.php">
            <span class="logo-text">QUINN</span>
          </a>
            <!-- <a href="./index.html"><img src="images/logo_preview_rev_1.png"></a> -->
        </div>
        <div class="menu">
            <li><a href="./cartegory.php" >KHÓA HỌC CĂN BẢN</a>
                <ul class="sub-menu">
                    <li><a href="./product.php?ten=PowerPoint 2016 cơ bản">PowerPoint 2016 cơ bản</a></li>
                    <li><a href="./product.php?ten=PowerPoint 2019 cơ bản">PowerPoint 2019 cơ bản</a></li>
                    <li><a href="./product.php?ten=PowerPoint 2021 cơ bản">PowerPoint 2021 cơ bản</a></li>
                </ul>
            </li>
            <li><a href="./advcartegory.php">KHÓA HỌC NÂNG CAO</a>
              <ul class="sub-menu">
                <li><a href="./product2016adv.html">PowerPoint 2016 nâng cao</a></li>
                <li><a href="./product2019adv.html">PowerPoint 2019 nâng cao</a></li>
                <li><a href="./product2021adv.html">PowerPoint 2021 nâng cao</a></li>
            </ul>
            </li>
            <li><a href="./template.php">GOOGLE SLIDES VÀ POWERPOINT TEMPLATES</a>
              <ul class="sub-menu">
                <li><a href="./template.php">Chủ đề mới nhất</a></li>
            </ul>
            </li>
            <li><a href="./infor.html">THẢO LUẬN</a></li>
        </div>
        <div class="others">
            <li><input placeholder="Tìm kiếm" type="text"> <i style="cursor: pointer;" class="fas fa-search"></i></li>
            <li><a href="admin/lietke.php" class="fa fa-area-chart"></a></li>
            <li><a href="./profile.php?id=<?php echo $id ?>" class="btnLogin-popup"><i class="fa fa-user" style="cursor: pointer;"></i> </a></li>
        </div>
</header>