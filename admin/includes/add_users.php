<?php
if (isset($_POST['create_users'])){

$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$user_role = $_POST['user_role'];
$username= $_POST['username'];
//$user_image= 'wertyui';

// $post_image = $_FILES['image']['name'];
// $post_image_temp = $_FILES['image']['tmp_name'];//sending files to a temporary location on the server

$user_email= $_POST['user_email'];
$user_password = $_POST['user_password'];



// $post_date= date('d-m-y'); //sendin the DATE WITH A FUNCTION IN THAT FORMAT


//function to move images from a temporary location to a folder outside admin 

//move_uploaded_file($post_image_temp, "../images/$post_image" );

$query = " INSERT INTO users (user_firstname , user_lastname, user_role, username, user_email, user_password) " ;

$query.= " VALUES ('{$user_firstname }', '{$user_lastname}', '{$user_role}','{$username}','{$user_email }','{$user_password}') ";

$add_user_query = mysqli_query($connection,$query);

//CONFIRMQUERY FUNCTION NEEDS TO BE FIXED ASAPcreate_users
//confirmquery($add_user_query );

}
?>
<form action="" method="post"enctype="multipart/form-data">
	<!--we need enctype attribute will be in charge of sending multiple data sice we also have images




		multipart is very important or you get unkown errors-->

	<div class="form-group">
		<label for="title">first name</label>
		<input type="text"class="form-control" name="user_firstname">
	</div>

		<div class="form-group">
		<label for="title">last name</label>
		<input type="text"class="form-control" name="user_lastname">
	</div>



	<div class="form-group">
        <label for="role">Role</label><br>
		<select name="user_role"id="">
        
        <option value="subscriber">select option</option>
        <option value="admin">Admin</option>
        <option value="subscriber">Subscriber</option>


		</select>

    </div>



	<div class="form-group">
		<label for="post_outher">Username</label>
		<input type="text"class="form-control" name="username">
	</div>



	<div class="form-group">
		<label for="post_status">Email</label>
		<input type="email"class="form-control" name="user_email">
	</div>



<!-- 	<div class="form-group">
		<label for="post_image">post image</label>
		<input type="file"class="form-control" name="image">
	</div> -->



	<div class="form-group">
		<label for="post_tags">Password</label>
		<input type="Password"class="form-control" name="user_password">
	</div>

	<!-- <div class="form-group">
		<label for="post_date">post date</label>
		<input type="text"class="form-control" name="post_date">
	</div> -->

	<div class="form-group">
		<input type="submit"class="btn btn-primary" name="create_users"value="Add_users">
	</div>
	

</form>
