<?php require('config/database.php');?>

<?php 
if (isset($_POST['entre']) AND ! empty($_POST['entre'])) {
	if (isset($_POST['siege']) AND ! empty($_POST['siege'])) {
		if (isset($_POST['adresse']) AND ! empty($_POST['adresse'])) {
			if (isset($_POST['contact']) AND ! empty($_POST['contact'])) {
				if (isset($_POST['detail']) AND ! empty($_POST['detail'])) {
					

				$entre=htmlspecialchars($_POST['entre']);
				$siege=htmlspecialchars($_POST['siege']);
				$adresse=htmlspecialchars($_POST['adresse']);
				$contact=htmlspecialchars($_POST['contact']);
                $detail=htmlspecialchars($_POST['detail']);

                $req=$db->prepare('INSERT INTO abonne(entre,siege,adresse,contact,detail,idc,datec) VALUES (:entre,:siege,:adresse,:contact,:detail,:idc,now()) ');

                $res=$req->execute(array(
                	'entre'=>$entre,
                	'siege'=>$siege,
                	'adresse'=>$adresse,
                	'contact'=>$contact,
                	'detail'=>$detail,
                	'idc'=>$_SESSION['user']['id']
                ));

                if ($res) {
                	$user->con($res[0]->id);
                	header('location:user/prin.php');
                }else{
                	header('location:page.php');
                }

				}else{
					header('location:page.php');
				}

			}else{
				header('location:page.php');
			}
		}else{
			header('location:page.php');
		}
	}else{
		header('location:page.php');
	}
}else{
	header('location:page.php');
}



 ?>