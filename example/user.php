<?php
/**
 * Created by PhpStorm.
 * User: qw
 * Date: 2017/4/8
 * Time: 18:32
 */

require_once "db.php";
$username = $_POST['username'];
$password = md5($_POST['password']);

$db->query("INSERT INTO `learn`.`table1` 
(`username`, `password`, `age`, `score`) 
VALUES ('{$username}', '{$password}', '3', '4')");



