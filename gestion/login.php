<?php require('config/database.php');?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion admin</title>
     <meta name="author" content="joel jt">
 <link rel="icon" href="../img/b.jpg" type="image/jpg">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  
  <link href="css/bootstrap.min.css" rel="stylesheet">
  
  <link href="css/mdb.min.css" rel="stylesheet">

  <link href="css/style.min.css" rel="stylesheet">
  


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
<body style="background-image: url('../img/b.jpg');">
  <br>

 <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <div class="container"><a class="navbar-brand" href="../index.php">
          <h1 style="text-align: center;"><strong style="color: #D2691E ">BAMARA</strong></h1>
        </a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
    </header>



  <div class="container">

      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6" style="margin-top:100px;">
          <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                       echo "<p style='color:red;font-size:20px;'>nom d'utilisateur ou mot de passe incorrect</p>";

                }
                ?>




          
            <div class="card">
              <div class="card-header">Connexion admin</div>
              <div class="card-body">
                <form method="POST" action="verification.php">
                  <div class="form-group">
                    <label>Nom d'utilisateur :</label>
                      <input type="text" name="username" class="form-control" placeholder="nom d'utilisateur" />
                    </div>
                  <div class="form-group">
                    <label>Mot de passe :</label>
                    <input type="password" name="password" id="user_password" class="form-control" placeholder="mot de passe" />
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-info" value="Se connecter" />
                  </div>
                </form>
                
              </div>
            </div>
        </div>
       
      </div>
  </div>
  
  
   
   
    </div>
    </div>







    

</body>
</html>