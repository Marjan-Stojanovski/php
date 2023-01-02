<?php
require_once "./config/db.php";


function insert($conn, $data, $table)
{
    $keys = [];
    $values = [];
    foreach ($data as $key => $value) {
        $keys[] = $key;
        $values[] = "'$value'";
    }
    $keys = implode(',', $keys);
    $values = implode(',', $values);

    $queryInsert = "INSERT INTO $table ($keys) VALUES ($values)";
    $query = mysqli_query($conn, $queryInsert);
    return $query;
}

function view($conn, $table)
{
    $query = mysqli_query($conn, "SELECT * FROM $table");

    $data = [];
    while ($product = mysqli_fetch_assoc($query)) {
        $data[] = $product;

    };

    return $data;
}

function delete($conn, $id, $table)
{
    $query = mysqli_query($conn, "DELETE FROM $table WHERE id='$id'");

    return $query;
}

function showUnit($conn, $id, $table)
{
    $query = mysqli_query($conn, "SELECT * FROM $table WHERE id='$id'");

    $data = mysqli_fetch_assoc($query);

    return $data;
}

function edit($conn, $id, $data , $table)
{
    $buildQuery = [];
    foreach ($data as $key => $value) {
        $buildQuery[] = "$key = '$value'";
    }
    $buildQuery = implode(',', $buildQuery);
    $query = mysqli_query($conn, "UPDATE $table SET $buildQuery WHERE id = '$id'");
    return $query;
}