<?php
session_start();
include ('func.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title> 陳瑞奇(Jui-Chi Chen)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Hanalei" rel="stylesheet">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #000000;
            padding: 25px;
            text-shadow: 5px 5px 8px rgb(255, 2, 0);
            font-size: 2em;
        }
    </style>
</head>
<body style="background-color:#b0b0b0">

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="http://www.asia.edu.tw/"><img src="asia.png" width="110"></a>


        </div>
      <?php bar(4)?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110"></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
    <h2>無線網路<br />Wireless Networks</h2>

    <table width="90%" border="1" style="font-size: 2em;border:3px #FFAC55 solid;">

        <tr><td width="14%" class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a></td></tr>
        <?php
        include("mysql_connect.inc.php");

        $sql = "SELECT * FROM class3";
        $result = $link->query($sql);
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo " <td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "</tr>";
        }
        ?>
    </table><br />
    <center>
        ※以下部分檔案為PDF格式，請上網下載安裝Adobe Acrobat Reader中文版。
        <br />※以下教材及相關內容屬原作者、原公司所有，僅供本校學生修課學習使用，不可從事散播、商業或其他非法行為。<br />
        <a href="http://dns2.asia.edu.tw/~rikki" target=_blank>[開Rikki老師首頁Homepage]<img src="../img/home01.gif" border="0" height="50" alt="Rikki's home" /></a><br /><br />
        <table  class="table2" width="80%"style="border:3px #FFD382 dashed;margin-bottom: 20px;">
            <tr><td  width="5%"></td><td><font size=4 color=red>Course slides (上課投影片):</font></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td  width="5%"></td><td><a href="wcs-ch00-syllabus.pdf">Chapter 0. Syllabus (課程大綱)</a> (3.4MB) <a href="wcs-ch00CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td><a href="wcs-ch01.pdf">Chapter 1. Introduction (序論) (2.9MB)</a> <a href="wcs-ch01CN.pdf">簡體中文版</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter1.pdf">Possible solutions for Chapter 1 exercises</a> </td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch03.pdf">Chapter 3. Mobile Radio Propagation (行動無線電傳播)</a> (2.1MB) <a href="wcs-ch03CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter3.pdf">Possible solutions for Chapter 3 exercises</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="wcs-hw1.pdf">作業一題目</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch04.pdf">Chapter 4. Channel Coding and Error Control (通道編碼與錯誤控制)</a> (2.6MB)  <a href="wcs-ch04CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter4.pdf">Possible solutions for Chapter 4 exercises</a> </td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch05.pdf">Chapter 5. Cellular Concept (蜂巢式概念)</a> (1.4MB)  <a href="wcs-ch05CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter5.pdf">Possible solutions for Chapter 5 exercises</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="wcs-hw2.pdf">作業2題目</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch06.pdf">Chapter 6. Multiple Radio Access (多重無線電存取)</a> (1.7MB) <a href="wcs-ch06CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter6.pdf">Possible solutions for Chapter 6 exercises</a> </td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch07.pdf">Chapter 7. Multiple Division Techniques (多重分工技術)</a> (1.6MB) <a href="wcs-ch07CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter7.pdf">Possible solutions for Chapter 7 exercises</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch09.pdf">Chapter 9. Mobile Communication Systems (行動通訊系統) 含作業3題目(在最後)</a> (2.9MB) <a href="wcs-ch09CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter9.pdf">Possible solutions for Chapter 9 exercises</a>  </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="wcs-hw3.pdf">作業3題目</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch10-1.pdf">Chapter 10-1. Existing Wireless Systems (現有無線系統) Part I</a> (0.9MB) (僅供參考)</td></tr>
            <tr><td></td><td><a href="wcs-ch10-2.pdf">Chapter 10-2. Existing Wireless Systems (現有無線系統) Part II</a> (1.9MB)  <a href="wcs-ch10-2CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter10.pdf">Possible solutions for Chapter 10 exercises</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch11.pdf">Chapter 11. Satellite Systems (衛星系統) 含作業4題目(在最後)</a> (3.3MB)  <a href="wcs-ch11CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter11.pdf">Possible solutions for Chapter 11 exercises</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="wcs-hw4.pdf">作業4題目</a></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch13.pdf">Chapter 13-1. Ad Hoc and Sensor Networks (無基礎架構網路與感測網路)</a> (3.2MB)  <a href="wcs-ch13CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td><a href="wcs-ch13-2.pdf">Chapter 13-2. Internet of Things (物聯網簡介)</a> (4.9MB)  </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter13.pdf">Possible solutions for Chapter 13 exercises</a> </td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch14p1.pdf">Chapter 14-1. WLANs(無線區域網路)802.11 WiFi實務與討論</a> (7.1MB)  <a href="wcs-ch14-1CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="https://sourceforge.net/projects/vistumbler/files/latest/download" target="_blank">無線網路WiFi AP掃描軟體</a>(等五秒自動下載)(安裝執行後按左上角[Scan APs]按鈕即可)</td></tr>
            <tr><td></td><td><br /></tr>


            <tr><td></td><td><a href="wcs-ch14p2.pdf">Chapter 14-2. Wireless MANs, LANs, and PANs (無線都會、區域與個人近身網路)</a> (2.0MB)  <a href="wcs-ch14-2CN.pdf">簡體中文版</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter14.pdf">Possible solutions for Chapter 14 exercises</a> <img src="../img/new2.gif"></td></tr>
            <tr><td></td><td><br /></tr>
            <tr><td></td><td><a href="wcs-ch15.pdf">Chapter 15. Recent Advances (近期發展)</a> (0.0MB) </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter15.pdf">Possible solutions for Chapter 15 exercises</a> </td></tr>
            <tr><td></td><td><a href="wcs-ch12.pdf">Chapter 12. Network Protocols (網路協定)</a> (0.0MB) </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter12.pdf">Possible solutions for Chapter 12 exercises</a> </td></tr>
            <tr><td></td><td><a href="wcs-ch08.pdf">Chapter 8. Channel Allocation (通道分配)</a> (0.0MB) </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;<font color=red>*** </font><a href="Chapter8.pdf">Possible solutions for Chapter 8 exercises</a> </td></tr>
            <tr><td></td><td><a href="wcs-ch02.pdf">Chapter 2. Probability, Statistics, and Traffic Theories (機率、統計與流量理論)</a> (0.0MB) </td></tr>
            <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
        </table>
    </center>



    <footer class="container-fluid text-center">
        <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    </footer>

</body>
</html>