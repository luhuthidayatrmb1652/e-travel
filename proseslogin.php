<?php
include "koneksi.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];



    $user = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_array($user);

        session_start();
        $_SESSION['id_user'] = $data['id_user'];
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['alamat'] = $data['alamat'];
        $_SESSION['no_hp'] = $data['no_hp'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['foto'] = $data['foto'];

        echo "<script>
    alert('Login Berhasil');
    window.location='index.php'
    </script>";
    } else {
        echo "<script>
    alert('username atau password salah');
    window.location='login.php'
    </script>";
    }
}
