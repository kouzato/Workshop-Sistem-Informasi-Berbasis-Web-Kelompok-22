<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Rekapitulasi</title>
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
$sql = "SELECT * FROM detail_checkout dc INNER JOIN checkout c ON dc.kd_checkout = c.kd_checkout INNER JOIN customer cs ON cs.id_customer = c.id_customer INNER JOIN barang b on b.kd_barang = dc.kd_barang";
$result1 = mysqli_query($con, $sql);
$rekap = mysqli_fetch_object($result1); 



?>
    <div id="main-wrapper">
        <div class="section-title text-center mb-15">
            <h2>REKAPITULASI SEWA SWEETA</h2>
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
                                <h2>Checkout 1 Bulan Terakhir</h2>
                            </td>
                            <td>
                                <h2>:</h2>
                            </td>
                            <td>
                                <h2><?php echo $rekap->kd_checkout; ?></h2>
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo $rekap->tanggal; ?></td>
                        </tr>
                        <tr>
                            <td>Id Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $rekap->id_customer; ?></td>
                        </tr>


                    </table>
                    <table class="table table-bordered">
                        <thead class="thead-light">

                            <tr>
                                <th>Kode Checkout</th>
                                <th>Id Customer</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Jumlah Pesanan</th>
                                <th>Total Bayar</th>
                                <th>Status</th>

                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                $select = mysqli_query($con,"SELECT * FROM detail_checkout dc INNER JOIN checkout c ON dc.kd_checkout = c.kd_checkout INNER JOIN customer cs ON cs.id_customer = c.id_customer INNER JOIN barang b on b.kd_barang = dc.kd_barang GROUP BY dc.kd_checkout");
                                while ($data = mysqli_fetch_array($select)) {   
                                ?>
                            <tr>
                                <td><?php echo$data['kd_checkout']?></td>
                                <td><?php echo$data['id_customer']?> </td>
                                <td><?php echo$data['nama']?></td>
                                <td><?php echo$data['tanggal']?></td>
                                <td><?php echo$data['jumlah_pesanan']?> </td>
                                <td>Rp. <?php echo$data['total_harga']?></td>
                                <td><?php if ($data['status'] == true) {
                                                           echo "Selesai";
                                                        }else {
                                                            echo "Sewa";
                                                        }
                                                        ?></td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <p>*Refresh untuk mencetak</p>

                <div style="page-break-before:always;">
                    <table>

                        <tr>
                            <td>
                                <h2>Detail Checkout</h2>
                            </td>
                            
                        </tr>
                        <tr>
                            <td>Tanggal</td>
                            <td>:</td>
                            <td><?php echo $rekap->tanggal; ?></td>
                        </tr>
                        <tr>
                            <td>Id Pelanggan</td>
                            <td>:</td>
                            <td><?php echo $rekap->id_customer; ?></td>
                        </tr>


                    </table>
                    <div class="tab-content">
                        <table class="table">
                            <thead class="thead-light">
                                <tr>
                                    <th>Kode Checkout</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                        </table>
                        <p>*Refresh untuk mencetak</p>


                    </div>
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