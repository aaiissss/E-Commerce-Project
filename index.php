<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Project03 E-Commerce</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-cart-plus-fill" viewBox="0 0 16 16">
            <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM9 5.5V7h1.5a.5.5 0 0 1 0 1H9v1.5a.5.5 0 0 1-1 0V8H6.5a.5.5 0 0 1 0-1H8V5.5a.5.5 0 0 1 1 0z" />
        </svg>
        <a class="navbar-brand" href="#page-top">E-Commerce</a>
        <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Produk">Produk</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#Pemesanan">Pemesanan</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="index3.php">Admin</a></li>
            </ul>
        </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img src="assets/avatar.jpg" style="border-radius:100%; width: 200px;" /> <br>
            <!-- Masthead Heading-->
            <h1 class="masthead-heading text-uppercase mb-0">AiStores</h1>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Masthead Subheading-->
            <p class="masthead-subheading font-weight-light mb-0">WELLCOME TO AISTORES!! <br> Dengan Website ini, pelanggan dapat membeli berbagai macam <br> produk menarik yang sudah kami sediakan secara online <br> Happy Shopping Everyone!!</p>
        </div>
    </header>
    <!-- Produk Section-->
    <section class="page-section Produk" id="Produk">
        <div class="container">
            <!-- Produk Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produk</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
                <br>
            </div>
            <h6 style="text-align: center;">Klik Gambar Untuk Melihat Detail Produk!</h6>
            <!-- Produk Grid Items-->
            <div class="row justify-content-center">
                <!-- Produk Item 1-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal1">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/cabin.png" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 2-->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal2">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/cake.png" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 3-->

                <!-- Produk Item 4-->
                <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal4">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/game.png" alt="..." />
                    </div>
                </div>
                <!-- Produk Item 5-->

                <!-- Produk Item 6-->
                <div class="col-md-6 col-lg-4">
                    <div class="Produk-item mx-auto" data-bs-toggle="modal" data-bs-target="#ProdukModal6">
                        <div class="Produk-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="Produk-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="assets/img/Produk/minumanlogo.jpg" alt="..." />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pemesanan Section-->
    <section class="page-section" id="Pemesanan">

        <!-- Pemesanan Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Form Pemesanan Produk</h2>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Pemesanan Section Form-->
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
                <div>
                    <?php
                    require_once 'dbkoneksi.php';
                    ?>

                    <form method="POST" action="#selesai" id="form_pemesanan">
                        <div class="form-group row">
                            <label for="nama_pemesan" class="col-4 col-form-label">nama_pemesan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrow-circle-o-left"></i>
                                        </div>
                                    </div>
                                    <input id="nama_pemesan" name="nama_pemesan" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-adjust"></i>
                                        </div>
                                    </div>
                                    <input id="tanggal" name="tanggal" type="date" class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="alamat_pemesan" class="col-4 col-form-label">alamat_pemesan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrow-circle-o-left"></i>
                                        </div>
                                    </div>
                                    <input id="alamat_pemesan" name="alamat_pemesan" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="no_hp" class="col-4 col-form-label">no_hp</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrow-circle-up"></i>
                                        </div>
                                    </div>
                                    <input id="no_hp" name="no_hp" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-4 col-form-label">email</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                    <input id="email" name="email" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="jumlah_pesanan" class="col-4 col-form-label">jumlah_pesanan</label>
                            <div class="col-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="fa fa-arrow-circle-right"></i>
                                        </div>
                                    </div>
                                    <input id="jumlah_pesanan" name="jumlah_pesanan" value="" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label>
                            <div class="col-8">
                                <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="produk_id" class="col-4 col-form-label">produk_id</label>
                            <div class="col-8">
                                <input id="produk_id" name="produk_id" value="" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <input type="submit" name="proses" type="submit" class="btn btn-primary" href="" value="Simpan" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Pemesanan Section-->
    <section id="selesai">
            <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Pemesanan Section Heading-->
        <h6 class="page-section-heading text-center text-uppercase text-secondary mb-0">Terimakasih sudah berbelanja <br> jika sudah mengirim data pesanan maka, </br> pesanan akan segera diproses oleh Admin <br> HAPPY SHOPPING EVERYONE!!!</h6>
        <!-- Icon Divider-->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <br>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <div class="row">
                <!-- Footer Location-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Location :</h4>
                    <p class="lead mb-0">
                        2023 Aisah Oktafiah Drive
                        <br />
                        Jagakarsa, 12620
                    </p>
                </div>
                <!-- Footer Social Icons-->
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h4 class="text-uppercase mb-4">Account :</h4>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/aiiss.oktv"><i class="fab fa-fw fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://github.com/aaiissss"><i class="fab fa-fw fa-github"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.linkedin.com/in/ais-oktavia-297071252/"><i class="fab fa-fw fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/aishhaffia/"><i class="fab fa-fw fa-instagram"></i></a>
                </div>
                <!-- Footer Pemesanan Text-->
                <div class="col-lg-4">
                    <h4 class="text-uppercase mb-4">Admin :</h4>
                    <p class="lead mb-0">
                        Terimakasih Atas Kunjungannya!
                        Jangan lupa kembali, ya!
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Copyright Section-->
    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Develop by &copy; Nurul Aisah Oktafiah 2023</small></div>
    </div>
    <!-- Produk Modals-->
    <!-- Produk Modal 1-->
    <div class="Produk-modal modal fade" id="ProdukModal1" tabindex="-1" aria-labelledby="ProdukModal1" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Produk Modal - Title-->
                                <h2 class="Produk-modal-title text-secondary text-uppercase mb-0">Meja Belajar</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Produk Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/Produk/mejabelajar.jpg" alt="mejabelajar" style="width:250px;" />
                                <!-- Produk Modal - Text-->
                                <p>
                                <div>
                                    <table class="table table-striped" style="text-align:left;">
                                        <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>Kode</td>
                                                <td>MB01</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td>Meja Belajar</td>
                                            </tr>
                                            <tr>
                                                <td>Harga Jual</td>
                                                <td>2000000</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Stok</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>Meja yang difungsikan untuk membaca, menulis, dan yang pasti untuk belajar.</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori Produk</td>
                                                <td>Furniture</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                                <button class="btn btn-warning" data-bs-dismiss="modal">
                                    <a class="badge badge-pill badge-warning" href="#Pemesanan">
                                        Beli Sekarang
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produk Modal 2-->
    <div class="Produk-modal modal fade" id="ProdukModal2" tabindex="-1" aria-labelledby="ProdukModal2" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Produk Modal - Title-->
                                <h2 class="Produk-modal-title text-secondary text-uppercase mb-0">Cupcake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Produk Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/Produk/Makanan.jpg" alt="makanan" width="250px" />
                                <!-- Produk Modal - Text-->
                                <p>
                                <div>
                                    <table class="table table-striped" style="text-align:left;">
                                        <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>3</td>
                                            </tr>
                                            <tr>
                                                <td>Kode</td>
                                                <td>MB01</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td>Cupcake</td>
                                            </tr>
                                            <tr>
                                                <td>Harga Jual</td>
                                                <td>24000</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>168</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Stok</td>
                                                <td>30</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>Cupcake enak yang bisa anda nikmati dihari yang indah bersama keluarga, sahabat maupun menemani anda yang sedang melamun sendiri.</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori Produk</td>
                                                <td>Makanan</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                                <button class="btn btn-warning" data-bs-dismiss="modal">
                                    <a class="badge badge-pill badge-warning" href="#Pemesanan">
                                        Beli Sekarang
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produk Modal 3-->
    <!-- Produk Modal 4-->
    <div class="Produk-modal modal fade" id="ProdukModal4" tabindex="-1" aria-labelledby="ProdukModal4" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Produk Modal - Title-->
                                <h2 class="Produk-modal-title text-secondary text-uppercase mb-0">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Produk Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/Produk/kontroler.jpg" alt="..." width="250px" />
                                <!-- Produk Modal - Text-->
                                <p>
                                <div>
                                    <table class="table table-striped" style="text-align:left;">
                                        <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>Kode</td>
                                                <td>CN01</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td>Controller</td>
                                            </tr>
                                            <tr>
                                                <td>Harga Jual</td>
                                                <td>2400000</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>31</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Stok</td>
                                                <td>10</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>Rasakan kenyamanan dan nuansa yang ditingkatkan dari Pengontrol Nirkabel Xbox baru, menampilkan desain yang ramping dan ramping serta pegangan bertekstur. Nikmati pemetaan tombol khusus* dan hingga dua kali jangkauan nirkabel.</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori Produk</td>
                                                <td>Elektronik</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                                <button class="btn btn-warning" data-bs-dismiss="modal">
                                    <a class="badge badge-pill badge-warning" href="#Pemesanan">
                                        Beli Sekarang
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produk Modal 5-->
    <!-- Produk Modal 6-->
    <div class="Produk-modal modal fade" id="ProdukModal6" tabindex="-1" aria-labelledby="ProdukModal6" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body text-center pb-5">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <!-- Produk Modal - Title-->
                                <h2 class="Produk-modal-title text-secondary text-uppercase mb-0">Bubble Tea</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Produk Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/Produk/boba.jpg" alt="..." />
                                <!-- Produk Modal - Text-->
                                <p>
                                <div>
                                    <table class="table table-striped" style="text-align:left;">
                                        <tbody>
                                            <tr>
                                                <td>ID</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>Kode</td>
                                                <td>BA01</td>
                                            </tr>
                                            <tr>
                                                <td>Nama Produk</td>
                                                <td>Bubble Tea</td>
                                            </tr>
                                            <tr>
                                                <td>Harga Jual</td>
                                                <td>31200</td>
                                            </tr>
                                            <tr>
                                                <td>Stok</td>
                                                <td>80</td>
                                            </tr>
                                            <tr>
                                                <td>Minimum Stok</td>
                                                <td>12</td>
                                            </tr>
                                            <tr>
                                                <td>Deskripsi</td>
                                                <td>Minuman Premium yang cocok menemani hari-hari kamu, yuk! Segerin pikiran kamu dengan memesan minuman Bubble Tea dari E-Commerce kami!</td>
                                            </tr>
                                            <tr>
                                                <td>Kategori Produk</td>
                                                <td>Minuman</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </p>
                                <button class="btn btn-primary" data-bs-dismiss="modal">
                                    <i class="fas fa-xmark fa-fw"></i>
                                    Close Window
                                </button>
                                <button class="btn btn-warning" data-bs-dismiss="modal">
                                    <a class="badge badge-pill badge-warning" href="#Pemesanan">
                                        Beli Sekarang
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/Admin-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>