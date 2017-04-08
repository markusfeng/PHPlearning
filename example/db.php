<?php
/**
 * Created by PhpStorm.
 * User: qw
 * Date: 2017/4/8
 * Time: 18:15
 */
$dbms='mysql';     //数据库类型
$host='localhost'; //数据库主机名
$dbName='learn';    //使用的数据库
$user='homestead';      //数据库连接用户名
$pass='secret';          //对应的密码
$dsn="$dbms:host=$host;dbname=$dbName";
//var_dump($dsn);
$db = new PDO($dsn, $user, $pass); //初始化一个PDO对象
