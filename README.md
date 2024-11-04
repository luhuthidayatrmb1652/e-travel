<?php
session_start();
if (!isset($_SESSION['id_user'])) {

    echo "<script>
    alert ('Silahkan Login Dahulu')
    window.location.href='login.php'
    </script>";
}
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

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

<body>

    <div class="preloader"></div>

    <div class="nav nav-overlay">
        <div class="nav__content">
            <div class="container">
                <div class="row p-4 p-md-0 flex-column-reverse flex-md-row g-md-5 nav__block">
                    <div class="col-md-4 text-white">
                        <h3 class="text-white fw-bold nav__block-item">Contact info</h3>
                        <p class="text-light nav__block-item">Officia nisi corrupti eaque cumque exercitationem labore
                            sint sapiente rem neque temporibus id ratione perspiciatis, tenetur est repellendus
                            aspernatur culpa repudiandae omnis.</p>
                        <ul class="list-unstyled text-light nav__block-item">
                            <li class="menu-item">
                                <i class="icon icon-location me-2"></i>2489 Locust Court, Los Angeles
                            </li>
                            <li class="menu-item">
                                <i class="icon icon-location2 me-2"></i>3927 Red Maple Drive, Los Angeles
                            </li>
                            <li class="menu-item">
                                <i class="icon icon-phone me-2"></i>+63 667 341 3463
                            </li>
                            <li class="menu-item">
                                <i class="icon icon-envelope-o me-2"></i><a href="#"
                                    class="text-white">contact@example.com</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <h1 class="navbar-brand text-center md-1" href="#"> ELIT TRAVEL</h1>
            <h3><i class="fa fa-car"></i></h3>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#rute">Rute</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#update">Berita Terkini</a>
                    </li>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Pesanan Anda</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-grid">
                                            <div class="row">
                                                <?php
                                                include "koneksi.php";
                                                $pesan = mysqli_query($koneksi, "SELECT * FROM pesanan ORDER BY id_pesanan DESC");
                                                while ($item = mysqli_fetch_array($pesan)) {
                                                ?>
                                                    <div class="col-md-4">
                                                        <article class="post-item">
                                                            <div class="post-content">
                                                                <div class="meta-date">Alamat Anda<?php echo $item['alamat']; ?></div>
                                                                <h3 class="post-title text-center"><a href="#">Kelas <?php echo $item['kategori']; ?></a></h3>
                                                                <p>Tujuan <?php echo $item['tujuan']; ?> <br><?php echo $item['tanggal']; ?></p>
                                                                <h4 class="text-center"><?php echo $item['waktu']; ?></h4>
                                                                <h6>No. Handphone : <?php echo $item['no_hp']; ?></h6>
                                                            </div>
                                                        </article>
                                                    </div>
                                                <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="fa-solid fa-cart-plus"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> </i></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <img src="images/15.jpg" alt="" width="35" height="35" class="rounded-circle">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body text-center">
                                <a href="profile.php" class="btn btn-success mx-3 mt-2 d-block">Profile</a>
                                <a href="login.php" class="btn btn-danger mx-3 mt-2 d-block">Logout</a>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div id="home" class="side-nav-bar">
        <input id="menu-toggle" type="checkbox" />
        <label class="menu-btn" for="menu-toggle">
            <span></span>
        </label>
    </div>
</body>

</html>
<section id="intro" class="scrollspy-section">
    <div class="main-slider">
        <div class="slider-item jarallax" data-speed="0.2">
            <img src="images/13.jpg" alt="banner" class="jarallax-img">
            <div class="banner-content">
                <h2 class="banner-title txt-fx">THE ELIT TRAVEL </h2>
                <div class="btn-wrap">
                    <a href="#" class="btn-with-line">Sijago Lintas</a>
                </div>
            </div>
        </div>

        <div class="slider-item jarallax" data-speed="0.2">
            <img src="images/12.jpg" alt="banner" class="jarallax-img">
            <div class="banner-content">
                <h2 class="banner-title txt-fx">Pemesanan Mudah dan Terjangkau</h2>
                <div class="btn-wrap">
                </div>
            </div>
        </div>

        <div class="slider-item jarallax" data-speed="0.2">
            <img src="images/11.jpg" alt="banner" class="jarallax-img">
            <div class="banner-content">
                <h2 class="banner-title txt-fx">Kenyamanan Yang Belum Pernah Ada</h2>
                <div class="btn-wrap">
                </div>
            </div>
        </div>
    </div>

    <div class="button-container">
        <button class="prev slick-arrow">
            <i class="icon icon-chevron-thin-left"></i>
        </button>
        <button class="next slick-arrow">
            <i class="icon icon-chevron-thin-right"></i>
        </button>
    </div>
</section>

<body>
    <section id="about" class="scrollspy-section padding-xlarge">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="section-header">
                        <div class="title">
                            <span>kenapa harus travel kami??</span>
                        </div>
                        <h2 class="section-title"><i class="fa fa-address-card"></i> Tentang Kami</h2>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <figure class="jarallax-keep-img" data-speed="0.8">
                        <img src="images/images.jpg" alt="about us" class="jarallax-img single-image">
                    </figure>
                </div>
                <div class="col-md-6 description text-lead">
                    <p><strong>Amet, consectetur adipiscing elit. Commodo viverra eu volutpat amet, leo ultrici non
                            senectus odio dolor. Id at urna non porttitor elentum. Viverra senectus lorem ipsum dolor
                            sit adui ultricies dolor varius nibh velit viverra euen.</strong></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Commodo viverra eu volutpat amet, leo
                        non senetus odio dolor. Id at urna non portitor etum. Vivera senectus elit dui ultricies dolor.
                        Varius nibh velit pellentesque sapien, sapien neque dignissim.</p>
                    <p>Commodo vivera eu volutpat amet, leo non senectus odio dolor. Id at urna non porttitor elementum.
                        Viverra senectus dui ultricies dolor.</p>

                    <div class="btn-wrap">
                        <a href="testimoni.php" class="btn btn-accent btn-xlarge btn-rounded">Lihat Ulasan Tentang Kami</a>
                    </div>

                </div>

            </div>

        </div>
    </section>
</body>

<section id="rute" class="scrollspy-section bg-white padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <div class="title">
                        <span>Silahkan Pilih Rute Yang TN/NY Inginkan</span>
                    </div>
                    <h2 class="section-title primary">RUTE KAMI <i class="fa fa-route"></i></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="post-grid">
                    <div class="row">
                        <?php
                        include "koneksi.php";
                        $rute = mysqli_query($koneksi, "SELECT * FROM data_travel ORDER BY id_travel DESC");
                        while ($item = mysqli_fetch_array($rute)) {
                        ?>
                            <div class="col-md-4">
                                <article class="post-item">
                                    <div class="post-content">
                                        <div class="meta-date"><?php echo $item['kategori']; ?></div>
                                        <h3 class="post-title text-center"><a href="#"><?php echo $item['rute']; ?></a></h3>
                                        <p>Harga : Rp <?php echo $item['harga']; ?> <br>Jumlah Penumpang : <?php echo $item['penumpang']; ?> Orang</p>
                                        <h4 class="text-center"><?php echo $item['jdwl_berangkat']; ?></h4>
                                        <h6>Pagi : <?php echo $item['pagi']; ?></h6>
                                        <h6>Siang : <?php echo $item['siang']; ?></h6>
                                        <h6>Malam : <?php echo $item['malam']; ?></h6>
                                        <button type="button" class="btn btn-outline-dark rounded-pill text-uppercase is-checked" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $item['id_travel'] ?>">
                                            <div class="box-icon"> <i class="icon icon-cart"></i>Order Sekarang!!</div>
                                        </button>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "koneksi.php";
$pesan = mysqli_query($koneksi, "SELECT * FROM data_travel ORDER BY id_travel DESC");
while ($psn = mysqli_fetch_array($pesan)) {
?>
    <div class="modal fade" id="exampleModal<?= $psn['id_travel'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="tambahrute.php" method="post" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Order Rute: <?= $psn['rute'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="alamat">Alamat Lengkap Anda</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="kategori">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control" required>
                                <option value="">Pilih Kelas</option>
                                <?php
                                $travel = mysqli_query($koneksi, "SELECT DISTINCT kategori FROM data_travel");
                                while ($trvl = mysqli_fetch_array($travel)) {
                                    echo "<option value='{$trvl['kategori']}'>{$trvl['kategori']}</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Masukkan Alamat Tujuan Anda</label>
                            <input type="text" name="tujuan" id="tujuan" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">Tanggal Berangkat</label>
                            <input type="date" name="tanggal" id="tanggal" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="waktu">Waktu Berangkat</label>
                            <input type="text" name="waktu" id="waktu" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Masukkan Nomor Handphone/Whatsapp Anda</label>
                            <input type="number" name="no_hp" id="no_hp" class="form-control" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="simpan" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>


<section id="contact" class="scrollspy-section bg-dark padding-large">
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="left-content">
                    <div class="section-header">
                        <div class="title">
                            <span>Get in touch</span>
                        </div>
                        <h2 class="section-title light">Contact us</h2>
                    </div>

                    <p>Saran dan masukan Anda sangat berguna bagi kami.</p>

                    <?php
                    include "koneksi.php";

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama_lengkap = mysqli_real_escape_string($koneksi, $_POST["nama_lengkap"]);
                        $email = mysqli_real_escape_string($koneksi, $_POST["email"]);
                        $pesan = mysqli_real_escape_string($koneksi, $_POST["pesan"]);

                        $insertQuery = "INSERT INTO contact (nama_lengkap, email, pesan) VALUES ('$nama_lengkap', '$email', '$pesan')";

                        if (mysqli_query($koneksi, $insertQuery)) {
                            echo "<p>Terima kasih atas masukan Anda!</p>";
                        } else {
                            echo "<p>Gagal mengirim pesan: " . mysqli_error($koneksi) . "</p>";
                        }
                    }

                    $contact = mysqli_query($koneksi, "SELECT * FROM contact ORDER BY id_kontak DESC");
                    if (!$contact) {
                        echo "<p>Gagal memuat data kontak: " . mysqli_error($koneksi) . "</p>";
                    }
                    ?>

                    <form id="form-contact" class="form-light" method="post" action="">
                        <p>
                            <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" required>
                        </p>
                        <p>
                            <input type="text" name="email" placeholder="Masukkan Email Anda" required>
                        </p>
                        <p>
                            <input type="text" name="pesan" placeholder="Saran dan Masukan" required></input>
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

            <div class="col-md-6">
                <div class="right-content">
                    <div class="iconbox">
                        <i class="icon icon-location"></i>
                        <div class="detail">
                            <strong>Address :</strong>
                            <p>3927 Red Maple Drive, Los Angeles</p>
                        </div>
                    </div>
                    <div class="iconbox">
                        <i class="icon icon-phone"></i>
                        <div class="detail">
                            <strong>Phone:</strong>
                            <p>+62 822 8927 3582</p>
                        </div>
                    </div>
                    <div class="iconbox">
                        <i class="icon icon-mail3"></i>
                        <div class="detail">
                            <strong>Email:</strong>
                            <p><a href="mailto:luhuthidayat1652@gmail.com">luhuthidayat1652@gmail.com</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section id="update" class="scrollspy-section bg-white padding-large">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <div class="title">
                        <span>Update Terkini</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="post-grid">
                    <div class="row">
                        <?php
                        include "koneksi.php";
                        $berita = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
                        while ($item = mysqli_fetch_array($berita)) {
                        ?>
                            <div class="col-md-4">
                                <article class="post-item">
                                    <div class="post-content">
                                        <img class="img-fluid w-100" src="admin/img/<?php echo $item['gambar'] ?>">
                                        <h4 href="single_berita.php"><?php echo $item['judul']; ?></h4>

                                        <a class="text-body" href=""><?php echo date('M, d-Y', strtotime($item['tanggal'])) ?></a>
                                        <p><?php echo $item['isi']; ?> </p>
                                        <a class="btn btn-primary" href="single_berita.php">selengkapnya>></a>
                                    </div>
                                </article>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-3">

                <div class="footer-menu menu-item-01">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque odit maxime ad debitis fugit facilis fuga? Harum asperiores doloremque voluptatem fugiat doloribus? Dolore ipsa aliquam eius et tempora, dolores magnam fuga modi voluptatum sunt, culpa minima deserunt, consectetur possimus blanditiis.</p>
                    <div class="social-links">
                        <ul>
                            <li>
                                <a href="#"><i class="icon icon-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-youtube-play"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon icon-behance-square"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-md-2">

                <div class="footer-menu menu-item-02">
                    <h5>quick links</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <a href="#home">home</a>
                        </li>
                        <li class="menu-item">
                            <a href="#about">about us </a>
                        </li>
                        <li class="menu-item">
                            <a href="#">blogs</a>
                        </li>
                        <li class="menu-item">
                            <a href="#contact">contact us</a>
                        </li>
                        <li class="menu-item">
                            <a href="single_berita.php">news update</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-4">

                <div class="footer-menu menu-item-03">
                    <h5>contact info</h5>
                    <ul class="menu-list">
                        <li class="menu-item">
                            <i class="icon icon-location"></i>2489 Locust Court, Los Angeles
                        </li>
                        <li class="menu-item">
                            <i class="icon icon-location2"></i>3927 Red Maple Drive, Los Angeles
                        </li>
                        <li class="menu-item">
                            <i class="icon icon-phone"></i>+63 667 341 3463
                        </li>
                        <li class="menu-item">
                            <i class="icon icon-envelope-o"></i><a href="#" class="mail-id">contact@example.com</a>
                        </li>
                    </ul>
                </div>

            </div>

            <div class="col-md-3">

                <div class="footer-menu menu-item-04">
                    <h5>gallery</h5>
                    <div class="gallery">
                        <a href="images/inv.jpg" data-lightbox-gallery="gallery1"
                            title="Calm Before The Storm (One Shoe Photography Ltd.)" class="image-link"><img
                                src="images/tab1.jpg" alt="house" class="gallery-image"></a>
                        <a href="images/interior.jpg" data-lightbox-gallery="gallery1"
                            title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
                                src="images/tab2.jpg" alt="house" class="gallery-image"></a>
                        <a href="images/interior.jpg" data-lightbox-gallery="gallery1"
                            title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
                                src="images/tab3.jpg" alt="house" class="gallery-image"></a>
                        <a href="images/interior.jpg" data-lightbox-gallery="gallery1"
                            title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
                                src="images/postimg1.jpg" alt="house" class="gallery-image"></a>
                        <a href="images/interior.jpg" data-lightbox-gallery="gallery1"
                            title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
                                src="images/postimg2.jpg" alt="house" class="gallery-image"></a>
                        <a href="images/interior.jpg" data-lightbox-gallery="gallery1"
                            title="Grasmere Lake (Phil 'the link' Whittaker (gizto29))" class="image-link"><img
                                src="images/postimg3.jpg" alt="house" class="gallery-image"></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</footer>

<div id="footer-bottom">
    <div class="container text-center">
        <div class="row">
            <div class="copyright">
                <p>© 2024 ELIT TRAVEL. Enjoy for your Travelling</p>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/ui-easing.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
