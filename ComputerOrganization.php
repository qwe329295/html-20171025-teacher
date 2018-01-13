<?php
session_start();
include ('func.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
    <title> 陳瑞奇(Jui-Chi Chen)</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Hanalei" rel="stylesheet">
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }
        img {
            height: auto;
            max-width: 100%;
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
       <?php bar(2)?>
    </div>
</nav>

<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg"width="110" ></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
    <h2>計算機組織<br />Computer Organization</h2>
    <table width="90%" border="1" style="font-size: 2em;border:3px #FFAC55 solid;">
        <tr><td width="14%"  class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)  <a href="coa_si.htm">简体中文版</a> <a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a></td></tr>
        <?php
        include("mysql_connect.inc.php");

        $sql = "SELECT * FROM class1";
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

        <table  class="table2" width="90%"style="border:3px #FFD382 dashed;margin-bottom: 20px;">


            <tr><td  width="5%"></td><td><font size=4 color=red>Course slides (上課投影片):</font></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td><a href="cod5-ch00-syllabus.pdf">Ch00. Syllabus and Introduction(課程介紹)</a> (1.0MB)  <a href="cod5-ch00-syllabus_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td></td></tr>
            <tr><td></td><td><a href="cod5-ch01-1.pdf">Ch01-1. Computer Abstractions and Technology(計算機抽象化與科技) Part 1</a>(3.7MB) <a href="cod5-ch01-1_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><a href="cod5-ch01-2.pdf">Ch01-2. Computer Abstractions and Technology(計算機抽象化與科技) Part 2</a> (2.5MB) <a href="cod5-ch01-2_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter1exercises.pdf">計算機組織作業1(第1章)習題題目</a>  <a href="01-Chapter1exercises_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter1.pdf">Possible solutions for Chapter 1 exercises</a>  <a href="01-Chapter1.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod5-ch02-1.pdf">Ch02-1. Instructions: Language of the Computer(指令：計算機的語言) Part 1</a> (1.0MB)  <a href="cod5-ch02-1_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><a href="cod5-ch02-2.pdf">Ch02-2. Instructions: Language of the Computer(指令：計算機的語言) Part 2</a> (4.5MB) <a href="cod5-ch02-2_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter2exercises.pdf">計算機組織作業2(第2章)習題題目</a>  <a href="01-Chapter2exercises_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="02-Chapter2.pdf">Possible solutions for Chapter 2 exercises</a>  <a href="02-Chapter2.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod5-ch03.pdf">Ch03. Arithmetic for Computers(計算機的算術)</a> (2.1MB)  <a href="cod5-ch03_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter3exercises.pdf">計算機組織練習3(第3章)習題題目(不用交作業)</a>  <a href="01-Chapter3exercises_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="03-Chapter3.pdf">Possible solutions for Chapter 3 exercises</a>  <a href="03-Chapter3.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td>*** 資工<font color=blue><b>3A</b></font>計算機組織<a href="cod5-ch01-03_sol.pdf">第1~3章習題補充講解參考</a>  <img src="../img/new2.gif" alt="New message!" /></td></tr></br>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod5-ch04-1.pdf">Ch04-1. The Processor(處理器) Part 1: A Single-cycle Implementation</a> (0.9MB) <a href="cod5-ch04-1_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><a href="cod5-ch04-2.pdf">Ch04-2. The Processor(處理器) Part 2: Enhancing Performance with Pipelining</a> (3.5MB) <a href="cod5-ch04-2_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter4exercises-1.pdf">計算機組織作業3(第4章-1)習題題目</a>  <a href="01-Chapter4exercises-1_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="04-Chapter4.pdf">Possible solutions for Chapter 4 exercises</a></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod5-ch04-3.pdf">Ch04-3. The Processor(處理器) Part 3: Pipeline Hazards</a> (7.1MB) <a href="cod5-ch04-3_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><a href="cod5-ch04-4.pdf">Ch04-4. The Processor(處理器) Part 4: Parallelism and ILP</a> (4.7MB) <a href="cod5-ch04-4_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter4exercises-2.pdf">計算機組織作業4(第4章-2)習題題目</a>  <a href="01-Chapter4exercises-1_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="04-Chapter4.pdf">Possible solutions for Chapter 4 exercises</a></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod5-ch05.pdf">Ch05. Large and Fast: Exploiting Memory Hierarchy(大且快：利用記憶體階層)</a> (0.8MB)  <a href="cod5-ch05_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="01-Chapter5exercises.pdf">計算機組織練習5(第5章)習題題目(不用交作業)</a>  <a href="01-Chapter5exercises_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="05-Chapter5.pdf">Possible solutions for Chapter 5 exercises</a></td></tr>
            <tr><td></td><td><font color=red>*** 資工<font color=blue><b>3A</b></font>計算機組織<a href="cod5-ch04-05_sol.pdf">第4~5章習題補充講解參考</a>   <a href="cod5-ch04-05_sol_si.pdf"> 简体中文版</a></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><a href="cod4-ch06.pdf">Ch06. Storage and Other IO Topics(儲存體與其他輸出入議題)</a> (11.0MB)</td></tr>
            <tr><td></td><td><font color=red>*** </font><a href="06-Chapter6.pdf">Possible solutions for Chapter 6 exercises</a> <img src="../img/new2.gif" alt="New message!" /></td></tr>
            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td><br /></td></tr>

            <tr><td></td><td>Note: The following simulators referred in our lab. assignments, spim and Logisim, are freely availalbe and run on a variety of platforms including Windows, Macintosh, and Linux.
                </td></tr>
            <tr><td></td><td><a href="pcspim.zip" target=blank>PCSpim (4.3MB,ZIP)</a>: A MIPS assembly simulator by J.R. Larus, <a href="GetStartPCSpim.pdf" target=blank>Getting Started with PCSpim</a>, <a href="http://www.cs.wisc.edu/~larus/spim.html" target=blank>The Newest Version of SPIM</a></td></tr>
            <tr><td></td><td><a href="http://ozark.hendrix.edu/~burch/logisim/" target=blank>Logisim</a>: A logic circuit simulator</td></tr>
            <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
        </table>
    </center>




    <footer class="container-fluid text-center">
        <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    </footer>

</body>
</html>
