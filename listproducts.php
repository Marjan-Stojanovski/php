<?php
require_once "header.php";
require_once "./config/db.php";
?>
<?php

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$query = mysqli_query($conn, "SELECT * FROM products");

$products = [];
while ($product = mysqli_fetch_assoc($query)) {
    $products[] = $product;
};

?>
<div class="container">
    <br>
    <div class="row">
        <div class="col-md-10">
            <h1>Manage Products</h1>
        </div>
        <div class="col-md-2">
            <a href="createproduct.php" class="btn btn-primary">Create/Modify Product</a>
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
                    <th>Customer Name</th>
                    <th>Manage List</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($products as $product) {
                    echo '<tr>
                    <td><a href="/product.php?id='.$product['id'].'">'.$product['id'].'</a></td>
                    <td>'.$product['product_name'].'</td>
                    <td>'.$product['product_desc'].'</td>
                    <td>'.$product['product_price'].' den</td>
                    <td>'.$product['customer_name'].'</td>
                    <td>
                       <a href="/manage.php?id='.$product['id'].'" class="btn btn-danger">Delete Product</a>
                       <a href="/modify.php?id='.$product['id'].'" class="btn btn-warning">Modify Product</a>
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
