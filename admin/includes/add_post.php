<?php 

$sql = "SELECT * FROM categories";
$res = mysqli_query($connection, $sql);

?>
   
    <div id="wrapper">

    <!-- Navigation -->
    <?php include 'includes/navigation.php'; ?>


    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">

                

                <div class="container">
                    <div class="row">
                       <h2>Add Posts</h2>
                        <div class="col-sm-6">
                            <form action="includes/function.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="">Post Title</label>
                                    <input type="text" name="title" placeholder="Post Title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Author</label>
                                    <input type="text" name="author" placeholder="Post Author" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Category</label>
                                    <select class="form-control" name="category">
                                       <?php
                                            while ($row = mysqli_fetch_array($res)) {
                                                $cat_title = $row['cat_title'];
                                                echo "<option value='$cat_title'>$cat_title</option>";
                                            }
                                        ?>                                       
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Post Category ID</label>
                                    <select class="form-control" name="category_id">
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $res = mysqli_query($connection, $sql);
                                        
                                        while ($row = mysqli_fetch_array($res))
                                        {
                                            $cat_title = $row['cat_title'];
                                            $cat_id = $row['cat_id'];
                                            echo "<option value='$cat_id'>$cat_id - $cat_title</option>";
                                        }
                                        ?>  
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Post Tags</label>
                                    <input type="text" name="tags" placeholder="Seperate tags with a comma (,)" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Post Status</label>
                                    <select class="form-control" name="status">
                                        <option value="draft">Draft</option>
                                        <option value="published">Published</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Post Image</label>
                                    <input type="file" name="post_image" class="form-control">
                                </div>
                                <div class="form-group">                              
                                    <input type="submit" name="publish" value="Publish Post" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="bootstrap/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
