<?php
session_start();

include("ketnoi.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    if(!empty($admin_name) && !empty($admin_password) && !is_numeric($admin_name))
    {
        $query = "select * from admin_users where admin_name = '$admin_name' 
         limit 1 ";
    
        $result = mysqli_query($conn,$query);

        if($result) 
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $admin_data = mysqli_fetch_assoc($result);
                
                if($admin_data['admin_password'] === $admin_password)
                {
                    $_SESSION['admin_id'] = $admin_data['admin_id'];
                    header("Location: lietke.php");
                    die;
                }  else {
                    echo '<script type="text/javascript"> alert("Sai mật khẩu") </script> ';
                }
            }   else {
                // echo '<script type="text/javascript"> alert("Tài khoản hoặc mật khẩu của bạn không chính xác") </script> ';
            }
            
        }
        // echo '<script type="text/javascript"> alert("Sai mật khẩu") </script> ';
        // echo "Please enter some valid information";
    }else
    {
        // echo '<script type="text/javascript"> alert("Xin hãy nhập đầy đủ thông tin") </script> ';
        // echo "Please enter some valid information";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form method="post" action="">
            <h1>Đăng nhập Admin</h1>
            <div class="input-box">
                <input type="email" name="admin_name" placeholder="Tên đăng nhập" 
                required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="admin_password" placeholder="Mật khẩu" 
                required>
                <i class="bx bxs-lock-alt"></i> 
            </div>

            <div class="remember-forgot">
                <label><input required type="checkbox">Đồng ý với điều khoản người dùng?
                <br>
            </label>
            <!-- <a href="#">Quên mật khẩu?</a> -->
            </div>

            <button types="submit" class="btn">Đăng nhập</button>

            <!-- <div class="register-link">
                <p>Chưa có tài khoản? <a 
                href="./signup.php">Đăng kí</a></p>
            </div> -->
        </form>
    </div>
</body>
</html>

