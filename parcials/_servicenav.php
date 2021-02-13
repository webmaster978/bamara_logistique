<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">BAMARA Logistique</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="principale.php">Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comm.php">Mes commandes</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profile.php">Profil</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="profilas.php">Profilas</a>
          </li>  
        </ul>
          <form class="form-inline mt-2 mt-md-0">
             <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "<p style='color:white;font-size :18px;margin-bottom:50 px;'>Connecter en tant que  : $users  </p>"  ;

                }
            ?>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="connexionn.php"> Deconnexion</a></button>
        </form>
      </div>
    </nav>