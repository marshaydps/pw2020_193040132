<?php
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';
$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];


if (isset($_POST['ubah'])) {
	if (ubah($_POST) > 0) {
		echo "<script>
		alert('data berhasil diubah !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal diubah!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data</title>
<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">


	
	<title></title>
</head>
	<body style="background: url(../assets/img/bg8.jpg); background-size: cover;">
		 <div class="navbar-fixed">
    <nav>
      <div class="container">
      <div class="nav-wrapper">
       
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <a href="#!" class="brand-logo">Marsha YDPS</a>
        <ul class="right hide-on-med-and-down">

          <li><a href="../index.php">HOME</a></li>
          <li><a href="profile.php">ABOUT</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href = "logout.php" class="waves-effect #795548 brown btn">LOGOUT</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="profile.php">ABOUT</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href ="logout" class="waves-effect #795548 brown btn">LOGOUT</a></li>
</ul>

<center>
<h2 style="font-family: 'Bree Serif'; color: #4d2600; ">Form Ubah Data Tabel Kalori</h2>
</center>

<form action="" method="post" enctype="multipart/form-data">
	<ul style="font-family: 'Bree Serif', serif;
    font-size: 15px;
    color: #4d2600;
    text-align: center;">
		
			<input type="hidden" name="id" id="id" value="<?= $mkn['id'];?>">
			<br><br>

		<li>
			<label for = "img" style="font-size: 20px; font-style: bold; color: #4d2600;">img</label><br>
			<input type="file" name="img" id="img" required value="<?= $mkn['img']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "nama" style="font-size: 20px; font-style: bold; color: #4d2600;">nama</label><br>
			<input type="text" name="nama" id="nama" required value="<?= $mkn['nama']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "berat" style="font-size: 20px; font-style: bold; color: #4d2600;" style="width: 300px;">berat</label><br>
			<input type="text" name="berat" id="berat" required value="<?= $mkn['berat']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "kalori" style="font-size: 20px; font-style: bold; color: #4d2600;">kalori</label><br>
			<input type="text" name="kalori" id="kalori" required value="<?= $mkn['kalori']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "karbohidrat" style="font-size: 20px; font-style: bold; color: #4d2600;">karbohidrat</label><br>
			<input type="text" name="karbohidrat" id="karbohidrat" required value="<?= $mkn['karbohidrat']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "protein" style="font-size: 20px; font-style: bold; color: #4d2600;">protein</label><br>
			<input type="text" name="protein" id="protein" required value="<?= $mkn['protein']; ?>" style="width: 300px;"><br><br>
		</li>
		<li>
			<label for = "lemak" style="font-size: 20px; font-style: bold; color: #4d2600;">lemak</label><br>
			<input type="text" name="lemak" id="lemak" required value="<?= $mkn['lemak']; ?>" style="width: 300px;"><br><br>
		</li>
		<br>
		<label class="add" for="ubah" style="font-family: 'Bree Serif', serif !important;"><button class="btn-small #795548 brown" type="submit" name="ubah"><i class="material-icons">add_circle</i></label>Ubah Data</button>
      
		<a href= ../index.php class="btn-small #795548 brown btn"><i class="material-icons left">chevron_left</i>Kembali</a>

		
	</ul>
<body>

</body>
</html>