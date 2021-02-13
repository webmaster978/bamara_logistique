<?php
require('config/database.php')



// Si le formulaire a été bien completez
     
    if (isset($_POST ['inscrire'])){ 
    	// si les champs ont été bien complete
     	if (not_empty(['name','user','siege','email','password','password2','contact'])){

     		$_errors = [] // tableau des erreurs
     		extract($_POST);
     		if (mb_strlen($user) <5) {
     			$_errors[]="le nom d'utilisateur est tres court(minimum 5 caractere)"
     		}
     		if ( !filter_var($email, FILTER_VALIDATE_EMAIL)) {
     			$_errors[]="Adresse email invalide"
     			
     		}
     		if (mb_strlen($password) <6) {
     			$_errors[]="le mot de passe est tres court(minimum 6 caractere)"
     		}
     		else {
     			if ($password != $password2) {
     				$_errors[]="les deux mot de passe n connrespondent pas"
     			}
     			
     		}
            if(is_already_in_use('pseudo',$pseudo,'users')){
                $_errors[]="pseudo deja utiliser"
            }
             if(is_already_in_use('email',$email,'users')){
                $_errors[]="adresse email deja utiliser"
            }

            if (count (errors)==0) {
                // envoie du code d'activation

                $to = $email;
                $subject=WEBSITE_NAME."-ACTIVATION DU COMPTE"
                $token=sha1($user.$email.$password);
                ob_start()
                require('templates/email/activation.tmpl.php');
                $content = ob_get_clean()

                $headers = 'MIME-Version :1.0' ."\r\n";
                $headers.='content-type/html; charest=iso-8859-1'."\r\n";

                mail($to, $subject, $headers);

                //pour informer a l'utilisateur de verifier sa boite de reception

                echo "mail d'activation envoyer";

            }
            
     		


    } else{
    	$_errors []="Veillez remplire tout les champs svp !!!!" 


    }


?>


<?php require('views/inscription.view.php');?>