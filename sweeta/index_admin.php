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
</head>

<body>
    <?php 
include "connect.php";
	session_start();
	if($_SESSION['status']!="login"){
		header("location:../index.php?pesan=belum_login");
    }
    
                    
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
                                <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i>
                                    Dashboard</a>

                                <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Orders</a>
                                <a href="#barang" data-toggle="tab"><i class="fa fa-user"></i> Barang</a>
                                <a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a>
                            </div>
                        </div>
                        <!-- My Account Tab Menu End -->

                        <!-- My Account Tab Content Start -->
                        <div class="col-lg-9 col-12">
                            <div class="tab-content" id="myaccountContent">
                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                    <div class="myaccount-content">
                                        <h3>Dashboard</h3>

                                        <div class="welcome mb-20">
                                            <p>Halo <strong><?php echo $_SESSION['username']; ?></strong> Anda telah
                                                login sebagai
                                                <b>Admin</b>.
                                            </p>
                                        </div>
                                        <?php 
                                            if (isset($_GET['pesan'])){
                                                $pesan = $_GET['pesan'];
                                                if($pesan == "update"){
                                                    echo "Data Orders berhasil di update";
                                                }
                                                if($pesan == "batal"){
                                                    echo "Data Orders berhasil di di batalkan";
                                                }
                                                if($pesan == "hapus"){
                                                    echo "Data Orders berhasil di di hapus";
                                                }
                                                if($pesan == "updateb"){
                                                    echo "Data Barang berhasil di update";
                                                }
                                                if($pesan == "inputb"){
                                                    echo "Data Barang berhasil di update";
                                                }
                                                if($pesan == "hapusb"){
                                                    echo "Data Barang berhasil di di hapus";
                                                }
                                            }else {
                                                ?> <p class="mb-0">Menu Admin </p> <?php
                                            }
                                            ?>


                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <!-- Single Tab Content Start -->
                                <div class="tab-pane fade" id="orders" role="tabpanel">

                                    <div class="myaccount-content">

                                        <h3>Orders <a href="rekapitulasi.php" target="_blank"
                                                class="btn">Rekapitulasi</a></h3>
                                                <table>
                                                <tr>Index Action</tr>
                                                <tr><td><a class="fa fa-eye"></a> = Melihat Nota</td></tr>
                                                <tr><td><a class="fa fa-trash-o"></a> = Hapus</td></tr>
                                                <tr><td><a class="">✓</a> = Status Selesai</td></tr>
                                                <tr><td><a class="">X</a> = Status Batal</td></tr>
                                                </table>      
                                                                                        
                                        <div class="myaccount-table table-responsive text-center">
                                        
                                            <table class="table table-bordered">
                                                <thead class="thead-light">

                                                    <tr>
                                                        <th>Kode Checkout</th>
                                                        <th>Nama</th>
                                                        <th>Tanggal</th>
                                                        <th>Total</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php 
                                                $select = mysqli_query($con,"SELECT * FROM detail_checkout dc INNER JOIN checkout c ON dc.kd_checkout = c.kd_checkout INNER JOIN customer cs ON cs.id_customer = c.id_customer INNER JOIN barang b on b.kd_barang = dc.kd_barang GROUP BY dc.kd_checkout");
                                            
                                                while ($data = mysqli_fetch_array($select)) {   
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <?php echo$data['kd_checkout']?>
                                                        </td>
                                                        <td><?php echo$data['nama']?></td>
                                                        <td><?php echo$data['tanggal']?></td>

                                                        <td>Rp. <?php echo$data['total_harga']?></td>
                                                        <td><?php if ($data['status'] == 1) {
                                                           echo "<strong>Selesai</strong>";
                                                        }elseif($data['status'] == 0) {
                                                            echo "Sewa";
                                                        }elseif ($data['status'] == 2) {
                                                            echo "<strong>Batal</strong>";
                                                        }
                                                        ?></td>

                                                        <td>|<a href="nota.php?kode_checkout=<?php echo $data['kd_checkout']; ?>"
                                                                class="fa fa-eye" target="_blank"></a>|
                                                            <?php if ($data['status'] == 0) {?>
                                                            |<a href="batal_order.php?kode_checkout=<?php echo $data['kd_checkout']; ?>"
                                                                class="">X</a>|
                                                            |<a href="update_order.php?kode_checkout=<?php echo $data['kd_checkout']; ?>"
                                                                class="">✓</a>|

                                                            <?php } ?>
                                                            <?php if ($data['status'] == 2) {?>
                                                            |<a href="delete_order.php?kode_checkout=<?php echo $data['kd_checkout']; ?>&id=<?php echo $data['id_customer']; ?>"
                                                                class="fa fa-trash-o"></a>|
                                                            <?php } ?>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                                <!-- Single Tab Content End -->

                                <div class="tab-pane fade" id="barang" role="tabpanel">

                                    <div class="myaccount-content">

                                        <h3>Barang <a href="input_barang.php" class="btn">Tambah Barang</a></h3>

                                        <div class="myaccount-table table-responsive text-center">
                                        
                                            <table class="table table-bordered">
                                                <thead class="thead-light">

                                                    <tr>
                                                        <th>Kode Barang</th>
                                                        <th>Nama Barang</th>
                                                        <th>Harga Barang</th>

                                                        <th>Jumlah</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <?php 
                                            $select2 = mysqli_query($con,"SELECT * FROM barang");
                                        
                                            while ($data2 = mysqli_fetch_array($select2)) {   
                                            ?>
                                                    <tr>
                                                        <td><?php echo$data2['kd_barang']?></td>
                                                        <td><?php echo$data2['nama_barang']?></td>
                                                        <td>Rp. <?php echo$data2['harga_barang']?></td>
                                                        <td><?php echo$data2['jumlah_barang']?></td>
                                                        <td><a href="edit_barang.php?kd_barang=<?php echo $data2['kd_barang']; ?>" class="btn">Edit</a>
                                                            <a href="delete_barang.php?kd_barang=<?php echo $data2['kd_barang']; ?>" class="btn">Delete</a>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                            
                                        </div>
                                    </div>
                                </div>

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