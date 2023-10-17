<?php
include 'config.php';

if(isset($_GET['content'])) {
    $content = $_GET['content'];
    $sql = "SELECT id FROM auth WHERE content='$content'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '1';
    } else {
        echo '0';
    }
} else {
    echo '请输入参数';
}
$conn->close();
?>
