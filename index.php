<?php session_start(); ?>
<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <title>ZEPTOP - Laptop Store</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!-- HEADER -->
    <header>
      <div class="logo">ZEPTOP</div>

      <div class="search-box">
        <input type="text" placeholder="Cari laptop yang kamu mau" />
        <button>🔍</button>
      </div>

      <!-- ICON KERANJANG -->
      <div class="cart-icon" onclick="openCart()">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 25 25">
          <path
            fill="currentColor"
            d="M5.588 21.413Q5 20.825 5 20t.588-1.412T7 18t1.413.588T9 20t-.587 1.413T7 22t-1.412-.587m10 0Q15 20.825 15 20t.588-1.412T17 18t1.413.588T19 20t-.587 1.413T17 22t-1.412-.587M6.15 6l2.4 5h7l2.75-5zM5.2 4h14.75q.575 0 .875.513t.025 1.037l-3.55 6.4q-.275.5-.737.775T15.55 13H8.1L7 15h11q.425 0 .713.288T19 16t-.288.713T18 17H7q-1.125 0-1.7-.987t-.05-1.963L6.6 11.6L3 4H2q-.425 0-.712-.288T1 3t.288-.712T2 2h1.625q.275 0 .525.15t.375.425z"
          />
        </svg>
      </div>

      <div class="auth">
        <?php if(isset($_SESSION['login'])): ?>
          <span>Halo, <b><?= $_SESSION['nama']; ?></b></span>
          <button onclick="window.location='logout.php'">Logout</button>
        <?php else: ?>
          <button onclick="openModal()" class="btn-auth">
            Daftar / Login
          </button>
        <?php endif; ?>

        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 7.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0m4.5 13c-.475-9.333-14.525-9.333-15 0" />
        </svg>
      </div>
    </header>

    <!-- BANNER -->
    <section class="banner">
      <img src="img/banner.jpg" alt="Sale Laptop" />
    </section>

    <!-- KATEGORI -->
    <section class="kategori">
      <a href="katalog/katalog_asus.php" class="card">
        <div class="text">ASUS</div>
        <img src="img/asus.png" />
      </a>

      <a href="katalog/katalog_lenovo.php" class="card">
        <div class="text">LENOVO</div>
        <img src="img/lenovo.png" />
      </a>

      <a href="katalog/katalog_advan.php" class="card">
        <div class="text">ADVAN</div>
        <img src="img/advan.png" />
      </a>

      <a href="katalog/katalog_macbook.php" class="card">
        <div class="text">MACBOOK</div>
        <img src="img/apple.png" />
      </a>

      <a href="katalog/katalog_samsung.php" class="card">
        <div class="text">SAMSUNG</div>
        <img src="img/samsung.png" />
      </a>

      <a href="katalog/katalog_dell.php" class="card">
        <div class="text">DELL</div>
        <img src="img/dell.png" />
      </a>
    </section>

    <!-- FITUR -->
    <section class="fitur">
      <div class="fitur-item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 512 512">
            <path
              fill="currentColor"
              d="M4.1 38.2C1.4 34.2 0 29.4 0 24.6C0 11 11 0 24.6 0h109.3c11.2 0 21.7 5.9 27.4 15.5l68.5 114.1c-48.2 6.1-91.3 28.6-123.4 61.9zm503.7 0L405.6 191.5c-32.1-33.3-75.2-55.8-123.4-61.9l68.5-114.1C356.5 5.9 366.9 0 378.1 0h109.3C501 0 512 11 512 24.6c0 4.8-1.4 9.6-4.1 13.6zM80 336a176 176 0 1 1 352 0a176 176 0 1 1-352 0m184.4-94.9c-3.4-7-13.3-7-16.8 0l-22.4 45.4c-1.4 2.8-4 4.7-7 5.1l-50.2 7.3c-7.7 1.1-10.7 10.5-5.2 16l36.3 35.4c2.2 2.2 3.2 5.2 2.7 8.3l-8.6 49.9c-1.3 7.6 6.7 13.5 13.6 9.9l44.8-23.6c2.7-1.4 6-1.4 8.7 0l44.8 23.6c6.9 3.6 14.9-2.2 13.6-9.9l-8.6-49.9c-.5-3 .5-6.1 2.7-8.3l36.3-35.4c5.6-5.4 2.5-14.8-5.2-16l-50.1-7.3c-3-.4-5.7-2.4-7-5.1z"
            />
          </svg>
        </div>
        <p>Berkualitas</p>
      </div>

      <div class="fitur-item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24">
            <path
              fill="currentColor"
              d="M13 3h4v2h-4zM3 8h4v2H3zm0 8h4v2H3zm-1-4h3.99v2H2zm19.707-5.293l-1.414-1.414L18.586 7A6.94 6.94 0 0 0 15 6c-3.859 0-7 3.141-7 7s3.141 7 7 7s7-3.141 7-7a6.97 6.97 0 0 0-1.855-4.73zM16 14h-2V8.958h2z"
            />
          </svg>
        </div>
        <p>Cepat & Terjangkau</p>
      </div>

      <div class="fitur-item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 24 24"><path fill="currentColor" d="m10 17l-4-4l1.41-1.41L10 14.17l6.59-6.59L18 9m-6-8L3 5v6c0 5.55 3.84 10.74 9 12c5.16-1.26 9-6.45 9-12V5z" /></svg>
        </div>
        <p>Bergaransi</p>
      </div>

      <div class="fitur-item">
        <div class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 256 256">
            <path
              fill="currentColor"
              d="m254.3 107.91l-25.52-51.06a16 16 0 0 0-21.47-7.15l-24.87 12.43l-52.39-13.86a8.14 8.14 0 0 0-4.1 0L73.56 62.13L48.69 49.7a16 16 0 0 0-21.47 7.15L1.7 107.9a16 16 0 0 0 7.15 21.47l27 13.51l55.49 39.63a8.1 8.1 0 0 0 2.71 1.25l64 16a8 8 0 0 0 7.6-2.1l40-40l15.08-15.08l26.42-13.21a16 16 0 0 0 7.15-21.46m-54.89 33.37L165 113.72a8 8 0 0 0-10.68.61C136.51 132.27 116.66 130 104 122l43.24-42h31.81l27.21 54.41Zm-41.87 41.86l-58.12-14.53l-49.2-35.14l28-56L128 64.28l9.8 2.59l-45 43.68l-.08.09a16 16 0 0 0 2.72 24.81c20.56 13.13 45.37 11 64.91-5L188 152.66Zm-25.72 34.8a8 8 0 0 1-7.75 6.06a8 8 0 0 1-1.95-.24l-41.71-10.43a7.9 7.9 0 0 1-2.71-1.25l-26.35-18.82a8 8 0 0 1 9.3-13l25.11 17.94L126 208.24a8 8 0 0 1 5.82 9.7"
            />
          </svg>
        </div>
        <p>Terpercaya</p>
      </div>
    </section>

    <!-- PRODUK -->
    <section class="produk">
      <h2>Produk Terbaru</h2>
      <p class="sub">Unit pilihan dengan performa teruji untuk profesional Anda.</p>

      <div class="produk-grid">
        <!-- CARD 1 -->
        <div class="produk-item">
          <span class="badge">Baru</span>
          <img src="img/workplus.png" />

          <div class="info">
            <div class="title">
              <h3>Advan Workplus</h3>
              <span class="harga">Rp 3.200.000</span>
            </div>

            <p class="desc">Intel Core i5-12450H Generasi ke-12</p>

            <div class="spec">
              <div>RAM<br /><b>16 GB LPDDR5</b></div>
              <div>Penyimpanan<br /><b>512 GB SSD</b></div>
            </div>

            <button>Lihat Detail</button>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="produk-item">
          <span class="badge">Baru</span>
          <img src="img/zenbook.png" />

          <div class="info">
            <div class="title">
              <h3>ASUS Zenbook S 16</h3>
              <span class="harga">Rp 5.000.000</span>
            </div>

            <p class="desc">AMD Ryzen™ AI 9 HX 370</p>

            <div class="spec">
              <div>RAM<br /><b>8 GB LPDDR4</b></div>
              <div>Penyimpanan<br /><b>256 GB SSD</b></div>
            </div>

            <button>Lihat Detail</button>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="produk-item">
          <span class="badge">Baru</span>
          <img src="img/mackbook.png" />

          <div class="info">
            <div class="title">
              <h3>MacBook Air M2</h3>
              <span class="harga">Rp 11.400.000</span>
            </div>

            <p class="desc">Chip Apple Silicon M2 (Generasi ke-2)</p>

            <div class="spec">
              <div>RAM<br /><b>24GB</b></div>
              <div>Penyimpanan<br /><b>2 TB SSD</b></div>
            </div>

            <button>Lihat Detail</button>
          </div>
        </div>

        <!-- CARD 4 -->
        <div class="produk-item">
          <span class="badge">Baru</span>
          <img src="img/ideapad.png" />

          <div class="info">
            <div class="title">
              <h3>Lenovo IdeaPad Slim 3</h3>
              <span class="harga">Rp 4.950.000</span>
            </div>

            <p class="desc">AMD Ryzen 7000 Series (Ryzen 3 7320U)</p>

            <div class="spec">
              <div>RAM<br /><b>8GB DDR3</b></div>
              <div>Penyimpanan<br /><b>128GB SSD</b></div>
            </div>

            <button onclick="location.href = 'detail/detail.php'">Lihat Detail</button>
          </div>
        </div>
      </div>
    </section>

    <script>
      const items = document.querySelectorAll(".produk-item");

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry, index) => {
            if (entry.isIntersecting) {
              setTimeout(() => {
                entry.target.classList.add("show");
              }, index * 200); // delay biar muncul satu-satu
            }
          });
        },
        {
          threshold: 0.2,
        },
      );

      items.forEach((item) => {
        observer.observe(item);
      });
    </script>

    <footer class="footer">
      <div class="footer-overlay">
        <div class="footer-content">
          <!-- ALAMAT -->
          <div class="col">
            <h3>Alamat Kami</h3>

            <div class="item">
              <span class="icon">📍</span>
              <p>Bogor Barat, Jalan sindang Barang Pilar 1, Blok 007</p>
            </div>

            <div class="item">
              <span class="icon">🕒</span>
              <p>(Layanan pemesanan online tersedia 24 jam)</p>
            </div>
          </div>

          <!-- KONTAK -->
          <div class="col">
            <h3>Kontak Kami</h3>

            <div class="item">
              <span class="icon">📞</span>
              <p>(0361) 555 8723</p>
            </div>

            <div class="item">
              <span class="icon">✉️</span>
              <p>info@zeptopgroupbali.com</p>
            </div>
          </div>

          <!-- SOSIAL MEDIA -->
          <div class="col center">
            <h3>Sosial Media</h3>
            <div class="sosmed">
              <a href="https://www.instagram.com/zeptop26?igsh=ZWsydzUxYjBieXZy" class="icon"
                ><svg xmlns="http://www.w3.org/2000/svg" width="256" height="256" viewBox="0 0 256 256">
                  <g fill="none">
                    <rect width="256" height="256" fill="url(#SVGKdMMobCR)" rx="60" />
                    <rect width="256" height="256" fill="url(#SVGqYUiQbXV)" rx="60" />
                    <path
                      fill="#fff"
                      d="M128.009 28c-27.158 0-30.567.119-41.233.604c-10.646.488-17.913 2.173-24.271 4.646c-6.578 2.554-12.157 5.971-17.715 11.531c-5.563 5.559-8.98 11.138-11.542 17.713c-2.48 6.36-4.167 13.63-4.646 24.271c-.477 10.667-.602 14.077-.602 41.236s.12 30.557.604 41.223c.49 10.646 2.175 17.913 4.646 24.271c2.556 6.578 5.973 12.157 11.533 17.715c5.557 5.563 11.136 8.988 17.709 11.542c6.363 2.473 13.631 4.158 24.275 4.646c10.667.485 14.073.604 41.23.604c27.161 0 30.559-.119 41.225-.604c10.646-.488 17.921-2.173 24.284-4.646c6.575-2.554 12.146-5.979 17.702-11.542c5.563-5.558 8.979-11.137 11.542-17.712c2.458-6.361 4.146-13.63 4.646-24.272c.479-10.666.604-14.066.604-41.225s-.125-30.567-.604-41.234c-.5-10.646-2.188-17.912-4.646-24.27c-2.563-6.578-5.979-12.157-11.542-17.716c-5.562-5.562-11.125-8.979-17.708-11.53c-6.375-2.474-13.646-4.16-24.292-4.647c-10.667-.485-14.063-.604-41.23-.604zm-8.971 18.021c2.663-.004 5.634 0 8.971 0c26.701 0 29.865.096 40.409.575c9.75.446 15.042 2.075 18.567 3.444c4.667 1.812 7.994 3.979 11.492 7.48c3.5 3.5 5.666 6.833 7.483 11.5c1.369 3.52 3 8.812 3.444 18.562c.479 10.542.583 13.708.583 40.396s-.104 29.855-.583 40.396c-.446 9.75-2.075 15.042-3.444 18.563c-1.812 4.667-3.983 7.99-7.483 11.488c-3.5 3.5-6.823 5.666-11.492 7.479c-3.521 1.375-8.817 3-18.567 3.446c-10.542.479-13.708.583-40.409.583c-26.702 0-29.867-.104-40.408-.583c-9.75-.45-15.042-2.079-18.57-3.448c-4.666-1.813-8-3.979-11.5-7.479s-5.666-6.825-7.483-11.494c-1.369-3.521-3-8.813-3.444-18.563c-.479-10.542-.575-13.708-.575-40.413s.096-29.854.575-40.396c.446-9.75 2.075-15.042 3.444-18.567c1.813-4.667 3.983-8 7.484-11.5s6.833-5.667 11.5-7.483c3.525-1.375 8.819-3 18.569-3.448c9.225-.417 12.8-.542 31.437-.563zm62.351 16.604c-6.625 0-12 5.37-12 11.996c0 6.625 5.375 12 12 12s12-5.375 12-12s-5.375-12-12-12zm-53.38 14.021c-28.36 0-51.354 22.994-51.354 51.355s22.994 51.344 51.354 51.344c28.361 0 51.347-22.983 51.347-51.344c0-28.36-22.988-51.355-51.349-51.355zm0 18.021c18.409 0 33.334 14.923 33.334 33.334c0 18.409-14.925 33.334-33.334 33.334s-33.333-14.925-33.333-33.334c0-18.411 14.923-33.334 33.333-33.334"
                    />
                    <defs>
                      <radialGradient id="SVGKdMMobCR" cx="0" cy="0" r="1" gradientTransform="matrix(0 -253.715 235.975 0 68 275.717)" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#fd5" />
                        <stop offset=".1" stop-color="#fd5" />
                        <stop offset=".5" stop-color="#ff543e" />
                        <stop offset="1" stop-color="#c837ab" />
                      </radialGradient>
                      <radialGradient id="SVGqYUiQbXV" cx="0" cy="0" r="1" gradientTransform="rotate(78.68 -32.69 -16.937)scale(113.412 467.488)" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#3771c8" />
                        <stop offset=".128" stop-color="#3771c8" />
                        <stop offset="1" stop-color="#60f" stop-opacity="0" />
                      </radialGradient>
                    </defs>
                  </g></svg
              ></a>
              <a href="#" class="icon">📘</a>
            </div>
          </div>

          <!-- LOKASI -->
          <div class="col center">
            <h3>Lokasi Kami</h3>

            <iframe src="https://www.google.com/maps?q=Bogor%20Barat&output=embed" class="map" loading="lazy"> </iframe>

            <a href="https://maps.google.com" target="_blank">
              <button class="btn-lokasi">Arahkan ke Lokasi</button>
            </a>
          </div>
        </div>
      </div>

      <!-- COPYRIGHT -->
      <div class="copyright">
        <span>©2026. PT Zeptop. All Rights Reserved.</span>
        <span>Designed by <b>Kelompok 6</b></span>
      </div>
    </footer>

    <!-- POPUP KERANJANG -->
    <div id="cartPopup" class="cart-popup">
      <div class="cart-content">

        <div class="cart-header">
          <h3>Keranjang saya</h3>
          <span class="cart-close" onclick="closeCart()">✖</span>
        </div>

        <div id="cartItems"></div>

        <div class="cart-footer">
          <div class="total">
            <span>Total</span>
            <span id="totalHarga">Rp0</span>
          </div>

          <button class="btn-bayar" onclick="bayar()">Bayar</button>
        </div>

      </div>
    </div>

