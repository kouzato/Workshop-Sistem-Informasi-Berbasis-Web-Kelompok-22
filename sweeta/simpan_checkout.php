<?php 
include "connect.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$noktp = $_POST['noktp'];
$notelp = $_POST['notelp'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$keckel = $_POST['keckel'];
$kodepos = $_POST['kodepos'];
$kd_barang = $_POST['kd_barang'];
$kuantitas = $_POST['jumlah'];
$subharga = $_POST['subharga'];
$total = $_POST['total'];
$totalbarang = $_POST['totalbarang'];
$tanggal = date('Y-m-d');
$tabelcheckout = "checkout";
$tabelcust = "customer";
$tabeldetailcheckout = "detail_checkout";
$payment = $_POST["payment-method"];
$status = 0;

$query1 = mysqli_query($con,"SELECT MAX(id_customer) as id_custMAX FROM customer ");
$data1 = mysqli_fetch_array($query1);
$id_customer = $data1['id_custMAX'];
$urutancust = (int) substr($id_customer, 3, 3);
$urutancust++;
$hurufcust = "CUS";
$id_customer = $hurufcust . sprintf("%03s", $urutancust);

            

$query2 = mysqli_query($con,"SELECT MAX(kd_checkout) as kd_checkMAX FROM checkout");
$data2 = mysqli_fetch_array($query2);
$kd_checkout = $data2['kd_checkMAX'];
$urutancheck = (int) substr($kd_checkout, 3, 3);
$urutancheck++;
$hurufcheck = "CO";
$kd_checkout = $hurufcheck . sprintf("%03s", $urutancheck);

$query3 = mysqli_query($con,"SELECT MAX(kd_detail) as kd_DcheckMAX FROM detail_checkout");
$data3 = mysqli_fetch_array($query3);
$kd_detail = $data3['kd_DcheckMAX'];
$urutandcheck = (int) substr($kd_detail, 3, 3);
$urutandcheck++;
$hurufdcheck = "DCO";
$kd_detail = $hurufdcheck . sprintf("%03s", $urutandcheck);



$kolomcheckout = "'$kd_checkout','$id_customer','$tanggal','$totalbarang','$total','$payment','$status'";
$kolomcust = "'$id_customer','$noktp','$nama','$email','$notelp','$alamat','$provinsi','$kota','$keckel','$kodepos'";
            

if (isset($_POST['checkout'])) {

            $tambah = mysqli_query($con,"INSERT INTO $tabelcust VALUES ($kolomcust)");
            echo var_dump($tambah);
            if ($tambah==true) {
                $barulagi = mysqli_query($con,"INSERT INTO $tabelcheckout VALUES ($kolomcheckout)");
                var_dump($barulagi);
                if ($barulagi==true) {
                    foreach ($kd_barang as $key => $value) {
                            $barutok = mysqli_query($con,"INSERT INTO $tabeldetailcheckout VALUES ('$kd_detail','$kd_checkout','$value','$kuantitas[$key]')");       
                            var_dump($barutok);
                    }
                    
                    if ($barutok == true) {
                        $i = -1;
                        header("location:checkout_berhasil.php?kode_checkout=$kd_checkout");
                    }
                }else{
                    echo mysqli_error($con);
                }
            }else{
                echo mysqli_error($con);
            }
        
}
?>