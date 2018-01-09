<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:09
 */ session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include("mysql_connect.inc.php");

if($_SESSION['id'] != null)
{
    //將$_SESSION['username']丟給$id
    //這樣在下SQL語法時才可以給搜尋的值
    $id = $_SESSION['id'];
    //若以下$id直接用$_SESSION['username']將無法使用
    $sql = "SELECT * FROM user where username='$id'";
    $result = mysqli_query($link,$sql);
    $row = mysqli_fetch_row($result);

    echo "<form name=\"form\" method=\"post\" action=\"update_finish.php\">";
    echo "id:<input type=\"text\" name=\"\" value=\"$row[0]\" /><br>";
    echo "帳號：<input type=\"text\" name=\"\" value=\"$row[1]\" /> <br>";
    echo "姓名：<input type=\"text\" name=\"name\" value=\"$row[2]\" /> <br>";
    echo "密碼：<input type=\"password\" name=\"pw\" value=\"\" /> <br>";
    echo "E-mail：<input type=\"text\" name=\"email\" value=\"$row[4]\" /> <br>";
    echo "電話：<input type=\"text\" name=\"telephone\" value=\"$row[5]\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"確定\" />";
    echo "</form>";

}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=index.php>';
}
?>