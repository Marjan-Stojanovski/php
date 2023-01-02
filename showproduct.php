<?php
require_once "header.php";
require_once "./process/functions.php";
require_once "./config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error");

$id = $_GET['id'];

$user = showUnit($conn, $id, 'products');


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Hello <?php echo $user['product_name'] ?></h1>
        </div>
    </div>
</div>

<?php require_once "footer.php"; ?>