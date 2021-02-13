<?php include'config/database.php'?>
<?php

//index.php

include('database_connection.php');

$query = "
  SELECT * FROM category 
ORDER BY category_name ASC
";

$result = $connect->query($query);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Facturation</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="icon" href="img/b.jpg" type="image/jpg">
  <!-- Bootstrap 3.3.7 -->
  <?php include'part/_link.php' ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">

      <span class="logo logo-lg"><b>Admin-</b><b style="color: #D2691E">BAMARA</b><b>-Log</b> </span>
    <nav class="navbar navbar-static-top">
      
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
              
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="img/b.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">Bamara</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="img/b.jpg" class="img-circle" alt="User Image">

                <p>
                  Bamara-Logistique
                  <small>2019-2020</small>
                </p>
              </li>
              <!-- Menu Body -->
             
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Deconnexion</a>
                </div>
              </li>
            </ul>
          </li>
          
          
        </ul>
      </div>

    </nav>
  </header>
  

  <?php include'part/_aside.php' ?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Facturation des commandes abonnées
        
      </h1>
      
    </section>

      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-lg-9">Facturation commandes abonnes</div>
            <div class="col-lg-3">
              <input class="btn btn-primary" type="submit" name="" value="agent" data-target="#editmodal" data-toggle="modal">

              <input class="btn btn-success" type="submit" name="" value="Etat & finance" data-target="#finmodal" data-toggle="modal">
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table id="sample_data" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Abonne</th>
                  <th>Type de services</th>
                  <th>detail</th>
                  <th>Date realisation</th>
                  <th>Heure</th>
                  <th>Date d'envoies </th>
                  <th>Etat </th>
                  <th>Personne</th>
                  <th>Fin </th>
                  
                  
                  

                </tr>
              </thead>
            </table>
          </div>
        </div>
      </div>
    </div>
    
 

<script type="text/javascript" language="javascript">

$(document).ready(function(){
  
  var dataTable = $('#sample_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
      url:"fetch_pending.php",
      type:"POST"
    },
      dom: 'lBfrtip',
   buttons: [
    
   ],
   "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ]
  });
  
  $('#column_name').selectpicker();

  $('#column_name').change(function(){

    var all_column = ["0", "1", "2", "3", "4","5"];

    var remove_column = $('#column_name').val();

    var remaining_column = all_column.filter(function(obj) { return remove_column.indexOf(obj) == -1; });

    dataTable.columns(remove_column).visible(false);

    dataTable.columns(remaining_column).visible(true);

  });

}); 

$(document).ready(function(){

  $('.select2').select2({
    placeholder:'Select Category',
    theme:'bootstrap4',
    tags:true,
  }).on('select2:close', function(){
    var element = $(this);
    var new_category = $.trim(element.val());

    if(new_category != '')
    {
      $.ajax({
        url:"add.php",
        method:"POST",
        data:{category_name:new_category},
        success:function(data)
        {
          if(data == 'yes')
          {
            element.append('<option value="'+new_category+'">'+new_category+'</option>').val(new_category);
          }
        }
      })
    }

  });

});

</script>

</script>


        

          

  
    
      
      
        
  
  <?php include 'part/_foot.php'; ?>

  
  <div class="control-sidebar-bg"></div>
</div>

<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>


 <div class="modal fade" id="editmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Attribuer une commande</h4>

                
              </div>
              <div class="modal-body">
                <form method="POST" action="per.php">
                <div class="form-control-group">
                  <label>Numero de la commande</label>   
                  <input class="form-control" type="number" name="ida"placeholder="numero"> 
                </div>
                <input type="hidden" name="pending">
                <label>Agents</label>
                  <select name="per" id="category" class="form-control">
                 <?php
                foreach($result as $row)
                 {
                  echo '<option value="'.$row['category_name'].'">'.$row['category_name'].'</option>';
               }
                 ?>
          </select>
                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                <input class="btn btn-primary" type="submit" name="" value="Sauvegarder">
              </div>
              </form>
            </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="modal fade" id="finmodal">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Etat & finance </h4>

                
              </div>
              <div class="modal-body">
                <form method="POST" action="val.php">
                <div class="form-control-group">
                  <label>Numero de la commande</label>   
                  <input class="form-control" type="number" name="ida"placeholder="numero"> 
                </div>
                <?php $s = $connect->query('SELECT fact FROM services ORDER BY ida DESC LIMIT 1');  ?>
              <?php while ($f = $s->fetch())  {?>
          
                <input type="hidden" name="ee" value="<?=$f['fact'];?>">

            
             <?php } ?>

                <div class="form-control-group">
                  <label>Etat de la commande</label>   
                  <!-- <input class="form-control" type="text" name="val" placeholder="Etat de la commande">  -->
                  <select class="form-control" name="val" >
                    <option value="effectuer" >effectuer</option>
                  </select>
                </div>
                <div class="form-control-group">
                  <label>Montant payer</label>   
                  <input class="form-control" type="number" name="fin" placeholder="Montant"> 
                </div>
                 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Fermer</button>
                <input class="btn btn-primary" type="submit" name="" value="Sauvegarder">
              </div>
              </form>
            </div>
             
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>


        
</body>
</html>
