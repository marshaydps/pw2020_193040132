<?php
//menghubungkan dengan file php lainnya
require 'function.php';

//melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="add">
		<a href="tambah.php">Tambah Data!</a>
	</div>
	<h1><center>FOOD CALORIES TABLE</center></h1>
	<table cellpadding="13" cellspacing="0" border="1" bgcolor="violet">
	<tr bgcolor="pink">
		<th>id</th>
		<th>opsi</th>
		<th>img</th>
		<th>nama</th>
		<th>berat</th>
		<th>kalori</th>
		<th>karbohidrat</th>
		<th>protein</th>
		<th>lemak</th>
	</tr>
	<?php $a = 1?>
	<?php foreach ($makanan as $mkn) : ?>
		<tr>
			<td><?= $a ?></td>
		<td>
		<a href=""><button>Ubah</button></a>
		<a href=""><button>Hapus</button></a>
		</td>

		<td><img src="assets/img/<?= $mkn["img"]; ?>" alt=""></td>
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