<?php
    require_once "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h1>Create New Product</h1>
        </div>
        <div class="col-md-2">
            <a href="/listproducts.php" class="btn btn-primary">List Available Products</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="/createproducts.php">
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_name">Product Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="product_name">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_desc">Product Description</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="product_desc">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="product_price">Product Price</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="product_price">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="image">Image</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="image">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="user_id">User</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="user_id">
                </div>
                <button type="submit" class="btn btn-primary green">Insert Product</button>
            </form>

        </div>
    </div>
</div>




<?php
    require_once "footer.php";
?>
