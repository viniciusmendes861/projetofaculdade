<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Login - Pizzaria</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<style>
		
		body {
			background-color: #ffe5b4;
			font-family: Arial, sans-serif;
		}

		
		.login {
			width: 100%;
			height: 100vh;
			display: flex;
			align-items: center;
			justify-content: center;
			background-image: url('https://example.com/imagem-pizzaria.jpg'); 
			background-size: cover;
			background-position: center;
		}

		
		.card {
			background-color: rgba(255, 255, 255, 0.9);
			border-radius: 10px;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
		}

		
		h3 {
			color: #b22222;
			text-align: center;
		}

		
		label {
			color: #8b4513; 
		}

		
		.btn-primary {
			background-color: #b22222;
			border-color: #b22222;
		}

		
		.btn-primary:hover {
			background-color: #8b0000;
			border-color: #8b0000;
		}
	</style>
</head>
<body>
	<div class="login">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 offset-lg-4">
					<div class="card">
						<div class="card-body">
							<h3>Login</h3>
						</div>
						<div class="card-body">
							<form action="login.php" method="POST">
								<div class="mb-3">
									<label for="usuario">Usuário</label>
									<input type="text" id="usuario" name="usuario" class="form-control" placeholder="Digite seu usuário">
								</div>
								<div class="mb-3">
									<label for="senha">Senha</label>
									<input type="password" id="senha" name="senha" class="form-control" placeholder="Digite sua senha">
								</div>
								<div class="mb-3 text-center">
									<button type="submit" class="btn btn-primary">Entrar</button>
								</div>
							</form>
						</div>
					</div>	
				</div>
			</div>
		</div>	
	</div>	
</body>
</html>


