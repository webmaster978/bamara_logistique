<?php require('config/database.php');?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Connexion</title>
    <meta name="description" content="joel jt">
    <?php include('parcials/_li.php') ?>
    
   
   <style type="text/css">
    html,
    body,
    header,
    .carousel {
      height: 60vh;
    }

    @media (max-width: 740px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {

      html,
      body,
      header,
      .carousel {
        height: 100vh;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      .navbar:not(.top-nav-collapse) {
        background: #929FBA !important;
      }
    }
   
        
        .preloader{
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999999;
            width: 100%;
            height: 100%;
            background-color: #fff;
            background-image: url(img/Preloader_7.gif);
            background-repeat: no-repeat;
            background-position: center center;
        }

    

  </style>
</head>
 
    <?php include('parcials/_nav.php') ?>




<div class="preloader"></div>
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

          
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                
                    <h1 class="mb-4" style="text-align: center;"><strong>CONNEXION A </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>
    

     <section class="view intro-2">
      <div class="justify-content-center align-items-center">
        <div class="container">
          <div>
            <div class="col-xl-12 col-md-12">

            
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                 <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                       echo "<p style='color:red;font-size:20px;'>nom d'utilisateur ou mot de passe incorrect</p>";

                }
                ?>
                <div class="card-body">

                  
                  <div class="form-header purple-gradient">

                    <h3 class="font-weight-500 my-2 py-1"><i class="fas fa-user"></i> Se connecter :</h3>
                  </div>

                  <form method="POST" action="verification.php">
                  <div class="md-form">
                    <i class="fa fa-user prefix white-text"></i>
                    <input type="text" id="orangeForm-name" class="form-control" name="username" placeholder="nom d'utilisateur">
                
                  </div>
                  

                  <div class="md-form">
                    <i class="fa fa-lock prefix white-text"></i>
                    <input type="password" id="orangeForm-pass" class="form-control" placeholder="mot de passe" name="password">
                  
                  </div>
                  

                  <div class="text-center">
                    <input class="btn purple-gradient btn-lg" type="submit" name="" value="Se connecter">ou
                  </form>
                  <a class="btn purple-gradient btn-lg" href="inscription.php"> S'inscrire</a>
                 
    
                  </div>
                  <a href="pwd.php">Mot de passe oublier??</a>

                </div>
              </div>
            

            </div>
          </div>
        </div>
      </div>
    </section>
 
    <?php include('parcials/_footer.php') ?> 