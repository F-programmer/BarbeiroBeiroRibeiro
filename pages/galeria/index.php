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
  <link href="https://fonts.googleapis.com/css2?family=Ovo&family=Poppins:wght@500&family=Ubuntu&display=swap"
    rel="stylesheet" />
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

  <main>
    <section>
      <?php

			$imagens = DataProvider::listarImagens();

			foreach ($imagens as &$item) {
				$html = '<div class="grid-item"><div class="title-card"><span class="title">';
				$html .= $item['nomeImagem'];
				$html .= '</span><span class="decription">';
				$html .= $item['descImagem'];
				$html .= '</span></div><div class="imagem-card">';
				$html .= '<img src="../../' . $item['urlImagem'] . "/" . $item['nomeImagem'] . '">';
				$html .= '<span class="hidden-text">';
				$html .= $item['descricaoServico'];
				$html .= '</span></div></div></div>';

				echo $html;
			}

			?>
      <div class="grid-item">
        <div class="title-card">
          <span class="title">Essa imagem</span>
          <span class="decription">Essa imagem eh do Leo Valdez, um personagem que eu gosto</span>
        </div>
        <div class="imagem-card">
          <img src="https://pm1.narvii.com/6473/654fa17f4bc1df6824e23f15d472d133bc4c6899_00.jpg">
          <span class="hidden-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis aliquid quisquam rerum maiores
            facilis nam, soluta, qui a sed adipisci nulla labore ab eveniet veniam doloremque quibusdam veritatis dicta!
            Quidem.
          </span>
        </div>
      </div>
      </div>
    </section>
  </main>
</body>

</html>