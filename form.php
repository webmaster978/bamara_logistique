<?php require('config/database.php') ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<?php include('parcials/_link.php') ?>
<body>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">BAMARA Logistique</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>
    <div class="container">
    	<h1 style="color: blue;"><strong>Completer ce formulaire pour finalisé votre inscription</strong></h1>
    	<div class="col-md-5">
    		<fieldset style="border: black;">

    		    <form action="for.php" method="POST">
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Nom de l'entreprise :</b></label>
    				    <input type="text" class="form-control" name="nom">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Siege social :</b></label>
    				    <input type="text" class="form-control" name="siege">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Adresse physique :</b></label>
    				    <input type="text" class="form-control" name="addresse">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Adresse gmail:</b></label>
    				    <input type="email" class="form-control" name="mail">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Nom d'utilisateur :</b></label>
    				    <input type="text" class="form-control" name="username">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Mot de passe :</b></label>
    				    <input type="password" class="form-control" name="password">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Confirmer le mot de passe :</b></label>
    				    <input type="password" class="form-control" name="password2">
    			    </div>
    			    <div class="control-group">
    				    <div class="controls"></div>
    				    <label><b>Contact :</b></label>
    				    <input type="text" class="form-control" name="contact">
    			    </div><br>
    			    <input type="submit" class="btn btn-primary" name="inscrire" value="S'inscrire">
                    
               </form>

            </fieldset>   
    	</div>
    </div>
     
    <br>
    
</body>
</html>