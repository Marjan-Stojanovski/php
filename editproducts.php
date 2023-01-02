<?php
require_once "./process/functions.php";
require_once "./config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');


if(isset($_POST['id']) && !empty($_POST['id'])) {
    $id = $_POST['id'];
} else {
    $id = '';
}

if(isset($_POST['product_name']) && !empty($_POST['product_name'])) {
    $product_name = $_POST['product_name'];
} else {
    $product_name = '';
}

if(isset($_POST['product_desc']) && !empty($_POST['product_desc']))  {
    $product_desc = $_POST['product_desc'];
} else {
    $product_desc = '';
}

if(isset($_POST['product_price']) && !empty($_POST['product_price']))  {
    $product_price = $_POST['product_price'];
} else {
    $product_price = '';
}

if(isset($_POST['image']) && !empty($_POST['image']))  {
    $image = $_POST['image'];
} else {
    $image = '';
}

$data = [
    'product_name' => $product_name,
    'product_desc' => $product_desc,
    'product_price' => $product_price,
    'image' => $image,
];

$product = edit($conn, $id, $data, 'products');

if($product) {
    header('Location: /listproducts.php');
} else {
    header('Location: /404.php');
}








?>

<?php   require_once "footer.php";  ?>

