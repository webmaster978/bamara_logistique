<?php include'config/database.php';
  if (empty($_SESSION['user'])) {
  header('location:../index.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nos abonnees</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="img/b.jpg" type="image/jpg">
  <!-- Bootstrap 3.3.7 -->
  <?php include'part/_link.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

      <span class="logo logo-lg"><b>Admin-</b><b style="color: #D2691E">BAMARA</b><b>-Log</b> </span>
    <nav class="navbar navbar-static-top">
      
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
              
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/b.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Bamara</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/b.jpg" class="img-circle" alt="User Image">

                <p>
                  Bamara-Logistique
                  <small>2019-2020</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Deconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </div>

    </nav>
  </header>
  

  <?php include'part/_aside.php' ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facturation
        
      </h1>
      
    </section>
    <table class="table table-responsive-md text-center" id="table" class="table">

        <thead>
          

          <tr>
          
            <th class="text-center">Numero</th>
            <th class="text-center">Date de service</th>
            
            <th class="text-center">Type de service</th>
            <th class="text-center">Detail de service</th>
            <th class="text-center">Abonné</th>
            <th class="text-center">Date de Realisation</th>
            <th class="text-center">Heure</th>
            <th class="text-center">Etat</th>
            <th class="text-center">Personne</th>
            <th class="text-center">Montant</th>
            <th class="text-center">val</th>
            <th class="text-center">Facture</th>


          </tr>
        </thead>
        <tbody >
                
                     
                        <?php
                
             $service = $connect->prepare('SELECT * FROM services '); 
             
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?><tr>
                        <td class="pt-3-half" contenteditable="false"><?=$s->ida;?></td>  
                        <td class="pt-3-half" contenteditable="false"><?=$s->datec;?></td>
                        
                        <td class="pt-3-half" contenteditable="false"><?=$s->type;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->detail;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->username;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->datej;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->heure;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->val;?></td>
                        <td class="pt-3-half" contenteditable="false"><?=$s->per;?></td>
                      
                      <td class="pt-3-half" contenteditable="false"><?=$s->fin;?></td>
            <td>
              <span class="table-update">
                <td><a href="fpdf/tutorial/tuto5.php?ida=<?php echo $s->ida; ?>">Facturer</td>
               </span>
            </td>
            
          </tr>
         
         
        </tbody>
       

                     <?php
                   endforeach;


                      ?>
                   
         </table> 
        </div>


    
           

  
    
      
      
        
  </div>
  </div>
  <!-- /.content-wrapper -->
  <?php include 'part/_foot.php'; ?>

  <!-- Control Sidebar -->
  
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>

</body>
</html>
