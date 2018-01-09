<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:10
 */session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("mysql_connect.inc.php");

$id = $_POST['id'];
$name=$_POST['name'];
$pw = sha1($_POST['pw']);
$telephone = $_POST['telephone'];
$email = $_POST['email'];

//紅色字體為判斷密碼是否填寫正確
if($_SESSION['id'] != null && $pw != null )
{
    $id = $_SESSION['id'];
    //更新資料庫資料語法
    $sql = "update user set name='$name',  pw='$pw', phone='$telephone', email='$email' where username='$id'";
    if($result = $link->query($sql))
    {
        echo '修改成功!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
    else
    {
        echo '修改失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=2;url=member.php>';
    }
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>
