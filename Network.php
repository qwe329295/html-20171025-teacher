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
      <?php bar(7)?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1>陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110"></h1>
        <p>professor of Asia University</p>
    </div>
</div>
<center>
    <h2>網路分析與管理<br>Network Analysis and Management</h2>

    <table width="90%" border="1"style="border:3px #FFAC55 solid;">

        <tr><td width="14%" class="td1"> 日 期 (Date)</td><td class="td1"> 公 告 事 項 (Information)     <a href="http://moodle.asia.edu.tw/" target=_blank>亞洲大學磨課師教學平台</a> </td></TR>
        <TR><td>2006.12.12</td><td><font color=red>Final Project</font>: <A HREF="neta_final.htm">網路管理相關論文研讀簡報</a>, <A HREF="NM_Final_ProjAssign.pdf">文章分配名單</a>。  <img src="../img/new2.gif"></td></TR>
        <TR><td>2006.12.07</td><td><font color=red>Assignment#3</font>: <A HREF="Analyzer.zip">Hifn Analyzer</a>網路管理軟體使用心得，每人一組，只要書面簡要報告一份即可(by Email)，報告繳交日期: 2007/01/03 (Wed)以前。</td></TR>
        <TR><td>2006.10.30</td><td>2006/11/15(三)13:10-14:30碩二A網路分析與管理期中考，3116教室，筆試(open book)。</td></TR>
        <TR><td>2006.10.28</td><td><font color=red>Assignment#2</font>: Ethereal或Wireshark網路分析軟體使用報告，每人一組，只要書面簡要報告一份(by Email)，報告繳交日期: 2006/12/20 (Wed)以前。</td></TR>
        <TR><td>2006.10.09</td><td><font color=red>Assignment#1</font>: 分組報告，1~2人一組，每組上台報告15分鐘，書面報告一份(by Email)，報告日期: 2006/11/29。 <a href="assign1.htm">分組名單</a></td></TR>
        <TR><td>2006.09.22</td><td>上課教室更改為資訊大樓3116,謝謝。</td></TR>
        <TR><td>2006.09.15</td><td>教科書: <font color=red>J. Richard Burke, "Network Management Concepts & Practice : A Hands-on Approach," Prentice Hall, 2004。</font></td></TR>
    </table><br>
    <CENTER>
        ※以下部分檔案為PDF格式，請上網下載安裝Adobe Acrobat Reader中文版。
        <br>※以下教材相關內容屬原作者原公司所有，僅供本校學生修課學習使用，不得從事散播、商業或其他非法行為。<br><br>

        <table  class="table2"style="border:3px #FFD382 dashed;margin-bottom: 20px;">

            <TR><td><A HREF="00-syllabus.pdf">Ch00.</td><td width=87%>Syllabus</A> (OK)</td></tr>
            <TR><td><A HREF="01-ch01-1.pdf">Ch01-1.</td><td width=87%>OSI 7 Layers & Transmission Media</A> (OK)</td></tr>
            <TR><td><A HREF="01-ch01-2.pdf">Ch01-2.</td><td width=87%>802.3 Ethernet /802.11 WLAN</A>  (OK)</td></tr>
            <TR><td><A HREF="01-ch01-3.pdf">Ch01-3.</td><td width=87%>Network devices: Hub, Switch, and Router</A> (OK)</td></tr>
            <TR><td><A HREF="01-ch01-4.pdf">Ch01-4.</td><td width=87%>TCP/IP Protocol Suite, VLANs, and VPNs</A>  (OK)</td></tr>
            <TR><td>Ch0x1-1.  </td><td width=87%><A HREF="01-ch0x1-security.pdf">Network Security/ Security Management</A>  (OK)</td></tr>
            <TR><td>Ch0x1-2. </td><td valign=top width=87%><font color=red>Assignment#1: </font>Installation and Usage of Network Security Tools</A></td></tr>
            <TR><td> </td><td width=87%><a href="assign1.htm">分組名單</a> (若有登錄錯誤，請向老師反應。)</td></tr>
            <TR><td> </td><td width=87%>1. <A HREF="http://insecure.org/nmap/download.html" target=blank>Nmap掃描TCP系統</A> (for MS-Windows/Linux/...) <br>&nbsp; &nbsp; Ref: <A HREF="CHAP11-Nmap.pdf">網路安全Ch11,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td> </td><td width=87%>2. <A HREF="http://www.nessus.org/download/" target=blank>Nessus弱點掃描系統 (Server/Client)</A> (for Windows/Linux/...) <br>&nbsp; &nbsp; Ref: <A HREF="CHAP12-Nessus.pdf">網路安全Ch12,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td> </td><td width=87%>3. <A HREF="http://www.snort.org/dl/" target=blank>Snort入侵偵測系統</A> (for Windows/Linux) <A HREF="http://www.snort.org/dl/binaries/" target=blank>主要套件直接下載</a> <br> &nbsp; &nbsp; Ref: <A HREF="CHAP13-Snort.pdf">網路安全Ch13,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td> </td><td width=87%>4. <A HREF="http://www.cs.tut.fi/~rammer/aide.html" target=blank>AIDE竄改偵測軟體 </A> (just for Linux/UNIX-like OS) <br>&nbsp; &nbsp; Ref: <A HREF="CHAP14-AIDE.pdf">網路安全Ch14,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td> </td><td width=87%>5. <A HREF="http://sourceforge.net/projects/wxchecksums" target=blank>wxChecksums竄改偵測軟體 </A> (for MS-Windows/Linux/...) <br>&nbsp; &nbsp; Ref: <A HREF="CHAP14-AIDE.pdf">網路安全Ch14,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td><A HREF="02-ch02.pdf">Ch02. </td><td width=87%>Overview of Network Management</A> (OK)</td></tr>
            <TR><td><A HREF="03-ch03.pdf">Ch03. </td><td width=87%>Network Management Strategies</A> (OK)</td></tr>
            </td></tr><TR><td>Ch0x2-1. </td><td width=87%><A HREF="03-ch0x2-Sniffer1.pdf">網路分析器Sniffer Pro之使用(一)</A> (OK)</td></tr>
            </td></tr><TR><td>Ch0x2-2. </td><td width=87%><A HREF="03-ch0x2-Sniffer2.pdf">網路分析器Sniffer Pro之使用(二)</A> (OK)</td></tr>
            <TR><td></td><td width=87%>Ref: <A HREF="03-NetAnalyzer.pdf">NetAnalyzer網路分析大師試用版操作說明</A> (OK)</td></tr>
            <TR><td>Ch0x3. </td><td width=87%><font color=red>Assignment#2: </font>Ethereal for MS-Windows (Network Analyzer)<br>Ref: <A HREF="CHAP10-Ethereal.pdf">網路安全Ch10,楊中皇,金禾</a> (OK)</td></tr>
            <TR><td> </td><td width=87%>1. <A HREF="WinPcap_3_0.exe">Windows Packet Capture (WinPcap ver 3.0)</A> (先安裝)</td></tr>
            <TR><td> </td><td width=87%>2. <A HREF="ethereal-setup-0.10.11.exe">Ethereal Setup (ver 0.10.11)</A> (後安裝, 9MB)</td></tr>
            <TR><td> </td><td width=87%>Note: <A HREF="http://www.ethereal.com/" target=blank>The newest version for the Ethereal package</A></td></tr>
            <TR><td> </td><td width=87%>Note: <A HREF="http://www.wireshark.org/download.html" target=blank>The Wireshark package (a successor of Ethereal?)</A></td></tr>
            <TR><td><A HREF="04-ch04.pdf">Ch04. </td><td width=87%>Configuration Client/Server Components</A> (OK)</td></tr>
            <TR><td><A HREF="05-ch05.pdf">Ch05. </td><td width=87%>Configuration: Infrastructure Components</A> (OK)</td></tr>
            <!- td width=87% Ref: A HREF=router_eSIM_v11.exe Cisco Router eSimulator (Flash format)>
            <TR><td><A HREF="06-ch06.pdf">Ch06. </td><td width=87%>Simple Network Management Protocol (SNMP)</A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1157.html target=blank>RFC 1157 - A Simple Network Management Protocol (SNMPv1) (Obsolete: 1098) *</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1446.html target=blank>RFC 1446 -  Security Protocols for version 2 of the Simple Network Management Protocol (SNMPv2)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1901.html target=blank>RFC 1901 -  Introduction to Community-based SNMPv2</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1903.html target=blank>RFC 1903 -  Textual Conventions for Version 2 of the Simple Network Management Protocol (SNMPv2) (Obsolete: 1443)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1904.html target=blank>RFC 1904 -  Conformance Statements for Version 2 of the Simple Network Management Protocol (SNMPv2) (Obsolete: 1444)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1905.html target=blank>RFC 1905 -  Protocol Operations for Version 2 of the Simple Network Management Protocol (SNMPv2) (Obsolete: 1448) *</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1906.html target=blank>RFC 1906 -  Transport Mappings for Version 2 of the Simple Network Management Protocol (SNMPv2) (Obsolete: 1449) *</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1908.html target=blank>RFC 1908 -  Coexistence between Version 1 and Version 2 of the Internet-standard Network Management Framework (Obsolete: 1452)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2089.html target=blank>RFC 2089 -  (V2ToV1)Mapping SNMPv2 onto SNMPv1 within a bi-lingual SNMP agent</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3411.html target=blank>RFC 3411 -  An Architecture for Describing SNMP Management Frameworks (Obsoletes: 2571, 2271, 2261)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3412.html target=blank>RFC 3412 -  Message Processing and Dispatching for the Simple Network Management Protocol (SNMP) (Obsoletes: 2572, 2272, 2262)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3413.html target=blank>RFC 3413 -  SNMP Applications  (Obsoletes: 2573, 2273, 2263)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3414.html target=blank>RFC 3414 -  User-based Security Model (USM) for version 3 of the Simple Network Management Protocol (SNMPv3) (Obsoletes: 2574, 2274, 2264)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3415.html target=blank>RFC 3415 -  View-based Access Control Model (VACM) for the Simple Network Management Protocol (SNMP) (Obsoletes: 2575, 2275, 2265)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2741.html target=blank>RFC 2741 -  Agent Extensibility (AgentX) Protocol Version 1 (Obsolete: 2257)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.scguild.com/agentx/ target=blank> IETF AgentX Working Group</A></td></tr>
            <TR><td>Ch0x4. </td><td width=87%><A HREF="http://www.faqs.org/rfcs" target=blank>IETF RFC網際網路標準文件網站</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.ietf.org/rfc.html target=blank> IETF Working Groups (for RFC documents)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.cse.ohio-state.edu/cs/Services/rfc/index.html target=blank> RFC index from Ohio State University</A></td></tr>
            <TR><td>Ch0x5. </td><td width=87%><font color=red>Assignment#3: </font><A HREF="Analyzer.zip">Hifn Analyzer</A> (網管軟體, 15MB, 書附光碟)</td></tr>
            <TR><td>Ch0x6. </td><td width=87%>網路管理相關技術參考網站：</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.snmplink.org/ target=blank> SNMP Link</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.simpleweb.org/ target=blank> SimpleWeb</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.simple-times.org/ target=blank> The Simple Times</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.ethermanage.com/ethernet/ target=blank> Charles Spurgeon's Ethernet Web Site</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.mrtg.org/ target=blank> Multi Router Traffic Grapher (MRTG)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.opennms.org/ target=blank> Open source for NMS -- Bluebird</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://sourceforge.net/ target=blank> SourceForge Net-SNMP</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.linkwan.com/ target=blank> 中國寬頻網 </A></td></tr>
            <TR><td><A HREF="07-ch07.pdf">Ch07. </td><td width=87%>Management Information Bases (MIBs) </A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1155.html target=blank>RFC 1155 -  Structure and Identification of Management Information for TCP/IP-based Internets (SMIv1) (Obsolete: 1065)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2578.html target=blank>RFC 2578 -  Structure of Management Information Version 2 (SMIv2) (Obsolete: 1902)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1156.html target=blank>RFC 1156 -  Management Information Base for Network Management of TCP/IP-based internets (MIB-I) (Obsolete: 1066)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc1213.html target=blank>RFC 1213 -  Management Information Base for Network Management of TCP/IP-based internets: MIB-II (Obsolete: 1158)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2790.html target=blank>RFC 2790 -  Host Resources MIB (Obsolete: 1514)</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3418.html target=blank>RFC 3418 -  Management Information Base (MIB) for the Simple Network Management Protocol (SNMPv2) (Obsoletes: 1450, 1907) *</A></td></tr>
            <TR><td><A HREF="08-ch08.pdf">Ch08. </td><td width=87%>Remote Network Monitoring Management Information Base (RMON) </A>(OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2819.html target=blank>RFC 2819 -  Remote Network Monitoring Management Information Base (RMONv1) (Obsolete: 1757)</A></td></tr>
            <TR><td><A HREF="09-ch09.pdf">Ch09. </td><td width=87%>RMON MIB v2 (RMON2)</A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2021.html target=blank>RFC 2021 -  Remote Network Monitoring Management Information Base Version 2 using SMIv2 (RMONv2)</A></td></tr>
            <TR><td><A HREF="10-ch10.pdf">Ch10. </td><td width=87%>Desktop Managements</A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.dmtf.org/standards/dmi/ target=blank> Desktop Management Interface (DMTF)</A></td></tr>
            <TR><td></td><td width=87%><A HREF="DMI2_0s_specification.pdf" target=blank>桌上型電腦管理介面DMI 2.0s標準文件</A></td></tr>
            <TR><td></td><td width=87%><A HREF="DMI-to-SNMPMapping.pdf" target=blank>DMI to SNMP Mapping Standard</A></td></tr>
            <TR><td><A HREF="11-ch11.pdf">Ch11. </td><td width=87%>Web-based Managements </A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.dmtf.org/standards/wbem/ target=blank> Web-Based Enterprise Management (DMTF)</A></td></tr>
            <TR><td></td><td width=87%><A HREF="WebServicesforManagement.pdf" target=blank>網頁式管理介面WBEM標準文件</A></td></tr>
            <TR><td><A HREF="12-ch12.pdf">Ch12. </td><td width=87%>Secure SNMPv3 </A> (OK)</td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc2570.html target=blank>RFC 2570 -  Introduction to SNMPv3</A></td></tr>
            <TR><td></td><td width=87%><A HREF=http://www.faqs.org/rfcs/rfc3414.html target=blank>RFC 3414 -  User-based Security Model (USM) for version 3 of the Simple Network Management Protocol (SNMPv3) (Obsoletes: 2574, 2274, 2264)</A></td></tr>
            <TR><td>Ch0x7. </td><td width=87%><A HREF="../lab/rikki_topics.pdf">Radio Resource Management (RRM) in 3G/4G mobile networks</a></td></tr>
            <tr><td></td><td><br /><b><font color="red">[End]</font></b></td></tr>
        </TABLE>
    </CENTER>



    <footer class="container-fluid text-center">
        <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    </footer>

</body>
</html>
