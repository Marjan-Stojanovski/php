<?php
require_once "header.php";
require_once "./process/functions.php";
require_once "./config/db.php";
?>
<?php
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('Connection error');
$data = view($conn, 'users');


?>
<div class="container-fluid">
    <br>
    <div class="row">
        <div class="col-md-10">
            <h1>Manage Users</h1>
        </div>
        <div class="col-md-2">
            <a href="createuser.php" class="btn btn-primary">Create Users</a>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>DOB</th>
                    <th>Email</th>
                    <th>Manage List</th>
                </tr>
                </thead>
                <tbody>
                <?php

                foreach($data as $user) {
                    echo '<tr>
                    <td><a href="/product.php?id='.$user['id'].'">'.$user['id'].'</a></td>
                    <td>'.$user['first_name'].'</td>
                    <td>'.$user['last_name'].'</td>
                    <td>'.$user['dob'].' den</td>
                    <td>'.$user['email'].'</td>
                    <td>
                       <a href="/delete_user.php?id='.$user['id'].'" class="btn btn-danger">Delete Product</a>
                       <a href="/modify.php?id='.$user['id'].'" class="btn btn-warning">Modify Product</a>
                    </td>
                </tr>';
                };

                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

















<?php   require_once "footer.php";  ?>
