<!DOCTYPE html>
<html lang="pt-br" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="A simple content slider with depth-like zoom functionality" />
		<meta name="keywords" content="blueprint, template, slider, zoom, javascript, depth, 3d, css" />
		<meta name="author" content="Codrops" />

		<title>Carousel System</title>
		<link rel="shortcut icon" href="./public/images/favicon.ico">

		<link rel="stylesheet" type="text/css" href="./public/fonts/feather/style.css">
		<link rel="stylesheet" type="text/css" href="./public/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="./public/css/component.css" />
	</head>
	<body>
		<!-- Main container -->
		<div class="container">
			<!-- Blueprint header -->
			<header class="bp-header cf">
				<span>Blueprint <span class="bp-icon bp-icon-about" data-content="The Blueprints are a collection of basic and minimal website concepts, components, plugins and layouts with minimal style for easy adaption and usage, or simply for inspiration."></span></span>
				<h1>Zoom Slider</h1>
				<nav>
					<button class="button"><a style="background-color: #222125;" href="./views/login.php">Login</a></button>
				</nav>
			</header>
			<!-- Grid -->
			<section class="slider">
				<?php
					include_once("./controllers/buscaController.php");

					foreach($data as $key => $d) {
						$path = substr($d["caminho_imagem"], 1);
						$class = $key === 0 ? "slide--current" : "" ;

						echo "
							<div class=\"slide {$class}\" data-content=\"content-{$key}\">
								<div class=\"slide__mover\">
									<div class=\"zoomer flex-center\">
										<img class=\"zoomer__image\" src=\"{$path}\" alt=\"Linux\" height=\"400\" width=\"800\"/>
									</div>
								</div>
							</div>
						";
					}
				?>

				<nav class="slider__nav">
					<button class="button button--nav-prev"><i class="icon icon--arrow-left"></i><span class="text-hidden">Previous product</span></button>
					<button class="button button--zoom"><i class="icon icon--zoom"></i><span class="text-hidden">View details</span></button>
					<button class="button button--nav-next"><i class="icon icon--arrow-right"></i><span class="text-hidden">Next product</span></button>
				</nav>
			</section>
			<!-- /slider-->
			<section class="content">
				<?php
					foreach($data as $key => $d) {
						$path = substr($d["caminho_imagem"], 1);
						
						echo "
							<div class=\"content__item\" id=\"content-{$key}\">
								<img class=\"content__item-img rounded-right\" src=\"{$path}\" alt=\"Apple Watch Content\" />
								<div class=\"content__item-inner\">
									<h2>{$d["descricao_imagem"]}</h2>
									<p>{$d["informacoes_imagem"]}</p>
								</div>
							</div>
						";
					}
				?>
				<button class="button button--close"><i class="icon icon--circle-cross"></i><span class="text-hidden">Close content</span></button>
			</section>
		</div>

		<script src="./public/js/modernizr.custom.js"></script>
		<script src="./public/js/classie.js"></script>
		<script src="./public/js/dynamics.min.js"></script>
		<script src="./public/js/main.js"></script>
	</body>
</html>