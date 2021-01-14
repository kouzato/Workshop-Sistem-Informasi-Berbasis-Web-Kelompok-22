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
    <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
    </style>
</head>

<body>

    <?php include "connect.php";
    $totalbarangc = $_POST["totalbarang"];     
    if ($totalbarangc == 0) {
        header("location:cart.php");
    }    
    ?>

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
        <div
            class="checkout-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-40  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">

                        <!-- Checkout Form Start-->
                        <form action="simpan_checkout.php" class="checkout-form" method="post">
                            <div class="row row-40">

                                <div class="col-lg-7">

                                    <!-- Billing Address -->
                                    <div id="billing-form" class="mb-10">
                                        <h4 class="checkout-title">Isi Alamat mu (Sesuai KTP)</h4>

                                        <div class="row">

                                            <div class="col-12 mb-20">
                                                <label>Nama*</label>
                                                <input type="text" placeholder="Nama" name="nama" required>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Email*</label>
                                                <input type="email" placeholder="Email" name="email" required>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Nomor KTP* (16 Digit)</label>
                                                <input type="text" placeholder="Nomor KTP" name="noktp"
                                                    pattern="[0-9]{16}" required>
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Nomor Telepon*</label>
                                                <input type="text" placeholder="Nomor Telepon" name="notelp" required>
                                            </div>

                                            <div class="col-12 mb-20">
                                                <label>Alamat*</label>
                                                <input type="text" placeholder="Alamat" name="alamat" required>

                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Provinsi*</label>
                                                <input type="text" placeholder="Provinsi" name="provinsi" required>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kota/Kabupaten*</label>
                                                <input type="text" placeholder="Kota/Kabupaten" name="kota" required>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kecamatan/Kelurahan*</label>
                                                <input type="text" placeholder="Kecamatan/Kelurahan" name="keckel"
                                                    required>
                                            </div>

                                            <div class="col-md-6 col-12 mb-20">
                                                <label>Kode Pos* (6 Digit)</label>
                                                <input type="number" placeholder="Kode Pos" name="kodepos"
                                                    pattern="[0-9]{5}" required>
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
                                                    <?php 
                                                       
                                                    $nama = $_POST["nama"];
                                                    $kuantitas = $_POST["kuantitas"];
                                                    $subharga = $_POST["subharga"];
                                                    $subtotal = $_POST["grandtotal"];
                                                    ?>
                                                    <li>
                                                        <?php
                                                        error_reporting(E_ERROR | E_PARSE);                                                     
                                                        foreach( $nama as $key => $n ) {
                                                            $id = mysqli_query($con,"SELECT kd_barang FROM barang WHERE nama_barang ='$n'");
                                                            $isi = mysqli_fetch_array($id);
                                                            $barang = $isi['kd_barang'];
                                                        ?>
                                                        <input type="hidden" name="kd_barang[]"
                                                            value="<?php echo $barang ?>">
                                                        <input type="hidden" name="jumlah[]"
                                                            value="<?php echo $kuantitas[$key] ?>">
                                                        <input type="hidden" name="subharga[]"
                                                            value="<?php echo $subharga[$key] ?>">
                                                        <?php
                                                            echo $n." X".$kuantitas[$key].
                                                                  "<span>Rp. ".$subharga[$key]. "</span></br>";
                                                                  
                                                          }
                                                          
                                                          $totalbarang = count($nama);
                                                         
                                                        ?>

                                                        <input type="hidden" name="totalbarang"
                                                            value="<?php print $totalbarang ?>">
                                                    </li>
                                                </ul>

                                                <h4>Grand Total <span>Rp. <?php echo $_POST["grandtotal"]; ?></span>
                                                    <input type="hidden" name="total"
                                                        value="<?php echo $_POST["grandtotal"]; ?>">
                                                </h4>
                                                <h4>Total Barang <span><?php print($totalbarang); ?></span> </h4>


                                            </div>

                                        </div>

                                        <!-- Payment Method -->
                                        <div class="col-12 mb-30">

                                            <h4 class="checkout-title">Metode Pembayaran</h4>

                                            <div class="checkout-payment-method">

                                                <div class="single-method">
                                                    <input type="radio" id="payment_bank" name="payment-method"
                                                        value="Bank" required>
                                                    <label for="payment_bank">Bank Transfer</label>
                                                    <p data-method="bank">Bayar ke rekening BCA</p>
                                                </div>

                                                <div class="single-method">
                                                    <input type="radio" id="payment_cash" name="payment-method"
                                                        value="Cash">
                                                    <label for="payment_cash">Bayar di Tempat</label>
                                                    <p data-method="cash">Bayar saat mengambil barang
                                                    </p>
                                                </div>


                                                <div class="single-method">

                                                    <input type="checkbox" id="accept_terms" value="setuju"
                                                        required="required">
                                                    <label for="accept_terms">Saya telah membaca dan menerima
                                                        Persyaratan & Ketentuan Sweeta</label>

                                                </div>

                                            </div>

                                            <button class="place-order btn btn-lg btn-round"
                                                onclick="return confirm('Apakah anda yakin?')" type="submit"
                                                value="submit" name="checkout">PESAN DAN LANGSUNG
                                                BAYAR</button>

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
        <?php include "footer.php" ?>
        <!--Footer section end-->


        <!-- All jquery file included here -->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script
            src="https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM">
        </script>
        <script src="assets/js/vendor/popper.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/plugins/plugins.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>