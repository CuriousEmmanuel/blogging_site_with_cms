<?php session_start();  //start the session before using it let server knos you want to use session?>

<?php
//cancel the user session 
      $_SESSION['username'] =  null;
      $_SESSION['user_firstname'] = null; 
      $_SESSION['user_lastname'] = null;
      $_SESSION['user_role'] =  null;
      $_SESSION['username'] =  null;

//after cancelling the user session the we send em where they come from

header("Location: ../index.php");

?>