<div id="loginModal" class="modal">
  <div class="modal-container">

    <!-- KIRI -->
    <div class="modal-left">
      <h2>Selamat Datang</h2>
      <p>Silakan login atau daftar untuk melanjutkan</p>
    </div>

    <!-- KANAN -->
    <div class="modal-right">
      
      <span class="close" onclick="closeModal()">&times;</span>

      <!-- TAB -->
      <div class="tab">
        <button class="tab-btn active" onclick="showTab(event,'login')">Masuk</button>
        <button class="tab-btn" onclick="showTab(event,'register')">Daftar</button>
      </div>

      <!-- LOGIN -->
      <div id="loginTab" class="tab-content">
        <form action="proses_login.php" method="POST">
          <input type="text" name="email" placeholder="Masukkan Email / Username" required>

          <div class="password-box">
            <input type="password" name="password" id="loginPass" placeholder="Masukkan Password" required>
            <span onclick="togglePass('loginPass')">👁️</span>
          </div>

          <div class="extra">
            <label><input type="checkbox"> Ingat Saya</label>
            <a href="#">Lupa password?</a>
          </div>

          <button class="btn-submit">MASUK</button>
        </form>
      </div>

      <!-- REGISTER -->
      <div id="registerTab" class="tab-content" style="display:none;">
        <form action="proses_register.php" method="POST">
          <input type="text" name="nama" placeholder="Nama Lengkap" required>
          <input type="email" name="email" placeholder="Email" required>

          <div class="password-box">
            <input type="password" name="password" id="regPass" placeholder="Password" required>
            <span onclick="togglePass('regPass')">👁️</span>
          </div>

          <button class="btn-submit">DAFTAR</button>
        </form>
      </div>

    </div>
  </div>
