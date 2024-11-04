<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $regist = $conn->prepare("INSERT INTO regist (username, email, password) VALUES ($email, $username, $hashedPassword)");

    if ($regist->execute()) {
        echo "Registrasi berhasil!";
    } else {
        echo "Error: " . $regist->error;
    }

    // Tutup statement dan koneksi
    $regist->close();
    $conn->close();
}
