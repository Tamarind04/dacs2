<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý người dùng</title>
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
        <h1>Form quản lý người dùng</h1>
        <form action="add.php" method="post">
            <div class="form-group">
                <label for="tenkhoahoc">Tên tài khoản người dùng</label>
                <input type="text" id="tenkhoahoc" class="form-control" name="tenkhoahoc">
            </div>
            <div class="form-group">
                <label for="makhoahoc">Mật khẩu người dùng</label>
                <input type="text" name="makhoahoc" id="makhoahoc" class="form-control">
            </div>
            <!-- <button class="btn btn-success">Thêm khóa học</button> -->
        </form>
    </div>
</body>
</html>