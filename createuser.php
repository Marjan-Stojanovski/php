<?php
require_once "header.php";
?>

<div class="container">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h1>Create New User</h1>
        </div>
        <div class="col-md-2">
            <a href="listproducts.php" class="btn btn-primary">List Available Users</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="process.php">
                <div class="form-group">
                    <label for="exampleInputEmail1">First Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="first_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Last Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="last_name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" required name="password">
                </div>
                <button type="submit" class="btn btn-primary green">Create User</button>
            </form>

        </div>
    </div>
</div>




<?php
require_once "footer.php";
?>
