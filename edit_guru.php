<?php
include "koneksi.php";
?>
<h3 align="center"> Edit Data Guru</h3>
<form method="POST">
<table>
	<tr>
		<td>CARI NIP</td>
		<td>:</td>
		<td><input type="text" name="carinip"/></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit"/></td>
		
	</tr>
</table>
</form>
<?php
if(isset($_POST['submit'])){
		$nip = $_POST['carinip'];
		$sql = mysqli_query($dbconnect,"select * from guru  where nip='$nip'");
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
		<td>Nip</td>
		<td>:</td>
		<td><input type="text" name="nip" value="<?php echo $data['nip']?>" readonly /></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $data['nama_guru']?>" /></td>
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
		if($data['kode_pelajaran']==$row['kode_pelajaran']){
		?>
		<option value="<?php echo $row['kode_pelajaran'];?>" selected ><?php echo $row['mata_pelajaran']?></option>
		<?php
		}else{
			?>
		<option value="<?php echo $row['kode_pelajaran'];?>"  ><?php echo $row['mata_pelajaran']?></option>	
	<?php		
		}
		
	}
		?>	
		</select>
		</td>
	</tr>
	<tr>
		<td colspan=2><input type="submit" name="submit2"/></td>
	</tr>
	</table>
	
	</form>	 
		<?php	 
		 }else{
			 echo "Data Tidak Ditemukan";
		 }
}

if(isset($_POST['submit2'])){
		$nip = $_POST['nip'];
		$nama = $_POST['nama'];
		$kode = $_POST['kode_pelajaran'];
		
		$query = "update guru set nama_guru='$nama', kode_pelajaran=$kode where nip=$nip;";
		$queryact = mysqli_query($dbconnect, $query);
 
				 //periksa hasil query apakah ada error
		  if(!$queryact) {
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