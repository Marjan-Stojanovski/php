<?php
require_once "header.php";
require_once "./process/functions.php";
require_once "./config/db.php";

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die("Connection error");

$id = $_GET['id'];

$user = showUnit($conn, $id, 'users');


?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Welcome <?php echo $user['first_name'] ?> <?php echo $user['last_name'] ?></h1>
        </div>
    </div>

    <br>

<?php

$data = showUnitCrossed($conn, $id, 'products');


?>


    <div class="row">
        <div class="col-md-10">
            <h3>Your Orders</h3>
        </div>
        <div class="col-md-2">
            <a href="/listusers.php" class="btn btn-primary">List Products</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Image</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($data as $product) {
                    echo '<tr>
                    <td>'.$product['product_name'].'</td>
                    <td>'.strip_tags(mb_strimwidth($product['product_desc'], 0, 25)).'</td>
                    <td>'.$product['product_price'].' den</td>
                    <td><img src="'.$product['image'].'" alt="" style="max-width: 100px"></td>
                    </tr>';
                };

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>





<?php require_once "footer.php"; ?>