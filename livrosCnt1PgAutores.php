<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/assets/icon.svg" type="image/x-icon">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <main>
    <div class='container'>
      <?php include 'include/nav.php'; ?>
      <?php include 'include/bannerLivros.php'; ?>

      <article class="row cntr">
        <div class=" sla col-12">
          <h2 class="titulos">Uma Odisseia no Espaço</h2>
          <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://www.papodecinema.com.br/filmes/2001-uma-odisseia-no-espaco/">Papodecinema.com</a></small>
        </div>

        <figure class="col-xl-2 col-md-4 col-sm-5">
          <img class="brdr" src="img/livros/odisseia.webp" alt="Imagem da capa do livro 'Uma Odisseia no Espaço">
          <figcaption> Uma Odisseia no Espaço, 1990</figcaption>
        </figure>
        <div class="col-xl-4 col-md-7 col-sm-12">
          <h3> Sinopse </h3>
          <p>Em 2001, em uma missão espacial rumo ao planeta Júpiter, os astronautas Dave Bownam e Frank Poole se vêem à mercê do computador HAL 9000, que controla a nave. HAL cometeu um erro, mas recusa-se a admiti-lo. Seu orgulho de máquina perfeita impede que aceite a evidência da falha. Por isso, para encobrir a própria e insuspeitada imperfeição, começa a eliminar os membros da equipe.</p>
        </div>

    </div>
    <div class=" row justify-content-center">
      <aside class="principais xl-col-6 md-col-11 sm-col-12">
        <h3> Crítica </h3>
        <p>No começo reina a selvageria. Homens pré-históricos dão os primeiros passos rumo à evolução fundada na dominação do mais fraco e na conquista territorial, ambas tão caras à nossa espécie. O osso, fragmento do animal morto para saciar a necessidade do alimento, transforma-se em arma ao prolongar o corpo do agressor que mata o semelhante para mostrar superioridade. É a lei do mais forte. Numa das grandes transições do cinema, Stanley Kubrick transforma o fêmur numa nave, elipse responsável por nos jogar da aurora do homem à era dos descobrimentos extra-atmosféricos. O futuro está no espaço, nas estações repletas de inovações, no desvendamento do cosmos e de seus mistérios. 2001: Uma Odisseia no Espaço aborda o universo, desde os primórdios até a primazia tecnológica, utilizando viés metafísico.</p>
      </aside>
    </div>

    <section>
      <div>
        <h2 class="titulos">Outros lidos</h2>
      </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <article class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h3>Encontro com Rama</h3>
            <p>Após a terrível colisão de um meteorito contra o continente europeu, líderes mundiais e cientistas criaram um sistema de monitoramento para evitar que uma catástrofe voltasse...</p>
            <a href="livrosCnt2PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/livro2.webp" alt="Imagem da capa do livro 'Encontro com Rama'">
            <figcaption> Encontro com Rama, 1990</figcaption>
          </figure>
        </article>
        <article class="noticia rounded-3 border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <small>Sinopse</small>
            <h3>Fim da Infância</h3>
            <p>Um dia comum, uma “horda” de extraterrestres pairam sobre as principais cidades do mundo, oferecendo uma mão amiga. Oferecendo o nirvana em vida, o paraíso perdido há tempos. A erradicação da fome, o fim das guerras...</p>
            <a href="livrosCnt3PgAutores.php">Continuar lendo...</a>
          </div>
          <figure>
            <img src="img/livros/fim.webp" alt="Imagem da capa do livro 'Fim da Infância'">
            <figcaption> Fim da infância, 1980</figcaption>
          </figure>
        </article>
      </div>
    </section>
    </div>
    </div>

    <div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Notícias</h2>
    </div>

    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/noticiaAnimacao1.php'; ?>
      <?php include 'include/noticiaFilme2.php'; ?>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
      <?php include 'include/livrosNoticia1.php'; ?>
      <?php include 'include/noticiaAnimacao3.php'; ?>
    </div>
    <?php include 'include/footer.php'; ?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>