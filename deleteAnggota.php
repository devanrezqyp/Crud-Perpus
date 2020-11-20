<?php 
	include 'koneksi.php';

	$anggota = $_GET['kd_anggota'];

	$query = "DELETE FROM tb_anggota WHERE kode_anggota = '".$anggota."'";
	$result = mysqli_query($conn, $query);
	if($result) {
		header("Location: lihatAnggota.php");
	}else{
		die("Data tidak terhapus");
	}
?>