<?php include "includes/db.php" ?>
<!-- header-->
<?php include "includes/header.php" ?>

<!-- Navigation -->

<?php include "includes/navigation.php" ?>

<!-- Page Content -->
 <!-- added banner section to beautify page  -->
<div class="container">
    <div class="row">
        <div class="header col-md-12">
            <div class="container">
                <div class="hero">
                    <h1 class="fw-bolder">Welcome to Blog Home!</h1>
                    <p class="lead mb-0">A Blog Site with Content Management System</p>
                </div>
            </div>
        </div>
        <!-- banner section ends here  -->
         
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <h1 class="page-header">
                Page Heading
                <small>Secondary Text</small>
            </h1>
            <!-- First Blog Post -->
            <?php
<<<<<<< HEAD
            //PAGINATION
            //makin pages and limiting the number of posts per page

            if(isset($_GET['page'])){

                $page = $_GET['page'];

            }else{
                echo " ";
            }
              
            if ($page == 0 || $page == 1) {
               $page_1 = 0;
            }else{
                // I DONT REALLY GET THE MATH HERE BUT IT DISPLAYS 5 POSTS PER PAGE
                $page_1 =($page * 5) -5;
            }


            $post_query_count = "SELECT * FROM posts ";
            $find_count = mysqli_query($connection,$post_query_count );
            $count = mysqli_num_rows($find_count);
            $count = ceil($count / 5);


                $query = "SELECT * FROM posts LIMIT $page_1, 5";
                 $select_all_posts_query = mysqli_query($connection,$query);
                 
                 while ($row = mysqli_fetch_assoc($select_all_posts_query )) {
                     $post_id = $row["post_id"];
                     $post_title = $row["post_title"];
                     $post_author = $row["post_author"];
                     $post_date = $row["post_date"];
                     $post_image = $row["post_image"];
                     $post_content = substr($row["post_content"], 0,100);//truncate upto only 100 characters on the content to display on the index page
                     $post_status = $row["post_status"];
=======
            $query = "SELECT * FROM posts";
            $select_all_posts_query = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                $post_id = $row["post_id"];
                $post_title = $row["post_title"];
                $post_author = $row["post_author"];
                $post_date = $row["post_date"];
                $post_image = $row["post_image"];
                $post_content = substr($row["post_content"], 0, 100); //truncate upto only 100 characters on the content to display on the index page
                $post_status = $row["post_status"];
>>>>>>> 22e930d24f0c243a63131f02d68f738c7cfa1e64

                     if ($post_status !== 'published') {
               ?>


               <h1><?php echo $count ?></h1>

                <h2>
                    <a href="post.php?p_id=<?php echo $post_id; ?>"><?php 
                    echo $post_title;?></a>
                </h2>
                <p class="lead">
                    by <a href="author_post.php?author=<?php echo $post_author; ?>&p_id=<?php echo $post_id; ?>"><?php echo $post_author; ?></a>
                </p>
                <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date; ?></p>
                <hr>
                <a href="post.php?p_id=<?php echo $post_id; ?>">
                <img class="img-responsive" src="images/<?php echo $post_image; ?>" alt="">
                </a>
                <hr>
                <p><?php echo $post_content; ?></p>
                <a class="btn btn-primary" href="post.php?p_id=<?php echo $post_id; ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>



<<<<<<< HEAD
                  <?php }
                            }


                  ?>

                <hr>
        
        <ul class="pager">
      
<?php

for ($i=1; $i <=$count; $i++) {

    if($i == $page){
        echo "<li><a class='active_link' href='index.php?page={$i}'>{$i}</a></li>";

    }else{
        echo "<li><a href='index.php?page={$i}'>{$i}</a></li>";

    }


}


?>



        </ul>
=======
            <?php }
            }
>>>>>>> 22e930d24f0c243a63131f02d68f738c7cfa1e64

            ?>
            <hr>
        </div>
        <!-- Blog Sidebar Widgets Column -->
        <?php include "includes/sidebar.php" ?>
        <!-- /.row -->
<<<<<<< HEAD

<hr>
  <!--footer-->
        <?php include "includes/footer.php" ?>

        
=======
        <hr>
        <!--footer-->
        <?php include "includes/footer.php" ?>
>>>>>>> 22e930d24f0c243a63131f02d68f738c7cfa1e64
