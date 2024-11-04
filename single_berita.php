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
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <h1 class="navbar-brand md-1" href="#"> ELIT TRAVEL</h1>
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
                <li class="nav-item">
                    <a class="nav-link" href="#update">User</a>
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

            </ul>
        </div>
    </div>
</nav>

<section id="testimonial" class="padding-large">
    <div class="container">
        <?php
        include "koneksi.php";
        $berita = mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
        while ($item = mysqli_fetch_array($berita)) {
        ?>
            <div class="row">

                <div class="col-md-6">

                    <figure class="jarallax-keep-img testimonial-image" data-speed="0.3">
                        <img src="admin/img/<?= $item['gambar'] ?>" alt="review" class="jarallax-img">
                    </figure>

                </div>

                <div class="col-md-6">

                    <div class="testimonial-block">
                        <div class="section-header">
                            <div class="title">
                                <span><?php echo date('M, d-Y', strtotime($item['tanggal'])) ?></span>
                            </div>
                            <p class="section-title"><?= $item['judul'] ?></p>
                        </div>
                        <div class="testimonials-inner">
                            <q><?= $item['isi'] ?></q>
                            <div class="testimonial-author">
                                <div class="author-detail">
                                    <div class="name">Elit Travel</div>
                                    <div class="author-title">Admin</div>
                                </div>
                            </div>
                        </div>
                    </div><!--reviews-content-->

                </div>
            </div>
        <?php } ?>

    </div>
</section>
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/ui-easing.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>
<script>