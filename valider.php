<?php require('config/database.php');?>
<?php
if (isset($_GET['id']) AND !empty($_GET['id'])) {
$id=$_GET['id'];
$demande = $db->prepare('SELECT * FROM demande WHERE id=:id');
$demande->execute(array(
'id'=>$id
));
$res=$demande->fetchAll(PDO::FETCH_OBJ);
if ($res) {
$email= $res[0]->gmail;
  $dest = $email;
  $sujet = "Email de test";
  $corp = "Salut ceci est un email de test envoyer par un script PHP";
  $headers = "From: jtjoel11@gmail.com";
  if (mail($dest, $sujet, $corp, $headers)) {
    echo "Email envoyer avec succes a $dest ";
  } else {
    echo "Échec de l'envoi de l'email";
  }






	
}



}
?>