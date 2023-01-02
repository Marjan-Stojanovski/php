<?php
require_once "header.php";
require_once "./process/functions.php";
require_once "./config/db.php";
?>
<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');
$data = view($conn, 'products');

?>
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-10">
            <h1>Manage Products</h1>
        </div>
        <div class="col-md-2">
            <a href="/createproduct.php" class="btn btn-primary">Create/Modify Product</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Product Name</th>
                    <th>Product Description</th>
                    <th>Product Price</th>
                    <th>Image</th>
                    <th>User Id</th>
                    <th>Manage List</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($data as $product) {
                    echo '<tr>
                    <td><a href="/showproduct.php?id='.$product['id'].'">'.$product['id'].'</a></td>
                    <td>'.$product['product_name'].'</td>
                    <td>'.strip_tags(mb_strimwidth($product['product_desc'], 0, 25)).'</td>
                    <td>'.$product['product_price'].' den</td>
                    <td><img src="'.$product['image'].'" alt="" style="max-width: 100px"></td>
                    <td>'.$product['user_id'].'</td>
                    <td>
                       <a href="/delete_product.php?id='.$product['id'].'" class="btn btn-danger">Delete Product</a>
                       <a href="/editproduct.php?id='.$product['id'].'" class="btn btn-warning">Modify Product</a>
                    </td>
                </tr>';
                };

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?php
    require_once "footer.php";
?>
















<?php   require_once "footer.php";  ?>
