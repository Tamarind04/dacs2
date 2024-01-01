<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thay đổi mật khẩu</title>
	<link rel="stylesheet" type="text/css" href="changestyle.css">
</head>
<body>
<?php
function getPasswordFromDatabase($con, $userId) {
    $stmt = mysqli_prepare($con, "SELECT password FROM users WHERE id = ?");
    mysqli_stmt_bind_param($stmt, "i", $userId);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $hashedPassword);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    return $hashedPassword;
}
?>
    <?php
    include("connection.php");

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

    if(isset($_POST['re_password']))
    {
        // $old_pass = mysqli_real_escape_string($con, $old_pass);
        
        // $new_pass = mysqli_real_escape_string($con, $new_pass);
        // $re_pass = mysqli_real_escape_string($con, $re_pass);

        // $chg_pwd = mysqli_query($con, "SELECT * FROM users WHERE id='$id'");
        // $chg_pwd1 = mysqli_fetch_array($chg_pwd);
        // $data_pwd = $chg_pwd1['password'];

        // if($data_pwd==$old_pass){
        //     if($new_pass==$re_pass){
        //         $update_pwd = mysqli_query($con, "UPDATE users SET password='$new_pass' WHERE id='$id'");
        //         echo "<script>alert('Update Successfully'); window.location='change-password.php'</script>";
        //     }
        //     else {
        //         echo "<script>alert('Your new and retype password is not match'); window.location='change-password.php'</script>";
        //     }
        // }
        // else {
        //     echo "<script>alert('Your old password is not wrong'); window.location='change-password.php'</script>";
        // }
        $old_pass = mysqli_real_escape_string($con, $_POST['old_pass']);
        $new_pass = mysqli_real_escape_string($con, $_POST['new_pass']);
        $re_pass = mysqli_real_escape_string($con, $_POST['re_pass']);

    // Get hashed password from the database
    $hashedPasswordFromDB = getPasswordFromDatabase($con, $id);

    // Check if the entered old password matches the one in the database
   
    if (($old_pass== $hashedPasswordFromDB)) {
        if ($new_pass == $re_pass) {
            // Hash the new password before updating in the database
            // $hashed_new_pass = password_hash($new_pass, PASSWORD_DEFAULT);
            // $stmt = mysqli_prepare($con, "UPDATE users SET password=? WHERE id=?");
            // mysqli_stmt_bind_param($stmt,"si", $hashed_new_pass, $id);
            // mysqli_stmt_execute($stmt);
            // mysqli_stmt_close($stmt);
            $update_query = "UPDATE users SET password='$new_pass' WHERE id=$id";
            $update_result = mysqli_query($con, $update_query);
    
            echo "<script>alert('Update Successfully'); window.location='profile.php'</script>";
        } else {
            echo "<script>alert('Your new and retype password is not match'); window.location='change-password.php'</script>";
        }
    } else {
        // echo  $old_pass ; 
        // echo $hashedPasswordFromDB;
        echo "<script>alert('Your old password is not correct'); window.location='change-password.php'</script>";
    }
    }
    ?>
    <!-- <?php echo $id ?> -->
    <form method="post">
     	<h2>Thay đổi mật khẩu</h2>
     	<label>Mật khẩu hiện tại</label>
     	<input type="password" 
     	       name="old_pass" 
     	       placeholder="Mật khẩu hiện tại">
     	       <br>

     	<label>Mật khẩu mới</label>
     	<input type="password" 
     	       name="new_pass" 
     	       placeholder="Mật khẩu mới">
     	       <br>

     	<label>Xác nhận mật khẩu mới</label>
     	<input type="password" 
     	       name="re_pass" 
     	       placeholder="Xác nhận mật khẩu mới">
     	       <br>

     	<button name="re_password" type="submit">Thay đổi</button>
          <a href="profile.php" class="ca">Quay lại</a>
     </form>
</body>
</html>
