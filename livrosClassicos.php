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

      <div class=" sla row justify-content-center ">
        <article class=" col-xl-5 col-md-6 col-sm-12">
          <div class="mud bordas">
            <a href="livrosPgClas2.php">
              <h2 class="titulos">Duna</h2>
              <img class="brdr" src="img/livros/imgs1(5).webp" alt="Imagem da capa do livro 'Duna', em um deserto">
              <p class="br">Duna conta a história de Paul Atreides, jovem talentoso e brilhante que nasceu com um destino grandioso...</p>
            </a>
          </div>
        </article>
        <article class="col-xl-5 col-md-6 col-sm-12">
          <div class="mud bordas">
            <a href="livrosPgClas.php">
              <h2 class="titulos">Fahrheint</h2>
              <img class="brdr" src="img/livros/Fahrheint.webp" alt="Imagem da capa do livro 'Fahrheit', vermelho e e preto representando o fogo.">
              <p class="br">Na cidade do futuro, que se apresenta totalmente controlada pelo governo, havia uma lenda de que...</p>
            </a>
          </div>
        </article>
      </div>
      <div class="sla row justify-content-center ">
        <article class="  col-xl-5 col-md-6 col-sm-12">
          <div class="mud bordas">
            <a href="livrosPgClas3.php">
              <h2 class="titulos">Neuromancer</h2>
              <img class="brdr" src="img/livros/imgs1(4).webp" alt="Imagem da capa do livro 'Neuromancer', com cores fortes(rosa, amarelo) e referências ao ciberpunk">
              <p class="br"> Neuromancer conta a história de Case, um cowboy do ciberespaço. Este livro é pioneiro no movimento ciberpunk...</p>
            </a>
          </div>
        </article>
        <article class=" col-xl-5 col-md-6 col-sm-12">
          <div class="mud bordas">
            <a href="livrosPgClas4.php">
              <h2 class="titulos">Eu, robô</h2>
              <img class="brdr" src="img/livros/imgs1(3).webp" alt="Imagem minimalista do livro 'eu, robô.'">
              <p class="br">Um dos maiores clássicos da literatura de ficção científica, Eu, Robô, escrito por Isaac Asimov, é um conjunto...</p>
            </a>
          </div>
        </article>
      </div>
    </div>

    <div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Notícias</h2>
    </div>

    <div class="container">
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao1.php'; ?>
        <?php include 'include/noticiaFilme2.php'; ?>
      </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/livrosNoticia1.php'; ?>
        <?php include 'include/noticiaAnimacao3.php'; ?>
      </div>
    </div>
    <?php include 'include/footer.php'; ?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>