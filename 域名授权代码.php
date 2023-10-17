<?php
if(!isset($_SESSION['authcode'])) {
    $query = file_get_contents('https://auth.kek1.cn/check.php?content='.$_SERVER['HTTP_HOST']);
    $query = json_decode($query, true);
    if($query == '1') {
        $_SESSION['authcode'] = $authcode;
    } else {
        exit('<h3>'.file_get_contents('https://auth.kek1.cn/a.php').'</h3>');
    }
}
echo "dsffdsdfsd";
?>
