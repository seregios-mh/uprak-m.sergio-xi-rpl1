<?php
session_start();
require_once "navigasi/koneksi.php";

if (!isset($_SESSION['id'])) {
    header("Location: login_dll/login.php");
    exit;
}

$role = $_SESSION['role'] ?? '';

//cek role user kemudia arahkan ke halaman yang sesuai dengan role yang login
switch ($role) {
    case 'admin':
        header("Location: buku/bukua.php");
        exit;

    case 'anggota':
        header("Location: buku/buku.php");
        exit;
        
    default:
        //menghapus session jika role tidak valid dan arahkan ke halaman login
        session_destroy();
        header("Location: login_dll/login.php");
        exit;
}
?>