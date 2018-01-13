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
     <?php bar(5)?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110"></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
    <h2><font face=標楷體>多媒體網站技術應用</font><br />
        Multimedia Web Technologies</h2>
    <table width="90%" border="1" style="font-size: 2em;border:3px #FFAC55 solid;">
        <tr><td width="14%" class="td1"> 日期(Date)</td><td class="td1"> 公 告 事 項 (Information)<a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a></td></tr>
        <?php
        include("mysql_connect.inc.php");

        $sql = "SELECT * FROM class4";
        $result = $link->query($sql);
        while ($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo " <td>$row[1]</td>";
            echo "<td>$row[2]</td>";
            echo "</tr>";
        }
        ?>
    </table><br />
    <CENTER>
        ※以下部分檔案為PDF格式，請上網下載安裝Adobe Acrobat Reader中文版。
        <br />※以下部分教材及相關內容屬原作者、原公司所有，僅供本校學生修課學習使用，不可從事散播、商業或其他非法行為。<br />
        <a href="http://dns2.asia.edu.tw/~rikki" target=_blank>[開Rikki老師首頁Homepage]<img src="../img/home01.gif" border="0" height="50" alt="Rikki's home" /></a><br />
        <br />

        <table  class="table2" width="100%"style="border:3px #FFD382 dashed;margin-bottom: 20px;">
            <tr><td  width="5%"></td><td><font size=4 color=red>Course slides (上課投影片):</font></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td><a href="mwt-ch00-1syllabus.pdf">Chapter 0-1. Syllabus (課程大綱)</a> (1.9MB) <a href="mwt-ch00-1syllabus.pdf">簡體中文版</a><br /></td></td></tr>
            <tr><td></td><td><a href="mwt-ch00-2intro.pdf">Chapter 0-2. 網站企劃概念</a> (8.5MB) <a href="mwt-ch00-2CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3.org/History.html" target=_blank>A Little History of the World Wide Web</a> (Link)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="mwt-ch00-3html.pdf">Chapter 0-3. HTML入門 (HW#1)</a> (1.1MB) <a href="mwt-ch00-3CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="HW1n.zip">HW#1: 作業一HTML練習(ZIP)</a>, 請下載後解壓縮，並將主目錄改成你的學號。 (21MB)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="HW1-HTML-Ans.zip">HW#1: 作業一HTML參考答案(ZIP)</a>, 需要參考請自行下載後解壓縮。 (5MB)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://w3schools.com/tags/default.asp" target=_blank>w3schools: HTML標籤清單(Tag List)</a> (Link) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3schools.com/html/html5_intro.asp" target=_blank>w3schools: HTML5 (Introduction)</a> <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://w3schools.com/html/html_examples.asp" target=_blank>w3schools: HTML範例與線上練習</a> (Link) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3schools.com/html/default.asp" target=_blank>w3schools: HTML Tutorial(入門教學)</a> (Link)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="mwt-ch00-5IISguide.pdf">Chapter 0-4. Windows IIS伺服器設定與使用</a> (1.7MB) <a href="mwt-ch00-5CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="mwt-ch00-6css.pdf">Chapter 0-5. CSS串接樣式表 (HW#2)</a> (0.2MB) <a href="mwt-ch00-6CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw2.zip">HW#2: 作業二CSS練習檔(ZIP)</a>, 請下載後解壓縮。 (1MB)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3schools.com/css/demo_default.htm" target=_blank>w3schools: CSS Demo (See how it works)</a> (Link)</td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3schools.com/css/css_howto.asp" target=_blank>w3schools: Three Ways to Insert CSS (三種方式)</a> (Link)</td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.w3schools.com/css/default.asp" target=_blank>w3schools: CSS Tutorial</a> (Link)</td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ch01rev.pdf">Ch01-第一章 認識 ASP.NET與VWD</a>(1.3MB) <a href="ch01revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch01revDemo.pdf">Ch01- ASP.NET作業三操作步驟(HW#3)</a>(1.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ch01-ch03.zip">Ch01-Ch03練習: ASP.NET簡易範例練習包(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(5.6MB)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
            <tr><td></td><td><a href="ch02rev.pdf">Ch02-第二章 資料型別與流程控制</a>(0.9MB) <a href="ch02revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch03rev.pdf">Ch03-第三章 陣列與方法</a>(0.4MB) <a href="ch03revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch04rev.pdf">Ch04-第四章 標準控制項(一)</a>(0.7MB) <a href="ch04revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch04revDemo.pdf">Ch04-ASP.NET作業四操作步驟(HW#4)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw4.zip">HW#4(作業四): 訪客留言板範例練習(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.6MB)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ch04-1asp.pdf">ASP.NET網站發行至本機IIS注意事項(pdf)</a>(0.4MB) <a href="ch04-1aspCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ch04-2asp.pdf">ASP.NET 4.0在Win 7 IIS上的設定(pdf)</a>(0.5MB) <a href="ch04-2aspCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ch05rev.pdf">Ch05-第五章 標準控制項(二)</a>(1.0MB) <a href="ch05revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch05revDemo.pdf">Ch05-ASP.NET練習五操作步驟(EX#5)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex05.zip">練習五: 下拉式選單、月曆與樸克牌範例(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.6MB)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ch06rev.pdf">Ch06-第六章 標準控制項(三)</a>(1.1MB) <a href="ch06revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch06revDemo.pdf">Ch06-ASP.NET練習六操作步驟(EX#6)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex06.zip">練習六: 面板、多重畫面與檔案上傳(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.2MB)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ch07.pdf">Ch07-第七章 驗證控制項 進階自修參考</a> (2.4MB) <a href="ch07CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch08rev.pdf">Ch08-第八章 主版頁面</a>(0.8MB) <a href="ch08revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch08revDemo.pdf">Ch08-ASP.NET作業五操作步驟(HW#5)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw5.zip">HW#5: 作業五ASP.NET範本設計練習(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.7MB) <br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ch09rev.pdf">Ch09-第九章 巡覽控制項</a>(0.8MB) <a href="ch09revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch10rev.pdf">Ch10-第十章 ASP.NET常用物件 </a>(1.0MB) <a href="ch10revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch10revDemo.pdf">Ch10-ASP.NET練習九操作步驟(EX#9)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw5ans.zip">EX#9: 練習九ASP.NET網路投票/問卷練習(ZIP)</a>, 請下載至E:\學號目錄\後解壓縮(0.2MB) <br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td><a href="ch11rev.pdf">Ch11-第十一章 SQL Express資料庫 </a>(0.3MB)  <a href="ch11revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch12rev.pdf">Ch12-第十二章 資料來源控制項 </a>(0.5MB) <a href="ch12revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch13rev.pdf">Ch13-第十三章 資料繫結控制項(一) </a>(0.7MB) <a href="ch13revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch12revDemo.pdf">Ch12-Ch13 ASP.NET作業六操作步驟(HW#6)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw6-ch12.zip">HW#6: 作業六ASP.NET資料庫網頁練習(ZIP)</a>, 請下載至E:\學號\後解壓縮(0.6MB)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td><a href="ch14rev.pdf">Ch14-第十四章 資料繫結控制項(二) </a>(5.3MB) <a href="ch14revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch15rev.pdf">Ch15-第十五章 AJAX網頁技術 </a>(5.5MB) <a href="ch15revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch14revDemo2.pdf">Ch14-ASP.NET練習十四操作步驟(EX#14)</a>(2.3MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="ex14.zip">練習14: 資料庫網頁與AJAX練習(ZIP)</a>, 請下載至E:\學號\後解壓縮(0.3MB)<br /></td></tr>
            <tr><td></td><td><a href="ch16.pdf">Ch16-第十六章 電子商務網站實作 進階自修參考</a> (1.8MB) <a href="ch16CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td><a href="mwt-ch00-2intro.pdf">Lecture 17. 網站企劃概念</a> (8.5MB) <a href="mwt-ch00-2CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td><a href="ch18rev.pdf">Lecture 18. 網站的建立與基本操作</a> (1.5MB) <a href="ch18revCN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="CS6-Flag01.zip">1. HW#7: 作業七Dreamweaver網頁設計練習(ZIP)</a> (23.4MB)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="flag01-step1-3.pdf">1. Dreamweaver網頁設計練習: 參考步驟Step1-Step3</a> (5.0MB)  <a href="flag01-step1-3_CN.pdf">簡體中文版</a> <br /></td></tr>

            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="CS6-Flag02.zip">2. HW#8: Dreamweaver網頁設計第二次練習(ZIP)</a> (25.4MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="flag01-step4.pdf">2.1 Dreamweaver網頁設計練習: 參考步驟Step4</a> (6.3MB)  <a href="flag01-step4_CN.pdf">簡體中文版</a><br /></td></tr>
            <tr><td></td><td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下載主機1: <a href="http://10.51.3.200/AdobeCS6-DW.zip" target=_blank>DreamweaverCS6安裝軟體</a>(H103)<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下載主機2: <a href="http://10.51.3.200/CS6.zip" target=_blank>DreamweaverCS6安裝軟體</a>(H103)<br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下載主機3: <a href="AdobeCS6-DW.zip" target=_blank>DreamweaverCS6安裝軟體</a><br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;下載主機4: <a href="CS6.zip" target=_blank>DreamweaverCS6安裝軟體</a></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="CS6-Flag03.zip">3. Dreamweaver網頁設計第三次練習(ZIP)</a>, 請下載至E:\學號\後解壓縮(25.7MB) <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="flag01-step5.pdf">3.1 Dreamweaver網頁設計練習: 參考步驟Step5-6</a> (2.3MB)  <a href="flag01-step5_CN.pdf">簡體中文版</a>  <img src="../img/new2.gif" alt="New message!" /><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="ASP_NET_movie.zip">*** 期末小專題參考範例一(ZIP)</a>(10.4MB)：製作軟體ASP.NET<br /></td></tr>
            <tr><td></td><td><a href="AsiaSunCake.zip">*** 期末小專題參考範例二(ZIP)</a>(2.4MB)：製作軟體Adobe Dreamweaver<br /></td></tr>
            <tr><td></td><td><a href="FlagJapan.zip">*** 期末小專題參考範例三(ZIP)</a>(5.4MB)：製作軟體Adobe Dreamweaver<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
        </table>
    </center>


    <footer class="container-fluid text-center">
        <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    </footer>

</body>
</html>
