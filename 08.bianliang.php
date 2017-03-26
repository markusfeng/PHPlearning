<?php
/**
 * Created by PhpStorm.
 * User: qw
 * Date: 2017/3/25
 * Time: 15:31
 */
$X = 7;
function mytest(){

    static  $y =8;
    echo $y;
    $y++;
}
mytest();
echo "<br>";
mytest();
echo " ".PHP_EOL;
mytest();
echo " ".PHP_EOL;
mytest();