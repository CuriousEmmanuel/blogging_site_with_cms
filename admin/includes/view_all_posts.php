
<?php //I have solved one error(the mysqli error one collum ahead of another and empty column comment count ) but I have another problem there is no error but the comments are not counting anymore 
// A suggestion the comment,,,, never mind i forgot while typing
 ?>
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

            case 'clone':
    
            $query = "SELECT * FROM posts WHERE post_id ='{$postValueId}'";
            $select_posts_query = mysqli_query($connection,$query);

            while ($row  = mysqli_fetch_assoc($select_posts_query)) {
            $post_author = $row["post_author"];
            $post_title  = $row["post_title"];
            $post_category_id = $row["post_category_id"];
            $post_status = $row["post_status"];
            $post_image  = $row["post_image"];
            $post_tags   = $row["post_tags"];
            $post_comment_count= $row["post_comment_count"];
            $post_date   = $row["post_date"];
            $post_content= $row["post_content"];
            $post_views_count= $row["post_views_count"];
}
$query = " INSERT INTO posts(post_category_id,post_title,post_author,post_date,post_image,post_content,post_tags,post_status,post_comment_count,post_views_count) " ;
//I used the blank post_comment_count to avoid the empty error now the comments are all empty not counting anymore
$query.= " VALUES ({$post_category_id },'{$post_title}','{$post_author}',now(),'{$post_image}','{$post_content }','{$post_tags}','{$post_status}',post_comment_count,post_views_count) " ;

$clone_post_query = mysqli_query($connection,$query);

if(!$clone_post_query ){
    die("QUERY FAILED". mysqli_error($connection)." ". mysqli_errno($connection));
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
        <option value="clone">Clone</option> 
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
                       <th>views count</th>
                       <th>reset views</th>
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
$post_views_count = $row["post_views_count"];

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
echo "<td> {$post_views_count}</td>";
echo "<td><a href = 'posts.php?reset={$post_id}'>reset views</a></td>";
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


<?php

if (isset($_GET['reset'])) {
 $the_post_id=$_GET['reset'];

 $reset_views_query = "UPDATE posts SET post_views_count = 0 WHERE post_id = $the_post_id";
 $send_reset_view_query = mysqli_query($connection,$reset_views_query);
     header("location:posts.php");
       if (!$send_reset_view_query) {
         die("views query failed" . mysqli_error($connection));

       }
}
   ?>