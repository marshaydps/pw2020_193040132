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
	<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">

	
	<title>Data Detail</title>
	<style>
		img {
			
	width: 260px;
	height: 260px;
	border: 8px dashed #ff5050;
	box-shadow: 7px 7px 7px 7px rgba(0,0,0,0.5);

		}

		body {
			background-image: url(../assets/img/bg5.gif);
			text-align: center;
		}

		.tulisan{
			font-family: 'Bree Serif', serif !important;
			color: #ff5050;
		}
	</style>
</head>
<body>


	<div class="container">
	<div class="img">
	<img src="../assets/img/<?=$makanan["img"];?>" alt="">
</div>
	<div class="keterangan tulisan">
		<p><?= $makanan["nama"]; ?></p>
		<p><?= $makanan["berat"]." gram" ?></p>
		<p><?= $makanan["kalori"]." kalori" ?></p>
		<p><?= $makanan["karbohidrat"]. " gram karbohidrat"?></p>
		<p><?= $makanan["protein"]. " gram protein" ?></p>
		<p><?= $makanan["lemak"]. " presentase lemak"; ?></p>
	</div>
	<a href = menu.php class="waves-effect #ef9a9a red lighten-3 btn-small"><i class="material-icons left">arrow_back</i>Back</a>
	
</body>
</html>