<!DOCTYPE HTML>
<?php
include 'koneksi.php';
?>
<html lang="en-US">
<head>
    <link rel="stylesheet" href="admin.css" type="text/css">
    <meta charset="UTF-8">
    <title>Dashboard Admin </title>
</head>
<body>
<div id="headerleft">
    <p>Admin</p>
</div>
<div id="header">
    <dl>
        <dd>Dashboard</dd>
        <dd class="logout"><a href="login_admin.php">logout</a></dd>
    </dl>
</div>

<div id="sidebar">
    <dl class="menu">
        <dd><a href="#">Dashboard</a></dd>
        <dd><a href="edit.php">Edit Data</a></dd>
        <dd><a href="lihat.php">Lihat Data</a></dd>
        <dd><a href="hapus.php">Hapus Data</a></dd>
        <dd><a href="tambah.php">Tambah Data</a></dd>
    </dl>
</div>
<div id="data">
    <center><img class="fav" src="admin.png"></center>
    <dl>
        <center><dd>Hello Admin Selamat Datang</dd></center>
    </dl>



    <!--<h3 align="center"><a href="login_admin.php">Logout</a></h3>
        <table align="center" class="content">
        <tr>
            <th>Lihat Data</th>
            <th>Tambah Data</th>
            <th>Edit Data</th>
            <th>Hapus Data</th>
        </tr>
        <tr>
            <td><a href="data_siswa.php">Data Siswa</a></td>
            <td><a href="tambah_siswa.php">Data Siswa</a></td>
            <td><a href="edit_siswa.php">Data Siswa</a></td>
            <td><a href="delete_siswa.php">Data Siswa</a></td>

        </tr>
        <tr>
            <td><a href="data_guru.php">Data Guru</a></td>
            <td><a href="tambah_guru.php">Data Guru</a></td>
            <td><a href="edit_guru.php">Data Guru</a></td>
            <td><a href="delete_guru.php">Data Guru</a></td>

        </tr>
        <tr>
            <td><a href="data_pelajaran.php">Data Pelajaran</a></td>
            <td><a href="tambah_pelajaran.php">Data Pelajaran</a></td>
            <td><a href="edit_pelajaran.php">Data Pelajaran</a></td>
            <td><a href="delete_pelajaran.php">Data Pelajaran</a></td>
        </tr>

        </table>
        -->
</div>
</body>
</html>