<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/12
 * Time: 下午 08:47
 */session_start(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<?php
include("mysql_connect.inc.php");
$id = $_POST['id'];

//刪除資料庫資料語法
$sql = "delete from book3 where id ='$id'";
if($result = $link->query($sql))
{
    echo '<script >alert("刪除成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
else
{
    echo '<script >alert("刪除失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}

?>