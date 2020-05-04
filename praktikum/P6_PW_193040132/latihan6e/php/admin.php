<?php
//menghubungkan dengan file php lainnya
require 'function.php';

if(isset($_GET['cari'])) {
	$keyword = $_GET['keyword'];
	$makanan = query ("SELECT * FROM makanan WHERE 
		id LIKE '%$keyword%' OR 
		nama LIKE '%$keyword%' OR 
		berat LIKE '%$keyword%' OR 
		kalori LIKE '%$keyword%' OR 
		karbohidrat LIKE '%$keyword%' OR
		protein LIKE '%$keyword%' OR 
		lemak LIKE '%$keyword%' ");
}else {

//melakukan query
$makanan = query("SELECT * FROM makanan");
}
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
	<form action="" method="get">
		<input type="text" name="keyword" autofocus>
		<button type="submit" name="cari">cari!</button>
	</form>
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

		<?php if(empty($makanan)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan!</h1>
				</td>
			</tr>
			<?php else : ?>
<?php $a = 1; ?>
<?php foreach ($makanan as $mkn) : ?>

	<tr>
		<td><?= $a ?></td>
		<td>
			<div class="update"> 
			<a href="ubah.php?id=<?= $mkn['id'] ?>"><button>Ubah</button></a></div>
			<div class="delete">
			<a href="hapus.php?id=<?= $mkn['id'] ?>" onclick="return confirm('Hapus data??')"><button>Hapus</button></a></div>
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
<?php endif; ?>
</table>
</body>
</html>