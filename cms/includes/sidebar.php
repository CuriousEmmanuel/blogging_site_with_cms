            <div class="col-md-4">
               


                <?php
               /* i transfered this code to search.php 



               if (isset($_POST['submit'])) {
                 $search = $_POST['search'];

                 $query = "SELECT * FROM posts WHERE post_tags LIKE '%$search%'";
                 $search_query = mysqli_query($connection,$query);

                 if (!$search_query) {
                     die("Query failed" . mysqli_error($connection));
                 }
                 $count = mysqli_num_rows($search_query);
                 if ($count == 0) {
                     echo "<h1>NOT FOUND</h1>";
                 } else{

                    echo "results found";
                 }
                  }
               
*/

                ?>
                <!-- Blog Search Well -->
                <div class="well">
                    <h4>Blog Search</h4>

                    <form action="search.php" method="post">
                     <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                     </div>
                    </form>
                    <!-- /.input-group -->
                </div>






                <!-- Blog Categories Well -->
                <div class="well">


                     <?php
                //querying and displaying dynamic data from the categories table from the database
                 $query = "SELECT * FROM categories ";
                 //$query = "SELECT * FROM categories LIMIT 3";
                 //LIMITING THE SIDE BAR TO ONLY THREE ITEMS
                 $select_categories_sidebar = mysqli_query($connection,$query);
                

            ?>
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">

                                <?php
                                 while ($row = mysqli_fetch_assoc($select_categories_sidebar)) {
                     $cat_title = $row["cat_title"];

                     echo "<li><a href='#'>{$cat_title}</a></li>";
                 }
                 ?>
                            </ul>
                        </div>
                
                    </div>
                    <!-- /.row -->
                </div>

                <!-- Side Widget Well -->
                <?php include "widget.php"?>
            </div>