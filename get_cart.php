<?php
include 'koneksi.php';

$query = mysqli_query($conn, "
SELECT cart.id, products.name, products.price, products.image, cart.qty
FROM cart 
JOIN products ON cart.product_id = products.id
");

$data = [];

while($row = mysqli_fetch_assoc($query)){
    $data[] = $row;
}

echo json_encode($data);