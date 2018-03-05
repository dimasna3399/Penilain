<!DOCTYPE HTML>
<?php
error_reporting(0);
include "koneksi.php";
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3 align="center"> Tambah Data SISWA</h3>
	<form method="POST">
	<table>
	<tr>
		<td>Nis</td>
		<td>:</td>
		<td><input type="text" name="nis"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><input type="text" name="kelas"/></td>
	</tr>
	<tr>
		<td colspan=2><input type="submit" name="submit"/></td>
	</tr>
	</table>
	
	</form>
	
<?php
	if(isset($_POST['submit'])){
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$kelas = $_POST['kelas'];
		
		$query = "INSERT INTO siswa(nis,nama_siswa,kelas) VALUE ('$nis','$nama','$kelas')";
		$queryact = mysqli_query($dbconnect, $query);
 
				 //periksa hasil query apakah ada error
		  if(!$queryact) {
			die ("Query gagal dijalankan: ".mysqli_errno($dbconnect).
			   " - ".mysqli_error($dbconnect));
		  }
		
		 
		//lakukan redirect ke halaman index.php
		header("location:dashboard_admin.php");

		
	}          
?>	
</body>
</html>