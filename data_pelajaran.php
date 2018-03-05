<?php

include "koneksi.php";
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Data Pelajaran</title>
</head>
<body>
	<h3>Daftar Pelajaran</h3><br>
	
	<table align = "center" cellspacing = "0" cellpadding = "5" border = "1px">
        <tr>
            <td>Kode</td>
            <td>MataPelajaran</td>
            
            
          
        </tr>
   

<?php

    
    $view = $dbconnect -> query ("SELECT * FROM pelajaran");
    while($row=$view->fetch_array())
    {
		
		
?>
    <tr>
        <td> <?php echo $row['kode_pelajaran']; ?> </td>
        
        <td> <?php echo $row['mata_pelajaran'];?> </td>
        
        
    </tr>
  
 
    <?php
    }
    ?>
    </table>	
</body>
</html>