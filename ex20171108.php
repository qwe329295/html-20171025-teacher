<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2017/11/8
 * Time: 上午 10:06
 */
$r=$_POST['r'];
$g=$_POST['g'];
$b=$_POST['b'];

$n=$_POST['n'];
$m=$_POST['m'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> ex</title>
</head>


<table border="1">
<?php
echo"<body style=background-color:rgb($r,$g,$b);>";
for($i=1;$i<=$n;$i++) {
    echo"<tr>";
    for($j=1;$j<=$m;$j++){
        echo  "<td><span style='font-size: 1.3em'>".$i*$j."   "."</span></td>";
    }echo "<tr/>";
}
    ?>
</table>
</body>
    </html>