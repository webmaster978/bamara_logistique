<?php require('config/database.php');?>
<?php


session_start();//demarer la session
// historique de la session

$user_chek = $_SESSION['login_user'];

//
$query = "SELECT username FROM login where username = '$user_chek'";
$ses_sql = mysqly_query($conn, $query);
$row = mysqly_fetch_assoc($ses_sql);
$login_session = $row['username']

?>