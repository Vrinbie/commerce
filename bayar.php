<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/koneksi.php';

header('Content-Type: application/json');

\Midtrans\Config::$serverKey = 'Mid-server-9zqAKwhvG_aNG4v9OfRe0jan';
\Midtrans\Config::$isProduction = false;
\Midtrans\Config::$isSanitized = true;
\Midtrans\Config::$is3ds = true;

// ambil JSON dari JS
$data = json_decode(file_get_contents("php://input"), true);

if(!$data){
    echo json_encode(["error" => "Data kosong"]);
    exit;
}

$id = (int)$data['id'];
$qty = (int)$data['qty'];

// ambil produk dari DB
$result = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");

if(!$result){
    echo json_encode(["error" => "Query gagal"]);
    exit;
}

$produk = mysqli_fetch_assoc($result);

if(!$produk){
    echo json_encode(["error" => "Produk tidak ditemukan"]);
    exit;
}

$nama = $produk['nama'];
$harga = $produk['harga'];

$total = $harga * $qty;
$order_id = "ORDER-" . time();

// simpan transaksi
mysqli_query($conn, "
INSERT INTO transaksi (order_id,nama_produk,harga,qty,total,status)
VALUES ('$order_id','$nama','$harga','$qty','$total','pending')
");

// parameter midtrans
$params = [
    'transaction_details' => [
        'order_id' => $order_id,
        'gross_amount' => $total
    ],
    'item_details' => [[
        'id' => $id,
        'price' => $harga,
        'quantity' => $qty,
        'name' => $nama
    ]]
];

try {
    $snapToken = \Midtrans\Snap::getSnapToken($params);

    echo json_encode([
        "token" => $snapToken
    ]);

} catch(Exception $e){
    echo json_encode([
        "error" => $e->getMessage()
    ]);
}