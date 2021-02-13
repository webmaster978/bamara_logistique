<?php include'config/database.php'?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Facturation</title>
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
        Nouveau image
        
      </h1>
      
    </section>
    <form action="sette.php" method="POST" enctype="multipart/form-data">
      <div class="col-md-4">
      <div class="form-control-group">
          <label>Titre de l'image :</label>   
          <input class="form-control" type="text" name="titre"placeholder="titre"> 
      </div>
      <div class="form-control-group">
          <label>Image :</label>   
          <input class="form-control" type="file" name="img" placeholder=""> 
      </div>
      <div class="form-control-group">
        <label>Commentaire</label>
        <textarea name="detail" cols="45" rows="8" placeholder="Votre commentaire"></textarea>
        <input class="btn btn-warning" type="submit" name="" value="Enregistrer">
        
      </div>
      </div>
                
      
    </form>



        

          

  
    
      
      
        
  
  <?php include 'part/_foot.php'; ?>

  
  <div class="control-sidebar-bg"></div>
</div>

<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>


 <div class="modal fade" id="editmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Attribuer une commande</h4>

                
              </div>
              <div class="modal-body">
                <form method="POST" action="per.php">
                <div class="form-control-group">
                  <label>Numero de la commande</label>   
                  <input class="form-control" type="number" name="ida"placeholder="numero"> 
                </div>
                <div class="form-control-group">
                  <label>Nom de l'agent</label>   
                  <input class="form-control" type="text" name="per" placeholder="nom de l'agent"> 
                </div>
                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                <input class="btn btn-primary" type="submit" name="" value="Sauvegarder">
              </div>
              </form>
            </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="finmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Etat & finance </h4>

                
              </div>
              <div class="modal-body">
                <form method="POST" action="val.php">
                <div class="form-control-group">
                  <label>Numero de la commande</label>   
                  <input class="form-control" type="number" name="ida"placeholder="numero"> 
                </div>
                <div class="form-control-group">
                  <label>Etat de la commande</label>   
                  <input class="form-control" type="text" name="val" placeholder="Etat de la commande"> 
                </div>
                <div class="form-control-group">
                  <label>Montant payer</label>   
                  <input class="form-control" type="number" name="fin" placeholder="Montant"> 
                </div>
                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                <input class="btn btn-primary" type="submit" name="" value="Sauvegarder">
              </div>
              </form>
            </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        
</body>
</html>
