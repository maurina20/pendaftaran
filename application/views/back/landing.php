<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>PPDB</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/images/log.png">

    <!-- CSS Files -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/animate-3.7.0.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/owl-carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/landing/css/style.css">
    <style>
        .banner-area2 {
            padding: 300px 0 160px;
        }
    </style>

</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area header-area2">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <img src="<?= base_url() ?>assets/landing/images/logo/smk.png" alt="logo" width="238.5" height="45" style="padding-top: 3px;">
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="main-menu">
                        <ul>
                            <!-- <li><a href="#sambutan">Sambutan</a></li> -->
                            <li><a href="#jurusan">Jurusan</a></li>
                            <li><a href="#kegiatan">Kegiatan Siswa</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Banner Area Starts -->
    <section class="banner-area banner-area2 text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <h1><i>PPDB SMK ST.PETRUS</i></h1>
                    <p class="pt-2"><i>Bergabunglah dan Raih Masa Depanmu. Ayo Segera Daftar!</i></p>
                    <a href="<?= base_url('auth') ?>" class="template-btn template-btn2 mt-3" target="_blank">LOGIN</a>
                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Area End -->

    <!-- Deshes Area Starts -->
    <div class="deshes-area section-padding" style="padding-bottom: 55px;" id="jurusan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-top2 text-center">
                        <h3><span>Jurusan Siswa</span></h3>
                        <p><i>SMK SANTO PETRUS KETAPANG Memiliki Beberapa Jurusan Diantaranya:</i></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 align-self-center">
                    <h1>01.</h1>
                    <div class="deshes-text">
                        <h3><span>Pengembangan Perangkat Lunak dan Gim</span></h3>
                        <p class="pt-1">Pengembangan Perangkat Lunak & Gim (PPL-Gim) mempelajari dan mendalami cara-cara
                            pengembangan perangkat lunak termasuk pembuatan, pemeliharaan, manajemen organisasi pengembangan perangkat lunak komputer, dan
                            manajemen kualitas. Jurusan PPL-Gim juga mempelajari program dasar, pembuatan website, aplikasi, game, dan sebagainya.
                        </p>

                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="<?= base_url() ?>assets/landing/images/ppl.jpeg" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                    <img src="<?= base_url() ?>assets/landing/images/dkv2.jpeg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 offset-lg-1 col-md-6 align-self-center order-1 order-md-2">
                    <h1>02.</h1>
                    <div class="deshes-text">
                        <h3><span>Desain Komunikasi Visual</span></h3>
                        <p class="pt-1">Jurusan Desain Komunikasi Visual(DKV) mempelajari Komputer
                            untuk menyajikan suara, teks, animasi, audio, dan video menjadi sebuah
                            karya sehingga dapat berkomunikasi dengan pengguna. </p>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6 align-self-center">
                    <h1>03.</h1>
                    <div class="deshes-text">
                        <h3><span>Desain Pemodelan<br>Industri Bangunan</span></h3>
                        <p class="pt-1">
                            Jurusan Desain Pemodelan & Gambar Bangunan (DPIB) mempelajari perencanaan bangunan, Pelaksanaan Pembuatan Gedung dan Perbaikan Gedung.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-md-6 align-self-center mt-4 mt-md-0">
                    <img src="<?= base_url() ?>assets/landing/images/dpib.jpeg" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <!-- Deshes Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding" style="padding-top: 0px;" id="kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3><span class="style-change">Kegiatan Siswa</span> </h3>
                        <p class="pt-3">Berikut adalah rangkaian kegiatan sekolah yang telah dilaksanakan sebagai bagian dari program pendidikan dan pengembangan siswa.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/osis.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Osis</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/pramuka.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Pramuka</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/rekoleksi.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Rekoleksi Rohani</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/band.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Band</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/kooor.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Koor</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/futsal.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Futsal</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="<?= base_url() ?>assets/landing/images/tarii.jpeg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Tari</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Food Area End -->


    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-widget single-widget1">
                            <img src="<?= base_url() ?>assets/images/log.png" alt="logo" width="45" height="45" style="padding-top: 3px;">
                            <img src="<?= base_url() ?>assets/images/SMKST.PETRUS.png" alt="logo" width="238.5" height="45" style="padding-top: 3px;">
                            <p class="mt-3">SMK St.Petrus Ketapang adalah sekolah menengah kejuruan di bawah naungan Yayasan Pelayanan Kasih Fatima yang berlokasi di Ketapang, Kalimantan Barat. Sekolah ini berkomitmen mencetak lulusan yang terampil, cerdas, dan berkarakter melalui pendidikan berbasis kompetensi, dukungan fasilitas praktik yang memadai, serta kerja sama dengan dunia industri. Dengan program keahlian yang relevan dan tenaga pengajar profesional, SMK St.Petrus membekali siswa untuk siap bersaing di dunia kerja maupun melanjutkan pendidikan ke jenjang yang lebih tinggi.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">contact us</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>Jln. Jenderal Sudirman No 23 Ketapang, Kec. Mulia Baru, Kab. Ketapang, Kalimantan Barat. </p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>(0534) 33365</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>smksantopetrus@yahoo.co.id</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span>
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script>
                        </span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Follow Us</li>
                                <li><a href="https://web.facebook.com/profile.php?id=100091568059663" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://www.instagram.com/smksantopetrus/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="<?= base_url() ?>assets/landing/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/vendor/wow.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/vendor/owl-carousel.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/vendor/jquery.nice-select.min.js"></script>
    <script src="<?= base_url() ?>assets/landing/js/main.js"></script>
</body>

</html>