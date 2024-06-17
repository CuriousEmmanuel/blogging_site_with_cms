<?php
if($_GET['edit_users']){

 $the_user_id = $_GET['edit_users'];

$query = "SELECT * FROM users WHERE user_id = $the_user_id ";
$select_user_query = mysqli_query($connection,$query);
while ($row= mysqli_fetch_assoc($select_user_query)) {
$user_id= $row['user_id'];
$username= $row['username'];
$user_password= $row['user_password'];
$user_firstname= $row['user_firstname'];
$user_lastname= $row['user_lastname'];
$user_email= $row['user_email'];
$user_image= $row['user_image'];
$user_role= $row['user_role'];

}

}






if (isset($_POST['edit_user'])){

$user_firstname = $_POST['user_firstname'];
$user_lastname = $_POST['user_lastname'];
$user_role = $_POST['user_role'];
$username= $_POST['username'];


// $post_image = $_FILES['image']['name'];
// $post_image_temp = $_FILES['image']['tmp_name'];//sending files to a temporary location on the server

$user_email= $_POST['user_email'];
$user_password = $_POST['user_password'];


}
// $post_date= date('d-m-y'); //sendin the DATE WITH A FUNCTION IN THAT FORMAT


//function to move images from a temporary location to a folder outside admin 

//move_uploaded_file($post_image_temp, "../images/$post_image" );






$query = " UPDATE users set ";
$query.= " user_firstname = '{$user_firstname}', ";
$query.= " user_lastname = '{$user_lastname}', ";
$query.= " username = '{$username}', ";
$query.= " user_role = '{$user_role}', ";
$query.= " user_email = '{$user_email}', ";
$query.= " user_password = '{$user_password}' ";

$query.= " WHERE user_id = $the_user_id ";

//A query with extra steps simple one easiest

$edit_user_query = mysqli_query($connection, $query);

 confirmquery($edit_user_query);








?>
<form action="" method="post"enctype="multipart/form-data">
	<!--we need enctype attribute will be in charge of sending multiple data sice we also have images




		multipart is very important or you get unkown errors-->

	<div class="form-group">
		<label for="title">first name</label>
		<input type="text" value="<?php echo $user_firstname; ?>" class="form-control" name="user_firstname">
	</div>

		<div class="form-group">
		<label for="title">last name</label>
		<input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
	</div>



	<div class="form-group">
        <label for="role">Role</label><br>
		<select name="user_role"id="">
        
        <option value="subscriber"><?php echo $user_role; ?></option>
        <?php

        if ($user_role == 'admin') {
        	echo "<option value='subscriber'>subscriber</option>";

        } else{

        	echo "<option value='admin'>admin</option>";
        }


        ?>

    
        

		</select>

    </div>



	<div class="form-group">
		<label for="post_outher">Username</label>
		<input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
	</div>



	<div class="form-group">
		<label for="post_status">Email</label>
		<input type="email" value="<?php echo $user_email; ?>" class="form-control" name="user_email">
	</div>



<!-- 	<div class="form-group">
		<label for="post_image">post image</label>
		<input type="file"class="form-control" name="image">
	</div> -->



	<div class="form-group">
		<label for="post_tags">Password</label>
		<input type="Password" value="<?php echo $user_password; ?>" class="form-control" name="user_password">
	</div>

	<!-- <div class="form-group">
		<label for="post_date">post date</label>
		<input type="text"class="form-control" name="post_date">
	</div> -->

	<div class="form-group">
		<input type="submit"class="btn btn-primary" name="edit_user"value="Add_users">
	</div>
	

</form>
