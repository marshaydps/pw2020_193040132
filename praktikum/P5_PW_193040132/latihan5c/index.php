
	<?php
	require 'php/function.php';

	$makanan = query("SELECT * FROM makanan");
	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body bgcolor="pink">
	<h1><center>FOOD CALORIES TABLE</center></h1>
	<div class="container">
	<?php foreach ($makanan as $mkn) : ?>
	<p class="nama">
	<a href="php/detail.php?id=<?=$mkn['id'] ?>">
	<?= $mkn["nama"] ?>
	</a>
	</p>
	<?php endforeach; ?>
		

</div>
</body>
</html>