<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweeta - Checkout</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link href="assets/images/favicon.ico" type="img/x-icon" rel="shortcut icon">
    <!-- All css files are included here. -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/iconfont.min.css">
    <link rel="stylesheet" href="assets/css/vendor/helper.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Modernizr JS -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <div id="main-wrapper">

       <!--Header section start-->
       <?php include "header_web.php" ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Checkout</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.html">Home</a></li>
                                <li>Checkout</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Checkout section start-->
        <div class="checkout-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Checkout Form Start-->
                        <form action="#" class="checkout-form">
                            <div class="row row-40">

                                <div class="col-lg-7">

                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Isi Alamat mu</h4>

                                        <div class="row">

                                            <div class="col-12 mb-20">
                                                <label>Nama*</label>
                                                <input type="text" placeholder="Nama">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Email">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Nomor KTP*</label>
                                                <input type="text" placeholder="Nomor Telepon">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Nomor Telepon*</label>
                                                <input type="text" placeholder="Nomor WhatsApp">
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Alamat*</label>
                                                <input type="text" placeholder="Alamat">

                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Provinsi*</label>
                                                <input type="text" placeholder="Provinsi">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kota/Kabupaten*</label>
                                                <input type="text" placeholder="Kota/Kabupaten">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kecamatan - Kelurahan*</label>
                                                <input type="text" placeholder="Kecamatan">
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kode Pos*</label>
                                                <input type="text" placeholder="Kode Pos">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-5">
                                    <div class="row">

                                         <!-- Cart Total -->
                                         <div class="col-12 mb-60">

                                            <h4 class="checkout-title">Total Keranjang</h4>

                                            <div class="checkout-cart-total">

                                                <h4>Produk <span>Total</span></h4>

                                                <ul>
                                                    <li>Baju Tari A X 01 <span>Rp xxx.xxx</span></li>
                                                    <li>Baju Tari B X 01 <span>Rp xxx.xxx</span></li>
                                                    <li>Baju Tari C X 01 <span>Rp xxx.xxx</span></li>
                                                    <li>Baju Tari D X 01 <span>Rp xxx.xxx</span></li>
                                                </ul>

                                                <h4>Grand Total <span>Rp xxx.xxx</span></h4>

                                            </div>

                                        </div>

                                        <!-- Payment Method -->
                                        <div class="col-12 mb-30">

                                            <h4 class="checkout-title">Metode Pembayaran</h4>

                                            <div class="checkout-payment-method">

                                                <div class="single-method">
                                                    <input type="radio" id="payment_bank" name="payment-method" value="bank">
                                                    <label for="payment_bank">Bank Transfer</label>
                                                    <p data-method="bank">Bayar ke rekening BCA</p>
                                                </div>

                                    
                                                <div class="single-method">
                                                    <input type="checkbox" id="accept_terms" value="setuju">
                                                    <label for="accept_terms">Saya telah membaca dan menerima Persyaratan & Ketentuan Sweeta</label>
                                                    
                                                </div>

                                            </div>

                                            <button class="place-order btn btn-lg btn-round">PESAN DAN LANGSUNG BAYAR</button>

                                        </div>

                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!--Checkout section end-->


           <!--Footer section start-->
       <footer class="footer-section section bg-gray">

        <!--Footer Top start-->
        <div class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
            <div class="container">
                <div class="row">

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Opening Time</span></h4>
                        <p class="mb-15">Mon – Fri: 8AM – 10PM</p>
                        <p class="mb-15">Sat: 9AM-8PM</p>
                        <p class="mb-15">Sun: Closed</p>
                        <h4 class="opeaning-title">We Work All The Holidays</h4>
                    </div>
                    <!--Footer Widget end-->


                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Quick Link</span></h4>
                        <ul class="ft-menu">
                            <li><a href="my-account.html">My account</a></li>
                            <li><a href="login-register.html">log out</a></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h4 class="title"><span class="text">Information</span></h4>
                        <ul class="ft-menu">
                            <li><a href="privacy.html">Privacy Policy</a></li>
                            <li><a href="about.html">About Us</a></li>
                        </ul>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h2>Jember</h2>
                        <p class="contact-text">sweeta.rental@gmail.com</p>
                        <p class="contact-text">+62 838 3574 2425</p>
                    </div>
                    <!--Footer Widget end-->
                </div>
            </div>
        </div>
        <!--Footer Top end-->

        <!--Footer bottom start-->
        <div class="footer-bottom section">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-12 ft-border pt-25 pb-25">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="copyright text-left">
                                    <p>Copyright &copy;2020 <a href="#">sweeta</a>. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Footer bottom end-->

    </footer>
    <!--Footer section end-->
    
        <!-- Modal Area Strat -->
        <div class="modal fade quick-view-modal-container" id="quick-view-modal-container" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="col-xl-12 col-lg-12">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-1.jpg" alt="">
                                                <a href="./assets/images/product/large-product/l-product-1.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-2.jpg" alt="">
                                                <a href="./assets/images/product/large-product/l-product-2.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-3.jpg" alt="">
                                                <a href="./assets/images/product/large-product/l-product-3.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-4.jpg" alt="">
                                                <a href="./assets/images/product/large-product/l-product-4.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                            <div class="lg-image">
                                                <img src="./assets/images/product/large-product/l-product-5.jpg" alt="">
                                                <a href="./assets/images/product/large-product/l-product-5.jpg" class="popup-img venobox" data-gall="myGallery"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </div>
                                        <div class="product-details-thumbs">
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-1.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-2.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-3.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-4.jpg" alt="product image thumb"></div>
                                            <div class="sm-image"><img src="./assets/images/product/small-product/s-product-5.jpg" alt="product image thumb"></div>
                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-lg-8 col-md-6">
                                    <!--Product Details Content Start-->
                                    <div class="product-details-content">
                                        <!--Product Nav Start-->
                                        <div class="product-nav">
                                            <a href="#"><i class="fa fa-angle-left"></i></a>
                                            <a href="#"><i class="fa fa-angle-right"></i></a>
                                        </div>
                                        <!--Product Nav End-->
                                        <h2>Aliquam lobortis est turpis mauris egestas eget</h2>
                                        <div class="single-product-reviews">
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star active"></i>
                                            <i class="fa fa-star-o"></i>
                                            <a class="review-link" href="#">(1 customer review)</a>
                                        </div>
                                        <div class="single-product-price">
                                            <span class="price new-price">$66.00</span>
                                            <span class="regular-price">$77.00</span>
                                        </div>
                                        <div class="product-description">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco,Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus</p>
                                        </div>
                                        <div class="single-product-quantity">
                                            <form class="add-quantity" action="#">
                                                <div class="product-quantity">
                                                    <input value="1" type="number">
                                                </div>
                                                <div class="add-to-link">
                                                    <button class="btn"><i class="ion-bag"></i>add to cart</button>
                                                </div>
                                            </form>
                                        </div>
                                       
                                        <div class="product-meta">
                                            <span class="posted-in">
                                            Categories: 
                                            <a href="#">Accessories</a>,
                                            <a href="#">Electronics</a>
                                        </span>
                                        </div>
                                        <div class="single-product-sharing">
                                            <h3>Share this product</h3>
                                            <ul>
                                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Product Details Content End-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Modal Area End -->
    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

    <!-- All jquery file included here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/plugins/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>