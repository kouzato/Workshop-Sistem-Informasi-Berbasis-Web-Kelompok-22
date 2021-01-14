<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nota</title>
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
    <script>
    window.print();
    </script>
</head>

<body>
    <?php 
require 'connect.php';
if(isset($_GET['kode_checkout']))  { 
$id = $_GET['kode_checkout'];
$sql1 = "SELECT * FROM detail_checkout dc INNER JOIN checkout c ON dc.kd_checkout = c.kd_checkout INNER JOIN customer cs ON cs.id_customer = c.id_customer INNER JOIN barang b on b.kd_barang = dc.kd_barang WHERE c.kd_checkout='$id'";
$result1 = mysqli_query($con, $sql1);
$checkout = mysqli_fetch_object($result1); 

$sql2 = "SELECT * FROM detail_checkout dc INNER JOIN barang b ON dc.kd_barang = b.kd_barang INNER JOIN checkout c on dc.kd_checkout = c.kd_checkout WHERE dc.kd_checkout='$id'";
$result2 = mysqli_query($con, $sql2);
}

?>
    <div id="main-wrapper">
        <div class="section-title text-center mb-15">
            <h2>NOTA SEWA SWEETA</h2>
        </div>

        <div
            class="product-section section pt-70 pt-lg-50 pt-md-40 pt-sm-30 pt-xs-20 pb-55 pb-lg-35 pb-md-25 pb-sm-15 pb-xs-5">
            <div class="container">
                <div class="row">
                    <div class="col">

                    </div>
                </div>
                <div class="tab-content">
                    <table>

                        <tr>
                            <td>
                                <h2>Nomor Checkout</h2>
                            </td>
                            <td>
                                <h2>:</h2>
                            </td>
                            <td>
                                <h2><?php echo $checkout->kd_checkout; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td> 
                            <td><?php if ($checkout->status == 1) {
                                                           echo "<strong>Selesai ✓</strong>";
                                                        }elseif ($checkout->status == 0) {
                                                            echo "Sewa";
                                                        }elseif ($checkout->status == 2) {
                                                            echo "<strong>Batal X</strong>";
                                                        }
                                                        ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo $checkout->tanggal; ?></td>
                        </tr>
                        <tr>
                            <td>Id Pelanggan / NIK Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $checkout->id_customer; ?> / <?php echo $checkout->no_ktp; ?></td>
                        </tr>
                        <tr>
                            <td>Nama Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $checkout->nama; ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Telepon Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $checkout->no_telp; ?></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td><?php echo $checkout->alamat; ?></td>
                        </tr>

                    </table>
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama</th>

                                <th>Harga</th>


                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            while($detail_checkout = mysqli_fetch_array($result2)) {
                                
                            ?>
                            <tr>
                                <td><?php echo$detail_checkout['kd_barang']?></td>
                                <td><?php echo$detail_checkout['nama_barang']?></td>

                                <td>Rp. <?php echo$detail_checkout['harga_barang']?></td>
                            </tr>
                            <?php 
                            
                        }?>
                            <tr>

                            </tr>

                        </tbody>
                        <thead class="thead-light">
                            <tr>
                                <th colspan="2">
                                    <h4>Grand Total : </h4>
                                </th>
                                <th>Rp. <?php echo $checkout->total_harga; ?></th>
                            </tr>
                        </thead>
                    </table>

                </div>
                <div class="tab-content">
                    <table class="table">
                        <thead class="thead-light">
                            <tr>

                                <th>Metode Pembayaran :<?php 
                                
                                $bank = "Bank";
                                $rek = " BCA = 3210319031";
                                $uang = " Bayar di Rental Sweeta";
                                if ($checkout->payment == $bank) {
                                    echo $rek;
                                }else {
                                    echo $uang;
                                }
                                ?></th>

                            </tr>
                        </thead>

                    </table>
                    <p>*Refresh untuk mencetak</p>


                </div>
            </div>
        </div>


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