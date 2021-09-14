<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link rel="stylesheet"  href="<?=base_url()?>assets/css/login.css">
	<title>Login</title>
</head>
<body>
			<div class="container">
				<div class="row mt-4">
					<div class="col-8 offset-2">
						<div class="jumbotron form-top">
							<h1 class="display-4"><?= $data['title']= $this->lang->line('title')  ?></h1> 
							<hr class="my-4">
							<form action="<?=base_url('entrar')?>" method="post">
								<div class="form-group">
											<div class="row">
												<label for="email"><?= $data['labelEmail']= $this->lang->line('labelEmail')  ?></label>
												<input type="email" id="email" name="email" class="form-control" placeholder="<?= $data['placeEmail']= $this->lang->line('placeEmail')  ?>">
											</div>
								</div>
								<div class="form-group">
											<div class="row">
												<label for="password"><?= $data['labelPassword']= $this->lang->line('labelPassword')  ?></label>
												<input type="password" id="password" name="password" class="form-control">
											</div>
								</div>
								<div class="form-group">
											<div class="row">
											<button class="btn btn-outline-success btn-block" type="submit" ><?= $data['buttonSignIn']= $this->lang->line('buttonSignIn')  ?></button>
											</div>
								</div>
							<hr class="my-4">
								<div class="form-group">
											<div class="row">
											<a  href="<?=base_url()?>cadastro" class="btn btn-outline-primary btn-block" ><?= $data['buttonRegister']= $this->lang->line('buttonRegister')  ?></a>
											</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="offset-4 col-2">
					<a href="<?=base_url('login')?>" class="btn btn-primary btn-block">PT-BR</a>
				</div>
				<div class="col-2">
					<a href="<?=base_url('loginUs')?>" class="btn btn-primary btn-block">EN-US</a>
			</div>
		</div>
</body>
</html>
