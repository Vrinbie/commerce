<?php
include 'koneksi.php';

$nama     = mysqli_real_escape_string($conn, $_POST['nama']);
$email    = mysqli_real_escape_string($conn, $_POST['email']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// validasi kosong
if(empty($nama) || empty($email) || empty($_POST['password'])){
    echo "<script>
            alert('Semua field wajib diisi!');
            window.location='index.php';
          </script>";
    exit;
}

// cek email
$cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>
            alert('Email sudah terdaftar!');
            window.location='index.php';
          </script>";
    exit;
}

// insert
$query = "INSERT INTO users (nama, email, password) 
          VALUES ('$nama', '$email', '$password')";

if(mysqli_query($conn, $query)){
    echo "<script>
            alert('Daftar berhasil!');
            window.location='index.php';
          </script>";
}else{
    echo "Error: " . mysqli_error($conn);
}
?>