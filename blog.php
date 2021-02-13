<?php require('config/database.php');
  $pub = $db->query('SELECT * FROM users ORDER BY id desc'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blogs</title>
    <meta name="description" content="">
    <meta name="author" content="joel jt">
    
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


    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view" style="background-image: url('img/5.jpg'); background-repeat: no-repeat; background-size: cover;">

          
            <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

              <!-- Content -->
              <div class="text-center white-text mx-5 wow fadeIn">
                
                    <h1 class="mb-4" style="text-align: center;"><strong>BLOGS DE </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>

              </div>
              

            </div>
            

          </div>
        </div>
      
      </div>
 
    </div>
    <br>
    <br>
 

    <div class="container">
  
        <div class="row">

            <div class="col-md-8">
                <p><i class="fa fa-clock-o"></i> Publier en Juillet 19, 2020 à 14:00 </p>
                
                
                     <div class="row">
                      <?php while ($g= $pub->fetch())  {?>
                       <div class="col-md-12">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="gestion/upload/<?=$g['image'];?>" alt="Card image cap">
                           <br>
                            <h3 class="h5"><?=$g['first_name'];?></h3>
                            <p class="serv-desc">
                               <?=$g['last_name'];?>
                            </p>
                         </div>
                     </div>
                     <?php } ?>
                    </div>

                
                
                <p>Prochainement chez <strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong>Le service de vidage de fosseptique </p>
                <a class="btn btn-primary" href="#">Voir plus <i class="fa fa-angle-right"></i></a>

                <p><i class="fa fa-clock-o"></i> Publier en Aout 03, 2020 à 17:30 </p>
                <a href="">
                    <div class="row">
                       <div class="col-md-12">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
                         </div>
                     </div>
                    </div>
                </a>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                <a class="btn btn-primary" href="#">Voir plus <i class="fa fa-angle-right"></i></a>
                
                <p><i class="fa fa-clock-o"></i> Publier en Mars 19, 2020 à 14:00 </p>
               
                <div class="row">
                       <div class="col-md-12">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/1.jpg" alt="Card image cap">
                         </div>
                     </div>
                    </div>
                
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                <a class="btn btn-primary" href="#">Voir plus <i class="fa fa-angle-right"></i></a>

               
                
                <ul class="pager">
                    <li class="previous">
                        <a href="#">&larr; precedent</a>
                    </li>
                    <li class="next">
                        <a href="#">suivant &rarr;</a>
                    </li>
                </ul>

            </div>

            
            <div class="col-md-4">

                
                <div class="well">
                    <h4>Recherche du blog</h4>
                    <div class="input-group">
                        <input type="text" class="form-control">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                    
                </div>

                
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                                <li><a href="#">Category Name</a>
                                </li>
                            </ul>
                        </div>
                       
                    </div>

                    
                </div>

                
                <div class="well">
                    <h4><strong>Logistique-</strong><strong style="color: #D2691E ">Bamara</strong><strong>-Logistics</strong></h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
                <div class="row">
                       <div class="col-md-12">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/vo.jpg" alt="Card image cap">
                         </div>
                     </div>
                    </div>
                <div class="jumbotron">
                    <h1>ANNONCE !!!</h1>
                    <h4><strong>besoin de recrutement</strong></h4>
                <strong>Logistique-</strong><strong style="color: #D2691E ">Bamara</strong><strong>-Logistics</strong> a le réel plaisir de vous informés qu'il cherche un personnel dans le service de netoyage
                </div>
                

            </div>

        </div>
        </div>
   

        
   
   <?php include('parcials/_footer.php') ?> 