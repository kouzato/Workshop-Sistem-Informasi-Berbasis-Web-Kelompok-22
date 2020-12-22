<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweeta - Sewa</title>
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
require 'connect.php';
$sql = 'SELECT * FROM barang ORDER BY nama_barang';
$result = mysqli_query($con, $sql);
?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>


        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Sewa</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Sewa</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!-- Shop Section Start -->
        <div
            class="shop-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-30  pb-70 pb-lg-50 pb-md-40 pb-sm-20 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-12">
                                    <!-- Grid & List View Start -->
                                    <div class="shop-topbar-wrapper d-flex justify-content-between align-items-center">
                                        <div class="grid-list-option d-flex">
                                            
                                            <p>Showing 1–9 of 41 results</p>
                                        </div>
                                        <!--Toolbar Short Area Start-->
                                        <div class="toolbar-short-area d-md-flex align-items-center">
                                            <div class="toolbar-shorter ">
                                                <label>Sort By:</label>
                                                <select class="wide">
                                                    <option data-display="Select">Nothing</option>
                                                    <option value="Relevance">Relevance</option>
                                                    <option value="Name, A to Z">Name, A to Z</option>
                                                    <option value="Name, Z to A">Name, Z to A</option>
                                                    <option value="Price, low to high">Price, low to high</option>
                                                    <option value="Price, high to low">Price, high to low</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!--Toolbar Short Area End-->
                                    </div>
                                    <!-- Grid & List View End -->
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="shop-product">
                                                
                                                <div id="myTabContent-2" class="tab-content">
                                                    
                                                    <div id="grid" class="tab-pane fade active show">
                                                        
                                                        <div class="product-grid-view">
                                                        
                                                            <div class="row">
                                                            <?php while($barang = mysqli_fetch_object($result)) { ?>
                                                                <div class="col-lg-4 col-md-6 col-sm-6">
                                                                    <!--  Single Grid product Start -->
                                                                    <div class="single-grid-product mb-40">
                                                                        <div class="product-image">
                                                                            
                                                                            <a href="single-product.php">
                                                                                <img src="./assets/images/product/product-1.jpg"
                                                                                    class="img-fluid" alt="">
                                                                                <img src="./assets/images/product/product-2.jpg"
                                                                                    class="img-fluid" alt="">
                                                                            </a>

                                                                            <div class="product-action">
                                                                                <ul>
                                                                                    <li> <a href="cart.php?kode_barang=<?php echo $barang->kd_barang; ?> &action=add"><i
                                                                                                class="fa fa-cart-plus"></i></a>
                                                                                    </li>
                                                                                     
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="product-content">
                                                                            <h3 class="title"> <a
                                                                                    href="single-product.php"><?php echo $barang->nama_barang; ?></a></h3>
                                                                            <p class="product-price"><span
                                                                                    class="discounted-price">Rp. <?php echo $barang->harga_barang; ?></span>
                                                                            </p>
                                                                            
                                                                        </div>
                                                                    </div>
                                                                    <!--  Single Grid product End -->
                                                                    
                                                                </div>
                                                                <?php } ?>

                                                                
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Shop Section End -->

    <!--Footer section start-->
    <?php include "footer.php" ?>

    </div>

    <!-- Placed js at the end of the document so the pages load faster -->

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