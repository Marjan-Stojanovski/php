<?php
require_once "header.php";
require_once "./process/functions.php";
require_once "./config/db.php";
?>
<?php

$id = $_GET['id'];
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');

$data = showUnit($conn, $id, 'products');


?>
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="/editproducts.php">
                <div class="input-group input-group-outline my-4 focused is-focused" hidden>
                    <label class="form-label" for="id" hidden>ID</label>
                    <input type="hidden" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="<?php echo $data['id'] ?>" required name="id">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="<?php echo $data['product_name'] ?>" required name="product_name">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_desc">Product Description</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="<?php echo $data['product_desc'] ?>" required name="product_desc">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_price">Product Price</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="<?php echo $data['product_price'] ?>" required name="product_price">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused"">
                    <label class="form-label" for="image">Image</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="<?php echo $data['image'] ?>" required name="image">
                </div>
                <button type="submit" class="btn btn-primary green">Modify Product</button>
            </form>
        </div>
    </div>
</div>

<?php
    require_once "footer.php";
?>