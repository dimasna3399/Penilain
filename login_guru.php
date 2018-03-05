<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <link rel="stylesheet" href="guru.css" type="text/css">
    <script src="js.js"></script>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<div class="login-page">
    <div class="form">
        <h3>Login Guru</h3>
        <form class="login-form" method="post">
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <button>login</button>
        </form>
    </div>
</div>
	
	
	<?php
	session_start();
	include "koneksi.php";
	error_reporting(0);
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($username != "" and $password != ""){
		$data = $dbconnect -> query ("SELECT * FROM guru where username='$username' and password = '$password'");
		$row = $data->fetch_array();
		if(count($row)>0){
			$_SESSION['akses']="guru";
			$_SESSION['username']=$username;
			header("location:dashboard_guru.php");
		}else{
			echo "Data tidak ada atau salah";
		}
	}else{
		echo "";
	}
	
	?>
</body>
</html>