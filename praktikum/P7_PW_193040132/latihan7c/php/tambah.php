<?php
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

require 'function.php';

if (isset($_POST['tambah'])) {
	if (tambah($_POST) >0) {
		echo "<script>
		alert('data berhasil ditambahkan !');
		document.location.href='admin.php';
		</script>";
	}else {
		echo "<script>
		alert('data gagal ditambahkan!');
		document.location.href='admin.php';
		</script>";
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body bgcolor="violet">
<h3>Form Tambah Data Tabel Kalori</h3>
<form action="" method="post">
	<ul>
		<li>
			<label for = "img">img</label><br>
			<input type="text" name="img" id="img" required><br><br>
		</li>
		<li>
			<label for = "nama">nama</label><br>
			<input type="text" name="nama" id="nama" required><br><br>
		</li>
		<li>
			<label for = "berat">berat</label><br>
			<input type="text" name="berat" id="berat" required><br><br>
		</li>
		<li>
			<label for = "kalori">kalori</label><br>
			<input type="text" name="kalori" id="kalori" required><br><br>
		</li>
		<li>
			<label for = "karbohidrat">karbohidrat</label><br>
			<input type="text" name="karbohidrat" id="karbohidrat" required><br><br>
		</li>
		<li>
			<label for = "protein">protein</label><br>
			<input type="text" name="protein" id="protein" required><br><br>
		</li>
		<li>
			<label for = "lemak">lemak</label><br>
			<input type="text" name="lemak" id="lemak" required><br><br>
		</li>

		<br>
		<button type="submit" name="tambah">Tambah</button>
		<button type="submit">
			<a href="../index.php">Kembali</a>
		</button>
	</ul>
<body>

</body>
</html>