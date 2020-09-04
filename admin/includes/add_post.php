<?php

$sql = "SELECT * FROM categories";
$res = mysqli_query($connection, $sql);

?>

<div id="wrapper">

    <!-- Navigation -->
    <!--?php include 'includes/navigation.php'; ?-->


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
                                    <input type="text" value="<?php echo $_SESSION['username']; ?>" name="author" placeholder="Post Author" class="form-control">
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
                                    <label for="">Post Content</label>
                                    <textarea name="content" rows="8" cols="80" id="editor" class="form-control"></textarea>
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


<script>
    CKEDITOR.replace('editor');
</script>