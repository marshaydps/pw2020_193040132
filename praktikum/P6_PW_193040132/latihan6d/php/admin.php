<?php
//menghubungkan dengan file php lainnya
require 'function.php';

//melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body bgcolor="violet">
	<div class="add">
	<a href="tambah.php">Tambah data!</a>
	</div>
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
			<a href="ubah.php?id=<?= $mkn['id'] ?>"><button>Ubah</button></a>
			<a href="hapus.php?id=<?= $mkn['id'] ?>" onclick="return confirm('Hapus data??')"><button>Hapus</button></a>
		</td>
		<td><img src="../assets/img/<?=$mkn["img"]; ?>" alt=""> </td>
		<td><?= $mkn ["nama"] ?></td>
		<td><?= $mkn ["berat"] ?></td>
		<td><?= $mkn ["kalori"] ?></td>
		<td><?= $mkn ["karbohidrat"] ?></td>
		<td><?= $mkn ["protein"] ?></td>
		<td><?= $mkn ["lemak"] ?></td>
	</tr>
	<?php $a++ ?>
	
<?php endforeach; ?>
</table>
</body>
</html>