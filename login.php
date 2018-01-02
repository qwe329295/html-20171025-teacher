<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/22
 * Time: 上午 10:52
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <audio autoplay loop>
        <source src="bluebird.mp3" type="audio/mpeg">
    </audio>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
<link href="login.css" rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<div class="container">
    <div class="row login_box">
        <div class="col-md-12 col-xs-12" align="center">
            <div class="line"><h3>ASIA UNIVERSITY</h3></div>
            <div class="outter"><img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="image-circle"/></div>
            <h1>Hi Guest</h1>
            <span>TAIWAN</span>
        </div>


        <div class="col-md-12 col-xs-12 login_control">
            <form name="form" method="post" action="connect.php">
            <div class="control">
                <div class="label">Email Address</div>
                <input type="text" class="form-control" value="Username" name="id"/>
            </div>

            <div class="control">
                <div class="label">Password</div>
                <input type="password" class="form-control" value="123456" name="pw"/>
            </div>
            <div align="center">
                <button class="btn btn-orange" type="submit">LOGIN</button>
            </div>
            </form>

        </div>



    </div>
</div>

</body>
</html>