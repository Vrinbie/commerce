<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="detail.css">
</head>
<body>

    <div class="container">

        <a href="../index.php" class="back">← Kembali</a>
        <h2>Detail produk</h2>

        <div class="product-detail">

            <!-- KIRI -->
            <div class="left-section">
                <div class="image-box">
                    <img src="../img/ideapad slim.png" alt="Laptop">
                </div>

                <div class="image-box">
                    <img src="../img/ideapad slim1.png" alt="Laptop">
                </div>
            </div>

            <!-- KANAN -->
            <div class="right-section">
                <h1>LENOVO IDEAPAD SLIM 3 RYZEN 3 7320U</h1>

                <p>
                    Laptop ringan dengan performa cepat untuk kebutuhan harian.
                    Ditenagai Ryzen 3, RAM 8GB, dan SSD 128GB yang responsif.
                </p>

                <ul>
                    <li>✓ Cocok untuk belajar & kerja</li>
                    <li>✓ Desain tipis & mudah dibawa</li>
                    <li>✓ Layar 14” nyaman di mata</li>
                </ul>

                <div class="rating">⭐ 4.8</div>

                <div class="spec-table">
                    <div class="row"><span>Processor</span><span>Ryzen 3 7320U</span></div>
                    <div class="row"><span>RAM</span><span>8 GB</span></div>
                    <div class="row"><span>Penyimpanan</span><span>128GB SSD</span></div>
                    <div class="row"><span>Layar</span><span>14 Inch</span></div>
                    <div class="row"><span>VGA</span><span>AMD Radeon Graphics</span></div>
                    <div class="row"><span>Berat</span><span>1.5 Kg</span></div>
                    <div class="row"><span>OS</span><span>Windows 11</span></div>
                </div>

                <h2 class="price" id="price">Rp4.950.000</h2>

                <div class="qty">
                    <button id="minus">-</button>
                    <span id="value">1</span>
                    <button id="plus">+</button>
                </div>

                <div class="buttons">
                    <button class="cart">Tambahkan ke keranjang</button>
                    <button class="buy" onclick="bayar()">Beli Sekarang</button>
                </div>
            </div>
        </div>
    </div>

<!-- MIDTRANS -->
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="Mid-client-KtgRP4xc_UciGhEU"></script>

<script>
let value = 1;
const hargaSatuan = 4950000;

const valueDisplay = document.getElementById("value");
const priceDisplay = document.getElementById("price");

function formatRupiah(angka){
    return "Rp" + angka.toLocaleString("id-ID");
}

function updateDisplay(){
    valueDisplay.textContent = value;
    priceDisplay.textContent = formatRupiah(value * hargaSatuan);
}

document.getElementById("plus").onclick = () => {
    value++;
    updateDisplay();
}

document.getElementById("minus").onclick = () => {
    if(value > 1){
        value--;
        updateDisplay();
    }
}

// 🔥 MIDTRANS BAYAR
function bayar(){
    fetch('../bayar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
            id: 1, // ID produk di database
            qty: value
        })
    })
    .then(res => res.json())
    .then(data => {

        if(!data.token){
            alert("Token gagal dibuat!");
            return;
        }

        snap.pay(data.token, {
            onSuccess: function(){
                alert("Pembayaran berhasil!");
                window.location.href = "../sukses.php";
            },
            onPending: function(){
                alert("Menunggu pembayaran...");
            },
            onError: function(){
                alert("Pembayaran gagal!");
            }
        });

    })
    .catch(err => {
        console.log(err);
        alert("Error!");
    });
}

updateDisplay();
</script>

</body>
</html>