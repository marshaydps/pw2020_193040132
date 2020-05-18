<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/materialize.css"/>
	<script src="js/materialize.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	

	<!--My CSS-->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!--My Fonts-->
	<link href="https://fonts.googleapis.com/css2?family=Bree+Serif&family=Viga&display=swap" rel="stylesheet">

  <style>
    @media only screen and (max-width: 600px) {
    .parallax-container {
        height: 300px;
    }
}

@media only screen and (max-width: 600px) {
    .food img {
        max-width: 100px !important;
        max-height: 60px !important;
    }
}

@media only screen and (max-width: 600px) {
    .icons {
      padding-left: 130px;
      max-width: 250px !important;
      
    }

    .text a {
      font-size: 8px;

    }
}

  </style>
	
	<title>193040132 - Marsha YDPS</title>
</head>
	<body>
		 <div class="navbar-fixed">
    <nav>
      <div class="container">
      <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Marsha YDPS</a>
        <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

          <li><a href="#">HOME</a></li>
          <li><a href="php/menu.php">MENU</a></li>
          <li><a href = "php/login.php" class="waves-effect #795548 brown btn">SIGN IN</a></li>
          <li><a href = "php/registrasi.php" class="waves-effect #795548 brown btn">REGISTER</a></li>
          
        </ul>
      </div>
    </nav>
  </div>
</div>

<!--SideNav-->
<ul class="sidenav" id="mobile-nav">
  <li><a href="#">HOME</a></li>
  <li><a href="php/menu.php">MENU</a></li>
  <li><a href ="php/login.php" class="waves-effect #795548 brown btn">SIGN IN</a></li>
  <li><a href = "php/registrasi.php" class="waves-effect #795548 brown btn">REGISTER</a></li>
</ul>
 
 <!--Slider -->

   <div class="slider fullscreen">
    <ul class="slides">
      <li>
        <img src="assets/img/bg2.jpg"> 
        <div class="caption center-align tulisan">
          <h1><b>Welcome To My Website!</b></h1>
          <h3 class="light grey-text text-lighten-3">"Life, Love, Eat"</h3>
          <a href="php/menu.php" class="waves-effect #795548 brown btn-large"><i class="material-icons left">cloud</i>Love Life</a>
        </div>
      </li>
      <li>
        <img src="assets/img/bg1.jpg"> 
        <div class="caption left-align tulisan">
          <h2>Healthy Inside, Fresh Outside</h2>
          <h5 class="light grey-text text-lighten-3">Life healthy and eat happily!</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/bg3.jpg"> 
        <div class="caption right-align tulisan">
          <h2>Healthy Inside, Fresh Outside</h2>
          <h5 class="light grey-text text-lighten-3">Life healthy and eat happily!</h5>
        </div>
      </li>
      <li>
        <img src="assets/img/bg4.jpg"> 
        <div class="caption center-align tulisan">
          <h2>Healthy Inside, Fresh Outside</h2>
          <h5 class="light grey-text text-lighten-3">Life healthy and eat happily!</h5>
        </div>
      </li>
    </ul>
  </div>

		<!--Section-->
<section id="index" class="index #795548 brown" style="margin-top: 450px;" >
	<div class="container">
		<div class="row">
			<h1 class="light center white-text text-white">Important Facts</h1>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">toys</i>
					<h5>Kalori</h5>
					<p>Tubuh kita membutuhkan kalori untuk dijadikan energi. Tetapi, kebutuhan kalori setiap orang berbeda-beda. Jika dikonsumsi berlebihan, kalori akan disimpan di dalam tubuh sebagai lemak dan membuat berat badan naik</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">donut_small</i>
					<h5>Karbohidrat</h5>
					<p>Karbohidrat dianggap sebagai bahan berbahaya yang meningkatkan berat badan dan dijadikan musuh bagi pelaku diet. Kebanyakan pelaku diet bakal memangkas asupan karbohidrat selama menjalani program diet.</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">bubble_chart</i>
					<h5>Protein</h5>
					<p>Salah satu fungsi protein adalah membantu mengatur metabolisme tubuh. Protein berguna untuk menyeimbangkan cairan dalam tubuh dengan asam basa sehingga akan menciptakan kestabilan pH cairan pada tubuh kita.</p>
				</div>
			</div>
			<div class="col m3 s12">
				<div class="card-panel center">
					<i class="material-icons">ac_unit</i>
					<h5>Lemak</h5>
					<p>Tubuh kita membutuhkan kalori untuk dijadikan energi. Tetapi, kebutuhan kalori setiap orang berbeda-beda. Jika dikonsumsi berlebihan, kalori akan disimpan di dalam tubuh sebagai lemak dan membuat berat badan naik</p>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Paralax -->
<div class="parallax-container center">
      <div class="parallax"><img src="assets/img/bg8.jpg"></div>
      <div class="row">
        <div class="container food">
        <h3>FOOD RECOMMENDATIONS</h3>
          <div class="col m4">
            <img src="assets/img/pr1.png" style="width: 300px;">
          </div>
          <div class="col m4">
            <img src="assets/img/pr3.png" style="width: 300px; height: 220px;">
          </div>
          <div class="col m4">
            <img src="assets/img/pr2.png" style="width: 250px; height: 190px;">
          </div>
      </div>
    </div>
  </div>
 

 <!--Footer-->
        <footer class="page-footer">
            <h5 class="white-text"><center>Social Media</center></h5>
            <div class="row">
          	<div class="container text">
            <div class="icons center text-white">
             <a href = https://web.facebook.com/Marshayunitadwips class="waves-effect waves-light btn-small btn-#795548 brown"><i class="material-icons left">sentiment_very_satisfied</i>Facebook</a>
             <a href = https://twitter.com/yunitamarsha_ class="waves-effect waves-light btn-small btn-#795548 brown"><i class="material-icons left">sentiment_satisfied</i>Twitter</a>
             <a href = https://www.instagram.com/marsha.ydps/?hl=id class="waves-effect waves-light btn-small btn-#795548 brown"><i class="material-icons left">insert_emoticon</i>Instagram</a>
         </div>
     </div>
          <p><center>© 2020 Copyright Marsha YDPS</center></p>
          
        </div>
      </div>
    </footer>
            
            


<!--JavaScript-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<script>
	const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);
  

	const slider = document.querySelectorAll('.slider');
	M.Slider.init(slider);


	const parallax = document.querySelectorAll('.parallax');
	M.Parallax.init(parallax);
	
</script>

</body>
</html>

