<?php

require_once "../navigasi/koneksi.php";


//session (dalam konteks teknologi web, session adalah mekanisme untuk menyimpan data pengguna di server agar dapat digunakan di beberapa halaman web) 
// digunakan untuk menyimpan data login pengguna setelah berhasil login. Dengan menggunakan session, pengguna tidak perlu login kembali setiap kali mengakses halaman yang memerlukan autentikasi.

session_start();//memulai session untuk menyimpan data login pengguna

$nama = $_POST['nama'];
$pass = $_POST['pass'];

$sql = "SELECT tb_user.* FROM tb_user WHERE tb_user.nama = '$nama'";

$query = mysqli_query($koneksi, $sql);

$user = mysqli_fetch_assoc($query);

if ($user && password_verify($pass, $user['pass'])) {
    //membuat variabel session
    //membuat session untuk menyimpan data login pengguna
    $_SESSION['id_user'] = $user['id_user'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['kelas'] = $user['kelas'];
    $_SESSION['login'] = true;

    //berhasil login, maka akan diarahkan ke halaman index.php
    header("Location: ../index.php");
    exit;
} else {
    echo "<script>alert('Username atau password salah.'); window.location.href = 'login.php';</script>";
}