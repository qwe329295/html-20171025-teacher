<?php
function bar($num)
{
    ?>
    <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
            <li <?php if ($num == 0) echo 'class="active"'; ?>><a href="index.php"><span
                            style="color: #f21700">首頁</span></a></li>
            <li <?php if ($num == 1) echo 'class="active"'; ?>><a href="board.php"><span
                            style="color: #f21700">重要訊息公告</span></a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span style="color: #f21700">學程 </span><span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li <?php if ($num == 2) echo 'class="active"'; ?>><a href="ComputerOrganization.php"><span
                                    style="color: #f21700">計算機組織</span></a></li>
                    <li <?php if ($num == 3) echo 'class="active"'; ?>><a href="MicroprocessorSystem.php"><span
                                    style="color: #f21700">微處理器系統</span></a></li>
                    <li <?php if ($num == 4) echo 'class="active"'; ?>><a href="wifi.php"><span style="color: #f21700">無線網路</span></a>
                    </li>
                    <li <?php if ($num == 5) echo 'class="active"'; ?>><a href="webtech.php"><span
                                    style="color: #f21700">多媒體網站技術</span></a></li>
                    <li <?php if ($num == 6) echo 'class="active"'; ?>><a href="EmbeddedSystems.php"><span
                                    style="color: #f21700">嵌入式系統</span></a></li>
                    <li <?php if ($num == 7) echo 'class="active"'; ?>><a href="Network.php"><span
                                    style="color: #f21700">網站分析與管理</span></a></li>
                </ul>
            </li>


            <li <?php if ($num == 8) echo 'class="active"'; ?>><a href="book.php"><span style="color: #f21700">著作</span></a>
            </li>
            <?php if (isset($_SESSION['id'])) {
                echo '<li ><a href="allmember.php"><span style="color: #f21700">控制台</span></a></li>';
            }
            ?>
            <li><a href="http://dns2.asia.edu.tw/~rikki/RikkiRabit.pdf"><span style="color: #f21700">瑞奇的煩惱</span></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION['id'])) {
                echo '<li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>';
            } else {
                echo '<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
            }
            ?>

        </ul>
    </div>
    <?php
}

?>