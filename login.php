<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:52
 */
?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <audio autoplay loop>
    <source src="bluebird.mp3" type="audio/mpeg">
   </audio>
</head>
<body>
   <form name="form" method="post" action="connect.php">
       帳號：<input type="text" name="id" /> <br>
       密碼：<input type="password" name="pw" /> <br>
       <input type="submit" name="button" value="登入" />&nbsp;&nbsp;
       <a href="register.php">申請帳號</a>
   </form>
</body>
