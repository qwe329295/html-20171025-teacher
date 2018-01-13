<?php
session_start();
include('func.php');
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

        .nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover {
            color: #fff;
            background-color: #ff0b01;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #000000;
            padding: 25px;
            text-shadow: 5px 5px 8px rgb(255, 2, 0);
            font-size: 2em;
        }

        body {
            position: relative;
        }

        ul.nav-pills {
            top: 52px;
            position: fixed;
        }

        div.col-sm-9 div {
            height: 16.66666%;
            font-size: 28px;
        }

        #section1 {
            color: #fff;
            background-color: #1E88E5;
        }

        #section2 {
            color: #fff;
            background-color: #673ab7;
        }

        #section3 {
            color: #fff;
            background-color: #ff9800;
        }

        #section41 {
            color: #fff;
            background-color: #00bcd4;
        }

        #section42 {
            color: #fff;
            background-color: #009688;
        }

        #section43 {
            color: #fff;
            background-color: #939600;
        }

        @media screen and (max-width: 810px ) {
            #section1, #section2, #section3, #section41, #section42, #section43 {
                margin-left: 50px;
                display: inline-block;
            }
        }
    </style>
</head>
<body style="background-color:#b0b0b0" data-spy="scroll" data-target="#myScrollspy" data-offset="10">

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
        <?php bar(8) ?>
    </div>
</nav>

<div class="container">
    <div class="row">
        <nav class="col-sm-3" id="myScrollspy">
            <ul class="nav nav-pills nav-stacked" style="background: #000000">
                <li class="active"><a href="#section1">Projects:</a></li>
                <li><a href="#section2">Certificates and honors:</a></li>
                <li><a href="#section3">Academic activities:</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Publications:<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#section41">A. Journal papers</a></li>
                        <li><a href="#section42">B. Conference papers</a></li>
                        <li><a href="#section43">C. Theses</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="col-sm-9">
            <div id="section1">
                <h1>Projects:</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM booka";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>

            </div>
            <div id="section2">
                <h1>Certificates and honors:</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM bookb";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>
            </div>
            <div id="section3">
                <h1>Academic activities:</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM bookc";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>
            </div>
            <div id="section41">
                <h1>A. Journal papers</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM book1";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>

            </div>
            <div id="section42">
                <h1>B. Conference papers</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM book2";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>

            </div>
            <div id="section43">
                <h1>C. Theses</h1>
                <?php
                include("mysql_connect.inc.php");

                $sql = "SELECT * FROM book3";
                $result = $link->query($sql);
                while ($row = mysqli_fetch_row($result)) {
                    echo "<p>$row[0]. $row[1]</p>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<footer class="container-fluid text-center">
    <p style="font-family: 'Hanalei', cursive;color: whitesmoke">@Made By 105021028 PLZ DON'T
        COPY</p>
</footer>

</body>
</html>
