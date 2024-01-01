<?php
 session_start();


 include("connection.php");
 include("functions.php");

 $id = '';
 $name ='';
 if(isset($_GET['id'])) {
     $id = $_GET['id'];
 }
$sqli = "SELECT * FROM users WHERE id='$id'";
$result = mysqli_query($con, $sqli);
$r = $result -> fetch_assoc();
?>
<?php
 if(check_login($con)) {
  $name = "";
 $user_id = $_SESSION['user_id']; 

 $query = "SELECT * FROM users WHERE user_id = $user_id";
 $result = mysqli_query($con, $query);
 if($result -> num_rows > 0) {
    $user_data = mysqli_fetch_assoc($result);
    $name = $user_data['user_name'];
 }
 }
?> 
<header>
        <div class="logo">
          <a href="index.php">
            <span class="logo-text">QUINN</span>
          </a>
            
        </div>
        <div class="menu">
            <li><a href="./cartegory.php" >KHÓA HỌC CĂN BẢN</a>
                <ul class="sub-menu">
                    <li><a href="./office2016basic.php">Office 2016 cơ bản</a></li>
                    <li><a href="./office2019basic.php">Office 2019 cơ bản</a></li>
                    <li><a href="./office2021basic.php">Office 2021 cơ bản</a></li>
                </ul>
            </li>
            <li><a href="./advcartegory.php">KHÓA HỌC NÂNG CAO</a>
              <ul class="sub-menu">
                <li><a href="./office2016adv.php">Office 2016 nâng cao</a></li>
                <li><a href="./office2019adv.php">Office 2019 nâng cao</a></li>
                <li><a href="./office2021adv.php">Office 2021 nâng cao</a></li>
            </ul>
            </li>
            <li><a href="./template.php">GOOGLE SLIDES VÀ POWERPOINT TEMPLATES</a>
              <ul class="sub-menu">
                <li><a href="./template.php">Chủ đề mới nhất</a></li>
            </ul>
            </li>
            <!-- <li><a href="./thaoluan.php">THẢO LUẬN</a></li> -->
        </div>
        <div class="others">
            
              <?php 
              if (check_login($con)) { ?>
                <li>Xin chào <?php echo $name; ?></li>
              <?php } else { ?>
                <li style="font-size: 14px;">Bạn chưa đăng nhập</li>
              <?php }
              ?>
            
            <li><a href="./admin/lietke.php" class="fa fa-area-chart"></a></li>
            
            <?php if (check_login($con)) { ?>
    <!-- Người dùng đã đăng nhập -->
    <li><a href="profile.php"><i class="fa fa-user"></i></a></li>
    <li><a href="logout.php"><i class="fa fa-sign-out"></i></a></li>
<?php } else { ?>
    <!-- Người dùng chưa đăng nhập -->
    <li><a href="login.php"><i class="fa fa-sign-in-alt"></i></a></li>
    <li><a href="signup.php"><i class="fa fa-user-plus"></i></a></li>
<?php } ?>

        </div>
</header>