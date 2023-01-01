<?php
require_once "header.php";
require_once "./config/db.php";
?>
<?php

$id = $_GET['id'];

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$query = mysqli_query($conn, "DELETE FROM products WHERE id='$id'");

if ($query) {
    header('Location: listproducts.php');
} else {
    header('Location: 404.php');
};
