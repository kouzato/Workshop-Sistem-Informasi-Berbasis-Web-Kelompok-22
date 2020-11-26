<?php
$koneksi = mysqli_connect("localhost","root","","tugas_web_crud");

if(mysqli_connect_error()){
    echo "Koneksi database gagal :" . mysqli_connect_error();
}
?>