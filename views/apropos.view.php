<?php require('config/database.php');?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Contacter nous</title>
    <meta name="author" content="joel jt">
    <link rel="icon" href="img/b.jpg" type="image/jpg">
    

    <title></title>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    
    <?php include('parcials/_li.php') ?>

     <style>
        
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

  <body>
    <style>
        
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


   <?php include('parcials/_nav.php') ?>
   <div class="preloader"></div>


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
                
                    <h1 class="mb-4" style="text-align: center;"><strong>CONTACTER </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>

    <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">
    

            <!-- <h4 style="text-align: center;"> <b>DETAIL DE CONTACT</b> </h4> -->
            <h4 class="mb-4" style="text-align: center;"><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h4>
                <p class="mb-4">
                     <br>Bangui :1155,Avenue Ruth Rolland,Miskine-5eme<br>Quartier: walingba 1 <br></p>
                     <div class="col-md-6 ">
                       <i class="fa fa-phone"> Contact : </i>
                          +236-70503624
                    
                         | +236-72563624
                        
                    
                       | +236-75563624
                                
                    
                            | + 236-72503624
                     </div>
                     <br>
                
                    
                <p><i class="fa fa-envelope"></i> 
                    <abbr title="Email">Email</abbr> : <a href="">bamara_logistique.yahoo.fr <br> | info.logisticsbamara@yahoo.com </a>
                </p>
                <p><i class="fa fa-clock"></i> 
                    <abbr title="Heure"> Heure de travail </abbr> : 7 jours /7 ; 24h/24 </p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="#"><i class="fab fa-facebook"></i> bamara-logistique</a> <br>
                        <a href="#"><i class="fab fa-linkedin"></i>      bamara-logistique</a><br>
                         <a href="#"><i class="fab fa-twitter"></i>      @bamara-logistique</a> <br>
                         <a href="#"><i class="fab fa-google-plus"></i>     bamara_logistique.yahoo.fr</a>
                    </li>
                </ul>

                <!-- <img src="img/b.jpg"> -->


          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">


             <div>
                      <h4> <strong>Pour nous envoyer un message</strong> </h4>
                <form action="message.php" method="POST">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><strong>Nom complet :</strong></label>
                            <input type="text" class="form-control" name="nom">
                            
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><strong>Numero de telephone :</strong></label>
                            <input type="number" class="form-control" name="numero">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><strong>Adresse Mail :</strong></label>
                            <input type="email" class="form-control" name="gmail">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label><strong>Message :</strong></label>
                            <textarea rows="10" cols="100" class="form-control" name="message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    
                   
                    <button type="submit" class="btn btn-primary"><strong>Envoyer message</strong></button>
                   
                </form>
            </div>

           
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
    
   


                     <?php 
                     if (isset($_GET['err']) AND !empty($_GET['err'])) {

                       if (isset($_GET['errs']) And !empty($_GET['errs']) ) {
                         if (sha1($_GET['err']) == $_GET['errs']) {
?>

                     <script type="text/javascript">
                       Swal.fire({
                       icon: 'error',
                       title: 'message non envoyer',
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
                        title: 'Message envoyer avec succes',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>
<?php 
                         }
                       }
                     }
                  ?>
            
                 
 </div>
    <?php include('parcials/_footer.php') ?> 