<head>
    <title>E-Travel</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="Free HTML Template">
    <meta name="description" content="Free HTML Template">

    <link rel="stylesheet" type="text/css" href="icomoon/icomoon.css">
    <link rel="stylesheet" type="text/css" href="css/vendor.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@900&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<section id="contact" class="scrollspy-section bg-dark padding-large">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <div class="section-header">
                        <div class="title">
                            <span>Get in touch</span>
                        </div>
                        <h2 class="section-title light">Regist</h2>
                    </div>

                    <?php
                    include "koneksi.php";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = mysqli_real_escape_string($koneksi, $_POST["nama"]);
                        $email = mysqli_real_escape_string($koneksi, $_POST["email"]);
                        $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
                        $password = mysqli_real_escape_string($koneksi, $_POST["password"]);

                        $regist = "INSERT INTO user (nama, email, username, password) VALUES ('$nama', '$email', '$username', '$password')";

                        if (mysqli_query($koneksi, $regist)) {
                            echo "<p>Berhasil Mendaftar</p>";
                        } else {
                            echo "<p>Gagal mengirim pesan: " . mysqli_error($koneksi) . "</p>";
                        }
                    }

                    $contact = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
                    if (!$contact) {
                        echo "<p>Gagal memuat data kontak: " . mysqli_error($koneksi) . "</p>";
                    }
                    ?>

                    <form id="form-contact" class="form-light" method="post" action="">
                        <p>
                            <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda" required>
                        </p>
                        <p>
                            <input type="text" name="email" placeholder="Masukkan Email Anda" required>
                        </p>
                        <p>
                            <input type="text" name="username" placeholder="username" required></input>
                        </p>
                        <p>
                            <input type="text" name="password" placeholder="password" required></input>
                        </p>
                        <p>
                            <label for="agree">
                                <input id="agree" name="agree" type="checkbox" required>
                                <span>I agree to privacy policy</span>
                            </label>
                        </p>
                        <button type="submit" class="btn btn-accent btn-rounded btn-xlarge btn-full">Submit</button>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section>