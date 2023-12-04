<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
    $conn = mysqli_connect("localhost", "root", "", "db_wad_modul3_ziyan_1202210388");
    $result = mysqli_query($conn, "SELECT * FROM showroom_mobil");
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if (!$conn) {
        die("error: " . mysqli_connect_error());
    }
    echo "";
    mysqli_close($conn)
// 
?>