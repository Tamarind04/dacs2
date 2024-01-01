<?php
$id= $_GET['sid'];

require_once 'adminloginconn.php';

$edit_sql = "SELECT * FROM users WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- show infor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin người dùng</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Form sửa thông tin người dùng</h1>
        <form action="updateuser.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="user_name">Tên người dùng</label>
                <input type="text" id="user_name" class="form-control" 
                name="user_name" value="<?php echo $row['user_name']?>">
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="text" name="password" id="password" class="form-control" 
                value="<?php echo $row['password']?>">
            </div>
            <div class="form-group">
                <label for="email">Email người dùng</label>
                <input type="email" name="email" id="email" class="form-control" 
                value="<?php echo $row['email']?>">
            </div>
            <div class="form-group">
                <label for="tinhtrang">Tình trạng tài khoản</label>
                <input type="text" name="tinhtrang" id="tinhtrang" class="form-control" 
                value="<?php echo $row['tinhtrang']?>">
            </div>
            <button class="btn btn-success">Cập nhật thông tin người dùng</button>
        </form>
    </div>
</body>
</html>