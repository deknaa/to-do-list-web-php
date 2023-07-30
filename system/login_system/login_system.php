<?php 

// memulai session
session_start();

// include koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['pass'];

// mengambil data user dengan username dan password yang sesuai
$query = mysqli_query($koneksi, "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'");

// menghitung jumlah data yang ditemukan
$cek_data = mysqli_num_rows($data);

if($cek_data > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../todo_dashboard.php");
}else{
    header("location:../index.php?pesan=gagal");
}

?>