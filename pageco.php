<?php require('config/database.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Connexion pour la premiere fois</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="joel jt">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <?php include('parcials/_li.php') ?>

  </head>

  <body style="background-image: url('img/b.jpg');">

    <div class="row">
      <div class="col-sm-3">
      
      </div>
      <div class="col-sm-5">
        <div class="jumbotron">
      <div class="row">
        <div class="">
          <div class="container">
            <form style="text-align: center;" method="POST" action="pagec.php">
        <h1 class="h3 mb-3 font-weight-normal"><strong>Connecter vous pour la premiere fois</strong> </h1>
       <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Nom d'utilisateur :</b></label>
                <input type="text" class="form-control" name="username" placeholder="nom d'utilisateur">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Mot de passe :</b></label>
                <input type="password" class="form-control" name="password" placeholder="mot de passe">
              </div>
              <input class="btn btn-primary" type="submit" name="" value="Se connecter">
              <p class="mt-5 mb-3 text-muted">&copy; 2020 reserved by <strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></p>
        </div>
    
      </div>
        </div>
    </form>

          </div>

       
    </div>
   
      </div>
    </div>



    




  	  
  


  	
 </body>
 </html>