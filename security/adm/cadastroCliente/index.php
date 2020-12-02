<?php
include_once('../../utils/sentinel.php');
?>

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
	<link rel="stylesheet" href="../../../src/styles/reset.css" />
	<link rel="stylesheet" href="../../../src/styles/default.css" />
	<link rel="stylesheet" href="../../../src/components/modal/animate.min.css" />
	<link rel="stylesheet" href="../../../src/components/modal/styles.css" />
	<link rel="stylesheet" href="../../../src/components/menu/style.css" />
	<link rel="stylesheet" href="./src/styles.css" />


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
					<img src="./../../../src/assets/bigode.svg" alt="" />
				</div>
				<ul>
					<li><a href="./../home/index.php">Home</a></li>
					<li class='active'><a href="../cadastroCliente/index.php">Cliente</a></li>
					<li><a href="../cadastroServico/index.php">Serviço</a></li>
					<li><a href="../cadastroImagen/index.php">Imagens</a></li>
					<li><a href="../../utils/logout.php">Sair</a></li>
				</ul>
			</nav>
		</header>

		<main>
			<div id="cadastro">
				<form action="cadastrar-cliente.php" method="POST" id="cadastro_form">
					<header>
						<h3>Cadastro!</h3>
					</header>

					<fieldset>
						<label for="txtNome">Nome: </label>
						<input type="text" id="txtNomeCliente" name="txtNomeCliente" placeholder="Seu nome" required maxlength="45">
					</fieldset>

					<fieldset>
						<label for="txtNumeroContato">CPF: </label>
						<input type="Numero" id="txtCpfCliente" name="txtCpfCliente" placeholder="Digite seu CPF" required maxlength="14">
					</fieldset>

					<fieldset>
						<label for="txtNome">Email: </label>
						<input type="email" id="txtEmailCliente" name="txtEmailCliente" placeholder="exemplo@gmail.com" required maxlength="40">
					</fieldset>

					<fieldset>
						<label for="txtNumeroContato">Número para contato: </label>
						<input type="text" id="txtFoneCliente" name="txtFoneCliente" placeholder="Exemplo: (11) 91234-5678" required maxlength="15">
					</fieldset>

					<div id="btn">
						<button type="reset">Cancelar</button>
						<button id="btn-next" type="submit">Enviar</button>
					</div>
				</form>

			</div>

		</main>
	</div>

	<script src="../../../src/components/modal/animatedModal.js"></script>

	<script>
		// atribuindo o efeito ao modal
		$("#demo01").animatedModal();
		// quando o form for enviado
		$('#cadastro_form').submit((e) => {

			const nomeCliente = $('#txtNomeCliente').val();
			const cpfCliente = $('#txtCpfCliente').val();
			const emailCliente = $('#txtEmailCliente').val();
			const telefoneCliente = $('#txtFoneCliente').val();
			let state = true;
			const forbiden = '!%/#$&*;';
			[...forbiden].map(item => {
				if ([...nomeCliente].indexOf(item) > -1) {
					state = false;
					return;
				}
				if ([...cpfCliente].indexOf(item) > -1) {
					state = false;
					return;
				}
				if ([...emailCliente].indexOf(item) > -1) {
					state = false;
					return;
				}
				if ([...telefoneCliente].indexOf(item) > -1) {
					state = false;
					return;
				}
			});

			if (state) {
				// ajax
				// nada, envia, tamo sem ajax
			} else {
				// cancela o evento
				e.preventDefault();
				$('#modal').empty();
				$('#modal').append(
					'<h3>Não utilize caracteres especiais!</h3>'
				);
				$('#demo01').click();

			}
		});
	</script>

	<?php
	if (isset($_GET['cli_cad'])) {
		if ($_GET['cli_cad']) {
			echo ('<script>
				$("#modal").append(
					"<h3>Cliente Cadastrado!</h3>"
				);
				$("#demo01").click();
				const delay = setTimeout(() => {
					window.location.href = "./index.php";
				}, 3000);
			</script>');
		} else {
			echo ('<script>
				$("#modal").append(
					"<h3>Um erro ocorreu, o cliente não foi cadastrado!</h3>"
				);
				$("#demo01").click();
				const delay = setTimeout(() => {
					window.location.href = "./index.php";
				}, 3000);
			</script>');
		}
	}
	?>

</body>

</html>