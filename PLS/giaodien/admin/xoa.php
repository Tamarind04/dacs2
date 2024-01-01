<?php
$khid = $_GET['sid'];
// echo $id;
require_once 'ketnoi.php';

$xoa_sql = "DELETE FROM khoahoc WHERE id=$khid";

mysqli_query($conn, $xoa_sql);
// echo "<h1>Xóa thành công</h1>";

header("Location: lietke.php");