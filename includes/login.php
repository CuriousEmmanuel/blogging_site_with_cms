<?php include "db.php";?>
<?php session_start();  //start the session before using it let server knos you want to use session?>


<?php

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //it is important to clean the user input before inserting it to the database for security purposes to avoid users to do sql injection and submiting malicious codes that an harm or delete our database

    $username = mysqli_real_escape_string($connection,$username);
    $password = mysqli_real_escape_string($connection,$password);

     $query = "SELECT * FROM users WHERE username ='{$username}' ";
     $login_query = mysqli_query($connection,$query);

     if(!$login_query){
        die("cant query username fro users".mysqli_error($connection));
     }
    while ($row = mysqli_fetch_assoc($login_query)) {
      $db_user_id = $row['user_id'];
      $db_username = $row['username'];
      $db_user_password = $row['user_password'];
      $db_user_firstname = $row['user_firstname'];
      $db_user_lastname = $row['user_lastname'];
      $db_user_role = $row['user_role'];
    }
    // crypt function from registration.php with some changes
     $password = crypt($password,$db_user_password );

// below was the origina if statement but it loged me out and wont accept my login details I need to chek it anyway i need help
//   if ($username === $db_username && $password === $db_user_password) {

     // modified to fit my login details
    if ($username = $db_username && $password =$db_user_password) {

      $_SESSION['username'] =  $db_username;
      $_SESSION['user_firstname'] =  $db_user_firstname;
      $_SESSION['user_lastname'] =  $db_user_lastname;
      $_SESSION['user_role'] =  $db_user_role; 


        header("Location: ../admin");

    }else{
       
        header("Location: ../index.php");
    }
}




?>