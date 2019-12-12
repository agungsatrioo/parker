<!DOCTYPE html>
<html lang="en">

<head>
    <title>SEWAPARKIR - Lahan Parkir Indonesia</title>
    <meta charset="UTF-8">
    <meta name="description" content="LERAMIZ Landing Page Template">
    <meta name="keywords" content="LERAMIZ, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">

    <?= link_tag(base_url('media/parker/css/bootstrap.min.css')) ?>
    <?= link_tag(base_url('media/parker/css/font-awesome.min.css')) ?>
    <?= link_tag(base_url('media/parker/css/animate.css')) ?>
    <?= link_tag(base_url('media/parker/css/owl.carousel.css')) ?>
    <?= link_tag(base_url('media/parker/css/style.css')) ?>

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 header-top-left">
                        <div class="top-info">
                            <i class="fa fa-phone"></i> (+62) 888 121 4321
                        </div>
                        <div class="top-info">
                            <i class="fa fa-envelope"></i> kontak.info@sewaparkir.com
                        </div>
                    </div>
                    <div class="col-lg-6 text-lg-right header-top-right">
                        <div class="top-social">
                            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                            <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                            <a href="https://www.linked.in/"><i class="fa fa-linkedin"></i></a>
                        </div>
                        <div class="user-panel">
                            <a href="daftar"><i class="fa fa-user-circle-o"></i> Daftar</a>
                            <a href="masuk"><i class="fa fa-sign-in"></i> Masuk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="site-navbar" id="nav">
                        <a href="index" class="site-logo">
                            <h3 style="color:white;">SEWAPARKIR</h3>
                        </a>
                        <div class="nav-switch">
                            <i class="fa fa-bars"></i>
                        </div>
                        <ul class="main-menu">
                            <li class="nav-item"><a href="index">Home</a></li>
                            <li class="nav-item"><a href="#lahanparkir">Lahan Parkir</a></li>
                            <li class="nav-item"><a href="about">Tentang</a></li>
							
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header section end -->


    <!-- Hero section -->
    <section class="hero-section set-bg" data-setbg="<?= base_url('media/parker/') ?>img/bg.jpg">
        <div class="container hero-text text-white">
            <h2>temukan tempat parkir untuk menyimpan kendaraan anda</h2>
            <p>Cari tempat parkir luas hanya di sewaparkir.com.<br>Temukan tempat parkir yang nyaman berdasarkan data yang akurats.</p>
            <a href="#" class="site-btn">LIHAT DETAIL</a>
        </div>
    </section>
    <!-- Hero section end -->


    <!-- Properties section -->
    <section class="properties-section spad" id="lahanparkir">
        <div class="container">
            <div class="section-title text-center">
                <h3>LAHAN PARKIR KAMI</h3>
                <p>Cari tahu seberapa luasnya area parkir kami!</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="propertie-item set-bg" data-setbg="<?= base_url('media/parker/') ?>img/propertie/1.jpg">
                        <div class="rent-notic">FOR RENT</div>
                        
                        <div class="propertie-info text-white">
                        
                            <div class="info-warp">
                                <h5>Bogor, Indonesia</h5>
                                <p><i class="fa fa-map-marker"></i> Jl. Pahlawan No. 26</p>
                            </div>
                            <div class="price">Rp. 1,777,000 / hari</div>
                            <div class="price"><button type="button" class="btn btn-primary">SEWA</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="propertie-item set-bg" data-setbg="<?= base_url('media/parker/') ?>img/propertie/2.jpg">
                        <div class="rent-notic">FOR Rent</div>
                        <div class="propertie-info text-white">
                            <div class="info-warp">
                                <h5>Jakarta, Indonesia</h5>
                                <p><i class="fa fa-map-marker"></i> Jl. Sibuk No. 102</p>
                            </div>
                            <div class="price">Rp. 1,255,000/ hari</div>
                            <div class="price"><button type="button" class="btn btn-primary">SEWA</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="propertie-item set-bg" data-setbg="<?= base_url('media/parker/') ?>img/propertie/3.jpg">
                        <div class="rent-notic">FOR RENT</div>
                        <div class="propertie-info text-white">
                            <div class="info-warp">
                                <h5>Bandung, Indonesia</h5>
                                <p><i class="fa fa-map-marker"></i> Jl. Sukaraya No.99</p>
                            </div>
                            <div class="price">Rp. 1,500,000 / hari</div>
                            <div class="price"><button type="button" class="btn btn-primary">SEWA</button></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="propertie-item set-bg" data-setbg="<?= base_url('media/parker/') ?>img/propertie/4.jpg">
                        <div class="rent-notic">FOR Rent</div>
                        <div class="propertie-info text-white">
                            <div class="info-warp">
                                <h5>Sukabumi, Indonesia</h5>
                                <p><i class="fa fa-map-marker"></i> Jl. Rambutan No. 98</p>
                            </div>
                            <div class="price">Rp. 1,300,000 / hari</div>
                            <div class="price"><button type="button" class="btn btn-primary">SEWA</button></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Properties section end -->

    <!-- Footer section -->
    <footer class="footer-section set-bg" data-setbg="<?= base_url('media/parker/') ?>img/footer-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 footer-widget">
                    <h3 style="color:white; padding-bottom:30px;">SEWAPARKIR</h3>
                    <p>SEWAPARKIR merupakan sebuah website penyedia layanan penyewaan lahan parkir yang tersedia di beberapa kota besar. SEWAPARKIR sendiri sudah terpercaya oleh banyak pengguna lainnya. Parkir akan lebih aman dan nyaman di SEWAPARKIR!</p>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-widget">
                    <div class="contact-widget">
                        <h5 class="fw-title">HUBUNGI KAMI</h5>
                        <p><i class="fa fa-map-marker"></i>Bandung, Jawa Barat, Indonesia </p>
                        <p><i class="fa fa-phone"></i>(+62) 888 121 4321</p>
                        <p><i class="fa fa-envelope"></i>kontak.info@sewaparkir.com</p>
                        <p><i class="fa fa-clock-o"></i>Senin - Sabtu, 08 AM - 06 PM</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 footer-widget">
                    <div class="double-menu-widget">
                        <h5 class="fw-title">POPULAR PLACES</h5>
                        <ul>
                            <li><a href="">Bandung</a></li>
                            <li><a href="">Jakarta</a></li>
                            <li><a href="">Bogor</a></li>
                            <li><a href="">Sukabumi</a></li>
                            
                        </ul>
                        <ul>
                            <li><a href="">Aceh</a></li>
                            <li><a href="">Pontianak</a></li>
                            <li><a href="">Surabaya</a></li>
                            <li><a href="">Djogjakarta</a></li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6  footer-widget">
                    <div class="newslatter-widget">
                        <h5 class="fw-title">INFO UPDATE!</h5>
                        <p>Mari berlangganan untuk mendapatkan promo menarik!</p>
                        <form class="footer-newslatter-form">
                            <input type="text" placeholder="Alamat Email">
                            <button><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-nav">
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="">Kategori Parkir</a></li>
                        <li><a href="">Tentang</a></li>
                        <li><a href="">Kontak</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer section end -->

                                        
	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url('media/parker/js/jquery-3.2.1.min.js') ?>"></script>
	<script src="<?= base_url('media/parker/js/owl.carousel.min.js') ?>"></script>
	<script src="<?= base_url('media/parker/js/masonry.pkgd.min.js') ?>"></script>
	<script src="<?= base_url('media/parker/js/magnific-popup.min.js') ?>"></script>
	<script src="<?= base_url('media/parker/js/main.js') ?>"></script>
</body>

</html>