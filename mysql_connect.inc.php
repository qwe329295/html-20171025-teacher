<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 11:26
 */?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
$db_server = "localhost";
$db_name = "105021028_";
$db_user = "105021028";
$db_passwd = "#tlX6iWYC";
if(!@$link=mysqli_connect($db_server,$db_user,$db_passwd,$db_name))
    die("無法對資料庫連線");
mysqli_query($link,"SET NAMES utf8");
if(!@mysqli_select_db($link,$db_name))
    die("無法使用資料庫");
?>