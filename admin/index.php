<?php include "includes/admin_header.php" ?>
    <div id="wrapper">







        <!-- Navigation -->
        <?php include "includes/admin_navigation.php" ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Welcome to Admin

                <small><?php echo $_SESSION['username']; ?></small>
            </h1>


                        <?php if($connection) echo "connected"; ?>

                        <!--
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>

                        -->

                    </div>
                </div>
                <!-- /.row -->


                
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-file-text fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php
$query = "SELECT * FROM posts";
$count_posts_query = mysqli_query($connection, $query);
$post_row_count = mysqli_num_rows($count_posts_query);
//we can display number of rows directly in html or echo it inside our php
//echo "<div class='huge'>{$row_count}</div>";


?>
 <div class='huge'><?php echo $post_row_count ?></div>
                        <div>Posts</div>
                    </div>
                </div>
            </div>
            <a href="posts.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php
$query = "SELECT * FROM comments";
$count_comments_query = mysqli_query($connection, $query);
$comments_row_count = mysqli_num_rows($count_comments_query);

?>

                     <div class='huge'><?php echo $comments_row_count ?></div>
                      <div>Comments</div>
                    </div>
                </div>
            </div>
            <a href="comments.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">


<?php
$query = "SELECT * FROM comments";
$count_users_query = mysqli_query($connection, $query);
$users_row_count = mysqli_num_rows($count_users_query);

?>

                    <div class='huge'><?php echo $users_row_count ?></div>
                        <div> Users</div>
                    </div>
                </div>
            </div>
            <a href="users.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-list fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">

<?php
$query = "SELECT * FROM categories";
$count_categories_query = mysqli_query($connection, $query);
$categories_row_count = mysqli_num_rows($count_categories_query);

?>



                        <div class='huge'><?php echo $categories_row_count ?></div>
                         <div>Categories</div>
                    </div>
                </div>
            </div>
            <a href="categories.php">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>
            



<?php
//for draft posts
$query = "SELECT * FROM posts WHERE post_status = 'draft' ";
$draft_post_status = mysqli_query($connection, $query);
$draft_post_count = mysqli_num_rows($draft_post_status);


//for comments
$query = "SELECT * FROM comments WHERE comment_status = 'approved' ";
$aproved_comment_status = mysqli_query($connection, $query);
$approved_comment_count = mysqli_num_rows($aproved_comment_status);


//for comments
$query = "SELECT * FROM comments WHERE comment_status = 'unapproved' ";
$unaproved_comment_status = mysqli_query($connection, $query);
$unaproved_comment_count = mysqli_num_rows($unaproved_comment_status);


//for admin users
$query = "SELECT * FROM users WHERE user_role = 'admin' ";
$select_admin = mysqli_query($connection, $query);
$admin_count = mysqli_num_rows($select_admin);

//for subscribers
$query = "SELECT * FROM users WHERE user_role = 'subscriber' ";
$select_subscriber = mysqli_query($connection, $query);
$subscribers_count = mysqli_num_rows($select_subscriber);
?>

                <!-- /.row -->
                 <div class="row">
                <!-- google charts -->
            
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['date', 'count'],

          <?php

          $element_text = ['Active posts','draft posts','comments','approved comments','unapproved comment','users','admin','subscribers','categorie'];
          $element_count = [$post_row_count,$draft_post_count, $comments_row_count,$approved_comment_count,$unaproved_comment_count, $users_row_count, $admin_count,$subscribers_count, $categories_row_count];
          for ( $i = 0; $i <9 ; $i++) {
           echo "['{$element_text[$i]}'".","."{$element_count[$i]}],";
          }

          ?>
          
        ]);

        var options = {
          chart: {
            title: 'Company Performance',
            subtitle: 'Sales, Expenses, and Profit: 2014-2017',
          }
        };

        var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>


        </div>



<div id="columnchart_material" style="width: 800 px; height: 500px;"></div>


            </div>
            <!-- /.container-fluid -->

        </div>

       

        <!-- /#page-wrapper -->

    <?php include "includes/admin_footer.php" ?>
   

