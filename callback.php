<?php
require_once '../koneksi.php';

$json = file_get_contents('php://input');
$data = json_decode($json, true);

$order_id = $data['order_id'];
$status   = $data['transaction_status'];

mysqli_query($conn, "UPDATE transaksi 
SET status='$status' 
WHERE order_id='$order_id'");