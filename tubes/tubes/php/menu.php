<?php
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

	$makanan = query("SELECT * FROM makanan");

}
	?>

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

	
	<title>Food Calories Menu</title>
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
          <li><a href = "login.php" class="waves-effect #795548 brown btn">SIGN IN</a></li>
          <li><a href = "registrasi.php" class="waves-effect #795548 brown btn">REGISTER</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="../index.php">HOME</a></li>
  <li><a href="menu.php">MENU</a></li>
  <li><a href ="login.php" class="waves-effect #795548 brown btn">SIGN IN</a></li>
  <li><a href = "registrasi.php" class="waves-effect #795548 brown btn">REGISTER</a></li>
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
				<h1>Data tidak ditemukan</h1>
			</td>
		</tr>
		<?php else : ?>

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
          <a href="detail.php?id=<?= $mkn['id']; ?>" class="waves-effect #795548 brown btn">Lihat Detail</a>
      </div>
  </div>
</div>
    <?php endforeach; ?>
</div>



<?php endif; ?>
</div>
</div>
</section>
  	
	
<!--FYI-->
<section id="contact" class="contact #795548 brown">
	<div class="container">
		<div class="row">
				<div class="card-panel #ef9a9a red lighten-3 center white-text">
					<i class="material-icons">info</i>
					<h5>For Your Information</h5>
					<p>We would like to invite you to join with us in helping this website grow with sign up an account and adding some data ~</p>
					<a href = login.php class="waves-effect waves-light btn-large btn-#795548 brown"><i class="material-icons left">sentiment_very_satisfied</i>Here You Go</a>
				</div>
			</div>
		</div>
	</div>
</section>


<!--JavaScript-->
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

	
</script>
</body>
</html>


