<?php
require_once "header.php";
require_once "./config/db.php";
?>
<?php

$id = $_GET['id'];


$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$query = mysqli_query($conn, "SELECT * FROM products WHERE id='$id'");

$product = mysqli_fetch_assoc($query);

?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Zdravo <?php echo $product['customer_name']; ?> </h1>
        </div>
    </div>
</div>
