<?php require('config/database.php');?>
<?php 
if (isset($_FILES['avatar']) AND ! empty($_FILES['avatar'] ['name'])) {
  $tailleMax=2097152;
  $extentionsValides = 	array('jpg','jpeg','gif','png');
  if ($_FILES['avatar'] ['size'] <= $tailleMax)
  {
     $extentionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
     if (in_array($extentionUpload, $extentionsValides))
     {
        $chemin = "user/avatars".$_SESSION['user']['id'].".".$extentionUpload;
        $resultat=move_uploaded_file($_FILES['avatar']['tmp_name'] , $chemin);
        if ($resultat) {
            $req=$db->prepare('UPDATE abonne SET avatar=:avatar WHERE idc=:idc');
            $req->execute(array(
              'avatar' => $_SESSION['user']['id'].".".$extentionUpload,
              'idc'=> $_SESSION['user']['id']));
            
        }
        else{
            $msg="erreur lors du transfert de la photo";
        }
     }
     else
     {
         $msg="votre photo doit etre au format jpg";
     }
  }
  else
  {
     $msg="Votre phto de profile ne peut pas depasser 2 Mega";
  }
}
var_dump($req)

 ?>
