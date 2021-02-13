
    <title></title>
    
  <body>

   <div class="container">
      <div class="row">
            <div class="col-lg-12">
                <ol class="breadcrumb">
                    <h1 style="text-align: center;"><strong>SERVICES DE </strong><strong>LOGISTIQUE-</strong><strong style="color: #D2691E ">BAMARA</strong><strong>-LOGISTICS</strong></h1>
                </ol>
                
                
            </div>
        </div>
    </div>
    <div>
        
        <div class="container">
            <div class="jumbotron">
            <div class="col-lg-12">
                 <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Envoyer avec succes</p>";

                }
                ?>


               
                <h1 class="page-header"><strong>Service de netoyage</strong> </h1>
                
            </div>
       <div class="row">
            <div class="col-md-7">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/1.jpg" alt="netoyage">
                         </div>
                        <form action="jard.php" method="POST" >
                         <input type="hiden" name="val" value="pendent">
                        <input type="hiden" name="per" value="" disabled="">
                        <input type="hide" name="fin" value="0" disabled=""> 

                        <input type="hiden" name="type" value="netoyage">
                     </div>
            <div class="col-md-5">
                
                   
                
                  <?php include('parcials/_form.php') ?>
                    
                        <button type="submit" class="btn btn-primary">Passez la comande</button>

                </form>
              
            </div>
        </div>
    </div>
    </div>
    
                </div>
                
     <br>