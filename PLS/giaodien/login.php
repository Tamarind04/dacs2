<?php
session_start();

include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        $query = "select * from users where user_name = '$user_name' and tinhtrang = 'hoatdong' 
         limit 1 ";
    
        $result = mysqli_query($con,$query);

        if($result) 
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                } else {
                    echo '<script type="text/javascript"> alert("Sai mật khẩu") </script>';
                }
            
            }   else {
                echo '<script type="text/javascript"> alert("Tài khoản của bạn đã bị vô hiệu hóa") </script> ';
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
            <h1>Đăng nhập</h1>
            <div class="input-box">
                <input type="text" name="user_name" placeholder="Tên đăng nhập" 
                required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Mật khẩu" 
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

            <div class="register-link">
                <p>Chưa có tài khoản? <a 
                href="./signup.php">Đăng kí</a></p>
            </div>
        </form>
    </div>
</body>
</html>

