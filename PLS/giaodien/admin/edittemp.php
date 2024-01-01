<?php
$id= $_GET['sid'];

require_once 'ketnoi.php';

$edit_sql = "SELECT * FROM template WHERE id=$id";

$result = mysqli_query($conn, $edit_sql);
$row = mysqli_fetch_assoc($result);
?>

<!-- show infor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa template</title>
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
        <h1>Form sửa template</h1>
        <form action="updatetemp.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="sid" value="<?php echo $id;?>" id="">
            <div class="form-group">
                <label for="tentemp">Tên template</label>
                <input type="text" id="tentemp" class="form-control" 
                name="tentemp" value="<?php echo $row['tentemp']?>">
            </div>
            <div class="form-group">
                <label for="loaitemp">Loại template</label>
                <input type="text" id="loaitemp" name="loaitemp" class="form-control"
                value="<?php echo $row['loaitemp']?>">
            </div>
            <div class="form-group">
                <label for="anh">Ảnh template</label>
                <input type="file" id="anhtemp" name="anh" class="form-control"
                value="<?php echo $row['anh']?>">
            </div>
            <button class="btn btn-success">Cập nhật thông tin template</button>
        </form>
    </div>
   
</body>
</html> 