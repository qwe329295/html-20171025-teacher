<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/12
 * Time: 下午 06:05
 */session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("mysql_connect.inc.php");
$id=$_POST['id'];
$date=$_POST['date'];
$info=$_POST['info'];

$sql =" update board set `date`='$date',  info='$info' WHERE `id`=$id" ;
if($result = $link->query($sql))
{
    echo '<script >alert("修改成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
else
{
    echo '<script >alert("修改失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}





?>