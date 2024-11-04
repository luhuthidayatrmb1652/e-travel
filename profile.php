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

<section id="testimonial" class="padding-large">
    <div class="container">
        <?php
        include "koneksi.php";
        $profile = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id_user DESC");
        while ($item = mysqli_fetch_array($profile)) {
        ?>
            <div class="row">

                <div class="col-md-6">

                    <figure class="jarallax-keep-img testimonial-image" data-speed="0.3">
                        <img src="images/<?= $item['foto'] ?>" alt="review" class="jarallax-img">
                    </figure>

                </div>

                <div class="col-md-6">
                    <div class="testimonial-block">
                        <div class="testimonials-inner">
                            <div class="testimonial-author">
                                <div class="author-detail">
                                    <div class="name">Nama : <?= $item['nama'] ?></div>
                                    <div class="author-title">Alamat : <?= $item['alamat'] ?></div>
                                    <div class="author-title">Telepon : <?= $item['no_hp'] ?></div>
                                    <div class="author-title">Email : <?= $item['email'] ?></div>
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