<?php
include 'config.php';

if(isset($_GET['key']) && $_GET['key'] == $key) {
    if(isset($_GET['qq']) && !empty($_GET['qq'])) {
        $qq = $_GET['qq'];
        if(isset($_GET['content']) && !empty($_GET['content'])) {
            $content = $_GET['content'];
            if(isset($_GET['new_content']) && !empty($_GET['new_content'])) {
                $new_content = $_GET['new_content'];
                
                // 检查qq和content是否已经存在
                $checkSql = "SELECT * FROM auth WHERE qq = '$qq' AND content = '$content'";
                $result = $conn->query($checkSql);

                if ($result->num_rows > 0) {
                    // 检查新的内容是否已经存在
                    $checkNewContentSql = "SELECT * FROM auth WHERE content = '$new_content'";
                    $newContentResult = $conn->query($checkNewContentSql);

                    if ($newContentResult->num_rows > 0) {
                        echo '记录已存在，修改失败！';
                    } else {
                        // 更新已存在的记录
                        $sql = "UPDATE auth SET content = '$new_content' WHERE qq = '$qq' AND content = '$content'";

                        if ($conn->query($sql) === TRUE) {
                            echo "记录更新成功";
                        } else {
                            echo "Error: " . $sql . "<br>" . $conn->error;
                        }
                    }
                } else {
                    echo '记录不存在';
                }
            } else {
                echo '请输入要修改的新内容';
            }
        } else {
            echo '请输入要修改的内容';
        }
    } else {
        echo '请输入qq';
    }
} elseif(isset($_GET['key']) && $_GET['key'] != $key) {
    echo 'key不正确';
}
$conn->close();
?>
