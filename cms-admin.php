<?php

// include_once 'includes/header.php';

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "science-blog";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
  die("Couldnt Connect to the Database" . mysqli_error($connection));
}

$query = mysqli_query($connection, "SELECT * FROM users");
if (mysqli_num_rows($query) === 0) {
  include 'create_admin.php';
} else {
  include 'login.php';
}
