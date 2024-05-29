<?php
if (isset($_POST['create_post'])){

$post_title = $_POST['title'];
$post_category_id = $_POST['post_category_id'];
$post_outher = $_POST['post_outher'];
$post_outher= $_POST['post_outher'];

$post_image = $_FILES['image'];
$post_image_temp = $_FILES['image']['tmp_name'];//sending files to a temporary location on the server

$post_tags= $_POST['post_tags'];
$post_date= date('d-m-y'); //sendin the DATE WITH A FUNCTION IN THAT FORMAT
$post_content = $_POST['post_content'];
$post_comment_count = 4; //hard coding comment count to avoid null

//function to move images from a temporary location to a folder outside admin 

move_uploaded_file($post_image_temp, "../images/$post_image" );

}
?>
<form action="" method="post"enctype="multipert/form-data">
	<!--we need enctype attribute will be in charge of sending multiple data sice we also have images-->

	<div class="form-group">
		<label for="title">post title</label>
		<input type="text"class="form-control" name="title">
	</div>


	<div class="form-group">
		<label for="post_category_id">post category-id</label>
		<input type="text"class="form-control" name="post_category_id">
	</div>




	<div class="form-group">
		<label for="post_outher">post outher</label>
		<input type="text"class="form-control" name="post_outher">
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
