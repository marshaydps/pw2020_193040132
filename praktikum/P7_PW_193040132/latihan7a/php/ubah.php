<?php
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
	<title></title>
</head>
<body bgcolor="violet">
<h3>Form Ubah Data Tabel Kalori</h3>
<form action="" method="post">
	<ul>
		
			<input type="hidden" name="id" id="id" value="<?= $mkn['id'];?>">
			<br><br>

		<li>
			<label for = "img">img</label><br>
			<input type="text" name="img" id="img" required value="<?= $mkn['img']; ?>"><br><br>
		</li>
		<li>
			<label for = "nama">nama</label><br>
			<input type="text" name="nama" id="nama" required value="<?= $mkn['nama']; ?>"><br><br>
		</li>
		<li>
			<label for = "berat">berat</label><br>
			<input type="text" name="berat" id="berat" required value="<?= $mkn['berat']; ?>"><br><br>
		</li>
		<li>
			<label for = "kalori">kalori</label><br>
			<input type="text" name="kalori" id="kalori" required value="<?= $mkn['kalori']; ?>"><br><br>
		</li>
		<li>
			<label for = "karbohidrat">karbohidrat</label><br>
			<input type="text" name="karbohidrat" id="karbohidrat" required value="<?= $mkn['karbohidrat']; ?>"><br><br>
		</li>
		<li>
			<label for = "protein">protein</label><br>
			<input type="text" name="protein" id="protein" required value="<?= $mkn['protein']; ?>"><br><br>
		</li>
		<li>
			<label for = "lemak">lemak</label><br>
			<input type="text" name="lemak" id="lemak" required value="<?= $mkn['lemak']; ?>"><br><br>
		</li>
		<br>
		<button type="submit" name="ubah">Ubah Data</button>
		<button type="submit">
			<a href="../index.php">Kembali</a>
		</button>
	</ul>
<body>

</body>
</html>