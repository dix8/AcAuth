<?php
// update.php
include 'config.php';

// 获取远程服务器上的最新版本号
$new_version = file_get_contents('https://auth.kek1.cn/version.php');

if ($version != $new_version) {
    echo "有新版本可用: " . $new_version;
} else {
    echo "当前已是最新版本";
}
