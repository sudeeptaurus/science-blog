<?php

$sql = "SELECT * FROM categories";
$res = mysqli_query($connection, $sql);

if (isset($_GET['edit_post']) && $_GET['edit_post'] !== '') {
    $edit_id = $_GET['edit_post'];
    $query = mysqli_query($connection, "SELECT * FROM posts WHERE post_id='$edit_id'");
    if (mysqli_num_rows($query) > 0) {
        $data = mysqli_fetch_array($query);
        $title = $data['post_title'];
        $author = $data['post_author'];
        $category = $data['post_category'];
        $content = $data['post_content'];
        $tags = $data['post_tags'];
        $status = $data['post_status'];
        $image = $data['post_image'];
    } else {
        die("No Records Found");
    }
} else {
    die("Failed");
}

?>





<div class="container">
    <div class="row">
        <h2>Edit Posts</h2>
        <div class="col-sm-12 col-lg-7">
            <form action="post.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Post Title</label>
                    <input type="text" name="title" placeholder="Post Title" class="form-control" value="<?php echo $title; ?>">
                </div>
                <div class="form-group">
                    <label for="">Post Author</label>
                    <input type="text" value="<?php echo $_SESSION['username']; ?>" name="author" placeholder="Post Author" class="form-control" value="<?php echo $author; ?>">
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
                    <textarea name="content" rows="8" cols="80" id="editor" class="form-control"><?php echo $title; ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Post Tags</label>
                    <input type="text" name="tags" placeholder="Seperate tags with a comma (,)" class="form-control" value="<?php echo $tags; ?>">
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
                    <br>
                    <img src="<?php echo $image; ?>">
                </div>
                <div class="form-group">
                    <input type="submit" name="modify" value="Modify Post" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>







<!-- /.row -->




<script>
    CKEDITOR.replace('editor');
</script>