<?php
include "koneksi.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data Guru</title>
</head>
<body>
	<h3>Daftar Guru</h3><br>
	
	<table align = "center" cellspacing = "0" cellpadding = "5" border = "1px">
        <tr>
            <td>NIP</td>
            <td>NAMA</td>
            <td>MataPelajaran</td>
            
            
        </tr>
   

<?php

    
    $view = $dbconnect -> query ("SELECT * FROM guru");
    while($row=$view->fetch_array())
    {
		$res=$dbconnect -> query ("SELECT mata_pelajaran from pelajaran where kode_pelajaran='$row[1]'");
		$rows = mysqli_fetch_assoc($res);
		
?>
    <tr>
        <td> <?php echo $row['nip']; ?> </td>
        <td> <?php echo $row['nama_guru']; ?> </td>
        <td> <?php echo $rows['mata_pelajaran'];?> </td>
        
        
    </tr>
  
 
    <?php
    }
    ?>
    </table>
</body>
</html>