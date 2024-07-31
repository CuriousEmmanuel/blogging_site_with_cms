<?php

function users_online(){

if(isset($_GET['onlineusers'])){
global $connection;

if(!$connection){

    session_start();
    include("../includes/db.php");


$session = session_id();
$time = time();
$time_out_in_seconds = 30;
$time_out = $time - $time_out_in_seconds;



$query = "SELECT * FROM users_online WHERE session =' $session'";
$send_query = mysqli_query($connection,$query);
$count = mysqli_num_rows($send_query);

if($count == NULL){
    mysqli_query($connection, "INSERT INTO users_online(session,time) VALUES('$session','$time')");
}else{
     mysqli_query($connection, "UPDATE users_online SET time = '$time' WHERE session = '$session'");
}
$user_online_query = mysqli_query($connection, "SELECT * FROM users_online WHERE time >'$time_out'");
echo $count_users = mysqli_num_rows($user_online_query);

}




}//if isset() clossing br


}

users_online();


///////////////////////////////////////////////////////////////////////////////////

function insert_categories(){

	    global $connection;// make the connection global because its private by default and we cant use it in other files if its private we need it tobe public

	        if (isset($_POST['submit'])){
         echo "<h1>hello</h1>";

         $cat_title = $_POST['cat_title'];

         if ($cat_title == "" || empty($cat_title)) {
          
           echo "this field cannot be empty";
         } else{

            $query = "INSERT INTO categories (cat_title) VALUES ('{$cat_title}')";
           

            $create_category_query = mysqli_query($connection,$query);

            if (!$create_category_query) {
              die('failed'. mysqli_error($connection));
            }
         }
        }



}

//////////////////////////////////////////////////////////////////////////////////////
function getAllACategories(){
	global $connection;

$query = "SELECT * FROM categories";
$select_categories = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_categories)) {
$cat_id = $row["cat_id"];
$cat_title = $row["cat_title"];
//USING ROWS FROM HTML
echo "<tr>";
echo "<td>{$cat_id}</td>";
echo "<td>{$cat_title}</td>";
echo "<td><a href='categories.php?delete={$cat_id}'>Delete</a></td>";
echo "<td><a href='categories.php?edit={$cat_id}'>Edit</a></td>";
echo "</tr>";
}
}

//////////////////////////////////////////////////////////////////////////////////////
function DeleteQuery(){
	global $connection;

	 //DELETE QUERY
       if (isset($_GET['delete'])) {
       $delete_cat_id = $_GET['delete'];
       $query = "DELETE FROM categories WHERE cat_id = {$delete_cat_id}" ;
       $delete_query = mysqli_query($connection, $query);
       //we need to automatically refress the page once the id is sent so that it can be updated
       header("location:categories.php");
   }

}

////////////////////////////////////////////////////////////////////////////////////

function confirmquery($result){
 
 global $connection;

  if (!$result) {
  die('QUERY FAILED!!! '. mysqli_error($connection));
}


}

?>
