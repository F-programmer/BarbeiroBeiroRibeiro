<?php
include_once('../../utils/sentinel.php');
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
  <link rel="stylesheet" href="../../../src/styles/reset.css" />
  <link rel="stylesheet" href="../../../src/styles/default.css" />
  <link rel="stylesheet" href="../../../src/components/carrousel/style.css" />
  <link rel="stylesheet" href="../../../src/components/modal/animate.min.css" />
  <link rel="stylesheet" href="../../../src/components/modal/styles.css" />
  <link rel="stylesheet" href="../../../src/components/menu/style.css" />
  <link rel="stylesheet" href="src/home-style.css" />
  <!-- scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
  <div class="splash-screen"></div>
  <div class="page">
    <header>
      <nav>
        <div class="title-page">
          <img src="./../../../src/assets/bigode.svg" alt="" />
        </div>
        <ul>
          <li class='active'><a href="#">Home</a></li>
          <li><a href="../cadastroServico/index.php">Serviço</a></li>
          <li><a href="../cadastroImagen/index.php">Imagens</a></li>
          <li><a href="../../utils/logout.php">Sair</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <div class="titulo">
        Bem vindo(a), Gerencie seu site!
      </div>
      <section class="carrousel">
        <div class="carrousel-container">
          <div class="btn-container">
            <label id='btn-prev'><i class="fas fa-arrow-up"></i></label>
          </div>
          <div class="itens-container">
            <div class="item" id="item">
              <div class="line1">
                <h3 class="icon-item"><i class="fas fa-cut"></i></h3>
              </div>
              <div class="line2">
                <h4>"Ambiente espetacular, atendimento excelente"</h4>
              </div>
            </div>
            <div class="item" id="item">
              <div class="line1">
                <h3 class="icon-item"><i class="fas fa-cut"></i></h3>
              </div>
              <div class="line2">
                <h4>"Ambiente legal, atendimento excelente"</h4>
              </div>
            </div>
            <div class="item" id="item">
              <div class="line1">
                <h3 class="icon-item"><i class="fas fa-cut"></i></h3>
              </div>
              <div class="line2">
                <h4>"Ambiente top, atendimento excelente"</h4>
              </div>
            </div>
            <div class="item" id="item">
              <div class="line1">
                <h3 class="icon-item"><i class="fas fa-cut"></i></h3>
              </div>
              <div class="line2">
                <h4>"Ambiente bacana, atendimento excelente"</h4>
              </div>
            </div>
          </div>
          <div class="btn-container">
            <label id='btn-next'><i class="fas fa-arrow-up"></i></label>
          </div>
        </div>
      </section>

      <section id="sobreBarbearia" name="sobreBarbearia">
        <div class="container-row">
          <div class="item-texto">
            <div class="titulo">Sobre a Barbearia Ribeiro</div>
            <div class="texto">
              A Barbearia Ribeiro é a melhor barbearia da região
              excelente em executar sua função realizando diversos
              tipos de cortes deixando sua barba do jeito certo.
            </div>
          </div>
          <div class="item-container">
            <img src="./../../../src/assets/home-img1.png" alt="Barbearia">
          </div>
        </div>
        <div class="container-row">
          <div class="item-container">
            <img src="./../../../src/assets/home-img02.png" alt="Fazendo a barba">
          </div>
          <div class="item-texto">
            <div class="titulo">Sobre a Barbearia Ribeiro</div>
            <div class="texto">
              A Barbearia Ribeiro é a melhor barbearia da região
              excelente em executar sua função realizando diversos
              tipos de cortes deixando sua barba do jeito certo.
            </div>
          </div>
        </div>
      </section>
      <section id="mapa">
        <h4> Localização de nosso estabelecimento</h4>
        <div class="map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2490.957690505681!2d-46.39817244017515!3d-23.60247458322646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1spt-BR!2sbr!4v1598043462204!5m2!1spt-BR!2sbr"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
        </div>
      </section>
    </main>
  </div>
  </div>
  <script src="../../../src/components/carrousel/main.js"></script>
</body>

</html>