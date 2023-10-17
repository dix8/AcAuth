<?php
include 'config.php';

if(isset($_GET['key']) && $_GET['key'] == $key) {
    if(isset($_GET['qq']) && !empty($_GET['qq'])) {
        $qq = $_GET['qq'];
        if(isset($_GET['content']) && !empty($_GET['content'])) {
            $content = $_GET['content'];
            
            // 检查qq和content是否已经存在
            $checkSql = "SELECT * FROM auth WHERE qq = '$qq' AND content = '$content'";
            $result = $conn->query($checkSql);

            if ($result->num_rows > 0) {
                // 删除已存在的记录
                $sql = "DELETE FROM auth WHERE qq = '$qq' AND content = '$content'";

                if ($conn->query($sql) === TRUE) {
                    echo "记录删除成功";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            } else {
                echo '记录不存在';
            }
        } else {
            echo '请输入要删除的内容';
        }
    } else {
        echo '请输入qq';
    }
} elseif(isset($_GET['key']) && $_GET['key'] != $key) {
    echo 'key不正确';
}
$conn->close();
?>
