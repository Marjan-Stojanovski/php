<?php
require_once "header.php";
require_once "./process/functions.php"; 
require_once "./config/db.php";
?>
<?php

$id = $_GET['id'];
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$data = delete($conn, $id, 'users');

if ($data) {
    header('Location: /listusers.php');
} else {
    header('Location: /404.php');
};
