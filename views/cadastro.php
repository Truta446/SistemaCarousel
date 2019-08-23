<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<title>Cadastro de fotos</title>

		<link rel="stylesheet" type="text/css" href="../public/css/opensans-font.css">
		<link rel="stylesheet" type="text/css" href="../public/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../public/css/style.css"/>
	</head>
	<body>
	<!-- Formulário para enviar vários arquivos:
<form action="recebearquivo.php" method="post" enctype="multipart/form-data">
Selecione os arquivos: <input type="file" name="arquivos[]" multiple="multiple">
<input type="submit" value="Enviar">
</form> -->
		<div class="page-content">
			<div class="form-v1-content">
				<div class="wizard-form">
					<form class="form-register" action="#" method="post">
						<div id="form-total">
							<!-- SECTION 1 -->
							<h2>
								<p class="step-icon"><span>01</span></p>
								<span class="step-text">Informações sobre a foto</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Informações sobre a foto</h3>
										<p>Insira as informações da foto para para serem adicionadas em seu rodapé.</p>
									</div>
									<div class="form-row">
										<div class="form-holder">
											<fieldset>
												<legend>Título da imagem</legend>
												<input type="text" class="form-control" id="title_image" name="title_image" placeholder="Insira o nome da imagem" required>
											</fieldset>
										</div>
										<div class="form-holder">
											<fieldset>
												<legend>Last Name</legend>
												<input type="text" class="form-control" id="last-name" name="last-name" placeholder="Last Name" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Data</legend>
												<input type="text" name="your_email" id="your_email" class="form-control" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}" placeholder="example@email.com" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<fieldset>
												<legend>Local</legend>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="+1 888-999-7777" required>
											</fieldset>
										</div>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-2">
											<input type="text" class="form-control input-border" id="ssn" name="ssn" placeholder="SSN" required>
										</div>
									</div>
								</div>
							</section>
							<!-- SECTION 2 -->
							<h2>
								<p class="step-icon"><span>02</span></p>
								<span class="step-text">Upload das imagens</span>
							</h2>
							<section>
								<div class="inner">
									<div class="wizard-header">
										<h3 class="heading">Connect Bank Account</h3>
										<p>Please enter your infomation and proceed to the next step so we can build your accounts.</p>
									</div>
									<div class="form-row">
										<div class="form-holder form-holder-1">
											<input type="text" name="find_bank" id="find_bank" placeholder="Find Your Bank" class="form-control" required>
										</div>
									</div>
									<div class="form-row-total">
										<div class="form-row">
											<div class="form-holder form-holder-2 form-holder-3">
												<input type="radio" class="radio" name="bank-1" id="bank-1" value="bank-1" checked>
												<label class="bank-images label-above bank-1-label" for="bank-1">
													<img src="../public/images/form-v1-1.png" alt="bank-1">
												</label>
												<input type="radio" class="radio" name="bank-2" id="bank-2" value="bank-2">
												<label class="bank-images label-above bank-2-label" for="bank-2">
													<img src="../public/images/form-v1-2.png" alt="bank-2">
												</label>
												<input type="radio" class="radio" name="bank-3" id="bank-3" value="bank-3">
												<label class="bank-images label-above bank-3-label" for="bank-3">
													<img src="../public/images/form-v1-3.png" alt="bank-3">
												</label>
											</div>
										</div>
										<div class="form-row">
											<div class="form-holder form-holder-2 form-holder-3">
												<input type="radio" class="radio" name="bank-4" id="bank-4" value="bank-4">
												<label class="bank-images bank-4-label" for="bank-4">
													<img src="../public/images/form-v1-4.png" alt="bank-4">
												</label>
												<input type="radio" class="radio" name="bank-5" id="bank-5" value="bank-5">
												<label class="bank-images bank-5-label" for="bank-5">
													<img src="../public/images/form-v1-5.png" alt="bank-5">
												</label>
												<input type="radio" class="radio" name="bank-6" id="bank-6" value="bank-6">
												<label class="bank-images bank-6-label" for="bank-6">
													<img src="../public/images/form-v1-6.png" alt="bank-6">
												</label>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
					</form>
				</div>
			</div>
		</div>
		<script src="../public/js/jquery-3.3.1.min.js"></script>
		<script src="../public/js/jquery.steps.js"></script>
		<script src="../public/js/main_cadastro.js"></script>
	</body>
</html>