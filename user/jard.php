<?php require('config/database.php');?>
<?php 

$err=1;
$errs=sha1(1);
$succ=10;
$succs=sha1(10);

if (isset($_POST ['datej']) AND ! empty($_POST['datej'])) {
	
			if (isset($_POST['detail']) AND ! empty($_POST['detail'])) {
				if (isset($_POST['heure']) AND ! empty($_POST['heure'])) {
			
				$heure=htmlspecialchars($_POST['heure']);
				$fin=htmlspecialchars($_POST['fin']);
				$datej=htmlspecialchars($_POST['datej']);
				
				$detail=htmlspecialchars($_POST['detail']);
				$type=htmlspecialchars($_POST['type']);
				$val=htmlspecialchars($_POST['val']);
				$per=htmlspecialchars($_POST['per']);

                
			    
			    
			   	
			   

			   	$req=$db->prepare('INSERT INTO services(datej,heure,type,detail,val,per,fin,idc,datec) VALUES(:datej,:heure,:type,:detail,:val,:per,:fin,:idc,now())');
				$res=$req->execute(array(
				
                'heure'=>$heure,
                'datej'=>$datej,
                'type'=>$type,
                'detail'=>$detail,
                'val'=>$val,
                'per'=>$per,
                'fin'=>$fin,
                'idc'=>$_SESSION['user']['id']


                 ));
				if ($res) {
	             header('location:prin.php?succ='.$succ.'&succs='.$succs);
                }else{
	           header('location:prin.php?err='.$err.'&errs='.$errs);
                }


			
		}else{
			header('location:prin.php?err='.$err.'&errs='.$errs);
		}
		
	}else{
		header('location:prin.php?err='.$err.'&errs='.$errs);
	}
	
}else{
	header('location:prin.php?err='.$err.'&errs='.$errs);
}


 ?>