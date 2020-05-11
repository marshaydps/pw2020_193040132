
	<?php
	require 'php/function.php';

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

	$makanan = query("SELECT * FROM makanan");

}
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<title></title>
</head>
	<body bgcolor="violet">
	<h1><center>FOOD CALORIES TABLE</center></h1>
	<div class="container">
	<form action="" method="get">
	<input type="text" name="keyword" autofocus>
	<button type="submit" name="cari">cari!</button>
	</form>

	<?php if(empty($makanan)) : ?>
		<tr>
			<td colspan="7">
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>
		<?php else : ?>

	<?php foreach ($makanan as $mkn) : ?>
	<tr>
	<p class="nama">
	<a href="php/detail.php?id=<?= $mkn['id'] ?>">
	<?= $mkn["nama"] ?>
	</a>
	</p>
	</tr>


	<?php endforeach; ?>
	<?php endif; ?>

</div>
<a href="php/login.php?>"><button>Masuk ke halaman admin</button></a>



</div>
</body>
</html>

