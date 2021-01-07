<?php 
	session_start();
	include 'connect.php';
	$username = $_POST['username'];
	$password = $_POST['password']; 
	$data = mysqli_query($con,"select * from akun where username='$username' and password='$password'");
	$cek = mysqli_num_rows($data);
	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['status'] = "login";
		header("location:index_admin.php");
	}else{
		header("location:login.php?pesan=usernamesalah");
	}
	
 ?>

