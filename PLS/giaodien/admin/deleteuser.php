<?php
$khid = $_GET['sid'];
// echo $id;
require_once 'adminloginconn.php';

$xoa_sql = "DELETE FROM users WHERE id=$khid";

mysqli_query($conn, $xoa_sql);
// echo "<h1>Xóa thành công</h1>";

header("Location: quanlyuser.php");