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
          <h2 class="titulos">Fim da Infância</h2>
          <small class='titulos mb-3 d-block small pb-2 border-bottom border-2'>Dezembro 01, 2022 by <a href="https://sessaodasdez.com.br/estante/o-fim-da-infancia-de-arthur-c-clarke/">sessãodas10.com</a></small>
        </div>
        <figure class="col-xl-2 col-md-3 col-sm-5">
          <img class="brdr" src="img/livros/Fim.webp" alt="Imagem da capa do livro 'fim da Infância'">
        </figure>
        <div class="col-xl-5 col-md-9 col-sm-12">
          <h3> Sinopse </h3>
          <p> Um dia comum, uma “horda” de extraterrestres pairam sobre as principais cidades do mundo, oferecendo uma mão amiga. Oferecendo o nirvana em vida, o paraíso perdido há tempos. A erradicação da fome, o fim das guerras, a cura de doenças fatais e implacáveis. Tudo em troca de quê? Nada! Apenas política da boa vizinhança. Como todo novo regime, há uma certa resistência. Mas o que poderia os humanos fazer frente a todo esse potencial?</p>
        </div>
      </article>

      <div class=" row justify-content-center">
        <aside class="principais xl-col-7 md-col-11 sm-col-12">
          <h3> Crítica </h3>
          <p>
            O livro é desenvolvido em três grandes momentos, distribuído ao longo de 200 anos após a visita de nossos vizinhos. Os Seres Supremos — como são chamados — são benevolentes, pacientes e, apesar da aparente superioridade, não se relacionam com a humanidade de forma taxativa ou autoritária. E a forma como a humanidade pensou ser os alienígenas, não permitem que aceitem muito bem esse comportamento.</p>
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
              <h3>Uma Odisseia no Espaço</h3>
              <p>No começo reina a selvageria. Homens pré-históricos dão os primeiros passos rumo à evolução fundada na dominação do mais fraco e na conquista territorial, ambas tão caras à nossa espécie...</p>
              <a href="livrosCnt1PgAutores.php">Continuar lendo...</a>
            </div>
            <figure>
              <img src="img/livros/odisseia.webp" alt="Imagem da capa do Livro 'Uma Odisseia no espaço'">
              <figcaption> Uma Odisseia no Espaço, 1990</figcaption>
            </figure>
          </article>
          <article class="noticia rounded-3 border d-flex align-items-center">
            <div class="noticiaSeila d-flex flex-column">
              <small>Sinopse</small>
              <h3>Encontro com Rama</h3>
              <p>Após a terrível colisão de um meteorito contra o continente europeu, líderes mundiais e cientistas criaram um sistema de monitoramento para evitar que uma catástrofe voltasse...</p>
              <a href="livrosCnt2PgAutores.php">Continuar lendo...</a>
            </div>
            <figure>
              <img src="img/livros/livro2.webp" alt="Imagem da capa do livro 'Encontro com Rama'">
              <figcaption> Encontro com Rama, 1980</figcaption>
            </figure>
          </article>
        </div>
      </section>
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