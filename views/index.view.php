<?php require('config/database.php');
  $pub = $db->query('SELECT * FROM users'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Bienvenue</title>

    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">

  <?php include('parcials/_li.php') ?>
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
        .mage{
          width: 300px;
          height: 200px;
        }

    </style>
  
  <?php include('parcials/_nav.php') ?>
  
  
  <div class="preloader"></div>
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

   
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      <li data-target="#carousel-example-1z" data-slide-to="3"></li>
      <li data-target="#carousel-example-1z" data-slide-to="4"></li>
    </ol>
    
    <div class="carousel-inner" role="listbox">

     
      <div class="carousel-item active">
        <div class="view" style="background-image: url('img/1.jpg'); background-repeat: no-repeat; background-size: cover;">

          
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>SERVICE DE NETOYAGE</strong>
              </h1>

              <p class="mb-4 d-none d-md-block">
                <strong> Nous somme disponibles du Lundi au Lundi 24h/24 pour le service de nettoyage vous pouvez nous contacter n'importe quand pendant la journée ou la nuit pour nettoyer vos salles de fête, salles de réunion,..... Nous disposons d'un personnel compéttant, des matériels appropriés et satisfaisants pour rendre votre espace sain et prêt pour les autres services , Nous offrons un service bien fait et vite fait, </strong>
              </p>

              
            </div>
           

          </div>
          

        </div>
      </div>
      
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

          
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>SERVICE DE JARDINAGE</strong>
              </h1>
               <p class="mb-4 d-none d-md-block">
                <strong> Avez-vous besoin de voir des beaux jardins ? Avez-vous envie de vivre un jardin paradique ? <strong style="color: #D2691E ">Bamara</strong> une solution vite faite et bien faite pour matérialiser votre rêve vous faire vivre un environnement agréable à voir et à sentir Un service disponible tous les jours à <strong style="color: #D2691E ">Bamara</strong> avec un personnel compétant et des matériels appropriés Merci de passer une commande pour expérimenter un service Vite fait et bien fait </strong>
              </p>

             
            </div>
            <!-- Content -->

          </div>
         

        </div>
      </div>
      <div class="carousel-item">
        <div class="view" style="background-image: url('img/3.jpg'); background-repeat: no-repeat; background-size: cover;">

          
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>SERVICE D'ENTRETIENT DES CAMPS ET SITE</strong>
              </h1>
               <p class="mb-4 d-none d-md-block">
                <strong> Nous vous offrons tous les services de Gestion des sites, camps et autres infrastrictures.
                 </strong>
              </p>

             
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>

    

    
      <div class="carousel-item">
        <div class="view" class="img img-responsive" style="background-image: url('img/g.jpg'); background-repeat: no-repeat; background-size: cover;">

        
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            
            <div class="text-center white-text mx-5 wow fadeIn">
              <h1 class="mb-4">
                <strong>ENTRETIENT DES ESPACES VERTS</strong>
              </h1>

             
              <p class="mb-4 d-none d-md-block">
                <strong>
                  Créeons et entretenons les espaces verts pour tous vos besoins.(Terrain de Golf, de foot et autres)
                </strong>
              </p>

              
            </div>
            

          </div>
          

        </div>
      </div>
      

    </div>

    
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    

  </div>




   <div class="jumbotron">
        <div >
          <h3><strong > BIENVENUS SUR </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h3><br>
          <p>
            <div class="row">
            
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i>Netoyage</h4>
                    </div>
                    <div class="panel-body">
                        <p>Nous somme disponibles du Lundi au Lundi 24h/24 pour le service de nettoyage vous pouvez nous contacter n'importe quand pendant la journée ou la nuit pour nettoyer vos salles de fête, salles de réunion,.....
                        Nous  disposons d'un personnel compéttant, des  matériels appropriés et satisfaisants pour rendre votre espace sain et prêt pour les autres services , 
                        Nous offrons un service bien fait et vite fait, </p>
                        <a href="services.php" class="btn btn-warning">Suite</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Jardinage </h4>
                    </div>
                    <div class="panel-body">
                        <p>Avez-vous besoin de voir des beaux jardins ?
                         Avez-vous envie de vivre un jardin paradique ? 
                         Bamara une solution vite faite et bien faite pour matérialiser votre rêve vous faire vivre un environnement agréable à voir et à sentir
                         Un service disponible  tous les jours à Bamara avec un personnel compétant et des matériels appropriés
                         Merci de passer une commande pour expérimenter un service Vite fait et bien fait</p>
                        <a href="services.php" class="btn btn-warning">Suite</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Enlevement des ordures</h4>
                    </div>
                    <div class="panel-body">
                        <p>Avez-vous des ordures à enlevez ?
                           Avez-une poubèle à réguliérement vider ?
                           Avez-vous des salleté à dégager ?
                           Bamara, un fidèle partenaire vous offre un services bien fait et vite fait contactez-nous ou passez une commande pour experimenter nos services</p>
                        <a href="services.php" class="btn btn-warning">Suite</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
      </div>
      <section class="bg-center bg-cover" style="background: url(img/b.jpg)">
      <div class="dark-overlay py-5">
        <div class="overlay-content text-white">
          <div class="container py-5">
            <header class="text-center">
              <div class="row">
                <div class="col-lg-9 mx-auto">
                  <p class="h6 mb-1 text-uppercase text-primary mb-3">La qualiter fait la difference</p>
                  <h2 class="h1 mb-5"><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h2><a class="btn btn-primary" href="services.php"> services</a>
                </div>
              </div>
            </header>
          </div>
        </div>
      </div>
    </section>

    <section class="py-5">
      <div class="container py-5 text-center">
        <header class="mb-5">
          <div class="row">
            <div class="col-lg-7 mx-auto">
              <p class="h6 text-uppercase text-primary mb-0">Nos services :</p>
              <h2 style="color: #4285F4">Nous creeons des solutions a toute vos problemes de logistique</h2>
            </div>
          </div>
        </header>
        
         <div class="row">
                  <?php while ($g= $pub->fetch())  {?>
                    <div class="col-md-4 col-xs-12">
                        <div class="px-4 py-5 border border-width-md border-dash h-100">
                            <img class="mage" src="gestion/upload/<?=$g['image'];?>"><br>
                            <h3 class="h5"><?=$g['first_name'];?></h3>
                            <p class="serv-desc">
                               <?=$g['last_name'];?>
                            </p>
                            
                            
                        </div>
                        <br>
                    </div>
                    
                    <?php } ?>

                </div>



      </div>
    </section>
    <!-- Divider Section -->
    <section class="bg-cover bg-center" style="background: url(img/5.jpg)">
      <div class="primary-overlay py-5">
        <div class="overlay-content">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg-7 text-center text-lg-left mb-4 mb-lg-0">
                <h2 class="text-white mb-2"><strong>LOGISTIQUE-BAMARA-LOGISTICS</strong></h2>
                <p class="text-white mb-0">Nous fesons un travail vite et propre juste pour satisfaire nos clents sur le plan logistique</p>
              </div>
              <div class="col-lg-3 ml-auto text-center text-lg-right"><a class="btn btn-outline-light" href="inscription.php">Devenir abonnés</a></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Features Section -->
    <section class="py-5 bg-light">
      <div class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-5 px-lg-0">
            <div class="bg-primary pr-lg-3"><img class="img-fluid w-100" src="img/b.JPG" alt=""></div>
          </div>
          <div class="col-lg-7 px-lg-0">
            <div class="p-4 p-md-5 shadow bg-white">
              <p class="h6 mb-1 text-primary mb-3">Pourquoi choisir <strong>LOGISTIQUE - </strong><strong style="color: #D2691E "> BAMARA </strong><strong> - LOGISTICS</strong></p>
              <h2 class="mb-5" style="color: black">We Provide Experts To Create A Great Value For Your Business</h2>
              <div class="row">
                <div class="col-lg-9">
                  <ol class="list-numbers mb-0">
                    <li class="mb-4">
                      <h5 style="color: black;">L'emploie des jeunes</h5>
                      <p class="text-small text-muted">Nous proposons de petits emplois qui permettent à ces jeunes de se familiariser avec l’univers du travail et surtout de commencer quelque part, afin d’acquérir l’expérience et la rigueur exigées pour avoir le standard recherché par les Organismes/Organisations/Agences internationales et autres privés, avec lesquels <strong>Logistiaue - </strong><strong style="color: #D2691E ">Bamara </strong><strong> - Logistics</strong> travail déjà</p>
                    </li>
                    <li class="mb-4">
                      <h5 style="color: black;"> Nous traitons le probleme qui affectent notre environnement</h5>
                      <p class="text-small text-muted"> un service de nettoyage, de jardinage, d’entretien des espaces verts, d’enlèvement et de traitement des ordures ménagères qui est opérationnel 24H/24 et 7J/7, de location des materiel</p>
                    </li>
                    <li class="mb-4">
                      <h5 style="color: black;">Beneficial Strategies</h5>
                      <p class="text-small text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat. </p>
                    </li>
                    <li>
                      <h5 style="color: black;">Build Solid Human Resource</h5>
                      <p class="text-small text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Video Section -->
    
    


<script src="js/leaflet.js"></script>
  
<?php include('parcials/_footer.php') ?>

    

