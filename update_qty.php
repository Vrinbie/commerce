<?php
include 'koneksi.php';

$id = $_GET['id'];
$change = $_GET['change'];

mysqli_query($conn, "
UPDATE cart 
SET qty = GREATEST(qty + $change, 1)
WHERE id = $id
");