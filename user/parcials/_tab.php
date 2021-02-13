<div class="list-group list-group-flush">
        <a href="#" class="list-group-item active waves-effect">
          <i class="fas fa-chart-pie mr-3"></i>Tableau de bord
        </a>
        <a href="prin.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-home mr-3"></i>Aceuil</a>
        <a href="com.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-table mr-3"></i>Mes commandes</a>
        <a href="pro.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-user mr-3"></i>Profil</a>
        <a href="../logout.php" class="list-group-item list-group-item-action waves-effect">
          <i class="fas fa-sign-in-alt ml-1"></i> Deconnexion</a>
          Aujourd'huit
          <?php 
      
$today = new DateTime('today');
echo $today->format('d F, Y'), '.<br>', PHP_EOL;
     ?>
</div>
