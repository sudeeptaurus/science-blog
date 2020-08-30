<?php

$query = "SELECT * FROM categories ORDER BY cat_id DESC LIMIT 6";
$result = mysqli_query($connection, $query);
$span = mysqli_num_rows($result);

?>
          
       <div class="sidebar-box">
        <h3 class="heading">Categories</h3>
        <ul class="categories">
         <?php
            while ($row = mysqli_fetch_assoc($result))
            {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                
                echo "<li><a href='category.php?cat_id=$cat_id'>$cat_title <span>($span)</span></a></li>";
            }
            ?>
          
          
        </ul>
      </div>
           