<?php require('config/database.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Inscription</title>
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

  </style>

  </head>
    <body> 

   <?php include('parcials/_nav.php') ?>
   


<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

          
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                
                    <h1 class="mb-4" style="text-align: center;"><strong>INSCRIVEZ-VOUS CHEZ </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>
  

    <br>
    <br>
    <div class="row">
    <div class="col-md-8 offset-2 ">
      
        <form action="for.php" method="POST">
          <div class="jumbotron">


             <?php 
                     if (isset($_GET['err']) AND !empty($_GET['err'])) {

                       if (isset($_GET['errs']) And !empty($_GET['errs']) ) {
                         if (sha1($_GET['err']) == $_GET['errs']) {

                          
                           
                       
                    
                           

?>


                      
                     

                     <script type="text/javascript">
                       Swal.fire({
                       icon: 'error',
                       title: 'INSCRIPTION NON EFFECTUER',
                       text: 'Veuillez remplir tout les champ',
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
                        title: 'INSCRIPTION EFFECTUER AVEC SUCCES',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>

                     
                      
                    
                      

                      


<?php 
                         }
                       }
                     }
                      

 
                      ?>
            

               
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Adresse mail :</b></label>
                <input type="email" class="form-control" name="mail">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Nom d'utilisateur :</b></label>
                <input type="text" class="form-control" name="username">
              </div>
              <div class="control-group form-group">
                <div class="controls"></div>
                <label><b>Mot de passe :</b></label>
                <input type="password" class="form-control" name="password">
              </div>
             
              
              <br>
              <input type="submit" class="btn btn-primary" name="register" value="S'inscrire">
                    
               </form>
               
               





      </div>

      
    </div>
    </div>
     

     
    
    


    <?php include('parcials/_footer.php') ?> 