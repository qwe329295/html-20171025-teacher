<?php
session_start();
include('func.php');
?>
<?php


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

        .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
            color: #fff;
            background-color: #0fff1a;
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
        <?php bar(0) ?>
    </div>
</nav>


<div class="jumbotron">
    <div class="container text-center">
        <h1 style="font-family: 'Rock Salt', cursive;">陳瑞奇(Jui-Chi Chen) <img
                    src="http://csie.asia.edu.tw/images/teacher/rikki1042.jpg" width="110" style="border-radius: 70px;">
        </h1>
        <p style="font-family: 'Kranky', cursive;">professor of Asia University</p>
    </div>
</div>
<div class="container" style="background-color: #92dd94;border-radius: 10px; margin-bottom: 20px">
    <h2>個人簡歷</h2>
    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#home"><span style="color: #60cccb">基本資料</span></a></li>
        <li><a data-toggle="pill" href="#menu1"><span style="color: saddlebrown">學歷與經歷</span></a></li>
        <li><a data-toggle="pill" href="#menu2"><span style="color: #a00296">辦公室</span></a></li>
        <li><a data-toggle="pill" href="#menu3"><span style="color: #a00296">Mail Address</span></a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <?php
            include("mysql_connect.inc.php");
            $sql = "SELECT * FROM firstpage1 where id = 1";
            $result = $link->query($sql);
            $row = $result->fetch_row();
            ?>
            <p><?php echo $row[1]; ?></p>
            <p><?php echo $row[2]; ?></p>

        </div>
        <div id="menu1" class="tab-pane fade">
            <?php
            include("mysql_connect.inc.php");
            $sql = "SELECT * FROM firstpage2 where id = 1";
            $result = $link->query($sql);
            $row = $result->fetch_row();
            ?>
            <p><?php echo $row[1]; ?></p>
            <p><?php echo $row[2]; ?></p>
            <p><?php echo $row[3]; ?></p>
            <p><?php echo $row[4]; ?></p>
        </div>
        <div id="menu2" class="tab-pane fade">
            <?php
            include("mysql_connect.inc.php");
            $sql = "SELECT * FROM firstpage3 where id = 1";
            $result = $link->query($sql);
            $row = $result->fetch_row();
            ?>
            <p><?php echo $row[1]; ?></p>
            <p><?php echo $row[2]; ?></p>
            <p><?php echo $row[3]; ?></p>
            <p><?php echo $row[4]; ?></p>
        </div>
        <div id="menu3" class="tab-pane fade">
            <?php
            include("mysql_connect.inc.php");
            $sql = "SELECT * FROM firstpage4 where id = 1";
            $result = $link->query($sql);
            $row = $result->fetch_row();
            ?>
            <p><?php echo $row[1]; ?></p>
            <p><?php echo $row[2]; ?></p>
            <p><?php echo $row[3]; ?></p>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3643.5721582672886!2d120.68521641538389!3d24.0461479833298!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693b17a99d736b%3A0x1c471d70cdc89dc9!2z5Lqe5rSy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1515554367341"
                width="600" height="450" frameborder="0" style="border:0" allowfullscreen　></iframe>
    </div>
</div>


<footer class="container-fluid text-center">
    <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T COPY</p>
    <p style="font-size: small;color:whitesmoke">圖片來源 http://www.jordangrimmer.co.uk/q6uergcr3pm6d8d545g47ufqx9mcbx</p>
</footer>

</body>
</html>
