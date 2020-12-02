<?php

use function PHPSTORM_META\map;

include_once('../../utils/sentinel.php');
require_once '../../utils/autoloader.php';
?>

<html>

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
	<link rel="stylesheet" href="../../../src/components/menu/style.css" />
	<link rel="stylesheet" href="../../../src/components/modal/animate.min.css" />
	<link rel="stylesheet" href="../../../src/components/modal/styles.css" />

	<link rel="stylesheet" href="./src/styles.css" />

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../../../src/components/modal/animatedModal.js"></script>

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

	<?php
	echo ('<script>
		// atribuindo o efeito ao modal
		$("#demo01").animatedModal();
	</script>');
	?>

	<header>
		<nav>
			<div class="title-page">
				<img src="./../../../src/assets/bigode.svg" alt="" />
			</div>
			<ul>
				<li><a href="./../home/index.php">Home</a></li>
				<li><a href="../cadastroCliente/index.php">Cliente</a></li>
				<li><a href="../cadastroServico/index.php">Serviço</a></li>
				<li><a href="../cadastroImagen/index.php">Imagens</a></li>
				<li class='active'><a href="../galeria/index.php">Galeria</a></li>
				<li><a href="../../utils/logout.php">Sair</a></li>
			</ul>
		</nav>
	</header>


	<div id="titulo">
		<h1>Galeria</h1>
	</div>

	<container class="galeria-container">

		<section class="galeria-itens">
			<?php
			$imagens = DataProvider::listarImagens();
			$par = true;
			foreach ($imagens as &$item) {
				$content = '<div class="item-container "' . (($par) ? 'item-left' : 'item-right') . '>'

					. '<div class="img">'

					. '<img src="../../../'
					. $item['urlImagem'] . '/' . $item['nomeImagem'] . '"'
					. ' alt ="' . $item['descImagem'] . '"'
					. ' title ="' . $item['descImagem'] . '"'
					. ' class="item"'
					. '>'
					. '</div>'

					. '<div class="item-titulo">'

					. '<div class="titulo">'
					. $item['descricaoServico']
					. '<span>' . $item['descImagem'] . '<span>'
					. '</div>'

					. '</div>'
					. '</div>';

				echo $content;
			}
			?>
		</section>

	</container>

</body>

</html>
