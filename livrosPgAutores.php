<!DOCTYPE html>
<html lang='pt-br'>

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="img/icon.svg" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ficção cientifica</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<main>
  <div class='container'>
    <?php include 'include/nav.php';?>
    <?php include 'include/bannerLivros.php';?>
    
    <div class="row">
      <div class=" sla col-12">
        <h1>Arthur Charles Clark</h1>
      </div>
      <article class="col-xl-5 col-md-7 col-sm-12">
        <img class="brdr" src="img/livros/Arthur.webp" style="width: 100% ;" alt="">
      </article>
      <section class=" col-xl-6 col-md-12 col-sm-12">
        <p > Arthur Charles Clark foi um escritor no universo da ficção científica muito renomado, sendo autor de várias obras icônicas relacionadas à ficção. Suas histórias eram tão interessantes que cativaram milhões de autores pelo mundo, que ficavam e ficam encantados com suas críticas sociais cobertas por pura metáfora. Clark era, também, um membro da British Interplanetary Society, em 1945 ele criou o princípio da comunicação por satélite que é usado hoje, ele tinha uma sonda espacial com o nome de seu trabalho principal, ele tinha um asteroide com o nome dele, e não era suficiente, uma espécie de dinossauro também recebeu o nome dele.</p> 
        <p>Quando falamos de ficção científica, Arthur C. Clarke já tem credenciais demais para justificar um local de referência. Não foram apenas os escritos de Arthur C. Clarke que fizeram dele a voz da ciência, mas todo seu trabalho duro e, é claro, seus livros icônicos nesse universo.</p>
      </section>
    </div>
      <div class="sla row justify-content-center"> 
        <h2 class="col-12 justify-content-center" style="text-align:center ;"> Principais produções </h2>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
        <a class="col" href="livrosCnt1PgAutores.php">
          <img class="brdr"src="img/livros/OdisseiA.webp" alt="Imagem da capa do livro 'Uma Odisseia no Espaço'">
          <h3 class="br"> Odisseia no espaço </h3>
          </a>
        </section>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
        <a class="col" href="livrosCnt2PgAutores.php">
          <img class="brdr" src="img/livros/livro2.webp" alt="Imagem da capa do livro 'Encontro com Rama'">
          <h3 class="br">Encontro com Rama </h3>
          </a>
        </section>
        <section class="mud principais brd col-xl-3 col-md-5 col-sm-12 justify-content-center border">
        <a class="col" href="livrosCnt3PgAutores.php">
          <img class="brdr" src="img/livros/Fim.webp" alt="Imagem da capa do livro 'O fim da Infância'">
          <h3 class="br"> O Fim da Infância </h3>
          </a>
        </section> 
    </div>

    <div>
      <h3 class="titulos">Outro Autor</h3>
    </div>
    <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <section class="noticia rounded-3  border d-flex align-items-center">
          <div class="noticiaSeila d-flex flex-column">
            <h3>George Orwell</h3>
            <small>sobre o autor</small>
            <p>George Orwell foi considerado o maior cronista do século xx, já devem imaginar o porquê, né? É muita criatividade, critica social e ficção científica misturada em suas obras, o que as deixam...</p>
            <a href="livrosPgAutores2.php"> Continuar lendo...</a>
          </div>
          <img src="img/livros/george2.webp" alt="Imagem do autor George Orwell">
        </section>
    </div>
</div>
<div class='config bg-secondary mt-5 mb-5 '>
      <h2 class='py-5 titulo'>Notícias</h2>
</div>
<div class='container'>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/noticiaAnimacao1.php';?>
        <?php include 'include/noticiaFilme2.php';?>
      </div>
      <div class="d-flex justify-content-xl-around flex-md-wrap flex-xl-nowrap flex-lg-nowrap flex-sm-wrap flex-wrap justify-content-md-center justify-content-sm-center mt-4 noticiaContainer">
        <?php include 'include/livrosNoticia1.php';?>
        <?php include 'include/noticiaAnimacao3.php';?>
      </div>
</div>

    <?php include 'include/footer.php';?>
  </main>

  <script src="js/script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>