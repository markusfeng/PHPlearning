<?php
/**
 * Created by PhpStorm.
 * User: qw
 * Date: 2017/3/25
 * Time: 16:26
 */
//Learn PHP
//Study PHP at W3School.com.cn
//My car is a Volvosj
$txt ="Learn PHP";
$x=2.3;
var_dump($x);

$car=array("baoma","fengtiao","badao");
echo "$txt";
echo "<br>";
echo "car is a {$car[2]}";

$cars=array("Volvo","BMW","SAAB");
var_dump($cars);
?>

<?php
class Car
{
    var $color;
    function Car($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
?>
