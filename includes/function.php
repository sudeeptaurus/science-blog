<?php

include "admin/includes/db.php";

function show_cat() {
    global $connection;

    $query = "SELECT * FROM categories";
    $result = mysqli_query( $connection, $query );
    while ( $row = mysqli_fetch_array( $result ) ) {
        $cat_id = $row['cat_id'];
        $cat_title = $row['cat_title'];
        echo " 
            <li class='nav-item'>
            <a class='nav-link' href='category.php?cat_id=$cat_id'>{$cat_title}</a>
            </li>
            ";
    }
}

?>
