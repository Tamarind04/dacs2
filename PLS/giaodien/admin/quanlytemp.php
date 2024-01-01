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
        <h1>Danh sách template</h1>
    
        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Thêm template
</button>

    <a href="lietke.php"><button class="btn btn-primary" id="quanlykhoahoc" >Quản lý khóa học</button></a>
    <a href="quanlyuser.php"><button class="btn btn-primary" id="quanlykhoahoc" >Quản lý người dùng</button></a>
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
        <th>Tên template</th>
        <th>Loại template</th>
        <th>Ảnh</th>
        <th>Thao tác</th>
      </tr>
    </thead>
    <tbody>
    <?php 
        require_once 'adminloginconn.php';

        $lietke_sql = "SELECT * FROM template";

        $result = mysqli_query($conn, $lietke_sql);

        while ($r = mysqli_fetch_assoc($result)) {
            ?>
        <tr>
        <td><?php echo $r['tentemp'];?></td>
        <td><?php echo $r['loaitemp'];?></td>
        <td><?php echo $r['anh'];?></td>
        <td><a href="edittemp.php?sid=<?php echo $r['id'];?>" class="btn btn-info" >Sửa</a> 
        <a onclick="return confirm('Bạn có muốn xóa người dùng này không');" href="deletetemp.php?sid=<?php echo $r['id'];?>" class="btn btn-danger" >Xóa</a> </td>
      </tr>
    <?php
    }
    ?>
    </tbody>
  </table>

    </div>
    <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form thêm template</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="addtemp.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tentemp">Tên template</label>
                <input type="text" id="tentemp" class="form-control" name="tentemp">
            </div>
            <div class="form-group">
                <label for="loaitemp">Loại template</label>
                <input type="text" name="loaitemp" id="loaitemp" class="form-control">
            </div>
            <div class="form-group">
                <label for="anh">Ảnh template</label>
                <input type="file" id="anhtemp" name="anh" class="form-control">
            </div>
            <button class="btn btn-success">Thêm khóa học</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>

    </div>
  </div>
</div>
</div>
</body>
</html>
