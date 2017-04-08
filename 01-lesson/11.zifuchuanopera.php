
/**
 * Created by PhpStorm.
 * User: qw
 * Date: 2017/3/25
 * Time: 17:58
 */

<?php
$x=100;
$y="100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a=50;
$b=90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);

$t=1;
while ($t<5){
    echo "这个数据是$t<br>".PHP_EOL;
    $t++;

}
$t=1;
do{
    echo "这个数据是$t<br>".PHP_EOL;
    $t++;

}while($t<=8);

$i=0;
for ($i=0;$i<=8;$i++){

    echo "你好中国$i".PHP_EOL;
}

$color=array("red","green","blue","brown");
$arrleght=count($color);
echo "$arrleght".PHP_EOL;
for ($x=0;$x<$arrleght;$x++)
{
    echo "$color[$x]";

}
foreach ($color as $value){
    echo "$value".PHP_EOL;
}
function familyname($lastname,$years){
    echo "$lastname zhang.born in $years";

}
familyname("ming","1987");