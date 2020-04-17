<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

	<h1><center>FOODS CALORIES TABLE</center></h1>

	<?php

	$connect = mysqli_connect("localhost", "root", "") or die("koneksi ke db gagal");
	mysqli_select_db($connect, "tubes_193040132") or die ("database salah");

	$result = mysqli_query($connect, "SELECT * FROM makanan");

	  ?>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<div class="container">
	<table border="1" cellspacing="0" cellpadding="10" style="text-align: center;">
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
		<?php while ($row = mysqli_fetch_assoc($result)) : ?>
		<tr bgcolor="pink">
			<td><?= $a ?></td>
			<td><img src="assets/img/<?= $row["img"]; ?>"></td>
			<td><?= $row["nama"] ?></td>
			<td><?= $row["berat"] ?></td>
			<td><?= $row["kalori"] ?></td>
			<td><?= $row["karbohidrat"] ?></td>
			<td><?= $row["protein"] ?></td>
			<td><?= $row["lemak"] ?></td>
		</tr>
		<?php $a++ ?>
		<?php endwhile; ?>
		


</table>
</div>
</body>
</html>