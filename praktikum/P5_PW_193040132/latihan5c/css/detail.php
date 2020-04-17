<?php 

if (!isset($_GET['id'])) {
	header("location : ../index.php");
	exit;
}
require 'function.php';

$id = $_GET['id'];

$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<div class="container">
	<div class="img">
	<img src="../assets/img/<?=$makanan["img"];?>" alt="">
</div>
	<div class="keterangan">
		<p><?= $makanan["nama"]; ?></p>
		<p><?= $makanan["berat"]; ?></p>
		<p><?= $makanan["kalori"]; ?></p>
		<p><?= $makanan["karbohidrat"]; ?></p>
		<p><?= $makanan["protein"]; ?></p>
		<p><?= $makanan["lemak"]; ?></p>
	</div>
	<button class="tombol-kembali"><a href="../index.php">Back</button>
</body>
</html>