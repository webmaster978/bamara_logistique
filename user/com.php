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
	<title>Mes commades</title>
</head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  
  <link href="csss/mdb.min.css" rel="stylesheet">
  
  <link href="csss/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="csss/addons/datatables.min.css">
  <link rel="stylesheet" href="csss/addons/datatables-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
  
  <link rel="stylesheet" type="text/css" href="js/scripts.js">
<body>
	<?php include('parcials/_nave.php') ?>
	<div class="sidebar-fixed position-fixed">

      <a class="logo-wrapper waves-effect">
        <?php
               
             $service = $db->prepare('SELECT * FROM abonne WHERE idc=:idc

              ');
             $service->execute(array(
                      'idc' => $_SESSION['user']['id']
                         ));  
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?>
      
        <img src="avatars/<?=$s->avatar;?>" class="img-round" alt=""><br>
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
                  
                    echo "$users"  ;


                }
            ?></a>
            <span>/</span>
            <span>Mes commandes</span>
          </h4>

        </div>

      </div>
    
      <div class="">

        
        
        <div class="">

         
          <div class="card">
            <div class="">
		 <div class="">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">MES COMMANDES</h3>
  
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2"><a href="#!" class="text-success"><i
            class="fas fa-plus fa-2x" aria-hidden="true"></i></a></span>
      <table class="table table-responsive-md text-center">
        <thead>
          <tr>
           

            
            <th class="text-center">Date de service</th>
            
            <th class="text-center">Type de service</th>
            <th class="text-center">Detail de service</th>
            
            <th class="text-center">Date de Realisation</th>
            <th class="text-center">Heure</th>
            <th class="text-center">obs</th>
            <th class="text-center">Montant</th>
            


          </tr>
        </thead>
        <tbody id="table">
		 <?php
               
		         $service = $db->prepare('SELECT * FROM services where idc=:idc ');
		         $service->execute(array(
                      'idc' => $_SESSION['user']['id']
                         ));  
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?> 
              <tr>
                 
            <td class="pt-3-half" contenteditable="false" ><?=$s->datec;?></td>
            
            <td class="pt-3-half" contenteditable="false"><?=$s->type;?></td>
            <td class="pt-3-half" contenteditable="false"><?=$s->detail;?></td>
            <td class="pt-3-half" contenteditable="false"><?=$s->datej;?></td>
            <td class="pt-3-half" contenteditable="false" ><?=$s->heure;?></td>
            <td class="pt-3-half" contenteditable="false"><?=$s->val;?></td>
            <td class="pt-3-half" contenteditable="false"><?=$s->fin;?></td>
            
            
          </tr>
                        
                          

                     <?php
                   endforeach;


                      ?>
             </table> 
             
            

	</div>
  </div>
  </div>
  </div>
            <section>
     
        <div>



     

       






        	 <div class="row wow fadeIn">

        
        
        <div class="col-md-6 mb-4">

         
          <div class="card">

            <section>

              
              
              <div class="modal fade" id="modalLoginAvatarDemo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                aria-hidden="true">
                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                  <!--Content-->
                  <div class="modal-content">

                   
                    <div class="modal-header">
                      <img src="img/b.jpg" class="rounded-circle img-responsive"
                        alt="Avatar photo">
                    </div>
                    
                    <div class="modal-body text-center mb-1">

                      <h5 class="mt-1 mb-2">Joel jt</h5>

                      <div class="md-form ml-0 mr-0">
                        <input type="text" class="form-control ml-0" id="form1" placeholder="nom d'utilisateur">
                        
                        <input type="password" class="form-control ml-0" id="form2" placeholder="mot de passe">
                        
                      </div>

                      <div class="text-center mt-4">
                        <button class="btn btn-cyan">Se connecter
                          <i class="fas fa-sign-in-alt ml-1"></i>
                        </button>
                      </div>
                    </div>

                  </div>
                 
                </div>
              </div>
             
              
              
            </section>
           
            

          </div>
          

        </div>
        
      </div>
      

    </div>
  </main>
  
  
<?php include 'parcials/_foot.php'; ?>

</body>
</html>