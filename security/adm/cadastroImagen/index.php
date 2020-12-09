<?php
include_once('../../utils/sentinel.php');
require_once '../../utils/autoloader.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Bigodudu</title>
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Ovo&family=Poppins:wght@500&family=Ubuntu&display=swap"
    rel="stylesheet" />
  <script src="https://kit.fontawesome.com/326a212606.js" crossorigin="anonymous"></script>

  <!-- styles -->
  <link rel="stylesheet" href="../../../src/styles/reset.css" />

  <link rel="stylesheet" href="./src/components/style.css">
  <link rel="stylesheet" href="./src/components/prism.css">
  <link rel="stylesheet" href="./src/components/chosen.css">

  <link rel="stylesheet" href="../../../src/styles/default.css" />
  <link rel="stylesheet" href="../../../src/components/modal/animate.min.css" />
  <link rel="stylesheet" href="../../../src/components/modal/styles.css" />
  <link rel="stylesheet" href="../../../src/components/menu/style.css" />

  <link rel="stylesheet" href="./src/styles.css" />
  <link rel="stylesheet" href="./src/upload.css" />

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

  <div class="splash-screen"></div>
  <div class="page">
    <header>
      <nav>
        <div class="title-page">
          <img src="./../../../src/assets/bigode.svg" alt="" />
        </div>
        <ul>
          <li><a href="./../home/index.php">Home</a></li>
          <li><a href="../cadastroCliente/index.php">Cliente</a></li>
          <li><a href="../cadastroServico/index.php">Serviço</a></li>
          <li class='active'><a href="../cadastroImagen/index.php">Imagens</a></li>
          <li><a href="../../utils/logout.php">Sair</a></li>
        </ul>
      </nav>
    </header>

    <main>
      <div id="cadastro">
        <form action="./cadastrar-imagen.php" method="POST" enctype="multipart/form-data" id="cadastro_form">
          <header>
            <h3>Cadastro de Imagens!</h3>
          </header>

          <fieldset>
            <span>(Opcional)</span>
            <label for="txtDescricaoImagen">Descrição da Imagem: </label>
            <input type="text" id="txtDescricaoImagen" name="txtDescricaoImagen"
              placeholder="Ex: Foto de serviço realizado." required>
          </fieldset>

          <fieldset class="no-styles">
            <label for="comboServico">Serviço Relacionado</label>
            <select data-placeholder="Escolha um serviço" class="chosen-select" tabindex="2" name="comboServico">
              <?php
							$dadosServicos = DataProvider::listarServicos();
							if (count($dadosServicos) == 0) {
								echo ('<script>
									$("#modal").append(
										"<h3>Não há serviços cadastrados!</h3>"
									);
									$("#modal").append(
										"<h4>Por favor, cadastre algum serviço antes de cadastrar as imagens</h4>"
									);
									$("#demo01").click();
									const delay = setTimeout(() => {
										window.location.href = "../cadastroServico/index.php";
									}, 4000);
								</script>');
							}
							array_map(function ($item) {
								echo '<option value="' . $item[0] . '">' . $item[1] . '</option>';
							}, $dadosServicos);
							?>
            </select>
          </fieldset>

          <fieldset class="file">
            <label id="selected-file">Imagen</label>

            <div class="area-upload">
              <label for="upload-file" class="label-upload">
                <div class="icon-upload">
                  <i class="fas fa-images"></i>
                </div>
                <div class="title-upload">
                  <span>Arraste ou solte os arquivos aqui</span>
                  <span>ou</span>
                  <button type="button" id="escolher-arquivo">Escolher Arquivo</button>
                </div>
              </label>
              <input type="file" accept="image/jpg,image/png,image/jpeg,image/bitmap" id="upload-file" name="inputFile"
                required />
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

  <script src="./src/components/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="./src/components/chosen.jquery.js" type="text/javascript"></script>
  <script src="./src/components/init.js" type="text/javascript" charset="utf-8"></script>
  <script src="./src/components/prism.js" type="text/javascript" charset="utf-8"></script>

  <script src="./src/uploadFile.js"></script>
  <script>
  // quando o form for enviado
  $('#cadastro_form').submit((e) => {
    const nomeServico = $('#txtDescricaoImagen').val();
    let state = true;
    const forbiden = '!%()/#$&*;.@';
    [...forbiden].map(item => {
      if ([...nomeServico].indexOf(item) > -1) {
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
	if (isset($_GET['img_cad'])) {
		if ($_GET['img_cad']) {
			echo ('<script>
				$("#modal").append(
					"<h3>Imagem Cadastrada!</h3>"
				);
				$("#demo01").click();
				const delay = setTimeout(() => {
					window.location.href = "./index.php";
				}, 3000);
			</script>');
		} else {
			echo ('<script>
				$("#modal").append(
					"<h3>Um erro ocorreu, a imagem não foi cadastrada!</h3>"
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