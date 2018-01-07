<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:08
 */
session_start(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<?php
include("mysql_connect.inc.php");


$username = $_POST['id'];
$name = $_POST['name'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];


//判斷帳號密碼是否為空值
//確認密碼輸入的正確性
if ($username != null && $pw != null) {
    //新增資料進資料庫語法
    $sql = "INSERT INTO user ( `username`, `name`, `pw`, `e-mail`, `phone`) VALUES ('$username','$name', '$pw','$email', '$telephone')";
    if ($result = $link->query($sql)) {
        echo '新增成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    } else {
        echo '新增失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
    }
} else {
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>