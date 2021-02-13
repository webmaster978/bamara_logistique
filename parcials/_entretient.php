
    

    <title></title>
    
  <body>

   
    <div class="container">
        <div class="jumbotron">
             <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><strong>Entretient des espaces vert</strong></h1>
            </div>
        
    </div>
    <div class="container">
       <div class="row">
            <div class="col-md-7">
                         <div class="card  mb-4 box-shadow">
                           <img class="card-img-top" src="img/g.jpg" alt="Card image cap">
                         </div>
                         <form action="jard.php" method="POST" >
                         <input type="hiden" name="val" value="pendent">
                        <input type="hiden" name="per" value="" disabled="">
                        <input type="hide" name="fin" value="0" disabled="">
                         <input type="hiden" name="type" value="Entretient" >
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