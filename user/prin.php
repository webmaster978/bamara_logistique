<?php require('config/database.php');?>
<?php 
if (empty($_SESSION['user'])) {
  header('location:../connexionn.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="joel jt">
    <link rel="icon" href="../img/b.jpg" type="image/jpg">
	<title>
   
    
		<?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "Bienvenue :: $users"  ;


                }
            ?>
	</title>
  
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  
  <link href="csss/mdb.min.css" rel="stylesheet">
  
  <link href="csss/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="csss/addons/datatables.min.css">
  <link rel="stylesheet" href="csss/addons/datatables-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="stylesheet" href="csss/bootstrap-datepicker3.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
  
  <link rel="stylesheet" type="text/css" href="js/scripts.js">
  <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
 
  

  

</head>
<body>

	<?php include('parcials/_nave.php') ?>

	<div class="sidebar-fixed position-fixed">

                      <?php
               
             $service = $db->prepare('SELECT * FROM abonne WHERE idc=:idc

              ');
             $service->execute(array(
                      'idc' => $_SESSION['user']['id']
                         ));  
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?>

      <a class="logo-wrapper waves-effect">
        <img src="avatars/<?=$s->avatar;?>" class="img-responsive" alt=""><br>
        <?php
                   endforeach;


                      ?>
        <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "$users"  ;


                }

            ?>
        <i class="fa fa-circle text-success">En ligne</i>
      </a>

     <?php include('parcials/_tab.php') ?>


    </div>

    <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      
      <div class="card mb-4 wow fadeIn">

        
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href=""><?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo " $users"  ;


                }
            ?></a>
            <span>/</span>
            <span>Aceuil</span>
          </h4>

        </div>

      </div>
    
      <div class="row wow fadeIn">

        
        
        <div class="">

         
          <div class="card">

            <section>
     
        <div>
               
        	<div class="preloader"></div>
          
               <?php include('parcials/_netoyage.php') ?>
               <?php include('parcials/_jardinage.php') ?>
               <?php include('parcials/_entretient.php') ?>
               <?php include('parcials/_ordure.php') ?>
            <?php include('parcials/_camps.php') ?>
           <?php include('parcials/_reparation.php') ?>
            <?php include('parcials/_vehicule.php') ?>
            <?php include('parcials/_materiel.php') ?>
                
                
            




             <?php 
                     if (isset($_GET['err']) AND !empty($_GET['err'])) {

                       if (isset($_GET['errs']) And !empty($_GET['errs']) ) {
                         if (sha1($_GET['err']) == $_GET['errs']) {

                          
                           
                       
                    
                           

?>


                      
                     

                     <script type="text/javascript">
                       Swal.fire({
                       icon: 'error',
                       title: 'commande non envoyer',
                       text: 'Veuillez remplir tout les champ!!! ou verifier la date',
                       footer: '<a href></a>'
                        })
                     </script>
                      
                    
                      

                      


<?php 
                         }
                       }
                     }
                      

 
                      ?>
                           <?php 
                     if (isset($_GET['succ']) AND !empty($_GET['succ'])) {

                       if (isset($_GET['succs']) And !empty($_GET['succs']) ) {
                         if (sha1($_GET['succ']) == $_GET['succs']) {
                

?>


                      
                    <script type="text/javascript">
                      Swal.fire({
                         position: 'top-end',
                         icon: 'success',
                        title: 'Commande effetuer avec succes',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>

<?php 
                         }
                       }
                     }
                      

 
                      ?>

                     






 
  </main>

  
 <?php include 'parcials/_foot.php';  ?>


 
  


</body>
</html>