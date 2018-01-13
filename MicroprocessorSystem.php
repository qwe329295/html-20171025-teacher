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
      <?php bar(3)?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110"></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
<h2>微處理器系統<br />Microprocessor Systems</h2>

<table width="90%" border="1"style="border:3px #FFAC55 solid;font-size: 2em">

    <tr><td width="14%"  class="td1"> 日 期 (Date)</td><td  class="td1"> 公 告 事 項 (Information)  <a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a></td></tr>
    <?php
    include("mysql_connect.inc.php");

    $sql = "SELECT * FROM class2";
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
    <br />※以下部分教材及相關內容屬原作者、原公司所有，僅供本校學生修課學習使用，不可從事散播、商業或其他非法行為。<br />
    <a href="http://dns2.asia.edu.tw/~rikki" target=_blank>[開Rikki老師首頁Homepage]<img src="../img/home01.gif" border=0 height=50 alt="Rikki's home" /></a><br /><br />

    <table  class="table2" width="80%"style="border:3px #FFD382 dashed;margin-bottom: 20px;">

        <tr><td></td><td><font size=4 color=red>Course slides (上課投影片):</font></td></tr>
        <tr><td></td><td><a href="mcs-ch00-syllabus.pdf">Chapter 0. Syllabus (課程介紹)</a> (1.9MB)</td></tr>
        <tr><td></td><td><a href="mcs-ch01.pdf">Chapter 1. 輕鬆看MCS-51(PDF格式)</a> (1.9MB)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="8051_uP1board_I.pdf" target=_blank>Ch 01-1. μP-1實驗板電路模組(Part I).PDF</a> (1.2MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="uP1-Circuits-All.pdf">Ch 01-2. μP-1萬用實驗板所有電路圖.PDF</a> (0.7MB)&nbsp;&nbsp;
                <a href="uP1-Circuits-All.doc" target=_blank>Word格式</a> (11.5MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="8051steps.pdf" target=_blank>Ch 01-3. 8051實驗步驟範例(使用μP-1實驗板).PDF</a> (1.2MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="MCS-51Writer.zip" target=_blank>Ch 01-4. Leaper 5E MCS-51 Writer燒錄器軟體(可以Demo試用).ZIP</a>for WinXP (0.7MB)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="A08-0016pgmsx8051writer.zip" target=_blank>Ch 01-4. pgmsx 8051 Writer燒錄器軟體.ZIP</a> (15MB)for Win7</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="GeniusNSP.zip" target=_blank>Ch 01-4. Genius NSP 8051 Writer燒錄器軟體.ZIP</a> (15MB)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="8051DataSheets.zip">Ch 01-5. μP-1實驗相關電子元件規格文件(Datasheets).ZIP</a> (8.8MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch02.pdf">Ch 2. 認識uVision 5與Keil C</a>(1.6MB)  </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="106_uVision.pdf" target=_blank>Ch 02-1. Keil μVision5使用說明.PDF</a> (1.6MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch03p1.pdf">Chapter 3-1. 輸出埠之應用Part I</a> (1.4MB) </td></tr>

        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


        <tr><td></td><td><a href="hw01.pdf" target=_blank>Lab.1(HW#1) 第一次實驗與作業(基本輸出練習).PDF</a> (0.2MB)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="uVision5-Keil_c51v956.exe" target=_blank>KEIL Evaluation Software (μVision 5)評估學習版</a> (100.0MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.keil.com/demo/eval/c51.htm" target=_blank>KEIL Evaluation Software (最新)試用版且需要註冊</a> (24.0MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw1-ch01.c" target=_blank>Lab.1(HW#1) LED燈交互閃爍程式簡單範例ch01.c</a> (C51語言參考程式) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw1-ch03-3-3.c" target=_blank>Lab.1(HW#1) LED霹靂燈程式範例ch03-3-3.c</a> (C51語言參考程式)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;以上三項檔案均可在教科書附光碟中取得: <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1) μVision 5試用版在CD:\驅動程式與參考資料\c51v805.exe
                <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2) C51語言範例程式在CD:\習作程式參考\ch01及ch03中</td></tr>

        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch04p1.pdf">Chapter 4-1. 輸入埠之應用Part I</a> (2.2MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="8051_uP1board_II.pdf" target=_blank>Ch 04-1-1. μP-1實驗板電路模組(Part II).PDF</a> (1.1MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw02.pdf">Lab.2(HW#2) 第二次實驗與作業(基本輸出入練習+計數器).PDF</a> (0.2MB)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="hw2-ch04-3-1.c">DIP指撥開關+LED輸出程式範例ch04-3-1.c</a> (C51語言參考程式)</td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch05p1.pdf">Chapter 5-1. 輸出入埠之進階應用Part I</a> (4.3MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="8051_uP1board_III.pdf">Ch 05-1-1. μP-1實驗板電路模組(Part III).PDF</a> (0.8MB) </td></tr>
        <tr><td></td><td><font color=red>期中考(Midterm)</font>：<a href="Midterm.pdf">期中實驗與口試(簡易數位時鐘).PDF</a> (0.9MB)</td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch06.pdf">Chapter 6. 中斷之應用</a> (1.8MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch07.pdf">Chapter 7. 計時計數器之應用</a> (2.0MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch04p2.pdf">Chapter 4-2. 輸入埠之應用Part II</a> (0.9MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch05p2.pdf">Chapter 5-2. 輸出入埠之進階應用Part II</a> (2.0MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="104lab4source.zip" target=_blank>作業三(HW#3) 按鍵編碼與掃描C51程式範例(程式一~五).ZIP</a> (4KB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="104_Lab04.pdf">作業三(HW#3) 第三次實驗(按鍵解彈跳與矩陣鍵盤掃描練習).PDF</a> (0.1MB) </td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch12.pdf">Chapter 12. LED點矩陣之應用</a> (3.1MB)  </td></tr>
        <tr><td></td><td><a href="mcs-ch13.pdf">Chapter 13. 液晶顯示幕LCD模組之應用</a> (2.1MB) </td></tr>
        <tr><td></td><td><a href="LCD16x2_PVC160203Pdatasheet.pdf" target=_blank>LCD 16x2 Module規格文件: PVC160203P datasheet.PDF</a> (0.2MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="106_hw4.pdf">作業四(HW#4) 第四次實驗(液晶顯示幕LCD動態顯示練習).PDF</a> (0.7MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="3-LCD_hw4.c">作業四(HW#4) 液晶顯示幕LCD動態顯示C51程式範例.c</a> (2KB)</td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch09.pdf">Chapter 9. 聲音之產生</a> (2.4MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="106_Lab5-2.pdf" target=_blank>練習: 第5-2次實驗(Buzzer輸出練習).PDF</a> (0.8MB) </td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;<a href="Lab5-2-PianoElaborate.c">Buzzer聲音控制C51程式範例.c</a> (2KB) </td></tr>
        <tr><td></td><td><font color=red>期末考(Final Exam)</font>：<a href="106_Projects.pdf">自訂題目-期末作品Projects.PDF</a> (0.9MB) <img src="../img/new2.gif" alt="New message!" /></td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><a href="mcs-ch03p2.pdf">Chapter 3-2. 輸出埠之應用Part II</a> (1.2MB)  </td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><font size=4 color=red>補充教材(教科書投影片):</font></td></tr>
        <tr><td></td><td><a href="mcs-ch08.pps">Chapter 8. 串列埠之應用</a> (13MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch10.pps">Chapter 10. 步進馬達之控制</a> (7MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch11.pps">Chapter 11. ADC與DAC之應用</a> (17MB) </td></tr>
        <tr><td></td><td><a href="mcs-ch14.pps">Chapter 14. 直流馬達之控制</a> (9MB) </td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

        <tr><td></td><td><font size=4 color=red>8051實驗其他相關參考資料:</font></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="x8051_ascii.pdf" target=_blank>Lab01. ASCII文數字標準交換碼.PDF</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="AT89s51datasheet.pdf" target=_blank>Lab02. ATMEL 8051 Datasheet晶片規格文件.PDF</a> (AT89S51-24PC)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="x8051_summary.pdf" target=_blank>Lab03. 8051總指令集摘要.PDF</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="8051instrMemo.ppt" target=_blank>Lab04. 8051指令備忘錄.PPT</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.win.tue.nl/~aeb/comp/8051/set8051.html" target=_blank>Lab05. 8051 Instruction Set (Site 1)</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://uva.ulb.ac.be/cit_courseware/i8051/part1.htm" target=_blank>Lab06. 8051 Instruction Set (Site 2)</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.chipware.com.tw/chinese/8051.htm" target=_blank>Lab07. 旗威科技提供8051初學者參考資料</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="GeniusNSP.zip" target=_blank>Lab08. Genius NSP萬用燒錄器軟體(可以Demo試用)</a> (Win99/2000/XP)</td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.atmel.com/dyn/products/product_card.asp?part_id=1917" target=_blank>Lab09. ATMEL 8051 Architecture其他相關資料</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://www.alldatasheet.com/" target=_blank>Lab10. 積體電路IC datasheet規格文件查詢網站</a></td></tr>
        <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://micro.cc.ntust.edu.tw/" target=_blank>Lab11. 年度微電腦應用系統設計製作競賽</a></td></tr>
        <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
    </table>
</center>


<footer class="container-fluid text-center">
    <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
</footer>

</body>
</html>