<?php
session_start();
 include("connection.php");
 include("functions.php");
 $c_login = check_login($con);
 ?>
<?php
 $name = "";
 $hovaten ="";
 $user_email ="";
 $id ="";
 $user_id = $_SESSION['user_id']; 

 $query = "SELECT * FROM users WHERE user_id = $user_id";
 $result = mysqli_query($con, $query);
 if($result -> num_rows > 0) {
    $user_data = mysqli_fetch_assoc($result);
    $name = $user_data['user_name'];
    $hovaten = $user_data['hovaten'];
    $user_email = $user_data['email'];  
    $id = $user_data['id'];
 }
    
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hồ sơ cá nhân</title>
    <link rel="stylesheet" href="profile.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    
    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">
            Hồ sơ của tôi
        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">Hồ sơ cá nhân</a>
                           
                        <a class="list-group-item list-group-item-action"
                            href="change-password.php?id=<?php echo $id ?>">Thay đổi mật khẩu</a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                                <!-- <img id="anhhoso" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt
                                    class="d-block ui-w-80"> -->
                                <div class="media-body ml-4">
                                    <p>Xin chào <?php echo $hovaten ?></p>
                                    <!-- <label class="btn btn-outline-primary">
                                        Chọn ảnh
                                        <input type="file" class="account-settings-fileinput">
                                    </label> &nbsp; -->
                                    <a href="index.php"><button type="button" class="btn btn-primary">Trang chủ</button></a>
                    
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <form class="card-body">
                                <div class="form-group">
                                    <label class="form-label">Tên đăg nhập</label>
                                    <input disabled type="text" class="form-control mb-1" value="<?php echo $name ?>">
                                    
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Tên</label>
                                    <input disabled type="text" class="form-control" value="<?php echo $hovaten ?>">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input disabled type="text" class="form-control mb-1" value="<?php echo $user_email ?>">
                                </div>
                            </form>
                            <?php 
                                $lietke_sql = "SELECT * FROM users WHERE user_name = '$name' ";

                                $result = mysqli_query($con, $lietke_sql);
                                while ($r = mysqli_fetch_assoc($result)) {
                                    ?>
                                <div class="text-right mt-3">
                                    <a href="editprofile.php?sid=<?php echo $r['id'];?>"><button type="button" class="btn btn-primary">Sửa hồ sơ</button></a>&nbsp;
                                    <a href="logout.php"><button type="button" class="btn btn-primary">Đăng xuất</button></a>
                                </div>
                                <?php
                                }
                                ?>
                        </div>
                        <div class="tab-pane fade" id="account-change-password">
                                <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
                        
                            <form action="./profile.php?action=edit" method="post" class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Mật khẩu hiện tại</label>
                                    <input id="password" name="password" type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Mật khẩu mới</label>
                                    <input id="newpassword" name="newpassword" type="password" class="form-control">
                                </div>
                                <!-- <div class="form-group">
                                    <label class="form-label">Nhập lại mật khẩu</label>
                                    <input id="repassword" name="repassword" type="password" class="form-control">
                                </div> -->
                                <div class="text-right mt-3">
                                    <button type="submit" id="submit" name="submit" class="btn btn-primary">Đổi mật khẩu</button>&nbsp;
                                    <a href="logout.php"><button type="button" class="btn btn-default">Đăng xuất</button></a>
                                </div>
                            </form>
                                
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
    var avatarInput =document.querySelector('.account-settings-fileinput');
    var userAvatar =document.getElementById('anhhoso');
    avatarInput.addEventListener('change',function(e){
    var file = e.target.files[0];

    if(file){
        var fileReader = new FileReader();

        fileReader.onload = function(e){
            userAvatar.src = e.target.result;
        };

        fileReader.readAsDataURL(file);
    }
});     
    </script>
    <script src="./checkPass.js"></script>
</body>

</html>