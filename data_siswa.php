<!DOCTYPE HTML>
<?php
include "koneksi.php";
?>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data Siswa</title>
</head>
<body>
	<h3>Daftar Siswa</h3><br>
	
	<table align = "center" cellspacing = "0" cellpadding = "5" border = "1px">
        <tr>
            <td>NIS</td>
            <td>NAMA</td>
            <td>KELAS</td>
            
            
        </tr>
   

<?php
    
    $view = $dbconnect -> query ("SELECT * FROM siswa");
    while($row=$view->fetch_array())
    {
?>
    <tr>
        <td> <?php echo $row['nis']; ?> </td>
        <td> <?php echo $row['nama_siswa']; ?> </td>
        <td> <?php echo $row['kelas']; ?> </td>
        
       
    </tr>
  
 
    <?php
    }
    ?>
    </table>
</body>
</html>