</div>


    <script src="https://app.sandbox.midtrans.com/snap/snap.js" 
            data-client-key="ISI_CLIENT_KEY_KAMU"></script>
    <script>
      function openModal() {
        document.getElementById("loginModal").style.display = "block";
      }

      function closeModal() {
        document.getElementById("loginModal").style.display = "none";
      }

      function openCart(){
        document.getElementById("cartPopup").style.display = "flex";
        loadCart();
      }

      function closeCart(){
        document.getElementById("cartPopup").style.display = "none";
      }

      // klik luar = close
      window.onclick = function(e){
        let popup = document.getElementById("cartPopup");
        if(e.target === popup){
          popup.style.display = "none";
        }
      }

      function bayar(){
        fetch('bayar.php')
          .then(res => res.json())
          .then(data => {

            snap.pay(data.token, {
              onSuccess: function(result){
                alert("Pembayaran berhasil!");
                console.log(result);
              },
              onPending: function(result){
                alert("Menunggu pembayaran...");
              },
              onError: function(result){
                alert("Pembayaran gagal!");
              },
              onClose: function(){
                alert("Kamu menutup pembayaran");
              }
            });

          });
      }


      function loadCart(){
        fetch('get_cart.php')
        .then(res => res.json())
        .then(data => {
          let html = '';
          let total = 0;

          data.forEach(item => {
            let subtotal = item.price * item.qty;

            html += `
              <div class="cart-item">
                
                <input type="checkbox" checked onchange="toggleItem(this, ${subtotal})">

                <img src="img/${item.image}">

                <div class="cart-info">
                  <div class="cart-title">${item.name}</div>
                  <div class="cart-price">Rp${item.price}</div>

                  <div class="qty-box">
                    <button onclick="updateQty(${item.id}, -1)">-</button>
                    <span>${item.qty}</span>
                    <button onclick="updateQty(${item.id}, 1)">+</button>
                  </div>
                </div>

                <div class="cart-right">
                  <div class="subtotal">Rp${subtotal}</div>
                  <div class="delete-btn" onclick="deleteItem(${item.id})">🗑</div>
                </div>

              </div>
            `;

            total += subtotal;
          });

          document.getElementById("cartItems").innerHTML = html;
          document.getElementById("totalHarga").innerText = "Rp" + total;
        });
      }
      function updateQty(id, change){
        fetch(`update_qty.php?id=${id}&change=${change}`)
        .then(() => loadCart());
      }

      function deleteItem(id){
        fetch(`delete_cart.php?id=${id}`)
        .then(() => loadCart());
      }

      // checkbox total
      function toggleItem(checkbox, subtotal){
        let totalEl = document.getElementById("totalHarga");
        let current = parseInt(totalEl.innerText.replace('Rp',''));

        if(checkbox.checked){
          current += subtotal;
        } else {
          current -= subtotal;
        }

        totalEl.innerText = "Rp" + current;
      }

      function showTab(event, tabName){
        let tabs = document.querySelectorAll(".tab-content");
        let buttons = document.querySelectorAll(".tab-btn");

        // sembunyikan semua tab
        tabs.forEach(tab => tab.style.display = "none");

        // hapus active semua tombol
        buttons.forEach(btn => btn.classList.remove("active"));

        // tampilkan tab yang dipilih
        document.getElementById(tabName + "Tab").style.display = "block";

        // aktifkan tombol
        event.currentTarget.classList.add("active");
      }
    </script>
  </body>
</html>