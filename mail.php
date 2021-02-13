<?php require('config/database.php');?>
<?php   
 if (isset($_POST['mail']) AND ! empty($_POST['mail'])) {
 	$mail=htmlspecialchars($_POST['mail']);


 	$req=$db->prepare('SELECT * FROM login WHERE mail=:mail ');

 	$req->execute(array(
 		'mail' => $_POST['mail']
 	   ));

 	while ($don = $req->fetch())
      {
        // echo  $don['password'];


          $dest = "$mail";
          $sujet = "Recuperation du mot de passe";
          $mess = "Votre mot de passe est :";
          $corp = $don['password'];
          $corp = $don['username'];
          
		  $headers = "From: jtjoel11@gmail.com";
		  if (mail($dest, $sujet, $mess, $corp, $headers)) {
		    echo "	Votre mot de passe vous a été envoyer à $dest ...";
		  } else {
		    echo "Échec de l'envoi de l'email veuillez verifier votre mail ou votre connexion a ete interrompus ...";
		  }

      }


 }else{
    	echo "err";
    } 




?>