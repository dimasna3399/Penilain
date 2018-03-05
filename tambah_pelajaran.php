<?php
error_reporting(0);
include "koneksi.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3 align="center"> Tambah Data PELAJARAN</h3>
<form method="POST">
	<table>
		<tr>
			<td>Kode Pelajaran</td>
			<td>:</td>
			<td><input type="text" name="kode"/></td>
		</tr>
		<tr>
			<td>Mata Pelajaran</td>
			<td>:</td>
			<td><input type="text" name="pelajaran"/></td>
		</tr>
		<tr>
			<td colspan=2><input type="submit" name="submit"/></td>
		</tr>
	</table>
</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		$kode = $_POST['kode'];
		$mata = $_POST['pelajaran'];
		
		
		$query = "INSERT INTO pelajaran(kode_pelajaran,mata_pelajaran) VALUE ($kode,'$mata')";
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