<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<h1><center>FOODS CALORIES TABLE</center></h1>

	<?php

	require 'php/function.php';
	$makanan = query("SELECT * FROM makanan");

    ?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="container">
	<table border="1" cellspacing="0" cellpadding="10">
		<tr bgcolor="violet">
				<th>No</th>
				<th>Foto</th>
				<th>Nama</th>
				<th>Berat/Gram</th>
				<th>Kalori</th>
				<th>Karbohidrat</th>
				<th>Protein</th>
				<th>Lemak</th>
		</tr>
		<?php $a = 1 ?>
		<?php foreach ($makanan as $mkn) : ?>
		<tr bgcolor="pink">
			<td><?= $a ?></td>
			<td><img src="assets/img/<?= $mkn["img"]; ?>"></td>
			<td><?= $mkn["nama"] ?></td>
			<td><?= $mkn["berat"] ?></td>
			<td><?= $mkn["kalori"] ?></td>
			<td><?= $mkn["karbohidrat"] ?></td>
			<td><?= $mkn["protein"] ?></td>
			<td><?= $mkn["lemak"] ?></td>
		</tr>
		<?php $a++ ?>
		<?php endforeach; ?>
		


</table>
</div>
</body>
</html>