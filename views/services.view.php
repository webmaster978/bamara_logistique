<?php require('config/database.php');
 $pub = $db->query('SELECT * FROM users');
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nos services</title>
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
        .mage{
          width: 400px;
          height: 250px;
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
                
                    <h1 class="mb-4" style="text-align: center;"><strong>SERVICES DE </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>
    

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
            


    <div class="jumbotron">
        <div class="row">
          <?php while ($g= $pub->fetch())  {?>
            <div class="col-md-4">
              <div class="card  mb-4 box-shadow">
                <img class="card-img-top mage" src="gestion/upload/<?=$g['image'];?>" alt="Card image cap">
                <div class="card-body">
                    <h4><strong><?=$g['first_name'];?></strong></h4>
                  <p class="card-text"><?=$g['last_name'];?> </p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                        
                    </div>
                     <a class="btn btn-primary" href="<?=$g['passwords'];?>">Commander &raquo;</i></a>
                  </div>
                </div>
              </div>
            </div>
             <?php } ?>
     
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jssor.slider.mini.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/selectFx.js"></script>
    <script src="js/bootstrap-datepicker.min.js"></script>
    <script src="js/starrr.min.js"></script>
    <script src="js/nivo-lightbox.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/scripts.js"></script>
    
    <br>
    <br>
    <br>     
    <?php include('parcials/_footer.php') ?> 