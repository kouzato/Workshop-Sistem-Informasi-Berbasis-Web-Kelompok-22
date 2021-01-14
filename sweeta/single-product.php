<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweeta - View Produk</title>
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
if(isset($_GET['kode_barang']))  { 
$id = $_GET['kode_barang'];
$sql = "SELECT * FROM barang WHERE kd_barang='$id'";
$result = mysqli_query($con, $sql);
$barang = mysqli_fetch_object($result); 
}

?>
    <div id="main-wrapper">

        <?php include "header_web.php" ?>




        <!-- Single Product Section Start -->
        <div
            class="single-product-section section pt-60 pt-lg-40 pt-md-30 pt-sm-20 pt-xs-25 pb-100 pb-lg-80 pb-md-70 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="shop-area">
                            <div class="row">
                                <div class="col-md-6 pr-35 pr-lg-15 pr-md-15 pr-sm-15 pr-xs-15">
                                    <!-- Product Details Left -->
                                    <div class="product-details-left">
                                        <div class="product-details-images">
                                            <div class="lg-image">
                                                <img src="./assets/images/pic/<?php echo $barang->foto_besar; ?>" alt="">
                                                <a href="./assets/images/pic/<?php echo $barang->foto_besar; ?>"
                                                    class="popup-img venobox" data-gall="myGallery"><i
                                                        class="fa fa-expand"></i></a>
                                            </div>

                                        </div>
                                        <div class="product-details-thumbs">

                                        </div>
                                    </div>
                                    <!--Product Details Left -->
                                </div>
                                <div class="col-md-6">
                                    <!--Product Details Content Start-->

                                    <!--Product Nav End-->
                                    <h2><?php echo $barang->nama_barang; ?></h2>

                                    <div class="single-product-price">
                                        <span class="price new-price">Rp. <?php echo $barang->harga_barang; ?></span>
                                        
                                    </div>
                                    <div class="product-description">
                                        <p><?php echo $barang->deskripsi_barang; ?></p>
                                        <p>Sisa Stock : <?php echo $barang->jumlah_barang?> set</p>
                                    </div>

                                    <div class="single-product-quantity">
                                        <form class="add-quantity" action="cart.php?kode_barang=<?php echo $barang->kd_barang; ?> &action=add" method="POST">
                                        
                                            <div class="add-to-link">
                                                <button class="btn">
                                                <a class="fa fa-shopping-bag" href="cart.php?kode_barang=<?php echo $barang->kd_barang; ?> &action=add"></a> Tambah</button>
                                            </div>
                                        </form>
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
    <!-- Single Product Section End -->


    <!--Footer section start-->
    <?php include "footer.php"?>


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