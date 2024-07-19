<?php



// Remember to add a notification to show user post created.view post
// And use select on the post status not everytime you type manually draft or published
// A refference video about that is in 21 > 184 and 185



if (isset($_POST['create_post'])){

$post_title = $_POST['title'];
$post_category_id = $_POST['post_category'];
$post_author = $_POST['post_author'];
$post_status= $_POST['post_status'];

$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];//sending files to a temporary location on the server

$post_tags= $_POST['post_tags'];
$post_date= date('d-m-y'); //sendin the DATE WITH A FUNCTION IN THAT FORMAT
$post_content = $_POST['post_content'];
// $post_comment_count = 1;

//function to move images from a temporary location to a folder outside admin 

move_uploaded_file($post_image_temp, "../images/$post_image" );


// one field more tha the other (post comment count) find its value or delete it which will cause another error


$query = " INSERT INTO posts (post_category_id , post_title, post_author, post_date, post_image, post_content,post_tags,  post_comment_count, post_status) " ;

$query.= " VALUES ({$post_category_id }, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_content }','{$post_tags}','{$post_status}') " ;

$add_post_query = mysqli_query($connection,$query);

//CONFIRMQUERY FUNCTION NEEDS TO BE FIXED ASAP
confirmquery($add_post_query );
if(!$add_post_query ){
	die("QUERY FAILED". mysqli_error($connection)." ". mysqli_errno($connection));
}

}
?>
<form action="" method="post"enctype="multipart/form-data">
	<!--we need enctype attribute will be in charge of sending multiple data sice we also have images




		multipart is very important or you get unkown errors-->

	<div class="form-group">
		<label for="title">post title</label>
		<input type="text"class="form-control" name="title">
	</div>


	<div class="form-group">

		<select name="post_category"id="">

	<?php			
$query = " SELECT * FROM categories";
$select_categories = mysqli_query($connection,$query);

confirmquery($select_categories);

while ($row = mysqli_fetch_assoc( $select_categories)) {
$cat_id = $row["cat_id"];
$cat_title = $row["cat_title"];

 echo "<option value='$cat_id'>{$cat_title}</option>";
}
?>
		</select>

</div>



	<div class="form-group">
		<label for="post_outher">post author</label>
		<input type="text"class="form-control" name="post_author">
	</div>



	<div class="form-group">
		<label for="post_status">post status</label>
		<input type="text"class="form-control" name="post_status">
	</div>



	<div class="form-group">
		<label for="post_image">post image</label>
		<input type="file"class="form-control" name="image">
	</div>



	<div class="form-group">
		<label for="post_tags">post tags</label>
		<input type="text"class="form-control" name="post_tags">
	</div>

	<div class="form-group">
		<label for="post_date">post date</label>
		<input type="text"class="form-control" name="post_date">
	</div>




	<div class="form-group">
		<label for="post_content">post content</label>
		<textarea type="text"class="form-control" name="post_content" id="" cols="30" rows="10">
		</textarea>
	</div>

	<div class="form-group">
		<input type="submit"class="btn btn-primary" name="create_post"value="publish post">
	</div>
	

</form>
