<?php require('config/database.php');?>
<?php
    if (isset($_POST['username']) && isset($_POST['password'])) 
    {
       
     	$username=htmlspecialchars($_POST['username']);
     	$password=htmlspecialchars($_POST['password']);

     	$requete=$connection->prepare('SELECT * FROM admin where  username=:username and password=:password');
     	$requete->execute(array( 
     		'username'=>$username,
            'password'=>$password
     	));

     	$res=$requete->fetchAll(PDO::FETCH_OBJ);

     	if ($res) {
     		
     		header('location: 1.php');
     	}else{
     		header('location: ../index.php');
     	}

     } 


 ?>