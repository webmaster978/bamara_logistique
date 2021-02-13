<?php require('config/database.php') ?>
<?php 
if (empty($_SESSION['user'])) {
  header('location:connexionn.php');
}

 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inscription finale</title>
    <meta name="description" content="">
    <meta name="author" content="joel jt">
    
    <?php include('parcials/_li.php') ?>

  </head>

  <body style="background-image: url('img/1.jpg');">
    <div class="container">
    <div class="col-md-12">
      <h1 style="color: blue;">
        <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "Bienvenue $users"  ;

                }
            ?>
      </h1>

       <form style="text-align: center;" method="POST" action="page1.php">
        <h1 class="h3 mb-3 font-weight-normal"><strong>Finaliser votre inscription</strong> </h1>
       <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Nom de L'entreprise :</b></label>
                <input type="text" class="form-control" name="entre" placeholder="Nom de L'entreprise">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Siege social :</b></label>
                <input type="text" class="form-control" name="siege" placeholder="Siege social">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Adresse complete :</b></label>
                <input type="text" class="form-control" name="adresse" placeholder="votre adresse complete">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Contact :</b></label>
                <input type="number" class="form-control" name="contact" placeholder="contact">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>A propos de votre entreprise :</b></label>
                <input type="text" class="form-control" name="detail" placeholder="Bref detail de l'entreprise">
              </div>
              <input class="btn btn-primary" type="submit" name="" value="S'abonner">
              <p class="mt-5 mb-3 text-muted">&copy; 2020 reserved by <strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></p>
        </div>
        </div>
        <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                       echo "<p style='color:red;font-size:20px;'>Completer tout les champ</p>";

                }
                ?>
    </form>

    </div>
   




  	  
  


  	
 </body>
 </html>