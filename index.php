<?php
session_start();
include ('func.php');
?>
<?php
if (isset($_SESSION['id'])){
    include ("mysql_connect.inc.php");

    $sql = "SELECT * FROM user where username = '$id'";
    $result=$link->query($sql);
    $row=$result->fetch_row();
}
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
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Rock+Salt" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet">
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
        .nav-pills>li.active>a, .nav-pills>li.active>a:focus, .nav-pills>li.active>a:hover {
            color: #fff;
            background-color: #dd5855;
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
        <?php bar(0) ?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1 style="font-family: 'Rock Salt', cursive;">陳瑞奇(Jui-Chi Chen)  <img src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110" style="border-radius: 70px;"></h1>
        <p style="font-family: 'Kranky', cursive;">professor of Asia University</p>
    </div>
</div>
<div class="container" style="background-color: #dd837a;border-radius: 10px; margin-bottom: 20px">
    <h2>個人簡歷</h2>
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home"><span style="color: #a00296">基本資料</span></a></li>
        <li><a data-toggle="pill" href="#menu1"><span style="color: #a00296">學歷與經歷</span></a></li>
        <li><a data-toggle="pill" href="#menu2"><span style="color: #a00296">辦公室</span></a></li>
        <li><a data-toggle="pill" href="#menu3"><span style="color: #a00296">Mail Address</span></a></li>
    </ul>

    <div class="tab-content" >
        <div id="home" class="tab-pane fade in active">
            <h3>基本資料</h3>
            <p>姓名：陳瑞奇／Jui-Chi Chen</p>
            <p>    任職單位：資訊工程學系 副教授</p>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>經歷</h3>
            <p>國立中興大學 資訊科學 博士</p>
            <p>    亞洲大學副教授</p>
            <p>  亞洲大學助理教授</p>
            <p>    新竹工研院電腦與通訊工業研究所工程師</p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>office</h3>
            <p> Room HB13 (B1 of Computer Sci. Bldg)</p>
            <p>Tel: (04)2332-3456 ext. 20013</p>
            <p>Fax: (04)2330-5737</p>
            <p>E-mail:rikki@asia.edu.tw</p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <p>Department of Computer Science and Information Engineering</p>
            <p>  Asia University</p>
            <p>   500, Lioufeng Rd., Wufeng District, Taichung 41354, Taiwan </p>
        </div>
    </div>
</div>


<footer class="container-fluid text-center">
    <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
</footer>

</body>
</html>
