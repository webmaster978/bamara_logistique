<?php  

 function imgup()
{
  
  $url_img=basename($_FILES['img']['name']);


$verif_img=getimagesize($_FILES['img']['tmp_name']);

  if (isset($_FILES['img']) AND $_FILES['img']['error']== 0){
if ($_FILES['img']['size'] <= 2000000){

$infosfichier = pathinfo($_FILES['img']['name']);
$extension_upload = $infosfichier['extension'];
$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','JPG','JPEG','GIF','PNG');
// if (in_array($extension_upload,$extensions_autorisees)){
  if ($verif_img AND $verif_img[2] < 4){
if(move_uploaded_file($_FILES['img']['tmp_name'],'avatars/'.$url_img)){
   require 'config/database.php';
  
            $req=$db->prepare('UPDATE abonne SET avatar=:avatar WHERE idc=:idc');
            $req->execute(array(
              'avatar' => $_FILES['img']['name'],
              'idc'=> $_SESSION['user']['id']
            ));
            
        

header('location:pro.php');
return true;

}

}


      }

      else{

          unlink($_FILES['img']['tmp_name']);
          unset($_FILES['img']);



      }
    }


}



if(imgup()){



}
// var_dump($_FILES);

?>