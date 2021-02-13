<?php 
$connect = new PDO("mysql:host=localhost;dbname=bamara", "root", "");
require 'user.class.php';
$user=new USER($connect);
?>

