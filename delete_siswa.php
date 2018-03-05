<?php
include "koneksi.php";
?>
<h3 align="center"> Delete Data Siswa</h3>
<form method="POST">
<table>
	<tr>
		<td>CARI NIS</td>
		<td>:</td>
		<td><input type="text" name="carinis"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit"/></td>
		
	</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
		$nis = $_POST['carinis'];
		
		$sql = mysqli_query($dbconnect,"select * from siswa where nis='$nis'");
		
	
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
		<td>Nis</td>
		<td>:</td>
		<td><?php echo $data['nis'];?></td>
		<input type="hidden" name="nis" value="<?php echo $data['nis'];?>"/>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $data['nama_siswa'];?></td>
	</tr>
	<tr>
		<td>Kelas</td>
		<td>:</td>
		<td><?php echo $data['kelas'];?></td>
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
	$nis=$_POST['nis'];
	$sql = mysqli_query($dbconnect,"delete from siswa where nis='$nis'");
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