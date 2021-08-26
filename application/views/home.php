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
				<form action="">
					<div class="row">
						<div class="col-12">
							<h3>Cadastro de Enderço</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-8">
							<div class="form-group">
									<label for="">Digite seu Cep:</label>
									<input type="text" class="form-control">
							</div>
						</div>
						<div class="col-4">
							<button class="btn btn-primary btn-block search">Buscar</button>
						</div>
					</div>
					<div class="row">
							<div class="col-12">
								<label for="">Rua:</label>
								<input type="text" class="form-control" />
							</div>
					</div>
					<div class="row">
							<div class="col-2">
								<label for="">Número:</label>
								<input type="text" class="form-control" />
							</div>
							<div class="col-4">
								<label for="">Bairro:</label>
								<input type="text" class="form-control" />
							</div>
							<div class="col-4">
								<label for="">Cidade:</label>
								<input type="text" class="form-control" />
							</div>
							<div class="col-2">
								<label for="">Estado:</label>
								<input type="text" class="form-control" />
							</div>
					</div>
					<div class="row">
							<div class="col-6">
									<button class="btn btn-success btn-block search">Salvar</button>
							</div>
							<div class="col-6">
									<button class="btn btn-danger btn-block search">Cancelar</button>
							</div>
					</div>
				</form>
			</div>
			
	<?php
		}else{
			redirect(base_url('login'));
		}
	?>

</body>
</html>
