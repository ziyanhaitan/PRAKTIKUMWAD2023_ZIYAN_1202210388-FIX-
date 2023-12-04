<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$conn = mysqli_connect("localhost", "root", "", "db_wad_modul4_ziyan_1202210388");


// 

// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if ($conn->connect_error){
    die("error" .$conn->connect_error);
    }
 
?>