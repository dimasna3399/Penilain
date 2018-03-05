<!DOCTYPE HTML>
<?php
include 'koneksi.php';
?>
<html lang="en-US">
<head>
    <link rel="stylesheet" href="admin.css" type="text/css">
    <meta charset="UTF-8">
    <title>Edit Data</title>
</head>
<body>
<div id="headerleft">
    <p>Admin</p>
</div>
<div id="header">
    <dl>
        <dd>Edit Data</dd>
        <dd class="logout"><a href="login_admin.php">logout</a></dd>
    </dl>
</div>

<div id="sidebar">
    <dl class="menu">
        <dd><a href="dashboard_admin.php">Dashboard</a></dd>
        <dd><a href="#">Edit Data</a></dd>
        <dd><a href="lihat.php">Lihat Data</a></dd>
        <dd><a href="hapus.php">Hapus Data</a></dd>
        <dd><a href="tambah.php">Tambah Data</a></dd>
    </dl>
</div>
<div id="data">
    <center>
        <table>
            <tr>
                <th><center><a href="#"><img src="student.png" width="150" height="150"></a></center></th>
                <th><center><a href="#"><img src="teacher.png" width="150" height="150"></a></center></th>
                <th><center><a href="#"><img src="books.png" width="150" height="150"></a></center></th>
            </tr>
            <tr style="text-align: center; color: #4d4d4d;">
                <td>Data Siswa</td>
                <td>Data Guru</td>
                <td>Data Pelajaran</td>
            </tr>
            <tr>
                <td><form method="post" action="edit_siswa.php"><center><input type="submit" name="editsiswa" value="Edit"></center></form></td>
                <td><form action="edit_guru.php"><center><input type="submit" value="Edit"></center></form></td>
                <td><form action="edit_pelajaran.php"><center><input type="submit" value="Edit"></center></form></td>
            </tr>
        </table>
    </center>
</div>
</html>
<?php


if (isset($_POST['editsiswa'])){

}

?>