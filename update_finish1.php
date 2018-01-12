<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2018/1/10
 * Time: 上午 10:26
 */session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("mysql_connect.inc.php");
$name=$_POST['name'];
$job=$_POST['job'];

$info=$_POST['info'];
$info1=$_POST['info1'];
$info2=$_POST['info2'];
$info3=$_POST['info3'];

$room=$_POST['room'];
$tel=$_POST['tel'];
$fax=$_POST['fax'];
$email=$_POST['email'];

$info4=$_POST['info4'];
$info5=$_POST['info5'];
$info6=$_POST['info6'];

$sql =" update firstpage1 set name='$name',  info='$job'" ;
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

$sql =" update firstpage2 set info='$info',  info1='$info1',info2='$info2',info3='$info3'" ;
if($result = $link->query($sql))
{
    echo '<script >alert("修改成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
else {
    echo '<script >alert("修改失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
$sql =" update firstpage3 set info='$room',  info1='$tel',info2='$fax',info3='$email'" ;
if($result = $link->query($sql))
{
    echo '<script >alert("修改成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
else {
    echo '<script >alert("修改失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
$sql =" update firstpage4 set info='$info4',  info1='$info5',info2='$info6'" ;
if($result = $link->query($sql))
{
    echo '<script >alert("修改成功!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
else {
    echo '<script >alert("修改失敗!")</script>';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}
?>