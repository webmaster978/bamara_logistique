<?php require('config/database.php');?>
<?php 
if (empty($_SESSION['user'])) {
  header('location:../connexionn.php');
}

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="author" content="joel jt">
    <link rel="icon" href="../img/b.jpg" type="image/jpg">
  <title>
     <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo " Profile :: $users"  ;

                }
            ?> 
  </title>
  <link rel="stylesheet" type="text/css" href="csss/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <link href="csss/bootstrap.min.css" rel="stylesheet">
  
  <link href="csss/mdb.min.css" rel="stylesheet">
  
  <link href="csss/style.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="csss/addons/datatables.min.css">
  <link rel="stylesheet" href="csss/addons/datatables-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <link rel="stylesheet" href="css/bootstrap-datepicker3.min.css">
  
  <link rel="stylesheet" type="text/css" href="js/scripts.js">

</head>
<body > 
  <?php include('parcials/_nave.php') ?>

  <div class="sidebar-fixed position-fixed">
<?php
               
             $service = $db->prepare('SELECT * FROM abonne WHERE idc=:idc

              ');
             $service->execute(array(
                      'idc' => $_SESSION['user']['id']
                         ));  
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?>
      <a class="logo-wrapper waves-effect">
        <img src="avatars/<?=$s->avatar;?>" class="img-responsive" alt=""><br>
        <?php
                   endforeach;


                      ?>
         <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "$users"  ;


                }
            ?>
        <i class="fa fa-circle text-success">En ligne</i>
      
      </a>

      <?php include('parcials/_tab.php') ?>
    </div>
    <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">

      
      <div class="card mb-4 wow fadeIn">

        
        <div class="card-body d-sm-flex justify-content-between">

          <h4 class="mb-2 mb-sm-0 pt-1">
            <a href=""><?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "  $users"  ;

                }
            ?></a>
            <span>/</span>
            <span>Profile</span>
          </h4>

        </div>

      </div>
      

        <strong><p style="font-size: 35px;text-align: center;color: blue;" id="heure"></p></strong>

 <p id="heure"></p>
        <script type="text/javascript">  
        function heure() {
         
        var date = new Date();
                 
        var heures = date.getHours();
        var minutes = date.getMinutes();
        var secondes = date.getSeconds();
         
        if (heures < 10){
            heures = "0" + heures;
        }
         
        if (minutes < 10){
            minutes = "0" + minutes;
        }
         
        if (secondes < 10){
            secondes = "0" + secondes;
        }
 
        document.getElementById('heure').innerHTML = "Il est " + heures + ":" + minutes + ":" + secondes;
 
        setTimeout("heure()", 1000);
        }
         
        heure();
    </script>

    <?php 
                     if (isset($_GET['err']) AND !empty($_GET['err'])) {

                       if (isset($_GET['errs']) And !empty($_GET['errs']) ) {
                         if (sha1($_GET['err']) == $_GET['errs']) {

?>


                      
                     

                     <script type="text/javascript">
                       Swal.fire({
                       icon: 'error',
                       title: 'profile non Actualisé',
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
                        title: 'Profile Actualisé avec succes',
                        showConfirmButton: false,
                        timer: 1500
                        })
                    </script>

<?php 
                         }
                       }
                     }
                    
                      ?>


                      <?php
               
             $service = $db->prepare('SELECT * FROM abonne WHERE idc=:idc

              ');
             $service->execute(array(
                      'idc' => $_SESSION['user']['id']
                         ));  
                $don=$service->fetchAll(PDO::FETCH_OBJ);
                foreach($don as $s):  
                    ?>
                     

         <main>
    <div class="container-fluid">

      <section>

        <div class="modal fade" id="modalSubmitProject" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">

            
            <div class="modal-content">

              
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="far fa-newspaper"></i> Actualiser mon profil</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>

             <form method="POST" action="ab.php">
              <div class="modal-body mb-0">
                
                  <div class="control-group form-group">
                               <div class="controls"></div>
                               <label><b>*Nom de l'entreprise :</b></label>
                               <input type="text" class="form-control" name="entre" value="<?=$s->entre;?>">
                             </div>
                            <div class="control-group form-group">
                               <div class="controls"></div>
                               <label><b>*Siege social :</b></label>
                               <input type="text" class="form-control" name="siege" value="<?=$s->siege;?>">
                             </div>
              
                              <div class="control-group form-group">
                                <div class="controls"></div>
                                <label><b>*Adresse physique :</b></label>
                                <input type="text" class="form-control" name="adresse" value="<?=$s->adresse;?>">
                              </div>
              
                              <div class="control-group form-group">
                                <div class="controls"></div>
                                <label><b>*Contact :</b></label>
                                <input type="number" class="form-control" name="contact" value="<?=$s->contact;?>">
                              </div>
                  </div>
              
              <div class="modal-footer justify-content-center">
                <input class="btn btn-primary" type="submit" name="" value="Actualisé">
          </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                
              </div>
              

            </div>
            

          </div>
        </div>
        

      </section>
      

      
      <section>

        
        <div class="row ">

          
          <div class="col-lg-8 col-md-5 text-center">

            
            <div class="text- mt-3 mb-5">

              

              <button type="button" class="btn btn-info btn-rounded mt-4" data-toggle="modal" data-target="#modalSubmitProject">Editer mon profile <i class="far fa-image ml-1"></i></button>

            </div>
            
            
            

          </div>
          

        </div>
       

      </section>
     

   
  </main>






  <main>
    <div class="">

      
      <section class="section team-section">

        
        <div class="text-center">

        
          <div class="col-md-12">

         
            <div class="card-cascade cascading-admin-card user-card">

              
              <div class="admin-up d-flex justify-content-start">
               
                <div class="">

                  <h5 class="font-weight-bold dark-grey-text"> 
                    <i class="fa fa-user"></i>
                      <span class="text-muted">votre profile
                      </span></h5>
                    
                    
                </div>
              </div>
             
              <div class="">
                 
              
                <div class="row">

                  <div class="col-lg-12">


                    <div class="md-form form-sm mb-0">

                      
                      <input type="text" id="form4" class="form-control form-control-sm" value="<?=$s->entre;?>">

                      
                    </div>
                    <strong><label for="form4">*Entreprise</label></strong>

                  </div>
                  

                </div>
                
                <div class="row">

                  
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      
                      <input type="text" id="form5" class="form-control form-control-sm" value="Bamara logistique">
                      
                    </div>
                    <strong><label for="form5" class="">*Partenaire</label></strong>

                  </div>
                  
                  <div class="col-md-6">

                    <div class="md-form form-sm mb-0">
                      
                      <input type="text" id="form5" class="form-control form-control-sm" value="<?=$s->contact;?>">
                      
                    </div>
                    <strong><label for="form5" class="">*Contact</label></strong>

                  </div>
                

                </div>
                
                <div class="row">

                  
                  <div class="col-md-12">

                    <div class="md-form form-sm mb-0">
                      
                      <input type="text" id="form6" class="form-control form-control-sm" value="<?=$s->adresse;?>">
                      
                    </div>
                    <strong><label for="form6" class="">*Address</label></strong>

                  </div>
                 

                </div>
                
                <div class="row">

                  
                  <div class="col-lg-4 col-md-12">

                    <div class="md-form form-sm mb-0">
                      
                      <input type="text" id="form7" value="R-C-A" class="form-control form-control-sm" disabled>
                      
                    </div>
                    <strong><label for="form7" class="">*Pays</label></strong>

                  </div>
                  
                  <div class="col-lg-4 col-md-6">

                    <div class="md-form form-sm mb-0">
                      
                      <input type="text" id="form8" class="form-control form-control-sm" value="<?=$s->siege;?>">
                      
                    </div>
                    <strong><label for="form8" class="">*Siege</label></strong>

                  </div>
                  
                  <div class="col-lg-4 col-md-6">

                    <div class="md-form form-sm mb-0">
                     
                      <input type="text" id="form9" class="form-control form-control-sm" value="<?=$s->datec;?>" disabled>
                      
                    </div>
                     <strong><label for="form9" class="">*Date D'insription</label></strong>

                  </div>
                  

                </div>
               
                

              </div>
              

            </div>
            

          </div>
          
          <div class="col-md-6 mb-4">

            
            <div class="profile-card">

              
              <div class="avatar z-depth-1-half mb-2">

                <img src="avatars/<?=$s->avatar;?>" class="rounded-circle" style="width: 300px;" alt="" >
              </div>

              <div class="card-body pt-0 mt-0">

                <h3 class="font-weight-bold"><strong><?=$s->entre;?></strong></h3>
                
                
                
                <p class="text-muted"><?=$s->detail;?></p>

                   <?php
                   endforeach;


                      ?>
                      <form method="POST" action="i.php" enctype="multipart/form-data" >
                        <input type="file" name="img"><br>
                        <input class="btn btn-primary" type="submit" value="Actualisé">
                      </form>
                  </div>
              </div> 
          </div>


    <main>
    <div class="container-fluid">
       <section>

        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
          aria-hidden="true">
          <div class="modal-dialog cascading-modal" role="document">

            
            <div class="modal-content">

              
              <div class="modal-header light-blue darken-3 white-text">
                <h4 class=""><i class="far fa-newspaper"></i> Actualisé ma description</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>

             
              <div class="modal-body mb-0">

               
               
                          <form action="det.php" method="POST">
                            <div class="control-group form-group">
                        <div class="controls">
                            <label><strong>Description:</strong></label>
                            <textarea rows="10" cols="100" class="form-control"
                           name="detail" maxlength="999"  style="resize:none;" ></textarea>
                        </div>
               
              

              
              <div class="modal-footer justify-content-center">
                <input class="btn btn-primary" type="submit" name="" value="Actualisé">
                </form>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Annuler</button>
                
              </div>
              

            </div>
            

          </div>
        </div>
        

      </section>
      

      
      <section>

        
        <div class="row mt-5">

          
          <div class="col-lg-8 col-md-12 text-center">

            
            <div class="text-center mt-3 mb-5">

              <button type="button" class="btn btn-warning btn-rounded" data-toggle="modal" data-target="#modal">Editer la description <i class="fa fa-image ml-1"></i></button>

            </div>
         
          </div>
          

        </div>
       

      </section>
     

    </div>
  </main>
    </div>
          

        </div>
       

      </section>
     

    </div>
  </main>
  

             
<?php include 'parcials/_foot.php';  ?>
  

    

</body>
</html>