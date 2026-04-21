<?php
include 'koneksi.php';

$product_id = $_GET['id'];

$cek = mysqli_query($conn, "SELECT * FROM cart WHERE product_id=$product_id");

if(mysqli_num_rows($cek) > 0){
    mysqli_query($conn, "
    UPDATE cart SET qty = qty + 1 WHERE product_id=$product_id
    ");
} else {
    mysqli_query($conn, "
    INSERT INTO cart(product_id, qty) VALUES($product_id,1)
    ");
}