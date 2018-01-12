<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/12
 * Time: 下午 09:25
 */session_start(); ?>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    </head>
<?php
include("mysql_connect.inc.php");
$date = $_POST['date'];
$info = $_POST['info'];

$sql = "INSERT INTO board ( `date`, `info`)VALUES ('$date','$info')";
if ($result = $link->query($sql)) {
    echo '新增成功!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
} else {
    echo '新增失敗!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=allmember.php>';
}




?>