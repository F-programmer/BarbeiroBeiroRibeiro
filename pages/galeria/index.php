<?php

use function PHPSTORM_META\map;

//include_once('../../utils/sentinel.php');
require_once '../../security/utils/autoloaderGaleria.php';
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
	<link rel="stylesheet" href="../../src/styles/reset.css" />
	<link rel="stylesheet" href="../../src/styles/default.css" />
	<link rel="stylesheet" href="../../src/components/menu/style.css" />
	<link rel="stylesheet" href="../../src/components/modal/animate.min.css" />
	<link rel="stylesheet" href="../../src/components/modal/styles.css" />

	<link rel="stylesheet" href="./src/styles.css" />

	<!-- scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="../../../src/components/modal/animatedModal.js"></script>

</head>

<body>

	<header>
		<nav>
			<div class="title-page">
				<img src="../../src/assets/bigode.svg" alt="" />
			</div>
			<ul>
				<li><a href="../../index.php">Home</a></li>
				<li><a href="../login/login.php">Login</a></li>
				<li class='active'><a href="../cadastroServico/index.php">Galeria</a></li>
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

					. '<img src="../../'
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
