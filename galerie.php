<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galerie</title>
    <meta name="description" content="">
    <meta name="author" content="joel jt">
    
    <?php include('parcials/_li.php') ?>


   

  
    
   
    
    <link rel="stylesheet" href="assets\css\cs-select.css">
    <link rel="stylesheet" href="assets\css\bootstrap-datepicker3.min.css">
    <link rel="stylesheet" href="assets\css\freepik.hotels.css">
    <link rel="stylesheet" href="assets\css\nivo-lightbox.min.css">
    <link rel="stylesheet" href="assets\css\nivo-lightbox-theme.css">
    <link rel="stylesheet" href="assets\css\style.css">

    
    <script src="assets\js\modernizr.custom.min.js"></script>
   

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

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container"><a class="navbar-brand" href="index.php">
          <h4 style="text-align: center;"><strong style="color: #D2691E ">BAMARA</strong><strong style="color: white;">-LOGISTIQUE</h4>
        </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link active" href="index.php">Acceuil</a>
              </li>
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link" href="apropos.php">A propos</a>
              </li>
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link" href="blog.php">Blog</a>
              </li>
              <li class="nav-item mx-2">
                <!-- Link--><a style="font-size: 17px;" class="nav-link" href="galerie.php">Galerie</a>
              </li>
              <li class="nav-item">
            <a style="font-size: 17px;" href="connexionn.php" class="nav-link">
              <i class="fas fa-user"></i>Connexion
            </a>
          </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

  <div class="preloader"></div>


    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

          
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                
                    <h1 class="mb-4" style="text-align: center;"><strong style="color: white;">GALERIE DE LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong style="color: white;">-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>
   
 

    <div class="mg-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="mg-filter">
              <form id="mg-filter">
                <fieldset>
                  <label class="btn btn-dark btn-main">
                    <input type="radio" name="filter" value="all" checked="checked">TOUT
                  </label>
                  
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="deluxe">Nettoyage
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="classic">
                    Jardinage
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="classic">
                    Entretient
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="deluxe">Ordure
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="deluxe">
                    Camp
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="classic">
                    Reparation
                  </label>
                  <label class="btn btn-dark">
                    <input type="radio" name="filter" value="classic">
                    Materiel
                  </label>
                </fieldset>
              </form>
            </div>
                    
               
                <div class="row" id="mg-grid">
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;classic&quot;]"><a href="img/a.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/a.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;deluxe&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;royal&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;classic&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;deluxe&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;classic&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;royal&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;royal&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;classic&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;royal&quot;]"><a href="img/5.jpg" data-lightbox-gallery="rooms"><img class="img-fluid" src="img/5.jpg" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;deluxe&quot;]"><a href="assets\images\room-11.png" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets\images\room-11.png" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
              <figure class="col-lg-4 mg-gallery-item" data-groups="[&quot;classic&quot;]"><a href="assets\images\room-12.png" data-lightbox-gallery="rooms"><img class="img-fluid" src="assets\images\room-12.png" alt=""><span class="mg-gallery-overlayer"><i class="fa fa-search-plus"></i></span></a></figure>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="assets\js\jquery.min.js"></script>
    <script src="assets\libs\bootstrap\js\bootstrap.min.js"></script>
    <script src="assets\js\owl.carousel.min.js"></script>
    <script src="assets\js\jssor.slider.mini.js"></script>
    <script src="assets\js\classie.js"></script>
    <script src="assets\js\selectFx.js"></script>
    
    <script src="assets\js\starrr.min.js"></script>
    <script src="assets\js\nivo-lightbox.min.js"></script>
    <script src="assets\js\jquery.shuffle.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets\js\gmaps.min.js"></script>
    <script src="assets\js\jquery.parallax-1.1.3.js"></script>
    <script src="assets\js\scripts.js"></script>
   
   <footer class="page-footer text-center font-small mt-4 wow fadeIn">
        

        <div style="background-color: #cc3f58;">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Bamara reste l'ideal pour vos services de logistique</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="p-2 m-2 fb-ic ml-0">
                            <i class="fab fa-facebook-f white-text mr-lg-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="p-2 m-2 tw-ic">
                            <i class="fab fa-twitter white-text mr-lg-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="p-2 m-2 gplus-ic">
                            <i class="fab fa-google-plus-g white-text mr-lg-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="p-2 m-2 li-ic">
                            <i class="fab fa-linkedin-in white-text mr-lg-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="p-2 m-2 ins-ic">
                            <i class="fab fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>

        <!--Footer Links-->
        <div class="container mt-5 mb-5 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-r">
                    <h6 style="color: white; font-size: 20px;" class="title font-bold">
                        A propos de nous
                    </h6>
                    <hr class="pink accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong> met à disposition un service de nettoyage, de jardinage, d’entretien des espaces verts, la location des materiels d’enlèvement et de traitement des ordures ménagères qui est opérationnel 24H/24 et 7J/7</p>
                     <strong style="color: green;font-size: 20px;">Toujours vite et bien</strong>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 style="font-size: 15px;" class="title font-bold">
                        <strong style="color: #D2691E ">BAMARA</strong><strong style="color: white;">-LOGISTICS</strong>
                    </h6>
                    <hr class="pink accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 100px;">
                    <div class="form-control-group">
                        <label>S'inscrire pour plus de notifications</label>
                       <input class="form-control" type="mail" name="" placeholder="votre mail">
                       <input class="btn btn-default" type="submit" name="" value="Envoyer"> 
                    </div>

                    
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-r">
                    <h6 style="color: white;font-size: 20px;" class="title font-bold">
                        Menu
                    </h6>
                    <hr class="pink accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="services.php">Nos services</a>
                    </p>
                    <p>
                        <a href="apropos.php">A propos</a>
                    </p>
                    <p>
                        <a href="galerie.php">Galerie</a>
                    </p>
                    <p>
                        <a href="blog.php">Blog</a>
                    </p>
                    <p>
                        <a href="contact.php">Aide</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="title font-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="pink accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> 1755, Av.Ruth ROLLAND-MISKINE-5 <em>em</em> Arrondissement</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i>bamara_logistique@yahoo.fr <br>  | info.logisticsbamara@yahoo.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> +236-70503624
                    
                        <!-- <i class="fas fa-phone mr-3"></i> --> | +236-72563624
                        
                    
                        <!-- <i class="fas fa-phone mr-3"></i> --> | +236-75563624
                                
                    
                        <!-- <i class="fas fa-phone mr-3"></i> -->     | + 236-72503624 <br>
                        ou <a class="btn btn-primary" href="contact.php">Envoyer-nous un message</a></p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>


    

   <!--  <hr class="my-4"> -->

    <div class="footer-copyright py-3">Allright reserved by
      © Copyright 
      <a href=""><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong> </a>2019-<?php $today = new DateTime('today');
echo $today->format('Y'), '.<br>', PHP_EOL; ?>
    </div>
    <!--/.Copyright-->

  </footer>
  
    
    
    <script src="js/popper.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
     <script src="js/jquery-slim.min.js"></script>
    <script src="js/util.js"></script>
    <script src="js/carousel.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

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

   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    

  

    <script>
      $(function() {
        
        $('#carousel-example-generic').on('slid.bs.carousel', function(event) {
          console.log('slid at ', event.timeStamp)
        })
      })
    </script>
  </body>
</html>
