<?php

    require_once './admin/ketnoi.php';
    $id = '';
        $ten = '';
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }
        if(isset($_GET['ten'])) {
            $ten = $_GET['ten'];
        }

    $getname = "SELECT tenkhoahoc FROM khoahoc WHERE id='$id' ";

    $truyvan = mysqli_query($conn, $getname);

    $prd_name = mysqli_fetch_array($truyvan)['tenkhoahoc'];
    
    echo $prd_name;

   $sql_binhluan = "SELECT users.user_name, noidung, binhluan.date
   FROM binhluan INNER JOIN khoahoc INNER JOIN users
   ON binhluan.id=khoahoc.id AND binhluan.user_name=users.user_name
   WHERE tenkhoahoc LIKE '%$prd_name%'
   ORDER BY id_comm DESC  LIMIT 0,5
   ";

   $result = mysqli_query($conn, $sql_binhluan);

   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quinn-Project</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="binhluan.css">
</head>
<body>

    <div class="comment-session">
        <div class="post-comment">
            <?php foreach($result as $ketqua) { ?>
                <div class="comment-list">  
                <div class="flex">
                    <div class="user">
                        <!-- <div class="user-image"><img src="userimg/anhdaidien.jpg" alt=""></div> -->
                        <div class="user-meta">
                            <div class="name"><?php echo $ketqua ['user_name'] ?></div>
                            <div class="day"><?php echo $ketqua ['date'] ?></div>
                        </div>
                    </div>
                    <div class="reply">
                        <!-- <div class="re-comment">Reply</div> -->
                    </div>
                </div>
                <div class="comment">
                <?php echo $ketqua ['noidung'] ?>
                </div>
            </div>
<?php
   } ?>
            
            <?php


$name = "";
$user_id = $_SESSION['user_id'];

$query = "SELECT * FROM users WHERE user_id = $user_id";
$result = mysqli_query($conn, $query);
if($result -> num_rows > 0) {
   $user_data = mysqli_fetch_assoc($result);
   $name = $user_data['user_name'];
}

?>
            <form action="them_binhluan.php?id=<?php echo $id ?>" method="post" class="comment-box">
                <div class="user">
                    <!-- <div class="image"><img src="userimg/anhdaidien.jpg" alt=""></div> -->
                    <div style="text-transform: uppercase;" class="name"><?php echo $name ?></div>
                </div>
                <textarea name="noidung"></textarea>
                <button type="submit" class="comment-submit">Comment</button>
            </form>
        </div>
    </div>

</body>
</html>