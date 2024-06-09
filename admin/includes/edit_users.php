<?php
if (isset($_GET['p_id'])) {

$the_post_id = $_GET['p_id'];
}


$query = "SELECT * FROM posts WHERE post_id = {$the_post_id}";
$select_post_by_id = mysqli_query($connection,$query);

while ($row = mysqli_fetch_assoc($select_post_by_id)) {
$post_id = $row["post_id"];
$post_author = $row["post_author"];
$post_title= $row["post_title"];
$post_category_id = $row["post_category_id"];
$post_status = $row["post_status"];
$post_image= $row["post_image"];
$post_tags = $row["post_tags"];
$post_content= $row["post_content"];
$post_comment_count = $row["post_comment_count"];
$post_date = $row["post_date"];
}


if (isset($_POST['update_post'])) {


$post_title = $_POST['title'];
$post_category_id = $_POST['post_category'];
$post_author = $_POST['post_author'];
$post_status= $_POST['post_status'];
$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];
$post_tags= $_POST['post_tags'];
$post_content = $_POST['post_content'];


move_uploaded_file($post_image_temp, "../images/$post_image" );

if (empty($post_image)) {
	
	$query = "SELECT * FROM posts WHERE post_id =$the_post_id";
	$select_image =mysqli_query($connection, $query);

	while ($row = mysqli_fetch_assoc($select_image)) {
		$post_image = $row['post_image'];
	}

	}



$query = " UPDATE posts set ";
$query.= " post_title = '{$post_title}', ";
$query.= " post_author = '{$post_author}', ";
$query.= " post_status = '{$post_status}', ";
$query.= " post_category_id = '{$post_category_id}', ";
$query.= " post_content = '{$post_content}', ";
$query.= " post_image = '{$post_image}', ";
$query.= " post_date = now(), ";
$query.= " post_tags = '{$post_tags}' ";
$query.= " WHERE post_id = $the_post_id ";

//A query with extra steps simple one easiest

$update_query = mysqli_query($connection, $query);

 //confirmquery($update_query);



}
?>

<form action="" method="post"enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">post title</label>
		<input value="<?php echo $post_title?>" type="text"class="form-control" name="title">
	</div>


	
	<div class="form-group">
        <label for="role">Role</label><br>
		<select name="role"id="">

	<?php			
$query = " SELECT * FROM users";
$select_users = mysqli_query($connection,$query);

confirmquery($select_users);

while ($row = mysqli_fetch_assoc( $select_users)) {
$user_id = $row["user_id"];
$user_role = $row["user_role"];

 echo "<option value='$user_id'>{$user_role}</option>";
}
?>
		</select>

</div>





	<div class="form-group">
		<label for="post_outher">post author</label>
		<input value="<?php echo $post_title?>"type="text"class="form-control" name="post_author">
	</div>



	<div class="form-group">
		<label for="post_status">post status</label>
		<input value="<?php echo $post_status?>" type="text"class="form-control" name="post_status">
	</div>



	<div class="form-group">
		<img width="100" src="../images/<?php echo $post_image;?>" alt="">
		<input type="file"class="form-control" name="image">
	</div>



	<div class="form-group">
		<label for="post_tags">post tags</label>
		<input value="<?php echo $post_tags?>"type="text"class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="post_date">post date</label>
		<input value="<?php echo $post_date?>"type="text"class="form-control" name="post_date">
	</div>




	<div class="form-group">
		<label for="post_content">post content</label>
		<textarea type="text"class="form-control" name="post_content" id="" cols="30" rows="10"><?php echo $post_content ?> 
		</textarea>
	</div>

	<div class="form-group">
		<input type="submit"class="btn btn-primary" name="update_post"value="update post">
	</div>
	

</form>