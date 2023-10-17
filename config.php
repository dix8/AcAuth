<?php
$servername = "localhost";
$username = "auth";
$password = "K4awXL3mswwLcrDb";
$dbname = "auth";

// 自定义key
$key = 'abc123';

// 当前版本号
$version = '1.0.0';

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}
?>
