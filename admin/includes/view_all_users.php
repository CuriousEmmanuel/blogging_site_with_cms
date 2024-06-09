       <table class="table table-bordered table-hover">
           <thead>
                  <tr>
                       <th>id</th>
                       <th>username</th>
                       <th>firstname</th>
                       <th>lastname</th>
                       <th>email</th>
                       <th>role</th>
                      
                      
                   </tr>
                  
               
           </thead>
                 <tbody>
<?php
$query = "SELECT * FROM users";
$select_users = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_users)) {
$user_id= $row['user_id'];
$username= $row['username'];
$user_password= $row['user_password'];
$user_firstname= $row['user_firstname'];
$user_lastname= $row['user_lastname'];
$user_email= $row['user_email'];
$user_image= $row['user_image'];
$user_role= $row['user_role'];


echo "<tr>";
echo "<td>{$user_id}</td>";
echo "<td> {$username}</td>";
echo "<td>{$user_firstname}</td>";

// $query = " SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
// $select_categories_id = mysqli_query($connection,$query);

// while ($row = mysqli_fetch_assoc( $select_categories_id)) {
// $cat_id = $row["cat_id"];
// $cat_title = $row["cat_title"];

// echo "<td> {$cat_title }</td>";

// }

echo "<td>{$user_lastname}</td>";
echo "<td>{$user_email }</td>";
echo "<td>{$user_role}</td>";







// $query = "SELECT * FROM posts WHERE post_id = $comment_post_id";
// $select_post_id_query = mysqli_query($connection, $query);
// while ($row = mysqli_fetch_assoc($select_post_id_query)) {
//     $post_id = $row['post_id'];
//     $post_title = $row['post_title'];

//     echo "<td> <a href='../post.php?p_id={$post_id}'>{$post_title}</a></td>";
// }



echo "<td><a href = 'comments.php?approve='>approve</a></td>";
echo "<td><a href = 'comments.php?unapprove='>unapprove</a></td>";
echo "<td><a href = 'comments.php?delete='>delete</a></td>";
echo "</tr>";

}//source=edit_post&post_id the amber sign helps using multiple parameters to specify exactly where you want that link to take you

?>

                     
                 </tbody>
       </table>

       <?php

if (isset($_GET['approve'])) {
 $the_comment_id=$_GET['approve'];

 $query = "UPDATE comments SET comment_status = 'approved'WHERE comment_id = $the_comment_id";

 $comment_aprove_query = mysqli_query($connection, $query);
  header("location:comments.php");

}




if (isset($_GET['unapprove'])) {
 $the_comment_id=$_GET['unapprove'];

 $query = "UPDATE comments SET comment_status = 'unapproved'WHERE comment_id = $the_comment_id";

 $comment_unaprove_query = mysqli_query($connection, $query);
  header("location:comments.php");
}






if (isset($_GET['delete'])) {
 $the_comment_id=$_GET['delete'];

 $query = "DELETE FROM comments WHERE comment_id =  {$the_comment_id}";

 $comment_delete_query = mysqli_query($connection, $query);
  header("location:comments.php");

}
// we need to refresh the table automatically

   ?>