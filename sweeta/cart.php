<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sweeta - Keranjang Sewa</title>
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
// Start the session
session_start();
require 'connect.php';
require 'item.php';

if(isset($_GET['kode_barang']) && !isset($_POST['update']))  { 
    $id = $_GET['kode_barang'];
	$sql = "SELECT * FROM barang WHERE kd_barang='$id'";
    $result = mysqli_query($con, $sql);
	$barang = mysqli_fetch_object($result); 
	$item = new Item();
	$item->id = $barang->kd_barang;
	$item->name = $barang->nama_barang;
	$item->price = $barang->harga_barang;
    $iteminstock = $barang->jumlah_barang;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['kode_barang']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->quantity) < $iteminstock)
				 $cart[$index]->quantity ++;
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>

    <div id="main-wrapper">

        <?php include "header_web.php" ?>

        <!-- Page Banner Section Start -->
        <div class="page-banner-section section bg-image" data-bg="assets/images/bg/breadcrumb.png">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page-banner text-left">
                            <h2>Keranjang</h2>
                            <ul class="page-breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li>Keranjang</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Page Banner Section End -->
        <!--Cart section start-->
        <div
            class="cart-section section pt-90 pt-lg-70 pt-md-60 pt-sm-50 pt-xs-45  pb-70 pb-lg-50 pb-md-40 pb-sm-30 pb-xs-20">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <!-- Cart Table -->
                        <div class="cart-table table-responsive mb-30">
                            <form method="post">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Foto</th>
                                        <th class="pro-title">Nama Produk</th>
                                        <th class="pro-price">Harga</th>
                                        <th class="pro-quantity">Kuantitas</th>
                                        <th class="pro-subtotal">Total</th>
                                        <th class="pro-remove">Hapus</th>
                                    </tr>
                                    <?php 
                                        $cart = unserialize(serialize($_SESSION['cart']));
                                            $s = 0;
                                            $index = 0;
                                            for($i=0; $i<count($cart); $i++){
                                                $s += $cart[$i]->price * $cart[$i]->quantity;
                                        ?>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="pro-thumbnail"><a href="#"><img
                                                    src="assets/images/product/product-3.jpg" alt="Product"></a></td>
                                        <td class="pro-title"><a href="#"><?php echo $cart[$i]->name; ?></a></td>
                                        <td class="pro-price"><span>Rp. <?php echo $cart[$i]->price; ?></span></td>
                                        <td class="pro-quantity">
                                            <div class="pro-qty"><input type="number" min="1" value="<?php echo $cart[$i]->quantity; 
                                                    ?>" name="quantity[]"></div>
                                        </td>
                                        <td class="pro-subtotal"><span id="total">Rp.
                                                <?php echo $cart[$i]->price * $cart[$i]->quantity; ?></span></td>
                                        <td class="pro-remove"><a href="cart.php?index=<?php echo $index; ?>"
                                                onclick="return confirm('Apakah anda yakin?')"><i
                                                    class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    <?php 
                                            $index++;
                                        } ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">


                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">
                                    <div class="cart-summary-wrap">


                                        <h2>Grand Total <span>Rp. <?php echo $s; ?></span></h2>
                                    </div>
                                    <div class="cart-summary-button">
                                        <button class="btn" onclick="document.location='checkout.php'">Checkout</button>
                                        <button class="btn" name="update">Update</button>
                                        <input type="hidden" name="update">
                                    </div>
                                </div>
                            </div>
                                    </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Cart section end-->

        <!--Footer section start-->
        <?php include "footer.php" ?>
        <!--Footer section end-->


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

    <?php 
if(isset($_GET["kode_barang"]) || isset($_GET["index"])){
 header('Location: cart.php');
} 
?>
</body>

</html>