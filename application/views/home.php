<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="<?=base_url()?>/assets/css/home.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>Home</title>
</head>
<body>
	<?php
		if($this->session->userdata('logado')){
	?>
			<div class="container">
				<div class="row mt-4">
					<div class="col-8">
							<h1>Seja Bem Vindo <?=$_SESSION['logado']['nm_usuario']?> ! </h1>
					</div>
					<div class="col-4">
							<a href="<?=base_url("sair")?>" class="btn btn-warning btn-block">Sair</a>
					</div>
				</div>
					<div class="row">
						<div class="col-12">
							<h3>Cadastro de Endereço</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
						<form action="<?=base_url('inseriraddress')?>" method="post">
								<div class="form-group">
										<label for="">Digite seu Cep:</label>
										<input type="text" class="form-control" name="cep" id="cep"/>
								</div>
						</div>
						<div class="col-4">
							<button class="btn btn-primary btn-block search" id="buscar">Buscar</button>
						</div>
					</div>
					<div class="row">
							<div class="col-12">
								<label for="">Rua:</label>
								<input type="text" class="form-control" name="rua" id="rua"/>
							</div>
					</div>
					<div class="row">
							<div class="col-2">
								<label for="">Número:</label>
								<input type="text" class="form-control" id="number" name="number_home"/>
							</div>
							<div class="col-4">
								<label for="">Bairro:</label>
								<input type="text" class="form-control" id="bairro" name="district"/>
							</div>
							<div class="col-4">
								<label for="">Cidade:</label>
								<input type="text" class="form-control" id="cidade" name="city"/>
							</div>
							<div class="col-2">
								<label for="">Estado:</label>
								<input type="text" class="form-control" id="estado" name="uf_state" />
							</div>
					</div>
					<div class="row">
							<div class="col-6">
									<button class="btn btn-success btn-block search" type="submit">Salvar</button>
							</div>
							</form>
							<div class="col-6">
									<button class="btn btn-danger btn-block search" id="cancelar" >Cancelar</button>
							</div>
					</div>
			</div>
			
	<?php
		}else{
			redirect(base_url('login'));
		}
	?>

		<script src="<?=base_url()?>/assets/js/cep.js"></script>
</body>
</html>
