<?php require('config/database.php');?>

<?php
session_start();
$error='';
if (isset($_POST['submit'])) {
if (empty($_POST['username'])|| empty($_POST['password'])) {
		$error = "nom d'utilisateur ou mot de passe vide"
	}	
	else
	{
		$username=$_POST['username'];
		$password=$_POST['password'];

		

		//sql
		$query = "SELECT username, password from login Where username=? AND password=? LIMIT 1";

		//proteger my sql
		$stmt = $conn->prepare($query);
		$stmt->bind_param("ss",$username,$password);
		$stmt->execute();
		$stmt->bind_result($username, $password);
		$stmt->store_result();
		if ($stmt->fetch()) {
			$_SESSION['login_user']= $username;
			header("location :profil.php")
		}
		else{
			$error="nom d'utilisateur ou mot de passe incorect";
		}
		mysql_close($conn);
	}
 } 
 ?> 