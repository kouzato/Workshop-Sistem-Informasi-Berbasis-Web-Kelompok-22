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
    <script>
    function validateForm() {
        var a = document.forms["check"]["totalbarang"].value;
        if (a == "" || a == null) {
            alert("Keranjang Harus Diisi");
            return false;
        }
    }
    </script>


</head>

<body>
    <?php 
// Start the session
session_start();
require 'connect.php';
require 'item.php';

if(isset($_GET['kode_barang']) && !isset($_POST['update']))  { 
    $idx = $_GET['kode_barang'];
	$sql = "SELECT * FROM barang WHERE kd_barang='$idx'";
    $result = mysqli_query($con, $sql);
	$barang = mysqli_fetch_object($result); 
	$item = new Item();
    $item->id = $barang->kd_barang;
    $item->foto = $barang->foto;
	$item->name = $barang->nama_barang;
	$item->price = $barang->harga_barang;
    $iteminstock = $barang->jumlah_barang;
	$item->kuantitas = 1;
	// Check product is existing in cart
    $index = -1;
    error_reporting(E_ERROR | E_PARSE);
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
    error_reporting(E_ERROR | E_PARSE);
    for($i=0; $i<count($cart);$i++)
		if ($cart[$i]->id == $_GET['kode_barang']){
			$index = $i;
			break;
		}
		if($index == -1) 
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {
			
			if (($cart[$index]->kuantitas) < $iteminstock)
				 $cart[$index]->kuantitas++;
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
  $arrQuantity = $_POST['kuantitas'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->kuantitas = $arrQuantity[$i];
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
                            <form method="POST" name="check" id="check" action="checkout.php" onsubmit="return validateForm()" required>

                                <table class="table">

                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Foto</th>
                                            <th class="pro-title">Nama Produk</th>

                                            <th class="pro-quantity">Harga</th>
                                            <th class="pro-subtotal">Tambah</th>
                                            <th class="pro-remove">Hapus</th>
                                        </tr>
                                        <?php 
                                        
                                            error_reporting(E_ALL ^ E_NOTICE); //error ilang
                                            $cart = unserialize(serialize($_SESSION['cart']));
                                            $s = 0;
                                            $index = 0;
                                            error_reporting(E_ERROR | E_PARSE);
                                            for($i=0; $i<count($cart); $i++){
                                                $s += $cart[$i]->price * $cart[$i]->kuantitas;
                                                    
                                        ?>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td class="pro-thumbnail"><img
                                                    src="assets/images/pic/<?php echo $cart[$i]->foto; ?>"
                                                    alt="Product">
                                            </td>
                                            <td class="pro-title"><span><?php echo $cart[$i]->name; ?></span></td>
                                            <input type="hidden" name="nama[]" value="<?php echo $cart[$i]->name;?>"
                                                require>
                                            <td class="pro-price"><span>Rp. <?php echo $cart[$i]->price; ?></span></td>
                                            <input type="hidden" name="hargabarang">
                                            <td class="pro-quantity">
                                                <a href="cart.php?kode_barang=<?php echo $cart[$i]->id; ?> &action=add"><i
                                                        class="fa fa-cart-plus"></i></a>
                                                <input type="hidden" require name="kuantitas[]" value=" <?php echo $cart[$i]->kuantitas; 
                                                    ?>">
                                                <?php $subharga = $cart[$i]->price * $cart[$i]->kuantitas;?>
                                            </td>

                                            <input type="hidden" name="subharga[]" require
                                                value="<?php echo $subharga ?>">

                                            <td class="pro-remove"><a href="cart.php?index=<?php echo $index; ?>"
                                                    onclick="return confirm('Apakah anda yakin?')"><i
                                                        class="fa fa-trash-o"></i></a></td>
                                        </tr>
                                        <?php 
                                            $index++;
                                            $totalbarang = count($cart);
                                        }
                                    
                                        ?>
                                    </tbody>

                                </table>
                                <h4><span>Jumlah Barang : </span>
                                    <input type="text" value="<?php 
                                print $totalbarang; ?>" name="totalbarang" require readonly>
                                </h4>
                                <style>
                                input {

                                    outline: none;
                                    border: 0;
                                }
                                </style>
                        </div>
                        <div class="row">

                            <div class="col-lg-6 col-12 mb-5">


                            </div>

                            <!-- Cart Summary -->
                            <div class="col-lg-6 col-12 mb-30 d-flex">
                                <div class="cart-summary">

                                    <div class="cart-summary-wrap">


                                        <h2>Grand Total <span name="gt">Rp. <?php echo $s; ?></span></h2>
                                        <input type="hidden" name="grandtotal" require value=" <?php echo $s; ?>">

                                    </div>

                                    <div class="cart-summary-button">


                                        <button class="btn" form="check" type="submit" value="Submit">Checkout</button>

                                    </div>

                                </div>

                            </div>


                        </div>

                        </form>

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