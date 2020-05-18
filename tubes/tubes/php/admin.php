<?php
session_start();

if(!isset($_SESSION["username"])) {
	header("Location: login.php");
	exit;
}

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
	<link rel="stylesheet" href="../css/materialize.css"/>
	<script src="../js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style>
		.card {
			width: 250px !important;
			box-shadow: 7px 7px 7px 7px rgba(0,0,0,0.4);
		}
		.card-image {
			width: 250px !important;
			height: 200px !important; 
		}

		.card-title {
			padding-top: 50px;
		}

		button {
			font-family: 'Bree Serif', serif;
		}
	</style>

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">

	
	<title>Data Settings</title>
</head>
	<body>
		 <div class="navbar-fixed">
    <nav>
      <div class="container">
      <div class="nav-wrapper">
       
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         <a href="#!" class="brand-logo">Marsha YDPS</a>
        <ul class="right hide-on-med-and-down">

          <li><a href="../index.php">HOME</a></li>
          <li><a href="menu.php">MENU</a></li>
          <li><a href="page.php">HALAMAN ADMIN</a></li>
          <li><a href = "logout.php" class="waves-effect #795548 brown btn">LOGOUT</a></li>


          
        </ul>
      </div>
    </nav>
  </div>
</div>



<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href="page.php">HALAMAN ADMIN</a></li>
  <li><a href = "logout.php" class="waves-effect #795548 brown btn">LOGOUT</a></li>
</ul>


		<!--Section-->
<section id="services" class="services #ef9a9a red lighten-3">
	<div class="container">
	<div class="row">
	<form action="" method="get">
	<input type="text" name="keyword" autofocus>
	<label class="label-icon" for="search"><button class="btn-small #795548 brown" type="submit" name="cari"><i class="material-icons">search</i>Search Here</button>
	</form>

		<?php if(empty($makanan)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan!</h1>
				</td>
			</tr>
			<?php else : ?>
<label class="add" for="tambah"></label><button class="btn-small #795548 brown" type="submit" name="tambah"><i class="material-icons">add_circle_outline</i><a href=tambah.php>Tambah Data</a></button>
	</form>

	<h1 class="light center white-text text-white">FOOD CALORIES MENU</h1>

<div class="row">
<?php foreach ($makanan as $mkn) : ?>
   <div class="col m4 s12">
      <div class="card">
        <div class="card-image">
          <img src="../assets/img/<?= $mkn['img']; ?>" class="img">
        </div>
        <div class="card-content">
          <span class="card-title black-text text-darken-3"><?= $mkn['nama'] ?></span>
        </div>
          <div class="card-action">
          <a href="ubah.php?id=<?= $mkn['id'] ?>" class="waves-effect #795548 brown btn">Ubah</a>
          <a href="hapus.php?id=<?= $mkn['id'] ?>" class="waves-effect #795548 brown btn">Hapus</a>
      </div>
  </div>
</div>
    <?php endforeach; ?>
<?php endif; ?>

  	
	
	

</div>
</div>
</section>
</body>
</html>
