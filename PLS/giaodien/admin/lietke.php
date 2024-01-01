  <?php
 session_start();

 include("ketnoi.php");
 include("functions.php");

 $c_login = check_login($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liệt kê danh sách khóa học</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
  select {
    word-wrap: normal;
    width: 200px;
    margin: 0 0 10px 0;
    height: 35px;
}
</style>
<body>
    <div class="container">
        <h1>Danh sách khoa học</h1>
        
<!-- Button to Open the Modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Thêm khóa học
</button>
<a href="quanlyuser.php"><button class="btn btn-primary" id="quanlykhoahoc" >Quản lý người dùng</button></a>
<!-- Trang chủ -->
</button>
</button>
<a href="quanlytemp.php"><button class="btn btn-primary" id="quanlytemp" >Quản lý template</button></a>
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
<form method="GET" action="">
    <!-- Các thành phần form khác ở đây -->
    <div class="sapxep">
        <select name="phanloai" class="form-select">
                <option value="">Phân loại</option>
                <option value="Cơ bản" <?php isset($_GET['phanloai']) == true ? ($_GET['phanloai'] == 'Cơ bản' ? 'selected':'') :'' ?> >Cơ bản</option>
                <option value="Nângcao" <?php isset($_GET['phanloai']) == true ? ($_GET['phanloai'] == 'Nâng cao' ? 'selected':'') :'' ?>>Nâng cao</option>
        </select>
        <select name="status" class="form-select">
            <option value="">Bộ lọc</option>
            <option value="PowerPoint" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'PowerPoint' ? 'selected':'') :'' ?> >PowerPoint</option>
            <option value="Word" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'Word' ? 'selected':'') :'' ?>>Word</option>
            <option value="Excel" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'Excel' ? 'selected':'') :'' ?>>Excel</option>
            <option value="Outlook" <?php isset($_GET['status']) == true ? ($_GET['status'] == 'Outlook' ? 'selected':'') :'' ?>>Outlook</option>
        </select>
    </div>
    <div class="filter">
        <!-- Đây là nút gửi -->
        <button style="margin-bottom: 10px; width: 80px" type="submit" class="btn btn-primary">Lọc</button>
        <a style="margin-bottom: 10px; width: 80px" href="lietke.php" class="btn btn-danger">Reset</a>
    </div>
</form>
        <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Tên khóa học</th>
        <th>Mã khóa học</th>
        <th>Loại khóa học</th>
        <th>Ảnh khóa học</th>
        <th>Phân loại khóa học</th>
        <th>Năm</th>
        <th>Video</th>
        <th>Thao tác</th>
        
      </tr>
    </thead>
    <tbody>
    <?php 
require_once 'ketnoi.php';

$lietke_sql = "SELECT * FROM khoahoc"; // Initialize with a default value

if(isset($_GET['phanloai']) && $_GET['phanloai'] == '' && isset($_GET['status']) && $_GET['status'] != ''){
    $phanloai = mysqli_real_escape_string($conn,$_GET['phanloai']);
    $status = mysqli_real_escape_string($conn,$_GET['status']);
    $lietke_sql = "SELECT * FROM khoahoc WHERE loaikhoahoc='$status' ";
} 
if(isset($_GET['phanloai']) && $_GET['phanloai'] != '' && isset($_GET['status']) && $_GET['status'] == ''){
    $phanloai = mysqli_real_escape_string($conn,$_GET['phanloai']);
    $status = mysqli_real_escape_string($conn,$_GET['status']);
    $lietke_sql = "SELECT * FROM khoahoc WHERE phanloai='$phanloai' ";
} 

if(isset($_GET['phanloai']) && $_GET['phanloai'] == '' && isset($_GET['status']) && $_GET['status'] == ''){
    $phanloai = mysqli_real_escape_string($conn,$_GET['phanloai']);
    $status = mysqli_real_escape_string($conn,$_GET['status']);
    $lietke_sql = "SELECT * FROM khoahoc";
} 

if(isset($_GET['phanloai']) && $_GET['phanloai'] != '' && isset($_GET['status']) && $_GET['status'] != ''){
  $phanloai = mysqli_real_escape_string($conn,$_GET['phanloai']);
  $status = mysqli_real_escape_string($conn,$_GET['status']);
  $lietke_sql = "SELECT * FROM khoahoc WHERE phanloai='$phanloai' AND loaikhoahoc='$status'";
}

$result = mysqli_query($conn, $lietke_sql);

if($result) {
    while ($r = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $r['tenkhoahoc'];?></td>
            <td><?php echo $r['makhoahoc'];?></td>
            <td><?php echo $r['loaikhoahoc'];?></td>
            <td><?php echo $r['anh'];?></td>
            <td><?php echo $r['phanloai'];?></td>
            <td><?php echo $r['nam'];?></td>
            <td><?php echo $r['video'] ?></td>
            <td style="display: inline-block;" ><a href="edit.php?sid=<?php echo $r['id'];?>" class="btn btn-info" >Sửa</a> 
            <a onclick="return confirm('Bạn có muốn xóa khóa học này không');" href="xoa.php?sid=<?php echo $r['id'];?>" class="btn btn-danger" >Xóa</a> </td>
        </tr>
    <?php
    }
}
?>

    </tbody>
  </table>

    </div>

    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Form thêm khóa học</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <form action="add.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="tenkhoahoc">Tên khóa học</label>
                <input type="text" id="tenkhoahoc" class="form-control" name="tenkhoahoc">
            </div>
            <div class="form-group">
                <label for="makhoahoc">Mã khóa học</label>
                <input type="text" name="makhoahoc" id="makhoahoc" class="form-control">
            </div>
            <div class="form-group">
                <label for="loaikhoahoc">Loại khóa học</label>
                <input type="text" id="loaikhoahoc" name="loaikhoahoc" class="form-control">
            </div>
            <div class="form-group">
                <label for="loaikhoahoc">Ảnh khóa học</label>
                <input type="file" id="anhkhoahoc" name="anh" class="form-control">
            </div>
            <div class="form-group">
                <label for="loaikhoahoc">Phân loại khóa học</label>
                <select id="phanloai" class="form-control" onchange="chonPhanLoai()">
                    <option>Cơ bản</option>
                    <option>Nâng cao</option>
                </select>
                <input type="text" id="phanloaikhoahoc" name="phanloai" class="form-control"
                value="Cơ bản" hidden>
              <div class="form-group">
                <label for="nam">Năm</label>
                <input type="number" id="nam" name="nam" class="form-control">
              </div>
              <div class="form-group">
                <label for="video">Video</label>
                <input type="text" id="video" name="video" class="form-control">
              </div>
            <button class="btn btn-success">Thêm khóa học</button>
        </form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
<script>
        console.log("aaaa");
  function chonPhanLoai() {
    var selectBox = document.getElementById("phanloai");
    var selectedValue = selectBox.options[selectBox.selectedIndex].text;

    var phanLoaiKhoaHocInput = document.getElementById("phanloaikhoahoc");
    phanLoaiKhoaHocInput.value = selectedValue;

    console.log("abc" + phanLoaiKhoaHocInput.value);
  }
</script>
</body>
</html>
