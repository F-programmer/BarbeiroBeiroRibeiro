<!DOCTYPE html>
<html lang="pt-BR">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bigodudu</title>
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Ovo&family=Poppins:wght@500&family=Ubuntu&display=swap" rel="stylesheet" />
	<script src="https://kit.fontawesome.com/326a212606.js" crossorigin="anonymous"></script>

	<!-- styles -->
	<link rel="stylesheet" href="./../../src/styles/reset.css" />
	<link rel="stylesheet" href="./../../src/styles/default.css" />

	<link rel="stylesheet" href="./../../src/components/modal/animate.min.css" />
	<link rel="stylesheet" href="./../../src/components/modal/styles.css" />

	<link rel="stylesheet" href="./../../src/components/menu/style.css" />

	<link rel="stylesheet" href="./src/cadastro.css" />


	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>


	<div class="splash-screen"></div>
	<div class="page">
		<header>
			<nav>
				<div class="title-page">
					<img src="./../../src/assets/bigode.svg" alt="" />
				</div>
				<ul>
					<li><a href="./../../index.php">Home</a></li>
					<li><a href="../login/login.php">Login</a></li>
					<li class='active'><a href="./">Cadastro</a></li>
				</ul>
			</nav>
		</header>

		<main>
			<div id="cadastro">
				<form action="" method="POST" id="cadastro_form">
					<header>
						<h3>Cadastro!</h3>
					</header>

					<fieldset>
						<label for="txtNome">Nome: </label>
						<input type="text" id="txtNome" name="txtNome" placeholder="Seu nome" required>
					</fieldset>

					<fieldset>
						<label for="txtPass">Senha: </label>
						<div class="pseudo-field">
							<input class="pseudo" type="password" id="txtPass" name="txtPass" placeholder="Insira a senha" required>
							<label id="btn-pass"><i class="fas fa-eye"></i></label>
						</div>
					</fieldset>

					<fieldset>
						<label for="txtNome">Email: </label>
						<input type="email" id="txtEmail" name="txtEmail" placeholder="exemplo@gmail.com" required>
					</fieldset>

					<fieldset>
						<label for="txtNumeroContato">Número para contato: </label>
						<input type="Numero" id="txtNumeroContato" name="txtNumeroContato" placeholder="Exemplo: (11)940028922" required>
					</fieldset>

					<div id="btn">
						<button type="reset">Cancelar</button>
						<button id="btn-next" type="submit">Enviar</button>
					</div>
				</form>

			</div>

		</main>
	</div>

	<script src="./src/password.js"></script>

</body>

</html>