<?php
session_start();
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2018/1/10
 * Time: 下午 12:33
 */ ?>
<html lang="en">
<head>
    <title>控制台</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .nav-tabs > li > a, .nav > li > a, a {
            color: #000000;
            font-weight: bold;
        }
    </style>
</head>
<body background="hill.jpg" style="background-size: 100%; ">

<div class="container">
    <h2>CONTROL YOURSELF</h2>
    <p>UPDATE ,DELETE OR MODIFY</p>
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#home">首頁</a></li>
        <li><a data-toggle="tab" href="#menu1">重要訊息公告</a></li>
        <li><a data-toggle="tab" href="#menu2">計算機組織</a></li>
        <li><a data-toggle="tab" href="#menu3">微處理器系統</a></li>
        <li><a data-toggle="tab" href="#menu4">無線網路</a></li>
        <li><a data-toggle="tab" href="#menu5">多媒體網站技術</a></li>
        <li><a data-toggle="tab" href="#menu6">嵌入式系統</a></li>
        <li><a data-toggle="tab" href="#menu7">網站分析與管理</a></li>
        <li><a data-toggle="tab" href="#menu8">著作</a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <?php
            include("mysql_connect.inc.php");

            $sql = "SELECT * FROM firstpage1";
            $result = $link->query($sql);

            echo "<form  method=\"post\" action=\"update_finish1.php\">";
            while ($row = mysqli_fetch_row($result)) {

                echo "姓名:<input type=\"text\" name=\"name\" value=\"$row[1]\"size='50px' /><br>";
                echo "任職單位:<input type=\"text\" name=\"job\" value=\"$row[2]\" size='50px'/><br>";


            }
            $sql = "SELECT * FROM firstpage2";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<input type=\"text\" name=\"info\" value=\"$row[1]\" size='50px'/><br>";
                echo "<input type=\"text\" name=\"info1\" value=\"$row[2]\" size='50px'/><br>";
                echo "<input type=\"text\" name=\"info2\" value=\"$row[3]\"size='50px'/><br>";
                echo "<input type=\"text\" name=\"info3\" value=\"$row[4]\" size='50px'/><br>";
            }

            $sql = "SELECT * FROM firstpage3";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<input type=\"text\" name=\"room\" value=\"$row[1]\" size='50px'/><br>";
                echo "Tel:<input type=\"text\" name=\"tel\" value=\"$row[2]\" size='50px'/><br>";
                echo "Fax:<input type=\"text\" name=\"fax\" value=\"$row[3]\" size='50px'/><br>";
                echo "E-mail:<input type=\"text\" name=\"email\" value=\"$row[4]\" size='50px'/><br>";
            }

            $sql = "SELECT * FROM firstpage4";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<input type=\"text\" name=\"info4\" value=\"$row[1]\" size='50px'/><br>";
                echo "<input type=\"text\" name=\"info5\" value=\"$row[2]\"size='50px'/><br>";
                echo "<input type=\"text\" name=\"info6\" value=\"$row[3]\"size='50px'/><br>";
            }
            echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
            echo "</form>";

            ?>

        </div>
        <div id="menu1" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM board";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"boardupdate.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" size='50px'/>";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\"size='50px' />";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\" size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"boarddelete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"boardnew.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\" size='50px'/> ";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\" size='50px'/> ";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>


        </div>
        <div id="menu2" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM class1";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"class1update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\" size='50px'/>";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\" size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"class1delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"class1new.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\" size='50px'/>";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\" size='50px'/>";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>
        </div>
        <div id="menu3" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM class2";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"class2update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\"size='50px'/>";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\"size='50px' />";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"class2delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"class2new.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\"size='50px'/>";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\"size='50px' />";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>
        </div>
        <div id="menu4" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM class3";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"class3update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\" size='50px'/>";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\"size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"class3delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"class3new.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\"size='50px' />";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\" size='50px'/>";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>
        </div>
        <div id="menu5" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM class4";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"class4update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\" size='50px'/>";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\"size='50px' />";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"class4delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"class4new.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\" size='50px'/>";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\"size='50px' />";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>
        </div>
        <div id="menu6" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM class5";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"class5update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"date\" name=\"date\" value=\"$row[1]\"size='50px' />";
                echo "<input type=\"text\" name=\"info\" value=\"$row[2]\" size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"class5delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"class5new.php\">";
            echo "<span style='color:whitesmoke '>日期：</span><input type = \"date\" name = \"date\" value=\"$row[1]\"size='50px' />";
            echo "<span style='color:whitesmoke '>事件：</span><input type = \"text\" name = \"info\" value=\"$row[2]\"size='50px' />";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>
        </div>
        <div id="menu7" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p></p>
        </div>
        <div id="menu8" class="tab-pane fade">
            <?php

            $sql = "SELECT * FROM book1";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
//                echo "$row[1]";
                echo "<form  method=\"post\" action=\"book1update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type='text' name='info' value='$row[1]' size='50px' />";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"book1delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"book1new.php\">";
            echo "<span style='color:whitesmoke '></span><input type = \"text\" name = \"info\" value=\"$row[1]\"size='50px' />";


            $sql = "SELECT * FROM book2";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"book2update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"text\" name=\"info\" value=\"$row[1]\" size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"book2delete.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"book2new.php\">";
            echo "<span style='color:whitesmoke '></span><input type = \"text\" name = \"info\" value=\"$row[1]\" size='50px'/>";



            $sql = "SELECT * FROM book3";
            $result = $link->query($sql);
            while ($row = mysqli_fetch_row($result)) {
                echo "<form  method=\"post\" action=\"book3update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"text\" name=\"info\" value=\"$row[1]\"size='50px'/>";
                echo "<input type=\"submit\" name=\"button\" value=\"修改\" />";
                echo "</form>";

                echo "<form name=\"form\" method=\"post\" action=\"book3update.php\">";
                echo "<input type=\"hidden\" name=\"id\" value=\"$row[0]\" />";
                echo "<input type=\"submit\" name=\"button\" value=\"刪除\" />";
                echo "</form>";
            }

            echo "<form name=\"form\" method=\"post\" action = \"book3new.php\">";
            echo "<span style='color:whitesmoke '></span><input type = \"text\" name = \"info\" value=\"$row[1]\" size='50px'/>";
            echo "<input type = \"submit\" name = \"button\" value = \"新增資料\" />";
            echo "</form >";
            ?>

        </div>


    </div>
</div>
<footer>
    <p style="font-size: small;color:whitesmoke">圖片來源 http://www.jordangrimmer.co.uk/q6uergcr3pm6d8d545g47ufqx9mcbx</p>

</footer>

</body>
</html>
