<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/29
 * Time: 上午 11:11
 */session_start(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
if($_SESSION['id'] != null)
{
    echo "<form name=\"form\" method=\"post\" action=\"delete_finish.php\">";
    echo "要刪除的帳號：<input type=\"text\" name=\"id\" /> <br>";
    echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
    echo "</form>";
}
else
{
    echo '您無權限觀看此頁面!';
    echo '<meta http-equiv=REFRESH CONTENT=2;url=login.php>';
}
?>
