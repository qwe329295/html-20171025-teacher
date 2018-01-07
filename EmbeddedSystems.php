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
<body>

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
      <?php bar(6)?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110"></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
    <h2>嵌入式系統<br />Embedded Systems</h2>

    <table width="90%" border="1"style="border:3px #FFAC55 solid;" >

        <tr><td width="14%"  class="td1"> 日 期 (Date)</td><td  class="td1"> 公 告 事 項 (Information)     <a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a></td></tr>
        <tr><td>2017/05/18</td><td><a href="105FinalProject.pdf">第17、18週(資工<font color="red"><B>3A</B>:</font>)<font color="blue">嵌入式系統期末</font>實作說明(遠端網路HTTP遙控全自動伺服器)</a>  <img src="../img/new2.gif"></td></tr>
        <tr><td>2017/05/18</td><td>資工<font color=blue><b>3A</b></font>嵌入式系統第4次作業RM-033-04-404實驗報告(<font color="red"><b>每組一份書面或Email</b></font>)繳交期限<font color=blue><b>2017/6/6</b></font>。</td></tr>
        <tr><td>2017/05/16</td><td>資工<b>3A</b>因<font color=red><b>106年5月30日</b></font>(二)端午節放假。</td></tr>
        <tr><td>2017/05/08</td><td><a href="week12/SoC_HW3.doc">HW3: 嵌入式系統第3次作業(Linux Target發展環境及工具)</a> (MS-Word格式) <br />
                <font color="red"><b>每人一份，書面</b></font>，繳交期限2017/06/06(五)17:00前直接交給老師。<br/>
                參考文件: <a href="week11/1-Linux for Creator-XScale-PXA270 User Guide.pdf">Linux for Creator-XScale-PXA270 User Guide.pdf</a></td></tr>
        <tr><td>2017/05/08</td><td><a href="1052Windows7startup_steps2.pdf">實驗課每次上課開機程序參考表</a></td></tr>
        <tr><td>2017/04/08</td><td><a href="week07/105_Midterm.pdf">第九、十週(資工<font color="red"><B>3A</B>:</font>)<font color="blue">嵌入式系統期中考</font>實作說明(電梯模擬設計): 每組皆需一份實作及口試</a>。</td></tr>
        <tr><td>2017/03/21</td><td>資工<font color=blue><b>3A</b></font>嵌入式系統實驗二(201)報告繳交期限<font color=red><b>2017/4/11</b></font> 17:00以前，每組交一份。</td></tr>
        <tr><td>2017/03/14</td><td>資工<font color=blue><b>3A</b></font>嵌入式系統實驗一(101)報告繳交期限<font color=red><b>2017/3/28</b></font> 17:00以前，每組交一份。   請參考:<a href="SOCrepref.doc" target=_blank>嵌入式系統報告範例格式(最新版).doc</a></td></tr>
        <tr><td>2017/02/20</td><td><a href="1052Windows7startup_steps.pdf">實驗課每次上課開機程序參考表</a></td></tr>
        <tr><td>2017/02/15</td><td>請同學下載<a href="103-I627安裝Vbox-WinXP-LPt-Domingo.pdf" target=_blank>安裝Vbox-WinXP3虛擬機(32 bits)示範</a>到E:\ </td></tr>
        <tr><td>2017/02/15</td><td>請同學下載<a href="Hyperterminal.zip" target=_blank>超級終端機</a>及<a href="TFTPD.zip" target=_blank>TFTP伺服器</a>到E:\ </td></tr>
        <tr><td>2017/02/11</td><td>請同學將實驗報告寄給助教(每組交一份), 嵌入式系統助教的Email為<a href="mailto:rikki8051TA@gmail.com?subject=嵌入式系統3A班第?次作業">rikki8051TA@gmail.com</a>。報告格式範例: <a href="SOCrepref.doc" target=_blank>實驗報告參考格式.doc</a> </td></tr>
        <tr><td>2017/02/11</td><td>大三嵌入式系統(Introduction to Embedded Systems)--上課時間地點(Class & Location): 資工CSIE <font color=blue><b>3A</b>: 每週二(TUE) 14:10-17:00在Room <font color=red><b>I627</b></font>教室。</font></td></tr>
        <tr><td>2017/02/11</td><td>Office Hours(請益時間):  <br />Tue.(二) 9:10-14:00 &nbsp;&nbsp; Wed.(三) 11:10-15:00	 &nbsp;&nbsp; Fri.(五)8:10-9:00</td></tr>
        <tr><td>2017/02/01</td><td>參考書(References): ※請遵守智慧財產權規定，不可非法影印教科書。<br />
                1. 陳立元、范逸之, "ARM嵌入式系統設計入門," 旗標書局, 2009, ISBN: 9789574426959.<br />
                2. 王煌城譯, "嵌入式系統設計," 全華圖書, 2008/7, ISBN：9572140469.<br />
                </font></td></tr>
        <tr><td>2017/02/01</td><td>
                本校資工系大學部教育目標:<br />
                一、奠定學生之資訊基本能力與素養<br />
                二、培育學生之資訊專業技術及團隊合作應用能力<br />
                三、養成學生重視專業倫理與具備終身學習之素養</td></tr>
    </table><br />
    <center>
        ※以下部分檔案為PDF格式，請上網下載安裝Adobe Acrobat Reader中文版。
        <br />※以下部分教材及相關內容屬原作者、原公司所有，僅供本校學生修課學習使用，不可從事散播、商業或其他非法行為。<br />
        <a href="http://dns2.asia.edu.tw/~rikki" target=_blank>[開Rikki老師首頁Homepage]<img src="../img/home01.gif" border=0 height=50 alt="Rikki's home" /></a>

        <table  class="table2" width="80%"style="border:3px #FFD382 dashed;margin-bottom: 20px;">

            <tr><td></td><td><font size=4 color=red>Course slides (上課投影片):</font></td></tr>
            <tr><td></td><td><a href="week02/soc-ch00-1-syllabus.pdf">Chapter 1-1. Syllabus (課程大綱)</a> (0.9MB)</td></tr>
            <tr><td></td><td><a href="week02/soc-ch00-2-platform.pdf">Chapter 1-2. Training Platform for Embedded Systems (嵌入式開發訓練平台)</a> (1.4MB)</td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week02/W02-1-PXA270_develop_env1.pdf">Chapter 2-1. Development Environment for Creator Xscale PXA270開發環境設定與軟體安裝(I)</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week02/hello.c">EX#2-1: 第一個cygwin C語言編譯練習(hello.c)</a>, 請下載至E:\cygwin\home\soc\<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week02/arm-elf-tools-cygwin.tar.gz">ARM Cross Toolchains交叉編譯程式工具(arm-elf-tools-cygwin.tar.gz)</a>,
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    已下載至E:\cygwin\usr\local\.請利用cygwin tar -zxvf解壓縮<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week02/diag_ram.bin">EX#2-2: Target目標板ARM可執行檔範例(diag_ram.bin)</a>, 請下載至E:\cygwin\home\soc\<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week02/Cygwin Install Guide.pdf">Windows Linux-like Environment安裝說明(cygwin Install Guide)</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week03/W03-1-PXA270_develop_env2.pdf">Chapter 3-1. Development Environment for Creator Xscale PXA270開發環境設定與軟體安裝(II)</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week03/rm-033-04-200.zip">EX#3-1: PXA270實驗範例(rm-033-04-200.zip)</a>,請下載至E:\cygwin\usr\var\後解壓縮<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week03/netconfig">Unix檔案格式範例檔(ConTEXT for Unix file format)</a> <br /></td></tr>
            <tr><td></td><td><a href="week03/W03-2-Creator-PXA270_System-Initialization-Step-By-Step.pdf">Chapter 3-2. 200_Creator-PXA270_System-Initialization-Step-By-Step</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week03/rm-033-04-101.zip">Lab.1: PXA270實驗一(rm-033-04-101.zip)</a>,請下載至E:\cygwin\usr\var\後解壓縮<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week04/W04-1-PXA270_develop_env3.pdf">Chapter 4-1. Dev. Env. for Creator Xscale PXA270開發環境設定與軟體安裝(III)</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week04/rm-033-04-201.zip">Lab.2: PXA270實驗二(rm-033-04-201.zip)</a>,請下載至E:\cygwin\usr\var\後解壓縮<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://linux.vbird.org/linux_basic/" target=_blank>Linux教學網站</a> </td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week06/W06-1-PXA270-RM-033-04-202-Ex3.pdf">Chapter 6-1. Creator Xscale PXA270母板DIP SW/LED/LCD輸出入說明(202)</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week06/rm-033-04-202.zip">Ex.3: PXA270練習實作三(rm-033-04-202.zip)</a>,請下載至E:\cygwin\usr\var\後解壓縮<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td><a href="week07/W07-1-PXA270-RM-033-04-206-Ex4.pdf">Chapter 7-1. Creator Xscale PXA270母板Scan I/O: Keypad + 7-Seg LED + LCD實作說明(206)</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week07/rm-033-04-206.zip">Ex.4: PXA270練習實作四(rm-033-04-206.zip)</a>,請下載至E:\cygwin\usr\var\後解壓縮<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week07/105_Midterm.pdf">第九、十週(資工<font color="red"><B>3A</B>:</font>)<font color="blue">嵌入式系統期中考</font>實作說明(電梯模擬設計)</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week11/W11-1-LinuxTargetDevelop.pdf">Chapter 11-1. PXA270 Linux Target開發環境設定與軟體安裝</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week11/2-RM-033-04-300_Creator-PXA270_Development-Environment-And-Linux-Host-Side-Instal.pdf">RM-033-04-300_PXA270_Development-Environment-And-Linux-Host-Side</a>(參考文件一)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week11/1-Linux for Creator-XScale-PXA270 User Guide.pdf">Linux for Creator-XScale-PXA270 User Guide.pdf</a>(參考文件二)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week12/W12-RM-033-04-303_Creator-PXA270_Linux Kernel-compile_and_install-1.pdf">Chapter 12-1(W12). PXA270 Linux Target Linux kernel及file system編譯與安裝(I)</a> <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week12/RM-033-04-303_Creator-PXA270_Linux Kernel-Problem_Solution.pdf">Linux影像檔製作錯誤問題參考解決方案</a></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week12/microtime.tar.gz">下載Linux原始程式修護包(microtime.tar.gz)</a>,
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    請下載至Fedora: /usr/src/請利用tar -zxvf解壓縮<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week12/W12-RM-033-04-303_Creator-PXA270_Linux Kernel-compile_and_install-2.pdf">Chapter 12-2(W13). PXA270 Linux Target Linux kernel及file system編譯與安裝(II)</a> <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week12/SoC_HW3.doc">HW3: 嵌入式系統第3次作業(Linux Target發展環境及工具)</a> (MS-Word格式) <br />
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;參考文件: <a href="week11/1-Linux for Creator-XScale-PXA270 User Guide.pdf">Linux for Creator-XScale-PXA270 User Guide.pdf</a><br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week15/Chapter15-1-RM-033-04-404_406.pdf">Chapter 15-1(W14). PXA270 Linux Target周邊I/O驅動程式實習</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week15/RM-033-04-404.zip">HW#4: PXA270作業四(RM-033-04-404.zip)</a>,請下載後解壓縮至S:\<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week15/RM-033-04-404_Creator-PXA270_Creator-IO.pdf">RM-033-04-404_Creator-PXA270_Creator-IO.pdf</a>(參考文件一)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week15/RM-033-04-405_Creator-PXA270_CMOS.pdf">RM-033-04-405_Creator-PXA270_CMOS.pdf</a>(參考文件二)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week15/RM-033-04-406_Creator-PXA270_CODEC.pdf">RM-033-04-406_Creator-PXA270_CODEC.pdf</a>(參考文件三)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="week14/Chapter14-1-RM-033-04-304.pdf">Chapter 14-1(W16). PXA270 U-Boot&Linux Kernel image下載或燒錄的驗證實習</a> <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week14/RM-033-04-304_Creator-PXA270_U-Boot-And-Linux-Kernel-image-Download-Flash.pdf">RM-033-04-304_Creator-PXA270_U-Boot-And-Linux-Kernel-image-Download-Flash</a>(參考文件)<br /></td></tr>

            <tr><td></td><td><a href="week16/Chapter16-1-RM-033-04-307.pdf">Chapter 16-1(W16). PXA270 Domingo-For-Linux針對I/O驅動程式與應用程式的除錯實習</a> <br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week16/RM-033-04-307_Creator-PXA270_Domingo-For-Linux-Kernel-Device-Driver_Debugging.pdf">RM-033-04-307-PXA270_Domingo-For-Linux-Kernel-Device-Driver_Debugging</a>(參考文件1)<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week16/RM-033-04-308_Creator-PXA270_CodeLyzer_User Application_Debug.pdf">16-2. RM-033-04-308_PXA270_CodeLyzer_UserApplication_Debug.pdf</a>(參考文件2)<br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>


            <tr><td></td><td><a href="week17/Chapter17-1-RM-033-04-403.pdf">Chapter 17-1. PXA270 Linux Target網路應用程式與HTTP伺服器之實習</a> </td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week17/RM-033-04-403.zip">EX#5: PXA270練習實作五(RM-033-04-403.zip)</a>,請下載後解壓縮至S:\<br /></td></tr>
            <tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="week17/RM-033-04-403_Creator-PXA270_Network-Application.pdf">RM-033-04-403_Creator-PXA270_Network-Application.pdf</a>(參考文件) <br /></td></tr>
            <tr><td></td><td></td></tr><tr><td></td><td></td></tr><tr><td></td><td></td></tr>

            <tr><td></td><td><a href="105FinalProject.pdf">第17、18週(資工<font color="red"><B>3A</B>:</font>)<font color="blue">嵌入式系統期末</font>實作說明(遠端網路HTTP遙控全自動伺服器)</a> <img src="../img/new2.gif" alt="New message!" /></td></tr>




            <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
        </table>
    </center>


    <footer class="container-fluid text-center">
        <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    </footer>

</body>
</html>
