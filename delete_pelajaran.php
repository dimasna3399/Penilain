<?php
include "koneksi.php";

?>
<h3 align="center"> Delete Data Pelajaran</h3>
<form method="POST">
<table>
	<tr>
		<td>CARI KODE</td>
		<td>:</td>
		<td><input type="text" name="carikode"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit"/></td>
		
	</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
		$kode=$_POST['carikode'];
		$sql = mysqli_query($dbconnect,"select * from pelajaran where kode_pelajaran='$kode'");
		//periksa hasil query apakah ada error
		  if(!$sql) {
			die ("Query gagal dijalankan: ".mysqli_errno($dbconnect).
			   " - ".mysqli_error($dbconnect));
		  }
		
		 $data = mysqli_fetch_array($sql);
		 $c= count($data);
		 
		 if($c>0){
			 ?>
			 <form method="POST">
				<table>
					<tr>
						<td>Kode Pelajaran</td>
						<td>:</td>
						<td><?php echo $data['kode_pelajaran']?></td>
						<input type="hidden" name="kode" value="<?php echo $data['kode_pelajaran']?>"  />
					</tr>
					<tr>
						<td>Mata Pelajaran</td>
						<td>:</td>
						<td><?php echo $data['mata_pelajaran']?></td>
					</tr>
					<tr>
						<td colspan=2><input type="submit" name="submit2" onclick="return confirm('YAKIN MAU DI HAPUS?');" /></td>
					</tr>
				</table>
			</form>
		<?php	 
		 }else{
			 echo "Data Tidak Ditemukan";
		 }
	}
	
if(isset($_POST['submit2']))
{
	$kode=$_POST['kode'];
	$sql = mysqli_query($dbconnect,"delete from pelajaran where kode_pelajaran='$kode'");
	if(!$sql) {
			die ("Query gagal dijalankan: ".mysqli_errno($dbconnect).
			   " - ".mysqli_error($dbconnect));
		  }else{
			echo'<script type="text/javascript">';
			echo'alert("Berhasil");';
			echo'window.location.replace("http://localhost/penilaian1/dashboard_admin.php");';
			echo'</script>';
				
	}
}		

?>
