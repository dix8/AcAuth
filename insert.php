<?php
include 'config.php';

if(isset($_GET['key']) && $_GET['key'] == $key) {
    if(isset($_GET['qq']) && !empty($_GET['qq'])) {
        $qq = $_GET['qq'];
        if(isset($_GET['content']) && !empty($_GET['content'])) {
            $content = $_GET['content'];
            
            // 检查内容是否已经存在
            $checkSql = "SELECT * FROM auth WHERE content = '$content'";
            $result = $conn->query($checkSql);

            if ($result->num_rows > 0) {
                echo "记录已存在";
            } else {
                $sql = "INSERT INTO auth (qq, content) VALUES ('$qq', '$content')";

                if ($conn->query($sql) === TRUE) {
                    echo "新记录插入成功";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        } else {
            echo '请输入要添加的内容';
        }
    } else {
        echo '请输入qq';
    }
} elseif(isset($_GET['key']) && $_GET['key'] != $key) {
    echo 'key不正确';
}
$conn->close();
?>
