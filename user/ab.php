<?php require('config/database.php');?>

<?php 

$err=1;
$errs=sha1(1);
$succ=10;
$succs=sha1(10);


if (isset($_POST['entre']) AND isset($_POST['siege']) AND isset($_POST['adresse']) AND isset($_POST['contact'])) {
 
  		$entre=htmlspecialchars($_POST['entre']);
  		$siege=htmlspecialchars($_POST['siege']);
  		$adresse=htmlspecialchars($_POST['adresse']);
  		$contact=htmlspecialchars($_POST['contact']);
      
    


  		$req=$db->prepare('UPDATE abonne SET entre=:entre, siege=:siege, adresse=:adresse, contact=:contact WHERE idc=:idc');

  		$res=$req->execute(array(
  			'entre'=>$entre,
  			'siege'=>$siege,
  			'adresse'=>$adresse,
  			'contact'=>$contact,
  			'idc'=>$_SESSION['user']['id']
  		));

  		if ($res) {
  			header('location:pro.php?succ='.$succ.'&succs='.$succs);
  		}else{
  			header('location:pro.php?err='.$err.'&errs='.$errs);
  		}
  	
}else{
  header('location:pro.php?err='.$err.'&errs='.$errs);
}



 ?>