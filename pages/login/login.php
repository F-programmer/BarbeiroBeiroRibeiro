<html>

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

	<link rel="stylesheet" href="./src/login.css" />


	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
	<a id="demo01" href="#animatedModal"></a>

	<div id="animatedModal">
		<!--THIS IS IMPORTANT! to close the modal, the class name has to match the name given on the ID -->
		<div id="btn-close-modal" class="close-animatedModal">
			<label id="fechar-modal"><i class="fas fa-times-circle"></i></label>
		</div>

		<div id="modal" class="modal-content">
			<!--Your modal content goes here-->
		</div>
	</div>

	<div class="splash-screen"></div>
	<div class="page">
		<header>
			<nav>
				<div class="title-page">
					<img src="./../../src/assets/bigode.svg" alt="" />
				</div>
				<ul>
					<li><a href="./../../index.php">Home</a></li>
					<li class='active'><a href="./">Login</a></li>
					<li><a href="../galeria/index.php">Galeria</a></li>
					<li><a href="../agendamento/index.php">Fazer Agendamento</a></li>
				</ul>
			</nav>
		</header>

		<main>
			<div id="login">
				<form action="./src/validateLogin.php" method="POST" id="login_form">
					<header>
						<h3>Faça Login!</h3>
					</header>

					<fieldset>
						<label for="txtNome">Nome: </label>
						<input type="text" id="txtNome" name="txtNome" placeholder="Seu nome: adm" required>
					</fieldset>

					<fieldset>
						<label for="txtPass">Senha: </label>
						<div class="pseudo-field">
							<input class="pseudo" type="password" id="txtPass" name="txtPass" placeholder="Insira a senha: 1234" required>
							<label id="btn-pass"><i class="fas fa-eye"></i></label>
						</div>
					</fieldset>

					<div id="btn">
						<button type="reset">Cancelar</button>
						<button id="btn-next" type="submit">Enviar</button>
					</div>
				</form>

			</div>

		</main>
	</div>

	<script src="./../../src/components/modal/animatedModal.js"></script>
	<script src="./src/validate.js"></script>
</body>

</html>
