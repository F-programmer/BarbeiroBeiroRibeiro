<?php
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
  <link rel="stylesheet" href="./../../src/styles/reset.css" />

  <link rel="stylesheet" href="./src/components/style.css">
  <link rel="stylesheet" href="./src/components/prism.css">
  <link rel="stylesheet" href="./src/components/chosen.css">

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
    <div id="btn-close-modal" class="close-animatedModal">
      <label id="fechar-modal"><i class="fas fa-times-circle"></i></label>
    </div>

    <div id="modal" class="modal-content">
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
          <li><a href="../login/login.php">Login</a></li>
          <li><a href="../galeria/index.php">Galeria</a></li>
          <li class='active'><a href="#">Fazer Agendamento</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="login">
        <form action="cadastrarAgendamento.php" method="POST" id="login_form">
          <header>
            <h3>Agende um serviço conosco!</h3>
          </header>

          <fieldset class="fieldCpf">
            <label for="txtCpf">CPF: </label>
            <input type="text" id="txtCpf" name="txtCpf" placeholder="Ex: 123.456.789-00" required>
          </fieldset>

          <div class="field-inline">
            <fieldset>
              <label for="txtDate">Data: </label>
              <input type="date" name="txtDate" id="txtDate" required>
            </fieldset>
            <fieldset>
              <label for="txtTime">Horário: </label>
              <input type="time" name="txtTime" id="txtTime" required>
            </fieldset>
          </div>

          <fieldset class="no-styles">
            <label for="comboServico">Serviço Relacionado</label>
            <select data-placeholder="Escolha um serviço" class="chosen-select" tabindex="2" name="comboServico">
              <?php
							$dadosServicos = DataProvider::listarServicos();
							array_map(function ($item) {
								echo '<option value="' . $item[0] . '">' . $item[1] . '</option>';
							}, $dadosServicos);
							?>
            </select>
          </fieldset>
          
          <!-- <fieldset class="price" id="price">
            <label>Valor: </label>
            <label id="randonValue"></label>
            <input type="text" id="txtCpf" name="txtCpf" placeholder=">
          </fieldset> -->

          <div id="initial-btns" class="btn">
            <button class="rotate" type="reset"><i class="fas fa-arrow-circle-right"></i></button>
            <button id="btn-next" type="submit"><i class="fas fa-arrow-circle-right"></i></button>
          </div>
          <div id="final-btns" class="btn hidden">
            <button type="button" id="rollback">Corrigir</i></button>
            <button id="btn-cadastrar" type="submit">Confirmar</i></button>
          </div>
        </form>

      </div>

    </main>
  </div>

  <script src="./src/components/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="./src/components/chosen.jquery.js" type="text/javascript"></script>
  <script src="./src/components/init.js" type="text/javascript" charset="utf-8"></script>
  <script src="./src/components/prism.js" type="text/javascript" charset="utf-8"></script>

  <script src="./../../src/components/modal/animatedModal.js"></script>
  <script src="./src/validate.js"></script>
  <?php
	echo ('<script>
		// atribuindo o efeito ao modal
		$("#demo01").animatedModal();
	</script>');
	?>
</body>

</html>