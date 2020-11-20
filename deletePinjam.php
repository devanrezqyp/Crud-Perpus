<?php 
	include 'koneksi.php';

	$pinjam = $_GET['kd_pinjam'];

	$query = "DELETE FROM tb_peminjaman WHERE kode_pinjam = '".$pinjam."'";
	$result = mysqli_query($conn, $query);
	if($result) {
		header("Location: lihatPinjam.php");
	}else{
		die("Data tidak terhapus");
	}
?>