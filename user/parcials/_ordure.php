
    

    <title></title>
    
  <body>

   
    <div class="container">
        <div class="jumbotron">
            <div class="col-lg-12">
                <h2 class="page-header"><strong>Enlevement et traitement des ordures non-toxique</strong> </h2>
            </div>
            <div class="row">
            <div class="col-md-7">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/10.jpg" alt="Card image cap">
                         </div>
                         <form action="jard.php" method="POST" >
                         <input type="hidden" name="type" value="Ordure">
                         <input type="hidden" name="val" value="pending">
                        <input type="hidden" name="per" value="" disabled="">
                        <input type="hidden" name="fin" value="0" disabled="">

                     </div>
            <div class="col-md-5">
                
                   <?php include('parcials/_form.php') ?>
                        
                        <button type="submit" class="btn btn-primary">Passez la comande</button>

                </form>
              
            </div>
        </div>
    </div>
        </div>
     
     <br>