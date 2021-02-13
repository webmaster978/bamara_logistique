<?php

try{
	$db = new PDO("mysql:host=localhost;dbname=bamara", "root","");
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);

} catch(PDOExeption $e){
	die('Erreur : '.$e->getMessage());
}
require 'ss.php';
$user=new USER($db);
