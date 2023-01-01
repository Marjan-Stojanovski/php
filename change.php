<?php
require_once "header.php";
require_once "./config/db.php";
?>
<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
};

if(isset($_POST['product_name']) && !empty($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
};

if(isset($_POST['product_desc']) && !empty($_POST['product_desc']))  {
    $product_desc = $_POST['product_desc'];
};

if(isset($_POST['product_price']) && !empty($_POST['product_price']))  {
    $product_price = $_POST['product_price'];
};

if(isset($_POST['customer_name']) && !empty($_POST['customer_name']))  {
    $customer_name = $_POST['customer_name'];
};

$query = mysqli_query($conn, "UPDATE products SET product_name = '$product_name', product_desc = '$product_desc', product_price = '$product_price', customer_name = '$customer_name' WHERE id='$id'");

if ($query) {
    header('Location: listproducts.php');
} else {
    header('Location: 404.php');
};

?>




<?php
    require_once "footer.php";
?>