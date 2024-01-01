<?php
session_start();

        include("connection.php");
        include("functions.php");

        if($_SERVER['REQUEST_METHOD'] == "POST")
        {
            $user_name = $_POST['user_name'];
            $password = $_POST['password'];
            $signup_email = $_POST['email'];

            if(!empty($user_name) && !empty($password) && !empty($signup_email) && !is_numeric($user_name))
            {
                $user_id = random_num(20);
                $query = "INSERT INTO users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$signup_email')";
            
                mysqli_query($con,$query);

                header("Location: login.php");
                die;
            }else
            {
                echo "Please enter some valid information";
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
            <h1>Đăng ký</h1>
            <div class="input-box">
                <input type="text" name="user_name" placeholder="Nhập tên đăng nhập" 
                required>
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Nhập Email" 
                required>
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Nhập mật khẩu" 
                required>
                <i class="bx bxs-lock-alt"></i>
            </div>

            <div class="remember-forgot">
                <label><input required type="checkbox">Đồng ý với điều khoản người dùng?
            </label>   
            </div>

            <button types="submit" class="btn">Đăng ký</button>

            <div class="register-link">
                <p>Đã có tài khoản? <a 
                href="./login.php">Đăng nhập</a></p>
            </div>
        </form>
    </div>
</body>
</html>

