<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/13
 * Time: 上午 11:32
 */session_start(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<?php
include("mysql_connect.inc.php");

$info = $_POST['info'];

$sql = "INSERT INTO book1 ( `info`)VALUES ('$info')";
if ($result = $link->query($sql)) {
    echo '<script >alert("新增成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
} else {
    echo '<script >alert("新增失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
?>