<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <meta name="description" content="">
    <meta name="author" content="">
    

    <title></title>
    <?php include('parcials/_li.php') ?>
  <body>

    
    <div class="container">
      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><strong>Service de jardinage</strong></h1>
                <ol class="breadcrumb">
                    <li><a href="services.php">SERVICES</a>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container">





      


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
            <div class="col-md-7">
                <a><div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
                         </div>
                    <br><br>
                    <div class="row"> 
       <div class="col-md-11">
         <div class="container">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
                         </div>
            <div class="container">
              <div class="carousel-caption text-left">
               
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/jard.jpg" alt="Card image cap">
                         </div>
            <div class="container">
              <div class="carousel-caption">
                
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/5.jpg" alt="Card image cap">
                         </div>
            <div class="container">
              <div class="carousel-caption">
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/co.jpg" alt="Card image cap">
                         </div>
            <div class="container">
              <div class="carousel-caption text-right">
                
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
       </div>
     </div>
                </a>
            </div>

            <div class="col-md-5">
              <?php include('parcials/_form1.php') ?> 
              
                
                        <input type="hidden" name="type" value="Jardinage">
                    
                    <button type="submit" class="btn btn-primary">Passez la comande</button>
                   </div>
                  
                </form>
                
            </div>
        </div>
    </div>
    </div>
    
     <br>
     
     <br>
      <br>
       <br>
        <br>


      <?php include('parcials/_footer.php') ?> 