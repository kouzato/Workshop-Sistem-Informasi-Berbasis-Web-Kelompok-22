<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin</title>
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
    <?php 
include "connect.php";
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
    }
    $id = $_GET['kd_barang'];
    $query_mysql = mysqli_query($con, "SELECT * FROM barang WHERE kd_barang = '$id'");
                    
	?>

    <!--Header section start-->
    <header class="header header-transparent header-sticky  d-lg-block d-none">
        <div class="header-deafult-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2 col-md-4 col-12">
                        <!--Logo Area Start-->
                        <div class="logo-area">
                            <a href="#"><img src="./assets/images/logo.png" alt=""></a>

                        </div>
                        <!--Logo Area End-->

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-4 d-none d-lg-block col-12">
                        <!--Header Menu Area Start-->
                        <div class="header-menu-area text-center">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Header Menu Area End-->
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-12">
                        <!--Header Search And Mini Cart Area Start-->
                        <div class="header-search-cart-area">
                            <ul>
                                <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                    <!--Crunccy dropdown-->
                                    <ul class="currency-dropdown">

                                        <li><a>My account</a>
                                            <ul>

                                                <li><a href="logout.php">Logout</a></li>

                                            </ul>
                                        </li>
                                        <!--Account Currency End-->
                                    </ul>
                                    <!--Crunccy dropdown-->
                                </li>
                            </ul>
                        </div>
                        <!--Header Search And Mini Cart Area End-->
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--Header section end-->



    <!-- Page Banner Section Start -->
    <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-banner text-left">
                        <h2>Admin</h2>
                        <ul class="page-breadcrumb">
                            <li>Admin</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Banner Section End -->


    <!--My Account section start-->
    <div
        class="my-account-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-100 pb-lg-80 pb-md-70 pb-sm-60 pb-xs-50">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="row">
                        <!-- My Account Tab Menu Start -->
                        <div class="col-lg-3 col-12">
                            <div class="myaccount-tab-menu nav" role="tablist">
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-user"></i>
                                    Barang</a>
                                <a href="index_admin.php"><i class="fa fa-dashboard"></i>
                                    Kembali</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Input Data Barang</h3>
                                        <?php 
                                        while($data = mysqli_fetch_array($query_mysql)){
                                        ?>
                                        <div class="welcome mb-20">
                                            <form action="update_barang.php" method="POST">
                                                <table>
                                                    <tr>
                                                        <td>Kode Barang</td>
                                                        <td><input type="text" name="kd_barang"
                                                        value="<?php echo $data['kd_barang'] ?>" readonly></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Nama Barang</td>
                                                        <td><input type="text" name="nama_barang" value="<?php echo $data['nama_barang'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Harga Barang (Rp. )</td>
                                                        <td><input type="text" name="harga_barang" value="<?php echo $data['harga_barang'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Deskripsi Barang </td>
                                                        <td><textarea name="deskripsi_barang" rows="5"
                                                                cols="40"><?php echo $data['deskripsi_barang'] ?></textarea></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Jumlah Barang </td>
                                                        <td><input type="text" name="jumlah_barang" value="<?php echo $data['jumlah_barang'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Foto Barang (.jpg)</td>
                                                        <td><input type="text" name="foto" value="<?php echo $data['foto'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Foto Besar Barang (.jpg) </td>
                                                        <td><input type="text" name="foto_besar" value="<?php echo $data['foto_besar'] ?>"></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><button type="submit" value="Simpan" class="place-order btn btn-lg btn-round">Simpan</td>
                                                    </tr>
                                                </table>
                                            </form>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->
                            </div>
                        </div>
                        <!-- My Account Tab Content End -->
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!--My Account section end-->
    <!--Footer section start-->
    <footer class="footer-section section bg-gray">

        <!--Footer Top start-->
        <div
            class="footer-top section pt-100 pt-lg-80 pt-md-70 pt-sm-60 pt-xs-50 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-10">
            <div class="container">
                <div class="row">

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">

                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">

                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div class="footer-widget col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <div class="header-search-cart-area">
                            <ul>
                                <li class="currency-menu"><a href="#"><i class="flaticon-user"></i></a>
                                    <!--Crunccy dropdown-->
                                    <ul class="currency-dropdown">
                                        <li><a href="logout.php">Logout</a></li>
                                        <!--Account Currency End-->
                                    </ul>
                                    <!--Crunccy dropdown-->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--Footer Widget end-->

                    <!--Footer Widget start-->
                    <div
                        class="footer-widget text-lg-right text-left col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-40 mb-xs-35">
                        <h2>SWEETA</h2>
                        <p class="contact-text">Jl.Argopuro 3 C-4</p>
                        <p class="contact-text">Jember, Jawa Timur</p>
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