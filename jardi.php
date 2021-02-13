<?php require('config/database.php');?>
<?php 

$err=1;
$errs=sha1(1);
$succ=10;
$succs=sha1(10);

if (isset($_POST ['nom']) AND ! empty($_POST['nom'])) {
	if (isset($_POST['numero']) AND ! empty($_POST['numero'])) {
		if (isset($_POST['mail']) AND ! empty($_POST['mail'])) {
			if (isset($_POST['adresse']) AND ! empty($_POST['adresse'])) {
				if (isset($_POST['detail']) AND ! empty($_POST['detail'])) {
					if (isset($_POST['type']) AND ! empty($_POST['type'])) {
						if (isset($_POST['heure']) AND ! empty($_POST['heure'])) {
							
							
						



				$heure=htmlspecialchars($_POST['heure']);
				
				$nom=htmlspecialchars($_POST['nom']);
				$numero=htmlspecialchars($_POST['numero']);
				$gmail=htmlspecialchars($_POST['mail']);
				$adresse=htmlspecialchars($_POST['adresse']);
				$detail=htmlspecialchars($_POST['detail']);
				$type=htmlspecialchars($_POST['type']);
				$per=htmlspecialchars($_POST['per']);
				$val=htmlspecialchars($_POST['val']);
				$date=htmlspecialchars($_POST['date']);
				$fin=htmlspecialchars($_POST['fin']);
				$date=date('Y-m-d');
				
			


			   	
			   	

			   	$req=$db->prepare('INSERT INTO commande(nom,numero,gmail,adresse,datej,heure,type,detail,val,per,fin,datec) VALUES(:nom,:numero,:gmail,:adresse,:datej,:heure,:type,:detail,:val,:per,:fin,now())');
				$res=$req->execute(array(
				'heure'=>$heure,	
				'nom'=>$nom,
				'numero'=>$numero,
				'gmail'=>$gmail,
				'adresse'=>$adresse,	
                'datej'=>$date,
                'type'=>$type,
                'val'=>$val,
                'per'=>$per,
                'fin'=>$fin,
                'detail'=>$detail
               

                 ));
				if ($res) {
	           header('location:services.php?succ='.$succ.'&succs='.$succs);
                }else{
	            header('location:services.php?err='.$err.'&errs='.$errs);
                }
                


			   		

}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}	
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}
}else{
	header('location:services.php?err='.$err.'&errs='.$errs);
}

		
	


?>