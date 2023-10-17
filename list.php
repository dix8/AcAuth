<!DOCTYPE html>
<html>
<head>
    <title>显示所有数据</title>
    <link rel="stylesheet" type="text/css" href="css/data_list.css">
</head>
<body>
<?php
// 引入配置文件
include 'config.php';

// 查询所有数据
$sql = "SELECT * FROM auth";
$result = $conn->query($sql);

// 判断是否有数据
if ($result->num_rows > 0) {
    // 输出表格头部
    echo "<table>";
    echo "<tr><th>编号</th><th>QQ</th><th>内容</th></tr>";

    // 循环输出每一行数据
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td><td>" . $row["qq"] . "</td><td>" . $row["content"] . "</td></tr>";
    }

    // 输出表格尾部
    echo "</table>";
} else {
    // 没有数据时提示
    echo "<p>没有找到任何记录</p>";
}

// 关闭数据库连接
$conn->close();
?>
</body>
</html>
