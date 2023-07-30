<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'todolist');

if(mysqli_connect_errno()){
    echo "Koneksi ke database Gagal! " .mysqli_connect_error();
}
?>