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
    <br>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="change.php">
                <div class="form-group" hidden>
                    <label for="exampleInputEmail1" hidden>ID</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product['id'] ?>" required name="id" hidden>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product['product_name'] ?>" required name="product_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Description</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product['product_desc'] ?>" required name="product_desc">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $product['product_price'] ?>" required name="product_price">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Customer Name</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $product['customer_name'] ?>" required name="customer_name">
                </div>
                <button type="submit" class="btn btn-primary green">Modify Product</button>
            </form>
        </div>
    </div>
</div>

<?php
    require_once "footer.php";
?>