<?php require('config/database.php');?>
<?php
     if (isset($_POST['id']) AND ! empty($_POST['id'])) {
   	if (isset($_POST['per']) AND ! empty($_POST['per'])) {
   		
   		$id=htmlspecialchars($_POST['id']);
   		$per=htmlspecialchars($_POST['per']);

   		$req=$connect->prepare('UPDATE commande SET per=:per WHERE id=:id');

   		$res=$req->execute(array(
   			'id'=>$id,
   			'per'=>$per));

   		if ($res) {
   			header('location:factdiv.php');
   		}else{
   			header('location:factdiv.php');
   		}
   	}else{
         header('location:factdiv.php');
      }
   	
   }else{
      header('location:factdiv.php');
   } 



 ?>