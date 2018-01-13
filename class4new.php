<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/13
 * Time: 下午 02:33
 */session_start(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<?php
include("mysql_connect.inc.php");
$date = $_POST['date'];
$info = $_POST['info'];

$sql = "INSERT INTO class4 ( `date`, `info`)VALUES ('$date','$info')";
if ($result = $link->query($sql)) {
    echo '<script >alert("新增成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
} else {
    echo '<script >alert("新增失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
?>