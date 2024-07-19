<?php
//query to fetch the ids for the checkarray[] to be used by checkboxes
if (isset($_POST['checkBoxArray'])) {
    foreach ($_POST['checkBoxArray'] as $postValueId) {
      $bulk_options = $_POST['bulk_options'];


     switch($bulk_options) {
        case 'published':

        $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";
        $update_statusTo_published = mysqli_query($connection,$query);

        //confrmquery needs a fixing asap
       // confirmquery($update_statusTo_published);
       
        break;

        case 'draft':

        $query = "UPDATE posts SET post_status = '{$bulk_options}' WHERE post_id = {$postValueId}";
        $update_statusTo_draft = mysqli_query($connection,$query);
           
            break;

         case 'delete':

        $query = "DELETE  FROM posts WHERE post_id = {$postValueId}";
        $updateTodelete_Post_status = mysqli_query($connection,$query);

       //how does this error function supposed to be anyway its not returning any error i am starting to suspect my errorfunction is correct its just the error code itself
           if (!$updateTodelete_Post_status) {
               die('QUERY FAILED'.mysqli_error($connection)); 
            }
           
            break;


        
     }

    }
}
?>

<form action="" method="post">
       <table class="table table-bordered table-hover">
        <div id="bulkoptionContainer" class="col-xs-4">

        <select class="form-control" name="bulk_options" id="">
        <option value="">Select Options</option> 
        <option value="published">Publish</option> 
        <option value="draft">Draft</option> 
        <option value="delete">Delete</option> 
        </select>
        </div>
        <div class="col-xs-4">
            <input type="submit" name="submit" class="btn btn-success"value="Apply"><a class="btn btn-primary" href="posts.php?source=add_post">Add New</a>
        </div>
           <thead>
                  <tr>
                    <th><input type="checkBox" id="selectAllBoxes"></th>
                       <th>id</th>
                       <th>outher</th>
                       <th>title</th>
                       <th>categories</th>
                       <th>status</th>
                       <th>image</th>
                       <th>tags</th>
                       <th>comments</th>
                       <th>date</th>
                       <th>View post</th>
                       <th>Edit</th>
                       <th>Delete</th>
                   </tr>
                  
               
           </thead>
                 <tbody>
                    </form>
<?php
$query = "SELECT * FROM posts";
$select_posts = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_posts)) {
$post_id = $row["post_id"];
$post_author = $row["post_author"];
$post_title= $row["post_title"];
$post_category_id = $row["post_category_id"];
$post_status = $row["post_status"];
$post_image= $row["post_image"];
$post_tags = $row["post_tags"];
$post_comment_count = $row["post_comment_count"];
$post_date = $row["post_date"];

echo "<tr>";
//inserting checkbox td column

?>
<th><input type="checkBox" class="checkBoxes" name="checkBoxArray[]"value="<?php echo $post_id;?>"></th>
<?php 

echo "<td>{$post_id}</td>";
echo "<td> {$post_author }</td>";
echo "<td>{$post_title}</td>";

$query = " SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
$select_categories_id = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc( $select_categories_id)) {
$cat_id = $row["cat_id"];
$cat_title = $row["cat_title"];

echo "<td> {$cat_title }</td>";

}

echo "<td>{$post_status}</td>";
echo "<td><img width = '100' src = '../images/{$post_image}' alt = 'image'></td>";
echo "<td>{$post_tags }</td>";

echo "<td>{$post_comment_count}</td>";
echo "<td>{$post_date}</td>";
echo "<td><a href = '../post.php?p_id={$post_id}'>View Post</a></td>";
echo "<td><a href = 'posts.php?source=edit_post&p_id={$post_id}'>edit</a></td>";
echo "<td><a onClick=\" javascript: return confirm('Are you sure you want to delete this post')\" href = 'posts.php?delete={$post_id}'>delete</a></td>";
// \" this is an escape sequence  \"
echo "</tr>";

}//source=edit_post&post_id the amber sign helps using multiple parameters to specify exactly where you want that link to take you

?>

                     
                 </tbody>
       </table>

       <?php

if (isset($_GET['delete'])) {
 $the_post_id=$_GET['delete'];

 $query = "DELETE FROM posts WHERE post_id =  {$the_post_id}";

 $delete_quer = mysqli_query($connection, $query);
  header("location:posts.php");

}
// we need to refresh the table automatically

   ?>