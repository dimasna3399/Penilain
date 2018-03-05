<!DOCTYPE HTML>
<?php
include 'koneksi.php';
?>
<html lang="en-US">
<head>
    <link rel="stylesheet" href="admin.css" type="text/css">
    <meta charset="UTF-8">
    <title>Lihat Data</title>
</head>
<body>
<div id="headerleft">
    <p>Admin</p>
</div>
<div id="header">
    <dl>
        <dd>Lihat Data</dd>
        <dd class="logout"><a href="login_admin.php">logout</a></dd>
    </dl>
</div>

<div id="sidebar">
    <dl class="menu">
        <dd><a href="dashboard_admin.php">Dashboard</a></dd>
        <dd><a href="edit.php">Edit Data</a></dd>
        <dd><a href="#">Lihat Data</a></dd>
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
                <td><form action="data_siswa.php"><center><input type="submit" value="Lihat"></center></form></td>
                <td><form action="data_guru.php"><center><input type="submit" value="Lihat"></center></form></td>
                <td><form action="data_pelajaran.php"><center><input type="submit" value="Lihat"></center></form></td>
            </tr>
        </table>
    </center>
</div>
</html>