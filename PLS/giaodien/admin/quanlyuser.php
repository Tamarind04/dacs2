<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý danh sách người dùng</title>
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
        <h1>Danh sách người dùng</h1>
    
    
    <a href="lietke.php"><button class="btn btn-primary" id="quanlykhoahoc" >Quản lý khóa học</button></a>
    <a href="quanlytemp.php"><button class="btn btn-primary" id="quanlykhoahoc" >Quản lý template</button></a>
    <!-- Trang chủ -->
</button>
<a style="float: right" href="../index.php"><button class="btn btn-primary">Trang chủ</button></a>
<!-- End Trang chủ -->
<!-- Đăng xuất -->
</button>
<a style="float: right" href="logout.php"><button style="margin-right: 5px;" class="btn btn-primary">Đăng Xuất</button></a>
<!-- End Đăng xuất -->
<br>
<br>
        <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Tên người dùng</th>
        <th>Mật khẩu người dùng</th>
        <th>Email người dùng</th>
        <th>Tình trạng</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        require_once 'adminloginconn.php';

        $lietke_sql = "SELECT * FROM users";

        $result = mysqli_query($conn, $lietke_sql);

        while ($r = mysqli_fetch_assoc($result)) {
            ?>
        <tr>
        <td><?php echo $r['user_name'];?></td>
        <td><?php echo $r['password'];?></td>
        <td><?php echo $r['email'];?></td>
        <td><?php echo $r['tinhtrang']; ?></td>
        <td><a href="suauser.php?sid=<?php echo $r['id'];?>" class="btn btn-info" >Sửa</a> 
        <a onclick="return confirm('Bạn có muốn xóa người dùng này không');" href="deleteuser.php?sid=<?php echo $r['id'];?>" class="btn btn-danger" >Xóa</a> </td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>

    </div>

</div>
</body>
</html>
