<?php require('config/database.php');?>
<?php

$suc=20;
$sucs=sha1(20);
$er=2;
$ers=sha1(2);

     if (isset($_POST['ida']) AND ! empty($_POST['ida'])) {
   	if (isset($_POST['val']) AND ! empty($_POST['val'])) {
         if (isset($_POST['fin']) AND ! empty($_POST['fin'])) {
            
         
   		$ee=htmlspecialchars($_POST['ee']);
   		$ida=htmlspecialchars($_POST['ida']);
   		$val=htmlspecialchars($_POST['val']);
      $fin=htmlspecialchars($_POST['fin']);
      $fact= $ee + $fin;

   		$req=$connect->prepare('UPDATE services SET val=:val, fin=:fin, fact=:fact WHERE ida=:ida');

   		$res=$req->execute(array(
   			'ida' => $ida,
   			'val' => $val,
        'fin' => $fin,
        'fact' => $fact));

   		if ($res) {
   			header('location:fact.php?succ='.$suc.'&sucs='.$sucs);
   		}else{
   			 header('location:fact.php?err='.$er.'&ers='.$ers);
   		
   	// }else{
    //      header('location:fact.php?err='.$er.'&ers='.$ers);
    //   }
   	
   // }else{
   //    header('location:fact.php?err='.$er.'&ers='.$ers);
   // } 

   }
   }
   }
   }

 ?>