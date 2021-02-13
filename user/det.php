<?php require('config/database.php');?>
<?php

     
   	if (isset($_POST['detail']) AND ! empty($_POST['detail'])) {
   		
   
   		$detail=htmlspecialchars($_POST['detail']);

   		$req=$db->prepare('UPDATE abonne SET detail=:detail WHERE idc=:idc');

   		$res=$req->execute(array(
   			
   			'detail'=>$detail,
            'idc' => $_SESSION['user']['id']
         ));

   		if ($res) {
   			header('location:pro.php');
   		}else{
   			header('location:pro.php');
   		}
   	
   	
   }else{
      header('location:pro.php');
   }



 ?>