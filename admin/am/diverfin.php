<?php require('config/database.php');?>
<?php 
   if (isset($_POST['id']) AND ! empty($_POST['id'])) {
   	if (isset($_POST['val']) AND ! empty($_POST['val'])) {
         if (isset($_POST['fin']) AND ! empty($_POST['fin'])) {
            
         
   		
   		$id=htmlspecialchars($_POST['id']);
   		$val=htmlspecialchars($_POST['val']);
         $fin=htmlspecialchars($_POST['fin']);

   		$req=$connect->prepare('UPDATE commande SET val=:val,fin=:fin WHERE id=:id');

   		$res=$req->execute(array(
   			'id' => $id,
   			'fin' => $fin,
            'val' => $val));

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
   	
   }else{
      header('location:factdiv.php');
   }

 ?>