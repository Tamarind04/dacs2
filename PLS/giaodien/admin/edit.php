<?php
$id= $_GET['sid'];

require_once 'ketnoi.php';

$edit_sql = "SELECT * FROM khoahoc WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- show infor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa khóa học</title>
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
        <h1>Form sửa khóa học</h1>
        <form action="update.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="tenkhoahoc">Tên khóa học</label>
                <input type="text" id="tenkhoahoc" class="form-control" 
                name="tenkhoahoc" value="<?php echo $row['tenkhoahoc']?>">
            </div>
            <div class="form-group">
                <label for="makhoahoc">Mã khóa học</label>
                <input type="text" name="makhoahoc" id="makhoahoc" class="form-control" 
                value="<?php echo $row['makhoahoc']?>">
            </div>
            <div class="form-group">
                <label for="loaikhoahoc">Loại khóa học</label>
                <input type="text" id="loaikhoahoc" name="loaikhoahoc" class="form-control"
                value="<?php echo $row['loaikhoahoc']?>">
            </div>
            <div class="form-group">
                <label for="anh">Ảnh khóa học</label>
                <input type="file" id="anhkhoahoc" name="anh" class="form-control"
                value="<?php echo $row['anh']?>">
            </div>
            <div class="form-group">
                <label for="phanloai">Phân loại khóa học</label>
                <select id="phanloai" class="form-control" onchange="chonPhanLoai()">
                    <option>Cơ bản</option>
                    <option>Nâng cao</option>
                </select>
                <input type="text" id="phanloaikhoahoc" name="phanloai" class="form-control"
                value="Cơ bản" hidden >
            </div>
            <div class="form-group">
                <label for="nam">Năm</label>
                <input type="number" id="nam" name="nam" class="form-control"
                value="<?php echo $row['nam']?>">
            </div>
            <div class="form-group">
                <label for="video">Video</label>
                <input type="text" id="video" name="video" class="form-control"
                value="<?php echo $row['video']?>">
            </div>
            <button class="btn btn-success">Cập nhật thông tin khóa học</button>
        </form>
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