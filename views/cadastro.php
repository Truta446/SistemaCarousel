<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Carousel System - Cadastro</title>
		<link rel="shortcut icon" href="../public/images/favicon.ico">

		<link rel="stylesheet" type="text/css" href="../public/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="../public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="../public/vendor/animate/animate.css">
		<link rel="stylesheet" type="text/css" href="../public/vendor/css-hamburgers/hamburgers.min.css">
		<link rel="stylesheet" type="text/css" href="../public/vendor/animsition/css/animsition.min.css">
		<link rel="stylesheet" type="text/css" href="../public/vendor/select2/select2.min.css">
		<link rel="stylesheet" type="text/css" href="../public/vendor/daterangepicker/daterangepicker.css">
		<link rel="stylesheet" type="text/css" href="../public/css/util.css">
		<link rel="stylesheet" type="text/css" href="../public/css/main.css">
	</head>
	<body>
		<div class="container-contact100">
			<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="../public/images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

			<button class="contact100-btn-show">
				<i class="fa fa-envelope-o" aria-hidden="true"></i>
			</button>

			<div class="wrap-contact100">
				<button class="contact100-btn-hide">
					<i class="fa fa-close" aria-hidden="true"></i>
				</button>

				<form class="contact100-form validate-form" action="../controllers/insereController.php" method="post" enctype="multipart/form-data">
					<span class="contact100-form-title">
						Inserção de Imagens
					</span>

					<div class="wrap-input100 validate-input" data-validate="A descrição é obrigatória.">
						<span class="label-input100">Descrição</span>
						<input class="input100" type="text" name="description_image" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">Informações adicionais</span>
						<input class="input100" type="text" name="info_image">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "O arquivo é obrigatório.">
						<span class="label-input100">Arquivo</span>
						<input type="file" class="input100" name="file_image"></input>
						<span class="focus-input100"></span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							<span>
								Salvar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</form>
			</div>
		</div>

		<div id="dropDownSelect1"></div>

		<script src="../public/vendor/jquery/jquery-3.2.1.min.js"></script>
		<script src="../public/vendor/animsition/js/animsition.min.js"></script>
		<script src="../public/vendor/bootstrap/js/popper.js"></script>
		<script src="../public/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="../public/vendor/select2/select2.min.js"></script>
		<script src="../public/vendor/daterangepicker/moment.min.js"></script>
		<script src="../public/vendor/daterangepicker/daterangepicker.js"></script>
		<script src="../public/vendor/countdowntime/countdowntime.js"></script>
		<script src="../public/js/googlemaps.js"></script>
		<script src="../public/js/map-custom.js"></script>
		<script src="../public/js/mainCadastro.js"></script>
	</body>
</html>
