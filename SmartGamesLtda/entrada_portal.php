<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>SMART GAMES Ltda.</title>

		<link href="fontes/fonte.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="fonts/feather/style.css">

		<script src="js/modernizr.custom.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

		<!-- ========================================= Script para o slider ========================================= -->
		<script>

		$(document).ready(function() {
		  $("#slideshow > div:gt(0)").hide();

		  setInterval(function() {
		  $('#slideshow > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
			  }
			  , 5000);
			});

		</script>

		<script type="text/javascript">

		  $(document).ready(function(){
		    $("#slideshow").hover(function(){
		      $("#img_logo_entrada").slideDown(2000, function(){
		        jQuery(this).toggleClass("#img_logo_entrada").css('show','');
		      });
		    });

		    $(".preview").hover(function(){
		      $("#img_logo_entrada").slideDown(2000, function(){
		        jQuery(this).toggleClass("#img_logo_entrada").css('show','');
		      });
		    });
		  });

		</script>
	</head>
	<body>
		<div id="img_logo_entrada">
			<p>S  M  A  R  T  G  A  M  E  S</p>
		</div>
		<div id="txt_entrada">
			<p>A Smart Games disponibiliza todo tipo de jogo para
				de diversas plataforma por valores inacreditáveis!
			</p>
		</div>

<!-- FAZENDO UM SLIDE DE FUNDO -->

		<div id="slideshow">
			<div>
				<img src="imagens/assassin_hd.jpg" alt="" />
			</div>
		   <div>
		     <img src="imagens/cod_bo3_hd.jpg" alt="" />
		   </div>
			 <div>
		     <img src="imagens/sonic_hd.jpg" alt="" />
		   </div>
			 <div>
				<img src="imagens/naruto_striker_hd.jpg" alt="" />
			</div>
		</div>
		<!-- Main container -->
		<div class="container">
			<div id="logo_Da_index">
				<img src="imagens/td.png" alt="">
			</div>
			<!-- Blueprint header -->
			<header class="bp-header cf">

			</header>
			<section class="slider">
				<div class="slide slide--current" data-content="content-2">
					<div class="slide__mover">
						<div class="zoomer flex-center">
							<div class="preview">
								<img src="imagens/xbox_logo.png" alt="" />
								<div class="zoomer__area zoomer__area--size-2"></div>
							</div>
						</div>
					</div>
					<h2 class="slide__title"><span>GAMES XBOX - MICROSOFT</span></h2>
				</div>
				<div class="slide" data-content="content-1">
					<div class="slide__mover">
						<div class="zoomer flex-center">
							<div class="preview">
								<img src="imagens/ps4_logo.jpg" alt="" />
								<div class="zoomer__area zoomer__area--size-4"></div>
							</div>
						</div>
					</div>
					<h2 class="slide__title"><span>GAMES PLAYSTATION - SONY</span></h2>
				</div>
				<div class="slide" data-content="content-3">
					<div class="slide__mover">
						<div class="zoomer flex-center">

							<div class="preview">
								<img src="imagens/pc_logo.png" alt="" />
								<div class="zoomer__area zoomer__area--size-3"></div>
							</div>
						</div>
					</div>
					<h2 class="slide__title"><span>GAMES PC</span></h2>
				</div>
				<nav class="slider__nav">
					<button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
					<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
					<button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
				</nav>
			</section>

			<a href="home.php?">
				<div id="btn_verMais">
					<input type="submit" name="" value="V   E   J   A   +">
				</div>
			</a>

			<!-- /slider-->
			<section class="content">
				<div class="content__item" id="content-2">
					<img class="content__item-img rounded-right" src="imagens/xbox_logo.png" alt="" />
					<div class="content__item-inner">
						<h2>XBOX</h2>
						<h3>XBOX 360/ONE</h3>
						<p>Na Smart Games você encontra qualquer jogo de xbox 360 e one com muito mais praticidade.</p>
						<p><a href="home.php">ver jogos &xrarr;</a></p>
					</div>
				</div>
				<div class="content__item" id="content-1">
					<img class="content__item-img rounded-right" src="imagens/ps4_logo.jpg" alt="" />
					<div class="content__item-inner">
						<h2>PLAYSTATION</h2>
						<h3>PS/PS2/PS3/PS4</h3>
						<p>Jogos de playstation por um preço muito mais barato.</p>
						<p><a href="home.php">ver jogos &xrarr;</a></p>
					</div>
				</div>

				<div class="content__item" id="content-3">
					<img class="content__item-img rounded-right" src="imagens/pc_logo.png" alt="" />
					<div class="content__item-inner">
						<h2>COMPUTADOR</h2>
						<p>Encontre qualquer jogo de PC de forma rápida e barata.</p>
						<p><a href="home.php">ver jogos &xrarr;</a></p>
					</div>
				</div>

				<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
			</section>
		</div>
		<script src="js/classie.js"></script>
		<script src="js/dynamics.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
