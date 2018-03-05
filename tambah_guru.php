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
<h3 align="center"> Tambah Data Guru</h3>
	<form method="POST">
	<table>
	<tr>
		<td>Nip</td>
		<td>:</td>
		<td><input type="text" name="nip"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
	<tr>
		<td>Pelajaran</td>
		<td>:</td>
		<td>
		
		<select name="kode_pelajaran">
		<?php
		$view = $dbconnect -> query ("SELECT * FROM pelajaran");
    while($row=$view->fetch_array())
    {
		?>
		<option value="<?php echo $row['kode_pelajaran'];?>"><?php echo $row['mata_pelajaran']?></option>
		<?php
	}
		?>	
		</select>
		</td>
	</tr>
	<tr>
		<td colspan=2><input type="submit" name="submit"/></td>
	</tr>
	</table>
	
	</form>
	
<?php
	if(isset($_POST['submit'])){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$kode = $_POST['kode_pelajaran'];
		
		$query = "INSERT INTO guru(nip,nama_guru,kode_pelajaran) VALUE ('$nip','$nama','$kode')";
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