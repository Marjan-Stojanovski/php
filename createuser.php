<?php
require_once "header.php";
?>

<div class="container-fluid">
    <div class="row">
        <br>
    </div>
    <div class="row">
        <div class="col-md-10">
            <h1>Create New User</h1>
        </div>
        <div class="col-md-2">
            <a href="/listusers.php" class="btn btn-primary">List Available Users</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="/createusers.php">
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="first_name">First Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" name="first_name">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="last_name">Last Name</label>
                    <input type="text" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="last_name">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="dob">Dob</label>
                    <input type="date" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="dob">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="email">
                </div>
                <div class="input-group input-group-outline my-4 focused is-focused">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" required name="password">
                </div>
                <button type="submit" class="btn btn-primary">Create User</button>
            </form>

        </div>
    </div>
</div>




<?php
require_once "footer.php";
?>
