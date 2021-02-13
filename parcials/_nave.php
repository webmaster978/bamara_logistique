 <nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">
      <div class="container">

        
        <a class="navbar-brand waves-effect" href="" target="">
          <strong class="blue-text">BAMARA</strong>
        </a>

        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link waves-effect" href="prin.php" >Acceuil</a>
            </li>
            <li class="nav-item">
               <a class="nav-link waves-effect" href="com.php" >Mes commandes</a>
           
            <li class="nav-item">
              
             <a class="nav-link waves-effect" href="pro.php" >Profil</a>
          </ul>

          
          <ul class="navbar-nav nav-flex-icons">
            
           
             <?php
                if($_SESSION['user']['username'] !== array()){
                    $users = $_SESSION['user']['username'];
                  
                    echo "Connecter ent tant que :$users"  ;

                }
            ?>
            <li class="nav-item">
             
              <a href="logout.php" class="nav-link border border-light rounded waves-effect"
                target="_blank">
                <i class="fas fa-sign-in-alt ml-1"></i>Deconnexion
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>