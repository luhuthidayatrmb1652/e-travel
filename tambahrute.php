<?php
include "koneksi.php";

$rute = $_POST['id_travel'];
$alamat = $_POST['alamat'];
$kategori = $_POST['kategori'];
$tujuan = $_POST['tujuan'];
$tanggal = $_POST['tanggal'];
$waktu = $_POST['waktu'];
$no_hp = $_POST['no_hp'];

$sql = mysqli_query($koneksi, "INSERT INTO pesanan (id_travel, alamat, kategori, tujuan, tanggal, waktu, no_hp) VALUES ('$rute', '$alamat', '$kategori', '$tujuan', '$tanggal', '$waktu', '$no_hp')");

if ($sql) {
    echo "<script>alert('Pesanan berhasil ditambahkan!') 
    window.location.href='index.php';
    </script>";
} else {
    echo "<script>alert('Error: " . mysqli_error($koneksi) . "');</script>";
}


// mysqli_close($koneksi);
