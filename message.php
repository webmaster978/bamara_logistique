<?php require('config/database.php');?>
<?php 
$err=1;
$errs=sha1(1);
$succ=10;
$succs=sha1(10);

if (isset($_POST['nom']) AND !empty($_POST['nom'])) {
	if (isset($_POST['numero']) AND !empty($_POST['numero'])) {
		if (isset($_POST['gmail']) AND !empty($_POST['gmail'])) {
			if (isset($_POST['message']) AND !empty($_POST['message'])) {

$nom=htmlspecialchars($_POST['nom']);
$numero=htmlspecialchars($_POST['numero']);
$gmail=htmlspecialchars($_POST['gmail']);
$par=htmlspecialchars($_POST['par']);
$message=htmlspecialchars($_POST['message']);
$req=$db->prepare('INSERT INTO message(nom,numero,gmail,par,message,datec)VALUES(:nom,:numero,:gmail,:par,:message,now())');
$res=$req->execute(array(
'nom'=>$nom,
'numero'=>$numero,
'gmail'=>$gmail,
'par'=>$par,
'message'=>$message



));

if ($res) {
	header('location:contact.php?succ='.$succ.'&succs='.$succs);
}else{
	header('location:contact.php?err='.$err.'&errs='.$errs);
}

}else{
	header('location:contact.php?err='.$err.'&errs='.$errs);
}

}else{
	header('location:contact.php?err='.$err.'&errs='.$errs);
}

}else{
	header('location:contact.php?err='.$err.'&errs='.$errs);
}

}else{
	header('location:contact.php?err='.$err.'&errs='.$errs);
}



?>