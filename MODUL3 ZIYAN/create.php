<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
include('connect.php');


// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if ($_SERVER['REQUEST METHOD'] == "POST"){
}


// 

// (3) Jika sudah coba deh kalian ambil data dari form (CLUE : pakai POST)

    // a. Ambil data nama mobil
    $nama_mobil = $_POST['nama mobil'];
    // b. Ambil data brand mobil
    $brand_mobil = $_POST['brand mobil'];
    // c. Ambil data warna mobil
    $warna_mobil = $_POST['warna mobil'];
    // d. Ambil data tipe mobil
    $tipe_mobil = $_POST['tipe mobil'];
    // e. Ambil data harga mobil
    $harga_mobil = $_POST['harga mobil'];

    // (4) Kalau sudah, kita lanjut Query / Menambahkan data pada SQL (Disini ada perintah untuk SQL), Masukkan ke tabel showroom_mobil (include setiap nama column)
    $query = mysqli_query($conn, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil) VALUES($nama, $brand, $warna, $tipe, $harga)");

    // (5) Buatkan kondisi jika eksekusi query berhasil
    if($query) {
        echo "<script>alert('Data berhasil ditambahkan')</script>";
        echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>"; 
    
    // (6) Jika terdapat kesalahan, buatkan eksekusi query gagalnya 
    } else {
        echo "<script>alert('Error')</script>";
        echo "<meta http-equiv='refresh' content='1 url=form_create_mobil.php'>";
    }
// (7) Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);

?>